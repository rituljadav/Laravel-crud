<?php

namespace App\Http\Controllers;

use App\Models\MyPost;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Symfony\Contracts\Service\Attribute\Required;

class MyPostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
    $data= MyPost::get();
     return view('MyPost.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return \view('MyPost.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required | max:100',
            'subtitle' => 'required | max:200',
            'content' => 'required'
        ]);
        $p = new MyPost();
        $p->user_id = 1;
        $p->slug = str::slug($request->title);
        $p->title = $request->title;
        $p->subtitle = $request->subtitle;
        $p->content = $request->content;
        $p->save();
        return redirect()->route('blog.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(MyPost $blog)
    {
        return view('MyPost.show',compact('blog'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(MyPost $blog)
    {
        return view('MyPost.edit',compact('blog'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, MyPost $blog)
    {
        $request->validate([
            'title' => 'required | max:100',
            'subtitle' => 'required | max:200',
            'content' => 'required'
        ]);
        $blog->user_id = 1;
        $blog->slug = str::slug($request->title);
        $blog->title = $request->title;
        $blog->subtitle = $request->subtitle;
        $blog->content = $request->content;
        $blog->save();
        return redirect()->route('blog.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(MyPost $blog)
    {
        $blog->delete();
        return redirect()->route('blog.index');
    }
}


