<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Storage;

use DB;
use App\Category;
use App\Product;

Use Session;

class ProductController extends Controller
{
   
    public function __construct()
    {
        $this->middleware('auth');
        
    }

    public function create(){
        return view('insertProduct') ->with('categories',Category::all());
    }
    //Category::all() means "select * from category"
    public function store(){
        
        $r=request();
        //dd($r->all()); 
        ini_set("memory_limit", "100M");
        ini_set('post_max_size', '50M');
        ini_set('upload_max_filesize', '50M');
        $final_path = 'storage/images/default.png';
        if ($r->hasFile('photo'))
        {
            $file = $r->file('photo');
            $allowedfileExtension = ['jpeg', 'jpg', 'png', 'gif'];
            $extension = $file->getClientOriginalExtension();
            $check = in_array($extension, $allowedfileExtension);
            $filename = $file->getClientOriginalName();
            $path = Storage::disk('public')->put('images/', $file);
            $final_path = 'storage/' . $path;
        }
        

        $addProduct=Product::create([    
            'name'=>$r->name,
            'description'=>$r->desc, 
            'price'=>$r->price,
            'image' => $final_path,                 
            'quantity'=>$r->Quantity, 
            'categoryID'=>$r->category,             
        ]);
        Session::flash('success',"Product create succesful!");        
        //Return redirect()->route('all.product');
        return redirect()->back();
    }

    public function show(){
        
        //$products=Product::all();
        $products=DB::table('products')
        ->leftjoin('categories', 'categories.id', '=', 'products.categoryID')
        ->select('categories.name as catname','categories.id as catid','products.*')
        //->get();
        ->paginate(3);       
        return view('showproduct')->with('products',$products);
    }

    
    public function delete($id){
       
        $products =Product::find($id);
        $products->delete();
        return redirect()->route('all.product');

    }

    public function edit($id){
       //select * from Products where id='$id'
       
        $products =Product::all()->where('id',$id);
        
        return view('editProduct')->with('products',$products)
                                ->with('categories',Category::all());
    }

    public function update(){
        $r=request();//retrive submited form data
        $products =Product::find($r->ID);  //get the record based on product ID      
        if($r->file('product-image')!=''){
            $image=$r->file('product-image');        
            $image->move('images',$image->getClientOriginalName());                   
            $imageName=$image->getClientOriginalName(); 
            $products->image=$imageName;
            }         
        $products->name=$r->title;
        $products->description=$r->Description;
        $products->price=$r->price;
        $products->quantity=$r->Quantity;
        $products->categoryID=$r->category_id;
        $products->save();
        return redirect()->back();
        //return redirect()->route('all.product');
    }

    public function search(){
        $r=request();//retrive submited form data
        $keyword=$r->searchProduct;
        $products =DB::table('products')
        ->leftjoin('categories', 'categories.id', '=', 'products.categoryID')
        ->select('categories.name as catname','categories.id as catid','products.*')
        ->where('products.name', 'like', '%' . $keyword . '%')
        ->orWhere('products.description', 'like', '%' . $keyword . '%')
        //->get();
        ->paginate(3);        
        return view('showProduct')->with('products',$products);

    }


    public function GetProduct(Request $request)
    {
        $products=Product::all();
        return response()->json($products);
    }

    
}
