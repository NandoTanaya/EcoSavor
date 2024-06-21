<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Product;

use App\Models\User;

use App\Models\Cart;

use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Sepaket sama tadi atur route untuk admin
     */
    public function index()
    {
        return view('admin.index');
    }

    /**
     * Route tambahan untuk ke home index habis dikasih template HTML
     */
    public function home()
    {
        return view('home.index');
    }

    // Fungsi login home
    public function login_home()
    {
        $product = Product::all();

        $user = Auth::user();

        $userid = $user->id;

        $count = Cart::where('user_id', $userid)->count();

        return view('home.index', compact('product', 'count'));
    }

    // Fungsi add to cart
    public function add_cart($id)
    {
        $product_id = $id;
        $user = Auth::user();
        $user_id = $user->id;
        $data = new Cart;
        $data->user_id = $user_id;
        $data->product_id = $product_id;

        $data -> save();
        toastr()->timeOut(1000)->closeButton()->addSuccess('Product Added to the cart');
        return redirect()->back();
    }

    public function mycart()
    {
        if(Auth::id())
        {
            $user = Auth::user();
            $userid = $user->id;
            $count = Cart::where('user_id', $userid)->count();
            $cart = Cart::where('user_id', $userid)->get();
        }
        return view('home.mycart', compact('count', 'cart'));
    }
    // Remove cart
    public function deleteCart($id)
    {
        $cartItem = Cart::find($id);
        if ($cartItem) {
            $cartItem->delete();
        }

        return redirect()->back()->with('message', 'Product removed from cart');
    }
}
