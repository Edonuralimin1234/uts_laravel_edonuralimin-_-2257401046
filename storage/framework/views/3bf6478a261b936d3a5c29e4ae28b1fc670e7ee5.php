<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="<?php echo e(asset('css/style.css')); ?>">
    <style>
        body {
    font-family: Arial, sans-serif;
    background-color: #f4f4f9;
    color: #333;
    margin: 0;
    padding: 0;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    height: 100vh;
    text-align: center;
}

h1 {
    color: #0066cc;
}

form {
    display: flex;
    flex-direction: column;
    gap: 10px;
    margin: 20px 0;
}

label {
    font-weight: bold;
}

input {
    padding: 10px;
    width: 300px;
    border: 1px solid #ddd;
    border-radius: 5px;
}

button {
    padding: 10px 20px;
    border: none;
    background-color: #0066cc;
    color: white;
    border-radius: 5px;
    cursor: pointer;
}

button:hover {
    background-color: #004999;
}

.btn {
    display: inline-block;
    margin: 10px 5px;
    padding: 10px 20px;
    background-color: #0066cc;
    color: white;
    text-decoration: none;
    border-radius: 5px;
    cursor: pointer;
}

.btn:hover {
    background-color: #004999;
}

    </style>
</head>
<body>
    <section class="form-section">
        <h1>Login</h1>
        <form action="/login" method="POST">
            <?php echo csrf_field(); ?>
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>

            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>

            <button type="submit" class="btn">Login</button>
        </form>
        <a href="/" class="btn">Kembali</a>
    </section>
</body>
</html>
<?php /**PATH C:\Users\LENOVO\2257401046\resources\views/login.blade.php ENDPATH**/ ?>