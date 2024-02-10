 @extends('user.index')

 @section('title','Your\'e title here')

 @section('content')
    <div class="mb-5">

        <section>
            <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img src="{{ asset('img/test.jpg') }}" class="d-block w-100" alt="...">
                  </div>
                  <div class="carousel-item">
                    <img src="{{ asset('img/test.jpg') }}" class="d-block w-100" alt="...">
                  </div>
                  <div class="carousel-item">
                    <img src="{{ asset('img/test.jpg') }}" class="d-block w-100" alt="...">
                  </div>
                </div>
              </div>
        </section>

        <section id="acara-terdekat" class="events mb-5">
            <div class="container p-5">
                <div class="title-light mb-5">
                    <h3># Acara terdekat</h2>
                </div>
                <div class="slideshow mb-5">
                    {{-- @for ($i = 0; $i < 4; $i++) --}}
                        <div class="slide-img">
                            <img src="{{ asset('img/test.jpg') }}" alt="img" class="rounded-4">
                        </div>
                        <div class="slide-img">
                            <img src="{{ asset('img/test2.jpg') }}" alt="img" class="rounded-4">
                        </div>
                        <div class="slide-img">
                            <img src="{{ asset('img/test.jpg') }}" alt="img" class="rounded-4">
                        </div>
                    {{-- @endfor --}}
                </div>
            </div>
        </section>

        <section id="acara-bulan-ini" class="container px-5">
            <div class="title mb-5">
                <h3># Acara bulan ini</h2>
            </div>
            <div class="row justify-align-center">
                @for ($i = 0; $i < 4; $i++)
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
                                    <a href="#" class="custom-btn">Beli</a>
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
        </section>


        <div class="d-flex align-items-center justify-content-center mt-5">
            <button type="button" class="customer-other-btn">Lihat acara lain</button>
        </div>

    </div>
 @endsection

 @push('js')
     <script>
        const myCarouselElement = document.querySelector('#myCarousel')

        const carousel = new bootstrap.Carousel(myCarouselElement, {
        interval: 5000,
        touch: false
        })
     </script>
 @endpush