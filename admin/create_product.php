<?php
ob_start();
session_start();

if (!isset($_SESSION['admin_logged_in'])) {
    header('location: login.php');
}
?>

<?php include('layouts/header.php'); ?>

<?php
$query_products = "SELECT * FROM products";

$stmt_products = $conn->prepare($query_products);
$stmt_products->execute();
$products = $stmt_products->get_result();

$kurs_dollar = 15722;

function setRupiah($price)
{
    $result = "Rp" . number_format($price, 0, ',', '.');
    return $result;
}

$prod_name = $_POST['']
?>

<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Create Product</h1>
    <nav class="mt-4 rounded" aria-label="breadcrumb">
        <ol class="breadcrumb px-3 py-2 rounded mb-4">
            <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
            <li class="breadcrumb-item"><a href="products.php">Products</a></li>
            <li class="breadcrumb-item active">Create Products</li>
        </ol>
    </nav>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Create Product</h6>
        </div>
        <div class="card-body">
            <form id="edit-form" method="POST" action="create_product.php">
                <div class="row">

                    <div class="col-sm-12">
                        <div class="form-group">
                            <label>Product Name</label>
                            <input class="form-control" type="text" name="product_name">
                        </div>
                        <div class="form-group">
                            <label>Product Brand</label>
                            <input class="form-control" type="text" name="product_brand">
                        </div>
                        <div class="form-group">
                            <label>Product Category</label>
                            <input class="form-control" type="text" name="product_category">
                        </div>
                        <div class="form-group">
                            <label>Product Description</label>
                            <input class="form-control" type="text" name="product_description">
                        </div>
                        <div class="form-group">
                            <label>Product Criteria</label>
                            <input class="form-control" type="text" name="product_criteria">
                        </div>
                        <div class="form-group">
                            <label>Product Price</label>
                            <input class="form-control" type="text" name="product_price">
                        </div>
                        <div class="form-group">
                            <label>Special Offer</label>
                            <input class="form-control" type="text" name="special_offer">
                        </div>
                        <div class="form-group">
                            <label>Product Color</label>
                            <input class="form-control" type="text" name="product_color">
                        </div>

                        <label>Image 1</label>
                        <div class="input-group mb-3">
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="editImage1" name="image1" aria-describedby="inputGroupFileAddon01">
                                <label class="custom-file-label" for="editImage1">Choose file...</label>
                            </div>
                        </div>
                        <label>Image 2</label>
                        <div class="input-group mb-3">
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="editImage2" name="image2" aria-describedby="inputGroupFileAddon01">
                                <label class="custom-file-label" for="editImage2">Choose file...</label>
                            </div>
                        </div>
                        <label>Image 3</label>
                        <div class="input-group mb-3">
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="editImage3" name="image3" aria-describedby="inputGroupFileAddon01">
                                <label class="custom-file-label" for="editImage3">Choose file...</label>
                            </div>
                        </div>
                        <label>Image 4</label>
                        <div class="input-group mb-3">
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="editImage4" name="image4" aria-describedby="inputGroupFileAddon01">
                                <label class="custom-file-label" for="editImage4">Choose file...</label>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="m-t-20 text-right">
                    <a href="products.php" class="btn btn-danger">Cancel <i class="fas fa-undo"></i></a>
                    <button type="submit" class="btn btn-primary submit-btn" name="edit_btn">Create <i class="fas fa-share-square"></i></button>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- End of Main Content -->
<?php include('layouts/footer.php'); ?>