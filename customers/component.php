<?php

function component($prd_title, $prd_price, $prd_img, $prd_id){
    $element = "
    
    <div class=\"col-md-3 col-sm-6 my-3 my-md-0\">
                <form action=\"customers/cart.php\" method=\"post\">
                    <div class=\"card shadow\">
                        <div>
                            <img src=\"$prd_img\" alt=\"Image1\" class=\"img-fluid card-img-top\">
                        </div>
                        <div class=\"card-body\">
                            <h5 class=\"card-title\">$prd_title</h5>
                            <h6>
                                <i class=\"fas fa-star\"></i>
                                <i class=\"fas fa-star\"></i>
                                <i class=\"fas fa-star\"></i>
                                <i class=\"fas fa-star\"></i>
                                <i class=\"far fa-star\"></i>
                            </h6>
                            <p class=\"card-text\">
                                Some quick example text to build on the card.
                            </p>
                            <h5>
                                <small><s class=\"text-secondary\">$519</s></small>
                                <span class=\"price\">$prd_price</span>
                            </h5>
                           <button type=\"submit\" class=\"btn btn-warning my-3\" name=\"add\">Add to Cart <i class=\"fas fa-shopping-cart\"></i></button>
                             <input type='hidden' name='product_id' value='$prd_id'>
                        </div>
                    </div>
                </form>
            </div>
    ";
    echo $element;
}

function cartElement($prd_title, $prd_price, $prd_img, $prd_id){
    $element = "
    
    <form action='cart.php' method='GET' class='cart-items'>
                    <div class='border rounded'>
                        <div class='row bg-white'>
                            <div class='col-md-3 pl-0'>
                                <img src=$prd_img alt='' width='80%'>
                            </div>

                            <div class='col-md-6'>
                                <h5>$prd_title</h5>
                                <small>seller<small>
                                <h5>$prd_price</h5>
                                <button type='submit' class='btn btn-warning'>save for later</button>
                                <button type='submit' class='btn btn-danger mx-2' name='remove'>Remove</button>
                            </div>
                        
                            <div class=''>
                                <div>
                                    <button type='button' class='btn bg-light border rounded-circle'><i class='fas fa-minus'></i></button>
                                    <input type='text' value='1' class='from-control w-25 d-inline'>
                                    <button type='button' class='btn bg-light border rounded-circle'><i class='fas fa-plus'></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
    
    ";
    echo  $element;
}