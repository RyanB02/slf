
<nav class="navbar navbar-default navbar-static-top bg-dark" style="    
            @if($month == 'Dec')
                background-image: url({{asset('images/snow.png')}})
            @endif ">
    <div class="container">
        <div class="navbar-header">

            <!-- Branding Image -->
            <a class="navbar-brand text-light" href="{{ url('/') }}" >
                Saddleworth Literary Festival 
                <sup>
                    @if(Auth::user() and Auth::user()->admin == 1)
                        <span class="label label-danger" style="padding: 1px ">Admin View</span>
                    @else
                    @endif
                </sup>
            </a>

        </div>
    </div>
</nav>