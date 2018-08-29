<?php
namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use View;

class FrontBaseController extends Controller
{
    protected function loadDataToView($view_path)
    {
        View::composer($view_path, function($view){

        });
        return $view_path;
    }
}
