﻿<?php include("../../includes/config.php");?>
<!DOCTYPE html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    

    <title>Cadastro de Editoras</title>

    <?php echo js; ?>
    <?php include (headers); ?>
  </head>
  <body>

    <?php include (topo); ?>
  
 <div class="container">
  <div class="row">
    <h1>Editoras</h1>
    <div class="col-md-2">
    <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#modalEditora">Cadastrar Editoras</a> 
   </div>
  
  <div class="container-fluid">
            <div class="col-sm-6">
            <div class="col-sm-12" id="lista_editoras">
              
              <?php include "lista_editoras.php"; ?>

            </div>

           </div>
        </div>
    </div>
  </div>  
  


<!-- Modal Login-->
<div class="modal fade" id="modalEditora" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Cadastro de editora</h4>
      </div>
      <div class="modal-body">
        
          
            <div class="row">
              <div class="col-sm-8 col-sm-offset-2">

        
            
            <div class="form-group">
              <input type="text" name="editora" class="form-control" placeholder="Editora" id="editora" required>
            </div>

            <div class="form-group"> 
              <button onclick="javascript:enviaDados($('#editora').val()+'|'+'gravar','acoes_editora','retornoForm','Enviando...');" class="form-control btn btn-primary">Gravar</button>
            </div>
              
            <div id="retornoForm"></div>

         
             </div>
           </div>
        

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal" onclick="javascript:enviaDados('','lista_editoras','lista_editoras','Atualizando Lista...')" value="">Fechar</button>
       </div>
    </div>
  </div>
</div>
    





<script type="text/javascript">
  
$(document).ready(function(){

$('#modalEditora').on('shown.bs.modal', function (e) {
   $('#editora').val('');
   $("#editora").focus();
})


// modal exclui
$('#modalExclui').on('show.bs.modal', function (event) {
  var button = $(event.relatedTarget); // Button that triggered the modal
  var recipient = button.data('whatever'); // Extract info from data-* attributes
  // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
  // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
  //var modal = $(this);
  $('.btn-exclui').val(recipient);
})



$(".btn-exclui").click(function(){

$('#modalExclui').modal('hide')

});


});

</script>   
<?php include (rodape);?> 
  </body>
</html>