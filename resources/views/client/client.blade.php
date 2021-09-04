@if (isset($napi))
    <div class="row">
        <div class="col-12 col-sm-8 col-md-12 col-lg-4 hover-zoom mb-3">
            <div class="col-8 col-sm-12 col-md-7 col-lg-12 image-klien">
                <img class="img-fluid align-items-sm-center rounded-lg" src="{{ asset('img/user.png') }}"
                    alt="investor">
            </div>
        </div>
        <div class="col-12 col-sm-8 col-md-auto col-lg-8 col-xl-auto text-white">
            <table class="___class_+?38___">
                <tbody>
                    <tr>
                        <td valign="top">
                            <table border="0">
                                <tbody>
                                    <tr>
                                        <td class="text-left align-top">Nama</td>
                                        <td class="pl-4 align-top">:
                                            <span class="ml-2"></span>
                                        </td>
                                        <td class="text-left align-top" style="font-weight:bold">{{ $napi->name }}
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-left align-top">Kasus</td>
                                        <td class="pl-4 align-top">:
                                            <span class="ml-2"></span>
                                        </td>
                                        <td class="text-left align-top">{{ $napi->case }}</td>
                                    </tr>
                                    <tr>
                                        <td class="text-left align-top">Petugas</td>
                                        <td class="pl-4 align-top">:
                                            <span class="ml-2"></span>
                                        </td>
                                        <td class="text-left align-top">{{ $napi->pk }}</td>
                                    </tr>
                                    <tr>
                                        <td class="text-left align-top">Asal Permintaan</td>
                                        <td class="pl-4 align-top">:
                                            <span class="ml-2"></span>
                                        </td>
                                        <td class="text-left align-top">{{ $napi->jail->name }}
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-left align-top">Tipe</td>
                                        <td class="pl-4 align-top">:
                                            <span class="ml-2"></span>
                                        </td>
                                        <td class="text-left align-top">{{ $napi->type }}</td>
                                    </tr>
                                    <tr>
                                        <td class="text-left align-top">Tanggal</td>
                                        <td class="pl-4 align-top">:
                                            <span class="ml-2"></span>
                                        </td>
                                        <td class="text-left align-top">{{ $napi->date_tpp }}
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-left align-top">Status</td>
                                        <td class="pl-4 align-top">:
                                            <span class="ml-2"></span>
                                        </td>
                                        <td class="text-left align-top">{{ $napi->status }}
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
@else
@endif
