<?php
    if(isset($_POST['submit']))
    {
        require_once "validate.php";
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Send Back To Form</title>
</head>
    

<body>

<fieldset>

        <legend>Employment Form</legend>

        <form action="" method="post">

                <div>
                    <label for="">First Name</label>
                    <br/>
                    <input value="<?php echo @$_POST['first']; ?>" type="text" name="first">
                    <?php if(isset($err_firstname)) echo '<span style="color:red">'.$err_firstname.'</span>'; ?>
                </div>
                <br/>

                <div>
                    <label for="">Last Name</label>
                    <br/>
                    <input value="<?php echo @$_POST['last']; ?>" type="text" name="last">
                    <?php if(isset($err_lastname)) echo '<span style="color:red">'.$err_lastname.'</span>'; ?>
                </div>
                <br/>

                <div>
                    <label for="">Email Address</label>
                    <br/>
                    <input value="<?php echo @$_POST['email']; ?>" type="text" name="email">
                    <?php if(isset($err_email)) echo '<span style="color:red">'.$err_email.'</span>'; ?>
                </div>
                <br/>

                <div>
                    <label for="">Phone Number</label>
                    <br/>
                    <input value="<?php echo @$_POST['number']; ?>" type="text" name="number">
                    <?php if(isset($err_number)) echo '<span style="color:red">'.$err_number.'</span>'; ?>
                </div>
                <br/>

                <div>
                    <label for="">Country</label>
                    <br/>
                    <input value="<?php echo @$_POST['country']; ?>" type="text" name="country">
                    <?php if(isset($err_country)) echo '<span style="color:red">'.$err_country.'</span>'; ?>
                </div>
                <br/>

                <div>
                    <label for="">State</label>
                    <br/> 
                    <input value="<?php echo @$_POST['state']; ?>" type="text" name="state">
                    <?php if(isset($err_state)) echo '<span style="color:red">'.$err_state.'</span>'; ?>
                </div>
                <br/>

                <div>
                    <label for="">Address</label>
                    <br/> 
                    <textarea name="address"><?php echo @$_POST['address']; ?></textarea>
                    <?php if(isset($err_address)) echo '<span style="color:red">'.$err_address.'</span>'; ?>
                </div>
                <br/> <br/>

                <button type="submit" name="submit"  value="submit">Submit</button>
        </form>

</fieldset>

</body>
</html>