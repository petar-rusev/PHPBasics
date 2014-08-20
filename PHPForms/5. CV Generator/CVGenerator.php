<!DOCTYPE html>
<html>
<head>
    <title>CV Generator</title>
</head>
<body>
<form method="post">
<fieldset>
    <legend>Personal Information</legend>
    <input type="text" name="FirstName" placeholder="First Name"><br>
    <input type="text" name="LastName" placeholder="Last Name"><br>
    <input type="text" name="Email" placeholder="E-mail"><br>
    <input type="text" name="Phone" placeholder="Phone number"><br>
    Female<input type="radio" name="Female" value="Female">
    Male<input type="radio" name="Male" value="Male"><br>
    <label>Birth date</label><br>
    <input type="text" name="BirthDate" value="dd/mm/yyyy"><br>
    <label>Nationality</label><br>
    <select name="Nationality">
        <option value="Bulgarian">Bulgarian</option>
        <option value="Turkish">Turkish</option>
        <option value="Romanian">Romanian</option>
    </select>
</fieldset>
<fieldset>
    <legend>Last Work Position</legend>
        Company Name<input type="text" name="company"><br>
        From<input type="text" name="from" value="dd/mm/yyyy"><br>
        To<input type="text" name="to" value="dd/mm/yyyy"><br>
    </fieldset>
<fieldset>
    <legend>Computer Skills</legend>
        <label>Programming Languages</label>
        <div id="parent">
        </div>
        <script>addInput();</script>
        <a href="javascript:addInput()"><button>Remove Language</button></a>
        <a href="javascript:addInput()"><button>Add Language</button></a>
</fieldset>
<fieldset>
    <legend>Other Skills</legend>
    <label>Languages</label><br>
    <label>Driver's License</label>
        B<input type="checkbox" value="B">
        A<input type="checkbox" value="A">
        C<input type="checkbox" value="C">
</fieldset><br>
    <input type="submit" value="Submit">
</form>
</body>
</html>