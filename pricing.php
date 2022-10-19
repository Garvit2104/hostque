<?php include('include/header.php') ?>
<link rel="stylesheet" href="./styles/common.css" />
<link rel="stylesheet" href="./styles/pricing.css" />
<link rel="stylesheet" href="./styles/navbar.css" />
<title>Pricing- Hostque</title>
</head>

<body>
    <section>
        <?php include('include/navbar.php') ?>

        <h1>
            Hostque pricing
        </h1>

        <div class="pricing-cards">
            <div class="pricing-card">
                <p class="plan">Starter</p>
                <p class="description">
                    The basics for personal projects, hobby sites, or experiments.
                </p>

                <a href="./login.php">Start for free</a>

                <div class="price">
                    Free <span>forever</span>
                </div>

                <ul>
                    <li>Lorem ipsum dolor sit amet consectetur.</li>
                    <li>Lorem ipsum dolor sit amet.</li>
                    <li>Lorem ipsum dolor sit amet conse.</li>
                    <li>Lorem ipsum dolor sit amet consec tetur.</li>
                    <li>Lorem ipsum dolor sit amet cons ecte tur.</li>
                    <li>Lorem ipsum dolor sit amet consectetur.</li>
                </ul>
            </div>

            <div class="pricing-card">
                <p class="plan">Pro</p>
                <p class="description">
                    Advanced features and support for building pilot projects or small
                    sites.
                </p>

                <a href="./login.php"> Get started</a>

                <div class="price">$9 <span>per month</span></div>

                <ul>
                    <li>Everything from free plan.</li>
                    <li>Lorem ipsum dolor sit amet.</li>
                    <li>Lorem ipsum dolor sit amet conse.</li>
                    <li>Lorem ipsum dolor sit amet consec tetur.</li>
                    <li>Lorem ipsum dolor sit amet cons ecte tur.</li>
                    <li>Lorem ipsum dolor sit amet consectetur.</li>
                </ul>
            </div>

            <div class="pricing-card">
                <p class="plan">Enterprise</p>
                <p class="description">
                    Collaboration, security, & compliance for scaling web apps and dev
                    teams.
                </p>

                <a href="./login.php"> Start rocking</a>

                <div class="price">$49 <span>per month</span></div>

                <ul>
                    <li>Pro features, plus:</li>
                    <li>Lorem ipsum dolor sit amet.</li>
                    <li>Lorem ipsum dolor sit amet conse.</li>
                    <li>Lorem ipsum dolor sit amet consec tetur.</li>
                    <li>Lorem ipsum dolor sit amet cons ecte tur.</li>
                    <li>Lorem ipsum dolor sit amet consectetur.</li>
                </ul>
            </div>
        </div>
    </section>

    <?php include('include/footer.php') ?>