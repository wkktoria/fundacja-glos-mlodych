@extends('layouts.with_breadcrumb_and_sidebar')

@section('title', 'Projekty')

@php
$pages = ['Projekty']
@endphp

@section('content')
@include('post.all', array('posts' => $posts))
@stop