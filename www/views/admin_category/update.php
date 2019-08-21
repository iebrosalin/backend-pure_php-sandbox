<?php use Components\View\SimpleView;

SimpleView::render('layouts/header_admin.php') ?>
<?= \Components\Helpers\Helpers::renderTitle('Edit category '.$options['category'] ['name']) ?>

<div class="row justify-content-center">
    <?= \Components\Helpers\Helpers::renderError($options['errors']) ?>

    <div class="col-xl-6 col-lg-8 col-md-12">
        <div class="login-form">
            <form action="" method="post">
                <div class="form-group">
                    <label>Title</label>
                    <input type="text" class="form-control" name="name" placeholder="Title" value="<?php echo $options['category']['name']; ?>">
                </div>
                <div class="form-group">
                    <label>Order number</label>
                    <input type="text" class="form-control" name="sort_order" value="<?php echo $options['category']['sort_order']; ?>"
                           placeholder="Order number (numerical value)">
                </div>
                <fieldset class="form-group">
                    <div class="form-check">
                        <label class="form-check-label">
                            <input class="form-check-input" type="checkbox" value="1" <?=($options['product']['status'] == 1)?'checked':'' ?>  name="status"">
                            Status
                        </label>
                    </div>
                </fieldset>
                <div class="form-group text-center">
                <input type="submit" name="submit" class="btn btn-primary" value="Save">
                </div>
            </form>
        </div>
    </div>

</div>
<?php SimpleView::render('layouts/footer_admin.php') ?>

