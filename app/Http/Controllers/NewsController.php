<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    function news()
    {
        $news = News::orderBy('news_id', 'DESC')->paginate(1);
        $latestnews = News::orderBy('news_id','DESC')->take(5)->get();
        //return $news;
        return view('whatisnew.news',['news'=>$news,'latestnews'=>$latestnews]);
    }
}
