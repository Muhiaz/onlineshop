<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mainproduct;
use App\Agriculturalproduct;
use App\Featuredproduct;
use Auth;
use AfricasTalking\SDK\AfricasTalking;

class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $posts = Mainproduct::all();
        $posts1 = Agriculturalproduct::all();
        $posts2 = Featuredproduct::all();
        return view('pages.home')
        ->with('posts',$posts)
        ->with('posts1',$posts1)
        ->with('posts2',$posts2);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       return view('pages.create'); 
    }
    public function featuredproducts()
    {
        $post = Mainproduct::all();
       return view('pages.featuredproducts'); 
    }
    public function individualfeaturedproduct($id)
    {
        $posts = Featuredproduct::find($id);
        $all = Featuredproduct::all();
       return view('pages.individualfeaturedproduct')
       ->with('posts',$posts) 
       ->with('all',$all); 
    }
    public function getUsers(){  
        $employees = Mainproduct::all(); 
     // Fetch all records
     $userData['data'] = $employees;

     echo json_encode($userData);
     exit;
  }
    public function mainproducts()
    {
        $post = Agriculturalproduct::all();
       return view('pages.mainproducts'); 
    }
     public function individualmainproduct($id)
    {
        $posts = Mainproduct::find($id);
        $all = Mainproduct::all();
       return view('pages.individualmainproduct')
       ->with('posts',$posts)
       ->with('all',$all); 
    }
    public function agriculturalproducts()
    {
        $post = Featuredproduct::all();
       return view('pages.agriculturalproducts'); 
    }
     public function individualagriculturalproduct($id)
    {
        $posts = Agriculturalproduct::find($id);
        $all = Agriculturalproduct::all();
       return view('pages.individualagriculturalproduct')
       ->with('posts',$posts)
       ->with('all',$all); 
    }
    public function addfeaturedproducts(Request $request)
    {
        if ($request->hasFile('productsimage')) {
            $filenamewithExt = $request->file('productsimage')->getClientOriginalName();
            $filename = pathinfo($filenamewithExt,PATHINFO_FILENAME);
            $filenameExt = $request->file('productsimage')->getClientOriginalExtension();
            $filenameToStore = $filenamewithExt.'_'.time().'.'.$filenameExt;
            $path = $request->file('productsimage')->storeAs('public/product_images',$filenameToStore);
        }
        else{
            $filenameToStore = 'noimage.jpg';
        }
        $this->validate($request,[
            'productsname'=>'required',
            'productsdescription'=>'required',
            'productsvendor'=>'required',
            'productsimage'=>'image|required|max:1999',
            'productsleastprice'=>'required'
        ]);
        $post = new Featuredproduct;
        $post->productsname = $request->input('productsname');
        $post->productsdescription = $request->input('productsdescription');
        $post->productsvendor = $request->input('productsvendor');
        $post->productsimage = $filenameToStore;
        $post->productsleastprice = $request->input('productsleastprice');
        $post->save();
       return view('pages.featuredproducts'); 
    }
    public function addmainproducts(Request $request)
    {
         if ($request->hasFile('productsimage')) {
            $filenamewithExt = $request->file('productsimage')->getClientOriginalName();
            $filename = pathinfo($filenamewithExt,PATHINFO_FILENAME);
            $filenameExt = $request->file('productsimage')->getClientOriginalExtension();
            $filenameToStore = $filenamewithExt.'_'.time().'.'.$filenameExt;
            $path = $request->file('productsimage')->storeAs('public/product_images',$filenameToStore);
        }
        else{
            $filenameToStore = 'noimage.jpg';
        }
        $this->validate($request,[
            'productsname'=>'required',
            'productsdescription'=>'required',
            'productsvendor'=>'required',
            'productsimage'=>'image|required|max:1999',
            'productsleastprice'=>'required'
        ]);
        $post = new Mainproduct;
        $post->productsname = $request->input('productsname');
        $post->productsdescription = $request->input('productsdescription');
        $post->productsvendor = $request->input('productsvendor');
        $post->productsimage = $filenameToStore;
        $post->productsleastprice = $request->input('productsleastprice');
        $post->save();
       return view('pages.mainproducts'); 
    }
    public function addagriculturalproducts(Request $request)
    {
         if ($request->hasFile('productsimage')) {
            $filenamewithExt = $request->file('productsimage')->getClientOriginalName();
            $filename = pathinfo($filenamewithExt,PATHINFO_FILENAME);
            $filenameExt = $request->file('productsimage')->getClientOriginalExtension();
            $filenameToStore = $filenamewithExt.'_'.time().'.'.$filenameExt;
            $path = $request->file('productsimage')->storeAs('public/product_images',$filenameToStore);
        }
        else{
            $filenameToStore = 'noimage.jpg';
        }
        $this->validate($request,[
            'productsname'=>'required',
            'productsdescription'=>'required',
            'productsvendor'=>'required',
            'productsimage'=>'image|required|max:1999',
            'productsleastprice'=>'required'
        ]);
        $post = new Agriculturalproduct;
        $post->productsname = $request->input('productsname');
        $post->productsdescription = $request->input('productsdescription');
        $post->productsvendor = $request->input('productsvendor');
        $post->productsimage = $filenameToStore;
        $post->productsleastprice = $request->input('productsleastprice');
        $post->save();
       return view('pages.agriculturalproducts'); 
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'name'=>'required',
            'description'=>'required',
            'price'=>'required',
            'discount'=>'required',
            'product_image'=>'image|required|max:1999'
        ]);
        if ($request->hasFile('product_image')) {
            $filenamewithExt = $request->file('product_image')->getClientOriginalName();
            $filename = pathinfo($filenamewithExt,PATHINFO_FILENAME);
            $filenameExt = $request->file('product_image')->getClientOriginalExtension();
            $filenameToStore = $filename.'_'.time().'_'.$filenameExt;
            $path = $request->file('product_image')->storeAs('public/product_images',$filenameToStore);
        }
        else{
            $filenameToStore = 'noimg.jpg';
        }
        $post = new Post;
        $post->name = $request->input('name');
        $post->description = $request->input('description');
        $post->price = $request->input('price');
        $post->discount = $request->input('discount');
        $post->product_image = $filenameToStore;
        $post->save();
        

        return redirect('/posts')->with('success','Product Added Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $posts = Mainproduct::find($id);
        $posts1 = Agriculturalproduct::find($id);
        $posts2 = Featuredproduct::find($id);
        return view('pages.individualmainproduct')
        ->with('posts',$posts)
        ->with('posts1',$posts1)
        ->with('posts2',$posts2);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    public function blog()
    {
        return view('pages.blog');
    }
}
