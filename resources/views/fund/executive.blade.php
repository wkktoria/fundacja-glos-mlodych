@extends('layouts.with_breadcrumb_and_sidebar')

@section('title', 'Zarząd Fundacji')

@php
$pages = ['Zarząd Fundacji']
@endphp

@section('content')
<section class="flex items-center space-x-2">
    <img src="/images/chairman.png" alt="Chairman" class="w-80 h-80 object-contain" />
    <span class="font-bold text-base">Józef Protasewicz - prezes Zarządu Fundacji</span>
</section>
@stop