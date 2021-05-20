 @extends('front.layouts.skeleton')

@section('app')
    @include('front.partials.header')
    @yield('content')
    @include('front.partials.footer')
@endsection
