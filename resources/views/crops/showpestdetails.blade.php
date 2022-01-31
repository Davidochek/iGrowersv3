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
								
								<!-- New -->
								<div class="col-md-12">
									<div class="expand">
										<div id="single-carousel">
											<div class="img-hover">
												<img id="expandedImg" src="{{ asset($pestdetails->image1) }}" class="img-responsive">
											</div>
										</div>
									</div>
								</div>
								<div class="col-md-12">
									<div class="post-content"><p>Click the images below to enlarge</p></div>
								</div>
								<!-- The three columns -->
								<div class="col-md-12">
									<div class="row">
										<div class="col-md-4">
											<img id="imgclick1" src="{{ asset($pestdetails->image2) }}"  alt="" class="img-responsive" style="height: 150px;" onclick="myFunction(this);">
										</div>
										<div class="col-md-4">

											<img id="imgclick2" src="{{ asset($pestdetails->image3) }}" alt="" class="img-responsive" style="height: 150px;" onclick="myFunction(this);">
										</div>
										<div class="col-md-4">
											<img id="imgclick3" src="{{ asset($pestdetails->image1) }}"  alt="" class="img-responsive" style="height: 150px;" onclick="myFunction(this);">
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
										 <div class="content-btn"><a href="#"
                                                class="btn btn-primary">Pesticides Use</a></div>
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