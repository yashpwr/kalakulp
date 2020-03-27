<head>
        <meta charset="utf-8" />
        <title>{{ $title }}</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
        <meta content="Themesbrand" name="author" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="{{asset('public/backend/images/favicon.ico')}}">

        <!-- Bootstrap Css -->
        <link href="{{asset('public/backend/css/bootstrap.min.css')}}" id="bootstrap-style" rel="stylesheet" type="text/css" />
        <!-- Icons Css -->
        <link href="{{asset('public/backend/css/icons.min.css')}}" rel="stylesheet" type="text/css" />
        <!-- App Css-->
        <link href="{{asset('public/backend/css/app.min.css')}}" id="app-style" rel="stylesheet" type="text/css" />
        <script>var baseurl = "{{ asset('/') }}";</script>

        @if (!empty($css)) 
        @foreach ($css as $value) 
        @if(!empty($value))

        <link rel="stylesheet" href="{{ asset('public/backend/css/'.$value) }}">
        @endif
        @endforeach
        @endif

        <style>
        .has-error{
                border-color: red !important;
        }
        
        </style>
</head>