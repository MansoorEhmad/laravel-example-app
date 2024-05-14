@extends('layouts.app-admin', ['page' => 'updateUser'])
<div class="container d-flex flex-column min-vh-100 justify-content-center align-items-center">
        <div class="col-6">
        <div class="card">
          <div class="card-header text-white bg-primary">
            Update User
          </div>
          <div class="card-body">
              
              <form method="post" action="{{ route('update.user') }}" class="row row-cols-lg-auto g-3 align-items-center">
                  @csrf
                  <input type="hidden" name="hidden_id" value="{{ old('name') ?? $user->id}}">
                  <div class="col-12">
                    <label>Full Name</label>
                    <div class="input-group">
                      <input type="text" id="name" name="name" class="form-control" placeholder="Enter full name" required value="{{ old('name') ?? $user->name}}">
                    </div>
                  </div>
                  
                  <div class="col-12">
                    <label>Email</label>
                    <div class="input-group">
                      <div class="input-group-text">@</div>
                      <input type="text" id="email" name="email" class="form-control" placeholder="Enter email" required value="{{ old('email') ?? $user->email}}">
                    </div>
                  </div>

                  <div class="col-12">
                    <label>Password</label>
                        <div class="input-group">
                          <input type="password" id="password" name="password" class="form-control" placeholder="Enter password" required value="{{ old('password') ?? $user->password}}">
                        </div>
                    </div>

                  <div class="col-6 mx-auto d-grid gap-2">
                        <button type="submit" id="submit" name="submit" class="form-control btn btn-primary">Update</button>
                  </div>
            </form>
              
          </div>
        </div>
        </div>
    </div>