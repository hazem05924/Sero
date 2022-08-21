<!doctype html>
<html lang="en" class="no-js">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700' rel='stylesheet' type='text/css'>

    <link rel="stylesheet" href="{{ asset('cms/css/reset.css') }}">
    <!-- CSS reset -->
    <link rel="stylesheet" href="{{ asset('cms/css/style.css') }}">
    <!-- Resource style -->
    <link href="{{ asset('cms/css/style.css') }}" rel="stylesheet" />
    <script src="{{ asset('cms/js/modernizr.js') }}"></script>
    <!-- Modernizr -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('cms/plugins/fontawesome-free/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('cms/plugins/fontawesome-free-6.1.1/css/all.min.css') }}">
    <title>Hotel</title>
    <style>
        ::-webkit-scrollbar{
             width: 10px;

        }
        ::-webkit-scrollbar-track {
            background:white;

        }
        ::-webkit-scrollbar-thumb {
            background: #888;
            border-radius: 50px;
        }
        ::-webkit-scrollbar-thumb:hover {
            background: #555;
        }
        ::-webkit-scrollbar-thumb:active {
            background: #212375;
        }

    </style>
</head>

<body>
<<<<<<< HEAD:resources/views/front_end/book.hotel.blade.php
    <header class="cd-header">
        <div class="panel search-card">
            <div class="panel-body">
              <div class="row flex" style="align-items: center;">
                <div class="col-xs-4 col-sm-2 col-md-2 col-lg-2">
                  <p class="search-title-key">وجهة السفر</p>
                   <h3 class="search-title-value"><strong>مكة المكرمة</strong></h3>
=======
    <header class="cd-header" >
        <!-- link trigger modal -->
        <a class="text-black" data-bs-toggle="modal" data-bs-target="#Modal">Launch demo modal</a>

        <!-- Modal -->
        <div class="modal .modal-lg	 fade" id="Modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        ...
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    </div>
>>>>>>> 0c46795d91006c0a6853f8b2ca21f6411b1a16bc:resources/views/front_end/search-hotel.blade.php
                </div>
                <div class="col-xs-4 col-sm-2 col-md-2 col-lg-2 border-right">
                  <p class="search-title-key">الوصول&nbsp;<i aria-hidden="true" class="fa fa-angle-down"></i></p>
                   <h3 class="search-title-value"><strong>24 أغسطس 2022</strong></h3>
                </div>
                <div class="col-xs-4 col-sm-2 col-md-2 col-lg-2 border-right">
                  <p class="search-title-key">المغادرة&nbsp;<i aria-hidden="true" class="fa fa-angle-down"></i></p>
                   <h3 class="search-title-value"><strong>31 أغسطس 2022</strong></h3>
                </div>
                <div class="col-xs-4 col-sm-2 col-md-2 col-lg-2 border-right">
                  <p class="search-title-key">مسافرين&nbsp;<i aria-hidden="true" class="fa fa-angle-down"></i></p>
                  <h3 class="search-title-value"><strong>2 الكبار</strong></h3>
                </div>
                <div class="col-xs-4 col-sm-2 col-md-2 col-lg-2 border-right">
                  <p class="search-title-key">الغرف&nbsp;<i aria-hidden="true" class="fa fa-angle-down"></i></p>
                  <h3 class="search-title-value"><strong>1 الغرف</strong></h3>
                </div>
                <div class="col-xs-4 col-sm-2 col-md-2 col-lg-2 border-right">
                 <a class="btn btn-md btn-modify"> تعديل </a>
                </div>
              </div>
            </div>
           </div>
    </header>

    <main class="cd-main-content">
        <div class="cd-tab-filter-wrapper">
            <div class="cd-tab-filter">
                <ul class="cd-filters">
                    <li class="placeholder">
                        <a data-type="all" href="#0">All</a>
                        <!-- selected option on mobile -->
                    </li>
                    <li class="filter"><a class="selected" href="#0" data-type="all">All</a></li>
                    <li class="filter" data-filter=".color-1"><a href="#0" data-type="color-1">Color 1</a></li>
                    <li class="filter" data-filter=".color-2"><a href="#0" data-type="color-2">Color 2</a></li>
                </ul>
                <!-- cd-filters -->
            </div>
            <!-- cd-tab-filter -->
        </div>
        <!-- cd-tab-filter-wrapper -->

        <section class="cd-gallery ">
            <ul class="flex-warp row">
                  @foreach ($hotels as $hotel )
                  {{-- <a href="" class="nav-link "> --}}
                      <li class="mix color-1 check1 radio2 option3">
                          <div class="col">
                              <div class="card h-100">
                                  <div class="card-header">
                                      
                                      <h3 class="card-title">{{ $hotel->name }}</h3>
                                    </div>
                                    <div class="card-body">
                                          @if ($hotel->image != '')
                                          <img class="card-img-top"  src="{{asset('storage/images/hotels/'.$hotel->image)}}" width="60" height="250" alt="User Image">
                                          @else
                                              
                                              <li class="mix color-1 check1 radio2 option3"><img src="{{asset('storage/images/users.jpg')}}" alt="User Image"></li>
                  
                                          @endif
                                        <span style="display: block" class="mt-4"> 
                                            @if ( $hotel->rate  ==='5')
                                                <span class="text-warning"><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i></span>
                                            @elseif ($hotel->rate  ==='4')
                                                 <span class="text-warning"><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></span>
                                            @elseif ($hotel->rate  ==='3')
                                                  <span class="text-warning"><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i></span>
                                            @elseif ($hotel->rate  ==='2')
                                                   <span class="text-warning"><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i></span>
                                            @elseif ($hotel->rate  ==='1')
                                                    <span class="text-warning"><i class="fa-solid fa-star"></i></span>
                                            @else
                                                     <span class="badge bg-danger">not found</span>
                                             @endif
                                        </span>
                                        <span class="badge bg-success mt-3"> {{ $hotel->city->name }} - {{ $hotel->address }}</span>
                                    </div>
                                    <div class="card-footer">
                                        <h5><p class="card-text ">{{ $hotel->discreption }}</p></h5>
                                      </div>
                                    </div>
                                  </div>
                                
                            </li>
                        {{-- </a> --}}
                  @endforeach
                {{-- <li class="mix color-2 check2 radio2 option2"><img src="assets/img/img-2.jpg" alt="Image 2"></li>
                <li class="mix color-1 check3 radio3 option1"><img src="assets/img/img-3.jpg" alt="Image 3"></li>
                <li class="mix color-1 check3 radio2 option4"><img src="assets/img/img-4.jpg" alt="Image 4"></li>
                <li class="mix color-1 check1 radio3 option2"><img src="assets/img/img-5.jpg" alt="Image 5"></li>
                <li class="mix color-2 check2 radio3 option3"><img src="assets/img/img-6.jpg" alt="Image 6"></li>
                <li class="mix color-2 check2 radio2 option1"><img src="assets/img/img-7.jpg" alt="Image 7"></li>
                <li class="mix color-1 check1 radio3 option4"><img src="assets/img/img-8.jpg" alt="Image 8"></li>
                <li class="mix color-2 check1 radio2 option3"><img src="assets/img/img-9.jpg" alt="Image 9"></li>
                <li class="mix color-1 check3 radio2 option4"><img src="assets/img/img-10.jpg" alt="Image 10"></li>
                <li class="mix color-1 check3 radio3 option2"><img src="assets/img/img-11.jpg" alt="Image 11"></li>
                <li class="mix color-2 check1 radio3 option1"><img src="assets/img/img-12.jpg" alt="Image 12"></li> --}}
                <li class="gap"></li>
                <li class="gap"></li>
                <li class="gap"></li>
            </ul>
            <div class="cd-fail-message">No results found</div>
        </section>
        <!-- cd-gallery -->

        <div class="cd-filter">
            <form>
                <div class="cd-filter-block">
                    <h4>Search</h4>

                    <div class="cd-filter-content">
                        <input type="search" placeholder="Try color-1...">
                    </div>
                    <!-- cd-filter-content -->
                </div>
                <!-- cd-filter-block -->

                <div class="cd-filter-block">
                    <h4>Check boxes</h4>

                    <ul class="cd-filter-content cd-filters list">
                        <li>
                            <input class="filter" data-filter=".check1" type="checkbox" id="checkbox1">
                            <label class="checkbox-label" for="checkbox1">Option 1</label>
                        </li>

                        <li>
                            <input class="filter" data-filter=".check2" type="checkbox" id="checkbox2">
                            <label class="checkbox-label" for="checkbox2">Option 2</label>
                        </li>

                        <li>
                            <input class="filter" data-filter=".check3" type="checkbox" id="checkbox3">
                            <label class="checkbox-label" for="checkbox3">Option 3</label>
                        </li>
                    </ul>
                    <!-- cd-filter-content -->
                </div>
                <!-- cd-filter-block -->

                <div class="cd-filter-block">
                    <h4>Select</h4>

                    <div class="cd-filter-content">
                        <div class="cd-select cd-filters">
                            <select class="filter" name="selectThis" id="selectThis">
								<option value="">Choose an option</option>
								<option value=".option1">Option 1</option>
								<option value=".option2">Option 2</option>
								<option value=".option3">Option 3</option>
								<option value=".option4">Option 4</option>
							</select>
                        </div>
                        <!-- cd-select -->
                    </div>
                    <!-- cd-filter-content -->
                </div>
                <!-- cd-filter-block -->

                <div class="cd-filter-block">
                    <h4>Radio buttons</h4>

                    <ul class="cd-filter-content cd-filters list">
                        <li>
                            <input class="filter" data-filter="" type="radio" name="radioButton" id="radio1" checked>
                            <label class="radio-label" for="radio1">All</label>
                        </li>

                        <li>
                            <input class="filter" data-filter=".radio2" type="radio" name="radioButton" id="radio2">
                            <label class="radio-label" for="radio2">Choice 2</label>
                        </li>

                        <li>
                            <input class="filter" data-filter=".radio3" type="radio" name="radioButton" id="radio3">
                            <label class="radio-label" for="radio3">Choice 3</label>
                        </li>
                    </ul>
                    <!-- cd-filter-content -->
                </div>
                <!-- cd-filter-block -->
            </form>

            <a href="#0" class="cd-close">Close</a>
        </div>
        <!-- cd-filter -->

        <a href="#0" class="cd-filter-trigger">Filters</a>
    </main>
    <!-- cd-main-content -->
    <script src="{{ asset('cms/js/jquery-2.1.1.js') }}"></script>
    <script src="{{ asset('cms/js/jquery.mixitup.min.js') }}"></script>
    <script src="{{ asset('cms/js/main.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Resource jQuery -->
</body>

</html>
