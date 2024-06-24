@extends('layout.admin.masterAdmin')
@section('content')
    <div class="container">
        <div class="card">
            <div class="card-body">
                <div class="accordion mt-5 mb-1" id="accordionExamples">
                    <div class="accordion-item" style="background: #F7FAFC;">
                        <h2 class="accordion-header" id="headingTwo">
                            <button class="accordion-button collapsed show" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseTwoss" aria-expanded="false" aria-controls="collapseTwo"
                                style="background: #0676DB;">
                                <h4 style="color: white;">Syarat dan Ketentuan Pengajuan Surat</h4>
                            </button>
                        </h2>
                        <div id="collapseTwoss" class="accordion-collapse collapse show" aria-labelledby="headingTwo"
                            data-bs-parent="#accordionExamples">
                            <div class="accordion-body">
                                <h3>Jenis Surat :</h3>
                                @foreach ($layanan as $d)
                                    <div class="accordion mt-3 mb-2" id="NXVwcDBydGJ5X3BzMV9La05fVV9NX0sx">
                                        <div class="accordion-item" style="background: #F7FAFC;">
                                            <h2 class="accordion-header" id="mandiri">
                                                <button class="accordion-button collapsed" type="button"
                                                    data-bs-toggle="collapse"
                                                    data-bs-target="#jnsNXVwcDBydGJ5X3BzMV9La05fVV9NX0sx{{$d->id_ketentuan}}"
                                                    aria-expanded="false" aria-controls="collapseTwo"
                                                    style="background: deepskyblue;">
                                                    <h4>{{ $d->nama_layanan }}</h4>
                                                </button>
                                            </h2>
                                            <div id="jnsNXVwcDBydGJ5X3BzMV9La05fVV9NX0sx{{$d->id_ketentuan}}"
                                                class="accordion-collapse collapse" aria-labelledby="mandiri"
                                                data-bs-parent="#NXVwcDBydGJ5X3BzMV9La05fVV9NX0sx">
                                                <div class="accordion-body" style="color: black">
                                                    <p>{!! nl2br(e($d->ketentuan)) !!}</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
                <div class="alert alert-solid d-flex align-items-center mt-4"
                    style="background-color: #a41f49; color: #ffff;" role="alert">
                    <i class="fa-sharp fa-solid fa-circle-info"> </i>
                    <div>
                        Form Pengajuan Surat
                    </div>
                </div>


                <h4 style="color: black" class="mb-4">
                    Registrasi data diri anda
                </h4>
                <div class="row">
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    @if ($cek != null)
                        <div class="col-md-6">
                            <div style="color: black" class="table table-sm">
                                <div class="row">
                                    <div class="col-md-5 col-5 mb-2" style="font-size:13px;">
                                        Nama
                                    </div>
                                    <div class="col-md-7 col-7" style="font-size:13px;">
                                        :   {{ $cek->nama }}
                                    </div>
                                    <div class="col-md-5 col-5 mb-2" style="font-size:13px;">
                                        NIK
                                    </div>
                                    <div class="col-md-7 col-7" style="font-size:13px;">
                                        :   {{ $cek->nik }}
                                    </div>
                                    <div class="col-md-5 col-5 mb-2" style="font-size:13px;">
                                        Jenis Kelamin
                                    </div>
                                    <div class="col-md-7 col-7" style="font-size:13px;">
                                        :   {{ $cek->jeniskelamin }}
                                    </div>
                                    <div class="col-md-5 col-5 mb-2" style="font-size:13px;">
                                        Status Perkawinan
                                    </div>
                                    <div class="col-md-7 col-7" style="font-size:13px;">
                                        :   {{ $cek->status }}
                                    </div>
                                    <div class="col-md-5 col-5 mb-2" style="font-size:13px;">
                                        Email
                                    </div>
                                    <div class="col-md-7 col-7" style="font-size:13px;">
                                        :   {{ $cek->email }}
                                    </div>
                                    <div class="col-md-5 col-5 mb-2" style="font-size:13px;">
                                        No Hp
                                    </div>
                                    <div class="col-md-7 col-7" style="font-size:13px;">
                                        :   {{ $cek->nohp }}
                                    </div>
                                </div>
                            </div>


                        </div>
                        <div class="col-md-6">
                            <div class="table table-sm">
                                <div class="row">
                                    <div class="col-md-5 col-5 mb-2" style="font-size:13px;">
                                        Kabupaten
                                    </div>
                                    <div class="col-md-7 col-7" style="font-size:13px;">
                                        :   {{ $cek->kabupaten }}
                                    </div>
                                    <div class="col-md-5 col-5 mb-2" style="font-size:13px;">
                                        Kecamatan
                                    </div>
                                    <div class="col-md-7 col-7" style="font-size:13px;">
                                        :   {{ $cek->kecamatan }}
                                    </div>
                                    <div class="col-md-5 col-5 mb-2" style="font-size:13px;">
                                        Desa
                                    </div>
                                    <div class="col-md-7 col-7" style="font-size:13px;">
                                        :   {{ $cek->desa }}
                                    </div>
                                    <div class="col-md-5 col-5 mb-2" style="font-size:13px;">
                                        Rt/Rw
                                    </div>
                                    <div class="col-md-7 col-7" style="font-size:13px;">
                                        :   {{ $cek->rt_rw }}
                                    </div>
                                </div>
                            </div>
                        </div>
                    @else
                        <div class="col-md-6">
                            <div style="color: black" class="table table-sm">
                                <div class="row">
                                    <div class="col-md-5 col-5 mb-2" style="font-size:13px;">
                                        Nama
                                    </div>
                                    <div class="col-md-7 col-7" style="font-size:13px;">
                                        :
                                    </div>
                                    <div class="col-md-5 col-5 mb-2" style="font-size:13px;">
                                        NIK
                                    </div>
                                    <div class="col-md-7 col-7" style="font-size:13px;">
                                        :
                                    </div>
                                    <div class="col-md-5 col-5 mb-2" style="font-size:13px;">
                                        Jenis Kelamin
                                    </div>
                                    <div class="col-md-7 col-7" style="font-size:13px;">
                                        :
                                    </div>
                                    <div class="col-md-5 col-5 mb-2" style="font-size:13px;">
                                        Status Perkawinan
                                    </div>
                                    <div class="col-md-7 col-7" style="font-size:13px;">
                                        :
                                    </div>
                                    <div class="col-md-5 col-5 mb-2" style="font-size:13px;">
                                        Email
                                    </div>
                                    <div class="col-md-7 col-7" style="font-size:13px;">
                                        :
                                    </div>
                                    <div class="col-md-5 col-5 mb-2" style="font-size:13px;">
                                        No Hp
                                    </div>
                                    <div class="col-md-7 col-7" style="font-size:13px;">
                                        :
                                    </div>
                                </div>
                            </div>


                        </div>
                        <div class="col-md-6">
                            <div class="table table-sm">
                                <div class="row">
                                    <div class="col-md-5 col-5 mb-2" style="font-size:13px;">
                                        Kabupaten
                                    </div>
                                    <div class="col-md-7 col-7" style="font-size:13px;">
                                        :
                                    </div>
                                    <div class="col-md-5 col-5 mb-2" style="font-size:13px;">
                                        Kecamatan
                                    </div>
                                    <div class="col-md-7 col-7" style="font-size:13px;">
                                        :
                                    </div>
                                    <div class="col-md-5 col-5 mb-2" style="font-size:13px;">
                                        Desa
                                    </div>
                                    <div class="col-md-7 col-7" style="font-size:13px;">
                                        :
                                    </div>
                                    <div class="col-md-5 col-5 mb-2" style="font-size:13px;">
                                        Rt/Rw
                                    </div>
                                    <div class="col-md-7 col-7" style="font-size:13px;">
                                        :
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endif
                    <div class="col-md-6">
                        <div class="table table-sm">
                            @if ($cek == null)
                                <!-- Button trigger modal -->
                                <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                    data-bs-target="#exampleModal">
                                    Registrasi Data Diri
                                </button>
                            @else
                                <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                    data-bs-target="#editModal">
                                    Edit Data Diri
                                </button>
                            @endif
                            <button type="button" class="btn btn-cyan" data-bs-toggle="modal"
                                data-bs-target="#uploadData">
                                Upload Data Pengajuan
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @if ($cek == null)
        <!-- Modal Add -->
        <div class="modal modal-blur fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Data Diri</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <form action="{{ route('simpandatadiri') }}" method="POST">
                        @csrf
                        <div class="modal-body">
                            <div class="mb-3">
                                <label class="form-label">Nama Lengkap</label>
                                <input type="text" class="form-control" name="nama"
                                    placeholder="Masukkan nama lengkap anda">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">NIK</label>
                                <input type="text" class="form-control" name="nik"
                                    placeholder="Masukkan nik anda">
                            </div>

                            <div class="row">
                                <div class="col-lg-8">
                                    <div class="mb-3">
                                        <label class="form-label">Jenis Kelamin</label>
                                        <div class="input-group input-group-flat">
                                            <select class="form-select" name="kelamin">
                                                <option value="Laki-Laki" selected="">Laki-Laki
                                                </option>
                                                <option value="Perempuan">Perempuan</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="mb-3">
                                        <label class="form-label">Status Perkawinan</label>
                                        <select class="form-select" name="kawin">
                                            <option value="Sudah kawin" selected="">Sudah Kawin</option>
                                            <option value="Belum kawin">Belum Kawin</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-8">
                                    <div class="mb-3">
                                        <label class="form-label">Email</label>
                                        <div class="input-group input-group-flat">
                                            <input type="email" class="form-control ps-0" name="email"
                                                autocomplete="off">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="mb-3">
                                        <label class="form-label">No HP</label>
                                        <input type="text" class="form-control ps-0" name="nohp"
                                            autocomplete="off>">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="mb-3">
                                        <label class="form-label">Kabupaten</label>
                                        <div class="input-group input-group-flat">
                                            <input type="text" class="form-control ps-0" name="kabupaten"
                                                autocomplete="off">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="mb-3">
                                        <label class="form-label">Kecamatan</label>
                                        <input type="text" class="form-control ps-0" name="kecamatan"
                                            autocomplete="off>">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="mb-3">
                                        <label class="form-label">Desa</label>
                                        <div class="input-group input-group-flat">
                                            <input type="text"
                                                class="form-control ps-0 @error('desa', 'post') is-invalid @enderror"
                                                name="desa" autocomplete="off">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="mb-3">
                                        <label class="form-label">RT / RW</label>
                                        <input type="text" class="form-control ps-0" name="rt_rw"
                                            autocomplete="off>">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="mb-3">
                                    <label for="keperluan" class="form-label">Keperluan</label>
                                    <input type="text" id="keperluan" class="form-control" name="keperluan">
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Simpan Data</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    @else
        {{-- Modal Edit --}}
        <div class="modal modal-blur fade" id="editModal" tabindex="-1" aria-labelledby="editModalLabel"
            aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Data Diri</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <form action="{{ route('updatediri', $cek->id) }}" method="POST">
                        @csrf
                        <div class="modal-body">
                            <div class="mb-3">
                                <label class="form-label">Nama Lengkap</label>
                                <input type="text" class="form-control" name="nama"
                                    placeholder="Masukkan nama lengkap anda" value="{{ $cek->nama }}">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">NIK</label>
                                <input type="text" class="form-control" name="nik"
                                    placeholder="Masukkan nik anda" value="{{ $cek->nik }}">
                            </div>

                            <div class="row">
                                <div class="col-lg-8">
                                    <div class="mb-3">
                                        <label class="form-label">Jenis Kelamin</label>
                                        <div class="input-group input-group-flat">
                                            <select class="form-select" name="kelamin">
                                                <option value="Laki-Laki"
                                                    {{ $cek->jeniskelamin == 'Laki-laki' ? 'selected' : '' }}>Laki-Laki
                                                </option>
                                                <option value="Perempuan"
                                                    {{ $cek->jeniskelamin == 'Perempuan' ? 'selected' : '' }}>Perempuan
                                                </option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="mb-3">
                                        <label class="form-label">Status Perkawinan</label>
                                        <select class="form-select" name="kawin">
                                            <option value="Sudah kawin"
                                                {{ $cek->status == 'Sudah kawin' ? 'selected' : '' }}>
                                                Sudah Kawin</option>
                                            <option value="Belum kawin"
                                                {{ $cek->status == 'Belum kawin' ? 'selected' : '' }}>
                                                Belum Kawin</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-8">
                                    <div class="mb-3">
                                        <label class="form-label">Email</label>
                                        <div class="input-group input-group-flat">
                                            <input type="email" class="form-control ps-0" name="email"
                                                autocomplete="off" value="{{ $cek->email }}">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="mb-3">
                                        <label class="form-label">No HP</label>
                                        <input type="text" class="form-control ps-0" name="nohp"
                                            autocomplete="off>" value="{{ $cek->nohp }}">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="mb-3">
                                        <label class="form-label">Kabupaten</label>
                                        <div class="input-group input-group-flat">
                                            <input type="text" class="form-control ps-0" name="kabupaten"
                                                autocomplete="off" value="{{ $cek->kabupaten }}">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="mb-3">
                                        <label class="form-label">Kecamatan</label>
                                        <input type="text" class="form-control ps-0" name="kecamatan"
                                            autocomplete="off>" value="{{ $cek->kecamatan }}">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="mb-3">
                                        <label class="form-label">Desa</label>
                                        <div class="input-group input-group-flat">
                                            <input type="text" class="form-control ps-0" value="{{ $cek->desa }}"
                                                name="desa" autocomplete="off">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="mb-3">
                                        <label class="form-label">RT / RW</label>
                                        <input type="text" class="form-control ps-0" value="{{ $cek->rt_rw }}"
                                            name="rt_rw" autocomplete="off>">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="mb-3">
                                    <label for="keperluan" class="form-label">Keperluan</label>
                                    <input type="text" id="keperluan" class="form-control" name="keperluan">
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Simpan Data</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    @endif
    {{-- Upload Modal --}}
    <div class="modal modal-blur fade" id="uploadData" tabindex="-1" aria-labelledby="uploadDataLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Data Diri</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="{{ route('upload.data') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-lg">
                                <div class="mb-3">
                                    <label class="form-label">Pilih Layanan Pengajuan</label>
                                    <select class="form-select" name="layanan">
                                        @foreach ($layanan as $data)
                                            <option value="{{ $data->id_ketentuan }}">
                                                {{ $data->nama_layanan }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="pdf_file">Pilih File PDF</label>
                            <input type="file" class="form-control-file" id="pdf_file" name="dokumen"
                                accept=".pdf">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Simpan Data</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    {{-- End Modal --}}
@endsection
