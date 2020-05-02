@extends('layouts.app')
@section('content')
<main class="content">
  <div class="py-5">
      <div class="container py-3">
          <div class="row align-items-center mb-5  justify-content-center">
              <div class="col-lg-7 col-md-7 order-1 order-lg-1 sm-none">
                  <img src="/img/register.png" alt="" class="img-fluid mb-4 mb-lg-0 h-100">

              </div>
              <div class="col-lg-4 col-md-5 col-sm-10 mx-auto order-2 order-sm-2 order-lg-2">
                  <div class="bg-auth p-5">
                      <h3 class="pb-3 text-center">
                          Sign Up
                      </h3>

                      <form action="{{ route('signup') }}">
                        @csrf
                          <div class="form-group">
                              <input type="email" class="form-control" placeholder="Email">
                          </div>

                          <div class="form-group">
                              <input type="text" class="form-control" placeholder="Username">
                          </div>

                          <div class="form-group">
                              <input type="password" class="form-control" placeholder="Password">
                          </div>

                          <div class="form-group">
                              <input type="password" class="form-control" placeholder="Confirm Password">
                          </div>

                          <div class="form-group">
                              <button type="submit" class="btn btn-block btn-md btn-info">SIGN UP</button>
                          </div>
                          <p style="text-align: center;"> OR</p>
                          <div class="form-group">
                              <button type="submit" class="btn btn-block btn-md btn-primary">SIGN UP WITH GOOGLE</button>
                          </div>
                          <div class="form-group">
                              <button type="submit" class="btn btn-block btn-md btn-info">SIGN UP WITH FACEBOOK</button>
                          </div>
                      </form>
                      <div class="text-center">
                          <a href="{{ route('login') }}" class=" text-black">Login instead</a>

                      </div>
                  </div>


              </div>
          </div>
      </div>
  </div>
</main>

@endsection
