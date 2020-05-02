@extends('layouts.app')
@section('content')
<main class="content">
    <div class="py-5">
        <div class="container py-3">
            <div class="row align-items-center mb-5 justify-content-center">
                <div class="col-lg-7 col-md-7 order-1 order-lg-1 sm-none">
                    <img src="/img/Group 20 (1).png" alt="" class="img-fluid mb-4 mb-lg-0 h-100">

                </div>
                <div class="col-lg-4 col-md-5 col-sm-10 mx-auto order-2 order-sm-2 order-lg-2">
                    <div class="bg-auth p-5">
                        <h3 class="pb-3 text-center">
                            Login
                        </h3>

                        <form action="{{ route('login') }}">
                          @csrf
                            <div class="form-group">
                                <input type="email" class="form-control" placeholder="Email or username">
                            </div>
                            <div class="form-group">
                                <input type="psw" class="form-control" placeholder="Password">
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-block btn-md btn-info">Login</button>
                            </div>
                            <p style="text-align: center;"> OR</p>
                            <div class="form-group">
                                <button type="submit" class="btn btn-block btn-md btn-primary">LOGIN WITH
                                    GOOGLE</button>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-block btn-md btn-info">LOGIN WITH FACEBOOK</button>
                            </div>
                        </form>
                    </div>


                </div>
            </div>
        </div>
    </div>
</main>
@endsection
