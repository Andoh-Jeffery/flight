@extends('layouts.layout')
@section('content')
<div class="mn-vh-100 d-flex align-items-center">
    <div class="container">
        <!-- Card -->
        <div class="card justify-content-center auth-card">
            <div class="row justify-content-center">
                <div class="col-xl-7 col-lg-9">
                    <h4 class="mb-5 font-20">Welcome To Capital AirWays</h4>
                    @if($errors->any())
                    <div>
                        <ul>
                            @foreach($errors->all() as $error)
                            <li>{{$error}}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif
                    <form action="/login" method="POST">
                        @csrf
                        <!-- Form Group -->
                        <div class="form-group mb-20">
                            <label for="email" class="mb-2 font-14 bold black">Email Address</label>
                            <input type="email" id="email" class="theme-input-style" placeholder="Email Address"
                                name="email">
                        </div>
                        <!-- End Form Group -->

                        <!-- Form Group -->
                        <div class="form-group mb-20">
                            <label for="password" class="mb-2 font-14 bold black">Password</label>
                            <input type="password" id="password" class="theme-input-style" placeholder="********"
                                name="password">
                        </div>
                        <!-- End Form Group -->

                        <div class="d-flex justify-content-between mb-20">

                        </div>
                        <div class="d-flex align-items-center">
                            <button type="submit" class="btn btn-block long mr-20">Log In</button>
                            <!-- <span class="font-12 d-block"><a href="register.html" class="bold">Sign Up</a>,If you have
                                no account.</span> -->
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- End Card -->
    </div>
</div>

<!-- Footer -->
<footer class="footer style--two">
    Dashmin © 2020 created by <a href="https://www.themelooks.com/"> ThemeLooks</a>
</footer>
<!-- End Footer -->
@endsection