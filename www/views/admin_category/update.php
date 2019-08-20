<?php use Components\View\SimpleView;

SimpleView::render('layouts/header_admin.php') ?>
<section>
    <div class="container">
        <div class="row">

            <br/>

            <div class="breadcrumbs">
                <ol class="breadcrumb">
                    <li><a href="/admin">Home /</a></li>
                    <li><a href="/admin/category">Category /</a></li>
                    <li class="active">Edit</li>
                </ol>
            </div>


            <h4>Edit category <?php echo $options['category'] ['name']; ?></h4>

            <br/>

            <div class="col-lg-4">
                <div class="login-form">
                    <form action="#" method="post">

                        <p>Name</p>
                        <input type="text" name="name" placeholder="" value="<?php echo $options['category']['name']; ?>">

                        <p>Order number</p>
                        <input type="text" name="sort_order" placeholder="" value="<?php echo $options['category']['sort_order']; ?>">

                        <p>Status</p>
                        <select name="status">
                            <option value="1" <?php if ($options['category']['status'] == 1) echo ' selected="selected"'; ?>>Displayed</option>
                            <option value="0" <?php if ($options['category']['status'] == 0) echo ' selected="selected"'; ?>>Hidden</option>
                        </select>

                        <br><br>

                        <input type="submit" name="submit" class="btn btn-default" value="Save">
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<?php SimpleView::render('layouts/footer_admin.php') ?>

