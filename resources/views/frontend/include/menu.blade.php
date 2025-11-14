<style>
    /* Reset and Basic Styling */
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: 'System UI', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, 'Helvetica Neue', Arial, sans-serif;
    }

    body {
        background-color: #ffffff;
    }

    /* Navbar Styling */
    .navbar {
        /* background-color: rgb(9, 19, 43); */
        padding: 10px;
    }

    .navbar-container {
        display: flex;
        justify-content: space-between;
        align-items: center;
    }

    /* Logo Styling */
    .logo {
        color: #ffc000;
        font-size: 24px;
        font-weight: bold;
        display: flex;
        align-items: center;
    }

    /* Navigation Links Styling */
    .nav-links {
        display: flex;
        gap: 25px;
        background-color: #ffffff;
        padding: 10px 20px;
        border-radius: 25px;
        list-style: none;
    }

    .nav-links li {
        position: relative;
    }

    .nav-links a {
        text-decoration: none;
        color: #1d2a3a;
        font-size: 16px;
        font-weight: 500;
        display: flex;
        align-items: center;
    }

    .nav-links a::after {
        content: '';
        font-size: 12px;
        margin-left: 5px;
        transition: transform 0.3s;
    }

    /* Show arrow for items with submenus */
    .has-submenu > a::after {
        content: '▼';
        /* color: rgb(29, 42, 58); */
        display: inline;
    }

    /* Rotate arrow on hover */
    .nav-item:hover > a::after {
        transform: rotate(180deg);
    }

    /* Dropdown Menu */
    .dropdown-menu {
        display: none;
        position: absolute;
        padding: 2px;
        margin: 0px;
    }

    .nav-item:hover .dropdown-menu,
    .dropdown-menu:hover {
        display: block;
    }

    .dropdown-item {
        display: block;
    }

    .dropdown-item:hover {
        background-color: #ffffff;
    }

    /* Right Side Buttons */
    .nav-buttons {
        display: flex;
        align-items: center;
        gap: 20px;
    }
    .input-group .form-control:first-child, .input-group-addon:first-child, .input-group-btn:first-child>.btn, .input-group-btn:first-child>.btn-group>.btn, .input-group-btn:first-child>.dropdown-toggle, .input-group-btn:last-child>.btn-group:not(:last-child)>.btn, .input-group-btn:last-child>.btn:not(:last-child):not(.dropdown-toggle) {
    border-top-right-radius: -1px;
    border-bottom-right-radius: -1px;
}
    .btn-success {
        /* background-color: rgb(17, 183, 25); */
        border: none;
        padding: 10px 20px;
        border-radius: 20px;
        font-size: 14px;
        font-weight: bold;
        cursor: pointer;
        color: #f2f5f8;
    }

    .input-group {
        margin-left: 15px;
    }

    .form-control {
        height: 38px;
    }

    /* Modal Styling */
    .modal .form-control {
        height: 52px;
        border: 1px solid #d7dfea;
        color: #727272;
        width: 100%;
        margin: 0 auto 12px;
        font-size: 15px;
        border-radius: 120px;
        box-shadow: none;
    }

    @media (min-width: 768px) {
    /* Show Hamburger Icon on Mobile */
    .hamburger {
        display: none;

    }
}
@media (min-width: 768px) {
    .navbar {
        border-radius: 0px;
    }
}
    @media (max-width: 768px) {
    /* Show Hamburger Icon on Mobile */
    .hamburger {
        display: block;
        font-size: 24px;
        cursor: pointer;
        color: #ffc000;
    }

    /* Adjust the nav-links for overlay effect */
    .nav-links {
        display: none;
        flex-direction: column;
        gap: 0;
        position: absolute;
        top: 100%;
        left: 0;
        width: 100%;
        background-color: #ffffff;
        border-radius: 0;
        padding: 10px 20px;
        z-index: 10; /* Ensures the menu appears above other content */
    }

    /* Show nav links when toggled */
    .nav-links.active {
        display: flex;
    }

    /* Dropdown styling for mobile */
    .dropdown-menu {
        position: static;
        background-color: #ffffff;
    }

    .nav-buttons {
        display: none;
    }
    @media (max-width: 624px) {
    body {
        margin: 0px;
    }

    }
}
.navbar {
    position: relative;
    /* min-height: 50px; */
    margin-bottom: 0px;
    border: 1px solid transparent;
}
.modal .form-control {
    height: 52px;
    border: 1px solid #d7dfea;
    color: #727272;
    width: 70%;
    font-size: 15px;
    border-radius: 120px;
    box-shadow: none;
    margin-top: 50px;
}
@media (min-width: 768px) {
        .contact-info {
        display: none;
    }
}
</style>

<nav class="navbar fixed">
    @php
    $footers = App\Models\contactUs::all();
@endphp
    @foreach ($footers as $footer)
    <div class="contact-info">
      <p class="text-white"><i class="fa-solid fa-square-phone"></i> Phone: {{ $footer->phone }}</p>


  </div>
    <div class="navbar-container sticky-top">
        <!-- Logo -->
        <div class="logo">
            <a class="navbar-brand" href="{{ url('/') }}" style="margin: 15px; padding: 0;">
                <img style="height: 50px;" class="img-responsive" src="{{ URL::to('/') }}/admin_assets/logo/ability-for-disability-fund.png" alt="">
            </a>
        </div>

        @endforeach
        <div class="hamburger" id="hamburger">&#9776;</div>

        <!-- Navigation Links -->
        <ul class="nav-links " id="navLinks">
            <li><a href="{{ url('/') }}">HOME</a></li>
            <li class="nav-item has-submenu">
                <a href="#" class="dropdown-toggle">ABOUT</a>
                <ul class="dropdown-menu">
                    @foreach (App\Models\Category::where('type', 'About')->get() as $anoutmenu)
                    {{-- <li>
                        <a class="dropdown-item" href="{{'/view_aboutepage/'.$anoutmenu->id}}#about-container">{{$anoutmenu->title}}</a>

                    </li> --}}
                    @endforeach
                    <li>
                        <a class="dropdown-item" href="{{'/view_aboutepage/'.$anoutmenu->id}}#about-container">Who We Are ?</a>
                    </li>
                    <li>
                        <a class="dropdown-item" href="{{'/view_aboutepage/'.$anoutmenu->id}}#whydonate-container">Why Donate?</a>
                    </li>
                    <li>
                        <a class="dropdown-item" href="{{'/view_aboutepage/'.$anoutmenu->id}}#useofdonation-container">Use Of Funds</a>
                    </li>
                    <li>
                        <a class="dropdown-item" href="{{'/view_aboutepage/'.$anoutmenu->id}}#whydonate-container">Why Donate?</a>
                    </li>
                    <li>
                        <a class="dropdown-item" href="{{'/view_aboutepage/'.$anoutmenu->id}}#howtodonate-container">How To Donate?</a>
                    </li>

                    {{-- @foreach (App\Models\Category::where('type', 'Committee')->get() as $committeemenu)
                    <li>
                        <a class="dropdown-item" href="{{ '/view_committeepage/' . $committeemenu->id }}">{{ $committeemenu->title }}</a>
                    </li>
                    @endforeach --}}
                </ul>
            </li>
            <li class="nav-item has-submenu">
                <a href="#" class="dropdown-toggle">ACTIVITIES</a>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="{{ url('/event') }}">Events</a></li>
                    <li><a class="dropdown-item" href="{{ url('/champaign') }}">Campaign</a></li>
                    <li><a class="dropdown-item" href="{{ url('/project') }}">Projects</a></li>
                </ul>
            </li>
            <li class="nav-item has-submenu">
                <a href="#" class="dropdown-toggle">INVOLVED</a>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="{{ url('/volunteer') }}">Join as a Volunteer</a></li>
                    <li><a class="dropdown-item" href="{{ url('/signin') }}">Join as a Donor</a></li>
                </ul>
            </li>
            <li class="nav-item has-submenu">
                <a href="#" class="dropdown-toggle">MEDIA</a>
                <ul class="dropdown-menu">
                    <li><a href="{{ url('/news') }}">News</a></li>
                    <li><a href="{{ url('/All-Gallery') }}">Gallery</a></li>
                    <li><a href="/All-Video">Video</a></li>
                </ul>
            </li>
            <li><a href="{{ Route('donate.index') }}">DONATE</a></li>
            <li><a href="{{ url('/Contact-Us') }}">CONTACT</a></li>
        </ul>

        <!-- Right Side Buttons -->
        <div class="nav-buttons ml-3">
            <button style="background-color: #5bc1ac" class="btn text-white rounded-pill" data-toggle="modal" data-target="#searchModal">
                <i class="fa fa-search" style="color:#fff"></i> <!-- Search icon -->
            </button>
            <a  href="{{ Route('sponsor_child') }}">
                <button style="background-color: #5bc1ac" class="btn  text-white rounded-pill text-uppercase fw-bold">Sponsor a Child</button>
            </a>
        </div>
    </div>
</nav>






<style>
    .input-group-append{
margin-left:250px;
    }
</style>
<!-- Search Modal -->
<div class="modal fade" id="searchModal" tabindex="-1" role="dialog" aria-labelledby="searchModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="searchModalLabel">Search</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body m-5 ">
                <form action="{{ route('search') }}" method="GET">
                    <div class="p-4">
                        <input type="text" class="form-control" name="query" placeholder="Search..." required>
                        <div class="input-group-append">
                            <button type="submit" class="btn btn-success">Search</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script>
    $(document).ready(function() {
        $('#hamburger').click(function() {
            $('.nav-links').toggleClass('active');
        });

        let timer;

        $('.nav-item.has-submenu').hover(function() {
            clearTimeout(timer);
            $(this).children('.dropdown-menu').stop(true, true).slideDown();
        }, function() {
            timer = setTimeout(() => {
                $(this).children('.dropdown-menu').stop(true, true).slideUp();
            }, 300);
        });
    });
</script>
