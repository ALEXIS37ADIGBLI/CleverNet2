<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion à CleverNet</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f8ff; /* Bleu clair */
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .login-container {
            background-color: #ffffff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            width: 300px;
        }
        .login-form {
            display: flex;
            flex-direction: column;
        }
        .form-input {
            margin-bottom: 15px;
        }
        .form-input label {
            font-weight: bold;
            margin-bottom: 5px;
        }
        .form-input input {
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 14px;
        }
        .form-input input:focus {
            outline: none;
            border-color: #0074d9; /* Bleu vif */
        }
        .login-button {
            background-color: #0074d9;
            color: #ffffff;
            border: none;
            border-radius: 5px;
            padding: 10px;
            cursor: pointer;
            font-size: 16px;
        }
        .login-button:hover {
            background-color: #005ea6;
        }
        .create-account {
            text-align: center;
            margin-top: 20px;
        }
        .create-account a {
            color: #0074d9; /* Bleu vif */
            text-decoration: none;
        }
    </style>
</head>
<body>
    <div class="login-container">
        <h1>Connexion à CleverNet</h1>
        <form class="login-form">
            <div class="form-input">
                <label for="username">Nom d'utilisateur</label>
                <input type="text" id="username" name="username" placeholder="Entrez votre nom d'utilisateur" required>
            </div>
            <div class="form-input">
                <label for="password">Mot de passe</label>
                <input type="password" id="password" name="password" placeholder="Entrez votre mot de passe" required>
            </div>
            <button class="login-button" type="submit">Se connecter</button>
        </form>
        <div class="create-account">
            <p>Pas encore de compte ? <a href="inscription.php">Créer un compte CleverNet</a></p>
        </div>
    </div>
</body>
</html>
