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
                    <li class="active"> Delete product</li>
                </ol>
            </div>


            <h4>Delete product with id <?php echo $options['id']; ?></h4>


            <p>Are you sure?</p>

            <form method="post">
                <input type="submit" name="submit" value="Delete" />
            </form>

        </div>
    </div>
</section>

<?php SimpleView::render('layouts/footer_admin.php') ?>

