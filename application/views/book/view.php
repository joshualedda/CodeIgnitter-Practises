
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
			<div class="card-header">
                    Bookmarks Details
                </div>

                <div class="card-body">
				<form action="<?= site_url('bookmark/destroy/' . $bookmark['id']); ?>" method="POST">

					<label for="form-label">Folder</label>
                    <p class="form-control"><?= $bookmark['folder']; ?></p>

					<label for="form-label">Name</label>
                    <p class="form-control"><?= $bookmark['name']; ?></p>

					<label for="form-label">URL</label>
                    <p class="form-control"><a href="<?= $bookmark['url']; ?>" target="_blank"><?= $bookmark['url']; ?></a></p>
					
					<input type="hidden" name="id" value="<?= $bookmark['id']; ?>">
				
					<div class="d-flex justify-content-end">
					<a href="<?= base_url('bookmark'); ?>" class="btn btn-success btn-sm mx-2">Back</a>

					<input type="submit" class="btn btn-sm btn-danger" value="Delete"/>
					</div>

					</form>

				</div>
            </div>
        </div>
    </div>
</div>
