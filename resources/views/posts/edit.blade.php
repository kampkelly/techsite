@extends('layouts.admin_master')

@section('content')
    <div class="row">
     @include('../partials/admin_menubar')
		  <div class="col-sm-8 main_content">
                 <h2 class="text-center" style="text-decoration:underline;">Edit {{$post->title}} Post</h2>
			      {{ Form::open(array('url' => '/post/'.$post->id, 'method' => 'PUT', 'files' => true, 'class'=>'form-horizontal')) }}
				{{-- Form::hidden('category', 2) --}}
					<div class="form-group">
							{{ Form::label('post_title', 'Post Title') }}
							{{ Form::text('post_title', $post->title, ['class' => 'form-control']) }}
			  		</div>
			  		<div class="form-group">
						{{ Form::label('post_image', 'Preview Image') }}
						{{ Form::file('post_image', null, ['class' => 'btn btn-success', 'id' => 'fileupload']) }}
					</div>
			  		  <b>Live Preview</b>
                        <br />
                        <br />
                        <div id="dvPreview">
                        </div>
					<div class="form-group">
							{{ Form::label('post_description', 'Body') }}
							{{ Form::textarea('post_description', $post->body, ['class' => 'form-control', 'placeholder' => $post->body, 'rows' => 5]) }}
					</div>
			  		<div class="form-group">
							{{ Form::label('post_category', 'Category') }}
							{{ Form::select('post_category', $cats, ['class' => 'form-control']) }}
					</div>
			  		<div class="form-group">
						<div id="tag_show" class="well">
							<span class="pull-left" style="font-weight:bold;">Made Tags:</span>

								<span style="color:blue">pc news computers</span>,
						</div>
					</div>
			  		<div class="form-group">
							{{ Form::label('tags', 'Tags') }}
							{{ Form::text('tags', $post->tags, ['class' => 'form-control', 'placeholder' => $post->tags]) }}
					</div>
			  		<div class="form-group">
							{{ Form::label('status', 'Status') }}
						{{ Form::select('status', ['Published' => 'Publish', 'Save' => 'Save', 'Draft' => 'Draft'], null, ['class' => 'form-control']) }}
					</div>
					<div class="form-group">
							{{ Form::submit('Update!', null, ['class' => 'form-control btn btn-default btn-block']) }}
					</div>
						{{ Form::close() }}
        </div>
     @include('../partials/admin_right-sidebar')
</div>

@endsection