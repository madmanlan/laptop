<!Docktype Html>
<html>

    <head>
       
    </head>

    <Body>
<form   method="post" enctype="multipart/form-data">	

 <input type="file" name="file">	

 <button type="submit" name="submit">UPLOAD</button>	

  </form>
  



 
<?php


if (isset($_POST['submit'])) {
    $file = $_FILES['file'];
    $fileName = $_FILES['file']['name'];
    $fileTmpName  = $_FILES['file']['tmp_name'];
    $fileSize = $_FILES['file']['size'];
    $fileType = $_FILES['file']['type'];
    $fileError = $_FILES['file']['error'];
    $fileExt = explode('.', $fileName);
    $fileActualExt = strtolower(end($fileExt));
    $allowed = array('jpg', 'jpeg', 'png', 'pdf'); 
    if (in_array($fileActualExt, $allowed)) {
        if ($fileError == 0) { 
            if ($fileSize < 10000000) { 
                $fileNameNew = uniqid('',true).".".$fileActualExt;
                $fileDestination = 'uploads/'.$fileNameNew;
                move_uploaded_file($fileTmpName, $fileDestination);
                header("Location: indx.php?uploadsuccess");
            } else { 
                echo "Your file is too big!";
            }    
        } else { 
                echo "There was a error!";
        }    
    } else { 
                echo "File type Problem!";
    }    
}
?>

</Body>

</html><?php