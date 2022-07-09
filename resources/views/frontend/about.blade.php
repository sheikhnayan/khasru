@extends('frontend.layouts.main')
@section('header')

<style>
  .card{
    width: 100%;
    height: auto;
  }
  h1{
    font-size: 2.5rem !important;
    text-align: center !important;
    margin-top: 20px;
    margin-bottom: 20px;
    font-weight: bold;
  }
</style>
    
@endsection
@section('content')

<body>
  @include('frontend.layouts.navmain')
<div class="container">
  <div class="row justify-content-center mt-10 mb-10">
    <div class="col-md-8">
      <div class="Seller_section upload_seller">
        <div class="container">
          <h1 class="about_us_heding"> What is Docmerit?</h1>
          <p class="description_abouts_page">Our moto is to empower every student to excel at their studies by providing to best tools.
          </p>
          <div class="row">
            <div class="col-md-3">
              <div class="about_box">
                <img src="https://docmerit.com/images/foundede.png" class="uplodede_icon founded_img">
                 <h2 class="about_four_heading">Founded in 2019</h2>
                 <p class="founded_description">Founded by a students, to exchange study documents with each other and together strive for better grades.   
                 </p>
              </div>
            </div>
            <div class="col-md-3">
                <div class="about_box">
                  <img src="https://docmerit.com/images/about_documents.png" class="uplodede_icon">
                  <h2 class="about_four_heading">+100k Documents</h2>
                  <p class="founded_description">Thousand of study documents have been shared by students and are accessible to everyone in the world.   
                  </p>
                </div>
            </div>
            <div class="col-md-3">
              <div class="about_box">
                <img src="https://docmerit.com/images/fourmuser.png" class="uplodede_icon">
                <h2 class="about_four_heading">+40K Users</h2>
                <p class="founded_description">Currently there are more than 40000 students using Docmerit to access our quality materials.   
                </p>
              </div>
            </div>
            <div class="col-md-3">
              <div class="about_box">
                <img src="https://docmerit.com/images/power.png" class="uplodede_icon power">
                <h2 class="about_four_heading"> practice makes perfect</h2>
                <p class="founded_description">Not only view or download the best study documents, you can also practice thousands of subjects. 
                </p>
              </div>
            </div>
            </div>  
          </div>
      </div>          
      <div class="everthing_main_section">
        <div class="container">
          <div class="row">
            <div class="col-md-6">
              <img src="https://docmerit.com/images/everthingneed.png" class="everthingneed">
            </div>
            <div class="col-md-6">
              <ul class="about_perfect_list">
                <li> 
                  <h3 class="about_ever">Everything you need to improve yourself</h3>
                  <span class="about_every_short">Students share their study materials organised by courses, universities in bundles.<br class="even_none"> </span>
                </li>
                <li>  
                  <h3 class="about_ever">Study anytime, anywhere, on any device 24/7</h3>
                  <span class="about_every_short">Because your planning is not always perfect, you need to be able to study whenever you decide.<br class="even_none"></span>
                </li>  
                <li>  
                  <h3 class="about_ever">Practice makes student perfect</h3>
                  <span class="about_every_short">For almost every document uploaded consisting of a definition list, study guides and practice test.<br class="even_none"></span>
                 </li>                                 
              </ul>
            </div>
          </div>         
        </div>
      </div>
      <div class="about_global_section">
        <div class="container">
          <div class="row">
            <div class="col-md-6">
              <div class="global_first">
                <h3 class="about_global_heading">Docmerit around the globe</h3>
                 <p class="global_description">We cover more than 15 thousands universities</p>
                 <p class="global_descr">We are available around the globe. Backed by thousand of student from different univerisy and colleges. 
                 </p>
              </div>
            </div>
            <div class="col-md-6">
              <img src="https://docmerit.com/images/global.png" class="everthingneed">
            </div>
          </div> 
        </div>
      </div>
      <div class="backed_section">
        <div class="container">
          <h3 class="backed_heding"> backed by</h3>
          <p class="description_abouts_page">CourseMerit - Best online marketplace for homework help and tutoring.</p>
          <ul class="backed_list">
          <li><img src="https://docmerit.com/images/coursemerit.png" class="backed_img"> </li>
            </ul>
        </div>
      </div>  
    </div>
  </div>
</div>

</body>
@endsection