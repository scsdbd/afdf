@extends('frontend.masterTemp')

@section('front-main-content')
<style>
    .containers {
        display: flex;
        justify-content: center;
        padding: 60px 0;
        background: #ffffff;
    }

    .donation-section {
        display: flex;
        flex-direction: row;
        align-items: stretch;
        background: #ffffff;
        border-radius: 10px;
        padding: 30px;
        max-width: 1190px;
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.3);
        overflow: hidden;
    }
    @media (max-width: 767px) {
    .donation-section {
        flex-direction: column; /* Stack items vertically on small screens */
        align-items: center; /* Center items */
    }
    .gift-items {
        flex-direction: column; /* Stack items vertically on small screens */
    }

    }

    .donation-content, .gift-content {
        width: 70%;
    }

    .divider {
        width: 1px;
        background-color: #ddd;
        margin: 0 20px;
    }

    .donation-header {
        text-align: center;
        margin-bottom: 20px;

    }

    .donation-header h2 {
        font-size: 2em;
        color: #333;
        font-weight: bold;
    }

    .donation-header p {
        font-size: 1.1em;
        color: #666;
    }

    .amount-input {
        margin-bottom: 20px;
        text-align: center;
    }

    .amount-input input {
        width: 100%;
        padding: 15px;
        border-radius: 10px;
        border: 1px solid #ddd;
        font-size: 1.2em;
        color: #333;
    }

    .amount-buttons {
        display: flex;
        justify-content: center;
        gap: 15px;
        margin-bottom: 20px;
    }

    .amount-btn {
        background-color: #f1f1f1;
        border: 1px solid #ddd;
        border-radius: 50px;
        color: #5a6f80;
        padding: 10px 20px;
        border-radius: 10px;
        cursor: pointer;
        font-size: 1em;
        font-weight: bold;
        transition: background-color 0.3s ease;
    }

    .amount-btn.active,
    .amount-btn:hover {
        background-color: #00b894;
        color: #fff;
    }

    .donate-btn {
        background: #5a6f80;
        color: #fff;
        padding: 15px 30px;
        border: none;
        border-radius: 10px;
        cursor: pointer;
        font-size: 1.2em;
        font-weight: bold;
        transition: background 0.3s ease;
        width: 100%;
        max-width: 300px;
        margin: 0 auto;
    }

    .gift-items {
        display: flex;

        gap: 20px;
                        overflow-x: auto; /* Allow horizontal scrolling */

    }

    .gift-item {
        display: flex;
        flex-direction: column;
        align-items: center;
        background: #f1f1f1;
        border-radius: 10px;
        padding: 25px;
        border: 1px solid #ddd;
        position: relative; /* Add position relative for checkmark */
        transition: background 0.3s ease;
        text-align: center;
        cursor: pointer;
        width: 200px; /* Add pointer cursor for clickability */
    }

    .gift-item.selected {
        border: 2px solid #00b894; /* Change border color to indicate selection */
        background: #dfe6e9; /* Change background color when selected */
    }

    .checkmark {
        display: none; /* Initially hide the checkmark */
        color: #00b894; /* Set color for the checkmark */
        font-size: 1.5em; /* Adjust size as needed */
        position: absolute; /* Position it inside the gift item */
        top: 10px; /* Adjust positioning */
        right: 10px; /* Adjust positioning */
    }

    .gift-item.selected .checkmark {
        display: block; /* Show the checkmark when selected */
    }

    .gift-item img {
        max-width: 50px;
        margin-bottom: 15px;
    }

    .gift-item h5 {
        font-size: 1em;
        color: #333;
        margin: 0;
    }

    .gift-item p {
        font-size: 0.9em;
        color: #666;
    }

    .donate-btn-wrapper {
        display: flex;
        justify-content: center;
        margin-top: 20px;
        width: 100%;
        padding: 0 15px;
    }

    .form-group, form {
        width: auto;
    }

    .quantity-control {
        display: flex;
        align-items: center;
        gap: 5px;
    }

    .quantity-btn {
        background-color: #f1f1f1;
        border: 1px solid #ddd;
        border-radius: 5px;
        padding: 5px 10px;
        cursor: pointer;
        font-size: 1em;
    }

    /* button style  */


.btn-donate {
  background-color: #5bc1ac;
  transition: 0.3s ease;
  border: none;
}

.btn-donate:hover {
  background-color: #5a6f80;
  color:#ffffff;
}
.btn-wrapper{
    display: flex;
    justify-content: center;
    margin-top: 15px;
}
</style>

<div class="containers">
    <form action="{{ route('donation.confirm') }}" method="POST" id="donationForm">
        @csrf
        <div class="donation-section">
            <!-- Donation Amount Section -->
                @include('frontend.pages.donate.donationamount')

            <div class="divider"></div>
            @include('frontend.pages.donate.donationgift')

        </div>
        <div class="btn-wrapper">
           <a   href="{{route('donate.single')}}" class="btn btn-donate px-4 py-2 font-weight-semibold rounded-pill text-white">
          Donate Now
        </a>
        </div>
    </form>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha384-KyZXEAg3QhqLMpG8r+Knujsl5+0G+SEiib2EBE7bY5N4E2W4r55y6b0gDbVgZxJ" crossorigin="anonymous"></script>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
$(document).ready(function() {
    let baseAmount = 0; // This will hold the base amount from the clicked button

    // Handle amount button click
    $('.amount-btn').on('click', function() {
        baseAmount = parseFloat($(this).data('value')) || 0; // Get the base donation amount
        $('#donationAmount').val(baseAmount.toFixed(2)); // Set the donation amount input field
        $('.amount-btn').removeClass('active'); // Remove active class from all buttons
        $(this).addClass('active'); // Add active class to the clicked button
        updateTotalDonation(); // Update the total donation amount based on the new base amount
    });

    // Function to update the total donation amount
    function updateTotalDonation() {
        let totalAmount = baseAmount; // Start with the base amount

        // Loop through each selected gift item to add to the total
        $('.gift-item.selected').each(function() {
            var price = parseFloat($(this).data('price')) || 0; // Price of the selected gift item
            var $quantityInput = $(this).find('.gift-quantity'); // Quantity input for the gift item
            var currentQuantity = parseInt($quantityInput.val()) || 0; // Get current quantity

            // Only add to total if quantity is greater than 0
            if (currentQuantity > 0) {
                totalAmount += price * currentQuantity; // Update totalAmount
            }
        });

        // Update the donation amount input
        $('#donationAmount').val(totalAmount.toFixed(2)); // Update the input with the new total
    }

    // Click event for gift items
    $('.gift-item').on('click', function() {
        if (!$(this).hasClass('selected')) {
            $(this).addClass('selected'); // Toggle selected class on click
        }
        updateTotalDonation(); // Update the total whenever a gift item is selected or deselected
    });

    // Change event for quantity input
    $('.gift-quantity').on('input', function() {
        let $this = $(this);
        if ($this.val() === "") {
            $this.val(0); // Default to 0 if empty
        }
        updateTotalDonation(); // Update the total whenever the quantity changes
    });

    // Prevent quantity input from being changed when the item is selected
    $('.gift-quantity').on('focus', function() {
        let $parentGiftItem = $(this).closest('.gift-item');
        if ($parentGiftItem.hasClass('selected')) {
            $(this).blur(); // Lose focus if selected, preventing input change
        } else {
            $parentGiftItem.removeClass('selected'); // Deselect if quantity is clicked
            updateTotalDonation(); // Update the total donation
        }
    });

    // Event handlers for increment and decrement buttons
    $('.increment-btn').on('click', function() {
        let $input = $(this).siblings('.gift-quantity'); // Find the associated quantity input
        let currentVal = parseInt($input.val()) || 0; // Get the current value of the input
        if (!$input.closest('.gift-item').hasClass('selected')) {
            $input.val(currentVal + 1); // Increment the value only if not selected
            updateTotalDonation(); // Update the total donation
        }
    });

    $('.decrement-btn').on('click', function() {
        let $input = $(this).siblings('.gift-quantity'); // Find the associated quantity input
        let currentVal = parseInt($input.val()) || 0; // Get the current value of the input
        if (currentVal > 0 && !$input.closest('.gift-item').hasClass('selected')) {
            $input.val(currentVal - 1); // Decrement the value if it's greater than 0 and not selected
            updateTotalDonation(); // Update the total donation
        }
    });

    // Update donation amount immediately after blur to reflect accurate total
    $('.gift-quantity').on('blur', function() {
        updateTotalDonation(); // Recalculate the donation amount on blur
    });
});

</script>


    </script>



</div>
@endsection
