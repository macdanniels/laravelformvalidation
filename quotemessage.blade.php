  
  @extends('layouts.app')
  @section('content')
  
    <!---Start of the index page contents--->  
  <body>
	
		<style>
			
			.invalid-feedback{
				display: block;
			}
		
			</style>
			
		<section class="ftco-section ftco-consult ftco-no-pt ftco-no-pb" style="background-image: url('FrontEnd_file/images/bg_5.jpg');" data-stellar-background-ratio="0.5">
			<div class="overlay"></div>
						<div class="container">
				<div class="row justify-content-end">
					<div class="col-md-6 py-5 px-md-5">
						<div class="py-md-5">
					  <div class="heading-section heading-section-white ftco-animate mb-5">
		            <h2 class="mb-4">Request A Quote</h2>
		            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
				  </div>
			       	

					<form   method="POST"  action="{{route ('quotemessage.store')}}"   class="appointment-form ftco-animate">
					
					  {{ csrf_field()}}
						<!--flash message --> 
						<div>
						@if(Session::has('flash_message'))
						<div class="alert alert-success">{{Session::get('flash_message')}}</div>
				       @endif
						</div>

						<div class="d-md-flex">
							<div class="form-group">
								<input name='fname' type="text" class="form-control" placeholder="First Name">
								@if ($errors-> has('fname'))
                		 <small class="form-text invalid-feedback">{{$errors-> first('fname')}}</small>
                				 @endif
							</div>
							<div class="form-group ml-md-4">
								<input name="lname" type="text" class="form-control" placeholder="Last Name">
								@if ($errors-> has('lname'))
						<small class="form-text invalid-feedback">{{ $errors-> first('lname')}}</small>
						       @endif
							</div>
						</div>
						<div class="d-md-flex">
							<div class="form-group">
								<div class="form-field">
								<div class="select-wrap">
						<div class="icon"><span class="ion-ios-arrow-down"></span></div>
						<select name="service"  class="form-control">
							@if ($errors-> has('service'))
						<small class="form-text invalid-feedback">{{$errors-> first('service')}}</small>
						    @endif
						  <option value="">Select Service</option>
						  <option value="">Finance</option>
						  <option value="">Business</option>
						  <option value="">Auto Loan</option>
						  <option value="">Real Estate</option>
						  <option value="">Other Services</option>
						</select>
			     		</div>
					  	</div>
						  </div>
							<div class="form-group ml-md-4">
						<input name="pno"ype="text" class="form-control" placeholder="Phone">
							    @if ($errors-> has('pno'))
						<small class="form-text invalid-feedback">{{$errors-> first('pno')}}</small>
								@endif
							</div>
						</div>
						<div class="d-md-flex">
							<div class="form-group">
					  <textarea name="message" id="" cols="30" rows="2" class="form-control" placeholder="Message"></textarea>
					        @if ($errors-> has('message'))
					  <small class="form-text invalid-feedback">{{$errors-> first('message')}}</small>
						    @endif
					   </div>
					       <div class="form-group ml-md-4">
					  <input type="submit" value="Request A Quote" class="btn btn-white py-3 px-4">
					       </div>
						</div>
					</form>
				</div>
			</div>
	</div>
	</div>
</section>
	  <!---End of the index page contents--->  
@endsection
	