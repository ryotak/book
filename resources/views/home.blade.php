@extends('layouts.app')
@section('content')
<div class="container">　
	<div class="row justify-content-center">　
		<div class="col-md-8">　
			<div class="list-group">　
				<a href="reading_records" class="list-group-item list-group-item-action list-group-item-primary">読書一覧記録を参照する</a>
				<a href="readers" class="list-group-item list-group-item-action list-group-item-secondary">読者一覧を参照する</a>
				<a href="books" class="list-group-item list-group-item-action list-group-item-success">図書一覧を参照する</a>
			</div>
		</div>
	</div>
</div>
@endsection
