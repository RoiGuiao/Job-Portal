<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <script src="https://kit.fontawesome.com/e5ed048aee.js" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="css/aboutus-settings.css">
    <link rel="stylesheet" href="../css/preloader.css">
    <title>Edit Profile</title>
</head>

<body>
    <?php include_once '../include/preloader-display.php'; ?>
    <div class="color-overlay">
        <nav class="navbar navbar-expand-lg  h6 navbar-light bg fixed-top mx-0 shadow-sm">
            <a href="#" class="navbar-brand ms-5">
                <img src="image/flogo.png" alt="Job Portal Logo" width="80" height="60"></a>
            <h6 class="ms-auto header-text">Settings</h6>
            <div class="dropdown ms-auto d-flex">
                <h6 class="mt-2 fw-bold" id="adminFullName"></h6>
                <button class="btn-dropdown ms-2 me-4" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                    <i class="fa-solid fa-caret-down"></i>
                </button>
                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuButton1">
                    <li><a class="dropdown-item" href="admin-profile.php"><img id="mainDpDrop" src="image/profile.png" alt="" class="me-2"> My Profile</a></li>
                    <li>
                        <hr class="dropdown-divider">
                    </li>
                    <li><a class="dropdown-item" href="edit-profile.php"><i class="fa-solid fa-user-pen"></i>Edit Profile</a></li>
                    <li>
                        <hr class="dropdown-divider">
                    </li>
                    <li><a class="dropdown-item" href="admin-change-pass.php"> <i class="fa-solid fa-key "></i>Change Password</a></li>
                    <li>
                        <hr class="dropdown-divider">
                    </li>
                    <li><a class="dropdown-item" href="php/logout.php"><i class="fa-solid fa-right-from-bracket"></i>Sign Out</a></li>
                </ul>
            </div>
        </nav>
    </div>
    <br>
    <button class="openbtn" title="Open Sidebar" onclick="openNav()"><i id="list-i" class="bi bi-list fa-2x"></i></button>
    <div class="sidebar shadow-lg" id="mySidebar" class="sidebar">
        <div class="menu">
            <div class="item"><a href="javascript:void(0)" class="closebtn text-dark" title="Close Sidebar" onclick="closeNav()">×</a></div>
            <div class="item"><a href="dashboard.php"><img class="me-3" src="image/dashboard.png"> Dashboard</a><br></div>
            <div class="item"><a href="employer-management.php"><img class="me-3" src="image/employers.png"> Employers Management</a><br></div>
            <div class="item"><a href="jobseeker-management.php"><img class="me-3" src="image/jobseeker.png"> Job Seeker Management</a><br></div>
            <div class="item"><a href="jobpost-management.php"><img class="me-3" src="image/jobpost.png"> Job Post Management</a><br></div>
            <div class="item"><a href="jobcategories-management.php"><img class="me-3" src="image/jobcategory.png"> Job Categories Management</a><br></div>
            <div class="item">
                <a class="sub-btn highlight"><img class="me-3" src="image/profilesetting.png">Setting <i class="fa fa-angle-right dropdown"></i></a>
                <div class="sub-menu sub-display">
                    <a href="system-settings.php" class="sub-item">System Settings</a>
                    <a href="aboutus-settings.php" class="sub-item highlight">About Us Settings</a>
                    <a href="faq-settings.php" class="sub-item">Faq Settings</a>
                </div>
            </div><br>
            <div class="item">
                <a class="sub-btn"><img class="me-3" src="image/recycle-bin.png"> Recycle Bin <i class="fa fa-angle-right dropdown"></i></a>
                <div class="sub-menu">
                    <a href="recycle-bin-employer.php" class="sub-item">Employers Management</a>
                    <a href="recycle-bin-jobseeker.php" class="sub-item">Job Seeker Management</a>
                    <a href="recycle-bin-jobpost.php" class="sub-item">Job Post Management</a>
                </div>
            </div>
        </div>
    </div>
    <br><br><br>
    <div class="container-fluid bg-white shadow block" id="main">
        <div class="text-center">
            <h3 class="div1">ABOUT US SETTINGS</h3>
        </div><br>
        <div class="row mb-3 mt-0 fw-bold justify-content-center">
            <label for="meetourteam" class="col-sm-2 ">Meet our team:</label>
            <div class="col-sm-8">
                <textarea type="text" class="form-control" id="meetourteam" rows="4">We are Melham Construction Corporation interns who want to create a website for available jobs online. The traditional method of applying for jobs has been innovated, and on this page we offer a minimalist, clean, and simple to use website for both job seekers and employers. Tech-Ployment is a combination of technology and employment in which employability is now empowered by our modern technology.</textarea>
            </div>
        </div>
        <div class="row mb-3 mt-0 fw-bold justify-content-center">
            <label for="vision" class="col-sm-2 ">Vision:</label>
            <div class="col-sm-8">
                <textarea type="text" class="form-control" id="vision" rows="3">To establish a career portal that can help both job seekers and employees in a healthy community.</textarea>
            </div>
        </div>
        <div class="row mb-3 mt-0 fw-bold justify-content-center">
            <label for="mission" class="col-sm-2 ">Mission:</label>
            <div class="col-sm-8">
                <textarea type="text" class="form-control" id="mission" rows="3">To assist seekers and employers achieve their employment objectives. With creativity and skill, the ageny collaborates with community partners to adapt to changing needs and posibilities.</textarea>
            </div>
        </div>
        <div class="row mb-3 mt-0 fw-bold justify-content-center">
            <label for="goal" class="col-sm-2 ">Goal:</label>
            <div class="col-sm-8">
                <textarea type="text" class="form-control" id="goal" rows="3">Are you sick of standing in endless line? Today, technology gives you an advantage in the job market by allowing you to apply with a single click and from the comfort of your home. Now is the time to apply! Use Tech-Ployment and get your first online job! </textarea>
            </div>
        </div>
        <div class="row mb-3 mt-0 fw-bold justify-content-center">
            <label for="services" class="col-sm-2 ">Our services:</label>
            <div class="col-sm-8">
                <textarea type="text" class="form-control" id="services" rows="4"> Our Services 
                    We serve individuals by connecting employers with workers who are looking for jobs. We want to instill confidence in everyone's outsourcing experience.  
                    Why We Do It  
                    Because it has an impact on people's lives.</p></textarea>
            </div>
        </div>
        <div class="text-center">
            <button class="save-change" type="submit">SAVE CHANGES</button>
        </div><br>
    </div>
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title ms-5" id="exampleModalLabel">Are you sure you want to delete this?</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="delete modal-body">
                    <button type="button" class="yes-no btn btn-success">Yes</button>
                    <button type="button" class="yes-no btn btn-danger">No</button>
                </div>
            </div>
        </div>
    </div>

    <script>
        function openNav() {
            document.getElementById("mySidebar").style.left = "0";
            document.getElementById("main").style.marginLeft = "370px";
        }

        function closeNav() {
            document.getElementById("mySidebar").style.left = "-100%";
            document.getElementById("main").style.marginLeft = "220px";
        }
    </script>

    <script src="js/navbar.js"></script>
    <script src="../js/preloader.js"></script>
</body>

</html>