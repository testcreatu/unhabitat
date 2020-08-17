<div class="container top-header">
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
 
</div>


<div id="topNav" class="" role='navigation'>
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
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item {{ (request()->is('featured_news*')) ? 'active' : '' }}" href="{{url('featured_news')}}">News</a>
                <a class="dropdown-item {{ (request()->is('images*')) ? 'active' : '' }}" href="{{url('images')}}">Photo</a>
              </div>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                project
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a href="#" class="dropdown-item">Ongoing project</a>
                <a class="dropdown-item" href="#">Completed project</a>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">focus areas</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">events</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                publication
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="{{url('recent_publish')}}">Nepal publicatuon</a>
                <a class="dropdown-item" href="#">International publication</a>
                <a class="dropdown-item" href="#">Flagship publication</a>
              </div>
            </li>
            <li class="nav-item  {{ (request()->is('our_video*')) ? 'active' : '' }}">
              <a class="nav-link" href="{{url('our_video')}}">video</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">notice</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">covid-19 response</a>
            </li>
          </ul>
        </div>
      </nav>
    </div>
  </div>
</div>