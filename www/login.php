<?php include('header.php'); ?>
    <script type="text/javascript" src=""></script>
    <script>
        //insert any javascript here
        </script>
    <p>
    <center>
      <table style="width: 75%;" border="0">
        <tbody>
          <tr>
            <td style="text-align: center; vertical-align: middle; background-color: white;">Welcome
              to the login page. Please fill in the credentials below.<br>
            </td>
          </tr>
          <tr>
            <td style="text-align: center; vertical-align: middle; background-color: white;">Username:<textarea
name="un" form="login_creds" autofocus="autofocus" rows="1"></textarea><br>
              Password:<textarea name="pw" form="login_creds" rows="1"></textarea><br>
              <button name="login" type="submit" formtarget="_self" form="login_creds">Login</button><br>
              If you lost your credentials please email or call the CIS
              department to get it reset.<br>
            </td>
          </tr>
        </tbody>
      </table>
    </center>
    </p>
<?php include('footer.php'); ?>