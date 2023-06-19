<?php
include "inc/header.php";

// echo '<pre>';
// var_dump($products);
// echo '</pre>';
?>
<link rel="stylesheet" href="src/css/product.css">
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
                <div class="order-lg-last col-lg-10 col-sm-8 col-8">
                    <div class="d-flex float-end">
                        <a href="./cart.php" class="border round py-1 px-3 nav-link d-flex align-items-center justify-content-arround">
                            <i class="fas fa-shopping-cart m-1 me-md-2"></i>
                            <p class="d-none d-md-block mb-0">Cart</p>

                        </a>
                        <div class="dropdown">
                            <a class="btn d-flex align-items-center justify-content-center" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">

                                <img src="data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wCEAAkGBxANEhAODg0NDw0NDg0PDQ4NEBANDQ4QFhEXFhUVFRMYHSggGBolGxMTITEhJikrLi4uFyAzODMsNygtLisBCgoKDQ0NEA0PDysZFRkrLTctNzctKysrLTcrKystKzc3LSsrNysrLSsrNysrKy0rKysrKysrKysrKysrKysrK//AABEIAOEA4QMBIgACEQEDEQH/xAAbAAEAAwEBAQEAAAAAAAAAAAAAAQQFBgMCB//EADQQAQACAAMEBQsFAQEAAAAAAAABAgMFEQQhMVESQVJhkhUiMjNxgaGxssHREyNCcpGCc//EABYBAQEBAAAAAAAAAAAAAAAAAAABAv/EABYRAQEBAAAAAAAAAAAAAAAAAAABEf/aAAwDAQACEQMRAD8A/RAG2QAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAfX6kgPkAAAAAAAAAAAAECpEAiQAAAAAAAAAAAAAAAAAAAAAAAIjXd1tHZMqm2+86R1RHF75TsMV/ctvtPCJ6mpozaqrhZfhU4V1nnOqxXDrH8Y/wAfQivO2BSeNY3qmPldLejHRnu4L4I5radjvhelGsdUxweDqsSkWiazwmJiXPbds04VtONZ31lqCsAqAAAAAAAAAAAAAAAAAAC5lezxiX3xrWu+VKW7kuHpTpab7SlVoRAkZVAlAAJBCtt2zxiVndvjfXuWkCOTnlyJWcxw4piWiI47+5Wa0AFQAAAAAAAAAAAAAAABDptirpSvV5sOZdRsvoU/rX5JVewhLKgAAACJSiQYudxpas6cYnXv4M1qZ9xw/Zb7MtUAGkAAAAAAAAAAAAAAAAQ6TLsTpYdZ5Rp/m5zjWyTHjzqTx4xySq1xCWVAAAAEJfN7aRMzwgGHnWLreK9mPnooQ9NqxOna1uczMa8nlDSJAVAQkAAAAAAAAAAAAAAB94GJNLRaOMS+CCq6jAxoxKxaJjv06pernNg2z9Gd+vRnjH3dBh4kWiJid0sK+wAAAGVm+17pw68d3S+axmG2xhRMRvvMTEadU85YFrTMzMzrM8VkR8pBpAAAAAAAAAAAAAAAAAAAgIFQ9tn2q+H6M7uU74eQg1tnznqvX3wsxm2F2p8Nvw58MG7fN8ONdNZ5bpj5qWLmuJbhpWO7izzUwfV7zaZmZmZnmhAqJAAAAAAAAAAAAAAAAAgB9YeHa86ViZ+S9sOW9PffWK7tI65bOFg1pGlaxGiarHwMptO+09HuXKZRhxxm8++Pw0BlVLyVhdmfFJ5LwuzPildAUvJWF2Z8Uo8lYXZnxSvAKPkrC7M+KTyVhdmfFK8Ao+SsLsz4pfNsow54TePZMfeGgAyb5LH8cSffXVUxssxa/wAelHOs6/Di6EXUxyVomN0xMTyndI6jH2emJGl6xPf1x7JYe3ZfbC86POpz649qyimAqAAAAAAAAAAENbLsu/nf3Qr5Ts3Tt0p4V+bfiGbViIhIIqEgAAAAAAAAAAAiY13TwlIDBzPYf0/Pr6Ezvjsz+FB1d6RaJrMaxMaTDmtrwJwrTWerfE846mpUeICoAAAAAAJpWbTERxmYiEL+TYPSv0p4UjX3zw+5VbGybPGFWKx755z1y9gYUAAAAAAAAAAAAAAAAZ2dYHSp04404/1lovjGp0q2r2qzHwByohLbIAAAAAA28ir5lp530/yI/LEb+TR+1Hfa0/HT7JVi8AyoAAAAAAAAAAAAAAAAADldorpe8cr2j4vh67X6zE/9L/VLybZAAAAAAHQ5R6qv/X1S550GUeqr7bfVKVYugMqAAAAAAAAAAAAAAAAAA5nbo/cxP72eCzmcaYt/bHyhWbQAEAAAAHQZR6qvtt9UglWLoDKgAAAAAAAAAAAAAAAIkhIDnc19bf8A5+mFQG4gAIAA/9k=" alt="" class="rounded-circle" height="30" width="30">
                            </a>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <p class="dropdown-item"><?php echo $_SESSION['active_user_first_name'] . " " . $_SESSION['active_user_last_name']; ?></p>
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
                <!-- <div class="col-lg-5 col-md-12 col-12">
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


        </div> -->
                <!-- Right elements -->
            </div>
        </div>
    </div>
    <!-- Jumbotron -->

    <!-- Heading -->
    <div class="bg-primary mb-4">
        <div class="container py-4">
            <h3 class="text-white mt-2">Product</h3>
            <p class="lead text-light">Every Purchase will be made by Pleasure.</p>
            <!-- Breadcrumb -->
            <nav class="d-flex mb-2">
                <h6 class="mb-0">
                    <a href="index.php" class="text-white-50">Home</a>
                    <span class="text-white-50 mx-2"> > </span>
                    <a href="" class="text-white-50 active">Product</a>
                </h6>
            </nav>
            <!-- Breadcrumb -->
        </div>
    </div>
    <!-- Heading -->
</header>


<div class="mb-5 ">
    <!-- Product section-->
    <section class="py-5">
        <?php if(!count($selectedProduct) > 0){ ?>
            <div class="conatiner mb-5">
                <h1 class="text-center">Product Not Found</h1>
            </div>
            
        <?php } else { ?>
        <div class="container px-4 px-lg-5 my-5">
            <?php
            if (!empty($general_error)) { ?>
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <strong><?php echo $general_error; ?></strong>
                    <button type="button" class="btn-close" data-dismiss="alert" aria-label="Close"></button>
                </div>
            <?php } ?>
            <?php
            if (!empty($success_message)) { ?>
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong><?php echo $success_message; ?></strong>
                    <button type="button" class="btn-close" data-dismiss="alert" aria-label="Close"></button>
                </div>
            <?php } ?>
            <div class="row gx-4 gx-lg-5 align-items-center">
                <div class="col-md-6"><img class="card-img-top mb-5 mb-md-0" src="src/product_images/<?php echo $selectedProduct['thumbnail'] ?>" alt="..." /></div>
                <div class="col-md-6">
                    <div class="small mb-1"></div>
                    <h1 class="display-5 fw-bolder"><?php echo $selectedProduct['name'] ?></h1>
                    <h5><strong>Category: </strong><?php echo $categoryName; ?></h5>
                    <h5><strong>Stock: </strong><?php echo $selectedProduct['stock']; ?></h5>
                    <div class="fs-5 mb-2">
                        <span><strong>Price: </strong></span>
                        <span class="text-danger">₱<?php echo number_format($selectedProduct['price'], 2); ?></span>
                    </div>
                    <h5><strong>Product Description:</strong></h5>
                    <p class="lead" style="text-align: justify; text-justify:"><?php echo $selectedProduct['description'] ?></p>
                    <form action="./product.php" method="GET">
                        <input type="hidden" name="product_id" value="<?php echo $selectedProduct['product_id'] ?>">
                        <input type="hidden" name="user_id" value="<?php echo $_SESSION['active_user_id']; ?>">
                        <div class="d-flex">
                            <input class="form-control text-center me-3" name="quantity" type="number" max="<?php echo $selectedProduct['stock'] ?>" value="0" min="1" style="max-width: 4rem" />
                            <button name="add_to_cart" class="btn btn-primary flex-shrink-0" type="submit">
                                <i class="bi-cart-fill me-1"></i>
                                Add to cart
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <?php } ?>
    </section>

</div>



<?php
include "inc/footer.php";
?>