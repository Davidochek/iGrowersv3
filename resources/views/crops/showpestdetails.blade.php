@extends('layouts.admin')
@section('content')

<div class="section-title-01 honmob">
	<div class="bg_parallax image_01_parallax"></div>
	<div class="opacy_bg_02">
		<div class="container">
			<h1>{{$pestdetails->name}}</h1>
		</div>
	</div>
</div>
<section class="content-central">
	<div class="semiboxshadow text-center">
		<img src="img/img-theme/shp.png" class="img-responsive" alt="">
	</div>
	<div class="content_info">
		<div class="paddings-mini">
			<div class="container">
				<div class="row">
					<div class="col-md-8 single-blog">
						<div class="post-item">
							<div class="row">
								<div class="col-md-12">
									<div class="container1">
										<span onclick="this.parentElement.style.display='none'" class="closebtn">&times;</span>
										<img id="expandedImg" style="width:100%">
										<div id="imgtext"></div>
									</div>
									<div style="text-align:center">
										<p>Click on the images below:</p>
									</div>
									<div class="row">
										<div class="column">
											<img src="{{ asset($pestdetails->image2) }}" alt="" style="width:100%; max-height: 125px;" onclick="myFunction(this);">
										</div>
										<div class="column">
											<img src="{{ asset($pestdetails->image3) }}"  alt="" style="width:100%; max-height: 125px;" onclick="myFunction(this);">
										</div>
										<div class="column">
											<img src="{{ asset($pestdetails->image1) }}"  alt="" style="width:100%; max-height: 125px;" onclick="myFunction(this);">
										</div>
									</div>
								</div>
								<div class="col-md-12 pt-4">
									<div class="post-content">
										<h3>{{$pestdetails->name}}</h3>
										<div class="row">
											<div class="col-md-4">
												<h3>Common Name</h3>
												@if(!empty($pestdetails->common_name))
												<p>{{$pestdetails->common_name}}</p>
												@else
												--

												@endif
											</div>
											<div class="col-md-4">
												<h3>Scientific Name</h3>
												@if(!empty($pestdetails->scientific_name))
												<p>{{$pestdetails->scientific_name}}</p>
												@else
												--

												@endif
											</div>
											<div class="col-md-4">
												<h3>Issue</h3>
												@if(!empty($pestdetails->issue))
												<p>{{$pestdetails->issue}}</p>
												@else
												--

												@endif
											</div>
										</div>
										<h3>Causes</h3>
										@if(!empty($pestdetails->cause))
										<p>{{$pestdetails->cause}}</p>
										@else
										--
										@endif
										<h3>Prevention</h3>
										@if(!empty($pestdetails->prevention))
										<p>{{$pestdetails->prevention}}</p>
										@else
										--
										@endif
										<h3>Control</h3>
										@if(!empty($pestdetails->control))
										<p>{{$pestdetails->control}}</p>
										@else
										--
										@endif
										<div class="content-btn">
											@foreach ($pestdetails->crops as $crop)
											<a href="{{ route('showPestPesticides', $pestdetails->id) }}"  class="btn btn-primary">Pesticides Use</a>
											@endforeach
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-4">
						<aside class="widget" style="margin-top: 18px;">
							<div class="panel panel-default">
								<div class="panel-heading">Other Pests</div>
								<div class="panel-body">
									<table class="table">
										<tr>
											<td style="border-top: none;"> </td>
										</tr>
										@foreach ($pests->pests as $pest)
										<tr>
											<td> 
												<a style="list-style: none;" href="{{ url('/showPestDetails/' .$pest->id) }}">
													{{$pest->name}}
												</a>
											</td>
										</tr>
										@endforeach
										
									</table>
								</div>
							</div>
						</aside>
					</div>
				</div>
			</div>
		</div>
	</div>            
</section>


@endsection
@push('scripts')
<script>
	function myFunction(imgs) {
		var expandImg = document.getElementById("expandedImg");
		var imgText = document.getElementById("imgtext");
		expandImg.src = imgs.src;
		imgText.innerHTML = imgs.alt;
		expandImg.parentElement.style.display = "block";
	}
</script>
@endpush