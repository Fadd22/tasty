@extends('layouts.user')
@section('content')

<!-- SweetAlert Notification Messages -->
@if(session('success'))
    <script>
        Swal.fire({
            icon: 'success',
            title: 'Success',
            text: "{{ session('success') }}",
            confirmButtonColor: '#3085d6',
            timer: 3000
        });
    </script>
@elseif(session('error'))
    <script>
        Swal.fire({
            icon: 'error',
            title: 'Error',
            text: "{{ session('error') }}",
            confirmButtonColor: '#d33',
            timer: 3000
        });
    </script>
@endif

@if ($errors->any())
    <script>
        Swal.fire({
            icon: 'warning',
            title: 'Validation Error',
            html: `
                <ul style="text-align: left;">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            `,
            confirmButtonColor: '#d33'
        });
    </script>
@endif

<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="https://unpkg.com/leaflet/dist/leaflet.css" />

<h2 class="thick"><b>KONTAK KAMI</b></h2>

<section class="contact-container">
    <h2 class="mb-5"><b>KONTAK KAMI</b></h2>
    <form action="{{ route('front.message.store') }}" class="contact-layout" method="POST">
        @csrf
        <div class="left-column">
            <div class="form-group">
                <input type="text" placeholder="Subject" class="input-field" name="subject">
            </div>
            <div class="form-group">
                <input type="text" placeholder="Name" class="input-field" name="name">
            </div>
            <div class="form-group">
                <input type="email" placeholder="Email" class="input-field" name="email">
            </div>
        </div>
        <div class="right-column">
            <div class="form-group">
                <textarea placeholder="Message" class="input-field textarea-field" name="message"></textarea>
            </div>
        </div>
        <div class="form-group">
            <button type="submit" class="action-button"><b>KIRIM</b></button>
        </div>
    </form>
</section>

<!-- Additional sections remain unchanged -->

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Peta SMK Assalaam Bandung</title>
    <style>
        /* CSS untuk merapikan tampilan dan memusatkan iframe */
        .map-container {
            display: flex;
            justify-content: center; /* Menempatkan iframe di tengah secara horizontal */
            align-items: center;     /* Menempatkan iframe di tengah secara vertikal */
            height: 100vh;           /* Mengatur tinggi container agar memenuhi layar */
        }
        iframe {
            border: 0;
        }
    </style>
</head>
<body>

    <div class="map-container">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.361157048748!2d107.58974617403634!3d-6.966651668210825!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e8deccecb6f1%3A0x658cc60fbe5017b9!2sSMK%20Assalaam%20Bandung%20(PUSAT%20KEUNGGULAN)!5e0!3m2!1sid!2sid!4v1730963903634!5m2!1sid!2sid" width="1300" height="550" allowfullscreen="allow" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>

</body>
</html>


@endsection
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

