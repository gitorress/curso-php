<?php

    include 'cabecalho.php';

?>

<div class="div_titulo"> <h10> <i class="fas fa-address-card"></i> Especialidades </h10> </div>

Bem vindo a página de Especialidades!
</br></br>

<!-- CHAMANDO ALERT COM A SESSAO SE A SESSAO ESTIVER ATIVA -->

<?php 

    //SE EXISTIR DADOS NA SESSAO msg_execucao
    if(isset($_SESSION['msg_execucao'])){

?>
            <!-- EXIBE A SESSAO NUM ALERT BOOTSTRAP -->
            <div class="alert alert-primary" role="alert">
                <?php echo $_SESSION['msg_execucao']; ?>    
            </div>

<?php 
    
            //DEPOIS DE EXIBIR A SESSAO, LIMPA ELA
            unset($_SESSION['msg_execucao']);

    }

?>

<!-- FORM PARA CADASTRAR CONVENIO -->

<form method="POST" action="consultas/especialidade/sql_cadastrar_especialidade.php"> 
    <div class="row">
        <div class="col-4">
            <input class="form-control" type="text" name="frm_nome_especialidade" placeholder="Nome" required>
        </div> 
        <div class="col-2">
            <input class="form-control" maxlength="1" type="text" name="frm_sn_sus" placeholder="Especialidade" required>
        </div>  
        <div class="col-1">
            <button class="btn btn-primary" type="submit"> <i class="fas fa-plus"></i> </button>
        </div>      
    </div>
</form>

</br>

<table class="table table-striped table-hover">

  <!-- PRIMEIRA LINHA (TR) TITULO (TH) -->
  <tr>
      <th> Código </th>
      <th> Nome </th>
      <th> S/N SUS</th>
      <th> Ações</th>
  </tr> 

    <?php

        //BUSCANDO DADOS DO BANCO DE DADOS
        include 'consultas/especialidade/sql_consultar_especialidade.php';

        //ESSE INCLUDE VAI ALIMENTAR A VARIAVEL $resultado_convenios
        //COM TODOS OS DADOS DOS CONVENIOS

        //EXIBINDO OS RESULTADOS POR LINHA
        while($row_espc = mysqli_fetch_assoc($resultado_especialidade)) {

    ?>
            <!--CONTEUDO-->
            <tr>
              <td> <?php echo $row_espc['cd_especialidade']; ?> </td>
              <td> <?php echo $row_espc['nm_especialidade']; ?> </td>
              <td> <?php echo $row_espc['sn_sus']; ?> </td>
              
          
              <form method="POST" action="consultas/especialidade/sql_excluir_especialidade.php"> 
                <input class="form-control" type="number" value="<?php echo $row_espc['cd_especialidade']; ?>" name="frm_cd_especialidade" hidden>

                <td> <button class="btn btn-primary" type="submit"><i class="fas fa-trash"></i> </button> </td>  
                </form>
            </tr>


   <?php } ?>  
  
</table>

<?php

include 'rodape.php';

?>