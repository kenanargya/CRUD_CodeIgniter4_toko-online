<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Product - <?= $barang->nama_barang;?></title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        /* Custom CSS for the button */
        .edit-product-button {
            background-color: #007BFF; /* Change to your desired color */
            color: #fff; /* Text color */
        }

        /* Custom CSS for the card header */
        .card-header {
            background-color: #007BFF; /* Change to your desired color */
            color: #fff; /* Text color */
        }
    </style>
</head>
<body>

    <div class="container p-5">
        <a href="<?= base_url('barang');?>" class="btn btn-secondary mb-2">Back</a>
        <div class="card">
            <div class="card-header">
                <h4 class="card-title text-white">Edit Product: <?= $barang->nama_barang;?></h4>
            </div>
            <div class="card-body">
                <form method="post" action="<?= base_url('barang/update');?>">
                    <div class="form-group">
                        <label for="nama">Product Name</label>
                        <input type="text" value="<?= $barang->nama_barang;?>" name="nama" required class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="qty">Quantity</label>
                        <input type="number" value="<?= $barang->qty;?>" name="qty" required class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="beli">Buying Price</label>
                        <input type="number" value="<?= $barang->harga_beli;?>" name="beli" required class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="jual">Selling Price</label>
                        <input type="number" value="<?= $barang->harga_jual;?>" name="jual" required class="form-control">
                    </div>
                    <input type="hidden" value="<?= $barang->id_barang;?>" name="id_barang">
                    <button class="btn edit-product-button">Edit Data</button>
                </form>
            </div>
        </div>
    </div>

    <!-- Include Bootstrap JS and jQuery for enhanced functionality -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
