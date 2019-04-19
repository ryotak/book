@extends('layouts.app')
@section('content')
{!! Form::open(['url' => 'books']) !!}
<div class="container"> 
    <div class="row justify-content-center"> 
        <div class="col-8"> 
            <div class="card"> 
                <div class="card-header alert-danger">新規</div>
                <div class="card-body"> 
                    <div class="row"> 
                        <div class="form-group col-5 text-right"> 
                            {!! Form::label('name', '名前:') !!} 
                        </div>
                        <div class="form-group col-5"> 
                            {!! Form::text('name', null, ['class' => 'form-control']) !!} 
                        </div> 
                    </div>
                    <div class="row"> 
                        <div class="form-group col-5 text-right"> 
                            {!! Form::label('author', '著者:') !!} 
                        </div>
                        <div class="form-group col-5"> 
                            {!! Form::text('author', null, ['class' => 'form-control']) !!} 
                        </div>
                    </div>
                    <div class="row"> 
                        <div class="form-group col-5 text-right"> 
                            {!! Form::label('company', '出版社:') !!} 
                        </div>
                        <div class="form-group col-5"> 
                            {!! Form::text('company', null, ['class' => 'form-control']) !!} 
                        </div> 
                    </div>
                    <div class="row"> 
                        <div class="form-group col-5 text-right"> 
                            {!! Form::label('publication_year', '出版年:') !!} 
                        </div>
                        <div class="form-group col-5">
                            {!! Form::text('publication_year', null, ['class' => 'form-control']) !!} 
                        </div> 
                    </div>
                    <div class="row"> 
                        <div class="form-group col-5 text-right"> 
                            {!! Form::label('isbn', 'ISBN番号:') !!} 
                        </div>
                        <div class="form-group col-5">
                            {!! Form::text('isbn', null, ['class' => 'form-control']) !!} 
                        </div> 
                    </div>
                    <div class = "row"> 
                        <div class="col-5"></div>
                        <div class= "form-group col-5"> 
                            {!! Form::submit('登録', ['class' => 'btn btn-primary btn-sm form-control']) !!} 
                        </div> 
                    </div> 
                </div> 
            </div> 
        </div> 
    </div> 
</div>
{!! Form::close() !!}
@endsection