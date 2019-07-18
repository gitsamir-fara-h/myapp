@include('include.header')

		<!-- PAGE HEADER -->
		<div class="page-header">
			<div class="container">
				<div class="row">
					<div class="col-md-offset-1 col-md-10 text-center">
					<div class="page-header-bg" style="background-image: url('{{$post->image}}');" data-stellar-background-ratio="0.5"></div>

						<h1 class="text-uppercase"> {{$title}}</h1>
						<p class="lead">{{$post->category->name}}</p>
					</div>
				</div>
			</div>
		</div>
		<!-- /PAGE HEADER -->
	</header>
	<!-- /HEADER -->

	<!-- SECTION -->
	<div class="section">
		<!-- container -->
		<div class="container">
			<!-- row -->
			<div class="row">
				<div class="col-md-8">






					<div class="section-row">
						<div class="section-title">
							<h3 class="title">{{$title}}</h3>
						</div>





					 <div class="section-row">
							<div class="section-title">

							</div>
							 <br>

							 @if ($prev)
							 <a href="{{route('post.show', ['slug' => $prev->slug])}}"
								 class="badge badge-danger"> Next => {{$prev->title}} </a>
							 @endif

							 @if ($next)
							 <a href="{{route('post.show', ['slug' => $next->slug])}}"
								 class="badge badge-danger"> Prev => {{$next->title}} </a>
							 @endif


						 </div>

						 <div class="section-row">
								<div class="section-title">
										<h3 class="title">All Tags</h3>
								</div>
								 <br>


				



							 </div>




				</div>













			</div>
			<!-- /row -->
		</div>
		<!-- /container -->
	</div>
	<!-- /SECTION -->

	@include('include.footer')

	<!-- jQuery Plugins -->
	<script src="js/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.stellar.min.js"></script>
	<script src="js/main.js"></script>
	<!-- Go to www.addthis.com/dashboard to customize your tools --> <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5c40572051e6064d"></script>
</body>

</html>
