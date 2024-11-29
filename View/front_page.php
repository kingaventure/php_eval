<?php foreach($articles as $article): ?>
    <div class="row mt-3">
            <div class="col">
                <div class="card" style="width: 18rem;">
                    <img src="article.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title"><?php  echo $article['title'] ?></h5>
                        <p class="card-text"><?php  echo $article['content'] ?></p>
                        <a href="page.html" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>

        <div class="col">
            <div class="card" style="width: 18rem;">
                <img src="article.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title"><?php  echo $article['title'] ?></h5>
                    <p class="card-text"><?php  echo $article['content'] ?></p>
                    <a href="page.html" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
        </div>

        <div class="col">
            <div class="card" style="width: 18rem;">
                <img src="article.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title"><?php  echo $article['title'] ?></h5>
                    <p class="card-text"><?php  echo $article['content'] ?></p>
                    <a href="page.html" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
        </div>
    </div>
<?php endforeach; ?>

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
