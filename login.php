<html>
  <head>
  	<title>Invent Creative Design Login</title>
  	<meta http-equiv="content-type" content="text/html; charset=UTF-8" />
  	<script type="text/javascript" src="/scripts/jquery-1.9.1.min.js"></script>
  	<link rel="stylesheet" type="text/css" href="styles/styles.css">
  </head>
  <body class="invent-login-page">
    <div class="login-container">
    <h2> Login</h2>
    <form name="invent-login" method="post" action="invent_authenticate.php">
        <div class="username">
         <label> Username </label>
          <input type="textbox" name="username" value=""/> 
        </div>
        <div class="password">
         <label> Password </label>
          <input type="password" name="password" value=""/> 
        </div>
        <div class="submit">
          <input id="submit" type="submit" name="submit" value="Login"/> 
        </div>
    </form>
    </div>
  </body>
</html>