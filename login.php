<?php 
  session_start();
  if(isset($_SESSION['unique_id'])){
    header("location: main.php");
  }
?>

<?php include_once "header.php"; ?>

<body>
<div class="loginStyle">
  <div class="wrapper">
    <section class="form login">
      <header>Findly</header>
      <form action="#" method="POST" enctype="multipart/form-data" autocomplete="off">
        <div class="error-txt"></div>
        <div class="field input">
          <label>Email</label>
          <input type="text" name="email" placeholder="Wprowadź swój email">
        </div>
        <div class="field input">
          <label>Password</label>
          <input type="password" name="password" placeholder="Wprowadź swoje hasło">
        </div>
        <div class="field button">
          <input type="submit" name="submit" value="Continue to Chat">
        </div>
      </form>
      <div class="link">Not yet signed up? <a href="index.php">Signup now</a></div>
    </section>
  </div>
</div>
  
  <script src="js/login.js"></script>

</body>
</html>
