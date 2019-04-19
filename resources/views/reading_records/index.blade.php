@extends('layouts.app')
@section('content')
<div class="container"> 
    <div class="row justify-content-end"> 
        <a href="reading_records/create" class="btn btn-primary">追加</a> 
    </div> 
    <div class="mt-2 row"> 
        <table class="table table-striped"> 
        <thead>
            <tr class="table-info"> 
                <th scope="col">ID</th>
                <th scope="col">本</th>
                <th scope="col">読者</th>
                <th scope="col">読書年月</th>
                <th scope="col">感想</th>
                <th scope="col">作成日時</th>
                <th scope="col">更新日時</th> 
            </tr>
        </thead>
        <tbody>
        @foreach ($reading_records as $reading_record)
            <tr> 
                <td>{{ $reading_record->id}}</td>
                <td>{{ $reading_record->book->name }}</td>
                <td>{{ $reading_record->reader->name }}</td>
                <td>{{ $reading_record->year_read.$reading_record->month_read }}</td>
                <td>{{ $reading_record->report }}</td>
                <td>{{ $reading_record->created_at }}</td>
                <td>{{ $reading_record->updated_at }}</td> 
            </tr>
        @endforeach
        </tbody> 
        </table> 
    </div> 
</div>
@endsection