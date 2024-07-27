<?php

namespace App\Http\Controllers;

use App\Models\products;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function addToCart($id)
    {
        $product = products::find($id);
        
        if(!$product) {
            return redirect()->back()->with('error', 'Sản phẩm không tồn tại!');
        }

        $cart = session()->get('cart', []);

        if(isset($cart[$id])) {
            $cart[$id]['quantity']++;
        } else {
            $cart[$id] = [
                "name" => $product->name,
                "img" => $product->img,
                "quantity" => 1,
                "price" => $product->price,
                "description" => $product->description
            ];
        }

        session()->put('cart', $cart);
        return redirect()->back()->with('success', 'Sản phẩm đã được thêm vào giỏ hàng!');
    }

    public function cart()
    {
        $cart = session()->get('cart', []);
        $total = 0;

        foreach($cart as $id => $details) {
            $total += $details['price'] * $details['quantity'];
        }

        return view('cart', compact('cart', 'total'));
    }


    public function removeFromCart($id)
    {
        $cart = session()->get('cart');

        if(isset($cart[$id])) {
            unset($cart[$id]);
            session()->put('cart', $cart);
        }

        return redirect()->route('cart')->with('success', 'Sản phẩm đã được xóa khỏi giỏ hàng!');
    }


    public function clearCart()
{
    session()->forget('cart');
    return redirect()->route('cart')->with('success', 'Giỏ hàng đã được xóa hết!');
}
public function updateCart(Request $request)
{
    if ($request->ajax()) {
        $id = $request->id;
        $quantity = $request->quantity;

        $cart = session()->get('cart');
        if (isset($cart[$id])) {
            $cart[$id]['quantity'] = $quantity;
            session()->put('cart', $cart);

            return response()->json(['success' => true]);
        }
    }
    return response()->json(['success' => false], 400);
}
public function checkout(){
    return view('checkout');
}
}