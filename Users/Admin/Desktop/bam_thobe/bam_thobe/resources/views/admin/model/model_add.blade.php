@extends('admin.master')@section('content')
<div class="basic-form-area mg-b-15">
  <div class="container-fluid sparkline13-list">
    <div class="page-header">
      <h2 class="main-content-title">Add Model</h2>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="#">Home</a></li>
        <li class="breadcrumb-item active" aria-current="page"> Add Model</li>
      </ol>
    </div>
	
	
	
    <div class="row"> @if(Session::has('success')) {{Session::get('success')}} @endif </div>

	
	
	
	    <div class="row">
        <div class="col-sm-12 col-xs-12">
    <div class="card">
      <div class="cardarea">
        <div class="basic-login-form-ad">
       
            <div class="all-form-element-inner">
            <form method="POST" action="{{url('add-model')}}" class="form-horizontal form-label-left" enctype="multipart/form-data">
              {{csrf_field()}}
               
              <div class="form-group-inner row">
                <label class="col-md-2 col-sm-3 col-xs-12">Model Type </label>
                <div class="col-md-10 col-sm-9 col-xs-12">
                  <input type="text" class="form-control" name="model_type" value="{{old('model_type')}}" />
                  @if($errors->has('model_type')) {{$errors->first('model_type')}} @endif </div>
              </div>
              <div class="form-group-inner row">
                <label class="col-md-2 col-sm-3 col-xs-12">Price</label>
                <div class="col-md-10 col-sm-9 col-xs-12">
                  <input type="text" class="form-control" name="price" value="{{old('price')}}" />
                  @if($errors->has('price')) {{$errors->first('price')}} @endif </div>
              </div>
              
                <div class="form-group-inner row">
                        <label class="col-md-2 col-sm-3 col-xs-12"> Image</label>
                        <div class="col-md-10 col-sm-9 col-xs-12">
                          <input type="file" class="form-control" name="image" value="{{old('image')}}"/>
                          @if($errors->has('image'))
                          {{$errors->first('image')}}
                          @endif </div>
                          
                </div>  
              <div class="form-group-inner row">
                <div class="col-md-2 col-sm-3 col-xs-12"></div>
                <div class="col-md-10 col-sm-9 col-xs-12">
                  <button class="btn btn-primary w-110" type="submit">Submit</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</div>
</div>

@endsection 
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> 
<script>
        function preview_images()
        {
            document.getElementById("image_preview").innerHTML = "";
            var total_file=document.getElementById("images").files.length;
            for(var i=0;i<total_file;i++)
            {
                $('#image_preview').append("<div class='col-md-3'><img class='img-responsive' src='"+URL.createObjectURL(event.target.files[i])+"'></div>");
            }
        }
    </script>
<script>
    $(document).ready(function(){

     $('#myInput').bind('change keyup',function() {
  var id=$("#myInput").val();
    $.ajax({
        url: '{{ url('/cat_get_subcat') }}',
        type: 'POST',
        data: {
          _token: '{{ csrf_token() }}',
            id: id
        },
        dataType: 'html',
        success: function(data)
        {
           $('#subdata').html(data);
        }
    });
});

    });

</script> 