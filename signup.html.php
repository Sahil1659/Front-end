<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="style/bootstrap.css">
    <link rel="stylesheet" href="style/octa.css">
    <script src="js/jquery-1.8.2.min.js"></script>
    <script src="js/bootstrap.js"></script>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
</head>

<body>
    <!-- Image and text -->
    <nav class="navbar navbar-dark bg-primary">
        <a class="navbar-brand" href="#">
            
            <b>themeditalks.in</b>
        </a>
    </nav>
    <div id="doctor-form">
        <table align="center">

            <tr>
                <th colspan="2">
                    <h3>
                        <center>Doctor's Sign Up</center>
                    </h3>
                </th>
            </tr>
            <tr>
                <th>First Name<sup>*</sup>:</th>
                <td><input type="text" name="First_name" id="firstname" placeholder="Enter First Name"></td>
            </tr>
        
            <tr>
                <th>Last Name<sup>*</sup>:</th>
                <td><input type="text" name="Last_name" id="lastname" placeholder="Enter Last Name"></td>
            </tr>
            <tr>
                <th>Username<sup>*</sup>:</th>
                <td><input type="text" name="Username" id="uname" placeholder="Username"></td>
            </tr>
            <tr>
                <th>Password<sup>*</sup>:</th>
                <td><input type="password" name="Password" id="pwd" placeholder="Password"></td>
            </tr>
            <tr>
                <th>Email<sup>*</sup>:</th>
                <td><input type="email" name="Email" id="email" placeholder="Enter Email"></td>
            </tr>
            <tr>
                <th>Mobile No.<sup>*</sup>:</th>
                <td><input type="text" name="Mobile_No." id="mobile" placeholder="Mobile No." maxlength="10"></td>
            </tr>
            <tr>
                <th>Hospital/Clinic Address<sup>*</sup>:</th>
                <td><textarea rowa="6" cols="60" id="address" placeholder="Add Address here..."></textarea></td>
            </tr>
            <tr>
                <th>Identity Proof<sup>*</sup>:</th>
                <td><select>
                        <option value="Adhaar Card">Adhaar Card</option>
                        <option value="Pan card">Pan Card</option>
                        <option value="Voter ID">Voter ID</option>
                        <option value="Passport"> Passport</option>
                    </select></td>

            </tr>
            <tr>
                <th>Upload Document<sup>*</sup>:</th>
                <td><input type="file" id="doc"></td>
            </tr>
            <tr>
                <th>
                    Specialist In<sup>*</sup>:
                </th>
                <td><input type="text" name="Specialist_In" id="spec" placeholder="Specialist In"></td>
            </tr>
            <tr>
                <th colspan="2">
                    <center><button class="btn btn-outline-primary" id="dsignup">Sign up</button></center>
                </th>
            </tr>
        </table>
    </div>
    <div class="cpyrit" style="margin-top:64px;">
        <h3>themeditalks</h3><br>
        Copyright &copy;2019,themeditalks. All Rights Reserved
    </div>
</body>

</html>
