@extends('layouts.app')
@section('content')
<div class="container"> 
    <div class="row justify-content-end"> 
        <a href="books/create" class="btn btn-primary">追加</a> 
    </div> 
    <div class="mt-2 row"> 
        <table class="table table-striped"> 
        <thead>
            <tr class="table-info"> 
                <th scope="col">ID</th>
                <th scope="col">名前</th>
                <th scope="col">著者</th>
                <th scope="col">出版社</th>
                <th scope="col">出版年</th>
                <th scope="col">ISBN番号</th>
                <th scope="col">作成日時</th>
                <th scope="col">更新日時</th> 
            </tr>
        </thead>
        <tbody>
        @foreach ($books as $book)
            <tr> 
                <td>{{ $book->id}}</td>
                <td>{{ $book->name }}</td>
                <td>{{ $book->author }}</td>
                <td>{{ $book->company }}</td>
                <td>{{ $book->year_publication }}</td>
                <td>{{ $book->isbn }}</td>
                <td>{{ $book->created_at }}</td>
                <td>{{ $book->updated_at }}</td> 
            </tr>
        @endforeach
        </tbody> 
        </table> 
    </div> 
</div>
@endsection