 <style>
     @media (max-width: 768px) {
         .btn-container {
             display: flex;
             flex-direction: column;
             gap:10px 0

         }
     }
     .cta-section {
        padding: 60px 0;
     }
 </style>

 <section class="cta-section section-padding section-bg">
     <div class="container">
         <div class="row justify-content-center align-items-center">

             <div class="col-lg-5 col-12 ms-auto">
                 <h2 class="mb-0">Make an impact. <br> Save lives.</h2>
             </div>

             <div class="col-lg-5 col-12 btn-container">
                 <a href="{{ route('donate.single') }}" class="btn1 me-4 mx-5 custom-btn btn "
                     style=" color:#fff;padding: 10px;background-color: #5bc1ac;border: 1px solid #5bc1ac">Make a
                     donation</a>

                 <a href="#section_4" class="btn2 custom-btn btn smoothscroll ">Become a volunteer</a>
             </div>

         </div>
     </div>
 </section>
