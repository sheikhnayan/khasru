<header>
    <nav class="navbar navbar-expand-md sticky" id="navbar">
        <a class="navbar-brand" href="/">Docmerit</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav">
            <i class="fas fa-bars" style="color: #fff;"></i>
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
                @if (Auth::check())
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/profile') }}">Profile</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link reg" href="{{ url('/downloads') }}">Downlaod</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/upload') }}">Uplaods</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link reg" href="{{ url('/cart') }}">Cart
                    
                        @if (count(Auth::user()->cart) > 0)
                            ( {{ count(Auth::user()->cart) }} )
                        @endif
                    
                    </a>
                </li>
                <li class="nav-item">
                    <form id="myform_id" action="{{ route('logout') }}" method="post">
                    @csrf

                        <a class="nav-link" href="javascript:$('#myform_id').submit();">Logout</a>
                    
                    </form>
                </li>
                @else
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/login') }}">Login</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link reg" href="{{ url('/register') }}">Register</a>
                </li>
                    
                @endif
            </ul>
        </div>
    </nav>
</header>