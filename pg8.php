<html>

<head>
    <title></title>
</head>

<body>

    <form method="" action="">
        <fieldset align="center">

            <table border="1" align="center">
                <tr>
                    <td colspan="2" align="center" height="50px">
                        <h3>Person Profile</h3><br>
                    </td>
                </tr>
                <tr>
                    <td>Name: </td>
                    <td><input type="text" name="myname" value="" /> </td>
                </tr>
                <tr>
                    <td>Email: </td>
                    <td><input type="email" name="email" value=""> </td>
                </tr>
                <tr>
                    <td>Gender: </td>
                    <td>
                        <input type="radio" name="gender" value=""> Male
                        <input type="radio" name="gender" value=""> Female
                        <input type="radio" name="gender" value=""> Other
                    </td>
                </tr>


                <tr>
                    <td>DOB: </td>
                    <td><input type="date" name="dob" value=""> </td>
                </tr>


                <tr>
                    <td>Blood Group: </td>
                    <td>
                        <select name="">
                            <option value="">A+</option>
                            <option value="">B+</option>
                            <option value="">O+</option>
                        </select>
                    </td>
                <tr>

                    <td>Degree: </td>
                    <td>
                        <input type="checkbox" name="" value=""> SSC
                        <input type="checkbox" name="" value=""> HSC
                        <input type="checkbox" name="" value=""> BSc <br>
                    </td>

                </tr>
                <tr>
                    <td>picture:</td>
                    <td>
                        <input type="file" name="">
                    </td>
                </tr>
                <tr length="100px">
                    <td>

                    </td>
                </tr>

                <tr>
                    <td colspan="2" align="right">

                        <input type="submit" name="submit" value="Submit">
                        <input type="reset" name="reset" value="Reset">
                    </td>
                </tr>
            </table>
        </fieldset>
    </form>
</body>

</html>