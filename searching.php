<?php    
    include "func.php";
    include "sorting.php";
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
                Topic - Linear Search
            -->    
            <?php if($a == "search-lin"){?>
            
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
                        <div class="topic-pill active-accordion">Searching Techniques</div>
                        <div class="panel-active">
                            <p class="active-panel">Linear Search</p>
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
                        <div class="title"><p>Linear Search</p></div>
                        <hr>
                        <!--Content-nav-->
                        <div class="content-nav">
                            <a href="?action=search-bin"><div class="next"><p>Next »</p></div></a>
                            <a href="?action=lists-doubly"><div class="previous"><p>« Previous</p></div></a>
                            <div class="clr"></div>
                        </div>
                        <hr>
                        <!--End of Content-nav-->
                
                        <!--Content-body-->
                        <div class="content-body">
                            
                        </div>
                        <hr>
                        <!--End of Content-body-->
                
                        <!--Content-nav-->
                        <div class="content-nav">
                            <a href="?action=search-bin"><div class="next"><p>Next »</p></div></a>
                            <a href="?action=lists-doubly"><div class="previous"><p>« Previous</p></div></a>
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
                End of Topic - Linear Search
            -->                            
            
            
            <?php }elseif($a == "search-bin"){?>
            <!--
                Topic - Binary Search
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
                        <div class="topic-pill active-accordion">Searching Techniques</div>
                        <div class="panel-active">
							<a href="?action=search-lin"><p class="subtopic-pill">Linear Search</p></a>
                            <p class="active-panel">Binary Search</p>
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
                        <div class="title"><p>Binary Search</p></div>
                        <hr>
                        <!--Content-nav-->
                        <div class="content-nav">
                            <a href="?action=sort-bbo"><div class="next"><p>Next »</p></div></a>
                            <a href="?action=search-lin"><div class="previous"><p>« Previous</p></div></a>
                            <div class="clr"></div>
                        </div>
                        <hr>
                        <!--End of Content-nav-->
                
                        <!--Content-body-->
                        <div class="content-body">
                            
                        </div>
                        <hr>
                        <!--End of Content-body-->
                
                        <!--Content-nav-->
                        <div class="content-nav">
                            <a href="?action=sort-bbo"><div class="next"><p>Next »</p></div></a>
                            <a href="?action=search-lin"><div class="previous"><p>« Previous</p></div></a>
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
                End of Topic - Binary Search
            -->
            <?php }?>
            
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
