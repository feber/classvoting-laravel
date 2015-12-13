@extends('app')
@section('content')

<script>
		$(document).ready(function() {
			$("span.menu").click(function() {
				$(".top-nav ul").slideToggle(500);
			});
		});
	</script>
	<!-- /script-for-nav -->
	<!-- Product-Details-page -->
	<div class="details-page">
		<div class="content details-page">
			<!---start-product-details--->
			<div class="product-details">
				<div class="container">
					<ul class="product-head" >
						<div class="clearfix"> </div>
					</ul>
					<!----details-product-slider--->
					<!-- Include the Etalage files -->
					<link rel="stylesheet" href="{{url()}}/css/etalage.css">
					<script src="{{url()}}/js/jquery.etalage.min.js"></script>
					<!-- Include the Etalage files -->
					<script>
						jQuery(document).ready(function($) {

							$('#etalage').etalage({
								thumb_image_width: 300,
								thumb_image_height: 400,
								source_image_width: 900,
								source_image_height: 1000,
								show_hint: true,
								click_callback: function(image_anchor, instance_id) {
									alert('Callback example:\nYou clicked on an image with the anchor: "' + image_anchor + '"\n(in Etalage instance: "' + instance_id + '")');
								}
							});
							// This is for the dropdown list example:
							$('.dropdownlist').change(function() {
								etalage_show($(this).find('option:selected').attr('class'));
							});

						});
					</script>
					<!----//details-product-slider--->
					<div class="details-left" >
						<div class="details-left-slider">
							<ul id="etalage" class="etalage" style="display: block; width: 314px; height: 552px; border-top-style: none;border-bottom-style: none;">
                @foreach($product->images as $image)
                <li class="etalage_thumb" style="display: none; opacity: 0; background-image: none;">
									<img class="etalage_thumb_image" src="data:image/jpeg;base64,{{ base64_encode(Storage::get($image->image)) }}" style="display: inline; width: 300px; height: 300px; opacity: 1;">
									<img class="etalage_source_image" src="data:image/jpeg;base64,{{ base64_encode(Storage::get($image->image)) }}">
								</li>
                @endforeach
								<li class="etalage_magnifier" style="margin: 0px; padding: 0px; left: 6px; top: 6px; display: none; opacity: 0.05449673905968666;">
									<div style="margin: 0px; padding: 0px; width: 195px; height: 215px;">
										<img src="data:image/jpeg;base64,{{ base64_encode(Storage::get($image->image)) }}" style="margin: 0px; padding: 0px; width: 300px; height: 400px; display: inline; left: 0px; top: 0px;">
									</div>
								</li>
								<li class="etalage_icon" style="display: list-item; top: 380px; left: 20px; opacity: 1;">&nbsp;</li>
								<li class="etalage_hint" style="display: none; margin: 0px; top: -15px; right: -15px;">&nbsp;</li>
								<li class="etalage_zoom_area" style="margin: 0px; opacity: 0; left: 324px; display: none; background-image: none;">
									<div class="etalage_description" style="width: 546px; bottom: 6px; left: 6px; opacity: 0.7; display: none;"></div>
									<div style="width: 586px; height: 538px;">
										<img class="etalage_zoom_img" src="data:image/jpeg;base64,{{ base64_encode(Storage::get($product->images[0]->image)) }}" style="width: 900px; height: 1000px; left: -157.34166420232418px; top: 0px;">
									</div>
								</li>
								<li class="etalage_small_thumbs" style="width: 314px; height: 314px; top: 424px;">
									<ul style="width: 1072px; border-top-style: none;">
										<li class="etalage_smallthumb_navtoend" style="opacity: 0.4; margin: 0px 10px 0px 0px; left: -216px;">
											<img class="etalage_small_thumb" src="data:image/jpeg;base64,{{ base64_encode(Storage::get($image->image)) }}" width="90" style="width: 90px; height: 90px;">
										</li>
                    @foreach($product->images as $image)
                    {{-- TODO cemet --}}
                      <li class="etalage" style="opacity: 0.4; margin: 0px 10px 0px 0px; left: -216px;">
                        <img src="data:image/jpeg;base64,{{ base64_encode(Storage::get($image->image)) }}" class="img img-responsive" width="100" style="width: 90px; height: 90px;">
                      </li>
                    @endforeach
										<li class="etalage_smallthumb_navtostart" style="opacity: 0.4; margin: 0px 10px 0px 0px; left: -216px;">
											<img class="etalage_small_thumb" src="data:image/jpeg;base64,{{ base64_encode(Storage::get($image->image)) }}" width="90" style="width: 90px; height: 90px;">
										</li>
									</ul>
								</li>
							</ul>
						</div>
						<div class="details-left-info">
							<div class="details-right-head">
								<h1>{{ $product->name }}</h1>
								<p class="product-detail-info">
                  {{ $product->description }}
                </p>
								<div class="product-more-details">

									<ul class="prosuct-qty" style="border-top-style: none;border-bottom-style: none;">
										<span>Jumlah:</span>
										<select>
											<option>1</option>
											<option>2</option>
											<option>3</option>
											<option>4</option>
											<option>5</option>
											<option>6</option>
										</select>
									</ul>
                  @if (!Auth::check())
                  {!! Form::open(['url'=>'/store/add-cart/'.$product->id]) !!}
                  {!! Form::submit('Add to cart', ['class' => 'btn btn-primary']) !!}
                  {!! Form::close() !!}
                  @elseif (Auth::user()->status != 'admin')
                  {!! Form::open(['url'=>'/store/add-cart/'.$product->id]) !!}
                  {!! Form::submit('Add to cart', ['class' => 'btn btn-primary']) !!}
                  {!! Form::close() !!}
                  @endif
								</div>
							</div>
						</div>
						<div class="clearfix"> </div>
					</div>

				</div>
				<!---//End-product-details--->
			</div>
		</div>
	</div>





@stop
