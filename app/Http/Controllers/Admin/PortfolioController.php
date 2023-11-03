<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\PortfolioPage;
use App\PortfolioImage;
use Carbon\Carbon;

class PortfolioController extends Controller
{
    // index
    public function index()
    {
        $portfolio = PortfolioPage::where('id','1')->first();
        $portfolio_images = PortfolioImage::all();
        return view('cms.portfolio.index', compact('portfolio', 'portfolio_images'));
    }
  
    // update header
    public function updateHeader(Request $request)
    {
        PortfolioPage::where('id','1')->update([
            'title' => $request->title,
            'subtitle' => $request->subtitle,
        ]);

        toastr()->success('Data has been updated successfully!');
        return redirect()->route('portfolio');
    }

    // create
    public function create()
    {
        return view('cms.portfolio.create');
    }

    // store
    public function store(Request $request)
    {
        $newPhoto = '';
        if ($request->hasFile('image')) {
            $photo = $request->file('image');
            $newPhoto = str_replace(
                '/[^A-Za-z0-9]/',
                '-',
                time() . $photo->getClientOriginalName()
            );
            $photo->move('assets/img/portfolio', $newPhoto);
        }

        PortfolioImage::insert([
            'title' => $request->title,
            'image' => $newPhoto,
        ]);

        toastr()->success('Data has been saved  successfully!');
        return redirect()->route('portfolio');
    }

    // edit
    public function edit($id)
    {
        $pImage = PortfolioImage::where('id',$id)->first();
        return view('cms.portfolio.edit', compact('pImage'));
    }

    // update
    public function update(Request $request, $id)
    {
        $pImage = PortfolioImage::where('id',$id)->first();

        $newPhoto = '';
        if ($request->hasFile('image')) {
            $photo = $request->file('image');
            $newPhoto = str_replace(
                '/[^A-Za-z0-9]/',
                '-',
                time() . $photo->getClientOriginalName()
            );
            $photo->move('assets/img/portfolio', $newPhoto);
        }
        else {
            $newPhoto = $pImage->image;
        }

        PortfolioImage::where('id', $id)->update([
            'title' => $request->title,
            'image' => $newPhoto,
            'updated_at' => Carbon::now(),

        ]);

        toastr()->success('Data has been updated successfully!');
        return redirect()->route('portfolio');
    }

    // delete
    public function delete($id)
    {
        PortfolioImage::find($id)->delete();
        toastr()->success('Data has been deleted successfully!');
        return redirect()->route('portfolio');
    }
}
