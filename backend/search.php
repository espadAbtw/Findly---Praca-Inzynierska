<?php 
    session_start();
    include_once "config.php";
    
    $agemin = $_POST['agemin'];
    $agemax = $_POST['agemax'];
    if(isset($_POST['sex'])){
        $sex = $_POST['sex'];
    }
   
    
   
    

    if(!empty($agemin) && !empty($agemax) && !empty($sex) ){
        $sql = mysqli_query($conn, "SELECT * FROM users WHERE gender = '{$sex}'AND( age >= '{$agemin}' AND age<='{$agemax}')");
        //var_dump(mysqli_error($conn));
        if(mysqli_num_rows($sql) > 0 ) {
             $_SESSION['countRows'] =mysqli_num_rows($sql);
            $row = mysqli_fetch_assoc($sql);
            $_SESSION['rows'] = $row;
            echo "Znaleziono ".$_SESSION['countRows']." uzytkownikow";
            

        } else {
            echo "Nie ma takich użytkowniów";
        }
        

    } else {
        echo$agemin;
        echo$agemax;
        echo$sex;
        echo "Wymagane wszystkie pola wypelnione";
    }
?>