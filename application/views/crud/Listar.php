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
				<div class="content">
					<div class="container">

						<!-- Page-Title -->
						<div class="row">
							<div class="col-sm-12">
								<h4 class="page-title">LISTA PRODUCTOS</h4>
								<ol class="breadcrumb">
									<li>
										<a href="#">Ubold</a>
									</li>
									<li>
										<a href="#">Tables</a>
									</li>
									<li class="active">
										Datatable
									</li>
								</ol>
							</div>
						</div>
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="card-box">
                                    <div id="datatable_wrapper" class="dataTables_wrapper form-inline dt-bootstrap no-footer">
                                        <div class="row">
                                            <div class="col-sm-6"><div class="dataTables_length" id="datatable_length">
                                                <label>
                                                    Show 
                                                    <select name="datatable_length" aria-controls="datatable" class="form-control input-sm">
                                                        <option value="10">10</option>
                                                        <option value="25">25</option>
                                                        <option value="50">50</option>
                                                        <option value="100">100</option>
                                                    </select> 
                                                    entries
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div id="datatable_filter" class="dataTables_filter">
                                                    <label>
                                                        <form action="" data-parsley-validate="" novalidate="" method="post">
                                                        Buscar producto:
                                                        <input name ="buscar" type="search" class="form-control input-sm" placeholder="" aria-controls="datatable">
                                                        <button class="btn btn-primary waves-effect waves-light" type="submit">
                                                            Buscar
                                                        </button>
                                                        </form>
                                                    </label>
                                                </div>                                               
                                        </div>
                                        <label>
                                            <a class="btn btn-primary waves-effect waves-light" href="<?= base_url('index.php/SistemaController/Agregar')?>">Agregar Producto</a>
                                        </label>
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <table id="datatable" class="table table-striped table-bordered dataTable no-footer" role="grid" aria-describedby="datatable_info">
                                            <thead>
                                                <tr role="row"><th class="sorting_asc" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending" style="width: 50px;">
                                                    ID
                                                </th>
                                                <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" style="width: 100px;">
                                                    Nombre
                                                </th>
                                                <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" style="width: 100px;">
                                                    Cantidad
                                                </th>
                                                <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-label="Age: activate to sort column ascending" style="width: 100px;">
                                                    Categoria
                                                </th>
                                                <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending" style="width: 78px;">
                                                    Modificar
                                                </th>
                                                <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending" style="width: 78px;">
                                                    Eliminar
                                                </th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <?php foreach ($producto1 as $key => $producto){?>  
                                            <tr role="row" class="odd">
                                                <td class="sorting_1"><?=$producto->idProducto?></td>                                               
                                                <td><?=$producto->Nombre?></td>
                                                <td><?=$producto->Cantidad?></td>
                                                <?php
                                                    foreach ($categoria1 as $key => $categoria){
                                                        if($producto->idCategoria == $categoria->idCategoria){?>
                                                            <td><?=$categoria->NombreCat?></td>
                                                        <?php }
                                                    }
                                                ?>
                                                <td><a href="<?= base_url('index.php/SistemaController/Editar')?>/<?=$producto->idProducto?>">Editar</a></td>
                                                <td><a href="<?= base_url('index.php/SistemaController/Eliminar')?>/<?=$producto->idProducto?>">Eliminar</a></td>
                                            </tr>                                               
                                            <?php } ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="dataTables_info" id="datatable_info" role="status" aria-live="polite">
                                            Showing 1 to 10 of 57 entries
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="dataTables_paginate paging_simple_numbers" id="datatable_paginate">
                                            <ul class="pagination">
                                                <li class="paginate_button previous disabled" aria-controls="datatable" tabindex="0" id="datatable_previous">
                                                    <a href="#">Previous</a>
                                                </li>
                                                <li class="paginate_button active" aria-controls="datatable" tabindex="0">
                                                    <a href="#">1</a>
                                                </li>
                                                <li class="paginate_button " aria-controls="datatable" tabindex="0">
                                                    <a href="#">2</a>
                                                </li>
                                                <li class="paginate_button " aria-controls="datatable" tabindex="0">
                                                    <a href="#">3</a>
                                                </li>
                                                <li class="paginate_button " aria-controls="datatable" tabindex="0">
                                                    <a href="#">4</a>
                                                </li>
                                                <li class="paginate_button " aria-controls="datatable" tabindex="0">
                                                    <a href="#">5</a>
                                                </li>
                                                <li class="paginate_button " aria-controls="datatable" tabindex="0">
                                                    <a href="#">6</a>
                                                </li>
                                                <li class="paginate_button next" aria-controls="datatable" tabindex="0" id="datatable_next">
                                                    <a href="#">Next</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> <!-- container -->                              
            </div> <!-- content -->

                <footer class="footer">
                    2015 © Ubold.
                </footer>

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