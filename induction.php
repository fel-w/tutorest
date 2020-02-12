<?php    
    include "func.php";
    include "fundamentals.php";
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
                Topic - Relation to Recursion
            -->
            
            <?php if($a == "inductn-recursion"){?>
            
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
                        <button type="button" class="topic-pill accordion">Recursion</button>
						<div class="panel">
							<a href="?action=recursion"><p class="subtopic-pill">Definition, Process, Properties and Characterisics </p></a>
							<a href="?action=recursion_iteration"><p class="subtopic-pill">Recursion Vs Iteration</p></a>    
							<a href="?action=recursion-toh"><p class="subtopic-pill">Tower of Hanoi </p></a>    
							<a href="?action=recursion-fibo"><p class="subtopic-pill">Fibonacci Series </p></a>    
							<a href="?action=recursion_stacks"><p class="subtopic-pill">Recursion & Stacks </p></a>    
							<a href="?action=recursion-analysis"><p class="subtopic-pill">Analysis of Recursion</p></a>
						</div>
					<!--End of Recursion-->

					<!--Induction-->
                        <div class="topic-pill active-accordion">Induction</div>
                        <div class="panel-active">
                            <p class="active-panel">Relation to Recursion</p>
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
                        <div class="title"><p>Relation to Recursion</p></div>
                        <hr>
                        <!--Content-nav-->
                        <div class="content-nav">
                            <a href="?action=inductn-proof"><div class="next"><p>Next »</p></div></a>
                            <a href="?action=recursion-analysis"><div class="previous"><p>« Previous</p></div></a>
                            <div class="clr"></div>
                        </div>
                        <hr>
                        <!--End of Content-nav-->
                
                        <!--Content-body-->
                        <div class="content-body">
                            <p><b>Induction</b> is a mathematical strategy for proving statements about integers (especially sets that can be ordered in general ways.)</p>
                            <p><b>Recall from Recursion:</b></p>
<pre>
    Factorial(n){                                           
    if (n == 0)                      //Base case
        return 1                                            
    else                                                    
        return (n * Factorial(n-1))  //Recursive case
    end if                                                  
    } 
</pre>
                            <p><b>Click <a href="?action=recursion" style="text-decoration:underline;">Here</a> to revisit Recursion</b></p>
                            <p>Recursion and Induction are closely related since similar to recursion, we are going to observe that there is a <b>Base Case</b> and an <b>Inductive Case</b> for the case of Induction</p>
                        </div>
                        <hr>
                        <!--End of Content-body-->
                
                        <!--Content-nav-->
                        <div class="content-nav">
                            <a href="?action=inductn-proof"><div class="next"><p>Next »</p></div></a>
                            <a href="?action=recursion-analysis"><div class="previous"><p>« Previous</p></div></a>
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
                End of Topic - Relation to Recursion
            -->
            
            
            <?php } elseif ($a == "inductn-proof"){ ?>
            
            <!--
                Topic - Proof by Induction
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
                        <button type="button" class="topic-pill accordion">Recursion</button>
						<div class="panel">
							<a href="?action=recursion"><p class="subtopic-pill">Definition, Process, Properties and Characterisics </p></a>
							<a href="?action=recursion_iteration"><p class="subtopic-pill">Recursion Vs Iteration</p></a>    
							<a href="?action=recursion-toh"><p class="subtopic-pill">Tower of Hanoi </p></a>    
							<a href="?action=recursion-fibo"><p class="subtopic-pill">Fibonacci Series </p></a>    
							<a href="?action=recursion_stacks"><p class="subtopic-pill">Recursion & Stacks </p></a>    
							<a href="?action=recursion-analysis"><p class="subtopic-pill">Analysis of Recursion</p></a>
						</div>
					<!--End of Recursion-->

					<!--Induction-->
                        <div class="topic-pill active-accordion">Induction</div>
                        <div class="panel-active">
							<a href="?action=inductn-recursion"><p class="subtopic-pill">Relation to Recursion</p></a>
                            <p class="active-panel">Proof by Induction</p>
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
                        <div class="title"><p>Writing a Proof by Induction</p></div>
                        <hr>
                        <!--Content-nav-->
                        <div class="content-nav">
                            <a href="?action=inductn-appln"><div class="next"><p>Next »</p></div></a>
                            <a href="?action=inductn-recursion"><div class="previous"><p>« Previous</p></div></a>
                            <div class="clr"></div>
                        </div>
                        <hr>
                        <!--End of Content-nav-->
                
                        <!--Content-body-->
                        <div class="content-body">
                            <p>Writing a proof by induction can be done in these four steps:</p>
                            <div class="sub-title">1. <span class="underline">State the hypothesis very clearly.</span></div>
                            <p><b>P(n) is true for all integers n >=b (for integers n to b inclusive)</b></p>
<pre class="illustration">
<b>Example:</b>
  P(n) = 3n(n + 1) is true: for integers  { 6 + 12 + 18 + ... + 6n }

<b>This is the same as:</b>
  6 + 12 + 18 + ... + 6n = 3n(n + 1) where 6n is b from the definition
</pre>
                        <br>
                        <div class="sub-title">2. <span class="underline">Identify (and prove) the base case.</span></div>
                        <p><b>P(b) holds because of...(the condition) where b is the base case.</b></p>

<pre class="illustration">
<b>Using the Example:</b>
  6n holds because 3n(n + 1)

<b>Proof the base case using 1</b> (Proofing step is not as significant)
  6 * 1 = 3 * 1(1 + 1)
  L.H.S = R.H.S, Hence true.
</pre>
                        <br>
                        <div class="sub-title">3. <span class="underline">Inductive hypothesis.</span></div>
                        <p><b>Assume P(k), where k is becomes the new limit similar to n, for which the theorem is assumed to be true:</b></p>
<pre class="illustration">
<b>Using the Example:</b>
  6k = 3k(k + 1) ______________________ (i) 
</pre>
                        <br>
                        <div class="sub-title">4. <span class="underline">Inductive step.</span></div>
                        <p><b>Assuming the inductive hypothesis P(k), prove that P(k+1) holds:</b></p>
<pre class="illustration">
<b>Using the Example:</b>
  6k + 6(k + 1) = 3(k + 1)(k +1 + 1)

from eqn (i) 6k = 3k(k + 1)
  3k(k + 1) + 6(k + 1) = 3(k + 1)(k + 2)
  (3k + 6)(k + 1) = 3(k + 1)(k + 2)

Cancel (k + 1) on both sides
  (3k + 6) = 3(k + 2)
  
<b>Hence L.H.S = R.H.S and therefore, by induction, we have shown that P(k) holds for all k >= b</b>  
</pre>
                        </div>
                        <hr>
                        <!--End of Content-body-->
                
                        <!--Content-nav-->
                        <div class="content-nav">
                            <a href="?action=inductn-appln"><div class="next"><p>Next »</p></div></a>
                            <a href="?action=inductn-recursion"><div class="previous"><p>« Previous</p></div></a>
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
                End of Topic - Proof by Induction
            -->
            
            
            <?php } elseif ($a == "inductn-appln"){ ?>
            
            <!--
                Topic - Application
            -->
            
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
                        <button type="button" class="topic-pill accordion">Recursion</button>
						<div class="panel">
							<a href="?action=recursion"><p class="subtopic-pill">Definition, Process, Properties and Characterisics </p></a>
							<a href="?action=recursion_iteration"><p class="subtopic-pill">Recursion Vs Iteration</p></a>    
							<a href="?action=recursion-toh"><p class="subtopic-pill">Tower of Hanoi </p></a>    
							<a href="?action=recursion-fibo"><p class="subtopic-pill">Fibonacci Series </p></a>    
							<a href="?action=recursion_stacks"><p class="subtopic-pill">Recursion & Stacks </p></a>    
							<a href="?action=recursion-analysis"><p class="subtopic-pill">Analysis of Recursion</p></a>
						</div>
					<!--End of Recursion-->

					<!--Induction-->
                        <div class="topic-pill active-accordion">Induction</div>
                        <div class="panel-active">
							<a href="?action=inductn-recursion"><p class="subtopic-pill">Relation to Recursion</p></a>
							<a href="?action=inductn-proof"><p class="subtopic-pill">Proof by Induction</p></a>
                            <p class="active-panel">Application</p>
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
                        <div class="title"><p>Applications of Induction</p></div>
                        <hr>
                        <!--Content-nav-->
                        <div class="content-nav">
                            <a href="?action=stack"><div class="next"><p>Next »</p></div></a>
                            <a href="?action=inductn-proof"><div class="previous"><p>« Previous</p></div></a>
                            <div class="clr"></div>
                        </div>
                        <hr>
                        <!--End of Content-nav-->
                
                        <!--Content-body-->
                        <div class="content-body">
                            <ul>
                                <li>It is used to prove results about the complexity of algorithms.</li>
                                <li>The correctness of certain types of computer programs.</li>
                                <li>Theorems about graphs and trees, as well as a wide range of identies and inequalities.</li>
                            </ul>
                        </div>
                        <hr>
                        <!--End of Content-body-->
                
                        <!--Content-nav-->
                        <div class="content-nav">
                            <a href="?action=stack"><div class="next"><p>Next »</p></div></a>
                            <a href="?action=inductn-proof"><div class="previous"><p>« Previous</p></div></a>
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
                End of Topic - Application
            -->
            
            <?php }  ?>
            
            
            
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
