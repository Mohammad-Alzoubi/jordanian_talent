<?php

namespace App\Http\Controllers;
use App\Event;
use Illuminate\Http\Request;

class EventController extends Controller
{
    public function index(){
        $events = Event::all();
        return view('admin/event',compact('events'));
    }

    public function store(Request $request){
        $request->validate([
            'title'       =>'required',
            'description' =>'required',
            'dateEvent'   =>'required',
            'image'       => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);

        if (!empty(request()->image)) {
            $imageName = time() . '.' . request()->image->getClientOriginalExtension();
            request()->image->move(public_path('images'), $imageName);
        } else {
            $imageName = 'default.png';
        }
        $event = new Event;
        $event-> title_event       = request('title');
        $event-> description_event = request('description');
        $event-> date_event        = request('dateEvent');
        $event-> image             = $imageName;
        $event->save();
        // dd($event);
        return back()->with('success', 'Created Successfully.');
    }

    // Edit Event
    public function edit($id)
    {
        $event = Event::find($id);
        return view('admin.editEvent', compact('event'));
    }


    // update Event
    public function update(Request $request, $id)
    {
        $request->validate([
            'title'       =>'required',
            'description' =>'required',
            'dateEvent'   =>'required',
        ]);

        if (!empty(request()->image)) {
            $imageName = time() . '.' . request()->image->getClientOriginalExtension();
            request()->image->move(public_path('images'), $imageName);
        } else {
            $newsImage = Event::find($id);
            $imageName = $newsImage->image;
        }
        
        $news = Event::find($id);
        $news->title_event       = $request->get('title');
        $news->description_event = $request->get('description');
        $news->date_event        = $request->get('dateEvent');
        $news->image             = $imageName;
        $news->save();
        return redirect('admin/event')->with('success', 'Event updated!');
    }


    // Delete Event
    public function destroy($id)
    {
        $event = Event::find($id);
        $event->delete();
        return back()->with('success', 'Event Deleted!');
    }

}
