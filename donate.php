<?php
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Atlantic-Garden City United Church</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v15.0" nonce="3P7CWLbT"></script>
</head>
<body>
    <header>
        <?php require "Shared_Templates/header_template.php"; ?>
    </header>
    <section id="Donate-Text">
        <h5>Thank you! Your generosity shapes community and builds lives.</h5>
        <h2>How Can I Give?</h2>
        <p><b>PAR(Pre-Authorized Remittance)</b> -  Ideal for regular contributors, this is a monthly pre-authorized
            contribution plan that comes out of your bank account around the 20th of the month.  It's simple to change,
            stop, pause or even skip a payment.  Please contact the office for more information.
        </p>
        <p><b>E-Transfer</b> - Donations can be made directly using e-transfer.  Please direct your deposits to our
            office email: <b>atlanticgcuc@mymts.net</b>.
        </p>
        <p><b><a href="CanadaHelps.org">CanadaHelps.org</a></b><i> giving made simple</i> - Whether it's a one time
            donation or more, CanadaHelps can facilitate your giving requirements.   Customize your contributions to
            match your giving style.  CanadaHelps can process your contributions taking payments from credit cards to
            redeeming in securities.</p>
        <p><i>In addition, donations by cash or cheque can be dropped off at the church office.</i></p>
    </section>
    <section id="Donate-Links">
        <a href="memorial_fund.php">Memorial Donations</a>
    </section>
    <footer>
        <?php require "Shared_Templates/footer_template.php"; ?>
    </footer>
</body>
</html>