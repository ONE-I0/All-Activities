<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <title>Static Login</title>
</head>
<body>

    <!----------------------------Login in Form design and inputs------------------------------>
    <div class="container bg-white w-25">
        <div class="d-flex justify-content-center">
            <div class="card text-center bg-light shadow mt-5 px-4 py-4">
                <i class="fa-regular fa-user-circle fa-5x "></i>
                <br>
                <form action="" method="post">
                    <select name="drpPosition" id="" class="form-control">
                        <option value="Admin" id="admin">Admin</option>
                        <option value="ContentManager" id="content">Content Manager</option>
                        <option value="System User" id="system">System User</option>
                    </select>
                    <label for="txtusername"></label>
                    <input type="text" class="form-control " name="txtusername" id="txtusername" placeholder="User Name">
                    <label for="txtpassword"></label>
                    <input type="password" name="txtpassword" class="form-control" id="txtpassword" placeholder="Password">
                    <button type="submit" class="btn btn-primary mt-2 w-100" name="btnSign">Sign In</button>
                </form>
                <!---------------------------------Array with static values------------------------------->
                <?php 
                    $userPositions = array(
                        array(
                            'positions' => 'Admin',
                            'username' => 'admin',
                            'password' => 'pass1234',
                        ),
                        array(
                            'positions' => 'Admin',
                            'username' => 'admin_1',
                            'password' => 'pass12345',
                        ),
                        array(
                            'positions' => 'ContentManager',
                            'username' => 'contentmanager',
                            'password' => 'content123',
                        ),
                        array(
                            'positions' => 'Content Manager',
                            'username' => 'contentmanager_1',
                            'password' => 'contentmanager123',
                        ),
                        array(
                            'positions' => 'System User',
                            'username' => 'systemuser',
                            'password' => 'user123',
                        ),
                    );
                    //--------------------------------condition for the program----------------------------//
                    if(isset($_POST['btnSign'])){
                        $temp = $_POST['drpPosition'];
                        $user = $_POST['txtusername'];
                        $pass = $_POST['txtpassword'];

                        if($temp == $userPositions[0]['positions'] && $user == $userPositions[0]['username'] && $pass == $userPositions[0]['password']){
                            echo '<div class="alert alert-success fixed-top container-fluid" style="width:19.5%;" role="alert">Welcome: '. $temp .'
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </div>';
                        }
                        elseif($temp == $userPositions[1]['positions'] && $user == $userPositions[1]['username'] && $pass == $userPositions[1]['password']){
                            echo '<div class="alert alert-success fixed-top container-fluid" style="width:19.5%;" role="alert">Welcome: '. $temp .'
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </div>';
                        }
                        elseif($temp == $userPositions[2]['positions'] && $user == $userPositions[2]['username'] && $pass == $userPositions[2]['password']){
                            echo '<div class="alert alert-success fixed-top container-fluid" style="width:19.5%;" role="alert">Welcome: '. $temp .'
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </div>';
                        }
                        elseif($temp == $userPositions[3]['positions'] && $user == $userPositions[3]['username'] && $pass == $userPositions[3]['password']){
                            echo '<div class="alert alert-success fixed-top container-fluid" style="width:19.5%;" role="alert">Welcome: '. $temp .'
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </div>';
                        }
                        elseif($temp == $userPositions[4]['positions'] && $user == $userPositions[4]['username'] && $pass == $userPositions[4]['password']){
                            echo '<div class="alert alert-success fixed-top container-fluid" style="width:19.5%;" role="alert">Welcome: '. $temp .'
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </div>';
                        }
                        else
                        echo '<div class="alert alert-danger fixed-top container-fluid" style="width:19.5%;" role="alert">Invalid Username / Password
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                            </div>'; 
                        
                }  


                    /*--------------------------------------------Prints all username to check---------------------------------
                    foreach ($userPositions as $keyPositions => $valuePositions) {
                        foreach ($valuePositions as $key => $value) {
                          echo $value . '<br>';
                        }
                        echo '<br>';
                      }
                      */
                ?>
            </div>    
         </div>     
     </div>
        
</body>
<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
</html>