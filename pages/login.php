<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="/assets/css/log-in.css">
    <title>Log in</title>
</head>
<body>
    <main>
        <div class="d-flex">
            <div  class="card col-5 p-3 py-2 align-content-center" id="h-100">
                <div class="card-body row justify-content-center">
                    <h1 class="text-center">
                        <span>Log</span>
                        <span class="text-primary">in</span>
                    </h1>
                    <div class="text-center mt-5">
                        <form action="login.php" method="post" class="d-grid gap-5">
                            <div>
                                <input type="email" name="email" placeholder="Email" class="form-control">
                            </div>
                            <div>
                                <input type="password" name="password" placeholder="mot de passe" class="form-control">
                            </div>
                            <div class="d-flex justify-content-between">
                                <input type="submit" name="connexion" value="Connexion" class="btn btn-primary">
                                <span><a href="#">mot de passe oublié</a></span>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col  d-flex justify-content-center align-self-center title">
                <h1><span>YOU</span><span class="text-primary">BOOK</span></h1>
            </div>
        </div>
    </main>
</body>
</html>