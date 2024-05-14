<!DOCTYPE html>
<html>
  <head>
    @include('layouts.site-css')
  </head>
<body>
    
    <div class="container d-flex flex-column min-vh-100 justify-content-center align-items-center">
        <div class="col-6">
        <div class="card">
          <div class="card-header text-white bg-primary">
            Register
          </div>
          <div class="card-body">
              
              <form method="post" action="{{ route('register.user') }}" class="row row-cols-lg-auto g-3 align-items-center">
                  @csrf
                  <div class="col-12">
                    <label>Full Name</label>
                    <div class="input-group">
                      <input type="text" id="name" name="name" class="form-control" placeholder="Enter full name" required>
                    </div>
                      @error('email')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                  </div>
                  
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
                        <button type="submit" id="submit" name="submit" class="form-control btn btn-primary">Register</button>
                  </div>
            </form>
              
              <p class="text-center mt-2">Already have an account? <a href="{{ route('index')}}">Login</a></p>
              
          </div>
        </div>
        </div>
    </div>

    @include('layouts.site-js')
</body>
</html>