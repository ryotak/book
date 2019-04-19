<?php

namespace book\Http\Controllers;

use book\Book;
use book\Reader;

use book\ReadingRecord;
use Illuminate\Http\Request;

class ReadingRecordController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $reading_records = ReadingRecord::all();
        return view('reading_records.index',compact('reading_records')); 

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $books = Book::pluck('name','id');
        $readers = Reader::pluck('name','id');
        return view('reading_records.create',compact('books','readers')); 
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
        $reading_record = $request->all();
        ReadingRecord::create($reading_record);
        return redirect('reading_records'); 
    }

    /**
     * Display the specified resource.
     *
     * @param  \book\ReadingRecord  $readingRecord
     * @return \Illuminate\Http\Response
     */
    public function show(ReadingRecord $readingRecord)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \book\ReadingRecord  $readingRecord
     * @return \Illuminate\Http\Response
     */
    public function edit(ReadingRecord $readingRecord)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \book\ReadingRecord  $readingRecord
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ReadingRecord $readingRecord)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \book\ReadingRecord  $readingRecord
     * @return \Illuminate\Http\Response
     */
    public function destroy(ReadingRecord $readingRecord)
    {
        //
    }
}
