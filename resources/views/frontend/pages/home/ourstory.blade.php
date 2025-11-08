
<style>

/*---------------------------------------
  CUSTOM TEXT BOX
-----------------------------------------*/
.custom-text-box {
  background: var(--white-color);
  border-radius: var(--border-radius-medium);
  margin-bottom: 24px;
  padding: 40px;
}

.custom-text-box-image {
  border-radius: var(--border-radius-medium);
  width: 100%;
  height: 100%;
  object-fit: cover;
}

.custom-text-box-icon {
  background: var(--section-bg-color);
  border-radius: var(--border-radius-large);
  color: var(--secondary-color);
  font-size: var(--h6-font-size);
  text-align: center;
  display: inline-block;
  vertical-align: middle;
  width: 25px;
  height: 25px;
  line-height: 30px;
}

</style>

<section class="section-padding section-bg" id="section_2">
            <div class="container">
                <div class="row" >

                    <div class="col-lg-6 col-12 mb-5 mb-lg-0" style="">
                        <img  src="{{ asset('/images/shapes/vol_1.jpg') }}"
                            class="custom-text-box-image img-fluid" alt="" style="">
                    </div>

                    <div class="col-lg-6 col-12">
                        <div class="custom-text-box" style="">
                            <h2 class="mb-2">Our Story</h2>
                            <p style="color: #5a6f80">Ability For Disability, Non-Profit Organization</p>

                            <p class="mb-0" style="color: #5a6f80">Ability for Disability empowers people with disabilities, breaking barriers through education, healthcare, and awareness. We see ability where others see disability and celebrate every potential.</p>
                        </div>

                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-12">
                                <div class="custom-text-box mb-lg-0">
                                    <h5 class="mb-3">Our Mission</h5>
                                    <ul>
                                            <li>Inspire hope and possibility.</li>
                                            <li>Foster equality and inclusion.</li>
                                            <li>Create opportunities for growth.</li>
                                        </ul>

                                    {{-- <ul class="custom-list mt-2">
                                    <li class="custom-list-item d-flex">
                                            <i class="bi-check custom-text-box-icon me-2"></i>
                                            A world where disability is never a limitation.
                                        </li>

                                        <li class="custom-list-item d-flex">
                                            <i class="bi-check custom-text-box-icon me-2"></i>
                                        </li>
                                    </ul> --}}
                                </div>
                            </div>

                            <div class="col-lg-6 col-md-6 col-12">
                                <div class=" d-flex flex-wrap d-lg-block mb-lg-0">
                                    <div class="custom-text-box mb-lg-0">
                                    <h5 class="mb-3">Our Vision</h5>


                                        <ul style="color:#5a6f80">
                                            <li>A world where everyone is valued.</li>
                                            <li>Respectful & careful communities </li>
                                            <li>Empowerment and dignity</li>
                                        </ul>

                                </div>

                                    {{-- <div class="counter-thumb mt-4">
                                        <div class="d-flex">
                                            <span class="counter-number" data-from="1" data-to="120"
                                                data-speed="1000"></span>
                                            <span class="counter-number-text">B</span>
                                        </div>

                                        <span class="counter-text">Donations</span>
                                    </div> --}}
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
</section>



