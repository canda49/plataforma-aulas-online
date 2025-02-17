<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Plataforma de Aulas Online</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    <header>
        <h1>Login</h1>
        <nav>
            <ul>
                <li><a href="../index.php">Início</a></li>
                <li><a href="register.php">Registrar</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <form action="login_process.php" method="POST">
            <label for="email">E-mail:</label>
            <input type="email" name="email" required>

            <label for="password">Senha:</label>
            <input type="password" name="password" required>

            <button type="submit">Entrar</button>
        </form>
    </main>

    <footer>
        <p>&copy; 2025 Plataforma de Aulas Online</p>
    </footer>
</body>
</html>
