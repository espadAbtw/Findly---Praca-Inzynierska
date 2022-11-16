<?php
    session_start();
    if(!isset($_SESSION['unique_id'])){
       header("Location: login.php");
     }
    
?>

<?php include_once "header.php";
      include_once "./backend/config.php"; ?>
  <body>
    <?php
    include './static/navbar.php';
     ?>
    
    <?php 
            $sql = mysqli_query($conn, "SELECT * FROM users WHERE unique_id = {$_SESSION['unique_id']}");
            if(mysqli_num_rows($sql) > 0){
              $row = mysqli_fetch_assoc($sql);
              //debug_to_console($row);
              $jpg = $row['img'];
              if($jpg === "") {
                $jpg = "https://via.placeholder.com/150";
          
              }  else {
                $jpg = './img/'.$row['img'];
              }          
            }
            
          ?>
    <div class=" editProfileTitle">
      <h1 class="text-center" 
      style="font-size: 5vh;
      font-family: 'Montserrat';
      font-weight: 600;" >Twój profil</h1>
    <form action="" method="POST" enctype="multipart/form-data" autocomplete="off" class="editForm">
    <div class="container d-flex flex-row justify-content-center">
    
      <div class="row">
      <div class="error-txt text-center"></div>
        <div class="col-sm-12 col-md-4 d-flex edit_first flex-column">
            <div class="form-group d-flex flex-column">
              
              <label for="imageInput"><h3 style="text-align: center;">Zdjecie Profilowe</h3></label>
              <img src="<?php echo $jpg ?>" />
              <input
                type="file"
                class="form-control-file"
                name="file"
              />
            </div>
            <div class="form-group mb-2 mt-2">
              <label for="aboutMe">Cos o sobie</label>
              <textarea 
              class="form-control"  
              rows="4"
              maxlength="176"
              name="aboutMe"><?php echo $row['about']?></textarea>
            </div>
        </div>
        <div class="col-sm-12 col-md-4">
            <h3 class="text-center"> Informacje o tobie</h3>
            <div class="form-group mb-2 mt-2">
              <label for="emailInput">Adres Email</label>
              <input
                type="text"
                class="form-control"
                placeholder="email@gmail.com"
                name="email"
                value="<?php echo $row['email']?>"
              />
            </div>
            <div class="form-group mb-2 mt-2">
              <label for="inputName">Imie</label>
              <input
                type="text "
                class="form-control"
                name="inputName"
                placeholder="Imie"
                value="<?php echo $row['fname']?>"
              />
            </div>
            <div class="form-group mb-2 mt-2">
              <label for="inputLastName">Nazwisko</label>
              <input
                type="text "
                class="form-control"
                name="inputLastName"
                placeholder="Nazwisko"
                value="<?php echo $row['lname']?>"
              />
            </div>
            <div class="form-group mb-2 mt-2">
              <label for="inputAge">Wiek</label>
              <input
                type="number"
                class="form-control"
                name="inputAge"
                placeholder="Wiek"
                min="18"
                max="99"
                value="<?php 
                if ($row['age'] < 18) {
                  echo 18;
                } else
                echo $row['age']?>"
              />
            </div>
            <div class="form-group mb-2 mt-2">
              <label for="inputGender">Plec</label>
              <select class="form-control" id="inputGender" name="inputGender">
                <option selected disabled>Plec</option>
                <option <?php 
                if($row['gender'] === "Mezczyzna")
                {
                  echo "selected";
                }?> value="Mezczyzna">Mezczyzna</option>
                <option <?php 
                if($row['gender'] === "Kobieta")
                {
                  echo "selected";
                }?>
                value="Kobieta">Kobieta</option>
                <option <?php 
                if($row['gender'] === "Inna")
                {
                  echo "selected";
                }?> value="Inna">Inna</option>
              </select>
            </div>
            <div class="form-group mb-2 mt-2">
              <label for="inputCity">Miasto</label>
              <input
                type="text"
                class="form-control"
                name="inputCity"
                placeholder="Miasto"
                value="<?php echo $row['city']?>"
              />
            </div>
            <div class="form-group mb-2 mt-2">
              <label for="inputFb">Facebook</label>
              <input
                type="text"
                class="form-control"
                name="inputFb"
                placeholder="link do profilu fb"
                value="<?php echo $row['fb']?>"
              />
            </div>
            <div class="form-group mb-2 mt-2">
              <label for="inputDc">Discord</label>
              <input
                type="text"
                class="form-control"
                name="inputDc"
                placeholder="Nazwa oraz # uzytkownika discord"
                value="<?php echo $row['dc']?>"
              />
            </div>
            <div class="form-group mb-2 mt-2">
              <label for="inputTt">Twitter</label>
              <input
                type="text"
                class="form-control"
                name="inputTt"
                placeholder="Link do profilu Twitter"
                value="<?php echo $row['twitter']?>"
              />
            </div>
        </div>
        <div class="col-sm-12 col-md-4">
            <h3 class="text-center">Zainteresowania</h3>
            <p class="text-center"> Zapisz swoje zainteresowania na podstawie ktorych
              inni uzytkownicy beda mogli Cie znalezc
            </p>
            <div class="card shadow border-0 mb-2">
              <div class="card-body p-3">
                  <h2 class="h4 mb-1">Gry</h2>
                  <p class="small text-muted font-italic mb-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                  <ul class="list-group list-group-horizontal-xl mx-auto">
                      <li class="list-group-item rounded-0">
                          <div class="custom-control custom-checkbox">
                              <input class="custom-control-input" id="LoL" type="checkbox">
                              <label class="cursor-pointer font-italic d-block custom-control-label" for="LoL">League of Legends</label>
                          </div>
                      </li>
                      <li class="list-group-item">
                          <div class="custom-control custom-checkbox">
                              <input class="custom-control-input" id="cS" type="checkbox">
                              <label class="cursor-pointer font-italic d-block custom-control-label" for="cS">CS:GO</label>
                          </div>
                      </li>
                      <li class="list-group-item">
                          <div class="custom-control custom-checkbox">
                              <input class="custom-control-input" id="val" type="checkbox">
                              <label class="cursor-pointer font-italic d-block custom-control-label" for="val">Valorant</label>
                          </div>
                      </li>
                      <li class="list-group-item">
                          <div class="custom-control custom-checkbox">
                              <input class="custom-control-input" id="mc" type="checkbox">
                              <label class="cursor-pointer font-italic d-block custom-control-label" for="mc">Minecraft</label>
                          </div>
                      </li>
                  </ul>
              </div>
          </div>
            <div class="card shadow border-0 mb-2">
              <div class="card-body p-3">
                  <h2 class="h4 mb-1">Filmy</h2>
                  <p class="small text-muted font-italic mb-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                  <ul class="list-group list-group-horizontal-xl mx-auto">
                      <li class="list-group-item rounded-0">
                          <div class="custom-control custom-checkbox">
                              <input class="custom-control-input" id="horror" type="checkbox">
                              <label class="cursor-pointer font-italic d-block custom-control-label" for="horror">Horrory</label>
                          </div>
                      </li>
                      <li class="list-group-item">
                          <div class="custom-control custom-checkbox">
                              <input class="custom-control-input" id="komedia" type="checkbox">
                              <label class="cursor-pointer font-italic d-block custom-control-label" for="komedia">Komedie</label>
                          </div>
                      </li>
                      <li class="list-group-item">
                          <div class="custom-control custom-checkbox">
                              <input class="custom-control-input" id="kryminal" type="checkbox">
                              <label class="cursor-pointer font-italic d-block custom-control-label" for="kryminal">Kryminalistyczne</label>
                          </div>
                      </li>
                      <li class="list-group-item">
                          <div class="custom-control custom-checkbox">
                              <input class="custom-control-input" id="dramat" type="checkbox">
                              <label class="cursor-pointer font-italic d-block custom-control-label" for="dramat">Dramat</label>
                          </div>
                      </li>
                  </ul>
              </div>
          </div>
            <div class="card shadow border-0 mb-2">
              <div class="card-body p-3">
                  <h2 class="h4 mb-1">Muzyka</h2>
                  <p class="small text-muted font-italic mb-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                  <ul class="list-group list-group-horizontal-xl mx-auto">
                      <li class="list-group-item rounded-0">
                          <div class="custom-control custom-checkbox">
                              <input class="custom-control-input" id="trap" type="checkbox">
                              <label class="cursor-pointer font-italic d-block custom-control-label" for="trap">Trap</label>
                          </div>
                      </li>
                      <li class="list-group-item">
                          <div class="custom-control custom-checkbox">
                              <input class="custom-control-input" id="rap" type="checkbox">
                              <label class="cursor-pointer font-italic d-block custom-control-label" for="rap">Rap</label>
                          </div>
                      </li>
                      <li class="list-group-item">
                          <div class="custom-control custom-checkbox">
                              <input class="custom-control-input" id="pop" type="checkbox">
                              <label class="cursor-pointer font-italic d-block custom-control-label" for="pop">Pop/Kpop</label>
                          </div>
                      </li>
                      <li class="list-group-item">
                          <div class="custom-control custom-checkbox">
                              <input class="custom-control-input" id="klaszyczna" type="checkbox">
                              <label class="cursor-pointer font-italic d-block custom-control-label" for="klaszyczna">Klasyczna</label>
                          </div>
                      </li>
                  </ul>
              </div>
            </div>
          
          
              </div>
            <div class="field button">
              <input type="submit" name="submit" value="Zapisz">
            </div>
        
      </div>
    </div>
    </form>
    </div>
    <script src="js/editProfile.js"></script>

  </body>
</html>
