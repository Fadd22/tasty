@extends('layouts.user')
    @section('content')
        <h2 class="content-about"><b>TENTANG KAMI</b></h2>

        <section class="tastyFood">
            <div class="container">
                <div class="row tasty-food-section">
                    <div class="col-md-6 text-content-tasty">
                        <h3><b>TASTY FOOD</b></h3>
                        <p class="paragraph">
                            <b>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus ornare, augue eu rutrum
                                commodo,
                                dui diam convallis arcu, eget consectetur ex sem eget lacus. Nullam vitae dignissim neque,
                                vel
                                luctus ex.
                                Fusce sit amet viverra ante.</b>
                        </p>
                        <p class="paragraph2">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus ornare, augue eu rutrum
                            commodo,
                            dui diam convallis arcu, eget consectetur ex sem eget lacus. Nullam vitae dignissim neque, vel
                            luctus ex.
                            Fusce sit amet viverra ante.
                        </p>
                    </div>
                    <div class="col-md-6 image-content d-flex justify-content-around">
                        <img src="{{ asset('assets1/ASET/brooke-lark-oaz0raysASk-unsplash.jpg') }}" alt="Tasty Food 1"
                            loading="lazy" class="img-fluid rounded-image">
                        <img src="{{ asset('assets1/ASET/sebastian-coman-photography-eBmyH7oO5wY-unsplash.jpg') }}"
                            alt="Tasty Food 2" loading="lazy" class="img-fluid rounded-image">
                    </div>
                </div>
            </div>
        </section>

        <section class="visi">
            <div class="container mt-5">
                <div class="row">
                    <!-- Bagian Gambar Visi -->
                    <div class="col-md-6 d-flex justify-content-around">
                        <img src="{{ asset('assets1/ASET/fathul-abrar-T-qI_MI2EMA-unsplash.jpg') }}" alt="Visi Image 1"
                            class="img-fluid rounded-image1">
                        <img src="{{ asset('assets1/ASET/michele-blackwell-rAyCBQTH7ws-unsplash.jpg') }}" alt="Visi Image 2"
                            class="img-fluid rounded-image1">
                    </div>
                    <!-- Bagian Teks Visi -->
                    <div class="col-md-6 text-content">
                        <h3><b>VISI</b></h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce scelerisque magna aliquet cursus
                            tempus. Duis viverra metus et turpis elementum elementum. Aliquam rutrum placerat tellus et
                            suscipit. Curabitur facilisis lectus vitae eros malesuada eleifend. Mauris eget tellus odio.
                            Phasellus vestibulum turpis ac sem commodo, at posuere eros consequat. Duis nec ex at ante
                            volutpat
                            posuere. Morbi vel nunc tortor. Nulla facilisi. Nulla accumsan ullamcorper purus nec venenatis.
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer imperdiet erat vel leo rutrum
                            lobortis.</p>
                    </div>
                </div>
            </div>
        </section>

        <section class="misi">
            <div class="container mt-5">
                <div class="row mt-5">
                    <!-- Bagian Teks Misi -->
                    <div class="col-md-6 text-content">
                        <h3><b>MISI</b></h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce scelerisque magna aliquet cursus
                            tempus. Duis viverra metus et turpis elementum elementum. Aliquam rutrum placerat tellus et
                            suscipit. Curabitur facilisis lectus vitae eros malesuada eleifend. Mauris eget tellus odio.
                            Phasellus vestibulum turpis ac sem commodo, at posuere eros consequat. Duis nec ex at ante
                            volutpat
                            posuere. Morbi vel nunc tortor. Nulla facilisi. Nulla accumsan ullamcorper purus nec venenatis.
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer imperdiet erat vel leo rutrum
                            lobortis.</p>
                    </div>
                    <!-- Bagian Gambar Misi -->
                    <div class="col-md-6">
                        <img src="{{ asset('assets1/ASET/sanket-shah-SVA7TyHxojY-unsplash.jpg') }}" alt="Misi Image"
                            class="img-fluid rounded-image-misi">
                    </div>
                </div>
            </div>
        </section>
    @endsection
