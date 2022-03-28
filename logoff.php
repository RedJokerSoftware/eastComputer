<?php
    session_start();
    // encerrar secao
    if(session_destroy()) {
        // voltar para index
        header("Location: index.php");
    }
?>