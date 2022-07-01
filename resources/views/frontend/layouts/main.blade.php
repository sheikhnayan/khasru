<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('frontend/Style.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js">
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"> -->
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
    
    <link rel="stylesheet" href="{{ asset('frontend/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/owl.theme.default.min.css') }}">
    <script src="https://kit.fontawesome.com/73605b6102.js" crossorigin="anonymous"></script>
    @yield('header')
    <title>DocMerit</title>
</head>

@yield('content')


<section id="last2">
    <div class="container">
        <div class="row justify-content-center align-items-center">
            <div class="titlehead">
                <h1>WHAT STUDENTS ARE SAYING ABOUT US</h1>
            </div>
            
        </div>
    </div>

<div class="owl-carousel owl-theme">
    <div class="item">
        <div class="container">
            <div class="row">
                <div class="col ">
                    <div class="card justify-content-center align-items-center">
                        <div class="discription">
                            <p>Docmerit is a great platform to get and share study resources, especially the resource contributed by past students and who have done similar courses.</p>
                        </div>
                        <div class="image">
                            <img src="{{ asset('frontend/picture/1615359938.webp') }}" alt="">
                        </div>
                        <div class="title">
                            <h1>Northwestern University</h1>
                        </div>
                        <div class="name">
                            <p>Karen</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="item">
        <div class="container">
            <div class="row">
                <div class="col ">
                    <div class="card justify-content-center align-items-center">
                        <div class="discription">
                            <p>Docmerit is a great platform to get and share study resources, especially the resource contributed by past students and who have done similar courses.</p>
                        </div>
                        <div class="image">
                            <img src="{{ asset('frontend/picture/1615359938.webp') }}" alt="">
                        </div>
                        <div class="title">
                            <h1>Northwestern University</h1>
                        </div>
                        <div class="name">
                            <p>Karen</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="item">
        <div class="container">
            <div class="row">
                <div class="col ">
                    <div class="card justify-content-center align-items-center">
                        <div class="discription">
                            <p>Docmerit is a great platform to get and share study resources, especially the resource contributed by past students and who have done similar courses.</p>
                        </div>
                        <div class="image">
                            <img src="{{ asset('frontend/picture/1615359938.webp') }}" alt="">
                        </div>
                        <div class="title">
                            <h1>Northwestern University</h1>
                        </div>
                        <div class="name">
                            <p>Karen</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="item">
        <div class="container">
            <div class="row">
                <div class="col ">
                    <div class="card justify-content-center align-items-center">
                        <div class="discription">
                            <p>Docmerit is a great platform to get and share study resources, especially the resource contributed by past students and who have done similar courses.</p>
                        </div>
                        <div class="image">
                            <img src="{{ asset('frontend/picture/1615359938.webp') }}" alt="">
                        </div>
                        <div class="title">
                            <h1>Northwestern University</h1>
                        </div>
                        <div class="name">
                            <p>Karen</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
</div>

<div class="container">
    <div class="row justify-content-center align-items-center">
        <div class="last2button">
            <button>Show All</button>
        </div>
        
    </div>
</div>


</section>


<footer>
<section id="foot1">
    <div class="container">
        <div class="row justify-content-center " >
            <div class="col col-md-2">
                <ul>
                    <li>
                        <h2>Study Tips</h2>
                        </li>
                    <li><a href="#">Information about earning</a></li>
                    <li><a href="#">Selling tips</a></li>
                    <li><a href="#">Copyright</a></li>
                </ul>

            </div>
            <div class="col col-md-2">
                <ul>
                    <li>
                        <h2>Information</h2>
                        </li>
                    <li><a href="#">About us</a></li>
                    <li><a href="#">Subjects</a></li>
                    
                </ul>

            </div>
            <div class="col col-md-2">
                <ul>
                    <li>
                        <h2>Need Support?</h2>
                        </li>
                    <li><a href="#">We are available 24/7</a></li>
                    <li><a href="#">FAQ</a></li>
                    <li><a href="#">Contact us</a></li>
                </ul>

            </div>
            <div class="col col-md-3">
                <ul>
                    <li>
                        <h2>Legal</h2>
                        </li>
                    <li><a href="#">Privacy Statement</a></li>
                    <li><a href="#">Terms of Use</a></li>
                    <li><h2>Subscribe to Newsletter</h2></li>
                    <li>
                        <div class="lastsearch">
                            <div class="search">
                                <i class="fa fa-search"></i>
                                <input type="text" class="form-control" placeholder="Subscribe to Newsletter">
                                <button class="btn btn-primary">Search</button>
                              </div>
                        </div>
                        
                    </li>
                </ul>

            </div>
            <div class="col col-md-2">
                <ul>
                    <li>
                        <h2>Latest Blogs</h2>
                        </li>
                    <li><a href="#">UNISA - University Of South Af</a></li>
                    <li><a href="#">7 Effective Note-Making Tips</a></li>
                    <li><a href="#">How To Give A Good Presentatio...</a></li>
                </ul>

            </div>
        </div>
    </div>
</section>
<section id="foot2">
    <div class="container">
        <div class="row justify-content-center align-items-center">
            <div class="col col-md-4">
                <h1>Follow Us On <i class="fa fa-facebook" aria-hidden="true"></i><i class="fa fa-linkedin" aria-hidden="true"></i><i class="fa fa-twitter" aria-hidden="true"></i></h1>
            </div>
            <div class="col col-md-4 justify-content-center">
                <h2>Copyright © 2022 | All rights reserved</h2>
            </div>
        </div>
    </div>
</section>

</footer>




<div class="container">
<div class="row">
    <div class="col col-md-12">

        <div class="modal" tabindex="-1" role="dialog" id="modal1">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title" style="text-align: center;"><I class="fa fa-lightbulb-o"></I> Register a free account</h1>
                    
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  <h2 class="text-center">Create profile using your email address</h2>
                  <form action="">
                      <div class="form-row">
                          <div class="form-group">
                              <label for="Name">Name</label>
                              <input type="text" name="" class="form-control" placeholder="Enter your full name">
                              <label for="Username">Username</label>
                              <input type="text" name="" class="form-control" placeholder="Enter Username">
                              <label for="email">Email Address</label>
                              <input type="email" name="" class="form-control" placeholder="Enter email address">
                              <label for="password">Password</label>
                              <input type="password" name="" class="form-control" placeholder="Enter password">
                              <label for="confirmpassword">Confirm Password</label>
                              <input type="password" name="" class="form-control" placeholder="confirm password">
                              <div class="checkbox" style="margin-top: 10px;">
                                <label for=""><input type="checkbox"> Subscribe to Newsletters</label>
                                <label for=""><input type="checkbox"> I agree with the <a href="#">Terms of use</a> and <a href="#">privacy Statement</a> of Docmerit.
                                </label>
                                  
                              </div>
                              
                              
                          </div>
                      </div>
                  </form>
                </div>
                <div class="modal-footer">
                  
                  <button type="submit" class="btn btn-primary btn-block"><span class="btntext">Register</span></button>
                </div>
              </div>
            </div>
          </div>






    </div>
</div>
</div>
<script src="{{ asset('frontend/js/jquery-3.6.0.min.js') }}"></script>
<script src="{{ asset('frontend/js/owl.carousel.min.js') }}"></script>

<!-- <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script> -->
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

<script>
$('.owl-carousel').owlCarousel({
loop:true,
margin:10,
nav:false,
dots: false,
autoplay: true,
autoplayTimeout: 3000,
responsive:{
0:{
    items:1
},
600:{
    items:3
},
1000:{
    items:3
}
}
})
</script>

<script>
window.onscroll = function() {myFunction()};

var navbar = document.getElementById("navbar");
var sticky = navbar.offsetTop;

function myFunction() {
if (window.pageYOffset >= sticky) {
navbar.classList.add("sticky")
} else {
navbar.classList.remove("sticky");
}
}
</script>
@yield('script')

</body>
</html>