<?php require_once 'templates/header.php' ?>
<table class="table table-striped table-bordered">
    <tr>
        <th>Username</th>
        <th>Email</th>
        <th>Password</th>
        <th>Number</th>
        <th>Message</th>
        <th>Provinces</th>
        <th>Gender</th>
        <th>Subject</th>
    </tr>
    <?php
  
    ?>
        <tr>
            <td><?php echo $_POST['name']; ?></td>
            <td><?php echo $_POST['email']; ?></td>
            <td><?php echo $_POST['pass']; ?></td>
            <td><?php echo $_POST['num']; ?></td>
            <td><?php echo $_POST['mess']; ?></td>
            <td><?php echo $_POST['province']; ?></td>
            <td><?php echo $_POST['gender'] ?></td>
            <td>
                <?php 
                   // subjects

                   if (isset($_POST)){
                       $allSubject = $_POST['subject'];
                       foreach ($allSubject as $sub){
                           echo $sub . " ";
                       }
                   }
                ?>
            </td>

        </tr>
 
</table>
<?php require_once 'templates/footer.php' ?>