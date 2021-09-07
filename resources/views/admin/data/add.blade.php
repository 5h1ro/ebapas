@extends('admin.main')
@section('content')
    <!-- Main Content -->
    <div class="main-content">
        <section class="section">
            <div class="section-body">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <form method="POST" action="{{ route('data.store') }}" class="needs-validation" novalidate="">
                                @csrf
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="form-group">
                                                <label>Nama</label>
                                                <input type="text" name="name" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <div class="form-group">
                                                <label>Asal Permintaan</label>
                                                <select class="form-control" name="idJail">
                                                    @foreach ($jail as $from)
                                                        <option value="{{ $from->id }}">
                                                            {{ $from->name }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="form-group">
                                                <label>Kasus</label>
                                                <input type="text" name="case" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="form-group">
                                                <label>Nama PK</label>
                                                <select class="form-control" name="idPk">
                                                    @foreach ($pk as $datapk)
                                                        <option value="{{ $datapk->id }}">
                                                            {{ $datapk->name }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label>Jenis Litmas</label>
                                                <select class="form-control" name="idType">
                                                    @foreach ($type as $dataType)
                                                        <option value="{{ $dataType->id }}">
                                                            {{ $dataType->name }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <div class="form-group">
                                                <label>Tanggal Disposisi</label>
                                                <input type="date" class="form-control" name="date_disposition">
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="form-group">
                                                <label>No TPP</label>
                                                <input type="text" name="number_tpp" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="form-group">
                                                <label>Tanggal TPP</label>
                                                <input type="date" class="form-control" name="date_tpp">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <div class="form-group">
                                                <label>Tanggal Dikirim</label>
                                                <input type="date" class="form-control" name="date_send">
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="form-group">
                                                <label>Tanggal Mulai</label>
                                                <input type="date" class="form-control" name="date_start">
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="form-group">
                                                <label>Tanggal Selesai</label>
                                                <input type="date" class="form-control" name="date_end">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <div class="form-group">
                                                <label>Keterangan</label>
                                                <input type="text" name="description" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-group">
                                                <label>Status</label>
                                                <select class="form-control" name="status">
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
                                                    <option value="Selesai">
                                                        Selesai
                                                    </option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <div class="text-right pb-4 pr-4">
                                    <button class="btn btn-primary mr-1" type="submit">Submit</button>
                                    <button class="btn btn-secondary" type="reset">Reset</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        @include('admin.layouts.setting')
    </div>
@endsection
