@extends('layouts.admins')
@section('content')
	<div id="successmessage"></div>
	<div id="errormessage"></div>
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
		<div class="main-card mb-3 card">
			<div class="card-body"><h5 class="card-title">Farmer Details</h5>
				<table class="mb-0 table table-bordered">
					<tbody>
						<tr>
							<th scope="row"><b>Name</b></th>
							<td>{{$farmer->name}}</td>
						</tr>
						<tr>
							<th scope="row"><b>Location</b></th>
							<td>{{$farmer->location}}</td>
						</tr>
						<tr>
							<th scope="row"><b>Phone</b></th>
							<td>{{$farmer->phone}}</td>
						</tr>
						<tr>
							<th scope="row"><b>Farming Period</b></th>
							<td>{{$farmer->fperiod}} Years</td>
						</tr>
					</tbody>
				</table>
			</div>
		</div>
	</div>

	<div class="col-md-6">
		<div class="main-card mb-3 card">
			<div class="card-body"><h5 class="card-title">Fields</h5>
				<div class="table-responsive">
					<table class="mb-0 table" id="cropstable2">
						<thead>
							<tr>
								<th>#</th>
								<th>Name</th>
								<th>Farm Size</th>
								<th>Main Crop</th>
								<th>Other Crop</th>
							</tr>
						</thead>
						<tbody>
							<?php
							$id = -1;
							$id++;
							?>
							@foreach ($farmer->fields as $field)
							<?php
							$id++
							?>
							<tr>
								<th scope="row">{{$id}}</th>
								<td>{{$field->fieldname}}</td>
								<td>{{$field->farmsize}} Acres</td>
								<td><b>{{$field->fmaincrop}}</b></td>
								<td>{{$field->fothercrop}}</td>
							</tr>
							@endforeach
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="row">
	<div class="col-md-12">
		<div class="main-card mb-3 card">
			<div class="card-body">
				<div class="main-card mb-3 card">
					<div class="card-body"><h5 class="card-title">Crop Seasons</h5>
						<div class="table-responsive">
							<table class="mb-0 table" id="cropstable3">
								<thead>
									<tr>
										<th>#</th>
										<th>Field</th>
										<th>Name</th>
										<th>Variety</th>
										<th>Season</th>
										<th>Date Planted</th>
										<th>Expected Date</th>
										<th>Expected Volume</th>
										<th>Action</th>
									</tr>
								</thead>
								<tbody>
									<?php
									$id = -1;
									$id++;
									?>
									@foreach ($fields as $field)
									@foreach ($field->crops as $crop)
									<?php
									$id++;
									?>
									<tr>
										<th scope="row">{{$id}}</th>
										<td>{{$field->fieldname}}</td>
										<td>{{$crop->crop}}</td>
										<td>
											@if ($crop->crop === "Beans")
											{{$crop->beansvariety}}
											@else
											{{$crop->avocodvariety}}
											@endif
										</td>
										<td>{{$crop->season}}</td>
										<td>{{$crop->dateplanted}}</td>
										<td>{{$crop->expectedharvestdate}}</td>
										<td>{{$crop->expectedvolume}}</td>
										<td><a href=""  onclick="show_crop({{$crop->id}})" data-target="#harvestModal" data-toggle="modal" class="btn btn-success">ADD HARVEST</a></td>
									</tr>
									@endforeach
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

<div class="row">
	<div class="col-md-12">
		<div class="main-card mb-3 card">
			<div class="card-body">
				<div class="main-card mb-3 card">
					<div class="card-body"><h5 class="card-title">Harvests</h5>
						<div class="table-responsive">
							<table class="mb-0 table" id="cropstable4">
								<thead>
									<tr>
										<th>#</th>
										<th>Date</th>
										<th>Quantity</th>
										<th>Unit</th>
										<th>Action</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<th scope="row">1</th>
										<td>2022-03-29</td>
										<td>2000</td>
										<td>Pcs</td>
										<td><button class="btn btn-success">Print</button></td>
									</tr>
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
<!-- Modal 1 -->

<div class="modal fade" id="harvestModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Register Harvest</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<form>
					@csrf
					<div class="row form-group" hidden>
						<label for="" class="col-md-3">Crop Id</label>
						<div class="col-md-9">
							<input type="number" class="form-control" id="crop_id"  name ="crop_id">
						</div>
					</div>
					<div class="row form-group">
						<label for="" class="col-md-3">Date Harvested</label>
						<div class="col-md-9">
							<input type="date" class="form-control" id="date"  name ="date">
						</div>
					</div>
					<div class="row form-group">
						<label for="" class="col-md-3">Unit</label>
						<div class="col-md-9">
							<select name="unit" id="unit" class="form-control">
								<option disabled="disabled" selected="true">Select One</option>
								<option>Pcs</option>
								<option>Kgs</option>
							</select>
						</div>
					</div>
					<div class="row form-group">
						<label for="" class="col-md-3">Quantity</label>
						<div class="col-md-9">
							<input type="number" class="form-control" id="quantity"  name ="quantity">
						</div>
					</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
					<button type="button" id="save_harvest" class="btn btn-flat btn-success"><i class="fa fa-check-circle"></i> Submit</button>
				</div>
			</form>
		</div>
	</div>
</div>
<!-- End Modal -->  
@push('scripts')
<script>
	function show_crop(id) {
		// var id= $(this).val();
		$.ajax({
			url: '{{ url('previewcrop') }}' + '/' + id,
			type: 'GET',
			dataType: 'JSON',
			success: function(data){
			// alert(data.id);
			console.log(data);
			$('#crop_id').val(data.id);
		},
		error: function(error){
			alert('error')
		}
	});
	}
$(document).on('click', '#save_harvest', function() {
			$.ajax({
				url: "{{ url('/harvests') }}",
				type: 'post',
				dataType: 'JSON', 
				data: {
					'_token' : $('input[name = _token]').val(),
					'crop_id': $('#crop_id').val(),
					'unit': $('#unit').val(),
					'quantity':  $('#quantity').val(),
					'date':  $('#date').val()
				},
			success:function(response){
			$('#successmessage').addClass('alert alert-success');
			$('#successmessage').text(response.success);
			$('#harvestModal').modal('hide')
			$("html, body").animate({ scrollTop: 0 }, "slow");
 				 return false;
		}
		});
	});
</script>
@endpush