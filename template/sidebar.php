<?php ?>
<!-- Side Navbar -->
    <nav class="side-navbar">
      <div class="side-navbar-wrapper">
        <!-- Sidebar Header    -->
        <div class="sidenav-header d-flex align-items-center justify-content-center">
          <!-- User Info-->
          <?php
          echo '<div class="sidenav-header-inner text-center"><img src="img/'.$avatar.'.jpg" alt="person" class="img-fluid rounded-circle">'.
              //<!-- EXIBE O NOME DO USUÁRIO LOGADO NO SISTEMA -->
              '<h2 class="h5">'.$logado.'</h2><span>'.$funcao.'</span>'.
              '</div>';
          ?>
          <!-- Small Brand information, appears on minimized sidebar-->
          <div class="sidenav-header-logo"><a href="index.php" class="brand-small text-center"> <strong>M</strong><strong class="text-primary">V</strong></a></div>
        </div>
        <div class="main-menu">
          <h5 class="sidenav-heading">Menu</h5>
          <ul id="side-main-menu" class="side-menu list-unstyled">
            <li><a href="index.php"> <i class="fas fa-home"></i>Inicio</a></li>
            <li><a href="#aluno" aria-expanded="false" data-toggle="collapse"> <i class="fas fa-user-graduate"></i>Aluno </a>
              <ul id="aluno" class="collapse list-unstyled ">
                <li><a href="#">Matrícula</a></li>
                <li><a href="#">Consulta</a></li>
                <li><a href="#">Frequência</a></li>
                <li><a href="#">Documetos</a></li>
              </ul>
            </li>
            <li><a href="#funcionario" aria-expanded="false" data-toggle="collapse"> <i class="fas fa-user-tie"></i>Funcionário</a>
              <ul id="funcionario" class="collapse list-unstyled ">
                <li><a href="form-funcionario.php">Cadastro</a></li>
                <li><a href="#">Consulta</a></li>
                <li><a href="#">Ponto Mensal</a></li>
                <li><a href="#">Documetos</a></li>
              </ul>
            </li>
            <li><a href="#disciplina" aria-expanded="false" data-toggle="collapse"> <i class="fas fa-chalkboard"></i>Disciplinas</a>
              <ul id="disciplina" class="collapse list-unstyled ">
                <li><a href="#">Cadastro</a></li>
                <li><a href="#">Consulta</a></li>
                <li><a href="#">Documetos</a></li>
              </ul>
            </li>
          </ul>
        </div>
      </div>
    </nav>