
<?php require('../Bootstrap/links.php');?>
<head>
	<!-- CSS -->
	<link rel="stylesheet" href="css/signUp.css">
</head>

<!-- Modal Create Form -->
<div class="container">
    <div class="modal-body">
        <form id="createForm" name="createForm" method="POST" onsubmit="return validateForm()">
        <h1>Registration Form</h1> 
        <hr style="height:5px; background-color: #045de9;background-image: linear-gradient(315deg, #045de9 0%, #09c6f9 74%);">
            <div class="form-row">
                <div class="col">
                    <div class="form-group">
                        <label class="text-muted" for="first_name">First Name</label>
                        <input class="form-control" id="first_name" name="first_name" type="text" required>
                    </div>
                </div>
                <div class="col">
                    <div class="form-group">
                        <label class="text-muted" for="middle_name">Middle Name</label>
                        <input class="form-control" id="middle_name" name="middle_name" type="text" required> 
                    </div>
                </div>
                <div class="col">
                    <div class="form-group">
                        <label class="text-muted" for="last_name">Last Name</label>
                        <input class="form-control" id="last_name" name="last_name" type="text" required> 
                    </div>
                </div>
            </div>
            <div class="form-row">
                <div class="col-4">
                    <label class="text-muted" for="birth_date">Birth Date</label>
                    <div class="input-group date">
                        <input id="birth_date" name="birth_date" onchange="SetAge()" type="text" class="form-control date-input" required/>
                        <div class="input-group-addon" >
                            <span class="fa fa-calendar"></span>
                        </div>
                    </div>
                    <!-- Calendar -->
                    <script type="text/javascript">
                        $(function () {
                            $("#birth_date").datepicker({
                                format: "yyyy-mm-dd",
                                showOtherMonths: true,
                                selectOtherMonths: true,
                                autoclose: true,
                                changeMonth: true,
                                changeYear: true,
                                //gotoCurrent: true,
                                orientation: "bottom",
                            });
                        });
                    </script>
                </div>
                <div class="col">
                    <div class="form-group">
                        <label class="text-muted" for="age">Age</label>
                        <input class="form-control" id="age" name="age" type="text" readonly> 
                    </div>
                </div>    
                <div class="col">
                    <div class="form-group">
                        <label class="text-muted" for="gender">Gender</label> <br>
                        <select class="custom-select custom-select-lg py-2" id="gender" required>
                            <option selected>Select</option>
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>
                        </select>
                    </div>   
                </div>
            </div>
            <div class="form-group">
                <label class="text-muted" for="address">Address</label>
                <input class="form-control" id="address" name="address" type="text" required> 
            </div>
            <div class="form-group">
                <label class="text-muted" for="contact_no">Contact No.</label>
                <input class="form-control" id="contact_no" name="contact_no" type="text" required> 
            </div>
            <div class="form-row">
                <div class="form-group col">
                    <label class="text-muted" for="marital_status">Marital Status</label> <br>
                    <select class="custom-select custom-select-lg mb-5" id="marital_status" required>
                        <option selected>Select</option>
                        <option value="Single">Single</option>
                        <option value="Married">Married</option>
                        <option value="Widowed">Widowed</option>
                        <option value="Divorced">Divorced</option>
                    </select>
                </div>  
                <div class="form-group col">
                    <label class="text-muted" for="voter_status">Voter Status</label> <br>
                    <select class="custom-select custom-select-lg mb-5" id="voter_status" required>
                        <option selected>Select</option>
                        <option value="Registered">Registered</option>
                        <option value="Not Registered">Not Registered</option>
                    </select>
                </div> 
            </div>
            <div class="d-flex justify-content-center">
                <button type="button" id="clearBtn" class="btn btn-primary">C L E A R</button>
                <button type="button" id="createBtn" class="btn btn-primary">R E G I S T E R</button>
            </div>
        </form>
    </div>
</div>
    





<script>    
// Create CRUD Script 
$( "#createBtn" ).click(function(e) {
    e.preventDefault();
    $.ajax({
        url: "../Database/ResidentsCRUD/resident_create.php",
        type: "POST",
        data: {
            "first_name": $('#first_name').val(), 
            "middle_name": $('#middle_name').val(), 
            "last_name": $('#last_name').val(), 
            "gender": $('#gender').val(),
            "age": $('#age').val(),
            "bdate": $('#birth_date').val(), 
            "address": $('#address').val(), 
            "contact_no": $('#contact_no').val(), 
            "marital_status": $('#marital_status').val(), 
            "voter_status": $('#voter_status').val(), 
        },
        success: function(response){
            //console.log(response);
            if(response.code=='201'){
                console.log('Created Successfully');
                $('#createForm').trigger("reset");
                window.location='LandingPage.php'
                alert("You are now Registered! \nYour Login Credentials will be send to your mobile number.");
            }else{
                console.log('Error');
                alert("Please Fill out all the Fields");
            }
        }
    });
});

$( "#clearBtn" ).click(function(e) {
    $('#createForm').trigger("reset");
});

// Auto Set Age
function SetAge() {
    var bdate=document.createForm.birth_date.value;
    var age =new Person(bdate).calculateAge();
    document.getElementById('age').value=age;
}
function UpdateAge() {
    var bdate=document.updateForm.birth_date_u.value;
    var age =new Person(bdate).calculateAge();
    document.getElementById('age_u').value=age;
}
function Person(dob) {
    this.birthday = new Date(dob);
    this.calculateAge = function() {
      const diff = Date.now() - this.birthday.getTime();
      const ageDate = new Date(diff); 
      console.log(ageDate.getUTCFullYear()); 
      return Math.abs(ageDate.getUTCFullYear() - 1970);
    };
}

// Validate
function validateForm() {
  let x = document.forms["createForm"]["first_name"].value;
  if (x == "") {
    alert("Please fill out all the Fields");
    return false;
  }
}

</script>

