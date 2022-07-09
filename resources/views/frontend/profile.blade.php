@extends('frontend.layouts.main')
@section('content')
@section('header')

<style>
  .card{
    width: 100%;
    height: auto;
  }
</style>
    
@endsection

<body>
  @include('frontend.layouts.navmain')
<div class="container">
  <div class="row justify-content-center mt-10 mb-10">
    <div class="col-md-8">
      <div class="row">
        <div class="col-md-5">
          <div class="card">
            <i class="fas fa-upload"></i> {{ count(Auth::user()->documents) }}
            Upload
          </div>          
        </div>
        <div class="col-md-5">
          <div class="card">
            <i class="fas fa-download"></i> {{ count(Auth::user()->orders) }}
            Download
          </div>          
        </div>
        <div class="col-md-10 mt-10">
          <div class="card">
            <div class="card-header">
              Increase your sales in just a few steps
            </div>
            <div class="card-body">
              To maximise your sales, share your document on Facebook and Twitter.
We found that promoting your documents on Facebook and Twitter increases sales of your documents up to 10 times. The best sellers on Docmerit put packages of study materials together, and sell these as bundles.You can do this by combining documents in a separate bundle for one fixed fee. 
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

</body>
@endsection