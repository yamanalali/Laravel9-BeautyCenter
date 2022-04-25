<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application
     * \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index()
    {
        //
        $data= Category::all();
        return view(  'admin.category.index',[ "data" => $data ]);
    }
//[ ]
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view(view: 'admin.category.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

       // echo $request;

        $data= new category();
        $data->parent_id = 0;
        $data->title = $request->title;
        $data->description = $request->description;
        $data->keywords = $request->keywords;
        $data->status = $request->status;
        $data->save();
        return redirect(to:'admin/category');



    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category, $id)
    {
        //
       // echo 'Show area: ', $id;
        $data = Category::find($id);
        return view(  'admin.category.show',[ "data" => $data ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $category,$id)
    {
        //
        $data = Category::find($id);
        return view(  'admin.category.edit',[ "data" => $data ]);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Category $category,$id)
    {
        //

        $data= Category::find($id);
        $data->parent_id = 0;
        $data->title = $request->title;
        $data->description = $request->description;
        $data->keywords = $request->keywords;
        $data->status = $request->status;
        $data->save();
        return redirect(to:'admin/category');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category, $id)
    {
        //
        $data= Category::find($id);
        $data->delete();
        return redirect(to:'admin/category');
    }
}
