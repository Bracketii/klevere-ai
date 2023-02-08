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
					<h1 class="text-gray-900 fw-bolder m-0">Saved Files</h1>
					<!--end::Title-->
				</div>
				<!--end::Page title-->
				<!--begin::Action-->
				<a href="#" class="btn btn-primary d-flex flex-center h-35px h-lg-40px" data-bs-toggle="modal" data-bs-target="#kt_modal_new_target">Create
				<span class="d-none d-sm-inline ps-2">Project</span></a>
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

                        		
                        
                        <div class="card mt-10">
							<!--begin::Card body-->
							<div class="card-body pt-0 ">
								<!--begin::Table-->
								<table class="table align-middle table-row-dashed fs-6 gy-5" id="kt_customers_table">
									<!--begin::Table head-->
									<thead>
										<!--begin::Table row-->
										<tr class="text-start text-gray-400 fw-bold fs-7 text-uppercase gs-0">
											<th class="">SN</th>
											<th class="min-w-125px">Title</th>
											<th class="min-w-125px">Type</th>
											<th>content</th>
											<th class="min-w-125px">Created Date</th>
											<th class="text-end min-w-70px">Actions</th>
										</tr>
										<!--end::Table row-->
									</thead>
									<!--end::Table head-->
									<!--begin::Table body-->
									@forelse ($history as $histories)
									<tbody class="fw-semibold text-gray-600">
										
										<tr>
											<td>{{ $loop -> index + 1 }}</td>
											<!--begin::Name=-->
											<td>
												<a href="" class="text-gray-800 text-hover-primary mb-1">{{$histories -> title}}</a>
											</td>
											<!--end::Name=-->
											<!--begin::Email=-->
											<td>
												<a href="#" class="badge badge-primary">Jack</a>
											</td>
											<td>{{$histories->content}}</td>
											<!--end::Email=-->
											<!--begin::Date=-->
											<td>{{\carbon\carbon::create($histories->created_at)->format('D-m-y')}}</td>
											<!--end::Date=-->
											<!--begin::Action=-->
											<td class="text-end">
												<a href="#" class="btn btn-sm btn-light btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
												<!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
												<span class="svg-icon svg-icon-5 m-0">
													<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
														<path d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z" fill="currentColor" />
													</svg>
												</span>
												<!--end::Svg Icon--></a>
												<!--begin::Menu-->
												<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
													<!--begin::Menu item-->
													
														
													
													<div class="menu-item px-3">
														<a href="{{ route('showEdit',$histories->id) }}" class="menu-link px-3">Edit</a>
													</div>
													
													<!--end::Menu item-->
													<!--begin::Menu item-->
													<div class="menu-item px-3">
														<a onclick="return confirm('Are You Sure')" href="{{ route('showDelete',$histories->id) }}" class="menu-link px-3" data-kt-customer-table-filter="delete_row">Delete</a>
													</div>
													
													<!--end::Menu item-->
												</div>
												<!--end::Menu-->
											</td>
											<!--end::Action=-->
										</tr>
										
									</tbody>
									<!--end::Table body-->
									@empty
									<tbody class="fw-semibold text-gray-600">
										<tr>
											<td colspan="5">No saved projects</td>
										</tr>
									</tbody>
									<!--end::Table body-->
									@endforelse
									
								</table>
								<!--end::Table-->
							</div>
							<!--end::Card body-->
							
						</div>
						<!--end::Row-->
						<div class="row pt-10">
						{{ $history->links()}}
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






