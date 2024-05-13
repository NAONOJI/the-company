<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Form</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <!-- Include Bootstrap CSS (assuming you are using Bootstrap) -->
</head>

<body class="bg-light">
    <div style="height: 100vh;">
        <div class="row h-100 m-0">
            <div class="card w-25 my-auto mx-auto">
                <div class="card-header bg-white border-0 py-3">
                    <h1 class="text-center">LOGIN</h1>
                </div>
                <div class="card-body">
                    <form action="../actions/login.php" method="post">
                        <input type="text" name="username" placeholder="USERNAME" class="form-control mb-2" required autofocus>
                        <input type="password" name="password" placeholder="PASSWORD" class="form-control mb-2" required autofocus>
                        <button type="submit" class="btn btn-primary w-100">Log in</button>
                    </form>

                    <p class="mb-3 text-center mt-3"><a href="../views/register.php">Create account</a></p>
                </div>
            </div>
        </div>
    </div>
</body>

</html>