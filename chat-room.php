<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/10.4.1/styles/an-old-hope.min.css" integrity="sha512-pHbw/heFWZcIQnE/c/R0rGx+jmWwAju9YJZ9S3l5H7Ns34x3/gxJ1PQY5JS5HWO89OOKfDvcJZskcYmqoBlcRQ==" crossorigin="anonymous" />
    <link  href="styles.css" rel="stylesheet">
    <title>BRYSON ENTERPRISES</title>
</head>
<body style="background-color:#36393F;">
    <nav>
        <table style=>
          <thead>
          <tr>
            <th><a href="/index.html"><img src="https://i.ibb.co/cQnsxSP/bryson-logo.png" width="100"></a></th>
            <th>&nbsp&nbsp&nbsp&nbsp&nbsp</th>
            <th><a href="/our-projects.html" style = "font-size: x-large;">Our Projects</a></th>
            <th>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</th>
            <th><a href="/contact-us.html" style = "font-size: x-large;">Contact Us</a></th>
            <th>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</th>
            <th><a href="chat-room.php" style = "font-size: x-large;">Chat Room</a></th>
            <th>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</th>
            <th><a href="control-panel.html" style = "font-size: x-large;">Login</a></th>
          </tr>
          </thead>
        </table>
        <br>
        <hr>
        <br>
      </nav>
    <main>
    <form method="post">
    Chat<br>
    <input type="text" name = "username">
    <input type="text" name="message"><br>
    <input type="submit" name="submit">
  </form>

  <div id="list">
    <p><iframe src="chat.json" frameborder="0" height="400"
        width="95%"></iframe></p>
  </div>

  </main>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/10.4.1/highlight.min.js" integrity="sha512-DrpaExP2d7RJqNhXB41Q/zzzQrtb6J0zfnXD5XeVEWE8d9Hj54irCLj6dRS3eNepPja7DvKcV+9PnHC7A/g83A==" crossorigin="anonymous"></script>
    <script>hljs.initHighlightingOnLoad();</script>
</body>
</html>

<?php            
if(isset($_POST['message']) and (isset($_POST['username'])))
{
$data=$_POST['username'] . ": " . $_POST['message'] . "\n";
$fp = fopen('chat.json', 'a');
fwrite($fp, $data);
fclose($fp);
}
?>