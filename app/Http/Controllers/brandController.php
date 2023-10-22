<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\brandModel;
use App\Models\productModel;

class brandController extends Controller
{
    public function index(Request $request){
        $limit = $request->limit?$request->limit:2;
        $orderBy = $request->orderBy?$request->orderBy:'id';
        $orderType = $request->orderType?$request->orderType:'asc';
        $result = brandModel::sort($orderBy, $orderType)->filter($request->all())->paginate($limit);
        return view('pages.brand.index')->with('data',$result)->with('orderType', ($orderType == 'asc')? 'desc':'asc');
    }

    public function create(){ 
        return view('pages.brand.add');
    }

    public function store(Request $request)
    {
        $request->validate([
            'image' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
            'title' => 'required',
            'description' => 'required',
            'status' => 'required'
        ]);
        if($request->file()) {
            $fileName = time().'_'.$request->image->getClientOriginalName();
            $filePath = $request->file('image')->storeAs('uploads/brand', $fileName, 'public');
        }
        $data = array(
            "image" => $fileName,
            "title" => $request['title'],
            "description" => $request['description'],
            "status" => $request['status']
        );
        $result = brandModel::create($data);
        return redirect()->back();
    }

    public function edit(string $id)
    {
        $data = brandModel::find($id); 
        return view('pages.brand.edit')->with('data', $data);
    }

    public function update(Request $request, string $id)
    {
        $request->validate([         
            'title' => 'required',
            'description' => 'required',
            'status' => 'required',
            'image' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048'
        ]);

        if($request->file()) {
            $fileName = time().'_'.$request->image->getClientOriginalName();
            $filePath = $request->file('image')->storeAs('uploads/brand', $fileName, 'public');
        }
        $result = brandModel::find($id);
        $result->image = $fileName;
        $result->title = $request->title;
        $result->description = $request->description;
        $result->status = $request->status;
        $result->save();
        return redirect()->to('/brand');
    }


    public function destroy(string $id)
    {
        $rowDelete = brandModel::find($id); 
        $rowDelete->delete(); //delete the client
        return redirect()->back();
    }

    public function view( string $id){
        // $result = brandModel::find($id);->with('similarProduct', $similarProduct)
        // $similarProduct = productModel::where('brand_id', $id)->get();
        $result = brandModel::where('id', $id)->with(['getProduct'])->first();
        return view('pages.brand.view')->with('data', $result);
    }
}
