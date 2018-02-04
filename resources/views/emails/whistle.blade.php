<!DOCTYPE html>
<html lang="en-US">
<head>
    <meta charset="utf-8">
</head>
<body>
<h2>IPC Car Terminal Whistleblowing Report #{{ $data->hash }}</h2>

<div>
    Laporan ini dikirim oleh:<br>
    Nama: {!! $data->name !!}<br>
    Email: {!! $data->email !!}<br>
    No Telp: {!! (($data->no_telp == null || $data->no_telp == '') ? '-' : $data->no_telp) !!}<br><hr>
    Uraian Pelanggaran: <br>{!! $data->uraian_pelanggaran !!}<br>
    Tempat Kejadian: {!! $data->tempat_kejadian !!}<br>
    Waktu Kejadian: {!! $data->waktu_kejadian !!}<br>
    Pihak-pihak yang terlibat: {!! $data->pihak_terlibat !!}
</div>

</body>
</html>