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
        <h2 class="center red-text darken-2" id="auth-error2"> </h2>
        <h2 class="center red-text darken-2" id="auth-error3"> </h2>
        <h2 class="center red-text darken-2" id="auth-error4"> </h2>
        <h2 class="center red-text darken-2" id="auth-error5"> </h2>
        <h2 class="center red-text darken-2" id="auth-error6"> </h2>
        <!-- <h2 class="center red-text darken-2" id="auth-error7"> </h2>
        <h2 class="center red-text darken-2" id="auth-error8"> </h2> -->


        <div class="row">
            <form class="column s12">
                <div class="row">
                    <div class="input-field col s6">
                        <input type="text" id="username" name="username">
                        <label for="username" >Username</label>
                        <!-- name property is to send data backend -->
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
            };
                
            $.ajax({
                url:'./db_auth_ajax.php',
                data:dataToSend,
                dataType:'JSON',
                method:'POST',
                success:resp=>{
                    console.log('Server Response:', resp);
                    if (resp.success){
                        var ingredientList='';
                        console.log('Server Response:', resp);
                        // var showDoMProduct = resp.user
                        // $('#auth-error').text('Name: '+JSON.stringify(resp.user['Name']))
                        // $('#auth-error2').text('Categories: '+JSON.stringify(resp.user['Categories']))
                        // $('#auth-error3').text('Brand: '+JSON.stringify(resp.user['Brand']))
                        // $('#auth-error4').text('Detail: '+JSON.stringify(resp.user['Detail']))
                        // $('#auth-error5').text('Price: '+JSON.stringify(resp.user['Price']))
                        // $('#auth-error6').text('Ingredients: '+JSON.stringify(resp.user['Ingredients']))
                        ingredientList=(JSON.stringify(resp.user['Ingredients']))
                        console.log(ingredientList)
                        // $('#auth-error7').text('Gentle: '+JSON.stringify(resp.user['Name']))
                        // $('#auth-error8').text('Safety: '+JSON.stringify(resp.user['Categories']))
                        // console.log()
                    } else {
                        $('#auth-error').text(resp.error)
                    }
                },
               
            
            })
        })

//make a while loop, for loop runs through ingrediant list 
//its going to run through each letter, stores into an array, stops at a comma, doesn't start the comma
    </script>
</html>