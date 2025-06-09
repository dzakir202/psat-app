@extends('Template.template')
@section('content')
    <div class="hero-section5 my-8">
        <div class="text-center my-5">
            <h2 class="display-6 fw-bold text-body-emphasis">Fasilitas Dan Destinasi Di Chevilly Resort & Camp</h2>
            <figcaption>Galeri Chevilly Resort & Camp</figcaption>
        </div>
        <div class="container mb-5">
            <div class="row g-4">
                <div class="col-md-4"><img src="{{ asset('image/awan.jpg') }}" class="img-fluid" alt="Awan" /></div>
                <div class="col-md-4"><img src="{{ asset('image/jembatanchinatown.jpg') }}" class="img-fluid" alt="Jembatan" /></div>
                <div class="col-md-4"><img src="{{ asset('image/kapalchinese.jpg') }}" class="img-fluid" alt="Kapal" /></div>
                <div class="col-md-4"><img src="{{ asset('image/payungchinatown.jpg') }}" class="img-fluid" alt="Payung" /></div>
                <div class="col-md-4"><img src="{{ asset('image/spotkayubintang.jpg') }}" class="img-fluid" alt="Kayu Bintang" /></div>
                <div class="col-md-4"><img src="{{ asset('image/rumahhobbit.jpg') }}" class="img-fluid" alt="Rumah Hobbit" /></div>
                <div class="col-md-4"><img src="{{ asset('image/gazeboornamental.jpg')}}" class="img-fluid" alt="Gazebo Ornamental"></div>
                <div class="col-md-4"><img src="{{ asset('image/gapurachinatown.jpg')}}" class="img-fluid" alt="Gapura ChinaTown"></div>
                <div class="col-md-4"><img src="{{ asset('image/trowonganilusi.jpg')}}" class="img-fluid" alt="Trowongan Ilusi"></div>
                <div class="col-md-4"><img src="{{ asset('image/kolamrenang.jpeg')}}" class="img-fluid" alt="Kolam Renang" style="height: 30vh"></div>
                <div class="col-md-4"><img src="{{ asset('image/vinerestaurant.jpg')}}" class="img-fluid" alt="Restaurant"></div>
                <div class="col-md-4"><img src="{{ asset('image/chevilly2.jpg')}}" class="img-fluid" alt="Gapura ChinaTown"></div>
            </div>
        </div>
    </div>
@endsection
