<?php

namespace App\Http\Controllers;
use App\Event;
use App\News;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ShowPublicController extends Controller
{
    // Show Event HomePage
    public function index(){
        // $events = Event::all();
        $events = DB::table('events')->limit(3)->get();
        $news   = DB::table('news')->limit(3)->get();

        $l_event = DB::table('events')
            ->limit(3)
            ->offset(3)
            ->get();

        $l_news  = DB::table('news')
            ->limit(3)
            ->offset(3)
            ->get();

        return view('Pages.index', compact('events','news', 'l_event', 'l_news'));
    }


    // Show Single Event
    public function Event($id){
        // dd('eventDetails');
        $events = DB::table('events')
            ->select('events.id', 'events.title_event', 'events.description_event','events.image')
            ->where('events.id', $id)
            ->get();
        // dd($events);
        $event = $events[0];

        return view('Pages.eventDetails', compact('event'));
    }


    // Show Single News
    public function News($id){
        // dd('eventDetails');
        $news = DB::table('news')
            ->select('news.id', 'news.title_news', 'news.description_news','news.image')
            ->where('news.id', $id)
            ->get();

        // dd($news);
        $new = $news[0];

        return view('Pages.newsDetails',compact('new'));
    }







}

//footer
// $l_event = DB::table('events')
// ->orderBy('id','DESC')
// ->limit(3)
// ->get();