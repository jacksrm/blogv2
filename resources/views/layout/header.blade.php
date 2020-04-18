
  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
      <a class="navbar-brand" href=" {{route('home')}} ">Home</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item ">
            <a class="nav-link" href=" {{route('user.create')}} ">Register</a>
          </li>

          <li class="nav-item">
            <a class="nav-link btn btn-secondary" style="color: white" href=" {{route('create-post')}} ">Create a Post</a>
          </li>
          
          <li class="nav-item" style="margin-left:10px">
            <div class="dropdown show">
              <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Users
              </a>
              
              
                <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                  @foreach ($users as $user)
                    <a class="dropdown-item" 
                        href="#"> 
                          {{ $user->email}} 
                    </a>
                  @endforeach
                </div>
                  

            </div>

          </li>
        </ul>
      </div>
    </div>
  </nav>
