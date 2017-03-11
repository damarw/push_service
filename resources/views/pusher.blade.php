<!DOCTYPE html>
<head>
  <title>Pusher Test</title>
  <script src="https://js.pusher.com/4.0/pusher.min.js"></script>
  <script
  src="https://code.jquery.com/jquery-3.1.1.slim.min.js"
  integrity="sha256-/SIrNqv8h6QGKDuNoLGA4iret+kyesCkHGzVUUV0shc="
  crossorigin="anonymous"></script>


  <script>

    // Enable pusher logging - don't include this in production
    Pusher.logToConsole = true;

    var pusher = new Pusher('591c3b884ec2c223161c', {
      encrypted: true
    });

    var channel = pusher.subscribe('channel');
    channel.bind('App\\Events\\CobaPusher', function(data) {
      $("p").append("<b>"+data.message+"</b><br>");
    });
  </script>
</head> 
<body>
  <p></p>
</body>