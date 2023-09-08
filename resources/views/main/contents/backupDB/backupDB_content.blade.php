@extends('main.master')
@section('title',  $title)
@section('content')
@include('main.contents.backupDB.components.backup_breadcrumb')


<div class="container-fluid">
   <div class="row">
      <div class="col-12">
         <div class="card">
            <div class="border-bottom title-part-padding">
              
               <button class="btn btn-primary float-end back-up-database" style="margin-right: 5px;"  >Back Up Now</button>
            </div>
           
         </div>
      </div>
   </div>
</div>
</div>

@endsection
@section('script')

<script>
   
$(document).on('click','button.back-up-database',function (e) {


    alert('asd');

});

</script>

@endsection