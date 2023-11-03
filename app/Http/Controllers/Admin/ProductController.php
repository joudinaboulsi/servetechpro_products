<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Product;
use App\SectionTitles;
use App\Helpers\FileUploadHelper;

class ProductController extends Controller
{
    //

    
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $page = SectionTitles::find(1);
        $products = Product::all();
       return view('cms.products.index',compact('products','page'));
    }

    public function storePage(Request $request)
    {
        SectionTitles::find(1)->update([
            'title' => $request->title,
            'subtitle' => $request->subtitle,
        ]);

        toastr()->success('Data has been saved successfully!', 'Congrats');
        return redirect()->route('products');
    }


    public function create()
    {
        return view('cms.products.create');
    }


    
    public function store(Request $request)
    {
        // dd($request->all());
        $image = FileUploadHelper::uploadFile($request, 'image', 'assets/product/');
        $background  = FileUploadHelper::uploadFile($request, 'background', 'assets/product/');
     

        Product::create([
            'product_name' => $request->product_name,
            'desc' => $request->desc,
            'title_details' => $request->title_details,
            'image' => $image,
            'background' => $background,
            'subtitle_details' => $request->subtitle_details,
            'desc1' => $request->desc1,
            'tag1' => $request->tag1,
            'tag2' => $request->tag2,
            'tag_p1' => $request->tag_p1,
            'tag_p2' => $request->tag_p2,
            'title_desc2' => $request->title_desc2,
            'desc2' => $request->desc2,
        ]);

        toastr()->success('Data has been saved successfully!');
        return redirect()->route('products');
    }

    
    public function update(Request $request, $id)
    {
        $product = Product::find($id);

        $image = FileUploadHelper::uploadFile($request, 'image', 'assets/product/');
        if($image!=null)
            $product->update(['image' => $image]);
        $background = FileUploadHelper::uploadFile($request, 'background', 'assets/product/');
            if($background!=null)
                $product->update(['background' => $background]);

        $product->update([
            'product_name' => $request->product_name,
            'desc' => $request->desc,
            'title_details' => $request->title_details,
            'subtitle_details' => $request->subtitle_details,
            'desc1' => $request->desc1,
            'tag1' => $request->tag1,
            'tag2' => $request->tag2,
            'tag_p1' => $request->tag_p1,
            'tag_p2' => $request->tag_p2,
            'title_desc2' => $request->title_desc2,
            'desc2' => $request->desc2,
        ]);

        toastr()->success('Data has been saved successfully!');
        return redirect()->route('products');
    }

    public function edit($id)
    {
        $product = Product::find($id);
        return view('cms.products.edit', compact('product'));
    }


    public function delete($id)
    {
        
        Product::find($id)->delete();
        toastr()->success('Data has been deleted successfully!');
        return redirect()->route('products');
    }




}
