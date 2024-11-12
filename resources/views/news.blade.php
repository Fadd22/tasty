@extends('layouts.user')
@section('content')
    <h2 class="thick"><b>BERITA KAMI</b></h2>
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
                        rutrum commodo, dui diam convallis arcu, eget consectetur ex sem eget lacus. Nullam vitae dignissim neque, vel
                        luctus ex. Fusce sit amet viverra ante.</p>
                    <p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus ornare, augue eu
                        rutrum commodo, dui diam convallis arcu, eget consectetur ex sem eget lacus. Nullam vitae dignissim neque, vel
                        luctus ex. Fusce sit amet viverra ante.</p>

                    <a href="{{url('more')}}" class="btn-black"><b>BACA SELENGKAPNYA</b></a>
                </div>
            </div>
        </div>
    </section>

    <section class="news-other">
        <div class="container">
            <h3 class="news-other"><b>BERITA LAINNYA</b></h3>
            <div class="row g-5" id="news-container">
                @php
                    $berita = App\Models\Berita::orderBy('id', 'asc')->paginate(4);
                @endphp

                @foreach ($berita as $item)
                    <div class="col-md-3"> <!-- 4 kolom per baris -->
                        <div class="card berita-card distance-card">
                            <img alt="Fresh vegetables on a table" class="card-img-top" height="200"
                                src="{{ asset('/storage/berita/' . $item->image) }}" width="600" />
                            <div class="card-body d-flex">
                                <h5 class="card-title">{{ $item->judul }}</h5>
                                <p class="card-text">{{ $item->deskripsi }}</p>
                                <a class="read-more" href="{{ url('news/' . $item->id) }}">
                                    Baca selengkapnya
                                </a>
                            </div>
                        </div>
                    </div>
                @endforeach

                @if ($berita->hasMorePages())
                    <a href="{{url('more')}}" id="loadMore" onclick="loadMore(event)" class="btn-black"><b>BACA SELENGKAPNYA</b></a>
                @endif
            </div>
        </div>
    </section>

    <script>
        let newsSkip = {{ $berita->count() }}; // Mulai dengan jumlah berita yang ada

        function loadMore(event) {
            event.preventDefault(); // Mencegah perilaku default link
            fetch(`{{ route('newsLoad') }}?skip=${newsSkip}`)
                .then(response => response.json())
                .then(data => {
                    const newsContainer = document.getElementById('news-container');
                    data.forEach(item => {
                        const newItem = document.createElement('div');
                        newItem.className = 'col-12 col-sm-6 col-md-3 col-lg-3 mb-4';
                        newItem.innerHTML = `
                            <div class="card berita-card distance-card">
                                <img alt="Fresh vegetables on a table" class="card-img-top"
                                    src="{{ asset('/storage/berita/') }}/${item.image}" />
                                <div class="card-body d-flex flex-column">
                                    <h5 class="card-title">${item.judul}</h5>
                                    <p class="card-text">${item.deskripsi}</p>
                                    <a class="read-more" href="/news/${item.id}">
                                        Baca selengkapnya
                                    </a>
                                </div>
                            </div>`;
                        newsContainer.appendChild(newItem);
                    });
                    newsSkip += data.length; // Increment skip untuk pemuatan berikutnya
                    if (data.length < 4) {
                        document.getElementById('loadMore').style.display = 'none'; // Sembunyikan jika tidak ada lagi
                    }
                })
                .catch(error => console.error('Error loading more news:', error));
        }
    </script>
@endsection
