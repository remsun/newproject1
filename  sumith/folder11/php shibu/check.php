<html>
<head>
<script type="text/javascript" src="selectuser.js"></script>
</head>
<body>

<form name="getuser1">
  <p>Select a User:
    
</p>
  <p>
    <label>
    <input type="text" name="Firstname">
    </label>
    <label>
    <input type="button" name="Submit" value="checkavailability" onClick="showUser(document.getuser1.Firstname.value)">
    </label>
  </p>
</form>
<br />
<div id="txtHint"><b>Person info will be listed here.</b></div>

</body>
</html> 
