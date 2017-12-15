<html>
<body>
<form name="myform">
Name:-
<input type="text" name="name"><br>
Contact:-
<input type="text" name="contact"><br>
Date of Birth:-
<input type="text" name="dob"><br>
Gender:-
<input type="radio" name="gender" value="male">Male
<input type="radio" name="gender" value="female">Female<br>
Course:-
<input type="checkbox" name="course[]" value="CCNA">CCNA
<input type="checkbox" name="course[]" value="CCNP">CCNP
<input type="checkbox" name="course[]" value="CCNE">CCNE
<input type="checkbox" name="course[]" value="CISSP">CISSP<br>
<button onclick="assign()">alert</button>
<script>
function assign(){
	documnent.write("hello");
}
</script>
</form>
</body>
</html>