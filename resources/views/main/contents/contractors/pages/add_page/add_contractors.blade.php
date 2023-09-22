@extends('main.no_sidebar_master')
@section('title',  $title)
@section('content')
@include('main.contents.contractors.pages.add_page.components.breadcrumb')
@include('main.contents.contractors.pages.add_page.components.form')  
@endsection
