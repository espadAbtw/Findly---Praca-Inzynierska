<?php 
session_start();
if(!isset($_SESSION['unique_id'])){
   header("Location: login.php");
 }
include_once "header.php"; 


$information="informacje";
$aboutme="about me";
$preference="preferencje";
$fb="fb";
$twit="twitter";
$dc="dc";
$image="./img/przy100.jpg";
if(isset($_SESSION['rows'])){
  $sRows[]=$_SESSION['rows'];
}
if(isset($_SESSION['countRows'])){
  $sCountRows=$_SESSION['countRows'];

  if($sCountRows > 0 ){
  $i=0;
  
  $information=$sRow[$i]['fname'].' '.$sRow[$i]['lname'];
  $aboutme=$sRow[$i]['about'];
  $preference="preferencje";
  $fb=$sRow[$i]['fb'];
  $twit=$sRow[$i]['twitter'];
  $dc=$sRow[$i]['dc'];
  $image=$sRow[$i]['img'];
  $searchId=$sRow[$i]['id'];

}
}



?>

<body>
<?php
    include './static/navbar.php';
     ?>
  <div class="cointainer text-center item-center">
    <div class="row">
      <div class="col-sm-12 col-md-4 d-flex align-items-center justify-content-center cards">
        <div class="filtrs simplecard">
          <h1>Filtry</h1>
          <form action="#" method="POST" enctype="multipart/form-data" autocomplete="off" class="searchForm">
            <div class="error-txt text-center"></div>
           
           
            <div class="form-group mb-2 mt-2">
              <label for="inputAge">Wiek min</label>
              <input
                type="number"
                class="form-control"
                id="inputAge"
                placeholder="Wiek"
                name="agemin"
              /> </div>
              <div class="form-group mb-2 mt-2">
              <label for="inputAge">Wiek max</label>
              <input
                type="number"
                class="form-control"
                id="inputAge"
                placeholder="Wiek"
                name="agemax"
              />
            </div>
            <div class="form-group mb-2 mt-2">
              <label for="inputGender">Plec</label>
              <select class="form-control" id="inputGender" name="sex">
                <option selected disabled>Plec</option>
                <option value="1">Mezczyzna</option>
                <option value="2">Kobieta</option>
                <option value="3">Inna</option>
              </select>
            </div>
            
            
            <h2 class="h4 mb-1">Gry</h2>
                  <p class="small text-muted font-italic mb-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                  <ul class="list-group list-group-horizontal-xl mx-auto">
                      <li class="list-group-item rounded-0">
                          <div class="custom-control custom-checkbox">
                              <input class="custom-control-input" id="LoL" type="checkbox" name="lol">
                              <label class="cursor-pointer font-italic d-block custom-control-label" for="LoL">League of Legends</label>
                          </div>
                      </li>
                      <li class="list-group-item">
                          <div class="custom-control custom-checkbox">
                              <input class="custom-control-input" id="cS" type="checkbox" name="cs">
                              <label class="cursor-pointer font-italic d-block custom-control-label" for="cS">CS:GO</label>
                          </div>
                      </li>
                      <li class="list-group-item">
                          <div class="custom-control custom-checkbox">
                              <input class="custom-control-input" id="val" type="checkbox" name="valorant">
                              <label class="cursor-pointer font-italic d-block custom-control-label" for="val">Valorant</label>
                          </div>
                      </li>
                      <li class="list-group-item">
                          <div class="custom-control custom-checkbox">
                              <input class="custom-control-input" id="mc" type="checkbox" name="minecraft">
                              <label class="cursor-pointer font-italic d-block custom-control-label" for="mc">Minecraft</label>
                          </div>
                      </li>
                  </ul>
                  <h2 class="h4 mb-1">Filmy</h2>
                  <p class="small text-muted font-italic mb-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                  <ul class="list-group list-group-horizontal-xl mx-auto">
                      <li class="list-group-item rounded-0">
                          <div class="custom-control custom-checkbox">
                              <input class="custom-control-input" id="horror" type="checkbox" name="horror">
                              <label class="cursor-pointer font-italic d-block custom-control-label" for="horror">Horrory</label>
                          </div>
                      </li>
                      <li class="list-group-item">
                          <div class="custom-control custom-checkbox">
                              <input class="custom-control-input" id="komedia" type="checkbox" name="komedia">
                              <label class="cursor-pointer font-italic d-block custom-control-label" for="komedia">Komedie</label>
                          </div>
                      </li>
                      <li class="list-group-item">
                          <div class="custom-control custom-checkbox">
                              <input class="custom-control-input" id="kryminal" type="checkbox" name="kryminalny">
                              <label class="cursor-pointer font-italic d-block custom-control-label" for="kryminal">Kryminalistyczne</label>
                          </div>
                      </li>
                      <li class="list-group-item">
                          <div class="custom-control custom-checkbox">
                              <input class="custom-control-input" id="dramat" type="checkbox" name="dramat">
                              <label class="cursor-pointer font-italic d-block custom-control-label" for="dramat">Dramat</label>
                          </div>
                      </li>
                  </ul>
                  <h2 class="h4 mb-1">Muzyka</h2>
                  <p class="small text-muted font-italic mb-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                  <ul class="list-group list-group-horizontal-xl mx-auto">
                      <li class="list-group-item rounded-0">
                          <div class="custom-control custom-checkbox">
                              <input class="custom-control-input" id="trap" type="checkbox" name="trap">
                              <label class="cursor-pointer font-italic d-block custom-control-label" for="trap">Trap</label>
                          </div>
                      </li>
                      <li class="list-group-item">
                          <div class="custom-control custom-checkbox">
                              <input class="custom-control-input" id="rap" type="checkbox" name="rap">
                              <label class="cursor-pointer font-italic d-block custom-control-label" for="rap">Rap</label>
                          </div>
                      </li>
                      <li class="list-group-item">
                          <div class="custom-control custom-checkbox">
                              <input class="custom-control-input" id="pop" type="checkbox" name="pop">
                              <label class="cursor-pointer font-italic d-block custom-control-label" for="pop">Pop/Kpop</label>
                          </div>
                      </li>
                      <li class="list-group-item">
                          <div class="custom-control custom-checkbox">
                              <input class="custom-control-input" id="klaszyczna" type="checkbox" name="klasyczna">
                              <label class="cursor-pointer font-italic d-block custom-control-label" for="klaszyczna">Klasyczna</label>
                          </div>
                      </li>
                  </ul>
            
          <div class="field button">
              <input type="submit" name="submit" value="Zapisz">
            </div>
          </form>
        </div>
      </div>
      <div class="indicador col-sm-12 col-md-8 d-flex align-items-center justify-content-center cards">
        <div class="search simplecard">
          <div class="row d-flex align-items-center justify-content-center topsearch">
            <div class="col-2 d-flex align-items-center justify-content-center cards">
              <button type="button" class="btn btn-primary" onclick="noFunction()">
                <i class="fa-solid fa-left-long"></i>
              </button>
            </div>
            <div class="col-8">
              <img src="<?php echo $image ?>" alt="Girl in a jacket" width="100%" height="100%" class="img1"/>
            </div>
            <div class="col-2 d-flex align-items-center justify-content-center cards">
              <button type="button" class="btn btn-primary"onclick="yesFunction()">
                <i class="fa-solid fa-right-long"></i>
              </button>
            </div>

            <div class="col-11 simpleInformation">
              <p><?php echo $information ?></p>
            </div>
            <div class="col-5 simpleInformation half">
              <p><?php echo $aboutme ?></p>
            </div>
            <div class="col-5 simpleInformation half">
              <p><?php echo $preference ?></p>
            </div>
            <div class="col-11 simpleInformation">
              <p><?php echo $fb ?></p>
            </div>
            
            <div class="col-11 simpleInformation">
              <p><?php echo $twit ?></p>
            </div>
            <div class="col-11 simpleInformation">
              <p><?php echo $dc ?></p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <script >
    function yesFunction() {
      <?php
      if(isset($_SESSION['countRows'])){
        if($i < $sCountRows ){
          $i++;}}
        ?>
    }
    function noFunction() {
      <?php
      if(isset($_SESSION['countRows'])){
        if($i < $sCountRows ){
          $i++;}}
       
        
        ?>
    }
    console.log(<?php
      
        echo $sRows;
        ?>); 


  </script>
  <script src="js/search.js"></script>
  <script src="https://kit.fontawesome.com/cb0b14c6f3.js" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3"
    crossorigin="anonymous"></script>
</body>

</html>