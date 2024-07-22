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
                            <th>Nama Layanan</th>
                            <th>Status</th>
                            <th>Data Pengambilan</th>
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
                                <td class="text-secondary"><a href="#" class="text-reset">{{ $d->nohp }}</a></td>
                                <td class="text-secondary">
                                    {{ $d->nama_layanan }}
                                </td>
                                <td class="text-secondary">
                                    @if ($d->status == null)
                                        <span class="badge badge-primary"> Proses</span>
                                    @else
                                        <span class="badge badge-primary"> {{$d->status}}</span>
                                    @endif
                                </td>
                                <td>
                                    @if ($d->dokumen == null)
                                    <span class="badge badge-danger"> Data masih Proses</span>
                                    @else
                                    <a href="{{route('download',$d->id_respon)}}"> <button class="btn btn-success">Download</button> </a>
                                    @endif
                                </td>
                                {{-- <td>
                            </td> --}}
                                <td>
                                    <a href="#"><button class="btn btn-azure">Hapus</button></a>
                                </td>
                            </tr>
                        @endforeach
                        {{-- <tr>
                            <td>Jeffie Lewzey</td>
                            <td class="text-secondary">
                                Chemical Engineer, Support
                            </td>
                            <td class="text-secondary"><a href="#" class="text-reset">jlewzey1@seesaa.net</a></td>
                            <td class="text-secondary">
                                Admin
                            </td>
                            <td>
                                <a href="#">Edit</a>
                            </td>
                        </tr>
                        <tr>
                            <td>Mallory Hulme</td>
                            <td class="text-secondary">
                                Geologist IV, Support
                            </td>
                            <td class="text-secondary"><a href="#" class="text-reset">mhulme2@domainmarket.com</a>
                            </td>
                            <td class="text-secondary">
                                User
                            </td>
                            <td>
                                <a href="#">Edit</a>
                            </td>
                        </tr>
                        <tr>
                            <td>Dunn Slane</td>
                            <td class="text-secondary">
                                Research Nurse, Sales
                            </td>
                            <td class="text-secondary"><a href="#" class="text-reset">dslane3@epa.gov</a></td>
                            <td class="text-secondary">
                                Owner
                            </td>
                            <td>
                                <a href="#">Edit</a>
                            </td>
                        </tr>
                        <tr>
                            <td>Emmy Levet</td>
                            <td class="text-secondary">
                                VP Product Management, Accounting
                            </td>
                            <td class="text-secondary"><a href="#" class="text-reset">elevet4@senate.gov</a></td>
                            <td class="text-secondary">
                                Admin
                            </td>
                            <td>
                                <a href="#">Edit</a>
                            </td>
                        </tr>
                        <tr>
                            <td>Maryjo Lebarree</td>
                            <td class="text-secondary">
                                Civil Engineer, Product Management
                            </td>
                            <td class="text-secondary"><a href="#" class="text-reset">mlebarree5@unc.edu</a></td>
                            <td class="text-secondary">
                                User
                            </td>
                            <td>
                                <a href="#">Edit</a>
                            </td>
                        </tr>
                        <tr>
                            <td>Egan Poetz</td>
                            <td class="text-secondary">
                                Research Nurse, Engineering
                            </td>
                            <td class="text-secondary"><a href="#" class="text-reset">epoetz6@free.fr</a></td>
                            <td class="text-secondary">
                                Admin
                            </td>
                            <td>
                                <a href="#">Edit</a>
                            </td>
                        </tr>
                        <tr>
                            <td>Kellie Skingley</td>
                            <td class="text-secondary">
                                Teacher, Services
                            </td>
                            <td class="text-secondary"><a href="#" class="text-reset">kskingley7@columbia.edu</a></td>
                            <td class="text-secondary">
                                Owner
                            </td>
                            <td>
                                <a href="#">Edit</a>
                            </td>
                        </tr> --}}
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
