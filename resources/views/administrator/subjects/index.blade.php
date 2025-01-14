@extends('administrator.layouts.admin')
@section('content')
<div class="col-12">
	@if($subjects)
		<div class="card">
			<div class="card-body">
				<form class="form-horizontal" method="post" action="{{ route('admin-save-subject') }}" enctype="multipart/form-data">
				@csrf
				<div class="card-body">
					@if ($errors->any())
						<div class="alert alert-danger">
							<ul>
								@foreach ($errors->all() as $error)
									<li>{{ $error }}</li>
								@endforeach
							</ul>
						</div>
					@endif
					@if(session()->has('message'))
						<div class="alert alert-success">
							{{ session()->get('message') }}
						</div>
					@endif
					<div class="row" >
						<div class="col-md-7" >
							<div class="form-group row mb-2 ">
								<label for="name" class="col-sm-3 text-right control-label col-form-label">Name</label>
								<div class="col-sm-9">
									<input type="text" class="form-control" name="name" id="name" placeholder="Title Here" >
								</div>
							</div>
														
							<div class="form-group row mb-2">
								<label for="slug" class="col-sm-3 text-right control-label col-form-label">Slug</label>
								<div class="col-sm-9">
									<input type="text" class="form-control" name="slug" id="slug" placeholder="Slug Here" >
								</div>
							</div>
							<div class="form-group row mb-2">
								<label for="excerpt" class="col-sm-3 text-right control-label col-form-label">Excerpt</label>
								<div class="col-sm-9">
									<textarea class="form-control" name="excerpt" id="excerpt" placeholder="Enter Excerpt Here" ></textarea>
								</div>
							</div>
							<div class="form-group row mb-2">
								<label for="description" class="col-sm-3 text-right control-label col-form-label">Description</label>
								<div class="col-sm-9">
									<textarea class="form-control editor" name="description" id="description" placeholder="Enter description Here" ></textarea>
								</div>
							</div>
							<div class="form-group row mb-2 text-center">
								<label for="tags" class="col-md-2 text-left control-label col-form-label">Brochure</label>
								<div class="col-sm-8 text-center">
									<a href="#imageBox" class="image-profile open-popup-link">
										<img src="https://dummyimage.com/150x150?text=Upload%20File" alt="">
										<input type="hidden" name="brochure_id" id="attachment" value="" >	
									</a>			
								</div>
							</div>	
							<div class="form-group row mb-2">
								<label for="state" class="col-sm-3 text-right control-label col-form-label">Status</label>
								<div class="col-sm-9">
									<select name="status" id="status" class="select2 form-control custom-select" style="width: 100%; height:36px;">	
										<option value="">Update Status</option>
										<option value="1" > Publish</option>
										<option value="0" > Private </option>
									<select>
								</div>
							</div>
							<h4 class="card-title"> Search Engine Options </h4>
							<div class="form-group row mb-2">
								<label for="title" class="col-sm-3 text-right control-label col-form-label">Title</label>
								<div class="col-sm-9">
									<input type="text" class="form-control" name="title" id="title" placeholder="Title Here" >
								</div>
							</div>
							<div class="form-group row mb-2">
								<label for="meta_description" class="col-sm-3 text-right control-label col-form-label">Meta Description</label>
								<div class="col-sm-9">
									<textarea class="form-control" name="meta_description" id="meta_description" placeholder="Enter Meta Description Here" ></textarea>
								</div>
							</div>
							<div class="form-group row mb-2">
								<label for="schema" class="col-sm-3 text-right control-label col-form-label">Schema Code</label>
								<div class="col-sm-9">
									<textarea class="form-control" name="schema" id="schema" placeholder="Enter Schema Code" ></textarea>
								</div>
							</div>
							<div class="form-group row mb-2">
								<label for="utm_campaign" class="col-sm-3 text-right control-label col-form-label">Campaign</label>
								<div class="col-sm-9">
									<input type="text" class="form-control" name="utm_campaign" id="utm_campaign" placeholder="Enter Utm Campaign Here" >
								</div>
							</div>

							<div class="form-group row mb-2">
								<label for="utm_source" class="col-sm-3 text-right control-label col-form-label">Source</label>
								<div class="col-sm-9">
									<input type="text" class="form-control" name="utm_source" id="utm_source" placeholder="Enter Utm Source Here" >
								</div>
							</div>
							<div class="form-group row mb-2">
								<label for="robots" class="col-sm-3 text-right control-label col-form-label">Robots Content</label>
								<div class="col-sm-9">
								<input type="text" class="form-control" name="robots" id="robots" value="index, follow" placeholder="Enter Center Pincode Here" >
								</div>
							</div>
						</div>
						<div class="col-md-5" >
							<div class="table-responsive">
								<table id="" class="table table-striped table-bordered">
									<thead>
										<tr>
											<th>Name</th>
											<th>Slug</th>
											<th>Count</th>
										</tr>
									</thead>

									<tbody>
										@foreach ($subjects as $value)
										<tr>
											<td>{{ $value->name }}
												<div>
													<a href="{{ route('admin-show-subject',$value->id) }}" class="">Edit</a> | 
													<a href="{{ route('admin-delete-subject',$value->id) }}" class=""; >Delete </a>
												</div>
											</td>													
											<td>{{ $value->slug }}</td>
											<td>
											    <a href="{{ route('admin-show-subject',$value->id) }}" class="">4</a>
											</td>
										</tr>
										@endforeach							
									</tbody>
								</table>
							</div>
						</div>
					</div>
			
					<div class="border-top">
						<div class="card-body">
							<button type="submit" class="btn btn-primary">Submit</button>
							<input type="hidden" name="subject_id" id="subject_id" value="" >
						</div>
					</div>
				</form>
			</div>
		</div>
	@endif
</div>                   
@endsection
@section('script')
@endsection