  
<html>
<head>
<title>Input Details</title>
</head>
<body>
    firstName: <input id="first" type="text" placeholder="Enter FirstName"><br>
    lastName: <input id="last" type="text" placeholder="Enter LastName"><br>
    <input id='btn' type="submit">
    
    <script type="text/javascript">
    document.getElementById('btn').onclick = function(){
        firstName = document.getElementById('first').value;
        lastName = document.getElementById('last').value;
        
        console.log(firstName +' '+lastName);
    }   
    </script>
</body>
</html>