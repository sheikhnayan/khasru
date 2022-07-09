@extends('frontend.layouts.main')
@section('content')

<body>
    <div class="background">
        <div class="container">
            @include('frontend.layouts.nav')
            <section id="Top">
                <div class="best">
                    <h2>THE BEST STUDY NOTES</h2>
                    <h1>The best study guides and notes shared by your fellow students, organized in one place.</h1>
                    

                        <div class="row height d-flex justify-content-center align-items-center">
    
                          <div class="col-md-4">
    
                            <div class="search">
                              <i class="fa fa-search"></i>
                              <input type="text" class="form-control" placeholder="Title,description,author,course">
                              <button class="btn btn-primary">Search</button>
                            </div>
                            
                          </div>
                          
                        </div>
                    



                    <p><a href="#">or search for your School / University</a></p>
                </div>
        
            </section>
        </div>
    </div>
    <section id="mid1">
        <div class="container">
            <div class="row justify-content-center align-items-center">
                <div class="col col-md-2 justify-content-center align-items-center">
                    <div class="name1" style="text-align: center;">
                        <h5>BROWSE STUDY <br> MATERIALS</h5>
                        <p>Buy lecture notes, summaries and practice exams and get higher grades for your exams.</p>
                    </div>
                </div>
                <div class="col col-md-2">
                    <div class="img1" style="text-align: center;">
                        <img src="{{ asset('frontend/picture/img1.webp') }}" alt="">
                    </div>

                </div>

                <div class="col col-md-2">
                    <div class="name2" style="text-align: center;">
                        <h5>ACCESSIBLE ANYWHERE AT ANY TIME</h5>
                        <p>Summaries and study guides and tests are 24/7 online available.</p>
                    </div>
                </div>
                <div class="col col-md-2">
                    <div class="img2" style="text-align: center;">
                        <img src="{{ asset('frontend/picture/img8.webp') }}" alt="">
                    </div>

                </div>

                    
            </div> 
                
        </div>
   
    </section>



    <section id="mid2">
        <div class="container">
            <div class="row justify-content-center align-items-center">
                <div class="col col-md-2">
                    <div class="img3" style="text-align: center;">
                        <img src="{{ asset('frontend/picture/img2.webp') }}" alt="">
                    </div>

                </div>
                <div class="col col-md-2 justify-content-center align-items-center">
                    <div class="name3" style="text-align: center;">
                        <h5>GET BETTER GRADES</h5>
                        <p>Get high quality, verified notes from  your school, professional course, or  university.</p>
                    </div>
                </div>
                
                <div class="col col-md-2">
                    <div class="img4" style="text-align: center;">
                        <img src="{{ asset('frontend/picture/img3.webp') }}" alt="">
                    </div>

                </div>
                <div class="col col-md-2">
                    <div class="name4" style="text-align: center;">
                        <h5>EARN WHILE YOU LEARN</h5>
                        <p>Make money selling your course notes while helping others learn.</p>
                    </div>
                </div>
               

                    
            </div> 
                
        </div>
 
        
    </section>
    <section id="mid3">
        <div class="container">
            <div class="row justify-content-center align-items-center">
                <div class="col col-md-8">
                    <div class="mid-con" style="text-align: center;">
                        <h2>DO YOU ALSO WANT TO STUDY MORE EFFICIENTLY?</h2>
                        <p>Docmerit offers an online platform to sell study notes, so you can make the most of your studies. Within seconds, you're able to create your personal study store. Making effective study notes will not only boost your grades but also give you some extra cash.</p>
                        <button> <a href="#" data-toggle="modal" data-target="#modal1"> Sign up Now It's Free</a></button>
                    </div>
                    
                </div>

            </div>
        </div>
    </section>

    <section id="mid4">
        <div class="container">
            <div class="row justify-content-center align-items-center">
                <div class="col col-md-8">
                    <div class="last-con" style="text-align: center;">
                        <h2>HOW ITS WORK FOR SELLER</h2>
                        <p>Earn money while you learn</p>
                        
                    </div>
                    
                </div>

            </div>
        </div>
        <div class="container">
            <div class="row justify-content-center align-items-center">
                <div class="col col-md-3">
                    <div class="last-con1" style="text-align: center;">
                        <img src="{{ asset('frontend/picture/icon4.webp') }}" alt="">
                        <h2>UPLOAD YOUR NOTES</h2>
                        <p>Sign up for free and upload your documents, study notes and guides on Docmerit.</p>
                    </div>
                    
                </div>

                <div class="col col-md-3">
                    <div class="last-con2" style="text-align: center;">
                        <img src="{{ asset('frontend/picture/icon5.webp') }}" alt="">
                        <h2>SET YOUR PRICE</h2>
                        <p>Set the selling price yourself and promote your documents, so that it reaches to many students.</p>
                    </div>
                    
                </div>

                <div class="col col-md-3">
                    <div class="last-con3" style="text-align: center;">
                        <img src="{{ asset('frontend/picture/icon6.webp') }}" alt="">
                        <h2>HAVE MULTIPLE SALES</h2>
                        <p>Student purchases your document, your earned money gets directly credited to your account.</p>
                    </div>
                    
                </div>

            </div>
        </div>
    </section>

    <section id="mid5">
        <div class="container">
            <div class="row justify-content-center align-items-center">
                <div class="col col-md-5">
                    <div class="left-content">
                        <h2>NEW STUDY NOTES</h2>
                        <p>Selling notes is an excellent way to earn some extra money. You get paid for the hard work you already executed. It's more fun than the average student side job. If you become a top seller, you might even be able to quit your side job! Earn money by uploading study guides, checking theses, delivering translation work, or help students differently by adding a free document. Over 40,000 top sellers have already joined and are making money from their knowledge every day.</p>
                        <button>Start Selling</button>
                    </div>
                </div>

                <div class="col col-md-5">
                    
                        @foreach ($trending as $item)
                            <div class="right-content">
                                <div class="fp1">
                                    <a href="{{ route('product',[$item->id]) }}">
                                        <h3>{{ $item->title }}</h3>
                                        <p>{{ $item->category->name }} <span>${{ $item->price }}</span></p>
                                    </a>
                                </div>
                            </div>
                        @endforeach
                        
                    
                    
                </div>
            </div>
        </div>



        <div class="container">
            <div class="row justify-content-center align-items-center">
               

                <div class="col col-md-5">
                    
                        
                            <div class="left-content2">
                                <div class="fp2">
                                    <form action="">
                                        <h3>CLASS 12TH MATHEMATICS NOTES IMPORTANT TOPICS</h3>
                                        <p>Exam <span>$10.45</span></p>
                                    </form>
                                </div>
                                <div class="fp2">
                                    <form action="">
                                        <h3>CLASS 12TH MATHEMATICS NOTES IMPORTANT TOPICS</h3>
                                        <p>Exam <span>$10.45</span></p>
                                    </form>
                                </div>
                                <div class="fp2">
                                    <form action="">
                                        <h3>CLASS 12TH MATHEMATICS NOTES IMPORTANT TOPICS</h3>
                                        <p>Exam <span>$10.45</span></p>
                                    </form>
                                </div>
                                <div class="fp2">
                                    <form action="">
                                        <h3>CLASS 12TH MATHEMATICS NOTES IMPORTANT TOPICS</h3>
                                        <p>Exam <span>$10.45</span></p>
                                    </form>
                                </div>
                                
                            </div>
                        
                    
                    
                </div>


                <div class="col col-md-5">
                    <div class="right-content2">
                        <h2>LATEST SELL</h2>
                        <p>It's simple and straightforward to make extra cash as a student, just upload your notes to us and we'll handle the sales side and pass the money back to you. Docmerit offers the highest payout ratio: you earn up to 85% per sale. We transfer the money to your bank account within 24 working hours. Sign up for free today and start earning while helping other fellow students!</p>
                        <button>Find Your Summary</button>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <section id="last1">
        <div class="container">
            <div class="row justify-content-center align-items-center">
                <div class="col col-md-6">
                    <div class="heading" style="text-align: center;">
                        <h1>POPULAR UPLOADS</h1>
                        <p>On Docmerit, you’ll find thousands of uploads. The most popular uploads are listed below:</p>
                    </div>
                </div>
            </div>
        </div>
        
            <div class="container" id="populer">

            <div class="row justify-content-center align-items-center">

                @foreach ($popular->chunk(5) as $items)
                
                    <div class="col col-md-4">
                        <div class="part1">

                @foreach ($items as $item)
                
                        <a href="{{ route('product',[$item->id]) }}">
                        <form>
                            <h3>{{ $item->title }}</h3>
                            <p>{{ $item->subject->name }}</p>
                        </form>
                        </a>
                            
                @endforeach
                        </div>
                    </div>
                    
                @endforeach

            </div>

        </div> 
            <div class="container">
                <div class="row justify-content-center align-items-center">
                    <div class="last1button">
                        <button>Show More</button>
                    </div>
                    
                </div>
            </div>
        
    </section>
      
@endsection