@extends('layout.backend.home')
@section('page')
<!-- Edit Service Center Modal -->
<div id="edit_service" class="modal custom-modal fade" role="dialog">
	<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title">Edit Service</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<form action="{{url('service-update')}}"  method="POST" enctype="multipart/form-data">
					@csrf
					@method('PUT')
				
					<div class="row">
						<div class="col-sm-12">
							<div class="form-group">
								<label class="col-form-label">Category:</label>
								<input type="text" class="form-control" id="txtCategory" name="txtCategory"required>
							</div>
						</div>
						
						<div class="col-sm-12">
							<div class="form-group">
								<label class="col-form-label">Title:</label>
								<input type="text" class="form-control" id="txtTitle" name="txtTitle"required>
							</div>
						</div>
						
							
						<!-- /.card-header -->
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label class="col-form-label">Details:</label>
                                <textarea id="summernote" name="txtDetails">
                                    Place <em>some</em> <u>text</u> <strong>here</strong>
                                </textarea>
                            </div>
                        </div>
						

						<div class="col-sm-12">
							<div class="form-group">
								<label class="col-form-label">Photo:</label>
								<input type="file" class="form-control" id="filePhoto" name="filePhoto" required>
							</div>
						</div>
						

						  <div class="col-sm-12">
							<div class="form-group">
								<label class="col-form-label">Attach File:</label>
								<input type="file" class="form-control" id="fileAttach" name="fileAttach"required>
							</div>
						</div>	
					</div>

						<div class="submit-section float-right">
						<button type="button" class="btn btn-secondary" style="width:80px;" data-dismiss="modal">Cancle</button>
							<input class="btn btn-primary submit-btn" type="submit"  name="btnCreate" value="Submit">
						</div>
				</form>
			</div>
		</div>
	</div>
</div>
<!-- /Edit Service Center Modal -->
@endsection