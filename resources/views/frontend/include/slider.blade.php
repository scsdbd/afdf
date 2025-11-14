
<div id="myCarousel" class="carousel slide">
    <ol class="carousel-indicators">
        @foreach($slidersImages as $key => $eachImage)
            <li data-target="#myCarousel" data-slide-to="{{ $key }}" class="{{ $key == 0 ? 'active' : '' }}"></li>
        @endforeach
    </ol>
    <style>
        .carousel-inner ,img{
            height: 500px;
        }

    /* Wrapper for the image */
.item {
    position: relative;
    overflow: hidden;
}

/* Dark, cinematic image styling */
.carousel-inner img {
    display: block;
    width: 100%;
    height: auto;
    object-fit: cover;
    max-width: 100%;
    filter: grayscale(100%);
    transition: filter 0.4s ease;
    /* transition: transform 1s ease, filter 0.8s ease; */
}

/* Deep gradient overlay for richness */
.item::before {
    content: "";
    position: absolute;
    inset: 0;
    background: linear-gradient(
        to bottom,
        rgba(0, 0, 0, 0.3) 0%,
        rgba(0, 0, 0, 0.6) 50%,
        rgba(0, 0, 0, 0.85) 100%
    );
    z-index: 1;
}

/* Keep text above overlay */
.carousel-caption {
    position: absolute;
    z-index: 2;
}

.carousel-caption h2,p {
    color: #fff;
}

/* Optional subtle zoom for life */
.item.active img {
    transform: scale(1.05);
}


.carousel-item img {
  width: 100%;
  height: auto;          /* ✅ makes height scale with width */
  object-fit: cover;     /* ✅ keeps image cropped nicely */
}

/* Optional: make banner taller on large screens only */
@media (min-width: 768px) {
  .carousel-item img {
    height: 70vh;        /* ✅ 70% of viewport height for desktops */
  }
}

/* Optional smaller screens tweak */
@media (max-width: 767px) {
  .carousel-item img {
    height: auto;        /* ✅ natural image height on mobiles */
  }
}





/* ===== Carousel Text Styling ===== */
.carousel-caption {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    text-align: center;
    color: #fff;
    z-index: 2;
    text-shadow: #fff;
    animation: fadeInUp 1.2s ease forwards;
}

/* Title */
.carousel-caption h2 {
    font-size: 4rem;          /* Large for hero look */
    font-weight: 900;
    letter-spacing: 1px;
    margin-bottom: 15px;
    opacity: 0;
    transform: translateY(30px);
    animation: fadeUp 1.2s ease forwards 0.3s;
}

/* Subtitle */
.carousel-caption p {
    font-size: 2rem;
    font-weight: 400;
    color: #fff;
    margin-bottom: 30px;
    opacity: 0;
    transform: translateY(30px);
    animation: fadeUp 1.2s ease forwards 0.5s;
}

/* === Carousel Buttons Styling === */
.carousel-caption .btn {
    padding: 12px 32px;
    font-size: 1.1rem;
    border-radius: 30px;
    margin: 5px;
    text-transform: uppercase;
    font-weight: 600;
    transition: all 0.3s ease;
}

/* Learn More Button (Primary) */
.carousel-caption .btn-primary {
    background-color: #5bc1ac!important;
    border: none;
    color: #fff;
}
.carousel-caption .btn-primary:hover {
    background-color: #5bc1ac!important;
    color: #fff;
}

/* Contact Us Button (Light) */
.carousel-caption .btn-outline-light {
    background-color: #ffffff!important;
    color: black;
    border: none;
}
.carousel-caption .btn-outline-light:hover {
    background-color: #5bc1ac!important;
    color: #fff;
}


/* === Animations === */
@keyframes fadeInUp {
    0% {
        opacity: 0;
        transform: translate(-50%, -40%);
    }
    100% {
        opacity: 1;
        transform: translate(-50%, -50%);
    }
}

@keyframes fadeUp {
    0% {
        opacity: 0;
        transform: translateY(30px);
    }
    100% {
        opacity: 1;
        transform: translateY(0);
    }
}

/* === Responsive Adjustments === */
@media (max-width: 768px) {
    .carousel-caption h2 {
        font-size: 2.2rem;
    }
    .carousel-caption p {
        font-size: 1.1rem;
    }
}

@media (max-width: 480px) {
    .carousel-caption h2 {
        font-size: 1.8rem;
    }
    .carousel-caption p {
        font-size: 1rem;
    }
}


/* Optional overlay for better contrast */
.item {
    position: relative;
}

.item::before {
    content: "";
    position: absolute;
    inset: 0;
    background: rgba(0, 0, 0, 0.4);
}

/* Responsive text sizes */
@media (max-width: 768px) {
    .carousel-caption h2 {
        font-size: 2rem;
    }
    .carousel-caption p {
        font-size: 1rem;
    }
}

    </style>
    <div class="carousel-inner h-25" role="listbox">
        @foreach($slidersImages as $key => $eachImage)
            <div class="item {{ $key == 0 ? 'active' : '' }}" height="">
                <img src="{{ URL::asset('/slider/'.$eachImage->image) }}"  style="height:500px" >
                 <div class="carousel-caption">
                    <h2>Your Kindness Can Light Up a Life</h2>
                    <p>Every small contribution makes a big difference.</p>
                    <a href="{{route('donate.single')}}" class="btn btn-primary">Donate </a>
                    <a href="#" class="btn btn-primary btn-outline-light">Join us</a>
                </div>

            </div>
        @endforeach
    </div>
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
        <i class="fa fa-long-arrow-left glyphicon glyphicon-chevron-left" aria-hidden="true"></i>

        <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
        <i class="fa fa-long-arrow-right glyphicon glyphicon-chevron-left" aria-hidden="true"></i>
        {{-- <i class="fa fa-chevron-right" aria-hidden="true"></i> --}}
        <span class="sr-only">Next</span>
    </a>
</div>

<script>
  $(document).ready(function(){
      $("#myCarousel").carousel();

      $(".left").click(function(){
          $("#myCarousel").carousel("prev");
      });
      $(".right").click(function(){
          $("#myCarousel").carousel("next");
      });
  });
</script>



