<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online Store - Product Listing</title>
    <link rel="stylesheet" href="your-css-file.css">
    <!-- Include Bootstrap CSS for enhanced styling -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        /* Custom CSS for the button */
        .add-product-button {
            background-color: #007BFF; /* Change to your desired color */
            color: #fff; /* Text color */
        }
    </style>
</head>
<body>

    <div class="container mt-5">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="display-4 text-center mb-5">Product List</h1>
                
  
                
                <table class="table table-striped table-bordered">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col">No.</th>
                            <th scope="col">Product Name</th>
                            <th scope="col">Quantity</th>
                            <th scope="col">Buying Price</th>
                            <th scope="col">Selling Price</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no=1; foreach($getBarang as $isi){?>
                            <tr>
                                <th scope="row"><?= $no;?></th>
                                <td><?= $isi['nama_barang'];?></td>
                                <td><?= $isi['qty'];?></td>
                                <td>Rp<?= number_format($isi['harga_beli']);?>,-</td>
                                <td>Rp<?= number_format($isi['harga_jual']);?>,-</td>
                                <td>
                                    <a href="<?= base_url('barang/edit/'.$isi['id_barang']);?>" 
                                    class="btn btn-primary btn-sm">Edit</a>
                                    <a href="<?= base_url('barang/hapus/'.$isi['id_barang']);?>" 
                                    onclick="javascript:return confirm('Are you sure you want to delete this product?')"
                                    class="btn btn-danger btn-sm">Delete</a>
                                </td>
                            </tr>
                        <?php $no++;}?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <footer class="bg-dark text-white text-center py-3">
        <p>&copy; <?= date("Y"); ?> Shoppedia. All rights reserved.</p>
    </footer>

    <!-- Include Bootstrap JS and jQuery for enhanced functionality -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
