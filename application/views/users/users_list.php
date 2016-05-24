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

            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="x_panel">
                <div class="x_title">
                  <h2>List Users <small>SIMLAB</small></h2>
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
            <div class="col-md-4 text-right">
                <?php echo anchor(site_url('users/create'), 'Create', 'class="btn btn-primary"'); ?>
        </div>
        </div>             

        <table id="example" class="table table-striped responsive-utilities jambo_table">
            <thead>
            <tr>
                <th width="80px">No</th>           
                <th>First Name</th>
                <th>Last Name</th>
                <th>Username</th>                            
                <th>Email</th>                        
                <th>Created On</th>
                <th>Last Login</th>
                <th>Active</th>            
                <th>Company</th>
                <th>Phone</th>
                <th>Action</th>
            </tr>
            </thead>
        <tbody>
            <?php
            $start = 0;
            foreach ($users_data as $users)
            {
                ?>
            <tr>
                <td><?php echo ++$start ?></td>      
                <td><?php echo $users->first_name ?></td>
                <td><?php echo $users->last_name ?></td>      
                <td><?php echo $users->username ?></td>                            
                <td><?php echo $users->email ?></td>            
                <td><?php echo $users->created_on ?></td>
                <td><?php echo $users->last_login ?></td>
                <td><?php echo $users->active ?></td>            
                <td><?php echo $users->company ?></td>
                <td><?php echo $users->phone ?></td>
                <td style="text-align:center" width="200px">
                <?php 
                echo anchor(site_url('users/read/'.$users->id),'Read'); 
                echo ' | '; 
                echo anchor(site_url('users/update/'.$users->id),'Update'); 
                echo ' | '; 
                echo anchor(site_url('users/delete/'.$users->id),'Delete','onclick="javasciprt: return confirm(\'Are You Sure ?\')"'); 
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