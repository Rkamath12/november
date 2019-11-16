<html>
<head>
	<title>Registration Form</title>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

</head>
<body>

    <?php if (isset($_GET['form_submitted'])): ?> //this code is executed when the form is submitted

        <h2>Thank You <?php echo $_GET['firstname']; ?> </h2>

        <p>You have been registered as
            <?php echo $_GET['firstname'] . ' ' . $_GET['lastname']; ?>
        </p>

        <p>Go <a href="/registration_form.php">back</a> to the form</p>

        <?php else: ?>
      <?php endif; ? >
</body>
</html>
