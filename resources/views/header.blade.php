<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="icon" href="{{ asset(env('PUBLIC_PATH').'image/favicon.png') }}" type="image/png">
        <title>@yield('title', 'RedLanternAPI')</title>
        <link rel="stylesheet" href="{{ asset(env('PUBLIC_PATH').'css/fonts.css') }}">
        <link rel="stylesheet" href="{{ asset(env('PUBLIC_PATH').'css/errors.css') }}">
        <link rel="stylesheet" href="{{ asset(env('PUBLIC_PATH').'css/all.css') }}">
        <link rel="stylesheet" href="{{ asset(env('PUBLIC_PATH').'css/bootstrap/bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ asset(env('PUBLIC_PATH').'css/font-awesome/css/font-awesome.min.css') }}">
        @yield('css')
    </head>