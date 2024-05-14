@extends('layouts.app-admin', ['page' => 'register'])
@section('content')
<div class="container d-flex flex-column min-vh-100 justify-content-center align-items-center">
        <div class="col-6">
        <div class="card">
          <div class="card-header text-white bg-primary">
            Register
          </div>
          <div class="card-body">
              
              <from method="post" action="{{ route('update.user') }}" class="row row-cols-lg-auto g-3 align-items-center">
                @csrf
                @include('register.form')
              </from>
          </div>
        </div>
        </div>
    </div>
@endsection