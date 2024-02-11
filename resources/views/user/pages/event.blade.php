@extends('user.index')

@section('title','Your\'e title here')

@push('css')
<style>
    .wrap-carousel {
        width: 100%;
        height: auto;
        display: flex;
        flex-direction: column;
        overflow: hidden;
    }

    .wrap-carousel img {
        width: 100%;
        height: 400px;
        border-radius: 15px;
        object-fit: cover;
    }

    .get-ticket {
        background-color: #FFFFFF;
        padding: 35px 25px 25px 25px;
        border-radius: 15px;
        position: relative;
        height: 400px;
    }

    button.checkout-btn {
        background-color: #FBFADA;
        border: 2px solid #436850;
        width: 100%;
        color: #436850;
        border-radius: 50px;
        padding: 10px 23px;
        font-weight: 600;
        font-size: 1.2rem;
       
    }

    .wrap-btn-checkout {
        position: absolute;
        bottom: 0px;
        right: 0px;
        width: 100%;
        padding: 20px;
    }

    button.checkout-btn:hover:not([disabled]) {
        background-color: #436850;
        color: #fdfced;
    }

    button.checkout-btn:disabled {
        cursor: not-allowed;
        opacity: 50%;
    }

    .ticket {
        rotate: -50deg;
        margin-top: -8px;
    }

    .price-ticket {
        color: #12372a;
        font-weight: 800;
    }

    .qty {
        display: flex;
        align-items: center;
        justify-content: space-between;
        gap: 5px;
    }

    .decrement-btn, .increment-btn{
        background-color: #FBFADA;
        border: 2px solid #436850;
        color: #436850;
        border-radius: 5px;
        font-size: 1.1rem;
    }

    .decrement-btn:hover, .increment-btn:hover{
        background-color: #436850;
        border: 2px solid #FBFADA;
        color: #FBFADA;
        border-radius: 5px;
        font-size: 1.1rem;
    }

    .form-control:focus {
        border: 1px solid #436850;
    }

    div.subtotal {
        display: flex;
        justify-content: space-between;
        align-items: center;
        border-bottom: 1px solid lightgray;
        margin-bottom: 10px;
    }

    .totalPrice, .subtotal{
        color: #12372a;
        font-weight: 800;
    }

    div.totalPrice {
        display: flex;
        justify-content: space-between;
        align-items: center;
    }

    .subtotal p i {
        rotate: -50deg;
    }

    .description-event {
        padding: 25px;
        display: flex;
        align-items: center;
        gap: 25px;
    }

    .profile-img{
        min-width: 75px;
        min-height: 75px;
        border-radius: 100%;
        overflow: hidden;
    }

    .profile-img img {
        object-fit: cover;
        width: 75px;
        height: 75px;
    }

    .subtitle p, .subtitle h4, .subtitle h5, .subtitle h6 {
        margin: 0px;
        color: #12372a;
    }

    .detail-event {
        padding: 20px;
        display: flex;
        justify-content: center;
    }

    .item-detail {
        display: flex;
        gap: 10px;
    }

    .item-detail > .subtitle {
        flex: 1;
    }

    .item-detail i {
        color: #12372a;
    }

    .item-detail .icon-wrapper {
        background-color: #ADBC9F;
        display: flex;
        justify-content: center;
        align-items: center;
        width: 25px;
        height: 25px;
        border-radius: 5px;
    }

    input::-webkit-outer-spin-button,
    input::-webkit-inner-spin-button {
    -webkit-appearance: none;
    margin: 0;
    }

    /* Firefox */
    input[type=number] {
    -moz-appearance: textfield;
    }

</style>
@endpush

@section('content')
<div class="container px-5">
    <div class="row mt-5 mb-2">
        <div class="title mb-5">
            <h2>You're event name here</h2>
        </div>

        <div class="col-12 col-lg-8 col-md-12">
            <div class="wrap-carousel">
                <div id="carouselExample" class="carousel slide">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="{{ asset('img/test.jpg') }}" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="{{ asset('img/test2.jpg') }}" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="{{ asset('img/test.jpg') }}" class="d-block w-100" alt="...">
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>

                <div class="description-event">
                    <div class="profile-img">
                        <img src="{{ asset('img/test-logo.png') }}" alt="img">
                    </div>
                    <div class="title subtitle">
                        <p class="text-muted">Penyelenggara</p>
                        <h4>You're vendor here  lorem</h4>
                    </div>
                </div>

                <div class="row detail-event">
                    <div class="col-4 item-detail">
                        <div class="icon-wrapper">
                            <i class="fa-solid fa-location-dot"></i>
                        </div>
                        <div class="title subtitle">
                            <p class="text-muted">Lokasi</p>
                            <h6>Karawang</h6>
                        </div>
                    </div>
                    <div class="col-4 item-detail">
                        <div class="icon-wrapper">
                            <i class="fa-solid fa-clock"></i>
                        </div>
                        <div class="title subtitle">
                            <p class="text-muted">Waktu</p>
                            <h6>09:00</h6>
                        </div>
                    </div>
                    <div class="col-4 item-detail">
                        <div class="icon-wrapper">
                            <i class="fa-solid fa-calendar-days"></i>
                        </div>
                        <div class="title subtitle">
                            <p class="text-muted">Tanggal</p>
                            <h6>10, januari 2024</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-12 col-lg-4 col-md-12 get-ticket">
            <div class="title mb-5">
                <h3>Get tickets</h3>
            </div>

            <div class="checkout">
                <div class="row mb-4">
                    <div class="col-6 col-lg-7 col-md-7">
                        <input class="form-control shadow-none" type="date">
                    </div>
                    <div class="col-6 col-lg-5 col-md-5 qty">
                        <button type="button" class="decrement-btn" onclick="decrement()">
                            <i class="fa-solid fa-minus fa-sm"></i>
                        </button>
                        <input class="form-control form-control-sm text-center shadow-none qtyElement" type="number" value="0" min="0" disabled placeholder="0">
                        <button type="button" class="increment-btn" onclick="increment()">
                            <i class="fa-solid fa-plus fs-sm"></i>
                        </button>
                    </div>
                </div>

                <div class="subtotal">
                    <p class="text-muted">
                        <i class="fa-solid fa-ticket fa-sm"></i>
                        <span class="qty-ticket">1</span>
                    </p>
                    <h5 class="price-ticket">Rp. 500.000</h5>
                    <input type="number" id="ticketprice" value="500000" hidden>
                </div>

                <div class="totalPrice">
                    <p class="text-muted">Total price</p>
                    <h5 class="totalPrice">Rp. 0</h5>
                </div>
            </div>

            <div class="wrap-btn-checkout">
                <button type="button" class="checkout-btn" disabled>Beli Sekarang</button>
            </div>
        </div>
    </div>

    <div class="row my-5">
        <div class="col-lg-12">
            <div class="title mb-5">
                <h4>Deskripsi Event</h4>
                <p class="text-muted">
                    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ut, velit et, magnam non delectus necessitatibus quis laboriosam quidem illo iure aut, est veritatis cum. Inventore temporibus nisi natus possimus. Labore, error tempora atque fugiat perspiciatis in illum et dolor nihil? Provident eum quo iste nostrum expedita iusto veritatis minima deleniti!
                    <br>
                    <br>
                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Itaque tenetur, illum error facere tempore maiores! Quo id praesentium saepe temporibus sapiente. Cum facere harum tempore?
                    <br>
                    <br>
                    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Consectetur rem sunt dolores recusandae commodi veniam numquam saepe alias? Atque nulla quod vel quo inventore enim cupiditate velit voluptate voluptatibus labore, dicta delectus iusto, sequi, fugiat iure. Exercitationem, labore iure molestiae, libero sunt dolorem aliquam rem cupiditate in nam eaque nesciunt possimus eos! Autem maiores quibusdam ullam. A expedita dignissimos, voluptates dolorem eum culpa! Voluptatum, natus harum aperiam exercitationem qui minus voluptatibus eius mollitia eligendi corrupti, nisi nihil! Impedit voluptates quasi sit, dolores asperiores tempora aliquam, tempore sint ab, eos aperiam. Quisquam ad laboriosam minima obcaecati odit aliquid dolorem fugit iure.
                </p>
            </div>
            <div class="title mb-5">
                <h4>Syarat dan Ketentuan</h4>
                <ol class="text-muted">
                    <li>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Saepe, eligendi.</li>
                    <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequatur, illum! Accusantium impedit nemo eveniet suscipit.</li>
                    <li>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Facere nulla illo tempora quaerat voluptatum culpa! Tenetur qui blanditiis aliquam corrupti et odit ipsam maiores dolores?</li>
                    <li>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia optio ea minima vitae error, quas placeat porro sed, iure nulla mollitia voluptas. Animi dolorum at, delectus voluptatibus temporibus dolores maiores.</li>
                    <li>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Saepe, eligendi.</li>
                    <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequatur, illum! Accusantium impedit nemo eveniet suscipit.</li>
                    <li>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Facere nulla illo tempora quaerat voluptatum culpa! Tenetur qui blanditiis aliquam corrupti et odit ipsam maiores dolores?</li>
                    <li>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia optio ea minima vitae error, quas placeat porro sed, iure nulla mollitia voluptas. Animi dolorum at, delectus voluptatibus temporibus dolores maiores.</li>
                    <li>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Saepe, eligendi.</li>
                    <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequatur, illum! Accusantium impedit nemo eveniet suscipit.</li>
                    <li>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Facere nulla illo tempora quaerat voluptatum culpa! Tenetur qui blanditiis aliquam corrupti et odit ipsam maiores dolores?</li>
                    <li>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia optio ea minima vitae error, quas placeat porro sed, iure nulla mollitia voluptas. Animi dolorum at, delectus voluptatibus temporibus dolores maiores.</li>
                    <li>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Saepe, eligendi.</li>
                    <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequatur, illum! Accusantium impedit nemo eveniet suscipit.</li>
                    <li>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Facere nulla illo tempora quaerat voluptatum culpa! Tenetur qui blanditiis aliquam corrupti et odit ipsam maiores dolores?</li>
                    <li>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia optio ea minima vitae error, quas placeat porro sed, iure nulla mollitia voluptas. Animi dolorum at, delectus voluptatibus temporibus dolores maiores.</li>
                </ol>
            </div>
            <div class="snk mb-5">
                <h5 class="text-muted">Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro, esse provident cum, a quis culpa, officia sint facere iusto sed et saepe eius explicabo quo.</h5>
            </div>
            <div class="snk mb-5">
                <h5 class="text-muted">Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro, esse provident cum, a quis culpa, officia sint facere iusto sed et saepe eius explicabo quo.</h5>
            </div>
        </div>
    </div>
</div>
@endsection

@push('js')
<script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
<script>
    var qtyElement = $(".qtyElement").eq(0);
    var checkoutButton = $(".checkout-btn").eq(0);
    var totalPriceElement = $(".totalPrice h5");
    var ticketPrice = $("#ticketprice").val();

    if(parseInt(qtyElement.val()) == 0) {
        checkoutButton.attr('disabled','disabled');
    };

    function increment() {
        // Parse the value to an integer
        var qty = parseInt(qtyElement.val());

        if (qty >= 0) {
            var newQtyValue = qty + 1;
            totalPrice = newQtyValue * parseInt(ticketPrice);

            qtyElement.val(newQtyValue);
            updateCheckoutButtonState(newQtyValue);
            totalPriceElement.text(formatCurrency(totalPrice));
        }
    }

    function decrement() {
        // Parse the value to an integer
        var qty = parseInt(qtyElement.val());

        if (qty > 0) {
            var newQtyValue = qty - 1;
            totalPrice = newQtyValue * parseInt(ticketPrice);

            qtyElement.val(newQtyValue);
            updateCheckoutButtonState(newQtyValue);
            totalPriceElement.text(formatCurrency(totalPrice));
        }
    }

    function updateCheckoutButtonState(qty) {
        // Disable the button if qty is 0, otherwise enable it
        checkoutButton.prop("disabled", qty === 0);
    }

    function formatCurrency(total) {
        if(total < 0) {
            total = Math.abs(total);
        }
        return "Rp. " + parseFloat(total, 10).toFixed(2).replace(/(\d)(?=(\d{3})+\.)/g, "$1,").toString();
    }
</script>
@endpush