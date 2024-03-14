<div class="row">
    <div class="col-md-6 offset-md-3">
        <h3 class="text-center mt-4">Money Button Game</h3>
        <p>Your Balance Money: <?= $money; ?></p>
        <form action="<?= site_url('moneybutton/resetgame'); ?>" method="POST">
            <button type="submit" name="reset" class="btn btn-danger">Reset Game</button>
        </form>

        <div class="row mt-5">
            <div class="col-md-3">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title text-center">Low Risk</h5>
                        <div class="d-flex justify-content-center">
                            <form action="<?= site_url('moneybutton/process'); ?>" method="POST">
                                <input type="hidden" name="risk" value="low">
								<?php if ($money > 0 and $money >= 100) : ?>

                                <button type="submit" name="submit" class="btn btn-success btn-sm my-2">Bet</button>
								<?php else : ?>
									<p class="text-danger">No More Balance</p>
								<?php endif ?>
                            </form>
                        </div>
                        <p class="text-center">by -25 up to 100</p>
                    </div>
                </div>
            </div>

			<div class="col-md-3">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title text-center">Moderate Risk</h5>
                        <div class="d-flex justify-content-center">
                            <form action="<?= site_url('moneybutton/process'); ?>" method="POST">
                                <input type="hidden" name="risk" value="moderate">
								<?php if($money > 0 and $money >= 1000 ) : ?>
                                <button type="submit" name="submit" class="btn btn-success btn-sm my-2">Bet</button>
								<?php else : ?>
									<p class="text-danger">No More Balance</p>
								<?php endif ?>
								</form>
                        </div>
                        <p class="text-center">by -100 up to 1000</p>
                    </div>
                </div>
            </div>

			<div class="col-md-3">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title text-center">High Risk</h5>
                        <div class="d-flex justify-content-center">
                            <form action="<?= site_url('moneybutton/process'); ?>" method="POST">
                                <input type="hidden" name="risk" value="high">
								<?php if($money > 0 and $money >= 2500) : ?>
                                <button type="submit" name="submit" class="btn btn-success btn-sm my-2">Bet</button>
								<?php else : ?>
									<p class="text-danger">No More Balance</p>
								<?php endif ?>
                            </form>
                        </div>
                        <p class="text-center">by -500 up to 2500</p>
                    </div>
                </div>
            </div>


			<div class="col-md-3">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title text-center">Severe Risk</h5>
                        <div class="d-flex justify-content-center">
                            <form action="<?= site_url('moneybutton/process'); ?>" method="POST">
                                <input type="hidden" name="risk" value="severe">
								<?php if($money > 0 and $money >= 5000) : ?>
                                <button type="submit" name="submit" class="btn btn-success btn-sm my-2">Bet</button>
								<?php else : ?>
									<p class="text-danger">No More Balance</p>
								<?php endif ?>
                            </form>
                        </div>
                        <p class="text-center">by -3000 up to 5000</p>
                    </div>
                </div>
            </div>
		</div>

        <div class="mt-3">
            <label for="gameHost" class="form-label">Game Host:</label>
            <ul class="list-unstyled">
                <?php foreach ($bets as $bet) : ?>
                    <?php $class = $bet['isSuccess'] ? 'text-success' : 'text-danger'; ?>
                    <li class="<?= $class; ?>"><?= $bet['timestamp']; ?> - <?= $bet['message']; ?></li>
                <?php endforeach; ?>
            </ul>
        </div>
    </div>
</div>
