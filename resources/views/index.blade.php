@extends('layouts.master')
@section('content')

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script type="text/javascript">
        function load() {
            var name = document.getElementById("clientname").value;
            var idJail = document.getElementById("idJail").value;
            nameFix = encodeURIComponent(name.trim())
            $('#dataClient').load('/load/name=' + nameFix + '&jail=' + idJail).fadeIn("slow");
        }
    </script>
    <section class="section gradient-banner">
        <div class="shapes-container">
            <div class="shape" data-aos="fade-down-left" data-aos-duration="1500" data-aos-delay="100"></div>
            <div class="shape" data-aos="fade-down" data-aos-duration="1000" data-aos-delay="100"></div>
            <div class="shape" data-aos="fade-up-right" data-aos-duration="1000" data-aos-delay="200"></div>
            <div class="shape" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200"></div>
            <div class="shape" data-aos="fade-down-left" data-aos-duration="1000" data-aos-delay="100"></div>
            <div class="shape" data-aos="fade-down-left" data-aos-duration="1000" data-aos-delay="100"></div>
            <div class="shape" data-aos="zoom-in" data-aos-duration="1000" data-aos-delay="300"></div>
            <div class="shape" data-aos="fade-down-right" data-aos-duration="500" data-aos-delay="200"></div>
            <div class="shape" data-aos="fade-down-right" data-aos-duration="500" data-aos-delay="100"></div>
            <div class="shape" data-aos="zoom-out" data-aos-duration="2000" data-aos-delay="500"></div>
            <div class="shape" data-aos="fade-up-right" data-aos-duration="500" data-aos-delay="200"></div>
            <div class="shape" data-aos="fade-down-left" data-aos-duration="500" data-aos-delay="100"></div>
            <div class="shape" data-aos="fade-up" data-aos-duration="500" data-aos-delay="0"></div>
            <div class="shape" data-aos="fade-down" data-aos-duration="500" data-aos-delay="0"></div>
            <div class="shape" data-aos="fade-up-right" data-aos-duration="500" data-aos-delay="100"></div>
            <div class="shape" data-aos="fade-down-left" data-aos-duration="500" data-aos-delay="0"></div>
        </div>
        <div class="container">
            <div class="row align-items-start my-5">
                <div class="col-sm-12 col-md-6 col-lg-7 col-xl-8 order-1 order-md-2 text-center text-md-left w-100">
                    <h1 class="text-white font-weight-bold mb-3 ">Layanan Info Status Klien Pemasyarakatan</h1>
                    <div class="row">
                        <div class="col-12">
                            <input class="form-control main" type="text" placeholder="Masukan Nama Client" required=""
                                id="clientname">

                            <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
                            <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-3-typeahead/4.0.1/bootstrap3-typeahead.min.js">
                            </script>
                            <script type="text/javascript">
                                var route = "{{ url('autocomplete') }}";

                                $('#clientname').typeahead({
                                    source: function(query, process) {
                                        return $.get(route, {
                                            query: query
                                        }, function(data) {
                                            return process(data);
                                        });
                                    }
                                });
                            </script>
                        </div>
                    </div>
                    <div class="row my-3">
                        <div class="col-xl-5 mb-2 form-cols">
                            <div class="form-group">
                                <select class="form-control" id="idJail" id="idJail">
                                    <option value="0" selected>Semua</option>
                                    @foreach ($jail as $data)
                                        <option value="{{ $data->id }}">{{ $data->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-xl-2 col-sm-12">
                            <button onclick="load()" class="btn btn-cari hover w-100" id="btnSearch">Cari</button>
                        </div>
                    </div>
                    <div class="table-full-width table-responsive overflow-hidden mt-2" id="dataClient">
                        @include('client.client')
                    </div>
                </div>
                <div class="col-md-6 col-lg-5 col-xl-4 text-center order-1 order-2 d-none d-md-block ">
                    <img class="img-fluid" src="{{ asset('img/bima.png') }}" alt="screenshot">
                </div>
            </div>
        </div>
    </section>
@endsection
