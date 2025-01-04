<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Telecom Inventory</title>
    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            color: #fff;
            background-image: url('image1.jpg');
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
            min-height: 100vh;
        }

        header {
            background-color: rgba(0, 0, 0, 0.7);
            padding: 10px 20px;
            text-align: center;
        }

        header h1 {
            margin: 0;
            font-size: 2em;
            color: #fdd835;
        }

        nav {
            margin-top: 10px;
        }

        nav a {
            margin: 0 15px;
            text-decoration: none;
            color: #fdd835;
            font-size: 1.1em;
            transition: color 0.3s;
        }

        nav a:hover {
            color: #fff;
        }

        .main-content {
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: calc(100vh - 100px); /* Adjust for header height */
            padding: 20px;
        }

        .login-container {
            background-color: rgba(0, 0, 0, 0.7);
            padding: 40px;
            border-radius: 10px;
            width: 100%;
            max-width: 400px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.5);
        }

        .login-container h2 {
            text-align: center;
            color: #fdd835;
            margin-bottom: 30px;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-group label {
            display: block;
            margin-bottom: 8px;
            color: #fff;
        }

        .form-group input, .form-group select {
            width: 100%;
            padding: 10px;
            border: none;
            border-radius: 5px;
            background-color: rgba(255, 255, 255, 0.9);
            color: #333;
        }

        button {
            width: 100%;
            background-color: #fdd835;
            color: #333;
            border: none;
            border-radius: 5px;
            padding: 12px;
            font-size: 1.1em;
            cursor: pointer;
            transition: background-color 0.3s, color 0.3s;
        }

        button:hover {
            background-color: #333;
            color: #fdd835;
        }

        .links {
            text-align: center;
            margin-top: 20px;
        }

        .links a {
            color: #fdd835;
            text-decoration: none;
            font-size: 0.9em;
        }

        .links a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <header>
        <h1>Telecom Inventory</h1>
        <nav>
            <a href="homepage.html">Home</a>
            <a href="#about">About</a>
            <a href="#contact">Contact</a>
            
        </nav>
    </header>
    <div class="main-content">
        <div class="login-container">
            <h2>Login</h2>
            <form action="login.php" method="POST">
                <div class="form-group">
                    <label for="email">Username</label>
                    <input type="text" id="email" name="username" required>
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" id="password" name="password" required>
                </div>
                <div class="form-group">
                    <label for="role">Select Role</label>
                    <select id="role" name="role" required>
                        <option value="admin">Admin</option>
                        <option value="manager">Manager</option>
                        <option value="staff">Staff</option>
                    </select>
                </div>
                <button type="submit">Login</button>
            </form>
            <div class="links">
               
            </div>
        </div>
    </div>
</body>
</html>
