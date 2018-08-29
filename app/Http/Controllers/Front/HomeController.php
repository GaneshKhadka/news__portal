<?php
namespace App\Http\Controllers\Front;

use App\Models\News;

class HomeController extends FrontBaseController
{
    public function index()
    {
        $data = [];
        $data['news'] = News::select('title', 'slug', 'writer', 'short_des')
            ->get();
       return view(parent::loadDataToView('front.home.index'), compact('data'));
          }
}
