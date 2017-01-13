<div class = "rateContainer borderPlease">

<table>
  <tr>
    <td><div class = "rateTitle tableTitle">Rate</div></td>
    <td>
      <div class = "rateForm">
        <form>
          <input name = "age" type = "hidden" value = "<?php echo $_SESSION["age"] ?>">
          <select class = "rateSelect" name = "rating">
            <option value = "0">0</option>
            <option value = "1">1</option>
            <option value = "2">2</option>
            <option value = "3">3</option>
            <option value = "4">4</option>
            <option value = "5">5</option>
            <option value = "6">6</option>
            <option value = "7">7</option>
            <option value = "8">8</option>
            <option value = "9">9</option>
            <option value = "10">10</option>
          </select>
          <button class="btn waves-effect waves-light fullWidth" type="submit" name="action">Submit</button>
        </form>
      </div>
    </td>
    <td><div class = "rateSub">0 is the worst. 10 is the best. Once your submit your vote, you cannot change it.</div></td>
  </tr>
</table>


</div>
