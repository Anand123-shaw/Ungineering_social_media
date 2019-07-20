<?php
    include('db.php');

    $sql ="SELECT * from users INNER JOIN statuses on users.id=statuses.user_id order by statuses.id DESC";
    $result =mysqli_query($conn,$sql);
    if(! $result){
        die("Error:".$sql."<br/>".mysqli_error($conn));
    }
    
    while ( $row=mysqli_fetch_array($result)){
        if($row["status"]!=NULL)
        {
        ?>
            <div class="row content_block" >
                <div class="row content_name" >
                    <h4><?php echo $row["name"]; ?></h4>
                </div>
                <div class="row content_status" >
                    <p><?php echo $row["status"]; ?></p>
                </div>
                <div class="row content_date" >
                    <p><?php echo "Time: " . $row["created_time"] . " Hrs IST | " . $row["created_date"]; ?></p>
                </div>
            </div>
        <?php 
        }    
    }
    mysqli_close($conn);
?>  
