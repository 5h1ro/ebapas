@extends('admin.main')
@section('content')
    <!-- Main Content -->
    <div class="main-content">
        <section class="section">
            <div class="section-body">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4>Export Table</h4>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-striped table-hover" id="tableExport" style="width:100%;">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Nama Klien</th>
                                                <th>Asal Lembaga</th>
                                                <th>Kasus</th>
                                                <th>Nama PK</th>
                                                <th>Jenis Litmas</th>
                                                <th>Tanggal Disposisi</th>
                                                <th>No TPP</th>
                                                <th>Tanggal TPP</th>
                                                <th>Tanggal Dikirim</th>
                                                <th>Tanggal Awal Bimbingan</th>
                                                <th>Tanggal Pengakhiran</th>
                                                <th>Keterangan</th>
                                                <th>Status</th>
                                                <th class="col-2">action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($napi as $data)
                                                <tr>
                                                    <td>{{ $loop->iteration }}</td>
                                                    <td>{{ $data->name }}</td>
                                                    <td>{{ $data->jail->name }}</td>
                                                    <td>{{ $data->case }}</td>
                                                    <td>{{ $data->pk->name }}</td>
                                                    <td>{{ $data->type->name }}</td>
                                                    <td>{{ $data->date_disposition }}</td>
                                                    <td>{{ $data->number_tpp }}</td>
                                                    <td>{{ $data->date_tpp }}</td>
                                                    <td>{{ $data->date_send }}</td>
                                                    <td>{{ $data->date_start }}</td>
                                                    <td>{{ $data->date_end }}</td>
                                                    <td>{{ $data->description }}</td>
                                                    <td>{{ $data->status }}</td>
                                                    <td class="col-2">
                                                        <button class="btn btn-icon icon-left btn-primary"
                                                            data-toggle="modal"
                                                            data-target="#modalEdit{{ $loop->iteration }}" type="button">
                                                            <i class="far fa-edit"></i> Edit</button>

                                                        <a href="{{ route('data.delete', $data->id) }}"
                                                            class="btn btn-icon icon-left btn-danger">
                                                            <i class="fas fa-trash"></i> Delete</a>
                                                    </td>
                                                </tr>

                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        @include('admin.layouts.setting')
    </div>

    @foreach ($napi as $data)
        <!-- Modal with form -->
        <div class="modal fade" id="modalEdit{{ $loop->iteration }}" tabindex="-1" role="dialog"
            aria-labelledby="formModal" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="formModal">Edit data</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form method="POST" action="{{ route('data.update', $data->id) }}" class="needs-validation"
                            novalidate="">
                            @csrf
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="form-group">
                                            <label>Nama</label>
                                            <input type="text" name="name" class="form-control"
                                                value="{{ $data->name }}">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <div class="form-group">
                                            <label>Asal Permintaan</label>
                                            <select class="form-control" name="idJail">
                                                @foreach ($jail as $from)
                                                    @if ($from->id == $data->idJail)
                                                        <option value="{{ $from->id }}" selected>
                                                            {{ $from->name }}
                                                        </option>
                                                    @else
                                                        <option value="{{ $from->id }}">
                                                            {{ $from->name }}
                                                        </option>
                                                    @endif
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="form-group">
                                            <label>Kasus</label>
                                            <input type="text" name="case" class="form-control"
                                                value="{{ $data->case }}">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12">
                                        <div class="form-group">
                                            <label>Nama PK</label>
                                            <select class="form-control" name="idPk">
                                                @foreach ($pk as $datapk)
                                                    @if ($datapk->id == $data->idJail)
                                                        <option value="{{ $datapk->id }}" selected>
                                                            {{ $datapk->name }}
                                                        </option>
                                                    @else
                                                        <option value="{{ $datapk->id }}">
                                                            {{ $datapk->name }}
                                                        </option>
                                                    @endif
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Jenis Litmas</label>
                                            <select class="form-control" name="idType">
                                                @foreach ($type as $dataType)
                                                    @if ($dataType->id == $data->idJail)
                                                        <option value="{{ $dataType->id }}" selected>
                                                            {{ $dataType->name }}
                                                        </option>
                                                    @else
                                                        <option value="{{ $dataType->id }}">
                                                            {{ $dataType->name }}
                                                        </option>
                                                    @endif
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <div class="form-group">
                                            <label>Tanggal Disposisi</label>
                                            <input type="date" class="form-control"
                                                value="{{ $data->date_disposition }}" name="date_disposition">
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="form-group">
                                            <label>No TPP</label>
                                            <input type="text" name="number_tpp" class="form-control"
                                                value="{{ $data->number_tpp }}">
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="form-group">
                                            <label>Tanggal TPP</label>
                                            <input type="date" class="form-control" value="{{ $data->date_tpp }}"
                                                name="date_tpp">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <div class="form-group">
                                            <label>Tanggal Dikirim</label>
                                            <input type="date" class="form-control" value="{{ $data->date_send }}"
                                                name="date_send">
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="form-group">
                                            <label>Tanggal Mulai</label>
                                            <input type="date" class="form-control" value="{{ $data->date_start }}"
                                                name="date_start">
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="form-group">
                                            <label>Tanggal Selesai</label>
                                            <input type="date" class="form-control" value="{{ $data->date_end }}"
                                                name="date_end">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <div class="form-group">
                                            <label>Keterangan</label>
                                            <input type="text" name="description" class="form-control"
                                                value="{{ $data->description }}">
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group">
                                            <label>Status</label>
                                            <select class="form-control" name="status">
                                                @if ($data->status == 'Diterima')
                                                    <option value="Diterima" selected>
                                                        Diterima
                                                    </option>
                                                    <option value="Diproses">
                                                        Diproses
                                                    </option>
                                                    <option value="Terkirim">
                                                        Terkirim
                                                    </option>
                                                    <option value="Dalam Pembimbingan">
                                                        Dalam Pembimbingan
                                                    </option>
                                                    <option value="Selesai">
                                                        Selesai
                                                    </option>
                                                @elseif ($data->status == 'Diproses')
                                                    <option value="Diterima">
                                                        Diterima
                                                    </option>
                                                    <option value="Diproses" selected>
                                                        Diproses
                                                    </option>
                                                    <option value="Terkirim">
                                                        Terkirim
                                                    </option>
                                                    <option value="Dalam Pembimbingan">
                                                        Dalam Pembimbingan
                                                    </option>
                                                    <option value="Selesai">
                                                        Selesai
                                                    </option>
                                                @elseif ($data->status == 'Terkirim')
                                                    <option value="Diterima">
                                                        Diterima
                                                    </option>
                                                    <option value="Diproses">
                                                        Diproses
                                                    </option>
                                                    <option value="Terkirim" selected>
                                                        Terkirim
                                                    </option>
                                                    <option value="Dalam Pembimbingan">
                                                        Dalam Pembimbingan
                                                    </option>
                                                    <option value="Selesai">
                                                        Selesai
                                                    </option>
                                                @elseif ($data->status == 'Selesai')
                                                    <option value="Diterima">
                                                        Diterima
                                                    </option>
                                                    <option value="Diproses">
                                                        Diproses
                                                    </option>
                                                    <option value="Terkirim">
                                                        Terkirim
                                                    </option>
                                                    <option value="Dalam Pembimbingan">
                                                        Dalam Pembimbingan
                                                    </option>
                                                    <option value="Selesai" selected>
                                                        Selesai
                                                    </option>
                                                @else
                                                    <option value="Diterima">
                                                        Diterima
                                                    </option>
                                                    <option value="Diproses">
                                                        Diproses
                                                    </option>
                                                    <option value="Terkirim">
                                                        Terkirim
                                                    </option>
                                                    <option value="Dalam Pembimbingan" selected>
                                                        Dalam Pembimbingan
                                                    </option>
                                                    <option value="Selesai">
                                                        Selesai
                                                    </option>
                                                @endif
                                            </select>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="text-right">
                                <button class="btn btn-primary mr-1" type="submit">Submit</button>
                                <button class="btn btn-secondary" type="reset">Reset</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
@endsection

@section('pagejs')
    <script src="{{ asset('bundles/datatables/datatables.min.js') }}"></script>
    <script src="{{ asset('bundles/datatables/DataTables-1.10.16/js/dataTables.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('bundles/datatables/export-tables/dataTables.buttons.min.js') }}"></script>
    <script src="{{ asset('bundles/datatables/export-tables/buttons.flash.min.js') }}"></script>
    <script src="{{ asset('bundles/datatables/export-tables/jszip.min.js') }}"></script>
    <script src="{{ asset('bundles/datatables/export-tables/pdfmake.min.js') }}"></script>
    <script src="{{ asset('bundles/datatables/export-tables/vfs_fonts.js') }}"></script>
    <script src="{{ asset('bundles/datatables/export-tables/buttons.print.min.js') }}"></script>
    <script src="{{ asset('js/page/datatables.js') }}"></script>
    <script src="{{ asset('bundles/prism/prism.js') }}"></script>
@endsection
