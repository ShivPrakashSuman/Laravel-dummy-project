<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\categoryModel;
use App\Models\File;

class categoryController extends Controller
{
    public function index(Request $request)
    {
        $limit = $request->limit?$request->limit:2; 
        $orderBy = $request->orderBy?$request->orderBy:'id'; 
        $orderType = $request->orderType?$request->orderType:'asc'; 
        $result = categoryModel::sort($orderBy, $orderType)->filter($request->all())->paginate($limit);
                
        return view('pages.category.index')->with('data', $result)->with('orderType', ($orderType == 'asc')?'desc':'asc');
    }

    public function create()
    {
        return view('pages.category.add');
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
            $filePath = $request->file('image')->storeAs('uploads/category', $fileName, 'public');
        }
        $data = array(
            "image" => $fileName,
            "title" => $request['title'],
            "description" => $request['description'],
            "status" => $request['status']
        );
        $result = categoryModel::create($data);
        return redirect()->back();
    }

    public function edit(string $id)
    {
        $data = categoryModel::find($id); 
        return view('pages.category.edit')->with('data', $data);
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
            $filePath = $request->file('image')->storeAs('uploads/category', $fileName, 'public');
        }
        $result = categoryModel::find($id);
        $result->image = $fileName;
        $result->title = $request->title;
        $result->description = $request->description;
        $result->status = $request->status;
        $result->save();
        return redirect()->to('/category');
    }

    public function destroy(string $id)
    {
        $rowDelete = categoryModel::find($id); 
        $rowDelete->delete(); //delete the client
        return redirect()->back();
    }
}
