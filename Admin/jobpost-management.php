<!doctype html>
<html lang="en">
<head> 
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <script src="https://kit.fontawesome.com/e5ed048aee.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="css/jobpost-management.css">
    <title>Job Post Management</title>
</head>
<body>
    <div class="color-overlay">
        <nav class="navbar navbar-expand-lg  h6 navbar-light bg fixed-top mx-0 shadow-sm">
            <a href="#" class="navbar-brand ms-5">
            <img src="image/flogo.png" alt="Job Portal Logo" width="80" height="60"></a>
            <h6 class="position-relative">Job Post Management</h6>
            <div class="collapse navbar-collapse" id="toggleMobileMenu">
                <ul class="navbar-nav ms-auto  text-center">
                    <li class="nav-item dropdown me-5">
                        <a class="nav-link dropdown-toggle fs-5" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="bi bi-person-circle"></i></a>
                    </li>
                    <ul class="dropdown-menu account-drop dropdown-menu-end" aria-labelledby="navbarDropdown" >
                        <li><a class="dropdown-item  fs-5 text-white" href="admin-profile.php"><i class="bi bi-person-circle"></i> My Profile</a></li>
                        <li><hr class="dropdown-divider bg-white"></li>
                        <li><a class="dropdown-item fs-5 text-white"href="#">Sign Out</a></li>
                    </ul>
                </ul>
            </div>
        </nav>         
    </div>
    <br>
    <button class="openbtn" title="Open Sidebar" onclick="openNav()"><i id="list-i" class="bi bi-list fa-2x"></i></button>
    <div class="sidebar shadow-lg" id="mySidebar" class="sidebar">
        <a href="javascript:void(0)" class="closebtn text-dark" title="Close Sidebar" onclick="closeNav()">×</a>
        <a href="dashboard.php"><img class="me-3" src="image/dashboard.png"> Dashboard</a><br>
        <a href="employer-management.php"><img class="me-3" src="image/employers.png"> Employers Management</a><br>
        <a href="jobseeker-management.php"><img class="me-3" src="image/jobseeker.png"> Job Seeker Management</a><br>
        <a href="jobpost-management.php" class="highlight"><img class="me-3" src="image/jobpost.png"> Job Post Management</a><br>
        <a href="jobcategories-management.php"><img class="me-3" src="image/jobcategory.png"> Job Categories Management</a><br>
        <a href="admin-profile.php"><img class="me-3" src="image/profilesetting.png"> Profile Setting</a><br>
        <a href="recycle-bin-employer.php"><img class="me-3" src="image/recycle-bin.png"> Recycle Bin</a><br>
    </div> 
    <br><br><br>
    <div class="container-responsive p-md-5 mt-4 bg-white" id="main">
        <div class="d-flex">      
            <input class="form-control icon i-search" type="search" placeholder="Search a job post" aria-label="Search">
            <button class="btn text-dark fw-bold search" type="submit"><i class="bi bi-search"></i></button>
        </div><br>
        <div class="col-auto">
            <section class="type p-1">
                <div class="bg-color-header text-center">
                    <div class="table-responsive" id="no-more-tables">
                        <table class="table basic-table table-headers table table-hover">
                            <thead class="thead text-dark text-center">
                                <tr>
                                    <th>Employer</th>
                                    <th>Company</th>
                                    <th>Job Category</th>
                                    <th>Date Applied</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody class="tbody bg-light text-dark">
                                <tr class="tr">
                                    <td data-title="Employer"><b><i class="bi bi-person-circle"></i> Full Name</b></td>
                                    <td data-title="Company"><b>Company</b></td>  
                                    <td data-title="Job Category"><b>Web Development</b></td>
                                    <td data-title="Date Applied"><b>05/02/2022</b></td>
                                    <td data-title="Action">
                                        <button class="btn-success" type="button" id="btn-info" data-bs-toggle="modal" data-bs-target="#modal-editdetails" title="Edit Details"><i class="fa-solid fa-pen-to-square"></i></button>
                                        <button class="btn btn-danger" type="button" id="btn-info" data-bs-toggle="modal" data-bs-target="#exampleModal" title="Delete"><i class="bi bi-trash3"></i></button>
                                    </td>
                                </tr>
                                <tr class="tr">
                                    <td data-title="Employer"><b><i class="bi bi-person-circle"></i> Full Name</b></td>
                                    <td data-title="Company"><b>Company</b></td>
                                    <td data-title="Job Category"><b>Virtual Assistant</b></td>
                                    <td data-title="Date Applied"><b>04/04/2022</b></td>
                                    <td data-title="Action">
                                        <button class="btn-success" type="button" id="btn-info" data-bs-toggle="modal" data-bs-target="#modal-editdetails" title="Edit Details"><i class="fa-solid fa-pen-to-square"></i></button>
                                        <button class="btn btn-danger" type="button" id="btn-info" data-bs-toggle="modal" data-bs-target="#exampleModal" title="Delete"><i class="bi bi-trash3"></i></button>
                                    </td>
                                </tr>
                                <tr class="tr">
                                    <td data-title="Employer"><b><i class="bi bi-person-circle"></i> Full Name</b></td>
                                    <td data-title="Company"><b>Company</b></td>
                                    <td data-title="Job Category"><b>Customer Support</b></td>
                                    <td data-title="Date Applied"><b>05/17/2022</b></td>
                                    <td data-title="Action">
                                        <button class="btn-success" type="button" id="btn-info" data-bs-toggle="modal" data-bs-target="#modal-editdetails" title="Edit Details"><i class="fa-solid fa-pen-to-square"></i></button>
                                        <button class="btn btn-danger" type="button" id="btn-info" data-bs-toggle="modal" data-bs-target="#exampleModal" title="Delete"><i class="bi bi-trash3"></i></button>
                                    </td>
                                </tr>
                                <tr class="tr">
                                    <td data-title="Employer"><b><i class="bi bi-person-circle"></i> Full Name</b></td>
                                    <td data-title="Company"><b>Company</b></td>
                                    <td data-title="Job Category"><b>Customer Support</b></td>
                                    <td data-title="Date Applied"><b>05/17/2022</b></td>
                                    <td data-title="Action">
                                        <button class="btn-success" type="button" id="btn-info" data-bs-toggle="modal" data-bs-target="#modal-editdetails" title="Edit Details"><i class="fa-solid fa-pen-to-square"></i></button>
                                        <button class="btn btn-danger" type="button" id="btn-info" data-bs-toggle="modal" data-bs-target="#exampleModal" title="Delete"><i class="bi bi-trash3"></i></button>
                                    </td>
                                </tr>
                                <tr class="tr">
                                    <td data-title="Employer"><b><i class="bi bi-person-circle"></i> Full Name</b></td>
                                    <td data-title="Company"><b>Company</b></td>
                                    <td data-title="Job Category"><b>Customer Support</b></td>
                                    <td data-title="Date Applied"><b>05/17/2022</b></td>
                                    <td data-title="Action">
                                        <button class="btn-success" type="button" id="btn-info" data-bs-toggle="modal" data-bs-target="#modal-editdetails" title="Edit Details"><i class="fa-solid fa-pen-to-square"></i></button>
                                        <button class="btn btn-danger" type="button" id="btn-info" data-bs-toggle="modal" data-bs-target="#exampleModal" title="Delete"><i class="bi bi-trash3"></i></button>
                                    </td>
                                </tr>
                                <tr class="tr">
                                    <td data-title="Employer"><b><i class="bi bi-person-circle"></i> Full Name</b></td>
                                    <td data-title="Company"><b>Company</b></td>
                                    <td data-title="Job Category"><b>Customer Support</b></td>
                                    <td data-title="Date Applied"><b>05/17/2022</b></td>
                                    <td data-title="Action">
                                        <button class="btn-success" type="button" id="btn-info" data-bs-toggle="modal" data-bs-target="#modal-editdetails" title="Edit Details"><i class="fa-solid fa-pen-to-square"></i></button>
                                        <button class="btn btn-danger" type="button" id="btn-info" data-bs-toggle="modal" data-bs-target="#exampleModal" title="Delete"><i class="bi bi-trash3"></i></button>
                                    </td>
                                </tr>
                                <tr class="tr">
                                    <td data-title="Employer"><b><i class="bi bi-person-circle"></i> Full Name</b></td>
                                    <td data-title="Company"><b>Company</b></td>
                                    <td data-title="Job Category"><b>Customer Support</b></td>
                                    <td data-title="Date Applied"><b>05/17/2022</b></td>
                                    <td data-title="Action">
                                        <button class="btn-success" type="button" id="btn-info" data-bs-toggle="modal" data-bs-target="#modal-editdetails" title="Edit Details"><i class="fa-solid fa-pen-to-square"></i></button>
                                        <button class="btn btn-danger" type="button" id="btn-info" data-bs-toggle="modal" data-bs-target="#exampleModal" title="Delete"><i class="bi bi-trash3"></i></button>
                                    </td>
                                </tr>
                                <tr class="tr">
                                    <td data-title="Employer"><b><i class="bi bi-person-circle"></i> Full Name</b></td>
                                    <td data-title="Company"><b>Company</b></td>
                                    <td data-title="Job Category"><b>Customer Support</b></td>
                                    <td data-title="Date Applied"><b>05/17/2022</b></td>
                                    <td data-title="Action">
                                        <button class="btn-success" type="button" id="btn-info" data-bs-toggle="modal" data-bs-target="#modal-editdetails" title="Edit Details"><i class="fa-solid fa-pen-to-square"></i></button>
                                        <button class="btn btn-danger" type="button" id="btn-info" data-bs-toggle="modal" data-bs-target="#exampleModal" title="Delete"><i class="bi bi-trash3"></i></button>
                                    </td>
                                </tr>
                                <tr class="tr">
                                    <td data-title="Employer"><b><i class="bi bi-person-circle"></i> Full Name</b></td>
                                    <td data-title="Company"><b>Company</b></td>
                                    <td data-title="Job Category"><b>Customer Support</b></td>
                                    <td data-title="Date Applied"><b>05/17/2022</b></td>
                                    <td data-title="Action">
                                        <button class="btn-success" type="button" id="btn-info" data-bs-toggle="modal" data-bs-target="#modal-editdetails" title="Edit Details"><i class="fa-solid fa-pen-to-square"></i></button>
                                        <button class="btn btn-danger" type="button" id="btn-info" data-bs-toggle="modal" data-bs-target="#exampleModal" title="Delete"><i class="bi bi-trash3"></i></button>
                                    </td>
                                </tr>
                                <tr class="tr">
                                    <td data-title="Employer"><b><i class="bi bi-person-circle"></i> Full Name</b></td>
                                    <td data-title="Company"><b>Company</b></td>
                                    <td data-title="Job Category"><b>Customer Support</b></td>
                                    <td data-title="Date Applied"><b>05/17/2022</b></td>
                                    <td data-title="Action">
                                        <button class="btn-success" type="button" id="btn-info" data-bs-toggle="modal" data-bs-target="#modal-editdetails" title="Edit Details"><i class="fa-solid fa-pen-to-square"></i></button>
                                        <button class="btn btn-danger" type="button" id="btn-info" data-bs-toggle="modal" data-bs-target="#exampleModal" title="Delete"><i class="bi bi-trash3"></i></button>
                                    </td>
                                </tr>
                                <tr class="tr">
                                    <td data-title="Employer"><b><i class="bi bi-person-circle"></i> Full Name</b></td>
                                    <td data-title="Company"><b>Company</b></td>
                                    <td data-title="Job Category"><b>Customer Support</b></td>
                                    <td data-title="Date Applied"><b>05/17/2022</b></td>
                                    <td data-title="Action">
                                        <button class="btn-success" type="button" id="btn-info" data-bs-toggle="modal" data-bs-target="#modal-editdetails" title="Edit Details"><i class="fa-solid fa-pen-to-square"></i></button>
                                        <button class="btn btn-danger" type="button" id="btn-info" data-bs-toggle="modal" data-bs-target="#exampleModal" title="Delete"><i class="bi bi-trash3"></i></button>
                                    </td>
                                </tr>
                                <tr class="tr">
                                    <td data-title="Employer"><b><i class="bi bi-person-circle"></i> Full Name</b></td>
                                    <td data-title="Company"><b>Company</b></td>
                                    <td data-title="Job Category"><b>Customer Support</b></td>
                                    <td data-title="Date Applied"><b>05/17/2022</b></td>
                                    <td data-title="Action">
                                        <button class="btn-success" type="button" id="btn-info" data-bs-toggle="modal" data-bs-target="#modal-editdetails" title="Edit Details"><i class="fa-solid fa-pen-to-square"></i></button>
                                        <button class="btn btn-danger" type="button" id="btn-info" data-bs-toggle="modal" data-bs-target="#exampleModal" title="Delete"><i class="bi bi-trash3"></i></button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </section>
        </div> 
        <nav aria-label="Page navigation example">
            <div class="entries">
                </span>Show 1 to 3 of 3 entries</span>
            </div>
            <ul class="pagination">
                <li class="page-item"><a class="page-link bg-info text-dark" href="#">Previous</a></li>
                <li class="page-item"><a class="page-link text-dark" href="#">1</a></li>
                <li class="page-item"><a class="page-link text-dark" href="#">2</a></li>
                <li class="page-item"><a class="page-link text-dark" href="#">3</a></li>
                <li class="page-item"><a class="page-link bg-info text-dark" href="#">Next</a></li>
            </ul>
        </nav> 
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
    <div class="modal fade" id="modal-editdetails" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-body edit-detail">
                    <div class="container">
                        <form class="container"><br>
                            <h2 class="text-black text-center mt-2 fw-bold">EDIT DETAILS</h2>
                            <hr>
                            <div class="row mb-3 mt-0 ms-4 fw-bold">
                                <label for="employername" class="col-sm-3 ">Employer Name</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" id="employername">
                                </div>
                            </div>
                            <div class="row mb-3 mt-0 ms-4 fw-bold">
                                <label for="company" class="col-sm-3 ">Company</label>
                                <div class="col-sm-8">
                                    <input type="number" class="form-control" id="company">
                                </div>
                            </div>
                            <div class="row mb-3 mt-0 ms-4 fw-bold">
                                <label for="jobcategory" class="col-sm-3 ">Job Category</label>
                                <div class="col-sm-8">
                                    <input type="email" class="form-control" id="jobcategory">
                                </div>
                            </div>
                        </form> 
                    </div><br>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-success save">Save Details</button>
                        <button type="button" class="close btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>  
    </div>  
    
    <script>
        function openNav() {
        document.getElementById("mySidebar").style.left = "0";
        document.getElementById("main").style.marginLeft = "390px";
        }
        
        function closeNav() {
        document.getElementById("mySidebar").style.left = "-100%";
        document.getElementById("main").style.marginLeft= "230px";
        }
    </script>
</body>
</html>