@extends('user.layouts.app')
@section('user-content')

<div class="app-page flex-column flex-column-fluid" id="kt_app_page">
	<!--begin::Header-->
	<div id="kt_app_header" class="app-header">
		<!--begin::Header container-->
		<div class="app-container container-fluid d-flex align-items-stretch justify-content-between" id="kt_app_header_container">

			{{-- Mobile toggle and logo --}}
			@include('user.layouts.mobile')
			{{-- End::Mobile toggle and logo --}}


			<!--begin::Header wrapper-->
			<div class="d-flex flex-stack flex-lg-row-fluid" id="kt_app_header_wrapper">
				<!--begin::Page title-->
				<div class="page-title gap-4 me-3 mb-5 mb-lg-0" data-kt-swapper="true" data-kt-swapper-mode="{default: 'prepend', lg: 'prepend'}" data-kt-swapper-parent="{default: '#kt_app_content_container', lg: '#kt_app_header_wrapper'}">
					<!--begin::Breadcrumb-->
					<ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 mb-2">
						<!--begin::Item-->
						<li class="breadcrumb-item text-gray-600 fw-bold lh-1">
							<a href="#" class="text-gray-700 text-hover-primary me-1">
								<i class="fonticon-home text-gray-700 fs-3"></i>
							</a>
						</li>
					<!--end::Item-->
					<!--begin::Item-->
					<li class="breadcrumb-item">
						<!--begin::Svg Icon | path: icons/duotune/arrows/arr071.svg-->
						<span class="svg-icon svg-icon-4 svg-icon-gray-700 mx-n1">
							<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
								<path d="M12.6343 12.5657L8.45001 16.75C8.0358 17.1642 8.0358 17.8358 8.45001 18.25C8.86423 18.6642 9.5358 18.6642 9.95001 18.25L15.4929 12.7071C15.8834 12.3166 15.8834 11.6834 15.4929 11.2929L9.95001 5.75C9.5358 5.33579 8.86423 5.33579 8.45001 5.75C8.0358 6.16421 8.0358 6.83579 8.45001 7.25L12.6343 11.4343C12.9467 11.7467 12.9467 12.2533 12.6343 12.5657Z" fill="currentColor" />
							</svg>
						</span>
						<!--end::Svg Icon-->
					</li>
					<!--end::Item-->
					<!--begin::Item-->
					<li class="breadcrumb-item text-gray-600 fw-bold lh-1">User Dashboard</li>
					<!--end::Item-->
					</ul>
					<!--end::Breadcrumb-->
					<!--begin::Title-->
					<h1 class="text-gray-900 fw-bolder m-0">Dashboard</h1>
					<!--end::Title-->
				</div>
				<!--end::Page title-->
				<!--begin::Action-->
				<a href="#" class="btn btn-primary d-flex flex-center h-35px h-lg-40px" data-bs-toggle="modal" data-bs-target="#kt_modal_create_app">Get Started</a>
				<!--end::Action-->
			</div>
			<!--end::Header wrapper-->
		</div>
		<!--end::Header container-->
	</div>
	<!--end::Header-->
	<!--begin::Wrapper-->
	<div class="app-wrapper flex-column flex-row-fluid" id="kt_app_wrapper">

		<!--begin::Sidebar-->
		@include('user.layouts.sidebar')
		<!--end::Sidebar-->

		<!--begin::Main-->
		<div class="app-main flex-column flex-row-fluid" id="kt_app_main">

			<!--begin::Content wrapper-->
			<div class="d-flex flex-column flex-column-fluid">
				<!--begin::Content-->
				<div id="kt_app_content" class="app-content flex-column-fluid">
					<!--begin::Content container-->
					<div id="kt_app_content_container" class="app-container container-fluid">
						{{-- Alert Row --}}
						<!--begin::Row-->
						@if (\Session::has('success'))
						<div class="row g-6 g-xl-9 pt-10">
							<div class="col-md-12">
								<div class="alert alert-dismissible bg-success d-flex flex-column flex-sm-row w-100 p-5 mb-10">
									<!--begin::Icon-->
									<!--begin::Svg Icon | path: icons/duotune/art/art005.svg-->
									<span class="svg-icon svg-icon-2hx svg-icon-light me-4 mb-5 mb-sm-0"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
										<path opacity="0.3" d="M20.5543 4.37824L12.1798 2.02473C12.0626 1.99176 11.9376 1.99176 11.8203 2.02473L3.44572 4.37824C3.18118 4.45258 3 4.6807 3 4.93945V13.569C3 14.6914 3.48509 15.8404 4.4417 16.984C5.17231 17.8575 6.18314 18.7345 7.446 19.5909C9.56752 21.0295 11.6566 21.912 11.7445 21.9488C11.8258 21.9829 11.9129 22 12.0001 22C12.0872 22 12.1744 21.983 12.2557 21.9488C12.3435 21.912 14.4326 21.0295 16.5541 19.5909C17.8169 18.7345 18.8277 17.8575 19.5584 16.984C20.515 15.8404 21 14.6914 21 13.569V4.93945C21 4.6807 20.8189 4.45258 20.5543 4.37824Z" fill="currentColor"></path>
										<path d="M10.5606 11.3042L9.57283 10.3018C9.28174 10.0065 8.80522 10.0065 8.51412 10.3018C8.22897 10.5912 8.22897 11.0559 8.51412 11.3452L10.4182 13.2773C10.8099 13.6747 11.451 13.6747 11.8427 13.2773L15.4859 9.58051C15.771 9.29117 15.771 8.82648 15.4859 8.53714C15.1948 8.24176 14.7183 8.24176 14.4272 8.53714L11.7002 11.3042C11.3869 11.6221 10.874 11.6221 10.5606 11.3042Z" fill="currentColor"></path>
										</svg>
									</span>
									<!--end::Svg Icon-->
				
									<!--begin::Content-->
									<div class="d-flex flex-column text-light pe-0 pe-sm-10">
										<h4 class="mb-2 text-light">{!! \Session::get('success') !!}</h4>
										<span>You can start your AI writing now!</span>
									</div>
									<!--end::Content-->
				
									<!--begin::Close-->
									<button type="button" class="position-absolute position-sm-relative m-2 m-sm-0 top-0 end-0 btn btn-icon ms-sm-auto" data-bs-dismiss="alert">
										<!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
									<span class="svg-icon svg-icon-2x svg-icon-light"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
									<rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1" transform="rotate(-45 6 17.3137)" fill="currentColor"></rect>
									<rect x="7.41422" y="6" width="16" height="2" rx="1" transform="rotate(45 7.41422 6)" fill="currentColor"></rect>
									</svg>
									
									</span>
				                   </button>
									<!--end::Close-->
								</div>
							</div>
						</div>
						@endif


						<div class="row g-6 g-xl-9 pt-10">
							<!--begin::Col-->
							<div class="col-md-6 col-xl-4">
								<div class="card-title pb-2"><h3>Recommended Functions</h3></div>
								<!--begin::Card-->
								<a href="{{ route('blog.show') }}">
									<div class="card shadow-sm hover-elevate-up" style="padding: 11px 0">
										<div class="card-body">
											{{-- <i class="bi bi-pencil rounded" style="font-size: 1.5rem"></i> --}}
											<div class="symbol symbol-40px me-4">
												<div class="symbol-label fs-2 fw-semibold bg-primary text-inverse-primary"><i class="bi bi-pencil text-light" style="font-size: 1.5rem"></i></div>
											</div>
											<h3 class="mt-3">Marketing</h3>
											<p class="text-dark">Lorem ipsum dolor, sit amet consectetur adipisicing elit. </p>
										</div>
									</div>
								</a>
								<!--end::Card-->
								<a href="{{ route('blog.show') }}">
									<div class="card shadow-sm hover-elevate-up mt-10" style="padding: 11px 0">
										<div class="card-body">
											{{-- <i class="bi bi-pencil rounded" style="font-size: 1.5rem"></i> --}}
											<div class="symbol symbol-40px me-4">
												<div class="symbol-label fs-2 fw-semibold bg-primary text-inverse-primary"><i class="bi bi-person-up text-light" style="font-size: 1.5rem"></i></div>
											</div>
											<h3 class="mt-3">HR</h3>
											<p class="text-dark">Lorem ipsum dolor, sit amet consectetur adipisicing elit. </p>
										</div>
									</div>
								</a>


							</div>
							<div class="col-md-6 col-xl-4">
								<div class="card-title pb-2"><h3 style="color: transparent">Recommended Functions</h3></div>
								<!--begin::Card-->
								<a href="{{ route('blog.show') }}">
									<div class="card shadow-sm hover-elevate-up" style="padding: 11px 0">
										<div class="card-body">
											{{-- <i class="bi bi-pencil rounded" style="font-size: 1.5rem"></i> --}}
											<div class="symbol symbol-40px me-4">
												<div class="symbol-label fs-2 fw-semibold bg-primary text-inverse-primary"><i class="bi bi-receipt text-light" style="font-size: 1.5rem"></i></div>
											</div>
											<h3 class="mt-3">Sales</h3>
											<p class="text-dark">Lorem ipsum dolor, sit amet consectetur adipisicing elit. </p>
										</div>
									</div>
								</a>
								<!--end::Card-->

								<!--begin::Card-->
								<a href="{{ route('blog.show') }}">
									<div class="card shadow-sm hover-elevate-up mt-10" style="padding: 11px 0">
										<div class="card-body">
											{{-- <i class="bi bi-pencil rounded" style="font-size: 1.5rem"></i> --}}
											<div class="symbol symbol-40px me-4">
												<div class="symbol-label fs-2 fw-semibold bg-primary text-inverse-primary"><i class="bi bi-card-image text-light" style="font-size: 1.5rem"></i></div>
											</div>
											<h3 class="mt-3">Image Generation</h3>
											<p class="text-dark">Lorem ipsum dolor, sit amet consectetur adipisicing elit. </p>
										</div>
									</div>
								</a>
								<!--end::Card-->

								

							</div>
							<!--end::Col-->

							<!--begin::Col-->
							
							<div class="col-md-6 col-xl-4">
								<div class="card-title pb-2"><h3>Earn Free Words!</h3></div>
								<!--begin::Card-->
								<a href="#" class="card border-hover-primary">
									<!--begin::Card header-->
									<div class="card-header border-0 pt-9 pb-0">
										<!--begin::Card Title-->
										<div class="card-title">
											<!--begin::Avatar-->
											Refer a friend!
											<!--end::Avatar-->

												<span class="badge badge-light-warning" style="margin-left: 10px">1000 Words!</span>

										</div>
										<!--end::Car Title-->

									</div>
									<!--end:: Card header-->
									<!--begin:: Card body-->
									<div class="card-body pt-0">

										<!--begin::Description-->
										<p class="text-gray-400 fw-semibold fs-5 mt-1 mb-7">Share this tool with your friends and earn 1000 free words</p>
										<!--end::Description-->
										<div class="symbol symbol-80px w-50px">
											<i class="fonticon-send" style="font-size: 30px"></i>
										</div>

									</div>
									<!--end:: Card body-->
								</a>
								<!--end::Card-->

								<!--begin::Card-->
								<div class="card card-flush bgi-no-repeat bgi-size-contain bgi-position-x-end mb-5 mb-xl-10 pb-5 mt-10" style="height: 43.3%;background-color: #2666F9;background-image:url('/metronic8/demo1/assets/media/patterns/vector-1.png')">
									<!--begin::Header-->
									<div class="card-header pt-5">
										<!--begin::Title-->
										<div class="card-title d-flex flex-column">
											<!--begin::Amount-->
											<span class="fs-2hx fw-bold text-white me-2 lh-1 ls-n2">@php 
												if ($user_data[0]->package_name == 'Basic') {
												echo 1000 - $user_data[0]->word_limit;
											}
											if ($user_data[0]->package_name == 'Standard') {
												echo 2000 - $user_data[0]->word_limit;
											} 
											if ($user_data[0]->package_name == 'Premium') {
												echo 3000 - $user_data[0]->word_limit;
											}
											@endphp</span>
											<!--end::Amount-->

											<!--begin::Subtitle-->
											<span class="text-white opacity-85 pt-1 fw-semibold fs-6">Words Used</span>
											<!--end::Subtitle-->
										</div>
										<!--end::Title-->
										<!--begin::Title-->
										<div class="d-flex flex-column">
											<!--begin::Amount-->
											<a href="{{ route('user.billing') }}" class="btn btn-sm btn-light text-black opacity-85 fw-semibold">See more</a>
											<!--end::Amount-->
										</div>
										<!--end::Title-->
									</div>
									<!--end::Header-->

									<!--begin::Card body-->
									<div class="card-body d-flex align-items-end pt-0">
										<!--begin::Progress-->
										<div class="d-flex align-items-center flex-column mt-3 w-100">
											<div class="d-flex justify-content-between fw-bold fs-6 text-white opacity-85 w-100 mt-auto mb-2">
												<span class="text-white">Words</span>
												<span class="text-white"> 
													@php 
													if ($user_data[0]->package_name == 'Basic') {
													echo 1000 - $user_data[0]->word_limit;
												}
												if ($user_data[0]->package_name == 'Standard') {
													echo 2000 - $user_data[0]->word_limit;
												} 
												if ($user_data[0]->package_name == 'Premium') {
													echo 3000 - $user_data[0]->word_limit;
												}
												@endphp of 
													@if ($user_data[0]->package_name == 'Basic')
													1000 
													@endif

													@if ($user_data[0]->package_name == 'Standard')
													2000 
													@endif
													

													@if ($user_data[0]->package_name == 'Premium')
													3000 
													@endif Used</span>
											</div>

											<div class="h-8px mx-3 w-100 bg-white bg-opacity-50 rounded">
												<div class="bg-white rounded h-8px" role="progressbar" style="width: 
												@php 
												if ($user_data[0]->package_name == 'Basic') {
												echo 100 - $user_data[0]->word_limit / 1000 * 100;
											}
											if ($user_data[0]->package_name == 'Standard') {
												echo 100 - $user_data[0]->word_limit / 2000 * 100;
											} 
											if ($user_data[0]->package_name == 'Premium') {
												echo 100 - $user_data[0]->word_limit / 3000 * 100;
											}
											@endphp%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
												<div class="text-white fw-semibold mb-10">{{ $user_data[0]->word_limit }} Words remaining.</div>
											</div>

										</div>
										<!--end::Progress-->
									</div>
									<!--end::Card body-->
								</div>
								<!--end::Card-->



							</div>
							<!--end::Col-->
						</div>
						<!--end::Row-->
					</div>
					<!--end::Content container-->
				</div>
				<!--end::Content-->
			</div>
			<!--end::Content wrapper-->

			<!--begin::Footer-->
				@include('user.layouts.footer')
			<!--end::Footer-->
		</div>

		<!--end:::Main-->
	</div>
	<!--end::Wrapper-->
</div>

@endsection
