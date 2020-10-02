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
          <a class="nav-link" href="home">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item {{ (request()->is('about_us*')) ? 'active' : '' }}">
          <a class="nav-link" href="{{url('about_us')}}">About us</a>
          <div class="sub-menu">
            <ul>
              <li>
                <a href="{{url('about_us')}}" class="nav-link">Overview</a>
              </li>
              <li>
                <a href="#" class="nav-link">Where we are</a>
              </li>
              <li>
                <a href="#" class="nav-link">Mandate</a>
              </li>
            </ul>
          </div>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Project</a>
          <div class="sub-menu">
            <ul>
              <li>
                <a href="#" class="nav-link">Ongoing Project</a>
                <div class="sub-menu-1">
                  <ul>
                    <li><a href="{{url('project_detail')}}">Global Sanitation Fund Prgramme Nepal</a></li>
                    <li><a href="{{url('project_detail')}}">Land and Global Land Tool Network(GLTN)</a></li>
                    <li><a href="{{url('project_detail')}}">Parya Sampada</a></li>
                  </ul>
                </div>
              </li>
              <li>
                <a href="#" class="nav-link">Completed Project</a>
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
        
        <!-- <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Media center
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item {{ (request()->is('featured_news*')) ? 'active' : '' }}" href="{{url('featured_news')}}">News</a></li>
            <li><a class="dropdown-item {{ (request()->is('images*')) ? 'active' : '' }}" href="{{url('images')}}">Photo</a></li>
          </ul>
        </li> -->
        
        <!-- <li class="nav-item dropdown">
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
        </li> -->
       <!--  <li class="nav-item {{ (request()->is('focus_area*')) ? 'active' : '' }}">
          <a class="nav-link" href="{{url('focus_area')}}">focus areas</a>
        </li> -->
        <!-- <li class="nav-item">
          <a class="nav-link" href="{{url('event')}}">events</a>
        </li> -->
        <!-- <li class="nav-item">
          <a class="nav-link" href="{{url('recent_publish')}}">Publication</a>
          <div class="sub-menu">
            <ul>
              <li>
                <a href="{{url('recent_publish')}}" class="nav-link">National</a>
              </li>
              <li>
                <a href="#" class="nav-link">International</a>
              </li>
            </ul>
          </div>
        </li> -->
        <!-- <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            publication
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li>
              <a class="dropdown-item" href="{{url('recent_publish')}}">Nepal publication</a>
            </li>
          </ul>
        </li> -->
        <!-- <li class="nav-item  {{ (request()->is('our_video*')) ? 'active' : '' }}">
          <a class="nav-link" href="{{url('our_video')}}">video</a>
        </li> -->
        <!-- <li class="nav-item {{ (request()->is('notice*')) ? 'active' : '' }}">
          <a class="nav-link" href="{{url('notice')}}">notice</a>
        </li> -->
        <!-- <li class="nav-item  {{ (request()->is('covid-19_response*')) ? 'active' : '' }}">
          <a class="nav-link" href="{{url('covid-19_response')}}">covid-19 response</a>
        </li> -->
      </ul>
    </div>
  </nav>
  </div>
</div>

















<!-- <div class="container">
  <nav class="navbar smart-scroll navbar-expand-lg navbar-light pt-0 pb-0">
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




<style type="text/css">
  
.smart-scroll{
  position: fixed;
  top: 0;
  right: 0;
  left: 0;
  z-index: 1030;
}
.scrolled-down{
   transform:translateY(-100%); transition: all 0.3s ease-in-out;
}
.scrolled-up{
   transform:translateY(0); transition: all 0.3s ease-in-out;
}
</style> -->






<!-- <div class="container top-header">
  <div class="row">
    <div class="col-md-5">
     <div class="logo">
        <a href="{{url('/')}}"><img src="{{url('public/images/logo.png')}}" class="img-fluid" alt=""></a>
    </div>
    </div>
    <div class="col-md-7 search">
      <form>
        <input class="form-control" type="text" placeholder="Search" aria-label="Search">
        <p><i class="fas fa-search"></i></p>
      </form>
    </div>
  </div>
 
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