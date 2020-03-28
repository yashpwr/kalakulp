        <div class="rightbar-overlay"></div>
        <!-- JAVASCRIPT -->
        <script src="{{asset('public/backend/libs/jquery/jquery.min.js')}}"></script>
        <script src="{{asset('public/backend/libs/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
        <script src="{{asset('public/backend/libs/metismenu/metisMenu.min.js')}}"></script>
        <script src="{{asset('public/backend/libs/simplebar/simplebar.min.js')}}"></script>
        <script src="{{asset('public/backend/libs/node-waves/waves.min.js')}}"></script>

        <script src="{{asset('public/backend/js/jquery.validate.min.js')}}"></script>
        <script src="{{asset('public/backend/js/toastr.min.js')}}"></script>
        <script src="{{asset('public/backend/js/comman_function.js')}}"></script>
        <script src="{{asset('public/backend/js/ajaxfileupload.js')}}"></script>
        <script src="{{asset('public/backend/js/jquery.form.min.js')}}"></script>

        <script src="{{asset('public/backend/js/app.js')}}"></script>

        @if (!empty($pluginjs)) 
        @foreach ($pluginjs as $value) 
        <script src="{{ asset('public/backend/libs/'.$value) }}" type="text/javascript"></script>
        @endforeach
        @endif

        @if (!empty($js)) 
        @foreach ($js as $value) 
        <script src="{{ asset('public/backend/js/'.$value) }}" type="text/javascript"></script>
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