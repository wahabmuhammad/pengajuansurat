@extends('layout.master')
@section('content')
    <section class="vh-100 gradient-custom">
        <div class="container py-5 h-100">
            @if ($errors->any())
                <div class="alert alert-outline-danger">
                    <ul>
                        @foreach ($errors->all() as $item)
                            <li>{{ $item }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <div class="row d-flex justify-content-center align-items-center h-100" id="row-atas">
                <div class="col-12 col-md-8 col-lg-6 col-xl-5 d-flex flex-column justify-content-center align-items-center">
                    <img src="{{ asset('image/jepara.png') }}" class="img" alt="image" id="foto-jepara">
                    <div class="row text-center mt-3">
                        <h4>Kecamatan Welahan Kabupaten Jepara</h4>
                    </div>
                </div>
                <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                    <div class="card bg-dark text-white" style="border-radius: 1rem;">
                        <div class="card-body p-4 text-center">

                            <div class="mb-md-5 mt-md-4 pb-5">

                                <h2 class="fw-bold mb-2 text-uppercase">Login</h2>
                                <p class="text-white-50 mb-5">Masukkan User dan password!</p>

                                <form action="{{ route('auth') }}" method="POST">
                                    @csrf
                                    <div data-mdb-input-init class="form-outline form-white mb-4">
                                        <input name="email" type="email" id="typeEmailX"
                                            class="form-control form-control-lg" />
                                        <label class="form-label" for="typeEmailX">Email</label>
                                    </div>

                                    <div data-mdb-input-init class="form-outline form-white mb-4">
                                        <input name="password" type="password" id="typePasswordX"
                                            class="form-control form-control-lg @error('password') is-invalid @enderror" />
                                        <label class="form-label" for="typePasswordX">Password</label>
                                    </div>

                                    {{-- <p class="small mb-5 pb-lg-2"><a class="text-white-50" href="#!">Lupa
                                            password?</a></p> --}}

                                    <button data-mdb-button-init data-mdb-ripple-init
                                        class="btn btn-outline-light btn-lg px-5" type="submit">Masuk</button>
                                </form>

                                {{-- <div class="d-flex justify-content-center text-center mt-0 pt-1">
                                    <a href="#!" class="text-white"><i class="fab fa-facebook-f fa-lg"></i></a>
                                    <a href="#!" class="text-white"><i class="fab fa-twitter fa-lg mx-4 px-2"></i></a>
                                    <a href="#!" class="text-white"><i class="fab fa-google fa-lg"></i></a>
                                </div> --}}

                            </div>

                            <div>
                                <p class="mb-0">Belum punya akun? <a href="{{ route('daftar') }}"
                                        class="text-white-50 fw-bold">Daftar</a>
                                </p>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
