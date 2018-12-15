<?php

include('db_connection.php');

if(isset($_POST['search']))
{
    // id to search
    $email = $_POST['email'];
        
    // mysql search query
    $query = "SELECT * FROM users WHERE email='$email'";
    
    $result = mysqli_query($db, $query);
    
    // if id exist 
    // show data in inputs
    if(mysqli_num_rows($result) > 0)
    {
      while ($row = mysqli_fetch_array($result))
      {
        $email = $row['email'];
      }  
    }

    if($email)
    {
      echo $email;
    }
    
    // if the id not exist
    // show a message and clear inputs
    else {
        echo "Email Not Found!";
            $email = "";
            $lname = "";
            $age = "";
    }
    
    
    mysqli_free_result($result);
    mysqli_close($db);
    
}

// in the first time inputs are empty
else{
    $email = "";
    $lname = "";
    $age = "";
}

?>