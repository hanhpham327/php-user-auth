<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PHP User Auth Demo</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/css/materialize.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/js/materialize.min.js"></script>
</head>
<body>
    <div class="container">
        <h1 class="center">PHP User Authentication</h1>
        <h1 class="center red-text darken-2"><?= isset($_GET['auth_error']) ? 'Invalid username and/or password':''?></h1>

        <div class="row">
            <form action="./db_auth.php" method="POST"class="column s12">
                <div class="row">
                    <div class="input-field col s6">
                        <input type="text" name="username">
                        <label for="username">Username</label>
                        <!-- name property is to send data backend -->
                    </div>
                    <div class="input-field col s6">
                        <input type="text" name="password">
                        <label for="password">Password</label>
                    </div>
                    <div class="row-center">
                        <button class="btn">Sign In </button>
                </div>
            </form>
        </div>
    </div>
</body>
</html>