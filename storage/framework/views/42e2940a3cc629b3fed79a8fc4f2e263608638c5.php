<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Bang Request</title>
</head>
<body>
    Hi,

    <h2>New bang request </h2>
    
    <p>Bang ID:        <?php echo e($userData['bangId']); ?> </p>
    <p>Type:           <?php echo e($userData['bang_type']); ?> </p>
    <p>First Name:     <?php echo e($userData['first_name']); ?> </p>
    <p>Last Name:      <?php echo e($userData['last_name']); ?></p>
    <p>Address:        <?php echo e($userData['address']); ?> </p>
    <p>Mobile:         <?php echo e($userData['mobile_number']); ?> </p>
    <p>Email:          <?php echo e($userData['user_email']); ?> </p>


    Thanks

</body>
</html><?php /**PATH E:\xampp\htdocs\MVP\resources\views/frontend/emails/bang_request_email.blade.php ENDPATH**/ ?>