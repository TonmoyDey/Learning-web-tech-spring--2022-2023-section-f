<?php 
    session_start();
    if(!isset($_SESSION['role']))
    {
        header('location: login.php');
    }
?>
<html>
    <form>
    <table border="1" heigth="500" width="600" >

           <tr>
                <td> <h3>Reservation of books</h3> </td>
            </tr>
                
            <tr>
                 <td>item 1  </td> 
                 <td>adventure </td> 

            </tr>

           
            <tr>
                 <td>Item 2</td> 
                 <td>Horror</td>
            </tr>


            <tr>
                <td>Item3</td>
                <td> Romantic</td>
            </tr>

    </table>
   
</form>
</html>

