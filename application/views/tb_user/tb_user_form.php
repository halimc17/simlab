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
        <h2 style="margin-top:0px">Tb_user <?php echo $button ?></h2>
        <form action="<?php echo $action; ?>" method="post">
	    <div class="form-group">
            <label for="varchar">Username <?php echo form_error('username') ?></label>
            <input type="text" class="form-control" name="username" id="username" placeholder="Username" value="<?php echo $username; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Password <?php echo form_error('password') ?></label>
            <input type="text" class="form-control" name="password" id="password" placeholder="Password" value="<?php echo $password; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Name <?php echo form_error('name') ?></label>
            <input type="text" class="form-control" name="name" id="name" placeholder="Name" value="<?php echo $name; ?>" />
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
	    <a href="<?php echo site_url('tb_user') ?>" class="btn btn-default">Cancel</a>
	</form>
    </body>
</html>