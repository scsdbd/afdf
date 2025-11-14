<style type="text/css">

/*---------------------------------------
  ABOUT
-----------------------------------------*/
.about-section {
  background-repeat: no-repeat;
  background-position: center;
  background-size: cover;
}
.about-text {
    color: #597081;
}

.about-image {
  border-radius: var(--border-radius-medium);
  display: block;
  width: 350px;
  height: 400px;
  object-fit: cover;
}

.custom-text-block {
  padding: 60px 40px;
}

</style>


 <section class="about-section section-padding">
            <div class="container">
                <div class="row">

                    <div class="col-lg-6 col-md-5 col-12">

                        <img src="{{asset('images/champaign/masudrana.jpg')}}"
                            class="about-image ms-lg-auto bg-light shadow-lg img-fluid" alt="">
                    </div>
                    <div class="col-lg-5 col-md-7 col-12">
                        <div class="custom-text-block">
                            <h2 class="mb-0">Masud Rana</h2>

                            <p class="text-muted mb-lg-4 mb-md-4">Disabled Baby</p>

                            <p class="about-text">Masud Rana is a brave five-year-old boy living with a disability, but his smile and spirit never fade. With care and support, he’s learning, growing, and taking small steps every day. </p>

                            <p class="about-text">Thanks to your help, Masud now receives the care and therapy he needs. His progress and laughter remind us how kindness can truly change a child’s life.</p>

                            {{-- <ul class="social-icon mt-4">
                                <li class="social-icon-item">
                                    <a href="#" class="social-icon-link bi-twitter"></a>
                                </li>

                                <li class="social-icon-item">
                                    <a href="#" class="social-icon-link bi-facebook"></a>
                                </li>

                                <li class="social-icon-item">
                                    <a href="#" class="social-icon-link bi-instagram"></a>
                                </li>
                            </ul> --}}
                        </div>
                    </div>

                </div>
            </div>
        </section>
