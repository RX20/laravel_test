<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Story;
class StoriesController extends Controller
{
    public function index(){
        $userId=auth()->user()->id;
        $stories=Story::where('user_id',$userId)->orderBy('id','DESC')->paginate(3);
        
        return view('stories.index',['stories'=>$stories]);        
    }

    public function show(Story $story){
        
        return view('stories.show',['story'=>$story]);  
            
    }
}
