@foreach($new_product as $new)
<div class="col-sm-3" style="margin-top:50px">
	<div class="single-item">
		@if($new->promotion_price!=0)
		<div class="ribbon-wrapper"><div class="ribbon sale">Sale</div></div>
		@endif
		<div class="single-item-header">
			<a href="{{route('sanpham',$new->id)}}"><img src="{{$new->image}}" height="250px" alt=""></a>
		</div>
		<div class="single-item-body">
			<p class="single-item-title">{{$new->name}}</p>
			<p class="single-item-price" style="font-size:16px">
				@if($new->promotion_price==0)
				<span class="flash-sale">{{number_format($new->unit_price)}} đồng</span>
				@else
				<span class="flash-del">{{number_format($new->unit_price)}} đồng</span>
				<span class="flash-sale">{{number_format($new->promotion_price)}} đồng</span>
				@endif
			</p>
		</div>
		<div class="single-item-caption">
			{{-- 										@if(Auth::check()) --}}
			<a class="add-to-cart pull-left" href="{{route('them-gio-hang',$new->id)}}"><i class="fa fa-shopping-cart"></i></a>
			<a class="beta-btn primary" href="{{route('sanpham',$new->id)}}">Chi Tiết <i class="fa fa-chevron-right"></i></a>
			<div class="clearfix"></div>
		</div>
	</div>
</div>
@endforeach
<div class="row">{{$new_product->links()}}</div>