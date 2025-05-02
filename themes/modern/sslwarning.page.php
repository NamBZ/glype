<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="robots" content="noindex, follow" />
    <meta name="description" content="Security warning: You're accessing a secure website through an unsecured proxy." />
    <meta name="copyright" content="© 2025 M.VuiZ.Net" />
    <meta name="revisit-after" content="1 day" />
    <title>Security Warning</title>
    <link rel="icon" href="/favicon.ico" type="image/x-icon" />
    <style>
        :root {
            --bg-color: #0b1933;
            --text-color: #333;
            --accent: #007bff;
            --container-bg: #fff;
            --border-color: #ccc;
        }

        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        body {
            background: var(--bg-color);
            color: var(--text-color);
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            padding: 20px;
        }

        .wrapper {
            background: var(--container-bg);
            border: 4px solid var(--border-color);
            border-radius: 8px;
            padding: 30px;
            max-width: 600px;
            width: 100%;
            text-align: center;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
        }

        h1 {
            color: #dc3545;
            font-size: 24px;
            margin-bottom: 20px;
        }

        p {
            font-size: 16px;
            margin-bottom: 15px;
            line-height: 1.5;
        }

        form {
            margin-top: 20px;
        }

        input[type="submit"],
        input[type="button"] {
            background-color: var(--accent);
            color: #fff;
            padding: 10px 20px;
            margin: 5px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 15px;
        }

        input[type="submit"]:hover,
        input[type="button"]:hover {
            background-color: #0056b3;
        }

        .note {
            margin-top: 20px;
            font-size: 14px;
            color: #555;
        }
    </style>
</head>

<body>
    <div class="wrapper">
        <h1>⚠️ Security Warning</h1>
        <p>You are attempting to access a secure (HTTPS) site through an insecure proxy.</p>
        <p>This may expose sensitive data to interception as it travels through the unsecured connection.</p>

        <form action="includes/process.php" method="get">
            <input type="hidden" name="action" value="sslagree" />
            <input type="submit" value="Continue anyway" />
            <input type="button" value="Return to homepage" onclick="window.location='.';" />
        </form>

        <p class="note"><strong>Note:</strong> This warning will not appear again.</p>
    </div>
</body>

</html>