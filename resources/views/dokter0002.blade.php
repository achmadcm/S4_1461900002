<head>
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Pasien</title>
<style>
table{
    border-collapse: collapse;
    border-spacing: 0;
    width: 100%;
    border: 1px solid #ddd;
}
thead {
    background-color : #f2f2f2;
}
th, td {
    text-align: left;
    padding: 8px;
}
tr:nth-child(even){background-color: #f2f2f2}
.tambah{
    padding: 8px 16px;
    text-decoration: none;
}
</style>
<head>

<body>
    <div style="overflow-x: auto">
    <a href="{{url('pasien_import0002')}}">  Import Data Pasien</a>
    <table>
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Pasien</th>
                <th>Alamat</th>
                <th>Nama Dokter</th>
                <th>Jabatan</th>
            </tr>
        </thead>
        <tbody>
            <?php $no=1; ?>
            @foreach ($pasien as $ps)
            <tr>
                <td>{{ $no++ }}</td>
                <td>{{ $ps->nama }}</td>
                <td>{{ $ps->alamat }}</td>
                <td>{{ $ps->namadr }}</td>
                <td>{{ $ps->jabatan }}</td>
                   </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

    </div>
</body>