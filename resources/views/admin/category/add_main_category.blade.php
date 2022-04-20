@extends('admin.layouts.dashboard')
@section('content')
<!-- Page Wrapper -->
<div class="page-wrapper">
    <div class="content container-fluid">

		<!-- Page Header -->
		<div class="page-header">
			<div class="row">
				<div class="col">
					<h3 class="page-title">Add Category</h3>
					
				</div>
			</div>
		</div>
		<!-- /Page Header -->
					
		<div class="row">
			<div class="col-xl-12 d-flex">
				<div class="card flex-fill">
					
					<div class="card-body ">
						<form action="#">
								<div class="row">
									<div class="col-xl-6">
								<div class="form-group">
									<label>First Name</label>
									<input type="text" class="form-control" name="name">
								</div>
							</div>

							<div class="col-xl-6">
								<div class="form-group">
									<label>Category Image</label>
									<input type="file" class="form-control">
								</div>
							</div>
							
							
							
							
								</div>
							<div class="text-right">
								<button type="submit" class="btn btn-primary">Submit</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>		
	</div>			
</div>
<!-- /Main Wrapper -->

@endsection