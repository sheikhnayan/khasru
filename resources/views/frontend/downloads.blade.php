@extends('frontend.layouts.main')
@section('content')

<body>
  @include('frontend.layouts.navmain')
  <div id="navbar" class="header_bar uploade_page_header">
    <div class="container">

        <div class="collapse navbar-collapse mobile_bg" id="navbarTogglerDemo03">
          <ul class="navbar-nav ml-auto mt-2 mt-lg-0    ofterlogin_header ">
            <li class="nav-item">
              <a class="nav-link" href="https://docmerit.com/upload-step">
                <button class="login_btn pk">
                  <span class="jk">
                    <i class="fa fa-upload up" aria-hidden="true"></i>
                  </span>
                  <span class="login_txt">Sell </span>
                </button>
              </a>
            </li>
            <li class="nav-item dropdown cartlist_li  " style="display:none" ;>
              <a class="nav-link dropdown-toggle" href="javascript:void(0)" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fa fa-shopping-cart cart_heder pos" aria-hidden="true"></i>
                <span class="alert_header countCheader">0</span>
              </a>
              <div class="dropdown-menu cart-menu" aria-labelledby="navbarDropdown">
                <div id="shopping-cart-wrap" class="menu-close-js cartHTML" style="border-color: rgb(204, 204, 204); display: block;">
                  <div class="header-arrow shoppingcart-arrow"></div>
                  <div id="shoppingcart-header">
                    <span>
                      <a href="https://docmerit.com/carts">
                        <i class="fa fa-shopping-cart"></i> Shopping cart <span style="color:#ccc">·</span> 0 item <span style="color:#ccc">·</span>
                        <span style="color:#4bbc12">$0.00</span>
                      </a>
                    </span>
                  </div>
                  <div id="shoppingcart-extra">
                    <div class="chekout_btn">
                      <a href="https://docmerit.com/carts" class="btn-geel btn-tocart" style="color: #5d5d5d;">Checkout <i class="fa fa-chevron-circle-right"></i>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </li>
            <li class="nav-item wishlist-li" style="display:none" ;></li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="javascript:void(0)" id="alertsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fa fa-bell cart_heder" aria-hidden="true"></i>
                <span class="alert_header2 countNheader"> 0 </span>
              </a>
              <div class="dropdown-menu notification" aria-labelledby="alertsDropdown">
                <a class="dropdown-item notification-msg font-weight-bold" href="https://docmerit.com/all-notification">
                  <i class="fa fa-bell" aria-hidden="true"></i> Notifications </a>
                <a class="dropdown-item text-center small text-gray-500" href="javascript:void(0)">No New Notification</a>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link dropdown-toggle" href="javascript:void(0)" id="alertsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fa fa-envelope cart_heder" aria-hidden="true"></i>
                <span class="alert_header2"> 0 </span>
              </a>
              <div class="dropdown-menu notification" aria-labelledby="alertsDropdown">
                <a class="dropdown-item notification-msg font-weight-bold" href="https://docmerit.com/messages">
                  <i class="fa fa-envelope" aria-hidden="true"></i> Messages </a>
                <a class="dropdown-item text-center small text-gray-500" href="javascript:void(0)">No New Messages</a>
              </div>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="javascript:void(0)" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <button class="login_btn en">
                  <img width="35" class="rounded-circle img-responsive" height="35" alt="riot" src="https://docmerit.com/uploads/users/23345476200307811656707211.jpg">
                  <img src="https://docmerit.com/images/icon1.png">
                </button>
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <div class="menu-heading">
                  <p> My Profile</p>
                </div>
                <div class="container">
                  <div class="row">
                    <div class="col-6 menu-border">
                      <div class="menu-list-one">
                        <a class="dropdown-item" href="https://docmerit.com/dashboard">
                          <span class="dashbord_login_menu_sapce">
                            <i class="fa fa-tachometer" aria-hidden="true"></i>
                          </span> Dashboard </a>
                        <a class="dropdown-item" href="https://docmerit.com/user-upload">
                          <span class="dashbord_login_menu_sapce">
                            <i class="fa fa-folder-open" aria-hidden="true"></i>
                          </span> Uploads </a>
                        <a class="dropdown-item" href="https://docmerit.com/wallet">
                          <span class="dashbord_login_menu_sapce wallet_m">
                            <i class="fa fa-money" aria-hidden="true"></i>
                          </span>Wallet <span class="price-addview"> $0.00 </span>
                          </span>
                        </a>
                        <a class="dropdown-item" href="https://docmerit.com/messages">
                          <span class="dashbord_login_menu_sapce msg_m">
                            <i class="fa fa-envelope" aria-hidden="true"></i>
                          </span> Messages </a>
                        <a class="dropdown-item" href="https://docmerit.com/profile">
                          <span class="dashbord_login_menu_sapce profile_m">
                            <i class="fa fa-cog" aria-hidden="true"></i>
                          </span>Profile Settings </a>
                        <a class="dropdown-item" href="https://docmerit.com/statistics">
                          <span class="dashbord_login_menu_sapce sales_m">
                            <i class="fa fa-bar-chart" aria-hidden="true"></i>
                          </span> Sales Statistics </a>
                      </div>
                    </div>
                    <div class="col-6">
                      <div class="menu-list-two">
                        <a class="dropdown-item" href="https://docmerit.com/add-bundle">
                          <span class="dashbord_login_menu_sapce">
                            <i class="fa fa-paste" aria-hidden="true"></i>
                          </span> Create Bundle </a>
                        <a class="dropdown-item" href="https://docmerit.com/downloads">
                          <span class="dashbord_login_menu_sapce down_m">
                            <i class="fa fa-download" aria-hidden="true"></i>
                          </span>Downloads </a>
                        <a class="dropdown-item" href="https://docmerit.com/reviews">
                          <span class="dashbord_login_menu_sapce rev_m">
                            <i class="fa fa-star" aria-hidden="true"></i>
                          </span>Reviews </a>
                        <a class="dropdown-item" href="https://docmerit.com/myprofile/invite-friend">
                          <span class="dashbord_login_menu_sapce invit_m">
                            <i class="fa fa-comments-o" aria-hidden="true"></i>
                          </span> Invite Friends </a>
                        <a class="dropdown-item" href="https://docmerit.com/logout" onclick="if (!window.__cfRLUnblockHandlers) return false; event.preventDefault(); document.getElementById('frm-logout').submit();" data-cf-modified-7fdd09add137e5d6f9cf3cdc-="">
                          <span class="dashbord_login_menu_sapce log_m">
                            <i class="fa fa-power-off" aria-hidden="true"></i>
                          </span> Logout </a>
                      </div>
                    </div>
                  </div>
                </div>
                <form id="frm-logout" action="https://docmerit.com/logout" method="POST" style="display: none;">
                  <input type="hidden" name="_token" value="WHL3xwi6EvpNHd2F1706R5tcOKpqEJMx0nAsKHDj">
                </form>
              </div>
            </li>
          </ul>
        </div>
      </nav>
    </div>
  </div>
  <div class="downloads-page">
    <div class="container">
      <div class="uploades_file_one">
        <form id="search-form">
          <div class="row">
            <div class="col-md-6">
              <h1 class="uplode">
                <span>
                  <br>
                  <i class="fa fa-download ck" aria-hidden="true"></i>
                </span> Downloads
              </h1>
              <div class=" search_page_section">
                <i class="fa fa-search shk" aria-hidden="true"></i>
                <input type="text" name="search_text" class="uploades_search_box" placeholder="title, book, description, author, course...">
                <button type="submit" value="" class="uplode_seraching_page_btn">Search</button>
              </div>
            </div>
            <div class="col-md-6">
              <div class="filter_checkbox">
                <label class="container_chek">Documents <input name="search_for[]" type="checkbox" value="documents" class="serch_data">
                  <span class="checkmark"></span>
                </label>
                <label class="container_chek">Bundles <input name="search_for[]" type="checkbox" value="bundles" class="serch_data">
                  <span class="checkmark"></span>
                </label>
              </div>
              <div class="filter_uploades">
                <!-- <select class="uplode_page_filter serch_data" name="sort_by" id="sort_by"><option selected="selected" value="">  Sort Result By</option><option value="date_desc"> Date(recent first)</option><option value="view_desc"> View(high to low)</option><option value="download_desc"> Downloads(high to low)</option><option value="price_desc"> Price(high to low)</option><option value="price_asc"> Price(low to heigh)</option></select> -->
                <select class="uplode_page_filter serch_data" id="type_id" name="type_id">
                  <option selected="selected" value="">Select Type</option>
                  <option value="1">Case</option>
                  <option value="2">Answers</option>
                  <option value="3">Class Notes</option>
                  <option value="4">Exam</option>
                  <option value="5">Presentations</option>
                  <option value="6">Summary</option>
                  <option value="7">Study guide</option>
                  <option value="8">Thesis</option>
                  <option value="9">Judgements</option>
                  <option value="10">Interview</option>
                  <option value="11">Essay</option>
                  <option value="12">Visual</option>
                  <option value="13">Manual</option>
                  <option value="14">Others</option>
                </select>
              </div>
            </div>
          </div>
        </form>
      </div>
      <div class="row">
        <div class="col-lg-12 formus">
          <div class="hide" id="loader-body">
            <i class="fa fa-spinner fa-5x" aria-hidden="true"></i>
          </div>
          <div class="uplodes_pagination_listing" id="document-body">
            <center class="nofound">
              <img src="https://docmerit.com/images/notfoundertwo.png">
              <h2> You have not purchased any document yet</h2>
              <a href="https://docmerit.com/search">
                <input type="submit" name="submit" class="not-found-btn" value="Browse document">
              </a>
            </center>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="modal fade" id="ratingModal" role="dialog">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <form id="frmRating">
          <div class="modal-body">
            <div class="form-group">
              <label for="description">Review <span style="color:red">*</span>
              </label>
              <textarea placeholder="Plear enter your comment" name="review" id="review" class="form-control input-lg" style="resize: vertical;" rows="3" maxlength="150"></textarea>
              <div class="character-counter" style="color: rgb(92, 92, 92);">
                <span id="charNum">150</span> characters left
              </div>
            </div>
            <div class="form-group">
              <label for="description">Rating <span style="color:red">*</span>
              </label>
              <input id="rating-system" name="rating_system" type="number" data-min="0" data-max="5" data-step="1">
              <div class="clearfix"></div>
            </div>
            <input type="hidden" name="document_id" id="document_id" value="">
            <input type="hidden" name="document_type" id="document_type" value="">
            <input type="submit" name="saveReview" id="saveReview" class="btn btn-primary" value="Save" />
            <input type="reset" name="resetReview" id="resetReview" class="btn 	btn-primary" style="display:none;" value="Reset Rating" />
          </div>
        </form>
      </div>
    </div>
  </div>

</body>
@endsection