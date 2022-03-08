<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My First Prroject </title>
    <link rel="stylesheet" href="style.css" />
</head>
<body>
    
    <div class="flex-container">

        <div class="header">     
               <?php include 'logo.inc.php' ?>         
               <?php include 'menu.inc.php' ?>	   
        </div>       
     
        <div class="about_me">
         
          <h1>  <?php  echo $p  ?> </h1>

            <div class="data">
                <div class="myImg">
                    <?php  echo '<img src="img/Cat.jpg">'; ?>                    
                </div>

                <div class="fullname">
                    <p> Меня зовут 
                    <?php echo $name, ' ', $surname . '<br>'; 
                          echo 'Город', ' ', $city; ?>                                      
                    </p> 

                        <p> Мне
                    <?php  echo $age;   ?>          
                    лет </p>
                    <p> Мы научились создавать переменные и производить с ними разные операции </p>
                    <p> А так же изучили правила использования логических операторов </p>
                    <P> И научились складывать строки, выполняя конкатенацию <P>
                </div>
            </div>

            <div class="knowledge">
                                   
                    <?php  include 'knowledge.inc.php'; ?>
                    <?php   echo $a, ' ', $b, ' ', $c; ?> <br>
                                       
                    <?php
                        $a = 48;
                        $b = 55;
                        $c = $a + $b;
                        echo 'Сумма двух чисел = ', $c;
                    ?>   <br>                
                     <?php
                        echo $d;
                    ?>  <br>
                     <?php
                        echo $n;
                    ?> 

            </div>

            <div class="article">
                <p class="text">
                    Lorem Ipsum - это текст-"рыба", часто используемый в печати и вэб-дизайне. 
                    Lorem Ipsum является стандартной "рыбой" для текстов на латинице с начала XVI века.
                </p>
            </div>
        </div>

            <?php include 'footer.inc.php' ?>

    </div>


</body>
</html>