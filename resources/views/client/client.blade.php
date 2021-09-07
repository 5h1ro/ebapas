@if (isset($napi))
    <div class="row">
        <div class="col-12 col-sm-12 col-md-auto col-lg-12 col-xl-auto text-white">
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
                                        <td class="text-left align-top">Asal Lembaga</td>
                                        <td class="pl-4 align-top">:
                                            <span class="ml-2"></span>
                                        </td>
                                        <td class="text-left align-top">{{ $napi->jail->name }}
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
                                        <td class="text-left align-top">{{ $napi->pk->name }}</td>
                                    </tr>
                                    <tr>
                                        <td class="text-left align-top">Jenis</td>
                                        <td class="pl-4 align-top">:
                                            <span class="ml-2"></span>
                                        </td>
                                        <td class="text-left align-top">{{ $napi->type->name }}</td>
                                    </tr>

                                    @if ($napi->status == 'Diproses' || $napi->status == 'Diterima' || $napi->status == 'terkirim' || $napi->status == 'Dalam Pembimbing' || $napi->status == 'Selesai')
                                        <tr>
                                            <td class="text-left align-top">Tanggal Disposisi</td>
                                            <td class="pl-4 align-top">:
                                                <span class="ml-2"></span>
                                            </td>
                                            <td class="text-left align-top">{{ $napi->date_disposition }}
                                            </td>
                                        </tr>
                                    @else
                                    @endif
                                    <tr>
                                        <td class="text-left align-top">Nomor TPP</td>
                                        <td class="pl-4 align-top">:
                                            <span class="ml-2"></span>
                                        </td>
                                        <td class="text-left align-top">{{ $napi->number_tpp }}
                                        </td>
                                    </tr>
                                    @if ($napi->status == 'Diterima' || $napi->status == 'terkirim' || $napi->status == 'Dalam Pembimbing' || $napi->status == 'Selesai')
                                        <tr>
                                            <td class="text-left align-top">Tanggal Sidang TPP</td>
                                            <td class="pl-4 align-top">:
                                                <span class="ml-2"></span>
                                            </td>
                                            <td class="text-left align-top">{{ $napi->date_tpp }}
                                            </td>
                                        </tr>
                                    @else
                                    @endif
                                    @if ($napi->status == 'terkirim' || $napi->status == 'Dalam Pembimbing' || $napi->status == 'Selesai')
                                        <tr>
                                            <td class="text-left align-top">Tanggal Dikirim</td>
                                            <td class="pl-4 align-top">:
                                                <span class="ml-2"></span>
                                            </td>
                                            <td class="text-left align-top">{{ $napi->date_send }}
                                            </td>
                                        </tr>
                                    @else
                                    @endif
                                    @if ($napi->status == 'Dalam Pembimbing' || $napi->status == 'Selesai')
                                        <tr>
                                            <td class="text-left align-top">Tanggal Awal Bimbingan</td>
                                            <td class="pl-4 align-top">:
                                                <span class="ml-2"></span>
                                            </td>
                                            <td class="text-left align-top">{{ $napi->date_send }}
                                            </td>
                                        </tr>
                                    @else
                                    @endif
                                    @if ($napi->status == 'Dalam Pembimbing' || $napi->status == 'Selesai')
                                        <tr>
                                            <td class="text-left align-top">Tanggal Pengakhiran</td>
                                            <td class="pl-4 align-top">:
                                                <span class="ml-2"></span>
                                            </td>
                                            <td class="text-left align-top">{{ $napi->date_end }}
                                            </td>
                                        </tr>
                                    @else
                                    @endif
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
