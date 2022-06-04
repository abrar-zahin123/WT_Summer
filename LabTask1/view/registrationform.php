<html>
    <head>
        <title>
            Registration form 
</title>
</head>
<body>
    <h1>Registration form</h1>
    <form action="../control/process.php"method="POST">
        <form action="../view/registrationform.php"method="POST">
            <table>
                <tr><td> First Name: </td><td><input type="test"name="firstname"></td></tr>
                <tr><td> Last Name: </td><td><input type="test"name="lastname"></td></tr>
                <tr><td> Age: </td><td><input type="test"name="age"></td></tr>
                <tr><td> Designation: </td>
                <td><input type="radio"name="designation">Junior programmer</td>
                <td><input type="radio"name="designation">Senior programmer</td>
                <td><input type="radio"name="designation">Project lead</td></tr>
                <tr><td> Preferred language: </td>
                <td><input type="checkbox"name="preferredlanguage">JAVA</td>
                <td><input type="checkbox"name="preferredlanguage">PHP</td>
                <td><input type="checkbox"name="preferredlanguage">C++</td></tr>
                <tr><td> E-mail: </td><td><input type="test"name="email"></td></tr>
                <tr><td> Password: </td><td><input type="password"name="password"></td></tr>
                <tr><td> Please choose a file </td><td><input type="test"value="Choose file"> No file choosen</td></tr>
                <tr><td><input type="submit"></td></tr>
                <tr><td><input type="reset"></td></tr>
    </form>
</body>
</html>