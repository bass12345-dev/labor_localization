@extends('main.no_sidebar_master')
@section('title',  $title)
@section('content')
@include('main.contents.establishments.pages.survey.components.breadcrumb')
@include('main.contents.establishments.pages.survey.components.survey_table')
@endsection

@section('script')
@endsection