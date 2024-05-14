<nav class="navbar navbar-expand-lg shadow {{ $theme == 'dark' ? 'navbar-dark' : 'navbar-light'}}">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Dropdown
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
        </li>
      </ul>
        
      <form class="d-flex">
        <a href="{{ route('theme.change') }}" class="btn btn-outline-secondary me-2">            
                <i class="{{ $theme == 'light' ? 'fas fa-moon' : 'fas fa-sun text-warning'}}"></i>
        </a>
        <a href="{{ route('edit.user') }}" class="btn btn-outline-secondary me-2">            
                Update
        </a>
        <a href="{{ route('logout.index') }}" class="btn btn-outline-secondary">            
                Logout
        </a>
      </form>
    </div>
  </div>
</nav>