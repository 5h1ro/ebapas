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
                                                <th>Nama</th>
                                                <th>Asal Lapas</th>
                                                <th>Kasus</th>
                                                <th>Status</th>
                                                <th class="col-2">action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($napi as $data)
                                                <tr>
                                                    <td>{{ $data->name }}</td>
                                                    <td>{{ $data->jail->name }}</td>
                                                    <td>{{ $data->case }}</td>
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
                                    <div class="col">
                                        <div class="form-group">
                                            <label>Nama</label>
                                            <input type="text" name="name" class="form-control"
                                                value="{{ $data->name }}">
                                        </div>
                                        <div class="form-group">
                                            <label>Asal Lapas</label>
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
                                                @else
                                                    <option value="Diterima">
                                                        Diterima
                                                    </option>
                                                    <option value="Diproses" selected>
                                                        Diproses
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
