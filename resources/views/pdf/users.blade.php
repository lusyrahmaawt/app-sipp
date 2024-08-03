<!DOCTYPE html>
<html>
<head>
    <title>Data Pendaftar CPPOB</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            font-size: 10px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
        }
        table, th, td {
            border: 1px solid black;
        }
        th, td {
            padding: 5px;
            text-align: left;
            word-wrap: break-word;
        }
        th {
            background-color: #f2f2f2;
        }
        .nowrap {
            white-space: nowrap;
        }
    </style>
</head>
<body>
    <h2>Data Pendaftar CPPOB</h2>
    <table>
        <thead>
            <tr>
                <th class="nowrap">No</th>
                <th class="nowrap">Nama UKM</th>
                <th class="nowrap">Nama Lengkap</th>
                <th class="nowrap">Alamat Lengkap</th>
                <th class="nowrap">Alamat Produksi</th>
                <th class="nowrap">Email Aktif</th>
                <th class="nowrap">No HP</th>
                <th class="nowrap">Nomer NIK</th>
                <th class="nowrap">Nomer NPWP</th>
                <th class="nowrap">Jenis Usaha</th>
                <th class="nowrap">Jenis Produk</th>
                <th class="nowrap">Nama Produk</th>
                <th class="nowrap">No NIB</th>
                <th class="nowrap">Sibakul</th>
                <th class="nowrap">Kemasan</th>
                <th class="nowrap">Tanggal Daftar</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($cppob as $c)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $c->nama_ukm }}</td>
                    <td>{{ $c->nama_lengkap }}</td>
                    <td>{{ $c->alamat_lengkap }}</td>
                    <td>{{ $c->alamat_produksi }}</td>
                    <td>{{ $c->email_aktif }}</td>
                    <td>{{ $c->no_hp }}</td>
                    <td>{{ $c->nomer_nik }}</td>
                    <td>{{ $c->nomer_npwp }}</td>
                    <td>{{ $c->jenisusaha }}</td>
                    <td>{{ $c->jenisproduk }}</td>
                    <td>{{ $c->namaproduk }}</td>
                    <td>{{ $c->no_nib }}</td>
                    <td>{{ $c->sibakul }}</td>
                    <td>{{ $c->kemasan }}</td>
                    <td>{{ $c->tanggal_daftar }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
