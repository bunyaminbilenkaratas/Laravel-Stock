<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Customer;
use App\Models\Product;

use Illuminate\Http\Request;


class DashboardController extends Controller
{
    public function dashboard(){

        $customers = Customer::all();
        $products = Product::all();
        $categories = Category::all();

        return view('index', compact('customers','products', 'categories'));

        #$lastFiveCustomers = Customer::orderByDesc('updated_at')->take(5)->get();

        #$lastFiveProducts = Product::orderByDesc('updated_at')->take(5)->get();
        
        #return view('dashboard', ['lastFiveCustomers' => $lastFiveCustomers, 'lastFiveProducts' => $lastFiveProducts]);

    }
}