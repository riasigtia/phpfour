<!DOCTYPE html>
<html>
<head>
    <title>PHP</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div  class="main">
        <div>
        <form action="index.php" method="post">
        <input type="text" id="text">
        <button type="button" id="order">ORDER</button>
        </form>   
</div>
<table class="table">    
              <tr>
                <td>Dish Name:   </td>
                <td class="name"></td>
              </tr>
              <tr>
                <td>Description:  </td>
                <td class="des"></td>
              </tr>
              <tr>
                <td>Small Price: </td>
                <td class="small"></td>
              </tr>
              <tr>
                <td>Large Price: </td>
                <td class="large"></td>
              </tr>
 
  </table> 
    <script src="jquery-3.5.1.min.js"></script>
    <script src="script.js"></script>
</body>
</html>