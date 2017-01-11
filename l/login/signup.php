<?php
session_start();
if (isset($_SESSION['username'])) {
    session_start();
    session_destroy();  } ?>

<?php
 $material='block';
 require '../../resource/head.php' ?>

<body>
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="../css/signup.css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Sign Up Form</title>
    </head>
    <body>

      <form class="form-signup" id="usersignup" name="usersignup" method="post" action = "createuser.php">

        <h1 id = "signUpNow">Sign Up</h1>

        <fieldset>
          <legend><span class="number">1</span> The Basics</legend>

          <label for="mail">Email:</label>
          <input name="email" id="email" type="text" class="form-control">

          <label for="password">Password:</label>
          <input name="password1" id="password1" type="password" class="form-control">

          <label for="password2">Repeat Password:</label>
          <input name="password2" id="password2" type="password" class="form-control">

          <label for "hidden1">Gender:</label>
          <input type = "hidden" name ="hidden1">

          <select name = "gender" id = "gender" required>
            <option value = 'male'>Male</option>
            <option value = 'female'>Female</option>
            <option value = 'other'>Other</option>
          </select>

          <label for "hidden2">Age:</label>
          <input type = "hidden" name ="hidden2">

          <select name = "age" id = "age" required>
            <?php foreach (range(5,100) as $number)
              echo "<option value='$number'>$number</option>"
            ?>
          </select>

        </fieldset>

        <fieldset>
          <legend><span class="number">2</span> More details</legend>
          <p id = "learnMore"><a href = "/pages/askdata">Learn more about why we collect this data</a></p>
          <label for "hidden3">State of Residence:</label>
          <input type = "hidden" name ="hidden3">

          <select name = "state" id = "state" required>
            <option value="AL">Alabama</option>
          	<option value="AK">Alaska</option>
          	<option value="AZ">Arizona</option>
          	<option value="AR">Arkansas</option>
          	<option value="CA">California</option>
          	<option value="CO">Colorado</option>
          	<option value="CT">Connecticut</option>
          	<option value="DE">Delaware</option>
          	<option value="DC">District Of Columbia</option>
          	<option value="FL">Florida</option>
          	<option value="GA">Georgia</option>
          	<option value="HI">Hawaii</option>
          	<option value="ID">Idaho</option>
          	<option value="IL">Illinois</option>
          	<option value="IN">Indiana</option>
          	<option value="IA">Iowa</option>
          	<option value="KS">Kansas</option>
          	<option value="KY">Kentucky</option>
          	<option value="LA">Louisiana</option>
          	<option value="ME">Maine</option>
          	<option value="MD">Maryland</option>
          	<option value="MA">Massachusetts</option>
          	<option value="MI">Michigan</option>
          	<option value="MN">Minnesota</option>
          	<option value="MS">Mississippi</option>
          	<option value="MO">Missouri</option>
          	<option value="MT">Montana</option>
          	<option value="NE">Nebraska</option>
          	<option value="NV">Nevada</option>
          	<option value="NH">New Hampshire</option>
          	<option value="NJ">New Jersey</option>
          	<option value="NM">New Mexico</option>
          	<option value="NY">New York</option>
          	<option value="NC">North Carolina</option>
          	<option value="ND">North Dakota</option>
          	<option value="OH">Ohio</option>
          	<option value="OK">Oklahoma</option>
          	<option value="OR">Oregon</option>
          	<option value="PA">Pennsylvania</option>
          	<option value="RI">Rhode Island</option>
          	<option value="SC">South Carolina</option>
          	<option value="SD">South Dakota</option>
          	<option value="TN">Tennessee</option>
          	<option value="TX">Texas</option>
          	<option value="UT">Utah</option>
          	<option value="VT">Vermont</option>
          	<option value="VA">Virginia</option>
          	<option value="WA">Washington</option>
          	<option value="WV">West Virginia</option>
          	<option value="WI">Wisconsin</option>
          	<option value="nosay">Prefer not to say</option>
          </select>

          <label for "hidden4">Yearly Family Income:</label>
          <input type = "hidden" name ="hidden4">

          <select name = "income" id = "income" required>
            <option value = "0">$0 - $10,000</option>
            <option value = "11,000">$11,000 - $15,000</option>
            <option value = "16,000">$16,000 - $30,000</option>
            <option value = "31,000">$31,000 - $50,000</option>
            <option value = "51,000">$51,000 - $70,000</option>
            <option value = "71,000">$71,000 - $100,000</option>
            <option value = "101,000">$101,00- - $200,000</option>
            <option value = "201,000">$201,000 - $400,000</option>
            <option value = "401,000">$401,000+</option>
            <option value = "notsure">Not sure</option>
            <option value = "nosay">Prefer not to say</option>
          </select>

          <label for "hidden5">Political Party:</label>
          <input type = "hidden" name ="hidden5">

          <select name = "party" id = "party" required>
            <option value = "democrat">Democrat</option>
            <option value = "republican">Republican</option>
            <option value = "libertarian">Libertarian</option>
            <option value = "other">Other</option>
            <option value = "nosay">Prefer not to say</option>
          </select>

          <label for "hidden6">Ethnicity:</label>
          <input type = "hidden" name ="hidden6">

          <select name = "ethnicity" id = "ethnicity" required>
            <option value = "white">White/Caucasian</option>
            <option value = "black">African American</option>
            <option value = "hispanic">Hispanic</option>
            <option value = "latino">Latino</option>
            <option value = "asian">Asian</option>
            <option value = "hawaiian">Native Hawaiian or other Pacific Islander</option>
            <option value = "other">Other</option>
            <option value = "nosay">Prefer not to say<option>
          </select>

        </fieldset>
        <button id = "submit" type="submit">Sign Up</button>
      </form>

    </body>
</html>


</body>
</html>
