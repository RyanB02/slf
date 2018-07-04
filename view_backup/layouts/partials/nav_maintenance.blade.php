        <nav class="navbar navbar-expand-lg navbar-light bg-dark" style="background-color: #364648;    
            @if($month == 'Dec')
                background-image: url({{asset('images/snow.png')}})
            @endif ">
    <div class="container">
        <div class="navbar-header">

            <!-- Branding Image -->
            <a class="navbar-brand" href="{{ url('/') }}" style="color:#c0cdcf">
                Saddleworth Literary Festival 
                <sup>
                    @if(Auth::user() and Auth::user()->admin == 1)
                        <span class="label label-danger" style="padding: 1px ">Admin View</span>
                    @else
                    @endif
                </sup>
            </a>

        </div>

        <div class="collapse navbar-collapse" id="app-navbar-collapse">
            <!-- Left Side Of Navbar -->
            <ul class="nav navbar-nav">
                &nbsp;
            </ul>

        </div>
    </div>
</nav>

