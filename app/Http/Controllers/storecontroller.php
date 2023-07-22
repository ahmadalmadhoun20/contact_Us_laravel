<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class storecontroller extends Controller
{

    function error(){
        return view('stylestore.error');
    }
    function index(){
        return view('stylestore.index');
    }

    function about(){
        return view('stylestore.about');
    }

    function adlist(){
        return view('stylestore.adlist');
    }

    function adlisting(){
        return view('stylestore.adlisting');
    }

    function blog(){
        return view('stylestore.blog');
    }

    function category(){
        return view('stylestore.category');
    }

    function contact(){
        return view('stylestore.contact');
    }

    function contact_data(Request $info){

        $info->validate([
            'name'=>'required|min:4|max:30',
            'email'=>'required|email|ends_with:@gmail.com',
            'select'=>'required',
            'message'=>'required'
        ]);

        $name = $info->name;
        $email = $info->email;
        $select = $info->select;
        $message = $info->message;

        return view('stylestore.info2' , compact('name' , 'email' , 'select' , 'message'));
    }

    function dashboard_archived_ads(){
        return view('stylestore.dashboardarchivedads');
    }

    function dashboardfavouriteads(){
        return view('stylestore.dashboardfavouriteads');
    }

    function dashboardmyads(){
        return view('stylestore.dashboardmyads');
    }

    function dashboardpendingads(){
        return view('stylestore.dashboardpendingads');
    }

    function dashboard(){
        return view('stylestore.dashboard');
    }

    function login(){
        return view('stylestore.login');
    }

    function package(){
        return view('stylestore.package');
    }
    function register(){
        return view('stylestore.register');
    }

    function singleblog(){
        return view('stylestore.singleblog');
    }

    function store(){
        return view('stylestore.store');
    }

    function termscondition(){
        return view('stylestore.termscondition');
    }

    function userprofile(){
        return view('stylestore.userprofile');
    }
}
