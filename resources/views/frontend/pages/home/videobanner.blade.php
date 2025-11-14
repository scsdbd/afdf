<style>
/* video-banner background */
.video-banner {
  background: url('your-video-banner-image.jpg') center center/cover no-repeat;
  height: 50vh; /* short video-banner */
  display: flex;
  flex-direction: column; /* stack heading, subheading, button */
  align-items: center;
  justify-content: center;
  text-align: center;
  position: relative;
  overflow: hidden; /* prevent overflow */
}


/* Optional dark overlay */
.video-banner::before {
  content: "";
  position: absolute;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background: #597081;
  z-index: 0;
}

/* Text styles */
.heading {
  font-size: 50px;
  font-weight: 700;
  color: #ffffff;
  margin-bottom: 5px;
  position: relative;
  z-index: 1;

}

.subHeading {
  color: #ffffff;
  opacity: 0.8;
  margin-bottom: 20px;
  position: relative;
  z-index: 1;
}

/* Simple Play Button */
.btn-play {
  background-color: #5bc1ac;
  color: #fff;
  border: none;
  border-radius: 4px;
  padding: 10px 24px;
  font-size: 16px;
  font-weight: 600;
  text-transform: uppercase;
  position: relative;
  z-index: 1;
  transition: background-color 0.3s ease;
}

.btn-play:hover {
  background-color:#44525d;
  color: #fff;
  border: 1px solid secondary #fff;
}

/* Modal styling */
.videoModal .modal-dialog {
  max-width: 800px;
  margin: 30px auto;
}
.videoModal .modal-body {
  position: relative;
  padding: 0;
}
.videoModal .close {
  position: absolute;
  right: -30px;
  top: 0;
  font-size: 32px;
  color: #ffffff;
  font-weight: 300;
  opacity: 1;
  outline: none;
}
</style>

<!-- video-banner Section -->
<section class="video-banner">
  <div class="">
    <h1 class="heading">Empowering Abilities</h1>
    <h3 class="subHeading">Watch how your support makes a real difference.</h3>
    <button type="button"
            class="btn-play"
            data-toggle="modal"
            data-target="#videoModal"
            data-src="https://youtu.be/HH8aPBCW56w?si=ZQgPcebvNf5uodpM">
      <i class="fa fa-play" aria-hidden="true"></i>
    </button>
  </div>
</section>


<!-- Video modal -->
<div class="modal fade videoModal" id="videoModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
	    <div class="modal-content">
	      	<div class="modal-body">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
              <!-- 16:9 aspect ratio -->
              <div class="embed-responsive embed-responsive-16by9">
                <iframe width="560" height="315" src="https://www.youtube.com/embed/3LkmevzULK0?si=g4JeZNIaieYLB3Su" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
              </div>
	      	</div>
	    </div>
	</div>
</div>


<script>
    /****Video play script****/

	$(document).ready(function() {

		// Video source getting

		var $video_src;
		$('.video-btn').click(function() {
		    $video_src = $(this).data( "src" );
		});


		// Modal open
		$('#videoModal').on('shown.bs.modal', function (e) {

		// Video src set to autoplay and not to show related video.
		$("#video").attr('src',$video_src + "?rel=0&amp;showinfo=0&amp;modestbranding=1&amp;autoplay=1" );
		})
		// Modal closed and stoped video
		$('#videoModal').on('hide.bs.modal', function (e) {
		    $("#video").attr('src',$video_src);
		})
		// document ready
	});
</script>
