
    <?php if (!empty($errors)) {?>

    <div class="alert alert-danger">
      <?php foreach ($errors as $error) {?>

     <div><?php echo $error ?></div>

       <?php }?>
    </div>
<?php }?>

  <form method="POST" enctype="multipart/form-data">
        <?php if ($product['image']) {?>
            <img  class="update_image" src="<?php echo $product['image']; ?>" >

        <?php }?>

  <div class="mb-3">
    <label>Product Image</label>
    <br>
    <input type="file" name='image'>
  </div>
  <div class="mb-3">
    <label>Product Title</label>
    <input type="text" name='title' class="form-control" value="<?php echo $title ?>">
  </div>
  <div class="mb-3">
    <label>Product Description</label>
    <textarea name='description' class="form-control" ><?php echo $description ?></textarea>
  </div>
  <div class="mb-3">
    <label>Product Price</label>
    <input type="number"  name='price' step=".01" class="form-control" value="<?php echo $price ?>">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>