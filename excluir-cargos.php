<?php
include_once './include/logado.php';
include_once './include/conexao.php';
 
$id = isset($_GET['id']) ? $_GET['id'] : null;
 
if ($id) {
    $sql = "DELETE FROM cargos WHERE CargoID = $id";
   
    if ($conn->query($sql)) {
        header("Location: lista-cargos.php");
        exit();
    } else {
        echo "Erro ao excluir o cargo: " . $conn->error;
    }
} else {
    echo "ID não fornecido.";
}
?>
 
 