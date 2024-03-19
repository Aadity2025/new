@extends('layouts.app')

@section('top-section')

<div class="bg-video-wrap">
    <video src="https://glenix.b-cdn.net/main.mp4" loop muted autoplay>
    </video>
    <!-- <div class="overlay">
    </div> -->

    <div class="mainHeading">
        <h1 style="color: white;">Switch to Solar!! 
            <span>It is the smartest and safest thing you could do</span></h1>
        <a href="#secondSection"  class="white_btn">Get Started</a>
    </div>
</div>

@endsection

@section('content')

<!--===== Section Two Start =====-->
<section id="secondSection" class="ss_section_two spacer_top"> 
	<div class="container-fluid">
		<div class="ss_two"> 
			<div class="row">
				<div class="col-lg-3 col-md-6 col-sm-6">
					<div class="ss_two_sec wow fadeIn" data-wow-delay="0.1s">
						<img class="img-fluid" src="assets/images/svg/icon1.svg" alt="image"/>
						<h2>Solar Plates</h2>
						<p>Illuminate your life sustainably with Glenix's solar plates, converting sunlight into clean, efficient energy.</p>
					</div>
				</div>
				<div class="col-lg-3 col-md-6 col-sm-6">
					<div class="ss_two_sec wow fadeIn" data-wow-delay="0.2s">
						<img class="img-fluid" src="assets/images/svg/icon2.svg" alt="image"/>
						<h2>Solar Water Heater</h2>
						<p>Eco-friendly warmth, courtesy of Glenix's solar water heaters—effortlessly harnessing the sun's energy for sustainable hot water solutions.</p>
					</div>
				</div>
				<div class="col-lg-3 col-md-6 col-sm-6">
					<div class="ss_two_sec wow fadeIn" data-wow-delay="0.3s">
						<img class="img-fluid" src="assets/images/svg/icon3.svg" alt="image"/>
						<h2>PV Solar Panel</h2>
						<p>Unleash the power of the sun with Glenix's PV solar panels—efficiency meets sustainability for a brighter, cleaner energy future.</p>
					</div>
				</div>
				<div class="col-lg-3 col-md-6 col-sm-6">
					<div class="ss_two_sec wow fadeIn" data-wow-delay="0.4s">
						<img class="img-fluid" src="assets/images/svg/icon4.svg" alt="image"/>
						<h2>Wind turbines</h2>
						<p>Harvest the wind's energy with Glenix's wind turbines—powering a sustainable tomorrow with efficient and environmentally friendly solutions</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</section> 
<!--===== Section Two End =====-->

<!--===== Section Three Start =====-->
<section class="ss_section_three spacer_bottom"> 
	<div class="container-fluid"> 
		<div class="row">
			<div class="col-lg-6">
				<div class="ss_three_left wow fadeIn">
					<img class="img-fluid" src="https://glenix.b-cdn.net/service.png" alt="image"/>
				</div>
			</div>
			<div class="col-lg-6 align-self-center">
				<div class="ss_three_right wow fadeIn">
					<h3>best service</h3>
					<h1>We provide reliable services</h1>
					<p style="text-align: justify;">Glenix solar components ensure efficiency and better power generation with a warranty of up to 25 years. Our specialization lies in providing end to end solutions for Roof Top On-grid and Off-grid Solar plants.</p>
					<p style="text-align: justify;" class="pb-4"> We proudly offer an in-house MADE IN INDIA<span> <img height="20px" src="https://glenix.b-cdn.net/indianFlag.png"/> </span>product range, ensuring quality and innovation in every component. With a dedicated focus on excellence, we cater to Residentail, Commercial and Industrial Solar Plant Projects, contributing to a renewable sustainable and energy-efficient future.</p>
					<p style="text-align: justify;" >Choose Glenix for unparalleled service and cutting-edge green energy solutions that redefine industry standards.</p>
					<!-- <a href="service.html" class="ss_btn">Know More</a> -->
				</div>
			</div>
		</div>
		<div class="ss_shape_one">
			<div class="ss_shape"></div>
		</div>
		<div class="ss_shape_dot"></div>
	</div>
</section>
<!--===== Section Three End =====-->

<!--===== Section Five Start =====-->
<section class="ss_section_five ss_section_sec_bg spacer_top spacer_bottom"> 
	<div class="container-fluid"> 
		<h3 class="ss_h3_center text-center">easy to use</h3>
		<h1 class="text-center mb-5">It's safe compared to electricity</h1>
		<div class="row"> 
			<div class="col-xl-4 col-lg-6">
				<div class="ss_four_left">
					<div class="ss_box_bg wow fadeIn" data-wow-delay="0.1s" data-wow-duration="1s">
						<div class="row">
							<div class="col-3">
								<div class="ss_four_one">
									<img class="img-fluid" src="assets/images/svg/icon1.svg" alt="image"/>
								</div>
							</div>
							<div class="col-9">
								<div class="ss_four_two">
									<h2>Solar Plates</h2>
									<p>Glenix solar plates: Harnessing sunlight to power a sustainable and brighter tomorrow.</p>
								</div>
							</div>
						</div>
					</div>
					<div class="ss_box_bg mt-4 wow fadeIn" data-wow-delay="0.1s" data-wow-duration="1s">
						<div class="row">
							<div class="col-3">
								<div class="ss_four_one">
									<img class="img-fluid" src="assets/images/svg/icon2.svg" alt="image"/>
								</div>
							</div>
							<div class="col-9">
								<div class="ss_four_two">
									<h2>Solar Water Heater</h2>
									<p>Glenix's solar water heaters: Effortlessly providing eco-friendly warmth with the power of the sun.</p>
								</div>
							</div>
						</div>
					</div>
					<div class="ss_box_bg mt-4 wow fadeIn" data-wow-delay="0.1s" data-wow-duration="1s">
						<div class="row">
							<div class="col-3">
								<div class="ss_four_one">
									<img class="img-fluid" src="assets/images/svg/icon4.svg" alt="image"/>
								</div>
							</div>
							<div class="col-9">
								<div class="ss_four_two">
									<h2>Solar Wind</h2>
									<p>Glenix's wind turbines: Capturing the energy of the breeze to drive sustainable power solutions for a greener future.</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-xl-4 col-lg-6 order-xl-last mt-lg-0 mt-md-4">
				<div class="ss_four_left">
					<div class="ss_box_bg wow fadeIn" data-wow-delay="0.3s" data-wow-duration="1s">
						<div class="row">
							<div class="col-3">
								<div class="ss_four_one">
									<img class="img-fluid" src="assets/images/svg/icon3.svg" alt="image"/>
								</div>
							</div>
							<div class="col-9">
								<div class="ss_four_two">
									<h2>Pv Solar Panel</h2>
									<p>Glenix's PV solar panels: Harnessing sunlight for a greener tomorrow with cutting-edge efficiency and sustainability</p>
								</div>
							</div>
						</div>
					</div>
					<div class="ss_box_bg mt-4 wow fadeIn" data-wow-delay="0.3s" data-wow-duration="1s">
						<div class="row">
							<div class="col-3">
								<div class="ss_four_one">
									<img class="img-fluid" src="assets/images/svg/icon5.svg" alt="image"/>
								</div>
							</div>
							<div class="col-9">
								<div class="ss_four_two">
									<h2>Solar Energy</h2>
									<p>Solar energy by Glenix: Empowering a cleaner, sustainable future with the boundless power of the sun.</p>
								</div>
							</div>
						</div>
					</div>
					<div class="ss_box_bg mt-4 wow fadeIn" data-wow-delay="0.3s" data-wow-duration="1s">
						<div class="row">
							<div class="col-3">
								<div class="ss_four_one">
									<img class="img-fluid" src="assets/images/svg/icon6.svg" alt="image"/>
								</div>
							</div>
							<div class="col-9">
								<div class="ss_four_two">
									<h2>Solar System</h2>
									<p>Glenix's solar systems: Unleashing the sun's energy to illuminate homes and businesses with sustainable and efficient power solutions</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-xl-4 offset-xl-0 col-lg-6 offset-lg-3">
				<div class="ss_easy_use wow zoomIn" data-wow-delay="0.2s" data-wow-duration="1s">
					<img class="img-fluid" src="https://glenix.b-cdn.net/bot.png" alt="image"/>
				</div>
			</div>
		</div>
	</div>
</section>
<!--===== Section Five End =====-->


<!--===== Section Four Start =====-->
<section class="ss_section_four spacer_top spacer_bottom"> 
	<div class="container-fluid"> 
		<div class="row">
			<div class="col-lg-6 align-self-center">
				<div class="ss_five_right wow fadeIn">
					<h3>product demo</h3>
					<h1>Best Energy Solutions for all your needs</h1>
					<p>At Glenix, our commitment is to bring the best solar solutions to your doorstep, tailored specifically for your home. </p>
					<p class="pb-4">We understand the significance of sustainable energy, and our dedicated team is here to guide you through the process of selecting and installing the optimal solar panel system. From maximizing energy efficiency to ensuring a seamless integration with your home, we prioritize excellence in every aspect. Trust Glenix to illuminate your home with the power of clean, renewable energy, and embark on a journey towards a greener and more sustainable future.</p>
					<!-- <a href="shop.html" class="ss_btn">Purchase Now</a> -->
				</div>
			</div>
			<div class="col-lg-6 align-self-center">
				<div class="ss_four_right wow fadeIn">
					<img class="img-fluid ss_four_shadow" src="https://glenix.b-cdn.net/productDemo.png" alt="image" />
				</div>
			</div>
		</div>
		<div class="ss_shape_two">
			<div class="ss_shape"></div>
		</div>
		<div class="ss_shape_three">
			<div class="ss_shape"></div>
		</div>
	</div>
</section>
<!--===== Section Four End =====-->


<!--===== Section Six Start =====-->

<!-- <section class="ss_section_six ss_section_sec_bg spacer_top spacer_bottom"> 
	<div class="container-fluid"> 
		<h3 class="ss_h3_center text-center">new products</h3>
		<h1 class="text-center mb-5">Top rated products</h1>
		<div class="row"> 
			<div class="col-lg-3 col-md-6 col-sm-6">
				<div class="ss_six_product wow fadeIn" data-wow-delay="0.1s" data-wow-duration="2s">
					<div class="ss_six_p_img ss_box_bg">
						<img class="img-fluid" src="https://via.placeholder.com/353x313" alt="image"/>
					</div>	
					<div class="ss_product_content ss_box_bg">
						<ul>
							<li>
								<a href="#">
									<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 435.104 435.104">
										<g>
											<circle cx="154.112" cy="377.684" r="52.736"/>
											<path d="M323.072,324.436L323.072,324.436c-29.267-2.88-55.327,18.51-58.207,47.777c-2.88,29.267,18.51,55.327,47.777,58.207
												c3.468,0.341,6.962,0.341,10.43,0c29.267-2.88,50.657-28.94,47.777-58.207C368.361,346.928,348.356,326.924,323.072,324.436z"/>
											<path d="M431.616,123.732c-2.62-3.923-7.059-6.239-11.776-6.144h-58.368v-1.024C361.476,54.637,311.278,4.432,249.351,4.428
												C187.425,4.424,137.22,54.622,137.216,116.549c0,0.005,0,0.01,0,0.015v1.024h-43.52L78.848,50.004
												C77.199,43.129,71.07,38.268,64,38.228H0v30.72h51.712l47.616,218.624c1.257,7.188,7.552,12.397,14.848,12.288h267.776
												c7.07-0.041,13.198-4.901,14.848-11.776l37.888-151.552C435.799,132.019,434.654,127.248,431.616,123.732z M249.344,197.972
												c-44.96,0-81.408-36.448-81.408-81.408s36.448-81.408,81.408-81.408s81.408,36.448,81.408,81.408
												C330.473,161.408,294.188,197.692,249.344,197.972z"/>
											<path d="M237.056,118.1l-28.16-28.672l-22.016,21.504l38.912,39.424c2.836,2.894,6.7,4.55,10.752,4.608
												c3.999,0.196,7.897-1.289,10.752-4.096l64.512-60.928l-20.992-22.528L237.056,118.1z"/>
										</g>
									</svg>
								</a>
							</li>
							<li>
								<a href="#">
									<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 51.997 51.997">
									<path d="M51.911,16.242C51.152,7.888,45.239,1.827,37.839,1.827c-4.93,0-9.444,2.653-11.984,6.905
										c-2.517-4.307-6.846-6.906-11.697-6.906c-7.399,0-13.313,6.061-14.071,14.415c-0.06,0.369-0.306,2.311,0.442,5.478
										c1.078,4.568,3.568,8.723,7.199,12.013l18.115,16.439l18.426-16.438c3.631-3.291,6.121-7.445,7.199-12.014
										C52.216,18.553,51.97,16.611,51.911,16.242z M15.999,9.904c-4.411,0-8,3.589-8,8c0,0.553-0.447,1-1,1s-1-0.447-1-1
										c0-5.514,4.486-10,10-10c0.553,0,1,0.447,1,1S16.551,9.904,15.999,9.904z"/>
									</svg>
								</a>
							</li>
							<li>
								<a href="#">
									<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
										<g>
											<path d="M508.177,245.995C503.607,240.897,393.682,121,256,121S8.394,240.897,3.823,245.995c-5.098,5.698-5.098,14.312,0,20.01
												C8.394,271.103,118.32,391,256,391s247.606-119.897,252.177-124.995C513.274,260.307,513.274,251.693,508.177,245.995z M256,361
												c-57.891,0-105-47.109-105-105s47.109-105,105-105s105,47.109,105,105S313.891,361,256,361z"/>
										</g>
										<g>
											<path d="M271,226c0-15.09,7.491-28.365,18.887-36.53C279.661,184.235,268.255,181,256,181c-41.353,0-75,33.647-75,75
												c0,41.353,33.647,75,75,75c37.024,0,67.668-27.034,73.722-62.358C299.516,278.367,271,255.522,271,226z"/>
										</g>
									</svg>
								</a>
							</li>
						</ul>
						<a href="product-single.html"><h2>PV Solar Panel <span>$50</span></h2></a>
						<p>Nemo enim ipsam voluptatem</p>
					</div>
				</div>
			</div>
			<div class="col-lg-3 col-md-6 col-sm-6">
				<div class="ss_six_product wow fadeIn" data-wow-delay="0.2s" data-wow-duration="2s">
					<div class="ss_six_p_img ss_box_bg">
						<img class="img-fluid" src="https://via.placeholder.com/353x313" alt="image" title="image" />
					</div>	
					<div class="ss_product_content ss_box_bg">
						<ul>
							<li>
								<a href="#">
									<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 435.104 435.104">
										<g>
											<circle cx="154.112" cy="377.684" r="52.736"/>
											<path d="M323.072,324.436L323.072,324.436c-29.267-2.88-55.327,18.51-58.207,47.777c-2.88,29.267,18.51,55.327,47.777,58.207
												c3.468,0.341,6.962,0.341,10.43,0c29.267-2.88,50.657-28.94,47.777-58.207C368.361,346.928,348.356,326.924,323.072,324.436z"/>
											<path d="M431.616,123.732c-2.62-3.923-7.059-6.239-11.776-6.144h-58.368v-1.024C361.476,54.637,311.278,4.432,249.351,4.428
												C187.425,4.424,137.22,54.622,137.216,116.549c0,0.005,0,0.01,0,0.015v1.024h-43.52L78.848,50.004
												C77.199,43.129,71.07,38.268,64,38.228H0v30.72h51.712l47.616,218.624c1.257,7.188,7.552,12.397,14.848,12.288h267.776
												c7.07-0.041,13.198-4.901,14.848-11.776l37.888-151.552C435.799,132.019,434.654,127.248,431.616,123.732z M249.344,197.972
												c-44.96,0-81.408-36.448-81.408-81.408s36.448-81.408,81.408-81.408s81.408,36.448,81.408,81.408
												C330.473,161.408,294.188,197.692,249.344,197.972z"/>
											<path d="M237.056,118.1l-28.16-28.672l-22.016,21.504l38.912,39.424c2.836,2.894,6.7,4.55,10.752,4.608
												c3.999,0.196,7.897-1.289,10.752-4.096l64.512-60.928l-20.992-22.528L237.056,118.1z"/>
										</g>
									</svg>
								</a>
							</li>
							<li>
								<a href="#">
									<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 51.997 51.997">
									<path d="M51.911,16.242C51.152,7.888,45.239,1.827,37.839,1.827c-4.93,0-9.444,2.653-11.984,6.905
										c-2.517-4.307-6.846-6.906-11.697-6.906c-7.399,0-13.313,6.061-14.071,14.415c-0.06,0.369-0.306,2.311,0.442,5.478
										c1.078,4.568,3.568,8.723,7.199,12.013l18.115,16.439l18.426-16.438c3.631-3.291,6.121-7.445,7.199-12.014
										C52.216,18.553,51.97,16.611,51.911,16.242z M15.999,9.904c-4.411,0-8,3.589-8,8c0,0.553-0.447,1-1,1s-1-0.447-1-1
										c0-5.514,4.486-10,10-10c0.553,0,1,0.447,1,1S16.551,9.904,15.999,9.904z"/>
									</svg>
								</a>
							</li>
							<li>
								<a href="#">
									<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
										<g>
											<path d="M508.177,245.995C503.607,240.897,393.682,121,256,121S8.394,240.897,3.823,245.995c-5.098,5.698-5.098,14.312,0,20.01
												C8.394,271.103,118.32,391,256,391s247.606-119.897,252.177-124.995C513.274,260.307,513.274,251.693,508.177,245.995z M256,361
												c-57.891,0-105-47.109-105-105s47.109-105,105-105s105,47.109,105,105S313.891,361,256,361z"/>
										</g>
										<g>
											<path d="M271,226c0-15.09,7.491-28.365,18.887-36.53C279.661,184.235,268.255,181,256,181c-41.353,0-75,33.647-75,75
												c0,41.353,33.647,75,75,75c37.024,0,67.668-27.034,73.722-62.358C299.516,278.367,271,255.522,271,226z"/>
										</g>
									</svg>
								</a>
							</li>
						</ul>
						<a href="product-single.html"><h2>PV Solar Panel <span>$50</span></h2></a>
						<p>Nemo enim ipsam voluptatem</p>
					</div>
				</div>
			</div>
			<div class="col-lg-3 col-md-6 col-sm-6">
				<div class="ss_six_product wow fadeIn" data-wow-delay="0.3s" data-wow-duration="2s">
					<div class="ss_six_p_img ss_box_bg">
						<img class="img-fluid" src="https://via.placeholder.com/353x313" alt="image" title="image" />
					</div>	
					<div class="ss_product_content ss_box_bg">
						<ul>
							<li>
								<a href="#">
									<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 435.104 435.104">
										<g>
											<circle cx="154.112" cy="377.684" r="52.736"/>
											<path d="M323.072,324.436L323.072,324.436c-29.267-2.88-55.327,18.51-58.207,47.777c-2.88,29.267,18.51,55.327,47.777,58.207
												c3.468,0.341,6.962,0.341,10.43,0c29.267-2.88,50.657-28.94,47.777-58.207C368.361,346.928,348.356,326.924,323.072,324.436z"/>
											<path d="M431.616,123.732c-2.62-3.923-7.059-6.239-11.776-6.144h-58.368v-1.024C361.476,54.637,311.278,4.432,249.351,4.428
												C187.425,4.424,137.22,54.622,137.216,116.549c0,0.005,0,0.01,0,0.015v1.024h-43.52L78.848,50.004
												C77.199,43.129,71.07,38.268,64,38.228H0v30.72h51.712l47.616,218.624c1.257,7.188,7.552,12.397,14.848,12.288h267.776
												c7.07-0.041,13.198-4.901,14.848-11.776l37.888-151.552C435.799,132.019,434.654,127.248,431.616,123.732z M249.344,197.972
												c-44.96,0-81.408-36.448-81.408-81.408s36.448-81.408,81.408-81.408s81.408,36.448,81.408,81.408
												C330.473,161.408,294.188,197.692,249.344,197.972z"/>
											<path d="M237.056,118.1l-28.16-28.672l-22.016,21.504l38.912,39.424c2.836,2.894,6.7,4.55,10.752,4.608
												c3.999,0.196,7.897-1.289,10.752-4.096l64.512-60.928l-20.992-22.528L237.056,118.1z"/>
										</g>
									</svg>
								</a>
							</li>
							<li>
								<a href="#">
									<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 51.997 51.997">
									<path d="M51.911,16.242C51.152,7.888,45.239,1.827,37.839,1.827c-4.93,0-9.444,2.653-11.984,6.905
										c-2.517-4.307-6.846-6.906-11.697-6.906c-7.399,0-13.313,6.061-14.071,14.415c-0.06,0.369-0.306,2.311,0.442,5.478
										c1.078,4.568,3.568,8.723,7.199,12.013l18.115,16.439l18.426-16.438c3.631-3.291,6.121-7.445,7.199-12.014
										C52.216,18.553,51.97,16.611,51.911,16.242z M15.999,9.904c-4.411,0-8,3.589-8,8c0,0.553-0.447,1-1,1s-1-0.447-1-1
										c0-5.514,4.486-10,10-10c0.553,0,1,0.447,1,1S16.551,9.904,15.999,9.904z"/>
									</svg>
								</a>
							</li>
							<li>
								<a href="#">
									<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
										<g>
											<path d="M508.177,245.995C503.607,240.897,393.682,121,256,121S8.394,240.897,3.823,245.995c-5.098,5.698-5.098,14.312,0,20.01
												C8.394,271.103,118.32,391,256,391s247.606-119.897,252.177-124.995C513.274,260.307,513.274,251.693,508.177,245.995z M256,361
												c-57.891,0-105-47.109-105-105s47.109-105,105-105s105,47.109,105,105S313.891,361,256,361z"/>
										</g>
										<g>
											<path d="M271,226c0-15.09,7.491-28.365,18.887-36.53C279.661,184.235,268.255,181,256,181c-41.353,0-75,33.647-75,75
												c0,41.353,33.647,75,75,75c37.024,0,67.668-27.034,73.722-62.358C299.516,278.367,271,255.522,271,226z"/>
										</g>
									</svg>
								</a>
							</li>
						</ul>
						<a href="product-single.html"><h2>PV Solar Panel <span>$50</span></h2></a>
						<p>Nemo enim ipsam voluptatem</p>
					</div>
				</div>
			</div>
			<div class="col-lg-3 col-md-6 col-sm-6">
				<div class="ss_six_product wow fadeIn" data-wow-delay="0.4s" data-wow-duration="2s">
					<div class="ss_six_p_img ss_box_bg">
						<img class="img-fluid" src="https://via.placeholder.com/353x313" alt="image" title="image" />
					</div>	
					<div class="ss_product_content ss_box_bg">
						<ul>
							<li>
								<a href="#">
									<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 435.104 435.104">
										<g>
											<circle cx="154.112" cy="377.684" r="52.736"/>
											<path d="M323.072,324.436L323.072,324.436c-29.267-2.88-55.327,18.51-58.207,47.777c-2.88,29.267,18.51,55.327,47.777,58.207
												c3.468,0.341,6.962,0.341,10.43,0c29.267-2.88,50.657-28.94,47.777-58.207C368.361,346.928,348.356,326.924,323.072,324.436z"/>
											<path d="M431.616,123.732c-2.62-3.923-7.059-6.239-11.776-6.144h-58.368v-1.024C361.476,54.637,311.278,4.432,249.351,4.428
												C187.425,4.424,137.22,54.622,137.216,116.549c0,0.005,0,0.01,0,0.015v1.024h-43.52L78.848,50.004
												C77.199,43.129,71.07,38.268,64,38.228H0v30.72h51.712l47.616,218.624c1.257,7.188,7.552,12.397,14.848,12.288h267.776
												c7.07-0.041,13.198-4.901,14.848-11.776l37.888-151.552C435.799,132.019,434.654,127.248,431.616,123.732z M249.344,197.972
												c-44.96,0-81.408-36.448-81.408-81.408s36.448-81.408,81.408-81.408s81.408,36.448,81.408,81.408
												C330.473,161.408,294.188,197.692,249.344,197.972z"/>
											<path d="M237.056,118.1l-28.16-28.672l-22.016,21.504l38.912,39.424c2.836,2.894,6.7,4.55,10.752,4.608
												c3.999,0.196,7.897-1.289,10.752-4.096l64.512-60.928l-20.992-22.528L237.056,118.1z"/>
										</g>
									</svg>
								</a>
							</li>
							<li>
								<a href="#">
									<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 51.997 51.997">
									<path d="M51.911,16.242C51.152,7.888,45.239,1.827,37.839,1.827c-4.93,0-9.444,2.653-11.984,6.905
										c-2.517-4.307-6.846-6.906-11.697-6.906c-7.399,0-13.313,6.061-14.071,14.415c-0.06,0.369-0.306,2.311,0.442,5.478
										c1.078,4.568,3.568,8.723,7.199,12.013l18.115,16.439l18.426-16.438c3.631-3.291,6.121-7.445,7.199-12.014
										C52.216,18.553,51.97,16.611,51.911,16.242z M15.999,9.904c-4.411,0-8,3.589-8,8c0,0.553-0.447,1-1,1s-1-0.447-1-1
										c0-5.514,4.486-10,10-10c0.553,0,1,0.447,1,1S16.551,9.904,15.999,9.904z"/>
									</svg>
								</a>
							</li>
							<li>
								<a href="#">
									<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
										<g>
											<path d="M508.177,245.995C503.607,240.897,393.682,121,256,121S8.394,240.897,3.823,245.995c-5.098,5.698-5.098,14.312,0,20.01
												C8.394,271.103,118.32,391,256,391s247.606-119.897,252.177-124.995C513.274,260.307,513.274,251.693,508.177,245.995z M256,361
												c-57.891,0-105-47.109-105-105s47.109-105,105-105s105,47.109,105,105S313.891,361,256,361z"/>
										</g>
										<g>
											<path d="M271,226c0-15.09,7.491-28.365,18.887-36.53C279.661,184.235,268.255,181,256,181c-41.353,0-75,33.647-75,75
												c0,41.353,33.647,75,75,75c37.024,0,67.668-27.034,73.722-62.358C299.516,278.367,271,255.522,271,226z"/>
										</g>
									</svg>
								</a>
							</li>
						</ul>
						<a href="product-single.html"><h2>PV Solar Panel <span>$50</span></h2></a>
						<p>Nemo enim ipsam voluptatem</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>  -->
<!--===== Section Six End =====-->

<!--===== Section Seven Start =====-->

<!-- <section class="ss_section_seven spacer_top spacer_bottom">
	<div class="container-fluid"> 
		<h3 class="ss_h3_center text-center">Pricing Plans</h3>
		<h1 class="text-center mb-5">Reasonable pricing plans</h1>
		<div class="row"> 
			<div class="col-xl-3 col-lg-6 col-md-6">
				<div class="ss_seven ss_box_wbg wow fadeIn" data-wow-delay="0.1s" data-wow-duration="2s">
					<div class="ss_seven_price text-center">
						<h1>Basic</h1>
						<h2>$29 <span>/ month</span></h2>
						<div class="ss_price_circle">
							<img class="img-fluid" src="assets/images/svg/icon1.svg" alt="image"/>
						</div>
					</div>
					<ul>
						<li><i class="fas fa-check"></i> Free Srvice</li>
						<li><i class="fas fa-check"></i> Open Circuit </li>
						<li><i class="fas fa-check"></i> Power Watts-PMAX</li>
						<li><i class="fas fa-check"></i> Output Tolerance-PMAX</li>
						<li><i class="fas fa-check"></i> Maximum Power Voltage</li>
					</ul>
					<span class="price_btn"><a href="#" class="ss_btn">Buy now</a></span>
				</div>
			</div>
			<div class="col-xl-3 col-lg-6 col-md-6">
				<div class="ss_seven ss_box_wbg wow fadeIn" data-wow-delay="0.2s" data-wow-duration="2s">
					<div class="ss_seven_price text-center">
						<h1>Standard</h1>
						<h2>$39 <span>/ month</span></h2>
						<div class="ss_price_circle">
							<img class="img-fluid" src="assets/images/svg/icon2.svg" alt="image"/>
						</div>
					</div>
					<ul>
						<li><i class="fas fa-check"></i> Free Srvice</li>
						<li><i class="fas fa-check"></i> Open Circuit </li>
						<li><i class="fas fa-check"></i> Power Watts-PMAX</li>
						<li><i class="fas fa-check"></i> Output Tolerance-PMAX</li>
						<li><i class="fas fa-check"></i> Maximum Power Voltage</li>
					</ul>
					<span class="price_btn"><a href="#" class="ss_btn">Buy now</a></span>
				</div>
			</div>
			<div class="col-xl-3 col-lg-6 col-md-6">
				<div class="ss_seven ss_box_wbg wow fadeIn" data-wow-delay="0.3s" data-wow-duration="2s">
					<div class="ss_seven_price text-center">
						<h1>Professional</h1>
						<h2>$59 <span>/ month</span></h2>
						<div class="ss_price_circle">
							<img class="img-fluid" src="assets/images/svg/icon3.svg" alt="image"/>
						</div>
					</div>
					<ul>
						<li><i class="fas fa-check"></i> Free Srvice</li>
						<li><i class="fas fa-check"></i> Open Circuit </li>
						<li><i class="fas fa-check"></i> Power Watts-PMAX</li>
						<li><i class="fas fa-check"></i> Output Tolerance-PMAX</li>
						<li><i class="fas fa-check"></i> Maximum Power Voltage</li>
					</ul>
					<span class="price_btn"><a href="#" class="ss_btn">Buy now</a></span>
				</div>
			</div>
			<div class="col-xl-3 col-lg-6 col-md-6">
				<div class="ss_seven ss_box_wbg wow fadeIn" data-wow-delay="0.4s" data-wow-duration="2s">
					<div class="ss_seven_price text-center">
						<h1>Advanced</h1>
						<h2>$79 <span>/ month</span></h2>
						<div class="ss_price_circle">
							<img class="img-fluid" src="assets/images/svg/icon4.svg" alt="image"/>
						</div>
					</div>
					<ul>
						<li><i class="fas fa-check"></i> Free Srvice</li>
						<li><i class="fas fa-check"></i> Open Circuit </li>
						<li><i class="fas fa-check"></i> Power Watts-PMAX</li>
						<li><i class="fas fa-check"></i> Output Tolerance-PMAX</li>
						<li><i class="fas fa-check"></i> Maximum Power Voltage</li>
					</ul>
					<span class="price_btn"><a href="#" class="ss_btn">Buy now</a></span>
				</div>
			</div>
		</div>
	</div>
</section>  -->
<!--===== Section Seven End =====-->

<!--===== Section Eight Start =====-->
<!-- <section class="ss_section_eight ss_section_sec_bg spacer_top spacer_bottom">
	<div class="container-fluid"> 
		<h3 class="ss_h3_center text-center">Blog Posts</h3>
		<h1 class="text-center mb-5">Latest news</h1>
		<div class="swiper-container">
			<div class="swiper-wrapper">
				<div class="swiper-slide">
					<div class="ss_eight ss_box_wbg wow fadeIn" data-wow-delay="0.1s" data-wow-duration="1s">
						<a href="blog.html"><img class="img-fluid" src="https://via.placeholder.com/548x400" alt="image" title="image" /></a>
						<div class="ss_product_content ss_box_bg">	
							<h2><a href="blog.html">Solar panels themselves require little maintenance</a> <span><a href="blog.html">26 July 2019</a></span></h2>
							<p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit sed quia  magni</p>
						</div>
					</div>
				</div>
				<div class="swiper-slide">
					<div class="ss_eight ss_box_wbg wow fadeIn" data-wow-delay="0.1s" data-wow-duration="1s">
						<a href="blog.html"><img class="img-fluid" src="https://via.placeholder.com/548x400" alt="image" title="image" /></a>
						<div class="ss_product_content ss_box_bg">	
							<h2><a href="blog.html">Solar panels that are properly maintained</a> <span><a href="blog.html">26 July 2019</a></span></h2>
							<p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit sed quia  magni</p>
						</div>
					</div>
				</div>
				<div class="swiper-slide">
					<div class="ss_eight ss_box_wbg wow fadeIn" data-wow-delay="0.1s" data-wow-duration="1s">
						<a href="blog.html"><img class="img-fluid" src="https://via.placeholder.com/548x400" alt="image" title="image" /></a>
						<div class="ss_product_content ss_box_bg">	
							<h2><a href="blog.html">Maximum Power Voltage</a> <span><a href="blog.html">26 July 2019</a></span></h2>
							<p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit sed quia  magni</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>  -->
<!--===== Section Eight End =====-->

@endsection