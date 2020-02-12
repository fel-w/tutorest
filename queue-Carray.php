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
                        <a href="index.php?action=queue-c-array"><span class="glyphicon glyphicon-arrow-left"></span></a>
                        <a href="index.php" ><span class="glyphicon glyphicon-home"></span></a>
                    </div>
        <body>
            <div class="container-fluid top-bar">
                <div class="container">
                    
                    <div class="implement">
                        <p class="implement-name">Array-Queue Implementation</p>
                    </div>
                </div>
            </div>
            <div class="clr"></div>
            
            <div class="container">        
                <div class="row control-panel">
                    <div class="col-sm-5 command-center">
                        <h4>Operations</h4>
                        <hr>
						
						
						<button type="submit" id="push">enqueue ()</button>
						<input type="text"  id = "user-data" maxlength="3" name="user-data"><br>
						<button type="button" id="pop">dequeue ()</button><br>
						<button type="button" id="is_empty">is_empty()</button><br>
						<button type="button" id="length">size ()</button><br><br><br>
                        <!--<button type="button" onclick="reset()" id="reset" >reset</button>-->
                    </div>
                    
                    <div class="col-sm-5 display">
                        <h4 class="title">Display</h4>
                        <hr>
                        <div id="showIt"></div>
                    </div>
                    <div class="col-sm-1 instructions alert alert-success">
                        <h4>Instructions</h4>
                        <ul>
                            <p><li>Press any of the buttons to perform the desired operation</li></p>
                            <p><li>For the enqueue option, enter a desired value and press the push button</li></p>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-12 code-section">
                    
                    <h4>Code-Section</h4>
<pre>
class Queue {
    constructor(size){
        this.queue = new Array(size)
    }
    <i class="comment"> add an item to array</i>
    enqueue(item){
        <i class="comment">this always adds an item at the front of the array</i>
        <i class="comment">in the sense that all new items will go infront of</i>
        <i class="comment"> this one and it will become the last</i>
        this.queue.unshift(item);

    }
    <i class="comment"> remove an item from the array</i>
    dequeue(){
        return this.queue.pop();
    }
    <i class="comment"> retuns true if the array is empty false otherwise</i>
    is_empty(){
        return this.queue.length==0?true:false;
    }
}
<i class="comment"> create a queue</i>

let size = document.getElementById('size').value;
let queue1 = new Queue(size);
var canvas = document.getElementById("myCanvas");
var ctx = canvas.getContext("2d");
ctx.font = "30px Arial";

document.getElementById('stack').addEventListener("click", function(){
    <i class="comment"> what shouid this do</i>
    <i class="comment"> do nothing ... go ... rest</i>
});

document.getElementById('push').addEventListener("click", function(){
    let item = document.getElementById('user-data').value;
    console.log(item)
    queue1.enqueue(item)
    <i class="comment">document.getElementById('showIt').innerHTML = `::${queue1.queue}&rarr;`;</i>

    <i class="comment"> trying canvas staff</i> 
    ctx.clearRect(0,0,202,102);
    ctx.strokeText(queue1.queue,10,50);
});

<i class="comment">pop an item off the queue</i>
document.getElementById('pop').addEventListener("click", function(){
    let item = document.getElementById('user-data').value;
    console.log(item)
    queue1.dequeue(item)
    <i class="comment">document.getElementById('showIt').innerHTML = `::${queue1.queue} &rarr;`</i>
    ctx.clearRect(0,0,202,102);
    ctx.strokeText(queue1.queue,10,50);
});

document.getElementById('is_empty').addEventListener("click", function(){
    let item = document.getElementById('user-data').value;
    <i class="comment">document.getElementById('showIt').innerHTML = queue1.is_empty();</i>
    ctx.clearRect(0,0,202,102);
    ctx.strokeText(queue1.is_empty(),10,50);
});

document.getElementById('length').addEventListener("click", function(){
    let item = document.getElementById('user-data').value;
    <i class="comment">document.getElementById('showIt').innerHTML = queue1.queue.length;</i>
    ctx.clearRect(0,0,202,102);
    ctx.strokeText(queue1.queue.length,10,50);
});
</pre>
                </div>
            </div>
            
            
            <footer class="container-fluid">
                <div class="footer-section">
                    <p class="copyright">© Copyright 2018. All Rights Reserved.</p>
                </div>
            </footer>
            <div class="clr"></div>
            

			<script type="text/javascript">
                class Queue {
                    constructor(){
                        this.queue = new Array()

                    }
                    // add an item to array
                    enqueue(item){
                        //this always adds an item at the front of the array
                            //in the sense that all new items will go infront of
                            // this one and it will become the last
                        this.queue.unshift(item);

                    }
                    // remove an item from the array
                    dequeue(){
                        return this.queue.pop();
                    }
                    // retuns true if the array is empty false otherwise
                    is_empty(){
                        return this.queue.length==0?true:false;
                    }
                }
                // create aqueue

                let queue1 = new Queue();
                //var canvas = document.getElementById("myCanvas");
                //var ctx = canvas.getContext("2d");
                //ctx.font = "30px Arial";
                //document.getElementById('queue').addEventListener("click", function(){
                // what shouid this do
                // do nothing ... go ... rest
                //});
                document.getElementById('push').addEventListener("click", function(){
                    let item = document.getElementById('user-data').value;
                    console.log(item)
                    queue1.enqueue(item)
                    document.getElementById('showIt').innerHTML = `[${queue1.queue}]`;
                // trying canvas staff 
                //ctx.clearRect(0,0,202,102);
                //ctx.strokeText(queue1.queue,10,50);
                });
                //pop an item off the queue
                document.getElementById('pop').addEventListener("click", function(){
                    let item = document.getElementById('user-data').value;
                    console.log(item)
                    queue1.dequeue(item)
                    document.getElementById('showIt').innerHTML = `[${queue1.queue}] `
                    //ctx.clearRect(0,0,202,102);
                    //ctx.strokeText(queue1.queue,10,50);
                });
                document.getElementById('is_empty').addEventListener("click", function(){
                    let item = document.getElementById('user-data').value;
                    document.getElementById('showIt').innerHTML = queue1.is_empty();
                    //ctx.clearRect(0,0,202,102);
                    //ctx.strokeText(queue1.is_empty(),10,50);
                });
                document.getElementById('length').addEventListener("click", function(){
                    let item = document.getElementById('user-data').value;
                    document.getElementById('showIt').innerHTML = queue1.queue.length;
                    //ctx.clearRect(0,0,202,102);
                    //   ctx.strokeText(queue1.queue.length,10,50);
                });
                /*
                $('#stack').click(
                    ()=>{
                       let size = $('#size').value;
                       let queue1 = new Queue(size)
                        console.log(queue1.queue.length);
                    }
                );
                */

            </script>
            
        </body>
    </html>
