<?php
    try 
    {   
        $pdo=new PDO("mysql:host=localhost;dbname=kids",'root','') ;
        $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        $i=1;
            $pdostat = $pdo->query("SELECT * from  products") ;
            foreach ($pdostat as $ligne) 
            {if($i%4==1)  
                {
                    echo "
              <div class='row-4'>
              ";
                
                        
                echo"
                    <div class='col-md-3 col-sm-6'>
                        <div class='thumbnail' >
                            <center>
                                <div class='caption'>
                                    <img src='pictures/".$ligne['prd_img']."'  class='img-responsive'  />
                                    <h3>".$ligne['prd_title']."</h3>
                                    <p>Prix :  ".$ligne['prd_price']."</p>		
                                </div>
                                <a  class='btn btn-default' >View details</a>
                                <a  class='btn btn-primary'><i class='fa fa-shopping-cart'></i> Add to cart</a>
                            </center>
                        </div>	
                    </div>";
            }$i++;     
                if($i%4==1)  
                {
                    echo "
                   </div>
        "; 
            }    
        }        
    }
    catch (Exception $e)
    {
        echo"Erreur".$e->getMessage();
    }
?>