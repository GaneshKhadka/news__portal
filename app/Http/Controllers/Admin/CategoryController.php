<?php
/**
 * Created by PhpStorm.
 * User: ganes
 * Date: 05/08/2018
 * Time: 16:08
 */

namespace App\Http\Controllers\Admin;


use App\Http\Controllers\Controller;
use App\Models\Category;
use App\User;

class CategoryController extends Controller
{
    public function index()
    {

        $data = [];
        $data['rows'] = Category::select('id', 'created_at', 'title','status')->get();


        return view('admin.category.index',compact('data'));
      }

    public function add()
    {
        return view('admin.category.add');
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