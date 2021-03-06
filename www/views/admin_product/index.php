<?php
declare(strict_types=1);

use Components\Helpers\Helpers;
use Components\View\SimpleView;

SimpleView::render('layouts/header_admin.php') ?>
<?php echo Helpers::renderTitle('List of products') ?>

<?php echo Helpers::renderBtnCreate('Add product') ?>

<div class="row ">
    <div class="col">
        <div class="table-responsive">
            <table class="table-bordered table-striped table ">
                <tr>
                    <th>ID</th>
                    <th>Code</th>
                    <th>Name</th>
                    <th>Price</th>
                    <th>Status</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </tr>
                <?php foreach ($options['productsList'] as $product): ?>
                    <tr>
                        <td><?php echo $product['id']; ?></td>
                        <td><?php echo $product['code']; ?></td>
                        <td><?php echo $product['name']; ?></td>
                        <td><?php echo $product['price']; ?></td>
                        <td><?php echo $product['status']; ?></td>
                        <td><a href="/admin/product/update/<?php echo $product['id']; ?>" title="Edit"><i
                                    class="fa fa-pencil-square-o"></i></a></td>
                        <td><a href="/admin/product/delete/<?php echo $product['id']; ?>" title="Delete"><i
                                    class="fa fa-times"></i></a></td>
                    </tr>
                <?php endforeach; ?>
            </table>
        </div>
    </div>
</div>

<?php SimpleView::render('layouts/footer_admin.php') ?>


