<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <title>@yield('title') &mdash; {{ config('app.name') }}</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="shortcut icon" href="{{ asset('assets/img/technoct.PNG') }}" type="image/x-icon">
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    @stack('stylesheet')
</head>

<body>
    <div id="app">
        @yield('app')
    </div>
    <script src="{{ mix('js/manifest.js') }}"></script>
    <script src="{{ mix('js/vendor.js') }}"></script>
    <script src="{{ mix('js/app.js') }}"></script>
    @if (session('success'))
        <script type="text/javascript">
            swal({
                title:'Success!',
                icon: 'success',
                text:'{{ session("success") }}',
                timer:3000,
                button:false

            }).then((value) => {
            }).catch(swal.noop);
        </script>
    @endif
    @if (session('error'))
        <script type="text/javascript">
            swal({
                title:'Error!',
                icon: 'error',
                text:'{{ session("error") }}',
                timer:3000,
                button:false

            }).then((value) => {
            }).catch(swal.noop);
        </script>
    @endif
    @if ($errors->any())
        @foreach ($errors->all() as $error)
            <script type="text/javascript">
                swal({
                title:'Error!',
                icon: 'error',
                text:'{{$error}}',
                timer:3000,
                button:false

            }).then((value) => {
            }).catch(swal.noop);
            </script>
        @endforeach
    @endif
</body>
</html>
