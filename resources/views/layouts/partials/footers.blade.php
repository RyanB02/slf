@if(Config('app.maintenance') == 'active')

@else

    <footer class="d-none d-xl-block bg-dark" style=" width:100%; height:110px; ">
        <hr style="border-color: black ">
        <div class="row col-12 bg-dark" style="padding:0px; margin: 0px;height: 100%; margin-bottom: 0px !important; border-radius: 0px; background-color:  ; border:0px; color: white; text-align: center;   ">
                <div class="col-3" >
                    <div style="width:100%; background-color: yellow; height: px"></div>
                    <!--<h4 style="margin-top: 0px">SECTION 1 </h4>-->
                   Copyright&copy; 2015-<?php echo date('Y');?> Saddleworth Literary Festival All Rights Reserved. 
                </div>
                <div class=" col-6">
                    <div style="width:100%; background-color: red; height: px"></div>
                    <h4 style="margin-top: 0px">Sponsors (Click logos to visit website)</h4>
                    @foreach(App\Sponsor::orderBy('id', 'asc')->get() as $sponsor)
                        <a href="{{$sponsor->website}}" target="_blank">
                            <img style="max-width: 200px; max-height: 70px; margin-left:5px " class="social" src="{{asset('uploads/sponsors/'.$sponsor->image)}}"> 
                        </a>
                    @endforeach
                </div>
                <div class=" col-3">
                    <div style="width:100%; background-color: blue; height: px"></div>
                    <h4 style="margin-top: 0px">Get In Touch </h4>
                    <a href="https://en-gb.facebook.com/SaddleworthLiteraryFestival/" target="_blank" class="social">
                        <i class="fa fa-facebook-square fa-3x social" aria-hidden="true"></i> 
                    </a>
                    &nbsp;
                    <a href="https://www.instagram.com/saddleworthlitfest/" target="_blank" class="social" style="text-decoration: none">
                        <i class="fa fa-instagram fa-3x social" aria-hidden="true" ></i>
                    </a>
                    &nbsp;
                    <a href="{{route('contact')}}"  class="social" style="text-decoration: none">
                        <i class="fa fa-envelope fa-3x social" aria-hidden="true"></i>
                    </a>
                    &nbsp;
                    <a href="https://twitter.com/SaddleworthLit?lang=en"  class="social" style="text-decoration: none" target="_blank">
                        <i class="fa fa-twitter fa-3x social" aria-hidden="true"></i>
                    </a>
                </div>
                <!--
                <div class="col-lg-2">
                    <div style="width:100%; background-color: orange; height: 5px"></div>
                    SECTION 5
                </div>
                <div class="col-lg-2">
                    <div style="width:100%; background-color: purple; height: 5px"></div>
                    SECTION 6
                </div>
                -->
        </div>
    </footer>
    <footer class="d-none d-lg-block bg-dark d-xl-none" style=" width:100%; height:110px; ">
        <hr style="border-color: black ">
        <div class="row col-12 bg-dark" style="padding:0px; margin: 0px;height: 100%; margin-bottom: 0px !important; border-radius: 0px; background-color:  ; border:0px; color: white; text-align: center;   ">
                <div class="col-3" >
                    <div style="width:100%; background-color: yellow; height: px"></div>
                    <!--<h4 style="margin-top: 0px">SECTION 1 </h4>-->
                   Copyright&copy; 2015-<?php echo date('Y');?> Saddleworth Literary Festival All Rights Reserved. 
                </div>
                <div class=" col-6">
                    <div style="width:100%; background-color: red; height: px"></div>
                    <h4 style="margin-top: 0px">Sponsors (Click logos to visit website)</h4>
                    @foreach(App\Sponsor::orderBy('id', 'asc')->get() as $sponsor)
                        <a href="{{$sponsor->website}}" target="_blank">
                            <img style="max-width: 100px; max-height: 70px; margin-left:5px " class="social" src="{{asset('uploads/sponsors/'.$sponsor->image)}}"> 
                        </a>
                    @endforeach
                </div>
                <div class=" col-3 bg-dark">
                    <div style="width:100%; background-color: blue; height: px"></div>
                    <h4 style="margin-top: 0px">Get In Touch </h4>
                    <a href="https://en-gb.facebook.com/SaddleworthLiteraryFestival/" target="_blank" class="social">
                        <i class="fa fa-facebook-square fa-3x social" aria-hidden="true"></i> 
                    </a>
                    &nbsp;
                    <a href="https://www.instagram.com/saddleworthlitfest/" target="_blank" class="social" style="text-decoration: none">
                        <i class="fa fa-instagram fa-3x social" aria-hidden="true" ></i>
                    </a>
                    &nbsp;
                    <a href="{{route('contact')}}"  class="social" style="text-decoration: none">
                        <i class="fa fa-envelope fa-3x social" aria-hidden="true"></i>
                    </a>
                    
                </div>
                <!--
                <div class="col-lg-2">
                    <div style="width:100%; background-color: orange; height: 5px"></div>
                    SECTION 5
                </div>
                <div class="col-lg-2">
                    <div style="width:100%; background-color: purple; height: 5px"></div>
                    SECTION 6
                </div>
                -->
        </div>
    </footer>
@endif