<header style="background: #3160a6; padding-left:20px; padding-right:20px; margin-left:0px; margin-right:0px">
    <nav class="navbar navbar-expand-md sticky" id="navbar">
        <a class="navbar-brand" href="#">Docmerit</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav mr-auto">
                <!-- <li class="nav-item active">
                    <a class="nav-link" href="#"><span class="sr-only">(current)</span></a>
                </li> -->
                <!-- <li class="nav-item">
                    <a class="nav-link" href="#"></a>
                </li> -->
                <!-- <li class="nav-item">
                    <a class="nav-link" href="#"></a>
                </li> -->
            </ul>
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/login') }}">Login</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link reg" href="{{ url('/register') }}">Register</a>
                </li>
            </ul>
        </div>
    </nav>
</header>