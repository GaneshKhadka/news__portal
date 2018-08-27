<?php
/**
 * Created by PhpStorm.
 * User: ganes
 * Date: 05/08/2018
 * Time: 16:08
 */

namespace App\Http\Controllers\Admin;


use App\Http\Requests\Category\AddFormValidation;
use App\Http\Requests\Category\EditFormValidation;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends AdminBaseController
{
    protected $base_route = 'admin.category';
    protected $view_path = 'admin.category';
    protected $folder_name = 'category';
    protected $panel = 'Category';
    protected $folder_path;

    public function __construct()
    {
       $this->folder_path = public_path().DIRECTORY_SEPARATOR.'images'.DIRECTORY_SEPARATOR.$this->folder_name;
    }

    public function index()
    {

        $data = [];
        $data['rows'] = Category::select('id', 'created_at', 'title','image','status')->get();


        return view(parent::loadDataToView($this->view_path.'.index'),compact('data'));
      }

    public function add()
    {
        return view(parent::loadDataToView($this->view_path.'.add'));
    }

    public function store(AddFormValidation $request)
    {

          if($request->hasFile('main_image')){
              $image = $request -> file('main_image');
              $image_name = rand(1000, 5000).'_'.$image->getClientOriginalName();
              $image->move($this->folder_path, $image_name);
          }

        $request->request->add([
            'slug' => str_slug($request->get('title')),
            'status' => $request->get('status') == 'active'?1:0,
            'image' => $image_name
        ]);

        Category::create($request->all());
        $request->session()->flash('success_message','Category added successfully');
        return redirect()->route($this->base_route);
    }

    public function edit(Request $request, $id){
              $data = [];
              $data['row'] = Category::where('id', $id)->first();

        if(!$data['row']){
            $request->session()->flash('error_message','Invalid request.');
            return redirect()->route($this->base_route);
        }
        $data['row']->status = $data['row']->status == 1?'active':'in-active';
        return view(parent::loadDataToView($this->view_path.'.edit'),compact('data'));

    }

    public function update(EditFormValidation $request, $id)
    {
        $data=[];
        $data['row'] = Category::where('id',$id)->first();

        if($request->hasFile('main_image')){

            $image = $request -> file('main_image');
            $image_name = rand(1000, 5000).'_'.$image->getClientOriginalName();
            $image->move($this->folder_path, $image_name);

            if( $data['row']->image && file_exists($this->folder_path.DIRECTORY_SEPARATOR.$data['row']->image))
            unlink($this->folder_path.DIRECTORY_SEPARATOR.$data['row']->image);
        }

            $request->request->add([
                'slug' => str_slug($request->get('title')),
                'status' => $request->get('status') == 'active'?1:0,
                'image' => isset($image_name)?$image_name:$data['row']->image
            ]);
        $data['row']->update($request->all());
        $request->session()->flash('success_message','Category added successfully');
        return redirect()->route($this->base_route);
    }

    public function delete(Request $request, $id)
    {
        $data = [];
        $data['row'] = Category::where('id', $id)->first();

        if(!data['row']){
            $request->session()->flash('error_message','Invalid request.');
            return redirect()->route($this->base_route);
        }


        if( $data['row']->image && file_exists($this->folder_path.DIRECTORY_SEPARATOR.$data['row']->image))
            unlink($this->folder_path.DIRECTORY_SEPARATOR.$data['row']->image);

        $data['row']->delete();
        $request->session()->flash('success_message','Category deleted successfully');
        return redirect()->route($this->base_route);
    }

}