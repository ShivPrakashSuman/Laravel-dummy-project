<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\orderModel;
use App\Models\User;
class orderController extends Controller
{
    public function index(Request $request)
    {
        $limit = $request->limit?$request->limit:5; 
        $orderBy = $request->orderBy?$request->orderBy:'id';
        $orderType = $request->orderType?$request->orderType:'ASC'; 
        $result = orderModel::sort($orderBy, $orderType)->filter($request->all())->paginate($limit);
        return view('pages.order.index')->with('data', $result)->with('orderType',($orderType == 'asc')?'desc':'asc');
    } 

    public function create(){
        $user = User::all();
        $status = array('pending','process','deliver','cancel');
        return view('pages.order.add')->with('status', $status)->with('user', $user);
    }
    public function store(Request $request){
        $validated = $request->validate([
            'user_id'=> 'required',
            'address_id'=> 'required',
            'product_id'=> 'required',
            'quantity'=> 'required',
            'price'=> 'required',
            'status'=> 'required'
        ]);

        $data = array(
            'user_id'=> $request['user_id'],
            'address_id'=> $request['address_id'],
            'product_id'=> $request['product_id'],
            'quantity'=> $request['quantity'],
            'price'=> $request['price'],
            'status'=> $request['status']
        );
        $result = orderModel::create($data);
        return redirect()->back();
    }

    public function edit(string $id)
    {
        $user = User::all();
        $data = orderModel::find($id); 
        $status = array('pending','process','deliver','cancel');
        return view('pages.order.edit', compact('status'))->with('data', $data)->with('user', $user);
    }
    
    public function update(Request $request, string $id)
    {
        $result = orderModel::find($id);
        $result->user_id = $request->user_id;
        $result->address_id = $request->address_id;
        $result->product_id = $request->product_id;
        $result->quantity = $request->quantity;
        $result->price = $request->price;
        $result->status = $request->status;
        $result->save();
        return redirect()->to('/order');
    }

    public function destroy(string $id)
    {
        $rowDelete = orderModel::find($id); 
        $rowDelete->delete(); //delete the client
        return redirect()->back();
    }
}
