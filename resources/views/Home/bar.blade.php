<!-- Navbar Start -->


<div class="container-fluid mb-5">
    <div class="row border-top px-xl-5">
        <div class="col-lg-3 d-none d-lg-block">
            @php
                $mainCategories = \App\Http\Controllers\HomeController::maincategorylist()
            @endphp
            <a class="btn shadow-none d-flex align-items-center justify-content-between bg-primary text-white w-100" data-toggle="collapse" href="#navbar-vertical" style="height: 65px; margin-top: -1px; padding: 0 30px;">
                <h6 class="m-0">Categories</h6>

                <i class="fa fa-angle-down text-dark"></i>

            </a>

                <nav class="collapse show navbar navbar-vertical navbar-light align-items-start p-0 border border-top-0 border-bottom-0" id="navbar-vertical">
                    @foreach($mainCategories as $rs)


                    <div class="navbar-nav w-100 overflow-hidden" style="height: auto">

                        <div class="nav-item dropdown">

                            <div class="dropdown-menu position-absolute bg-secondary border-0 rounded-0 w-100 m-0">
                        @if(count($rs->children))
                            @include('home.categorytree',['children' => $rs->children])
                        @endif
                        </div>
                        <a href="#" class="nav-item nav-link" data-toggle="dropdown">{{$rs->title}} <i class="fa fa-angle-down float-right mt-1"></i></a>
                            <div class="dropdown-menu position-absolute bg-secondary border-0 rounded-0 w-100 m-0">
                            </div>

                        </div>
                        @endforeach

                </div>

                </nav>

        </div>


<!-- Navbar End -->
