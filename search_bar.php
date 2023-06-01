<form action="all_dest.php" class="form_search_dest" method="get"> 

      <div class="field">
       
        <img src="img/localisation.png"  alt="">
        

          <div class="select">
           
          <label for="pays">Pays</label>
            <select name="pays" id="pays">
              <option value="">Où ?</option>
              <option value="Angleterre">Angleterre</option>
              <option value="Malte">Malte</option>
              <option value="Etats-Unis">Etats-Unis</option>
              <option value="Canada">Canada</option>
              <option value="Australie">Australie</option>
            </select>
          </div>
        
      </div>

      <div class="field field-periode">
        
        <img src="img/calendar.png" alt="">
        
          <div class="select">
          <label for="periode">Période</label>
          
            <select name="vacances" id="periode">
              <option value="">Quand ?</option>
              <option value="vacances_de_printemps">Vacances de printemps</option>
              <option value="vacances_ete">Vacances d'été</option>
              <option value="vacances_toussaint">Vacances de la Toussaint</option>
            </select>
          </div>
      </div>
      <!-- je dois mettre exactement ce qu'il y a ecrit dans value dans ma base de donnée pour vacances donc je laisse les _  -->

      <div class="field">
        
        <img src="img/utilisateurs.png"   alt="">
       
          <div class="select">
          <label for="age">Âge</label>
            <select name="age_dest" id="age">
              <option value="">Qui ?</option>
              <option value="7-10 ans">7-10 ans</option>
              <option value="11-14 ans">11-14 ans</option>
              <option value="15-18 ans">15-18 ans</option>
            </select>
          </div>
      </div>
<!-- pour l'instant field-periode est pas necessaire -->
      <div class="field field-activite">
        
        <img src="img/activites.png"  alt="">
        
          <div class="select">
           
          <label for="activite">Activités</label>
            <select name="type_parcours" id="activite" >
              <option class="optnull" value="">Quoi ?</option>
              <option value="parcours_sportif">Parcours sportif</option>
              <option value="parcours_artistique">Parcours artistique</option>
              <option value="parcours_decouverte">Parcours découverte</option>
            </select>
          </div>
      </div>

      <input type="submit" class="btn-search" value="Rechercher">
     
    <!-- il faut que je dise que je peux rechercher que si au moins un truc est selectionné -->

    </form>