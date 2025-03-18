<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
@include('includes.head')
<body>

    @include('includes.header')

    @yield('content')
    {{-- <input type="button" value="Hide" id="btn11">
    <input type="button" value="Show" id="btn22">
    <input type="button" value="hidden" id="btn3">
    <div id="demo" style="width: 40px; height: 30px; background-color: aqua;">
      hello guy
    </div> --}}

    @include('includes.footer')
