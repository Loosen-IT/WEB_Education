<div class="container">
    <div class="row px-2">
        <div class="col-2">

        </div>
        <div class="col-8">
            <form method="post" action="<?php echo base_url('/login/login');?>">
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Email-Addresse</label>
                    <input name="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Email-Adresse eingeben">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Passwort</label>
                    <input name="passwort" type="password" placeholder="Passwort" class="form-control" id="exampleInputPassword1">
                </div>
                <div class="mb-3 form-check">
                    <input type="checkbox" class="form-check-input" id="check_it" name="check" onchange="abler()">
                    <label class="form-check-label" for="exampleCheck1">AGBs und Datenschutzbedingungen akzeptieren</label>
                </div>
                <button name="ok" disabled id="ok_button" type="submit" class="btn btn-primary">Einloggen</button>
                <br>
                <br>
                <div class="mb-3">
                    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>

                    Noch nicht registriert?
                    <button class="register-button" type="button" data-bs-toggle="modal" data-bs-target="#registriere">
                        Registrieren
                    </button>
                </div>
            </form>
        </div>
        <div class="col-2">

        </div>


        <script type="text/javascript">
            function abler(){
                var button = document.getElementById('ok_button');
                if(document.getElementById('check_it').checked) button.disabled = false;
                else button.disabled = true;
            }
        </script>



        <!-- Modal -->
        <div class="modal fade" id="registriere" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Registrierung</h5>
                    </div>
                    <form id="form" action="<?= base_url('mitglieder/create')?>" method="post">
                    <div class="modal-body">

                            <label class="fs-6 mt-1 mb-2">Username:</label>
                            <input type="text" placeholder="Username" id="username" name="username" class="form-control" />
                            <br>
                            <label class="fs-6 mt-1 mb-2">E-Mail Adresse:</label>
                            <input type="text" placeholder="E-Mail-Adresse" id="email" name="email" class="form-control" />
                            <br>
                            <label class="fs-6 mt-1 mb-2">Passwort:</label>
                            <input type="password" placeholder="Passwort" id="password" name="passwort" class="form-control" />
                            <br>
                            <br>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-info text-white" data-bs-toggle="modal" data-bs-target="#registriere">Abbruch</button>
                        <button type="submit" class="btn btn-primary">Registrieren</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-4"></div>
    <div class="col-4">
        <div class="p-3 container bg-warning rounded" style="border:solid #000000; text-align: center">
            <b>
                Notiz: <br>
                Die Funktion Registrieren ist bereits implementiert.
            </b>
        </div>
    </div>
    <div class="col-4"></div>
</div>
</body>
</html>
