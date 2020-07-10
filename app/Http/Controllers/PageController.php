<?php

namespace App\Http\Controllers;
use App\Slide;
use App\ProductDetail;
use App\Cart;
use App\User;
use Session;
use Hash;
use App\Product;
use Illuminate\Http\Request;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Auth;
use App\Bill;
use App\BillDetail;
use DB;
use App\Library;

class PageController extends Controller
{
    public function Home(){
        $slide = Slide::all();
        $selling_product = ProductDetail::where('ID_type','TP1') -> paginate(8);
        $free_product = ProductDetail::where('ID_type','TP2') -> paginate(8);
        return view('pages.Home',compact('slide','selling_product','free_product'));
    }
    public function ProductDetail($req){

        $detail = ProductDetail::where('id',$req)->first();
        $lib=Library::all()->where('Product_ID',$req);
        return view('pages.ProductDetail',compact('detail','lib'));
    }
    public function ProductType($type){
        $product_type = ProductDetail::where('ID_type',$type)->paginate(12);
        return view('pages.ProductType',compact('product_type'));
    }
    public function About(){
        return view('pages.AboutUs');
    }
    public function AddToCart(Request $req,$id){
        $product = ProductDetail::find($id);
        $oldCart = Session('cart')?Session::get('cart'):null;
        $cart = new Cart($oldCart);
        $cart -> add($product, $id);
        $req->session()->put('cart',$cart);
        return redirect()-> back();        
    }
    public function DelCart($id){
        $oldCart = Session('cart')?Session::get('cart'):null;
        $cart = new Cart($oldCart);
        $cart -> removeItem($id);
        if(count($cart->items)>0){
            session::put('cart',$cart);
        }
        else{
            Session::forget('cart');
        }
        return redirect()-> back(); 
    }
    public function getCheckout(){

        return view('pages.Checkout');
    }

    public function postCheckout(Request $req){
        $cart=Session::get('cart');
        $lib=new Library;
        $bill=new Bill;
        $bill->username=Auth::user()->username;
        $bill->date_order= date('Y-m-d');
        $bill->total=$cart->totalPrice;
        $bill->note=$req->input('notes');
        $bill->save();
        foreach ($cart->items as $key => $value) {
            $bill_detail=new BillDetail;
            $lib->username=Auth::user()->username;
            $lib->Product_ID=$key;
            $lib->Date=date('Y-m-d');
            $bill_detail->Bill_ID=$bill->id;
            $bill_detail->Product_ID=$lib->Product_ID;
            $bill_detail->Price=($value['price']/$value['qty']);
            DB::insert('insert into library (Username,Product_ID, date) values (?, ?,?)', [$lib->username,$lib->Product_ID,$lib->Date]);
            $bill_detail->save();

        }
        return redirect()->route('Home')->with('success','Account successfully created.');
    }

    public function Login(){
        return view('auth.login');
    }
    public function Register(){
        return view('auth.register');
    }
    public function postRegister(Request $req){
        $this->validate($req,
            [
                'username'=>'required|min:5|unique:users,username',
                'password'=>'required|min:5',
                'fullname'=>'required',
                're_enter'=>'required|same:password'
            ],
            [
                'username'=>'Please enter username.',
                'username.min'=>'Username must contain at least 5 characters.',
                'username.unique'=>'Username already exists.',
                'password.required'=>'Please enter password.',
                'password.min'=>'Password must contain at least 5 characters.',
                're_enter'=>'Password does not match.'
            ]);
        $user = new User();
        $user->username = $req->username;
        $user->fullname = $req->fullname;
        $user->phone = $req->phone;
        $user->password = Hash::make($req->password);
        $user->save();
        return redirect()->route('login')->with('success','Account successfully created.');
    }

    public function postLogin(Request $req){
        $this->validate($req,
            [
                'username'=>'required|min:5',
                'password'=>'required|min:5'
            ],
            [
                'username.required'=>'Please enter username.',
                'username.min'=>'Username must contain at least 5 characters',
                'password.required'=>'Please enter password.',
                'password.min'=>'Password must contain at least 5 characters.'
            ]);
        $credentials = array('username'=>$req->username,'password'=>$req->password);
        if(Auth::attempt($credentials)){
            return redirect()->route('Home')->with(['flag'=>'success','message'=>'Login successfully.']);
        } else {
            return redirect()->back()->with(['flag'=>'danger','message'=>'Login failed.']);
        }
    }

    public function postLogout(){
        Auth::logout();
        return redirect()->route('Home');
    }

    public function adminIndex(){
        return view('admin.index');
    }

    public function usersPanel(){
        $users = User::all();
        $products = Product::all();
        if(Auth::guard('admin')->check()){
            return view('admin.users')->with('users',$users);
            }
        return redirect()->route('Home');
    }

    public function productsPanel(){
        $products = Product::all();
        if(Auth::guard('admin')->check()){
            return view('admin.products')->with('products',$products);
            }
        return redirect()->route('Home');
    }
    public function libraryPanel(){
        $lib=Library::all();
        if(Auth::guard('admin')->check()){
            return view('admin.library',compact('lib'));
        }
        return redirect()->route('Home');
    }
    public function Delete($id){
        $lib = Library::findOrFail($id);
        $lib->delete();
        return redirect()->route('libraryPanel')->with('success','Product deleted');
    }
}

