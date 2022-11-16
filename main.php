<?php
 session_start();
 if(!isset($_SESSION['unique_id'])){
    header("Location: login.php");
  }
 include_once "header.php"; 
 
 ?>
<?php
    include './static/navbar.php';
     ?>
<body>
    <div class="cointainer">
        <div class="row">
            <div class="col-sm-12 col-md-3  smalldiv" ></div>
            <div class="col-sm-12 col-md-3  smalldiv"></div>
            <div class="col-sm-12 col-md-3  smalldiv"></div>
            <div class="col-sm-12 col-md-3  smalldiv"></div>
        </div>
        <div class="row">
            <div class="col-sm-12 col-md-3 middle"></div>
            <div class="col-sm-12 col-md-3 middle buttondiv d-flex justify-content-center align-items-center">
            <a class="btn btn-primary" href="./search.php" role="button">Wyszukaj dopasowania</a>
            </div>
            <div class="col-sm-12 col-md-3 middle buttondiv d-flex justify-content-center align-items-center">
            <a class="btn btn-primary" href="./users.php" role="button">Wiadomosci</a>            </div>
            <div class="col-sm-12 col-md-3 middle"></div>
        </div>
        <div class="row">
            <div class="col-sm-12 col-md-3 smalldiv "></div>
            <div class="col-sm-12 col-md-3 smalldiv "></div>
            <div class="col-sm-12 col-md-3 smalldiv "></div>
            <div class="col-sm-12 col-md-3 smalldiv "></div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3"
        crossorigin="anonymous"></script>
</body>

</html>