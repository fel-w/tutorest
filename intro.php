<?php
    include "func.php";
    include "analysis.php";
    //include "recursion.php";
    //include "induction.php";
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
            <?php if($a == "intro-defn"){ ?>
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
                        <div class="topic-pill active-accordion">Introduction </div>
						<div class="panel-active">
							<p class="active-panel">Definition, Structure, Strategies, Properties and Classification of Algorithms </p>
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
                        <div class="title"><p>Definition, Structure and Properties</p></div>
                        <hr>
                        <!--Content-nav-->
                        <div class="content-nav">
                            <a href="?action=analysis"><div class="next"><p>Next »</p></div></a>
                            <a href="?action=home"><div class="previous"><p>« Previous</p></div></a>
                            <div class="clr"></div>
                        </div>
                        <hr>
                        <!--End of Content-nav-->
                
                        <!--Content-body-->
                        <div class="content-body">
                            <p>
                                One of the core fields that belong to the foundations of
                                computer science deals with the design, analysis and
                                implementation of algorithms for efficient solution of the
                                problems concerned.
                                <ul>
                                    <li>
                                        An Algorithm may be loosely defined as a process or
                                        procedure or method or recipe. It is a specific set of rules
                                        to obtain a definite output from specific inputs provided to
                                        the problem.
                                    </li>
                                    <li>
                                        Data structures is connected with the design and
                                        implementation of efficient algorithms.
                                        Data structures deals with the study of methods, techniques
                                        and tools to organize or structure data
                                    </li>
                                </ul>
                            </p>	
                            
                            <p class="title">Classification of Algorithms</p>
                            <hr>
                            <p>
                                The data structures are broadly classified as linear data structures and non-linear data structures.
                                <br><b>Linear Data structures</b> - are data structures in which data is arranged in a list or in a straight line. They are further classified as sequential and linked representations.<br>
                                
                                <b>Non-linear data structures</b> - are the data structures in which data may be arranged in hierarchical manner.<br>
                            </p>						
                            <img src="images/classification.png" class="image" alt="Illustration of Algorithm Classification">
                                                        
                            <p class="title">Characteristics of an Algorithm</p>
                            <hr>
                            <ul>                                
                                <li><b>Unambiguous</b> − Each of its steps (or phases), and their inputs/outputs should be clear and must lead to only one meaning.</li>
                                <li><b>Input</b> − An algorithm should have 0 or more well-defined inputs.</li>
                                <li><b>Output</b> − An algorithm should have 1 or more well-defined outputs, and should match the desired output.</li>
                                <li><b>Finiteness</b> − Algorithms must terminate after a finite number of steps.</li>
                                <li><b>Feasibility</b> − Should be feasible with the available resources.</li>
                                <li><b>Independent</b> − An algorithm should have step-by-step directions, which should be independent of any programming code.</li>
                            </ul>
                            
                            <p class="title">Algorithmic Strategies</p>
                            <hr>
                            <p>Algorithmic strategies is a general approach by which many problems can be solved algorithmically</p>
                            <p>Algorithmic strategies are also called as algorithmic techniques. Various algorithmic strategies are :-</p>
                            <ul>
                                <li>
                                    <b>Divide and conquer</b> – In this strategy the problem is divided into
                                    smaller sub-problems and these sub-problems are solved to obtain
                                    the solution to main problem.
                                </li>
                                <li>
                                    <b>Dynamic Programming</b>- The problem is divided into smaller
                                    instances and results of smaller reoccurring instances are obtained
                                    to solve the problem.
                                </li>
                                <li>
                                    <b>Greedy technique </b>- From a set of obtained solutions the best
                                    possible solution is chosen each time, to obtain the final solution.
                                </li>
                                <li>
                                    <b>Back tracking </b>- In this method, in order to obtain the solution trial
                                    and error method is followed.
                                </li>
                            </ul>                            
                            <hr>
                        </div>
                        <!--End of Content-body-->
                
                        <!--Content-nav-->
                        <div class="content-nav">
                            <a href="?action=analysis"><div class="next"><p>Next »</p></div></a>
                            <a href="?action=home"><div class="previous"><p>« Previous</p></div></a>
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
