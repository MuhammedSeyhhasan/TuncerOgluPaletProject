<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Form</title>
</head>
<body>
    <h1>Contact Message</h1>
        <p>Name: <?php echo e($details ['name']); ?>  </p>
        <p>Email: <?php echo e($details ['email']); ?>  </p>
        <p>Message: <?php echo e($details ['message']); ?> </p>
</body>
</html><?php /**PATH C:\xampp\htdocs\ForTuncer\resources\views/emails/ContactMail.blade.php ENDPATH**/ ?>