@extends('front_end.nav')
@extends('front_end.customPackages')
@section('content')
<section class="about_index">
<div class="container-fluid">
	<div class="row">
		<div class="col-md-12">
			<form action="#">
				@csrf
				<div class="fields">
					<div class="col-lg-6 col-md-6 col-sm-6 mx-auto form-group">
						<label><span class="red">*</span><span class="ml-2" >Passport 1</span></label>
                  		<input type="text" autocomplete='off' class="form-control" placeholder="Passport 1">
                  		<label><span class="red">*</span><span class="ml-2" >Passport 2</span></label>
                  		<input type="text" autocomplete='off' class="form-control" placeholder="Passport 2">
                  		<label><span class="red">*</span><span class="ml-2" >Passport 3</span></label>
                  		<input type="text" autocomplete='off' class="form-control" placeholder="Passport 3">
                  		<label><span class="red">*</span><span class="ml-2" >Passport 4</span></label>
                  		<input type="text" autocomplete='off' class="form-control" placeholder="Passport 4">
                  		<label><span class="red">*</span><span class="ml-2" >Passport 5</span></label>
                  		<input type="text" autocomplete='off' class="form-control" placeholder="Passport 5">
                  		
					</div>
					<div class="col-lg-6 col-md-6 col-sm-6 mx-auto form-group">
						<label><span class="red">*</span><span class="ml-2" >CNIC 1</span></label>
                  		<input type="text" autocomplete='off' class="form-control" placeholder="CNIC 1">
                  		<label><span class="red">*</span><span class="ml-2" >CNIC 2</span></label>
                  		<input type="text" autocomplete='off' class="form-control" placeholder="CNIC 2">
                  		<label><span class="red">*</span><span class="ml-2" >CNIC 3</span></label>
                  		<input type="text" autocomplete='off' class="form-control" placeholder="CNIC 3">
                  		<label><span class="red">*</span><span class="ml-2" >CNIC 4</span></label>
                  		<input type="text" autocomplete='off' class="form-control" placeholder="CNIC 4">
                  		<label><span class="red">*</span><span class="ml-2" >CNIC 5</span></label>
                  		<input type="text" autocomplete='off' class="form-control" placeholder="CNIC 5">
                  		
					</div>
					<div class="form-group">
						<input type="submit" class="form-control w-50 mx-auto" value="submit" style="color: #fff;background:#f9be37;">
					</div>
				</div>	
			</form>	
		</div>	
	</div>
</div>
</section>
@endsection