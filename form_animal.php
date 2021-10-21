<div class="wrapper">
          <div class="col-lg-12 jnt-mt">
            <h4><i class="fa fa-angle-right"></i> AJOUTER UN ANIMAL</h4>
            <div class="form-panel">
              <div class="form">
                <form class="cmxform form-horizontal style-form" id="signupForm" method="POST" action="">
                  <div class="form-group ">
                    <label for="nom" class="control-label col-lg-2">Nom</label>
                    <div class="col-lg-5">
                      <input class=" form-control" id="nom" name="nom" type="text" />
                    </div>
                  </div>
                  <div class="form-group ">
                    <label for="race" class="control-label col-lg-2">Race</label>
                    <div class="col-lg-5">
                      <input class=" form-control" id="race" name="race" type="text" />
                    </div>
                  </div>
                  <div class="form-group ">
                    <label for="poids" class="control-label col-lg-2">Poids</label>
                    <div class="col-lg-5">
                      <input class="form-control " id="poids" name="poids" type="text" />
                    </div>
                  </div>
                  <div class="form-group ">
                    <label for="age" class="control-label col-lg-2">Age</label>
                    <div class="col-lg-5">
                      <input class="form-control " id="age" name="age" type="number" />
                    </div>
                  </div>
                  <div class="form-group ">
                    <label for="prix" class="control-label col-lg-2">Prix</label>
                    <div class="col-lg-5">
                      <input class="form-control " id="prix" name="prix" type="number" />
                    </div>
                  </div>
                  <div class="form-group ">
                    <label for="categorie_a" class="control-label col-lg-2">Categorie</label>
                    <div class="col-lg-5">
                        <?php 
                        //$requ = $bdd->prepare("SELECT * FROM produit");
                        $select_all_categorie_animale->execute();
                        $liste_categorie_a = $select_all_categorie_animale->fetchAll();
                        ?>

                        <select name="categorie_a" class="form-control">
                        <option value="">Selectionner la categorie</option>
                        <?php 
                            foreach($liste_categorie_a AS $row):
                            echo "
                                <option value=\"$row[id_categorie_a]\">$row[libelle_categorie_a]</option>";
                            endforeach;
                        ?>
                        </select>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="col-lg-offset-2 col-lg-10">
                      <button class="btn btn-theme" type="submit" name="creer_animal">Enregistrer</button>
                      <button class="btn btn-theme04" type="submit">Cancel</button>
                    </div>
                  </div>
                </form>
              </div>
            </div>
            <!-- /form-panel -->
          </div>
          <!-- /col-lg-12 -->
        </div>