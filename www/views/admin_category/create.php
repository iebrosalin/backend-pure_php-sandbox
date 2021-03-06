<?php
declare(strict_types=1);

use \Components\Helpers\Helpers;
use \Components\View\SimpleView;

SimpleView::render('layouts/header_admin.php') ?>

<?php echo Helpers::renderTitle('Add category') ?>
<?php echo Helpers::renderError($options['errors']) ?>

<div class="row justify-content-center">

    <div class="col-xl-6 col-lg-8 col-md-12">
        <div class="login-form">
            <form action="" method="post">
                <div class="form-group">
                    <label>Title</label>
                    <label>
                        <input type="text" class="form-control" name="name" placeholder="Title" required>
                    </label>
                </div>
                <div class="form-group">
                    <label>Order number</label>
                    <label>
                        <input type="number" class="form-control" name="sort_order"
                               placeholder="Order number (numerical value)" required>
                    </label>
                </div>
                <fieldset class="form-group">
                    <div class="form-check">
                        <label class="form-check-label">
                            <input class="form-check-input" type="checkbox" value="1" name="status"">
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




