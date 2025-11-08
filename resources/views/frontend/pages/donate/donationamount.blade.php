<style>
  .contribute-box{
    /* border: 2px solid #ddd; */
  /* border-radius: 12px; */
  /* box-shadow: 0 4px 15px rgba(0,0,0,0.1); */
  padding: 30px;
  /* margin-top: 30px; */
  /* margin-bottom: 30px; */
  background-color: #fff;
  transition: all 0.3s ease;
 width: 90%;            /* Take 90% of screen on small devices */
  max-width: 500px;      /* Don’t grow beyond 500px */
  min-width: 280px;
  }
  .outer-box {
    display: flex;
  justify-content: center;  /* Center horizontally */
  align-items: center;      /* Center vertically */
  height: 60vh;

  background-color: #ffffff
  }
  .donation-header h2{
   color: #5a6f80;
    letter-spacing: .8px;

  }
</style>

<div class="outer-box">


<div class=" contribute-box  donation-content row-cols-md-6   p-4 my-4 bg-white">
                <div class="donation-header">
                    <h2>Contribute To Disabled Babies</h2>
                </div>

                <div class="amount-input">
                    <input type="number" name="donation_amount" id="donationAmount" placeholder="Enter Amount" min="1" required >
                </div>

                <div class="amount-buttons">
                    <div class="amount-btn" data-value="500">500 BDT</div>
                    <div class="amount-btn rounded-pill active" data-value="2500">2500 BDT</div>
                    <div class="amount-btn" data-value="5000">5000 BDT</div>
                </div>
            </div>
</div>
