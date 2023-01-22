<!DOCTYPE html>
<html lang="en">
	<!--begin::Head-->
	@include('admin.layouts.head')
	<!--end::Head-->
	<!--begin::Body-->
	<body id="kt_app_body" data-kt-app-header-fixed-mobile="true" data-kt-app-toolbar-enabled="true" data-kt-app-sidebar-enabled="true" data-kt-app-sidebar-fixed="true" data-kt-app-sidebar-push-header="true" data-kt-app-sidebar-push-toolbar="true" data-kt-app-sidebar-push-footer="true" class="app-default">
		<!--begin::Theme mode setup on page load-->
		<script>var defaultThemeMode = "light"; var themeMode; if ( document.documentElement ) { if ( document.documentElement.hasAttribute("data-theme-mode")) { themeMode = document.documentElement.getAttribute("data-theme-mode"); } else { if ( localStorage.getItem("data-theme") !== null ) { themeMode = localStorage.getItem("data-theme"); } else { themeMode = defaultThemeMode; } } if (themeMode === "system") { themeMode = window.matchMedia("(prefers-color-scheme: dark)").matches ? "dark" : "light"; } document.documentElement.setAttribute("data-theme", themeMode); }</script>
		<!--end::Theme mode setup on page load-->
		<!--begin::App-->

		{{-- Left Side Bar Menu --}}
		@include('admin.layouts.sidebar')
		{{-- End Left side bar menu --}}



		<div class="d-flex flex-column flex-root app-root" id="kt_app_root">
			<!--begin::Page-->
			@section('admin-content')
				
			@show
			<!--end::Page-->
		</div>
		<!--end::App-->

		{{-- Utilities View All together - Please break it to parts --}}
		@include('utilities.utilities')


		{{-- JS Files from layouts folder file - js.blade.php --}}
		@include('admin.layouts.js')


	</body>
	<!--end::Body-->
</html>