<html>
  <head>
    <title>Login</title>
    <script>



    </script>
  </head>

  <body>

    <h2>Log In</h2>

    <div>
      <form id="loginForm" method="post" action="login.php">
        <table>
          <tr>
            <td><span>User Id :</span></td>
            <td><input type="text" name="uid"></td>
            <td><span id="uidErr"></span></td>
          </tr>

          <tr>
            <td><span>Password :</span></td>
            <td><input type="password" name="pass"></td>
            <td><span id="passErr"></span></td>
          </tr>

          <tr>
            <td></td>
            <td><input type="submit" name="submit"  id="button"  value="LogIn"></td>
          </tr>

        </table>
      </form>

    </div>

  </body>
</html>
