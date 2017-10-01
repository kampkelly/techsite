<style type="text/css">
	header {
		font-family: 'Crimson Text', serif;
		z-index: 99;
	}
	header .nav {
		display: flex;
		text-shadow: 0.4px 0.4px #FAFAFA;
	}
	header .top_ul {
		display: flex;
		text-shadow: 0.4px 0.4px #FAFAFA;
	/*	box-shadow: 0px 3px #e1e1e1; */
		box-shadow: 0px 3px #ae7d21; 
	}
	header .nav li a {
		color: #96653B; 
	/*	color: white; */
	}
	.drop-ul {
		padding: 20px;
	}
	#second_ul {
		padding-top: 20px; padding-left: 100px;
	}
	#second_ul ul li {
		margin-right: 70px;
	}
	.mob {
		padding-top: 18px;
	}
	.mob span {
		font-size: 20px;
	}
	.mob a {color: #5A5950 !important;}
</style>
<header style="background: #FAFAFA; padding-bottom: 10px;">
	<div style="display: none;">
		<h3 class="text-center" style="margin-top: 0px; padding-top: 5px; color: #286090;">Runor's Blog</h3>
	</div>		
		
			<ul class="container list-inline nav top_ul" style="background-color: #FAFAFA; padding: 0px 0px 0px 0px;">
			
				<li >
				<a href="/" style="padding: 0px 0px 0px 0px;"><img src="{{ asset('newlogo.png') }}" style="height: 5em;"></a>
				</li>
				<li class="mob" style="display: non; flex: 1;"><a class="nav-link active" href="/blog">Articles</a></li>
				<li class="mob" style="display: non; flex: 1;"><a class="nav-link active" href="/projects">Projects</a></li>
				<li class="mob" style="display: non; flex: 1;"><a class="nav-link active" href="/contact">Contact</a></li>
				<li class="mob" style="display: non; flex: 1; display: none;"><a class="nav-link active" href="#"><span class="glyphicon glyphicon-menu-hamburger"></span></a></li>
				<li id="second_ul">
					<ul class="list-inline nav">
						<li><h4><a class="nav-link active" href="/">Home</a></h4></li>
						<li> <h4><a class="nav-link active" href="/blog">Articles</a></h4></li>
						<li style="position: relative;">
						<h4><a class="drop-item" href="#" style="display: none;">Tags <span class="glyphicon glyphicon-arrow-down"></span></a></h4>
						<ul style="position: absolute; display: block; background-color: #FAFAFA; width: 100%; display: none;" class="list-unstyled drop-ul row">
							@foreach($categories as $category)
								<li class="col-lg-6"><a href="#" class="nav-link">{{$category->name}}</a></li>
							@endforeach
						</ul>
						</li>
						<li><h4><a class="dropdown-item" href="/projects">Projects</a></h4></li>
						<li><h4><a class="dropdown-item" href="/contact">Contact</a></h4></li>
					</ul>
				</li>
			</ul>
			

</header>
