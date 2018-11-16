<?php

namespace App\Http\Controllers;

use App\Blog;
use App\Portofolio;
use App\Testimonial;
use App\User;
use App\Tag;
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
        $blogs = Blog::latest()->take(3)->get();
        $portofolios = Portofolio::latest()->take(3)->get();
        $officials = User::where('is_official', 1)->get();
        return view('contents.home', compact('testimonials', 'blogs', 'portofolios', 'officials'));
    }

    public function indexBlog()
    {
        $blogs = Blog::latest()->paginate(6);
        return view('contents.blogs', compact('blogs'));
    }

    public function showBlog(Blog $blog)
    {
        //list of popular tags
        $tags = Tag::all();
        // list of popular blogs
        $blogs = Blog::take(5)->get();
        return view('contents.blog', compact('blog', 'tags', 'blogs'));
    }

    public function indexPortofolio()
    {
        $portofolios = Portofolio::latest()->paginate(6);
        return view('contents.portofolios', compact('portofolios'));
    }

    public function showPortofolio(Portofolio $portofolio)
    {
        return view('contents.portofolio', compact('portofolio'));
    }

    public function storeComment(Request $request, Blog $blog)
    {
        $this->validate($request, [
            'name' => 'required|string',
            'email' => 'required|email|max:155',
            'text' => 'required|string'
        ]);
        $blog->comments()->create([
            'name' => $request->name,
            'email' => $request->email,
            'text' => $request->text
        ]);

        return redirect()->back();
    }
}
