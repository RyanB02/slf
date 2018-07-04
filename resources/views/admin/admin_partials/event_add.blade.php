<head>
<meta name="robots" content="noindex">
<meta name="googlebot" content="noindex">
</head>
@extends('layouts.app')
@section('pageTitle')
	Add Event
@endsection
@section('scroll')
  @include('welcome_partials.scroll')
@endsection
@section('content_desktop_render_admin')
<br>
	<div class="container">
		<div class="row col-12">
			<div class="col-lg-2 col-md-2">
				<a onclick="history.back();"  style="color:#5B6265; cursor: pointer">
					<div class="card card-default" >
						<div class="card-body"> 
							<center><i class="fa fa-caret-left" aria-hidden="true"> Back</i></center>
							</div>
					</div>
				</a>
			</div>
			<div class="col-6 offset-1">
				<div class="alert alert-info" style="text-align: center">This is the standard template</div>
			</div>
			<div class="col-lg-2 col-md-2 offset-1">
				<a href="#" data-toggle="modal" data-target="#adding-modal"  style="color:#5B6265; cursor: pointer">
					<div class="card card-default alert-success" >
						<div class="card-body "> 
							<center><i class="fa" aria-hidden="true">Proceed &nbsp;  </i><i class="fa fa-caret-right" aria-hidden="true"></i></center>
						</div>
					</div>
				</a>
			</div>

		</div>
		<br>
		<div class="container mt-2">
			<div class="row col-12">
				
					<div class="col-lg-4 col-md-4" >
						<div class="card card-default " style="height:150px;">
							<div class="card-body">
								<div class="row" style="padding:0px !important; margin: 0px !important">
									<div class="col-lg-4 " style="background-color: #F3323F; height: 120px; color:white; padding: 0px; border-radius: 5px">
										<center>
											<a class="animated fadeIn" style="color: inherit; text-decoration: none; font-family: Montserrat; font-size: 30px">DD</a>
										</center>
										<hr style="margin:0px">
										<center>
											<a class="animated fadeIn" style="color: inherit; text-decoration: none; font-family: Montserrat; font-size: 30px">MM</a>
										</center>
										<hr style="margin:0px">
										<center>
											<a class="animated fadeIn" style="color: inherit; text-decoration: none; font-family: Montserrat; font-size: 15px">YYYY</a>
										</center>
									</div>
									<div class="col-lg-8 ">
										<div class=" animated fadeInDown" style="border-bottom:1px solid ;border-color: black; font-size: 20px; margin-bottom: 0px; padding-bottom: 0px; margin-top: 16px" >Event Title</div><br>
										<a data-toggle="collapse" data-target="modal_preview" class="btn btn btn-primary btn-sm pull-right animated fadeInUp text-light">Learn More</a>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-8">
						<div class="alert alert-info">
						The card and map below will only appear when the user clicks on 'learn more' but for this template the card and map will be statically shown so you can see what it will look like.
						</div>
					</div>
				</div>
			</div>

			<div class="col-lg-12 col-md-12 mt-2">
				<div id="modal_preview" >
					<div class="row">
						<div class="col-lg-6 col-md-6">
							<div class="card card-default" >
								<div class="card-header ">
									Event Title
								</div>
								<div class="card-body aimated fadeIn">
									<div class="row" style="padding: 0px !important; margin: 0px !important">
										<div class="col-lg-2 col-md-2" style="background-color: #F3323F; height: 120px; color:white; padding: 0px; border-radius:5px">
											<center>
												<a style="color: inherit; text-decoration: none; font-family: Montserrat; font-size: 30px"><a style="color: inherit; text-decoration: none; font-family: Montserrat; font-size: 30px">DD</a></a>
											</center>
											<hr style="margin:0px">
											<center>
												<a style="color: inherit; text-decoration: none; font-family: Montserrat; font-size: 30px"><a style="color: inherit; text-decoration: none; font-family: Montserrat; font-size: 30px">MM</a></a>
											</center>
											<hr style="margin:0px">
											<center>
												<a style="color: inherit; text-decoration: none; font-family: Montserrat; font-size: 15px">YYYY</a>
											</center>
											</div>
											<div class="col-lg-10 col-md-10" style="font-size: 15px; border-rigt: 1px solid;height:120px  ">
												<a style="font-size: 20px; text-decoration: none; color:inherit">Title: Event Title<br></a>
												<a style="font-size: 20px; text-decoration: none; color:inherit">Description:<br></a>
												Your event description will appear here
											</div>

											
										</div>
										
									</div>

									<div class="card-footer">
											<b>&copy; <?php echo date('Y');?> Saddleworth Literary Festival</b>
											<div class="pull-right" style="bottom:0; font-size: 15px; color:grey;">Added by: you</div>
									</div>
								
							</div>
						</div>
						<div class="col-lg-3 col-md-3" style="font-size: 20px; height:200px; padding: 0px; margin: 0px; ">
							<div class="d-none d-xl-block">
								<iframe
								  width="540"
								  height="258"
								  frameborder="0" style="border:0; border-radius: 5px"
								  src="https://www.google.com/maps/embed/v1/place?key=AIzaSyBOjFMutEKoPcEMPYoN0dTJGXFX9UqX0eo
								    &q=UK&maptype=satellite&zoom=5 " >
								</iframe>
							</div>
							<div class="d-none d-lg-block d-xl-none">
								<iframe
								  width="450"
								  height="258"
								  frameborder="0" style="border:0;border-radius: 5px"
								  src="https://www.google.com/maps/embed/v1/place?key=AIzaSyBOjFMutEKoPcEMPYoN0dTJGXFX9UqX0eo
								    &q=UK&maptype=satellite&zoom=5" >
								</iframe>
							</div>

						</div>
					</div>
				</div>	
			</div>
			</div>
		</div>

        <div id="adding-modal" class="modal fade" role="dialog" style="background-color: rgba(0,0,0,0.96);">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-body">
						<form class="form-vertical" role="form" method="post" action="{{URL::to('admin/add_guest')}}" enctype="multipart/form-data">
							<div class="form-group">
								<label for="writer_name">Guest Name <a style="color:red; font-size: 20px; font-family: comic-sans; text-decoration: none ">*</a></label>
								<input type="text" id="" name="name" class="form-control" placeholder="Roald Dahl">
							</div>
							<div class="form-group">
								<label for="desc">Please Input A Description Of The Guest <a style="color:red; font-size: 20px; font-family: comic-sans; text-decoration: none">*</a></label>
								<textarea class="form-control textarea_auto_resize"  name="desc" placeholder="Stephen King was born in portland on the 21st of September 1947. His books are classed as horror, fantasy and science-fiction." style="resize: none;min-height: 50px !important; "></textarea>
							</div>
							<div class="form-group">
								<label for="desc">More info (such as website or facebook, <a style="color:red; text-decoration: none">if adding website be sure to always use www</a></label>
								<textarea class="form-control textarea_auto_resize" name="more" placeholder="To find out more about Dr Seuss, please go to www.seussville.com/" style="resize: none; min-height: 50px !important;"></textarea>
							</div>
							<div class="form-group">
								<label for="attendee_name" >Select An Image Of The Guest To Upload <a style="color:red; font-size: 20px; font-family: comic-sans; text-decoration: none">*</a> </label>
								<input type="file" name="image" id="image">
							</div>
							<div class="form-group">
				                <button type="submit" class="btn btn-primary pull-right">Add</button>
				            </div>
				            <input type="hidden" name="_token" value="{{ Session::token() }}">
						</form>
                    </div>
                </div>

            </div>

        </div>
	</div>
@endsection
@section('content_mobile_render_admin')
@endsection