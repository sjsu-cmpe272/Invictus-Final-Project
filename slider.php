<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Travelopedia</title>
</head>

<body>
<!---banner--->
<!----start-slider-script---->
			<script src="js/responsiveslides.min.js"></script>
			 <script>
			    // You can also use "$(window).load(function() {"
			    $(function () {
			      // Slideshow 4
			      $("#slider4").responsiveSlides({
			        auto: true,
			        pager: true,
			        nav: true,
			        speed: 500,
			        namespace: "callbacks",
			        before: function () {
			          $('.events').append("<li>before event fired.</li>");
			        },
			        after: function () {
			          $('.events').append("<li>after event fired.</li>");
			        }
			      });
			
			    });
			  </script>
			<!----//End-slider-script---->
			<!-- Slideshow 4 -->
			<div id="section-1" class="section">
			    <div id="top" class="callbacks_container">
			      <ul class="rslides" id="slider4">
			      <li>
			          <img src="images/sl5.jpg" alt="">
			          <div class="caption">
			          	<div class="header-info">
							<h1><a href="#">New York City Skyline</a></h1>
							<lable></lable>
							<h2><a href="#" style="color: black">THE CITY THAT NEVER SLEEPS</a></h2>
							</div>
			          </div>
			        </li>
			        <li>
			          <img src="images/grandcanyon.jpg" alt="">
			          <div class="caption">
			          	<div class="header-info">
							<h1><a href="#">Grand Canyon</a></h1>
							<lable></lable>
							<h2><a href="#" style="color: black">PRIDE OF ARIZONA</a></h2>
							</div>
			          </div>
			        </li>
			        <li>
			          <img src="images/sl1.jpg" alt="">
					  <div class="caption">
			     	  		<div class="header-info">
							<h2><a href="#">Get Away On This Weekend</a></h2>
							<lable></lable>
							<h1><a href="#">Beautiful Lake Tahoe</a></h1>
							</div>
			          </div>
			        </li>
			        <li>
			          <img src="images/sl2.jpg" alt="">
			        <div class="caption">
			          	<div class="header-info">
							<h2><a href="#" style="color: black">Have Fun On The Beach</a></h2>
							<lable></lable>
							<h1><a href="#">Santa Cruz Beach</a></h1>
							</div>
			          </div>
			        </li>
			       
					<li>
			          <img src="images/beach4.jpg" alt="">
			          <div class="caption">
			          	<div class="header-info">
							<h1><a href="#">Hawaiian Beach</a></h1>
							<lable></lable>
							<h2><a href="#" style="color: black">THE DESTINATION OF YOUR DREAMS</a></h2>
							</div>
			          </div>
			        </li>
			      </ul>
			    </div>	         
			    <div class="clearfix"> </div>
				</div>
		<!----- //End-slider---->
<!---banner--->	
</body>
</html>