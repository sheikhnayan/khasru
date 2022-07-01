@extends('frontend.layouts.main')
@section('content')
@section('header')
    <style>
        .card{
            width: 100%;
        }
        .checked {
            color: orange;
        }
    </style>
@endsection
<body>
    @include('frontend.layouts.navmain')
    <section id="second-page-header">
        <div class="container">
            <div class="row">
                <div class="col">


                    <div class="header-button">
                        <button>
                            Browse Study Resource | <i class="fa fa-book" aria-hidden="true"></i>  Subjects
    
                        </button>
                    </div> 
    
                        <div class="dropdown">
                            <div class="card">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col col-md-6">
                                            <div class="right-dropdown">

                                                <ul>
                                                    <li><a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i> Accounting</a></li>
                                                    <li><a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i> Accounting</a></li>
                                                    <li><a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i> Accounting</a></li>
                                                    <li><a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i> Accounting</a></li>
                                                    <li><a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i> Accounting</a></li>
                                                </ul>
                                            </div>
                                        </div>

                                        <div class="col col-md-6">
                                            <div class="left-dropdown">

                                                <ul>
                                                    <li><a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i> Accounting</a></li>
                                                    <li><a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i> Accounting</a></li>
                                                    <li><a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i> Accounting</a></li>
                                                    <li><a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i> Accounting</a></li>
                                                    <li><a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i> Accounting</a></li>
                                                </ul>
                                            </div>
                                        </div>


                                    </div>
                                </div>
                                <div class="dropdown-footer">
                                    <div class="row">
                                        <div class="col col-md-6">

                                            <a href="#"><i class="fa fa-long-arrow-right" aria-hidden="true"></i> Accounting</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                </div>


                
            </div>
        </div>
    </section>

    <section id="2ndpage">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col col-lg-8">
                    <div class="first-card">
                        <div class="card">
                            <div class="card-body">
                                <h1>{{ $data->category->name }}</h1>
                                <h1>{{ $data->title }}</h1>
                                <p>{{ $data->description }}</p>
                            </div>
                        </div>
                    </div>

                    <div class="third-card">
                        <div class="card">
                            <div class="card-header">
                                <p>Preview 6 out of 392 pages</p>
                            </div>
                            <div class="card-body">
                                <iframe src="https://view.officeapps.live.com/op/view.aspx?src={{'127.0.0.1:8000/'.str_replace('public','storage',$file->file)}}" frameborder="0" style="width:100%;min-height:640px;"></iframe>
                                {{-- <embed src="{{ asset(str_replace('public','storage',$file->file)) }}" type="application/docx" width="100%" height="800" > --}}
                            </div>
                            <div class="card-footer">
                                <p> <i class="fa fa-copyright" aria-hidden="true"></i> Report Copyright Violation</p>
                            </div>
                        </div>
                    </div>

                    <div class="forth-card">
                        <div class="card">
                            <div class="card-header">
                                <p><i class="fa fa-star kopzwart-grey" aria-hidden="true"></i>Reviews [0]</p>
                            </div>
                            <div class="card-body">
                               <div class="card-row">
                                <p>

                                    No review posted yet
                                </p>

                               </div>
                            </div>
                            
                        </div>
                    </div>

                </div>

                <div class="col col-lg-4">
                    <div class="second-card">
                        <div class="card">
                            <div class="card-body">
                                <h1>{{ $data->category->name }} Details</h1>
                                @php
                                    $rating = $data->rating->count();
                                @endphp
                                <p class="preview-page-review">
                                    @if ($rating > 0)
                                    <span class="fa fa-star checked"></span>
                                    @else
                                    <span class="fa fa-star"></span>
                                    @endif
                                    @if ($rating > 1)
                                    <span class="fa fa-star checked"></span>
                                    @else 
                                    <span class="fa fa-star"></span>
                                    @endif
                                    @if ($rating > 2)
                                    <span class="fa fa-star checked"></span>
                                    @else
                                    <span class="fa fa-star"></span>
                                    @endif
                                    @if ($rating > 3)
                                    <span class="fa fa-star checked"></span>
                                    @else
                                    <span class="fa fa-star"></span>
                                    @endif
                                    @if ($rating > 4)
                                    <span class="fa fa-star checked"></span>
                                    @else
                                    <span class="fa fa-star"></span>
                                    @endif
                                </p>
                                <strong class="price-preview">${{ $data->price }}</strong>
                                <p>

                                    <a href="{{ route('addtocart',[$data->id]) }}" class="btn btn-primary" style="color: #fff"> <i class="fa fa-heart-o" aria-hidden="true"></i> Add to Cart</a>
                                    <p class="terms">
                                        <ul>
                                            <li>
                                                <i class="fa fa-check-circle check" aria-hidden="true"></i>
                                                Trusted by 40,000+ Students
                                            </li>
                                            <li>
                                                <i class="fa fa-check-circle check" aria-hidden="true"></i>
                                                Money Back Guarantee 24/7
                                            </li>
                                            <li>
                                                <i class="fa fa-check-circle check" aria-hidden="true"></i>
                                                Download is directly available
                                            </li>
                                        </ul>
                                    </p>
                                </p>

                                <div class="text-muted">
                                    <div class="row justify-content-center">
                                        <div class="col col-md-4">

                                            <p class="footer-preview">
                                                <span>
                                                    7
                                                    <i class="fa fa-eye ck" aria-hidden="true"></i>
                                                </span>
                                            </p>
                                        </div>
                                        <div class="col col-md-4">

                                            <p class="footer-preview">
                                                <span>
                                                    0
                                                    <i class="fa fa-download ck" aria-hidden="true"></i>
                                                </span>
                                            </p>
                                        </div>
                                    </div>

                                </div>

                            </div>
                        </div>
                    </div>

                    <div class="fifth-card">
                        <div class="card">
                            <div class="card-header">
                                <h5 class="preview-title">Specifications</h5>
                            </div>
                            <div class="card-body">
                                <div class="list-doker">
                                    <p class="card-text"></p>
                                    <div class="row">
                                        <div class="col col-md-6">
                                            institution
                                        </div>
                                        <div class="col col-md-6">
                                            <a href="">{{ $data->institute->name }} </a>
                                        </div>
                                    </div>
                                    <p class="card-text"></p>
                                    <div class="row">
                                        <div class="col col-md-6">
                                            Study
                                        </div>
                                        <div class="col col-md-6">
                                            <a href="">{{ $data->category->name }} </a>
                                        </div>
                                    </div>
                                    {{-- <p class="card-text"></p>
                                    <div class="row">
                                        <div class="col col-md-6">
                                            Course
                                        </div>
                                        <div class="col col-md-6">
                                            <a href="">NCLEXExam NCLEX PN </a>
                                        </div>
                                    </div> --}}
                                    <p class="card-text"></p>
                                    <p class="card-text col-sm-12" style="font-weight: bold">Document</p>
                                    <div class="row">
                                        <div class="col col-md-6">
                                            Language
                                        </div>
                                        <div class="col col-md-6">
                                            <a href="">{{ $data->language }} </a>
                                        </div>
                                    </div>
                                    <p class="card-text"></p>
                                    <div class="row">
                                        <div class="col col-md-6">
                                            Subject
                                        </div>
                                        <div class="col col-md-6">
                                            <a href="">{{ $data->subject->name }}</a>
                                        </div>
                                    </div>
                                    <p class="card-text"></p>
                                    <div class="row">
                                        <div class="col col-md-6">
                                            Updated On
                                        </div>
                                        <div class="col col-md-6">
                                            {{-- Jun 09,2022 --}}
                                            {{ Carbon\Carbon::parse($data->updated_at)->format('M d,Y') }}
                                        </div>
                                    </div>
                                    <p class="card-text"></p>
                                    {{-- <div class="row">
                                        <div class="col col-md-6">
                                            Number of Pages
                                        </div>
                                        <div class="col col-md-6">
                                            392
                                        </div>
                                    </div>
                                    <p class="card-text"></p>
                                    <div class="row">
                                        <div class="col col-md-6">
                                            Type
                                        </div>
                                        <div class="col col-md-6">
                                            <a href="">Exam </a>
                                        </div>
                                    </div>
                                    <p class="card-text"></p> --}}
                                    <div class="row">
                                        <div class="col col-md-6">
                                            Written
                                        </div>
                                        <div class="col col-md-6">
                                            <a href="">{{ $data->year }}</a>
                                        </div>
                                    </div>
                                    <p class="card-text"></p>
                                </div>
                            </div>
                            
                        </div>
                    </div>

                    <div class="sixth-card">
                        <div class="card">
                            <div class="card-header">
                                <h5>Seller Details</h5>
                            </div>
                            <div class="card-body">
                                <div class="seller-info">
                                    <div class="row">
                                        {{-- <div class="col-md-4 col-4">
                                            <img src="picture/1642752790.jpg" alt="" width="103" height="103" class="rounded-circle img-responsive user-preview-img">
                                        </div> --}}
                                        <div class="col-md-12 col-12">
                                            <p class="username-preview">{{ $data->seller->name }}</p>
                                            @php
                                                $total = DB::table('documents')->where('user_id',$data->user_id)->count();
                                            @endphp
                                            <p class="dese-preview">{{ $total }} documents uploaded</p>
                                            <p class="dese-preview">28 documents sold</p>
                                            


                                                {{-- <div class="sixth-button1">
                                                    <button><i class="fa fa-comment icko" aria-hidden="true"></i>Send Message</button>
                                                </div>
                                                <div class="sixth-button1">
                                                    <button><i class="fa fa-plus icko" aria-hidden="true"></i>Follow</button>
                                                </div> --}}
                                            
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="card-footer">
                                <p> <i class="fa fa-copyright" aria-hidden="true"></i> Report Copyright Violation</p>
                            </div>
                        </div>
                    </div>


                </div>


            </div>
        </div>
    </section>
    
@endsection