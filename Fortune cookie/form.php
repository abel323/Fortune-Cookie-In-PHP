<!DOCTYPE html>
<html>
    <head>
        <title>Fortune cookie</title>
        <link rel="stylesheet" type="text/css" href="style.css"/>
    </head>
    <body>
        <h2 align="center">Fortune Cookie</h2>
        <div class="form">
        <fieldset>
            <legend>Fortune Cookie</legend>
            <form action="fortune cookie.php" method="get">
                <table border="0">
                    <tr>
                        <td>Full Name: </td>
                        <td><input type="text" name="fullName" placeholder="Full Name"></td>
                    </tr>
                    <tr>
                        <td>Minimum Lucky Number: </td>
                        <td><input type="number" name="minLuckyNumber" placeholder="Min Lucky Number"></td>
                    </tr>
                    <tr>
                        <td>Maximum Lucky Number: </td>
                        <td><input type="number" name="maxLuckyNumber" placeholder="Maximum Lucky Number"></td>
                    </tr>
                    <tr>
                        <td>Choose Color: </td>
                        <td><input type="color" name="chooseColor" placeholder="Choose Color"></td>
                    </tr>
                    <tr>
                        <td colspan="2"><input type="submit" value="Submit" name="submit">
                        <input type="reset" value="Cancel">
                    </tr>
                </table>
            </form>
        </fieldset>
        </div>
    </body>
</html>