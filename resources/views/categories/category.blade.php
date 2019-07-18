@include('include.header')
<!-- PAGE HEADER -->
<div id="post-header" class="page-header">
	<div class="container">
		<div class="row">
			<div class="col-md-10">
				<div class="post-category">
					<a href="">{{$title}} </a>
				
				</div>
				<h1>{{$category->name}}</h1>
				<ul class="post-meta">
					
					<li>{{$category->created_at->toFormattedDateString()}}</li>
					
				</ul>
			</div>
		</div>
	</div>
</div>
<!-- /PAGE HEADER -->
	<!-- SECTION -->
	<div class="section">
		<!-- container -->
		<div class="container">
			<!-- row -->
			<div class="row">
				<div class="col-md-8">
					
					
					@foreach ($category->posts as $post)
						

					<!-- post -->
					<div class="post post-row">
						<a class="post-img" href="#"><img src="{{$post->image}}" alt="{{$post->image}}"></a>
						<div class="post-body">
							<div class="post-category">
							<a href="#">{{$post->prix}}</a>
								<a href="#">{{$post->title}}</a>
							</div>
							<h3 class="post-title"><a href="#">{{$post->updated_at->toFormattedDateString()}}</a></h3>
							<ul class="post-meta">
								
								<li>{{$post->created_at->toFormattedDateString()}}</li>
							</ul>
							<p>{!!$post->content!!}</p>
						</div>
					</div>
					<!-- /post -->


					@endforeach

	 

		 <br>

				
				</div>

				<div class="col-md-4">
				 

					

				
				
				</div>
			</div>
			<!-- /row -->
		</div>
		<!-- /container -->
	</div>
	<!-- /SECTION -->

	@include('include.footer')

</body>

</html>