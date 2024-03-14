
<div class="card col-md-6 m-auto mt-5">
    <div class="card-body">
        <h5 class="card-title">Form Data</h5>
        <?php if ($entry_data) : ?>
            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <p class="form-control"><?= $entry_data['name']; ?></p>
            </div>
            <div class="mb-3">
                <label for="course" class="form-label">Course</label>
                <p class="form-control"><?= $entry_data['course']; ?></p>
            </div>
            <div class="mb-3">
                <label for="score" class="form-label">Score</label>
                <p class="form-control"><?= $entry_data['score']; ?></p>
            </div>
            <div class="mb-3">
                <label for="reason" class="form-label">Reason</label>
                <p class="form-control"><?= $entry_data['reason']; ?></p>
            </div>
        <?php else : ?>
            <p>Please Try Again.</p>
        <?php endif; ?>
    </div>
</div>
