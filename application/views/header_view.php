
<!-- Header -->

<header>
	<!-- Header desktop -->
	<nav class="container-header-desktop">
		<div class="top-bar">
			<div class="content-topbar container flex-sb-c h-full">
				<div class="size-w-0 flex-wr-s-c">
					<div class="t1-s-1 cl-13 m-r-50">
						<span class="fs-16 m-r-6">
							<i class="fa fa-home" aria-hidden="true"></i>
						</span>
						<span>пр. Масалиева 14/25</span>
					</div>

					<div class="t1-s-1 cl-13 m-r-50">
						<span class="fs-16 m-r-6">
							<i class="fa fa-phone" aria-hidden="true"></i>
						</span>
						<span>(+996) 551 336 944 </span>
					</div>

					<div class="t1-s-1 cl-13 m-r-50">
						<span class="fs-16 m-r-6">
							<i class="fa fa-clock-o" aria-hidden="true"></i>
						</span>
						<span>Пон-Суб с 09:00  - до 17:00 </span>
					</div>					
				</div>
				<!-- language -->
				<section>
					<select class="form-control k_select_lang"  id="langid" onchange="javascript:location.href = this.value;">
						<option <?php 	if (isset($_SESSION['lang']) && $_SESSION['lang']=='ru') {
							echo 'selected';
						} ?> value="<?php echo base_url('pages/index/2'); ?>">RU</option>
						<option  <?php 	if (isset($_SESSION['lang']) && $_SESSION['lang']=='en') {
							echo 'selected';
						} ?> value="<?php echo base_url('pages/index/1'); ?>">EN</option>
					</select>
				</section>



				<div class="text-nowrap">
					<a href="#" class="fs-16 cl-13 hov-link2 trans-02 m-l-15">
						<i class="fa fa-facebook-official"></i>	
					</a>

					<a href="#" class="fs-16 cl-13 hov-link2 trans-02 m-l-15">
						<i class="fa fa-twitter"></i>	
					</a>

					<a href="#" class="fs-16 cl-13 hov-link2 trans-02 m-l-15">
						<i class="fa fa-odnoklassniki"></i>	
					</a>

					<a href="#" class="fs-16 cl-13 hov-link2 trans-02 m-l-15">
						<i class="fa fa-instagram"></i>	
					</a>

					<a href="#" class="fs-16 cl-13 hov-link2 trans-02 m-l-15">
						<i class="fa fa-vk"></i>	
					</a>
				</div>
			</div>
		</div>

		<div class="wrap-menu-desktop">
			<div class="limiter-menu-desktop container">					
				<!-- Logo desktop -->		
				<div class="logo">
					<a href="<?php echo base_url();?>"><img src="<?php echo base_url().'assets/logo/logo1.svg';?>" alt="LOGO"></a>
				</div>

				<!-- Menu desktop -->
				<div class="menu-desktop">
					<ul class="main-menu respon-sub-menu">
						<li>

							<a href="<?php echo base_url(); ?>"><i class="fa fa-home" aria-hidden="true"></i> ГЛАВНАЯ</a>

						</li>

						<li>

							<a href="#">  ТУРЫ</a>
							<!-- <a href="#"> <img src="<?php echo base_url().'assets/images/palm-tree.png';?>"> ТУРЫ</a> -->


							<ul class="sub-menu">
								<li>
									<a href="<?php echo base_url('pages/pamir_tours'); ?>">ТУРЫ В ПАМИР-АЛАЙ</a>
											<!-- <ul class="sub-menu">
												<li><a href="services-detail-01.html">ГРУППОВЫЕ ТУР</a></li>
												<li><a href="services-detail-02.html">ОР</a></li>
												<li><a href="services-detail-03.html">ОРОР</a></li>
												<li><a href="services-detail-03.html">ОРО</a></li>
											</ul> -->
										</li>
										<li><a href="<?php echo base_url('pages/tours'); ?>">ТУРЫ В ДРУГИЕ СТРАНЫ</a>
											<!-- <ul class="sub-menu">
												<li><a href="services-detail-01.html">Египет</a></li>
												<li><a href="services-detail-02.html">Мальдивы</a></li>
												<li><a href="services-detail-03.html">ОАЭ</a></li>
												<li><a href="services-detail-03.html">Таиланд</a></li>
												<li><a href="services-detail-03.html">Шри-Ланка</a></li>
											</ul> -->
										</li>
									</ul>
								</li>

								<li>

									<a href="<?php echo base_url('pages/airticket'); ?>"> АВИАБИЛЕТЫ</a>

								<!-- <ul class="sub-menu">
									<li><a href="projects-grid.html">МОСКВА</a></li>
									<li><a href="projects-grid.html">ОШ</a></li>
							
								</ul> -->
							</li>

							<li>
								<a href="<?php echo base_url('pages/visa'); ?>"></i> ВИЗА</a>
							</li>
							
							<li>
								<a href="<?php echo base_url('pages/for_clients'); ?>"></i> КЛИЕНТАМ</a>
							</li>
							
							<li>
								<a href="<?php echo base_url('pages/about'); ?>"></i> О КОМПАНИИ</a>
							</li>

							<li>

								<a href="<?php echo base_url('pages/contact'); ?>"> КОНТАКТЫ</a>
								<!-- <ul class="sub-menu">

									<li><a href="index.html">ВСЕ ЗАКЛАДКИ И РЕКЛАМНЫЙ КАРТИНКИ</a></li>
									<li><a href="home-02.html">ЛОРОР</a></li>
								</ul>  -->
							</li>
						</ul>
					</div>						
				</div>
			</div>	
		</nav>

		<!-- Header Mobile -->
		<nav class="container-header-mobile">

			<!-- added by rhino-it moblie -->
			 <div class="container top-header-mobile k_background_mobile_top">
				<!-- <div class="row no-gutters">
					<div class="col-3">
						<section>
							<select class="form-control k_select_lang_mobile"  id="langid" onchange="javascript:location.href = this.value;">
								<option <?php 	if (isset($_SESSION['lang']) && $_SESSION['lang']=='ru') {
									echo 'selected';
								} ?> value="<?php echo base_url('pages/index/2'); ?>">RU</option>
								<option  <?php 	if (isset($_SESSION['lang']) && $_SESSION['lang']=='en') {
									echo 'selected';
								} ?> value="<?php echo base_url('pages/index/1'); ?>">EN</option>
							</select>
						</section>
					</div>
					<div class="col-9">
						<form action="" enctype="" method="POST">
						<div class="row no-gutters">
							
							<div class="col k_mobile_input">
								<input name="k_search" class="form-control  k_white_border border-right-0 rounded-0" type="search" placeholder="search..." id="example-search-input4">
							</div>
							<div class="col-auto">
								<button class="btn btn-outline-secondary k_btn border-left-0 rounded-0 " type="button">
									<i class="fa fa-search"></i>
								</button>
							</div>
							
						</div>
					</form>
					</div>
				</div> -->
			</div>

			
			<div class="k_logo-mobile">
				<a href="index.html"><img src="<?php echo base_url().'assets/logo/logo2.svg';?>" alt="LOGO"></a>
			</div>
			
		<!-- added by rhino-it end moblie-->
		<div class="wrap-header-mobile">
			<!-- Logo moblie -->		
			<div class="logo-mobile">
				<div class="row no-gutters">
					<div class="col-3">
						<section>
							<select class="form-control k_select_lang_mobile_2"  id="langid" onchange="javascript:location.href = this.value;">
								<option <?php 	if (isset($_SESSION['lang']) && $_SESSION['lang']=='ru') {
									echo 'selected';
								} ?> value="<?php echo base_url('pages/index/2'); ?>">RU</option>
								<option  <?php 	if (isset($_SESSION['lang']) && $_SESSION['lang']=='en') {
									echo 'selected';
								} ?> value="<?php echo base_url('pages/index/1'); ?>">EN</option>
							</select>
						</section>
					</div>
					<div class="col-9">
						<form action="" enctype="" method="POST">
						<div class="row no-gutters">
							
							<div class="col k_mobile_input_2">
								<input name="k_search" class="form-control  k_white_border_2 border-right-0 rounded-0" type="search" placeholder="поиск..." id="example-search-input4">
							</div>
							<div class="col-auto">
								<button class="btn btn-outline-secondary k_btn_2 border-left-0 rounded-0 " type="submit">
									<i class="fa fa-search"></i>
								</button>
							</div>
							
						</div>
					</form>
					</div>
				</div>
				<!-- <a href="index.html"><img src="<?php echo base_url().'assets/logo/logo1.svg';?>" alt="LOGO"></a> -->
			</div> 


			<!-- Button show menu -->
			<div class="btn-show-menu-mobile hamburger hamburger--squeeze">
				<span class="hamburger-box">
					<span class="hamburger-inner"></span>
				</span>
			</div>			
		</div>

		<div class="menu-mobile">
			<ul class="top-bar-m p-l-20 p-tb-8">
				<li>
					<div class="t1-s-1 cl-5 p-tb-3">
						<span class="fs-16 m-r-6">
							<i class="fa fa-home" aria-hidden="true"></i>
						</span>
						<span>пр. Масалиева 14/25</span>
					</div>
				</li>

				<li>
					<div class="t1-s-1 cl-5 p-tb-3">
						<span class="fs-16 m-r-6">
							<i class="fa fa-phone" aria-hidden="true"></i>
						</span>
						<span>+996 551 336 944</span>
					</div>
				</li>

				<li>
					<div class="t1-s-1 cl-5 p-tb-3">
						<span class="fs-16 m-r-6">
							<i class="fa fa-clock-o" aria-hidden="true"></i>
						</span>
						<span>Пон-Суб с 09:00 - до 17:00</span>
					</div>
				</li>

				<li>
					<div>
						<a href="#" class="fs-16 cl-5 hov-link2 trans-02 m-r-15">
							<i class="fa fa-facebook-official"></i>	
						</a>

						<a href="#" class="fs-16 cl-5 hov-link2 trans-02 m-r-15">
							<i class="fa fa-twitter"></i>	
						</a>

						<a href="#" class="fs-16 cl-5 hov-link2 trans-02 m-r-15">
							<i class="fa fa-google-plus"></i>	
						</a>

						<a href="#" class="fs-16 cl-5 hov-link2 trans-02 m-r-15">
							<i class="fa fa-instagram"></i>	
						</a>

						<a href="#" class="fs-16 cl-5 hov-link2 trans-02 m-r-15">
							<i class="fa fa-linkedin"></i>	
						</a>
					</div>
				</li>
			</ul>
		</div>
	</nav>
</header>

