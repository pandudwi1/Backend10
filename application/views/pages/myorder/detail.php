<main role="main" class="container">
    <div class="row">
        <div class="col-md-9">
            <div class="card">
                <div class="card-header">
                </div>
                <div class="card-body">
                    <p>Tanggal: <?= str_replace('-', '/', date('d-m-Y', strtotime($order->date))) ?></p>
                    <p>Nama: <?= $order->name ?></p>
                    <p>Telepon: <?= $order->phone ?></p>
                    <p>Alamat: <?= $order->address ?></p>
                    <a href="<?= base_url('home') ?>" class="btn btn-primary"><i class="fas fa-angle-left"></i> Home</a>
                </div>

            </div>

        </div>
    </div>
</main>