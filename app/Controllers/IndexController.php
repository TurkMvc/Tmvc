<?php

namespace App\Controllers;

use App\Classes\CSRFToken;
use App\Classes\Request;
use App\Models\Product;

class IndexController extends BaseController
{
    public function show()
    {
        $token = CSRFToken::_token();
        return view('home', compact('token'));
    }
    
    /*
	public function featuredProducts()
    {
        $products = Product::where('featured', 1)->inRandomOrder()->limit(4)->get();
        echo json_encode(['featured' => $products]);
    }
    
    public function getProducts()
    {
        $products = Product::where('featured', 0)->skip(0)->take(8)->get();
        echo json_encode(['products' => $products, 'count' => count($products)]);
    }
    
    public function loadMoreProducts()
    {
        $request = Request::get('post');
        if(CSRFToken::verifyCSRFToken($request->token, false)){
            $count = $request->count;
            $item_per_page = $count + $request->next;
            $products = Product::where('featured', 0)->skip(0)->take($item_per_page)->get();
            echo json_encode(['products' => $products, 'count' => count($products)]);
        }
    }
	*/
}