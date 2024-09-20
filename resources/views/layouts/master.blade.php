<!DOCTYPE html>
<html lang="en" dir="rtl">

<!-- Mirrored from big-bang-studio.com/neptune/neptune-rtl/apps-contacts.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 17 Jan 2017 11:12:31 GMT -->
<head>
		<!-- Meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta http-equiv="x-ua-compatible" content="ie=edge">
		<meta name="description" content="">
		<meta name="author" content="Rahmatullah Bizhan: rahmatullahbizhan@gmail.com">
		<!-- <body oncontextmenu="return false"> -->

		<!-- Title -->
		<title>بنگاه</title>
		<!-- Vendor CSS -->
		<link rel="shortcat icon" type="image/x-icon" href="{{ asset('../img/logo/logo.png') }}">
		<link rel="stylesheet" href="{{ asset('../vendors/bootstrap4-rtl/css/bootstrap.min.css') }}">
		<link rel="stylesheet" href="{{ asset('../vendors/themify-icons/themify-icons.css') }}">
		<link rel="stylesheet" href="{{ asset('../vendors/font-awesome/css/font-awesome.min.css') }}">
		<link rel="stylesheet" href="{{ asset('../vendors/animate.css/animate.min.css') }}">
		<link rel="stylesheet" href="{{ asset('../vendors/jscrollpane/jquery.jscrollpane.css') }}">
		<link rel="stylesheet" href="{{ asset('../vendors/waves/waves.min.css') }}">
		<link rel="stylesheet" href="{{ asset('../vendors/switchery/dist/switchery.min.css') }}">
		<link rel="stylesheet" href="{{ asset('../vendors/DataTables/css/dataTables.bootstrap4.min.css') }}">
		<link rel="stylesheet" href="{{ asset('../vendors/DataTables/Responsive/css/responsive.bootstrap4.min.css') }}">
		<link rel="stylesheet" href="{{ asset('../vendors/DataTables/Buttons/css/buttons.dataTables.min.css') }}">
		<link rel="stylesheet" href="{{ asset('../vendors/DataTables/Buttons/css/buttons.bootstrap4.min.css') }}">
		<!-- Vendor CSS -->
		<link rel="stylesheet" href="{{ asset('../vendors/bootstrap4-rtl/css/bootstrap.min.css') }}">
		<link rel="stylesheet" href="{{ asset('../vendors/themify-icons/themify-icons.css') }}">
		<link rel="stylesheet" href="{{ asset('../vendors/font-awesome/css/font-awesome.min.css') }}">
		<link rel="stylesheet" href="{{ asset('../vendors/animate.css/animate.min.css') }}">
		<link rel="stylesheet" href="{{ asset('../vendors/jscrollpane/jquery.jscrollpane.css') }}">
		<link rel="stylesheet" href="{{ asset('../vendors/waves/waves.min.css') }}">
		<link rel="stylesheet" href="{{ asset('../vendors/switchery/dist/switchery.min.css') }}">
		<link rel="stylesheet" href="{{ asset('../vendors/dropify/dist/css/dropify.min.css') }}">
		<!-- Neptune CSS -->
		<link rel="stylesheet" href="{{ asset('../css/core.css') }}">
		<link rel="stylesheet" href="{{ asset('../css/menuStyle.css') }}">
		<link rel="stylesheet" href="{{ asset('../vendors/RWD-Table-Patterns/dist/css/rwd-table.min.css') }}">
		<link rel="stylesheet" href="{{ asset('../vendors/chartist/chartist.min.css') }}">

		<link rel="stylesheet" href="{{ asset('../css/custom.css') }}">

		<!--Persian_Date_Picker_Master-->
		<link rel="stylesheet" href="{{ asset('../Persian_Date_Picker_Master/css/normalize.css' ) }}" />
		<!-- <link href='Persian_Date_Picker_Master/css/fontawesome/css/font-awesome.min.css' rel='stylesheet' /> -->
		<!-- <link href="Persian_Date_Picker_Master/css/vertical-responsive-menu.min.css" rel="stylesheet" /> -->
		<!-- <link href="Persian_Date_Picker_Master/css/style.css" rel="stylesheet" /> -->
		<link rel="stylesheet" href="{{ asset('../Persian_Date_Picker_Master/css/prism.css' ) }}" />
		<link rel="stylesheet" href="{{ asset('../Persian_Date_Picker_Master/css/persianDatepicker-default.css') }}" />
		<link rel="stylesheet" href="{{ asset('../Persian_Date_Picker_Master/css/persianDatepicker-dark.css') }}" />
		<link rel="stylesheet" href="{{ asset('../Persian_Date_Picker_Master/css/persianDatepicker-latoja.css') }}" />
		<link rel="stylesheet" href="{{ asset('../Persian_Date_Picker_Master/css/persianDatepicker-melon.css') }}" />
		<link rel="stylesheet" href="{{ asset('../Persian_Date_Picker_Master/css/persianDatepicker-lightorang.css') }}" />


	</head>


	<body class="fixed-sidebar fixed-header skin-default">
		<div class="wrapper">

			<!-- Preloader -->
			<div class="preloader"></div>
         	@include('layouts.header')
         	@include('layouts.aside')

			<div class="site-content">
          		@yield('content')
          		@include('layouts.footer')
    		</div>


		</div>

		<!-- Vendor JS -->
		<script type="text/javascript" src="{{ asset('../vendors/jquery/jquery-1.12.3.min.js') }}"></script>
		<script type="text/javascript" src="{{ asset('../vendors/tether/js/tether.min.js') }}"></script>
		<script type="text/javascript" src="{{ asset('../vendors/bootstrap4-rtl/js/bootstrap.min.js') }}"></script>
		<script type="text/javascript" src="{{ asset('../vendors/detectmobilebrowser/detectmobilebrowser.js') }}"></script>
		<script type="text/javascript" src="{{ asset('../vendors/jscrollpane/jquery.mousewheel.js') }}"></script>
		<script type="text/javascript" src="{{ asset('../vendors/jscrollpane/mwheelIntent.js') }}"></script>
		<script type="text/javascript" src="{{ asset('../vendors/jscrollpane/jquery.jscrollpane.min.js') }}"></script>
		<script type="text/javascript" src="{{ asset('../vendors/jquery-fullscreen-plugin/jquery.fullscreen-min.js') }}"></script>
		<script type="text/javascript" src="{{ asset('../vendors/waves/waves.min.js') }}"></script>
		<script type="text/javascript" src="{{ asset('../vendors/switchery/dist/switchery.min.js') }}"></script>
		<script type="text/javascript" src="{{ asset('../vendors/DataTables/js/jquery.dataTables.min.js') }}"></script>
		<script type="text/javascript" src="{{ asset('../vendors/DataTables/js/dataTables.bootstrap4.min.js') }}"></script>
		<script type="text/javascript" src="{{ asset('../vendors/DataTables/Responsive/js/dataTables.responsive.min.js') }}"></script>
		<script type="text/javascript" src="{{ asset('../vendors/DataTables/Responsive/js/responsive.bootstrap4.min.js') }}"></script>
		<script type="text/javascript" src="{{ asset('../vendors/DataTables/Buttons/js/dataTables.buttons.min.js') }}"></script>
		<script type="text/javascript" src="{{ asset('../vendors/DataTables/Buttons/js/buttons.bootstrap4.min.js') }}"></script>
		<script type="text/javascript" src="{{ asset('../vendors/DataTables/JSZip/jszip.min.js') }}"></script>
		<script type="text/javascript" src="{{ asset('../vendors/DataTables/pdfmake/build/pdfmake.min.js') }}"></script>
		<script type="text/javascript" src="{{ asset('../vendors/DataTables/pdfmake/build/vfs_fonts.js') }}"></script>
		<script type="text/javascript" src="{{ asset('../vendors/DataTables/Buttons/js/buttons.html5.min.js') }}"></script>
		<script type="text/javascript" src="{{ asset('../vendors/DataTables/Buttons/js/buttons.print.min.js') }}"></script>
		<script type="text/javascript" src="{{ asset('../vendors/DataTables/Buttons/js/buttons.colVis.min.js') }}"></script>

		<!-- Neptune JS -->
		<script type="text/javascript" src="{{ asset('js/app.js') }}"></script>
		<script type="text/javascript" src="{{ asset('js/demo.js') }}"></script>
		<script type="text/javascript" src="{{ asset('js/tables-datatable.js') }}"></script>
		<script type="text/javascript" src="{{ asset('../vendors/dropify/dist/js/dropify.min.js') }}"></script>
		<script type="text/javascript" src="{{ asset('js/demo.js') }}"></script>
		<script type="text/javascript" src="{{ asset('js/forms-upload.js') }}"></script>
		<script type="text/javascript" src="{{ asset('../vendors/editable-table/mindmup-editabletable.js') }}"></script>
		<script type="text/javascript" src="{{ asset('../vendors/editable-table/numeric-input-example.js') }}"></script>
		<script type="text/javascript" src="{{ asset('../vendors/switchery/dist/switchery.min.js') }}"></script>
		<script type="text/javascript" src="{{ asset('../vendors/RWD-Table-Patterns/dist/js/rwd-table.min.js') }}"></script>
		<script type="text/javascript" src="{{ asset('js/tables-responsive.js') }}"></script>
		<script type="text/javascript" src="{{ asset('js/tables-editable.js') }}"></script>
		<script type="text/javascript" src="js/forms-masks.js"></script>
	  <script type="text/javascript" src="../vendors/bootstrap-inputmask/bootstrap-inputmask.min.js"></script>
  	<script type="text/javascript" src="../vendors/autoNumeric/autoNumeric-min.js"></script>
		<script type="text/javascript" src="../vendors/chartist/chartist.min.js"></script>
		<script type="text/javascript" src="../js/index2.js"></script>

		<script type="text/javascript" src="{{ asset('js/charts-flot.js') }}"></script>
		<script type="text/javascript" src="{{ asset('js/custom.js') }}"></script>

		<script type="text/javascript" src="{{ asset('../select2/dist/js/select2.min.js') }}"></script>
		<link rel="stylesheet" href="{{ asset('../select2/dist/css/select2.css') }}">

		<!--Persian_Date_Picker_Master   -->
		<script src="{{ asset('../Persian_Date_Picker_Master/js/prism.js') }}"></script>
		<script src="{{ asset('../Persian_Date_Picker_Master/js/vertical-responsive-menu.min.js') }}"></script>
		<!-- <script src="Persian_Date_Picker_Master/js/jquery-1.10.1.min.js"></script> -->
		<script src="{{ asset('../Persian_Date_Picker_Master/js/persianDatepicker.js') }}"></script>



	</body>

<!-- Mirrored from big-bang-studio.com/neptune/neptune-rtl/apps-contacts.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 17 Jan 2017 11:12:31 GMT -->
<!--
***********************************************************
* ******************************************************* *
* * Author: Rahmatullah Bizhan                          * *
* * Email: rahmatullahbizhan@gmail.com                  * *
* * Please Kindly Report any error or bug you may face. * *
* * Contact me if you have any questions :)             * *
* ******************************************************* *
***********************************************************
-->
</html>
