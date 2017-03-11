<!DOCTYPE html>
<html>
<head>
	<title></title>
	 <script src="//code.jquery.com/jquery-1.11.2.min.js"></script>
    <script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    <script src="https://cdn.socket.io/socket.io-1.3.4.js"></script>
    
</head>
<body>
<div id="messages"></div>
<script>
        var socket = io.connect('http://localhost:8890');
        socket.on('message', function (data) {
        	console.log(data);
            $( "#messages" ).append( "<p>"+data+"</p>" );
          });
    </script>
</body>
</html>