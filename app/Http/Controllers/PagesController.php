<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\HomeSlider;
use App\About;
use App\PortfolioPage;
use App\PortfolioImage;
use App\Client;
use App\Contact;
use App\Footer;
use App\Service;
use App\SectionOne;
use App\SectionTwo;
use App\Settings;
use App\Page;
use App\Product;
use App\Image;
use App\ServicePage;
use App\SectionTitles;
use SEO;
use SEOMeta;
use Mail;


class PagesController extends Controller
{

    public function __construct()
    {
        app()->singleton('contact', function () {
            $settings = Settings::where('id', '1')->get();
            return $settings[0];
        });
    }
    


    //home pgae
    public function home()
    {
        $page_data = Page::where('id', '1')->get();

        //get url of the page
        $url = url()->current();
        SEO::setTitle($page_data[0]->meta_title, false);
        SEO::setDescription($page_data[0]->meta_description, false);
        SEOMeta::setKeywords($page_data[0]->meta_keywords, false);
        SEO::opengraph()->setUrl($url);
        SEO::setCanonical($url);
        SEO::opengraph()->addProperty('type', 'article');

        if ($page_data[0]->image != NULL) // check if we have an OG image
            SEO::addImages(getenv('APP_URL') . '/assets/img/page/' . $page_data[0]->image);

        $home_slides = HomeSlider::all();
        $about = About::all();
        $portfolio = PortfolioPage::get();
        $portfolio_image = PortfolioImage::get();
        $clients = Client::get();
        $contact = Contact::get();
        $footer = Footer::get();
        $services_images = Service::get();
        $services_pages = ServicePage::get();
        $section_one = SectionOne::get();
        $section_two = SectionTwo::get();
        $settings = Settings::get();
        $products = Product::all();

         $section = SectionTitles::where('id', '1')->get();

        return view('front.home', compact('page_data', 'home_slides', 'about', 'portfolio', 'portfolio_image', 'clients', 'contact', 'footer', 'services_images', 'section_one', 'section_two', 'settings', 'services_pages',
        'products','section'));
    }

    public function productDetails($id)
    {

        $page_data = Page::where('id', '2')->get();
        //get url of the page
        $url = url()->current();
        SEO::setTitle($page_data[0]->meta_title, false);
        SEO::setDescription($page_data[0]->meta_description, false);
        SEOMeta::setKeywords($page_data[0]->meta_keywords, false);
        SEO::opengraph()->setUrl($url);
        SEO::setCanonical($url);
        SEO::opengraph()->addProperty('type', 'article');

        if ($page_data[0]->image != NULL) // check if we have an OG image
            SEO::addImages(getenv('APP_URL') . '/assets/img/page/' . $page_data[0]->image);

        
        $footer = Footer::get();
        $product = Product::where('id',$id)->with('images')->get();
        $products = Product::where('id', '!=', $id)->get();
        $section = SectionTitles::where('id', '1')->get();

        return view('front.product-details', compact('footer','product','products','page_data','section'));
    }

    //Get the contact form details and send the mail
    public function getContactForm(Request $request)
    {
        $name = $request->input('name');
        $email_client = $request->input('email');
        $msg_client = $request->input('message');

        // if form is full
        if (!empty($_POST)) {
            // send email to admin
            Mail::send('mail', array('name' => $name, 'email_client' => $email_client, 'msg_client' => $msg_client), function ($message) use ($email_client, $name) {
                $message->from($email_client, $name);
                $message->to('celine.khourieh@webneoo.com')->subject('Message from Website');
            });

            \Session::flash('msg', 'Successfully sent!');
            return redirect()->back();
        }
    }

    //Get the contact form details and send the mail
    public function getInquiryForm(Request $request)
    {
        // dd($request);
        $name = $request->input('name');
        $phone = $request->input('phone');
        $product = $request->input('product');
        $email_client = $request->input('email');
        $msg_client = $request->input('message');

        // if form is full
        if (!empty($_POST)) {
            // send email to admin
            Mail::send('mail', array('name' => $name, 'phone' => $phone, 'product' => $product, 'email_client' => $email_client, 'msg_client' => $msg_client), function ($message) use ($email_client, $name) {
                $message->from($email_client, $name);
                $message->to('joudy.nabo@gmail.com')->subject('Message from Website');
            });

            \Session::flash('msg', 'Successfully sent!');
            return redirect()->back();
        }
    }
}
