<?php 
    if(isset($_POST['register']))
    {
		$name = $_POST['name'];
        $phone = $_POST['phone'];
		$image = $_FILES['image']['name'];
        $image_tmp = $_FILES['image']['tmp_name'];
		$grad = $_POST['grad'];
        $address = $_POST['address'];

        move_uploaded_file($image_tmp,"images/$image");

        $con = mysqli_connect("localhost","root","","kalaiphpforms");

        $query = "insert into user (name,phone,image,grad,address) values ('$name','$phone','$image','$grad','$address')";

        $result = mysqli_query($con, $query);

        if($result==1)
        {       

        header("location:success.php?msg=Registered Successfully");
        
        }
        else {       

        echo "Registration Failed";

             }
    }
?>
<a href="index.php">Go Back</a>