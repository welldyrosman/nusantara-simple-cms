<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta name="robots" content="noindex,nofollow">
    <title>
        {{ empty($t) ? (is_array($title = __(Route::getCurrentRoute()->getName())) ? $title['title'] : $title) : $t }} |
        {{ config('settings.site_title') }}</title>
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <link rel="stylesheet" type="text/css" href="{{ asset('dist/plugins/fontawesome-free/css/all.min.css') }}">
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('dist/css/adminlte.min.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ asset('dist/plugins/codemirror/codemirror.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('dist/plugins/codemirror/theme/monokai.css') }}">

    

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-tagsinput/0.8.0/bootstrap-tagsinput.css"
        rel="stylesheet" />
        <link rel="stylesheet" type="text/css" href="{{ asset(mix('dist/css/admin.css')) }}">
    <link rel="shortcut icon" href="{{ asset('i/icons/favicon.ico') }}">
    @stack('styles')
</head>

<body class="control-sidebar-slide-open layout-footer-fixed layout-fixed sidebar-collapse sidebar-mini-md">
    <div class="wrapper">
        @if ($currentUser = auth()->user())
            @include('partials.admin.nav')
        @endif
        @if (session('message'))
            <div class="notification is-info">{{ session('message') }}</div>
        @endif
        <div class="content-wrapper">
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0">Dashboard</h1>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active">Dashboard v1</li>
                            </ol>
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <section class="content">
                <div class="container-fluid">
                    @yield('content')
                </div>
            </section>
        </div>
    </div>
   
    <script src="{{ asset('dist/plugins/jquery/jquery.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('dist/plugins/jquery-ui/jquery-ui.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset(mix('dist/js/admin.js')) }}" type="text/javascript"></script>
    <script src="{{ asset('dist/plugins/bootstrap/js/bootstrap.bundle.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('dist/js/adminlte.js') }}" type="text/javascript"></script>
    
    <script src="{{ asset('dist/plugins/summernote/summernote-bs4.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('dist/plugins/codemirror/codemirror.js')}}"></script>
    <script src="{{ asset('dist/plugins/codemirror/mode/css/css.js')}}"></script>
    <script src="{{ asset('dist/plugins/codemirror/mode/xml/xml.js')}}"></script>
    <script src="{{ asset('dist/plugins/codemirror/mode/htmlmixed/htmlmixed.js')}}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-tagsinput/0.8.0/bootstrap-tagsinput.min.js"></script>
   
    
    
    <script>
      $(function () {
        // Summernote
        $('#summernotenew').summernote({
          height: 250,
        })
    
        // CodeMirror
       
      })
    </script>
    @hasSection('scripts')@yield('scripts')@endif
    
</body>

</html>
