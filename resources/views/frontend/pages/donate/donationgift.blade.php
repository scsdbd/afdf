<style>
    /* side card styles  */
    .summary-card {
        right: 20%;
        position: absolute;
        color: #5a6f80;
        font-weight: 700;
        letter-spacing: .9px;
        padding: 10px;
        box-sizing: border-box;
        font-family: Arial, sans-serif;
        z-index: 1000;
        font-size: 1.8rem;
        line-height: 2.5rem;
        text-align: left box-shadow: 0 10px 25px rgba(0, 0, 0, 0.25);
        border-radius: 8px 0 0 8px;
    }

    @media (max-width: 576px) {
        .summary-card {
            position: absolute;
            right: 30%;
            z-index: 1000;
            margin-bottom: 50px;

        }
    }

    .fixed-card p {
        color: #fff;
    }

    /* card styles  */

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
        flex-direction: row;
        justify-content: space-between;
        gap: 10px;
        overflow-x: auto;
        scroll-behavior: smooth;
        -webkit-overflow-scrolling: touch;
        cursor: grab;
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
        border: 1px solid #5a6f80;
        border-radius: 6px;
        overflow: hidden;
        display: flex;
        flex-direction: column;
        align-items: center;
        background: #fff;
        padding: 5px;
        transition: background 0.3s ease;
        text-align: center;
        cursor: pointer;
    }

    .img-wrapper {
        /* padding: 10px; */
    }

    /* Fixed-height, responsive card image */
    .fixed-img {
        width: 100%;
        height: 220px;
        object-fit: cover;
        filter: grayscale(100%);
        display: block;
        position: relative;
    }

    .fixed-img::before {
        content: "";
        position: absolute;
        inset: 0;
        background: linear-gradient(to bottom,
                rgba(0, 0, 0, 0.3) 0%,
                rgba(0, 0, 0, 0.6) 50%,
                rgba(0, 0, 0, 0.85) 100%);
        pointer-events: none;

    }

    .card-body {
        text-align: center;
        /* padding: 10px; */
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
        .card-container {
            display: flex;
            flex-direction: row;
            justify-content: center;
            gap: 10px;
            flex-wrap: wrap;
        }

        .fixed-img {
            height: 160px;
        }

        .gift-item {
            flex: 0 0 180px;
        }
    }

    .gift-title {
        margin: 30px 0 50px 0;
        color: #5bc1ac;
        text-align: center;
    }
</style>

<h3 class="gift-title">Select Gift Items</h3>



@php
    $datas = App\Models\Gift::all();
@endphp

<div class=" my-5">
    <div class="card-container">
        @foreach ($datas as $item)
            <div class="gift-item" data-price="{{ $item->price }}">
                <div class="img-wrapper">
                    <img src="{{ asset($item->image) }}" class="fixed-img" alt="...">
                </div>
                <div class="card-body">
                    <h5 class="card-title">{{ $item->name }}</h5>
                    <p class="card-text">({{ $item->price }} BDT)</p>
                    <input autocomplete="off" type="number" name="gift_{{ $item->name }}" min="0" value=0
                        class="gift-quantity">
                    <span class="checkmark">✔</span>
                </div>
            </div>
        @endforeach
    </div>
    <div class="summary-card">
        <div class="gift-cards">
            <input type="text" hidden id="donationAmount" name="donation_amount">
            <small class="total-quantity  ">Total Quantity:</small> <br>
            <small class="total-price  ">Total Price: </small>

        </div>
    </div>

    <div class="donate-btn-wrapper" style="margin-top: 100px;">
        <button type="submit" class="donate-btn btn btn-success">Donate</button>
    </div>

    <script>
        // Carousel drag & touch
        const carousel = document.querySelector('.card-container');
        let isDragging = false,
            startX, scrollLeft;

        carousel.addEventListener('mousedown', e => {
            isDragging = true;
            startX = e.pageX - carousel.offsetLeft;
            scrollLeft = carousel.scrollLeft;
        });
        carousel.addEventListener('mouseleave', () => isDragging = false);
        carousel.addEventListener('mouseup', () => isDragging = false);
        carousel.addEventListener('mousemove', e => {
            if (!isDragging) return;
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
            if (!isDragging) return;
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
                    const currentQuantity = parseInt($quantityInput.val()) || 1;
                    if (currentQuantity > 0) totalAmount += price * currentQuantity;
                });
                $('#donationAmount').val(totalAmount.toFixed(2));
            }
            // When clicking on the card itself (not the input)
            $('.gift-item').on('click', function(e) {
                if ($(e.target).is('.gift-quantity')) return; // ignore clicks on input
                const $card = $(this);
                const $qtyInput = $card.find('.gift-quantity');
                const currentQty = parseInt($qtyInput.val()) || 0;

                $card.toggleClass('selected'); // toggle selection

                if ($card.hasClass('selected')) {
                    // If selected and quantity was 0, set to 1
                    if (currentQty === 0) $qtyInput.val(1);
                } else {
                    // If unselected, reset quantity to 0
                    $qtyInput.val(0);
                }

                updateTotalDonation();
                calculateGiftSummary();
            });

            // When changing the quantity input
            $('.gift-quantity').on('input', function() {
                const $card = $(this).closest('.gift-item');
                const qty = parseInt($(this).val()) || 0;

                if (qty > 0) {
                    $card.addClass('selected'); // select card if quantity > 0
                } else {
                    $card.removeClass('selected'); // deselect if quantity < 1
                }

                updateTotalDonation();
                calculateGiftSummary();
            });


            // Quantity changes
            $('.gift-quantity').on('input', function() {
                if ($(this).val() === "") $(this).val(0);
                updateTotalDonation();
            });

            $('.gift-quantity').on('blur', function() {
                updateTotalDonation();
            });
        });


        function calculateGiftSummary() {
            let summary = {
                totalQuantity: 0,
                totalAmount: 0,
                items: []
            };

            $('.gift-item').each(function() {
                const itemName = $(this).find('.card-title').text().trim();
                const itemPrice = parseFloat($(this).data('price')) || 0;
                const qty = parseInt($(this).find('.gift-quantity').val()) || 0;

                if ($(this).hasClass('selected') || qty > 0) {
                    const itemTotal = itemPrice * qty;

                    summary.items.push({
                        name: itemName,
                        price: itemPrice,
                        quantity: qty,
                        total: itemTotal
                    });

                    summary.totalQuantity += qty;
                    summary.totalAmount += itemTotal;
                }
            });



            document.querySelector('.total-quantity').textContent = `Total Quantity: ${summary.totalQuantity}`;
            document.querySelector('.total-price').textContent = `Total Price: $${summary.totalAmount}`;



            console.log("------ DONATION SUMMARY ------");
            console.log("Total Quantity:", summary.totalQuantity);
            console.log("Total Amount:", summary.totalAmount);
            console.log("Items:", summary.items);
            console.log("------------------------------");

            return summary;
        }

        $('.donate-btn').on('click', function(e) {
            // e.preventDefault();

            const summary = calculateGiftSummary(); // get all selected items

            $.post("{{ route('donation.confirm') }}", {
                _token: '{{ csrf_token() }}',
                items: summary.items,
                total_quantity: summary.totalQuantity,
                total_amount: summary.totalAmount
            });
        });
    </script>
</div>
