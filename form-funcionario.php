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
                <div class="col-sm-12">
                  <div class="card-header d-flex align-items-center">
                      <h4>1 - Dados Pessoais</h4>
                      <span class="topright">                        
                      <ul class="pagination pagination-sm">                        
                        <li class="page-item active "><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item"><a class="page-link" href="#">Próximo</a></li
                      </ul>  
                      </span>                     
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
                      <div class="form-group row has-success has-danger">                      
                        <div class="col-sm-12">
                          <div class="row">
                            <label class="form-control-label col-sm-2">Endereço</label>
                            <div class="col-sm-3">
                              <input type="text" id="cep" name="cep" placeholder="CEP: 00000-000" 
                                      data-mask="00000-000" class="form-control"/>                                    
                                      <div class="invalid-feedback inner-addon left-addon">CEP não encontrado.</div>
                                      
                            </div>
                            
                            <div class="col-sm-5">
                              <input type="text" id="cidade" name= "cidade" placeholder="Cidade" class="form-control"/>
                            </div>                                                                           
                          </div>
                          <div class="row">
                            <label class="form-control-label col-sm-2"></label>
                            <div class="col-sm-6">
                              <input type="text" id="rua" name="rua" placeholder="Logradouro: Rua, Avenida..." class="form-control"/>
                            </div>                        
                            <div class="col-sm-2">
                              <input type="text" id="numero" name="numero" placeholder="Número" class="form-control"/>
                            </div>                          
                          </div>                          
                          <div class="row">
                          <label class="form-control-label col-sm-2"></label>
                            <div class="col-sm-5">
                              <input type="text" id="bairro" name="bairro" placeholder="Bairro" class="form-control"/>
                            </div>                                                     
                            <div class="col-sm-3">
                              <select id="uf_endereco" name="uf_endereco" class="form-control select_selecionado">
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
                                <input type="text" onkeypress="return isNumberKey(event);"
                                       data-toggle="tooltip" data-placement="bottom" title="Digite apenas números"                                       
                                       placeholder="Número" id="numerorg" class="form-control"/>                              
                              </div>
                              <div class="col-sm-4">
                                <select name="estado" class="form-control select_selecionado"
                                  data-toggle="tooltip" data-placement="bottom" title="SSP, ITEP">
                                  <option value=""  disabled selected hidden>Orgão Expedidor.</option>
                                  <option value="SSP">SSP - Secretaria de Segurança Pública</option>
                                  <option value="ITEP">ITEP - Instituto Técnico-Científico de Perícia</option>
                                  <option value="ABNC">ABNC – Academia Brasileira de Neurocirurgia</option>
                                  <option value="CGPI/DUREX/DP">CGPI/DUREX/DPF – Coordenação Geral de Polícia de Imigração da Polícia Federal</option>
                                  <option value="CGPI">CGPI – Coordenação-Geral de Privilégios e Imunidades</option>
                                  <option value="CGPMAF">CGPMAF – Coordenadoria Geral de Polícia Marítima, Aeronáutica e de Fronteiras</option>
                                  <option value="CNIG">CNIG – Conselho Nacional de Imigração</option>
                                  <option value="CNT">CNT - Carteira Nacional de Habilitação</option>
                                  <option value="COREN">COREN – Conselho Regional de Enfermagem</option>
                                  <option value="CRA">CRA – Conselho Regional de Administração</option>
                                  <option value="CRAS">CRAS – Conselho Regional de Assistentes Sociais</option>
                                  <option value="CRB">CRB – Conselho Regional de Biblioteconomia</option>
                                  <option value="CRC">CRC – Conselho Regional de Contabilidade</option>
                                  <option value="CRE">CRE – Conselho Regional de Estatística</option>
                                  <option value="CREA">CREA – Conselho Regional de Engenharia Arquitetura e Agronomia</option>
                                  <option value="CRECI">CRECI – Conselho Regional de Corretores de Imóveis</option>
                                  <option value="CREFIT">CREFIT – Conselho Regional de Fisioterapia e Terapia Ocupacional</option>
                                  <option value="CRF">CRF – Conselho Regional de Farmácia</option>
                                  <option value="CRM">CRM – Conselho Regional de Medicina</option>
                                  <option value="CRN">CRN – Conselho Regional de Nutrição</option>
                                  <option value="CRO">CRO – Conselho Regional de Odontologia</option>
                                  <option value="CRP">CRP – Conselho Regional de Psicologia</option>
                                  <option value="CRPRE">CRPRE – Conselho Regional de Profissionais de Relações Públicas</option>
                                  <option value="CRQ">CRQ – Conselho Regional de Química</option>
                                  <option value="CRRC">CRRC – Conselho Regional de Representantes Comerciais</option>
                                  <option value="CRMV">CRMV – Conselho Regional de Medicina Veterinária</option>
                                  <option value="CDC">CSC - Carteira Sede Carpina de Pernambuco</option>
                                  <option value="CTPS">CTPS – Carteira de Trabalho e Previdência Social</option>
                                  <option value="DIC">DIC - Diretoria de Identificação Civil</option>
                                  <option value="DIREX">DIREX – Diretoria-Executiva</option>
                                  <option value="DPMAF">DPMAF – Divisão de Polícia Marítima, Área e de Fronteiras</option>
                                  <option value="DPT">DPT – Departamento de Polícia Técnica Geral</option>
                                  <option value="DST">DST – Programa Municipal DST/Aids</option>
                                  <option value="FGTS">FGTS - Fundo de Garantia do Tempo de Serviço</option>
                                  <option value="FIPE">FIPE – Fundação Instituto de Pesquisas Econômicas</option>
                                  <option value="FLS">FLS - Fundação Lyndolpho Silva</option>
                                  <option value="GOVGO">GOVGO - Governo do Estado de Goiás</option>
                                  <option value="CLA">I CLA – Carteira de Identidade Classista</option>
                                  <option value="IFP">IFP - Instituto Félix Pacheco</option>
                                  <option value="IGP">IGP – Instituto Geral de Perícias</option>
                                  <option value="IICCECF/RO">IICCECF/RO - Instituto de Identificação Civil e Criminal Engrácia da Costa Francisco de Rondônia</option>
                                  <option value="IIMG">IIMG - Inter-institutional Monitoring Group</option>
                                  <option value="IML">IML – Instituto Médico-Legal</option>
                                  <option value="IPC">IPC - Índice de Preços ao Consumidor</option>
                                  <option value="IPF">IPF - Instituto Pereira Faustino</option>
                                  <option value="MAE">MAE - Ministério da Aeronáutica</option>
                                  <option value="MEX">MEX - Ministério do Exército</option>
                                  <option value="MMA">MMA - Ministério da Marinha</option>
                                  <option value="OAB">OAB – Ordem dos Advogados do Brasil</option>
                                  <option value="OMB">OMB – Ordens dos Músicos do Brasil</option>
                                  <option value="PCMG">PCMG - Policia Civil do Estado de Minas Gerais</option>
                                  <option value="PMMG">PMMG – Polícia Militar do Estado de Minas Gerais</option>
                                  <option value="DPF">POF ou DPF - Polícia Federal</option>
                                  <option value="POM">POM - Polícia Militar</option>
                                  <option value="SDS">SDS – Secretaria de Defesa Social (Pernambuco)</option>
                                  <option value="SNJ">SNJ – Secretaria Nacional de Justiça / Departamento de Estrangeiros</option>
                                  <option value="SECC">SECC – Secretaria de Estado da Casa Civil</option>
                                  <option value="SEJUSP">SEJUSP - Secretaria de Estado de Justiça e Segurança Pública – Mato Grosso</option>
                                  <option value="EST">SES ou EST - Carteira de Estrangeiro</option>
                                  <option value="SESP">SESP – Secretaria de Estado da Segurança Pública do Paraná</option>
                                  <option value="SJS">SJS – Secretaria da Justiça e Segurança</option>
                                  <option value="SJTC">SJTC – Secretaria da Justiça do Trabalho e Cidadania</option>
                                  <option value="SJTS">SJTS – Secretaria da Justiça do Trabalho e Segurança</option>
                                  <option value="SPTC">SPTC - Secretaria de Polícia Técnico-Científica</option>                                 
                                </select>                              
                              </div>                                                   
                        </div>
                        <div class="row">
                        <label class="col-sm-2 form-control-label"></label>
                          <div class="col-sm-3">
                            <div class="input-group date">
                              <input type="text" class="form-control" id="data_expedicao" 
                                data-mask="00/00/0000" />
                                <div class="input-group-append">
                                  <span class="input-group-text"><i class="fas fa-calendar-alt"></i></span>
                                </div>
                            </div>
                          </div>
                          <div class="col-sm-4">
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
      // ================= Placeholder campos DATA.=================
			$('#data_expedicao,#data_nasc').datepicker({	
				format: "dd/mm/yyyy",	
				language: "pt-BR",
				endDate: "3d"
      });
      $('#data_expedicao').attr("placeholder","Data de expedição");
      $('#data_nasc').attr("placeholder","Data de nascimento");
      // ===========================================================
      
      // ===================== Tooltips INPUTS.=====================
      function isNumberKey(evt)
      {
         var charCode = (evt.which) ? evt.which : event.keyCode
         if (charCode > 31 && (charCode < 48 || charCode > 57))
            return false;

         return true;
      }
      
      $(document).ready(function(){
          $('[data-toggle="tooltip"]').tooltip();
      });      
      // ===========================================================

      // =================== TEXTO PARA MAIÚSCULAS.=================
      function upperCase(a){
        setTimeout(function(){
          a.value = a.value.toUpperCase();
        }, 1);
      }
      // ===========================================================

      // ===================== VIA CEP API =========================
      $(document).ready(function() {

      function limpa_formulário_cep() {
          // Limpa valores do formulário de cep.
          $("#rua").val("");
          $("#bairro").val("");
          $("#cidade").val("");
          $("#uf_endereco").val("");
          $("#ibge").val("");
      }

      //Quando o campo cep perde o foco.      
      $("#cep").keyup(function() {

          //Nova variável "cep" somente com dígitos.
          var cep = $(this).val().replace(/\D/g, '');

          //Verifica se campo cep possui valor informado.
          if (cep != "") {

              //Expressão regular para validar o CEP.
              var validacep = /^[0-9]{8}$/;

              //Valida o formato do CEP.
              if(validacep.test(cep)) {              

                  //Consulta o webservice viacep.com.br/
                  $.getJSON("https://viacep.com.br/ws/"+ cep +"/json/?callback=?", function(dados) {

                      if (!("erro" in dados) && (cep.length >= 8)) {
                          //Atualiza os campos com os valores da consulta.
                          $('#cep').attr('class','form-control is-valid');
                          $("#rua").val(dados.logradouro);
                          $("#bairro").val(dados.bairro);
                          $("#cidade").val(dados.localidade);
                          $("#uf_endereco").val(dados.uf);
                          $("#ibge").val(dados.ibge);  
                          
                      } //end if.
                      else if(cep.length >= 8){
                          //CEP pesquisado não foi encontrado.
                          limpa_formulário_cep();                          
                            $('#cep').attr('class','form-control is-invalid');                          
                      }
                  });
              } //end if.
              else if(cep.length >= 8) {
                  //cep é inválido.
                  limpa_formulário_cep();
                  alert("Formato de CEP inválido.");
              }
          } //end if.
          else {
              //cep sem valor, limpa formulário.
              limpa_formulário_cep();
          }
          
      });      
    });
		</script>
  </body>
  
</html>
