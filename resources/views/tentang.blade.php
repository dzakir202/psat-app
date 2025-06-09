@extends('Template.template')
@section('content')
    <div class="hero-section">
        <div class="px-4 pt-5 my-5 text-center">
            <h1 class="display-4 fw-bold text-body-emphasis">Mengenai Chevilly Resort & Camp</h1>
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
    <div class="content2">
        <div class="container">
            <div class="row flex-lg-row align-items-center g-5">
                <div class="col-10 mx-auto col-sm-8 col-lg-6">
                    <img src="{{ asset('image/chevilly.jpg') }}" class="d-block mx-lg-auto img-fluid" alt=""
                        loading="lazy" style="height: 40vh">
                </div>
                <div class="col-lg-6">
                    <div class="lc-block">
                        <div editable="rich">
                            <h2 class="fw-bold display-5">Chevilly Resort & Camp</h2>
                        </div>
                    </div>

                    <div class="lc-block">
                        <div editable="rich">
                            <p class="lead">Chevilly Resort & Camp adalah destinasi wisata terpadu yang berlokasi di
                                Ciawi, Bogor, dengan suasana pegunungan yang sejuk dan alami. Tempat ini menawarkan
                                pengalaman menginap yang nyaman melalui berbagai pilihan akomodasi seperti glamping, hotel,
                                dan villa tematik, cocok untuk keluarga, pasangan, maupun rombongan.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="content3">
        <div class="container">
            <div class="row flex-lg-row-reverse align-items-center g-5">
                <div class="col-10 mx-auto col-sm-8 col-lg-6">
                    <img src="{{ asset('image/p2.png') }}" class="d-block mx-lg-auto img-fluid" alt=""
                        loading="lazy">
                </div>
                <div class="col-lg-6">
                    <div class="lc-block">
                        <div editable="rich">
                            <h2 class="fw-bold display-5">Fasilitas Chevilly Resort & Camp</h2>
                        </div>
                    </div>

                    <div class="lc-block">
                        <div editable="rich">
                            <p class="lead">Chevilly menawarkan beragam fasilitas untuk semua kalangan, mulai dari
                                penginapan mewah seperti villa dan glamping, hingga area rekreasi keluarga seperti Chevilly
                                Waterpark dan taman bermain. Salah satu daya tarik utama adalah Skybridge Chevilly, spot
                                foto favorit dengan latar alam yang memukau. Pengunjung juga dapat bersantai di Vine
                                Restaurant, yang menyajikan beragam hidangan lezat dengan pemandangan alam yang indah.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="content2">
        <div class="container">
            <div class="row flex-lg-row align-items-center g-5">
                <div class="col-10 mx-auto col-sm-8 col-lg-6">
                    <img src="{{ asset('image/outbound.jpeg') }}" class="d-block mx-lg-auto img-fluid" alt=""
                        loading="lazy" style="height: 50vh">
                </div>
                <div class="col-lg-6">
                    <div class="lc-block">
                        <div editable="rich">
                            <h2 class="fw-bold display-5">Aktivitas Seru</h2>
                        </div>
                    </div>

                    <div class="lc-block">
                        <div editable="rich">
                            <p class="lead">Selain berfoto ria, pengunjung bisa menikmati berbagai aktivitas menarik,
                                seperti berenang di kolam, berjalan santai di taman, hingga mencoba aneka kegiatan outbound.
                                Chevilly menjadi pilihan tepat bagi Anda yang mencari tempat wisata di Ciawi dengan
                                kombinasi antara nuansa alam dan konsep modern.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <div class="container my-5">
        <div editable="rich">
            <h2 class="fw-bold display-5 text-center">Lokasi Chevilly Resort & Camp</h2>
        </div>
        <iframe class="w-100" height="450" style="border:0;" allowfullscreen="" loading="lazy"
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4808.869828684144!2d106.87013071135398!3d-6.687261193280158!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69c9c2b013046f%3A0x93f7f9df109bea90!2sChevilly%20Resort%20dan%20Camp!5e1!3m2!1sid!2sid!4v1747986545048!5m2!1sid!2sid">
        </iframe>
    </div>
@endsection
