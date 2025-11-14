 <style>
    /* --- GLOBAL STYLES --- */
    * {
      box-sizing: border-box;
      margin: 0;
      padding: 0;
    }

    body {
      background-color: #ffffff;
      color: #597081;
    }

    /* --- SECTION WRAPPER --- */
    .aboutfund2-section {
      padding: 60px 15px;
    }

    .aboutfund2-container {
      max-width: 1100px;
      margin: 0 auto;
      display: flex;
      flex-wrap: wrap;
      align-items: center;
      justify-content: space-between;
      background: #fff;
      border-radius: 12px;
      /* box-shadow: 0 5px 20px rgba(0,0,0,0.08); */
      overflow: hidden;
    }

    /* --- LEFT CONTENT --- */
    .aboutfund2-left {
      flex: 1 1 50%;
      padding: 50px 40px;
    }

    .aboutfund2-title {
      color: #5bc1ac;
      font-size: 28px;
      font-weight: 600;
      margin-bottom: 20px;
    }

    .aboutfund2-desc {
      color: #5a6f80;
      line-height: 1.6;
      font-size: 16px;
      margin-bottom: 15px;
    }

    /* --- RIGHT IMAGE BOX --- */
    .aboutfund2-right {
      flex: 1 1 50%;
      display: flex;
      justify-content: center;
      align-items: center;
      padding: 30px;
    }

    .image-box {
      position: relative;
      display: inline-block;
      padding: 5px; /* space between image and L border */
    }

    .image-box img {
      width: 100%;
      max-width: 400px;
      border-radius: 10px;
      display: block;
      object-fit: cover;
    }

    /* --- L CORNERS --- */
    .l-corner {
      position: absolute;
      border-color: #5bc1ac;
      border-style: solid;
      width: 200px;  /* length of L arms */
      height: 200px; /* length of L arms */
    }

    .l-corner.top-left {
      top: 0;
      left: 0;
      border-width: 8px 0 0 8px;
      transform: translate(-20px, -20px); /* outward gap */
      border-top-left-radius: 8px;
    }

    .l-corner.bottom-right {
      bottom: 0;
      right: 0;
      border-width: 0 8px 8px 0;
      transform: translate(20px, 20px); /* outward gap */
      border-bottom-right-radius: 8px;
    }

    /* --- RESPONSIVE DESIGN --- */
    @media (max-width: 768px) {
      .aboutfund2-container {
        flex-direction: column-reverse;
        text-align: center;
      }

      .aboutfund2-left,
      .aboutfund2-right {
        flex: 1 1 100%;
        padding: 25px;
      }

      .image-box {
        padding: 15px;
      }

      .l-corner {
        width: 180px;
        height: 180px;
      }

      .l-corner.top-left {
        transform: translate(-10px, -10px);
      }

      .l-corner.bottom-right {
        transform: translate(10px, 10px);
      }
    }
    .scroll-center {
    scroll-margin-top: 5vh !important;
}
  </style>


<!-- ✅ ABOUT FUND SECTION -->
  <section class="aboutfund2-section scroll-center" id="whydonate-container">
    <div class="aboutfund2-container">

      <!-- LEFT TEXT -->
      <div class="aboutfund2-left">
        <h2 class="aboutfund2-title">Why Donate ?</h2>
        <ul class="aboutfund2-desc">
          <li>Make a Real Impact – Your contribution helps provide essential resources, education, and support to those who need it most.</li>
          <li>Promote Inclusion & Equality – Every gift helps break barriers and create a more inclusive society.</li>
          <li>Transparency & Trust – Donations go directly to programs that change lives, with clear reporting.</li>
         <li>Be Part of Change – Even a small contribution helps build a better future for individuals and communities.</li>
          <li>Empower Communities – Donations fund programs that give people the tools and opportunities to thrive.</li>
        </ul>

      </div>

      <!-- RIGHT IMAGE -->
      <div class="aboutfund2-right">
        <div class="image-box">
          <img src="https://images.unsplash.com/photo-1556761175-4b46a572b786?w=900" alt="About Fund Image">
          <!-- Decorative L Shapes -->
          <span class="l-corner top-left"></span>
          <span class="l-corner bottom-right"></span>
        </div>
      </div>

    </div>
  </section>
