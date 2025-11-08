<!-- ====== CSS ====== -->
<style>
.recentNews {
  background-color: #ffffff;
}

.news-title {
  color: #5a6f80;
}

.news-card img {
  height: 220px;
  object-fit: cover;
  transition: transform 0.3s ease;
}

.news-card:hover img {
  transform: scale(1.05);
}

.news-date span {
  color: #5a6f80;
  font-size: 0.9rem;
  margin-right: 5px;
}

.news-date strong {
  color: #5bc1ac;
  font-size: 1rem;
}

.btn-news {
  background-color: #5bc1ac;
  transition: 0.3s ease;
  border: none;
  font-weight: 600;
}

.btn-news:hover {
  background-color: #5a6f80;
  color: #fff;
}
</style>

<!-- ====== Recent News Section ====== -->
<section class="recentNews py-5">
  <div class="container">
    <h2 class="news-title text-center mb-5 font-weight-bold text-dark">Recent News</h2>

    <div class="row">
      <!-- News Card 1 -->
      <div class="col-sm-6 col-md-4 mb-4">
        <div class="card news-card h-100 shadow-sm border-0">
          <img src="https://images.unsplash.com/photo-1542314831-068cd1dbfeeb?auto=format&fit=crop&w=800&q=80" class="card-img-top" alt="Flood Relief Volunteers">
          <div class="card-body">
            <div class="news-date mb-2">
              <span>March</span><strong>1</strong>
            </div>
            <h5 class="card-title">Local Volunteers Join Hands to Help Flood Victims</h5>
          </div>
        </div>
      </div>

      <!-- News Card 2 -->
      <div class="col-sm-6 col-md-4 mb-4">
        <div class="card news-card h-100 shadow-sm border-0">
          <img src="https://images.unsplash.com/photo-1526256262350-7da7584cf5eb?auto=format&fit=crop&w=800&q=80" class="card-img-top" alt="Donation Drive">
          <div class="card-body">
            <div class="news-date mb-2">
              <span>February</span><strong>27</strong>
            </div>
            <h5 class="card-title">Donation Drive Raises $10,000 for Children's Education</h5>
          </div>
        </div>
      </div>

      <!-- News Card 3 -->
      <div class="col-sm-6 col-md-4 mb-4">
        <div class="card news-card h-100 shadow-sm border-0">
          <img src="https://images.unsplash.com/photo-1556761175-4b46a572b786?auto=format&fit=crop&w=800&q=80" class="card-img-top" alt="Community Aid">
          <div class="card-body">
            <div class="news-date mb-2">
              <span>February</span><strong>25</strong>
            </div>
            <h5 class="card-title">Community Launches New Food Distribution Campaign</h5>
          </div>
        </div>
      </div>

      <!-- News Card 4 -->
      <div class="col-sm-6 col-md-4 mb-4">
        <div class="card news-card h-100 shadow-sm border-0">
          <img src="https://images.unsplash.com/photo-1509099836639-18ba1795216d?auto=format&fit=crop&w=800&q=80" class="card-img-top" alt="Medical Aid">
          <div class="card-body">
            <div class="news-date mb-2">
              <span>February</span><strong>23</strong>
            </div>
            <h5 class="card-title">Free Medical Aid Camp Held for Rural Communities</h5>
          </div>
        </div>
      </div>

      <!-- News Card 5 -->
      <div class="col-sm-6 col-md-4 mb-4">
        <div class="card news-card h-100 shadow-sm border-0">
          <img src="https://images.unsplash.com/photo-1603574670812-d24560880210?auto=format&fit=crop&w=800&q=80" class="card-img-top" alt="Charity Event">
          <div class="card-body">
            <div class="news-date mb-2">
              <span>February</span><strong>20</strong>
            </div>
            <h5 class="card-title">Annual Charity Gala Raises Awareness for Clean Water</h5>
          </div>
        </div>
      </div>

      <!-- News Card 6 -->
      <div class="col-sm-6 col-md-4 mb-4">
        <div class="card news-card h-100 shadow-sm border-0">
          <img src="https://images.unsplash.com/photo-1556761175-4b46a572b786?auto=format&fit=crop&w=800&q=80" class="card-img-top" alt="New Initiative">
          <div class="card-body">
            <div class="news-date mb-2">
              <span>February</span><strong>16</strong>
            </div>
            <h5 class="card-title">New Initiative Brings Technology to Rural Schools</h5>
          </div>
        </div>
      </div>
    </div>

    <!-- View All Button -->
    <div class="text-center mt-4">
      <a href="#" class="btn btn-news px-4 py-2 text-white rounded-pill">VIEW ALL NEWS</a>
    </div>
  </div>
</section>
