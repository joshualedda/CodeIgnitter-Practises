<div class="container mt-2">
	<div class="row justify-content-center">

		<div class="col-md-8">

			<div class="card">

				<div class="card-header d-flex justify-content-between align-items-center">
					<h5 class="mb-0">Contacts</h5>
					<a href="<?= base_url('phonebook/create') ?>" class="btn btn-sm btn-success">Add</a>
				</div>


				<div class="card-body">
					<div class="table-responsive">
						<table class="table table-bordered">
							<thead>
								<tr>
									<th>Name</th>
									<th>Contact</th>
									<th>Manage</th>
								</tr>
							</thead>
							<tbody>
								<?php foreach ($contacts as $row) : ?>
									<tr>
										<td><?= $row['name']; ?></td>
										<td><?= $row['contact']; ?></td>

										<td><a class="btn btn-sm btn-success " href="<?= base_url('phonebook/view/' . $row['id']); ?>">View</a>
											<a class="btn btn-success btn-sm" href="<?= base_url('phonebook/edit/' . $row['id']); ?>">Edit</a>
											<a class="btn btn-danger btn-sm" href="<?= base_url('phonebook/destroy/' . $row['id']); ?>">Delete</a>
										</td>
									</tr>
								<?php endforeach; ?>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
