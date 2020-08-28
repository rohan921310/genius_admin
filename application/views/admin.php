<div class="page-wrapper">
    <!-- ============================================================== -->
    <!-- Container fluid  -->
    <!-- ============================================================== -->
    <div class="container-fluid">
        <!-- ============================================================== -->
        <!-- Bread crumb and right sidebar toggle -->
        <!-- ============================================================== -->

        <!-- ============================================================== -->
        <!-- End Bread crumb and right sidebar toggle -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Start Page Content -->
        <!-- ============================================================== -->
        <div class="row mt-3">
                    <!-- Column -->
                    <div class="col-lg-3 col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex flex-row">
                                    <div class="round align-self-center round-success"><i class="ti-wallet"></i></div>
                                    <div class="m-l-10 align-self-center">
                                        <h3 class="m-b-0"> <?= $teacher_pending ?></h3>
                                        <h5 class="text-muted m-b-0">Pending For Approval</h5></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                    <!-- Column -->
                    <div class="col-lg-3 col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex flex-row">
                                    <div class="round align-self-center round-info"><i class="ti-user"></i></div>
                                    <div class="m-l-10 align-self-center">
                                        <h3 class="m-b-0"> <?= $teacher_approved ?></h3>
                                        <h5 class="text-muted m-b-0">Part Of Our Institute</h5></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                    <!-- Column -->
                    <div class="col-lg-3 col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex flex-row">
                                    <div class="round align-self-center round-danger"><i class="ti-calendar"></i></div>
                                    <div class="m-l-10 align-self-center">
                                        <h3 class="m-b-0">
                                            
                                        <?= $teacher_rejected; ?>
                     
                                    </h3>
                                        <h5 class="text-muted m-b-0">Rejected </h5></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                    <!-- Column -->
                    <div class="col-lg-3 col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex flex-row">
                                    <div class="round align-self-center round-success"><i class="ti-settings"></i></div>
                                    <div class="m-l-10 align-self-center">
                                        <h3 class="m-b-0"><?= count($teacher_registration) ?></h3>
                                        <h5 class="text-muted m-b-0">OverAll Applications</h5></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                </div>

        <div class="col-12">


            <?php if ($msg = $this->session->flashdata('msg')) {
                if ($msg_class = $this->session->flashdata('msg_class')) {
            ?>
                    <div class="alert <?= $msg_class ?>">
                        <h4> <?= $msg ?> </h4>
                    </div>
            <?php         }
            }

            ?>


        </div>
        <div class="row mt-3 ">
            <div class="col-12">

                <!-- Column -->
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Welcome To Genius Study Circle</h4>
                        <h6 class="card-subtitle">Teacher Approvel Section</h6>
                        <div class="table-responsive">
                            <table id="demo-foo-row-toggler" class="table table-bordered" data-toggle-column="first" data-paging="true" data-paging-size="7">
                                <thead>

                                    <tr>
                                        <th data-breakpoints="xs">S.No.</th>
                                        <th>Name</th>
                                        <th>Status</th>
                                        <th data-breakpoints="xs sm">Email Id</th>
                                        <th data-breakpoints="xs">Mobile No</th>
                                        <th data-breakpoints="all">Aadhar Card</th>
                                        <th data-breakpoints="all">Class 12th</th>
                                        <th data-breakpoints="all">Class 11th</th>
                                        <th data-breakpoints="all">Subject For Senior Class</th>
                                        <th data-breakpoints="all">Class 10th</th>
                                        <th data-breakpoints="all">Class 9th</th>
                                        <th data-breakpoints="all">Subject For Junior Class</th>

                                        <th data-breakpoints="all" colspan="2"></th>
                                    </tr>

                                </thead>
                                <tbody>
                                    <?php $i = 1;
                                    if (!empty($teacher_registration)) {


                                        foreach ($teacher_registration as $class) { ?>
                                            <tr>
                                                <td><?php echo $i++; ?></td>
                                                <td>
                                                    <!-- <a href="<?php echo base_url() . "../genius_teacher/uploads/" . $class->teacher_image; ?>"> -->
                                                    <img src="<?php echo base_url() . "../genius_teacher/uploads/" . $class->teacher_image; ?>" alt="user" width="50" class="rounded-circle" />
                                                    <!-- </a> -->
                                                    <?php echo $class->teacher_name; ?>
                                                </td>
                                                <td> <?php
                                                        if ($class->approval == 0) { ?>

                                                        <a href="<?= base_url(); ?>index.php/approve_teacher?teacher_id=<?= $class->teacher_id; ?>"> <button type="button" class="btn waves-effect waves-light btn-success">Approve</button></a>

                                                        <a href="<?= base_url(); ?>index.php/reject_teacher?teacher_id=<?= $class->teacher_id; ?>"> <button type="button" class="btn waves-effect waves-light btn-danger">Reject</button></a>

                                                </td>
                                            <?php } else if ($class->approval == 2) { ?>
                                                <button type="button" class="btn waves-effect waves-light btn-danger">Rejected</button></td>

                                            <?php  } else { ?>
                                                <button type="button" class="btn waves-effect waves-light btn-info">Part Of Our Institute</button>

                                            <?php  }

                                            ?>
                                            </td>
                                            <td><?php echo $class->teacher_email; ?></td>
                                            <td><?php echo $class->teacher_mobile; ?></td>
                                            <td>

                                                <!-- <a href="<?php echo base_url() . "../genius_teacher/uploads/" . $class->teacher_aadhar; ?>"> -->
                                                <img src="<?php echo base_url() . "../genius_teacher/uploads/" . $class->teacher_aadhar; ?>" alt="user" width="150" />
                                                <!-- </a> -->

                                            </td>
                                            <td><?php
                                                if ($class->xii) {
                                                    echo "YES";
                                                } else {
                                                    echo "NO";
                                                }
                                                ?></td>
                                            <td><?php
                                                if ($class->xi) {
                                                    echo "YES";
                                                } else {
                                                    echo "NO";
                                                }
                                                ?></td>
                                            <td><?php
                                                if ($class->senior_subject) { ?>
                                                    <?php echo $class->senior_subject ?>
                                                <?php } else {
                                                    echo "NO";
                                                } ?>
                                            </td>
                                            <td><?php
                                                if ($class->x) {
                                                    echo "YES";
                                                } else {
                                                    echo "NO";
                                                }
                                                ?></td>
                                            <td><?php
                                                if ($class->ix) {
                                                    echo "YES";
                                                } else {
                                                    echo "NO";
                                                }
                                                ?></td>
                                            <td><?php
                                                if ($class->junior_subject) { ?>
                                                    <?php echo $class->junior_subject ?>
                                                <?php } else {
                                                    echo "NO";
                                                } ?>
                                            </td>

                                            <td>
                                                <?php
                                                if ($class->approval == 0) { ?>

                                                    <a href=""> <button type="button" class="btn waves-effect waves-light btn-danger">Approve</button></a></td>
                                        <?php } else { ?>
                                            <button type="button" class="btn waves-effect waves-light btn-info">Part Of Our Institute</button>

                                        <?php  }

                                        ?>
                                            </tr>

                                        <?php }
                                    } else {  ?>
                                        <tr>
                                            <td colspan="7"> records not found</td>
                                        </tr>
                                    <?php } ?>

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <!-- Column -->

                <!-- Column -->

                <!-- Column -->
                <div class="card" style="display: none;">
                    <div class="card-body">
                        <h4 class="card-title">Add & Remove Rows</h4>
                        <h6 class="card-subtitle">You can add or remove rows with Footable</h6>
                        <div class="table-responsive">
                            <table id="footable-addrow" class="table" data-paging="true" data-filtering="true" data-sorting="true" data-editing="true" data-state="true"></table>
                        </div>
                        <!-- Start Popup Model -->
                        <div class="modal fade" id="editor-modal" tabindex="-1" role="dialog" aria-labelledby="editor-title">
                            <div class="modal-dialog" role="document">
                                <form class="modal-content form-horizontal" id="editor">
                                    <div class="modal-header">
                                        <h4 class="modal-title" id="editor-title">Add Row</h4>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="form-group required row">
                                            <label for="firstName" class="col-sm-3 control-label">First Name</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" id="firstName" name="firstName" placeholder="First Name" required>
                                            </div>
                                        </div>
                                        <div class="form-group required row">
                                            <label for="lastName" class="col-sm-3 control-label">Last Name</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" id="lastName" name="lastName" placeholder="Last Name" required>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="jobTitle" class="col-sm-3 control-label">Job Title</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" id="jobTitle" name="jobTitle" placeholder="Job Title">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="dob" class="col-sm-3 control-label">Date of Birth</label>
                                            <div class="col-sm-9">
                                                <input type="date" class="form-control" id="dob" name="dob" placeholder="Date of Birth">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="status" class="col-sm-3 control-label">Status</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" id="status" name="status" placeholder="Status Here" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="submit" class="btn btn-primary">Save changes</button>
                                        <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <!-- End Popup Model -->
                    </div>
                </div>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- End PAge Content -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Right sidebar -->
        <!-- ============================================================== -->
        <!-- .right-sidebar -->

        <!-- ============================================================== -->
        <!-- End Right sidebar -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Container fluid  -->
    <!-- ============================================================== -->
</div>
<script src="<?= base_url() ?>dist/js/pages/footable-init.js"></script>