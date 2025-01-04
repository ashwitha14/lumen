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

        .hero {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            text-align: center;
            height: 100vh;
            background-color: rgba(0, 0, 0, 0.5);
        }

        .hero h1 {
            font-size: 4em;
            margin: 0;
            text-shadow: 2px 2px 5px #000;
        }

        .hero p {
            font-size: 1.5em;
            margin: 10px 0 20px;
            text-shadow: 1px 1px 3px #000;
        }

        button {
            background-color: #fdd835;
            color: #333;
            border: none;
            border-radius: 5px;
            padding: 10px 20px;
            font-size: 1.2em;
            cursor: pointer;
            transition: background-color 0.3s, color 0.3s;
        }

        button:hover {
            background-color: #333;
            color: #fdd835;
        }

        .container {
            padding: 30px 20px;
            text-align: center;
            background-color: rgba(0, 0, 0, 0.8);
            margin: 20px auto;
            width: 90%;
            max-width: 800px;
            border-radius: 8px;
            color: #fff;
        }

        .container h2 {
            font-size: 2em;
            margin-bottom: 15px;
        }

        .container p {
            font-size: 1.1em;
            line-height: 1.5;
        }

        footer {
            background-color: rgba(0, 0, 0, 0.7);
            text-align: center;
            padding: 15px 0;
            font-size: 0.9em;
            color: #fdd835;
        }

        @media (max-width: 768px) {
            .hero h1 {
                font-size: 2.5em;
            }

            .hero p {
                font-size: 1.2em;
            }

            button {
                font-size: 1em;
                padding: 8px 15px;
            }
        }
    </style>
</head>
<body>
    <header>
        <h1>Telecom Inventory </h1>
        <nav>
            <a href="homepage.php">Home</a>
            <a href="aboutpage.html">About</a>
            <a href="contactpage.html">Contact</a>
        
            
        </nav>
    </header>
    <div class="hero">
        <h1>Powering Telecom Operations</h1>
        <p>Simplifying Inventory</p>
        <button onclick="window.location.href='loginpage.php';">Get Started</button>
    </div>
  
</body>
</html>
