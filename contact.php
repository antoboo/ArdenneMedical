<?php 
    
	$title = 'Contact';
	require_once 'includes/header.php';

?>

					
<div class="container">			

						<div  class="col-lg-4 contact mt-sm-30 mt-xs-30">
							<div class="headeing pb-20">
								<h2>Contact Info</h2>
								<span class="b-line l-left line-h"></span>
							</div>
							<div class="contact-info">

								<ul class="info">
									<li>
										<div class="icon ion-ios-location"></div>
										<div class="content">
											<p>
												
												7A Ardenne Road
												
											</p>
											<p>
												Jamaica, Kingston 20
											</p>
										</div>
									</li>

									<li>
										<div class="icon ion-android-call"></div>
										<div class="content">
											<p>
											<a href="tel:8762943710" onclick="ga('send', 'event', { eventCategory: 'Contact', eventAction: 'Call', eventLabel: 'Mobile Button'});"><p class="call-button">8762943710</p></a>
											</p>
											<p>
											<a href="tel:8763329320" onclick="ga('send', 'event', { eventCategory: 'Contact', eventAction: 'Call', eventLabel: 'Mobile Button'});"><p class="call-button">8763329320</p></a>
											</p>
										</div>
									</li>
									<li>
										<div class="icon ion-ios-email"></div>
										<div class="content">
											<p>
											<span> <a href="mailto:jamaica.medicalctr@gmail.com.com">jamaica.medicalctr@gmail.com</a> </span>
											</p>
											
										</div>
									</li>
								</ul>
								<ul class="event-social">
								<li>
								<a href="https://www.facebook.com/"><i class="fa fa-facebook" aria-hidden="true"></i></a>
							</li>
							<li>
								<a href="https://www.linkedin.com/"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
							</li>
							<li>
								<a href="https://twitter.com/login"><i class="fa fa-twitter" aria-hidden="true"></i></a>
							</li>
							<li>
								<a href="https://vimeo.com/join"><i class="fa fa-vimeo" aria-hidden="true"></i></a>
							</li>
								</ul>
							</div>
						</div>

					</div>
				</div>
				<!-- Map Section -->

			</section>
			<!-- Map -->
			<section class="map-box">
				<div class="map">
					<div id="map"></div>
				</div>
			</section>
			<!-- Contact Section -->
			<!--End Contact-->
</div>
		 

			<?php require_once 'includes/footer.php'  ?>