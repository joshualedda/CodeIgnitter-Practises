
<div class="container mt-2">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
			<div class="card-header">
                    Contact Details
                </div>

                <div class="card-body">
				<form action="<?= base_url('phoneboook/store'); ?>" method="POST">

				<div class="mb-3">
					<label for="form-label">Name</label>
                    <p name="name" class="form-control"><?=$contact['name']; ?></p>
				</div>


				<div class="mb-3">
					<label for="form-label">Contact Number</label>
                    <p name="contact" type="number" class="form-control"><?=$contact['contact']?></p>
				</div>
				
					<div class="d-flex justify-content-end my-3">

					<a href="<?= base_url('phonebook'); ?>" class="btn btn-success btn-sm mx-2">Back</a>

				
					</div>

					</form>

				</div>
            </div>
        </div>
    </div>
</div>
