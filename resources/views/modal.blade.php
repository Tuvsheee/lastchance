
<!DOCTYPE html>
<html lang="en">
<head>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="Booking - Room detail">

	<link rel="shortcut icon" href="assets/images/favicon.ico">

	<title>Booking - Room detail</title>
	<!-- Theme CSS -->
	<link href="/css/style3.css " rel="stylesheet">
	<link href="/css/profile.css " rel="stylesheet">

</head>

<body>

<main>
<section class="py-0 pt-sm-5">
	<div class="container position-relative">
		<!-- Title and button START -->
		<div class="row mb-3">
			<div class="col-12">
				<!-- Meta -->
				<div class="d-lg-flex justify-content-lg-between mb-1">
					<!-- Title -->
					<div class="mb-2 mb-lg-0">
						<h1 class="fs-2">Room detail </h1>
						<!-- Location -->
						<p class="fw-bold mb-0"><i class="bi bi-geo-alt me-2"></i>Ulaanbaator, Sukhbaator district, 1st khoroo 32-1-15 
							<a href="#" class="ms-2 text-decoration-underline" data-bs-toggle="modal" data-bs-target="#mapmodal">
							</a>
						</p>
					</div>

					<!-- Buttons -->
					<ul class="list-inline text-end">
						<!-- Heart icon -->
						<li class="list-inline-item">
							<a href="#" class="btn btn-sm btn-light px-2"><i class="fa-solid fa-fw fa-heart"></i></a>
						</li>
						<!-- Share icon -->
						<li class="list-inline-item dropdown">
							<!-- Share button -->
							<a href="#" class="btn btn-sm btn-light px-2" role="button" id="dropdownShare" data-bs-toggle="dropdown" aria-expanded="false">
								<i class="fa-solid fa-fw fa-share-alt"></i>
							</a>
							<!-- dropdown button -->
							<ul class="dropdown-menu dropdown-menu-end min-w-auto shadow rounded" aria-labelledby="dropdownShare">
								<li><a class="dropdown-item" href="#"><i class="fab fa-twitter-square me-2"></i>Twitter</a></li>
								<li><a class="dropdown-item" href="#"><i class="fab fa-facebook-square me-2"></i>Facebook</a></li>
								<li><a class="dropdown-item" href="#"><i class="fab fa-linkedin me-2"></i>LinkedIn</a></li>
								<li><a class="dropdown-item" href="#"><i class="fa-solid fa-copy me-2"></i>Copy link</a></li>
							</ul>
						</li>
					</ul>
				</div>
			</div>
		</div>
		<!-- Title and button END -->

		<!-- Alert box START -->
		<div class="alert alert-danger alert-dismissible d-flex justify-content-between align-items-center fade show mb-4 rounded-3 pe-2" role="alert">
			<div class="d-flex">
				<span class="alert-heading h5 mb-0 me-2"><i class="bi bi-exclamation-octagon-fill"></i></span>
				<span><strong class="alert-heading me-2">Covid Policy:</strong>You may require to present an RT-PCR negative test report at the hotel</span>
			</div>
				<button type="button" class="btn btn-link text-primary-hover pb-0 text-end" data-bs-dismiss="alert" aria-label="Close"><i class="bi bi-x-lg"></i></button>
		</div>
		<!-- Alert box END -->
	</div>
</section>
<!-- =======================
Main Title END -->

<!-- =======================
Image gallery START -->
<section class="card-grid pt-0">
	<div class="container">
		<div class="row g-2">
			<!-- Image -->
			<div class="col-md-6">
				<a data-glightbox data-gallery="gallery" ><img src="/css/images/1 (1).jpg">
					<div class="card card-grid-lg card-element-hover card-overlay-hover overflow-hidden"><img src="/css/images/1 (2).jpg">
						<!-- Card hover element -->
						<div class="hover-element position-absolute w-100 h-100">
							<i class="bi bi-fullscreen fs-6 text-white position-absolute top-50 start-50 translate-middle bg-dark rounded-1 p-2 lh-1"></i>
						</div>
					</div>
				</a>
			</div>

			<div class="col-md-6">
				<!-- Card item START -->
				<div class="row g-2"> 
					<!-- Image -->
					<div class="col-12">
						<a data-glightbox data-gallery="gallery"><img src="/css/images/1 (2).jpg">
							<div class="card card-grid-sm card-element-hover card-overlay-hover overflow-hidden" ><img src="/css/images/1 (7).jpg">
								<!-- Card hover element -->
								<div class="hover-element position-absolute w-100 h-100">
									<i class="bi bi-fullscreen fs-6 text-white position-absolute top-50 start-50 translate-middle bg-dark rounded-1 p-2 lh-1"></i>
								</div>
							</div>
						</a>	
					</div>

					<!-- Image -->
					<div class="col-md-6">
						<a data-glightbox data-gallery="gallery" ><img src="/css/images/1 (3).jpg">
							<div class="card card-grid-sm card-element-hover card-overlay-hover overflow-hidden" style="background-image:url(1 (3).jpg); background-position: center left; background-size: cover;">
								<!-- Card hover element -->
								<div class="hover-element position-absolute w-100 h-100">
									<i class="bi bi-fullscreen fs-6 text-white position-absolute top-50 start-50 translate-middle bg-dark rounded-1 p-2 lh-1"></i>
								</div>
							</div>
						</a>	
					</div>

					<!-- Images -->
					<div class="col-md-6">
						<div class="card card-grid-sm overflow-hidden" >
							<!-- Background overlay -->
							<div class="bg-overlay bg-dark opacity-7"><img src="/css/images/1 (1).jpg"></div>

							<!-- Popup Images -->
							<a data-glightbox="" data-gallery="gallery"  class="stretched-link z-index-9"><img src="/css/images/1 (6).jpg"></a>
							<a data-glightbox="" data-gallery="gallery" ><img src="/css/images/1 (7).jpg"></a>
							<a data-glightbox="" data-gallery="gallery" ><img src="/css/images/1 (1).jpg"></a>

							<!-- Overlay text -->
							<div class="card-img-overlay d-flex h-100 w-100">
								<h6 class="card-title m-auto fw-light text-decoration-underline"><a href="#" class="text-white">View all</a></h6>
							</div>
						</div>
					</div>
				</div>
				<!-- Card item END -->
			</div>
		</div>
	</div>
</section>

<section class="pt-0">
	<div class="container" data-sticky-container>

		<div class="row g-4 g-xl-5">
			<!-- Content START -->
			<div class="col-xl-7 order-1">
				<div class="vstack gap-5">

					<!-- About hotel START -->
					<div class="card bg-transparent">
						<!-- Card header -->
						<div class="card-header border-bottom bg-transparent px-0 pt-0">
							<h3 class="mb-0">About This Hotel</h3>
						</div>

						<!-- Card body START -->
						<div class="card-body pt-4 p-0">
							<h5 class="fw-light mb-4">Main Highlights</h5>

							<!-- Highlights Icons -->
							<div class="hstack gap-3 mb-3">
								<div class="icon-lg bg-light h5 rounded-2" data-bs-toggle="tooltip" data-bs-placement="top" title="Free wifi">
									<i class="fa-solid fa-wifi"></i>
								</div>
								<div class="icon-lg bg-light h5 rounded-2" data-bs-toggle="tooltip" data-bs-placement="top" title="Swimming Pool">
									<i class="fa-solid fa-swimming-pool"></i>
								</div>
								<div class="icon-lg bg-light h5 rounded-2" data-bs-toggle="tooltip" data-bs-placement="top" title="Central AC">
									<i class="fa-solid fa-snowflake"></i>
								</div>
								<div class="icon-lg bg-light h5 rounded-2" data-bs-toggle="tooltip" data-bs-placement="top" title="Free Service">
									<i class="fa-solid fa-concierge-bell"></i>
								</div>
							</div>

							<p class="mb-3">Demesne far-hearted suppose venture excited see had has. Dependent on so extremely delivered by. Yet no jokes worse her why. <b>Bed one supposing breakfast day fulfilled off depending questions.</b></p>
							<p class="mb-0">Delivered dejection necessary objection do Mr prevailed. Mr feeling does chiefly cordial in do. Water timed folly right aware if oh truth. Large above be to means. Dashwood does provide stronger is.</p>
							
							<div class="collapse" id="collapseContent">
								<p class="my-3">We focus a great deal on the understanding of behavioral psychology and influence triggers which are crucial for becoming a well rounded Digital Marketer. We understand that theory is important to build a solid foundation, we understand that theory alone isn't going to get the job done so that's why this rickets is packed with practical hands-on examples that you can follow step by step.</p>
								<p class="mb-0">Behavioral psychology and influence triggers which are crucial for becoming a well rounded Digital Marketer. We understand that theory is important to build a solid foundation, we understand that theory alone isn't going to get the job done so that's why this tickets is packed with practical hands-on examples that you can follow step by step.</p>
							</div>
							<a class="p-0 mb-4 mt-2 btn-more d-flex align-items-center collapsed" data-bs-toggle="collapse" href="#collapseContent" role="button" aria-expanded="false" aria-controls="collapseContent">
								See <span class="see-more ms-1">more</span><span class="see-less ms-1">less</span><i class="fa-solid fa-angle-down ms-2"></i>
							</a>

							<!-- List -->
							<h5 class="fw-light mb-2">Advantages</h5>
							<ul class="list-group list-group-borderless mb-0">
								<li class="list-group-item h6 fw-light d-flex mb-0"><i class="bi bi-patch-check-fill text-success me-2"></i>Every hotel staff to have Proper PPT kit for COVID-19</li>
								<li class="list-group-item h6 fw-light d-flex mb-0"><i class="bi bi-patch-check-fill text-success me-2"></i>Every staff member wears face masks and gloves at all service times.</li>
								<li class="list-group-item h6 fw-light d-flex mb-0"><i class="bi bi-patch-check-fill text-success me-2"></i>Hotel staff ensures to maintain social distancing at all times.</li>
								<li class="list-group-item h6 fw-light d-flex mb-0"><i class="bi bi-patch-check-fill text-success me-2"></i>The hotel has In-Room Dining options available </li>
							</ul>
						</div>
						<!-- Card body END -->
					</div>
					<!-- About hotel START -->

					<!-- Amenities START -->
					<div class="card bg-transparent">
						<!-- Card header -->
						<div class="card-header border-bottom bg-transparent px-0 pt-0">
							<h3 class="card-title mb-0">Amenities</h3>
						</div>

						<!-- Card body START -->
						<div class="card-body pt-4 p-0">
							<div class="row g-4">
								<!-- Activities -->
								<div class="col-sm-6">
									<h6><i class="fa-solid fa-biking me-2"></i>Activities</h6>
									<!-- List -->
									<ul class="list-group list-group-borderless mt-2 mb-0">
										<li class="list-group-item pb-0">
											<i class="fa-solid fa-check-circle text-success me-2"></i>Swimming pool
										</li>
										<li class="list-group-item pb-0">
											<i class="fa-solid fa-check-circle text-success me-2"></i>Spa
										</li>
										<li class="list-group-item pb-0">
											<i class="fa-solid fa-check-circle text-success me-2"></i>Kids' play area
										</li>
										<li class="list-group-item pb-0">
											<i class="fa-solid fa-check-circle text-success me-2"></i>Gym
										</li>
									</ul>
								</div>
	
								<!-- Payment Method -->
								<div class="col-sm-6">
									<h6><i class="fa-solid fa-credit-card me-2"></i>Payment Method</h6>
									<!-- List -->
									<ul class="list-group list-group-borderless mt-2 mb-0">
										<li class="list-group-item pb-0">
											<i class="fa-solid fa-check-circle text-success me-2"></i>Credit card (Visa, Master card)
										</li>
										<li class="list-group-item pb-0">
											<i class="fa-solid fa-check-circle text-success me-2"></i>Cash
										</li>
										<li class="list-group-item pb-0">
											<i class="fa-solid fa-check-circle text-success me-2"></i>Debit Card
										</li>
									</ul>
								</div>
	
								<!-- Services -->
								<div class="col-sm-6">
									<h6><i class="fa-solid fa-concierge-bell me-2"></i>Services</h6>
									<!-- List -->
									<ul class="list-group list-group-borderless mt-2 mb-0">
										<li class="list-group-item pb-0">
											<i class="fa-solid fa-check-circle text-success me-2"></i>Dry cleaning
										</li>
										<li class="list-group-item pb-0">
											<i class="fa-solid fa-check-circle text-success me-2"></i>Room Service
										</li>
										<li class="list-group-item pb-0">
											<i class="fa-solid fa-check-circle text-success me-2"></i>Special service
										</li>
										<li class="list-group-item pb-0">
											<i class="fa-solid fa-check-circle text-success me-2"></i>Waiting Area
										</li>
										<li class="list-group-item pb-0">
											<i class="fa-solid fa-check-circle text-success me-2"></i>Secrete smoking area
										</li>
										<li class="list-group-item pb-0">
											<i class="fa-solid fa-check-circle text-success me-2"></i>Concierge
										</li>
										<li class="list-group-item pb-0">
											<i class="fa-solid fa-check-circle text-success me-2"></i>Laundry facilities
										</li>
										<li class="list-group-item pb-0">
											<i class="fa-solid fa-check-circle text-success me-2"></i>Ironing Service
										</li>
										<li class="list-group-item pb-0">
											<i class="fa-solid fa-check-circle text-success me-2"></i>Lift
										</li>
									</ul>
								</div>
	
								<!-- Safety & Security -->
								<div class="col-sm-6">
									<h6><i class="bi bi-shield-fill-check me-2"></i>Safety & Security</h6>
									<!-- List -->
									<ul class="list-group list-group-borderless mt-2 mb-4 mb-sm-5">
										<li class="list-group-item pb-0">
											<i class="fa-solid fa-check-circle text-success me-2"></i>Doctor on Call
										</li>
									</ul>
	
									<h6><i class="fa-solid fa-volume-up me-2"></i>Staff Language</h6>
									<!-- List -->
									<ul class="list-group list-group-borderless mt-2 mb-0">
										<li class="list-group-item pb-0">
											<i class="fa-solid fa-check-circle text-success me-2"></i>English
										</li>
										<li class="list-group-item pb-0">
											<i class="fa-solid fa-check-circle text-success me-2"></i>Spanish
										</li>
										<li class="list-group-item pb-0">
											<i class="fa-solid fa-check-circle text-success me-2"></i>Hindi
										</li>
									</ul>
								</div>
	
							</div>
						</div>
						<!-- Card body END -->
					</div>
					<!-- Amenities END -->

					<!-- Room START -->
					<div class="card bg-transparent" id="room-options">
						<!-- Card header -->
						<div class="card-header border-bottom bg-transparent px-0 pt-0">
							<div class="d-sm-flex justify-content-sm-between align-items-center">
								<h3 class="mb-2 mb-sm-0">Room Options</h3>
	
								<div class="col-sm-4">
									<form class="form-control-bg-light">
										<select class="form-select form-select-sm js-choice border-0">
											<option value="">Select Option</option>
											<option>Recently search</option>
											<option>Most popular</option>
											<option>Top rated</option>
										</select>
									</form>
								</div>
							</div>
						</div>

						<!-- Card body START -->
						<div class="card-body pt-4 p-0">
							<div class="vstack gap-4">

								<!-- Room item START -->
								<div class="card shadow p-3">
									<div class="row g-4">
										<!-- Card img -->
										<div class="col-md-5 position-relative">

											<!-- Overlay item -->
											<div class="position-absolute top-0 start-0 z-index-1 mt-3 ms-4">
												<div class="badge text-bg-danger">30% Off</div>
											</div>

											<!-- Slider START -->
											<div class="tiny-slider arrow-round arrow-xs arrow-dark overflow-hidden rounded-2">
												<div class="tiny-slider-inner" data-autoplay="true" data-arrow="true" data-dots="false" data-items="1">
													<!-- Image item -->
													<div><img  src="/css/images/1 (1).jpg" alt="Card image"></div>

													<!-- Image item -->
													<div><img  src="/css/images/1 (2).jpg" alt="Card image"></div>

													
												</div>
											</div>
											<!-- Slider END -->

											<!-- Button -->
											<a href="#" class="btn btn-link text-decoration-underline p-0 mb-0 mt-1" data-bs-toggle="modal" data-bs-target="#roomDetail"><i class="bi bi-eye-fill me-1"></i>View more details</a>
										</div>

										<!-- Card body -->
										<div class="col-md-7">
											<div class="card-body d-flex flex-column h-100 p-0">
					
												<!-- Title -->
												<h5 class="card-title"><a href="#">Luxury Room with Balcony</a></h5>

												<!-- Amenities -->
												<ul class="nav nav-divider mb-2">
													<li class="nav-item">Air Conditioning</li>
													<li class="nav-item">Wifi</li>
													<li class="nav-item">Kitchen</li>
													<li class="nav-item">
														<a href="#" class="mb-0 text-primary">More+</a>
													</li>
												</ul>

												<p class="text-success mb-0">Free Cancellation till 7 Jan 2022</p>
												
												<!-- Price and Button -->
												<div class="d-sm-flex justify-content-sm-between align-items-center mt-auto">
													<!-- Button -->
													<div class="d-flex align-items-center">
														<h5 class="fw-bold mb-0 me-1">$750</h5>
														<span class="mb-0 me-2">/day</span>
														<span class="text-decoration-line-through mb-0">$1000</span>
													</div>
													<!-- Price -->
													<div class="mt-3 mt-sm-0">
														<a href="reservation" class="btn btn-sm btn-primary mb-0">Select Room</a>    
													</div>                  
												</div>
											</div>
										</div>
									</div>
								</div>
								<!-- Room item END -->
	
								<!-- Room item START -->
								<div class="card shadow p-3">
									<div class="row g-4">
										<!-- Card img -->
										<div class="col-md-5 position-relative">

											<!-- Overlay item -->
											<div class="position-absolute top-0 start-0 z-index-1 mt-3 ms-4">
												<div class="badge text-bg-danger">15% Off</div>
											</div>

											<!-- Slider START -->
											<div class="tiny-slider arrow-round arrow-xs arrow-dark overflow-hidden rounded-2">
												<div class="tiny-slider-inner" data-autoplay="true" data-arrow="true" data-dots="false" data-items="1">
													<!-- Image item -->
													<div><img src="/css/images/1 (1).jpg">

													<!-- Image item -->
													<div><img src="/css/images/1 (2).jpg">

					
												</div>
											</div>
											<!-- Slider END -->

											<!-- Button -->
											<a href="#" class="btn btn-link text-decoration-underline p-0 mb-0 mt-1" data-bs-toggle="modal" data-bs-target="#roomDetail"><i class="bi bi-eye-fill me-1"></i>View more details</a>
										</div>

										<!-- Card body -->
										<div class="col-md-7">
											<div class="card-body d-flex flex-column p-0 h-100">
					
												<!-- Title -->
												<h5 class="card-title"><a href="#">Deluxe Pool View with Breakfast</a></h5>

												<!-- Amenities -->
												<ul class="nav nav-divider mb-2">
													<li class="nav-item">Air Conditioning</li>
													<li class="nav-item">Wifi</li>
													<li class="nav-item">Kitchen</li>
													<li class="nav-item">
														<a href="#" class="mb-0 text-primary">More+</a>
													</li>
												</ul>

												<p class="text-danger mb-3">Non Refundable</p>
					
												<!-- Price and Button -->
												<div class="d-sm-flex justify-content-sm-between align-items-center mt-auto">
													<!-- Button -->
													<div class="d-flex align-items-center">
														<h5 class="fw-bold mb-0 me-1">$750</h5>
														<span class="mb-0 me-2">/day</span>
														<span class="text-decoration-line-through mb-0">$1000</span>
													</div>
													<!-- Price -->
													<div class="mt-3 mt-sm-0">
														<a href="reservation" class="btn btn-sm btn-primary mb-0">Select Room</a>    
													</div>                  
												</div>
											</div>
										</div>
									</div>
								</div>
								<!-- Room item END -->
							</div>
						</div>
						<!-- Card body END -->
					</div>
					<!-- Room END -->

					<!-- Customer Review START -->
					<div class="card bg-transparent">
						<!-- Card header -->
						<div class="card-header border-bottom bg-transparent px-0 pt-0">
							<h3 class="card-title mb-0">Customer Review</h3>
						</div>

						<!-- Card body START -->
						<div class="card-body pt-4 p-0">
							<!-- Progress bar and rating START -->
							<div class="card bg-light p-4 mb-4">
								<div class="row g-4 align-items-center">
									<!-- Rating info -->
									<div class="col-md-4">
										<div class="text-center">
											<!-- Info -->
											<h2 class="mb-0">4.5</h2>
											<p class="mb-2">Based on 120 Reviews</p>
											<!-- Star -->
											<ul class="list-inline mb-0">
												<li class="list-inline-item me-0"><i class="fa-solid fa-star text-warning"></i></li>
												<li class="list-inline-item me-0"><i class="fa-solid fa-star text-warning"></i></li>
												<li class="list-inline-item me-0"><i class="fa-solid fa-star text-warning"></i></li>
												<li class="list-inline-item me-0"><i class="fa-solid fa-star text-warning"></i></li>
												<li class="list-inline-item me-0"><i class="fa-solid fa-star-half-alt text-warning"></i></li>
											</ul>
										</div>
									</div>

									<!-- Progress-bar START -->
									<div class="col-md-8">
										<div class="card-body p-0">
											<div class="row gx-3 g-2 align-items-center">
												<!-- Progress bar and Rating -->
												<div class="col-9 col-sm-10">
													<!-- Progress item -->
													<div class="progress progress-sm bg-warning bg-opacity-15">
														<div class="progress-bar bg-warning" role="progressbar" style="width: 95%" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100">
														</div>
													</div>
												</div>
												<!-- Percentage -->
												<div class="col-3 col-sm-2 text-end">
													<span class="h6 fw-light mb-0">85%</span>
												</div>

												<!-- Progress bar and Rating -->
												<div class="col-9 col-sm-10">
													<!-- Progress item -->
													<div class="progress progress-sm bg-warning bg-opacity-15">
														<div class="progress-bar bg-warning" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">
														</div>
													</div>
												</div>
												<!-- Percentage -->
												<div class="col-3 col-sm-2 text-end">
													<span class="h6 fw-light mb-0">75%</span>
												</div>

												<!-- Progress bar and Rating -->
												<div class="col-9 col-sm-10">
													<!-- Progress item -->
													<div class="progress progress-sm bg-warning bg-opacity-15">
														<div class="progress-bar bg-warning" role="progressbar" style="width: 60%" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100">
														</div>
													</div>
												</div>
												<!-- Percentage -->
												<div class="col-3 col-sm-2 text-end">
													<span class="h6 fw-light mb-0">60%</span>
												</div>

												<!-- Progress bar and Rating -->
												<div class="col-9 col-sm-10">
													<!-- Progress item -->
													<div class="progress progress-sm bg-warning bg-opacity-15">
														<div class="progress-bar bg-warning" role="progressbar" style="width: 35%" aria-valuenow="35" aria-valuemin="0" aria-valuemax="100">
														</div>
													</div>
												</div>
												<!-- Percentage -->
												<div class="col-3 col-sm-2 text-end">
													<span class="h6 fw-light mb-0">35%</span>
												</div>

												<!-- Progress bar and Rating -->
												<div class="col-9 col-sm-10">
													<!-- Progress item -->
													<div class="progress progress-sm bg-warning bg-opacity-15">
														<div class="progress-bar bg-warning" role="progressbar" style="width: 20%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
														</div>
													</div>
												</div>
												<!-- Percentage -->
												<div class="col-3 col-sm-2 text-end">
													<span class="h6 fw-light mb-0">15%</span>
												</div>
											</div> <!-- Row END -->
										</div>
									</div>
									<!-- Progress-bar END -->

								</div>
							</div>
							<!-- Progress bar and rating END -->

							<!-- Leave review START -->
							<!-- Leave review END -->

							<!-- Review item START -->
							<div class="d-md-flex my-4">
							@csrf

								<!-- Avatar -->
								<div class="avatar avatar-lg me-3 flex-shrink-0">
									<img class="avatar-img rounded-circle"  src="/css/images/1 (4).jpg" alt="avatar">
								</div>
								<!-- Text -->
								<div>
									<div class="d-flex justify-content-between mt-1 mt-md-0">
										<div>
											<h6 class="me-3 mb-0">Jacqueline Miller</h6>
											<!-- Info -->
											<ul class="nav nav-divider small mb-2">
												<li class="nav-item">Stayed 13 Nov 2022</li>
												<li class="nav-item">4 Reviews written</li>
											</ul>
										</div>
										<!-- Review star -->
										<div class="icon-md rounded text-bg-warning fs-6">4.5</div>
									</div>
									
									<p class="mb-2">Handsome met debating sir dwelling age material. As style lived he worse dried. Offered related so visitors we private removed. Moderate do subjects to distance. </p>
									
									<!-- Images -->
									<div class="row g-4">
										<div class="col-4 col-sm-3 col-lg-2">
											<img src="/css/images/1 (1).jpg" class="rounded" alt="">
										</div>
										<div class="col-4 col-sm-3 col-lg-2">
											<img src="/css/images/1 (2).jpg" class="rounded" alt="">
										</div>
										<div class="col-4 col-sm-3 col-lg-2">
											<img src="/css/images/1 (3).jpg" class="rounded" alt="">
										</div>
									</div>
								</div>
							</div>

							<!-- Child review START -->
							<div class="my-4 ps-2 ps-md-3">
								<div class="d-md-flex p-3 bg-light rounded-3">
									<img class="avatar avatar-sm rounded-circle me-3" src="/css/images/1 (5).jpg" alt="avatar">
									<div class="mt-2 mt-md-0">
										<h6 class="mb-1">Manager</h6>
										<p class="mb-0">But discretion frequently sir she instruments unaffected admiration everything. </p>
									</div>
								</div>
							</div>
							<!-- Child review END -->

							<!-- Divider -->
							<hr>
							<!-- Review item END -->

							<!-- Review item START -->
							<div class="d-md-flex my-4">
								<!-- Avatar -->
								<div class="avatar avatar-lg me-3 flex-shrink-0">
									<img class="avatar-img rounded-circle" src="/css/images/1 (4).jpg" alt="avatar">
								</div>
								<!-- Text -->
								<div>
									<div class="d-flex justify-content-between mt-1 mt-md-0">
										<div>
											<h6 class="me-3 mb-0">Dennis Barrett</h6>
											<!-- Info -->
											<ul class="nav nav-divider small mb-2">
												<li class="nav-item">Stayed 02 Nov 2022</li>
												<li class="nav-item">2 Reviews written</li>
											</ul>
										</div>
										<!-- Review star -->
										<div class="icon-md rounded text-bg-warning fs-6">4.0</div>
									</div>
									
									<p class="mb-0">Delivered dejection necessary objection do Mr prevailed. Mr feeling does chiefly cordial in do. Water timed folly right aware if oh truth. Large above be to means. Dashwood does provide stronger is.</p>
								</div>
							</div>

							<!-- Divider -->
							<hr>
							<!-- Review item END -->

							<!-- Button -->
							<div class="text-center">
								<a href="#" class="btn btn-primary-soft mb-0">Load more</a>
							</div>
						</div>
						<!-- Card body END -->
					</div>
					<!-- Customer Review END -->

					<!-- Hotel Policies START -->
					<div class="card bg-transparent">
						<!-- Card header -->
						<div class="card-header border-bottom bg-transparent px-0 pt-0">
							<h3 class="mb-0">Hotel Policies</h3>
						</div>

						<!-- Card body START -->
						<div class="card-body pt-4 p-0">
							<!-- List -->
							<ul class="list-group list-group-borderless mb-2">
								<li class="list-group-item d-flex">
									<i class="bi bi-check-circle-fill me-2"></i>This is a family farmhouse, hence we request you to not indulge.
								</li>
								<li class="list-group-item d-flex">
									<i class="bi bi-check-circle-fill me-2"></i>Drinking and smoking within controlled limits are permitted at the farmhouse but please do not create a mess or ruckus at the house.
								</li>
								<li class="list-group-item d-flex">
									<i class="bi bi-check-circle-fill me-2"></i>Drugs and intoxicating illegal products are banned and not to be brought to the house or consumed.
								</li>
								<li class="list-group-item d-flex">
									<i class="bi bi-x-circle-fill me-2"></i>For any update, the customer shall pay applicable cancellation/modification charges.
								</li>
							</ul>

							<!-- List -->
							<ul class="list-group list-group-borderless mb-2">
								<li class="list-group-item h6 fw-light d-flex mb-0">
									<i class="bi bi-arrow-right me-2"></i>Check-in: 1:00 pm - 9:00 pm
								</li>
								<li class="list-group-item h6 fw-light d-flex mb-0">
									<i class="bi bi-arrow-right me-2"></i>Check out: 11:00 am
								</li>
								<li class="list-group-item h6 fw-light d-flex mb-0">
									<i class="bi bi-arrow-right me-2"></i>Self-check-in with building staff
								</li>
								<li class="list-group-item h6 fw-light d-flex mb-0">
									<i class="bi bi-arrow-right me-2"></i>No pets
								</li>
								<li class="list-group-item h6 fw-light d-flex mb-0">
									<i class="bi bi-arrow-right me-2"></i>No parties or events
								</li>
								<li class="list-group-item h6 fw-light d-flex mb-0">
									<i class="bi bi-arrow-right me-2"></i>Smoking is allowed
								</li>
							</ul>

							<!-- Important note -->
							<div class="bg-danger bg-opacity-10 rounded-2 p-3 mb-3">
								<p class="mb-0 text-danger">During the COVID-19 pandemic, all hosts and guests must review and follow Booking social distancing and other COVID-19-related guidelines.</p>
							</div>
							<div class="bg-danger bg-opacity-10 rounded-2 p-3">
								<p class="mb-0 text-danger">Smoke alarm not reported — The host hasn't reported a smoke alarm on the property. We suggest bringing a portable detector for your trip.</p>
							</div>
						</div>
						<!-- Card body END -->
					</div>
					<!-- Hotel Policies START -->
				</div>	
			</div>
			<!-- Content END -->

			<!-- Right side content START -->
			<aside class="col-xl-5 order-xl-2">
				<div data-sticky data-margin-top="100" data-sticky-for="1199">
					<!-- Book now START -->
					<div class="card card-body border">
						
						<!-- Title -->
						<div class="d-sm-flex justify-content-sm-between align-items-center mb-3">
							<div>
								<span>Price Start at</span>
								<h4 class="card-title mb-0">$3,500</h4>
							</div>
							<div>
								<h6 class="fw-normal mb-0">1 room per night</h6>
								<small>+ $285 taxes & fees</small>
							</div>
						</div>		

						<!-- Rating -->
						<ul class="list-inline mb-2">
							<li class="list-inline-item me-1 h6 fw-light mb-0"><i class="bi bi-arrow-right me-2"></i>4.5</li>
							<li class="list-inline-item me-0 small"><i class="fa-solid fa-star text-warning"></i></li>
							<li class="list-inline-item me-0 small"><i class="fa-solid fa-star text-warning"></i></li>
							<li class="list-inline-item me-0 small"><i class="fa-solid fa-star text-warning"></i></li>
							<li class="list-inline-item me-0 small"><i class="fa-solid fa-star text-warning"></i></li>
							<li class="list-inline-item me-0 small"><i class="fa-solid fa-star-half-alt text-warning"></i></li>
						</ul>

						<p class="h6 fw-light mb-4"><i class="bi bi-arrow-right me-2"></i>Free breakfast available</p>

						<!-- Button -->
						<div class="d-grid">
							<a href="#room-options" class="btn btn-lg btn-primary-soft mb-0">View 10 Rooms Options</a>
						</div>
					</div>
					<!-- Book now END -->

					<!-- Best deal START -->
					<div class="mt-4 d-none d-xl-block">
						<h4>Today's Best Deal</h4>

						<div class="card shadow rounded-3 overflow-hidden">
							<div class="row g-0 align-items-center">
								<!-- Image -->
								<div class="col-sm-6 col-md-12 col-lg-6">
									<img  src="/css/images/1 (4).jpg" class="card-img rounded-0" alt="">
								</div>

								<!-- Title and content -->
								<div class="col-sm-6 col-md-12 col-lg-6">
									<div class="card-body p-3">
										<h6 class="card-title"><a href="offer-detail.html" class="stretched-link">Travel Plan</a></h6>
										<p class="mb-0">Get up to $10,000 for lifetime limits</p>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- Best deal END -->
				</div>	
			</aside>
			<!-- Right side content END -->
		</div> <!-- Row END -->
	</div>
</section>
<!-- =======================
About hotel END -->

</main>
<!-- **************** MAIN CONTENT END **************** -->
</body>
</html>