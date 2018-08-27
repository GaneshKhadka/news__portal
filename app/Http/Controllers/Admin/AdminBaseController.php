<?php
/**
 * Created by PhpStorm.
 * User: ganes
 * Date: 05/08/2018
 * Time: 16:08
 */

namespace App\Http\Controllers\Admin;


use View;
use App\Http\Controllers\Controller;
class AdminBaseController extends Controller
{
    protected function loadDataToView($view_path)
    {
        View::composer($view_path, function($view){
           $view->with('base_route',$this->base_route);
           $view->with('panel',$this->panel);
        });
        return $view_path;
   }

}