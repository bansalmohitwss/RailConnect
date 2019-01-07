<!DOCTYPE html>
<html>
<head>
        <title>MyIrctc
        </title>
        <link rel="stylesheet" href="trainfromto.css">
    </head>
<body>
	<div class="head"><section class= "ank">BOOK TRAIN
                     </section> 
       </div>
       <div class="login">
           <h1>Find Here</h1>
           <form method ="POST" action="trainsinfo.php">
           <p>FROM</p>
           <input list="u" name="a" >
               <datalist id="u">
                <option value="DELHI"></option>
                <option value="JAIPUR"></option>
                <option value="ALLAHABAD"></option>
              </datalist>
               
               <p>To</p>
               <input list="s" name="b" >
               <datalist id="s">
                <option value="DELHI"></option>
                <option value="PITHORAGARH"></option>
                <option value="DEHRADUN"></option>
                <option value="ALLAHABAD"></option>
              </datalist>
               <p>Date<p>
               <input type="date" name="c" ><br>
                
               <input type="submit" name="d" value="Find">
            
           </form>
        </div>
</body>
</html>
