<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Relatório empresas e setores</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

    <!-- Custom styles for this page -->
    <link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

    

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <?php include "sidebar.php"; ?>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <?php include "topbar.php"; ?>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <!-- <h1 class="h3 mb-2 text-gray-800">Empresas</h1> -->


                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Empresas/Setores</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th style="width: 75px;">Id empresa</th>
                                            <th>Empresa</th>
                                            <th style="width: 75px;">Id setor</th>
                                            <th>Setor</th>
                                            <th style="width: 75px;">Editar/Excluir</th>
                                            <!-- <th>Start date</th>
                                            <th>Salary</th> -->
                                        </tr>
                                    </thead>
                                    <!-- <tfoot>
                                        <tr>
                                            <th>Name</th>
                                            <th>Position</th>
                                            <th>Office</th>
                                            <th>Age</th>
                                            <th>Start date</th>
                                            <th>Salary</th>
                                        </tr>
                                    </tfoot> -->
                                    <tbody>

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; suaempresa.com 2024</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="login.html">Logout</a>
                </div>
            </div>
        </div>
    </div>


    <!-- Modal dinâmica -->
    <div class="modal fade" id="campos_modal" tabindex="-1" role="dialog" aria-labelledby="campos_modal" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="campos_modal">Aviso</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal" id="okBotao">Fechar</button>
            </div>
          </div>
        </div>
    </div>

    <!-- Confirm Modal-->
    <div class="modal fade" id="confirm_modal" tabindex="-1" role="dialog" aria-labelledby="confirm_modal" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="confirm_modal">Aviso</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
                Confirma a exclusão do registro ?
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
              <button type="button" class="btn btn-primary" id="confirmarBotao">Confirmar</button>
            </div>
          </div>
        </div>
    </div>


    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/datatables-demo.js"></script>

    <!-- Arquivo de config base_url -->
    <script src="js/config.js"></script>

    <script>

        $(document).ready(function() {

            // CONSTANTES PARA API
            const baseUrlApi = Config.baseUrlApi;
            const baseUrl = Config.baseUrl;

            $.ajax({
                url: baseUrlApi + "/empresa-setores",
                type: 'GET',
                dataType: 'json',
                success: function(response) {
                    if(response.status === 'SUCCESS') {
                        //$('#dataTable tbody').empty();
                        $('#dataTable').DataTable().destroy();
                        var data = response.data;
                        var tableBody = $('#dataTable tbody');
                        
                        data.forEach(function(object) {
                            var row = $('<tr>');
                            row.append('<td>' + object.empresa_id + '</td>');
                            row.append('<td>' + object.razao_social + '</td>');
                            row.append('<td>' + object.setor_id + '</td>');
                            row.append('<td>' + object.descricao + '</td>');

                            // Adicione as colunas com os botões "Editar" e "Excluir"
                            var editIcon = '<a href="#" class="btn btn-info btn-circle btn-sm mr-1 btn-editar" data-empresa-id="' + object.empresa_id + '" data-setor-id="' + object.setor_id + '"><i class="fas fa-pencil-alt"></i></a>';
                            var deleteIcon = '<a href="#" class="btn btn-danger btn-circle btn-sm ml-1 btn-excluir" data-empresa-id="' + object.empresa_id + '" data-setor-id="' + object.setor_id + '"><i class="fas fa-trash"></i></a>';
                            var actionsColumn = $('<td>').append(editIcon).append(deleteIcon);
                            row.append(actionsColumn);

                            tableBody.append(row);
                        });

                        // Inicialização do DataTables
                        $('#dataTable').DataTable();

                        // Adicionar evento de clique para o botão "Editar"
                        $('#dataTable').on('click', '.btn-editar', function(event) {
                            event.preventDefault();
                            let empresaId = $(this).data('empresa-id');
                            let setorId = $(this).data('setor-id');
                            window.location.href = '/editar-empresa-setor.php?empresa_id=' + empresaId + '&setor_id=' + setorId;
                        });



                        // Adicionar evento de clique para o botão "Excluir"
                        $('#dataTable').on('click', '.btn-excluir', function(event) {
                            event.preventDefault();

                            empresaId = $(this).data('empresa-id');
                            setorId = $(this).data('setor-id');
                             
                            // Confirmação
                            $('#confirm_modal').modal('show');
                            
                            $('#confirmarBotao').click(function() { 
                                $('#confirm_modal').modal('hide');
                        

                                // Crie um objeto com os dados a serem enviados
                                var data = {
                                    empresa_id:     empresaId,
                                    setor_id:       setorId
                                };
                                
                                $.ajax({
                                    url: baseUrlApi + '/empresa-setor',
                                    type: 'DELETE',
                                    data: data,
                                    success: function(response) {
                                        if (response.status === "SUCCESS") {
                                            $('#campos_modal .modal-body').text("Exclusão realizada com sucesso !");
                                            $('#campos_modal').modal('show');

                                            $('#okBotao').click(function() {
                                                $('#campos_modal').modal('hide');
                                                $(location).attr('href', baseUrl + "/relatorio-empresa-setor.php");
                                            });
                                        }
                                    },
                                    error: function(xhr, status, error) {
                                        //console.log("Erro na requisição AJAX:", status, error);
                                        var errorMessage = xhr.responseJSON.msg;
                                        $('#campos_modal .modal-body').text(errorMessage);
                                        $('#campos_modal').modal('show');
                                    }
                                });
                            });
                        });
                    } else {
                        console.error('Erro na resposta da API:', response);
                    }
                },
                error: function(xhr, status, error) {
                    //console.error('Erro ao fazer requisição para a API:', error);
                    $('#campos_modal .modal-body').text(xhr.responseJSON.msg);
                    $('#campos_modal').modal('show');

                    $('#okBotao').click(function() {
                        $('#campos_modal').modal('hide');
                    });
                }
            });


        });

    </script>

</body>

</html>