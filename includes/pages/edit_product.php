<?php

$allproducts = show_all_product_info($conn);

// var_dump($allproducts);

?>
<div class="card">
    <div class="card-body">
        <h4 class="card-title">Edit Product</h4>
        <p class="card-description"> Initial form layout </p>

        <form class="forms-sample" method="get" action="./dashboard.php?page=edit_product">

            <div class="row">
                <div class="col-3"></div>
                <div class="col-4">
                    <select class="form-control" id="product" name="product" required>
                        <option value="">-Change the editable product-</option>
                        <?php
                        foreach ($allproducts as $item) {
                            # code...
                            echo ' <option value="' . $item['id'] . '">' . $item['name'] . '</option>';
                        }
                        ?>

                    </select>
                    <input type="hidden" name="page" id="page" value="edit_product">
                </div>
                <div class="col-5">
                    <input type="submit" class="btn" value="Edit this product">
                </div>
            </div>





        </form><br><br>

        <form action="./includes/scripts/addnewproduct.php" class="forms-sample" method="post" enctype="multipart/form-data">
            <div class="form-group row">
                <label for="" class="col-sm-3 col-form-label">Title</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" id="title" name="title" placeholder="Product Title">
                </div>
            </div>
            <div class="form-group row">
                <label for="exampleInputEmail2" class="col-sm-3 col-form-label">Description</label>
                <div class="col-sm-9">
                    <textarea class="form-control" id="desc" name="desc" placeholder="Product Description"></textarea>
                </div>
            </div>
            <div class="form-group row">
                <label for="" class="col-sm-3 col-form-label">Price</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" id="price" name="price" placeholder="Product Price">
                </div>
            </div>
            <div class="form-group row">
                <label for="exampleInputPassword2" class="col-sm-3 col-form-label">Thumbnail</label>
                <div class="col-sm-9">
                    <input type="file" class="form-control" id="thumbnail" name="thumbnail" placeholder="Password">
                </div>
            </div>


            <div class="form-group row">
                <label for="exampleInputPassword2" class="col-sm-3 col-form-label">Gallery Image</label>
                <div class="col-sm-3">
                    <input type="file" class="form-control" id="gallery1" name="gallery1" placeholder="Password">
                </div>

                <div class="col-sm-3">
                    <input type="file" class="form-control" id="gallery2" name="gallery2" placeholder="Password">
                </div>

                <div class="col-sm-3">
                    <input type="file" class="form-control" id="gallery3" name="gallery3" placeholder="Password">
                </div>
            </div>


            <button type="submit" class="btn btn-primary me-2">Add New Product</button>
            <button class="btn btn-light">Cancel</button>

            <p style="color: red;"><?php if (isset($_SESSION['msg'])) {
                                        echo $_SESSION['msg'];
                                    }
                                    unset($_SESSION['msg']); ?></p>
        </form>
    </div>
</div>