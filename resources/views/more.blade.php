@extends('layouts.user')
@section('content')
 <h2 class="thick"><b>SELENGKAPNYA</b></h2>
    <!-- Hero Section -->
     <section class="news-content">
        <div class="container news-nusantara">
            <div class="row row-news">
                <!-- Bagian Gambar Misi -->
                <div class="col-md-6">
                    <img src="{{ asset('assets1/ASET/eiliv-aceron-ZuIDLSz3XLg-unsplash.jpg') }}" alt="News Image"
                        class="img-fluid rounded-image-news">
                </div>
                <!-- Bagian Teks Misi -->
                <div class="col-md-6 text-content-news">
                    <h3 class="mb-4"><b>APA SAJA MAKANAN KHAS NUSANTARA?</b></h3>
                    <p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus ornare, augue eu
                        rutrum commodo,
                        dui diam convallis arcu, eget consectetur ex sem eget lacus. Nullam vitae dignissim neque, vel
                        luctus ex. Fusce sit amet viverra ante.</p>
                    <p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus ornare, augue eu
                        rutrum commodo,
                        dui diam convallis arcu, eget consectetur ex sem eget lacus. Nullam vitae dignissim neque, vel
                        luctus ex. Fusce sit amet viverra ante.</p>
                        <p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus ornare, augue eu
                        rutrum commodo,
                        dui diam convallis arcu, eget consectetur ex sem eget lacus. Nullam vitae dignissim neque, vel
                        luctus ex. Fusce sit amet viverra ante.</p>

                    <a href="{{url('news')}}" class="btn-black"><b>KEMBALI</b></a>
                </div>
            </div>
        </div>
    </section>
@endsection
