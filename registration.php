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
            $name =  $_REQUEST['name'];
            $email = $_REQUEST['email'];
            
            // Performing insert query execution
            // here our table name is college
            $sql = "INSERT INTO registration  VALUES ('$name', '$email')";
            
            if(mysqli_query($conn, $sql)){
                echo "<script>alert('Thank you for signing up')</script>"; 

            } else{
                echo "ERROR: Hush! Sorry $sql. " 
                    . mysqli_error($conn);
            }
            
            // Close connection
            mysqli_close($conn);
            ?>
</body>
</html>