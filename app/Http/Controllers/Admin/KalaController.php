<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

use App\Models\kala;
use App\Models\images;

use DataTables;
use Validator;


class KalaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('Role');
    }

    public function index()
    {
        $products=Kala::with('Images')->get();
        // dd($products);

        return view('admin.products.products')->with('products',$products);


    }

    public function ajaxproductshow(){
        // $products=Kala::all();
        $products=Kala::with('Images')->get();

        // dd($products);

        return view('admin.products.ajaxproducts');

    }




    public function allproductdatatables(Request $request){
        // $product=Kala::all();
        $product=Kala::with('Images');

        return DataTables()->of($product)
        ->addColumn('action',function($product)
        {   $button='<button type="button" name="edit"
            id="'.$product->id.'" class="edit btn btn-primary btn-sm">Edit</button> ';
            // return $button;
            $button.='&nbsp;&nbsp;&nbsp;<button type="button" name="delete"
            id="'.$product->id.'" class="delete btn btn-danger btn-sm">Delete</button> ';
            return $button;
        })
        ->rawColumns(['action'])
        ->make(true);

        // $model = App\User::with('posts');

    return DataTables::eloquent($product)
                ->addColumn('image', function (kala $kala) {
                    return $kala->images->map(function($image) {
                        // return str_limit($image->imagename, 30, '...');
                    })->implode('<br>');
                })
                ->toJson();
    dd($product);


        return view('admin.products.ajaxproducts');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.products.addproduct');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function store(Request $request){
        $request->validate([
            'name'=>'required|unique:kala',
            'price'=>'required|digits_between:1,10',

            'num'=>'required|digits_between:1,10'




        ]);
        $product=new kala;
        $product->name=$request->get('name');
        $product->price=$request->get('price');
        $product->num=$request->get('num');
        $product->save();

        $fileimage=$request->file('imagefile');
        // dd($fileimage);
        if($fileimage){
        $imagename=$fileimage->getClientOriginalName();
        // dd($imagename);
        // $fileimage->getClientMimeType();
        // $fileimage->getClientSize();
        // $image=images::insert(['imagename'=>$imagename]);

        $fileimage->move('app-assets/img/post',$imagename);
        // $im=images::all();
        // dd($im);
        $image = new Images();
    $image->imagename = $imagename;
    $product->images()->save($image);

        }
        $products=kala::all();
        return view('admin.products.products',compact(['products']));




    }

    public function ajaxstore(Request $request)
    {
        // dd($request->get('name'));
        $rules=array(
            'name'=>'required',
            'price'=>'required',
            'num'=>'required'
        );
        $error=Validator::make($request->all(),$rules);
        if($error->fails())
        {
            return response()->json(['errors'=>$error->errors()->all()]);
        }


        $form=new kala();
        $form->name=$request->get('name');
        $form->price=$request->get('price');
        $form->num=$request->get('num');
        $form->save();

        return response()->json(['success'=>'Data added succssfully']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\kala  $kala
     * @return \Illuminate\Http\Response
     */
    // public function show($id)
    // {
    //     dd('hi');
    //     //
    // }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\kala  $kala
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // dd($id);

        $data=kala::find($id);
        return view('admin.products.editproduct')->with('product',$data);

    }
    public function ajaxedit($id)
    {

        $data=kala::find($id);
        return response()->json(['result'=>$data]);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\kala  $kala
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $id=$request->get('id');
        // dd($request->file('imagefile'));
        $request->validate([
            'name'=>'required|unique:kala,name,'.$id,
            'price'=>'required|digits_between:1,10',

            'num'=>'required|digits_between:1,10'




        ]);


        // dd($id);
        $kala=kala::find($id);
        // dd($kala);
        $kala->name=$request->get('name');
        $kala->price=$request->get('price');
        $kala->num=$request->get('num');
        $kala->save();




        $fileimage=$request->file('imagefile');
        // dd($fileimage);
        if($fileimage){
        $imagename=$fileimage->getClientOriginalName();
        // dd($imagename);
        // $fileimage->getClientMimeType();
        // $fileimage->getClientSize();
        images::insert(['imagename'=>$imagename,'kala_id'=>$id]);

        $fileimage->move('app-assets/img/post',$imagename);
        // $im=images::all();
        // dd($im);

        }
        $products=kala::all();
        return view('admin.products.products',compact(['products']));




        $rules=array(
            'name'=>'required',
            'price'=>'required',
            'num'=>'required'
        );

        $error=Validator::make($request->all(),$rules);

        if($error->fails())
        {
            return response()->json(['errors'=>$error->errors()->all()]);
        }

        $form_data=array(
            'name'=>$request->name,
            'price'=>$request->price,
            'num'=>$request->num
        );

        kala::whereId($request->hidden_id)->update($form_data);

        return response()->json(['success'=>'Data is successfuly updated']);
    }
    public function ajaxupdate(Request $request, kala $kala)
    {

        $rules=array(
            'name'=>'required',
            'price'=>'required',
            'num'=>'required'
        );

        $error=Validator::make($request->all(),$rules);

        if($error->fails())
        {
            return response()->json(['errors'=>$error->errors()->all()]);
        }

        $form_data=array(
            'name'=>$request->name,
            'price'=>$request->price,
            'num'=>$request->num
        );

        kala::whereId($request->hidden_id)->update($form_data);

        return response()->json(['success'=>'Data is successfuly updated']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\kala  $kala
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // dd($id);
        // return response()->json(['ss'=>'dd']);
        $product=kala::find($id);
        $product->delete();
        return redirect('/admin/product');

    }
}
