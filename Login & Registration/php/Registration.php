<!DOCTYPE HTML>
<html>
    <head>
        <title>Registration Page </title>
        <style>
            body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            display: flex;
            justify-content: center;  /* centers form horizontally */
            align-items: center;      /* centers form vertically */
            height: 100vh;            /* takes full screen height */
            margin: 0;
        }
            label{
            color:blue;
            margin-bottom: 8px;
        }

            form{
                text-align:center;
                background-color:lightgray;
                padding:20px;
                width:900px;
                height:650px;
                border-radius:10px;
            }
            p{
                color:blue;
            }
        </style>
    </head>
    <body>
        <form>

        <h1>Bangladesh University of Web Technology </h1><br>
        <p>Education is our main priority</p>

        <label>First Name:</label><input type = "text"><br>

        <label>Last Name:</label><input type = "text"><br>

        <label>Date of Birth:</label><input type = "date"> <br>

        <label>Gender:</label><select name = "gender">
            <option value = "gender">Select your gender</option>
            <option value = "gender">Female</option>
            <option value = "gender">Male</option>
            <option value = "gender">Others</option></select><br>
        
        <label>Maretial Status:</label><select name = "maretialStatus">
            <option value = "maretialStatus">Select your maretial Status</option>
            <option value = "maretialStatus">Married</option>
            <option value = "maretialStatus">Single</option></select><br>

        <label>Choose your Department:</label><select name = "department">
            <option value = "gender">Select your department</option>
            <option value = "gender">CSE</option>
            <option value = "gender">EEE</option>
            <option value = "gender">English</option>
            <option value = "gender">BBA</option>
            <option value = "gender">Mathmatics</option></select> <br>

        <label>Blood Group:</label><select name = "bloodGroup">
            <option value = "gender">Select your blood group</option>
            <option value = "gender">A+</option>
            <option value = "gender">A-</option>
            <option value = "gender">AB+</option>
            <option value = "gender">AB-</option>
            <option value = "gender">O+</option>
            <option value = "gender">O-</option>
            <option value = "gender">B+</option>
            <option value = "gender">B-</option></select><br>
            
        <label>Email:</label><input type="text"><br>

        <label>Contact Number:</label><input type="text"><br>  

        <label>Present Address:</label><input type="text"><br> 

        <label>Password:</label><input type="password"><br>  
        
        <button>Registration Confirm</button>
        </form>
    </body>
</html>