<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use Auth;
use App\Cart;
use App\Checkout;
use AfricasTalking\SDK\AfricasTalking;

class CartsController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
{
    $this->middleware('auth');
}
    public function index()
    {
        $user_id = Auth::user()->id;
        $cart = Cart::all();
        return view('pages.cart')
        ->with('cart',$cart)
        ->with('user_id',$user_id);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function addcheckout(Request $request)
    {
        
        $this->validate($request,[
            'productsname'=>'required',
            'productsdescription'=>'required',
            'productsleastprice'=>'required',
            'productsimage'=>'required',
            'productsuser_id'=>'required',
            'productsvendor'=>'required'
        ]);
        
        $post = new Checkout;
        $post->productsname = $request->input('productsname');
        $post->productsdescription = $request->input('productsdescription');
        $post->productsleastprice = $request->input('productsleastprice');
        $post->productsimage = $request->input('productsimage');
        $post->productsuser_id = $request->input('productsuser_id');
        $post->productsvendor = $request->input('productsvendor');
        $post->save();
         $username = 'muhz';
        $apiKey = '9e872c1f57dbdaad26564f5026805050fd012475f8ae5d5efdaceb9c2ca29725';

        $AT = new AfricasTalking($username, $apiKey);
        
        $sms = $AT->sms();
    
        try {
            $result = $sms->send([
                'to'      => '+254718139814',
                'message' => '$request->input("productsdescription"),$request->input("productsleastprice");'
            ]);
                
            print_r($result);
        } catch (Exception $e) {
            echo "Error: ".$e.getMessage();
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,
            [
            'productsname'=>'required',
            'productsdescription'=>'required',
            'productsvendor'=>'required',
            'productsleastprice'=>'required'
            ]);
        $post = new Cart;
        $post->productsname = $request->input('productsname');
        $post->productsdescription = $request->input('productsdescription');
        $post->productsvendor = $request->input('productsvendor');
        $post->productsimage = $request->input('productsimage');
        $post->productsleastprice = $request->input('productsleastprice');
        $post->user_id = Auth::user()->id;
        $post->save();
        $user_id = Auth::user()->id;
        $cart = Cart::all();
        $username = 'muhz';
        $apiKey = '9e872c1f57dbdaad26564f5026805050fd012475f8ae5d5efdaceb9c2ca29725';

        $AT = new AfricasTalking($username, $apiKey);
        
        $sms = $AT->sms();
    
        try {
            $result = $sms->send([
                'to'      => '+254718139814',
                'message' => 'A new order has been generated.'
            ]);
                
            print_r($result);
        } catch (Exception $e) {
            echo "Error: ".$e.getMessage();
        }
        return view('pages.cart')
        ->with('cart',$cart)
        ->with('user_id',$user_id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
}
