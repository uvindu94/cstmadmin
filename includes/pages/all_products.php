<?php

$allproducts = show_all_product_info($conn);

// var_dump($allproducts);

?>

<div class="card">
  <div class="card-body">
    <h4 class="card-title">All Products</h4>
    <p class="card-description"> Add class <code>.table</code>
    </p>
    <div class="table-responsive">
      <table class="table">
        <thead>
          <tr>
            <th>Thumbnail</th>
            <th>Name</th>
            <th>Price.</th>
            <th>Description</th>
            <th>Action</th>
            <th>Created</th>
          </tr>
        </thead>
        <tbody>
          <?php
          foreach ($allproducts as $item) {
            # code...

            $realpath = $item['main_image'];

            echo '
            <tr>
              <td><img style="width:40px; height:auto;" src="./' . $realpath . '"></td>
              <td>' . $item['name'] . '</td>
              <td>' . $item['price'] . '</td>
              <td>' . $item['description'] . '</td>
              <td>' . $item['created_at'] . '</td>
              <td> <a class="btn btn-sm btn-danger" href="./includes/scripts/delete_product.php?id='.$item['id'].'">Delete</td>
         
            </tr>';
          }


          ?>

        </tbody>
      </table>
    </div>
  </div>
</div>