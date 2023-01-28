@extends('admin.layouts.app')

@section('admin-content')
{{-- Page --}}
<div class="app-page flex-column flex-column-fluid" id="kt_app_page">
    <!--begin::Header-->
    <div id="kt_app_header" class="app-header" data-kt-sticky="true" data-kt-sticky-activate="{default: false, lg: true}" data-kt-sticky-name="app-header-sticky" data-kt-sticky-offset="{default: false, lg: '300px'}">
        <!--begin::Header container-->
        <div class="app-container container-fluid d-flex flex-stack" id="kt_app_header_container">



            <!--begin::Sidebar toggle-->
            @include('admin.layouts.toggle')
            <!--end::Sidebar toggle-->


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
                        <li class="breadcrumb-item text-gray-600 fw-bold lh-1">Dashboard</li>
                        <!--end::Item-->
                    </ul>
                    <!--end::Breadcrumb-->
                    <!--begin::Title-->
                    <h1 class="text-gray-900 fw-bolder m-0">Dashboard</h1>
                    <!--end::Title-->
                </div>
                <!--end::Page title-->
                <!--begin::Action-->
                <a href="#" class="btn btn-primary d-flex flex-center h-35px h-lg-40px" data-bs-toggle="modal" data-bs-target="#kt_modal_new_target">Create
                <span class="d-none d-sm-inline ps-2">New</span></a>
				
                <!--end::Action-->
            </div>
            <!--end::Header wrapper-->
        </div>
        <!--end::Header container-->
    </div>
    <!--end::Header-->
    <!--begin::Wrapper-->
    <div class="app-wrapper flex-column flex-row-fluid" id="kt_app_wrapper">
        <!--begin::Main-->
        <div class="app-main flex-column flex-row-fluid" id="kt_app_main">
            <!--begin::Content wrapper-->
            <div class="d-flex flex-column flex-column-fluid">
                <!--begin::Content-->
                <div id="kt_app_content" class="app-content flex-column-fluid">
                    <!--begin::Content container-->
                    <div id="kt_app_content_container" class="app-container container-fluid">
                                    <!--begin::Row-->
                                    <!--begin::Row-->
									<div class="row g-5 g-xl-10 mb-xl-10">
										<!--begin::Col-->
										<div class="col-md-6 col-lg-6 col-xl-6 col-xxl-4 mb-md-5 mb-xl-10">
											<!--begin::Card widget 4-->
											<div class="card card-flush h-md-50 mb-5 mb-xl-10">
												<!--begin::Header-->
												<div class="card-header pt-5">
													<!--begin::Title-->
													<div class="card-title d-flex flex-column">
														<!--begin::Info-->
														<div class="d-flex align-items-center">
															<!--begin::Currency-->
															<span class="fs-4 fw-semibold text-gray-400 me-1 align-self-start">$</span>
															<!--end::Currency-->
															<!--begin::Amount-->
															<span class="fs-2hx fw-bold text-dark me-2 lh-1 ls-n2">69,700</span>
															<!--end::Amount-->
															
														</div>
														<!--end::Info-->
														<!--begin::Subtitle-->
														<span class="text-gray-400 pt-1 fw-semibold fs-6">Total Earnings</span>
														<!--end::Subtitle-->
													</div>
													<!--end::Title-->
												</div>
												<!--end::Header-->
												<!--begin::Card body-->
												<div class="card-body pt-2 pb-4 d-flex align-items-center">
													
													<!--begin::Labels-->
													<div class="d-flex flex-column content-justify-center w-100">
														<!--begin::Label-->
														<div class="d-flex fs-6 fw-semibold align-items-center">
															<!--begin::Bullet-->
															<div class="bullet w-8px h-6px rounded-2 bg-danger me-3"></div>
															<!--end::Bullet-->
															<!--begin::Label-->
															<div class="text-gray-500 flex-grow-1 me-4">Starter</div>
															<!--end::Label-->
															<!--begin::Stats-->
															<div class="fw-bolder text-gray-700 text-xxl-end">$7,660</div>
															<!--end::Stats-->
														</div>
														<!--end::Label-->
														<!--begin::Label-->
														<div class="d-flex fs-6 fw-semibold align-items-center my-3">
															<!--begin::Bullet-->
															<div class="bullet w-8px h-6px rounded-2 bg-primary me-3"></div>
															<!--end::Bullet-->
															<!--begin::Label-->
															<div class="text-gray-500 flex-grow-1 me-4">Standard</div>
															<!--end::Label-->
															<!--begin::Stats-->
															<div class="fw-bolder text-gray-700 text-xxl-end">$2,820</div>
															<!--end::Stats-->
														</div>
														<!--end::Label-->
														<!--begin::Label-->
														<div class="d-flex fs-6 fw-semibold align-items-center">
															<!--begin::Bullet-->
															<div class="bullet w-8px h-6px rounded-2 me-3" style="background-color: #5e78f0"></div>
															<!--end::Bullet-->
															<!--begin::Label-->
															<div class="text-gray-500 flex-grow-1 me-4">Premium</div>
															<!--end::Label-->
															<!--begin::Stats-->
															<div class="fw-bolder text-gray-700 text-xxl-end">$45,257</div>
															<!--end::Stats-->
														</div>
														<!--end::Label-->
													</div>
													<!--end::Labels-->
												</div>
												<!--end::Card body-->
											</div>
											<!--end::Card widget 4-->
											<!--begin::Card widget 5-->
											<div class="card card-flush h-md-50 mb-xl-10">
												<!--begin::Header-->
												<div class="card-header pt-5">
													<!--begin::Title-->
                                                    
													<div class="card-title d-flex flex-column">
														<!--begin::Info-->
														<div class="d-flex align-items-center">
                                                            <i class="fonticon-user fs-2 dash-icons"></i>
														</div>
														<!--end::Info-->
														
													</div>
													<!--end::Title-->
												</div>
												<!--end::Header-->
												<!--begin::Card body-->
												<div class="card-body d-flex align-items-end pt-0">
													<!--begin::Amount-->
                                                    <span class="fs-2hx fw-bold text-dark me-2 lh-1 ls-n2">1,836</span>
                                                    <!--end::Amount-->
                                                    <!--begin::Subtitle-->
														<span class="text-gray-400 pt-1 fw-semibold fs-6">Total Users</span>
														<!--end::Subtitle-->
												</div>
												<!--end::Card body-->
											</div>
											<!--end::Card widget 5-->
											
										</div>
										<!--end::Col-->
										
										<!--begin::Col-->
										<div class="col-lg-12 col-xl-12 col-xxl-8 mb-5 mb-xl-0">
											{{-- Chart start --}}
											{{-- Chart end --}}
											<!--begin::Table Widget 4-->
											<div class="card card-flush h-xl-100">
												<!--begin::Card header-->
												<div class="card-header pt-7">
													<!--begin::Title-->
													<h3 class="card-title align-items-start flex-column">
														<span class="card-label fw-bold text-gray-800">Subscribed Users</span>
														
													</h3>
													<!--end::Title-->
													
												</div>
												<!--end::Card header-->
												<!--begin::Card body-->
												<div class="card-body pt-2">
													<!--begin::Table-->
													<table class="table align-middle table-row-dashed fs-6 gy-3" id="kt_table_widget_4_table">
														<!--begin::Table head-->
														<thead>
															<!--begin::Table row-->
															<tr class="text-start text-gray-400 fw-bold fs-7 text-uppercase gs-0">
																<th class="min-w-100px">User</th>
																<th class="text-end min-w-100px">Subscribed To</th>
																<th class="text-end min-w-125px">Joined Dated</th>
																<th class="text-end min-w-100px">Actions</th>
																
															</tr>
															<!--end::Table row-->
														</thead>
														<!--end::Table head-->
														<!--begin::Table body-->
														<tbody class="fw-bold text-gray-600">
															
															<tr>
																<td class="text-start">Anthony</td>
																
																<td class="text-center">
																	<span class="badge py-3 px-4 fs-7 badge-light-warning">Starter</span>
																</td>
                                                                <td class="text-end">1st January, 2023</td>
																<td class="text-end">
                                                                    <a href="#" class="btn btn-light btn-active-light-primary btn-sm" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                                                        Actions
                                                                        </a>
                                                                        <!--begin::Menu-->
                                                                        <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true" style="">
                                                                            <!--begin::Menu item-->
                                                                            <div class="menu-item px-3">
                                                                                <a href="/metronic8/demo27/../demo27/apps/user-management/users/view.html" class="menu-link px-3">
                                                                                    View
                                                                                </a>
                                                                            </div>
                                                                            <!--end::Menu item-->
                                                                            
                                                                            <!--begin::Menu item-->
                                                                            <div class="menu-item px-3">
                                                                                <a href="#" class="menu-link px-3" data-kt-users-table-filter="delete_row">
                                                                                    Delete
                                                                                </a>
                                                                            </div>
                                                                            <!--end::Menu item-->
                                                                        </div>
                                                                        <!--end::Menu-->
                                                                </td>
																
																
																
															</tr>
															
														</tbody>
														<!--end::Table body-->
													</table>
													<!--end::Table-->
												</div>
												<!--end::Card body-->
											</div>
											<!--end::Table Widget 4-->
										</div>
										<!--end::Col-->
									</div>
									<!--end::Row-->
                        <!--end::Row-->
                        
                        
                        
                    </div>
                    <!--end::Content container-->
                </div>
                <!--end::Content-->
            </div>
            <!--end::Content wrapper-->
            <!--begin::Footer-->
            @include('admin.layouts.footer')
            <!--end::Footer-->
        </div>
        <!--end:::Main-->
    </div>
    <!--end::Wrapper-->
</div>
@endsection