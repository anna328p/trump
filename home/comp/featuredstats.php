<div class ="item">
<ul id="featuredSlider" class="content-slider">
    <li>
      <table>
        <tr><td><div class = "featuredC" id = "listItem1"><?php getGenderScore("male") ?></td></tr>
        <tr><td><div class = "featuredS">Men</td></tr>
      </table>
    </li>
    <li>
      <table>
        <tr><td><div class = "featuredC" id = "listItem2"><?php getGenderScore("female") ?></td></tr>
        <tr><td><div class = "featuredS">Women</td></tr>
      </table>
    </li>
    <li>
      <table>
        <tr><td><div class = "featuredC" id = "listItem3"><?php getLessThanAgeScore(20) ?></td></tr>
        <tr><td><div class = "featuredS">Younger than 20</td></tr>
      </table>
    </li>
    <?php if (!isset($_SESSION['username'])) { //if no username ?>

      <li>
        <div class = "moreComingSoon">To see more stats surrounding different ethnicities, income brackets, location, ages, political parties and more, create an account and login!</div>
      </li>
      <style>
      .moreComingSoon{
        margin-top: 16px;
        color: white;
        background-color: #778899;
        padding: 10px;
        border-radius: 10px;
        text-align: center;
        width: 35%;
        font-size: 20px;
      }
      </style>



       <?php } else { //if username  ?>
    <li>
      <table>
        <tr><td><div class = "featuredC" id = "listItem4"><?php getMoreThanAgeScore(20) ?></td></tr>
        <tr><td><div class = "featuredS">Older than 20</td></tr>
      </table>
    </li>
    <!--
    <li>
      <table>
        <tr><td><div class = "featuredC" id = "listItem5">5.1</td></tr>
        <tr><td><div class = "featuredS">Floridians</td></tr>
      </table>
    </li>
    <li>
      <table>
        <tr><td><div class = "featuredC" id = "listItem6">2.7</td></tr>
        <tr><td><div class = "featuredS">African American</td></tr>
      </table>
    </li>
    <li>
      <table>
        <tr><td><div class = "featuredC" id = "listItem7">8.1</td></tr>
        <tr><td><div class = "featuredS">Alaskans</td></tr>
      </table>
    </li>
    <li>
      <table>
        <tr><td><div class = "featuredC" id = "listItem8">7.6</td></tr>
        <tr><td><div class = "featuredS">Over 40</td></tr>
      </table>
    </li>
    <li>
      <table>
        <tr><td><div class = "featuredC" id = "listItem9">3.3</td></tr>
        <tr><td><div class = "featuredS">Teenagers</td></tr>
      </table>
    </li>
    <li>
      <table>
        <tr><td><div class = "featuredC" id = "listItem10">1.9</td></tr>
        <tr><td><div class = "featuredS">New Yorkers</td></tr>
      </table>
    </li>
  -->
  <li>
    <div class = "moreComingSoon">Today is our first day, so we don't have too much data. Once we have a large enough sample size, we will be sharing scores from different ethnicties, income brackets, political parties, locations, and more! So make sure to vote and stay tuned for more stats!</div>
  </li>
  <style>
  .moreComingSoon{
    margin-top:25px;
    color: white;
    background-color: #778899;
    padding: 10px;
    border-radius: 10px;
    text-align: center;
    width: 28%;
    font-size: 17px;
  }
  </style>
    <?php } ?>
</ul>
</div>
