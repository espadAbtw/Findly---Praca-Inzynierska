<?php
    session_start();
    if(isset($_SESSION['unique_id'])){
        header("Location: editProfile.php");
      }
?>

<?php include_once "header.php"; ?>

<body>
    <?php
    include './static/navbar.php';
     ?>
    <main>
                    <div class="container text-center item-center">
                        <div class="row">
                            <div class=" ">
                                <div id=" text-center item-center">
                                    <!-- MODAL-->
                                    <!-- Button trigger modal -->
                                    <div class="regCont">
                                        <h1 class="regTitle">
                                            Zarejestruj się już teraz </br> i znajdź sobie osobę </br> z  którą zaczniesz spędzać czas!
                                        </h1>
                                    
                                        <a class="buttonReg" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                            <span>Zarejestruj się</span>
                                            <div class="wave"></div>
                                        </a>
                                        </div>
                                    <!-- Modal -->
                                    <div class="modal text-center item-center signup" id="exampleModal" tabindex="-1"
                                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <form action="#" enctype ="multipart/form-data" autocomplete="off">
                                        
                                        <div class="modal-dialog modal-xl">
                                            <div class="modal-content">
                                                <!--FORM-->

                                                <div class="modal-header text-center">
                                                    
                                                    <button type="button " class="btn-close" data-bs-dismiss="modal"
                                                        aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <div class="container text-center">
                                                        <div class="row">
                                                        
                                                            <div>
                                                            <img src="./assets/logo_transparent.png" alt="logo" width="85" height="85">
                                                            </div> 
                                                            <div>
                                                                <h2>Zarejestruj się już teraz!</h2>
                                                            </div>
                                                            <div class="error-txt"></div>
                                                                <div class="col-12 mt-3">
                                                                    <div class="input-container">
                                                                        <input type="text" name="fname" id="name"
                                                                                 required/>
                                                                        <label for="name">Imie</label>
                                                                    </div>
                                                                </div>
                                                                <div class="col-12 mt-3">
                                                                    <div class="input-container">
                                                                        <input type="email" name="email" id="email"  required/>
                                                                        <label for="email">Email</label>
                                                                    </div>
                                                                </div>
                                                                <div class="col-12 mt-3">
                                                                    <div class="input-container">
                                                                        <input type="password" name="pass" id="pass" required/>
                                                                        <label for="pass">Hasło</label>
                                                                    </div>
                                                                </div>
                                                                
                                                            
                                                            <div class="daneOsobowe">
                                                                <p>Twoje dane osobowe będą wykorzystywane do obsługi korzystania z tej witryny, zarządzania
                                                                    dostępem do konta oraz do innych celów opisanych w naszej polityce prywatności.
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="modal-footer button">
                                                    <input type="submit" value="Zarejestruj sie">
                                                </div>
                                                
                                            </div>
                                        </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
    </main>
    <footer></footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3"
        crossorigin="anonymous"></script>
        <script src="./js/singup.js"></script>
        <!-- <script src='https://www.marcoguglie.it/Codepen/AnimatedHeaderBg/demo-1/js/EasePack.min.js'></script>
        <script src='https://www.marcoguglie.it/Codepen/AnimatedHeaderBg/demo-1/js/rAF.js'></script>
        <script src='https://www.marcoguglie.it/Codepen/AnimatedHeaderBg/demo-1/js/TweenLite.min.js'></script>
        <script src="./js/index.js"></script> -->

</body>

</html>