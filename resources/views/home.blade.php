@extends('layouts.tugas')

@section('title', 'HOME')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <h1 align="center">SMA NEGERI 1 TALUN</h1><br>
                <img src="{{ url('img/bg.jpg')}}" class="rounded" width="540" align="center">
                <p><br>Sejarah SMA Negeri 1 Talun berawal pada tanggal 16 Januari 1974 melalui Surat Keputusan Menteri Pendidikan dan Kebudayaan Republik Indonesia No. 0236/0/1973 dengan nama SMPP Blitar atau Sekolah Menengah Persiapan Pembangunan Blitar.<br><br>Pembangunan SMPP Blitar sendiri atas pertimbangan jumlah sekolah tingkat menengah yang ada di Kabupaten dan kota Blitar tidak mampu menampung jumlah lulusan siswa SLTP yang pada saat di Kabuparen dan Kota Blitar hanya berdiri satu Sekolah Menengah Negeri, yaitu SMA Negeri 1 Blitar.</p>
            </div>
            <div class="col-md-4">
            <div class="card rounded-pill">
            <div class="card-header bg-info rounded-pill">
            <h4><img src="https://img.icons8.com/dusk/64/000000/show-property.png" width="30" height="30"/>&nbsp; Visi</h4>
            </div>
            <ul class="list-group list-group-flush">
            <li class="list-group-item rounded-top">
            UNGGUL DALAM PRESTASI DAN IPTEK BERLANDASKAN IMTAQ YANG BERBUDAYA LINGKUNGAN</li>

            <div class="card-header bg-info rounded-top">
                <h4><img src="https://img.icons8.com/dusk/64/000000/task.png" width="30" height="30"/>&nbsp; Misi</h4>
            </div>
            <li class="list-group-item rounded-pill">1. Menyelenggarakan layanan pendidikan yang cepat, mudah, dan inovatif.</li>
            <li class="list-group-item">2. Menumbuhkan budaya membaca.</li>
            <li class="list-group-item">3. Menumbuhkan penghayatan dan pengamalan ajaran agama yang dianut.</li>
            <li class="list-group-item">4. Menumbuhkan semangat keunggulan dalam bidang akademis dan non akademis.</li>
            <li class="list-group-item">5. Mewujudkan warga sekolah yang mampu melestarikan fungsi lingkungan, mencegah
                 pencemaran dan kerusakan lingkungan.</li>
            </ul>
            </div>
                
@endsection
