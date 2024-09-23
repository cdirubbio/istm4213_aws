<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to My EC2 Instance</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }
        header {
            background: #35424a;
            color: #ffffff;
            padding: 10px 20px;
            text-align: center;
        }
        nav {
            margin: 20px 0;
        }
        nav a {
            color: #ffffff;
            margin: 0 15px;
            text-decoration: none;
        }
        .container {
            max-width: 800px;
            margin: auto;
            padding: 20px;
            background: #ffffff;
            border-radius: 5px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }
        footer {
            text-align: center;
            padding: 20px;
            background: #35424a;
            color: #ffffff;
            position: relative;
            bottom: 0;
            width: 100%;
        }
    </style>
</head>
<body>

<header>
        <h1>Welcome to Your EC2 Instance</h1>
        <nav>
            <a href="#">Home</a>
            <a href="syllabus.php">Syllabus</a>
            <a href="about.php">ISTM</a>
        </nav>
    </header>

<div class="container">
    <h2>Hello, World!</h2>
    <p>This is a sample PHP application running on an EC2 instance. You can modify this page to suit your needs.</p>
    <?php
        // Fetch the public IP address using an external API
        $public_ip = file_get_contents('https://api.ipify.org');
    ?>
    <p>Your EC2 Public IP Address is: <strong><?php echo $public_ip; ?></strong></p>
</div>

<footer>
    <p>&copy; <?php echo date("Y"); ?> My EC2 Instance. All rights reserved.</p>
</footer>

</body>
</html>

