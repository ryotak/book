@extends('layouts.app')
@section('content')
{!! Form::open(['url' => 'reading_records']) !!}
<div class="container"> 
    <div class="row justify-content-center"> 
        <div class="col-8"> 
            <div class="card"> 
                <div class="card-header alert-danger">新規</div>
                <div class="card-body"> 
                    <div class="row"> 
                        <div class="form-group col-5 text-right"> 
                            {!! Form::label('book_id', '本:') !!} 
                        </div>
                        <div class="form-group col-5"> 
                            {!! Form::select('book_id', $books, null, ['class' => 'form-control', 'dropdown-toggle']) !!}  
                        </div> 
                    </div>
                    <div class="row"> 
                        <div class="form-group col-5 text-right"> 
                            {!! Form::label('reader_id', '読者:') !!} 
                        </div>
                        <div class="form-group col-4"> 
                            {!! Form::select('reader_id', $readers, null, ['class' => 'form-control', 'dropdown-toggle']) !!}   
                        </div>
                    </div>
                    <div class="row"> 
                        <div class="form-group col-5 text-right"> 
                            {!! Form::label('year_read', '読書年:') !!} 
                        </div>
                        <div class="form-group col-5"> 
                            {!! Form::text('year_read', null, ['maxlength'=>4,'class' => 'form-control']) !!} 
                        </div> 
                    </div>
                    <div class="row"> 
                        <div class="form-group col-5 text-right"> 
                            {!! Form::label('month_read', '読書月:') !!} 
                        </div>
                        <div class="form-group col-5"> 
                            {!! Form::text('month_read', null, ['maxlength'=>2,'class' => 'form-control']) !!} 
                        </div> 
                    </div>
                    <div class="row"> 
                        <div class="form-group col-5 text-right"> 
                            {!! Form::label('report', '感想:') !!} 
                        </div>
                        <div class="form-group col-5">
                            {!! Form::textarea('report', null, ['maxlength'=>255, 'class' => 'form-control', 'dropdown-toggle']) !!} 
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