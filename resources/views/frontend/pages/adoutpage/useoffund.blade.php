
  <style>
    body {
      background-color: #ffffff;
      color: #597081;
    }

    .use-of-fund {
      display: flex;
      flex-wrap: wrap;
      align-items: center;
      justify-content: center;
      max-width: 1100px;
      margin: 60px auto;
      background: #fff;
      border-radius: 12px;
      /* box-shadow: 0 5px 20px rgba(0,0,0,0.1); */
      overflow: hidden;
    }

    .fund-text {
      flex: 1 1 400px;
      max-width: 600px;
    }

    .fund-text h2 {
       font-size: 28px;
      font-weight: 600;
        color: #5bc1ac;
      margin-bottom: 15px;
    }

    .fund-text p {
    color: #5a6f80;
      /* font-size: 26px; */
      margin-bottom: 25px;
    }

    .legend {
      margin-bottom: 20px;
    }

    .legend-item {
      display: flex;
      align-items: center;
      margin-bottom: 10px;
    }

    .legend-color {
      width: 20px;
      height: 20px;
      border-radius: 50%;
      display: inline-block;
      margin-right: 10px;
    }

    .fund-highlights {
      display: flex;
      flex-wrap: wrap;
      gap: 15px;
    }

    .highlight {
      background-color: #fff;
      padding: 15px 20px;
      border-radius: 8px;
      /* box-shadow: 0 5px 15px rgba(0,0,0,0.05); */
      flex: 1 1 120px;
      min-width: 120px;
      text-align: center;
    }

    .highlight h4 {
      margin: 0 0 5px 0;
      font-size: 36px;
      font-weight: 600;
      color: #28a745;
    }

    .highlight p {
      margin: 0;
      font-size:25px;
      color: #5a6f80;
    }

    .chart-container {
      flex: 1 1 300px;
      max-width: 500px;
      min-height: 300px;
      background-color: #fff;
      border-radius: 10px;
      /* box-shadow: 0 5px 15px rgba(0,0,0,0.05); */
      display: flex;
      align-items: center;
      justify-content: center;
      font-size: 15px;
        color: #5bc1ac;;
    }

    /* Responsive */
    @media (max-width: 900px) {
      .use-of-fund {
        flex-direction: column;
      }
    }
  </style>

<section class="use-of-fund">
  <!-- Left side text -->
  <div class="fund-text">
    <h2>How Your Donations Are Used</h2>
    <p>Every dollar you donate is carefully allocated to programs that make the biggest impact.</p>

    <div class="legend">
      <div class="legend-item"><span class="legend-color" style="background-color:#28a745"></span>Education – 40%</div>
      <div class="legend-item"><span class="legend-color" style="background-color:#17a2b8"></span>Health – 25%</div>
      <div class="legend-item"><span class="legend-color" style="background-color:#ffc107"></span>Infrastructure – 20%</div>
      <div class="legend-item"><span class="legend-color" style="background-color:#dc3545"></span>Admin – 15%</div>
    </div>

    <div class="fund-highlights">
      <div class="highlight">
        <h4>$50k </h4>
        <p>Education Programs   </p>
      </div>
      <div class="highlight">
        <h4>25</h4>
        <p>Projects Supported</p>
      </div>
      <div class="highlight">
        <h4>10%</h4>
        <p>Admin Costs</p>
      </div>
    </div>
  </div>

  <!-- Right side chart -->
  <div class="chart-container">
   @include('frontend.pages.adoutpage.donutchart')
  </div>
</section>


