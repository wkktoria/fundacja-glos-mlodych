@extends('layouts.with_breadcrumb_and_sidebar')

@section('title', $post->tytuł)

@php
$pages = ['Aktualności', $post->tytuł]
@endphp

@section('content')
@include('post.show', array('post' => $post, 'indexRouteName' => 'feed.index', 'category' => 'Aktualności'))
@stop