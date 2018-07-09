@extends('layouts.app')
@section('pageTitle')
Testing Page
@endsection
@section('content_desktop_render')
    <body style="height: 1500px;">
        <!--hero section-->
        <section class="mt-5">
            <div class="container">

                <div class="row">
                    <div class="col-sm-8 mx-auto col-xs-12">
                        <div class="card border-none">
                            <div class="card-body p-5">
                            	TO BE USED FOR UPCOMING EVENTS ADMIN OPTIONS
                                <h2 class="text-center">Bootstrap 4 Datetime & Range Picker</h2>
                                <div class="mt-5">
                                    <h5 class="mb-3">Date Range</h5>
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="daterange" placeholder="Select value">
                                    </div>
                                    <br/><br/>
                                    <h5 class="mb-3">Date Time</h5>
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="datetime" placeholder="Select value" readonly style="cursor: pointer">
                                    </div>
                                    <br/><br/>
                                    <h5 class="mb-3">Single Date</h5>
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="date" placeholder="Select value">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

            </div>
        </section>
    </body>
    <script type="text/javascript">
		$(function () {


		    //date time picker
		    $('#datetime').daterangepicker({
		        singleDatePicker: true,
		        locale: {
		            format: 'DD-MM-YYYY'
		        }
		    });

		});
    </script>
@endsection