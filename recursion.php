<?php    
    include "func.php";
    include "induction.php";
    //include "fundamentals.php";
    //include "searching.php";
    //include "sorting.php";
    //include "graph.php";
    //include "tree.php";
?>

<!DOCTYPE html>
    <html lang="en">
        <head>
            <title>Tutorest</title>
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
            <link rel="stylesheet" href="css/bootstrap.min.css">
            <link rel="stylesheet" href="css/tutorest-main.css">
            <script src="js/jquery.min.js"></script>
            <script src="js/bootstrap.min.js"></script>
        </head>
        <body>
            
            <!--
                Topic - Recursion Introduction
            -->
            
            <?php if($a == "recursion"){?>
            
            <!--Top Navigation Bar-->
            <header class="navbar navbar-inverse">
                <div class="container">
                    
                    <!--Site Logo Section-->
                    <div class="navbar-header">
                       <p class="navbar-brand">Tutorest</p>
                    </div>
                    <!--End of Site Logo Section -->
                    
                    <!--Top Bar Menu-->
                    <ul class="nav navbar-nav">
                        <li><a href="?action=home">Home</a></li>
                        <li><a href="about.php">About</a></li>
                        <li><a href="question.php">Ask a Question</a></li>
                        <li><a href="faq.php">FAQ</a></li>
                    </ul>
                    <!--End of Top Bar Menu-->
                    
                </div>
            </header>
            <!--End of Top Navigation Bar-->
            <!--Collapse Button-->
                    <button type="button"class="navbar-toggle" data-toggle="collapse" data-target="#topics">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
            <!--End of Collapse Button-->
            
            <!--The Main Container-->
            <div class="container-fluid main-container">
                <!--Topics Navigation-->
                <nav class="collapse navbar-collapse" id="topics">
                    
                        <p class="main-pill">Data Structures & Algorithms</p>

					<!--Introduction-->
                        <button type="button" class="topic-pill accordion">Introduction </button>
						<div class="panel">
							<a href="?action=intro-defn"><p class="subtopic-pill">Definition, Structure, Strategies, Properties and Classification of Algorithms </p></a>
						</div>
					<!--End of Introdution-->

					<!--Algorithm Ananlysis-->                        
                        <button type="button" class="topic-pill accordion">Algorithm Analysis</button>
						<div class="panel">
							<a href="?action=analysis"><p class="subtopic-pill">Analysis of Algorithms </p></a>
							<a href="?action=analysis-emp"><p class="subtopic-pill">Empirical Analysis </p></a>
							<a href="?action=analysis-analytical"><p class="subtopic-pill">Analytical Analysis </p></a>
							<a href="?action=analysis-funcs"><p class="subtopic-pill">Functions in Analysis </p></a>
							<a href="?action=analysis-orderGrowth"><p class="subtopic-pill">Order of Growth </p></a>
							<a href="?action=analysis-asymtic"><p class="subtopic-pill">Asymptotic Analysis </p></a>
						</div>
					<!--End of Algorithm Ananlysis-->

					<!--Recursion-->
                        <div class="topic-pill active-accordion">Recursion</div>
                        <div class="panel-active">
                            <p class="active-panel">Definition, Process, Properties and Characterisics</p>
							<a href="?action=recursion_iteration"><p class="subtopic-pill">Recursion Vs Iteration</p></a>    
							<a href="?action=recursion-toh"><p class="subtopic-pill">Tower of Hanoi </p></a>    
							<a href="?action=recursion-fibo"><p class="subtopic-pill">Fibonacci Series </p></a>    
							<a href="?action=recursion_stacks"><p class="subtopic-pill">Recursion & Stacks </p></a>    
							<a href="?action=recursion-analysis"><p class="subtopic-pill">Analysis of Recursion</p></a>
						</div>
					<!--End of Recursion-->

					<!--Induction-->
                        <button type="button" class="topic-pill accordion">Induction</button>
						<div class="panel">
							<a href="?action=inductn-recursion"><p class="subtopic-pill">Relation to Recursion </p></a>
							<a href="?action=inductn-proof"><p class="subtopic-pill">Proof by Induction </p></a>    
							<a href="?action=inductn-appln"><p class="subtopic-pill">Application </p></a>
						</div>
					<!--End of Induction-->

					<!--Fundamentals of Data Structures-->
                        <button type="button" class="topic-pill accordion long-topic">Fundamentals of Data Structures</button>
						<div class="panel">
							<a href="?action=stack"><p class="subtopic-pill">Stack</p></a>
							<a href="?action=stack-array"><p class="subtopic-pill inner">Stack-Arrays</p></a>
							<a href="?action=stack-list"><p class="subtopic-pill inner">Stack-Linked Lists</p></a>							
							<a href="?action=queue"><p class="subtopic-pill">Queue</p></a>
							<a href="?action=queue-array"><p class="subtopic-pill inner">Queue-Arrays</p></a>
							<a href="?action=queue-c-array"><p class="subtopic-pill inner">Queue-Circular Arrays</p></a>
							<a href="?action=queue-list"><p class="subtopic-pill inner">Queue-Linked Lists</p></a>
							<a href="?action=lists"><p class="subtopic-pill">Lists</p></a>
							<a href="?action=lists-singly"><p class="subtopic-pill inner">Lists - Singly Linked Lists</p></a>
							<a href="?action=lists-doubly"><p class="subtopic-pill inner">Lists - Doubly Linked Lists</p></a>
						</div>
					<!--End of Fundamentals of Data Structures-->

					<!--Searching Techniques-->
                        <button type="button" class="topic-pill accordion">Searching Techniques</button>
						<div class="panel">
							<a href="?action=search-lin"><p class="subtopic-pill">Linear Search</p></a>
							<a href="?action=search-bin"><p class="subtopic-pill">Binary Search</p></a>    
						</div>
					<!--End of Searching Techniques-->

					<!--Sorting Techniques-->
                        <button type="button" class="topic-pill accordion">Sorting Techniques</button>
						<div class="panel">
							<a href="?action=sort-bbo"><p class="subtopic-pill">Bubble Sort</p></a>
							<a href="?action=sort-ins"><p class="subtopic-pill">Insertion Sort</p></a>
							<a href="?action=sort-sel"><p class="subtopic-pill">Selection Sort</p></a>
							<a href="?action=sort-merg"><p class="subtopic-pill">Merge Sort</p></a>
							<a href="?action=sort-quick"><p class="subtopic-pill">Quick Sort</p></a>
						</div>
					<!--End of Sorting Techniques-->

					<!--Graph Data Structure-->
                        <button type="button" class="topic-pill accordion">Graph Data Structure</button>
						<div class="panel">
							<a href="?action=graphs-DFT"><p class="subtopic-pill">Depth First Traversal</p></a>
							<a href="?action=graphs-BFT"><p class="subtopic-pill">Breadth First Traversal</p></a>
						</div>
					<!--End of Graph Data Structure-->

					<!--Tree Data Structure-->
                        <button type="button" class="topic-pill accordion">Tree Data Structure</button>
						<div class="panel">
							<a href="?action=trees"><p class="subtopic-pill">Tree Traversal</p></a>
							<a href="?action=trees-bin"><p class="subtopic-pill">Binary Search Tree</p></a>
							<a href="?action=trees-AVL"><p class="subtopic-pill">AVL Tree</p></a>
							<a href="?action=trees-span"><p class="subtopic-pill">Spanning Tree</p></a>
							<a href="?action=trees-heap"><p class="subtopic-pill">Heap</p></a>
						</div>
						
					<!--End of Tree Data Structure-->
                                       
                </nav>
                <!--End of Topics Navigation-->

                 <!--Content-section-->
                    <div class="content-section">
                        <div class="title"><p>Definition, Process, Properties and Characterisics</p></div>
                        <hr>
                        <!--Content-nav-->
                        <div class="content-nav">
                            <a href="?action=recursion_iteration"><div class="next"><p>Next »</p></div></a>
                            <a href="?action=analysis-asymtic"><div class="previous"><p>« Previous</p></div></a>
                            <div class="clr"></div>
                        </div>
                        <hr>
                        <!--End of Content-nav-->
                
                        <!--Content-body-->
                        <div class="content-body">
                            <p>Recursion is a programming technique in which a function "X" calls itself (Direct Recursion); or calls another function "Y" that in turn calls the original function "X" (Indirect Recursion)</p>
							<p>Recursion is a very powerful programming tool and it is always advantageous to use for problems that can be solved in pieces (using the divide and conquer technique); it also shortens the code</p>
							<p>Example of a function that calls itself <strong>(Finding the nth term)</strong></p>
<pre>
    int triangle(int n){
    if(n == 1)  
        return 1;
    else
        return(n + triangle(n-1));
    }
</pre>
							<p>Each call to a function creates a new environment in which all local variables and parameters are newly defined.</p>
							<img src="images/nth-term.png" class="image" alt="Finding the nth term Illustration">
							<p>Each time a method terminates, processing returns to the method that called it ( which for recursive calls, is an earlier invocation of the same method)</p>
							<p>To ensure program termination, the method must define both; <strong>A base case </strong> and <strong>A recursive case</strong></p>
							<p class="sub-title">Properties</p>
							<p>A recursive function must have two properties that stop it from running infinitely:</p>
							<p><b>Base criteria</b> − There must be at least one base criteria or condition, such that, when this condition is met the function stops calling itself recursively.</p>
							<p><b>Progressive approach</b> − The recursive calls should progress in such a way that each time a recursive call is made it comes closer to the base criteria.</p>
                        </div>
                        <hr>
                        <!--End of Content-body-->
                
                        <!--Content-nav-->
                        <div class="content-nav">
                            <a href="?action=recursion_iteration"><div class="next"><p>Next »</p></div></a>
                            <a href="?action=analysis-asymtic"><div class="previous"><p>« Previous</p></div></a>
                            <div class="clr"></div>
                        </div>
                        <!--End of Content-nav-->        
                    </div>
                    <div class="clr"></div>
                    <!--End of Content-section-->                            
            </div>
            <!--End of Main Container-->    
            
            <!--Footer-section -->
            <footer class="container-fluid">
                <div class="footer-section">
                    <p class="copyright">© Copyright 2018. All Rights Reserved.</p>
                </div>
            </footer>
            <div class="clr"></div>
            <!--End of Footer-section-->
            
            <!--
                End of Topic - Recursion Introduction
            -->
            
            
            <?php } elseif ($a == "recursion_iteration"){ ?>
            
            <!--
                Topic - Recursion Vs Iteration 
            -->
             <!--Top Navigation Bar-->
            <header class="navbar navbar-inverse">
                <div class="container">
                    
                    <!--Site Logo Section-->
                    <div class="navbar-header">
                       <p class="navbar-brand">Tutorest</p>
                    </div>
                    <!--End of Site Logo Section -->
                    
                    <!--Top Bar Menu-->
                    <ul class="nav navbar-nav">
                        <li><a href="?action=home">Home</a></li>
                        <li><a href="about.php">About</a></li>
                        <li><a href="question.php">Ask a Question</a></li>
                        <li><a href="faq.php">FAQ</a></li>
                    </ul>
                    <!--End of Top Bar Menu-->
                    
                </div>
            </header>
            <!--End of Top Navigation Bar-->
            <!--Collapse Button-->
                    <button type="button"class="navbar-toggle" data-toggle="collapse" data-target="#topics">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
            <!--End of Collapse Button-->
            
            <!--The Main Container-->
            <div class="container-fluid main-container">
                <!--Topics Navigation-->
                <nav class="collapse navbar-collapse" id="topics">
                    
                        <p class="main-pill">Data Structures & Algorithms</p>

					<!--Introduction-->
                        <button type="button" class="topic-pill accordion">Introduction </button>
						<div class="panel">
							<a href="?action=intro-defn"><p class="subtopic-pill">Definition, Structure, Strategies, Properties and Classification of Algorithms </p></a>
						</div>
					<!--End of Introdution-->

					<!--Algorithm Ananlysis-->                        
                        <button type="button" class="topic-pill accordion">Algorithm Analysis</button>
						<div class="panel">
							<a href="?action=analysis"><p class="subtopic-pill">Analysis of Algorithms </p></a>
							<a href="?action=analysis-emp"><p class="subtopic-pill">Empirical Analysis </p></a>
							<a href="?action=analysis-analytical"><p class="subtopic-pill">Analytical Analysis </p></a>
							<a href="?action=analysis-funcs"><p class="subtopic-pill">Functions in Analysis </p></a>
							<a href="?action=analysis-orderGrowth"><p class="subtopic-pill">Order of Growth </p></a>
							<a href="?action=analysis-asymtic"><p class="subtopic-pill">Asymptotic Analysis </p></a>
						</div>
					<!--End of Algorithm Ananlysis-->

					<!--Recursion-->
                        <div class="topic-pill active-accordion">Recursion</div>
                        <div class="panel-active">
							<a href="?action=recursion"><p class="subtopic-pill">Definition, Process, Properties and Characterisics</p></a>
                            <p class="active-panel">Recursion Vs Iteration</p>
							<a href="?action=recursion-toh"><p class="subtopic-pill">Tower of Hanoi </p></a>    
							<a href="?action=recursion-fibo"><p class="subtopic-pill">Fibonacci Series </p></a>    
							<a href="?action=recursion_stacks"><p class="subtopic-pill">Recursion & Stacks </p></a>    
							<a href="?action=recursion-analysis"><p class="subtopic-pill">Analysis of Recursion</p></a>
						</div>
					<!--End of Recursion-->

					<!--Induction-->
                        <button type="button" class="topic-pill accordion">Induction</button>
						<div class="panel">
							<a href="?action=inductn-recursion"><p class="subtopic-pill">Relation to Recursion </p></a>
							<a href="?action=inductn-proof"><p class="subtopic-pill">Proof by Induction </p></a>    
							<a href="?action=inductn-appln"><p class="subtopic-pill">Application </p></a>
						</div>
					<!--End of Induction-->

					<!--Fundamentals of Data Structures-->
                        <button type="button" class="topic-pill accordion long-topic">Fundamentals of Data Structures</button>
						<div class="panel">
							<a href="?action=stack"><p class="subtopic-pill">Stack</p></a>
							<a href="?action=stack-array"><p class="subtopic-pill inner">Stack-Arrays</p></a>
							<a href="?action=stack-list"><p class="subtopic-pill inner">Stack-Linked Lists</p></a>							
							<a href="?action=queue"><p class="subtopic-pill">Queue</p></a>
							<a href="?action=queue-array"><p class="subtopic-pill inner">Queue-Arrays</p></a>
							<a href="?action=queue-c-array"><p class="subtopic-pill inner">Queue-Circular Arrays</p></a>
							<a href="?action=queue-list"><p class="subtopic-pill inner">Queue-Linked Lists</p></a>
							<a href="?action=lists"><p class="subtopic-pill">Lists</p></a>
							<a href="?action=lists-singly"><p class="subtopic-pill inner">Lists - Singly Linked Lists</p></a>
							<a href="?action=lists-doubly"><p class="subtopic-pill inner">Lists - Doubly Linked Lists</p></a>
						</div>
					<!--End of Fundamentals of Data Structures-->

					<!--Searching Techniques-->
                        <button type="button" class="topic-pill accordion">Searching Techniques</button>
						<div class="panel">
							<a href="?action=search-lin"><p class="subtopic-pill">Linear Search</p></a>
							<a href="?action=search-bin"><p class="subtopic-pill">Binary Search</p></a>    
						</div>
					<!--End of Searching Techniques-->

					<!--Sorting Techniques-->
                        <button type="button" class="topic-pill accordion">Sorting Techniques</button>
						<div class="panel">
							<a href="?action=sort-bbo"><p class="subtopic-pill">Bubble Sort</p></a>
							<a href="?action=sort-ins"><p class="subtopic-pill">Insertion Sort</p></a>
							<a href="?action=sort-sel"><p class="subtopic-pill">Selection Sort</p></a>
							<a href="?action=sort-merg"><p class="subtopic-pill">Merge Sort</p></a>
							<a href="?action=sort-quick"><p class="subtopic-pill">Quick Sort</p></a>
						</div>
					<!--End of Sorting Techniques-->

					<!--Graph Data Structure-->
                        <button type="button" class="topic-pill accordion">Graph Data Structure</button>
						<div class="panel">
							<a href="?action=graphs-DFT"><p class="subtopic-pill">Depth First Traversal</p></a>
							<a href="?action=graphs-BFT"><p class="subtopic-pill">Breadth First Traversal</p></a>
						</div>
					<!--End of Graph Data Structure-->

					<!--Tree Data Structure-->
                        <button type="button" class="topic-pill accordion">Tree Data Structure</button>
						<div class="panel">
							<a href="?action=trees"><p class="subtopic-pill">Tree Traversal</p></a>
							<a href="?action=trees-bin"><p class="subtopic-pill">Binary Search Tree</p></a>
							<a href="?action=trees-AVL"><p class="subtopic-pill">AVL Tree</p></a>
							<a href="?action=trees-span"><p class="subtopic-pill">Spanning Tree</p></a>
							<a href="?action=trees-heap"><p class="subtopic-pill">Heap</p></a>
						</div>
						
					<!--End of Tree Data Structure-->
                                       
                </nav>
                <!--End of Topics Navigation-->

                 <!--Content-section-->
                <div class="content-section">
                    <div class="title"><p>Recursion Vs Iteration</p></div>
                    <hr>
                    <!--Content-nav-->
                    <div class="content-nav">
                        <a href="?action=recursion-toh"><div class="next"><p>Next »</p></div></a>
                        <a href="?action=recursion"><div class="previous"><p>« Previous</p></div></a>
                        <div class="clr"></div>
                    </div>
                    <hr>
                    <!--End of Content-nav-->
            
                    <!--Content-body-->
                    <div class="content-body">
                        <p>Much as the two techniques, Iteration and Recursion, can interchangeably be used to write a given algorithm, they follow distinct mechanisms in their executions.</p>
                        <p class="title">Comparison of Iteration and Recursion</p>
                        <hr>
                        <table>
                            <tr>
                                <th>Iteration</th>
                                <th>Recursion</th>
                            </tr>
                            <tr>
                                <td>Involves execution of a certain set of instructions repeatedly, without calling a self function </td>
                                <td>Involves execution of a certain set of instructions repeatedly by calling a self function repeatedly.</td>
                            </tr>
                            <tr>
                                <td>Implemented with using; for, while, do-while programming constructs. </td>
                                <td>Execution is obtained by calling the same function repeatedly over some condition, instead of employing the loop constructs</td>
                            </tr>
                            <tr>
                                <td>Offers efficiency through better execution speed<br></td>
                                <td>Less efficient method due to more execution time taken</td>
                            </tr>
                            <tr>
                                <td>Memory utilization by iteration is less. </td>
                                <td>Memory utilization is more.</td>
                            </tr>
                            <tr>
                                <td>It is simpler to implement and debug. </td>
                                <td>It is complex to implement and debug</td>
                            </tr>
                            <tr>
                                <td>Involves more lines of code</td>
                                <td>Makes a program compact and eleagant</td>
                            </tr>    
                        </table>
                        <br>
                        <p class="title">Comparison of Iteration and Recursion Illustrated</p>
                        <hr>
                        <div class="sub-title" id="factorial">Factorial of a number</div>
                        <p>Factorial of a number(n) is obtained by multiplying n with the factorial of (n-1).</p>
                        <p>For example, factorial of 3 = (3 * 2 * 1)</p>
                        <p>Factorial of 0 is 1</p>
                        <div class="sub-title underline">Contrast between Recursive and Iterative Factorial Algorithms</div>
                        <br>
<pre>
    <span class="underline">Recursive</span>                                               <span class="underline">Iterative</span>
    Factorial(n){                                           Factorial(n){
        if (n == 0)                                             i = 1
            return 1                                            factN = 1
        else                                                    while (i <= n){
            return (n * Factorial(n-1))                             factN = factN * i
        end if                                                      i = i + 1
    }                                                               end while
                                                                }
                                                                return factN
                                                            }
</pre>



                        <p class="title">Implementation of Factorial of any number (n)</p>
                        <div class="button-area"><a href="factorial.php" target="_blank"><button class="illustrate-btn">Try It Out</button></a></div>
                    </div>
                        <hr>
                        <!--End of Content-body-->
                
                        <!--Content-nav-->
                        <div class="content-nav">
                            <a href="?action=recursion-toh"><div class="next"><p>Next »</p></div></a>
                            <a href="?action=recursion"><div class="previous"><p>« Previous</p></div></a>
                            <div class="clr"></div>
                        </div>
                        <!--End of Content-nav-->        
                </div>
                <div class="clr"></div>
                <!--End of Content-section-->
                
            </div>
            <!--End of Main Container-->    
            
            <!--Footer-section -->
            <footer class="container-fluid">
                <div class="footer-section">
                    <p class="copyright">© Copyright 2018. All Rights Reserved.</p>
                </div>
            </footer>
            <div class="clr"></div>
            <!--End of Footer-section-->
        
            <!--
                End of Topic - Recursion Vs Iteration 
            -->

            
            <?php } elseif ($a == "recursion-toh"){ ?>
            
            <!--
                Topic - Tower of Hanoi
            -->
            
            <!--Top Navigation Bar-->
            <header class="navbar navbar-inverse">
                <div class="container">
                    
                    <!--Site Logo Section-->
                    <div class="navbar-header">
                       <p class="navbar-brand">Tutorest</p>
                    </div>
                    <!--End of Site Logo Section -->
                    
                    <!--Top Bar Menu-->
                    <ul class="nav navbar-nav">
                        <li><a href="?action=home">Home</a></li>
                        <li><a href="about.php">About</a></li>
                        <li><a href="question.php">Ask a Question</a></li>
                        <li><a href="faq.php">FAQ</a></li>
                    </ul>
                    <!--End of Top Bar Menu-->
                    
                </div>
            </header>
            <!--End of Top Navigation Bar-->
            <!--Collapse Button-->
                    <button type="button"class="navbar-toggle" data-toggle="collapse" data-target="#topics">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
            <!--End of Collapse Button-->
            
            <!--The Main Container-->
            <div class="container-fluid main-container">
                <!--Topics Navigation-->
                <nav class="collapse navbar-collapse" id="topics">
                    
                        <p class="main-pill">Data Structures & Algorithms</p>

					<!--Introduction-->
                        <button type="button" class="topic-pill accordion">Introduction </button>
						<div class="panel">
							<a href="?action=intro-defn"><p class="subtopic-pill">Definition, Structure, Strategies, Properties and Classification of Algorithms </p></a>
						</div>
					<!--End of Introdution-->

					<!--Algorithm Ananlysis-->
                        <button type="button" class="topic-pill accordion">Algorithm Analysis</button>
                        <div class="panel">
							<a href="?action=analysis"><p class="subtopic-pill">Analysis of Algorithms </p></a>
							<a href="?action=analysis-emp"><p class="subtopic-pill">Empirical Analysis </p></a>
							<a href="?action=analysis-analytical"><p class="subtopic-pill">Analytical Analysis </p></a>
							<a href="?action=analysis-funcs"><p class="subtopic-pill">Functions in Analysis </p></a>
							<a href="?action=analysis-orderGrowth"><p class="subtopic-pill">Order of Growth </p></a>
							<p class="active-panel">Asymptotic Analysis </p>
						</div>
					<!--End of Algorithm Ananlysis-->
                    

					<!--Recursion-->
                        <div class="topic-pill active-accordion">Recursion</div>
						<div class="panel-active">
							<a href="?action=recursion"><p class="subtopic-pill">Definition, Process, Properties and Characterisics</p></a>
							<a href="?action=recursion_iteration"><p class="subtopic-pill">Recursion Vs Iteration</p></a>
                            <p class="active-panel">Tower of Hanoi</p>
							<a href="?action=recursion-fibo"><p class="subtopic-pill">Fibonacci Series </p></a>    
							<a href="?action=recursion_stacks"><p class="subtopic-pill">Recursion & Stacks </p></a>    
							<a href="?action=recursion-analysis"><p class="subtopic-pill">Analysis of Recursion</p></a>
						</div>
					<!--End of Recursion-->

					<!--Induction-->
                        <button type="button" class="topic-pill accordion">Induction</button>
						<div class="panel">
							<a href="?action=inductn-recursion"><p class="subtopic-pill">Relation to Recursion </p></a>
							<a href="?action=inductn-proof"><p class="subtopic-pill">Proof by Induction </p></a>    
							<a href="?action=inductn-appln"><p class="subtopic-pill">Application </p></a>
						</div>
					<!--End of Induction-->

					<!--Fundamentals of Data Structures-->
                        <button type="button" class="topic-pill accordion long-topic">Fundamentals of Data Structures</button>
						<div class="panel">
							<a href="?action=stack"><p class="subtopic-pill">Stack</p></a>
							<a href="?action=stack-array"><p class="subtopic-pill inner">Stack-Arrays</p></a>
							<a href="?action=stack-list"><p class="subtopic-pill inner">Stack-Linked Lists</p></a>							
							<a href="?action=queue"><p class="subtopic-pill">Queue</p></a>
							<a href="?action=queue-array"><p class="subtopic-pill inner">Queue-Arrays</p></a>
							<a href="?action=queue-c-array"><p class="subtopic-pill inner">Queue-Circular Arrays</p></a>
							<a href="?action=queue-list"><p class="subtopic-pill inner">Queue-Linked Lists</p></a>
							<a href="?action=lists"><p class="subtopic-pill">Lists</p></a>
							<a href="?action=lists-singly"><p class="subtopic-pill inner">Lists - Singly Linked Lists</p></a>
							<a href="?action=lists-doubly"><p class="subtopic-pill inner">Lists - Doubly Linked Lists</p></a>
						</div>
					<!--End of Fundamentals of Data Structures-->

					<!--Searching Techniques-->
                        <button type="button" class="topic-pill accordion">Searching Techniques</button>
						<div class="panel">
							<a href="?action=search-lin"><p class="subtopic-pill">Linear Search</p></a>
							<a href="?action=search-bin"><p class="subtopic-pill">Binary Search</p></a>    
						</div>
					<!--End of Searching Techniques-->

					<!--Sorting Techniques-->
                        <button type="button" class="topic-pill accordion">Sorting Techniques</button>
						<div class="panel">
							<a href="?action=sort-bbo"><p class="subtopic-pill">Bubble Sort</p></a>
							<a href="?action=sort-ins"><p class="subtopic-pill">Insertion Sort</p></a>
							<a href="?action=sort-sel"><p class="subtopic-pill">Selection Sort</p></a>
							<a href="?action=sort-merg"><p class="subtopic-pill">Merge Sort</p></a>
							<a href="?action=sort-quick"><p class="subtopic-pill">Quick Sort</p></a>
						</div>
					<!--End of Sorting Techniques-->

					<!--Graph Data Structure-->
                        <button type="button" class="topic-pill accordion">Graph Data Structure</button>
						<div class="panel">
							<a href="?action=graphs-DFT"><p class="subtopic-pill">Depth First Traversal</p></a>
							<a href="?action=graphs-BFT"><p class="subtopic-pill">Breadth First Traversal</p></a>
						</div>
					<!--End of Graph Data Structure-->

					<!--Tree Data Structure-->
                        <button type="button" class="topic-pill accordion">Tree Data Structure</button>
						<div class="panel">
							<a href="?action=trees"><p class="subtopic-pill">Tree Traversal</p></a>
							<a href="?action=trees-bin"><p class="subtopic-pill">Binary Search Tree</p></a>
							<a href="?action=trees-AVL"><p class="subtopic-pill">AVL Tree</p></a>
							<a href="?action=trees-span"><p class="subtopic-pill">Spanning Tree</p></a>
							<a href="?action=trees-heap"><p class="subtopic-pill">Heap</p></a>
						</div>
						
					<!--End of Tree Data Structure-->
                                       
                </nav>
                <!--End of Topics Navigation-->

                 <!--Content-section-->
                    <div class="content-section">
                        <div class="title"><p>Tower of Hanoi</p></div>
                        <hr>
                        <!--Content-nav-->
                        <div class="content-nav">
                            <a href="?action=recursion-fibo"><div class="next"><p>Next »</p></div></a>
                            <a href="?action=recursion_iteration"><div class="previous"><p>« Previous</p></div></a>
                            <div class="clr"></div>
                        </div>
                        <hr>
                        <!--End of Content-nav-->
                
                        <!--Content-body-->
                        <div class="content-body">
                            <p>Tower of Hanoi, is a mathematical puzzle which consists of three towers (pegs) and more than one rings is as depicted below.</p>
                            
                            <img src="images/tower_of_hanoi.jpg" alt="Tower of Hanoi Image" class="image">
                            
                            <p>These rings are of different sizes and stacked upon in an ascending order, i.e. the smaller one sits over the larger one.</p>
                            
                            <p>The task is to move all the disks to some another tower without violating the sequence of arrangement.</p>
                            
                            <p>Tower of Hanoi puzzle with n disks can be solved in minimum (2<sup>n</sup>−1) steps. </p>
                            
                            <div class="title">Rules</div>
                            <hr>
                            <ul>
                                <li>Only one disk can be moved among the towers at any given time.</li>
                                <li>Only the "top" disk can be removed.</li>
                                <li>No large disk can sit over a small disk.</li>
                            </ul>
                            
                            <p>Following is an animated representation of solving a Tower of Hanoi puzzle with three disks. This presentation shows a puzzle with 3 disks, <br>taking 2<sup>3</sup> - 1 = 7 steps.</p>
                            <img src="images/tower_of_hanoi.gif" alt="Tower of Hanoi Illustration" class="image">
                            
                            <div class="sub-title">Algorithm</div>
                            <p>To write an algorithm for Tower of Hanoi, first we need to learn how to solve this problem with lesser amount of disks, say 2.</p>
                            <p>The three towers are marked; source, destination and aux</p>
                            <ul>
                                <li>First, we move the smaller (top) disk to aux peg.</li>
                                <li>Then, we move the larger (bottom) disk to destination peg.</li>
                                <li>And finally, we move the smaller disk from aux to destination peg.</li>
                            </ul>
                            <p>Therefore, for an algorithm for Tower of Hanoi with more than two disks, we divide the stack of disks in two parts. The largest disk (nth disk) is in one part and all other (n-1) disks are in the second part.</p>
                            <p>The aim is to move disk n from source to destination and then put all other disks onto it.</p>
                            <p>We can imagine to apply the same in a recursive way for all given set of disks using these steps:</p>
                            
                            <ul>
                                <li><b>Step 1</b> − Move n-1 disks from source to aux</li>
                                <li><b>Step 2</b> − Move nth disk from source to dest</li>
                                <li><b>Step 3</b> − Move n-1 disks from aux to dest</li>
                            </ul>
                            
                            <p>The Algorithm therefore becoming:</p>
<pre>
    TowerHanoi(disk, source, dest, aux){
        IF disk == 1, THEN
            move disk from source to dest             
        ELSE
            TowerHanoi(disk - 1, source, aux, dest)     // Step 1
            move disk from source to dest               // Step 2
            TowerHanoi(disk - 1, aux, dest, source)     // Step 3
        END IF
    }
</pre>
                            <p class="title">Implementation of the Tower of Hanoi</p>
                            <div class="button-area"><a href="toh.html" target="_blank"><button class="illustrate-btn">Try It Out</button></a></div>
                        </div>
                        <hr>
                        <!--End of Content-body-->
                
                        <!--Content-nav-->
                        <div class="content-nav">
                            <a href="?action=recursion-fibo"><div class="next"><p>Next »</p></div></a>
                            <a href="?action=recursion_iteration"><div class="previous"><p>« Previous</p></div></a>
                            <div class="clr"></div>
                        </div>
                        <!--End of Content-nav-->        
                    </div>
                    <div class="clr"></div>
                    <!--End of Content-section-->                            
            </div>
            <!--End of Main Container-->    
            
            <!--Footer-section -->
            <footer class="container-fluid">
                <div class="footer-section">
                    <p class="copyright">© Copyright 2018. All Rights Reserved.</p>
                </div>
            </footer>
            <div class="clr"></div>
            <!--End of Footer-section-->
            
            <!--
                End of Topic - Tower of Hanoi
            -->
            
            
            <?php } elseif ($a == "recursion-fibo"){ ?>
            
            <!--
                Topic - Fibonacci Series
            -->
            
            <!--Top Navigation Bar-->
            <header class="navbar navbar-inverse">
                <div class="container">
                    
                    <!--Site Logo Section-->
                    <div class="navbar-header">
                       <p class="navbar-brand">Tutorest</p>
                    </div>
                    <!--End of Site Logo Section -->
                    
                    <!--Top Bar Menu-->
                    <ul class="nav navbar-nav">
                        <li><a href="?action=home">Home</a></li>
                        <li><a href="about.php">About</a></li>
                        <li><a href="question.php">Ask a Question</a></li>
                        <li><a href="faq.php">FAQ</a></li>
                    </ul>
                    <!--End of Top Bar Menu-->
                    
                </div>
            </header>
            <!--End of Top Navigation Bar-->
            <!--Collapse Button-->
                    <button type="button"class="navbar-toggle" data-toggle="collapse" data-target="#topics">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
            <!--End of Collapse Button-->
            
            <!--The Main Container-->
            <div class="container-fluid main-container">
                <!--Topics Navigation-->
                <nav class="collapse navbar-collapse" id="topics">
                    
                        <p class="main-pill">Data Structures & Algorithms</p>

					<!--Introduction-->
                        <button type="button" class="topic-pill accordion">Introduction </button>
						<div class="panel">
							<a href="?action=intro-defn"><p class="subtopic-pill">Definition, Structure, Strategies, Properties and Classification of Algorithms </p></a>
						</div>
					<!--End of Introdution-->

					<!--Algorithm Ananlysis-->
                        <button type="button" class="topic-pill accordion">Algorithm Analysis</button>
                        <div class="panel">
							<a href="?action=analysis"><p class="subtopic-pill">Analysis of Algorithms </p></a>
							<a href="?action=analysis-emp"><p class="subtopic-pill">Empirical Analysis </p></a>
							<a href="?action=analysis-analytical"><p class="subtopic-pill">Analytical Analysis </p></a>
							<a href="?action=analysis-funcs"><p class="subtopic-pill">Functions in Analysis </p></a>
							<a href="?action=analysis-orderGrowth"><p class="subtopic-pill">Order of Growth </p></a>
							<p class="active-panel">Asymptotic Analysis </p>
						</div>
					<!--End of Algorithm Ananlysis-->
                    

					<!--Recursion-->
                        <div class="topic-pill active-accordion">Recursion</div>
						<div class="panel-active">
							<a href="?action=recursion"><p class="subtopic-pill">Definition, Process, Properties and Characterisics</p></a>
							<a href="?action=recursion_iteration"><p class="subtopic-pill">Recursion Vs Iteration</p></a>
                            <a href="?action=recursion-toh"><p class="subtopic-pill">Tower of Hanoi</p></a>
                            <p class="active-panel">Fibonacci Series</p>
							<a href="?action=recursion_stacks"><p class="subtopic-pill">Recursion & Stacks </p></a>    
							<a href="?action=recursion-analysis"><p class="subtopic-pill">Analysis of Recursion</p></a>
						</div>
					<!--End of Recursion-->

					<!--Induction-->
                        <button type="button" class="topic-pill accordion">Induction</button>
						<div class="panel">
							<a href="?action=inductn-recursion"><p class="subtopic-pill">Relation to Recursion </p></a>
							<a href="?action=inductn-proof"><p class="subtopic-pill">Proof by Induction </p></a>    
							<a href="?action=inductn-appln"><p class="subtopic-pill">Application </p></a>
						</div>
					<!--End of Induction-->

					<!--Fundamentals of Data Structures-->
                        <button type="button" class="topic-pill accordion long-topic">Fundamentals of Data Structures</button>
						<div class="panel">
							<a href="?action=stack"><p class="subtopic-pill">Stack</p></a>
							<a href="?action=stack-array"><p class="subtopic-pill inner">Stack-Arrays</p></a>
							<a href="?action=stack-list"><p class="subtopic-pill inner">Stack-Linked Lists</p></a>							
							<a href="?action=queue"><p class="subtopic-pill">Queue</p></a>
							<a href="?action=queue-array"><p class="subtopic-pill inner">Queue-Arrays</p></a>
							<a href="?action=queue-c-array"><p class="subtopic-pill inner">Queue-Circular Arrays</p></a>
							<a href="?action=queue-list"><p class="subtopic-pill inner">Queue-Linked Lists</p></a>
							<a href="?action=lists"><p class="subtopic-pill">Lists</p></a>
							<a href="?action=lists-singly"><p class="subtopic-pill inner">Lists - Singly Linked Lists</p></a>
							<a href="?action=lists-doubly"><p class="subtopic-pill inner">Lists - Doubly Linked Lists</p></a>
						</div>
					<!--End of Fundamentals of Data Structures-->

					<!--Searching Techniques-->
                        <button type="button" class="topic-pill accordion">Searching Techniques</button>
						<div class="panel">
							<a href="?action=search-lin"><p class="subtopic-pill">Linear Search</p></a>
							<a href="?action=search-bin"><p class="subtopic-pill">Binary Search</p></a>    
						</div>
					<!--End of Searching Techniques-->

					<!--Sorting Techniques-->
                        <button type="button" class="topic-pill accordion">Sorting Techniques</button>
						<div class="panel">
							<a href="?action=sort-bbo"><p class="subtopic-pill">Bubble Sort</p></a>
							<a href="?action=sort-ins"><p class="subtopic-pill">Insertion Sort</p></a>
							<a href="?action=sort-sel"><p class="subtopic-pill">Selection Sort</p></a>
							<a href="?action=sort-merg"><p class="subtopic-pill">Merge Sort</p></a>
							<a href="?action=sort-quick"><p class="subtopic-pill">Quick Sort</p></a>
						</div>
					<!--End of Sorting Techniques-->

					<!--Graph Data Structure-->
                        <button type="button" class="topic-pill accordion">Graph Data Structure</button>
						<div class="panel">
							<a href="?action=graphs-DFT"><p class="subtopic-pill">Depth First Traversal</p></a>
							<a href="?action=graphs-BFT"><p class="subtopic-pill">Breadth First Traversal</p></a>
						</div>
					<!--End of Graph Data Structure-->

					<!--Tree Data Structure-->
                        <button type="button" class="topic-pill accordion">Tree Data Structure</button>
						<div class="panel">
							<a href="?action=trees"><p class="subtopic-pill">Tree Traversal</p></a>
							<a href="?action=trees-bin"><p class="subtopic-pill">Binary Search Tree</p></a>
							<a href="?action=trees-AVL"><p class="subtopic-pill">AVL Tree</p></a>
							<a href="?action=trees-span"><p class="subtopic-pill">Spanning Tree</p></a>
							<a href="?action=trees-heap"><p class="subtopic-pill">Heap</p></a>
						</div>
						
					<!--End of Tree Data Structure-->
                                       
                </nav>
                <!--End of Topics Navigation-->

                 <!--Content-section-->
                    <div class="content-section">
                        <div class="title"><p>Fibonacci Series</p></div>
                        <hr>
                        <!--Content-nav-->
                        <div class="content-nav">
                            <a href="?action=recursion_stacks"><div class="next"><p>Next »</p></div></a>
                            <a href="?action=recursion-toh"><div class="previous"><p>« Previous</p></div></a>
                            <div class="clr"></div>
                        </div>
                        <hr>
                        <!--End of Content-nav-->
                
                        <!--Content-body-->
                        <div class="content-body">
                            <p>Fibonacci series generates the subsequent number by adding two previous numbers. Fibonacci series starts from two numbers − F<sub>0</sub> & F<sub>1</sub>.</p>
                            <p>Fibonacci series satisfies the following condition:</p>
                            <p class="illustration">F<sub>n</sub> = F<sub>n-1</sub> + F<sub>n-2</sub></p>
                            <p>Hence, a Fibonacci series can look like this:</p>
                            <p class="illustration">F<sub>8</sub> = 0 1 1 2 3 5 8 13 21</p>
                            <p><b>Just like Factorial of a number, Fibonacci series can also be implemented using either an Iterative or Recursive algorithm.</b></p>
                            <div class="sub-title underline">Contrast between Recursive and Iterative Fibonacci Algorithms</div>
                            <br>
<pre>
    <span class="underline">Recursive</span>                                                       <span class="underline">Iterative</span>
    Fibonacci(n){                                                   Fibonacci(n){
        if (n == 0)                                                     a ← 0        //To be the n-2
            return 0                                                    b ← 1        //To be the n-1
        else if (n == 1)                                                fib ← 0
            return 1                                                    return (a, b)
        else                                                            i ← 1
            return (Fibonacci(n-1) + Fibonacci(n-2))                    while (i <= n){
    }                                                                       fib ← a + b
                                                                            a ← b
                                                                            b ← fib
                                                                            return (fib)
                                                                            end while
                                                                        }
                                                                    }
</pre>                      <p class="title">Implementation of the Fibonacci Series</p>
                            <div class="button-area">
                                <a href="fibonacci.php" target="_blank"><button class="illustrate-btn">Try It Out</button></a>
                            </div>
                        </div>
                        <hr>
                        <!--End of Content-body-->
                
                        <!--Content-nav-->
                        <div class="content-nav">
                            <a href="?action=recursion_stacks"><div class="next"><p>Next »</p></div></a>
                            <a href="?action=recursion-toh"><div class="previous"><p>« Previous</p></div></a>
                            <div class="clr"></div>
                        </div>
                        <!--End of Content-nav-->        
                    </div>
                    <div class="clr"></div>
                    <!--End of Content-section-->                            
            </div>
            <!--End of Main Container-->    
            
            <!--Footer-section -->
            <footer class="container-fluid">
                <div class="footer-section">
                    <p class="copyright">© Copyright 2018. All Rights Reserved.</p>
                </div>
            </footer>
            <div class="clr"></div>
            <!--End of Footer-section-->
            
            <!--
                End of Topic - Fibonacci Series
            -->
            
            
            <?php } elseif ($a == "recursion_stacks"){ ?>
            
            <!--
                Topic - Recursion & Stacks
            -->
            
            <!--Top Navigation Bar-->
            <header class="navbar navbar-inverse">
                <div class="container">
                    
                    <!--Site Logo Section-->
                    <div class="navbar-header">
                       <p class="navbar-brand">Tutorest</p>
                    </div>
                    <!--End of Site Logo Section -->
                    
                    <!--Top Bar Menu-->
                    <ul class="nav navbar-nav">
                        <li><a href="?action=home">Home</a></li>
                        <li><a href="about.php">About</a></li>
                        <li><a href="question.php">Ask a Question</a></li>
                        <li><a href="faq.php">FAQ</a></li>
                    </ul>
                    <!--End of Top Bar Menu-->
                    
                </div>
            </header>
            <!--End of Top Navigation Bar-->
            <!--Collapse Button-->
                    <button type="button"class="navbar-toggle" data-toggle="collapse" data-target="#topics">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
            <!--End of Collapse Button-->
            
            <!--The Main Container-->
            <div class="container-fluid main-container">
                <!--Topics Navigation-->
                <nav class="collapse navbar-collapse" id="topics">
                    
                        <p class="main-pill">Data Structures & Algorithms</p>

					<!--Introduction-->
                        <button type="button" class="topic-pill accordion">Introduction </button>
						<div class="panel">
							<a href="?action=intro-defn"><p class="subtopic-pill">Definition, Structure, Strategies, Properties and Classification of Algorithms </p></a>
						</div>
					<!--End of Introdution-->

					<!--Algorithm Ananlysis-->
                        <button type="button" class="topic-pill accordion">Algorithm Analysis</button>
                        <div class="panel">
							<a href="?action=analysis"><p class="subtopic-pill">Analysis of Algorithms </p></a>
							<a href="?action=analysis-emp"><p class="subtopic-pill">Empirical Analysis </p></a>
							<a href="?action=analysis-analytical"><p class="subtopic-pill">Analytical Analysis </p></a>
							<a href="?action=analysis-funcs"><p class="subtopic-pill">Functions in Analysis </p></a>
							<a href="?action=analysis-orderGrowth"><p class="subtopic-pill">Order of Growth </p></a>
							<p class="active-panel">Asymptotic Analysis </p>
						</div>
					<!--End of Algorithm Ananlysis-->
                    

					<!--Recursion-->
                        <div class="topic-pill active-accordion">Recursion</div>
						<div class="panel-active">
							<a href="?action=recursion"><p class="subtopic-pill">Definition, Process, Properties and Characterisics</p></a>
							<a href="?action=recursion_iteration"><p class="subtopic-pill">Recursion Vs Iteration</p></a>
                            <a href="?action=recursion-toh"><p class="subtopic-pill">Tower of Hanoi</p></a>
                            <a href="?action=recursion-fibo"><p class="subtopic-pill">Fibonacci Series</p></a>
                            <p class="active-panel">Recursion & Stacks</p>
							<a href="?action=recursion-analysis"><p class="subtopic-pill">Analysis of Recursion</p></a>
						</div>
					<!--End of Recursion-->

					<!--Induction-->
                        <button type="button" class="topic-pill accordion">Induction</button>
						<div class="panel">
							<a href="?action=inductn-recursion"><p class="subtopic-pill">Relation to Recursion </p></a>
							<a href="?action=inductn-proof"><p class="subtopic-pill">Proof by Induction </p></a>    
							<a href="?action=inductn-appln"><p class="subtopic-pill">Application </p></a>
						</div>
					<!--End of Induction-->

					<!--Fundamentals of Data Structures-->
                        <button type="button" class="topic-pill accordion long-topic">Fundamentals of Data Structures</button>
						<div class="panel">
							<a href="?action=stack"><p class="subtopic-pill">Stack</p></a>
							<a href="?action=stack-array"><p class="subtopic-pill inner">Stack-Arrays</p></a>
							<a href="?action=stack-list"><p class="subtopic-pill inner">Stack-Linked Lists</p></a>							
							<a href="?action=queue"><p class="subtopic-pill">Queue</p></a>
							<a href="?action=queue-array"><p class="subtopic-pill inner">Queue-Arrays</p></a>
							<a href="?action=queue-c-array"><p class="subtopic-pill inner">Queue-Circular Arrays</p></a>
							<a href="?action=queue-list"><p class="subtopic-pill inner">Queue-Linked Lists</p></a>
							<a href="?action=lists"><p class="subtopic-pill">Lists</p></a>
							<a href="?action=lists-singly"><p class="subtopic-pill inner">Lists - Singly Linked Lists</p></a>
							<a href="?action=lists-doubly"><p class="subtopic-pill inner">Lists - Doubly Linked Lists</p></a>
						</div>
					<!--End of Fundamentals of Data Structures-->

					<!--Searching Techniques-->
                        <button type="button" class="topic-pill accordion">Searching Techniques</button>
						<div class="panel">
							<a href="?action=search-lin"><p class="subtopic-pill">Linear Search</p></a>
							<a href="?action=search-bin"><p class="subtopic-pill">Binary Search</p></a>    
						</div>
					<!--End of Searching Techniques-->

					<!--Sorting Techniques-->
                        <button type="button" class="topic-pill accordion">Sorting Techniques</button>
						<div class="panel">
							<a href="?action=sort-bbo"><p class="subtopic-pill">Bubble Sort</p></a>
							<a href="?action=sort-ins"><p class="subtopic-pill">Insertion Sort</p></a>
							<a href="?action=sort-sel"><p class="subtopic-pill">Selection Sort</p></a>
							<a href="?action=sort-merg"><p class="subtopic-pill">Merge Sort</p></a>
							<a href="?action=sort-quick"><p class="subtopic-pill">Quick Sort</p></a>
						</div>
					<!--End of Sorting Techniques-->

					<!--Graph Data Structure-->
                        <button type="button" class="topic-pill accordion">Graph Data Structure</button>
						<div class="panel">
							<a href="?action=graphs-DFT"><p class="subtopic-pill">Depth First Traversal</p></a>
							<a href="?action=graphs-BFT"><p class="subtopic-pill">Breadth First Traversal</p></a>
						</div>
					<!--End of Graph Data Structure-->

					<!--Tree Data Structure-->
                        <button type="button" class="topic-pill accordion">Tree Data Structure</button>
						<div class="panel">
							<a href="?action=trees"><p class="subtopic-pill">Tree Traversal</p></a>
							<a href="?action=trees-bin"><p class="subtopic-pill">Binary Search Tree</p></a>
							<a href="?action=trees-AVL"><p class="subtopic-pill">AVL Tree</p></a>
							<a href="?action=trees-span"><p class="subtopic-pill">Spanning Tree</p></a>
							<a href="?action=trees-heap"><p class="subtopic-pill">Heap</p></a>
						</div>
						
					<!--End of Tree Data Structure-->
                                       
                </nav>
                <!--End of Topics Navigation-->

                 <!--Content-section-->
                    <div class="content-section">
                        <div class="title"><p>Recursion and Stacks</p></div>
                        <hr>
                        <!--Content-nav-->
                        <div class="content-nav">
                            <a href="?action=recursion-analysis"><div class="next"><p>Next »</p></div></a>
                            <a href="?action=recursion-fibo"><div class="previous"><p>« Previous</p></div></a>
                            <div class="clr"></div>
                        </div>
                        <hr>
                        <!--End of Content-nav-->
                
                        <!--Content-body-->
                        <div class="content-body">
                            <p>In most compilers, recursion implemented using stacks. When a method is called, the compiler pushes its arguments and the return address into the stack and then transfers the control back to the method</p>
                            <p>When the method returns, it pops these values off the stack, the arguments disappear and the control returns to the method for finalization.</p>
                            
                            <div class="title">How Recursion works with stacks in depth</div>
                            <hr>
                            <p>Before a function is called, all relevant data is stored in a <i>stackframe.</i></p>
                            <p>This stackframe is then pushed onto the system stack.</p>
                            <p>After the called function is finished, it simply pops the system stack to return to the original state.</p>
                            <p>By using a stack, we can have functions call other functions which can call other functions, etc.</p>   
                            <p>Because the stack is a first-in, last-out data structure, as the stackframes are popped, the data comes out in the correct order.</p>
                        </div>
                        <hr>
                        <!--End of Content-body-->
                
                        <!--Content-nav-->
                        <div class="content-nav">
                            <a href="?action=recursion-analysis"><div class="next"><p>Next »</p></div></a>
                            <a href="?action=recursion-fibo"><div class="previous"><p>« Previous</p></div></a>
                            <div class="clr"></div>
                        </div>
                        <!--End of Content-nav-->        
                    </div>
                    <div class="clr"></div>
                    <!--End of Content-section-->                            
            </div>
            <!--End of Main Container-->    
            
            <!--Footer-section -->
            <footer class="container-fluid">
                <div class="footer-section">
                    <p class="copyright">© Copyright 2018. All Rights Reserved.</p>
                </div>
            </footer>
            <div class="clr"></div>
            <!--End of Footer-section-->
            
            <!--
                End of Topic - Recursion & Stacks
            -->            
            
            
            <?php } elseif ($a == "recursion-analysis"){ ?>
            
            <!--
                Topic - Analysis of Recursion
            -->
            
            <!--Top Navigation Bar-->
            <header class="navbar navbar-inverse">
                <div class="container">
                    
                    <!--Site Logo Section-->
                    <div class="navbar-header">
                       <p class="navbar-brand">Tutorest</p>
                    </div>
                    <!--End of Site Logo Section -->
                    
                    <!--Top Bar Menu-->
                    <ul class="nav navbar-nav">
                        <li><a href="?action=home">Home</a></li>
                        <li><a href="about.php">About</a></li>
                        <li><a href="question.php">Ask a Question</a></li>
                        <li><a href="faq.php">FAQ</a></li>
                    </ul>
                    <!--End of Top Bar Menu-->
                    
                </div>
            </header>
            <!--End of Top Navigation Bar-->
            <!--Collapse Button-->
                    <button type="button"class="navbar-toggle" data-toggle="collapse" data-target="#topics">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
            <!--End of Collapse Button-->
            
            <!--The Main Container-->
            <div class="container-fluid main-container">
                <!--Topics Navigation-->
                <nav class="collapse navbar-collapse" id="topics">
                    
                        <p class="main-pill">Data Structures & Algorithms</p>

					<!--Introduction-->
                        <button type="button" class="topic-pill accordion">Introduction </button>
						<div class="panel">
							<a href="?action=intro-defn"><p class="subtopic-pill">Definition, Structure, Strategies, Properties and Classification of Algorithms </p></a>
						</div>
					<!--End of Introdution-->

					<!--Algorithm Ananlysis-->
                        <button type="button" class="topic-pill accordion">Algorithm Analysis</button>
                        <div class="panel">
							<a href="?action=analysis"><p class="subtopic-pill">Analysis of Algorithms </p></a>
							<a href="?action=analysis-emp"><p class="subtopic-pill">Empirical Analysis </p></a>
							<a href="?action=analysis-analytical"><p class="subtopic-pill">Analytical Analysis </p></a>
							<a href="?action=analysis-funcs"><p class="subtopic-pill">Functions in Analysis </p></a>
							<a href="?action=analysis-orderGrowth"><p class="subtopic-pill">Order of Growth </p></a>
							<p class="active-panel">Asymptotic Analysis </p>
						</div>
					<!--End of Algorithm Ananlysis-->
                    

					<!--Recursion-->
                        <div class="topic-pill active-accordion">Recursion</div>
						<div class="panel-active">
							<a href="?action=recursion"><p class="subtopic-pill">Definition, Process, Properties and Characterisics</p></a>
							<a href="?action=recursion_iteration"><p class="subtopic-pill">Recursion Vs Iteration</p></a>
                            <a href="?action=recursion-toh"><p class="subtopic-pill">Tower of Hanoi</p></a>
                            <a href="?action=recursion-fibo"><p class="subtopic-pill">Fibonacci Series</p></a>
							<a href="?action=recursion_stacks"><p class="subtopic-pill">Recursion & Stacks</p></a>
                            <p class="active-panel">Analysis of Recursion</p>
						</div>
					<!--End of Recursion-->

					<!--Induction-->
                        <button type="button" class="topic-pill accordion">Induction</button>
						<div class="panel">
							<a href="?action=inductn-recursion"><p class="subtopic-pill">Relation to Recursion </p></a>
							<a href="?action=inductn-proof"><p class="subtopic-pill">Proof by Induction </p></a>    
							<a href="?action=inductn-appln"><p class="subtopic-pill">Application </p></a>
						</div>
					<!--End of Induction-->

					<!--Fundamentals of Data Structures-->
                        <button type="button" class="topic-pill accordion long-topic">Fundamentals of Data Structures</button>
						<div class="panel">
							<a href="?action=stack"><p class="subtopic-pill">Stack</p></a>
							<a href="?action=stack-array"><p class="subtopic-pill inner">Stack-Arrays</p></a>
							<a href="?action=stack-list"><p class="subtopic-pill inner">Stack-Linked Lists</p></a>							
							<a href="?action=queue"><p class="subtopic-pill">Queue</p></a>
							<a href="?action=queue-array"><p class="subtopic-pill inner">Queue-Arrays</p></a>
							<a href="?action=queue-c-array"><p class="subtopic-pill inner">Queue-Circular Arrays</p></a>
							<a href="?action=queue-list"><p class="subtopic-pill inner">Queue-Linked Lists</p></a>
							<a href="?action=lists"><p class="subtopic-pill">Lists</p></a>
							<a href="?action=lists-singly"><p class="subtopic-pill inner">Lists - Singly Linked Lists</p></a>
							<a href="?action=lists-doubly"><p class="subtopic-pill inner">Lists - Doubly Linked Lists</p></a>
						</div>
					<!--End of Fundamentals of Data Structures-->

					<!--Searching Techniques-->
                        <button type="button" class="topic-pill accordion">Searching Techniques</button>
						<div class="panel">
							<a href="?action=search-lin"><p class="subtopic-pill">Linear Search</p></a>
							<a href="?action=search-bin"><p class="subtopic-pill">Binary Search</p></a>    
						</div>
					<!--End of Searching Techniques-->

					<!--Sorting Techniques-->
                        <button type="button" class="topic-pill accordion">Sorting Techniques</button>
						<div class="panel">
							<a href="?action=sort-bbo"><p class="subtopic-pill">Bubble Sort</p></a>
							<a href="?action=sort-ins"><p class="subtopic-pill">Insertion Sort</p></a>
							<a href="?action=sort-sel"><p class="subtopic-pill">Selection Sort</p></a>
							<a href="?action=sort-merg"><p class="subtopic-pill">Merge Sort</p></a>
							<a href="?action=sort-quick"><p class="subtopic-pill">Quick Sort</p></a>
						</div>
					<!--End of Sorting Techniques-->

					<!--Graph Data Structure-->
                        <button type="button" class="topic-pill accordion">Graph Data Structure</button>
						<div class="panel">
							<a href="?action=graphs-DFT"><p class="subtopic-pill">Depth First Traversal</p></a>
							<a href="?action=graphs-BFT"><p class="subtopic-pill">Breadth First Traversal</p></a>
						</div>
					<!--End of Graph Data Structure-->

					<!--Tree Data Structure-->
                        <button type="button" class="topic-pill accordion">Tree Data Structure</button>
						<div class="panel">
							<a href="?action=trees"><p class="subtopic-pill">Tree Traversal</p></a>
							<a href="?action=trees-bin"><p class="subtopic-pill">Binary Search Tree</p></a>
							<a href="?action=trees-AVL"><p class="subtopic-pill">AVL Tree</p></a>
							<a href="?action=trees-span"><p class="subtopic-pill">Spanning Tree</p></a>
							<a href="?action=trees-heap"><p class="subtopic-pill">Heap</p></a>
						</div>
						
					<!--End of Tree Data Structure-->
                                       
                </nav>
                <!--End of Topics Navigation-->

                 <!--Content-section-->
                    <div class="content-section">
                        <div class="title"><p>Analysis of Recursion</p></div>
                        <hr>
                        <!--Content-nav-->
                        <div class="content-nav">
                            <a href="?action=inductn-recursion"><div class="next"><p>Next »</p></div></a>
                            <a href="?action=recursion_stacks"><div class="previous"><p>« Previous</p></div></a>
                            <div class="clr"></div>
                        </div>
                        <hr>
                        <!--End of Content-nav-->
                
                        <!--Content-body-->
                        <div class="content-body">
                            <div class="sub-title underline">Time Complexity</div>
                            <p>In the case of iterations, the number of iterations are used to count the time complexity, similarly, for recursion, assuming everything is constant, we try to figure out the number of times a recursive call is being made.</p>
                            <p>Hence the (n) number of times a recursive call is made makes the recursive function Ο(n).</p>
                            
                            <div class="sub-title underline">Space Complexity</div>
                            <p>In the case of iterations, the compiler hardly requires any extra space as it keeps updating the values of variables used in the iterations.</p>
                            <p>But for recursion, the system needs to store activation record each time a recursive call is made. So it is considered that space complexity of recursive function may go higher than that of a function with iteration</p>
                            
                            <div class="title">Memoization</div>
                            <hr>
                            <p>This is a technique used to speed up recursive algorithms is called memoization. A memorized function stores(caches) results of previous calls.</p>
                            <p>When the function is later called with the same parameters, it returns the stored result rather than recalculating it.</p>
                            <p><b>A memoized function has no effects, hence:</b></p>
                            <ul>
                                <li>No screen output.</li>
                                <li>No global variables assignments.</li>
                                <li>No change of object attributes</li>
                            </ul>
                            <p>Memoization is usually implemented with hash tables</p>
                            <p class="sub-title underline">An Illustration of memoization using the Fibonacci Function</p>
                            <img src="images/memoization.png" alt="Memoization Illustration" class="image">                            
                        </div>
                        <hr>
                        <!--End of Content-body-->
                
                        <!--Content-nav-->
                        <div class="content-nav">
                            <a href="?action=inductn-recursion"><div class="next"><p>Next »</p></div></a>
                            <a href="?action=recursion_stacks"><div class="previous"><p>« Previous</p></div></a>
                            <div class="clr"></div>
                        </div>
                        <!--End of Content-nav-->        
                    </div>
                    <div class="clr"></div>
                    <!--End of Content-section-->                            
            </div>
            <!--End of Main Container-->    
            
            <!--Footer-section -->
            <footer class="container-fluid">
                <div class="footer-section">
                    <p class="copyright">© Copyright 2018. All Rights Reserved.</p>
                </div>
            </footer>
            <div class="clr"></div>
            <!--End of Footer-section-->
            
            <!--
                End of Topic - Analysis of Recursion
            -->
            
            
            <?php } ?>
            
            
            
            <script>
                var acc = document.getElementsByClassName("accordion");
                var i;
                
                for (i = 0; i < acc.length; i++) {
                    acc[i].onclick = function(){
                        this.classList.toggle("active");
                        this.nextElementSibling.classList.toggle("show");
                  }
                }
			</script>
            
        </body>
    </html>
