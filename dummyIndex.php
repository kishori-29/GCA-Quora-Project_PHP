<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    .inner-head {
        /* background-image: url('images/Gcoeara.jpg'); */
        /* background-image: url('images/about_img'); */
        background-repeat: no-repeat;
        background-size: cover;
        display: flex;
        flex-direction: column;
        color: black;
        align-items: center;
        /* justify-content: center; */
        position: relative;

    }

    .head-name {
        /* magrgin-bottom: 10%; */
        position: absolute;
        margin-top: 23px;
        margin-bottom: 10px;
    }
    </style>
</head>

<body>
    <?php
        include "header.php";
    ?>
    <div class="container-main">
        <div class="image1 image-heading">
            <div class="inner-head">
                <img src="images/Gcoeara.jpg" alt="" class="img-responsive" style="width:100%">
                <h1 class="head-name text-center align-middle align-text-top">Government College Of Engineering And
                    Research</h1>
            </div>


        </div>
    </div>
</body>

</html>