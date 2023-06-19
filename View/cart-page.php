<?php
include "inc/header.php";

// echo '<pre>';
// var_dump($products);
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
            <h3 class="text-white mt-2">Cart</h3>
            <p class="lead text-light">Every Purchase will be made by Pleasure.</p>
            <!-- Breadcrumb -->
            <nav class="d-flex mb-2">
                <h6 class="mb-0">
                    <a href="index.php" class="text-white-50">Home</a>
                    <span class="text-white-50 mx-2"> > </span>
                    <a href="" class="text-white-50 active">My Cart</a>
                </h6>
            </nav>
            <!-- Breadcrumb -->
        </div>
    </div>
    <!-- Heading -->
</header>


<div class="mb-5 ">




    <section class="h-100 h-custom">
        <div class="container-fluid py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col">
                    <div class="card">
                        <div class="card-body p-4">

                            <div class="row">

                                <div class="col-lg-7">
                                    <!-- <h5 class="mb-3"><a href="#!" class="text-body"><i class="fas fa-long-arrow-alt-left me-2"></i>Continue shopping</a></h5>
                                    <hr> -->
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

                                    <div class="d-flex justify-content-between align-items-center mb-4">
                                        <div>
                                            <h3 class="mb-1">Shopping Cart</h3>
                                            <p class="mb-0">You have <?php echo $total_cart_rows ?> items in your cart</p>
                                        </div>

                                    </div>
                                    <?php foreach ($itemsInCart as $itemInCart) : ?>

                                        <div class="card rounded-3 mb-4">
                                            <div class="card-body p-4">
                                                <div class="row d-flex justify-content-between align-items-center">
                                                    <div class="col-md-2 col-lg-2 col-xl-2">
                                                        <img src="src/product_images/<?php echo $itemInCart['thumbnail'] ?>" class="img-fluid rounded-3" alt="Cotton T-shirt">
                                                    </div>
                                                    <div class="col-md-3 col-lg-3 col-xl-3">
                                                        <p class="lead  mb-2"><?php echo $itemInCart['name'] ?></p>
                                                       
                                                    </div>
                                                    <div class="col-md-3 col-lg-3 col-xl-2 d-flex justify-content-center">
                                                    <p class="lead fw-normal mb-2"><?php echo $itemInCart['quantity'] ?></p>
                                                    </div>
                                                    <div class="col-md-3 col-lg-2 col-xl-2 offset-lg-1">
                                                        <h5 class="mb-0">₱<?php echo number_format($itemInCart['quantity'] * $itemInCart['price'],2); ?></h5>
                                                    </div>
                                                    <div class="col-md-1 col-lg-1 col-xl-1 text-end">
                                                    <form action="./cart.php" method="GET">
                                                       
                                                        <button type="submit" name="delete_cart_id" class="btn btn-danger" value="<?php echo $itemInCart['cart_id'] ?>"><i class="fas fa-trash"></i></button>
                                                    </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    <?php endforeach; ?>



                                </div>
                                <div class="col-lg-5">

                                    <div class="card bg-primary text-white rounded-3">
                                        <div class="card-body">
                                            <div class="d-flex justify-content-between align-items-center mb-4">
                                                <h5 class="mb-0">Summary</h5>
                                               
                                            </div>



                                            <hr class="my-4">

                                            <div class="d-flex justify-content-between">
                                                <p class="mb-2">Subtotal</p>
                                                <p class="mb-2">₱<?php echo number_format($sub_total_cart_price,2);?></p>
                                            </div>

                                            <div class="d-flex justify-content-between">
                                                <p class="mb-2">Shipping</p>
                                                <p class="mb-2">₱<?php echo number_format($shipping,2);?></p>
                                            </div>

                                            <div class="d-flex justify-content-between mb-4">
                                                <p class="mb-2">Total(Incl. taxes)</p>
                                                <h5 class="mb-2 text-danger font-weight-bold">₱<?php echo number_format($total_cart_price,2);?></h5>
                                            </div>

                                            <button type="button" class="btn btn-primary border border-light btn-block btn-lg float-end" >
                                                
                                                    <span>Checkout</span>
                                               
                                            </button>

                                        </div>
                                    </div>

                                </div>

                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

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

<?php
include "inc/footer.php";
?>