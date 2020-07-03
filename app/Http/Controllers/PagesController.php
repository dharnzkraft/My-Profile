<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        $title = 'welcome to laravel';
        return view('page.index', compact('title'));
    }

    public function services(){
        $data = array(
            'title' => 'Services',
            'services' => ['web Design', 'Programming', 'SEO']
        );
        return view('page.services')->with($data);
    }

    public function blog(){
        return view('page.blog');
    }

    public function about(){
        return view('page.about');
    }
}
