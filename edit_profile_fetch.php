<?php
    session_start();
    include('db.php');
    $id=$_SESSION['id'];
    $sql ="SELECT * from users where id=$id";
    $result =mysqli_query($conn,$sql);
    if(! $result){
        die("Error:".$sql."<br/>".mysqli_error($conn));
    }
    
    $row=mysqli_fetch_array($result);
    ?>
        <div>
            <p><b>Name</b></p>
            <input type="text" name="name" value="<?php if(isset($row['name'])) {echo $row['name'];} ?>"/>
        </div>
        <div>
            <p><b>Email</b></p>
            <input type="text" name="email" value="<?php if(isset($row['name'])) {echo $row['email'];} ?>"/>
        </div>
        <div>
            <p><b>Password</b></p>
            <input type="password" name="password" value="<?php if(isset($row['name'])) {echo $row['password'];} ?>">
        </div>
        <div>
             <p><b>College</b></p>
             <input type=text name="college_name" value="<?php if(isset($row['name'])) {echo $row['institute_name'];} ?>"/>
        </div>
        <div>
             <p><b>Phone Number</b></p>
             <input type=text name="phone_num" value="<?php if(isset($row['name'])) {echo $row['phone_no'];} ?>"/>
        </div>
            
    <?php    
    mysqli_close($conn);
?>  
