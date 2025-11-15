@extends('frontend.masterTemp')

@section('front-main-content')
    <style>
        /* ───────────────────────────────
               MAIN WRAPPER
            ──────────────────────────────── */
        .containers {
            width: 100%;
            max-width: 500px;
            /* fixed max width */
            margin: auto;
            padding: 40px 15px;
            background: #ffffff;
            box-sizing: border-box;
        }

        /* ───────────────────────────────
               TAB BUTTONS
            ──────────────────────────────── */
        .donation-tabs {
            display: flex;
            gap: 10px;
            margin-bottom: 20px;
        }

        .donation-tab {
            flex: 1;
            text-align: center;
            padding: 12px 0;
            background: #eee;
            border-radius: 10px;
            border: 1px solid #ddd;
            font-weight: 600;
            cursor: pointer;
            transition: .2s;
        }

        .donation-tab.active {
            background: #5bc1ac;
            color: #fff;
        }

        /* ───────────────────────────────
               TAB CONTENT BOXES
            ──────────────────────────────── */
        .tab-box {
            display: none;
            width: 100%;
            min-height: 210px;
            /* ensures content box height is fixed */
            box-sizing: border-box;
        }

        .tab-box.show {
            display: block;
        }

        /* ───────────────────────────────
               DONATION BLOCK (AMOUNT)
            ──────────────────────────────── */
        .contribute-box {
            width: 100%;
            background: #fff;
            border-radius: 12px;
            /* padding: 25px; */
            box-shadow: 0 4px 10px rgba(0, 0, 0, .1);
            margin-top: 20px;
            box-sizing: border-box;
        }

        .amount-input input {
            width: 100%;
            padding: 14px;
            border-radius: 10px;
            border: 1px solid #ddd;
            font-size: 1.1em;
            box-sizing: border-box;
        }

        .amount-buttons {
            display: flex;
            gap: 10px;
            margin-top: 15px;
        }

        .amount-btn {
            flex: 1;
            text-align: center;
            padding: 12px 0;
            border-radius: 10px;
            border: 1px solid #ddd;
            font-weight: bold;
            background: #f1f1f1;
            cursor: pointer;
            transition: .2s;
        }

        .amount-btn.active {
            background: #00b894;
            color: #fff;
        }


        /* ───────────────────────────────
               DONATE BUTTON
            ──────────────────────────────── */
        .donate-btn-wrapper {
            optional for spacing */
        }

        .donate-btn-wrapper {
            width: 100%;
            display: flex;
            justify-content: center;
            padding: 0 15px;
        }

        .donate-btn {
            width: 100%;
            max-width: 340px;
            padding: 15px;
            font-size: 1.2em;
            border-radius: 12px;
            background: #5bc1ac;
            color: #fff;
            border: none;
            transition: .3s;
            cursor: pointer;
        }

        .donate-btn:hover {
            background: #5a6f80;
        }


        /* ───────────────────────────────
               RESPONSIVE FIXES
            ──────────────────────────────── */
        @media (max-width: 600px) {

            .amount-buttons {
                flex-direction: column;
            }

            .amount-btn {
                width: 100%;
            }



            .donation-tabs {
                flex-direction: column;
            }

            .donation-tab {
                width: 100%;
            }

        }
    </style>

    <div class="containers">

        <form action="{{ route('donation.confirm') }}" method="POST" id="donationForm">
            @csrf


            <div class="donation-tabs">
                <div class="donation-tab active" data-type="monthly">Monthly</div>
                <div class="donation-tab" data-type="onetime">One Time</div>
            </div>

            <div class="donation-tab-content">

                <!-- MONTHLY TAB -->
                @include('frontend.pages.donate.monthlydonation')

                <!-- ONE TIME TAB -->
                <div id="onetimeBox" class="tab-box">
                    @include('frontend.pages.donate.donationamount')
                </div>

            </div>
            {{-- <div class="donation-section"> --}}
            <!-- Donation Amount Section -->


            {{-- <div class="divider"></div> --}}
            {{-- @include('frontend.pages.donate.donationgift') --}}

            {{-- </div> --}}
            <div class="donate-btn-wrapper">
                <button type="submit" class="donate-btn btn btn-success" style>Donate</button>
            </div>
        </form>

        <script src="https://code.jquery.com/jquery-3.6.0.min.js"
            integrity="sha384-KyZXEAg3QhqLMpG8r+Knujsl5+0G+SEiib2EBE7bY5N4E2W4r55y6b0gDbVgZxJ" crossorigin="anonymous"></script>

        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>



        <script>
            $(document).ready(function() {
                const $buttons = $('.amount-btn');
                const $input = $('#donationAmount');

                $buttons.on('click', function() {
                    $buttons.removeClass('active'); // remove active from all
                    $(this).addClass('active'); // add active to clicked one
                    $input.val($(this).data('value')); // update input
                });
            });

            // donation tab
        </script>

        <script>
            $(document).ready(function() {


                //-----------------------------
                // TAB SWITCHING
                //-----------------------------
                $('.donation-tab').on('click', function() {
                    $('.donation-tab').removeClass('active');
                    $(this).addClass('active');

                    const type = $(this).data('type');

                    if (type === "monthly") {
                        $('#monthlyBox').addClass('show');
                        $('#onetimeBox').removeClass('show');
                    } else {
                        $('#onetimeBox').addClass('show');
                        $('#monthlyBox').removeClass('show');
                    }
                });


                //-----------------------------
                // MONTHLY BUTTON SELECT
                //-----------------------------
                const $monthlyBtns = $('.monthly-btn');
                const $monthlyInput = $('#monthlyAmount');

                $monthlyBtns.on('click', function() {
                    $monthlyBtns.removeClass('active');
                    $(this).addClass('active');
                    $monthlyInput.val($(this).data('value'));
                });

            });
        </script>



    </div>
@endsection
