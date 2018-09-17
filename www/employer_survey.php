<?php include('header.php'); ?>
    <script type="text/javascript" src=""></script>
    <script>
        //insert any javascript here
        </script>
    <center>
      <table style="width: 75%; height: 247px;" border="0">
        <tbody>
          <tr>
            <td style="text-align: center; vertical-align: middle; background-color: white;">Welcome
              to the employer page. Please fill in the survey below.<br>
            </td>
          </tr>
          <tr>
            <td style="text-align: center; vertical-align: middle; background-color: white;">Company
              Name: &nbsp; &nbsp; &nbsp; &nbsp;
              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <textarea name="company"

form="employer_survey" autofocus="autofocus" rows="1"></textarea><br>
              First Name of employee:&nbsp;&nbsp;&nbsp;&nbsp; <textarea name="first_name"

rows="1" form="employer_survey"></textarea><br>
              Last Name of employee: &nbsp; &nbsp; <textarea name="last_name" form="employer_survey"

rows="1" autofocus="autofocus"></textarea><br>
              &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              Please describe if our alumnis is meeting your company's needs and
              expectations.&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
              &nbsp; &nbsp; &nbsp;
              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <textarea

name="performance" rows="3" form="employer_survey"></textarea><br>
              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              Did our alumnis come prepared for the job?&nbsp; &nbsp; &nbsp;
              &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
              &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; <textarea

name="ready_to_start" rows="3" form="employer_survey"></textarea><br>
              Are there specific knowledge sets that we would look into for
              future classes to better prepare our students for the working
              world?&nbsp; <textarea name="recommendations" rows="3" form="employer_survey"></textarea>
              <br>
              <button name="submit" type="submit" formtarget="_self" form="employer_survey">Submit</button><br>
            </td>
          </tr>
        </tbody>
      </table>
    </center>
<?php include('footer.php'); ?>