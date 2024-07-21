@extends('layout.admin.masterAdmin')
@section('content')
    <div class="container">
        <div class="card">
            <div class="table-responsive">
                <table class="table table-vcenter card-table">
                    <thead>
                        <tr>
                            <th>Nama</th>
                            <th>NIK</th>
                            <th>No Hp</th>
                            <th>Layanan</th>
                            <th>Keperluan</th>
                            <th class="w-1"></th>
                            <th class="w-1"></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $d)
                            <tr>
                                <td>{{ $d->nama }}</td>
                                <td class="text-secondary">
                                    {{ $d->nik }}
                                </td>
                                <td class="text-secondary"><a href="#" class="text-reset"></a>{{ $d->nohp }}</td>
                                <td class="text-secondary">
                                    {{ $d->nama_layanan }}
                                </td>
                                <td>
                                    {{ $d->keperluan }}
                                </td>
                                <td>
                                    <button type="button" class="btn btn-azure" data-bs-toggle="modal"
                                        data-bs-target="#uploadData{{ $d->user_fk }}">
                                        Upload Data
                                    </button>
                                </td>
                                <td>
                                    <form action="{{ route('delete.datadiri', $d->id) }}" method="POST">
                                        @method('DELETE')
                                        @csrf
                                        <button type="submit" class="btn btn-danger"
                                            onclick="return confirm('yakin delete data ini?')">
                                            Hapus
                                        </button>
                                    </form>
                                </td>
                            </tr>
                            {{-- Upload Modal --}}
                            <div class="modal modal-blur fade" id="uploadData{{ $d->user_fk }}" tabindex="-1"
                                aria-labelledby="uploadDataLabel" aria-hidden="true">
                                <div class="modal-dialog modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h1 class="modal-title fs-5" id="exampleModalLabel">Data Diri</h1>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <form action="{{ route('uploaddata.surat') }}" method="POST"
                                            enctype="multipart/form-data">
                                            @csrf
                                            <div class="modal-body">
                                                <div class="form-group">
                                                    <label for="pdf_file">Pilih File PDF</label>
                                                    <input type="file" class="form-control-file" id="pdf_file"
                                                        name="dokumen" accept=".pdf">
                                                    <input type="text" name="userid" id="userid" class="hidden"
                                                        value="{{ $d->user_fk }}">
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary"
                                                    data-bs-dismiss="modal">Close</button>
                                                <button type="submit" class="btn btn-primary">Simpan Data</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            {{-- End Modal --}}
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
