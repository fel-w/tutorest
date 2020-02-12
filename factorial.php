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
                        <a href="index.php?action=recursion_iteration#factorial"><span class="glyphicon glyphicon-arrow-left"></span></a>
                        <a href="index.php" ><span class="glyphicon glyphicon-home"></span></a>
                    </div>
                    <div class="implement">
                        <p class="implement-name">Factorial Implementation</p>
                    </div>
                </div>
            </div>
            <div class="clr"></div>
            
            <div class="container">        
                <div class="row control-panel">
                    <div class="col-sm-5 command-center">
                        <h4>Operations</h4>
                        <hr>
                        <form name="factorialForm">
                            <input type="text" placeholder="Value" maxlength="3" name="userValue">
                            <button type="button" onclick="Display();">Factorial ()</button><br>
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
    function Factorial(x){
        if (x == 0){
            return 1;
        }else
            return (x*Factorial(x-1));
    }
    
    function Display(){
        var factorialStack = [];
        var i = 0;
        var factorialStore="";
        var input = factorialForm.userValue.value;
        while (input >= 0){
            factorialStack[i] = "Factorial ("+input+") Result is "+Factorial(input);
            i++;
            --input;
        }
        factorialStack.reverse();
        stackLength = factorialStack.length;
        for (i=0; i < stackLength; i++){
            if(i == 0 && stackLength > 2)
                factorialStore += "Performs "+factorialStack[i]+ "; Returns result to the next call.";
            else if(i == 0 && stackLength == 1)
                factorialStore += "Performs "+factorialStack[i]+ "; Terminates.";
            else if(i == 0 && stackLength == 2)
                factorialStore += "Performs "+factorialStack[i]+ "; Returns result to the original call.";
            else if(i == (stackLength-1))
                factorialStore += "Finally "+factorialStack[i]+ "; Terminates." ;
            else if(i == (stackLength-2))
                factorialStore += factorialStack[i]+ "; Returns result to the original call." ;
            else
                factorialStore += factorialStack[i]+ "; Returns result to the next call." ;
        }
        document.getElementById("display").innerHTML = factorialStore;
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
                function Factorial(x){
                    if (x == 0){
                        return 1;
                    }else
                        return (x*Factorial(x-1));
                }
                
                function Display(){
                    var factorialStack = [];
                    var i = 0;
                    var factorialStore="";
                    var input = factorialForm.userValue.value;
                    while (input >= 0){
                        factorialStack[i] = "Factorial ("+input+")<br> Result is "+Factorial(input);
                        i++;
                        --input;
                    }
                    factorialStack.reverse();
                    stackLength = factorialStack.length;
                    for (i=0; i<stackLength; i++){
                        if(i == 0 && stackLength > 2)
                            factorialStore += "Performs "+factorialStack[i]+ "; Returns result to the next call.<br><br>";
                        else if(i == 0 && stackLength == 1)
                            factorialStore += "Performs "+factorialStack[i]+ "; Terminates.";
                        else if(i == 0 && stackLength == 2)
                            factorialStore += "Performs "+factorialStack[i]+ "; Returns result to the original call.<br><br>";
                        else if(i == (stackLength-1))
                            factorialStore += "Finally "+factorialStack[i]+ "; Terminates." ;
                        else if(i == (stackLength-2))
                            factorialStore += factorialStack[i]+ "; Returns result to the original call.<br><br>" ;
                        else
                            factorialStore += factorialStack[i]+ "; Returns result to the next call.<br><br>" ;
                    }
                    document.getElementById("display").innerHTML = factorialStore;
                }                
            </script>
            
        </body>
    </html>
