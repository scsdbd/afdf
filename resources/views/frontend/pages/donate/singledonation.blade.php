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
        /* align-items: stretch; */
        background: #ffffff;
        border-radius: 10px;
        padding: 30px;
        /* max-width: 1190px; */
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
        /* width: 30%; */
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
        color: #333;
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
        /* margin-top: 20px; */
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
    /* button  */

.donate-btn {
  background-color: #5bc1ac;
  transition: 0.3s ease;
  border: none;
  color: #fff;
}

.donate-btn:hover {
  background-color: #5a6f80;

}
.donate-btn:hover a {
    color: #fff;
}
</style>

<div class="containers">
    <form action="{{ route('donation.confirm') }}" method="POST" id="donationForm">
        @csrf
        @include('frontend.pages.donate.donationamount')
        {{-- <div class="donation-section"> --}}
            <!-- Donation Amount Section -->


            {{-- <div class="divider"></div> --}}
            {{-- @include('frontend.pages.donate.donationgift') --}}

        {{-- </div> --}}
       <div class="donate-btn-wrapper">
            <button type="submit" class="donate-btn btn btn-success" style>Donate</button>
        </div>
    </form>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha384-KyZXEAg3QhqLMpG8r+Knujsl5+0G+SEiib2EBE7bY5N4E2W4r55y6b0gDbVgZxJ" crossorigin="anonymous"></script>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>



    </script>



</div>
@endsection
