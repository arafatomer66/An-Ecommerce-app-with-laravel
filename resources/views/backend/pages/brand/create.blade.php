@extends ('backend.template.layout')

@section('dashboard-content')
<div class="br-mainpanel">
      <div class="br-pagetitle">
        <i class="icon ion-ios-home-outline"></i>
        <div>
          <h4>Create Brand</h4>
          <p class="mg-b-0">Do bigger things with Bracket plus, the responsive bootstrap 4 admin template.</p>
        </div>
      </div>

      <div class="br-pagebody">
        <div class="br-section-wrapper">
          <h6 class="br-section-label">Card Block</h6>
          <p class="br-section-text">An example some text within a card block.</p>



          <div class="row mg-b-20">
            <div class="col-md">
              <div class="card card-body">
                <!-- Create New Category Form Start -->
                <form action="{{ route('storeBrand') }}" method="POST" enctype="multipart/form-data">
                	@csrf                	
                	<div class="form-group">
                		<label>Brand Name</label>
                		<input type="text" name="brand_name" class="form-control">
                	</div>

                	<div class="form-group">
                		<label>Brand Description</label>
                		<textarea class="form-control" name="brand_description" rows="3"></textarea>
                	</div>

                	<div class="form-group">
                		<label>Brand Thumbnail</label>
                		<input type="file" name="image" class="form-control-file">
                	</div>

                	<div class="form-group">
                		<input type="submit" name="addBrand" value="Add Brand" class="btn btn-primary">
                	</div>

                </form>
                <!-- Create New Category Form End -->
              </div><!-- card -->
            </div><!-- col -->            
          </div><!-- row -->


        </div><!-- br-section-wrapper -->
      </div>


@endsection