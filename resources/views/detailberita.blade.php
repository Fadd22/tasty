@extends('layouts.user')
@section('content')
 <h2 class="thick"><b>SELENGKAPNYA</b></h2>
     <section class="news-content">
        <div class="container news-nusantara">
            <div class="row row-news">
                <!-- Bagian Gambar Misi -->
                <div class="col-md-6">

                     <img src="{{ asset('/storage/berita/' . $berita->image) }}" alt="{{ $berita->judul }}" alt="News Image"
                        class="img-fluid rounded-image-news">
                </div>

                <!-- Bagian Teks Misi -->
                <div class="col-md-6 text-content-news">
                     <h2 class="mb-4"><b>{{ $berita->judul }}</b></h2>
                     <div class="col-md-6 text-content-news">
                    <p>{{ $berita->deskripsi }}</p>
                    <a href="{{url('news')}}" class="btn-black"><b>KEMBALI</b></a>
                </div>

                </div>
            </div>
        </div>
    </section>
@endsection
