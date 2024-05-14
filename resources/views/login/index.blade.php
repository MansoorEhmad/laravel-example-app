<!DOCTYPE html>
<html>
  <head>
    @include('layouts.site-css')
  </head>
<body>
    
    <div class="container d-flex flex-column min-vh-100 justify-content-center align-items-center">
        
        <div class="card">
          <div class="card-header text-white bg-primary">
            Login
          </div>
          <div class="card-body">
              
              <form method="post" action="{{ route('login.index') }}" class="row row-cols-lg-auto g-3 align-items-center">
                  @csrf
                  <div class="col-12">
                    <label>Email</label>
                    <div class="input-group">
                      <div class="input-group-text">@</div>
                      <input type="text" id="email" name="email" class="form-control" placeholder="Enter email" required>
                    </div>
                      @error('email')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                  </div>
                  <div class="col-12">
                    <label>Password</label>
                        <div class="input-group">
                          <input type="password" id="password" name="password" class="form-control" placeholder="Enter password" required>
                      </div>
                      @error('password')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                  <div class="col-6 mx-auto d-grid gap-2">
                        <button type="submit" id="submit" name="submit" class="form-control btn btn-primary">Login</button>
                  </div>
            </form>
              
            <p class="text-center mt-2">Do not have an account? <a href="{{ route('page.register')}}">Register</a></p>
            <p class="text-center text-danger mt-2">
                @if(session('message'))
                    {{ session('message') }}
                @endif
            </p>
              
          </div>
        </div>
        
    </div>

    @include('layouts.site-js')
</body>
</html>