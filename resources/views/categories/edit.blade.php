@extends('layouts.admin_master')

@section('content')
    <div class="row">
     @include('../partials/admin_menubar')
		 <div class="col-sm-8 main_content">
			  <div class="container">
				   <h3 class="text-cener" style="text-decoration:underline;">Edit Category</h3>
				  {{ Form::open(array('url' => '/category/'.$category->id, 'method' => 'PUT', 'class'=>'form-horizontal')) }}
					<div class="form-group">
							{{ Form::label('category', 'Category Name') }}
							{{ Form::text('category', $category->name, ['class' => 'form-control', 'placeholder' => 'Enter Category', 'rows' => 5]) }}
					</div>
					<div class="form-group">
							{{ Form::submit('Add Comment!', null, ['class' => 'form-control btn btn-default btn-block']) }}
					</div>
						{{ Form::close() }}
			</div>
		</div>
     @include('../partials/admin_right-sidebar')
</div>

@endsection




