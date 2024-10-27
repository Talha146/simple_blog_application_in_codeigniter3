<?php $this->load->view('admin/header'); ?>

<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Add Blog</h1>
    </div>
    <form action="<?php echo base_url().'blog/add';?>" method="post" name="blogForm" id="blogForm">
        <div class="form-group mb-3">
            <label for="">Title</label>
            <input type="text" name="title" id="title" value="<?php echo set_value('title');?>" class="form-control" >
            <p class="help-block"><?php echo form_error('title')?></p>
        </div>
        <div class="form-group mb-3">
            <label for="">Description</label>
            <textarea name="description" id="description" value="<?php echo set_value('description');?>" class="form-control" rows="5"></textarea>
            <p class="help-block"><?php echo form_error('description')?></p>
        </div>
        <div class="form-group mb-3">
            <label for="">Author</label>
            <input type="text" name="author" id="author" value="<?php echo set_value('author');?>" class="form-control" >
            <p class="help-block"><?php echo form_error('author')?></p>
        </div>
        <div class="form-group mb-3">
            <label for="">Special</label>
            <select name="special" id="" class="form-control">
                <option value="">--Select a value--</option>
                <option value="featured">Featured</option>
                <option value="promo">Promotional</option>
            </select>
            <p class="help-block"><?php echo form_error('author')?></p>
        </div>
        <div class="form-group">
            <button class="btn btn-primary">Create</button>
        </div>
    </form>
</main>

<?php $this->load->view('admin/footer'); ?>