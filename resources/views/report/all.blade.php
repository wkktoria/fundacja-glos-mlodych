@extends('layouts.with_breadcrumb_and_sidebar')

@section('title', 'Sprawozdania')

@php
$pages = ['Sprawozdania']
@endphp

@section('content')
@include('post.all', array('posts' => $posts))
@stop