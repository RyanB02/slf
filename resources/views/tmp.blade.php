@extends('layouts.app')

@section('content_mobile_render_spec')
test
          <script>
       
        if(screen && screen.width < 993){
            var alerted = localStorage.getItem('alerted') || '';
    if (alerted != 'yes') {
        
     swal({
					          title: "Notice",
					          text: "Our Mobile site may be unavailable between 3rd Feb 10pm - 4th Feb 1am GMT, we appologize for the inconvenience.",
					          icon: "warning",
					          closeOnClickOutside: false,
					          closeOnEsc: false,
					          button: false,
					        });
     localStorage.setItem('alerted','locked');
    }
}

					       
				 </script>
@endsection
