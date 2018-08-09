<?php
/**
 * Created by PhpStorm.
 * User: ganes
 * Date: 05/08/2018
 * Time: 16:08
 */

namespace App\Http\Controllers\Admin;


use App\Http\Controllers\Controller;
use App\User;

class UserController extends Controller
{
    public function index()
    {

        $data = [];
        $data['rows'] = User::select('id', 'created_at', 'email','username','contact_no','status')->get();

        return view('admin.user.index',compact('data'));
      }

    public function add()
    {
        return view('admin.user.add');
    }

}