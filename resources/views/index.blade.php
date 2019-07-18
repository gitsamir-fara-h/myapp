@include('include.header')


	<!-- SECTION -->
	<div class="section">
		<!-- container -->
		<div class="container">

 



		    <div class="row">
   
        <form method="GET" action="/ds">
				    <div class="col-xs-6 col-sm-3">
						<select id="prix" name="prix">
						    <option value="">Select prix</option>
						    <option value="100">0-100</option>
						    <option value="300">100-300</option>
						    <option value="500">300-500</option>
						    <option value="900">500-900</option>
						</select>
          </div>
         

				<div class="col-sm-6 hidden-xs">
					<div class="row">

						<div class="col-sm-4 pull-right">
							<button id="findBtn"  class="btn btn-success">Find</button>
						</div>
					
					</div>
				</div>
        </form>
   



					<div >
						<div class="col-md-12">
							<div class="section-title">
								<h2 class="title">PRODUITS</h2>


							</div>
						</div>
						<!-- post first-->
	

            <div class="row">
  <div class="col-sm-4">
 <div class="title 1">


 <h5 class="card-title">{{$first_post->category->name}}</h5>
		<a class="post-img" >
										<img src="{{$first_post->image}}" 	class="img-responsive" alt=""></a>
										

																				
        <p class="card-text">sous categorie :{{$first_post->title}}</p>
		<p class="card-text">prix :{{$first_post->prix}}$</p>

    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal5">
  more picture
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal5" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
	  <a class="post-img" >
	<img src="{{$first_post->galery}}"></a>
	<a class="post-img" >
	<img src="{{$first_post->photo}}"></a>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>

 </div 1>

  
  </div>
  
  <div class="col-sm-4">
  <div class="title 2">


 <h5 class="card-title">{{$second_post->category->name}}</h5>
		<a class="post-img" >
										<img src="{{$second_post->image}}" 	class="img-responsive" alt=""></a>
										

																				
        <p class="card-text">sous categorie :{{$second_post->title}}</p>
		<p class="card-text">prix :{{$second_post->prix}} $</p>

    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal2">
  more picture
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">photos</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
	  <a class="post-img" >
	<img src="{{$second_post->galery}}"></a>
	<a class="post-img" >
	<img src="{{$second_post->photo}}"></a>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      
      </div>
    </div>
  </div>
</div>

 </div 2>
 
  </div>
  <div class="col-sm-4">
  
  <div class="title 3">


 <h5 class="card-title">{{$third_post->category->name}}</h5>
		<a class="post-img" >
										<img src="{{$third_post->image}}" 	class="img-responsive" alt=""></a>
										

																				
        <p class="card-text">sous categorie :{{$third_post->title}}</p>
		<p class="card-text">prix :{{$third_post->prix}}$</p>

    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal3">
  more picture
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal3" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">photos</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
	  <a class="post-img" >
	<img src="{{$second_post->galery}}"></a>
	<a class="post-img" >
	<img src="{{$third_post->photo}}"></a>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      
      </div>
    </div>
  </div>
</div>

 </div 3>
  
  
  
  </div>
</div>

<div class="row">
  <div class="col-sm-4">
  
  <h5 class="card-title">{{$five_post->category->name}}</h5>
		<a class="post-img" >
										<img src="{{$five_post->image}}" 	class="img-responsive" alt=""></a>
										

																				
        <p class="card-text">sous categorie :{{$five_post->title}}</p>
		<p class="card-text">prix :{{$five_post->prix}}$</p>

    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal5">
  more picture
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal5" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
	  <a class="post-img" >
	<img src="{{$five_post->galery}}"></a>
	<a class="post-img" >
	<img src="{{$five_post->photo}}"></a>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        
      </div>
    </div>
  </div>
</div>


  
  </div>

  <div class="col-sm-4">
  
  <div class="title 5">


 <h5 class="card-title">{{$fourth_post->category->name}}</h5>
		<a class="post-img" >
										<img src="{{$fourth_post->image}}" 	class="img-responsive" alt=""></a>
										

																				
        <p class="card-text">sous categorie :{{$fourth_post->title}}</p>
		<p class="card-text">prix :{{$fourth_post->prix}}$</p>

    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal4">
  more picture
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal4" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">photos</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
	  <a class="post-img" >
	<img src="{{$fourth_post->galery}}"></a>
	<a class="post-img" >
	<img src="{{$fourth_post->photo}}"></a>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      
      </div>
    </div>
  </div>
</div>

 </div 5>
  
  </div>
  <div class="col-sm-4">
  
  <div class="title 6">


<h5 class="card-title">{{$six_post->category->name}}</h5>
   <a class="post-img" >
                   <img src="{{$six_post->image}}" 	class="img-responsive" alt=""></a>
                   

                                       
       <p class="card-text">sous categorie :{{$six_post->title}}</p>
   <p class="card-text">prix :{{$fourth_post->prix}}$</p>

   <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal6">
 more picture
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal6" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
 <div class="modal-dialog" role="document">
   <div class="modal-content">
     <div class="modal-header">
       <h5 class="modal-title" id="exampleModalLabel">photos</h5>
       <button type="button" class="close" data-dismiss="modal" aria-label="Close">
         <span aria-hidden="true">&times;</span>
       </button>
     </div>
     <div class="modal-body">
   <a class="post-img" >
 <img src="{{$six_post->galery}}"></a>
 <a class="post-img" >
 <img src="{{$six_post->photo}}"></a>
     </div>
     <div class="modal-footer">
       <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
     
     </div>
   </div>
 </div>
</div>

</div 5>
  
  
  </div>
</div>








      
      </div>
    </div>
  </div>




    </div>
  </div>
</div>



						<!-- /post -->


	<!-- post first-->
						



	














					

						
					</div>
					

					




					</div>
					<!-- /row -->
				</div>

					<!-- /post widget -->
				
					<div class="row">

			<!-- /row -->
		</div>
		<!-- /container -->
	</div>
	<!-- /SECTION -->

	
	


	


@include('include.footer')




</body>








</html>
