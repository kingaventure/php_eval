<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
<div class="container">
    <header class="d-flex justify-content-center py-3">
        <ul class="nav nav-pills">
            <li class="nav-item"><a href="#" class="nav-link active" aria-current="page">Home</a></li>
            <li class="nav-item"><a href="#" class="nav-link">Features</a></li>
            <li class="nav-item"><a href="#" class="nav-link">Pricing</a></li>
            <li class="nav-item"><a href="#" class="nav-link">FAQs</a></li>
            <li class="nav-item"><a href="#" class="nav-link">About</a></li>
        </ul>
    </header>
    <div class="row justify-content-center">
        <div class="col">
            <form method="post" class="w-100 d-flex justify-content-center">
                <input class="form-control form-control-lg w-75" type="text" placeholder="Saisir ici votre recherche" aria-label=".form-control-lg example">
                <button type="button" class="btn btn-outline-primary ms-1">OK</button>
            </form>
        </div>
    </div>
    <div class="row mt-5">
        <div class="col-3">
            <div class="card" style="width: 18rem;">
                <img src="article.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title"><?php  echo $user[1]['title'] ?></h5>
                    <p class="card-text"><?php  echo $user[1]['content'] ?></p>
                    <a href="page.html" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
        </div>
        <div class="col-3">
            <div class="card" style="width: 18rem;">
                <img src="article.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title"><?php  echo $user[2]['title'] ?></h5>
                    <p class="card-text"><?php  echo $user[2]['content'] ?></p>
                    <a href="page.html" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
        </div>
        <div class="col-3">
            <div class="card" style="width: 18rem;">
                <img src="article.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title"><?php  echo $user[3]['title'] ?></h5>
                    <p class="card-text"><?php  echo $user[3]['content'] ?></p>
                    <a href="page.html" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
        </div>
        <div class="col-3">
            <div class="card" style="width: 18rem;">
                <img src="article.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title"><?php  echo $user[4]['title']?></h5>
                    <p class="card-text"><?php  echo $user[4]['content'] ?></p>
                    <a href="page.html" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
        </div>
    </div>
    <div class="row mt-5">
        <div class="col-3">
            <div class="card" style="width: 18rem;">
                <img src="article.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title"><?php  echo $user[5]['title'] ?></h5>
                    <p class="card-text"><?php  echo $user[5]['content'] ?></p>
                    <a href="page.html" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
        </div>
        <div class="col-3">
            <div class="card" style="width: 18rem;">
                <img src="article.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title"><?php  echo $user[6]['title'] ?></h5>
                    <p class="card-text"><?php  echo $user[6]['content'] ?></p>
                    <a href="page.html" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
        </div>
        <div class="col-3">
            <div class="card" style="width: 18rem;">
                <img src="article.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title"><?php  echo $user[7]['title'] ?></h5>
                    <p class="card-text"><?php  echo $user[7]['content'] ?></p>
                    <a href="page.html" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
        </div>
        <div class="col-3">
            <div class="card" style="width: 18rem;">
                <img src="article.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title"><?php  echo $user[8]['title'] ?></h5>
                    <p class="card-text"><?php  echo $user[8]['content'] ?></p>
                    <a href="page.html" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
        </div>
    </div>
    <div class="row mt-5">
        <div class="col-3">
            <div class="card" style="width: 18rem;">
                <img src="article.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title"><?php  echo $user[9]['title'] ?></h5>
                    <p class="card-text"><?php  echo $user[9]['content'] ?></p>
                    <a href="page.html" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
        </div>
        <div class="col-3">
            <div class="card" style="width: 18rem;">
                <img src="article.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title"><?php  echo $user[10]['title'] ?></h5>
                    <p class="card-text"><?php  echo $user[10]['content'] ?></p>
                    <a href="page.html" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
        </div>
        <div class="col-3">
            <div class="card" style="width: 18rem;">
                <img src="article.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title"><?php  echo $user[11]['title'] ?></h5>
                    <p class="card-text"><?php  echo $user[11]['content'] ?></p>
                    <a href="page.html" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
        </div>
        <div class="col-3">
            <div class="card" style="width: 18rem;">
                <img src="article.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title"><?php  echo $user[12]['title'] ?></h5>
                    <p class="card-text"><?php  echo $user[12]['content'] ?></p>
                    <a href="page.html" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
        </div>
    </div>
    <div class="row mt-5">
        <nav aria-label="Page navigation example">
            <ul class="pagination justify-content-center">
                <li class="page-item disabled">
                    <a class="page-link">Previous</a>
                </li>
                <li class="page-item"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item">
                    <a class="page-link" href="#">Next</a>
                </li>
            </ul>
        </nav>
    </div>
    <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
        <p class="col-md-4 mb-0 text-body-secondary">Â© 2024 Company, Inc</p>

        <a href="/" class="col-md-4 d-flex align-items-center justify-content-center mb-3 mb-md-0 me-md-auto link-body-emphasis text-decoration-none">
            <svg class="bi me-2" width="40" height="32"><use xlink:href="#bootstrap"></use></svg>
        </a>

        <ul class="nav col-md-4 justify-content-end">
            <li class="nav-item"><a href="#" class="nav-link px-2 text-body-secondary">Home</a></li>
            <li class="nav-item"><a href="#" class="nav-link px-2 text-body-secondary">Features</a></li>
            <li class="nav-item"><a href="#" class="nav-link px-2 text-body-secondary">Pricing</a></li>
            <li class="nav-item"><a href="#" class="nav-link px-2 text-body-secondary">FAQs</a></li>
            <li class="nav-item"><a href="#" class="nav-link px-2 text-body-secondary">About</a></li>
        </ul>
    </footer>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>