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
        <h2 style="margin-top:0px">Tb_pemohon <?php echo $button ?></h2>
        <form action="<?php echo $action; ?>" method="post">
	    <div class="form-group">
            <label for="varchar">Email <?php echo form_error('email') ?></label>
            <input type="text" class="form-control" name="email" id="email" placeholder="Email" value="<?php echo $email; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Nama <?php echo form_error('nama') ?></label>
            <input type="text" class="form-control" name="nama" id="nama" placeholder="Nama" value="<?php echo $nama; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Jenis <?php echo form_error('jenis') ?></label>
            <input type="text" class="form-control" name="jenis" id="jenis" placeholder="Jenis" value="<?php echo $jenis; ?>" />
        </div>
	    <div class="form-group">
            <label for="alamat">Alamat <?php echo form_error('alamat') ?></label>
            <textarea class="form-control" rows="3" name="alamat" id="alamat" placeholder="Alamat"><?php echo $alamat; ?></textarea>
        </div>
	    <div class="form-group">
            <label for="varchar">Telepon <?php echo form_error('telepon') ?></label>
            <input type="text" class="form-control" name="telepon" id="telepon" placeholder="Telepon" value="<?php echo $telepon; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Fax <?php echo form_error('fax') ?></label>
            <input type="text" class="form-control" name="fax" id="fax" placeholder="Fax" value="<?php echo $fax; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Contact Person <?php echo form_error('contact_person') ?></label>
            <input type="text" class="form-control" name="contact_person" id="contact_person" placeholder="Contact Person" value="<?php echo $contact_person; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Nomor Contact Person <?php echo form_error('nomor_contact_person') ?></label>
            <input type="text" class="form-control" name="nomor_contact_person" id="nomor_contact_person" placeholder="Nomor Contact Person" value="<?php echo $nomor_contact_person; ?>" />
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
	    <a href="<?php echo site_url('tb_pemohon') ?>" class="btn btn-default">Cancel</a>
	</form>
    </body>
</html>