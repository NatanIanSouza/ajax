<?php

    $NOME = $_REQUEST['NOME'];
    $DATA_NASC = $_REQUEST['DATA_NASC'];
    $BEBIDA = $_REQUEST['BEBIDA'];
    $ANO = date("Y");

    $DATA_NASC = date("Y", strtotime($DATA_NASC));

    $IDADE = $ANO - $DATA_NASC;

    if(empty($NOME)){
        $dados = array(
            "tipo" => "error", 
            "mensagem" => "Existe(m) campo(s) obrigatório(s) não preenchido(s)."
        );
    }
    else{
        if($IDADE <= 17){ $dados=array(
            "tipo" => "proibido.jpg",
            "mensagem" => "Você é menor de idade, ainda NÃO pode beber! Olha sua idade aí: " .$IDADE. " anos."
        );
        }
        else { $dados=array(
            "tipo" => "liberado.jpg",
            "mensagem" => "Pode beber a vontade meu amigo, você é maior de idade, tem " .$IDADE. " anos seu véio."
        );
        }
    }

    echo json_encode($dados);