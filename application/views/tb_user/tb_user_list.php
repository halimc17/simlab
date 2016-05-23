<!doctype html>
<html>
    <head>
        <title>harviacode.com - codeigniter crud generator</title>
        <link rel="stylesheet" href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css') ?>"/>
        <link rel="stylesheet" href="<?php echo base_url('assets/datatables/dataTables.bootstrap.css') ?>"/>
        <style>
            body{
                padding: 15px;
            }
        </style>
    </head>
    <body>
        <div class="row" style="margin-bottom: 10px">
            <div class="col-md-4">
                <h2 style="margin-top:0px">Tb_user List</h2>
            </div>
            <div class="col-md-4 text-center">
                <div style="margin-top: 4px"  id="message">
                    <?php echo $this->session->userdata('message') <> '' ? $this->session->userdata('message') : ''; ?>
                </div>
            </div>
            <div class="col-md-4 text-right">
                <?php echo anchor(site_url('tb_user/create'), 'Create', 'class="btn btn-primary"'); ?>
	    </div>
        </div>
        <table class="table table-bordered table-striped" id="mytable">
            <thead>
                <tr>
                    <th width="80px">No</th>
		    <th>Username</th>
		    <th>Password</th>
		    <th>Name</th>
		    <th>Status Active</th>
		    <th>User Created</th>
		    <th>Date Created</th>
		    <th>User Modified</th>
		    <th>Date Modified</th>
		    <th>Action</th>
                </tr>
            </thead>
	    <tbody>
            <?php
            $start = 0;
            foreach ($tb_user_data as $tb_user)
            {
                ?>
                <tr>
		    <td><?php echo ++$start ?></td>
		    <td><?php echo $tb_user->username ?></td>
		    <td><?php echo $tb_user->password ?></td>
		    <td><?php echo $tb_user->name ?></td>
		    <td><?php echo $tb_user->status_active ?></td>
		    <td><?php echo $tb_user->user_created ?></td>
		    <td><?php echo $tb_user->date_created ?></td>
		    <td><?php echo $tb_user->user_modified ?></td>
		    <td><?php echo $tb_user->date_modified ?></td>
		    <td style="text-align:center" width="200px">
			<?php 
			echo anchor(site_url('tb_user/read/'.$tb_user->id),'Read'); 
			echo ' | '; 
			echo anchor(site_url('tb_user/update/'.$tb_user->id),'Update'); 
			echo ' | '; 
			echo anchor(site_url('tb_user/delete/'.$tb_user->id),'Delete','onclick="javasciprt: return confirm(\'Are You Sure ?\')"'); 
			?>
		    </td>
	        </tr>
                <?php
            }
            ?>
            </tbody>
        </table>
        <script src="<?php echo base_url('assets/js/jquery-1.11.2.min.js') ?>"></script>
        <script src="<?php echo base_url('assets/datatables/jquery.dataTables.js') ?>"></script>
        <script src="<?php echo base_url('assets/datatables/dataTables.bootstrap.js') ?>"></script>
        <script type="text/javascript">
            $(document).ready(function () {
                $("#mytable").dataTable();
            });
        </script>
    </body>
</html>