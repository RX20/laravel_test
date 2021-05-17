<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TestsController extends Controller
{
    public function one(){
        $results=DB::table('products')->orderBy('id','DESC')->get();
        
        
       
        return view('tests.one',[
            'foo' => 'bar1',
            'haystack' => 'needle',
        ]);
    }
    public function two(){

        return view('tests.two',[
            'foo' => 'bar2',
            'haystack' => 'needle2',
        ]);
    }

}
