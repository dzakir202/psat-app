@extends('Template.template')
@section('content')
    <div class="hero-section">
        <div class="px-4 pt-5 my-5 text-center">
            <h1 class="display-4 fw-bold text-body-emphasis">Destinasi Nyaman untuk Momen Tak Terlupakan</h1>
            <div class="col-lg-6 mx-auto">
                <p class="lead mb-4">Chevilly Resort & Camp adalah destinasi wisata keluarga di Bogor dengan suasana
                    pegunungan yang sejuk. Menyediakan glamping, villa, taman hijau, wahana seru, dan spot foto
                    Instagramable seperti skybridge dan miniatur China Town. Cocok untuk liburan, gathering, dan acara
                    komunitas.</p>
            </div>
            <div class="overflow-hidden" style="max-height: 35vh">
                <div class="container px-5">
                    <img src="{{ asset('image/chevilly.jpg') }}" alt="Logo Chevilly"
                        class="img-hero img-fluid border rounded-3 shadow-lg mb-4" loading="lazy">
                </div>
            </div>
        </div>
    </div>

    <div class="hero2">
        <div class="container">
            <div class="row text-center">
                <div class="col-md-4 col-12">
                    <div class="card mb-4 mb-lg-0">
                        <div class="card-body p-5">
                            <h3 class="mb-2">Pemandu pribadi</h3>
                            <p class="mb-0">Jelajahi Chevilly Bogor seru bersama pemandu, dari taman tematik hingga
                                restoran indah.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-12">
                    <div class="card mb-4 mb-lg-0">
                        <div class="card-body p-5">
                            <h3 class="mb-2">Layanan Terbaik</h3>
                            <p class="mb-0">Tim Chevilly Bogor siap melayani dengan ramah dan responsif demi liburan Anda
                                yang nyaman.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-12">
                    <div class="card mb-4 mb-lg-0">
                        <div class="card-body p-5">
                            <h3 class="mb-2">Harga Terjangkau</h3>
                            <p class="mb-0">Tiket masuk Chevilly Bogor terjangkau, cocok untuk liburan seru keluarga tanpa
                                boros.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="hero-section3">
        <div class="text-center my-5">
            <h2 class="display-6 fw-bold text-body-emphasis">Rekomendasi Destinasi</h2>
            <figcaption>Beberapa destinasi populer dari Chevilly Resort & Camp</figcaption>
        </div>
        <div class="container mb-5">
            <div class="row g-4">
                <div class="col-md-4"><img src="{{ asset('image/awan.jpg') }}" class="img-fluid" alt="Awan" /></div>
                <div class="col-md-4"><img src="{{ asset('image/jembatanchinatown.jpg') }}" class="img-fluid"
                        alt="Jembatan" />
                </div>
                <div class="col-md-4"><img src="{{ asset('image/kapalchinese.jpg') }}" class="img-fluid" alt="Kapal" />
                </div>
                <div class="col-md-4"><img src="{{ asset('image/payungchinatown.jpg') }}" class="img-fluid"
                        alt="Payung" />
                </div>
                <div class="col-md-4"><img src="{{ asset('image/spotkayubintang.jpg') }}" class="img-fluid"
                        alt="Kayu Bintang" /></div>
                <div class="col-md-4"><img src="{{ asset('image/rumahhobbit.jpg') }}" class="img-fluid"
                        alt="Rumah Hobbit" />
                </div>
            </div>
        </div>
    </div>
@endsection
