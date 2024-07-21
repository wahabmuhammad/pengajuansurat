@extends('layout.admin.masterAdmin')
@section('content')
    <div class="page-header d-print-none">
        <div class="container-xl">
            <div class="row g-2 align-items-center">
                <div class="col">
                    <h2 class="page-title">
                        Data diri Pemohon
                    </h2>
                </div>
                <!-- Page title actions -->
                <div class="col-auto ms-auto d-print-none">
                    <button type="button" class="btn btn-primary" onclick="javascript:window.print();">
                        <!-- Download SVG icon from http://tabler-icons.io/i/printer -->
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" class="icon">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                            <path d="M17 17h2a2 2 0 0 0 2 -2v-4a2 2 0 0 0 -2 -2h-14a2 2 0 0 0 -2 2v4a2 2 0 0 0 2 2h2">
                            </path>
                            <path d="M17 9v-4a2 2 0 0 0 -2 -2h-6a2 2 0 0 0 -2 2v4"></path>
                            <path d="M7 13m0 2a2 2 0 0 1 2 -2h6a2 2 0 0 1 2 2v4a2 2 0 0 1 -2 2h-6a2 2 0 0 1 -2 -2z"></path>
                        </svg>
                        Print Data Diri
                    </button>
                </div>
            </div>
        </div>
    </div>
    <div class="page-body">
        <div class="container-xl">
            <div class="card card-lg">
                <div class="card-body">
                    <div class="row">
                        <div class="col-6">
                            <p class="h3">Informasi Data Diri</p>
                            <address>
                                Jl. Raya Welahan, Dukuh Jeruk Wangi, Kalipucang Kulon, Kec. Welahan,<br>
                                Kabupaten Jepara, Jawa Tengah<br>
                                59464<br>
                                (0291) 755035
                            </address>
                        </div>
                        {{-- <div class="col-6 text-end">
                            <p class="h3">Client</p>
                            <address>
                                Street Address<br>
                                State, City<br>
                                Region, Postal Code<br>
                                ctr@example.com
                            </address>
                        </div> --}}
                        <div class="col-12 my-5">
                            <h1>Arsip Data diri</h1>
                        </div>
                    </div>
                    <table class="table table-transparent table-responsive">
                        <thead>
                            <tr>
                                <th class="text-center" style="width: 1%"></th>
                                <th class="text-left" style="width:1%"></th>
                                <th class="text-left" style="width: 1%"></th>
                                <th class="text-left" style="width: 1%"></th>
                                <th class="text-end" style="width: 1%"></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="">Nama</td>
                                <td>:</td>
                                <td>
                                    <p class="strong mb-1">{{ $data->nama }}</p>
                                </td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td class="">NIK</td>
                                <td>:</td>
                                <td>
                                    <p class="strong mb-1">{{ $data->nik }}</p>
                                </td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td class="">Email</td>
                                <td>:</td>
                                <td>
                                    <p class="strong mb-1"> {{ $data->email }}</p>
                                </td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td class="">Kabupaten</td>
                                <td>:</td>
                                <td>
                                    <p class="strong mb-1"> {{ $data->kabupaten }}</p>
                                </td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td class="">Kecamatan</td>
                                <td>:</td>
                                <td>
                                    <p class="strong mb-1"> {{ $data->kecamatan }}</p>
                                </td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td class="">Desa</td>
                                <td>:</td>
                                <td>
                                    <p class="strong mb-1"> {{ $data->desa }}</p>
                                </td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td class="">Keperluan</td>
                                <td>:</td>
                                <td>
                                    <p class="strong mb-1"> {{ $data->keperluan }}</p>
                                </td>
                                <td></td>
                                <td></td>
                            </tr>
                        </tbody>
                    </table>
                    {{-- <p class="text-secondary text-center mt-5">Thank you very much for doing business with us. We look
                        forward to working with
                        you again!</p> --}}
                </div>
            </div>
        </div>
    </div>

    <script>
        // Wait for the window to load
        window.onload = function() {
            // Automatically trigger printing
            window.print();
        };
    </script>
@endsection
