<div class="page-wrapper" style="min-height: 724px;">

    <div class="container-fluid mt-4">

        <div class="col-md-12">

            <div class="card card-body">
                <h3 class="box-title m-b-0"> Add Class</h3>
                <p class="text-muted m-b-30 font-13">
                    <?php
                    date_default_timezone_set("Asia/Kolkata");
                    echo date("Y-m-d h:i:sa"); ?>
                    </h4>
                </p>
                <form class="form-horizontal" action="<?= base_url(); ?>index.php/check_class" method="post" >
                    <div class="form-group row">

                        <input type="hidden" name="date" value="<?php
                                                                date_default_timezone_set("Asia/Kolkata");
                                                                echo date("Y-M-D h:i:sa"); ?>  ">
                        <label for="example-text-input" class="col-sm-2 col-form-label"> Class Name*</label>
                        <div class="col-sm-4">
                            <input class="form-control" required type="text" placeholder="Enter Class Name" name="class_name">
                          
                        </div>

                    </div>
                  


                    <div class="form-group m-b-0">
                        <div class="offset-sm-3 col-sm-9">
                            <button type="submit" id="submit" class="btn btn-info waves-effect waves-light m-t-10">Add </button>

                            <button class="btn btn-info waves-effect waves-light btn-danger m-t-10"> <a href="<?= base_url(); ?>index.php/class_master " style="color: white;"> Cancel</a> </button>

                        </div>
                    </div>
                    <div class="form-group m-b-0">

                    </div>
                </form>

            </div>
        </div>

    </div>

</div>