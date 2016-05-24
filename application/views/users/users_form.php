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
                  <h2>Form Users <small>SIMLAB</small></h2>
                  <ul class="nav navbar-right panel_toolbox">
                    <li><a href="#"><i class="fa fa-chevron-up"></i></a>
                    </li>
                    <li class="dropdown">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                      <ul class="dropdown-menu" role="menu">
                        <li><a href="#">Settings 1</a>
                        </li>
                        <li><a href="#">Settings 2</a>
                        </li>
                      </ul>
                    </li>
                    <li><a href="#"><i class="fa fa-close"></i></a>
                    </li>
                  </ul>
                  <div class="clearfix"></div>
                </div>
                <div class="x_content">    

                <div class="row" style="margin-bottom: 10px">
                <div class="col-md-4">
                    <h2 style="margin-top:0px">&nbsp;</h2>
                </div>
                <div class="col-md-4 text-center">
                    <div style="margin-top: 4px"  id="message">
                        <?php echo $this->session->userdata('message') <> '' ? $this->session->userdata('message') : ''; ?>

                    </div>
                </div>                
                </div>


                <!-- form-->
                <h2 style="margin-top:0px">Users <?php echo $button ?></h2>
                <form action="<?php echo $action; ?>" method="post">
                    
                    <div class="form-group">
                        <label for="varchar">First Name <?php echo form_error('first_name') ?></label>
                        <input type="text" class="form-control" name="first_name" id="first_name" placeholder="First Name" value="<?php echo $first_name; ?>" />
                    </div>
                    <div class="form-group">
                        <label for="varchar">Last Name <?php echo form_error('last_name') ?></label>
                        <input type="text" class="form-control" name="last_name" id="last_name" placeholder="Last Name" value="<?php echo $last_name; ?>" />
                    </div>   
                    <div class="form-group">
                        <label for="varchar">Username <?php echo form_error('username') ?></label>
                        <input type="text" class="form-control" name="identity" id="identity" placeholder="Username" value="<?php echo $username; ?>" />
                    </div>   
                    <div class="form-group">
                        <label for="varchar">Company <?php echo form_error('company') ?></label>
                        <input type="text" class="form-control" name="company" id="company" placeholder="Company" value="<?php echo $company; ?>" />
                    </div>    
                    <div class="form-group">
                        <label for="varchar">Email <?php echo form_error('email') ?></label>
                        <input type="text" class="form-control" name="email" id="email" placeholder="Email" value="<?php echo $email; ?>" />
                    </div>
                    <div class="form-group">
                        <label for="varchar">Phone <?php echo form_error('phone') ?></label>
                        <input type="text" class="form-control" name="phone" id="phone" placeholder="Phone" value="<?php echo $phone; ?>" />
                    </div>
                    <div class="form-group">
                        <label for="varchar">Password <?php echo form_error('password') ?></label>
                        <input type="password" class="form-control" name="password" id="password" placeholder="" value="" />
                    </div>
                    <div class="form-group">
                        <label for="varchar">Password Confirm<?php echo form_error('password_confirm') ?></label>
                        <input type="password" class="form-control" name="password_confirm" id="password_confirm" placeholder="" value="" />
                    </div>

                    <input type="hidden" name="id" value="<?php echo $id; ?>" /> 
                    <button type="submit" class="btn btn-primary"><?php echo $button ?></button> 
                    <a href="<?php echo site_url('users') ?>" class="btn btn-default">Cancel</a>

                </form>             
                <!-- form-->             

        

       
                </div>
              </div>
            </div>

            <br />
            <br />
            <br />

          </div>
        </div>

        
        
    <!-- footer content -->
    <?php $this->load->view('footer_view') ?>
    <!-- /footer content -->

      </div>
      <!-- /page content -->
    <?php $this->load->view('bottom_view') ?>