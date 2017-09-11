<header ng-style="{'background-color': color}">
    <h3 class="text-center">PQTECH</h3>
    <div class="container">
        <ul class="nav nav-tabs text-center">
            <li class="nav-item">
                <a class="nav-link active" href="/">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link active" href="/posts">Site Posts</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Technology <span class="glyphicon glyphicon-arrow-down"></span></a>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="#">Computers/Windows</a>
                    <a class="dropdown-item" href="#">Ios/Machintosh</a>
                    <a class="dropdown-item" href="#">Android/Apps</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">Virtual Reality</a>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link active" href="/posts/new">News</a>
            </li>
            <li class="nav-item">
                <a class="nav-link active" href="#">About</a>
            </li>
            <!--      <li class="nav-item">
                <a class="nav-link active" href="admins/">Admin Login</a>
            </li> -->
            <li style="padding-top:0px;" class="nav-item pull-right">
                <form class="nav-link active" action="/search">
                    <input type="text" placeholder="e.g Virtual reality..." name="q">
                     <button type="submit" class="btn btn-success">
                        <span class="glyphicon glyphicon-search"></span>
                    </button>
                </form>
            </li>
        </ul>
    </div>
</header>
<div class="clearfix"></div>
<div class="header_hei" id="scroll_top"></div>