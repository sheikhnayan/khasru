@extends('frontend.layouts.main')
@section('content')
    
<body>
@include('frontend.layouts.navmain')

    

    <section id="subjectone" style="margin-top: 40px;">
        <div class="container">
            <div class="row justify-content-center align-items-center">
                <div class="col-md-3">
                    <div class="suboneimg">
                        <img src="{{ asset('frontend/picture/img2 (1).webp') }}" alt="">
                    </div>
                </div>

                <div class="col-md-5">
                    <div class="subonetext">
                        <h1>SUBJECT</h1>
                        <h2>Quality Study Guides And Summaries</h2>
                        <p>Looking for the quality study notes and summaries? On this page you can find popular study guides, study notes and revision notes. Help others learn while you earn. It's a great way to make extra money and have your own small business too. Think of the many hassles and headaches you're avoiding. Think of how you get to do what you love by simply registering for free.</p>
                        <button><a href="#">Discover all content for Subjects</a></button>
                    </div>
                </div>

            </div>
        </div>
    </section>


    <section id="subject2">
        <div class="container">
            <div class="row justify-content-center align-items-center">
                <div class="col col-md-10">

                    <div class="sub2title">
                        <h1>Discover All Content For Below Mentioned Subjects</h1>
                    </div>
                </div>
            </div>


            @foreach ($data->chunk(2) as $items)
            <div class="row justify-content-center align-items-center">
                @foreach ($items as $item)
                <div class="col col-md-5">
                    <div class="sub2boxl1">
                        <div class="row">
                            <div class="col col-md-7">
                                <h1>{{ $item->name }}</h1>
                                <p>Looking for the quality study notes and summaries for {{ $item->name }}. On this page you can find popular study guides and study notes.</p>
                                <button><a href="#">Read More</a></button>
                            </div>

                            <div class="col col-md-5">
                                <img src="{{ asset('frontend/picture/1589831529.webp') }}" alt="">
                            </div>

                        </div>
                    </div>
                </div>
                    
                @endforeach
            </div>
                
            @endforeach


        </div>
    </section>
    

<section id="subject3">
    <div class="container">
        <div class="row justify-content-center align-items-center">
            

                <div class="col col-md-5">
                    <div class="sub3title">

                        <h1>Popular Summaries Subjects</h1>
                    </div>
                </div>
                {{-- <div class="col col-md-5">
                    <div class="sub3title">

                        <h1>Popular Bundles Subjects</h1>
                    </div>
                </div> --}}

            
        </div>
        <div class="row justify-content-center align-items-center">
            @foreach ($datas->chunk(5) as $items)
            
            <div class="col col-md-5">
                @foreach ($items as $item)
                    
                <div class="sub3box">

                    <div class="sub3boxhead">
                        <div class="row justify-content-center align-items-center">
                            <div class="col-md-12 col-12">
                                <div class="sub3boxtitle">
                                    <h2><a href="{{ route('product',[$item->id]) }}"> {{ $item->title }} </a></h2>
                                </div>
                            </div>
                        </div>
                    </div>
    
    
    
                    <div class="sub3boxbody">
                        <div class="row">
                            <div class="col col-md-3">
                                <div class="sub3boximg">
                                    
                                    <img src="{{ asset('frontend/picture/1619160017.webp') }}" alt="">
                                </div>
                            </div>
    
                            <div class="col col-md-8">
                                <div class="sub3boxrating">
                                    <div class="row">
                                        {{-- <div class="col col-md-5" style="padding: unset;">
    
                                            <div class="rating-star">
                                                <i class="fa fa-star start_icon" aria-hidden="true"></i>
                                                <i class="fa fa-star start_icon" aria-hidden="true"></i>
                                                <i class="fa fa-star start_icon" aria-hidden="true"></i>
                                                <i class="fa fa-star start_icon" aria-hidden="true"></i>
                                                <i class="fa fa-star start_icon" aria-hidden="true"></i>
                                                
                                            </div>
                                        </div> --}}
                                        <div class="col col-md-3" style="padding: unset;">
    
                                            <div class="sub3boxpricing">
                                                <P><strong>${{ $item->price }}</strong></P>
                                            </div>
                                        </div>
                                        <div class="col col-md-4" style="padding: unset;">
                                            <div class="sub3boxsoled">
    
                                                <p>{{ count($item->download) }} X Soled</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="sub3boxtext">
                                    <div class="row">
                                        <p>{{Str::limit($item->description, 20)}}</p>
                                    </div>
                                </div>
                            </div>
    
                            
                        
                        </div>
                    </div>
    
                    <div class="sub3boxfooter">
                        <div class="row">
                            <div class="col-md-3 col-6">
                                
                                <div class="sub3boxicon">
                                    <div class="row">
    
                                        <a href="{{ route('product',[$item->id]) }}"><button>
                                            <i class="fa fa-eye" aria-hidden="true"></i>
                                        </button></a>
                                        <a href="/addtocart/{{ $item->id }}"><button>
                                            <i class="fa fa-cart-plus" aria-hidden="true"></i>
                                        </button></a>
    
                                        <!-- <div class="col col-md-6 col-6">
                                            <a href="#"><button>
                                                <i class="fa fa-eye" aria-hidden="true"></i>
                                            </button></a>
                                        </div>
                                        <div class="col col-md-6">
    
                                            <a href="#"><button>
                                                <i class="fa fa-cart-plus" aria-hidden="true"></i>
                                            </button></a>
                                        </div> -->
                                    </div>
                                </div>
                            </div>
                            <div class="col col-md-7">
                                <div class="sub3boxp">
                                    <p><strong>{{ $item->category->name }}</strong> <strong>{{ $item->seller->name }}</strong></p>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>

                @endforeach




            </div>

            @endforeach


        </div>



        
    </div>
</section>
{{-- <section id="sub4">
    <div class="container">
        <div class="row justify-content-center align-items-center">
            <div class="col col-md-10">
                <h1>Popular Subject</h1>
            </div>
        </div>


        <div class="row justify-content-center align-items-center">
            <div class="col col-sm-10">

                <div class="sub4box">
                    <div class="row justify-content-center align-items-center">
                        <div class="col col-md-3">
                            <div class="sub4boxmenu1">
                               <h1><a href="#">Accounting</a></h1>
        
                            </div>
                        
                        </div>
        
                        <div class="col col-md-3">
                            <div class="sub4boxmenu1">
                                <h1><a href="#">Accounting</a></h1>
        
                            </div>
                        
                        </div>
                        <div class="col col-md-3">
                            <div class="sub4boxmenu1">
                                <h1><a href="#">Accounting</a></h1>
        
                            </div>
                        
                        </div>
                        <div class="col col-md-3">
                            <div class="sub4boxmenu1">
                                <h1><a href="#">Accounting</a></h1>
        
                            </div>
                        
                        </div>
        
                    </div>

                    <div class="row justify-content-center align-items-center">
                        <div class="col col-md-3">
                            <div class="sub4boxmenu1">
                               <h1><a href="#">Accounting</a></h1>
        
                            </div>
                        
                        </div>
        
                        <div class="col col-md-3">
                            <div class="sub4boxmenu1">
                                <h1><a href="#">Accounting</a></h1>
        
                            </div>
                        
                        </div>
                        <div class="col col-md-3">
                            <div class="sub4boxmenu1">
                                <h1><a href="#">Accounting</a></h1>
        
                            </div>
                        
                        </div>
                        <div class="col col-md-3">
                            <div class="sub4boxmenu1">
                                <h1><a href="#">Accounting</a></h1>
        
                            </div>
                        
                        </div>
        
                    </div>

                    <button>Show More</button>

                </div>
            </div>
        </div>


    </div>
</section> --}}
    


@endsection