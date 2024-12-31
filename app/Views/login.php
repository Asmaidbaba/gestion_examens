<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page Login</title>
    <!-- Lien vers le CSS -->
    <link rel="stylesheet" href="css/login.css">
    <!-- Boxicons pour les icônes -->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
</head>
<body>
    <div class="wrapper">
        <form action="#">
            <h1>Login</h1>
            <div class="input-box">
                <input type="email" placeholder="Email" required>
                <i class='bx bxs-user'></i>           
            </div>
            <div class="input-box">
                <input type="password" placeholder="Mot de passe" required>
                <i class='bx bxs-lock-alt'></i>
            </div>
            <div class="remember-forgot">
                <label><input type="checkbox"> Se souvenir de moi</label>
                <a href="#">Mot de passe oublié ?</a>
            </div>
            <button type="submit" class="btn">Se connecter</button>
            <div class="register-link">
                <p>Vous n'avez pas encore de compte ?</p>
                <a href="register.html">Inscrivez-vous</a>
            </div>
        </form>
    </div>
</body>
</html>
