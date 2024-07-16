                </div>
                <!-- /.container-fluid -->
            </div>
            <!-- /#page-wrapper -->

        </div>
        <!-- /#wrapper -->

        <!-- jQuery -->
        <script src="<?=BASEURL ?>asset/js/jquery.min.js"></script>

        <!-- Bootstrap Core JavaScript -->
        <script src="<?=BASEURL ?>asset/js/bootstrap.min.js"></script>

        <!-- Metis Menu Plugin JavaScript -->
        <script src="<?=BASEURL ?>asset/js/metisMenu.min.js"></script>

        <!-- Morris Charts JavaScript -->
        <script src="<?=BASEURL ?>asset/js/raphael.min.js"></script>
        <script src="<?=BASEURL ?>asset/js/morris.min.js"></script>

        <!-- jika kontrollernya adalah wolcome, maka jalankan  -->
        <?php if(PAR2=='Welcome'|| PAR2==''){ ?>
            <script src="<?=BASEURL ?>asset/js/morris-data.js"></script>
        <?php }?>

        <!-- Custom Theme JavaScript -->
        <script src="<?=BASEURL ?>asset/js/startmin.js"></script>

    </body>

</html>