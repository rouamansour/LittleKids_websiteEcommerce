<?php

function component($prd_title, $prd_price, $prd_img, $prd_id){
    $element = "
    
    <div class=\"col-md-3 col-sm-6 my-3 my-md-0\">
                <form action=\"customers/cart.php\" method=\"GET\">
                    <div class=\"card shadow\">
                        <div>
                            <img src='$prd_img' alt=\"Image\" class=\"img-fluid card-img-top\">
                        </div>
                        <div class=\"card-body\">
                            <a href='customers/Detail_Product.php?id= \".$prd_id\"'><h5 class=\"card-title\">$prd_title</h5></a>
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
                            <button type=\"button\" class=\"btn btn-danger\">Add to Cart <i class=\"fas fa-shopping-cart\"></i></button>
                            <input type='hidden' name='product_id' value='$prd_id'>
                        </div>
                    </div>
                </form>
            </div>
    ";
    echo $element;
}

function Detailproduct($prd_img, $prd_title, $prd_price, $prd_id){
    $element = "
    
        <center>
            <div class='card mb-3' style='max-width: 540px;'>
                <div class='row g-0'>
                    <div class='col-md-4'>
                    <img src=$prd_img class='img-fluid rounded-start' alt='Image' >
                    </div>
                    <div class='col-md-8'>
                    <div class='card-body'>
                    <h5 class='card-title'>$prd_title</h5>
                    <hr>   
                    <h4>$prd_price</h4> 
                    Size : <br>
                    <select name='op 'id='version' >Size
                    <option value='0-3mo.' selected>0-3mo.</option>
                        <option value='3-6 mo.'>3-6 mo.</option>
                        <option value='6-12 mo.'>6-12 mo.</option>
                        <option value=''>18 mo.</option>
                        <option value=''>2 yr.</option>
                        </select>
                        <p class='card-text'>These are Mebie's cotton shorts. They are made out of a cotton fabric, <br>
                        they have an elastic and a faux tie on the waist! <br>
                        Wash in cold water <br>
                        Fit True to Size<br>
                        95% Cotton 5% Spandex</p>
                        <button type='button' class='btn btn-danger'>Add to Cart <i class='fas fa-shopping-cart'></i></button>
                        <p class='card-text'><small class='text-muted'>Last updated 3 mins ago</small></p>
                    </div>
                    </div>
                    </div>
                </div>
            </div>
        </center>
    
    ";
    echo  $element;
}