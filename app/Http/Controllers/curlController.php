<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class curlController extends Controller
{
    public function index(Request $request)
    {
        $word = $request->search ? $request->search : 'god';
        $url = '';
        $ch = curl_init();
        $status = 'pixabay';
        if ($request->website == 'Pixels') {
            $status = 'pexels';
            $url = "https://api.pexels.com/v1/search?query=".$word;
            $authorization = "Authorization: EFMJhQ5xOQZ8dJuM0gOIA1iMyjEmOXo68zRhyLK7Rs5ANLgFX4wKybEl"; // Prepare the authorisation token
            curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json' , $authorization )); // Inject the token into the header
        } else {
            $url = "https://pixabay.com/api/?key=33513386-f32dd1c80790a5c0fb879c517&q=" . $word . "&image_type=photo&pretty=true";
        }
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_POST, 0);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $response = curl_exec($ch);
        $err = curl_error($ch); //if you need
        curl_close($ch);

        return view('pages.cURl.index')->with('data', json_decode($response))->with('status', $status);
    }
    public function dragdrop(){
        return view('pages.jQuery-Drag-Drop.index');
    }  
}