<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Excel;
use App\Exports\userExport;

class userController extends Controller
{
    public function index(Request $request)
    {
       return view('pages.user.index');
    }
    public function api(Request $request)
    {
        $response = array('status'=>false, 'message'=>'oop\'s something went wrong', 'data'=>null);
            $limit = $request->limit?$request->limit:5; 
            $orderBy = $request->orderBy?$request->orderBy:'id'; 
            $orderType = $request->orderType?$request->orderType:'asc'; 
            $result = User::sort($orderBy, $orderType)->filter($request->all())->paginate($limit);
            $response['data']= $result;
            $response['message'] =  "Fetch Data Success";
            $response['status'] = true;
		return $response;
		//die;
        // print_r($result);die;
        //echo json_encode($response);
        //print_r(Auth::user());die;
        // $limit = $request->limit?$request->limit:5; 
        // $orderBy = $request->orderBy?$request->orderBy:'id'; 
        // $orderType = $request->orderType?$request->orderType:'asc'; 
        // $result = User::sort($orderBy, $orderType)->filter($request->all())->paginate($limit);
        // return view('pages.user.index')->with('data', $result)->with('orderType', ($orderType == 'asc')?'desc':'asc');
    }
  
    public function edit(string $id)
    {
        $data = User::find($id); 
        return view('pages.user.edit')->with('data', $data);
    }

    public function update(Request $request, string $id)
    {
       $result = User::find($id);
        $result->name = $request->name;
        $result->email = $request->email;
        $result->password = $request->password;
        $result->mobile = $request->mobile;
        $result->pincode = $request->pincode;
        $result->address = $request->address;
        $result->save();
        return redirect()->to('/user');
    }

    public function delete(string $id)
    {
        
        $rowDelete = User::find($id); 
        $rowDelete->delete(); //delete the client
        return redirect()->back();
    }

    public function export()
    {
        return Excel::download(new userExport, 'users.xlsx');
    }
    public function import()
    {
        return view('pages.user.import');
    }

    public function importStore(Request $request)
    {
        $data = $this->csvToArray(request()->file('file'));
        // print_r($data);die;
        User::insert($data);
        return redirect()->back();
    }

    function csvToArray($filename = '', $delimiter = ',')
    {
        if (!file_exists($filename) || !is_readable($filename))
            return false;
        $header = null;
        $data = array();
        if (($handle = fopen($filename, 'r')) !== false)
        {
            while (($row = fgetcsv($handle, 1000, $delimiter)) !== false)
            {
                if (!$header)
                    $header = $row;
                else
                    $data[] = array_combine($header, $row);
            }
            fclose($handle);
        }
        return $data;
    }
}
