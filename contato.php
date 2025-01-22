<?php
header('Content-Type: application/json');
require_once "config/database.php";

try {
    // Verificar se é uma requisição POST
    if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
        throw new Exception('Método não permitido');
    }

    // Receber e sanitizar dados do formulário
    $nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
    $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
    $telefone = filter_input(INPUT_POST, 'telefone', FILTER_SANITIZE_STRING);
    $mensagem = filter_input(INPUT_POST, 'mensagem', FILTER_SANITIZE_STRING);

    // Validar dados
    if (!$nome || !$email || !$telefone || !$mensagem) {
        throw new Exception('Todos os campos são obrigatórios');
    }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        throw new Exception('E-mail inválido');
    }

    // Conectar ao banco de dados
    $database = new Database();
    $db = $database->getConnection();

    // Preparar query
    $query = "INSERT INTO contatos (nome, email, telefone, mensagem, data_envio) 
              VALUES (:nome, :email, :telefone, :mensagem, NOW())";

    $stmt = $db->prepare($query);

    // Bind dos parâmetros
    $stmt->bindParam(":nome", $nome);
    $stmt->bindParam(":email", $email);
    $stmt->bindParam(":telefone", $telefone);
    $stmt->bindParam(":mensagem", $mensagem);

    // Executar query
    if ($stmt->execute()) {
        echo json_encode([
            "success" => true,
            "message" => "Mensagem enviada com sucesso!"
        ]);
    } else {
        throw new Exception('Erro ao enviar mensagem');
    }
} catch (Exception $e) {
    http_response_code(400);
    echo json_encode([
        "success" => false,
        "message" => $e->getMessage()
    ]);
}
