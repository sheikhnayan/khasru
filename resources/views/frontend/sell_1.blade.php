@extends('frontend.layouts.main')
@section('header')
    <style>
        button,
input {
    font-family: "Montserrat", "Helvetica Neue", Arial, sans-serif;
}

a {
    color: #f96332;
}

a:hover,
a:focus {
    color: #f96332;
}

p {
    line-height: 1.61em;
    font-weight: 300;
    font-size: 1.2em;
}

.category {
    text-transform: capitalize;
    font-weight: 700;
    color: #000;
    text-align: center;
    font-size: 22px;
    margin-top: 30px;
}

.nav-item .nav-link,
.nav-tabs .nav-link {
    -webkit-transition: all 300ms ease 0s;
    -moz-transition: all 300ms ease 0s;
    -o-transition: all 300ms ease 0s;
    -ms-transition: all 300ms ease 0s;
    transition: all 300ms ease 0s;
}

.card a {
    -webkit-transition: all 150ms ease 0s;
    -moz-transition: all 150ms ease 0s;
    -o-transition: all 150ms ease 0s;
    -ms-transition: all 150ms ease 0s;
    transition: all 150ms ease 0s;
}

[data-toggle="collapse"][data-parent="#accordion"] i {
    -webkit-transition: transform 150ms ease 0s;
    -moz-transition: transform 150ms ease 0s;
    -o-transition: transform 150ms ease 0s;
    -ms-transition: all 150ms ease 0s;
    transition: transform 150ms ease 0s;
}

[data-toggle="collapse"][data-parent="#accordion"][aria-expanded="true"] i {
    filter: progid:DXImageTransform.Microsoft.BasicImage(rotation=2);
    -webkit-transform: rotate(180deg);
    -ms-transform: rotate(180deg);
    transform: rotate(180deg);
}

@-webkit-keyframes nc-icon-spin {
    0% {
        -webkit-transform: rotate(0deg);
    }

    100% {
        -webkit-transform: rotate(360deg);
    }
}

@-moz-keyframes nc-icon-spin {
    0% {
        -moz-transform: rotate(0deg);
    }

    100% {
        -moz-transform: rotate(360deg);
    }
}

@keyframes nc-icon-spin {
    0% {
        -webkit-transform: rotate(0deg);
        -moz-transform: rotate(0deg);
        -ms-transform: rotate(0deg);
        -o-transform: rotate(0deg);
        transform: rotate(0deg);
    }

    100% {
        -webkit-transform: rotate(360deg);
        -moz-transform: rotate(360deg);
        -ms-transform: rotate(360deg);
        -o-transform: rotate(360deg);
        transform: rotate(360deg);
    }
}


.nav-tabs {
    border: 0;
    padding: 15px 0.7rem;
}

.nav-tabs:not(.nav-tabs-neutral)>.nav-item>.nav-link.active {
    box-shadow: 0px 5px 35px 0px rgba(0, 0, 0, 0.3);
}

.card .nav-tabs {
    border-top-right-radius: 0.1875rem;
    border-top-left-radius: 0.1875rem;
}

.nav-tabs>.nav-item>.nav-link {
    color: #888888;
    margin: 0;
    margin-right: 5px;
    background-color: transparent;
    border: 1px solid transparent;
    border-radius: 30px;
    font-size: 14px;
    padding: 11px 23px;
    line-height: 1.5;
}

.nav-tabs>.nav-item>.nav-link:hover {
    background-color: transparent;
}

.nav-tabs>.nav-item>.nav-link.active {
    background-color: #444;
    border-radius: 30px;
    color: #FFFFFF;
}

.nav-tabs>.nav-item>.nav-link i.now-ui-icons {
    font-size: 14px;
    position: relative;
    top: 1px;
    margin-right: 3px;
}

.nav-tabs.nav-tabs-neutral>.nav-item>.nav-link {
    color: #FFFFFF;
}

.nav-tabs.nav-tabs-neutral>.nav-item>.nav-link.active {
    background-color: rgba(255, 255, 255, 0.2);
    color: #FFFFFF;
}

.card {
    border: 0;
    border-radius: 0.1875rem;
    display: inline-block;
    position: relative;
    width: 100%;
    margin-bottom: 30px;
    margin-top: 30px;
    box-shadow: 0px 5px 25px 0px rgba(0, 0, 0, 0.2);
    height: unset;
}

.card .card-header {
    background-color: transparent;
    border-bottom: 0;
    background-color: transparent;
    border-radius: 0;
    padding: 0;
}

.card[data-background-color="orange"] {
    background-color: #3160a6;
}

.card[data-background-color="red"] {
    background-color: #FF3636;
}

.card[data-background-color="yellow"] {
    background-color: #FFB236;
}

.card[data-background-color="blue"] {
    background-color: #2CA8FF;
}

.card[data-background-color="green"] {
    background-color: #15b60d;
}

[data-background-color="orange"] {
    background-color: #3160a6;
}

[data-background-color="black"] {
    background-color: #2c2c2c;
}

[data-background-color]:not([data-background-color="gray"]) {
    color: #FFFFFF;
}

[data-background-color]:not([data-background-color="gray"]) p {
    color: #FFFFFF;
}

[data-background-color]:not([data-background-color="gray"]) a:not(.btn):not(.dropdown-item) {
    color: #FFFFFF;
}

[data-background-color]:not([data-background-color="gray"]) .nav-tabs>.nav-item>.nav-link i.now-ui-icons {
    color: #FFFFFF;
}


@font-face {
  font-family: 'Nucleo Outline';
  src: url("https://github.com/creativetimofficial/now-ui-kit/blob/master/assets/fonts/nucleo-outline.eot");
  src: url("https://github.com/creativetimofficial/now-ui-kit/blob/master/assets/fonts/nucleo-outline.eot") format("embedded-opentype");
  src: url("https://raw.githack.com/creativetimofficial/now-ui-kit/master/assets/fonts/nucleo-outline.woff2");
  font-weight: normal;
  font-style: normal;
        
}

@media screen and (max-width: 768px) {

    .nav-tabs {
        display: inline-block;
        width: 100%;
        padding-left: 100px;
        padding-right: 100px;
        text-align: center;
    }

    .nav-tabs .nav-item>.nav-link {
        margin-bottom: 5px;
    }
}
    </style>
@endsection

@section('content')
    <body>
        @include('frontend.layouts.navmain')
        <div class="row">
            <div class="col-md-10 ml-auto col-xl-6 mr-auto">
                <p class="category">Choose a course for your upload</p>
                <div class="card" style="width: 100%">
                  <div class="card-header">
                    <ul class="nav nav-tabs nav-tabs-neutral justify-content-center" role="tablist" data-background-color="orange">
                      <li class="nav-item">
                        <a class="nav-link active" role="tab">1</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" role="tab">2</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" role="tab">3</a>
                      </li>
                    </ul>
                  </div>
                  <div class="card-body">
                    <!-- Tab panes -->
                    <div class="tab-content text-center">
                      <div class="tab-pane active" id="home1" role="tabpanel">
                        <form action="{{ route('selling_1') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <label style="font-weight: bold"> Institue </label>
                            <input list="institutes" name="institute" type="text" class="form-control" style="margin-top: 20px;" placeholder="Enter Your Institute Name" required>
                              <datalist id="institutes">
                                @foreach ($institutes as $item)
                                <option value="{{ $item->id }}"> {{ $item->name }} </option>
                                @endforeach
                              
                              </datalist>
                            <label style="font-weight: bold"> Subject </label>
                            <input list="subjects" name="subject" type="text" class="form-control" style="margin-top: 20px;" placeholder="Enter Subject Name" required>
                              <datalist id="subjects">
                                @foreach ($subjects as $item)
                                <option value="{{ $item->id }}"> {{ $item->name }} </option>
                                @endforeach
                              
                              </datalist>
                            <label style="font-weight: bold"> Course Name </label>
                            <input name="course_name" type="text" class="form-control" style="margin-top: 20px;" placeholder="Enter Course Name" required>
                            <label style="font-weight: bold"> Upload Files </label>
                            <input name="files[]" type="file" class="form-control" placeholder="Upload Files" multiple required>
                            <input type="submit" value="Next" class="btn btn-success" style="margin-top: 20px;">
                        </form>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- End Tabs on plain Card -->
            </div>
        </div>
    </body>   
@endsection