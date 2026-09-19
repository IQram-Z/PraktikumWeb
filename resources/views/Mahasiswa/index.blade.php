<h1>Daftar Mahasiswa & Mata Kuliah</h1>
<table border="1" cellpadding="8" cellspacing="0">
    <thead>
        <tr>
            <th>NIM</th>
            <th>Nama</th>
            <th>Prodi</th>
            <th>Mata Kuliah yang Diambil</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($data as $mhs)
        <tr>
            <td>{{ $mhs->nim }}</td>
            <td>{{ $mhs->nama }}</td>
            <td>{{ $mhs->prodi }}</td>
            <td>
                <ul>
                    @forelse ($mhs->matakuliahs as $mk)
                        <li>{{ $mk->kode_mk }} - {{ $mk->nama_mk }} ({{ $mk->sks }} SKS)</li>
                    @empty
                        <li>Belum mengambil mata kuliah</li>
                    @endforelse
                </ul>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>