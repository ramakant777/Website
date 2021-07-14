<!DOCTYPE html>
<html>
  
<head>
    <title>Insert Page page</title>
</head>
  
<body>
    <?php
    
            // servername => localhost
            // username => root
            // password => empty
            // database name => coaching_center
            $conn = mysqli_connect("localhost", "root", "", "coaching_center");
            
            // Check connection
            if($conn === false){
                die("ERROR: Could not connect. " 
                    . mysqli_connect_error());
            }
            
            // Taking all 4 values from the form data(input)
            $name =  $_REQUEST['name'];
            $email = $_REQUEST['email'];
            $subject = $_REQUEST['subject'];
            $message = $_REQUEST['message'];
            
            // Performing insert query execution
            // here our table name is college
            $sql = "INSERT INTO contact VALUES ('$name', '$email', '$subject', '$message')";
            
            if(mysqli_query($conn, $sql)){
                echo "<script>alert('Thank you for your feedback');</script>";

            } else{
                echo "ERROR: Hush! Sorry $sql. " 
                    . mysqli_error($conn);
            }
            
            // Close connection
            mysqli_close($conn);
            ?>
</body>
</html>