<div class="container mt-5">
        <div class="row">
            <div class="col-md-6 offset-md-3 card-container ">
                <div class="card text-center shadow-sm">
                    <div class="card-body">
                        <h3 class="card-title">Random Number: <span class="text-success"><?= $randomNumber ?></span></h3>
                        <h3 class="card-text">There are <?= $winCount ?> lucky winners selected</h3>
                        <form action="<?= base_url('raffledraw/randomnumber'); ?>" method="POST">
                            <input type="submit" class="btn btn-success my-3" value="Pick More"/>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
