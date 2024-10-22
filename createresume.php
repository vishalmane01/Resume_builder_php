<?php
$title = "Create Resume | Resume Builder";
require './assets/includes/header.php';
require './assets/includes/navbar.php';
// $fn->AuthPage();
?>


    <div class="container">

        <div class="bg-white rounded shadow p-2 mt-4" style="min-height:80vh">
            <div class="d-flex justify-content-between border-bottom">
                <h5>Create Resume</h5>
                <div>
                    <a class="text-decoration-none" onclick = 'history.back()'><i class="bi bi-arrow-left-circle"></i> Back</a>
                </div>
            </div>

            <div>

                <form class="row g-3 p-3" action = "actions/createresume.action.php" method="post">
                    <div class="col-md-6">
                        <label class="form-label">Resume Title</label>
                        <input type="text" name ="resume_title" placeholder="SWE Resume" value="Resume.<?=time() ?>" class="form-control" required>
                    </div>
                    <h5 class="mt-3 text-secondary"><i class="bi bi-person-badge"></i> Personal Information</h5>
                    <div class="col-md-6">
                        <label class="form-label">Full Name</label>
                        <input type="text" name ="full_name" placeholder="Virat Kholi" class="form-control" required>
                    </div>
                    <div class="col-md-6">
                        <label class="form-label">Email</label>
                        <input type="email" name="email_id" placeholder="name@example.com" class="form-control" required>
                    </div>
                    <div class="col-md-6">
                        <label class="form-label">Mobile No</label>
                        <input type="number" name="mobile" class="form-control" placeholder="9876543210" required>
                    </div>
                    <div class="col-12">
                        <label for="inputAddress" class="form-label"> Objective </label>
                        <textarea class="form-control" id="inputAddress" name="objective" placeholder="" required>  </textarea>
                    </div>
                    <div class="col-md-6">
                        <label class="form-label" >Date Of Birth</label>
                        <input type="date" name="dob" class="form-control" required>
                    </div>

                    <div class="col-md-6">
                        <label class="form-label">Gender</label>
                        <select class="form-select" name="gender">
                            <option>Male</option>
                            <option>Female</option>
                            <option>Transgender</option>




                        </select>
                    </div>

                    <div class="col-md-6">
                        <label class="form-label">Religion</label>
                        <select class="form-select" name="religion">
                            <option>Hindu</option>
                            <option>Muslim</option>
                            <option>Sikh</option>
                            <option>Christian</option>



                        </select>
                    </div>

                    <div class="col-md-6">
                        <label class="form-label">Nationality</label>
                        <select class="form-select" name="nationality">
                            <option>Indian</option>
                            <option>Non Indian</option>


                        </select>
                    </div>

                    <div class="col-md-6">
                        <label class="form-label">Marital Status</label>
                        <select class="form-select" name="marital_status">
                            <option>Married</option>
                            <option>Single</option>
                            <option>Divorced</option>

                        </select>
                    </div>

                    <div class="col-md-6">
                        <label class="form-label">Hobbies</label>
                        <input type="text" placeholder="Reading Books, Watching Movies" name="hobbies" class="form-control">
                    </div>

                    <div class="col-md-6">
                        <label class="form-label">Languages Known</label>
                        <input type="text" placeholder="English,Hindi,Marathi" name="languages" class="form-control">
                    </div>

                    <div class="col-12">
                        <label for="inputAddress" class="form-label"> Address</label>
                        <input type="text" class="form-control" id="inputAddress" name="address" placeholder="1234 Main St">
                    </div>
                    
                    <div class="col-12 text-end">
                        <button type="submit" class="btn btn-primary"><i class="bi bi-floppy"></i> Add Resume</button>
                    </div>
                </form>
            </div>
        </div>    
    </div>
            
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
</body>

</html>