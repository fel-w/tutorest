<!DOCTYPE html>
    <html lang="en">
        <head>
            <title>Tutorest-Illustration</title>
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
            <link rel="stylesheet" href="css/bootstrap.min.css">
            <link rel="stylesheet" href="css/illustrate.css">
            <script src="js/jquery.min.js"></script>
            <script src="js/bootstrap.min.js"></script>
        </head>
        <body>
            <div class="container-fluid top-bar">
                <div class="container">
                    <div class="brand">
                        <a href="index.php?action=recursion-fibo"><span class="glyphicon glyphicon-arrow-left"></span></a>
                        <a href="index.php" ><span class="glyphicon glyphicon-home"></span></a>
                    </div>
                    <div class="implement">
                        <p class="implement-name">Fibonacci Implementation</p>
                    </div>
                </div>
            </div>
            <div class="clr"></div>
            
            <div class="container">        
                <div class="row control-panel">
                    <div class="col-sm-5 command-center">
                        <h4>Operations</h4>
                        <hr>
                        <form name="fibonacciForm">
                            <input type="text" placeholder="Value" maxlength="3" name="userValue">
                            <button type="button" onclick="Display();">Fibonacci ()</button><br>
                        </form>
                    </div>
                    
                    <div class="col-sm-5 display-2">
                        <h4 class="title">Display</h4>
                        <hr>
                        <div id="display"></div>
                    </div>
                    <div class="col-sm-1 instructions-2 alert alert-success">
                        <h4>Instructions</h4>
                        <ul>
                            <p><li>Enter the value and press the button to perform the function on it</li></p>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-12 code-section-2">
                    <h4>Code-Section</h4>
<pre>
    function Fibonacci(x){
        if (x == 0){
            return 0;
        }
        else if (x == 1)
            return 1; 
        else
            return (Fibonacci(x-1) + Fibonacci(x-2));
    }   


    function Display(){
        var fibonacciStack = [];
        var i = 0;
        var fibonacciStore="";
        var input = fibonacciForm.userValue.value;
        while (input >= 0){
            fibonacciStack[i] = "Fibonacci ("+input+") Result is "+Fibonacci(input);
            i++;
            --input;
        }
        fibonacciStack.reverse();
        stackLength = fibonacciStack.length;
        for (i=0; i < stackLength; i++){
            if(i == 0)
                fibonacciStore += "Performs "+fibonacciStack[i]+ ".";
            else if(i == 1 && stackLength > 3)
                fibonacciStore += "Performs "+fibonacciStack[i]+ ".The result of Fibonacci (1) and Fibonacci (0) is returned to the next call";
            else if(i == 1 && stackLength == 2)
                fibonacciStore += "Performs "+fibonacciStack[i]+ ".";
            else if(i == (stackLength-1))
                fibonacciStore += "Finally "+fibonacciStack[i]+ "; Terminates." ;
            else if(i == (stackLength-2))
                fibonacciStore += fibonacciStack[i]+ "The result of Fibonacci ("+i+") and Fibonacci ("+(i-1)+") is returned to the original call" ;
            else
                fibonacciStore += fibonacciStack[i]+ ";The result of Fibonacci ("+i+") and Fibonacci ("+(i-1)+") is returned to the next call" ;
        }
        document.getElementById("display").innerHTML = fibonacciStore;
    }
</pre>                    
                </div>
            </div>
            
            
            <footer class="container-fluid">
                <div class="footer-section">
                    <p class="copyright">© Copyright 2018. All Rights Reserved.</p>
                </div>
            </footer>
            <div class="clr"></div>
            

			<script>
                function Fibonacci(x){
                    if (x == 0){
                        return 0;
                    }
                    else if (x == 1)
                        return 1; 
                    else
                        return (Fibonacci(x-1) + Fibonacci(x-2));
                }   

  
                function Display(){
                    var fibonacciStack = [];
                    var i = 0;
                    var fibonacciStore="";
                    var input = fibonacciForm.userValue.value;
                    while (input >= 0){
                        fibonacciStack[i] = "Fibonacci ("+input+")<br> Result is "+Fibonacci(input);
                        i++;
                        --input;
                    }
                    fibonacciStack.reverse();
                    stackLength = fibonacciStack.length;
                    for (i=0; i<stackLength; i++){
                        if(i == 0)
                            fibonacciStore += "Performs "+fibonacciStack[i]+ ".<br><br>";
                        else if(i == 1 && stackLength > 3)
                            fibonacciStore += "Performs "+fibonacciStack[i]+ ".<br>The result of Fibonacci (1) and Fibonacci (0) is returned to the next call<br><br>";
                        else if(i == 1 && stackLength == 2)
                            fibonacciStore += "Performs "+fibonacciStack[i]+ ".<br><br>";
                        else if(i == (stackLength-1))
                            fibonacciStore += "Finally "+fibonacciStack[i]+ "; Terminates." ;
                        else if(i == (stackLength-2))
                            fibonacciStore += fibonacciStack[i]+ "<br>The result of Fibonacci ("+i+") and Fibonacci ("+(i-1)+") is returned to the original call<br><br>" ;
                        else
                            fibonacciStore += fibonacciStack[i]+ ";<br>The result of Fibonacci ("+i+") and Fibonacci ("+(i-1)+") is returned to the next call<br><br>" ;
                    }
                    document.getElementById("display").innerHTML = fibonacciStore;
                }
            </script>
      
        </body>
    </html>
