<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\ProductType;
use App\Cart;
use Session;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        view() -> composer(['master','pages/Checkout'],function($view){
        $type_product = ProductType::all();
        $view -> with('type_product',$type_product);
        });
        view()->composer(['master','pages/Checkout'], function($view){
            if(session('cart')){
                $oldCart = Session::get('cart');
                $cart = new Cart($oldCart);
                $view -> with(['cart'=>Session::get('cart'),'product_cart'=>$cart->items,'totalPrice'=>$cart->totalPrice,'totalQty' => $cart->totalQty]);
            }
        });       
    }
}