<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PHP User Auth Demo</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/css/materialize.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/js/materialize.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</head>
<body>
    <div class="container">
        <h1 class="center">PHP User Authentication</h1>
        <h2 class="center">Now with AJAX</h2>
        <h2 class="center red-text darken-2" id="auth-error"> </h2>

        <div class="row">
            <form class="column s12">
                <div class="row">
                    <div class="input-field col s6">
                        <input type="text" id="username" name="username">
                        <label for="username" >Username</label>
                        <!-- name property is to send data backend -->
                    </div>
                    <div class="input-field col s6">
                        <input type="text" id="password" name="password">
                        <label for="password" >Password</label>
                    </div>
                    <div class="row-center">
                        <button type="button" class="btn" id="sign-in">Sign In </button>
                </div>
            </form>
        </div>
    </div>
</body>
    <script>
        $('#sign-in').click(()=>{
            const dataToSend={
                username:$('#username').val(),
                password:$('#password').val()
            };
                
            $.ajax({
                url:'./db_auth_ajax.php',
                data:dataToSend,
                dataType:'JSON',
                method:'POST',
                success:resp=>{
                    console.log('Server Response: ', resp);
                    if (resp.success){
                        window.location.href='/profile.php';
                    } else {
                        $('#auth-error').text(resp.error)
                    }
                },
                error:resp=>{
                    console.log('Error: ',resp)
                }
            
            })
        })


    </script>
</html>