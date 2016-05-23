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
        <h2 style="margin-top:0px">Tb_group Read</h2>
        <table class="table">
	    <tr><td>Group Code</td><td><?php echo $group_code; ?></td></tr>
	    <tr><td>Group Description</td><td><?php echo $group_description; ?></td></tr>
	    <tr><td>Status Active</td><td><?php echo $status_active; ?></td></tr>
	    <tr><td>User Created</td><td><?php echo $user_created; ?></td></tr>
	    <tr><td>Date Created</td><td><?php echo $date_created; ?></td></tr>
	    <tr><td>User Modified</td><td><?php echo $user_modified; ?></td></tr>
	    <tr><td>Date Modified</td><td><?php echo $date_modified; ?></td></tr>
	    <tr><td></td><td><a href="<?php echo site_url('tb_group') ?>" class="btn btn-default">Cancel</a></td></tr>
	</table>
        </body>
</html>