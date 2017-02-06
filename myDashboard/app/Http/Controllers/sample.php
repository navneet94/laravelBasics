<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class sample extends Controller
{
    //
    public function showProfile($id){
        //echo "In controller".$id;
        //query over the data here and pass the result to view in the form of array
        return View('sample',['user'=>$id]);
    }
}
