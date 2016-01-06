
<div class="col-sm-8">
<ol class="breadcrumb bc-3">

@if(isset($breadcrumb) && is_array($breadcrumb))
	@foreach($breadcrumb as $link)
		<li>
			<a href="{{ url($link['url']) }}">
				<i class="{{ $link['class'] }}"></i>
				{{ $link['label'] }}
			</a>
		</li>
	@endforeach
@endif

</ol>
</div>
