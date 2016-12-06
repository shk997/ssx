<!-- LOGOWANIE -->
    <div class="modal fade" id="logowanie" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel1">Logowanie</h4>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class = "col-xs-12 col-sm-12 col-md-12 col-lg-12">
                            <form action="#" method="POST">
                                <div class="form-group">
                                    <label for= "login" class ="control-label">Nazwa użytkownika</label>
                                    <input type="text" class="form-control" name="login" placeholder="Nazwa użytkownika">
                                </div>
                                <div class="form-group">
                                    <label for="pass" class="control-label">Hasło</label>
                                    <input type="password" name="pass" class ="form-control" placeholder="Hasło">
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-warning btn-lg btn-block" >Zaloguj się</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



<!-- REJESTRACJA -->
    <div class="modal fade" id="rejestracja" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel2">Rejestracja</h4>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                            <form method="POST" action="http://localhost/phpszymon/app/Register.php">
                                <div class="form-group">
                                    <label for="login1" class="control-label">Nazwa użytkownika</label>
                                    <input type="text" name="login1" class="form-control" placeholder="Nazwa użytkownika">
                                </div>
                                <div class = row>
                                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                                        <div class="form-group">
                                            <label for="pass" class="control-label">Hasło</label>
                                            <input type="password" name="pass" class="form-control" placeholder="Hasło">
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                                        <div class="form-group">
                                            <label for="pass2" class="control-label">Powtórz hasło</label>
                                            <input type="password" name="pass2" class="form-control" placeholder="Powtórz hasło">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="email" class="control-label">Adres email</label>
                                    <input type="email" name="email" class="form-control" placeholder="Email">
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-warning btn-lg btn-block" >Zarejestruj się</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>