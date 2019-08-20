<?php use Components\View\SimpleView;
use Models\Category;

SimpleView::render('layouts/header_admin.php') ?>

<?= Components\Helpers\Helpers::renderTitle('List of categories')?>

<?= Components\Helpers\Helpers::renderBtnCreate('Add category')?>

    <div class="row ">
        <div class="col">
            <table class="table-bordered table-striped table">
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Order number</th>
                    <th>Status</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </tr>
                <?php foreach ($options['categoriesList'] as $category): ?>
                    <tr>
                        <td><?php echo $category['id']; ?></td>
                        <td><?php echo $category['name']; ?></td>
                        <td><?php echo $category['sort_order']; ?></td>
                        <td><?php echo Category::getStatusText($category['status']); ?></td>
                        <td><a href="/admin/category/update/<?php echo $category['id']; ?>" title="Edit"><i
                                        class="fa fa-pencil-square-o"></i></a></td>
                        <td><a href="/admin/category/delete/<?php echo $category['id']; ?>" title="Delete"><i
                                        class="fa fa-times"></i></a></td>
                    </tr>
                <?php endforeach; ?>
            </table>
        </div>
    </div>

<?php SimpleView::render('layouts/footer_admin.php') ?>