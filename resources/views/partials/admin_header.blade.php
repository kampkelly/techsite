
        <div id="custom-bootstrap-menu" class="navbar navbar-default navbar-fixed-top " role="navigation">
            <div class="container-fluid">
                <div class="navbar-header"><a class="navbar-brand" href="/">Pqarena</a>
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-menubuilder"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span>
                    </button>
                </div>
                <div class="collapse navbar-collapse navbar-menubuilder">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="index.php">Home</a>
                        </li>
                        <li><a href="all_posts.php">Blog Posts</a>
                        </li>
						<li><a href="category.php?category_id=1">Job Tests</a></li>
                            <li><a href="categories.php">Categories</a>
                            </li>
                            <li><a href="/contact">Contact Us</a>
                            </li>
                            <li><a href="index.php">Admin Dashboard</a>
                            </li>
						
                        <!-- Authentication Links -->
                        @if (Auth::guest())
                            <li><a href="{{ route('login') }}">Login</a></li>
                            <li><a href="{{ route('register') }}">Register</a></li>
                        @else
							<li class="dropdown-enu" role="menu" aria-labelledby="navbarDropdownMenuLink">
                                        <a class="dropdon-item" href="{{ route('logout') }}"
                                            onclick="logout();">
                                            Logout
                                        </a>
                                    <script>
                                        function logout() {
                                            if (confirm('Logging out will clear your Cart. Continue?')){
                                                event.preventDefault();
                                                document.getElementById('logout-form').submit();
                                            } else {
                                                event.preventDefault();
                                            }
                                        }
                                        
                                    </script>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                </li>
                        @endif
                   
						
                
                    </ul>
                </div>
            </div>
        </div>
<div style="height:70px" ;></div>