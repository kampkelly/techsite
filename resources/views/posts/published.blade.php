@extends('layouts.admin_master')

@section('content')
    <div class="row">
     @include('../partials/admin_menubar')
		  <div class="col-sm-8 main_content">
                        <h2 class="text-center" style="text-decoration:underline;">Published Posts Panel</h2>
            <div style="height:10px" ;></div>
           
            <!--POSTS BEGINS --
            <div class="container post_pan"> -->
				<!--POSTS BEGINS -->
				    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Post Title</th>
                <th>Options</th>
                <th>Created At</th>
            </tr>
        </thead>
        <tfoot>
            <tr>
                <th>[Title]</th>
                <th>[Title]</th>
                <th>[Title]</th>
            </tr>        
        </tfoot>
        <tbody>
			 @foreach($posts as $post)
            <tr>
                <td><a href="/post/{{$post->id}}">{{ str_limit($post->title, 35) }}...</a> </td>
				<td><div><a href="/post/{{$post->id}}" class="btn btn-info btn-xs">View</a> <a href="/post/edit/{{$post->id}}" class="btn btn-warning btn-xs">Edit</a> <span>
				{{ Form::open(array('url' => '/post/'.$post->id, 'method' => 'DELETE')) }}
					{{ Form::submit('Delete', null, ['class' => 'btn btn-danger btn-xs']) }}
					{{ Form::close() }}</span></div>
				</td>
                <td>{{$post->created_at}}</td>
            </tr>
			@endforeach
        </tbody>
    </table>
    {{ $posts->links() }} <!--paginate links-->    

				<!--POSTS BEGINS --
				
                                
            </div>
            <!--POSTS ENDS -->
        
        </div>
     @include('../partials/admin_right-sidebar')
</div>

@endsection