<div id="navbar" >  
  <div class="container">
    <nav class="navbar smart-scroll navbar-expand-lg navbar-light pt-0 pb-0">
      <a class="navbar-brand" href="{{url('/')}}">
        <div class="logo">
          <img src="{{url('public/images/logo-1.png')}}" class="img-fluid" alt="">
        </div>
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse " id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item {{ (request()->is('home*')) ? 'active' : '' }}">
            <a class="nav-link" href="{{url('home')}}">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item {{ (request()->is('about_us*')) ? 'active' : '' }}">
            <a class="nav-link" href="{{url('about_us')}}">About us &nbsp; <i class="fas fa-caret-down"></i></a>
            <div class="sub-menu">
              <ul>
                <li>
                  <a href="{{url('about_us')}}" class="nav-link">Overview</a>
                </li>
                @foreach($finalHeader['about_pages'] as $aboutPage)
                <li>
                  <a href="{{url('about-us/'.$aboutPage['slug'])}}" class="nav-link">{{$aboutPage['title']}}</a>
                </li>
                @endforeach

              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Project  &nbsp; <i class="fas fa-caret-down"></i></a>
            <div class="sub-menu">
              <ul>
                <li>
                  <a href="#" class="nav-link">Ongoing Project</a>
                  <div class="sub-menu-1">
                    <ul>
                      @foreach($finalHeader['ongoing'] as $ongoing)
                      <li><a href="{{url('project_detail/'.$ongoing['slug'])}}">{{$ongoing['title']}}</a></li>
                      @endforeach
                    </ul>
                  </div>
                </li>
                <li>
                  <a href="#" class="nav-link">Completed Project</a>
                  <div class="sub-menu-1">
                    <ul>
                      @foreach($finalHeader['completed'] as $completed)
                      <li><a href="{{url('project_detail/'.$completed['slug'])}}">{{$completed['title']}}</a></li>
                      @endforeach
                      {{--      <li><a href="{{url('project_detail')}}">Land and Global Land Tool Network(GLTN)</a></li>
                      <li><a href="{{url('project_detail')}}">Parya Sampada</a></li> --}}
                    </ul>
                  </div>
                </li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Media Center</a>
            <div class="sub-menu">
              <ul>
                <li>
                  <a href="{{url('featured_news')}}" class="nav-link">News Stories</a>
                </li>
                <li>
                  <a href="{{url('images')}}" class="nav-link">Gallery</a>
                </li>
                <li>
                  <a href="{{url('our_video')}}" class="nav-link">Video</a>
                </li>
              </ul>
            </div>
          </li>
        </ul>
        <i id="search-btn" class="fas fa-search" aria-hidden="true"></i>
        <div id="search-overlay" class="block">
          <div class="centered">
            <div id='search-box'>
              <i id="close-btn" class="fa fa-times fa-2x"></i>
              <form id='search-form' action="{{url('search')}}" method="GET">
                <div class="form-group">
                  <input type="text" name="search_tag" class="form-control" placeholder="Search" value="<?php echo isset(Request()->search_tag) ? Request()->search_tag :'' ?>">
                  <button type='submit'><i class="fas fa-search" aria-hidden="true"></i></button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </nav>
  </div>
</div>




<div class="sticky-container">
  @if($finalHeader['social_links'] != Null)
  <ul class="sticky">
    @if($finalHeader['social_links']['fb_link'] != NULL)
    <li>
      <img src="{{url('public/images/facebook-circle.png')}}" width="32" height="32">
      <p><a href="{{$finalHeader['social_links']['fb_link']}}" target="_blank">Like Us on<br>Facebook</a></p>
    </li>
    @endif
    @if($finalHeader['social_links']['twitter_link'] != NULL)
    <li>
      <img src="{{url('public/images/twitter-circle.png')}}" width="32" height="32">
      <p><a href="{{$finalHeader['social_links']['twitter_link']}}" target="_blank">Follow Us on<br>Twitter</a></p>
    </li>
    @endif
    @if($finalHeader['social_links']['linkedin_link'] != NULL)
    <li>
      <img src="{{url('public/images/linkedin-circle.png')}}" width="32" height="32">
      <p><a href="{{$finalHeader['social_links']['linkedin_link']}}" target="_blank">Follow Us on<br>LinkedIn</a></p>
    </li>
    @endif
    @if($finalHeader['social_links']['youtube_link'] != NULL)
    <li>
      <img src="{{url('public/images/youtube-circle.png')}}" width="32" height="32">
      <p><a href="{{$finalHeader['social_links']['youtube_link']}}" target="_blank">Subscribe on<br>YouYube</a></p>
    </li>
    @endif
  </ul>
  @endif
</div>




<!-- 
<div class="icon-bar">
  <a href="#" class="twitter"><i class="fab fa-twitter"></i></a> 
  <a href="#" class="facebook"><i class="fab fa-facebook-f"></i></a> 
  <a href="#" class="instagram"><i class="fab fa-instagram"></i></a>
  <a href="#" class="linkedin"><i class="fab fa-linkedin-in"></i></a>
  <a href="#" class="youtube"><i class="fab fa-youtube"></i></a> 
</div> -->
















<!-- <div id="topNav" class="" role='navigation'>
  <div class="header-nav bg-light" >
    <div class="container">
      <nav class="navbar navbar-expand-lg navbar-light pt-0 pb-0">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item {{ (request()->is('home*')) ? 'active' : '' }}">
              <a class="nav-link" href="home">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item {{ (request()->is('about_us*')) ? 'active' : '' }}">
              <a class="nav-link" href="{{url('about_us')}}">About us</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Media center
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item {{ (request()->is('featured_news*')) ? 'active' : '' }}" href="{{url('featured_news')}}">News</a></li>
                <li><a class="dropdown-item {{ (request()->is('images*')) ? 'active' : '' }}" href="{{url('images')}}">Photo</a></li>
              </ul>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                project
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <li>
                  <a href="#" class="dropdown-item">Ongoing project</a>
                  <ul>
                    <li><a href="{{url('project_detail')}}">Global Sanitation Fund Prgramme Nepal</a></li>
                    <li><a href="{{url('project_detail')}}">Land and Global Land Tool Network(GLTN)</a></li>
                    <li><a href="{{url('project_detail')}}">Parya Sampada</a></li>
                  </ul>
                </li>
                <li>
                  <a class="dropdown-item" href="#">Completed project</a>
                  <ul>
                    <li><a href="{{url('project_detail')}}">Water for Asian Cities Programme Nepal</a></li>
                    <li><a href="{{url('project_detail')}}">Green Homes: Promoting Sustainable Housing in Nepal</a></li>
                    <li><a href="{{url('project_detail')}}">Emergency Shelter Project</a></li>
                  </ul>
                </li>
              </ul>
            </li>
            <li class="nav-item {{ (request()->is('focus_area*')) ? 'active' : '' }}">
              <a class="nav-link" href="{{url('focus_area')}}">focus areas</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{url('event')}}">events</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                publication
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <li>
                  <a class="dropdown-item" href="{{url('recent_publish')}}">Nepal publication</a>
                </li>
              </ul>
            </li>
            <li class="nav-item  {{ (request()->is('our_video*')) ? 'active' : '' }}">
              <a class="nav-link" href="{{url('our_video')}}">video</a>
            </li>
            <li class="nav-item {{ (request()->is('notice*')) ? 'active' : '' }}">
              <a class="nav-link" href="{{url('notice')}}">notice</a>
            </li>
            <li class="nav-item  {{ (request()->is('covid-19_response*')) ? 'active' : '' }}">
              <a class="nav-link" href="{{url('covid-19_response')}}">covid-19 response</a>
            </li>
          </ul>
        </div>
      </nav>
    </div>
  </div>
</div> -->