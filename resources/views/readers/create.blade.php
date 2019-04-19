@extends('layouts.app')
@section('content')
{!! Form::open(['url' => 'readers']) !!}
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
                            {!! Form::label('admission_year', '入学年度:',['class' => 'col-form-label']) !!} 
                        </div>
                        <div class="form-group col-4"> 
                            {!! Form::selectRange('admission_year', date('Y')-10, date('Y'), null, ['class' => 'form-control']) !!} 
                        </div>
                        <div class="form-group col-1 text-left col-form-label">年</div> 
                    </div>
                    <div class="row"> 
                        <div class="form-group col-5 text-right"> 
                            {!! Form::label('school_number', '学生番号:') !!} 
                        </div>
                        <div class="form-group col-5"> 
                            {!! Form::text('school_number', null, ['class' => 'form-control']) !!} 
                        </div> 
                    </div>
                    <div class="row"> 
                        <div class="form-group col-5 text-right"> 
                            {!! Form::label('department_id', '所属:') !!} 
                        </div>
                        <div class="form-group col-5">
                            {!! Form::select('department_id', $departments, null, ['class' => 'form-control', 'dropdown-toggle']) !!} 
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