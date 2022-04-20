<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Category;
class CategoryController extends Controller
{
    

    public function addmain(){
         return view('admin.category.add_main_category');
    }

    public function storemain(Request $request){
        
        $data = new Category();
        $data->name = $request->name;
        $data->status = 1;
        $data->save();
        return redirect()->back();
    }

    public function viewmain(){
        return view('admin.category.view_main_category');
        
    }










}
