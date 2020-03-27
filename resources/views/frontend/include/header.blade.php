<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Ansonika">
    <title>{{ $title }}</title>
    <!-- Favicons-->
    <link rel="shortcut icon" href="{{asset('public/frontend/img/favicon.ico')}}" type="image/x-icon">
    <link rel="apple-touch-icon" type="image/x-icon" href="{{asset('public/frontend/img/apple-touch-icon-57x57-precomposed.png')}}">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="72x72" href="{{asset('public/frontend/img/apple-touch-icon-72x72-precomposed.png')}}">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="114x114" href="{{asset('public/frontend/img/apple-touch-icon-114x114-precomposed.png')}}">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="144x144" href="{{asset('public/frontend/img/apple-touch-icon-144x144-precomposed.png')}}">
    <!-- GOOGLE WEB FONT -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900&display=swap" rel="stylesheet">
    <!-- BASE CSS -->
    <link href="{{asset('public/frontend/css/bootstrap.custom.min.css')}}" rel="stylesheet">
    <link href="{{asset('public/frontend/css/style.css')}}" rel="stylesheet">
	<!-- SPECIFIC CSS -->
    <link href="{{asset('public/frontend/css/home_1.css')}}" rel="stylesheet">
    <!-- YOUR CUSTOM CSS -->
    <link href="{{asset('public/frontend/css/custom.css')}}" rel="stylesheet">

    <script>var baseurl = "{{ asset('/') }}";</script>
        <!-- END HEAD -->

        @if (!empty($css)) 
        @foreach ($css as $value) 
        @if(!empty($value))

        <link rel="stylesheet" href="{{ asset('public/frontend/css/'.$value) }}">
        @endif
        @endforeach
        @endif

        @if (!empty($plugincss)) 
        @foreach ($plugincss as $value) 
        @if(!empty($value))

        <link rel="stylesheet" href="{{ asset('public/frontend/sass/'.$value) }}">
        @endif
        @endforeach
        @endif

        <style>
            .has-error{
                border-color: red !important;
            }
            
        </style>

</head>