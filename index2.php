<!doctype html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Магазин электронных услуг</title>
<link rel="stylesheet" href="css/style.css" media="all">
<script type="text/javascript" src="js/ajax.js"></script>
<script type="text/javascript" src="js/fly-to-basket.js"></script>
<script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
<script type="text/javascript" src="js/jquery.maskedinput.min.js"></script>
<script src="js/script.js"></script>

</head>


<body>

<div class="wrapper">
 <div class="header">HEADER</div>

  
    

<div class="content">

<p>СЛАЙДЕР СЛАЙДЕР СЛАЙДЕР СЛАЙДЕР СЛАЙДЕР СЛАЙДЕРСЛАЙДЕР СЛАЙДЕР СЛАЙДЕРСЛАЙДЕР СЛАЙДЕР СЛАЙДЕРСЛАЙДЕР СЛАЙДЕР СЛАЙДЕР
СЛАЙДЕР СЛАЙДЕР СЛАЙДЕР СЛАЙДЕР СЛАЙДЕР СЛАЙДЕРСЛАЙДЕР СЛАЙДЕР СЛАЙДЕРСЛАЙДЕР СЛАЙДЕР СЛАЙДЕРСЛАЙДЕР СЛАЙДЕР СЛАЙДЕР</p>

</div>  <!-- content -->
 


	<div class="left">
		<!-- Shopping cart It's important that the id of this div is "shopping_cart" -->
		<div id="shopping_cart" style="font-weight: bold;text-align:center;">
			<strong>Корзина</strong>	
			<table id="shopping_cart_items">
				<tr>
					<th>Количество</th>
					<th>Товар</th>
					<th>Цена</th>
					<th></th>
				</tr>
			</table>
			<br /> <br />
					<div id="shopping_cart_totalprice"></div>




					<form id="zak"> 
							<input id="btn0" type="button" value="Оформить заказ">  
					</form> 



		</div> <!-- shopping_cart -->
		</div> <!-- left -->


	
<!-- <div id="products"> -->
		


    <form>  
        <input id="btn1" type="button" value="ЭЛЕКТРОННАЯ ОТЧЕТНОСТЬ">   
        <input id="btn2" type="button" value="РЕМОНТ">   
        <input id="btn3" type="button" value="ПЕЧАТЬ">
        <input id="btn4" type="button" value="ЭЛЕКТРОНЫЕ УСЛУГИ">
        
    </form>  



		<!-- </div> -->  <!-- products --> 


<div hidden id="successdiv"  style="color: #FF0000; font-weight: bold; text-align:center; font-size: 32pt;"> <br /> <p>ВАШ ЗАКАЗ ОБРАБАТЫВАЕТСЯ</p> </div>


		<div class="main">




	 </div> <!-- main -->


<div class="clear"></div>
 <div class="rasporka"></div>
</div>


<div class="footer">  <p align ="center">ИП Берг О.В. 2018г.</p>	 </div> <!-- footer -->



      
    <script>  
        $(document).ready(function(){  
          
            $('#btn1').click(function(){  
                $.ajax({  
                    url: "http://localhost:8888/recapcha/a/html/main.php",  
                    cache: false,  
                    success: function(html){  
                        $(".main").html(html);  
                    }  
                });  
            });  



  $('#btn2').click(function(){  
                $.ajax({  
                    url: "http://localhost:8888/recapcha/a/html/main2.php",  
                    cache: false,  
                    success: function(html){  
                        $(".main").html(html);  
                    }  
                });  
            });  


   $('#btn3').click(function(){  
                $.ajax({  
                    url: "http://localhost:8888/recapcha/a/html/main3.php",  
                    cache: false,  
                    success: function(html){  
                        $(".main").html(html);  
                    }  
                });  
            });  


 $('#btn4').click(function(){  
                $.ajax({  
                    url: "http://localhost:8888/recapcha/a/html/main4.php",  
                    cache: false,  
                    success: function(html){  
                        $(".main").html(html);  
                    }  
                });  
            });  


              
            $('#zak').click(function(){  
                $.ajax({  
                    url: "http://localhost:8888/recapcha/a/html/cart.php",  
                    cache: false,  
                    success: function(html){  
                        $(".main").html(html); 
                        $('#zak').hide(500); 
                    }  
                });  
            });  
              
        });  
    </script>  
   



</body>
</html>
