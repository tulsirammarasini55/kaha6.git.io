<?php
include 'header.php';
?>
<div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Article Addition</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                           Article Add Elements
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-7">
                                    <form role="form" method="post" action="articleprocess.php" enctype="multipart/form-data">

                                        <div class="form-group">
                                            <label>Date</label>
                                            <input type="date" class="form-control" placeholder="Enter date here......" name="date">
                    </div>

                    <div class="form-group">
                                            <label>Article's Title</label>
                                            <input type="text" class="form-control" placeholder="Enter title....." name="title">
                    </div>

                                        <div class="form-group">
                                            <label>Article Desired For</label>
                                            <select name="articletype" class="form-control">
                                                <option>Introduction</option>
                                                <option>About Us</option>
                                                <option>Mission</option>
                                                <option>Vision</option>
                                                <option>StatGoal</option>
                                                <option>Why SGBC</option>
                                                <option>Statistics</option>
                                                <option>Scolar provision</option>
                                                <option>Organisational Structure</option>
                                            </select>
                                        </div>


                                        <div class="form-group">
                                            <label>Content</label>
                                            <textarea type="text" class="form-control" name="textarea"></textarea>
                      <script>
                        CKEDITOR.replace('textarea');
                      </script>
                                        </div>

                                        <div class="form-group">
                                            <label>File input</label>
                                            <input type="file" name="fileorimages">
                                        </div>

                                        <button type="submit" class="btn btn-success">Submit</button>
                                        <button type="reset" class="btn btn-primary">Reset</button>
                                    </form>
                                </div>
                            </div>
                            <!-- /.row (nested) -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="../vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="../vendor/metisMenu/metisMenu.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="../dist/js/sb-admin-2.js"></script>

</body>

</html>
