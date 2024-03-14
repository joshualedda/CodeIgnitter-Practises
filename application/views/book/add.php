
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
			<div class="card-header">
                    Add Bookmark
                </div>

                <div class="card-body">
				<form action="<?= base_url('bookmark/createbookmark'); ?>" method="POST">

				<div class="mb-3">
					<label for="form-label">Folder</label>
                    <input name="folder" class="form-control"/>
					<?= form_error('folder', '<span class="error text-sm text-danger">', '</span>'); ?>
				</div>


				<div class="mb-3">
					<label for="form-label">Name</label>
                    <input name="name" class="form-control"/>
					<?= form_error('name', '<span class="error text-sm text-danger">', '</span>'); ?>
				</div>

				<div class="mb-3">
					<label for="form-label">URL</label>
					<input name="url" class="form-control"/>
					<?= form_error('url', '<span class="error text-sm text-danger">', '</span>'); ?>
				</div>

					
				
					<div class="d-flex justify-content-end my-3">

					<a href="<?= base_url('bookmark'); ?>" class="btn btn-success btn-sm mx-2">Back</a>

					<input type="submit" class="btn btn-sm btn-success" value="Add Bookmark"/>
					</div>

					</form>

				</div>
            </div>
        </div>
    </div>
</div>
