<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Category; // include the category model not product if you want use Category table


class CategoryController extends Controller
{
    //initial controller is blank
    public function create(){
        return view('insertCategory');
    }
    //if(isset($_POST['ID'])){ $id=$_POST['ID'];}
    // $sql='insert into categories values ()';
    // $query=mysqli_query($sql);
    //


    public function storecategory()
    {      
        $r=request(); 
        $addCategory=Category::create([    
            'name'=>$r->category, 
        ]);
        
        return redirect()->back();
    }

    public function deleteCategory(Request $request)
    {
       $category= Category::findOrFail($request->category);
       \App\Product::where('categoryID', $category->id)->delete();
       $category->delete() ;

       return \back();
    }
    

}
