@extends('layouts.app')

@section('content_desktop_render')
    <div class="d-none d-lg-block">
            <div class="container-flex" style="margin-top: -20px">

            <div class="row" style="margin:0px; padding: 0px;margin-top:100px; left:20vw">
                <div class="col-12" ">
                    <h1 class="animated fadeIn" style="text-align: center; font-family: cdreams; font-size: 60px; font-weight: thin !important">{{$guest->name}}</h1>
                </div>
            </div>
        </div>
    </div>
	<div class="container mt-2">
		<div class="row " >
			<div class="col-6" >
				<center>
					<img  src="{{ url('uploads/writers-speakers/'.$guest->image) }}" style="height: 450px;  margin:0px !important; border-radius: 5px; max-width: 565px">
					
				</center>
				
			</div>
			<div class="col-6" >
				<blockquote style="font-family: Montserrat; font-weight: ; font-size: 18px">
					{{$guest->desc}}	
				</blockquote>
			</div>
		</div>
		<div class="row">
 			{{$guest->more}}
		</div>
	</div>
@endsection