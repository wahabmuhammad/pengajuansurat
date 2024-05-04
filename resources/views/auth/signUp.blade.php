@extends('layout.master')
@section('content')
    <section class="vh-100 gradient-custom">
        <div class="container py-5 h-100">
            <div class="row justify-content-center align-items-center h-100">
                <div class="col-12 col-lg-9 col-xl-7">
                    <div class="card shadow-2-strong card-registration" style="border-radius: 15px;">
                        <div class="card-body p-4 p-md-5">
                            <h3 class="mb-4 pb-2 pb-md-0 mb-md-5">Buat Akun</h3>
                            <form action="{{ route('store') }}" method="POST">
                                @csrf

                                <div class="row-md">
                                    <div class="form-outline">
                                        <label for="email" class="form-label">Email</label>
                                        <input type="email" name="email"
                                            class="form-control form-control-lg @error('email') is-invalid @enderror"
                                            id="email" value="{{ old('email') }}" />
                                    </div>
                                </div>

                                <div class="row-md">
                                    <div class="form-outline">
                                        <label class="form-label" for="password">Password</label>
                                        <div class="form-group boxed">
                                            <div class="input-wrapper">
                                                <input type="password" id="password" name="password"
                                                    class="form-control form-control-lg @error('password') is-invalid @enderror"
                                                    oninput="toggleeye()" />
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="mt-4 pt-2">
                                    <input id="register" name="register" class="btn btn-primary btn-lg" type="submit"
                                        value="Daftar" />
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
