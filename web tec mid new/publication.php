<?php 
    session_start();
    if(!isset($_SESSION['role']))
    {
        header('location: login.php');
    }
?>
<html>
    <body>
        <form>
          <fieldset>
             <legend><h2>Publication_details</h2></legend>
            <input type="text"name="Add_publication" value=""/>
            <button> <b>Add_publication</b> </button>
         </fieldset> 
        </form>
      
    </body>
</html>


