<?php $this->load->view('header_view'); ?>

      <!-- page content -->
      <div class="right_col" role="main">
        <div class="">
          <div class="page-title">
            <div class="title_left">
              <h3>Plain Page</h3>
            </div>

            
          </div>
          <div class="clearfix"></div>

          <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="x_panel" style="height:600px;">
                <div class="x_title">
                  <h2>Plain Page</h2>
                  <ul class="nav navbar-right panel_toolbox">
                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
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
                    <li><a class="close-link"><i class="fa fa-close"></i></a>
                    </li>
                  </ul>
                  <div class="clearfix"></div>
                </div>

                <div class="row">
                <p>Lorem ipsum dolor sit amet</p>
                <?php var_dump($this->ion_auth->user()->row()); ?>

                <br />
                <br />
                <br />
                <?php 
                  $data['user']=$this->ion_auth->user()->row();
                  $username=$data['user']->username;
                  $firstname=$data['user']->first_name;
                  $lastname=$data['user']->last_name;

                  echo "Welcome : ".$firstname." ".$lastname;
                 ?>
                </div>

              </div>
            </div>
          </div>
        </div>

    <!-- footer content -->
    <?php $this->load->view('footer_view') ?>
    <!-- /footer content -->

      </div>
      <!-- /page content -->
    <?php $this->load->view('bottom_view') ?>
