@extends('main.no_sidebar_master')
@section('title',  $title)
@section('content')
@include('main.contents.establishments.pages.survey.components.breadcrumb')
@include('main.contents.establishments.pages.survey.components.survey_table')
@endsection

@section('script')
<script>
 $("#local_table").DataTable({
    fixedColumns: true,
  fixedHeader: true,
  scrollX: true,
  "searching": false,
  "lengthChange": false,
  "info": false,
  
 });
 $("#outside_table").DataTable({
    fixedColumns: true,
  fixedHeader: true,
  scrollX: true,
  "searching": false,
  "lengthChange": false,
  "info": false,
 });
</script>
@endsection

