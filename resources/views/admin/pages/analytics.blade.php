@extends('admin.layouts.app')
@section('admin-content')

<div class="app-page flex-column flex-column-fluid" id="kt_app_page">
	<!--begin::Header-->
	<div id="kt_app_header" class="app-header">
		<!--begin::Header container-->
		<div class="app-container container-fluid d-flex align-items-stretch justify-content-between" id="kt_app_header_container">

			{{-- Mobile toggle and logo --}}
			@include('admin.layouts.mobile')
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
					<li class="breadcrumb-item text-gray-600 fw-bold lh-1">Admin Dashboard</li>
					<!--end::Item-->
					</ul>
					<!--end::Breadcrumb-->
					<!--begin::Title-->
					<h1 class="text-gray-900 fw-bolder m-0">Analytics</h1>
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
		@include('admin.layouts.sidebar')
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
                        <!--begin::Row-->
									<div class="row g-5 g-xl-8 mt-5">
										<div class="col-xl-6">
											<!--begin::Charts Widget 3-->
											<div class="card card-xl-stretch mb-xl-8">
												<!--begin::Header-->
												<div class="card-header border-0 pt-5">
													<h3 class="card-title align-items-start flex-column">
														<span class="card-label fw-bold fs-3 mb-1">Recent Transactions</span>
														<span class="text-muted fw-semibold fs-7">More than 1000 new records</span>
													</h3>
													<!--begin::Toolbar-->
													<div class="card-toolbar" data-kt-buttons="true">
														<a class="btn btn-sm btn-color-muted btn-active btn-active-primary active px-4 me-1" id="kt_charts_widget_3_year_btn">Year</a>
														<a class="btn btn-sm btn-color-muted btn-active btn-active-primary px-4 me-1" id="kt_charts_widget_3_month_btn">Month</a>
														<a class="btn btn-sm btn-color-muted btn-active btn-active-primary px-4" id="kt_charts_widget_3_week_btn">Week</a>
													</div>
													<!--end::Toolbar-->
												</div>
												<!--end::Header-->
												<!--begin::Body-->
												<div class="card-body">
													<!--begin::Chart-->
													<canvas id="myChart" style="height:250px !important;width:350px"></canvas>
													<!--end::Chart-->
												</div>
												<!--end::Body-->
											</div>
											<!--end::Charts Widget 3-->
										</div>
										<div class="col-xl-6">
											<!--begin::Charts Widget 2-->
											<div class="card card-xl-stretch mb-5 mb-xl-8">
												<!--begin::Header-->
												<div class="card-header border-0 pt-5">
													<h3 class="card-title align-items-start flex-column">
														<span class="card-label fw-bold fs-3 mb-1">Recent Orders</span>
														<span class="text-muted fw-semibold fs-7">More than 500 new orders</span>
													</h3>
													<!--begin::Toolbar-->
													<div class="card-toolbar" data-kt-buttons="true">
														<a class="btn btn-sm btn-color-muted btn-active btn-active-primary active px-4 me-1" id="kt_charts_widget_2_year_btn">Year</a>
														<a class="btn btn-sm btn-color-muted btn-active btn-active-primary px-4 me-1" id="kt_charts_widget_2_month_btn">Month</a>
														<a class="btn btn-sm btn-color-muted btn-active btn-active-primary px-4" id="kt_charts_widget_2_week_btn">Week</a>
													</div>
													<!--end::Toolbar-->
												</div>
												<!--end::Header-->
												<!--begin::Body-->
												<div class="card-body">
													<!--begin::Chart-->
													<canvas id="line-chart" style="height:250px !important;width:350px"></canvas>
													<!--end::Chart-->
												</div>
												<!--end::Body-->
											</div>
											<!--end::Charts Widget 2-->
										</div>
									</div>
									<!--end::Row-->
									<!--begin::Row-->
									<div class="row g-5 g-xl-8">
										<div class="col-xl-6">
											<!--begin::Charts Widget 4-->
											<div class="card card-xl-stretch mb-5 mb-xl-8">
												<!--begin::Header-->
												<div class="card-header border-0 pt-5">
													<h3 class="card-title align-items-start flex-column">
														<span class="card-label fw-bold fs-3 mb-1">Recent Customers</span>
														<span class="text-muted fw-semibold fs-7">More than 500 new customers</span>
													</h3>
													<!--begin::Toolbar-->
													<div class="card-toolbar" data-kt-buttons="true">
														<a class="btn btn-sm btn-color-muted btn-active btn-active-primary active px-4 me-1" id="kt_charts_widget_4_year_btn">Year</a>
														<a class="btn btn-sm btn-color-muted btn-active btn-active-primary px-4 me-1" id="kt_charts_widget_4_month_btn">Month</a>
														<a class="btn btn-sm btn-color-muted btn-active btn-active-primary px-4" id="kt_charts_widget_4_week_btn">Week</a>
													</div>
													<!--end::Toolbar-->
												</div>
												<!--end::Header-->
												<!--begin::Body-->
												<div class="card-body">
													<!--begin::Chart-->
													<canvas id="bar-chart-grouped" style="height: 250px !important; width:350px"></canvas>
													<!--end::Chart-->
												</div>
												<!--end::Body-->
											</div>
											<!--end::Charts Widget 4-->
										</div>
										
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
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script>
	<script>
		// Bar chart
new Chart(document.getElementById("myChart"), {
    type: 'bar',
    data: {
      labels: ["Africa", "Asia", "Europe", "Latin America", "North America"],
      datasets: [
        {
          label: "Population (millions)",
          backgroundColor: ["#3e95cd", "#8e5ea2","#3cba9f","#e8c3b9","#c45850"],
          data: [2478,5267,734,784,433]
        }
      ]
    },
    options: {
      legend: { display: false },
      title: {
        display: true,
        text: 'Predicted world population (millions) in 2050'
      }
    }
});

// Line Chart
new Chart(document.getElementById("line-chart"), {
  type: 'line',
  data: {
    labels: [1500,1600,1700,1750,1800,1850,1900,1950,1999,2050],
    datasets: [{ 
        data: [86,114,106,106,107,111,133,221,783,2478],
        label: "Africa",
        borderColor: "#3e95cd",
        fill: false
      }, { 
        data: [282,350,411,502,635,809,947,1402,3700,5267],
        label: "Asia",
        borderColor: "#8e5ea2",
        fill: false
      }, { 
        data: [168,170,178,190,203,276,408,547,675,734],
        label: "Europe",
        borderColor: "#3cba9f",
        fill: false
      }, { 
        data: [40,20,10,16,24,38,74,167,508,784],
        label: "Latin America",
        borderColor: "#e8c3b9",
        fill: false
      }, { 
        data: [6,3,2,2,7,26,82,172,312,433],
        label: "North America",
        borderColor: "#c45850",
        fill: false
      }
    ]
  },
  options: {
    title: {
      display: true,
      text: 'World population per region (in millions)'
    }
  }
});

// Group Chart
new Chart(document.getElementById("bar-chart-grouped"), {
    type: 'bar',
    data: {
      labels: ["1900", "1950", "1999", "2050"],
      datasets: [
        {
          label: "Africa",
          backgroundColor: "#3e95cd",
          data: [133,221,783,2478]
        }, {
          label: "Europe",
          backgroundColor: "#8e5ea2",
          data: [408,547,675,734]
        }
      ]
    },
    options: {
      title: {
        display: true,
        text: 'Population growth (millions)'
      }
    }
});

	</script>
	
@endsection