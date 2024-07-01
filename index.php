<!DOCTYPE html>
<html>
<head>
    <title>Student Registration Form</title>
    <style>
        body, html {
            height: 100%;
            margin: 0;
            
            justify-content: center;
            align-items: center;
        }
        .box {
            border: 2px solid black;
            padding: 50px;
            text-align: left;
            display: inline-block;
            background-color: #dcc0fa;
        }
        .back {
            background-color: #ecbdf0;
        }
        .table-custom, .table-custom th, .table-custom td {
            border: none !important;
        }
    </style>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script>
        function validateForm() {
            var name = document.forms["studentForm"]["student_name"].value;
            var regNumber = document.forms["studentForm"]["register_number"].value;
            var namePattern = /^[A-Za-z\s]+$/;
            var regNumberPattern = /^[0-9]+$/;
            var tamilMark = document.forms["studentForm"]["tamil_mark"].value;
            var englishMark = document.forms["studentForm"]["english_mark"].value;
            var mathMark = document.forms["studentForm"]["mathematics_mark"].value;
            var scienceMark = document.forms["studentForm"]["science_mark"].value;
            var socialScienceMark = document.forms["studentForm"]["socialscience_mark"].value;
            var marksPattern = /^[0-9]+$/;
            var district = document.forms["studentForm"]["district"].value;
            var sports = document.forms["studentForm"]["sport[]"];
            var sportsSelected = false;

            if (!namePattern.test(name)) {
                alert("Please enter a valid name (only characters and whitespace allowed).");
                return false;
            }
            if (!regNumberPattern.test(regNumber)) {
                alert("Please enter a valid register number (only numbers allowed).");
                return false;
            }
            if (!marksPattern.test(tamilMark) || tamilMark > 100) {
                alert("Please enter a valid mark (numbers only and less than or equal to 100).");
                return false;
            }
            if (!marksPattern.test(englishMark) || englishMark > 100) {
                alert("Please enter a valid mark (numbers only and less than or equal to 100).");
                return false;
            }
            if (!marksPattern.test(mathMark) || mathMark > 100) {
                alert("Please enter a valid mark (numbers only and less than or equal to 100).");
                return false;
            }
            if (!marksPattern.test(scienceMark) || scienceMark > 100) {
                alert("Please enter a valid mark (numbers only and less than or equal to 100).");
                return false;
            }
            if (!marksPattern.test(socialScienceMark) || socialScienceMark > 100) {
                alert("Please enter a valid mark (numbers only and less than or equal to 100).");
                return false;
            }
            if (district == "NULL") {
                alert("Please select a district.");
                return false;
            }

            for (var i = 0; i < sports.length; i++) {
                if (sports[i].checked) {
                    sportsSelected = true;
                    break;
                }
            }

            if (!sportsSelected) {
                alert("Please select at least one favorite sport.");
                return false;
            }

            return true;
        }
    </script>
</head>
<body>
    <div class="container-fluid text-center back">
        <br><br><br>
        <h1><b>STUDENT REGISTRATION PAGE</b></h1>
        <br>
        <h3><b><i>STUDENT INFO</i></b></h3>
        <br><br>
   
    <center>
    <form name="studentForm" action="studentformpage2.php" method="post" onsubmit="return validateForm()" >
        <div class="box align-center ">
            <div class="text-left">
                <table class="table table-sm table-custom">
                <tr class="table-danger"><td><b>STUDENT NAME:</b></td>
                <td><input type="text" name="student_name"></td></tr><br><br>
                <tr class="table-danger"><td><b>REGISTER NUMBER:</b></td>
                <td><input type="text" name="register_number"></td>
            </table>
                <b>Sex:</b>
                <input type="radio" value="Male" name="gender"> Male
                <input type="radio" value="Female" name="gender"> Female
                <input type="radio" value="Other" name="gender"> Other<br><br>
                <b>Favorite sport: </b><br><br>
                <input type="checkbox" name="sport[]" value="Cricket"> Cricket
                <input type="checkbox" name="sport[]" value="Kabaddi"> Kabaddi
                <input type="checkbox" name="sport[]" value="Badminton"> Badminton
                <input type="checkbox" name="sport[]" value="Hockey"> Hockey
                <input type="checkbox" name="sport[]" value="Wrestling"> Wrestling<br><br>
                <b>Select Your District:</b>
                <select id="district" name="district">
                    <option value="NULL">Select</option>
                    <option value="Ariyalur">Ariyalur</option>
                    <option value="Chengalpattu">Chengalpattu</option>
                    <option value="Chennai">Chennai</option>
                    <option value="Coimbatore">Coimbatore</option>
                    <option value="Cuddalore">Cuddalore</option>
                    <option value="Dharmapuri">Dharmapuri</option>
                    <option value="Dindigul">Dindigul</option>
                    <option value="Erode">Erode</option>
                    <option value="Kallakurichi">Kallakurichi</option>
                    <option value="Kanchipuram">Kanchipuram</option>
                    <option value="Kanyakumari">Kanyakumari</option>
                    <option value="Karur">Karur</option>
                    <option value="Krishnagiri">Krishnagiri</option>
                    <option value="Madurai">Madurai</option>
                    <option value="Nagapattinam">Nagapattinam</option>
                    <option value="Namakkal">Namakkal</option>
                    <option value="Nilgiris">Nilgiris</option>
                    <option value="Perambalur">Perambalur</option>
                    <option value="Pudukkottai">Pudukkottai</option>
                    <option value="Ramanathapuram">Ramanathapuram</option>
                    <option value="Salem">Salem</option>
                    <option value="Sivaganga">Sivaganga</option>
                    <option value="Tenkasi">Tenkasi</option>
                    <option value="Thanjavur">Thanjavur</option>
                    <option value="Theni">Theni</option>
                    <option value="Thoothukudi">Thoothukudi</option>
                    <option value="Tiruchirappalli">Tiruchirappalli</option>
                    <option value="Tirunelveli">Tirunelveli</option>
                    <option value="Tirupathur">Tirupathur</option>
                    <option value="Tiruppur">Tiruppur</option>
                    <option value="Tiruvallur">Tiruvallur</option>
                    <option value="Tiruvannamalai">Tiruvannamalai</option>
                    <option value="Tiruvarur">Tiruvarur</option>
                    <option value="Vellore">Vellore</option>
                    <option value="Viluppuram">Viluppuram</option>
                    <option value="Virudhunagar">Virudhunagar</option>
                </select><br><br><br>
            </div>
            <div class="text-left">
                <b><h3><i>Enter your marks........</i></h3></b><br>
            </div>
            <table class="table custom-table text-left border-dark table-custom">
                <tr class="table-danger"><td><b>Tamil </b>
                <td><input type="text" name="tamil_mark"><br><br></tr>
                <tr class="table-danger"><td><b>English </b>
                <td><input type="text" name="english_mark"><br><br></tr>
                <tr class="table-danger"><td><b>Mathematics </b>
                <td><input type="text" name="mathematics_mark"><br><br></tr>
                <tr class="table-danger"> <td><b>Science </b>
                <td><input type="text" name="science_mark"><br><br></tr>
                <tr class="table-danger"><td><b>Social Science </b>
                <td><input type="text" name="socialscience_mark"><br><br></tr>
                </table><br>
                <center>
                <input type="submit" class=" bg-dark text-white">
                </center>
                </div>
        </div>
    </center>
    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>
</html>
