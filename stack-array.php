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
                        <a href="index.php?action=stack-array"><span class="glyphicon glyphicon-arrow-left"></span></a>
                        <a href="index.php" ><span class="glyphicon glyphicon-home"></span></a>
                    </div>
                    <div class="implement">
                        <p class="implement-name">Array-Stack Implementation</p>
                    </div>
                </div>
            </div>
            <div class="clr"></div>
            
            <div class="container">        
                <div class="row control-panel">
                    <div class="col-sm-5 command-center">
                        <h4>Operations</h4>
                        <hr>
                        <button type="submit" id="push" >push</button>
                        <input type="text" placeholder="Value"  id = 'data' name="user-data"><br>
                        <button type="button" id="peek" >peek ()</button><br>
                        <button type="button" id="pop" >pop ()</button><br>
                        <button type="button"  id="is_empty" >is_empty()</button><br>
                        <button type="button" id="size" >size ()</button><br><br><br>
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
                            <p><li>For the push option, enter a desired value and press the push button</li></p>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-12 code-section">
                    
                    <h4>Code-Section</h4>
<pre>
class Stack {
    constructor(...items){
        this._items = []
    
        if(items.length>0)
            items.forEach(item => this._items.push(item) )
    }
  
    push(...items){
        <i class="comment">push item to the stack</i>
        items.forEach(item => this._items.push(item) )
        return this._items;
    }
  
    pop(count=0){
        <i class="comment">pull out the topmost item (last item) from stack</i>
        if(count===0)
            return this._items.pop()
        else
            return this._items.splice( -count, count )
    }
  
    peek(){
        <i class="comment"> see what's the last item in stack</i>
        return this._items[this._items.length-1]
    }
  
    size(){
        <i class="comment">no. of items in stack</i>
        return this._items.length
    }
  
    isEmpty(){
        <i class="comment"> return whether the stack is empty or not</i>
        return this._items.length==0
    }
  
    toArray(){
        return this._items;
    }
}

let my_stack = new Stack();

<i class="comment">my_stack.push(1,2,3,4,5,6,7,8)</i>

document.getElementById('push').addEventListener('click',function(){
    let item = document.getElementById('data').value;
    console.log(item)
    my_stack.push(item)
    document.getElementById('showIt').innerHTML = my_stack._items;

});

document.getElementById('peek').addEventListener('click',function(){
    document.getElementById('showIt').innerHTML = my_stack.peek();

});

document.getElementById('pop').addEventListener('click',function(){
    let item = document.getElementById('data').value;
    my_stack.pop()
    document.getElementById('showIt').innerHTML = my_stack._items;

});

document.getElementById('size').addEventListener('click',function(){
    document.getElementById('showIt').innerHTML = my_stack.size();

});

document.getElementById('is_empty').addEventListener('click',function(){
    document.getElementById('showIt').innerHTML = my_stack.size()<=0?true:false;

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
            

            <script>
                class Stack {
                    constructor(...items){
                      this._items = []
                  
                      if(items.length>0)
                        items.forEach(item => this._items.push(item) )
                  
                    }
                  
                    push(...items){
                      //push item to the stack
                       items.forEach(item => this._items.push(item) )
                       return this._items;
                  
                    }
                  
                    pop(count=0){
                      //pull out the topmost item (last item) from stack
                      if(count===0)
                        return this._items.pop()
                       else
                         return this._items.splice( -count, count )
                    }
                  
                    peek(){
                      // see what's the last item in stack
                      return this._items[this._items.length-1]
                    }
                  
                    size(){
                      //no. of items in stack
                      

                      return this._items.length
                    }
                  
                    isEmpty(){
                      // return whether the stack is empty or not
                      return this._items.length==0
                    }
                  
                    toArray(){
                      return this._items;
                    }
                  }

                let my_stack = new Stack();


                document.getElementById('push').addEventListener('click',function(){
                 let item = document.getElementById('data').value;
                 console.log(item)
                 my_stack.push(item)
                  document.getElementById('showIt').innerHTML = "["+my_stack._items+"]";

                });
                document.getElementById('peek').addEventListener('click',function(){
                  if (my_stack.size() > 0)
                   document.getElementById('showIt').innerHTML = my_stack.peek();
                  else
                   document.getElementById('showIt').innerHTML = "Stack is empty";
                   
                 });

                 document.getElementById('pop').addEventListener('click',function(){
                  let item = document.getElementById('data').value;
                  my_stack.pop()
                   document.getElementById('showIt').innerHTML = "["+my_stack._items+"]";
                 
                 });
                 document.getElementById('size').addEventListener('click',function(){
                   document.getElementById('showIt').innerHTML = my_stack.size();
                 
                 });
                 document.getElementById('is_empty').addEventListener('click',function(){
                  document.getElementById('showIt').innerHTML = my_stack.size()<=0?true:false;

                });
            </script>
        </body>
    </html>
