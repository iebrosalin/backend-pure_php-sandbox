<?php use Components\View\SimpleView;

SimpleView::render('layouts/header_admin.php') ?>
<section>
    <div class="container">
        <div class="row">

            <br/>

            <div class="breadcrumbs">
                <ol class="breadcrumb">
                    <li><a href="/admin">Home /</a></li>
                    <li ><a href="/admin/product">Products /</a></li>
                    <li class="active">Edit</li>
                </ol>
            </div>


            <h4>Edit product with id<?php echo $options['id']; ?></h4>

            <br/>

            <div class="col-lg-4">
                <div class="login-form">
                    <form action="#" method="post" enctype="multipart/form-data">

                        <p>Name</p>
                        <input type="text" name="name" placeholder="" value="<?php echo $options['product']['name']; ?>">


                        <p>Code</p>
                        <input type="text" name="code" placeholder="" value="<?php echo $options['product']['code']; ?>">
                        <p>Price</p>
                        <input type="text" name="price" placeholder="" value="<?php echo $options['product']['price']; ?>">

                        <p>Category</p>
                        <select name="category_id">
                            <?php if (is_array($options['categoriesList'])): ?>
                                <?php foreach ($options['categoriesList'] as $category): ?>
                                    <option value="<?php echo $category['id']; ?>"
                                        <?php if ($options['product']['category_id'] == $category['id']) echo ' selected="selected"'; ?>>
                                        <?php echo $category['name']; ?>
                                    </option>
                                <?php endforeach; ?>
                            <?php endif; ?>
                        </select>

                        <br/><br/>

                        <p>Brand</p>
                        <input type="text" name="brand" placeholder="" value="<?php echo $options['product']['brand']; ?>">

                        <p>Image</p>
                        <img src="<?php echo Product::getImage($options['product']['id']); ?>" width="200" alt="" />
                        <div>
                            <input type="file" name="image" placeholder="" value="">
                        </div>
                        <!--                        <br/>-->
                        <!--                        <p>Gallery</p>-->
                        <!--                        <input type="file" name="gallery" placeholder="" value="">-->

                        <p>Description</p>
                        <textarea name="description"><?php echo $options['product']['description']; ?></textarea>

                        <br/><br/>

                        <p>Availability</p>
                        <select name="availability">
                            <option value="1" <?php if ($options['product']['availability'] == 1) echo ' selected="selected"'; ?>>Yes</option>
                            <option value="0" <?php if ($options['product']['availability'] == 0) echo ' selected="selected"'; ?>>No</option>
                        </select>

                        <br/><br/>

                        <p>New</p>
                        <select name="is_new">
                            <option value="1" <?php if ($options['product']['is_new'] == 1) echo ' selected="selected"'; ?>>Yes</option>
                            <option value="0" <?php if ($options['product']['is_new'] == 0) echo ' selected="selected"'; ?>>No</option>
                        </select>

                        <br/><br/>

                        <p>Recomended</p>
                        <select name="is_recommended">
                            <option value="1" <?php if ($options['product']['is_recommended'] == 1) echo ' selected="selected"'; ?>>Yes</option>
                            <option value="0" <?php if ($options['product']['is_recommended'] == 0) echo ' selected="selected"'; ?>>No</option>
                        </select>

                        <br/><br/>

                        <p>Status</p>
                        <select name="status">
                            <option value="1" <?php if ($options['product']['status'] == 1) echo ' selected="selected"'; ?>>Displayed</option>
                            <option value="0" <?php if ($options['product']['status'] == 0) echo ' selected="selected"'; ?>>Hidden</option>
                        </select>

                        <br/><br/>

                        <input type="submit" name="submit" class="btn btn-default" value="Save">

                        <br/><br/>

                    </form>
                </div>
            </div>

        </div>
    </div>
</section>
<?php SimpleView::render('layouts/footer_admin.php') ?>