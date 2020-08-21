<?php
  function converter($cur1, $cur2, $amount){

    if($cur1=="CAD"){
        if($cur2=="CAD"){
            $converted_amount=$amount;
        }
        elseif($cur2=="USD"){
            $converted_amount=$amount*0.73645;
        }
        elseif($cur2=="EUR"){
            $converted_amount=$amount*0.64412;
        }
        elseif($cur2=="GBP"){
            $converted_amount=$amount*0.58660;
        }
        else{
            $converted_amount=$amount*5.14935;
        }   
    }        
        
    elseif($cur1=="USD" ){
        if($cur2=="USD"){
            $converted_amount=$amount;
        }
        elseif($cur2=="CAD"){
            $converted_amount=$amount*1.35789;
        }
        elseif($cur2=="EUR"){
            $converted_amount=$amount*0.87469;
        }
        elseif($cur2=="GBP"){
            $converted_amount=$amount*0.79646;
        }
        else{
            $converted_amount=$amount*6.99256;
        }
    }     
        
    elseif($cur1=="EUR" ){
        if($cur2=="EUR"){
            $converted_amount=$amount;
        }    
        elseif($cur2=="CAD"){
            $converted_amount=$amount*1.55246;
        }
        elseif($cur2=="USD"){
            $converted_amount=$amount*1.14350;
        }
        elseif($cur2=="GBP"){
            $converted_amount=$amount*0.91048;
        }
        else{
            $converted_amount=$amount*7.99629;
        }    
    }
              
    elseif($cur1=="GBP" ){
        if($cur2=="GBP"){
            $converted_amount=$amount;
        }  
        elseif($cur2=="CAD"){
            $converted_amount=$amount*1.70506;
        }
        elseif ($cur2=="USD"){
            $converted_amount=$amount*1.25582;
        }
        elseif($cur2=="EUR"){
            $converted_amount=$amount*1.09799;
        }
        else{
            $converted_amount=$amount*8.77888;
        }      
    }
          
    elseif($cur1=="CNY" ){
        if($cur2=="CNY"){
            $converted_amount= $amount;
         }
        elseif($cur2=="CAD"){
            $converted_amount= $amount*0.19418;
        }
        elseif ($cur2=="USD"){
            $converted_amount=$amount*0.14302;
        }
        elseif( $cur2=="EUR"){
            $converted_amount= $amount*0.12504;
        }
        else{
           $converted_amount= $amount*0.11389;
        }       
    }

    return  $converted_amount; 
}
?>

<?php
  
if(isset($_POST['submit'])){
    
$amount = $_POST['amount'];
$cur1 = $_POST['cur1'];
$cur2 = $_POST['cur2'];

if(!empty($amount)){

if($cur1=="CAD" AND $cur2=="CAD"){
    $converted_amount = converter($cur1,$cur2,$amount);
    echo "Amount converted from " .$cur1. " <i class=' flag-icon flag-icon-ca'></i>  &#36; " .$amount.  " to " .$cur2. " <i class=' flag-icon flag-icon-ca'></i> &#36; "  .$converted_amount. "<br><br>"  ;  
}
elseif($cur1=="CAD" AND $cur2=="USD"){
    $converted_amount = converter($cur1, $cur2 , $amount);
    echo "Amount converted from " .$cur1. " <i class=' flag-icon flag-icon-ca'></i>  &#36; " .$amount.  " to " .$cur2. " <i class=' flag-icon flag-icon-us'></i> &#36; "  .$converted_amount. "<br><br>"  ;
}
elseif($cur1=="CAD" AND $cur2=="EUR"){
    $converted_amount = converter($cur1,$cur2,$amount);
    echo "Amount converted from " .$cur1. " <i class=' flag-icon flag-icon-ca'></i>  &#36; " .$amount.  " to " .$cur2. " <i class=' flag-icon flag-icon-eu'></i> &#8364; "  .$converted_amount. "<br><br>" ;  
}
elseif($cur1=="CAD" AND $cur2=="GBP"){
    $converted_amount = converter($cur1,$cur2,$amount);
    echo "Amount converted from " .$cur1. " <i class=' flag-icon flag-icon-ca'></i>  &#36; " .$amount.  " to " .$cur2. " <i class=' flag-icon flag-icon-gb'></i> &#163; "  .$converted_amount. "<br><br>"  ;   
}
elseif($cur1=="CAD" AND $cur2=="CNY"){
    $converted_amount = converter($cur1,$cur2,$amount);
    echo "Amount converted from " .$cur1. " <i class=' flag-icon flag-icon-ca'></i>  &#36; " .$amount.  " to " .$cur2. " <i class=' flag-icon flag-icon-cn'></i> &#165; "  .$converted_amount. "<br><br>"  ;  
}
elseif($cur1=="USD" AND $cur2=="USD"){
    $converted_amount = converter($cur1,$cur2,$amount);
    echo "Amount converted from " .$cur1. " <i class=' flag-icon flag-icon-us'></i>  &#36; " .$amount.  " to " .$cur2. " <i class=' flag-icon flag-icon-us'></i> &#36; "  .$converted_amount. "<br><br>"  ;
}
elseif($cur1=="USD" AND $cur2=="CAD"){
    $converted_amount = converter($cur1,$cur2,$amount);
    echo "Amount converted from " .$cur1. " <i class=' flag-icon flag-icon-us'></i>  &#36; " .$amount.  " to " .$cur2. " <i class=' flag-icon flag-icon-ca'></i> &#36; "  .$converted_amount. "<br><br>"  ;  
}
elseif($cur1=="USD" AND $cur2=="EUR"){
    $converted_amount = converter($cur1,$cur2,$amount);
    echo "Amount converted from " .$cur1. " <i class=' flag-icon flag-icon-us'></i>  &#36; " .$amount.  " to " .$cur2. " <i class=' flag-icon flag-icon-eu'></i> &#8364; "  .$converted_amount. "<br><br>"  ;  
}
elseif($cur1=="USD" AND $cur2=="GBP"){
    $converted_amount = converter($cur1,$cur2,$amount);
    echo "Amount converted from " .$cur1. " <i class=' flag-icon flag-icon-us'></i>  &#36; " .$amount.  " to " .$cur2. " <i class=' flag-icon flag-icon-gb'></i> &#163; "  .$converted_amount. "<br><br>"  ;   
}
elseif($cur1=="USD" AND $cur2=="CNY"){
    $converted_amount = converter($cur1,$cur2,$amount);
    echo "Amount converted from " .$cur1. " <i class=' flag-icon flag-icon-us'></i>  &#36; " .$amount.  " to " .$cur2. " <i class=' flag-icon flag-icon-cn'></i> &#165; "  .$converted_amount. "<br><br>"  ;  
}
elseif($cur1=="EUR" AND $cur2=="EUR"){
    $converted_amount = converter($cur1,$cur2,$amount);
    echo "Amount converted from " .$cur1. " <i class=' flag-icon flag-icon-eu'></i>  &#8364; " .$amount.  " to " .$cur2. " <i class=' flag-icon flag-icon-eu'></i> &#8364; "  .$converted_amount. "<br><br>"  ;  
}
elseif($cur1=="EUR" AND $cur2=="CAD"){
    $converted_amount = converter($cur1,$cur2,$amount);
    echo "Amount converted from " .$cur1. " <i class=' flag-icon flag-icon-eu'></i>  &#8364; " .$amount.  " to " .$cur2. " <i class=' flag-icon flag-icon-ca'></i> &#36; "  .$converted_amount. "<br><br>"  ;  
}
elseif($cur1=="EUR" AND $cur2=="USD"){
    $converted_amount = converter($cur1,$cur2,$amount);
    echo "Amount converted from " .$cur1. " <i class=' flag-icon flag-icon-eu'></i>  &#8364; " .$amount.  " to " .$cur2. " <i class=' flag-icon flag-icon-us'></i> &#36; "  .$converted_amount. "<br><br>"  ;   
}
elseif($cur1=="EUR" AND $cur2=="GBP"){
    $converted_amount = converter($cur1,$cur2,$amount);
    echo "Amount converted from " .$cur1. " <i class=' flag-icon flag-icon-eu'></i>  &#8364; " .$amount.  " to " .$cur2. " <i class=' flag-icon flag-icon-gb'></i> &#163; "  .$converted_amount. "<br><br>"  ;    
}
elseif($cur1=="EUR" AND $cur2=="CNY"){
    $converted_amount = converter($cur1,$cur2,$amount);
    echo "Amount converted from " .$cur1. " <i class=' flag-icon flag-icon-eu'></i>  &#8364; " .$amount.  " to " .$cur2. " <i class=' flag-icon flag-icon-cn'></i> &#165; "  .$converted_amount. "<br><br>"  ;    
}
elseif($cur1=="GBP" AND $cur2=="GBP"){
    $converted_amount = converter($cur1,$cur2,$amount);
    echo "Amount converted from " .$cur1. " <i class=' flag-icon flag-icon-gb'></i>  &#163; " .$amount.  " to " .$cur2. " <i class=' flag-icon flag-icon-gb'></i> &#163; "  .$converted_amount. "<br><br>"  ;    
}
elseif($cur1=="GBP" AND $cur2=="CAD"){
    $converted_amount = converter($cur1,$cur2,$amount);
    echo "Amount converted from " .$cur1. " <i class=' flag-icon flag-icon-gb'></i>  &#163; " .$amount.  " to " .$cur2. " <i class=' flag-icon flag-icon-ca'></i> &#36; "  .$converted_amount. "<br><br>"  ;     
}
elseif($cur1=="GBP" AND $cur2=="USD"){
    $converted_amount = converter($cur1,$cur2,$amount);
    echo "Amount converted from " .$cur1. " <i class=' flag-icon flag-icon-gb'></i>  &#163; " .$amount.  " to " .$cur2. " <i class=' flag-icon flag-icon-us'></i> &#36; "  .$converted_amount. "<br><br>"  ;     
}
elseif($cur1=="GBP" AND $cur2=="EUR"){
    $converted_amount = converter($cur1,$cur2,$amount);
    echo "Amount converted from " .$cur1. " <i class=' flag-icon flag-icon-gb'></i>  &#163; " .$amount.  " to " .$cur2. " <i class=' flag-icon flag-icon-eu'></i> &#8364; "  .$converted_amount. "<br><br>"  ;    
}
elseif($cur1=="GBP" AND $cur2=="CNY"){
    $converted_amount = converter($cur1,$cur2,$amount);
    echo "Amount converted from " .$cur1. " <i class=' flag-icon flag-icon-gb'></i>  &#163; " .$amount.  " to " .$cur2. " <i class=' flag-icon flag-icon-cn'></i> &#165; "  .$converted_amount. "<br><br>"  ;    
}
elseif($cur1=="CNY" AND $cur2=="CNY"){
    $converted_amount = converter($cur1,$cur2,$amount);
    echo "Amount converted from " .$cur1. " <i class=' flag-icon flag-icon-cn'></i>  &#165; " .$amount.  " to " .$cur2. " <i class=' flag-icon flag-icon-cn'></i> &#165; "  .$converted_amount. "<br><br>"  ;    
}
elseif($cur1=="CNY" AND $cur2=="CAD"){
    $converted_amount = converter($cur1,$cur2,$amount);
    echo "Amount converted from " .$cur1. " <i class=' flag-icon flag-icon-cn'></i>  &#165; " .$amount.  " to " .$cur2. " <i class=' flag-icon flag-icon-ca'></i> &#36; "  .$converted_amount. "<br><br>"  ;     
}
elseif($cur1=="CNY" AND $cur2=="USD"){
    $converted_amount = converter($cur1,$cur2,$amount);
    echo "Amount converted from " .$cur1. " <i class=' flag-icon flag-icon-cn'></i>  &#165; " .$amount.  " to " .$cur2. " <i class=' flag-icon flag-icon-us'></i> &#36; "  .$converted_amount. "<br><br>"  ;     
}
elseif($cur1=="CNY" AND $cur2=="EUR"){
    $converted_amount = converter($cur1,$cur2,$amount);
    echo "Amount converted from " .$cur1. " <i class=' flag-icon flag-icon-cn'></i>  &#165; " .$amount.  " to " .$cur2. " <i class=' flag-icon flag-icon-eu'></i> &#8364; "  .$converted_amount. "<br><br>"  ;    
}
else{
    $converted_amount = converter($cur1,$cur2,$amount);
    echo "Amount converted from " .$cur1. " <i class=' flag-icon flag-icon-cn'></i>  &#165; " .$amount.  " to " .$cur2. " <i class=' flag-icon flag-icon-gb'></i> &#163; "  .$converted_amount. "<br><br>"  ;     
}

}
else {
    echo "<i>Amount field can't be empty <br><br></i>";
}
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <title>Currency Converter</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/3.3.0/css/flag-icon.min.css" rel="stylesheet" />
</head>

<body>

<form action="currency.php" method="POST" >
            <label>
            <b>CURRENCY CONVERTER</b>
            </label><br><br>

            <label for="amount" >Enter amount: </label>
            <input type="text" name="amount">  <br><br>

        <label for="input">Converting From: </label><br><br>

            <input type="radio" id="Canada" name="cur1" value="CAD">
            <label for="Canada">Canadian Dollar (CAD) <i class=" flag-icon flag-icon-ca"></i></label><br>

            <input type="radio" id="America" name="cur1" value="USD">
            <label for="America">American Dollar (USD) <i class=" flag-icon flag-icon-us"></i></i></label><br>

            <input type="radio" id="Europe" name="cur1" value="EUR">
            <label for="Europe">Euro  <i class=" flag-icon flag-icon-eu"></i></label><br>

            <input type="radio" id="British" name="cur1" value="GBP">
            <label for="British">British Pound  <i class=" flag-icon flag-icon-gb"></i></label><br>

            <input type="radio" id="China" name="cur1" value="CNY">
            <label for="China">Chinese Yuan  <i class=" flag-icon flag-icon-cn"></i></label><br><br>

        <label for="output">Converting To: </label><br><br>

            <input type="radio" id="Canada01" name="cur2" value="CAD">
            <label for="Canada01">Canadian Dollar (CAD) <i class=" flag-icon flag-icon-ca"></i></label><br>

            <input type="radio" id="America01" name="cur2" value="USD">
            <label for="America01">American Dollar (USD) <i class=" flag-icon flag-icon-us"></i></i></label><br>

            <input type="radio" id="Europe01" name="cur2" value="EUR">
            <label for="Europe01">Euro  <i class=" flag-icon flag-icon-eu"></i></label><br>

            <input type="radio" id="British01" name="cur2" value="GBP">
            <label for="British01">British Pound  <i class=" flag-icon flag-icon-gb"></i></label><br>

            <input type="radio" id="China01" name="cur2" value="CNY">
            <label for="China01">Chinese Yuan  <i class=" flag-icon flag-icon-cn"></i></label><br><br>

  
  <input type='submit' name='submit' value="Convert Now">&nbsp;&nbsp;<input type='reset' name='reset' value="Clear Amount"><br><br>

</form>
</body>
</html>

<!--Reference: https://gist.github.com/Gibbs/3920259 -->
<!--Reference: https://blog.eduonix.com/web-programming-tutorials/learn-create-currency-converter-using-php/ -->