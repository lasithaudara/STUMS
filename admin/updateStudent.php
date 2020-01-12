<?php 
    include 'dbConfig.php';
    //$stmt = $conn->prepare('SELECT * FROM student');
    //$stmt->execute();
    //$users= $stmt->fetchAll();

    $sql = "SELECT * FROM student;";
    $result = mysqli_query($conn, $sql);
  ?>
<section class="content-panel">
    
    <div class="row mt">
        <div class="col-md-12">
            <div class="content-panel">
            <?php 
                if ($result->num_rows > 0) {
                    echo "<table class=\"table table-striped table-advance table-hover\">";
                    echo "<thead>
                        <tr>
                            <th><i class=\"fa fa-user-o\"></i> Name</th>
                            <th><i class=\"fa fa-registered\"></i> Reg No</th>
                            <th><i class=\"fa fa-address-card-o \"></i> EP No</th>
                            <th><i class=\" fa fa-address-book-o\"></i> Address</th>
                            <th><i class=\" fa fa-phone\"></i> Contact</th>
                            <th><i class=\" fa fa-university\"></i> Dept</th>
                            <th><i class=\" fa fa-ellipsis-v \"></i> Year</th>
                            <th></th>
                        </tr>
                    </thead>";
                }

            ?>
            
                    <tbody>
                        
                        <?php
                         while($row = $result->fetch_assoc()) {
                                echo "<tr>
                                        <td>".$row["name"]."</td>
                                        <td>".$row["regNo"]."</td>
                                        <td>".$row["epNo"]."</td>
                                        <td>".$row["address"]."</td>
                                        <td>".$row["contactNo"]."</td>
                                        <td>".$row["dept"]."</td>
                                        <td>".$row["year"]."</td>
                                        <td>
                                            <button class=\"btn btn-success btn-xs\"><i class=\"fa fa-check\"></i></button>
                                            <button class=\"btn btn-primary btn-xs\"><i class=\"fa fa-pencil\"></i></button>
                                            <button class=\"btn btn-danger btn-xs\"><i class=\"fa fa-trash-o \"></i></button>
                                        </td>"
                                        ;
                         }
                        ?>

                    </tbody>
                </table>
            </div><!-- /content-panel -->
        </div><!-- /col-md-12 -->
    </div><!-- /row -->
</section>