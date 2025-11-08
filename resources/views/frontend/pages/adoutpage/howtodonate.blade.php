<style>
    body {
      margin: 0;
      padding: 0;

    }

    .how-to-donate {

      padding: 60px 20px;
      text-align: center;
    }

    .how-to-donate h2 {
        font-size: 28px;
      font-weight: 600;
        color: #5bc1ac;
      margin-bottom: 15px;
    }

    .how-to-donate p {
  color: #5a6f80;
      font-size: 16px;
      margin-bottom: 40px;
    }

    .steps {
      display: flex;
      flex-wrap: wrap;
      justify-content: center;
      gap: 20px;
    }

    .step {
      background: #fff;
      padding: 30px 20px;
      border-radius: 10px;
      /* box-shadow: 0 5px 15px rgba(0,0,0,0.05); */
      flex: 1 1 250px;
      max-width: 300px;
      transition: transform 0.3s, box-shadow 0.3s;
    }

    .step:hover {
      transform: translateY(-5px);
      /* box-shadow: 0 10px 25px rgba(0,0,0,0.1); */
    }

    .step-icon {
      font-size: 3rem;
      margin-bottom: 15px;
      color: #28a745;
    }

    .step h3 {
      margin-bottom: 10px;
      font-size: 26px;
    }

    .step p {
      font-size: 13px;

    }

    .donate-btn {
      display: inline-block;
      margin-top: 40px;
      padding: 15px 30px;
      background-color: #28a745;
      color: #fff;
      font-size: 1.1rem;
      text-decoration: none;
      border-radius: 8px;
      transition: background-color 0.3s;
    }

    .donate-btn:hover {
      background-color: #218838;
    }

    /* Optional icons using Unicode */
    .icon-card:before { content: "\1F4B3"; }  /* 💳 */
    .icon-cause:before { content: "\1F3AF"; } /* 🎯 */
    .icon-confirm:before { content: "\2705"; } /* ✅ */
  </style>


 <section class="how-to-donate">
    <h2>How to Donate</h2>
    <p>Follow these simple steps to make a difference today.</p>

    <div class="steps">
      <!-- Step 1 -->
      <div class="step">
        <div class="step-icon icon-card"></div>
        <h3>Choose Method</h3>
        <p>Select online payment, bank transfer, or in-person donation.</p>
      </div>

      <!-- Step 2 -->
      <div class="step">
        <div class="step-icon icon-cause"></div>
        <h3>Select Cause</h3>
        <p>Pick a project or program you’d like your donation to support.</p>
      </div>

      <!-- Step 3 -->
      <div class="step">
        <div class="step-icon icon-confirm"></div>
        <h3>Confirm & Donate</h3>
        <p>Enter your details, confirm your donation, and receive a receipt.</p>
      </div>
    </div>

    <a href="/donate" class="donate-btn">Donate Now</a>
  </section>
