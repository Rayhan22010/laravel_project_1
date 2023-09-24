<!DOCTYPE html>
<html>
@include('frontend.layout.signIn_signUp_header')

<body>
@yield('content')

{{--@include('frontend.layout.footer')--}}

@include('frontend.layout.script')

@yield('page-js')
</body>

</html>
