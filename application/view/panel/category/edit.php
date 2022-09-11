
<?php $this->include('panel.layouts.header') ?>



<form method="post" action="<?php $this->url('Category/update/' . $category['id']) ?>">
    <section class="form-group">
        <label for="name">Name</label>
        <input type="text" class="form-control" id="name" name="name" value="<?= $category['name'] ?>">
    </section>
    <section class="form-group">
        <label for="description">Description</label>
        <input type="text" class="form-control" name="description" id="description" value="<?= $category['description'] ?>">
    </section>
    <button type="submit" class="btn btn-primary">Update</button>
</form> 



<?php $this->include('panel.layouts.footer') ?>

