<?php 
include "inc/header.php"; 
session_start();

// echo '<pre>';
// var_dump($products);
// echo '</pre>';

// echo '<pre>';
// var_dump($_SESSION);
// echo '</pre>';
?>

<!--Main Navigation-->
<header>
  <!-- Jumbotron -->
  <div class="p-3 text-center bg-white border-bottom">
    <div class="container">
      <div class="row gy-3">
        <!-- Left elements -->
        <div class="col-lg-2 col-sm-4 col-4">
          <a href="https://mdbootstrap.com/" target="_blank" class="float-start">
            <img src="https://mdbootstrap.com/img/logo/mdb-transaprent-noshadows.png" height="35" />
          </a>
        </div>
        <!-- Left elements -->

        <!-- Center elements -->
        <div class="order-lg-last col-lg-5 col-sm-8 col-8">
          <div class="d-flex float-end">            
            <a href="./cart.php" class="border round py-1 px-3 nav-link d-flex align-items-center" >
              <i class="fas fa-shopping-cart m-1 me-md-2"></i>
              <p class="d-none d-md-block mb-0">Cart</p>
            </a>
            <div class="dropdown">
              <a class="btn d-flex align-items-center justify-content-center" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              
               <img src="data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wCEAAkGBxANEhAODg0NDw0NDg0PDQ4NEBANDQ4QFhEXFhUVFRMYHSggGBolGxMTITEhJikrLi4uFyAzODMsNygtLisBCgoKDQ0NEA0PDysZFRkrLTctNzctKysrLTcrKystKzc3LSsrNysrLSsrNysrKy0rKysrKysrKysrKysrKysrK//AABEIAOEA4QMBIgACEQEDEQH/xAAbAAEAAwEBAQEAAAAAAAAAAAAAAQQFBgMCB//EADQQAQACAAMEBQsFAQEAAAAAAAABAgMFEQQhMVESQVJhkhUiMjNxgaGxssHREyNCcpGCc//EABYBAQEBAAAAAAAAAAAAAAAAAAABAv/EABYRAQEBAAAAAAAAAAAAAAAAAAABEf/aAAwDAQACEQMRAD8A/RAG2QAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAfX6kgPkAAAAAAAAAAAAECpEAiQAAAAAAAAAAAAAAAAAAAAAAAIjXd1tHZMqm2+86R1RHF75TsMV/ctvtPCJ6mpozaqrhZfhU4V1nnOqxXDrH8Y/wAfQivO2BSeNY3qmPldLejHRnu4L4I5radjvhelGsdUxweDqsSkWiazwmJiXPbds04VtONZ31lqCsAqAAAAAAAAAAAAAAAAAAC5lezxiX3xrWu+VKW7kuHpTpab7SlVoRAkZVAlAAJBCtt2zxiVndvjfXuWkCOTnlyJWcxw4piWiI47+5Wa0AFQAAAAAAAAAAAAAAABDptirpSvV5sOZdRsvoU/rX5JVewhLKgAAACJSiQYudxpas6cYnXv4M1qZ9xw/Zb7MtUAGkAAAAAAAAAAAAAAAAQ6TLsTpYdZ5Rp/m5zjWyTHjzqTx4xySq1xCWVAAAAEJfN7aRMzwgGHnWLreK9mPnooQ9NqxOna1uczMa8nlDSJAVAQkAAAAAAAAAAAAAAB94GJNLRaOMS+CCq6jAxoxKxaJjv06pernNg2z9Gd+vRnjH3dBh4kWiJid0sK+wAAAGVm+17pw68d3S+axmG2xhRMRvvMTEadU85YFrTMzMzrM8VkR8pBpAAAAAAAAAAAAAAAAAAAgIFQ9tn2q+H6M7uU74eQg1tnznqvX3wsxm2F2p8Nvw58MG7fN8ONdNZ5bpj5qWLmuJbhpWO7izzUwfV7zaZmZmZnmhAqJAAAAAAAAAAAAAAAAAgB9YeHa86ViZ+S9sOW9PffWK7tI65bOFg1pGlaxGiarHwMptO+09HuXKZRhxxm8++Pw0BlVLyVhdmfFJ5LwuzPildAUvJWF2Z8Uo8lYXZnxSvAKPkrC7M+KTyVhdmfFK8Ao+SsLsz4pfNsow54TePZMfeGgAyb5LH8cSffXVUxssxa/wAelHOs6/Di6EXUxyVomN0xMTyndI6jH2emJGl6xPf1x7JYe3ZfbC86POpz649qyimAqAAAAAAAAAAENbLsu/nf3Qr5Ts3Tt0p4V+bfiGbViIhIIqEgAAAAAAAAAAAiY13TwlIDBzPYf0/Pr6Ezvjsz+FB1d6RaJrMaxMaTDmtrwJwrTWerfE846mpUeICoAAAAAAJpWbTERxmYiEL+TYPSv0p4UjX3zw+5VbGybPGFWKx755z1y9gYUAAAAAAAAAAAAAAAAZ2dYHSp04404/1lovjGp0q2r2qzHwByohLbIAAAAAA28ir5lp530/yI/LEb+TR+1Hfa0/HT7JVi8AyoAAAAAAAAAAAAAAAAADldorpe8cr2j4vh67X6zE/9L/VLybZAAAAAAHQ5R6qv/X1S550GUeqr7bfVKVYugMqAAAAAAAAAAAAAAAAAA5nbo/cxP72eCzmcaYt/bHyhWbQAEAAAAHQZR6qvtt9UglWLoDKgAAAAAAAAAAAAAAAIkhIDnc19bf8A5+mFQG4gAIAA/9k=" alt="" class="rounded-circle" height="30" width="30">
              </a>
              <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
              <p class="dropdown-item"><?php echo $_SESSION['active_user_first_name']." ".$_SESSION['active_user_last_name']; ?></p>
                <a class="dropdown-item" href="#"><i class="fas fa-cog fa-3"></i>Settings</a>
                <a class="dropdown-item" href="logout.php"><i class="fas fa-sign-out-alt fa-3"></i>Logout</a>
              </div>
            </div>
            <!-- <a>
              <img src="https://www.gravatar.com/avatar/205e460b479e2e5b48aec07710c08d50.jpg" alt="">
            </a> -->
          </div>
        </div>
        <!-- Center elements -->

        <!-- Right elements -->
        <div class="col-lg-5 col-md-12 col-12">
          <div class="row ">
          <form action="index.php" method="GET" style="display:inline-block;">
            <div class="col-md-12 d-flex align-items-center justify-content-around">
                
                  <input type="text" name="product_name" id="" class="form-control" placeholder="Search">
                  <button type="submit" class="btn btn-primary">
                      <i class="fas fa-search" style="color: #ffffff;"></i>
                  </button>
                
               
            </div>
          </form>
          </div>
        
          
        </div>
        <!-- Right elements -->
      </div>
    </div>
  </div>
  <!-- Jumbotron -->

  <!-- Heading -->
  <div class="bg-primary mb-4">
    <div class="container py-4">
      <h3 class="text-white mt-2">Products</h3>
      <p class="lead text-light">Every Purchase will be made by Pleasure.</p>
      <!-- Breadcrumb -->
      <nav class="d-flex mb-2">
        <h6 class="mb-0">
          <a href="index.php" class="text-white-50 active">Home</a>
          <span class="text-white-50 mx-2"></span>
        </h6>
      </nav>
      <!-- Breadcrumb -->
    </div>
  </div>
  <!-- Heading -->
</header>

<!-- sidebar + content -->
<section class="">
  <div class="container">
    <div class="row">
      <!-- sidebar -->
      <div class="col-lg-3">
        <!-- Toggle button -->
        <button
                class="btn btn-outline-secondary mb-3 w-100 d-lg-none"
                type="button"
                data-mdb-toggle="collapse"
                data-mdb-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent"
                aria-expanded="false"
                aria-label="Toggle navigation"
                >
          <span>Show filter</span>
        </button>
        <!-- Collapsible wrapper -->
        <div class="collapse card d-lg-block mb-5" id="navbarSupportedContent">
          <div class="accordion" id="accordionPanelsStayOpenExample">
            <div class="accordion-item">
              <h2 class="accordion-header" id="headingOne">
                <button
                        class="accordion-button text-dark bg-light"
                        type="button"
                        data-mdb-toggle="collapse"
                        data-mdb-target="#panelsStayOpen-collapseOne"
                        aria-expanded="true"
                        aria-controls="panelsStayOpen-collapseOne"
                        >
                  Categories
                </button>
              </h2>
              <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne">
                <div class="accordion-body">
                  <ul class="list-unstyled">
                    <?php foreach($categories as $category): ?>
                      <li><a href="index.php?categoryID=<?php echo $category['id']; ?>" class="text-dark"><?php echo $category['name']; ?></a></li>
                    <?php endforeach; ?>
                    <br>
                    <?php 
                    if(isset($_GET['categoryID'])){ ?>
                      <li><a href="index.php" class="text-primary float-end">Clear</a></li>
                    <?php } ?>
                  </ul>
                </div>
              </div>
            </div>
            
            <div class="accordion-item">
              <h2 class="accordion-header" id="headingThree">
                <button
                        class="accordion-button text-dark bg-light"
                        type="button"
                        data-mdb-toggle="collapse"
                        data-mdb-target="#panelsStayOpen-collapseThree"
                        aria-expanded="false"
                        aria-controls="panelsStayOpen-collapseThree"
                        >
                  Sort By
                </button>
              </h2>
              <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse show mb-2" aria-labelledby="headingTwo">
                <div class="accordion-body">
                <form action="index.php" method="GET">
                  <select name="sortBy" class="form-select mb-2" required>
                    <option value="latest">Latest</option>
                    <option value="oldest">Oldest</option>
                    <option value="low-to-high">Price: low to high</option>
                    <option value="high-to-low">Price: high to low</option>
                  </select>
                  <input type="submit" name="sortProducts" value="Apply" class="btn btn-white w-100 border border-secondary">
                </form>
                <br>
                <?php 
                if(isset($_GET['sortBy'])){ ?>
                  <a href="index.php" class="text-primary float-end mb-2">Clear</a>
                <?php } ?>
                </div>
              </div>
            </div>

            <div class="accordion-item">
              <h2 class="accordion-header" id="headingThree">
                <button
                        class="accordion-button text-dark bg-light"
                        type="button"
                        data-mdb-toggle="collapse"
                        data-mdb-target="#panelsStayOpen-collapseThree"
                        aria-expanded="false"
                        aria-controls="panelsStayOpen-collapseThree"
                        >
                  Price Range
                </button>
              </h2>
              <div id="panelsStayOpen-collapseThree" class="accordion-collapse collapse show mb-5" aria-labelledby="headingThree">
                <div class="accordion-body">
                <form action="index.php" method="GET">
                  <div class="row mb-3">
                    <div class="col-6">
                      <div class="form-outline">
                        <input type="number" name="min" class="form-control <?php echo $general_error ? 'is-invalid' : ''  ?>" required value="<?php echo isset($min) ? $min : 0  ?>"/>
                        <label class="form-label" for="typeNumber">₱ MIN</label>
                      </div>
                    </div>
                    <div class="col-6">
                      
                      <div class="form-outline">
                        <input type="number" name="max" class="form-control <?php echo $general_error ? 'is-invalid' : ''  ?>" required value="<?php echo isset($max) ? $max : 0  ?>"/>
                        <label class="form-label" for="typeNumber">₱ MAX</label>
                      </div>
                    </div>
                    
                  </div>
                  <input type="submit" value="Apply" name="filterByPriceRange" class="btn btn-white w-100 border border-secondary">
                </form>
                <?php
                if(isset($_GET['filterByPriceRange'])){ ?>
                  <a href="index.php" class="float-end mt-2">Clear</a>
                <?php } ?>
                
                </div>
               
              </div>
            </div>
            
            
          </div>
        </div>
      </div>
      <!-- sidebar -->
      <!-- content -->
      <div class="col-lg-9 mb-5 border p-2 rounded">
      <?php 
      if(!empty($general_error)) { ?>
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
          <strong><?php echo $general_error; ?></strong>
          <button type="button" class="btn-close" data-dismiss="alert" aria-label="Close"></button>
      </div>
      <?php } ?>
      <?php 
      if(!empty($success_message)) { ?>
        <div class="alert alert-success alert-dismissible fade show" role="alert">
          <strong><?php echo $success_message; ?></strong>
          <button type="button" class="btn-close" data-dismiss="alert" aria-label="Close"></button>
      </div>
      <?php } ?>
        <header class="d-sm-flex align-items-center border-bottom mb-4 pb-3">
          <strong class="d-block py-2"><?php echo $totalProducts; ?></strong>
          <div class="ms-auto">
            
            <div class="btn-group shadow-0 border">
              <a href="#" class="btn btn-light" title="List view">
                <i class="fa fa-bars fa-lg"></i>
              </a>
              <a href="#" class="btn btn-light active" title="Grid view">
                <i class="fa fa-th fa-lg"></i>
              </a>
            </div>
          </div>
        </header>

        <div class="row" >
          <?php if(!count($products) > 0){ ?>
            <div class="col-md-12 d-flex align-items-center justify-content-center flex-column p-5 mb-5 mt-5 ">
              <h1>No Products Found.</h1>
            </div>
          <?php } else{   
          foreach($products as $product): ?>
          <div class="col-lg-4 col-md-6 col-sm-6 d-flex">
            <div class="card w-100 my-2 shadow-2-strong">
              <a href="product.php?product_id=<?php echo $product['product_id'] ?>"><img src="src/product_images/<?php echo $product['thumbnail']; ?>" class="card-img-top" /></a>
              <div class="card-body d-flex flex-column">
              <div class="d-flex flex-row">
                  <h4 class="mb-1 me-1"><a href="product.php?product_id=<?php echo $product['product_id'] ?>" class="text-dark" style="text-decoration: none;"><?php echo $product['name'] ?></a></h4>
                  <!-- <span class="text-danger"><s>$49.99</s></span> -->
                </div>
                <div class="d-flex flex-column mt-1">
                  <h5 class="mb-1 me-1 text-danger">₱<?php
                   echo number_format($product['price'], 2);
                   ?></h5>
           
                   <h6><?php echo $product['stock'] ?> in stock</h6>
                  
                  <!-- <span class="text-danger"><s>$49.99</s></span> -->
                </div>
                <!-- <p class="card-text" style="text-align:justify;"><?php echo $product['description']; ?></p> -->
                <div class="card-footer d-flex align-items-end pt-3 px-0 pb-0 mt-auto">
                  <div class="row">
                  
                      <div class="col-md-12">
                      <form action="./index.php" method="GET" class="d-flex align-items-center justify-content-start gap-2">
                        <input type="hidden" name="product_id" value="<?php echo $product['id'] ?>">
                        <input type="hidden" name="user_id" value="<?php echo $_SESSION['active_user_id']; ?>">
                        <input type="number" name="quantity" class="form-control" max="<?php echo $product['stock'] ?>" value="0" min="1">
                        <button type="submit" name="add_to_cart" class="btn btn-primary shadow-0"><i class="fas fa-cart-plus"></i></button>
                      </form>
                      </div>
                  </div>
                  
                  
                </div>
              </div>
            </div>
          </div>
          <?php endforeach; }?>
          </div>

        <hr />
        <?php if(!empty($products)): ?>
        <!-- Pagination -->
        <nav aria-label="Page navigation example" class="d-flex justify-content-center mt-3">
          <ul class="pagination">
            <li class="page-item disabled">
              <a class="page-link" href="#" aria-label="Previous">
                <span aria-hidden="true">&laquo;</span>
              </a>
            </li>
            <li class="page-item active"><a class="page-link" href="#">1</a></li>
            <li class="page-item"><a class="page-link" href="#">2</a></li>
            <li class="page-item"><a class="page-link" href="#">3</a></li>
            <li class="page-item"><a class="page-link" href="#">4</a></li>
            <li class="page-item"><a class="page-link" href="#">5</a></li>
            <li class="page-item">
              <a class="page-link" href="#" aria-label="Next">
                <span aria-hidden="true">&raquo;</span>
              </a>
            </li>
          </ul>
        </nav>
        <?php endif; ?>
        <!-- Pagination -->
      </div>
    </div>
  </div>            
</section>
<!-- sidebar + content -->



<?php
include "inc/footer.php";
?>