<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Models\Cart;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CartController extends Controller
{
    public function addProduct(Request $request)
    {
        $product = DB::table('carts')->where('product_id', $request->product_id)->first();
        if ($product) {
            $quantity = DB::table('carts')->where('product_id', $request->product_id)->value('quantity');
            DB::table('carts')
                ->where('product_id', $request->product_id)
                ->update(['quantity' => $quantity + $request->quantity]);
            $cart = Cart::where('product_id', $request->product_id)->first();
        } else {
            $cart = Cart::create([
                'product_id' => $request->product_id,
                'quantity' => $request->quantity
            ]);
        }
        return response()->json(['message' => 'success', 'cart' => $cart]);
    }

    public function getCart()
    {
        $product = DB::table('products')
            ->join('carts', 'carts.product_id', '=', 'products.id')
            ->select('carts.id','carts.product_id','products.name', 'products.description', 'products.price', 'carts.quantity')
            ->get();
        return response()->json(['message' => 'success', $product], 200);
    }


    public function deleteProductFromCart(Request $request, $productId)
    {
        DB::table('carts')
        ->where('product_id', $productId)
        ->delete();
        return response()->json(['message' => 'success'],200);
    }
}
