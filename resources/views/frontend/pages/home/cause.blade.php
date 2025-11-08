<style type="text/css">
.card-img-top {
      width: 100%;
      height: 200px;
      object-fit: cover !important;
      object-position: center center;
      display: block;
    }
    .cause-card span{
        color: #597081;
    }
.donate-btn {
    background-color: #5bc1ac;  /* your color */
    color: #fff;
    border-radius: 0 0 12px 12px; /* only bottom-left and bottom-right */
    padding: 12px;                /* adjust height */
    font-weight: 600;
    text-align: center;
    display: block;               /* ensures full width */
}
.progress-text {
    display: flex;
    justify-content: space-between;

}
.card-body {
    margin:0;
    padding: 0;
}

</style>



<div class="container my-5">
  <div class="row">

    <!-- Cause 1 -->
    <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-4">
      <div class="card h-100 shadow-sm border-1 cause-card">
        <img   src="{{ asset('/images/shapes/vol_1.jpg') }}" class="card-img-top" alt="Education for All">
        <div class="card-body">
          <h5 class="card-title font-weight-bold">Education for All</h5>
          <p class="card-text text-muted small">
            Help provide school supplies and tuition for underprivileged children.
          </p>

          <!-- Progress Bar -->
          <div class="progress mb-2" style="height: 8px;">
            <div class="progress-bar bg-success" role="progressbar" style="width: 65%;" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
          </div>

          <!-- Donation Info -->
          <div class="w-100 d-flex justify-content-between progress-text" >
            <span>Raised: <strong>$6,500</strong></span>
            <span>Goal: <strong>$10,000</strong></span>
          </div>
            <a href="{{route('donate.single')}}" class="donate-btn " style="background-color:#597081;">Donate Now</a>
        </div>
      </div>
    </div>
    {{-- card 2  --}}

    <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-4">
      <div class="card h-100 shadow-sm border-1 cause-card">
        <img   src="{{ asset('/images/shapes/vol_1.jpg') }}" class="card-img-top" alt="Education for All">
        <div class="card-body">
          <h5 class="card-title font-weight-bold">Education for All</h5>
          <p class="card-text text-muted small">
            Help provide school supplies and tuition for underprivileged children.
          </p>

          <!-- Progress Bar -->
          <div class="progress mb-2" style="height: 8px;">
            <div class="progress-bar bg-success" role="progressbar" style="width: 65%;" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
          </div>

          <!-- Donation Info -->
        <div class="w-100 d-flex justify-content-between progress-text" >
            <span>Raised: <strong>$6,500</strong></span>
            <span>Goal: <strong>$10,000</strong></span>
          </div>
            <a href="#" class="donate-btn " style="background-color:#597081;">Donate Now</a>
        </div>
      </div>
    </div>

    {{-- card-3  --}}
    <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-4">
      <div class="card h-100 shadow-sm border-1 cause-card">
        <img   src="{{ asset('/images/shapes/vol_1.jpg') }}" class="card-img-top" alt="Education for All">
        <div class="card-body">
          <h5 class="card-title font-weight-bold">Education for All</h5>
          <p class="card-text text-muted small">
            Help provide school supplies and tuition for underprivileged children.
          </p>

          <!-- Progress Bar -->
          <div class="progress mb-2" style="height: 8px;">
            <div class="progress-bar bg-success" role="progressbar" style="width: 65%;" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
          </div>

          <!-- Donation Info -->
          <div class="w-100 d-flex justify-content-between progress-text" >
            <span>Raised: <strong>$6,500</strong></span>
            <span>Goal: <strong>$10,000</strong></span>
          </div>

                    <a href="#" class="donate-btn " style="background-color:#597081;">Donate Now</a>

        </div>
      </div>
    </div>

    {{-- card -4 --}}
    <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-4">
      <div class="card h-100 shadow-sm border-1 cause-card">
        <img   src="{{ asset('/images/shapes/vol_1.jpg') }}" class="card-img-top" alt="Education for All">
        <div class="card-body">
          <h5 class="card-title font-weight-bold">Education for All</h5>
          <p class="card-text text-muted small">
            Help provide school supplies and tuition for underprivileged children.
          </p>

          <!-- Progress Bar -->
          <div class="progress mb-2" style="height: 8px;">
            <div class="progress-bar bg-success" role="progressbar" style="width: 65%;" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
          </div>

          <!-- Donation Info -->
          <div class="w-100 d-flex justify-content-between progress-text" >
            <span>Raised: <strong>$6,500</strong></span>
            <span>Goal: <strong>$10,000</strong></span>
          </div>

          <a href="#" class="donate-btn " style="background-color:#597081;">Donate Now</a>
        </div>
      </div>
    </div>





  </div>
</div>
