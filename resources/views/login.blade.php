@extends('layouts.main')
@section('body_content')
    <div class="content-wrapper d-flex align-items-center auth">
        <div class="row w-100">
            <div class="col-lg-6 mx-auto">
                <div class="auth-form-light text-left p-5">
                    <div class="brand-logo">
                        <h3 class="font-weight-bold mb-0 text-center" style="color: #2370C8;">LOKER PETIK</h3>
                    </div>
                    <!-- <h4>Selamat datang di SILOKERNF </h4> -->
                    <h6 class="text-dark">Hallo! Selamat datang</h6>
                    <p class="text-dark">Silahkan masukan username dan passwod kamu untuk dapat melanjutkan
                        sebagai admin.</p>
                    <form class="pt-3">
                        <div class="form-group">
                            <input type="text" class="form-control form-control-lg" id="input-username"
                                placeholder="Username" required>
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control form-control-lg" id="input-password"
                                placeholder="Password" required>
                        </div>
                        <div class="mt-3">
                            <a href="#" id="btn-login"
                                class="btn text-white btn-block btn-primary btn-lg font-weight-medium auth-form-btn">LOGIN</a>
                        </div>
                        <!-- <div class="my-2 d-flex justify-content-between align-items-center">
                            <div class="form-check">
                                <label class="form-check-label text-muted">
                                    <input type="checkbox" class="form-check-input">
                                    Keep me signed in
                                    <i class="input-helper"></i></label>
                            </div>
                            <a href="#" class="auth-link text-black">Forgot password?</a>
                        </div>
                        <div class="mb-2">
                            <button type="button" class="btn btn-block btn-facebook auth-form-btn">
                                <i class="mdi mdi-facebook mr-2"></i>Connect using facebook
                            </button>
                        </div>
                        <div class="text-center mt-4 font-weight-light">
                            Don't have an account? <a href="register.html" class="text-primary">Create</a>
                        </div> -->
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- content-wrapper ends -->

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        <script src="{{ asset('js/login.js') }}"></script>
@endsection
