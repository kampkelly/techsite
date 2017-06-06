@extends('layouts.admin_master')

@section('content')
    <div class="row">
     @include('../partials/admin_menubar')
		 <div class="col-sm-8 main_content">
			  <div class="container">
				   <h3 class="text-cener" style="text-decoration:underline;">Create New Category</h3>
					<form method="POST" action="/categories" class="form-horizontal" enctype="multipart/form-data" role="form">
						{{csrf_field()}}
						<div class="form-group">
							<label class="col-sm-2" for="category_name">Category Name
												</label>
							<input type="text" name="category_name" id="category_name" placeholder="Enter Name">
						</div>

						<div class="form-group">
							<label class="col-sm-2" for="category_submit">
												</label>
							<input type="submit" name="category_submit" id="category_submit" value="Create category" class="btn btn-primary">
						</div>
					</form>
			</div>
		</div>
     @include('../partials/admin_right-sidebar')
</div>

@endsection




