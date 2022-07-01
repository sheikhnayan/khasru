@extends('frontend.layouts.main')
@section('content')
    <body>
        @include('frontend.layouts.navmain')
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-5 ml-auto mr-auto">
                    <p class="category" style="font-weight: bold; font-size: 20px; padding: 10px;">Shopping Cart</p>
                    <div class="card">
                      <div class="card-body">
                        <ul>
                            @if (count($data) > 0)
                            @php
                                $total = 0;
                            @endphp
                            @foreach ($data as $item)
                                @php
                                    $total += $item->document->price;
                                @endphp
                            <li class="mt-3 mb-3" style="display: block; border: 1px solid black; padding: 12px;">
                                <h4 style="display: inline-block; padding: 0px 20px;">Title: {{ $item->document->title }}</h4>
                                <h5 style="display: inline-block; padding: 0px 20px;">Category: {{ $item->document->category->name }}</h5>
                                <h5 style="display: inline-block; padding: 0px 20px;">Price: ${{ $item->document->price }}</h5>
    
                                <a href="{{ route('removefromcart',[$item->id]) }}"> <i class="fas fa-trash-alt" style="display: inline-block; padding: 0px 20px; color: red;"></i> </a> 
                            </li>
                            @endforeach
                                
                            @else
                                Nothing! 
                                Visit <a href="#">Shop</a>
                            @endif
    
                            <li class="mt-3 mb-3" style="display: block; border: 1px solid black; padding: 12px;">
                                <h4 style="display: inline-block; padding: 0px 20px;">Grand Total: ${{ $total }}</h4> 
                            </li>
                        </ul>
                      </div>
                    </div>
                    <!-- End Tabs on plain Card -->
                </div>
                <div class="col-md-5 ml-auto mr-auto">
                    <p class="category" style="font-weight: bold; font-size: 20px; padding: 10px;">Choose your payment method</p>
                    <div class="card">
                      <div class="card-body">
                        <ul>
                            <li class="mt-3 mb-3" style="display: block; border: 1px solid black; padding: 12px;">
                                <input type="radio"  name="paypal" id="paypal">
                                <label for="paypal">Paypal</label>
                            </li>
    
                            <li class="mt-3 mb-3" style="display: block; padding: 12px;">
                                <a href="/payment" class="btn btn-success">Pay Now (${{ $total }})</a>
                            </li>
                        </ul>
                      </div>
                    </div>
                    <!-- End Tabs on plain Card -->
                </div>
            </div>
        </div>
    </body>   
@endsection