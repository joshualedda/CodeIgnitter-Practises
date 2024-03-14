
<div class="container mt-2">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
			<div class="card-header">
                    Add Contact
                </div>

                <div class="card-body">
				<form action="<?= base_url('phoneboook/store'); ?>" method="POST">

				<div class="mb-3">
					<label for="form-label">Name</label>
                    <input name="name" class="form-control"/>
					<?= form_error('name', '<span class="error text-sm text-danger">', '</span>'); ?>
				</div>


				<div class="mb-3">
					<label for="form-label">Contact Number</label>
                    <input name="contact" type="number" class="form-control"/>
					<?= form_error('contact', '<span class="error text-sm text-danger">', '</span>'); ?>
				</div>
				
					<div class="d-flex justify-content-end my-3">

					<a href="<?= base_url('phonebook'); ?>" class="btn btn-success btn-sm mx-2">Back</a>

					<input type="submit" name="submit" class="btn btn-sm btn-success" value="Add Contact"/>
					</div>

					</form>

				</div>
            </div>
        </div>
    </div>
</div>
