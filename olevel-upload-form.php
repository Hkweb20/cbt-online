<?php
session_start();
if (!isset($_SESSION["user_id"])){
header("Location: login.php");
}
 
require './inc/web-info.php';
require 'inc/user_servicePrice.php';
if ($user['u_wallet'] <= $prices['jamb_olevelPrice']) {
    header('Location: jamb-o-level-upload.php');
}
   
$title = "Dashboard";
require './inc/header.link.php';

?>
<body>

    <!--*******************
        Preloader start
    ********************-->
    <div id="preloader">
        <div class="sk-three-bounce">
            <div class="sk-child sk-bounce1"></div>
            <div class="sk-child sk-bounce2"></div>
            <div class="sk-child sk-bounce3"></div>
        </div>
    </div>
    <!--*******************
        Preloader end
    ********************-->


    <!--**********************************
        Main wrapper start
    ***********************************-->
    <div id="main-wrapper">

        <!--**********************************
            Nav header start
        ***********************************-->
        <?php   include 'inc/nav.php'; ?>
        <!--**********************************
            Nav header end
        ***********************************-->

        <!--**********************************
            Header start
        ***********************************-->
        <?php   include 'inc/header.php'; ?>
        <!--**********************************
            Header end ti-comment-alt
        ***********************************-->

        <!--**********************************
            Sidebar start
        ***********************************-->
         <?php  include 'inc/sidebar.php'; ?>
        <!--**********************************
            Sidebar end
        ***********************************-->

        <!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">
          <div class="col-xl-10 col-xxl-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Submit Entry for O'Level Result Upload</h4>
                </div>
                <div class="card-body">
                    <div class="basic-form">
                        <form id="levelResultForm" method="post" enctype="multipart/form-data">
                            <!-- Type Selection -->
                            <div class="form-group mb-3">
                                <label for="type" class="form-label">Type</label>
                                <select class="form-control form-control-lg" id="type" name="type" required>
                                    <option value="" disabled selected>---Choose One---</option>
                                    <option value="o_level">O'Level</option>
                                    <option value="a_level">A-Level</option>
                                </select>
                                <div class="invalid-feedback">Type cannot be blank.</div>
                            </div>
            
                            <!-- Full Name -->
                            <div class="form-group mb-3">
                                <label for="fullName" class="form-label">Full Name</label>
                                <input type="text" class="form-control" name="fullName" id="fullName" placeholder="Full Name" required>
                                <div class="invalid-feedback">Full Name cannot be blank.</div>
                            </div>
            
                            <!-- Profile Code -->
                            <div class="form-group mb-3">
                                <label for="profileCode" class="form-label">Profile Code</label>
                                <input type="text" class="form-control" name="profileCode" id="profileCode" placeholder="Profile code or JAMB Reg No or Direct Entry Reg No." required>
                                <div class="invalid-feedback">Profile Code cannot be blank.</div>
                            </div>
            
                            <!-- JAMB Year -->
                            <div class="form-group mb-3">
                                <label for="jambYear" class="form-label">JAMB Year</label>
                                <select class="form-control" name="jambYear" id="jambYear" required>
                                    <option value="" disabled selected>Choose JAMB Year</option>
                                    <option value="2021">2021</option>
                                    <option value="2022">2022</option>
                                    <option value="2023">2023</option>
                                </select>
                                <div class="invalid-feedback">JAMB Year cannot be blank.</div>
                            </div>
            
                            <!-- O'Level Subjects Section -->
                            <div id="subjectsContainer" class="mb-3">
                                <label class="form-label">O'Level Subjects</label>
                                <div class="subject-row" id="subjectRow">
                                    <div class="row mb-3 subject-entry">
                                        <div class="col-md-3">
                                            <select class="form-control subject" name="subjects" required>
                                                <option value="" disabled selected>Select Subject</option>
                                                <option value="math">Mathematics</option>
                                                <option value="eng">English</option>
                                                <option value="bio">Biology</option>
                                                <option value="phy">Physics</option>
                                                <option value="chem">Chemistry</option>
                                            </select>
                                        </div>
                                        <div class="col-md-2">
                                            <select class="form-control grade" required>
                                                <option value="" name="grade" disabled selected>Select Grade</option>
                                                <option value="A1">A1</option>
                                                <option value="B2">B2</option>
                                                <option value="B3">B3</option>
                                                <option value="C4">C4</option>
                                                <option value="C5">C5</option>
                                                <option value="C6">C6</option>
                                            </select>
                                        </div>
                                        <div class="col-md-2">
                                            <input type="number" class="form-control year" name="year" placeholder="Exam Year" required>
                                        </div>
                                        <div class="col-md-2">
                                            <input type="text" class="form-control examNumber" name="examNumber" placeholder="Exam Number" required>
                                        </div>
                                        <div class="col-md-2">
                                            <select class="form-control examType" name="examType" required>
                                                <option value="" disabled selected>Select Exam Type</option>
                                                <option value="waec">WAEC</option>
                                                <option value="neco">NECO</option>
                                                <option value="gce">GCE</option>
                                            </select>
                                        </div>
                                        <div class="col-md-1 mt-3 d-flex align-items-center justify-content-center">
                                            <button type="button" class="btn btn-danger" onclick="deleteSubject(this)">
                                                <i class="bi bi-trash"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
            
                            <!-- Add More Subjects Button -->
                            <button type="button" class="btn btn-info mb-3" onclick="addSubject()">
                                <i class="bi bi-plus-lg"></i> Add More Subjects
                            </button>
                             <!-- Second Sitting Fields (hidden by default) -->
                    <div id="">
                        <div class="mb-3">
                            <label for="secondSittingFile" class="form-label">O Level Result</label>
                            <input type="file" class="form-control" name="firstSittingFile" id="firstSittingFile">
                        </div>
                    </div>

                    <!-- Second Sitting Checkbox -->
                    <div class="form-check mb-3">
                        <input class="form-check-input" name="secondSitting" type="checkbox" id="secondSitting" onclick="toggleSecondSittingFields()">
                        <label class="form-check-label" for="secondSitting">
                            Select Second sitting or A-Level Result
                        </label>
                    </div>


                    <!-- Second Sitting Fields (hidden by default) -->
                    <div id="secondSittingFields" style="display: none;">
                        <div class="mb-3">
                            <label for="secondSittingFile" class="form-label">Third Result (Optional)</label>
                            <input type="file" class="form-control" name="secondSittingFile" id="secondSittingFile">
                        </div>
                    </div>

                    <!-- Second Sitting Fields (hidden by default) -->
                    <div id="">
                        <div class="mb-3">
                            <label for="secondSittingFile" class="form-label">Third Sitting Result</label>
                            <input type="file" class="form-control" name="thirdSittingFile" id="thirdSittingFile">
                        </div>
                    </div>
                            <!-- Additional Information -->
                            <div class="form-group mb-3">
                                <label for="additionalInfo" class="form-label">Additional Information</label>
                                <textarea class="form-control" name="additionalInfo" id="additionalInfo" placeholder="Optional" rows="3"></textarea>
                            </div>
            
                            <!-- Buttons -->
                            <div class="d-flex justify-content-center mb-5 p-4">
                                <button type="button" class="btn btn-secondary mx-2">Cancel</button>
                                <button type="submit" class="btn btn-primary mx-2">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
          </div>
            
            <!-- Bootstrap JS (includes Popper for dropdowns and tooltips) -->
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
            
            <!-- Bootstrap Icons for Plus Icon -->
            <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
            
            <script>
                // Function to add more subjects
                function addSubject() {
                    const subjectContainer = document.getElementById('subjectsContainer');
                    const newSubjectRow = document.createElement('div');
                    newSubjectRow.classList.add('row', 'mb-3', 'subject-entry');
                    newSubjectRow.innerHTML = `
                        <div class="col-md-3">
                            <select class="form-control subject" name="subject" required>
                                <option value="" disabled selected>Select Subject</option>
                                <option value="math">Mathematics</option>
                                <option value="eng">English</option>
                                <option value="bio">Biology</option>
                                <option value="phy">Physics</option>
                                <option value="chem">Chemistry</option>
                            </select>
                        </div>
                        <div class="col-md-2">
                            <select class="form-control grade" name="grade" required>
                                <option value="" disabled selected>Select Grade</option>
                                <option value="A1">A1</option>
                                <option value="B2">B2</option>
                                <option value="B3">B3</option>
                                <option value="C4">C4</option>
                                <option value="C5">C5</option>
                                <option value="C6">C6</option>
                            </select>
                        </div>
                        <div class="col-md-2">
                            <input type="number" class="form-control year" name="year" placeholder="Exam Year" required>
                        </div>
                        <div class="col-md-2">
                            <input type="text" class="form-control examNumber" name="examNumber" placeholder="Exam Number" required>
                        </div>
                        <div class="col-md-2">
                            <select class="form-control examType" name="examType" required>
                                <option value="" disabled selected>Select Exam Type</option>
                                <option value="waec">WAEC</option>
                                <option value="neco">NECO</option>
                                <option value="gce">GCE</option>
                            </select>
                        </div>
                        <div class="col-md-1 d-flex align-items-center justify-content-center">
                            <button type="button" class="btn btn-danger" onclick="deleteSubject(this)">
                                <i class="bi bi-trash"></i>
                            </button>
                        </div>
                    `;
                    subjectContainer.appendChild(newSubjectRow);
                }
            
                // Function to delete a subject
                function deleteSubject(button) {
                    const subjectRow = button.closest('.subject-entry');
                    subjectRow.remove();
                }
            
                // Toggle visibility of second sitting fields
                function toggleSecondSittingFields() {
                    const secondSittingFields = document.getElementById('secondSittingFields');
                    const isChecked = document.getElementById('secondSitting').checked;
                    if (isChecked) {
                        secondSittingFields.style.display = 'block';
                    } else {
                        secondSittingFields.style.display = 'none';
                    }
                }
   </script>
        </div>
        
        
        
        
        <!--**********************************
            Content body end
        ***********************************-->


        <!--**********************************
            Footer start
        ***********************************-->
        <?php include 'inc/footer.php'; ?>  
        <!--**********************************
            Footer end
        ***********************************-->

        <!--**********************************
           Support ticket button start
        ***********************************-->

        <!--**********************************
           Support ticket button end
        ***********************************-->


    </div>
    <!--**********************************
        Main wrapper end
    ***********************************-->

    <!--**********************************
        Scripts
    ***********************************-->
    <!-- Required vendors -->
    <?php include 'inc/footer.link.php'; ?>
</body>

</html>