<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    function viewListing($category,$layout){
        
        if($layout=='list'){
            //check the category and get listing from db >> then pass it to the view
            return view('list-layout');
        }else{
            //check the category and get listing from db >> then pass it to the view
            return view('grid-layout');
        }
    }
}
