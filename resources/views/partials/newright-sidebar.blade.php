<div class="col-sm-3 side_bar" ng-style="{\'background-color\': color}">
<div style="height: 20px;"></div>
    <div>
    <form action="/search" method="POST" role="search">
        {{ csrf_field() }}
        <div class="input-group">
            <input type="text" class="form-control" name="q"
                placeholder="Search anything"> <span class="input-group-btn">
                <button type="submit" class="btn btn-default">
                    <span class="glyphicon glyphicon-search"></span>
                </button>
            </span>
        </div>
    </form>

        <!--RECENT POSTS BEGINS-->
        <h4 class="text-center">Recent Posts</h4>
        <ul class="list-group">
           @foreach($sideposts as $sidepost)
                <li class="list-group-item"><a>{{$sidepost->title}}</a></li>
            @endforeach
        </ul>
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
        <h4 class="text-center">Tags</h4>
        @foreach($tags as $tag)
			<a href="/posts/tags/{{$tag}}">{{$tag}}</a> <br>
		@endforeach
       
        <!--ARCHIVE-->
        <h4 class="text-center">Archives</h4>
            @foreach($archives as $stats)
                <a href="/posts/?month={{$stats['month']}}&year={{$stats['year']}}">{{$stats['month']. ' '.$stats['year']}}</a> <br>
            @endforeach
            <!--ARCHIVE-->
            <!--LINKS-->
    	<h4 class="text-center">Links</h4>
        <ul class="list-unstyled">
            <li><a href="/admin">Login</a></li>
            <!--LINKS-->
    </div>
</div>
<script async defer src="//assets.pinterest.com/js/pinit.js"></script>
