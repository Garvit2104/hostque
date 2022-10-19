<?php include('include/header.php') ?>
<link rel="stylesheet" href="./styles/common.css" />
<link rel="stylesheet" href="./styles/contact.css" />
<link rel="stylesheet" href="./styles/navbar.css" />
<title>Contact- Hostque</title>
</head>

<body>
    <section class="contact-main">
        <?php include('include/navbar.php') ?>

        <div class="contact-main-text">
            <h1>Our teams are here to help</h1>
            <p>
                Get in touch and let us know how we can help. We’ll help you combine
                the flexibility of the modern web with the control and compliance your
                business needs.
            </p>
            <a href="#contact">Need help?</a>
        </div>
    </section>

    <section class="contact-form" id="contact">
        <h1>Contact our team directly</h1>
        <form action="https://formsubmit.co/2e2a7dd2923d20891408cc900cbfca56" method="POST">
            <input type="text" name="fname" placeholder="First name" required />
            <input type="text" name="lname" placeholder="Last name" required />
            <input type="email" name="email" placeholder="Email address" required />
            <input type="text" name="phone" placeholder="Phone" required />
            <input type="text" name="company" placeholder="Company/organization" required />
            <textarea name="query" id="" cols="30" rows="5" placeholder="Project details or questions"></textarea>

            <button type="submit">Submit</button>
        </form>

        <div class="social-medias">
            <h3>Contact us on social media</h3>
            <ul>
                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                <li><a href="#"><i class="fa fa-youtube"></i></a></li>
                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                <li><a href="mailto:contact@garvitrangi21@gmail.com"><i class="fa fa-envelope"></i></a></li>
            </ul>
        </div>
    </section>
    <?php include('include/footer.php') ?>