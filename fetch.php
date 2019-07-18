<?php
                include('db.php');
    
                $sql="SELECT * FROM statuses";
                $result=mysqli_query($conn,$sql);
                $sql1="select users.name from users INNER JOIN statuses on users.id=statuses.user_id order by statuses.created_time ASC";
                $result1=mysqli_query($conn,$sql1);

    
                if(! $result){
                    die("Error:".$sql."<br/>".mysqli_error($conn));
                }
                while ( $row=mysqli_fetch_array($result)){
                    $row1=mysqli_fetch_array($result1);
                    if($row["status"]!=NULL)
                    {
                ?>
            
                    <div class="row content_block" >
                        <div class="row content_name" >
                            <h4><?php echo $row1["name"]; ?></h4>
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
