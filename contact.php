<body>
    <?php
        include "header.php";
    ?>
    <div class="container my-4">
        <form class="signup-form" action="#">
            <div class="mb-3">
                <label for="email" class="form-label">Email Id:</label>
                <input name="email" type="email" class="form-control" id="email" aria-describedby="emailHelp"
                    placeholder="Enter your email id.">
            </div>
            <div class="mb-3">
                <label for="name" class="form-label">Full Name</label>
                <input name="name" type="text" class="form-control" id="name" placeholder="Enter your full name.">
            </div>
            <div class="mb-3">
                <label for="phone" class="form-label">Phone No:</label>
                <input name="phone" type="number" class="form-control" id="phone" placeholder="Enter your phone no.">
            </div>

            <div class="mb-3">
                <label for="message" class="form-label">Message</label>
                <textarea name="message" type="text" class="form-control" id="message" row="4"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
    <?php
        include "footer.php";
    ?>
</body>

</html>


<!-- Government College of Engineering & Research
Avasari - Khurd,
Taluka - Ambegaon,
District - Pune, 412405
Tel : 02133- 230582
Fax : 02133-230583
Email: office.gcoeavasari@dtemaharashtra.gov.in
Website: gcoeara.ac.in 
Developed & Managed by   Government College of Engineering & Research Avasari ,Pune.
 Web-Information-Manager (Website Content Managed by Computer Engineering Department)
 Copyright © GCOEAR, Avasari Khurd

-->