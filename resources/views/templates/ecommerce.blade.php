
<!-- Wrapper for slides -->
@foreach ($blocks->where('display', 'home')->where('position', 'slider') as $block)
@include('backend.blocks.style.'.$block->style)
@endforeach


<div class="container">
	<h3>Latest Watches</h3>
	<div class="row letest-product">
	@foreach ($latest_watches as $latest_watch)
		<div class="col-md-2 letest-product-list">
			<a href="{{route('single_product', $latest_watch->id)}}" title="{{$latest_watch->price}} TK."> <img src="{{URL::to('/')}}/upload/products/{{$latest_watch->image }}" alt="{{$latest_watch->name}}" width="100%" height="auto"><p>{{$latest_watch->name}}</p></a>
		</div>
		@endforeach
</div>
</div>

<div class="container products-categories">

	<div class="col-md-3">
		<div class="categories">
			<ul>
				<h3>Product Categories</h3>
				@foreach ($product_categories as $product_category)
				<li><a href="{{ url($product_category->uri) }}">{{ $product_category->title}}</a></li>
				@endforeach
			</ul>
		</div>	
	</div>

	<div class="col-md-9 best-product" style="border-left: 1px solid #D7D7D7;">
		<h3> Best Products</h3>
		@foreach ($best_products as $best_product)
		<div class="col-md-3 best-product-list text-center">
			<h5><a href="preview.html">{{ $best_product->name}} </a></h5>
			<a href="{{ $best_product->name}} "><img src="{{URL::to('/')}}/upload/products/{{ $best_product->image }}" alt="{{ $best_product->name}}" width="100%" height="auto"></a>
			<div class="price-details">
				<div class="price-number">
					<p><span class="rupees">{{ $best_product->price}} TK. </span></p>
				</div>
				<div class="add-cart">								
					<h4><a href="{{route('single_product', $best_product->id)}}">More Info</a></h4>
				</div>
			</div>
		</div>
		@endforeach
		
</div>
</div>
