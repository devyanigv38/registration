<?php

// Upload photo
$photoName = $_FILES["photo"]["name"];
$photoTmp = $_FILES["photo"]["tmp_name"];
$uploadPath = "uploads/" . $photoName;

move_uploaded_file($photoTmp, $uploadPath);

?>

<!DOCTYPE html>
<html>
<head>
    <title>Registration Details</title>
    <link rel="stylesheet" href="style.css">
    <style>
        .details-box {
            background: #fff;
            padding: 25px;
            width: 60%;
            margin: auto;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
        img {
            width: 120px;
            height: 120px;
            border-radius: 5px;
            margin-bottom: 15px;
        }
    </style>
</head>
<body>

<div class="details-box">
    <h2>Your Registration Details</h2>

    <img src="<?php echo $uploadPath; ?>" alt="Uploaded Photo">

    <p><strong>Name:</strong> <?= $_POST['fullname'] ?></p>
    <p><strong>Email:</strong> <?= $_POST['email'] ?></p>
    <p><strong>Phone:</strong> <?= $_POST['phone'] ?></p>
    <p><strong>Date of Birth:</strong> <?= $_POST['dob'] ?></p>
    <p><strong>Gender:</strong> <?= $_POST['gender'] ?></p>

    <h3>Address</h3>
    <p><?= $_POST['address'] ?>, <?= $_POST['city'] ?>, <?= $_POST['state'] ?> - <?= $_POST['pincode'] ?></p>

    <h3>Academic Details</h3>
    <p><strong>Course:</strong> <?= $_POST['course'] ?></p>
    <p><strong>Qualification:</strong> <?= $_POST['qualification'] ?></p>

</div>

</body>
</html>