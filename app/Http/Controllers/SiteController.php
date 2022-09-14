<?php

namespace App\Http\Controllers;

use App\Models\Tag;
use App\Models\Post;
use App\Models\Photo;
use App\Models\Video;
use App\Models\Gallery;
use App\Models\Package;
use App\Models\Partner;
use App\Models\Product;
use App\Models\Project;
use App\Models\BlogPage;
use App\Models\Category;
use App\Models\HomePage;
use App\Models\LoadItem;
use App\Mail\CustomQuote;
use App\Models\AboutPage;
use App\Models\HomeSlider;
use App\Models\Leadership;
use App\Models\ContactPage;
use App\Models\PartnerPage;
use App\Models\Testimonial;
use Illuminate\Http\Request;
use App\Models\ProductCategory;

use App\Models\HomeAboutSection;
use App\Models\ApplianceCategory;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;

/**
 * This controller is used to access website
 */

class SiteController extends Controller
{
    public function home(){

        $homePage = HomePage::findOrFail(1);
        $page_title = $homePage->name;
        $meta_description = $homePage->meta_description;
        $meta_keywords = $homePage->meta_keyword;

        $sliders = HomeSlider::where('status',1)->get();
        $testimonials = Testimonial::all();
        $packages = Package::where('status',1)->orderBy('order_by','asc')->get();
        $posts = Post::with('tags','categories')->where('status',1)->latest()->limit(3)->get();
        $homeAboutSection = HomeAboutSection::findOrFail(1);

        return view('site.home',compact('sliders','testimonials','packages','posts','homeAboutSection','page_title','meta_description','meta_keywords'));


    }

    public function aboutUs(){

        $aboutPage = AboutPage::findorfail(1);

        $page_title = $aboutPage->name;
        $meta_description = $aboutPage->meta_description;
        $meta_keywords = $aboutPage->meta_keyword;

        return view('site.about',compact('aboutPage','page_title','meta_description','meta_keywords'));

    }

    public function contactUs(){

        $contactPage = ContactPage::findorfail(1);

        $page_title = $contactPage->name;
        $meta_description = $contactPage->meta_description;
        $meta_keywords = $contactPage->meta_keyword;

        $application_categories = ApplianceCategory::with('loadItems')->get();


        return view('site.contact',compact('contactPage','page_title','meta_description','meta_keywords','application_categories'));

    }


    public function submitCustomQuote(Request $request){


        $validated = $request->validate([
            'full_name' => 'required',
            'email_address' => 'required|email',
            'phone_no' => 'required|numeric',
             'mobile_no' => 'required|numeric',
             'address' => 'required',
        ]);



        $full_name = $request->full_name;
        $email_address = $request->email_address;
        $phone_no = $request->phone_no;
        $mobile_no = $request->mobile_no;
        $address = $request->address;

        $loadItemCatName = $request->input('loadItemCatName', []);
        $loadItemName = $request->input('loadItemName', []);
        $loadItemWatts = $request->input('loadItemWatts', []);
        $LoadItemQuantity = $request->input('LoadItemQuantity', []);

        /* foreach($LoadItemQuantity as $key => $value){
            //echo $value;
            //echo $key.'<br>';
        }

        print_r($loadItemName[3]); */

        try {

            Mail::to('praneetha@douglas.lk')->cc($email_address)
            ->send(new CustomQuote($full_name,$email_address,$phone_no,$mobile_no,$address,$loadItemName,$loadItemWatts,$LoadItemQuantity));

            Session::flash('message', 'Your Custom Quote is generated successfully!');
            Session::flash('alert-class', 'alert-success');

            return redirect()->route('contact-us')->withInput();

        } catch (Exception $ex) {

            return "We've got errors!";
        }



    }

    public function loadAppItems(Request $request){

        $appId = $request->appId;
        $appItems = LoadItem::where('appliance_category_id',$appId)->get();
        return json_encode($appItems);

    }

    public function partners(){

        $partnerPage = PartnerPage::findorfail(1);

        $page_title = $partnerPage->name;
        $meta_description = $partnerPage->meta_description;
        $meta_keywords = $partnerPage->meta_keyword;

        $partners = Partner::where('status',1)->get();

        return view('site.partners',compact('partnerPage','page_title','meta_description','meta_keywords','partners'));

    }


    public function leadership(){

        $leadrships = Leadership::where('status',1)->orderBy('order_by','asc')->get();

        $page_title = 'Leadership';
        $meta_description = '';
        $meta_keywords = '';

        return view('site.leadership',compact('leadrships','page_title','meta_description','meta_keywords'));

    }

    public function packages(){

        $page_title = 'Packages';
        $meta_description = '';
        $meta_keywords = '';

        $packages = Package::where('status',1)->orderBy('order_by','asc')->get();

        return view('site.packages',compact('packages','page_title','meta_description','meta_keywords'));

    }

    public function singlePackage($id,$slug){

        $singlePackage = Package::with('products')->findorfail($id);

        $page_title = $singlePackage->name;
        $meta_description = $singlePackage->meta_description;
        $meta_keywords = $singlePackage->meta_keyword;

        $otherPackages = Package::where('id','!=',$id)->orderBy('order_by','asc')->get();

        return view('site.single_package',compact('singlePackage','page_title','meta_description','meta_keywords','otherPackages'));

    }

    public function customQuote(){

    }

    public function blog(){

        $blogPage = BlogPage::findorfail(1);

        $page_title = $blogPage->name;
        $meta_description = $blogPage->meta_description;
        $meta_keywords = $blogPage->meta_keyword;

        $allPost = Post::with('tags','categories')->where('status',1)->orderBy('id','desc')->paginate(15);
        $categories = Category::all();
        $tags = Tag::all();

        return view('site.blog',compact('blogPage','page_title','meta_description','meta_keywords','allPost','categories','tags'));


    }

    public function singleBlog($id,$slug){

        $singlePost = Post::with('tags','categories','galleries')->findorfail($id);

        $page_title = $singlePost->name;
        $meta_description = $singlePost->meta_description;
        $meta_keywords = $singlePost->meta_keyword;

        $recentPost = Post::with('tags','categories')->where('status',1)->latest()->limit(3)->get();

        $categories = Category::all();
        $tags = Tag::all();

        return view('site.single_post',compact('singlePost','page_title','meta_description','meta_keywords','categories','tags','recentPost'));

    }


    public function listProductsBasedCategory($cat_id,$slug = null){

        $page_title = 'List Products';
        $meta_description = 'Products Details';
        $meta_keywords = 'products, categories';

        $productList = Product::with('productCategory')->where(array('status'=>1, 'product_category_id'=>$cat_id))->get();
        $productCategoryList = ProductCategory::with('childrenCategory')->where('parent',0)->get();
        $singleCategory = ProductCategory::findOrFail($cat_id);
        return view('site.products',compact('productList','page_title','meta_description','meta_keywords','productCategoryList','singleCategory'));

    }

    public function showSingleProductDetail($product_id,$slug = null){

        $page_title = 'Single Products';
        $meta_description = 'Products Details';
        $meta_keywords = 'products, categories';

        $singleProduct = Product::with('galleries')->findOrFail($product_id);
        $recetProduct = Product::where('id','<>',$product_id)->where('status',1)->where('product_category_id',$singleProduct->product_category_id)->limit(6)->get();
       return view('site.single-product',compact('singleProduct','page_title','meta_description','meta_keywords','recetProduct'));

    }

}
