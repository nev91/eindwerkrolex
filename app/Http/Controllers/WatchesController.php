<?php

namespace App\Http\Controllers;

use App\Category;
use App\Http\Requests\WatchesEditRequest;
use App\Http\Requests\WatchesRequest;
use App\Photo;
use App\Watch;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class WatchesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $watches = Watch::all();
        return view('admin.watches.index', compact('watches'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $watches = Watch::pluck('name', 'id')->all();
        $categories = Category::pluck('name', 'id')->all();
        return view('admin.watches.create', compact('watches', 'categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(WatchesRequest $request)
    {
        $input = $request->all();
        if ($file = $request->file('photo_id')){;
            $filename = $input['name'];
            $extension = $input['photo_id']->extension();
            $file->move('images/allehorloges', $filename.'.'.$extension);
            $photo = Photo::create(['file'=>$filename]);
            $input['photo_id'] = $photo->id;
        }
        Watch::create($input);
        return redirect('/admin/watches');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $watch = Watch::findOrFail($id);
        $categories = Category::pluck('name', 'id')->all();
        return view('admin.watches.edit', compact('watch','categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(WatchesEditRequest $request, $id)
    {
        $watch = Watch::findOrFail($id);
        $input = $request->all();
        if($file = $request->file('photo_id')){
            $name = time() . $file->getClientOriginalName();
            $file->move('images', $name);
            $photo = Photo::create(['file'=>$name]);
            $input['photo_id'] = $photo->id;
        }
        $watch->update($input);
        return redirect('/admin/watches');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $watch = Watch::findOrFail($id);
        $watch->delete();
        Session::flash('deleted_watch', 'Het horloge is verwijderd');
        return redirect('/admin/watches');
    }
}