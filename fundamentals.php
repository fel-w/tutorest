<?php
    include "func.php";
    include "searching.php";
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
            
            <?php if($a == "stack"){?>
    
            <!--
                Topic - Stack
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
                        <button type="button" class="topic-pill accordion">Induction</button>
						<div class="panel">
							<a href="?action=inductn-recursion"><p class="subtopic-pill">Relation to Recursion </p></a>
							<a href="?action=inductn-proof"><p class="subtopic-pill">Proof by Induction </p></a>    
							<a href="?action=inductn-appln"><p class="subtopic-pill">Application </p></a>
						</div>
					<!--End of Induction-->

					<!--Fundamentals of Data Structures-->
                        <div class="topic-pill active-accordion long-topic">Fundamentals of Data Structures</div>
                        <div class="panel-active">
                            <p class="active-panel">Stack</p>
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
                        <div class="title"><p>Stack</p></div>
                        <hr>
                        <!--Content-nav-->
                        <div class="content-nav">
                            <a href="?action=stack-array"><div class="next"><p>Next »</p></div></a>
                            <a href="?action=inductn-appln"><div class="previous"><p>« Previous</p></div></a>
                            <div class="clr"></div>
                        </div>
                        <hr>
                        <!--End of Content-nav-->
                
                        <!--Content-body-->
                        <div class="content-body">
                            <p>The data object stack is an ordered list with its access, insertions and deletions of its elements restricted by following rules:</p>
							<p>The last element which is inserted will be the first element out such order is called Last In First Out or ‘LIFO’</p>
							<img src="images/stack-LIFO.png" alt="Illustration of LIFO in Stacks" class="image">
							<p>It is an ordered list in which all insertions and deletions are made at one end called the top.</p>
							<p><b>Real-world Examples of a Stack:</b></p>
							<img src="images/stack-example.png" alt="Stack Example" class="image">
                            <br><br>
							<div class="title">The Stack ADT</div>
                            <hr>
							<p><b>The stack operations are given below:</b></p>
							<p><b>Stack()</b> - creates a new empty stack. It requires no parameters.</p>
							<p><b>push(item)</b> -adds a new item to the top of the stack. Uses that very item as a parameter and returns nothing.</p>
							<p><b>pop()</b> - removes the top item from the stack, (modifies the stack). It needs no parameters and returns the item.</p>
							<p><b>peek()</b> - returns the top item from the stack but does not remove it (stack is not modified). It needs no parameters.</p>
							<p><b>is_empty()</b> - tests to see whether the stack is empty. It needs no parameters and returns a Boolean value.</p>
							<p><b>size()</b> - returns the number of items on the stack. It needs no parameters and returns an integer.</p>
							
                            <p class="sub-title underline">Implementation of a Stack</p>
                            <p>A stack can be implemented in at least two ways:</p>
                            <ul>
                                <li>Array</li>
                                <li>Linked list</li>    
                            </ul>
							
                        </div>
                        <hr>
                        <!--End of Content-body-->
                
                        <!--Content-nav-->
                        <div class="content-nav">
                            <a href="?action=stack-array"><div class="next"><p>Next »</p></div></a>
                            <a href="?action=inductn-appln"><div class="previous"><p>« Previous</p></div></a>
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
                End of Topic - Stack
            -->
            
            <?php }elseif($a == "stack-array"){?>
            

            <!--
                Topic - Array Implementation of a Stack
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
                        <button type="button" class="topic-pill accordion">Induction</button>
						<div class="panel">
							<a href="?action=inductn-recursion"><p class="subtopic-pill">Relation to Recursion </p></a>
							<a href="?action=inductn-proof"><p class="subtopic-pill">Proof by Induction </p></a>    
							<a href="?action=inductn-appln"><p class="subtopic-pill">Application </p></a>
						</div>
					<!--End of Induction-->

					<!--Fundamentals of Data Structures-->
                        <div class="topic-pill active-accordion long-topic">Fundamentals of Data Structures</div>
                        <div class="panel-active">
							<a href="?action=stack"><p class="subtopic-pill">Stack</p></a>
                            <p class="active-panel inner">Stack-Arrays</p>
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
                        <div class="title"><p>Stack-Arrays</p></div>
                        <hr>
                        <!--Content-nav-->
                        <div class="content-nav">
                            <a href="?action=stack-list"><div class="next"><p>Next »</p></div></a>
                            <a href="?action=stack"><div class="previous"><p>« Previous</p></div></a>
                            <div class="clr"></div>
                        </div>
                        <hr>
                        <!--End of Content-nav-->
                
                        <!--Content-body-->
                        <div class="content-body">
                            <div class="sub-title underline">Implementing Stacks: Array</div>
                            <p><b>Advantage</b> : Has the best performance</p>
                            <p><b>Disadvantage</b> : Uses a fixed size</p>
                            <p>For efficient array implementation, it is required that the top of the stack be towards the center of the array, not fixed at one end</p>
                            <div class="sub-title">Pushing</div>
                            <p>Consider the bottom of the stack to be at location 0, then an empty stack is represented by top = -1</p> 
                            <p>To push an element, increment top and store the element in stack[top]</p>
                            <div class="sub-title">Poping</div>
                            <p>To (pop) an element, get the element from stack[top] and decrement top</p>
                            <div class="sub-title underline">Push and Pop Algorithms:</div>
						
<pre>
    int Array[10]
    top ← -1 //Empty stack
    
    push(X){
        top ← top + 1
        Array[top] ← X
    }
    
    pop(){
        top ← top - 1
    }
</pre>
						
                            <div class="sub-title underline">Algorithm for checking for empty stack:</div>
<pre>
    is_empty(){
        if (top == -1)
            return true
        else
            return false
    }
</pre>
						
                            <div class="sub-title underline">Checking for top element in a stack:</div>
<pre>
    peek(){
        return Array[top]
    }
</pre>
                            <div class="title">Error checking</div>
                            <hr>
                            <p>There are two stack errors that can occur:</p>
                            <ul>
                                <li><b>Underflow:</b> trying to pop (or peek at) an empty stack.</li>
                                <li><b>Overflow:</b> trying to push onto an already full stack.</li>
                            </ul>
                            <p>A custom  informative exception should preferrably be provided for either of the cases</p>
                            <p>For overflow, you could check for the problem, and copy everything into a new, larger array</p>
                            <p class="title">Array Implementation of a Stack Illustrated</p>
                            <div class="button-area">
                                <a href="stack-array.php" target="_blank"><button class="illustrate-btn">Try It Out</button></a>
                            </div>
                            <hr>
                        </div>
                        <hr>
                        <!--End of Content-body-->
                
                        <!--Content-nav-->
                        <div class="content-nav">
                            <a href="?action=stack-list"><div class="next"><p>Next »</p></div></a>
                            <a href="?action=stack"><div class="previous"><p>« Previous</p></div></a>
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
                End of Topic - Array Implementation of a Stack
            -->             
            
            
            <?php }elseif($a == "stack-list"){?>
            

            <!--
                Topic - Linked Lists Implementation of a Stack
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
                        <button type="button" class="topic-pill accordion">Induction</button>
						<div class="panel">
							<a href="?action=inductn-recursion"><p class="subtopic-pill">Relation to Recursion </p></a>
							<a href="?action=inductn-proof"><p class="subtopic-pill">Proof by Induction </p></a>    
							<a href="?action=inductn-appln"><p class="subtopic-pill">Application </p></a>
						</div>
					<!--End of Induction-->

					<!--Fundamentals of Data Structures-->
                        <div class="topic-pill active-accordion long-topic">Fundamentals of Data Structures</div>
                        <div class="panel-active">
							<a href="?action=stack"><p class="subtopic-pill">Stack</p></a>
							<a href="?action=stack-array"><p class="subtopic-pill inner">Stack-Arrays</p></a>
                            <p class="active-panel inner">Stack-Linked Lists</p>
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
                        <div class="title"><p>Stack-Linked Lists</p></div>
                        <hr>
                        <!--Content-nav-->
                        <div class="content-nav">
                            <a href="?action=queue"><div class="next"><p>Next »</p></div></a>
                            <a href="?action=stack-array"><div class="previous"><p>« Previous</p></div></a>
                            <div class="clr"></div>
                        </div>
                        <hr>
                        <!--End of Content-nav-->
                
                        <!--Content-body-->
                        <div class="content-body">
                            <div  class="sub-title underline">Implementing Stacks: Linked List</div>
                            <p>Since all the action happens at the top of a stack, a singly-linked list (SLL) is a fine way to implement it</p>
                            <p>The header of the list points to the top of the stack</p>
                            <div class="sub-title">Advantages :</div>
                            <p>Always constant time to push</p>
                            <p>It is not limited by size</p>
                            <div class="sub-title">Disadvantages :</div>
                            <p>It is the slowest of all the implementations</p>
                            <p>It can grow to an infinite size, wasting memory resources</p>
                            <div><b>Illustration :</b></div>
                            <img src="images/linked-list.png" alt="Linked List Illustration of a Stack" class="image">
                            <p>When a node is popped from a list, and the node references an object, the reference (the pointer in the node) does not need to be set to null.</p>
                            <p>With a linked-list representation, overflow will not happen (unless you exhaust memory, which is another kind of problem).</p>
                            <p>Underflow can happen, and should be handled the same way as for an array implementation.</p>
                        </div>
                        <hr>
                        <!--End of Content-body-->
                
                        <!--Content-nav-->
                        <div class="content-nav">
                            <a href="?action=queue"><div class="next"><p>Next »</p></div></a>
                            <a href="?action=stack-array"><div class="previous"><p>« Previous</p></div></a>
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
                End of Topic - Linked Lists Implementation of a Stack
            -->
            
            
            <?php }elseif($a == "queue"){?>
            

            <!--
                Topic - Queue
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
                        <button type="button" class="topic-pill accordion">Induction</button>
						<div class="panel">
							<a href="?action=inductn-recursion"><p class="subtopic-pill">Relation to Recursion </p></a>
							<a href="?action=inductn-proof"><p class="subtopic-pill">Proof by Induction </p></a>    
							<a href="?action=inductn-appln"><p class="subtopic-pill">Application </p></a>
						</div>
					<!--End of Induction-->

					<!--Fundamentals of Data Structures-->
                        <div class="topic-pill active-accordion long-topic">Fundamentals of Data Structures</div>
                        <div class="panel-active">
							<a href="?action=stack"><p class="subtopic-pill">Stack</p></a>
							<a href="?action=stack-array"><p class="subtopic-pill inner">Stack-Arrays</p></a>
                            <a href="?action=stack-array"><p class="subtopic-pill inner">Stack-Linked Lists</p></a>
                            <p class="active-panel">Queue</p>
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
                        <div class="title"><p>Queue</p></div>
                        <hr>
                        <!--Content-nav-->
                        <div class="content-nav">
                            <a href="?action=queue-array"><div class="next"><p>Next »</p></div></a>
                            <a href="?action=stack-list"><div class="previous"><p>« Previous</p></div></a>
                            <div class="clr"></div>
                        </div>
                        <hr>
                        <!--End of Content-nav-->
                
                        <!--Content-body-->
                        <div class="content-body">
                            <p>It is an ordered group of homogeneous items of elements having two ends:</p>
                            <p>Elements are added at one end called the rear.</p>
                            <p>Elements are removed from the other end called the front.</p>
                            <p>The element added first is also removed first (FIFO: First In, First Out).</p>
                            <img src="images/queue-car.png" alt="Cars following a queue mechanism" class="image">
                            <br><br>
                            <div class="title">The Queue ADT</div>
                            <hr>
                            <p><b>The queue operations are given below:</b></p>
                            <p><b>Queue()</b> - creates a new empty queue. It requires no parameters.</p>
                            <p><b>enqueue(item)</b> -adds a new item to the rear of the queue. Uses that very item as a parameter and returns nothing.</p>
                            <p><b>dequeue()</b> - removes the front item from the queue and modifies the queue. It needs no parameters and returns the item.</p>
                            <p><b>is_empty()</b> - tests to see whether the queue is empty. It needs no parameters and returns a Boolean value.</p>
                            <p><b>size()</b> - returns the number of items in the queue. It needs no parameters and returns an integer.</p>		
                            
                            <div class="sub-title underline">Implementation of a Queue</div>                                
                            <p>A Queue can be implemented in at least three ways:</p>
                            <ul>
                                <li>Array</li>
                                <li>Circular-Array</li>
                                <li>Linked list</li>    
                            </ul>
                            
                            
                            <p>With a linked-list implementation:you can have underflow while overflow is a global out-of-memory condition;<br>there is no reason to set deleted elements to null</p>                            
                        </div>
                        <hr>
                        <!--End of Content-body-->
                
                        <!--Content-nav-->
                        <div class="content-nav">
                            <a href="?action=queue-array"><div class="next"><p>Next »</p></div></a>
                            <a href="?action=stack-list"><div class="previous"><p>« Previous</p></div></a>
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
                End of Topic - Queue
            -->
            
            
            <?php }elseif($a == "queue-array"){?>
            

            <!--
                Topic - Array Implementation of a Queue
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
                        <button type="button" class="topic-pill accordion">Induction</button>
						<div class="panel">
							<a href="?action=inductn-recursion"><p class="subtopic-pill">Relation to Recursion </p></a>
							<a href="?action=inductn-proof"><p class="subtopic-pill">Proof by Induction </p></a>    
							<a href="?action=inductn-appln"><p class="subtopic-pill">Application </p></a>
						</div>
					<!--End of Induction-->

					<!--Fundamentals of Data Structures-->
                        <div class="topic-pill active-accordion long-topic">Fundamentals of Data Structures</div>
                        <div class="panel-active">
							<a href="?action=stack"><p class="subtopic-pill">Stack</p></a>
							<a href="?action=stack-array"><p class="subtopic-pill inner">Stack-Arrays</p></a>
                            <a href="?action=stack-array"><p class="subtopic-pill inner">Stack-Linked Lists</p></a>
							<a href="?action=queue"><p class="subtopic-pill">Queue</p></a>
                            <p class="active-panel inner">Queue-Arrays</p>
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
                        <div class="title"><p>Queue-Arrays</p></div>
                        <hr>
                        <!--Content-nav-->
                        <div class="content-nav">
                            <a href="?action=queue-c-array"><div class="next"><p>Next »</p></div></a>
                            <a href="?action=queue"><div class="previous"><p>« Previous</p></div></a>
                            <div class="clr"></div>
                        </div>
                        <hr>
                        <!--End of Content-nav-->
                
                        <!--Content-body-->
                        <div class="content-body">
                            <div class="sub-title underline">Implementing Queues: Array</div>
                            <p>The first in, first out (FIFO) structure is accomplished by inserting at one end (the rear) and deleting from the other (the front)</p>
                            <p>With an array implementation, you can have both overflow and underflow, therefore, you should set deleted elements to null</p>
                            <img src="images/FIFO.png" alt="FIFO Illustration" class="image">
                            <p><b>Algorithms:</b></p>

<pre>
    int Array[10]
    front ← -1 
    rear ← -1 
    is_empty(){
        if (front == -1 && rear == -1)
            return true
        else
            return false
    }						
</pre>
                            <div class="sub-title underline">Enqueuing</div>
<pre>
    enqueue(X){
        if (is_full()) //if is !(is_empty)
            return
        else if (is_empty()){
            front ← rear ← 0
            Array[rear] ← X
        }
        else{
            rear ← rear + 1
        }
        Array[rear] ← X
    }
</pre>
	
                            <div class="sub-title underline">Dequeuing</div>
<pre>
    dequeue{
        if is_empty()
            return
        else if front == rear
            front ← rear ← -1 
        else
            front ← front + 1
    }	
</pre>
                        </div>
                        <hr>
                        <!--End of Content-body-->
                
                        <!--Content-nav-->
                        <div class="content-nav">
                            <a href="?action=queue-c-array"><div class="next"><p>Next »</p></div></a>
                            <a href="?action=queue"><div class="previous"><p>« Previous</p></div></a>
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
                End of Topic - Array Implementation of a Queue
            -->
            
            
            <?php }elseif($a == "queue-c-array"){?>
           

            <!--
                Topic - Circular Array Implementation of a Queue
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
                        <button type="button" class="topic-pill accordion">Induction</button>
						<div class="panel">
							<a href="?action=inductn-recursion"><p class="subtopic-pill">Relation to Recursion </p></a>
							<a href="?action=inductn-proof"><p class="subtopic-pill">Proof by Induction </p></a>    
							<a href="?action=inductn-appln"><p class="subtopic-pill">Application </p></a>
						</div>
					<!--End of Induction-->

					<!--Fundamentals of Data Structures-->
                        <div class="topic-pill active-accordion long-topic">Fundamentals of Data Structures</div>
                        <div class="panel-active">
							<a href="?action=stack"><p class="subtopic-pill">Stack</p></a>
							<a href="?action=stack-array"><p class="subtopic-pill inner">Stack-Arrays</p></a>
                            <a href="?action=stack-array"><p class="subtopic-pill inner">Stack-Linked Lists</p></a>
							<a href="?action=queue"><p class="subtopic-pill">Queue</p></a>
							<a href="?action=queue-array"><p class="subtopic-pill inner">Queue-Arrays</p></a>
                            <p class="active-panel inner">Queue-Circular Arrays</p>
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
                        <div class="title"><p>Queue-Circular Arrays</p></div>
                        <hr>
                        <!--Content-nav-->
                        <div class="content-nav">
                            <a href="?action=queue-list"><div class="next"><p>Next »</p></div></a>
                            <a href="?action=queue-array"><div class="previous"><p>« Previous</p></div></a>
                            <div class="clr"></div>
                        </div>
                        <hr>
                        <!--End of Content-nav-->
                
                        <!--Content-body-->
                        <div class="content-body">
                            <div class="sub-title underline">Implementing Queues: Circular Array</div>
                            <p><b>With a linear array	the	queue elements get deleted logically as in this figure below:</b></p>
                            <img src="images/arrayLinear-problem.png" alt="Linear Array Problem" class="image">
                            <p>If we try to insert any more element then it won’t be possible as it is going to give ‘queue full’ message, although there is a space where the elements 10, 20 and 30 were deleted from.</p>
                            <p>The concept of circular queue gives the main advantage of utilizing the space of the queue fully.</p>
                            <p>We can treat the array holding the queue elements as circular (joined at the ends)</p>
                            <img src="images/circular-array.png" alt="Circular Array" class="image">
                            <p><b>Algorithms:</b></p>

<pre>
    int Array[10]
    front ← -1 
    rear ← -1 
    is_empty(){
        if (front == -1 && rear == -1)
            return true
        else
            return false
    }						
</pre>
                            <div class="sub-title underline">Enqueuing</div>
<pre>
    enqueue(X){
        if (rear + 1)%N == front
            return
        else if is_empty(){
            front ← rear ← 0
            Array[rear] ← X
        }
        else{
            rear ← (rear + 1)%N
        }
        Array[rear] ← X
    }
</pre>

                            <div class="sub-title underline">Dequeuing</div>
<pre>
    dequeue{
        if is_empty()
            return
        else if front == rear
            front ← rear ← -1 
        else
            front ← (front + 1)%N
    }	
</pre>
                            <p class="title">Circular Array Implementation of a Queue Illustrated</p>
                            <div class="button-area">
                                <a href="queue-Carray.php" target="_blank"><button class="illustrate-btn">Try It Out</button></a>
                            </div>
                        </div>
                        <hr>
                        <!--End of Content-body-->
                
                        <!--Content-nav-->
                        <div class="content-nav">
                            <a href="?action=queue-list"><div class="next"><p>Next »</p></div></a>
                            <a href="?action=queue-array"><div class="previous"><p>« Previous</p></div></a>
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
                End of Topic - Circular Array Implementation of a Queue
            -->
            
            
            <?php }elseif($a == "queue-list"){?>
            

            <!--
                Topic - Linked Lists Implementation of a Queue
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
                        <button type="button" class="topic-pill accordion">Induction</button>
						<div class="panel">
							<a href="?action=inductn-recursion"><p class="subtopic-pill">Relation to Recursion </p></a>
							<a href="?action=inductn-proof"><p class="subtopic-pill">Proof by Induction </p></a>    
							<a href="?action=inductn-appln"><p class="subtopic-pill">Application </p></a>
						</div>
					<!--End of Induction-->

					<!--Fundamentals of Data Structures-->
                        <div class="topic-pill active-accordion long-topic">Fundamentals of Data Structures</div>
                        <div class="panel-active">
							<a href="?action=stack"><p class="subtopic-pill">Stack</p></a>
							<a href="?action=stack-array"><p class="subtopic-pill inner">Stack-Arrays</p></a>
                            <a href="?action=stack-array"><p class="subtopic-pill inner">Stack-Linked Lists</p></a>
							<a href="?action=queue"><p class="subtopic-pill">Queue</p></a>
							<a href="?action=queue-array"><p class="subtopic-pill inner">Queue-Arrays</p></a>
							<a href="?action=queue-c-array"><p class="subtopic-pill inner">Queue-Circular Arrays</p></a>
                            <p class="active-panel inner">Queue-Linked Lists</p>
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
                        <div class="title"><p>Queue-Linked Lists</p></div>
                        <hr>
                        <!--Content-nav-->
                        <div class="content-nav">
                            <a href="?action=lists"><div class="next"><p>Next »</p></div></a>
                            <a href="?action=queue-c-array"><div class="previous"><p>« Previous</p></div></a>
                            <div class="clr"></div>
                        </div>
                        <hr>
                        <!--End of Content-nav-->
                
                        <!--Content-body-->
                        <div class="content-body">
                            <div class="sub-title underline">Implementing Queues: Linked List</div>
                            <p>In a queue, insertions occur at one end, deletions at the other end</p>
                            
                            <p>Operations at the front of a singly-linked list (SLL) are O(1), but at the other end they are O(n) since you have to find the last element each time</p>
                            
                            <p>Implementing both insertions and deletions in O(1) can be time can be achieved by having a pointer to the first thing in the list and an additional pointer to the last thing in the list</p>
                            
                            <p>Use the first element in an SLL as the front of the queue</p>
                            
                            <p>Use the last element in an SLL as the rear of the queue</p>
                            
                            <p>Keep pointers to both the front and the rear of the SLL</p>
                            
                            <div class="sub-title underline">Enqueuing and Dequeuing a node</div>
                            <p><b>To enqueue (add) a node:</b></p>
                            <p>Find the current last node</p>
                            <p>Change it to point to the new last node</p>
                            <p>Change the last pointer in the list header</p>
                            
                            <img src="images/enqueue-list.png" alt="Enqueuing with a Linked List" class="image">
                            
                            <p><b>To dequeue (remove) a node:</b></p>
                            <p>Copy the pointer from the first node into the header</p>
                            <img src="images/dequeue-list.png" alt="Dequeuing with a Linked List" class="image">
                        </div>
                        <hr>
                        <!--End of Content-body-->
                
                        <!--Content-nav-->
                        <div class="content-nav">
                            <a href="?action=lists"><div class="next"><p>Next »</p></div></a>
                            <a href="?action=queue-c-array"><div class="previous"><p>« Previous</p></div></a>
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
                End of Topic - Linked Lists Implementation of a Queue
            -->
            
            
            <?php }elseif($a == "lists"){?>
            

            <!--
                Topic - Lists
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
                        <button type="button" class="topic-pill accordion">Induction</button>
						<div class="panel">
							<a href="?action=inductn-recursion"><p class="subtopic-pill">Relation to Recursion </p></a>
							<a href="?action=inductn-proof"><p class="subtopic-pill">Proof by Induction </p></a>    
							<a href="?action=inductn-appln"><p class="subtopic-pill">Application </p></a>
						</div>
					<!--End of Induction-->

					<!--Fundamentals of Data Structures-->
                        <div class="topic-pill active-accordion long-topic">Fundamentals of Data Structures</div>
                        <div class="panel-active">
							<a href="?action=stack"><p class="subtopic-pill">Stack</p></a>
							<a href="?action=stack-array"><p class="subtopic-pill inner">Stack-Arrays</p></a>
                            <a href="?action=stack-array"><p class="subtopic-pill inner">Stack-Linked Lists</p></a>
							<a href="?action=queue"><p class="subtopic-pill">Queue</p></a>
							<a href="?action=queue-array"><p class="subtopic-pill inner">Queue-Arrays</p></a>
							<a href="?action=queue-c-array"><p class="subtopic-pill inner">Queue-Circular Arrays</p></a>
                            <a href="?action=queue-list"><p class="subtopic-pill inner">Queue-Linked Lists</p></a>
                            <p class="active-panel">Lists</p>
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
                        <div class="title"><p>Lists</p></div>
                        <hr>
                        <!--Content-nav-->
                        <div class="content-nav">
                            <a href="?action=lists-singly"><div class="next"><p>Next »</p></div></a>
                            <a href="?action=queue-list"><div class="previous"><p>« Previous</p></div></a>
                            <div class="clr"></div>
                        </div>
                        <hr>
                        <!--End of Content-nav-->
                
                        <!--Content-body-->
                        <div class="content-body">
                            <p>A list is a collection of items where each item holds a relative position with respect to the others.</p>
							<p>The list is a  simple powerful collection mechanism that provides  a wide variety of operations.</p>
							<p>Lists can be divided into ordered and unordered list</p>
                            
							<p class="title">The List ADT</p>
                            <hr>
							<p>The structure of an unordered list, as described above, is a collection of items where each item holds a relative position with respect to the others.</p>
							<p>The structure of an ordered list is a collection of items where each item holds a relative position that is based upon some underlying characteristic of the item.</p>
							<p>It could typically be  ascending or descending but it is assumed that list items have a meaningful comparison operation that is already defined.</p>
							<p>Many of the ordered list operations are the same as those of the unordered list except the create new list operation</p>
							
							<p class="sub-title underline">Possible List Operations</p>
							<p><b>List()(for an Unordered list)</b> or <b>OrderedList()(for an Ordered list)</b> - creates a new list that is empty. It needs no parameters and returns an empty list.</p>
							<p><b>add(item)</b> - adds a new item to the list. It needs the item and returns nothing. Assume the item is not already in the list.</p>
							<p><b>remove(item)</b> - removes the item from the list. It needs the item and modifies the list. Assume the item is present in the list.</p>
							<p><b>search(item)</b> - searches for the item in the list. It needs the item and returns a Boolean value.</p>
							<p><b>is_empty()</b> - tests to see whether the list is empty. It needs no parameters and returns a Boolean value.</p>
							<p><b>size()</b> - returns the number of items in the list. It needs no parameters and returns an integer.</p>
							<p><b>append(item)</b> - adds a new item to the end of the list making it the last item in the collection. It needs the item and returns nothing. Assume the item is not already in the list.</p>
							<p><b>index(item)</b> - returns the position of item in the list. It needs the item and returns the index. Assume the item is in the list.</p>
							<p><b>insert(pos,item)</b> - adds a new item to the list at position pos. It needs the item and returns nothing. Assume the item is not already in the list and there are enough existing items to have position pos.</p>
							<p><b>pop()</b> - removes and returns the last item in the list. It needs nothing and returns an item. Assume the list has at least one item.</p>
							<p><b>pop(pos)</b>  - removes and returns the item at position pos. It needs the position and returns the item. Assume the item is in the list.</p>
							<br>
							<div class="sub-title underline">Implementing an Unordered List</div>
							<p>In order to implement an unordered or ordered list, a linked list is applied.</p>
							
							<p>Linked List -consist of data items called nodes. Each data element contains two fields; <b>information field</b> and a <b>link field</b> connected to another data items.</p>
							<img src="images/listFields.png" alt="List Fields" class="image">
							<div style="text-align: center;">
                                <p class="sub-title">From the figure above;</p>
                                <p><b>I</b> -  Information field</p>
                                <p><b>L</b>- Link field</p>
							</div>
							<div class="sub-title underline">Linked list is divided into three:</div>
                            <ul>
                                <li>Singly linked list</li>
                                <li>Doubly linked list</li>
                                <li>Circularly linked list</li>
                            </ul>
                        </div>
                        <hr>
                        <!--End of Content-body-->
                
                        <!--Content-nav-->
                        <div class="content-nav">
                            <a href="?action=lists-singly"><div class="next"><p>Next »</p></div></a>
                            <a href="?action=queue-list"><div class="previous"><p>« Previous</p></div></a>
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
                End of Topic - Lists
            -->
            
            
            <?php }elseif($a == "lists-singly"){?>
            

            <!--
                Topic - Singly Linked Lists
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
                        <button type="button" class="topic-pill accordion">Induction</button>
						<div class="panel">
							<a href="?action=inductn-recursion"><p class="subtopic-pill">Relation to Recursion </p></a>
							<a href="?action=inductn-proof"><p class="subtopic-pill">Proof by Induction </p></a>    
							<a href="?action=inductn-appln"><p class="subtopic-pill">Application </p></a>
						</div>
					<!--End of Induction-->

					<!--Fundamentals of Data Structures-->
                        <div class="topic-pill active-accordion long-topic">Fundamentals of Data Structures</div>
                        <div class="panel-active">
							<a href="?action=stack"><p class="subtopic-pill">Stack</p></a>
							<a href="?action=stack-array"><p class="subtopic-pill inner">Stack-Arrays</p></a>
                            <a href="?action=stack-array"><p class="subtopic-pill inner">Stack-Linked Lists</p></a>
							<a href="?action=queue"><p class="subtopic-pill">Queue</p></a>
							<a href="?action=queue-array"><p class="subtopic-pill inner">Queue-Arrays</p></a>
							<a href="?action=queue-c-array"><p class="subtopic-pill inner">Queue-Circular Arrays</p></a>
                            <a href="?action=queue-list"><p class="subtopic-pill inner">Queue-Linked Lists</p></a>
                            <a href="?action=lists"><p class="subtopic-pill">Lists</p></a>
							<p class="active-panel inner">Lists - Singly Linked Lists</p>
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
                        <div class="title"><p>Lists - Singly Linked Lists</p></div>
                        <hr>
                        <!--Content-nav-->
                        <div class="content-nav">
                            <a href="?action=lists-doubly"><div class="next"><p>Next »</p></div></a>
                            <a href="?action=lists"><div class="previous"><p>« Previous</p></div></a>
                            <div class="clr"></div>
                        </div>
                        <hr>
                        <!--End of Content-nav-->
                
                        <!--Content-body-->
                        <div class="content-body">
                            <p class="sub-title underline">Implementing an Unordered List: Singly Linked Lists</p>
							
							<p>A singly linked list is a concrete data structure consisting of a sequence of nodes</p>
							<img src="images/ssl.png" alt="Singly Linked List Sequence" class="image">
							<p>Each node stores element and link to the next node</p>
							<h5 class="sub-title underline">Recursive Node Class:</h5>
<pre>
    public class Node{
        // Instance variables:
        private Object element;
        private Node next;
        
        //Creates a node with null references to its element and next node. 
        public Node(){
            this(null, null);
        }
        //Creates a node with the given element and next node. 
        public Node(Object e, Node n) {
            element = e;
            next = n;
        }
        // Accessor methods:
        public Object getElement() {
            return element;
        }
        public Node getNext() {
            return next;
        }
        // Modifier methods:
        public void setElement(Object newElem) {
            element = newElem;
        }
        public void setNext(Node newNext) {
            next = newNext;
        }
    }
</pre>					
							<div class="sub-title underline">Inserting at the Head</div>
                            <ul>
                                <li>Allocate a new node</li>
                                <li>Insert new element</li>
                                <li>Make new node point to old head</li>
                                <li>Update head to point to new node in the list</li>        
                            </ul>
							
							
							<div class="sub-title underline">Removing at the head</div>
                            <ul>
                                <li>Update head to point to next node in the list</li>
                                <li>Allow garbage collector to reclaim the former first node</li>
                            </ul>
                            
							<div class="sub-title underline">Inserting at the Tail</div>
							<ul>
                                <li>Allocate a new node</li>
                                <li>Insert new element</li>
                                <li>Have new node point to null</li>
                                <li>Have old last node point to new node</li>
                                <li>Update tail to point to new node</li>
							</ul>
                            
							<div class="sub-title underline">Removing at the Tail</div>
							<p>Removing at the tail of a singly linked list cannot be efficient!</p>
                            <p>There is no constant-timed way to update the tail to point to the previous node</p>
                        </div>
                        <hr>
                        <!--End of Content-body-->
                
                        <!--Content-nav-->
                        <div class="content-nav">
                            <a href="?action=lists-doubly"><div class="next"><p>Next »</p></div></a>
                            <a href="?action=lists"><div class="previous"><p>« Previous</p></div></a>
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
                End of Topic - Singly Linked Lists
            -->
            
            
            <?php }elseif($a == "lists-doubly"){?>
            

            <!--
                Topic - Doubly Linked Lists
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
                        <button type="button" class="topic-pill accordion">Induction</button>
						<div class="panel">
							<a href="?action=inductn-recursion"><p class="subtopic-pill">Relation to Recursion </p></a>
							<a href="?action=inductn-proof"><p class="subtopic-pill">Proof by Induction </p></a>    
							<a href="?action=inductn-appln"><p class="subtopic-pill">Application </p></a>
						</div>
					<!--End of Induction-->

					<!--Fundamentals of Data Structures-->
                        <div class="topic-pill active-accordion long-topic">Fundamentals of Data Structures</div>
                        <div class="panel-active">
							<a href="?action=stack"><p class="subtopic-pill">Stack</p></a>
							<a href="?action=stack-array"><p class="subtopic-pill inner">Stack-Arrays</p></a>
                            <a href="?action=stack-array"><p class="subtopic-pill inner">Stack-Linked Lists</p></a>
							<a href="?action=queue"><p class="subtopic-pill">Queue</p></a>
							<a href="?action=queue-array"><p class="subtopic-pill inner">Queue-Arrays</p></a>
							<a href="?action=queue-c-array"><p class="subtopic-pill inner">Queue-Circular Arrays</p></a>
                            <a href="?action=queue-list"><p class="subtopic-pill inner">Queue-Linked Lists</p></a>
                            <a href="?action=lists"><p class="subtopic-pill">Lists</p></a>
							<a href="?action=lists-singly"><p class="subtopic-pill inner">Lists - Singly Linked Lists</p></a>
                            <p class="active-panel inner">Lists - Doubly Linked Lists</p>
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
                        <div class="title"><p>Lists - Doubly Linked Lists</p></div>
                        <hr>
                        <!--Content-nav-->
                        <div class="content-nav">
                            <a href="?action=search-lin"><div class="next"><p>Next »</p></div></a>
                            <a href="?action=lists-singly"><div class="previous"><p>« Previous</p></div></a>
                            <div class="clr"></div>
                        </div>
                        <hr>
                        <!--End of Content-nav-->
                
                        <!--Content-body-->
                        <div class="content-body">
                            <p class="sub-title underline">Implementing an Unordered List: Doubly Linked Lists</p>
							<img src="images/dll.png" alt="Doubly Linked List" class="image">
							<p>A doubly linked list is often more convenient!</p>
							<p>Nodes store; the element link to the previous node and link to the next node</p>
							
							<h5 class="sub-title underline">Insertion:</h5>
							<img src="images/insertion-dll.png" alt="Illustration of Insertion with DLL" class="image">
							<p><b>Insertion Algorithm:</b></p>
<pre>
    insertAfter(p,e){
        //Create a new node v
        v.setElement(e)
        v.setPrev(p)    //link v to its predecessor
        v.setNext(p.getNext())  //link v to its successor
        (p.getNext()).setPrev(v)    //link p’s old successor to v
        p.setNext(v)    //link p to its new successor, v
        return v //the position for the element e
    }
</pre>
							<h5 class="sub-title underline">Deletion:</h5>
							<img src="images/deletion-dll.png" alt="Illustration of Deletion with DLL" class="image">
							
							<p><b>Deletion Algorithm:</b></p>

<pre>
    remove(p){
        t = p.element   //a temporary variable to hold the return value
        (p.getPrev()).setNext(p.getNext()) //linking out p
        (p.getNext()).setPrev(p.getPrev())
        p.setPrev(null) //invalidating the position p
        p.setNext(null)
        return t
    }
</pre>								
                        </div>
                        <hr>
                        <!--End of Content-body-->
                
                        <!--Content-nav-->
                        <div class="content-nav">
                            <a href="?action=search-lin"><div class="next"><p>Next »</p></div></a>
                            <a href="?action=lists-singly"><div class="previous"><p>« Previous</p></div></a>
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
                End of Topic - Doubly Linked Lists
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
