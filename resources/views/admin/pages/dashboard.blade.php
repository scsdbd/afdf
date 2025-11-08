@extends('admin.masterTemplate')

@section('main-content')
@php
    $volunteer = App\Models\Volunteer::all();
    $volunteerRequest = App\Models\VolunteerTerm::where('status', 'pending')->get();
    $donation = App\Models\Order::all();
    $sponsor = App\Models\Doante::all();
    $today = Carbon\Carbon::now();
    $todayTransaction = App\Models\Order::whereDate('created_at', $today)->get();
@endphp

<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h5 class="m-0 text-dark">DASHBOARD</h5>
                </div>
            </div>
        </div>
        <hr class="style18">
    </div>

    @if(Auth::user()->type == 1)
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 col-sm-6 col-md-3">
                    <div class="info-box">
                        <span class="info-box-icon bg-info elevation-1"><i class="fas fa-user-friends"></i></span>
                        <div class="info-box-content">
                            <span class="info-box-text">Volunteer</span>
                            <span class="info-box-number">{{ $volunteer->count() }}</span>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-3">
                    <div class="info-box mb-3">
                        <span class="info-box-icon bg-success elevation-1"><i class="fas fa-user-plus"></i></span>
                        <div class="info-box-content">
                            <span class="info-box-text">Volunteer Request</span>
                            <span class="info-box-number">{{ $volunteerRequest->count() }}</span>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-3">
                    <div class="info-box mb-3">
                        <span class="info-box-icon bg-danger elevation-1"><i class="fas fa-donate"></i></span>
                        <div class="info-box-content">
                            <span class="info-box-text">Total Donation</span>
                            <span class="info-box-number">{{ $donation->sum('amount') }} Tk</span>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-3">
                    <div class="info-box mb-3">
                        <span class="info-box-icon bg-warning elevation-1"><i class="fas fa-calendar-check"></i></span>
                        <div class="info-box-content">
                            <span class="info-box-text">Today's Donation</span>
                            <span class="info-box-number">{{ $todayTransaction->sum('amount') }} Tk</span>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-3">
                    <div class="info-box mb-3">
                        <span class="info-box-icon bg-fuchsia elevation-1"><i class="fas fa-gift"></i></span>
                        <div class="info-box-content">
                            <span class="info-box-text">Total Sponsor</span>
                            <span class="info-box-number">{{ $sponsor->count() }}</span>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    @elseif(Auth::user()->type == 2)
    <section class="content">
        <div class="container-fluid">
            <div class="ibox">
                <div class="i-head">
                    <h4 class="text-center text-bold">WELCOME TO ABILITY FOR DISABILITY FUND</h4>
                </div>
                <div class="i-body">
                    <div class="row justify-content-center text-center">
                        <div class="col-md-4">
                            <div class="card">
                                @if(Auth::user()->image == null)
                                    <img src="{{ asset('dummy.png') }}" class="card-img-top img-responsive rounded" style="height: 250px" alt="...">
                                @else
                                    <img src="{{ asset('/images/'. Auth::user()->image) }}" class="card-img-top img-responsive rounded" style="height: 250px" alt="...">
                                @endif
                                <div class="card-body">
                                    <h5 class="card-title text-bold">{{ Auth::user()->name ?? '' }}</h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-5">
                            <div class="card text-white bg-secondary mb-3" style="max-width: 25rem; text-align: center;">
                                <div class="card-header">TOTAL NUMBER OF DONATES</div>
                                <div class="text-center">
                                    <p>{{ $payment->count() }}</p>
                                </div>
                            </div>
                            <div class="card text-white bg-secondary mb-3" style="max-width: 25rem;">
                                <div class="card-header">TOTAL DONATED AMOUNT</div>
                                <div class="text-center">
                                    <p>{{ number_format($payment->sum('amount'), 2) }} TK</p>
                                </div>
                            </div>
                            <div class="card text-white bg-secondary mb-3" style="max-width: 25rem;">
                                <a class="btn btn-lg btn-primary" href="{{ url('Member-payment') }}">DONATE NOW</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @endif
</div>
@endsection
