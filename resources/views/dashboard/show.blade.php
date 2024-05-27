<!doctype html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Curriculum Vitae</title>

    <link rel="stylesheet" href="{{ public_path('pdf.css') }}">
    <link rel="stylesheet" href="{{ asset('pdf.css') }}">
</head>

<body>
    <div class="container">
        <div class="header">
            <h1>Curriculum Vitae</h1>
            <img src="data:image/png;base64,{{ base64_encode(file_get_contents(public_path('/storage/' . $cv->photo))) }}"
                alt="Profile Picture">
        </div>

        <div class="section">
            <div class="section-title border">Profil</div>
            <div class="section-content">
                <p>Nama: {{ $cv->first_name }} {{ $cv->last_name }}</p>
                <p>Nama Pekerjaan: {{ $cv->job_title }}</p>
                <p>Negara: {{ $cv->country }}</p>
                <p>Alamat: {{ $cv->address }}</p>
                <p>Tempat, Tanggal Lahir: {{ $cv->place_birth }}, {{ $cv->date_birth }}</p>
                <p>Skill: {{ $cv->skill }}</p>
                <p>Bahasa: {{ $cv->language }}</p>
            </div>
        </div>

        <div class="section">
            <div class="section-title border">Kontak</div>
            <div class="section-content">
                <p>No HP: {{ $cv->phone }}</p>
                <p>Email: {{ $cv->email }}</p>
            </div>
        </div>

        <div class="section">
            <div class="section-title border">Deskripsi</div>
            <div class="section-content">
                <p>{{ $cv->summary }}</p>
            </div>
        </div>
    </div>
</body>

</html>
