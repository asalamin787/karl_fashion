<?php

namespace App\Http\Controllers;

use App\Models\Product\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use RealRashid\SweetAlert\Facades\Alert;

class WishlistController extends Controller
{
    public function addToWishlist(Product $product)
    {
        
        // Retrieve existing wishlist from the session or create an empty array
        $products = Session::get('product', []);

        // Check if the product is not already in the wishlist
        if (!in_array($product, $products)) {
            // Add the product ID to the wishlist array
            $products[] = $product;

            // Update the wishlist in the session
            Session::put('product', $products);
            Alert::success('Successfully ', 'Product added to wishlist');
            return back();
        }

        // Product is already in the wishlist
        Alert::warning('Warning', 'Product is already in the wishlist');
        return back();
    }
}
