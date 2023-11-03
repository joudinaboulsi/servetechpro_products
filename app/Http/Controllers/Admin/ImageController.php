<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Helpers\FileUploadHelper;
use App\Image;
use App\Product;
class ImageController extends Controller
{
    //
        
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index($id)
    {
     

        $sliders = Image::with('product')->where('product_id',$id)->get();

       return view('cms.images_product.index',compact('sliders','id'));
    }

    public function create($id)
    {
        $product= Product::find($id);
        return view('cms.images_product.create',compact('product'));
    }

     
    public function store(Request $request,$id)
    {
    
        $product_id = Product::find($id);
        $image = FileUploadHelper::uploadFile($request, 'image', 'assets/products/');
        Image::create([
            'alt_image' => $request->alt_image,
            'image' => $image,
            'product_id'=> $product_id->id,
        ]);

        toastr()->success('Data has been saved successfully!');
        return redirect()->route('imagesSlider',['id' => $id]);
    }

    public function edit($id,$image_id)
    {
        $product = Product::find($id);
        $slider= Image::where('id',$image_id)->first();
    
        return view('cms.images_product.edit',compact('image_id','slider','product'));
    }


    public function update(Request $request,$id, $product_id)
    {
    //    dd($id);
        $product = Product::find($product_id);
        $slider= Image::find($id);
        
        $image = FileUploadHelper::uploadFile($request, 'image', 'assets/products/');
        if($image!=null)
        $slider->update(['image' => $image]);

        $slider->update([
            'alt_image' => $request->alt_image,
            'product_id'=> $product->id,
        ]);

        toastr()->success('Data has been saved successfully!');
        return redirect()->route('imagesSlider',['id' => $product_id]);
    }

    public function delete($product_id,$id)
    {
        // dd($id);
        Image::find($id)->delete();
        toastr()->success('Data has been deleted successfully!');
        return redirect()->route('imagesSlider',['id' => $product_id]);
    }

}
