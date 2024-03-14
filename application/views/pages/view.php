<h3 class="text-center mt-3"><?= $title; ?></h3>

<div class="card col-md-6 m-auto">
    <div class="card-body">
        <h5 class="card-title">Details Here</h5>
        <form action="<?= base_url('pages/view'); ?>" method="POST">

            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" class="form-control" id="name" name="name" value="<?= set_value('name'); ?>">
                <?= form_error('name', '<span class="error text-sm text-danger">', '</span>'); ?>
            </div>

            <div class="mb-3">
                <label for="course" class="form-label">Course</label>
                <select class="form-select" id="course" name="course">
                    <option value="js" <?= set_select('course', 'js'); ?>>Js</option>
                    <option value="php" <?= set_select('course', 'php'); ?>>Php</option>
                    <option value="python" <?= set_select('course', 'python'); ?>>Python</option>
                </select>
                <?= form_error('course', '<span class="error text-sm text-danger">', '</span>'); ?>
            </div>

            <div class="mb-3">
                <label for="score" class="form-label">Score</label>
                <input type="number" class="form-control" id="score" name="score" value="<?= set_value('score'); ?>">
                <?= form_error('score', '<span class="error text-sm text-danger">', '</span>'); ?>
            </div>

            <div class="mb-3">
                <label for="reason" class="form-label">Reason</label>
                <textarea class="form-control" id="reason" name="reason"><?= set_value('reason'); ?></textarea>
                <?= form_error('reason', '<span class="error text-sm text-danger">', '</span>'); ?>
            </div>

            <button type="submit" class="btn btn-primary" name="submit">Submit</button>
        </form>
    </div>
</div>
