<?php

namespace App\Http\Controllers;
use App\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function index(){
        $news = News::all();
        return view('admin/news',compact('news'));
    }

    public function store(Request $request){
        $request->validate([
            'title'       =>'required',
            'description' =>'required',
            'dateNews'    =>'required',
            'image'       => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);

        if (!empty(request()->image)) {
            $imageName = time() . '.' . request()->image->getClientOriginalExtension();
            request()->image->move(public_path('images'), $imageName);
        } else {
            $imageName = 'default.png';
        }

        $var = new News;
        $var-> title_news       = request('title');
        $var-> description_news = request('description');
        $var-> date_news        = request('dateNews');
        $var-> image            = $imageName;
        $var->save();

        return back()->with('success', 'created successfully.');
    }

    // Edit News
    public function edit($id)
    {
        $news = News::find($id);
        return view('admin.editNews', compact('news'));
    }


    // Update News
    public function update(Request $request, $id)
    {
        $request->validate([
            'title'       =>'required',
            'description' =>'required',
            'dateNews'    =>'required',
        ]);

        if (!empty(request()->image)) {
            $imageName = time() . '.' . request()->image->getClientOriginalExtension();
            request()->image->move(public_path('images'), $imageName);
        } else {
            $newsImage = News::find($id);
            $imageName = $newsImage->image;
        }
        $news = News::find($id);
        $news->title_news       = $request->get('title');
        $news->description_news = $request->get('description');
        $news->date_news        = $request->get('dateNews');
        $news->image            = $imageName;
        $news->save();
        return redirect('admin/news')->with('success', 'News updated!');
    }

    // Delete News
    public function destroy($id)
    {
        $news = News::find($id);
        $news->delete();
        return back()->with('success', 'News deleted!');
    }
}

