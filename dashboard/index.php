<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to the LAMP-Docker environment</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <nav class="navbar navbar-light bg-light py-4">
        <div class="container">
          <a class="navbar-brand" href="/">
            DockerLAMP environment
          </a>
          <div class="d-inline">
                <a target="_blank" href="<?= "http://$_SERVER[SERVER_NAME]:8080"; ?>" class="btn btn-primary">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-link" viewBox="0 0 16 16">
                        <path d="M6.354 5.5H4a3 3 0 0 0 0 6h3a3 3 0 0 0 2.83-4H9c-.086 0-.17.01-.25.031A2 2 0 0 1 7 10.5H4a2 2 0 1 1 0-4h1.535c.218-.376.495-.714.82-1z"/>
                        <path d="M9 5.5a3 3 0 0 0-2.83 4h1.098A2 2 0 0 1 9 6.5h3a2 2 0 1 1 0 4h-1.535a4.02 4.02 0 0 1-.82 1H12a3 3 0 1 0 0-6H9z"/>
                    </svg>
                    PHPMyAdmin
                </a>
                <a target="_blank" href="<?= "http://$_SERVER[SERVER_NAME]:8000"; ?>" class="btn btn-dark">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-link" viewBox="0 0 16 16">
                        <path d="M6.354 5.5H4a3 3 0 0 0 0 6h3a3 3 0 0 0 2.83-4H9c-.086 0-.17.01-.25.031A2 2 0 0 1 7 10.5H4a2 2 0 1 1 0-4h1.535c.218-.376.495-.714.82-1z"/>
                        <path d="M9 5.5a3 3 0 0 0-2.83 4h1.098A2 2 0 0 1 9 6.5h3a2 2 0 1 1 0 4h-1.535a4.02 4.02 0 0 1-.82 1H12a3 3 0 1 0 0-6H9z"/>
                    </svg>
                    Apache Server
                </a>
            </div>
        </div>
    </nav>
    <section class="row justify-content-center align-items-center hero">
        <div class="col-lg-6 text-center p-4">
            <h1>It Works! Now you have a LAMP Stack environment using Docker</h1>
            <h5 class="text-secondary">The stack you already know and rely, using the most advanced container solution</h5>
            <div class="d-inline">
                <img src="img/mysql.png" class="tech-icon" alt="MySQL Icon">
                <img src="img/php.png" class="tech-icon" alt="PHP Icon">
                <img src="img/pma.svg" class="tech-icon" alt="PHPMyAdmin Icon">
            </div>
            <br>
        </div>
    </section>
    <section class="row justify-content-center padding-y">
        <div class="col-12 text-center">
            <h2>Some instructions before use it</h2>
        </div>
            <div class="col-lg-5 text-center">
            <ul class="list-group list-group-flush">
                <li class="list-group-item">1. You can change the database credentials on the <a href="<?= "http://$_SERVER[SERVER_NAME]:8000/docker-compose.yml" ?>">docker-compose.yml</a> file.</li>
                <li class="list-group-item">2. Before start using this container, delete the dashboard folder and the content inside <b>index.php</b> file</li>
                <li class="list-group-item">3. You can add Redis, MongoDB and other containers if you want. This package contains only the basic LAMP server toolkit</li>
            </ul>
        </div>
    </section>
</body>
</html>