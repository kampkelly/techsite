<div class="col-sm-2 side_bar">

    <div>
        <!--RECENT POSTS BEGINS-->
        <h4 class="text-center">Recent Posts</h4>
        <div class="list-group">
           @foreach($posts as $post)
				<a href="post/{{$post->id}}" class="list-group-item">
					<div class="col-sm-3">
						<img src="{{ asset('uploads/'.$post->image) }}" width="100%">
					</div>
					<div class="col-sm-9">
						<h5 class="list-group-item-heading">{{ str_limit($post->title), 25 }}</h5>
					</div>
					<h6 class="list-group-item-text">{{ str_limit($post->body_text, 54) }}</h6>
				</a>
			@endforeach
        </div>
        <!--RECENT POSTS ENDS-->
        <!--CATEGORIES BEGINS-->
        <h4 class="text-center">Categories</h4>
        <form action="/cat" method="POST" role="form">  
            {{csrf_field()}}      
            <div class="form-group">
                <select name="cat" class="form-control">
                    @foreach($categories as $category)
                        <option class="btn btn-block" value="{{$category->id}}">{{$category->name}}</option>
                    @endforeach
                </select>
            </div>
            <button type="submit" class="btn btn-primary btn-block">Go</button>
        </form>
        <!--CATEGORIES ENDS-->
        <!--TAGS BEGINS-->
        <h4 class="text-center">Tags</h4>
        <div class="text-center">
        @foreach($tags as $tag)
            <a href="/posts/tags/{{$tag}}">{{$tag}}</a> <br>
        @endforeach
        </div>
        <!--TAGS ENDS-->
        <!--ARCHIVE-->
        <h4 class="text-center">Archives</h4>
        <div class="text-center">
        @foreach($archives as $stats)
                <a href="/posts/?month={{$stats['month']}}&year={{$stats['year']}}">{{$stats['month']. ' '.$stats['year']}}</a> <br>
            @endforeach
        </div>
       
            <!--ARCHIVE-->
    </div>
</div>
