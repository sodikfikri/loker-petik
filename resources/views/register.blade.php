@extends('layouts.main')
@section('body_content')
    <div class="content-wrapper d-flex align-items-center auth">
        <div class="row w-100">
            <div class="col-lg-6 mx-auto">
                <div class="auth-form-light text-left p-5">
                    <div class="brand-logo">
                        <h3 class="font-weight-bold mb-0 text-center" style="color: #2370C8;">LOKER PETIK</h3>
                    </div>
                    <h6 class="text-dark">Hallo! Selamat datang</h6>
                    <p class="text-dark">Silahkan mengisi form di bawah untuk regestrasi!</p>
                    <form class="pt-3" id="formData">
                        @csrf
                        <div class="form-group">
                            <input type="text" class="form-control form-control-lg"
                                placeholder="Nama" name="name" required>
                        </div>
                        <div class="form-group">
                            <input type="number" class="form-control form-control-lg"
                                placeholder="No HP" name="phone" required>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control form-control-lg"
                                placeholder="Alamat" name="address" required>
                        </div>
                        <div class="form-group">
                            <input type="number" class="form-control form-control-lg"
                                placeholder="Periode" name="period" required>
                        </div>
                        <div class="form-group">
                            <input type="file" class="form-control form-control-lg"
                                placeholder="cv" name="cv" required>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control form-control-lg"
                                placeholder="Email" name="email" required>
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control form-control-lg"
                                placeholder="Password" name="password" required>
                        </div>
                        <input type="hidden" value="2" name="type">
                        <div class="mt-3">
                            <button class="btn text-white btn-block btn-primary btn-lg font-weight-medium auth-form-btn" id="btn-regist">SAVE</button>
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
    <script src="{{ asset('js/register.js') }}"></script>
    <!-- <script>
        jQuery(function($){

        let State = {
            APIUR: 'http://localhost:8000/api/'
        }
        let Regis = {}

        Regis.actived = function() {
            Regis.Event.active()
        }

        Regis.API = {
            register: function(data) {
                $.ajax({
                    method: 'POST',
                    url: State.APIUR + 'register',
                    data: data,
                    success: function(resp) {
                        if (resp.meta.code == '200') {
                            console.log(resp.meta.message);
                        } else {
                            console.log('Fail to register data');
                        }
                    },
                    complete: function() {

                    }
                })
            }
        }

        Regis.Event = {
            active: function() {
                this.btnRegis()
            },
            btnRegis: function() {
                $('#btn-regist').on('click', function(e) {
                    e.preventDefault()

                    let data = new FormData($('#formData')[0])

                    Regis.API.register(data)
                })
            }
        }

        Regis.actived()

        })
    </script> -->
@endsection
