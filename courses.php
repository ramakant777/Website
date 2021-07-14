<?php
            // servername => localhost
            // username => root
            // password => empty
            // database name => coaching center
            $conn = mysqli_connect("localhost", "root", "", "coaching_center");
            
            // Check connection
            if($conn === false){
                die("ERROR: Could not connect. " 
                    . mysqli_connect_error());
            }
            
            // Taking all 5 values from the form data(input)
            $course =  $_REQUEST['course'];
            $topic = $_REQUEST['topic'];
            
            // Performing insert query execution
            // here our table name is college
            $sql = "INSERT INTO courses  VALUES ('$course', '$topic')";
            
            if(mysqli_query($conn, $sql)){
                echo "<script>alert('Thank you for your suggestion')</script>"; 

            } else{
                echo "ERROR: Hush! Sorry $sql. " 
                    . mysqli_error($conn);
            }
            
            // Close connection
            mysqli_close($conn);
            ?>
