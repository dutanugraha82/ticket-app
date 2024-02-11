@extends('user.index')

@section('title','Your\'e title here')

@section('content')

<div class="container px-5 my-5">
    <div class="row justify-align-center">
        @for ($i = 0; $i < 15; $i++)
        <div class="col-12 col-md-6 col-lg-4 mb-4">
            <div class="card-y rounded-4">
                <img src="{{ asset('img/test.jpg') }}" alt="img" class="rounded-4">
                <div class="text-wrap mt-4 px-4 pb-3">
                    <div class="title mb-3">
                        <h5>SWARNA LAND FEST 2024</h5>
                    </div>
                    <p class="text-muted">
                        <i class="fa-regular fa-calendar fa-sm"></i>
                        09, January 2024
                        <br>
                        <i class="fa-solid fa-location-dot fa-sm"></i>
                        Karawang, Jawa Barat
                    </p>
                    <div class="d-flex justify-content-between">
                        <div class="title">
                            <h4>Rp. 100.000</h4>
                        </div>
                        <div>
                            <a href="/event/youreventname" class="custom-btn">Beli</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endfor 
        <div class="col-12 col-md-6 col-lg-4 mb-4">
            <div class="card-y rounded-4">
                <img src="{{ asset('img/test.jpg') }}" alt="img" class="soldout rounded-4">
                <div class="text-wrap mt-4 px-4 pb-3">
                    <div class="title mb-3">
                        <h5>SWARNA LAND FEST 2024</h5>
                    </div>
                    <p class="text-muted">
                        <i class="fa-regular fa-calendar fa-sm"></i>
                        09, January 2024
                        <br>
                        <i class="fa-solid fa-location-dot fa-sm"></i>
                        Karawang, Jawa Barat
                    </p>
                    <div class="d-flex justify-content-between">
                        <div class="title">
                            <h4>Rp. ---.---</h4>
                        </div>
                        <div>
                            <a href="#" class="soldout">Habis</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection