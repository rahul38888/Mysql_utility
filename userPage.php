<html>
  <head>
    <title>User</title>
    <script>
      function populateList(){
        if (window.XMLHttpRequest)
        {// code for IE7+, Firefox, Chrome, Opera, Safari
          xmlhttp=new XMLHttpRequest();
        }
        else
        {// code for IE6, IE5
          xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
        }
        
        xmlhttp.onreadystatechange=function()
        {
        if (xmlhttp.readyState==4 && xmlhttp.status==200)
          {
            
          }
        }
        xmlhttp.open("GET","ajax_info.txt",true);
        xmlhttp.send();
      }
    </script>
  </head>
  <body>
    <h2>Wellcome User</h2>
    
    <select id="databaseList" onchange="populateList();">
      <option value="">-select database-</option>
    </select>
  </body>
</html>
