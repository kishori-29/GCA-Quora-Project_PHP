<body>
    <?php
    include "header.php";
?>
    <div class="container align-center my-4">
        <form class="signup-form" action="#">
            <div class="mb-3">
                <label for="username" class="form-label">Username:</label>
                <input name="username" type="text" class="form-control" id="username" placeholder="Enter your username">
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email Id:</label>
                <input name="email" type="email" class="form-control" id="email" aria-describedby="emailHelp"
                    placeholder="Enter your email id.">
            </div>
            <div class="mb-3">
                <label for="rollno" class="form-label">Roll No:</label>
                <input name="rollno" type="number" class="form-control" id="rollno" placeholder="Enter your roll no.">
            </div>

            <div class="mb-3">
                <label for="password" class="form-label">Password:</label>
                <input name="password" type="password" class="form-control" id="password">
            </div>
            <div class="mb-3">
                <label for="cpassword" class="form-label">Confirm Password:</label>
                <input name="cpassword" type="password" class="form-control" id="cpassword">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</body>

</html>