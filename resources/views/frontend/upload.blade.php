@extends('frontend.layouts.main')
@section('header')

<style>
  .card{
    width: 100%;
    height: auto;
  }
</style>
    
@endsection
@section('content')

<body>
  @include('frontend.layouts.navmain')
<div class="container">
  <div class="row justify-content-center mt-10 mb-10">
    <div class="col-md-8">
      <h2 style="font-size: 25px; font-weight:bold">Your Uploads</h2>
      <table class="table table-bordered mt-20 mb-20">
        @php
          $data = Auth::user()->documents;
        @endphp
        @foreach ($data as $item)
            <tr>
              <td>
                {{ $item->title }}
              </td>
              <td>
                {{ count($item->download )}} Downloads
              </td>
              <td>
                ${{ $item->price }} Price
              </td>
              <td>
                <a href="{{ route('product',[$item->id]) }}" class="btn btn-primary">View</a>
                <a href="https://www.facebook.com/share.php?u={{ route('product',[$item->id]) }}" target="_blank" class="btn btn-success">Share</a>
              </td>
            </tr>
        @endforeach
      </table>
    </div>
  </div>
</div>

</body>
@endsection