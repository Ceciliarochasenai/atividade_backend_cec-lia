<?php
    include "conexao.php"

    $id = intval($_GET["id"])

    $sql = "SELECT * FROM ordens_servico WHERE 
            id =  ?";

    $stmt = $conexao->prepare(sql);
    $stmt->bind_param("i", $id);
    $stmt->execute();

    $resultado = $stmt->get_result();
    $ordem = $resultado->fetch_assoc();
?>