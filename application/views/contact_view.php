<section class="bg-img1 kit-overlay1" style="background-image: url(images/bg-05.jpg);">
		<div class="container size-h-3 p-tb-30 flex-col-c-c">
			<h2 class="t1-b-1 text-uppercase cl-0 txt-center m-b-25">
				Contact Us
			</h2>

			<div class="flex-wr-c-c">
				<a href="index.html" class="breadcrumb-item">
					Home 
				</a>

				<span class="breadcrumb-item">
					Contact Us
				</span>
			</div>
		</div>
	</section>

	<!-- Contact -->
	<section class="bg-0 p-t-95 p-b-40">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-sm-10 col-md-6 p-b-60">
					<h3 class="t1-m-5 cl-3 m-b-44">
						Send Us A Message
					</h3>

					<form id="contact-form" class="validate-form" method="post" action="includes/contact-form.php" name="contact">
						<div class="m-b-15 validate-input" data-validate = "Name is required">
							<input class="size-a-3 t1-m-2 plh-6 cl-6 p-rl-20 bo-1-rad-4 bcl-12 focus-in1" type="text" name="name" placeholder="Your Name">
						</div>

						<div class="m-b-15 validate-input" data-validate = "Valid email is: ex@abc.xyz">
							<input class="size-a-3 t1-m-2 plh-6 cl-6 p-rl-20 bo-1-rad-4 bcl-12 focus-in1" type="text" name="email" placeholder="Your Email">
						</div>

						<div class="m-b-15 validate-input" data-validate = "Phone is required">
							<input class="size-a-3 t1-m-2 plh-6 cl-6 p-rl-20 bo-1-rad-4 bcl-12 focus-in1" type="text" name="phone" placeholder="Phone Number">
						</div>

						<div class="m-b-30 validate-input" data-validate = "Message is required">
							<textarea class="size-a-14 t1-m-2 plh-6 cl-6 p-rl-20 p-tb-13 bo-1-rad-4 bcl-12 focus-in1" name="msg" placeholder="Your Message"></textarea>
						</div>

						<button class="size-a-15 flex-c-c bg-11 t1-s-2 text-uppercase cl-0 hov-btn1 trans-02 p-rl-15">
							Send Email
						</button>
					</form>
				</div>

				<div class="col-sm-10 col-md-6 p-b-60">
					<div class="p-l-30 p-l-0-sr767">
						<h3 class="t1-m-5 cl-3 m-b-38">
							Contact Info
						</h3>

						<p class="t1-s-2 cl-6 m-b-9">
							Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adi pisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. 
						</p>

						<ul class="p-t-11">
							<li class="flex-wr-s-s t1-s-2 cl-6 p-b-8">
								<span class="size-w-3 cl-5">
									<i class="fa fa-home" aria-hidden="true"></i>
								</span>

								<span class="size-w-4">
									379 5Th Ave New York, Nyc 10018
								</span>
							</li>

							<li class="flex-wr-s-s t1-s-2 cl-6 p-b-8">
								<span class="size-w-3 cl-5">
									<i class="fa fa-envelope-o" aria-hidden="true"></i>
								</span>

								<span class="size-w-4">
									contac@gmail.com
								</span>
							</li>

							<li class="flex-wr-s-s t1-s-2 cl-6 p-b-8">
								<span class="size-w-3 cl-5">
									<i class="fa fa-phone" aria-hidden="true"></i>
								</span>

								<span class="size-w-4">
									(+1) 96 716 6879
									<br>
									(+1) 96 716 6897
								</span>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- Map -->
	<div class="map">
		<div class="contact-map size-h-4" id="google_map" data-map-x="40.748910" data-map-y="-74.401956" data-scrollwhell="0" data-draggable="1"  data-zoom="16" data-pin="images/icons/pin-map.png"></div>
	</div>