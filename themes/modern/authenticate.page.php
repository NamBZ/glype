<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="robots" content="noindex, nofollow" />
    <meta name="description" content="Authorization required to access this resource.">
    <meta name="copyright" content="© 2025 M.VuiZ.Net">
    <title>401 Authorization Required</title>
    <link rel="icon" href="/favicon.ico" type="image/x-icon" />
    <style>
        :root {
            --primary-bg: #0b1933;
            --container-bg: #fff;
            --border-color: #ccc;
            --accent-color: #007BFF;
            --font-color: #333;
        }

        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        body {
            background: var(--primary-bg);
            color: var(--font-color);
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            padding: 20px;
        }

        .wrapper {
            background: var(--container-bg);
            border: 4px solid var(--border-color);
            border-radius: 8px;
            max-width: 500px;
            width: 100%;
            padding: 30px;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.2);
            text-align: center;
        }

        h1 {
            color: #dc3545;
            margin-bottom: 20px;
            font-size: 24px;
        }

        p {
            margin-bottom: 20px;
            line-height: 1.5;
        }

        form {
            text-align: left;
        }

        label {
            display: block;
            margin: 10px 0 5px;
            font-weight: bold;
        }

        input[type="text"],
        input[type="password"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #aaa;
            border-radius: 4px;
            font-size: 14px;
        }

        input[type="submit"] {
            width: 100%;
            padding: 12px;
            background-color: var(--accent-color);
            color: white;
            border: none;
            border-radius: 4px;
            font-size: 16px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #0056b3;
        }
    </style>
</head>

<body>
    <div class="wrapper">
        <h1>🔐 Authorization Required</h1>
        <p>The site <strong><?php echo htmlspecialchars($site); ?></strong> is requesting a username and password to access the protected area "<strong><?php echo htmlspecialchars($realm); ?></strong>".</p>

        <form action="includes/process.php?action=authenticate" method="post">
            <label for="user">Username</label>
            <input type="text" name="user" id="user" required>

            <label for="pass">Password</label>
            <input type="password" name="pass" id="pass" required>

            <input type="submit" value="Log In">

            <input type="hidden" name="site" value="<?php echo htmlspecialchars($site); ?>">
            <input type="hidden" name="return" value="<?php echo htmlspecialchars($return); ?>">
        </form>
    </div>
</body>

</html>