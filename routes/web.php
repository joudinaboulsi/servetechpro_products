<?php


############# Frontend #######################################

Route::get("/", "PagesController@home")->name("home_path");
Route::get("/product-details-{id}", "PagesController@productDetails")->name("product_path");
Route::post("inquiry", "PagesController@getInquiryForm")->name("inquiryStore");
Route::post("get-in-touch", "PagesController@getContactForm")->name("contactStore");

############# Frontend #######################################


Auth::routes(['register' => false]);


############# Admin #######################################

Route::get("/home-slider", "Admin\HomeSliderController@index")->name("homeSlider");
Route::get("/create-home-slider", "Admin\HomeSliderController@create")->name("createHomeSlider");
Route::post("/create-home-slider", "Admin\HomeSliderController@store")->name("storeHomeSlider");
Route::get("/edit-home-slider-{id}", "Admin\HomeSliderController@edit")->name("editHomeSlider");
Route::post("/edit-home-slider-{id}", "Admin\HomeSliderController@update")->name("updateHomeSlider");
Route::post("/delete-home-slider/{id}", "Admin\HomeSliderController@delete")->name("deleteHomeSlider");

Route::get("/about", "Admin\AboutController@index")->name("about");
Route::post("/about", "Admin\AboutController@update")->name("updateAbout");

Route::get("/services", "Admin\ServicesController@index")->name("services");
Route::post("/services-header", "Admin\ServicesController@updateHeader")->name("updateServicesHeader");
Route::get("/create-service", "Admin\ServicesController@create")->name("createService");
Route::post("/create-service", "Admin\ServicesController@store")->name("storeService");
Route::get("/edit-service-{id}", "Admin\ServicesController@edit")->name("editService");
Route::post("/edit-service-{id}", "Admin\ServicesController@update")->name("updateService");
Route::post("/delete-service-{id}", "Admin\ServicesController@delete")->name("deleteService");

Route::get("/section-one", "Admin\SectionsController@index")->name("sectionOne");
Route::post("/section-one", "Admin\SectionsController@update")->name("updateSectionOne");

Route::get("/section-two", "Admin\SectionsController@index_section_two")->name("sectionTwo");
Route::post("/section-two", "Admin\SectionsController@update_section_two")->name("updateSectionTwo");

Route::get("/portfolio", "Admin\PortfolioController@index")->name("portfolio");
Route::post("/portfolio-header", "Admin\PortfolioController@updateHeader")->name("updatePortfolioHeader");
Route::get("/create-portfolio", "Admin\PortfolioController@create")->name("createPortfolio");
Route::post("/create-portfolio", "Admin\PortfolioController@store")->name("storePortfolio");
Route::get("/edit-portfolio-{id}", "Admin\PortfolioController@edit")->name("editPortfolio");
Route::post("/edit-portfolio-{id}", "Admin\PortfolioController@update")->name("updatePortfolio");
Route::post("/delete-portfolio-{id}", "Admin\PortfolioController@delete")->name("deletePortfolio");

Route::get("/clients", "Admin\ClientController@index")->name("clients");
Route::get("/create-client", "Admin\ClientController@create")->name("createClient");
Route::post("/create-client", "Admin\ClientController@store")->name("storeClient");
Route::get("/edit-client-{id}", "Admin\ClientController@edit")->name("editClient");
Route::post("/edit-client-{id}", "Admin\ClientController@update")->name("updateClient");
Route::post("/delete-Client-{id}", "Admin\ClientController@delete")->name("deleteClient");

Route::get("/contact", "Admin\ContactController@index")->name("contact");
Route::post("/contact", "Admin\ContactController@update")->name("updateContact");

Route::get("/footer", "Admin\FooterController@index")->name("footer");
Route::post("/footer", "Admin\FooterController@update")->name("updateFooter");

Route::get("/seo", "Admin\SeoController@index")->name("seo");
Route::get('/seo-edit-{id}', 'Admin\SeoController@edit')->name('seoEdit');
Route::post("/seo-update-{id}", "Admin\SeoController@update")->name("updateSeo");

Route::get("/settings", "Admin\SettingsController@index")->name("settings");
Route::post("/settings", "Admin\SettingsController@update")->name("updateSettings");



############# Product Section Start #######################################
Route::get('/prodcuts', 'Admin\ProductController@index')->name('products');
Route::post('/product-header-store', 'Admin\ProductController@storePage')->name('productStorePage');
Route::post('/product-store', 'Admin\ProductController@store')->name('productStore');
Route::get('/product-create', 'Admin\ProductController@create')->name('productCreate');
Route::post('/product-store', 'Admin\ProductController@store')->name('productStore');
Route::get('/product-edit-{id}', 'Admin\ProductController@edit')->name('productEdit');
Route::post('/product-update-{id}', 'Admin\ProductController@update')->name('productUpdate');
Route::delete('/product-delete-{id}', 'Admin\ProductController@delete')->name('productDelete');

############# Product Section End #######################################

############# Product Images Slider Start #######################################
Route::prefix('/slider-{id}')->group(function() {

Route::get("/image", "Admin\ImageController@index")->name("imagesSlider");
Route::get("/create", "Admin\ImageController@create")->name("imageSliderCreate");
Route::post("/store", "Admin\ImageController@store")->name("imageSliderStore");
Route::get("/edit-{image_id}", "Admin\ImageController@edit")->name("SliderEdit");
Route::post("/{image_id}-update", "Admin\ImageController@update")->name("SliderUpdate");
Route::delete("/{image_id}-delete", "Admin\ImageController@delete")->name("SliderDelete");
});
############# Product  Images SliderEnd #######################################

############# Admin #######################################
