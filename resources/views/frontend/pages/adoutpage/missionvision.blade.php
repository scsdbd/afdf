
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

    /* --- LAYOUT --- */
    .aboutus-container {
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

    .aboutus-left {
      flex: 1 1 45%;
    }

    .aboutus-left img {
      width: 100%;
      height: 100%;
      object-fit: cover;
      display: block;
    }

    .aboutus-right {
      flex: 1 1 55%;
      padding: 40px 30px;
    }

    /* --- TEXT CONTENT --- */
    .aboutus-title {
      color: #5bc1ac;
      font-size: 28px;
      font-weight: 600;
      margin-bottom: 15px;
    }

    .aboutus-desc {
      color: #5a6f80;
      font-size: 16px;
      margin-bottom: 25px;
    }

    /* --- BUTTONS --- */
    .aboutus-buttons {
      display: flex;
      gap: 10px;
      margin-bottom: 15px;
      flex-wrap: wrap;
    }

    .aboutus-btn {
      background-color: #5a6f80;
      color: #fff;
      border: none;
      border-radius: 25px;
      padding: 8px 18px;
      cursor: pointer;
      font-size: 15px;
      transition: 0.3s;
    }

    .aboutus-btn.active,
    .aboutus-btn:hover {
      background-color: #5bc1ac;
    }

    /* --- TEXT BLOCKS --- */
    .aboutus-text {
      display: none;
      animation: fadeIn 0.4s ease-in-out;
    }

    .aboutus-text.active {
      display: block;
    }

    @keyframes fadeIn {
      from { opacity: 0; transform: translateY(5px); }
      to { opacity: 1; transform: translateY(0); }
    }

    /* --- RESPONSIVE --- */
    @media (max-width: 768px) {
      .aboutus-container {
        flex-direction: column;
      }

      .aboutus-right {
        padding: 25px;
      }
    }
  </style>


  <!-- ✅ ABOUT US SECTION -->
  <section class="aboutus-container">
    <!-- LEFT IMAGE -->
    <div class="aboutus-left">
      <img src="https://images.unsplash.com/photo-1556761175-4b46a572b786?w=900" alt="About Us">
    </div>

    <!-- RIGHT CONTENT -->
    <div class="aboutus-right">
      <h2 class="aboutus-title">About Our Organization</h2>
      <p class="aboutus-desc">
        We are a community-driven group dedicated to inclusion, empowerment, and sustainable growth.
      </p>

      <div class="aboutus-buttons">
        <button class="aboutus-btn active" data-target="about-text">About</button>
        <button class="aboutus-btn" data-target="mission-text">Mission</button>
        <button class="aboutus-btn" data-target="vision-text">Vision</button>
      </div>

      <div id="about-text" class="aboutus-text active">
        <p>We focus on creating opportunities that help people reach their full potential through education, awareness, and action.</p>
      </div>

      <div id="mission-text" class="aboutus-text">
        <p>Our mission is to build inclusive communities, empower individuals, and promote equal opportunities for all.</p>
      </div>

      <div id="vision-text" class="aboutus-text">
        <p>Our vision is a world where compassion, equality, and respect guide every action and decision.</p>
      </div>
    </div>
  </section>

  <!-- ✅ SIMPLE JS FOR BUTTON TOGGLE -->
  <script>
    const aboutButtons = document.querySelectorAll(".aboutus-btn");
    const aboutTexts = document.querySelectorAll(".aboutus-text");

    aboutButtons.forEach(btn => {
      btn.addEventListener("click", () => {
        // Toggle active button
        aboutButtons.forEach(b => b.classList.remove("active"));
        btn.classList.add("active");

        // Show related text
        aboutTexts.forEach(t => t.classList.remove("active"));
        document.getElementById(btn.getAttribute("data-target")).classList.add("active");
      });
    });
  </script>


