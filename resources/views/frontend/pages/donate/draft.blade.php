<style>
    .qty-input {
        width: 80px;
        text-align: center;
    }

    .price {
        font-weight: 700;
        font-size: 1.1rem;
    }

    .subtotal {
        font-weight: 700;
        font-size: 1.05rem;
    }

    /* Carousel / card container */
    .card-container {
        display: flex;
        gap: 10px;
        overflow-x: auto;
        scroll-behavior: smooth;
        -webkit-overflow-scrolling: touch;
        cursor: grab;
        padding-bottom: 10px;
    }

    .card-container:active {
        cursor: grabbing;
    }

    input.gift-quantity {
        font-weight: 700;
        font-size: 12px;
        text-align: center;
        border: 1px solid #5a6f80;
    }

    .gift-item {
        position: relative;
        flex: 0 0 250px;
        cursor: pointer;
        border: 1px solid #eee;
        border-radius: 6px;
        overflow: hidden;
        display: flex;
        flex-direction: column;
    }



    /* Fixed-height, responsive card image */
    .fixed-img {
        min-width: 100%;
        /* height: 220px; */
        object-fit: cover;
        filter: grayscale(100%);
        display: block;
        position: relative;
    }

    .fixed-img::before {
        /* content: "";
        position: absolute;
        inset: 0;
        background: linear-gradient(
            to bottom,
            rgba(0, 0, 0, 0.3) 0%,
            rgba(0, 0, 0, 0.6) 50%,
            rgba(0, 0, 0, 0.85) 100%
        );
        pointer-events: none;  */
    }

    .card-body {
        text-align: center;
        padding: 10px;
    }

    .card-title {
        font-size: 18px;
        margin: 5px 0;
    }

    .card-text {
        margin: 5px 0;
    }

    .checkmark {
        display: none;
        color: #00b894;
        font-size: 1.5em;
        position: absolute;
        top: 10px;
        right: 10px;
        pointer-events: none;
    }

    .gift-item.selected .checkmark {
        display: block;
    }

    input[type=number]::-webkit-inner-spin-button,
    input[type=number]::-webkit-outer-spin-button {
        opacity: 1;
    }

    @media (max-width: 576px) {
        .fixed-img {
            height: 160px;
        }

        .gift-item {
            flex: 0 0 180px;
        }
    }
</style>

<h3 class="text-center" style="margin: 12px auto; color: #5bc1ac">Select Gift Items</h3>

@php
    $datas = App\Models\Gift::all();
@endphp

<div class="gift-carousel-wrapper">
    <div class="card-container" id="giftCarousel">
        @foreach ($datas as $item)
            <div class="gift-item" data-price="{{ $item->price }}">
                <div class="img-wrapper">
                    <img src="{{ asset($item->image) }}" class="fixed-img" alt="...">
                </div>
                <div class="card-body">
                    <h5 class="card-title">{{ $item->name }}</h5>
                    <p class="card-text">({{ $item->price }} BDT)</p>
                    <input autocomplete="off" type="number" name="gift_{{ $item->name }}" min="0"
                        value="{{ $item->quanity  }}" class="gift-quantity">
                    <span class="checkmark">✔</span>
                </div>
            </div>
        @endforeach
    </div>

    <div class="donate-btn-wrapper" style="text-align:center; margin-top:10px;">
        <button type="submit" class="donate-btn btn btn-success">Donate</button>
    </div>

    <script>
        // Carousel drag & touch
        const carousel = document.querySelector('.card-container');
        let isDragging = false, startX, scrollLeft;

        carousel.addEventListener('mousedown', e => {
            isDragging = true;
            startX = e.pageX - carousel.offsetLeft;
            scrollLeft = carousel.scrollLeft;
        });
        carousel.addEventListener('mouseleave', () => isDragging = false);
        carousel.addEventListener('mouseup', () => isDragging = false);
        carousel.addEventListener('mousemove', e => {
            if(!isDragging) return;
            e.preventDefault();
            const x = e.pageX - carousel.offsetLeft;
            const walk = (x - startX) * 2;
            carousel.scrollLeft = scrollLeft - walk;
        });

        carousel.addEventListener('touchstart', e => {
            isDragging = true;
            startX = e.touches[0].pageX - carousel.offsetLeft;
            scrollLeft = carousel.scrollLeft;
        });
        carousel.addEventListener('touchmove', e => {
            if(!isDragging) return;
            const x = e.touches[0].pageX - carousel.offsetLeft;
            const walk = (x - startX) * 2;
            carousel.scrollLeft = scrollLeft - walk;
        });
        carousel.addEventListener('touchend', () => isDragging = false);
        carousel.addEventListener('touchcancel', () => isDragging = false);
    </script>

    <script>
        $(document).ready(function() {
            let baseAmount = 0;

            function updateTotalDonation() {
                let totalAmount = baseAmount;
                $('.gift-item.selected').each(function() {
                    const price = parseFloat($(this).data('price')) || 0;
                    const $quantityInput = $(this).find('.gift-quantity');
                    const currentQuantity = parseInt($quantityInput.val()) || 0;
                    if(currentQuantity > 0) totalAmount += price * currentQuantity;
                });
                $('#donationAmount').val(totalAmount.toFixed(2));
            }

            // Toggle selection on click
            $('.gift-item').on('click', function(e){
                if($(e.target).is('.gift-quantity')) return;
                $(this).toggleClass('selected'); // select / deselect
                updateTotalDonation();
            });

            // Quantity changes
            $('.gift-quantity').on('input', function(){
                if($(this).val() === "") $(this).val(0);
                updateTotalDonation();
            });

            $('.gift-quantity').on('blur', function(){
                updateTotalDonation();
            });
        });
    </script>
</div>
