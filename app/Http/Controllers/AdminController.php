<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;

class AdminController extends Controller
{
    function admin(){
        return view('admins.loginAdmin');
    }

    function dashboard(){
        $orders = Order::latest()->paginate(5);
        return view('admins.dashboard',compact('orders'));
    }

    function order(){
        return view('admins.order.view');
    }
}
