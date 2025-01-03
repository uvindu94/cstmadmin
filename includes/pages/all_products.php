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
            <th>Created</th>
          </tr>
        </thead>
        <tbody>
          <?php
          foreach ($allproducts as $item) {
            # code...
            $absolpath = $item['main_image'];
            $removeslashes = explode("../", $absolpath);
            $realpath = $removeslashes[2];

            echo '
            <tr>
              <td><img style="width:40px; height:auto;" src="./' . $realpath . '"></td>
              <td>' . $item['name'] . '</td>
              <td>' . $item['price'] . '</td>
              <td>' . $item['description'] . '</td>
              <td>' . $item['created_at'] . '</td>
         
            </tr>';
          }


          ?>

        </tbody>
      </table>
    </div>
  </div>
</div>