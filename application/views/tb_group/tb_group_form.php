<!doctype html>
<html>
    <head>
        <title>harviacode.com - codeigniter crud generator</title>
        <link rel="stylesheet" href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css') ?>"/>
        <style>
            body{
                padding: 15px;
            }
        </style>
    </head>
    <body>
        <h2 style="margin-top:0px">Tb_group <?php echo $button ?></h2>
        <form action="<?php echo $action; ?>" method="post">
	    <div class="form-group">
            <label for="varchar">Group Code <?php echo form_error('group_code') ?></label>
            <input type="text" class="form-control" name="group_code" id="group_code" placeholder="Group Code" value="<?php echo $group_code; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Group Description <?php echo form_error('group_description') ?></label>
            <input type="text" class="form-control" name="group_description" id="group_description" placeholder="Group Description" value="<?php echo $group_description; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Status Active <?php echo form_error('status_active') ?></label>
            <input type="text" class="form-control" name="status_active" id="status_active" placeholder="Status Active" value="<?php echo $status_active; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">User Created <?php echo form_error('user_created') ?></label>
            <input type="text" class="form-control" name="user_created" id="user_created" placeholder="User Created" value="<?php echo $user_created; ?>" />
        </div>
	    <div class="form-group">
            <label for="datetime">Date Created <?php echo form_error('date_created') ?></label>
            <input type="text" class="form-control" name="date_created" id="date_created" placeholder="Date Created" value="<?php echo $date_created; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">User Modified <?php echo form_error('user_modified') ?></label>
            <input type="text" class="form-control" name="user_modified" id="user_modified" placeholder="User Modified" value="<?php echo $user_modified; ?>" />
        </div>
	    <div class="form-group">
            <label for="datetime">Date Modified <?php echo form_error('date_modified') ?></label>
            <input type="text" class="form-control" name="date_modified" id="date_modified" placeholder="Date Modified" value="<?php echo $date_modified; ?>" />
        </div>
	    <input type="hidden" name="id" value="<?php echo $id; ?>" /> 
	    <button type="submit" class="btn btn-primary"><?php echo $button ?></button> 
	    <a href="<?php echo site_url('tb_group') ?>" class="btn btn-default">Cancel</a>
	</form>
    </body>
</html>