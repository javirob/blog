<nav class="navbar navbar-expand-md navbar-dark bg-dark shadow py-3">
  <div class="container">
      <a class="navbar-brand" href="{{ url('/') }}">
          Blogger
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
          <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <!-- Right Side Of Navbar -->
          <ul class="navbar-nav ml-auto">
              <!-- Authentication Links -->
              @guest
                  @if (Route::has('login'))
                      <li class="nav-item">
                          <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                      </li>
                  @endif
                  
                  @if (Route::has('register'))
                      <li class="nav-item">
                          <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                      </li>
                  @endif
              @else

                  
                <li class="nav-item">
                  <a class="nav-link mr-4" href="/">Home</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link mr-4" href="/about">About</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link mr-4" href="/services">Services</a>             
                </li>
                <li class="nav-item">
                  <a class="nav-link mr-4" href="/posts">Blog</a>                 
                </li>                      
                <div>
                  <a class="mr-4 mb-2 p-2  btn btn-primary btn-sm" href="{{route('posts.create')}}">New Post</a>       
                </div>
                <form action="{{ route('logout') }}" method="POST">
                  @csrf
                  <button class="p-2 btn btn-primary btn-sm" type="submit">Logout</button>
                </form>           
              @endguest
          </ul>
      </div>
  </div>
</nav>
         
                 
                    
         
        
          
            
           
           
         
            

            
                
                  
           