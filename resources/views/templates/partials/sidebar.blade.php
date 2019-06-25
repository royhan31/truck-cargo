<header class="page_header_side page_header_side_sticked active-slide-side-header ds">
  <span class="toggle_menu_side toggler_light header-slide">
    <span></span>
  </span>
  <div class="scrollbar-macosx">
    <div class="side_header_inner">
      <div class="greylinks">
        <!-- user -->

        <div class="user-menu">
          <div class="user-menu-media">
            <img src="{{ asset('assets/images/team/01.jpg')}}" alt="">
          </div>
          <div class="user-menu-info">
            <h4>Truck Cargo</h4>
            <ul class="nav vertical-nav">
              <li class="">
                  {{Auth::user()->name}}
              </li>
            </ul>
          </div>
        </div>

        <!-- main side nav start -->
        <nav class="mainmenu_side_wrapper">
          <h3 class="main_bg_color2">Menu</h3>
          <ul class="nav vertical-nav menu-side-click">
            <li class="@if(Request::is('beranda')) active @endif">
              <a href="{{route('dashboard')}}">
                <i class="fa fa-desktop fa-lg"></i>
                Beranda
              </a>
            </li>
            <li class="@if(Request::is('penimbangan')) active @endif">
              <a href="{{route('cargo')}}">
                <i class="fa fa-balance-scale fa-lg"></i>
                Penimbangan
              </a>
            </li>
            <li class="@if(Request::is('laporan')) active @endif">
              <a href="{{route('report')}}">
                <i class="fa fa-file-text fa-lg"></i>
                Laporan
              </a>
            </li>
          </ul>
        </nav>
        <!-- eof main side nav -->
      </div>
    </div>
  </div>
</header>
