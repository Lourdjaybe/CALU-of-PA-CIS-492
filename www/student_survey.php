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
              to the student page. Please fill in the survey below.<br>
            </td>
          </tr>
          <tr>
            <td style="text-align: center; vertical-align: middle; background-color: white;">First
              Name: <textarea name="first_name" form="survey_submission" autofocus="autofocus"

rows="1"></textarea><br>
              Last Name: <textarea name="last_name" form="survey_submission" rows="1"></textarea><br>
              How did you like your overall experience at CALU?
              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              <textarea name="comments" rows="3" form="survey_submission"></textarea><br>
              Would you recommend CALU why or why
              not?&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              <textarea name="Recommend" rows="3" form="survey_submission"></textarea><br>
              What did you dislike about CALU? What can we work on?&nbsp; <textarea name="Comments" rows="3" form="survey_submission"></textarea> <br>
              <button name="submit" type="submit" formtarget="_self" form="survey_submission">Submit</button><br>
            </td>
          </tr>
        </tbody>
      </table>
    </center>
<?php include('footer.php'); ?>