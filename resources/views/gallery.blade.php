@extends('layouts.user')
@section('content')
<h2 class="thick"><b>GALERI KAMI</b></h2>
    <!-- Carousel -->
    <section class="slider">
        <div id="foodCarousel" class="carousel slide content" data-bs-ride="carousel">
            <div class="carousel-inner">
                @php $gallery = App\Models\Gallery::orderBy('id', 'desc')->get(); @endphp
                @foreach ($gallery->take(6) as $key => $item)
                    @if ($item->slider)
                        <!-- Pastikan slider tidak kosong -->
                        <div class="carousel-item {{ $key === 0 ? 'active' : '' }}">
                            <!-- memastikan hanya satu item yang ditampilkan sebagai aktif saat carousel dimulai -->
                            <img src="{{ asset('/storage/gallery/' . $item->slider) }}" class="d-block img-fluid"
                                alt="Food {{ $key + 1 }}">
                        </div>
                    @endif
                @endforeach

            </div>
            <!-- Previous Button with Font Awesome Icon -->
            <button class="carousel-control-prev" type="button" data-bs-target="#foodCarousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon">
                    <i class="fas fa-chevron-left"></i>
                </span>
                <span class="visually-hidden">Previous</span>
            </button>
            <!-- Next Button with Font Awesome Icon -->
            <button class="carousel-control-next" type="button" data-bs-target="#foodCarousel" data-bs-slide="next">
                <span class="carousel-control-next-icon">
                    <i class="fas fa-chevron-right"></i>
                </span>
                <span class="visually-hidden">Next</span>
            </button>

        </div>
    </section>

    <section class="photo">
        <div class="container container-img">
            <div class="row">
                @php $gallery = App\Models\Gallery::orderBy('id', 'desc')->get(); @endphp
                @foreach ($gallery->take(8) as $item)
                    <div class="col">
                        <img src="{{ asset('/storage/gallery/' . $item->image) }}" class="rounded-img" alt="Food">
                    </div>
                @endforeach
            </div>
        </div>
    </section>

@endsection
