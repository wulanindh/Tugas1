<h2>Login Sistem</h2>

<form action="<?php echo URL; ?>/login/proses" method="post">
     <table>
          <tr>
               <td>Username</td>
               <td><input type="email" name="email" placeholder="Email" required></td>
          </tr>
          <tr>
               <td>Password</td>
               <td><input type="password" name="password" placeholder="Password" required></td>
          </tr>
          <tr>
               <td></td>
               <td><input type="submit" name="submit" value="Login"></td>
          </tr>
     </table>
</form>

<?php if (isset($_SESSION['login']) && $_SESSION['login'] == false) { ?>
     <div class="error">
          Login tidak di temukan
     </div>
<?php } ?>
<style>
    body {
        font-family: Arial, sans-serif;
        background-color: #f4f4f4;
        margin: 0;
        padding: 0;
        display: flex;
        align-items: center;
        justify-content: center;
        height: 100vh;
    }

    .login-container {
        background-color: #fff;
        padding: 20px;
        border-radius: 8px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        width: 300px;
        text-align: center;
    }

    h2 {
        color: #333;
    }

    table {
        width: 100%;
    }

    td {
        padding: 8px;
        text-align: left;
    }

    input {
        width: calc(100% - 16px);
        padding: 8px;
        margin-bottom: 15px;
        box-sizing: border-box;
        border: 1px solid #ccc;
        border-radius: 4px;
    }

    input[type="submit"] {
        background-color: #52b788;
        color: #fff;
        cursor: pointer;
    }

    input[type="submit"]:hover {
        background-color: #40916c;
    }

    .error {
        color: #ff0000;
        margin-top: 10px;
    }
</style>
