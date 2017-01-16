<div class = "rateContainer borderPlease">
<table>
  <tr>
    <td><div class = "rateTitle tableTitle">Rate</div></td>
    <td>
      <div class = "rateForm">
        <form action = "PHP/sendScore.php" method = "POST">
          <input type = "hidden" name = "article" value = "<?php echo $name?>">
          <input type = "hidden" name = "week" value = "<?php echo $weekNumber ?>">
          <input type = "hidden" name = "user" value = "<?php echo $_SESSION["username"] ?>">
          <input type = "hidden" name = "gender" value = "<?php echo $_SESSION["gender"] ?>">
          <input type = "hidden" name = "age" value = "<?php echo $_SESSION["age"] ?>">
          <input type = "hidden" name = "location" value = "<?php echo $_SESSION["location"] ?>">
          <input type = "hidden" name = "income" value = "<?php echo $_SESSION["income"] ?>">
          <input type = "hidden" name = "party" value = "<?php echo $_SESSION["party"] ?>">
          <input type = "hidden" name = "ethnicity" value = "<?php echo $_SESSION["ethnicity"] ?>">

          <table>
            <tr>
              <td>
                <select name = "score" id="rate">
                  <option value="0">0</option>
                  <option value="1">1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                  <option value="4">4</option>
                  <option value="5">5</option>
                  <option value="6">6</option>
                  <option value="7">7</option>
                  <option value="8">8</option>
                  <option value="9">9</option>
                  <option value="10">10</option>
                </select>
              </td>
              <td><div id = "buttonRateContainer"><button class="button">Submit</button></div></td>
            </tr>
          </table>
        </form>
      </div>
    </td>
  </tr>
</table>


</div>
