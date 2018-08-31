
<html>
<head>
<link rel="stylesheet" href="css/style.css" media="all">
<script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
<script type="text/javascript" src="js/jquery.maskedinput.min.js"></script>
<script src="js/script.js"></script>
<script src='https://www.google.com/recaptcha/api.js'></script>
</head>

<body>
   
 
<br>



<form id="order-form4" method="post" class="opacity0" action="php/mail.php" size=120>
                             <div class="thank4">
                                <h4><p id="dann">ЗАПОЛНИТЕ ВАШИ ДАННЫЕ:</p> </div>

                            <!-- <div class="form-container"> -->
                                
                                <input type="hidden" name="hiden1" id="hiden1" value="">
                                <!-- <div class="form-group-top"> -->
                                    
 

<input type="text" name="nam1" id="nam1" value="" placeholder="ВАШЕ ИМЯ" style="width:120; height:20; border:2;">


   <!-- <div class="user_phone">  -->
    
      <input type="tel" required placeholder="+7 (___) ___-__-__" id="tel" name="tel" value="" style="width:120; height:20; border:2;" class="user-phone" title="Формат: +7 (999) 999 99 99"/> 
   <!-- </div>  -->


   <input type="hidden" id="hiden" name="title" value="" />

   <!-- <input type="text" id="tel" name="tel" value="" placeholder="+7 (___) ___-__-__"/> -->


<!-- <div id="title" name="title" >


<p>ВЫ ВЫБРАЛИ:</p> 

</div> -->






<div id="tab"></div>

<div id="total11" name="adminemail1111" value="" ></div> 



<!-- 
<script>       
$(document).ready(function(){
var title = document.getElementById('title');
var hidenTitle = document.getElementById('hiden');
var textTitle = title.innerHTML;
hidenTitle.value = textTitle;
})
</script> -->


         <!--  <div class="form-group"> -->



          <div class="checkbox">
          
              <input type="checkbox" name="public4" id="public4" value="yes"> 


              <label>
            Выражаю своё согласие на обработку персональных данных! 
              </label>
            




            <div id="capa" style="display:none; margin: 0 auto;" class="g-recaptcha" data-sitekey="6LfAs2AUAAAAAHssICeXdYo7B7ktHhnujNHXpaNf"></div><br>
          </div>
   <!--        </div> -->




<script>
  

$("#total11").text($("#shopping_cart_totalprice").html());



var str = "№ Наименование   Сумма " + "\n" + $("#shopping_cart_items").find("td").eq(0).text() +" "+ $("#shopping_cart_items").find("td").eq(1).text() +" "+ $("#shopping_cart_items").find("td").eq(2).text() + " рублей";

 $("#zak").val(str);



 $("#shopping_cart_items").clone().appendTo("#tab");





</script>

      <div id="hide4" style="display:none; color: #FF0000; font-weight: bold; text-align:center; font-size: 12pt;">
            
            
        <input  id="btn7"  type="submit" 
        class="button-blue" value="СДЕЛАТЬ ЗАКАЗ">
            
            
            
            
             <!-- onclick="document.location.href='http://a.tvc.su/index.php'" -->

               
          </div>


</form>


<script>
  
$('#btn7').click(function(){  


// $("#hiden1").val($("#tab").html());
// alert($("#hiden1").val());

$("#successdiv").fadeIn();
 $("#successdiv").delay(10000).fadeOut();

$("#order-form4").delay(10000).fadeOut();


                 $.ajax({  
                    url: "http://localhost:8888/recapcha/a/html/main3.php",  
                    cache: false,  
                    success: function(html){  
                        $(".main").html(html);  
                    }  
                });  



    $("#shopping_cart").style.display = 'none';



            });  

</script>

<script>
    $(function(){
      $("input#public4").on('change', function(){
        if($('#public4').prop('checked')){
          $('#hide4').fadeIn().show();
          $('#capa').fadeIn().show();
        }else{
          $('#hide4').fadeOut(300); 
          $('#capa').fadeOut((300));
        }
      });
    });
  </script>





</body> 

</html>