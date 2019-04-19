<?php

namespace book\Http\Controllers;

use book\Reader;
use book\Department;
use Illuminate\Http\Request;

class ReaderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
		$readers = Reader::all();
		//return $a;
		return view('readers.index',compact('readers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $departments = Department::pluck('name','id');
        //return view('readers.create');
        return view('readers.form', compact('departments'));
        //return view('readers.form', compact($departments));

        //$books = Book::pluck('name','id');
        //$readers = Reader::pluck('name','id');
        //return view('reading_records.form',compact('books','readers'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $reader = $request->all();
        Reader::create($reader);
        return redirect('readers');
    }

    /**
     * Display the specified resource.
     *
     * @param  \book\Reader  $reader
     * @return \Illuminate\Http\Response
     */
    public function show(Reader $reader)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \book\Reader  $reader
     * @return \Illuminate\Http\Response
     */
    public function edit(Reader $reader)
    {
        //
        $departments = Department::pluck('name','id');
        return view('readers.form', compact('reader', 'departments'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \book\Reader  $reader
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Reader $reader)
    {
        //
        $input = $request->all();
        $reader->update($input);
        return redirect('readers');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \book\Reader  $reader
     * @return \Illuminate\Http\Response
     */
    public function destroy(Reader $reader)
    {
        //
        $reader->delete();
        return redirect ('readers'); 

    }
}
