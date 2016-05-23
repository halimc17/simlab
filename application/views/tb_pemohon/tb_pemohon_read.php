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
        <h2 style="margin-top:0px">Tb_pemohon Read</h2>
        <table class="table">
	    <tr><td>Email</td><td><?php echo $email; ?></td></tr>
	    <tr><td>Nama</td><td><?php echo $nama; ?></td></tr>
	    <tr><td>Jenis</td><td><?php echo $jenis; ?></td></tr>
	    <tr><td>Alamat</td><td><?php echo $alamat; ?></td></tr>
	    <tr><td>Telepon</td><td><?php echo $telepon; ?></td></tr>
	    <tr><td>Fax</td><td><?php echo $fax; ?></td></tr>
	    <tr><td>Contact Person</td><td><?php echo $contact_person; ?></td></tr>
	    <tr><td>Nomor Contact Person</td><td><?php echo $nomor_contact_person; ?></td></tr>
	    <tr><td>Status Active</td><td><?php echo $status_active; ?></td></tr>
	    <tr><td>User Created</td><td><?php echo $user_created; ?></td></tr>
	    <tr><td>Date Created</td><td><?php echo $date_created; ?></td></tr>
	    <tr><td>User Modified</td><td><?php echo $user_modified; ?></td></tr>
	    <tr><td>Date Modified</td><td><?php echo $date_modified; ?></td></tr>
	    <tr><td></td><td><a href="<?php echo site_url('tb_pemohon') ?>" class="btn btn-default">Cancel</a></td></tr>
	</table>
        </body>
</html>