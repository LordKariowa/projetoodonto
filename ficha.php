<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Ficha</title>
</head>
<body>
   <button type="button" class="btn btn-dark">Imprimir</button>
   <input class="form-control mr-2 ml-1" type="search" name = "nome">
   <button class="btn btn-success btn-md mr-3" type="submit">Pesquisar Ficha</button>
    <table class="table table-hover table-dark">
   <button type="button" class="btn btn-primary btn-md ml-2" data-toggle="modal" data-target="#modal1">Cadastrar Paciente</button>
                <!--Modal  Tela de Cadastro-->
                <div class="modal fade" id="modal1" tabindex="-1" role="dialog" aria-labelledby="modalTitle" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h3 class="modal-title text-primary ml-5" id="modalTitle">Formulário de Cadastramento</h3>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>

                            <div class="modal-body">
                                <h5>Dados Pessoais:</h5>
                                <form class = "form-group mt-2" action="cadastraPessoa.php" method="post">
                                    <div class="form-group">
                                        <label for="cpf">CPF:</label>
                                        <input type="text" class="form-control" id="cpf" placeholder="" name = "cpf">
                                    </div>

                                    <div class="form-group">
                                        <label for="rg">RG:</label>
                                        <input type="text" class="form-control" id="rg" placeholder="" name = "rg">
                                    </div>

                                    <div class="form-group">
                                        <label for="nome">Nome:</label>
                                        <input type="text" class="form-control" id="nome" placeholder="" name = "nome">
                                    </div>

                                    <div class="form-group">
                                        <label for="orcamento">Orçamento:</label>
                                        <input type="text" class="form-control" id="orcamento" placeholder="" name = "orcamento">
                                    </div>

                                    <div class="form-group">
                                        <label for="telefone">Telefone:</label>
                                        <input type="text" class="form-control" id="telefone" placeholder="" name = "telefone">
                                    </div>

                                    <div class="form-group">
                                        <label for="celular">Celular:</label>
                                        <input type="text" class="form-control" id="celular" placeholder="" name = "celular">
                                    </div>

                                    <div class="form-group">
                                        <label for="email">Email:</label>
                                        <input type="email" class="form-control" id="email" placeholder="" name = "email">
                                    </div>								


                                    <div class="form-group">
                                        <label for="cep">CEP:</label>
                                        <input type="text" class="form-control" id="cep" placeholder="" name = "cep">
                                    </div>

                                    <div class="form-group">
                                        <label for="endereco">Endereço:</label>
                                        <input type="endereco" class="form-control" id="endereco" placeholder="" name = "endereco">
                                    </div>	

                                    <div class="form-group">
                                        <label for="complemento">Complemento:</label>
                                        <input type="text" class="form-control" id="complemento" placeholder="" name = "complemento">
                                    </div>


                                    <div class="form-group">
                                        <label for="bairro">Bairro:</label>
                                        <input type="text" class="form-control" id="bairro" placeholder="" name = "bairro">
                                    </div>

                                    <div class="form-group">
                                        <label for="nascimento">Data de Nascimento:</label>
                                        <input type="date" class="form-control" id="nascimento" placeholder="" name = "nascimento">
                                    </div>	

                                    <div class="form-group">
                                        <label for="inicio_tratamento">Inicio do Tratamento:</label>
                                        <input type="date" class="form-control" id="inicio_tratamento" placeholder="" name = "inicio_tratamento">
                                    </div>	

                                    <div class="form-group">
                                        <label for="cidade">Cidade:</label>
                                        <input type="text" class="form-control" id="cidade" placeholder="" name = "cidade">
                                    </div>

                                    <div class="form-group">
                                        <label for="uf">UF:</label>
                                        <input type="text" class="form-control" id="uf" placeholder="" name = "uf">
                                    </div>

                                    <div class="form-group">
                                        <label for="situacaoficha">Situação da Ficha:</label>
                                        <input type="text" class="form-control" id="situacaoficha" placeholder="" name = "situacaoficha">
                                    </div>

                                    <div class = "mb-2">
                                        <h5>-----------------------Anamnese---------------------</h5>
                                    </div>	

                                    <div class="form-group">
                                        <label for="data">Doenças de Base:</label>
                                        <input type="text" class="form-control" id="doencabase" placeholder="" name = "doencabase">
                                    </div>

                                    <div class="form-group">
                                        <label for="alergia">Alergias:</label>
                                        <input type="text" class="form-control" id="alergia" placeholder="" name = "alergia">
                                    </div>	

                                    <div class="form-group">
                                        <label for="medicamentos">Medicamentos:</label>
                                        <input type="text" class="form-control" id="medicamentos" placeholder="" name = "medicamentos">
                                    </div>

                                    <div class="form-group">
                                        <label for="cirurgia">Cirurgias:</label>
                                        <input type="text" class="form-control" id="cirurgia" placeholder="" name = "cirurgia">
                                    </div>

                                    <div class="form-group">
                                        <label for="internacoes">Internacões:</label>
                                        <input type="text" class="form-control" id="internacoes" placeholder="" name = "internacoes">
                                    </div>

                                    <div class="form-group">
                                        <label for="pa">P.A:</label>
                                        <input type="text" class="form-control" id="pa" placeholder="" name = "pa">
                                    </div>

                                    <div class="form-group">
                                        <label for="queixaprinc">Queixas Principais:</label>
                                        <input type="text" class="form-control" id="queixaprinc" placeholder="" name = "queixaprinc">
                                    </div>						


                                    <input type="submit" class="btn btn-primary float-right" value = "Cadastrar">
                                </form>
                            </div>
                            <div class="modal-footer">
                            </div>
                        </div>
                    </div>
                </div>
  <thead>
    <tr>
      <th scope="col">Codigo</th>
      <th scope="col">Nome</th>
      <th scope="col">Data de Nascimento</th>
      <th scope="col">E-mail</th>
      <th scope="col">Telefone</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td colspan="2">Larry the Bird</td>
      <td>@twitter</td>
    </tr>
  </tbody>
</table>
</body>
</html>