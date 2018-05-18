<!--Page d'inscription d'un utilisateur bootstrap (modal prevu)-->
<div class="inscription">
<div class="row">
        <div class="col-md-7">
            <div class=" question col-md-12">
                <legend class="text-center">Inscription</legend>
                <div class="row">
                    <div class="col-md-12">
                        <div class="well well-sm">
                            <form class="form-control" action="/script/inscription.php" method="post" >
                                <fieldset>
                                    <fieldset>
                                        
                                        <!-- nom input-->
                                        <div class="form-group">
                                            <label class="col-md-4 control-label" for="name">Pseudo :</label>
                                            <div class="col-md-12">
                                                <input id="name" name="Pseudo" type="text" placeholder="Pseudo" class="form-control">
                                            </div>
                                        </div>

                                        <!-- Email input-->
                                        <div class="form-group">
                                            <label class="col-md-4 control-label" for="email">Password :</label>
                                            <div class="col-md-12">
                                                <input id="email" name="Password" type="password" placeholder="Password" class="form-control">
                                            </div>
                                        </div>

                                        <!-- Form actions -->
                                        <div class="form-group">
                                            <div class="col-md-12">
                                                <button type="submit" class="btn btn-primary btninscription">S'inscrire</button>
                                            </div>
                                        </div>
                                    </fieldset>
                    </div>
                </div>
            </div>
        </div>
</div>