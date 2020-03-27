    <div id="toTop"></div><!-- Back to top button -->
	
	<!-- COMMON SCRIPTS -->
    <script src="{{asset('public/frontend/js/common_scripts.min.js')}}"></script>
    <script src="{{asset('public/frontend/js/main.js')}}"></script>
	
	<!-- SPECIFIC SCRIPTS -->
    <script src="{{asset('public/frontend/js/carousel-home.min.js')}}"></script>
    
    @if (!empty($pluginjs)) 
    @foreach ($pluginjs as $value) 
    <script src="{{ asset('public/frontend/pluginjs/'.$value) }}" type="text/javascript"></script>
    @endforeach
    @endif

    @if (!empty($js)) 
    @foreach ($js as $value) 
    <script src="{{ asset('public/frontend/js/'.$value) }}" type="text/javascript"></script>
    @endforeach
    @endif

    <script>
    jQuery(document).ready(function () {

    @if (!empty($funinit))
        @foreach ($funinit as $value)
            {{$value}}
        @endforeach
    @endif
    });
    </script>
