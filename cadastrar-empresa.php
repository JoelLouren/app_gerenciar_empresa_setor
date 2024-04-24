<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Empresa cadastro</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

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
                    <!-- <h1 class="h3 mb-4 text-gray-800">Blank Page</h1> -->

                    <br>
                    <form class="needs-validation" novalidate="" id="cadastrarEmpresa" method="POST">
                        <div class="row">
                            <div class="col-md-12 col-sm-12">
                                <label for="razaoSocial" class="col-form-label">Razão social:</label>
                                <input type="text" class="form-control" id="razaoSocial">
                            </div>
                            <div class="col-md-12 col-sm-12">
                                <label for="nomeFantasia" class="col-form-label">Nome fantasia:</label>
                                <input type="text" class="form-control" id="nomeFantasia">
                            </div>
                            <div class="col-md-4 col-sm-12">
                                <label for="cnpj" class="col-form-label">CNPJ:</label>
                                <input type="text" class="form-control" id="cnpj">
                            </div>
                        </div>
                        <div class="row mt-4">
                            <div class="col-md-12 col-sm-12 text-center"> <!-- Centraliza os botões -->
                                <button class="btn btn-primary me-2" type="submit">Enviar</button>
                                <a class="btn btn-danger" href="listar-empresa.php" role="button">Cancelar</a>
                            </div>
                        </div>
                    </form>

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
                Salvar o os dados da empresa ?
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

    <!-- CONSTANTES -->
    <script src="js/config.js"></script>

    <!-- MASK -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js"></script>


    <script>

        const baseUrlApi = Config.baseUrlApi;
        const baseUrl = Config.baseUrl;

        $(document).ready(function() {

            $("#cnpj").mask("00.000.000/0000-00");


            $('#cadastrarEmpresa').submit(function(event) {
                event.preventDefault(); // Impede o envio padrão do formulário

                // Obtenha os valores dos campos do formulário
                var razaoSocial = $('#razaoSocial').val();
                var nomeFantasia = $('#nomeFantasia').val();
                var cnpj = $('#cnpj').val();

                // Verifique se o campo de descrição ou cnpj está vazio
                if (razaoSocial.trim() === '' || cnpj.trim() === '') {
                    $('#campos_modal .modal-body').text('Os campos "Razão social" e "CNPJ" são obrigatórios.');
                    $('#campos_modal').modal('show');
                    return;
                }

                // Validar CNPJ
                if (cnpj.replace(/[^\d]+/g,'').length < 14) {
                    $('#campos_modal .modal-body').text('Falta dígito(s) no campo "CNPJ".');
                    $('#campos_modal').modal('show');
                    return;
                }

                // Confirmação
                $('#confirm_modal').modal('show');

                $('#confirmarBotao').click(function() {
                    $('#confirm_modal').modal('hide');

                    // Crie um objeto com os dados a serem enviados
                    var data = {
                        razao_social: razaoSocial,
                        nome_fantasia: nomeFantasia,
                        cnpj: cnpj
                    };

                    // Envie a solicitação AJAX
                    $.ajax({
                        url: baseUrlApi + "/empresa",
                        type: 'POST',
                        dataType: 'json',
                        data: data,
                        success: function(response) {
                            if (response.status === "SUCCESS") {
                                $('#campos_modal .modal-body').text("Cadastro realizado com sucesso !");
                                $('#campos_modal').modal('show');

                                $('#okBotao').click(function() {
                                    $('#campos_modal').modal('hide');
                                    $(location).attr('href', baseUrl + "/listar-empresa.php");
                                });
                                
                            }
                        },
                        error: function(xhr, status, error) {
                            //console.log("Erro na requisição AJAX:", status, error);
                            var errorMessage = xhr.responseJSON.msg.errorInfo;
                            $('#campos_modal .modal-body').text(errorMessage);
                            $('#campos_modal').modal('show');

                            $('#okBotao').click(function() {
                                $('#campos_modal').modal('hide');
                            });
                        }
                    });
                });
            });
        });
    </script>

</body>

</html>