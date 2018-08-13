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


    public function store(AddFormValidation $request)
    {
        $request->request->add([
            'status' => $request->get('status') == 'active'?1:0
        ]);

        User::create($request->all());
        $request->session()->flash('success_message','User added successfully');
        return redirect()->route('admin.user');
    }

    public function edit(Request $request, $id){
        $data = [];
        $data['row'] = User::where('id', $id)->first();
    }

}