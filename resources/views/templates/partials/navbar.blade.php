<header class="page_header header_white">
  <div class="pull-right">
    <ul class="inline-dropdown inline-block">
      <!-- <li class="dropdown header-notes-dropdown">
        <a class="header-button" id="header-messages" data-target="#" href="./" data-toggle="dropdown" aria-haspopup="true" role="button" aria-expanded="false">
          <i class="fa fa-envelope grey"></i>
          <span class="header-button-text">Inbox</span>
          <span class="header-dropdown-number">
            10
          </span>
        </a>

        <div class="dropdown-menu" role="menu" aria-labelledby="header-messages">
          <ul class="list1 no-bullets no-top-border no-bottom-border bottommargin_0">

            <li>
              <div class="media">
                <div class="media-left">
                  <img src="images/team/01.jpg" alt="...">
                </div>
                <div class="media-body">
                  <h5 class="media-heading">
                    Alex Walker
                    <small>2 hours ago</small>
                  </h5>
                  <div class="one-line-text">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum, corporis. Voluptatibus odio perspiciatis non quisquam provident, quasi eaque officia.
                  </div>
                </div>
              </div>
            </li>
            <li>
              <div class="media">
                <div class="media-left">
                  <img src="images/team/02.jpg" alt="...">
                </div>
                <div class="media-body">
                  <h5 class="media-heading">
                    Janet C. Donnalds
                    <small>5 hours ago</small>
                  </h5>
                  <div class="one-line-text">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Libero itaque dolor laboriosam dolores magnam mollitia, voluptatibus inventore accusamus illo.
                  </div>
                </div>
              </div>
            </li>
            <li>
              <div class="media">
                <div class="media-left">
                  <img src="images/team/03.jpg" alt="...">
                </div>
                <div class="media-body">
                  <h5 class="media-heading">
                    Victoria Grow
                    <small>1 day ago</small>
                  </h5>
                  <div class="one-line-text">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Labore, esse, magni aliquam quisquam modi delectus veritatis est ut culpa minus repellendus.
                  </div>
                </div>
              </div>
            </li>
            <li>
              <div class="text-center darklinks">
                <a href="admin_inbox.html">View All</a>
              </div>
            </li>
          </ul>
        </div>
      </li> -->

      <!-- <li class="dropdown header-notes-dropdown">
        <a class="header-button" id="header-notes" data-target="#" href="./" data-toggle="dropdown" aria-haspopup="true" role="button" aria-expanded="false">
          <i class="fa fa-bell grey"></i>
          <span class="header-button-text">Messages</span>
          <span class="header-dropdown-number">
            6
          </span>
        </a>

        <div class="dropdown-menu" role="menu" aria-labelledby="header-notes">
          <ul class="list1 no-bullets no-top-border no-bottom-border bottommargin_0">
            <li>
              <div class="media small-teaser">
                <div class="media-left">
                  <div class="teaser_icon label-success round">
                    <i class="fa fa-shopping-cart"></i>
                  </div>
                </div>
                <div class="media-body">
                  <span class="grey">
                    New order
                  </span>
                  <small class="pull-right">2 minutes ago</small>
                </div>
              </div>
            </li>
            <li>
              <div class="media small-teaser">
                <div class="media-left">
                  <div class="teaser_icon label-success round">
                    <i class="fa fa-user"></i>
                  </div>
                </div>
                <div class="media-body">
                  <span class="grey">
                    New user registered
                  </span>
                  <small class="pull-right">3 minutes ago</small>
                </div>
              </div>
            </li>

            <li>
              <div class="media small-teaser">
                <div class="media-left">
                  <div class="teaser_icon label-danger round">
                    <i class="fa fa-bolt"></i>
                  </div>
                </div>
                <div class="media-body">
                  <span class="grey">
                    Server overloaded
                  </span>
                  <small class="pull-right">5 minutes ago</small>
                </div>
              </div>
            </li>

            <li>
              <div class="media small-teaser">
                <div class="media-left">
                  <div class="teaser_icon label-warning round">
                    <i class="fa fa-bell-o"></i>
                  </div>
                </div>
                <div class="media-body">
                  <span class="grey">
                    Long database query
                  </span>
                  <small class="pull-right">5 minutes ago</small>
                </div>
              </div>
            </li>

            <li>
              <div class="media small-teaser">
                <div class="media-left">
                  <div class="teaser_icon label-success round">
                    <i class="fa fa-user"></i>
                  </div>
                </div>
                <div class="media-body">
                  <span class="grey">
                    New user registered
                  </span>
                  <small class="pull-right">8 minutes ago</small>
                </div>
              </div>
            </li>
            <li>
              <div class="text-center darklinks">
                <a href="#">View All</a>
              </div>
            </li>

          </ul>
        </div>
      </li> -->

      <li class="dropdown user-dropdown-menu">
        <a class="header-button" id="user-dropdown-menu" data-target="#" href="./" data-toggle="dropdown" aria-haspopup="true" role="button" aria-expanded="false">
          <i class="fa fa-user grey"></i>
          <span class="header-button-text">{{Auth::user()->name}}</span>
        </a>
        <div class="dropdown-menu" aria-labelledby="user-dropdown-menu">
          <ul class="nav vertical-nav greylinks">
            <!-- <li>
              <a href="admin_profile.html">
                <i class="fa fa-user"></i>
                Profile
              </a>
            </li>
            <li>
              <a href="admin_profile_edit.html">
                <i class="fa fa-edit"></i>
                Edit Profile
              </a>
            </li>
            <li>
              <a href="admin_inbox.html">
                <i class="fa fa-envelope-o"></i>
                Inbox
              </a>
            </li> -->
            <li>
              <a href="{{route('logout')}}" onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">
                <i class="fa fa-sign-out"></i>
                Log Out
              </a>
              <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                  @csrf
              </form>
            </li>
          </ul>

        </div>

      </li>

    </ul>
  </div>
  <!-- eof .header_right_buttons -->

</header>
