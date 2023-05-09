<!DOCTYPE html>
<html>
<head>
    <title>Exemplo de login com senha criptografada</title>
</head>
<body>
    <h1>Login</h1>
    <form method="post" action="testeaction.php">
        <label for="password">Senha digitar:</label>
        <input type="text" id="password" name="password" required><hr>
        <label for="password">Senha hash:</label>
        <input type="text" id="loginPassword" name="loginPassword" required>

        <button type="submit">Enviar</button>
    </form>
</body>
</html>
