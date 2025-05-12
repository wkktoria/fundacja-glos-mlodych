@extends('layouts.with_breadcrumb_and_sidebar')

@section('title', 'Aktualności')

@php
$pages = ['Aktualności']
@endphp

@section('content')
@include('post.all', array('posts' => $posts))
@stop