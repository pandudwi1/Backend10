<main role="main" class="container">
	<div class="row">
		<?php foreach ($content as $row) : ?>
			<div class="col-md-6">
				<div class="card mb-3">
					<img src="<?= $row->image ? base_url("images/product/$row->image") : base_url("images/product/default.png") ?>" alt="" class="card-img-top">
					<div class="card-body">
						<h5 class="card-title"><?= $row->product_title ?></h5>
						<p class="card-text"><strong>Rp.<?= number_format($row->price, 0, ',', '.') ?>,-</strong></p>
						<p class="card-text"><?= $row->description ?></p>
					</div>
					<div class="card-footer">
						<form action="<?= base_url('cart/add') ?>" method="POST">
							<input type="hidden" name="id_product" value="<?= $row->id ?>">
							<div class="input-group">
								<input type="number" name="qty" value="1" class="form-control">
								<div class="input-group-append">
									<button class="btn btn-primary" type="submit">Add to cart</button>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		<?php endforeach ?>
	</div>
	</div>
	</div>
</main>