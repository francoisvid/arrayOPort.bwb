<?php ?>

<?php
$date = date("d.m.Y");
$heure = date("h:i");



//verifie si l'utilisateur et bien inscrit, si oui propose de poster un com
if (isset($_SESSION['Pseudo'])) {
    ?>
    <div class="row">
        <div class="col-md-5">
            <div class=" question col-md-12">
                <legend class="text-center">Laissez un avis</legend>
                <div class="row">
                    <div class="col-md-12">
                        <div class="well well-sm">
                            <form class="form-control" action="fonctions/scriptCommentaire/message.php" method="post" >
                                <fieldset>
                                    <fieldset>



                                        <!-- nom input-->
                                        <div class="form-group">
                                            <label class="col-md-3 control-label" for="name">Nom :</label>
                                            <div class="col-md-12">
                                                <input id="name" name="Nom" type="text" placeholder="Nom" class="form-control">
                                            </div>
                                        </div>

                                        <!-- prenom input-->
                                        <div class="form-group">
                                            <label class="col-md-3 control-label" for="name">Prenom :</label>
                                            <div class="col-md-12">
                                                <input id="name" name="Prenom" type="text" placeholder="Prenom" class="form-control">
                                            </div>
                                        </div>

                                        <!-- Email input-->
                                        <div class="form-group">
                                            <label class="col-md-3 control-label" for="email">E-mail :</label>
                                            <div class="col-md-12">
                                                <input id="email" name="email" type="text" placeholder="Email" class="form-control">
                                            </div>
                                        </div>

                                        <!-- Message body -->
                                        <div class="form-group">
                                            <label class="col-md-3 control-label" for="message">Message :</label>
                                            <div class="col-md-12">
                                                <textarea class="form-control" id="message" name="message" placeholder="Veuillez entrez votre message..." rows="5"></textarea>
                                            </div>
                                        </div>

                                        <!-- Form actions -->
                                        <div class="form-group">
                                            <div class="col-md-12">
                                                <button type="submit" class="btn btn-primary btnenvoyer">Envoyer</button>
                                            </div>
                                        </div>
                                    </fieldset>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <?php
        //sinon, propose de s'inscrire
    } else {
        ?>

        <?php
    }
//container qui contient les messages postés
    ?>
    <div class="col-md-4">
        <div class=" reponse col-md-12">
            <legend class="text-center">Commentaires</legend>
            <div class="row">
                <div class="col-md-12">
                    <div class="well well-sm">
                        <form class="form-control" >
                            <fieldset>
                                <ul>
                                    <?php
                                    include 'template/vueMessages.php';
                                    ?>
                                </ul>
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
