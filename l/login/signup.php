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
        <script src = "../js/signup.js"></script>
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

          <label for "hidden3">State of Residence:</label>
          <input type = "hidden" name ="hidden3">

          <select name = "state" id = "state" required>
            <option value = "Washington">Washington</option>
            <option value = "California">California</option>
          </select>

          <label for "hidden4">Yearly Family Income:</label>
          <input type = "hidden" name ="hidden4">

          <select name = "income" id = "income" required>
            <option value = "nosay">Prefer not to say</option>
            <option value = "1000">Less Than $1000</option>
          </select>

          <label for "hidden5">Political Party:</label>
          <input type = "hidden" name ="hidden5">

          <select name = "party" id = "party" required>
            <option value = "democrat">Democrat</option>
            <option value = "republican">Republican</option>
            <option value = "libretarian">Libretarian</option>
            <option value = "other">Other</option>
          </select>

          <label for "hidden6">Ethnicity:</label>
          <input type = "hidden" name ="hidden6">

          <select name = "ethnicity" id = "ethnicity" required>
            <option value = "red">Red</option>
            <option value = "blue">Blue</option>

          </select>

        </fieldset>
        <button id = "submit" type="submit">Sign Up</button>
      </form>

    </body>
</html>


</body>
</html>
