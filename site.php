<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>your book - Tableau de Bord</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 20px;
        }

        .container {
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(10px);
            border-radius: 20px;
            padding: 40px;
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.1);
            text-align: center;
            max-width: 450px;
            width: 100%;
        }

        .logo {
            font-size: 2.5rem;
            font-weight: bold;
            background: linear-gradient(45deg, #ff6b6b, #4ecdc4);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            margin-bottom: 10px;
        }

        .site-name {
            color: #333;
            font-size: 1.5rem;
            margin-bottom: 30px;
            font-weight: 600;
        }

        .user-info {
            background: linear-gradient(135deg, #a8edea 0%, #fed6e3 100%);
            color: #333;
            padding: 20px;
            border-radius: 15px;
            margin-bottom: 30px;
        }

        .user-name {
            font-size: 1.4rem;
            font-weight: bold;
            margin-bottom: 5px;
        }

        .user-role {
            background: #ff6b6b;
            color: white;
            padding: 5px 15px;
            border-radius: 20px;
            font-size: 0.9rem;
            display: inline-block;
        }

        h1 {
            color: #333;
            margin-bottom: 15px;
            font-size: 1.8rem;
        }

        .welcome-text {
            color: #666;
            margin-bottom: 30px;
            font-size: 1.1rem;
        }

        .stats {
            display: flex;
            justify-content: space-around;
            margin-bottom: 30px;
            gap: 10px;
        }

        .stat-card {
            background: white;
            padding: 20px;
            border-radius: 15px;
            box-shadow: 0 10px 20px rgba(0,0,0,0.1);
            flex: 1;
        }

        .stat-number {
            font-size: 2rem;
            font-weight: bold;
            color: #667eea;
        }

        .stat-label {
            color: #666;
            font-size: 0.9rem;
            margin-top: 5px;
        }

        .logout-btn {
            background: linear-gradient(45deg, #ff6b6b, #ee5a24);
            color: white;
            border: none;
            padding: 15px 40px;
            font-size: 1.1rem;
            font-weight: 600;
            border-radius: 50px;
            cursor: pointer;
            transition: all 0.3s ease;
            box-shadow: 0 10px 25px rgba(255, 107, 107, 0.3);
            text-decoration: none;
            display: inline-block;
        }

        .logout-btn:hover {
            transform: translateY(-3px);
            box-shadow: 0 15px 35px rgba(255, 107, 107, 0.4);
        }

        @media (max-width: 480px) {
            .stats {
                flex-direction: column;
            }
            
            .container {
                padding: 30px 20px;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="logo">📚✨</div>
        <div class="site-name">your book</div>
        
        <div class="user-info">
            <div class="user-name">Bonjour</div>
            <span class="user-role">Vendeur Premium</span>
        </div>

        <h1>Tableau de Bord</h1>
        <p class="welcome-text">Bienvenue sur votre espace de gestion</p>
        
        <div class="stats">
            <div class="stat-card">
                <div class="stat-number">1,247</div>
                <div class="stat-label">Livres Vendus</div>
            </div>
            <div class="stat-card">
                <div class="stat-number">€4,892</div>
                <div class="stat-label">Revenus</div>
            </div>
            <div class="stat-card">
                <div class="stat-number">156</div>
                <div class="stat-label">Nouveaux Clients</div>
            </div>
        </div>
        
        <a href="logout.php" class="logout-btn">Déconnexion</a>
    </div>
</body>
</html>