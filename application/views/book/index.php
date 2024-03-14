<div class="container">
	<div class="row justify-content-center">

		<div class="col-md-8">

			<div class="card">

				<div class="card-header d-flex justify-content-between align-items-center">
					<h5 class="mb-0">Bookmarks</h5>
					<a href="<?= base_url('bookmark/addbookmark') ?>" class="btn btn-sm btn-success">Add</a>
				</div>


				<div class="card-body">
					<div class="table-responsive">
						<table class="table table-bordered">
							<thead>
								<tr>
									<th>Folder</th>
									<th>Name</th>
									<th>Url</th>
									<th>Manage</th>
								</tr>
							</thead>
							<tbody>
								<?php foreach ($bookmarks as $book) : ?>
									<tr>
										<td><?= $book['folder']; ?></td>
										<td><?= $book['name']; ?></td>
										<td><?= $book['url']; ?></td>

										<td><a href="<?= base_url('bookmark/delete/' . $book['id']); ?>">Delete</a></td>
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
