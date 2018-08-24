<?php 
/* esse bloco de código em php verifica se existe a sessão, pois o usuário pode
 simplesmente não fazer o login e digitar na barra de endereço do seu navegador 
o caminho para a página principal do site (sistema), burlando assim a obrigação de 
fazer um login, com isso se ele não estiver feito o login não será criado a session, 
então ao verificar que a session não existe a página redireciona o mesmo
 para a index.php.*/
session_start();
if(($_SESSION['login']) == null and  ($_SESSION['senha']) == null)
{
  echo var_dump($_SESSION['login']);
  header('location:login.php');
}else{
  $logado = $_SESSION['nome'];
  $avatar = $_SESSION['login'];
  $funcao = $_SESSION['funcao'];
}
?>
<!-- ================================================================================================= -->
<!DOCTYPE html>
<html>

  <head>
    <?php require_once('template/header.php');?>
  </head>

  <body>

    <!-- Side Navbar -->
    <?php require_once('template/sidebar.php');?>
    
    <!-- navbar-->
    <?php require_once('template/navbar.php');?>

      <!-- Breadcrumb-->
      <div class="breadcrumb-holder">
        <div class="container-fluid">
          <ul class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.php">Inicio</a></li>
            <li class="breadcrumb-item active">Funcionário</li>
            <li class="breadcrumb-item active">Cadastro</li>
          </ul>
        </div>
      </div>

      <!-- FORMULARIO DE CADASTRO DE FUNCIONÁRIOS -->
      <section class="forms offset-sm-1">
        <div class="container-fluid">
          <header> 
                <h1 class="h3 display">Cadastro de Funcionários</h1>
          </header>

          <div class="col-lg-12" >
              <div class="card ">
                <div class="card-header d-flex align-items-center">
                  <h4>1 - Dados Pessoais</h4>
                </div>
                <div class="card-body">
                  <form class="form-horizontal">
                    <div class="form-group row">
                      <label class="col-sm-2 form-control-label">Nome</label>
                      <div class="col-sm-8">
                        <input type="text" placeholder="Nome" class="form-control">
                      </div>

                      <!-- DADOS DE NASCIMENTO -->
                      <div class="col-sm-12">
                        <div class="row">
                          <label class="col-sm-2 form-control-label">Dados de Nasc.</label>
                          <div class="col-sm-3">
                            <div class="input-group date">
                              <input type="text" class="form-control" id="data_nasc" 
                                data-mask="00/00/0000">
                                <div class="input-group-append">
                                  <span class="input-group-text"><i class="fas fa-calendar-alt"></i></span>
                                </div>
                            </div>
                          </div>                           
                          <div class="col-sm-3">
                            <input type="text" placeholder="Cidade onde nasceu" class="form-control"/>                              
                          </div>
                          <div class="col-sm-2">
                            <select name="estado" class="form-control select_selecionado">
                              <option value=""  disabled selected hidden>Estado</option>
                              <option value="AC">AC</option>
                              <option value="AL">AL</option>
                              <option value="AM">AM</option>
                              <option value="AP">AP</option>
                              <option value="BA">BA</option>
                              <option value="CE">CE</option>
                              <option value="DF">DF</option>
                              <option value="ES">ES</option>
                              <option value="GO">GO</option>
                              <option value="MA">MA</option>
                              <option value="MG">MG</option>
                              <option value="MS">MS</option>
                              <option value="MT">MT</option>
                              <option value="PA">PA</option>
                              <option value="PB">PB</option>
                              <option value="PE">PE</option>
                              <option value="PI">PI</option>
                              <option value="PR">PR</option>
                              <option value="RJ">RJ</option>
                              <option value="RN">RN</option>
                              <option value="RS">RS</option>
                              <option value="RO">RO</option>
                              <option value="RR">RR</option>
                              <option value="SC">SC</option>
                              <option value="SE">SE</option>
                              <option value="SP">SP</option>
                              <option value="TO">TO</option>
                            </select>
                          </div>                                                                                                    
                        </div>
                      </div> 

                      <!-- FILIAÇÃO -->
                      <label class="col-sm-2 form-control-label">Filiação</label>
                      <div class="col-sm-4">
                        <input type="text" placeholder="Nome do Pai..." class="form-control"/>
                      </div>
                      <div class="col-sm-4">
                        <input type="text" placeholder="Nome do Mãe..." class="form-control"/>
                      </div> 

                      <!-- SEXO E ESTADO CIVIL -->
                      <div class="col-sm-12">
                        <div class="row">
                            <label class="col-sm-2 form-control-label">Sexo</label>
                            <div class="col-sm-2">
                              <input type="radio" value="M" name="optradio"/>
                                <label class="label_radio_sexo"> &nbspMasculino </label>                                                                                     
                            </div>
                            <div class="col-sm-2 radio_sexo">
                              <input type="radio" value="F" name="optradio"/>
                                <label class="label_radio"> &nbspFeminino </label>
                            </div>
                            <div class="col-sm-3">
                              <select name="estado" class="form-control select_selecionado">
                                <option value=""  disabled selected hidden>Estado Civil</option>
                                <option value="0">Solteiro</option>
                                <option value="1">Casado(a)</option>
                                <option value="2">Separado(a)</option>
                                <option value="3">Divorciado(a)</option>
                                <option value="4">Viúvo(a)</option>
                                <option value="5">Amasiado(a)</option>                            
                              </select>
                          </div>

                          <!-- DADOS DE CONTATO -->
                          <div class="col-sm-12">
                            <div class="row">
                            <label class="col-sm-2 form-control-label">Contato</label>
                            <div class="col-sm-3">
                                <input type="text" placeholder="Telefone: (00)00000-0000" data-mask="(00)00000-0000" class="form-control"/>
                            </div>
                            <div class="col-sm-4">
                                <input type="text" placeholder="Email: login@provedor.com" class="form-control"/>
                            </div> 
                            </div>
                          </div>
                      </div>                  
                    
                      <!-- CAMPOS DO ENDEREÇO -->
                      <br/><p id="cabecalho_blocos_form">ENDEREÇO</p>
                      <div class="line"></div>                    
                      <div class="form-group row">                      
                        <div class="col-sm-12">
                          <div class="row">
                            <label class="form-control-label col-sm-2">Logradouro</label>
                            <div class="col-sm-6">
                              <input type="text" placeholder="Rua, Avenida..." class="form-control"/>
                            </div>                        
                            <div class="col-sm-2">
                              <input type="text" placeholder="Número" class="form-control"/>
                            </div>                          
                          </div>
                          <div class="row">
                            <label class="form-control-label col-sm-2">Cidade</label>
                            <div class="col-sm-5">
                              <input type="text" placeholder="Cidade" class="form-control"/>
                            </div>                            
                            <div class="col-sm-3">
                              <input type="text" placeholder="CEP: 00000-000" data-mask="00000-000" class="form-control"/>                              
                            </div>                                                   
                          </div>
                          <div class="row">
                          <label class="form-control-label col-sm-2">Bairro</label>
                            <div class="col-sm-5">
                              <input type="text" placeholder="Bairro" class="form-control"/>
                            </div>                                                     
                            <div class="col-sm-3">
                              <select name="estado" class="form-control select_selecionado">
                                <option value=""  disabled selected hidden>Estado</option>
                                <option value="AC">Acre</option>
                                <option value="AL">Alagoas</option>
                                <option value="AP">Amapá</option>
                                <option value="AM">Amazonas</option>
                                <option value="BA">Bahia</option>
                                <option value="CE">Ceará</option>
                                <option value="DF">Distrito Federal</option>
                                <option value="ES">Espírito Santo</option>
                                <option value="GO">Goiás</option>
                                <option value="MA">Maranhão</option>
                                <option value="MT">Mato Grosso</option>
                                <option value="MS">Mato Grosso do Sul</option>
                                <option value="MG">Minas Gerais</option>
                                <option value="PA">Pará</option>
                                <option value="PB">Paraíba</option>
                                <option value="PR">Paraná</option>
                                <option value="PE">Pernambuco</option>
                                <option value="PI">Piauí</option>
                                <option value="RJ">Rio de Janeiro</option>
                                <option value="RN">Rio Grande do Norte</option>
                                <option value="RS">Rio Grande do Sul</option>
                                <option value="RO">Rondônia</option>
                                <option value="RR">Roraima</option>
                                <option value="SC">Santa Catarina</option>
                                <option value="SP">São Paulo</option>
                                <option value="SE">Sergipe</option>
                                <option value="TO">Tocantins</option>
                              </select>
                            </div>                          
                          </div>
                        </div>
                      </div>
                    <!-- FIM DOS CAMPOS ENDEREÇO -->

                    <!-- CAMPOS DOCUMENTOS -->
                    <br/><p id="cabecalho_blocos_form">DOCUMENTOS</p>
                    <div class="line"></div>                    
                    <div class="form-group row">                      
                      <div class="col-sm-12">
                        <div class="row">
                          <label class="col-sm-2 form-control-label">RG.</label>
                              <div class="col-sm-3">
                                <input type="text" pattern="[0-9]+$"
                                       title="Digite apenas números"
                                       placeholder="Número" id="numerorg" class="form-control"/>                              
                              </div>
                              <div class="col-sm-2">
                                <input type="text" id="rgexp_placeholder" placeholder="Orgão Expedidor" class="form-control"/>                              
                              </div>
                              <div class="col-sm-3">
                                <div class="input-group date">
                                  <input type="text" class="form-control" id="data_expedicao" 
                                    data-mask="00/00/0000" >
                                    <div class="input-group-append">
                                      <span class="input-group-text"><i class="fas fa-calendar-alt"></i></span>
                                    </div>
                                </div>
                              </div>
                        </div>                        
                      </div>     
                    </div>
                    
                    <!-- FIM CAMPOS DOCUMENTOS -->

                    <div class="line"></div>
                    <div class="form-group row">
                      <div class="col-sm-4 offset-sm-3">
                        <button type="submit" class="btn btn-secondary">Cancel&nbsp&nbsp</button>
                        <button type="submit" class="btn btn-primary">Próximo</button>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
          </div>
        </div>
      </section>

    <!-- FOOTER -->
    <?php require_once('template/footer.php');?>

    <script type="text/javascript">
    // ================= Placeholder campos DATA.==================
			$('#data_expedicao,#data_nasc').datepicker({	
				format: "dd/mm/yyyy",	
				language: "pt-BR",
				endDate: "3d"
      });
      $('#data_expedicao').attr("placeholder","Data de expedição");
      $('#data_nasc').attr("placeholder","Data de nascimento");
      //===========================================================
      
      var input = document.getElementById('numerorg');
      input.oninvalid = function(event) {
        event.target.
        event.target.setCustomValidity('Digite apenas números');
      }
		</script>
  </body>
  
</html>
