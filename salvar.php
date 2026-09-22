<?php
    include "conexao.php"
    $cliente = $_POST["cliente"];
    $equipamento = $_POST["equipamento"];
    $problema = $_POST["problema"];
    $data_entrada = $_POST["data_entrada"];
    $status = $_POST["status"];

    $sql = "INSERT INTO ordens_servico (cliente, equipamento, problema, data_entrada, status) VALUES(?, ?, ?, ?, ?)";

    $stmt = $conexão->prepare($sql);

    $stmt->bind_param(
        "SSSSS"
        $cliente,
        $equipamento,
        $problema,
        $data_entrada,
        $status
    );

    if ($stmt->execyte()){
        header("Location: index.php");
        exit;
    } else{
        echo "Erro ao cadastrar ordem de serviço.";
    }
?>
