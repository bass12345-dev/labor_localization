@extends('main.master')
@section('title',  $title)
@section('content')
@include('main.contents.contractors.components.contractors_breadcrumb')
@include('main.contents.contractors.components.contractors_table')
@endsection