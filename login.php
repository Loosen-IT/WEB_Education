<?php ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="bootstrap.css">
    <title>Login</title>
</head>
<body>

<div class = "container-fluid">
    <div class ="bg-light">
        <div class="row">
            <div class="col-8">
                <p class="text-center fs-1 p-5">
Aufgabenplaner: Login
</p>
            </div>
        </div>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-2">

        </div>
        <div class="col-8">
            <form>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Email-Addresse</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Email-Adresse eingeben">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Passwort</label>
                    <input type="password" placeholder="Passwort" class="form-control" id="exampleInputPassword1">
                </div>
                <div class="mb-3 form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">AGBs und Datenschutzbedingungen akzeptieren</label>
                </div>
                <button type="submit" class="btn btn-primary">Einloggen</button>
                <div class="mb-3">
Noch nicht registriert? <a href="register.html"> Registrierung</a>
                    <br>
                    <br>
Da der Login-Vorgang technisch noch nicht realisiert wurde: <a href="index.html"> Überspringen</a>
                </div>
            </form>
        </div>

        <div class="col-2">

        </div>
    </div>
</div>

</body>
</html>
