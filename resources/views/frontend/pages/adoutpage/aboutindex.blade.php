@extends('frontend.masterTemp')

@section('fmenuname')
HOME
@endsection

@section('front-main-content')
<div class="clearfix"></div>



@include('frontend.pages.adoutpage.missionvision')
@include('frontend.pages.adoutpage.aboutafdf')
@include('frontend.pages.adoutpage.useoffund')
@include('frontend.pages.adoutpage.howtodonate')
@endsection
