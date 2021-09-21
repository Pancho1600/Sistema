<!DOCTYPE html>
<html>
   <!--HEAD-->
   <?=$this->load->view('includes/head','',TRUE)?>
   <!--HEAD-->
    <body class="fixed-left">
        <!-- Begin page -->
        <div id="wrapper">

            <!-- Top Bar Start -->
            <div class="topbar">

                <!-- LOGO -->
                <?=$this->load->view('includes/logo','',TRUE)?>
                <!-- LOGO -->

                <!-- Button mobile view to collapse sidebar menu -->
                <?=$this->load->view('includes/buttonMobile','',TRUE)?>
                <!-- Button mobile view to collapse sidebar menu -->
            </div>
            <!-- Top Bar End -->


            <!-- ========== Left Sidebar Start ========== -->

            <?=$this->load->view('includes/menuLeft','',TRUE)?>
            <!-- Left Sidebar End -->

            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
           
            <?=$this->load->view('includes/contentRight','',TRUE)?>

            <!-- ============================================================== -->
            <!-- End Right content here -->
            <!-- ============================================================== -->


            <!-- Right Sidebar -->
            <?=$this->load->view('includes/sidebarRight','',TRUE)?>
            <!-- /Right-bar -->

        </div>
        <!-- END wrapper -->

        <!--Base_Js-->
        <?=$this->load->view('includes/base_js','',TRUE)?>

    </body>
 </html>