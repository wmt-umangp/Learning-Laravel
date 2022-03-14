<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Crud;
class crudcontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $cruds = Crud::all();

        return view('index', compact('cruds'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'fname'=>'required',
            'lname'=>'required',
            'gender'=>'required',
            'qualifications'=>'required'
        ]);

        $crud= new Crud;
        $crud->fname= $request->get('fname');
        $crud->lname= $request->get('lname');
        $crud->gender= $request->get('gender');
        $crud->qualifications= $request->get('qualifications');
        $crud->save();
        return redirect()->route('user.index');
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
        $crud= Crud::find($id);
        return view('edit', compact('crud'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'fname'=>'required',
            'lname'=>'required',
            'gender'=>'required',
            'qualifications'=>'required'
        ]);
        $crud = Crud::find($id);
        $crud->fname =  $request->get('fname');
        $crud->lname = $request->get('lname');
        $crud->gender = $request->get('gender');
        $crud->qualifications = $request->get('qualifications');
        $crud->save();
        return redirect()->route('user.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function destroy($id)
    {
        $crud=  Crud::find($id);
        $crud->delete();
        return redirect()->route('user.index');
    }
}
