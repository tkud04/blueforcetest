
@extends('layout')

@section('title',"Book Appointment")

@section('styles')
<link rel="stylesheet" href="css/bootstrap-datetimepicker.min.css">
<link rel="stylesheet" href="css/fullcalendar.min.css">
@stop

@section('scripts')
<script src="js/moment.min.js"></script>
<script src="js/bootstrap-datetimepicker.min.js"></script>

<script src="js/jquery-ui.min.js"></script>
<script src="js/fullcalendar.min.js"></script>
<script src="js/jquery.fullcalendar.js"></script>

@stop

@section('content')

@include('page-header',['title' => "Book Appointment"])

<div class="content">
<div class="container">
<div class="row">

<div class="col-md-5 col-lg-4 col-xl-3 theiaStickySidebar">
<div class="card">
<div class="card-header">
<h4 class="card-title mb-0">Drag & Drop Event</h4>
</div>
<div class="card-body">
<div id="calendar-events" class="mb-3">
<div class="calendar-events" data-class="bg-info"><i class="fas fa-circle text-info"></i> My Event One</div>
<div class="calendar-events" data-class="bg-success"><i class="fas fa-circle text-success"></i> My Event Two</div>
<div class="calendar-events" data-class="bg-danger"><i class="fas fa-circle text-danger"></i> My Event Three</div>
<div class="calendar-events" data-class="bg-warning"><i class="fas fa-circle text-warning"></i> My Event Four</div>
</div>
<div class="checkbox mb-3">
<input id="drop-remove" type="checkbox">
<label for="drop-remove">
Remove after drop
</label>
</div>
<a href="#" data-toggle="modal" data-target="#add_new_event" class="btn btn-primary btn-block">
<i class="fas fa-plus"></i> Add Category
</a>
</div>
</div>
</div>


<div class="col-md-7 col-lg-8 col-xl-9">
<div class="card">
<div class="card-body">
<div id="calendar"></div>
</div>
</div>
</div>

</div>
</div>
</div>

@stop