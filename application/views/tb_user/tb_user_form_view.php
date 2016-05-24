<?php $this->load->view('header_view'); ?>

      <!-- page content -->
      <div class="right_col" role="main">
        <div class="">
          <div class="page-title">
            <!--<div class="title_left">
              <h3>Plain Page</h3>
            </div>-->

            
          </div>
          <div class="clearfix"></div>

          <div class="row">

            <div class="col-md-5 col-sm-12 col-xs-12">
              <div class="x_panel">
                <div class="x_title">
                  <h2>Form User <small>SIMLAB</small></h2>
                  
                  
                  <div class="clearfix"></div>
                </div>
                <div class="x_content">    

                   <h2 style="margin-top:0px"><?php echo $button ?></h2>
                    <form action="<?php echo $action; ?>" method="post">
                        <div class="form-group">
                            <label for="varchar">Name <?php echo form_error('name') ?></label>
                            <input type="text" class="form-control" name="name" id="name" placeholder="Name" value="<?php echo $name; ?>" />
                        </div>
                        <div class="form-group">
                            <label for="varchar">Username <?php echo form_error('username') ?></label>
                            <input type="text" class="form-control" name="username" id="username" placeholder="Username" value="<?php echo $username; ?>" />
                        </div>
                        <div class="form-group">
                            <label for="varchar">Password <?php echo form_error('password') ?></label>
                            <input type="text" class="form-control" name="password" id="password" placeholder="Password" value="<?php echo $password; ?>" />
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


                </div>
              </div>
            </div>

            <br />
            <br />
            <br />

          </div>
        </div>

        <script>

            var asInitVals = new Array();
            $(document).ready(function() {
              var oTable = $('#example').dataTable({
                "oLanguage": {
                  "sSearch": "Search all columns:"
                },
                "aoColumnDefs": [{
                    'bSortable': false,
                    'aTargets': [0]
                  } //disables sorting for column one
                ],
                'iDisplayLength': 50,
                "sPaginationType": "full_numbers",
                "dom": 'T<"clear">lfrtip'
              });
            });
          </script>
        
    <!-- footer content -->
    <?php $this->load->view('footer_view') ?>
    <!-- /footer content -->

      </div>
      <!-- /page content -->
    <?php $this->load->view('bottom_view') ?>