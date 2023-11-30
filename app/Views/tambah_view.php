<div class="container p-5">
    <a href="<?= base_url('barang');?>" class="btn btn-secondary mb-2">Kembali</a>
    <div class="card">
        <div class="card-header" style="background-color: #007BFF; color: #fff;">
            <h4 class="card-title">Add Product</h4>
        </div>
        <div class="card-body">
            <form method="post" action="<?= base_url('barang/add');?>">
                <div class="form-group">
                    <label for="nama">Product Name</label>
                    <input type="text" name="nama" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="qty">Quantitiy</label>
                    <input type="number" name="qty" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="beli">Buying Price</label>
                    <input type="number" name="beli" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="jual">Selling Price</label>
                    <input type="number" name="jual" class="form-control" required>
                </div>
                <button class="btn btn-primary">Add Data</button>
            </form>
        </div>
    </div>
</div>
