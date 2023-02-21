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
					<h1 class="text-gray-900 fw-bolder m-0">Sales</h1>
					<!--end::Title-->
				</div>
				<!--end::Page title-->
				<!--begin::Action-->
				{{-- <a href="#" class="btn btn-primary d-flex flex-center h-35px h-lg-40px" data-bs-toggle="modal" data-bs-target="#kt_modal_new_target">Create
				<span class="d-none d-sm-inline ps-2">Project</span></a> --}}
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



						<!--begin::Row-->
						<div class="row pt-10">
							<div class="col-md-4">
								<a href="">
									<div class="card shadow-sm hover-elevate-up">
										<div class="card-body">
											{{-- <i class="bi bi-pencil rounded" style="font-size: 1.5rem"></i> --}}
											<div class="symbol symbol-40px me-4">
												<div class="symbol-label fs-2 fw-semibold bg-primary text-inverse-primary"><i class="bi bi-pencil text-light" style="font-size: 1.5rem"></i></div>
											</div>
											<h3 class="mt-3">Cold Email</h3>
											<p class="text-dark">Lorem ipsum dolor, sit amet consectetur adipisicing elit. </p>
										</div>
									</div>
								</a>
							</div>
							<div class="col-md-4">
								<a href="#">
									<div class="card shadow-sm hover-elevate-up">
										<div class="card-body">
											{{-- <i class="bi bi-pencil rounded" style="font-size: 1.5rem"></i> --}}
											<div class="symbol symbol-40px me-4">
												<div class="symbol-label fs-2 fw-semibold bg-primary text-inverse-primary"><i class="bi bi-pencil text-light" style="font-size: 1.5rem"></i></div>
											</div>
											<h3 class="mt-3">Subject Lines</h3>
											<p class="text-dark">Lorem ipsum dolor, sit amet consectetur adipisicing elit. </p>
										</div>
									</div>
								</a>
							</div>
							<div class="col-md-4">
								<a href="#">
									<div class="card shadow-sm hover-elevate-up">
										<div class="card-body">
											{{-- <i class="bi bi-pencil rounded" style="font-size: 1.5rem"></i> --}}
											<div class="symbol symbol-40px me-4">
												<div class="symbol-label fs-2 fw-semibold bg-primary text-inverse-primary"><i class="bi bi-pencil text-light" style="font-size: 1.5rem"></i></div>
											</div>
											<h3 class="mt-3">Sales Proposal</h3>
											<p class="text-dark">Lorem ipsum dolor, sit amet consectetur adipisicing elit. </p>
										</div>
									</div>
								</a>
							</div>
						</div>
						<!--end::Row-->		

						<!--begin::Row-->
						<div class="row pt-10">
							<div class="col-md-4">
								<a href="#">
									<div class="card shadow-sm hover-elevate-up">
										<div class="card-body">
											{{-- <i class="bi bi-pencil rounded" style="font-size: 1.5rem"></i> --}}
											<div class="symbol symbol-40px me-4">
												<div class="symbol-label fs-2 fw-semibold bg-primary text-inverse-primary"><i class="bi bi-pencil text-light" style="font-size: 1.5rem"></i></div>
											</div>
											<h3 class="mt-3">Create Sales Strategy</h3>
											<p class="text-dark">Lorem ipsum dolor, sit amet consectetur adipisicing elit. </p>
										</div>
									</div>
								</a>
							</div>
							<div class="col-md-4">
								<a href="#">
									<div class="card shadow-sm hover-elevate-up">
										<div class="card-body">
											{{-- <i class="bi bi-pencil rounded" style="font-size: 1.5rem"></i> --}}
											<div class="symbol symbol-40px me-4">
												<div class="symbol-label fs-2 fw-semibold bg-primary text-inverse-primary"><i class="bi bi-pencil text-light" style="font-size: 1.5rem"></i></div>
											</div>
											<h3 class="mt-3">Objection Handling</h3>
											<p class="text-dark">Lorem ipsum dolor, sit amet consectetur adipisicing elit. </p>
										</div>
									</div>
								</a>
							</div>
							
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