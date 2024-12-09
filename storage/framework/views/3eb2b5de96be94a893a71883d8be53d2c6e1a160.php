<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="<?php echo e(asset('css/style.css')); ?>">
</head>
<body>
    <section class="form-section">
        <h1>Pendaftaran</h1>
        <form action="/register" method="POST">
            <?php echo csrf_field(); ?>
            <label for="name">Nama:</label>
            <input type="text" id="name" name="name" required>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>

            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>

            <button type="submit" class="btn">Daftar</button>
        </form>
        <a href="/" class="btn">Kembali</a>
    </section>
</body>
</html>
<?php /**PATH C:\Users\LENOVO\2257401046\resources\views/register.blade.php ENDPATH**/ ?>