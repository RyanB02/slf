@if(Session::has('logout'))
    <script>
        swal({
          title: "Logged Out!",
          text: "C'ya Later",
          icon: "success",
          closeOnClickOutside: false,
          closeOnEsc: false,
          button:"C'ya",
        });
    </script>
@endif
@if(Auth::user())
    <div class="alert alert-danger" style="border:0px solid; border-radius:0px !important; text-align: center">
        Unfortunately, you are not an Admin so you cannot currently access the site!
        <hr>
        Currently logged in as: {{Auth::user()->name}}
        <br>
        <a href="{{ route('logout') }}" id="" 
            onclick="event.preventDefault();
                     document.getElementById('logout-form').submit();">
            LOGOUT
        </a>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            {{ csrf_field() }}
        </form>
    </div>
    <div class="d-none d-lg-block">
        <div class="container animated fadeIn" style="margin-top: -15px">
            <div class="row" style="margin:0px; padding: 0px;margin-top:200px; left: 30px">

                <div class="col-12" ">
                    <h1 class="" style="text-align: center; font-family: Montserrat; font-size: 50px; font-weight: thin !important">Saddleworth Literary Festival</h1>
                </div>
                <div class="col-12 " style="text-align: center">
                    <img  src="{{asset('images/maintenance.png')}}">
                </div> 
                <div class="col-12 mt-5" style="font-family: Montserrat; text-align: center">
                    <h4>We are currently performing some maintenance but we will be back soon!</h4>
                    <b>- Last Updated: {{config('app.maintenance_last_updated')}} -</b><br>
                    <p>If you need to contact us, please emai: info@saddleworthlitfest.co.uk</p>
                </div>

                
            </div>

        </div>
    </div>
    <div class="d-none d-md-block d-sm-none d-lg-none d-xl-none">
        <div class="container-flex animated fadeIn" style="margin-top: -15px">
            <div class="row" style="margin:0px; padding: 0px;margin-top:200px; ">
                <div class="col-12" ">
                    <h1 class="" style="text-align: center; font-family: Montserrat; font-size: 40px; font-weight: thin !important">Saddleworth Literary Festival</h1>
                </div>
                <div class="col-12 " style="text-align: center">
                    <img height="80%" src="{{asset('images/maintenance.png')}}">
                </div> 
                <div class="col-12" style="font-family: Montserrat; text-align: center">
                    <h4>We are currently performing some maintenance but we will be back soon!</h4>
                    <b>- Last Updated: {{config('app.maintenance_last_updated')}} -</b><br>
                    <p>If you need to contact us, please emai: info@saddleworthlitfest.co.uk</p>
                </div>

                
            </div>

        </div>
    </div>
    <div class="d-none d-md-none d-sm-block d-lg-none d-xl-none">
        <div class="container-flex animated fadeIn" style="margin-top: -15px">
            <div class="row" style="margin:0px; padding: 0px;margin-top:200px; ">
                <div class="col-12" ">
                    <h1 class="" style="text-align: center; font-family: Montserrat; font-size: 35px; font-weight: thin !important">Saddleworth Literary Festival</h1>
                </div>
                <div class="col-12 " style="text-align: center">
                    <img height="65%" src="{{asset('images/maintenance.png')}}">
                </div> 
                <div class="col-12" style="font-family: Montserrat; text-align: center; margin-top: -90px !important">
                    <h4>We are currently performing some maintenance but we will be back soon!</h4>
                    <b>- Last Updated: {{config('app.maintenance_last_updated')}} -</b><br>
                    <p>If you need to contact us, please emai: info@saddleworthlitfest.co.uk</p>
                </div>

                
            </div>

        </div>
    </div>
    <div class="d-md-none d-sm-none d-lg-none d-xl-none">
        <div class="container-flex animated fadeIn" style="margin-top: -15px">
            <div class="row" style="margin:0px; padding: 0px;margin-top:200px; ">
                <div class="col-12" ">
                    <h1 class="" style="text-align: center; font-family: Montserrat; font-size: 20px; font-weight: thin !important">Saddleworth Literary Festival</h1>
                </div>
                <div class="col-12 " style="text-align: center">
                    <img height="35%" src="{{asset('images/maintenance.png')}}">
                </div> 
                <div class="col-12" style="font-family: Montserrat; text-align: center; margin-top: -140px !important">
                    <h4>We are currently performing some maintenance but we will be back soon!</h4>
                    <b>- Last Updated: {{config('app.maintenance_last_updated')}} -</b><br>
                    <p>If you need to contact us, please emai: info@saddleworthlitfest.co.uk</p>
                </div>

                
            </div>

    </div>
@else
    <div class="d-none d-lg-block">
        <div class="container animated fadeIn" style="margin-top: -15px">
            <div class="row" style="margin:0px; padding: 0px;margin-top:200px; left: 30px">
                <div class="col-12" ">
                    
                    <h1 class="" style="text-align: center; font-family: Montserrat; font-size: 50px; font-weight: thin !important">Saddleworth Literary Festival</h1>
                </div>
                <div class="col-12 " style="text-align: center">
                    <img  src="{{asset('images/maintenance.png')}}">
                </div> 
                <div class="col-12 mt-5" style="font-family: Montserrat; text-align: center">
                    <h4>We are currently performing some maintenance but we will be back soon!</h4>
                    <b>- Last Updated: {{config('app.maintenance_last_updated')}} -</b><br>
                    <p>If you need to contact us, please emai: info@saddleworthlitfest.co.uk</p>
                </div>

                
            </div>

        </div>
    </div>
    <div class="d-none d-md-block d-sm-none d-lg-none d-xl-none">
        <div class="container-flex animated fadeIn" style="margin-top: -15px">
            <div class="row" style="margin:0px; padding: 0px;margin-top:200px; ">
                <div class="col-12" ">
                    <h1 class="" style="text-align: center; font-family: Montserrat; font-size: 40px; font-weight: thin !important">Saddleworth Literary Festival</h1>
                </div>
                <div class="col-12 " style="text-align: center">
                    <img height="80%" src="{{asset('images/maintenance.png')}}">
                </div> 
                <div class="col-12" style="font-family: Montserrat; text-align: center">
                    <h4>We are currently performing some maintenance but we will be back soon!</h4>
                    <b>- Last Updated: {{config('app.maintenance_last_updated')}} -</b><br>
                    <p>If you need to contact us, please emai: info@saddleworthlitfest.co.uk</p>
                </div>

                
            </div>

        </div>
    </div>
    <div class="d-none d-md-none d-sm-block d-lg-none d-xl-none">
        <div class="container-flex animated fadeIn" style="margin-top: -15px">
            <div class="row" style="margin:0px; padding: 0px;margin-top:200px; ">
                <div class="col-12" ">
                    <h1 class="" style="text-align: center; font-family: Montserrat; font-size: 35px; font-weight: thin !important">Saddleworth Literary Festival</h1>
                </div>
                <div class="col-12 " style="text-align: center">
                    <img height="65%" src="{{asset('images/maintenance.png')}}">
                </div> 
                <div class="col-12" style="font-family: Montserrat; text-align: center; margin-top: -90px !important">
                    <h4>We are currently performing some maintenance but we will be back soon!</h4>
                    <b>- Last Updated: {{config('app.maintenance_last_updated')}} -</b>
                    <br>
                    <p>If you need to contact us, please emai: info@saddleworthlitfest.co.uk</p>
                </div>

                
            </div>

        </div>
    </div>
    <div class="d-md-none d-sm-none d-lg-none d-xl-none">
        <div class="container-flex animated fadeIn" style="margin-top: -15px">
            <div class="row" style="margin:0px; padding: 0px;margin-top:200px; ">
                <div class="col-12" ">
                    <h1 class="" style="text-align: center; font-family: Montserrat; font-size: 20px; font-weight: thin !important">Saddleworth Literary Festival</h1>
                </div>
                <div class="col-12 " style="text-align: center">
                    <img height="35%" src="{{asset('images/maintenance.png')}}">
                </div> 
                <div class="col-12" style="font-family: Montserrat; text-align: center; margin-top: -140px !important">
                    <h4>We are currently performing some maintenance but we will be back soon!</h4>
                    <b>- Last Updated: {{config('app.maintenance_last_updated')}} -</b>
                    <br>
                    <p>If you need to contact us, please emai: info@saddleworthlitfest.co.uk</p>
                </div>

                
            </div>

    </div>
@endif