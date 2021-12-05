    <style>
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

.inner-head {
    /* background-image: url('images/Gcoeara.jpg'); */
    /* background-image: linear-gradient(rgba(4, 6, 30, 0.8), rgba(4, 9, 20, 0.9)); */
    background-repeat: no-repeat;
    background-size: cover;
    display: flex;
    flex-direction: column;
    color: white;
    align-items: center;
    /* justify-content: center; */
    position: relative;

}

.head-name {
    /* magrgin-bottom: 10%; */
    position: absolute;
    margin-top: 23px;
    margin-bottom: 10px;
    font-size: 4rem;
    text-shadow:
        0.06em 0.07em 0 rgb(55, 56, 4),
        0.09em 0.08em 0 rgb(173, 233, 34),
        0.08em 0.09em 0 rgb(127, 70, 225);
}

@media(max-width:700px) {
    .head-name {
        font-size: 2.5rem;
    }
}

@media(max-width:455px) {
    .head-name {
        font-size: 1.3rem;
        /* word-break: break-word;
            overflow: auto; */
    }

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
        <?php
        include "footer.php";
    ?>
    </body>

    </html>