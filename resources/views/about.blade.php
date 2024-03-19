@extends('layouts.app')

@section('top-section')

<div class="ss_breadcrumb text-center">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <h1>About</h1>
                <ul>
                    <li><a href="home.html">Home</a><span> / About</span></li>
                </ul>
            </div>
        </div>
    </div>
</div>

@endsection

@section('content')

<section class="ss_about_main"> <!--===== Section Two Start =====-->
	<div class="container-fluid"> 
		<div class="row">
			<div class="col-lg-6">
				<div class="ss_about_img logo">
					<img class="img-fluid ss_about1" src="{{ asset('assets/images/ceo.jpeg')}}" alt="team"/>
					
				</div>
			</div>
			<div class="col-lg-6 align-self-center">
				<div class="ss_ab_right wow fadeIn" data-wow-delay="0.2s" data-wow-duration="1s">
					<h3>About us</h3>
					<!-- <h1>Our success which define us who we are</h1> -->
					<!-- <h2>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur</h2> -->
					<p style="    text-align: justify;
					line-height: 180%;
					color: #656a70;">Empowering a sustainable tomorrow, Glenix envisions leading the global charge in revolutionizing the energy landscape.
						<br>
						<br>
						 Guided by the visionary leadership of Santosh Bhemesetty, a British citizen with over 20 years of expertise spanning Pharma, Consumer Healthcare, Real Estate, Hospitality, and Renewable Energy sectors, we transcend borders, bringing cutting-edge renewable and sustainable energy innovations to diverse cultures.
						<br>
						<br>
						Leveraging his profound understanding of both Western and Indian cultures, we aspire to bridge worlds and create a future where clean, reliable renewable Solar and Wind products redefine energy norms. Our unwavering focus on Quality and Efficiency shapes every solution we offer, ensuring that Glenix becomes synonymous with trust and innovation globally.  
						<br>
						<br>
						Together, we illuminate the path to a brighter, greener planet for generations to come.</p>
					<h2 class="ss_name">Santosh Bhemesetty </h2>
					<p>CEO / Board Director</p>
					<!-- <img class="img-fluid pt-2" src="assets/images/ss_signature.png" alt="signature"/> -->
				</div>
			</div>
		</div>
	</div>
</section>

<!-- <section class="ss_team ss_section_sec_bg spacer_top spacer_bottom"> 
	<div class="container-fluid"> 
		<h3 class="ss_h3_center text-center">our experts</h3>
		<h1 class="text-center mb-5">Our special team</h1>
		<div class="row">
			<div class="col-xl-8 offset-xl-2 col-lg-12 offset-lg-0">
				<div class="row">
					<div class="col-lg-3 col-md-6 col-sm-6">
						<div class="team_main wow fadeIn" data-wow-delay="0.1s" data-wow-duration="1s">
							<img class="img-fluid" src="https://via.placeholder.com/259x270" alt="Image">
							<div class="team_info">
								<h2>Nancy Martin</h2>
								<p>Team Leader</p>
							</div>
							
						</div>
					</div>
					<div class="col-lg-3 col-md-6 col-sm-6">
						<div class="team_main wow fadeIn" data-wow-delay="0.2s" data-wow-duration="1s">
							<img class="img-fluid" src="https://via.placeholder.com/259x270" alt="Image">
							<div class="team_info">
								<h2>Johnsan Roy</h2>
								<p>Team Leader</p>
							</div>
							<ul class="social_share">
								<li>
									<a href="#">
										<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 310 310">
										<g>
											<path d="M81.703,165.106h33.981V305c0,2.762,2.238,5,5,5h57.616c2.762,0,5-2.238,5-5V165.765h39.064
												c2.54,0,4.677-1.906,4.967-4.429l5.933-51.502c0.163-1.417-0.286-2.836-1.234-3.899c-0.949-1.064-2.307-1.673-3.732-1.673h-44.996
												V71.978c0-9.732,5.24-14.667,15.576-14.667c1.473,0,29.42,0,29.42,0c2.762,0,5-2.239,5-5V5.037c0-2.762-2.238-5-5-5h-40.545
												C187.467,0.023,186.832,0,185.896,0c-7.035,0-31.488,1.381-50.804,19.151c-21.402,19.692-18.427,43.27-17.716,47.358v37.752H81.703
												c-2.762,0-5,2.238-5,5v50.844C76.703,162.867,78.941,165.106,81.703,165.106z"/>
										</g>
										</svg>
									</a>
								</li>
								<li>
									<a href="#">
										<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 310 310">
										<g>
											<path d="M297.917,64.645c-11.19-13.302-31.85-18.728-71.306-18.728H83.386c-40.359,0-61.369,5.776-72.517,19.938
												C0,79.663,0,100.008,0,128.166v53.669c0,54.551,12.896,82.248,83.386,82.248h143.226c34.216,0,53.176-4.788,65.442-16.527
												C304.633,235.518,310,215.863,310,181.835v-53.669C310,98.471,309.159,78.006,297.917,64.645z M199.021,162.41l-65.038,33.991
												c-1.454,0.76-3.044,1.137-4.632,1.137c-1.798,0-3.592-0.484-5.181-1.446c-2.992-1.813-4.819-5.056-4.819-8.554v-67.764
												c0-3.492,1.822-6.732,4.808-8.546c2.987-1.814,6.702-1.938,9.801-0.328l65.038,33.772c3.309,1.718,5.387,5.134,5.392,8.861
												C204.394,157.263,202.325,160.684,199.021,162.41z"/>
										</g>
										</svg>
									</a>
								</li>
								<li>
									<a href="#">
										<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 486.392 486.392">
											<g>
												<path d="M430.149,135.248C416.865,39.125,321.076-9.818,218.873,1.642
													C138.071,10.701,57.512,76.03,54.168,169.447c-2.037,57.029,14.136,99.801,68.399,111.84
													c23.499-41.586-7.569-50.676-12.433-80.802C90.222,77.367,252.16-6.718,336.975,79.313c58.732,59.583,20.033,242.77-74.57,223.71
													c-90.621-18.179,44.383-164.005-27.937-192.611c-58.793-23.286-90.013,71.135-62.137,118.072
													c-16.355,80.711-51.557,156.709-37.3,257.909c46.207-33.561,61.802-97.734,74.57-164.704
													c23.225,14.136,35.659,28.758,65.268,31.038C384.064,361.207,445.136,243.713,430.149,135.248z"/>
											</g>
										</svg>
									</a>
								</li>
							</ul>
						</div>
					</div>
					<div class="col-lg-3 col-md-6 col-sm-6">
						<div class="team_main wow fadeIn" data-wow-delay="0.3s" data-wow-duration="1s">
							<img class="img-fluid" src="https://via.placeholder.com/259x270" alt="Image">
							<div class="team_info">
								<h2>Nikki Rood</h2>
								<p>Team Leader</p>
							</div>
							<ul class="social_share">
								<li>
									<a href="#">
										<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 310 310">
										<g>
											<path d="M81.703,165.106h33.981V305c0,2.762,2.238,5,5,5h57.616c2.762,0,5-2.238,5-5V165.765h39.064
												c2.54,0,4.677-1.906,4.967-4.429l5.933-51.502c0.163-1.417-0.286-2.836-1.234-3.899c-0.949-1.064-2.307-1.673-3.732-1.673h-44.996
												V71.978c0-9.732,5.24-14.667,15.576-14.667c1.473,0,29.42,0,29.42,0c2.762,0,5-2.239,5-5V5.037c0-2.762-2.238-5-5-5h-40.545
												C187.467,0.023,186.832,0,185.896,0c-7.035,0-31.488,1.381-50.804,19.151c-21.402,19.692-18.427,43.27-17.716,47.358v37.752H81.703
												c-2.762,0-5,2.238-5,5v50.844C76.703,162.867,78.941,165.106,81.703,165.106z"/>
										</g>
										</svg>
									</a>
								</li>
								<li>
									<a href="#">
										<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 310 310">
										<g>
											<path d="M297.917,64.645c-11.19-13.302-31.85-18.728-71.306-18.728H83.386c-40.359,0-61.369,5.776-72.517,19.938
												C0,79.663,0,100.008,0,128.166v53.669c0,54.551,12.896,82.248,83.386,82.248h143.226c34.216,0,53.176-4.788,65.442-16.527
												C304.633,235.518,310,215.863,310,181.835v-53.669C310,98.471,309.159,78.006,297.917,64.645z M199.021,162.41l-65.038,33.991
												c-1.454,0.76-3.044,1.137-4.632,1.137c-1.798,0-3.592-0.484-5.181-1.446c-2.992-1.813-4.819-5.056-4.819-8.554v-67.764
												c0-3.492,1.822-6.732,4.808-8.546c2.987-1.814,6.702-1.938,9.801-0.328l65.038,33.772c3.309,1.718,5.387,5.134,5.392,8.861
												C204.394,157.263,202.325,160.684,199.021,162.41z"/>
										</g>
										</svg>
									</a>
								</li>
								<li>
									<a href="#">
										<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 486.392 486.392">
											<g>
												<path d="M430.149,135.248C416.865,39.125,321.076-9.818,218.873,1.642
													C138.071,10.701,57.512,76.03,54.168,169.447c-2.037,57.029,14.136,99.801,68.399,111.84
													c23.499-41.586-7.569-50.676-12.433-80.802C90.222,77.367,252.16-6.718,336.975,79.313c58.732,59.583,20.033,242.77-74.57,223.71
													c-90.621-18.179,44.383-164.005-27.937-192.611c-58.793-23.286-90.013,71.135-62.137,118.072
													c-16.355,80.711-51.557,156.709-37.3,257.909c46.207-33.561,61.802-97.734,74.57-164.704
													c23.225,14.136,35.659,28.758,65.268,31.038C384.064,361.207,445.136,243.713,430.149,135.248z"/>
											</g>
										</svg>
									</a>
								</li>
							</ul>
						</div>
					</div>
					<div class="col-lg-3 col-md-6 col-sm-6">
						<div class="team_main wow fadeIn" data-wow-delay="0.4s" data-wow-duration="1s">
							<img class="img-fluid" src="https://via.placeholder.com/259x270" alt="Image">
							<div class="team_info">
								<h2>John Doe</h2>
								<p>Team Leader</p>
							</div>
							<ul class="social_share">
								<li>
									<a href="#">
										<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 310 310">
										<g>
											<path d="M81.703,165.106h33.981V305c0,2.762,2.238,5,5,5h57.616c2.762,0,5-2.238,5-5V165.765h39.064
												c2.54,0,4.677-1.906,4.967-4.429l5.933-51.502c0.163-1.417-0.286-2.836-1.234-3.899c-0.949-1.064-2.307-1.673-3.732-1.673h-44.996
												V71.978c0-9.732,5.24-14.667,15.576-14.667c1.473,0,29.42,0,29.42,0c2.762,0,5-2.239,5-5V5.037c0-2.762-2.238-5-5-5h-40.545
												C187.467,0.023,186.832,0,185.896,0c-7.035,0-31.488,1.381-50.804,19.151c-21.402,19.692-18.427,43.27-17.716,47.358v37.752H81.703
												c-2.762,0-5,2.238-5,5v50.844C76.703,162.867,78.941,165.106,81.703,165.106z"/>
										</g>
										</svg>
									</a>
								</li>
								<li>
									<a href="#">
										<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 310 310">
										<g>
											<path d="M297.917,64.645c-11.19-13.302-31.85-18.728-71.306-18.728H83.386c-40.359,0-61.369,5.776-72.517,19.938
												C0,79.663,0,100.008,0,128.166v53.669c0,54.551,12.896,82.248,83.386,82.248h143.226c34.216,0,53.176-4.788,65.442-16.527
												C304.633,235.518,310,215.863,310,181.835v-53.669C310,98.471,309.159,78.006,297.917,64.645z M199.021,162.41l-65.038,33.991
												c-1.454,0.76-3.044,1.137-4.632,1.137c-1.798,0-3.592-0.484-5.181-1.446c-2.992-1.813-4.819-5.056-4.819-8.554v-67.764
												c0-3.492,1.822-6.732,4.808-8.546c2.987-1.814,6.702-1.938,9.801-0.328l65.038,33.772c3.309,1.718,5.387,5.134,5.392,8.861
												C204.394,157.263,202.325,160.684,199.021,162.41z"/>
										</g>
										</svg>
									</a>
								</li>
								<li>
									<a href="#">
										<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 486.392 486.392">
											<g>
												<path d="M430.149,135.248C416.865,39.125,321.076-9.818,218.873,1.642
													C138.071,10.701,57.512,76.03,54.168,169.447c-2.037,57.029,14.136,99.801,68.399,111.84
													c23.499-41.586-7.569-50.676-12.433-80.802C90.222,77.367,252.16-6.718,336.975,79.313c58.732,59.583,20.033,242.77-74.57,223.71
													c-90.621-18.179,44.383-164.005-27.937-192.611c-58.793-23.286-90.013,71.135-62.137,118.072
													c-16.355,80.711-51.557,156.709-37.3,257.909c46.207-33.561,61.802-97.734,74.57-164.704
													c23.225,14.136,35.659,28.758,65.268,31.038C384.064,361.207,445.136,243.713,430.149,135.248z"/>
											</g>
										</svg>
									</a>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section> -->


<section class="ss_about_sec_four"> <!--===== Section Five Start =====-->
	<div class="happy_clients">
		<h3 class="ss_h3_center text-center">Projects</h3>
		<h1 class="text-center">Our Achievements</h1>
	</div>
	<div class="ss_about_counter" id="counter">
		<div class="container">
			<div class="row">
				<div class="col-lg-3 col-md-6">
					<div class="counter_div text-center wow fadeIn" data-wow-delay="0.1s" data-wow-duration="1s">
						<img class="img-fluid" src="assets/images/svg/icon7.svg" alt="image" />
						<div class="ss_count counter-value" data-count="300">0</div>
						<h2>Projects</h2>
					</div>
				</div>
				<div class="col-lg-3 col-md-6">
					<div class="counter_div text-center wow fadeIn" data-wow-delay="0.2s" data-wow-duration="1s">
						<img class="img-fluid" src="assets/images/svg/icon8.svg" alt="image" />
						<div class="ss_count counter-value" data-count="406">0</div> 
						<h2>Suppliers</h2>
					</div>
				</div>
				<div class="col-lg-3 col-md-6">
					<div class="counter_div text-center wow fadeIn" data-wow-delay="0.3s" data-wow-duration="1s">
						<img class="img-fluid" src="assets/images/svg/icon9.svg" alt="image" />
						<div class="ss_count counter-value" data-count="981">0</div> 
						<h2>Happy Clients</h2>
					</div>
				</div>
				<div class="col-lg-3 col-md-6">
					<div class="counter_div text-center wow fadeIn" data-wow-delay="0.4s" data-wow-duration="1s">
						<img class="img-fluid" src="assets/images/svg/icon10.svg" alt="image" />
						<div class="ss_count counter-value" data-count="65">0</div> 
						<h2>Awards</h2>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!--===== Section Six Start =====-->
<section class="ss_about_sec_five ss_section_sec_bg spacer_top spacer_bottom ss_testimonial"> 
	<div class="container-fluid"> 
		<h3 class="ss_h3_center text-center">client feedback</h3>
		<h1 class="text-center mb-4">What client says</h1>
		<div class="swiper-container">
			<div class="swiper-wrapper">
				<div class="swiper-slide">
					<div class="row"> 
						<div class="col-xl-2 mt-4 offset-xl-3 col-lg-3 offset-lg-2 col-md-4 offset-md-0">	
							<div class="ss_testimonial_left wow fadeIn" data-wow-delay="0.1s" data-wow-duration="1s">	
								<p><img class="img-fluid" src="{{ asset('assets/images/user.png')}}" alt="image" /></p>
							</div>
						</div>
						<div class="col-xl-4 col-lg-5 mt-4 col-md-8">	
							<div class="ss_testimonial_right wow fadeIn" data-wow-delay="0.1s" data-wow-duration="1s">	
								<p>Choosing Glenix was the best decision for our commercial solar project. Their team's expertise and dedication ensured a smooth installation process and impressive energy efficiency.</p>
								<h1>Anand Gupta</h1>
								
							</div>
						</div>
					</div>
				</div>
				<div class="swiper-slide">
					<div class="row"> 
						<div class="col-xl-2 mt-4 offset-xl-3 col-lg-3 offset-lg-2 col-md-4 offset-md-0">	
							<div class="ss_testimonial_left">	
								<p><img class="img-fluid" src="{{ asset('assets/images/user.png')}}" alt="image" /></p>
							</div>
						</div>
						<div class="col-xl-4 col-lg-5 mt-4 col-md-8">	
							<div class="ss_testimonial_right">	
								<p>Glenix surpassed our expectations with their professionalism and quality products. Our rooftop solar plant has been a game-changer, and we appreciate their commitment to sustainable solutions.</p>
								<h1>Aparna Sharma</h1>
							
							</div>
						</div>
					</div>
				</div>
			</div>
		<div class="testimonial_nav">
			<div class="swiper-button-prev"></div>
			<div class="swiper-button-next"></div>
		</div>
		</div>
	</div>
</section>

@endsection