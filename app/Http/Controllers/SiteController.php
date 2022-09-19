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
use App\Mail\CustomerPaymentStatus;
use App\Models\AboutPage;
use App\Models\HomeSlider;
use App\Models\Leadership;
use App\Models\ContactPage;
use App\Models\PartnerPage;
use App\Models\Testimonial;
use App\Models\CustomerPayment;
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
    public function home()
    {

        $homePage = HomePage::findOrFail(1);
        $page_title = $homePage->name;
        $meta_description = $homePage->meta_description;
        $meta_keywords = $homePage->meta_keyword;

        $sliders = HomeSlider::where('status', 1)->get();
        $testimonials = Testimonial::all();
        $packages = Package::where('status', 1)->orderBy('order_by', 'asc')->get();
        $posts = Post::with('tags', 'categories')->where('status', 1)->latest()->limit(3)->get();
        $homeAboutSection = HomeAboutSection::findOrFail(1);

        return view('site.home', compact('sliders', 'testimonials', 'packages', 'posts', 'homeAboutSection', 'page_title', 'meta_description', 'meta_keywords'));
    }

    public function aboutUs()
    {

        $aboutPage = AboutPage::findorfail(1);

        $page_title = $aboutPage->name;
        $meta_description = $aboutPage->meta_description;
        $meta_keywords = $aboutPage->meta_keyword;

        return view('site.about', compact('aboutPage', 'page_title', 'meta_description', 'meta_keywords'));
    }

    public function contactUs()
    {

        $contactPage = ContactPage::findorfail(1);

        $page_title = $contactPage->name;
        $meta_description = $contactPage->meta_description;
        $meta_keywords = $contactPage->meta_keyword;

        $application_categories = ApplianceCategory::with('loadItems')->get();


        return view('site.contact', compact('contactPage', 'page_title', 'meta_description', 'meta_keywords', 'application_categories'));
    }


    public function submitCustomQuote(Request $request)
    {


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

        try {

            Mail::to('praneetha@douglas.lk')->cc($email_address)
                ->send(new CustomQuote($full_name, $email_address, $phone_no, $mobile_no, $address, $loadItemName, $loadItemWatts, $LoadItemQuantity));

            Session::flash('message', 'Your Custom Quote is generated successfully!');
            Session::flash('alert-class', 'alert-success');

            return redirect()->route('contact-us')->withInput();
        } catch (Exception $ex) {

            return "We've got errors!";
        }
    }

    public function loadAppItems(Request $request)
    {

        $appId = $request->appId;
        $appItems = LoadItem::where('appliance_category_id', $appId)->get();
        return json_encode($appItems);
    }

    public function partners()
    {

        $partnerPage = PartnerPage::findorfail(1);

        $page_title = $partnerPage->name;
        $meta_description = $partnerPage->meta_description;
        $meta_keywords = $partnerPage->meta_keyword;

        $partners = Partner::where('status', 1)->get();

        return view('site.partners', compact('partnerPage', 'page_title', 'meta_description', 'meta_keywords', 'partners'));
    }


    public function leadership()
    {

        $leadrships = Leadership::where('status', 1)->orderBy('order_by', 'asc')->get();

        $page_title = 'Leadership';
        $meta_description = '';
        $meta_keywords = '';

        return view('site.leadership', compact('leadrships', 'page_title', 'meta_description', 'meta_keywords'));
    }

    public function packages()
    {

        $page_title = 'Packages';
        $meta_description = '';
        $meta_keywords = '';

        $packages = Package::where('status', 1)->orderBy('order_by', 'asc')->get();

        return view('site.packages', compact('packages', 'page_title', 'meta_description', 'meta_keywords'));
    }

    public function singlePackage($id, $slug)
    {

        $singlePackage = Package::with('products')->findorfail($id);

        $page_title = $singlePackage->name;
        $meta_description = $singlePackage->meta_description;
        $meta_keywords = $singlePackage->meta_keyword;

        $otherPackages = Package::where('id', '!=', $id)->orderBy('order_by', 'asc')->get();

        return view('site.single_package', compact('singlePackage', 'page_title', 'meta_description', 'meta_keywords', 'otherPackages'));
    }

    public function customQuote()
    {
    }

    public function blog()
    {

        $blogPage = BlogPage::findorfail(1);

        $page_title = $blogPage->name;
        $meta_description = $blogPage->meta_description;
        $meta_keywords = $blogPage->meta_keyword;

        $allPost = Post::with('tags', 'categories')->where('status', 1)->orderBy('id', 'desc')->paginate(15);
        $categories = Category::all();
        $tags = Tag::all();

        return view('site.blog', compact('blogPage', 'page_title', 'meta_description', 'meta_keywords', 'allPost', 'categories', 'tags'));
    }

    public function singleBlog($id, $slug)
    {

        $singlePost = Post::with('tags', 'categories', 'galleries')->findorfail($id);

        $page_title = $singlePost->name;
        $meta_description = $singlePost->meta_description;
        $meta_keywords = $singlePost->meta_keyword;

        $recentPost = Post::with('tags', 'categories')->where('status', 1)->latest()->limit(3)->get();

        $categories = Category::all();
        $tags = Tag::all();

        return view('site.single_post', compact('singlePost', 'page_title', 'meta_description', 'meta_keywords', 'categories', 'tags', 'recentPost'));
    }


    public function listProductsBasedCategory($cat_id, $slug = null)
    {

        $page_title = 'List Products';
        $meta_description = 'Products Details';
        $meta_keywords = 'products, categories';

        $productList = Product::with('productCategory')->where(array('status' => 1, 'product_category_id' => $cat_id))->get();
        $productCategoryList = ProductCategory::with('childrenCategory')->where('parent', 0)->get();
        $singleCategory = ProductCategory::findOrFail($cat_id);
        return view('site.products', compact('productList', 'page_title', 'meta_description', 'meta_keywords', 'productCategoryList', 'singleCategory'));
    }

    public function showSingleProductDetail($product_id, $slug = null)
    {

        $page_title = 'Single Products';
        $meta_description = 'Products Details';
        $meta_keywords = 'products, categories';

        $singleProduct = Product::with('galleries')->findOrFail($product_id);
        $recetProduct = Product::where('id', '<>', $product_id)->where('status', 1)->where('product_category_id', $singleProduct->product_category_id)->limit(6)->get();
        return view('site.single-product', compact('singleProduct', 'page_title', 'meta_description', 'meta_keywords', 'recetProduct'));
    }

    public function customer_payment()
    {

        $page_title = 'List Products';
        $meta_description = 'Products Details';
        $meta_keywords = 'products, categories';

        return view('site.search_payment', compact('page_title', 'meta_description', 'meta_keywords'));
    }


    public function search_customer_payment(Request $request)
    {

        $validated = $request->validate([
            'invoice_no' => 'required'
        ]);

        $invoice_no = $request->invoice_no;

        $listCustomerPayment = CustomerPayment::where('invoice_no', $invoice_no)->where('payment_status', 0)->first();

        $page_title = 'List Products';
        $meta_description = 'Products Details';
        $meta_keywords = 'products, categories';

        return view('site.search_payment_result', compact('page_title', 'meta_description', 'meta_keywords', 'listCustomerPayment'));
    }

    public function customer_payment_return()
    {
        //Get req_id from the URL params
        $csrfToken = $_REQUEST['reqid'];

        //Get Client_ref from the URL params
        $clientRef = $_REQUEST['clientRef'];

        // This is the your private auth token. It must
        // never be used in the browser, only on your secure server
        //
        // NOTE: this is the QuickWeb DEMO AUTH-TOKEN
        // You may use it for initial setup
        // but replace with the token
        // provided by Paycorp for final testing.
        $auth_Token = 'db8ccefa-a41a-41d3-b8b2-de506e0b41d5';

        // Get cURL resource
        $ch = curl_init();

        //Set the req_Id, authtoken and Client ref
        curl_setopt($ch, CURLOPT_URL, 'https://sampath.paycorp.lk/webinterface/qw/confirm?csrfToken=' . $csrfToken . '&authToken=' . $auth_Token . '&clientRef=' . $clientRef);

        //Set method post
        curl_setopt($ch, CURLOPT_POST, true);

        //Set CURLOPT_RETURNTRANSFER so that the content is returned as a variable.
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

        $headers = array(
            "Content-Type: application/x-www-form-urlencoded",
        );

        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

        //Set CURLOPT_FOLLOWLOCATION to true to follow redirects.
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);

        //for debug only!
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);

        //Execute the request.
        $response = curl_exec($ch);

        //Get the Erorrs
        $errors = curl_error($ch);

        //Close the cURL handle.
        curl_close($ch);

        //Explode String data using "&" and "=".
        $params = explode('&', $response);

        $results = [];


        foreach ($params as $element) {

            //Make Key Value Pair Using List
            list($key, $value) = explode('=', $element);
            $results[$key] = $value;
        }

        /* var_dump( $results);
        exit(); */

        if ($results['responseCode'] == '00') {


            $response_msg = '<div class="alert alert-success" role="alert">Transaction was processed successfully</div>';

            CustomerPayment::where('invoice_no', $results['clientRef'])
                ->update([
                    'payment_date' => date('Y-m-d'),
                    'response_details' => json_encode($results),
                    'payment_status' => 1,
                ]);

            $listCustomerPayment = CustomerPayment::where('invoice_no', $results['clientRef'])->first();

            $page_title = 'Payment Return';
            $meta_description = 'Payment Return Details';
            $meta_keywords = '';

            $customer_email = $listCustomerPayment->email;
            $payInvoice = $listCustomerPayment->invoice_no;

            try {

                Mail::to($customer_email)->cc('praneetha@douglas.lk')->send(new CustomerPaymentStatus($payInvoice));
                return view('site.payment_response', compact('page_title', 'meta_description', 'meta_keywords', 'response_msg', 'listCustomerPayment'));

            } catch (Exception $ex) {

                return "We've got errors!";
            }

        } elseif ($results['responseCode'] == '91' || $results['responseCode'] == '92' || $results['responseCode'] == 'A4' || $results['responseCode'] == 'C5' || $results['responseCode'] == 'T3' || $results['responseCode'] == 'T4' || $results['responseCode'] == 'U9' || $results['responseCode'] == 'X1' || $results['responseCode'] == 'X3' || $results['responseCode'] == '-1' || $results['responseCode'] == 'C0' || $results['responseCode'] == 'A6') {

            $response_msg = '<div class="alert alert-danger" role="alert">Payment Declined - Please try an alternative card</div>';

            CustomerPayment::where('invoice_no', $results['clientRef'])
                ->update([
                    'payment_date' => date('Y-m-d'),
                    'response_details' => json_encode($results),
                    'payment_status' => 0,
                ]);

            $listCustomerPayment = CustomerPayment::where('invoice_no', $results['clientRef'])->first();

            $page_title = 'Payment Return';
            $meta_description = 'Payment Return Details';
            $meta_keywords = '';

            //return view('site.payment_response', compact('page_title', 'meta_description', 'meta_keywords', 'response_msg', 'listCustomerPayment'));

            $customer_email = $listCustomerPayment->email;
            $payInvoice = $listCustomerPayment->invoice_no;

            try {

                Mail::to($customer_email)->cc('praneetha@douglas.lk')->send(new CustomerPaymentStatus($payInvoice));
                return view('site.payment_response', compact('page_title', 'meta_description', 'meta_keywords', 'response_msg', 'listCustomerPayment'));

            } catch (Exception $ex) {

                return "We've got errors!";
            }


        } else {

            $response_msg = '<div class="alert alert-danger" role="alert">Payment Declined - Please check with your bank</div>';

            CustomerPayment::where('invoice_no', $results['clientRef'])
                ->update([
                    'payment_date' => date('Y-m-d'),
                    'response_details' => json_encode($results),
                    'payment_status' => 0,
                ]);

            $listCustomerPayment = CustomerPayment::where('invoice_no', $results['clientRef'])->first();

            $page_title = 'Payment Return';
            $meta_description = 'Payment Return Details';
            $meta_keywords = '';

            //return view('site.payment_response', compact('page_title', 'meta_description', 'meta_keywords', 'response_msg', 'listCustomerPayment'));

            $customer_email = $listCustomerPayment->email;
            $payInvoice = $listCustomerPayment->invoice_no;

            try {

                Mail::to($customer_email)->cc('praneetha@douglas.lk')->send(new CustomerPaymentStatus($payInvoice));
                return view('site.payment_response', compact('page_title', 'meta_description', 'meta_keywords', 'response_msg', 'listCustomerPayment'));

            } catch (Exception $ex) {

                return "We've got errors!";
            }
        }

        //var_dump($results);
    }
}
