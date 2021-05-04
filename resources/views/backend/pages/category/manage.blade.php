@extends ('backend.template.layout')

@section('dashboard-content')
<div class="br-mainpanel">
      <div class="br-pagetitle">
        <i class="icon ion-ios-home-outline"></i>
        <div>
          <h4>Manage Category</h4>
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
                <!-- Category Table Start -->
                <table id="tableSorting" class="table table-striped">
				  <thead class="thead-dark">
				    <tr>
				      <th scope="col">#Sl</th>
				      <th scope="col">Name</th>
				      <th scope="col">Slug</th>
				      <th scope="col">Description</th>
				      <th scope="col">Image</th>
				      <th scope="col">Parent</th>
				      <th scope="col">Action</th>
				    </tr>
				  </thead>
				  <tbody>

				  	@php
				  		$i = 1;
				  	@endphp

				  	@foreach( $categories as $category )
					  	<tr>
							<th scope="row"> {{ $i }} </th>
							<td>{{ $category->name }}</td>
							<td>{{ $category->slug }}</td>
							<td>{{ $category->description }}</td>
							<td>
								@if ( $category->image == NULL )
									No Image Attached
								@else
									<img src="{{ asset('images/category/' . $category->image ) }}" width="40">
								@endif
							</td>
							<td>
								@if ( $category->parent_id == 0 )
									Primary Category
								@else
									{{ $category->parent->name }}
								@endif
							</td>
							<td>
								<div class="btn-group">
									<a href="{{ route('editCategory', $category->id) }}" class="btn btn-success btn-sm">Update</a>
									<button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#deleteCategory{{ $category->id }}">Delete</button>
								</div>

								<!-- Modal -->
								<div class="modal fade" id="deleteCategory{{ $category->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
								  <div class="modal-dialog" role="document">
								    <div class="modal-content">
								      <div class="modal-header">
								        <h5 class="modal-title" id="exampleModalLabel">Do You want to delete this category?</h5>
								        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
								          <span aria-hidden="true">&times;</span>
								        </button>
								      </div>
								      <div class="modal-body">
								       	<button type="button" class="btn btn-primary" data-dismiss="modal">Cancel</button>
								        <form action="{{ route('deleteCategory', $category->id ) }}" method="POST">
								        	@csrf
								        	<button type="submit" class="btn btn-danger">Delete</button>
								        </form>
								      </div>
								    </div>
								  </div>
								</div>

							</td>
					    </tr>
					    @php
				  			$i++;
				  		@endphp
				  	@endforeach		    

				  </tbody>
				</table>
				<!-- Category Table End -->
              </div><!-- card -->
            </div><!-- col -->            
          </div><!-- row -->


        </div><!-- br-section-wrapper -->
      </div>


@endsection