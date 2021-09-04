@if (isset($napi))
    <script type="text/javascript">
        console.log('a');
    </script>
    <table class="___class_+?38___" width="100%" border="0">
        <tbody>
            <tr>
                <td valign="top">
                    <table border="0" width="100%" style="padding-left: 2px; padding-right: 20px;">
                        <tbody>
                            <tr>
                                <td valign="top" class="textt">Nama</td>
                                <td>: </td>
                                <td class="textt" style=" font-weight:bold">
                                    <span class="ml-2"></span>{{ $napi->name }}
                                </td>
                            </tr>
                            <tr>
                                <td class="textt">Kasus</td>
                                <td>: </td>
                                <td class="textt"><span class="ml-2"></span>{{ $napi->case }}</td>
                            </tr>
                            <tr>
                                <td class="textt">Petugas</td>
                                <td>: </td>
                                <td class="textt"><span class="ml-2"></span>{{ $napi->pk }}</td>
                            </tr>
                            <tr>
                                <td class="textt">Asal Lapas</td>
                                <td>: </td>
                                <td class="textt"><span class="ml-2"></span>{{ $napi->jail->name }}
                                </td>
                            </tr>
                            <tr>
                                <td class="textt">Tipe</td>
                                <td>: </td>
                                <td class="textt"><span class="ml-2"></span>{{ $napi->type }}</td>
                            </tr>
                            <tr>
                                <td class="textt">Tanggal</td>
                                <td>: </td>
                                <td class="textt"><span class="ml-2"></span>{{ $napi->date_tpp }}
                                </td>
                            </tr>
                            <tr>
                                <td class="textt">Status</td>
                                <td>: </td>
                                <td class="textt"><span class="ml-2"></span>{{ $napi->status }}
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </td>
            </tr>
        </tbody>
    </table>
@else
    <table class="___class_+?38___" width="100%" border="0">
        <tbody>
            <tr>
                <td valign="top">
                    <table border="0" width="100%" style="padding-left: 2px; padding-right: 20px;">
                        <tbody>
                            <tr>
                                <td width="25%" valign="top" class="textt">Nama</td>
                                <td width="2%">:</td>
                                <td class="textt" style=" font-weight:bold">
                                </td>
                            </tr>
                            <tr>
                                <td class="textt">Kasus</td>
                                <td>:</td>
                                <td class="textt"></td>
                            </tr>
                            <tr>
                                <td class="textt">Petugas</td>
                                <td>:</td>
                                <td class="textt"></td>
                            </tr>
                            <tr>
                                <td class="textt" width="100%">Asal Lapas</td>
                                <td>:</td>
                                <td class="textt"></td>
                            </tr>
                            <tr>
                                <td class="textt">Tipe</td>
                                <td>:</td>
                                <td class="textt"></td>
                            </tr>
                            <tr>
                                <td class="textt">Tanggal</td>
                                <td>:</td>
                                <td class="textt"></td>
                            </tr>
                            <tr>
                                <td class="textt">Status</td>
                                <td>:</td>
                                <td class="textt"></td>
                            </tr>
                        </tbody>
                    </table>
                </td>
            </tr>
        </tbody>
    </table>
@endif
