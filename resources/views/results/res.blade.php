@include('include.header')
<!-- PAGE HEADER -->

<!-- /PAGE HEADER -->
	<!-- SECTION -->
	<div class="section">
		<!-- container -->
		<div class="container">
			<!-- row -->
			<div class="row">
			<a > Search result : {{$query}}</a>
			<h1> {{$query}}</h1>
				<div class="col-md-6">


					@if ($posts->count() > 0)
					@foreach ( $posts as $post)

					<!-- post -->
					<div class="post post-row">
						
						<div class="post-body">
							<div class="post-category">
							
							<a class="post-img" href="#"><img src="{{$post->image}}" alt=""></a>
							<a class="post-img" href="#"><img src="{{$post->photo}}" alt=""></a>
							<a class="post-img" href="#"><img src="{{$post->galery}}" alt=""></a>

<br>
								<a href="#">{{$post->title}}</a>
                                <a href="#">{{$post->prix}}</a>
								<br>
							</div>
							
					

						</div>
					</div>
					<!-- /post -->
                	@endforeach

					@else



					<!-- post -->
					<div class="post post-row">
 						<div class="post-body">
							<div class="post-category">

 							</div>
 							<ul class="post-meta">
									<h1>  No results found !!!   </h1>
 							</ul>
 						</div>
					</div>
					<!-- /post -->

					@endif




		 <br>


				</div>

				
			</div>
			<!-- /row -->
		</div>
		<!-- /container -->
	</div>
	<!-- /SECTION -->

	

	<!-- jQuery Plugins -->
	<script src="js/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.stellar.min.js"></script>
	<script src="js/main.js"></script>

</body>

</html>
