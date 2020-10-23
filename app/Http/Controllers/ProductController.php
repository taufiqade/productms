<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    private $products;

    public function __construct()
    {
        $this->products = collect([
            ['id' => 1, 'name' => 'deodorant', 'price' => 1000],
            ['id' => 2, 'name' => 'pepsodent', 'price' => 1200],
        ]);
    }

    public function index()
    {
        return response()->json($this->products);
    }

    public function getItem($id)
    {
        $product = $this->products->firstWhere('id', $id);
        return response()->json($product);
    }
}
