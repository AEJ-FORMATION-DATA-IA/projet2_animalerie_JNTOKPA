<section class="wrapper">
        <h3><i class="fa fa-angle-right"></i> LES DIFFERENTES CATEGORIES DE PRODUIT</h3>
        <div class="row mb">
          <!-- page start-->
          <div class="content-panel">
            <div class="adv-table">
              <table cellpadding="0" cellspacing="0" border="0" class="display table table-bordered" id="hidden-table-info">
                <thead>
                  <tr>
                    <th>Id categorie</th>
                    <th>Libelle</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                    <?php
                        $select_all_categorie_produit->execute();
                        $i = 1 ;
                        while ($row = $select_all_categorie_produit->fetch()){
                            echo "<tr>" ;
                           // echo "<td>$i</td>" ;
                                echo "<td>$row[id_categorie_p]</td>";
                                echo "<td>$row[libelle_categorie_p]</td>" ;
                                echo "<td>
                                    <a href=\"?delp=$row[id_categorie_p]\">Supprimer</a></td>" ;
                            echo "</tr>" ;
                            $i++ ;
                        }
                        
                        ?>
                </tbody>
              </table>
            </div>
          </div>
          <!-- page end-->
        </div>
        <!-- /row -->
      </section>