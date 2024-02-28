@extends('layouts.index')

@section('seo')
    <title>{{ $settings->title }}</title>
    <meta name="description" content="{{ $settings->description }}">
@endsection

@section('content')

    <x-header page="home"/>

    <x-main :settings="$settings" video="true"/>

    <x-products :category="$category"/>

    <x-advantages :advantages="$advantages"/>

    <x-info :settings="$settings"/>

    <x-map :maps="$maps"/>

    <x-news :events="$events"/>

    <x-consult/>

    <x-footer/>
@endsection
