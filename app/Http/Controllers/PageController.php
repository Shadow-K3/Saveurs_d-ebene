<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PageController extends Controller
{
    //
     public function orders()
    {
        return view('pages.orders');
    }

    public function messages()
    {
        return view('pages.messages');
    }

    public function calendar()
    {
        return view('pages.calendar');
    }

    public function menu()
    {
        return view('pages.menu');
    }

    public function inventory()
    {
        return view('pages.inventory');
    }

    public function purchaseOrder()
    {
        return view('pages.purchase-order');
    }

    public function reviews()
    {
        return view('pages.reviews');
    }

    // Page 404 personnalisée
    public function notFound()
    {
        return view('pages.error.404')->setStatusCode(404);
    }
}
