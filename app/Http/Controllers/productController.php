<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\productModel;
use App\Models\brandModel;
use App\Models\categoryModel;

class productController extends Controller
{

    public function index(Request $request)
    {
        $limit = $request->limit?$request->limit:5; 
        $orderBy = $request->orderBy?$request->orderBy:'id';
        $orderType = $request->orderType?$request->orderType:'ASC'; 
        $result = productModel::sort($orderBy, $orderType)->filter($request->all())->with('getCategory')->with('getBrand')->paginate($limit);
        return view('pages.product.index')->with('data', $result)->with('orderType',($orderType == 'asc')?'desc':'asc');
    }

    public function create()
    {
        $brand = brandModel::all(); 
        $category = categoryModel::all(); 
        return view('pages.product.add')->with('brand', $brand)->with('category', $category);
    }

    public function store(Request $request)
    {
        $request->validate([
            'brand_id' => 'required',
            'category_id' => 'required',
            'primary_image' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
            'secondary_image' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
            'title' => 'required',
            'description' => 'required',
            'price' => 'required',
            'quantity' => 'required',
            'sell_price' => 'required',
            'status' => 'required'
        ]);
        if($request->file()) {
            $fileName1 = time().'_'.$request->primary_image->getClientOriginalName();
            $fileName2 = time().'_'.$request->secondary_image->getClientOriginalName();
            $request->file('primary_image')->storeAs('uploads/product', $fileName1, 'public');
            $request->file('secondary_image')->storeAs('uploads/product', $fileName2, 'public');
        }
        $data = array(
            "brand_id" => $request['brand_id'],
            "category_id" => $request['category_id'],
            "primary_image" => $fileName1,
            "secondary_image" => $fileName2,
            "title" => $request['title'],
            "description" => $request['description'],
            "price" => $request['price'],
            "quantity" => $request['quantity'],
            "sell_price" => $request['sell_price'],
            "status" => $request['status']
        );
        $result = productModel::create($data);
        return redirect()->back();
    }

    public function edit(string $id)
    {
        $brand = brandModel::all(); 
        $category = categoryModel::all(); 
        $data = productModel::find($id); 
        return view('pages.product.edit')->with('data', $data)->with('brand', $brand)->with('category', $category);
    }

    public function update(Request $request, string $id)
    {
        $request->validate([
            'brand_id' => 'required',
            'category_id' => 'required',
            'primary_image' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
            'secondary_image' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
            'title' => 'required',
            'description' => 'required',
            'price' => 'required',
            'quantity' => 'required',
            'sell_price' => 'required',
            'status' => 'required'
        ]);
        if($request->file()) {
            $fileName1 = time().'_'.$request->primary_image->getClientOriginalName();
            $fileName2 = time().'_'.$request->secondary_image->getClientOriginalName();
            $request->file('primary_image')->storeAs('uploads/product', $fileName1, 'public');
            $request->file('secondary_image')->storeAs('uploads/product', $fileName2, 'public');
        }
        $result = productModel::find($id);
        $result->brand_id = $request->brand_id;
        $result->category_id = $request->category_id;
        $result->primary_image = $fileName1;
        $result->secondary_image = $fileName2;
        $result->title = $request->title;
        $result->description = $request->description;
        $result->price = $request->price;
        $result->quantity = $request->quantity;
        $result->sell_price = $request->sell_price;
        $result->status = $request->status;
        $result->save();
        return redirect()->to('/product');
    }

    public function delete(string $id)
    {
        $rowDelete = productModel::find($id); 
        $rowDelete->delete(); //delete the client
        return redirect()->back();
    }
}
