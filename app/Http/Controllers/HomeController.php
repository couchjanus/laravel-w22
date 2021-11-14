<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Cart;
use App\Models\{Product};

class HomeController extends Controller
{
    public function index()
    {

        $products = Product::with('brand')->with('category')->with('pictures')->paginate();
        // dd($products);
        return view('home.index')->withProducts($products);
    }

    private function addProduct(Request $request, $q, $id){
        $product = Product::whereId($id)->with('brand')->with('category')->with('pictures')->firstOrFail();
        $options = ['picture' => $product->pictures[0]->cover_path];
        Cart::add($id, $product->name, $request->price, $q, $options);
    }

    public function addToCart(Request $request)
    {
        $quantity = $request->quantity ?? 1;
        $productId = $request->productId;

        if(Cart::isEmpty()){
            $this->addProduct($request, $quantity, $productId);
        }else{
            if(Cart::get($productId)){
                Cart::update($productId, [
                    'quantity' => $quantity
                ]);
            }else{
                $this->addProduct($request, $quantity, $productId);
            }
        }
        return redirect()->back();

     
    }
}
