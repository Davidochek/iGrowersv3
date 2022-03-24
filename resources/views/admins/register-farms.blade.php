@extends('layouts.admins')
@section('content')

<!-- SELECT2 EXAMPLE -->
<div class="card card-default">
	<div class="card-header">
		<h3 class="card-title">Register Farmer</h3>
	</div>
	<!-- /.card-header -->
	<div class="card-body">
		<div id="successmessage"></div>
			@if ($errors->any())
	<div class="alert alert-dismissible alert-danger">
		<button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
		<strong>Whoops!</strong> There was a problem with you input. <br>
		<ul>
			@foreach ($errors->all() as $error)
				<li>{{$error}}</li>
			@endforeach
		</ul>
	</div>
	@elseif($message = Session::get('success'))
	<div class="alert alert-success alert-dismissible">
<button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
		<p>{{$message}}</p>
	</div>
@endif
		<div class="row">
			<div class="col-md-6">
				<form action="" id="cform">
				<div class="form-group">
					<label>Select Farmer</label>
					<select type="text" name="name" id="select2" class="form-control select2" required>
						<option disabled="disabled" selected="true">Select one</option>
						@foreach ($farmers as $farmer)
						<option value="{{$farmer->id}}">{{$farmer->name}}</option>
					</select>
						@endforeach


				</div>
				<!-- /.form-group -->
				<div class="form-group" hidden>
					<label>Select Farmer</label>
					<input type="text" id="fid" class="form-control">
				</div>
				<!-- /.form-group -->
			</div>
			<!-- /.col -->
			<div class="col-md-6">
				<div class="form-group">
					<label>Telephone</label>
					<input type="text" name="phone" id="phone" class="form-control" required>
				</div>
				<!-- /.form-group -->
					</div>
			<!-- /.col -->
		</div>
		<!-- /.row -->		
	</div>
	<!-- /.card-body -->
</div>
<!-- /.card -->

<!-- SELECT2 EXAMPLE -->
<div class="card card-default">
	<div class="card-header">
		<h3 class="card-title">Register Field</h3>
	</div>
	<!-- /.card-header -->
	<div class="card-body">
		<div class="row">
			<div class="col-md-6">
				<div class="form-group">
					<label>Size</label>
					<select class="form-control select2" name="farmsize" id="farmsize" style="width: 100%;">
						<option selected="true" disabled="disabled">Select one</option> 
						<option value="0-2">0-2 acres</option>
						<option value="3-5">3-5 acres</option>
						<option value="6-10 ">6-10 acres</option>
						<option value="11-15">11-15 acres</option>
						<option value="16-20">16-20 acres</option>
						<option value="21-30">21-30 acres</option>
						<option value="30-100 ">Over 30 acres</option>
					</select>
				</div>
				<!-- /.form-group -->
				<div class="form-group clearfix">
					<label>Homestead Included</label>
					<div class="form-check">
						<input class="form-check-input" type="radio" value="Yes" name="fwithhomestead"  id="fwithhomestead"> &nbsp;&nbsp;&nbsp;
						<label class="form-check-label" for="fwithhomestead">
							Yes
						</label>
					</div>
					<div class="form-check">
						<input class="form-check-input" type="radio" value="No" name="fwithhomestead"  id="fwithhomestead"> &nbsp;&nbsp;&nbsp;
						<label class="form-check-label" for="fwithhomestead">
							No
						</label>
					</div>
				</div>
				<!-- /.form-group -->

				<div class="form-group">
					<label>What Animals</label>
					<select class="form-control select2" name="farmanimals" id="farmanimals" style="width: 100%;">
						<option selected="true" disabled="disabled">Select one</option> 
						<option>Dairy Cows</option>
						<option>Goats</option>
						<option>Beef Cattle</option>
						<option>Other</option>
					</select>
				</div>
				<!-- /.form-group -->
				<div class="form-group clearfix">
					<label>Farm Blocks</label>
					<div class="form-check">
						<input class="form-check-input" type="radio" value="Yes" name="farmblocks" id="farmblocks" id="farmblocks1"> &nbsp;&nbsp;&nbsp;
						<label class="form-check-label" for="farmblocks1">
							Yes
						</label>
					</div>
					<div class="form-check">
						<input class="form-check-input" type="radio" value="No" name="farmblocks" id="farmblocks" id="farmblocks2"> &nbsp;&nbsp;&nbsp;
						<label class="form-check-label" for="farmblocks2">
							No
						</label>
					</div>
				</div>
				<!-- /.form-group -->

				<div class="form-group">
					<label>Farm Blocks</label>
					<select class="form-control select2" name="farmblocksno" id="farmblocksno" style="width: 100%;">
						<option selected="true" disabled="disabled">Select one</option> 
						<option>1</option>
						<option>2</option>
						<option>3</option>
						<option>4</option>
						<option>5</option>
						<option>6</option>
						<option>7</option>
					</select>
				</div>
				<!-- /.form-group -->
				<div class="form-group clearfix">
					<label>Certifications</label>
					<div class="form-check">
						<input class="form-check-input" type="radio" value="Yes"  name="farmcertifications" id="farmcertifications"> &nbsp;&nbsp;&nbsp;
						<label class="form-check-label" for="farmcertifications">
							Yes
						</label>
					</div>
					<div class="form-check">
						<input class="form-check-input" type="radio" value="No" value="No" name="farmcertifications" id="farmcertifications"> &nbsp;&nbsp;&nbsp;
						<label class="form-check-label" for="farmcertifications">
							No
						</label>
					</div>
				</div>
				<!-- /.form-group -->

			</div>
			<!-- /.col -->
			<div class="col-md-6">
				<div class="form-group">
					<label>Farm Ownership</label>
					<select class="form-control select2" name="farmownership" id="farmownership" style="width: 100%;">
						<option selected="true" disabled="disabled">Select one</option> 
						<option>Family</option>
						<option>Spouse</option>
						<option>Parents</option>
						<option>Lease</option>
					</select>
				</div>
				<!-- /.form-group -->

				<div class="form-group">
					<label>Animals on the Farm</label>
					<select type="text" name="farmanimalsno" id="farmanimalsno" class="form-control select2">
						<option selected="true" disabled="disabled">Select one</option> 
						<option value="Yes">Yes</option>
						<option value="No">No</option>
					</select>
				</div>
				<!-- /.form-group -->
				<div class="form-group">
					<label>Means of Transport</label>
					<select class="form-control select2" name="farmtransport" id="farmtransport" style="width: 100%;">
						<option selected="true" disabled="disabled">Select one</option> 
						<option value="Foot">Foot</option>
						<option value="Bicycle">Bicycle</option>
						<option value="Motocycle">Motocycle</option>
						<option value="Vehicles">Vehicles</option>
						<option value="Pickup">Pickup</option>
					</select>
				</div>
				<!-- /.form-group -->
				<div class="form-group">
					<label>Main Crop</label>
					<select class="form-control select2" type="text" name="fmaincrop" id="fmaincrop">
						<option selected="true" disabled="disabled">Select one</option> 
						<option value="Avocado">Avocado</option>
						<option value="Beans">Beans</option>
					</select>
				</div>
				<!-- /.form-group -->
				<div class="form-group">
					<label>Which Other Crop</label>
					<input type="text" name="fothercrop" id="fothercrop" class="form-control">
				</div>

			</div>
			<!-- /.col -->
		</div>
		<!-- /.row -->	
		<div class="row" >
			<div class="col-md-12">
				
                      <button type="button" id="update_field" class="btn btn-success float-right">Submit</button>
                  </form>
			</div>
		</div>	
	</div>
	<!-- /.card-body -->
</div>
<!-- /.card -->


@endsection

@push('scripts')
	<script>
$('#select2').change(function(){
  var id= $(this).val();
  $.ajax({
		url: '{{ url('admin/previewfarmer') }}' + '/' + id,
		type: 'GET',
		dataType: 'JSON',
		success: function(data){
			// alert(data.id);
			// console.log(data.phone);
			$('#fid').val(data.id);
			$('#phone').val(data.phone);
		},
  error: function(error){
   alert('error')
 }
	})          
});

$(document).on('click', '#update_field', function($id){
	let id = $('#fid').val();
	  $.ajax({
		url: '{{ url('updatefarmer') }}' + '/' + id,
		type: 'PUT',
    	dataType: 'JSON', 
    	data: {
      '_token' : $('input[name = _token]').val(),
      'id': id,
'farmsize' :$('#farmsize').val(),
'fwithhomestead' :$('#fwithhomestead').val(),
'farmanimals' :$('#farmanimals').val(),
'farmblocks' :$('#farmblocks').val(),
'farmblocks' :$('#farmblocks').val(),
'farmblocksno' :$('#farmblocksno').val(),
'farmcertifications' :$('#farmcertifications').val(),
'farmownership' :$('#farmownership').val(),
'farmanimalsno' :$('#farmanimalsno').val(),
'fmaincrop' :$('#fmaincrop').val(),
'farmtransport' :$('#farmtransport').val(),
'fothercrop' :$('#fothercrop').val(),
		},
		success:function(response){
			document.getElementById("cform").reset();
			$('#successmessage').addClass('alert alert-success');
			$('#successmessage').text(response.success);
		}
	})
});

</script>
@endpush
