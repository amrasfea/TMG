@extends('StaffLayout')

@section('StaffBar')
    <style>
        /* Common styles */
        body {
            font-family: Arial, sans-serif;
        }
        .form-container {
            display: flex;
            justify-content: space-between;
            margin-left: 20%;
        }
        .form-section {
            width: 58%; /* Adjust as needed */
            padding: 20px;
            margin-bottom: 20px;
            background-color: #f9f9f9; /* Set the background color */
        }
        .form-section h2 {
            font-size: 18px;
            margin-bottom: 10px;
        }

        .form-section h2 {
            font-size: 18px;
            margin-bottom: 20px;
            color: #007bff; /* Set the color of h2 elements */
        }

        .form-section label {
            display: block;
            margin-bottom: 10px;
        }
        input[type="text"],
        input[type="tel"],
        input[type="email"],
       select {
    flex: 2;
    width: calc(100% - 20px);
    padding: 10px;
    margin-bottom: 10px;
    border: 1px solid #ccc;
    border-radius: 5px;
    box-sizing: border-box;
}
        .form-section button {
            background-color: #007bff;
            color: #fff;
            border: none;
            padding: 10px 20px;
            border-radius: 4px;
            cursor: pointer;
        }
    </style>

    <body>
        <div class="form-container">
            <div class="form-section">
                <h2>Platinum Information</h2>
                <label for="registration-type">Type of registration:</label>
                <select id="registration-type">
                    <option value="premier">Premier</option>
                    <option value="New">New</option>
                    <option value="Upgrade">Upgrade(Premier)</option>
                    <option value="Downgrade">Downgrade(Elite)</option>
                    <option value="Ala Carte">Ala Carte</option>

                    <!-- Add other options if needed -->
                </select>
                <label for="Title">Title</label>
                    <select id="registration-type">
                    <option value="Mr">Mr</option>
                    <option value="Miss">Miss</option>
                    <option value="Mrs">Mrs</option>
                    <option value="Ms">Ms</option>
                    <option value="Dr">Dr</option>
                    <option value="Prof">Prof</option>
                </select>

                <label for="full-name">Full Name:</label>
                <input type="text" id="full-name" name="full-name" placeholder="Enter your full name">

                 <label for="identity-card">Identity Card No.:</label>
                 <input type="text" id="identity-card" name="identity-card" placeholder="Enter your ID card number">

                 <label for="gender">Gender:</label>
                 <select id="gender" name="gender">
                 <option value="male">Male</option>
               <option value="female">Female</option>
                </select>

               <label for="religion">Religion:</label>
                <input type="text" id="religion" name="religion" placeholder="Enter your religion">

                <label for="race">Race:</label>
                <input type="text" id="race" name="race" placeholder="Enter your race">

                 <label for="citizenship">Citizenship:</label>
                 <input type="text" id="citizenship" name="citizenship" placeholder="Enter your citizenship">

                 <br>
                 <br>
                 <h2>Education Information</h2>
                 <br>
                 <label for="eduLevel">Current Education Level:</label>
                 <input type="text" id="eduLevel" name="eduLevel" placeholder="Enter your current education level">
                 <label for="citizenship">Education Field:</label>
                 <input type="text" id="eduField" name="eduField" placeholder="Enter your education field">
                 <label for="eduInstitute">Educational Institute:</label>
                 <input type="text" id="eduInstitute" name="eduInstitute" placeholder="Enter your educational institute">
                 <label for="Occupation">Occupation:</label>
                 <input type="text" id="occupation" name="occupation" placeholder="Enter your occupation">
                 <label for="sponsorhsip">Study Sponsorhip:</label>
                 <input type="text" id="sponsorship" name="sponsorship" placeholder="Enter your sponsorship">
                 


            
             </div>

            <div class="form-section">
                <h2>Communication Information</h2>
                <br>
                <label for="address">Address:</label>
                <input type="text" id="address" name="address" placeholder="Enter your address">
                <label for="phone">Phone No:</label>
                <input type="text" id="phone" name="phone" placeholder="eg 019-9336892">
                <label for="phone">Email:</label>
                <input type="text" id="email" name="email" placeholder="eg amirasofea2@gmail.com">
                <label for="phone">Facebook Name:</label>
                <input type="text" id="fbName" name="fbName" placeholder="Enter your facebook name">
                <!-- Add other communication-related fields here (e.g., Email, etc.) -->

                <br>
                <br>
                <h2>Program Information</h2>
                <br>
                <label for="program">Program</label>
               <select id="program" name="program">
                <option value="platinum_professorship">Platinum Professorship</option>
                <option value="platinum_premier">Platinum Premier</option>
                  <option value="platinum_elite">Platinum Elite</option>
                  <option value="platinum_dr_jr">Platinum Dr. Jr.</option>
                 <option value="ala_carte">Ala Carte</option>
                 </select>

                 <label for="batch">Batch</label>
                 <select id="batch" name="batch">
                  <option value="1">1</option>
    <option value="2">2</option>
    <option value="3">3</option>
    <option value="4">4</option>
    <option value="5">5</option>
    <option value="6">6</option>
    <option value="7">7</option>
    <option value="8">8</option>
    <option value="9">9</option>
    <option value="10">10</option>
</select>     


<label for="referral">Referral:</label>
    <select id="referral" name="referral" onchange="toggleReferralFields()">
        <option value="" selected>Please state whether there's someone who introduced you to the platinum program</option>
        <option value="yes">Yes</option>
        <option value="no">No</option>
    </select>

    <div id="referralFields" style="display: none;">
        <label for="referral-name">Referral Name:</label>
        <input type="text" id="referral-name" name="referral-name" placeholder="Enter referral name">

        <label for="referral-batch">Referral Batch:</label>
        <input type="text" id="referral-batch" name="referral-batch" placeholder="Enter referral batch">
    </div>

    <script>
        function toggleReferralFields() {
            var referralDropdown = document.getElementById("referral");
            var referralFields = document.getElementById("referralFields");

            if (referralDropdown.value === "yes") {
                referralFields.style.display = "block";
            } else {
                referralFields.style.display = "none";
            }
        }

        // Call the function initially to set the initial state
        toggleReferralFields();
    </script>

           <button>Submit</button> 
            </div>

        
           
        </div>
        
    </body>