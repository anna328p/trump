<?php $ignorelogin = 'yes';
      require '../../../resource/head.php' ?>

<script>

$(document).ready(function(){

$('select').material_select();

})

</script>

<body>

<div class = "container">

<h1>New Article</h1>

<form autocomplete="on" action = "PHP/newArticle.php" method = "post">

Name of Article:
<input type = "text" name = "name">

Background Image:
<input type = "text" name = "image">

Published Date (January 20th, 2017):
<input type = "text" name = "pDate">

Published Date - Formal:
<input type = "date" name = "pDateFormat">

Week Number:
<input type = "number" name = "week">

Summary:
<input type = "text" name = "summary">

News Source 1:
<select name = "nS1">
  <option value = "CNN">CNN</option>
  <option value = "FOX">FOX</option>
  <option value = "BBC">BBC</option>
  <option value = "ABC">ABC</option>
  <option value = "BUZZ">BUZZ</option>
  <option value = "NYT">NYT</option>
  <option value = "TIME">TIME</option>
  <option value = "MSNBC">MSNBC</option>
  <option value = "NBC">NBC</option>
  <option value = "TWITTER">TWITTER</option>
  <option value = "WPOST">WPOST</option>
  <option value = "YAHOO">YAHOO</option>
</select>

News Link 1:
<input type = "text" name = "nL1">

News Source 2:
<select name = "nS2">
  <option value = "CNN">CNN</option>
  <option value = "FOX">FOX</option>
  <option value = "BBC">BBC</option>
  <option value = "ABC">ABC</option>
  <option value = "BUZZ">BUZZ</option>
  <option value = "NYT">NYT</option>
  <option value = "TIME">TIME</option>
  <option value = "MSNBC">MSNBC</option>
  <option value = "NBC">NBC</option>
  <option value = "TWITTER">TWITTER</option>
  <option value = "WPOST">WPOST</option>
  <option value = "YAHOO">YAHOO</option>
</select>

News Link 2:
<input type = "text" name = "nL2">

News Source 3:
<select name = "nS3">
  <option value = "CNN">CNN</option>
  <option value = "FOX">FOX</option>
  <option value = "BBC">BBC</option>
  <option value = "ABC">ABC</option>
  <option value = "BUZZ">BUZZ</option>
  <option value = "NYT">NYT</option>
  <option value = "TIME">TIME</option>
  <option value = "MSNBC">MSNBC</option>
  <option value = "NBC">NBC</option>
  <option value = "TWITTER">TWITTER</option>
  <option value = "WPOST">WPOST</option>
  <option value = "YAHOO">YAHOO</option>
</select>

News Link 3:
<input type = "text" name = "nL3">

News Source 4:
<select name = "nS4">
  <option value = "CNN">CNN</option>
  <option value = "FOX">FOX</option>
  <option value = "BBC">BBC</option>
  <option value = "ABC">ABC</option>
  <option value = "BUZZ">BUZZ</option>
  <option value = "NYT">NYT</option>
  <option value = "TIME">TIME</option>
  <option value = "MSNBC">MSNBC</option>
  <option value = "NBC">NBC</option>
  <option value = "TWITTER">TWITTER</option>
  <option value = "WPOST">WPOST</option>
  <option value = "YAHOO">YAHOO</option>
</select>

News Link 4:
<input type = "text" name = "nL4">

Pro:
<input type = "text" name = "pro">

Con:
<input type = "text" name = "con">

Youtube Link 1:
<input type = "text" name = "YT1">

Youtube Link 2:
<input type = "text" name = "YT2">

End Date:
<input type = "date" name = "endD">

Password:
<input type = "password" name = "password">

<input type = "submit">

</form>

</div>

</body>
