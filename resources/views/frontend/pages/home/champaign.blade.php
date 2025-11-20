
<div class="clearfix"></div>

{{-- <!-- Title Header Start -->
<section class="inner-header-title"
    style="background-image:url(https://user-images.githubusercontent.com/513929/53929982-e5497700-404c-11e9-8393-dece0b196c98.png);">
    <div class="container">
        <h1>Champaign</h1>
    </div>
</section> --}}
<div class="clearfix"></div>
<!-- Title Header End -->

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
.cause-section {
    margin-bottom: 20px;
}
</style>

<!-- ========== Begin: Brows job Category ===============  -->

<div class="cause-section">
    <h2 class="font-weight-bold text-dark text-center" style="margin: 30px 0">Our Causes</h2>


<div class="container my-5">

  <div class="row ">
    <!-- Cause 1 -->
    @foreach($projects as $project)
    <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-4">
      <div class="card h-100 shadow-sm border-1 cause-card">
         <img   src="{{ asset($project->image)}}"  class="card-img-top" alt="Education for All">
        <div class="card-body" style="padding: 0px;">
          <h5 class="card-title font-weight-bold">Education for All</h5>
          <p class="card-text small" style="color:#black">
            Help provide school supplies and tuition for underprivileged children. <a href="{{ route('champaign.show', ['slug' => $project->slug]) }}" class="" style="color:#5bc1ac">Read More »</a>
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
            <a href="{{route('donate.single')}}" class="donate-btn" style="background-color:#597081;">Donate Now</a>
        </div>
      </div>
    </div>
 @endforeach
  </div>
</div>
</div>

