<!DOCTYPE html>
<html lang="en">

    {{-- Head --}}
	@include('user.layouts.head')
	<!--begin::Body-->
	<body id="kt_app_body" data-kt-app-layout="dark-sidebar" data-kt-app-header-fixed="true" data-kt-app-sidebar-enabled="true" data-kt-app-sidebar-fixed="true" data-kt-app-sidebar-hoverable="true" data-kt-app-sidebar-push-header="true" data-kt-app-sidebar-push-toolbar="true" data-kt-app-sidebar-push-footer="true" data-kt-app-toolbar-enabled="true" class="app-default">
		<!--begin::Theme mode setup on page load-->
		<script>var defaultThemeMode = "light"; var themeMode; if ( document.documentElement ) { if ( document.documentElement.hasAttribute("data-theme-mode")) { themeMode = document.documentElement.getAttribute("data-theme-mode"); } else { if ( localStorage.getItem("data-theme") !== null ) { themeMode = localStorage.getItem("data-theme"); } else { themeMode = defaultThemeMode; } } if (themeMode === "system") { themeMode = window.matchMedia("(prefers-color-scheme: dark)").matches ? "dark" : "light"; } document.documentElement.setAttribute("data-theme", themeMode); }</script>
		<!--end::Theme mode setup on page load-->
		<!--begin::App-->
		<div class="d-flex flex-column flex-root app-root" id="kt_app_root">
			<!--begin::Page-->
			<div class="app-page flex-column flex-column-fluid" id="kt_app_page">
				
                {{-- Header --}}
                @include('user.layouts.header')

				<!--begin::Wrapper-->
				<div class="app-wrapper flex-column flex-row-fluid" id="kt_app_wrapper">

                    {{-- Sidebar Menu --}}
					@include('user.layouts.sidebar')
                    
					<!--begin::Main-->
					<div class="app-main flex-column flex-row-fluid" id="kt_app_main">

                        {{-- Main Section --}}
						@section('main')                          
                        @show
						
                        {{-- Footer --}}
                        @include('user.layouts.footer')
					</div>
					<!--end:::Main-->
				</div>
				<!--end::Wrapper-->
			</div>
			<!--end::Page-->
		</div>
		<!--end::App-->
		
        {{-- Utilities - Drawers --}}
        @include('user.utilities.drawers')
		
		{{-- Utilities - Toolbars --}}
        @include('user.utilities.toolbars')
		
        {{-- Utilities - ScrollTop --}}
        @include('user.utilities.scrolltop')

        {{-- Utilities - Modals --}}
		@include('user.utilities.modals')
		
        {{-- JavaScript Files --}}
        @include('user.layouts.js')
	</body>
	<!--end::Body-->
</html>