<?php
  
       
        if(@$_GET['acao'] == 'usuarios'){
            include_once('usuarios.php');
        }elseif(@$_GET['acao'] == 'quemsomos'){

            include_once('pages/quemsomos.php');

        }elseif(@$_GET['acao'] == 'contato'){   
            
            include_once('pages/contato.php');

        }elseif(@$_GET['acao'] == 'localizacao'){
            
            include_once('pages/localizacao.php');

        }elseif(@$_GET['acao'] == 'bolo'){

            include_once('pages/bolos.php');

        }elseif(@$_GET['acao'] == 'churros'){

            include_once('pages/churros.php');
       
        }elseif(@$_GET['acao'] == 'musse'){

            include_once('pages/musses.php');

        }elseif(@$_GET['acao'] == 'torta'){

            include_once('pages/tortas.php');

        }

        else{
          include_once('pages/home.php');
        }

      
?>      