
<!-- ====== CSS ====== -->
<style>
.campaign-section {
  background-color: #ffffff;
}

.campaign-img {
  object-fit: cover;
  height: 100%;
  width: 100%;
}

.btn-donate {
  background-color: #5bc1ac;
  transition: 0.3s ease;
  border: none;
}

.btn-donate:hover {
  background-color: #5a6f80;
}

.text-secondary {
  color: #5a6f80 !important;
}

/* Bootstrap 4 doesn’t include semi-bold */
.font-weight-semibold {
  font-weight: 600;
}
</style>


<!-- ====== Current Campaign Section ====== -->
<section class="campaign-section py-5">
  <div class="container">
    <div class="row align-items-center bg-white shadow rounded overflow-hidden">

      <!-- Left Image -->
      <div class="col-lg-6 p-0">
        <img src="https://images.unsplash.com/photo-1581578731548-c64695cc6952?auto=format&fit=crop&w=900&q=80"
             class="img-fluid campaign-img"
             alt="Flood Relief Campaign">
      </div>

      <!-- Right Content -->
      <div class="col-lg-6 p-5">
        <h6 class="text-uppercase font-weight-bold text-secondary mb-2">Current Campaign</h6>
        <h2 class="font-weight-bold text-dark mb-3">Help Rebuild Homes After the Flood</h2>
        <p class="text-muted mb-4">
          Together we can bring hope and stability to families who have lost everything.
          Your generous support helps provide shelter, food, and medical aid for those in need.
        </p>

        <!-- Progress Bar -->
        <div class="progress mb-3" style="height: 12px;">
          <div class="progress-bar" role="progressbar"
               style="width: 70%; background-color:#5bc1ac;"
               aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
        </div>

        <div class="d-flex justify-content-between mb-4">
          <span style="color: #5a6f80" class=" font-weight-semibold">Collected: <span class="text-success">$14,000</span></span>
          <span class="text-muted">Target: $20,000</span>
        </div>

        <!-- Donate Button -->
        <a href="{{route('donate.single')}}" class="btn btn-donate px-4 py-2 font-weight-semibold rounded-pill text-white">
          Donate Now
        </a>
      </div>
    </div>
  </div>
</section>
