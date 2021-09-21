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
            <div class="content-page">
                <!-- Start content -->

                <div class="container">

            <!-- Page-Title -->
            <div class="row">
                <div class="col-sm-12">
                    <h4 class="page-title">Responsive Table</h4>
                    <ol class="breadcrumb">
                        <li>
                            <a href="#">Ubold</a>
                        </li>
                        <li>
                            <a href="#">Tables</a>
                        </li>
                        <li class="active">
                            Responsive Table
                        </li>
                    </ol>
                </div>
            </div>

            <div class="col-lg-6">
				<div class="card-box">
					<h4 class="m-t-0 header-title"><b>EDITAR PRODUCTO</b></h4>
					<p class="text-muted font-13 m-b-30">
	                    Modificar datos
	                </p>
		                                        
					<form action="" data-parsley-validate="" novalidate="" method="post">
                        <div class="form-group">
							<label>Nombre*</label>
                            <input type="text" name="nombre1" parsley-trigger="change" required="" placeholder="Ingresa nombre" class="form-control" data-parsley-id="4" value="<?=$producto1->Nombre?>">
                            <label class="danger"><?=form_error('nombre1')?></label>
						</div>
                        <div class="form-group">
							<label>Cantidad*</label>
							<input type="text" name="cantidad1" parsley-trigger="change" required="" placeholder="Ingresa cantidad" class="form-control"  data-parsley-id="4" value="<?=$producto1->Cantidad?>">
                            <label class="danger"><?=form_error('cantidad1')?></label>
                        </div>
                        <div class="form-group">
							<label>Categoria*</label>
                            <select name="categoria1" aria-controls="datatable" class="form-control">
                            <?php foreach ($categoria1 as $key => $categoria){
                                    if($categoria->idCategoria != $producto1->idCategoria){ ?>
                                        <option value="<?=$categoria->idCategoria?>"><?=$categoria->NombreCat?></option>
                                        <?php }
                                    else { ?>
                                        <option value="<?=$categoria->idCategoria?>" selected='selected'><?=$categoria->NombreCat?></option>
                                    <?php } ?>
                            <?php } ?>
                            </select> 
                            <label class="danger"><?=form_error('categoria1')?></label>
                        </div>

						<div class="form-group text-right m-b-0">
							<button class="btn btn-primary waves-effect waves-light" type="submit">
								ACTUALIZAR
							</button>
						</div>
										
					</form>
				</div>
			</div>

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