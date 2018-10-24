<?php

namespace App\Http\Controllers;

use App\Blog;
use App\Portofolio;
use App\Testimonial;
use App\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $testimonials = Testimonial::latest()->get();
        $blogs = Blog::latest()->get();
        $portofolios = Portofolio::latest()->get();
        $officials = User::where('is_official', 1)->get();
        return view('contents.home', compact('testimonials', 'blogs', 'portofolios', 'officials'));
    }
}
