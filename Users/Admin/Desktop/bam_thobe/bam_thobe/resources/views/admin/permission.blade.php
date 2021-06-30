@extends('admin.master')
@section('content')
<div class="data-table-area mg-b-15">
  <div class="container-fluid sparkline13-list">
    <div class="page-header">
      <h2 class="main-content-title">Permission </h2>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="#">Home</a></li>
        <li class="breadcrumb-item active" aria-current="page"> Permission </li>
      </ol>
    </div>
    <div class="row">
      <div class=" col-sm-12 col-xs-12">
        <div class="datatable-dashv1-list custom-datatable-overright">
          <div class="card">
            <div class="cardarea">
              <?php
$user = auth()->user();
if($user->type == 'admin') { ?>
              <a class="form-control dt-tb" href="{{url('permission-add')}}">Add Permission</a>
              <?php } ?>
              <table id="table" data-toggle="table" data-pagination="true" data-search="true" data-show-columns="true" data-show-pagination-switch="true" data-show-refresh="true" data-key-events="true" data-show-toggle="true" data-resizable="true" data-cookie="true" data-cookie-id-table="saveId" data-show-export="true" data-click-to-select="true" data-toolbar="#toolbar">
                <thead>
                  <tr>
                    <th data-field="id">ID</th>
                    <th>Name</th>
                    <th>Practice test</th>
                    <th>Mock exams</th>
                    <th>Students</th>
                    <th>Package</th>
                    <th>Dictionary</th>
                    <th>Date</th>
                    <th data-field="action">Action</th>
                  </tr>
                </thead>
                <tbody>
                  <?php $i=1; ?>
                @foreach($permission as $row)
                <tr>
                  <td>{{ $i }}
                    <?php $i++; ?></td>
                  <td>{{ $row->fname }}</td>
                  <td> @if($row->practice == 1) <i class="fa fa-check" style="font-size:30px;color:green"></i> @else <i class="fa fa-close" style="font-size:30px;color:red"></i> @endif </td>
                  <td> @if($row->mock == 1) <i class="fa fa-check" style="font-size:30px;color:green"></i> @else <i class="fa fa-close" style="font-size:30px;color:red"></i> @endif </td>
                  <td> @if($row->student == 1) <i class="fa fa-check" style="font-size:30px;color:green"></i> @else <i class="fa fa-close" style="font-size:30px;color:red"></i> @endif </td>
                  <td> @if($row->package == 1) <i class="fa fa-check" style="font-size:30px;color:green"></i> @else <i class="fa fa-close" style="font-size:30px;color:red"></i> @endif </td>
                  <td> @if($row->dictionary == 1) <i class="fa fa-check" style="font-size:30px;color:green"></i> @else <i class="fa fa-close" style="font-size:30px;color:red"></i> @endif </td>
                  <td>{{ $row->date }}</td>
                  
                  <!-- <td>{{ date('Y-m-d', strtotime($row->created_at)) }}</td> -->
                  
                  <?php
$user = auth()->user();
  if($user->type == 'admin') {
  ?>
                  <td class="datatable-ct"><?php

  if($row->status==1)

  {

  ?>
                    <a class="btn btn-success" href="permission-block/{{$row->id}}/{{$row->status}}">Block</a>
                    <?php

  }

  else

  {

  ?>
                    <a class="btn btn-warning" href="permission-block/{{$row->id}}/{{$row->status}}">Unblock</a>
                    <?php

  }

  ?>
                    <a class="btn btn-primary" href="permission-edit/{{$row->id}}">Edit</a> <a class="btn btn-danger" href="permission-delete/{{$row->id}}">Delete</a></td>
                  <?php } ?>
                </tr>
                @endforeach
                  </tbody>
                
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection 