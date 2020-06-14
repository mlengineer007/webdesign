<html>

<body>
    
    <head><h1>  php practice  </h1><br> </head>
        <link rel="stylesheet" href="cp1.css">
   
    <p>
   
    <?php 
    
    $h = "hello";
    echo"i am saying ".$h;

    $x=5;//global variable
    $y = 6;
    $z = $x + $y;
    
    echo  " sum of 5 + 6 is ".$z."<br/>";
    
    
    function hello()
    {
        $m=10;
        $h = 11;
        $k = $m + $h;
        $cars = array("BMW","Volvo","hundai","ferrari");
        var_dump($cars);    
        echo " <br/>x is 5 as it is global scope <br/> ".$k;     
        var_dump($k);
        echo "<br/>";
        $a = "rashmith";
        $b = "rishitha";
        echo strlen($a);
        echo"<br/>";
        echo strlen($b);
        echo"<br/>";
        echo str_word_count("I love rishitha");
        echo"<br/>";
        echo strlen("i Love rishitha");
        echo"<br/>";
        echo strrev(" rishitha");
        echo"<br/>";
        echo strrev("rashmith");
    }
    
    class cars{
        function cars()
        {
            
            $this->model = "BMW <br/>";
                
        }
        
        
       
               
        
    }
    
     define(a,3);
    
    
   var_dump($x);
    echo"<br/>";
    $x=NULL;
   var_dump($x);
    echo"<br/>";
    
    $new = new cars();
    echo $new->model;
    hello();
    $d = "59.85" + 100;
    echo "<br/>";
  var_dump(is_numeric($d));
    $e = "hello";
     echo "<br/>";
var_dump(is_numeric($e));
    echo "<br/>";
    echo(a);
    
    echo("<br/>");
    
    echo("today is " .date("Y/m/d"));
    echo("<br/>");
    echo(date("l"));
    echo("<br/>");
    
    if(date("l")=="Sunday"){
        
        echo("today is sunday");
    }
    
    echo("<br/>");
    
  
    
    switch (date("l")){
            
        case Sunday:
            echo("yupiee today is sunday");
                break;
                
        case Monday;
            echo("shit today is moday");
            break;
    }  
    
        echo("<br/>");
       echo $_SERVER['PHP_SELF'];
echo "<br>";
echo $_SERVER['SERVER_NAME'];
echo "<br>";
echo $_SERVER['HTTP_HOST'];
echo "<br>";
echo $_SERVER['HTTP_REFERER'];
echo "<br>";
echo $_SERVER['HTTP_USER_AGENT'];
echo "<br>";
echo $_SERVER['SCRIPT_NAME'];

    
    
        ?>
    
       </p>  
    
    
    </body>

</html>