<!-- ============================================================== -->
<!-- End Left Sidebar - style you can find in sidebar.scss  -->
<!-- ============================================================== -->
<!-- ============================================================== -->
<!-- Page wrapper  -->
<!-- ============================================================== -->
<div class="page-wrapper" style="min-height: 724px;">
    <!-- ============================================================== -->
    <!-- Container fluid  -->
    <!-- ============================================================== -->
    <div class="row mt-3 ml-2 mr-2">
                    <!-- Column -->
                    <div class="col-md-6 col-lg-4 col-xlg-2">
                        <div class="card">
                            <div class="box bg-megna text-center">
                                <h1 class="font-light text-white"><?= $count_subject ?></h1>
                                <h6 class="text-white">Overall Subjects</h6>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                    
                    <!-- Column -->
                    
                    <!-- Column -->
                    
                    <!-- Column -->
                  
                    <!-- Column -->
                
                </div>
    <div class="container-fluid ">
        <div class="table-responsive m-t-10">
            <div class="card ">
                <div class="card-body mt-4  ">
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
                    <h4 class="card-title"> <a href="<?php echo base_url(); ?>index.php/add_subject"> <button type="button" class="btn waves-effect waves-light btn-rounded btn-info"> Add Subject </button></a>
                    </h4>
                    <h4 class="card-subtitle">All Subjects </h4>
                    <div class="table-responsive m-t-40">

                        <div class="row">
                            <div class="col-sm-12">

                                <table id="example" class="table display table-bordered table-striped">
                                    <thead>
                                        <tr role="row">
                                            <th>S No.</th>
                                            <th>Subject Name</th>
                                            <th>Added On</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr role="row" class="odd">
                                            <?php $i = 1;
                                            if (!empty($category)) {


                                                foreach ($category as $class) { ?>
                                        <tr>


                                            <td><?php echo $i++; ?></td>
                                            <td><?php echo $class->subject_name; ?></td>
                                            <td><span class="text-muted"><i class="fa fa-clock-o"></i><?php echo $class->date; ?></span> </td>


                                            <td class="actions">

                                                <a class="detail-icon" href="<?php echo base_url(); ?>index.php/get_subject?subject_id=<?php echo $class->subject_id; ?>"> <i class="fa fas fa-plus-circle"></i> </a>

                                                <a class="remove" href="<?php echo base_url(); ?>index.php/delete_subject?subject_id=<?php echo $class->subject_id; ?>" onclick="return confirm('Are you sure ?')" class="on-default remove-row"><i class="fas fa-trash"></i></a>
                                            </td>
                                        </tr>
                                    <?php }
                                            } else {  ?>
                                    <tr>
                                        <td colspan="2"> records not found</td>
                                    </tr>
                                <?php } ?>
                                </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>