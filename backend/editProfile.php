<?php 

session_start();
    include_once "config.php";

    $unique_id = $_SESSION['unique_id'];

    // img 

    if(isset($_FILES['file']) && is_uploaded_file($_FILES['file']['tmp_name'])){
        //if file is uploaded
        $img_name = $_FILES['file']['name']; //getting uploaded img name
        $img_type = $_FILES['file']['type']; // getting uploaded img type
        $tmp_name = $_FILES['file']['tmp_name']; //temp name for save/move file to folder
        //getting img extension
        $img_explode = explode('.', $img_name);
        $img_ext = end($img_explode); //extension of uploaded img
        $extensions = ['png', 'jpg', 'jpeg']; 
        
        if(in_array($img_ext, $extensions) === true){
            //if uploaded img is valid 
            $time=time();
            $new_img_name = $time.$img_name;
            move_uploaded_file($tmp_name, "../img/".$new_img_name);
            $sql = mysqli_query($conn, "UPDATE users SET img='{$new_img_name}' WHERE unique_id = '{$unique_id}'");
            echo "success";
            
        } else {  
            echo "Zly format pliku! Prawidlowe to png/ipg/jpeg";
        }
  
    } 
    
    // img

    // About me

    $sql3 = mysqli_query ($conn, "SELECT about FROM users WHERE unique_id = '{$unique_id}'");
    $aboutDB = mysqli_fetch_assoc($sql3);
    $aboutMe = mysqli_real_escape_string($conn, $_POST['aboutMe']);
    if($aboutMe != array_values($aboutDB)[0]){
            //echo $aboutMe;
            //echo array_values($aboutDB)[0];
            $sql2 = mysqli_query($conn, "UPDATE users SET about='{$aboutMe}' WHERE unique_id = '{$unique_id}'");
            echo "success";
        } 
    
    // About me

    // Email
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $emailDB_sql = mysqli_query($conn, "SELECT email FROM users WHERE unique_id = '{$unique_id}'");
    $emailDB =  mysqli_fetch_assoc($emailDB_sql);
    if($email != $emailDB['email']){
        if(filter_var($email, FILTER_VALIDATE_EMAIL)){
            //if email is valid
            $isEmailInBase = mysqli_query($conn, "SELECT email FROM users WHERE email = '{$email}'");
            if(mysqli_num_rows($isEmailInBase) > 0 ) {
                echo "$email - Taki email juz istnieje";
            } else {
                    $sql_email_up = mysqli_query($conn,"UPDATE users SET email='{$email}' WHERE unique_id = '{$unique_id}'");
                    echo "success";
            }
        } else {
            echo "Email $email jest nieprawidlowy";
        }
        
    }

    //First Name
    $fname = mysqli_real_escape_string($conn, $_POST['inputName']);
    $fnameDB_sql = mysqli_query($conn, "SELECT fname FROM users WHERE unique_id = '{$unique_id}'");
    $fnameDB =  mysqli_fetch_assoc($fnameDB_sql);
    if ($fname != $fnameDB['fname'])
    {
        $sql_fname_up = mysqli_query($conn, "UPDATE users SET fname='{$fname}' WHERE unique_id ='{$unique_id}'");
        echo "success";
    }
    //Last Name
    $lname = mysqli_real_escape_string($conn, $_POST['inputLastName']);
    $lnameDB_sql = mysqli_query($conn, "SELECT lname FROM users WHERE unique_id = '{$unique_id}'");
    $lnameDB =  mysqli_fetch_assoc($lnameDB_sql);
    if ($lname != $lnameDB['lname'])
    {
        $sql_lname_up = mysqli_query($conn, "UPDATE users SET lname='{$lname}' WHERE unique_id ='{$unique_id}'");
        echo "success";
    }
    //Age
    $age = mysqli_real_escape_string($conn, $_POST['inputAge']);
    $ageDB_sql = mysqli_query($conn, "SELECT age FROM users WHERE unique_id = '{$unique_id}'");
    $ageDB =  mysqli_fetch_assoc($ageDB_sql);
    if ($age != $ageDB['age'])
    {
        $sql_age_up = mysqli_query($conn, "UPDATE users SET age='{$age}' WHERE unique_id ='{$unique_id}'");
        echo "success";
    }
    //Age
    $gender = mysqli_real_escape_string($conn, $_POST['inputGender']);
    $genderDB_sql = mysqli_query($conn, "SELECT gender FROM users WHERE unique_id = '{$unique_id}'");
    $genderDB =  mysqli_fetch_assoc($genderDB_sql);
    if ($gender != $genderDB['gender'])
    {
        $sql_gender_up = mysqli_query($conn, "UPDATE users SET gender='{$gender}' WHERE unique_id ='{$unique_id}'");
        echo "success";
    }

    //City
    $city = mysqli_real_escape_string($conn, $_POST['inputCity']);
    $cityDB_sql = mysqli_query($conn, "SELECT city FROM users WHERE unique_id = '{$unique_id}'");
    $cityDB =  mysqli_fetch_assoc($cityDB_sql);
    if ($city != $cityDB['city'])
    {
        $sql_city_up = mysqli_query($conn, "UPDATE users SET city='{$city}' WHERE unique_id ='{$unique_id}'");
        echo "success";
    }

    //fb
    $fb = mysqli_real_escape_string($conn, $_POST['inputFb']);
    $fbDB_sql = mysqli_query($conn, "SELECT fb FROM users WHERE unique_id = '{$unique_id}'");
    $fbDB =  mysqli_fetch_assoc($fbDB_sql);
    if ($fb != $fbDB['fb'])
    {
        $fbUrlCheck = '/^(https?:\/\/)?(www\.)?facebook.com\/[a-zA-Z0-9(\.\?)?]/';
	    $secondCheck = '/home((\/)?\.[a-zA-Z0-9])?/';
	
	    $validUrl = $fb;
	
	    if(preg_match($fbUrlCheck, $validUrl) == 1 && preg_match($secondCheck, $validUrl) == 0) {

            $sql_fb_up = mysqli_query($conn, "UPDATE users SET fb='{$fb}' WHERE unique_id ='{$unique_id}'");
            echo "success";

	    } else {
		    echo 'Link do facebooka jest nieprawidlowy';
	    }   
    }

    //Dc
    $dc = mysqli_real_escape_string($conn, $_POST['inputDc']);
    $dcDB_sql = mysqli_query($conn, "SELECT dc FROM users WHERE unique_id = '{$unique_id}'");
    $dcDB =  mysqli_fetch_assoc($dcDB_sql);
    if ($dc != $dcDB['dc'])
    {
        $sql_dc_up = mysqli_query($conn, "UPDATE users SET dc='{$dc}' WHERE unique_id ='{$unique_id}'");
        echo "success";
    }
    //fb
    $twitter = mysqli_real_escape_string($conn, $_POST['inputTt']);
    $twitterDB_sql = mysqli_query($conn, "SELECT twitter FROM users WHERE unique_id = '{$unique_id}'");
    $twitterDB =  mysqli_fetch_assoc($twitterDB_sql);
    if ($twitter != $twitterDB['twitter'])
    {
        $ttUrlCheck = '/^(https?:\/\/)?(www\.)?twitter.com\/[a-zA-Z0-9(\.\?)?]/';
	    $secondCheck = '/home((\/)?\.[a-zA-Z0-9])?/';
	
	    $validUrl = $twitter;
	
	    if(preg_match($ttUrlCheck, $validUrl) == 1 && preg_match($secondCheck, $validUrl) == 0) {

            $sql_twitter_up = mysqli_query($conn, "UPDATE users SET twitter='{$twitter}' WHERE unique_id ='{$unique_id}'");
            echo "success";

	    } else {
		    echo 'Link do twittera jest nieprawidlowy';
	    }   
    }
 
?>