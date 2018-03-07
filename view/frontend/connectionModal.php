<div class="modal fade" id="modal-connexion" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel4">Connexion</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form  action="index.php?action=connection" method="POST" class="form-group" id="formulaireConnexion">
                <div class="modal-body row">
                    <label for="connexion" class="form-control-label">identifiant</label>
                    <input type="text" name="connexion" class="form-control" id="connexion">
                    <label for="password">mot de passse</label>
                    <input type="password" name="password" class="form-control" id="password">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn" id="conexionFormulaireButton">Connexion</button>
                </div>
            </form>
        </div>
    </div>
</div>