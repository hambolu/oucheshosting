<!DOCTYPE html>

<html lang="en">
	<!--begin::Head-->
	<head>
		<title>Ouches Hosting | Dashboard</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<meta property="og:locale" content="en_US" />
		<meta property="og:type" content="article" />
		<meta property="og:title" content="Ouches Hosting" />
		<meta property="og:url" content="https://oucheshosting.com" />
		<meta property="og:site_name" content="Ouches Hosting " />


		<link rel="shortcut icon" href="{{ asset('frontend/images/icon.png') }}" />
		<!--begin::Fonts(mandatory for all pages)-->
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/fontawesome.min.css" type='text/css' />
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700" />
		<!--end::Fonts-->
		<!--begin::Vendor Stylesheets(used for this page only)-->

		<link href="{{asset('assets/plugins/custom/datatables/datatables.bundle.css')}}" rel="stylesheet" type="text/css" />
		<link href="{{asset('assets/plugins/custom/vis-timeline/vis-timeline.bundle.css')}}" rel="stylesheet" type="text/css" />
		<!--end::Vendor Stylesheets-->
		<!--begin::Global Stylesheets Bundle(mandatory for all pages)-->
		<link href="{{asset('assets/plugins/global/plugins.bundle.css')}}" rel="stylesheet" type="text/css" />
		<link href="{{asset('assets/css/style.bundle.css')}}" rel="stylesheet" type="text/css" />
		<!--end::Global Stylesheets Bundle-->
	</head>

    @yield('content')




		<!--end::Modals-->
		<!--begin::Javascript-->

		<!--begin::Global Javascript Bundle(mandatory for all pages)-->
		<script>
			$(document).ready(function () {
                $('#kt_ecommerce_report_sales_table').DataTable();
            });
		</script>
		<script src="{{asset('assets/plugins/global/plugins.bundle.js')}}"></script>
		<script src="{{asset('assets/js/scripts.bundle.js')}}"></script>
		<!--end::Global Javascript Bundle-->
		<!--begin::Vendors Javascript(used for this page only)-->
		<script src="{{asset('assets/plugins/custom/datatables/datatables.bundle.js')}}"></script>
		<script src="{{asset('assets/plugins/custom/vis-timeline/vis-timeline.bundle.js')}}"></script>
		<script src="{{asset('https://cdn.amcharts.com/lib/5/index.js')}}"></script>
		<script src="{{asset('https://cdn.amcharts.com/lib/5/xy.js')}}"></script>
		<script src="{{asset('https://cdn.amcharts.com/lib/5/percent.js')}}"></script>
		<script src="{{asset('https://cdn.amcharts.com/lib/5/radar.js')}}"></script>
		<script src="{{asset('https://cdn.amcharts.com/lib/5/themes/Animated.js')}}"></script>
		<!--end::Vendors Javascript-->
		<!--begin::Custom Javascript(used for this page only)-->
		<script src="{{asset('assets/js/widgets.bundle.js')}}"></script>
		<script src="{{asset('assets/js/custom/apps/chat/chat.js')}}"></script>
		<script src="{{asset('assets/js/custom/utilities/modals/upgrade-plan.js')}}"></script>
		<script src="{{asset('assets/js/custom/utilities/modals/create-project/type.js')}}"></script>
		<script src="{{asset('assets/js/custom/utilities/modals/create-project/budget.js')}}"></script>
		<script src="{{asset('assets/js/custom/utilities/modals/create-project/settings.js')}}"></script>
		<script src="{{asset('assets/js/custom/utilities/modals/create-project/team.js')}}"></script>
		<script src="{{asset('assets/js/custom/utilities/modals/create-project/targets.js')}}"></script>
		<script src="{{asset('assets/js/custom/utilities/modals/create-project/files.js')}}"></script>
		<script src="{{asset('assets/js/custom/utilities/modals/create-project/complete.js')}}"></script>
		<script src="{{asset('assets/js/custom/utilities/modals/create-project/main.js')}}"></script>
		<script src="{{asset('assets/js/custom/utilities/modals/create-app.js')}}"></script>
		<script src="{{asset('assets/js/custom/utilities/modals/new-address.js')}}"></script>
		<script src="{{asset('assets/js/custom/utilities/modals/users-search.js')}}"></script>
		<!--end::Custom Javascript-->
		<!--end::Javascript-->
	</body>
	<!--end::Body-->
</html>
