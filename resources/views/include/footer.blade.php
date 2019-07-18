
	<!-- FOOTER -->
	<footer id="footer">
		<!-- container -->
		<div class="container">
			<!-- row -->
			<div class="row">
				<div class="col-md-3">
					<div class="footer-widget">

						<p>{{$settings->blog_name}}  {{$settings->phone_number}}

                                {{$settings->address}}
                                </p>
						<ul class="contact-social">
							<li><a href="www.facebook.com" class="social-facebook"><i class="fa fa-facebook"></i></a></li>
							<li><a href="www.twitter.com" class="social-twitter"><i class="fa fa-twitter"></i></a></li>
							<li><a href="www.google" class="social-google-plus"><i class="fa fa-google-plus"></i></a></li>
							<li><a href="www.intagram.com" class="social-instagram"><i class="fa fa-instagram"></i></a></li>
						</ul>
					</div>
				</div>
				<div class="col-md-3">
					<div class="footer-widget">
						<h3 class="footer-title">Categories</h3>
						<div class="category-widget">
							<ul>

                                    @foreach ($categories as $category)
                                    <li><a href="/">{{$category->name}} </a></li>
                                    @endforeach



							</ul>
						</div>
					</div>
				</div>
			
				
			</div>
			<!-- /row -->

			<!-- row -->
			<div class="footer-bottom row">
				<div class="col-md-6 col-md-push-6">
					
				</div>
				<div class="col-md-6 col-md-pull-6">
					<div class="footer-copyright">

Copyright &copy;
<script>document.write(new Date().getFullYear());</script>
template 
<i class="fa fa-heart-o" aria-hidden="true"></i> by
<a href="https://colorlib.com" target="_blank">Samir Farah</a>

					</div>
				</div>
			</div>
			<!-- /row -->
		</div>
		<!-- /container -->
	</footer>
	<!-- /FOOTER -->
	<!-- jQuery Plugins -->



	<!-- jQuery Plugins -->
	<script src='{{asset("js/jquery.min.js")}}'></script>
	<script src='{{asset("js/bootstrap.min.js")}}'></script>
	<script src='{{asset("js/jquery.stellar.min.js")}}'></script>
	<script src='{{asset("js/main.js")}}'></script>
