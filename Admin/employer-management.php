<!doctype html>
<html lang="en">
  <head>
    
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <script src="https://kit.fontawesome.com/e5ed048aee.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="css/employer-management.css">
    <title>Employer Management</title>
  </head>
  <body>
    <div class="color-overlay">
      <div class="container-fluid">
          <nav class="navbar navbar-expand-lg  h6 navbar-light bg fixed-top mx-0 shadow-sm">
                  <a href="#" class="navbar-brand ms-5">
                  <img src="image/flogo.png" alt="Job Portal Logo" width="80" height="60"></a>
                  <h6 class="position-relative" style="font-size: 22px;color: #372732; margin-left: 700px; font-weight: 700; text-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);">Employers Management</h6>
              
              <div class="collapse navbar-collapse" id="toggleMobileMenu">
                  <ul class="navbar-nav ms-auto  text-center">
                          <li class="nav-item dropdown me-5">
                              <a class="nav-link dropdown-toggle fs-5" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="bi bi-person-circle" style="font-size:30px;"></i></a>
                          <ul class="dropdown-menu account-drop dropdown-menu-end" aria-labelledby="navbarDropdown" >
                              <li><a class="dropdown-item  fs-5 text-white" href="#"><i class="bi bi-person-circle" style="font-size:30px;"></i> My Profile</a></li>
                              <li><hr class="dropdown-divider bg-white"></li>
                              <li><a class="dropdown-item fs-5 text-white"href="#">Sign Out</a></li>
                          </ul>
                  </ul>
              </div>
          </nav>         
      </div>
    </div>
    <br>
    <div class="sidebar"><br><br>
      <a href="dashboard.html" ><i class="bi bi-speedometer"></i> Dashboard</a><br>
    <a href="employer-management.html" style="background-color: #00C2D6;"><i class="bi bi-person-workspace"></i> Employers Management</a><br>
    <a href="jobseekermanagement.html"><i class="bi bi-search"></i> Job Seeker Management</a><br>
    <a href="jobpostmanagement.html"><i class="bi bi-file-earmark-post-fill"></i> Job Post Management</a><br>
    <a href="jobcategoriesmanagement.html"><i class="bi bi-briefcase"></i> Job Categories Management</a><br>
    </div>
    <br><br><br>
    <div style="width: 1450px; height: 800px;  margin-left: 390px;" class="container-fluid p-md-5 mt-4 bg-white">
      <form class="d-flex">      
        <input style="border-radius: 0%; border-top-left-radius: 10px; border-bottom-left-radius: 10px; width: 300px;" class="form-control icon" type="search" placeholder="Search an employer" aria-label="Search">
        <button class="btn text-dark fw-bold search" type="submit"><i class="bi bi-search"></i></button>
      </form>
            <form id="main-form">
                <div style="width: inherit;" class=" col-auto ">
                  <section class="type p-1">
                      <div class="bg-color-header text-center">
                        <h3 style="padding:10px; background: #ffff;">
                          
                          
                        
                        </h3>
                      </div>
                      <div class="table-responsive" id="no-more-tables" >
                          <table class="table basic-table table-headers table table-hover" >
                            
                              <thead style="background: rgba(0, 194, 214, 0.5);" class="text-dark text-center" id="title-sub" style="text-align:center ;">
                                  <tr>
                                      <th>Company Logo</th>
                                      <th>Company</th>
                                      <th>Employer Name</th>
                                      <th>Employer Position</th>
                                      <th>Email address</th>
                                      <th>DTI Business Permit</th>
                                      <th>Status</th>      
                                      <th>Action</th>
                                  </tr>
                              </thead>
                              
                              <tbody class="bg-light text-dark" id="body-h" style="text-align: center; line-height: 80px; border: 0;" >
                                  <tr style="height: 6rem; border: none; box-shadow: none;width: 6rem; border: 0;">
                                      <td data-title="companylogo"><b><img src="image/comlogo.png" alt="" style="width: 60px; cursor: pointer;" data-bs-toggle="modal" data-bs-target="#companylogo"></b></td>
                                      <td data-title="companyname" > Factset</td>
                                      <td data-title="employername">Monkey D. Luffy</td>
                                      <td data-title="employerposition">Pirate King</td>
                                      <td data-title="emailaddress" >monkeydluffy@gmail.com</td>
                                      <td data-title="dtibusinesspermit"><i class="fa-solid fa-file-lines me-1"></i><a href="#">Dtibusinesspermit.pdf</a></td>
                                      <td data-title="status">Verified</td> 
                                      <td data-title="Action" style="width: 250px;">
                                        <button style="width: 40px; border: 0;" class="btn-primary" type="button" id="btn-info" data-bs-toggle="modal" data-bs-target="#modal-viewdetails"><i class="fa-solid fa-eye"></i></button>
                                        <button style="width: 40px; border: 0;" class="btn-success" type="button" id="btn-info" data-bs-toggle="modal" data-bs-target="#modal-editdetails"><i class="fa fa-pen-to-square"></i></button>
                                        
                                        <button class="btn btn-danger" type="button" id="btn-info" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="bi bi-trash3"></i></button></td>
                                  </tr>
                                </tbody>
                                <tbody class="bg-light text-dark" id="body-h" style="text-align: center; line-height: 80px;" >
                                  <tr style="height: 6rem; border: none; box-shadow: none;width: 6rem;">
                                    <td data-title="companylogo"><b><img src="image/smlogo.png" alt="" style="width: 60px; cursor: pointer;" data-bs-toggle="modal" data-bs-target="#companylogo"></b></td>
                                    <td data-title="companyname" >SM Prime</td>
                                    <td data-title="employername">Roronoa Zoro</td>
                                    <td data-title="employerposition">Swordsman</td>
                                    <td data-title="emailaddress" >roronoazoro@gmail.com</td>
                                    <td data-title="dtibusinesspermit"><i class="fa-solid fa-file-lines me-1"></i><a href="#">Dtibusinesspermit.pdf</a></td>
                                    <td data-title="status">Verified</td> 
                                    
                                    <td data-title="Action" style="width: 250px;">
                                      <button style="width: 40px; border: 0;" class="btn-primary" type="button" id="btn-info" data-bs-toggle="modal" data-bs-target="#modal-viewdetails"><i class="fa-solid fa-eye"></i></button>
                                      <button style="width: 40px; border: 0;" class="btn-success" type="button" id="btn-info" data-bs-toggle="modal" data-bs-target="#modal-editdetails"><i class="fa-solid fa-pen-to-square"></i></button>
                                      
                                      <button class="btn btn-danger" type="button" id="btn-info" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="bi bi-trash3"></i></button></td>
                                </tr>
                              </tbody>
                                <tbody class="bg-light text-dark" id="body-h" style="text-align: center; line-height: 80px;" >
                                  <tr style="height: 6rem; border: none; box-shadow: none;width: 6rem;">
                                    <td data-title="companylogo"><b><img src="image/roblogo.png" alt="" style="width: 60px; cursor: pointer;" data-bs-toggle="modal" data-bs-target="#companylogo"></b></td>
                                    <td data-title="companyname" >Robinson</td>
                                    <td data-title="employername">Nico Robin</td>
                                    <td data-title="employerposition">Archeologist</td>
                                    <td data-title="emailaddress" >nicorobin@gmail.com</td>
                                    <td data-title="dtibusinesspermit"><i class="fa-solid fa-file-lines me-1"></i><a href="#">Dtibusinesspermit.pdf</a></td>
                                    <td data-title="status">Verified</td> 
                                    
                                    <td data-title="Action" style="width: 250px;">
                                      <button style="width: 40px; border: 0;" class="btn-primary" type="button" id="btn-info" data-bs-toggle="modal" data-bs-target="#modal-viewdetails"><i class="fa-solid fa-eye"></i></button>
                                      <button style="width: 40px; border: 0;" class="btn-success" type="button" id="btn-info" data-bs-toggle="modal" data-bs-target="#modal-editdetails"><i class="fa-solid fa-pen-to-square"></i></button>
                                      
                                      <button class="btn btn-danger" type="button" id="btn-info" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="bi bi-trash3"></i></button></td>
                                </tr>
                              </tbody>
                          </table>
                        
                      </div>
                   
                  </section>
                </div>  
              </form>

    
  </div>
  <!--Company logo modal-->
  <div class="modal fade" id="companylogo" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h3 style="color: #00C2D6;">Company Logo</h3>
         
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body" style="margin-left: 110px;">
          <img src="image/comlogo.png" style="width: 250px;" alt="">
          
        </div>
        
      </div>
    </div>
  </div>

  

  
<!--Delete modal-->
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title ms-5" id="exampleModalLabel">Are you sure you want to delete this?</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body" style="margin-left: 170px;">
          <button type="button" class="btn btn-success" style="width: 70px;">Yes</button>
          <button type="button" class="btn btn-danger" style="width: 70px;">No</button>
        </div>
        
      </div>
    </div>
  </div>
<!--View detail modal-->
  <div class="modal fade" id="modal-viewdetails" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title ms-5" id="exampleModalLabel"></h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <div class="container" style="width:700px;height: 700px;background-color: #FDF6EC;">
            <form class="container">

              <h2 class="text-black text-center mt-0 fw-bold">COMPANY DETAILS</h2>
              <hr>
              <div class="row mb-3 mt-0 ms-4 fw-bold">
                  <label for="companyaddress" class="col-sm-3 ">Company Address:</label>
                  <div class="col-sm-8">
                      <h5 id="companyaddress">Dasmarinas City, Cavite, Philippines</h5>
                  </div>
              </div>
              <div class="row mb-3 mt-0 ms-4 fw-bold">
                <label for="companyceoname" class="col-sm-3 ">Company CEO Name:</label>
                <div class="col-sm-8">
                    <h5 id="companyceoname">Monkey D. Luffy</h5>
                </div>
              </div>
              <div class="row mb-3 mt-0 ms-4 fw-bold">
                <label for="companysize" class="col-sm-3 ">Company Size:</label>
                <div class="col-sm-8">
                    <h5 id="companysize">50</h5>
                </div>
              </div>
              <div class="row mb-3 mt-0 ms-4 fw-bold">
                <label for="companyrevenue" class="col-sm-3 ">Company Revenue:</label>
                <div class="col-sm-8">
                    <h5 id="companyrevenue">$100,000</h5>
                </div> 
              </div>
              <div class="row mb-3 mt-0 ms-4 fw-bold">
                <label for="industry" class="col-sm-3 ">Industry:</label>
                <div class="col-sm-8">
                    <h5 id="industry">Engineering</h5>
                </div> 
              </div>
              <div class="row mb-3 mt-0 ms-4 fw-bold">
                <label for="companynumber" class="col-sm-3 ">Company Number:</label>
                <div class="col-sm-8">
                    <h5 id="companynumber">29271922459</h5>
                </div> 
              </div>
              <div class="row mb-3 mt-0 ms-4 fw-bold">
                <label for="companyemail" class="col-sm-3 ">Company Email:</label>
                <div class="col-sm-8">
                    <h5 id="companyemail">factset@gmail.com</h5>
                </div> 
              </div>
              <div class="row mb-3 mt-0 ms-4">
                <label for="companydescription" class="col-sm-3 fw-bold ">Company Description:</label>
                <div class="col-sm-8">
                    <p id="companyrdescription">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nisi voluptas deserunt saepe laborum accusamus laboriosam id porro inventore quos est.</p>
                </div> 
              </div>
              <div class="row mb-3 mt-0 ms-4">
                <label for="datecreated" class="col-sm-3 fw-bold">Date/Time Created:</label>
                <div class="col-sm-8">
                    <h5 id="datecreated">May 19, 2022</h5>
                </div> 
              </div>

             
            </form>
          </div>
        </div>
        <div class="modal-footer">
         
          <button type="button" class="btn btn-secondary" style="width: 70px;" data-bs-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
<!--Edit detail modal-->
  <div class="modal fade" id="modal-editdetails" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title ms-5" id="exampleModalLabel"></h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <div class="container" style="width:700px;height: 800px;background-color: #FDF6EC;">
            <form class="container">

              <h2 class="text-black text-center mt-0 fw-bold">COMPANY DETAILS</h2>
              <hr>
              <div class="row mb-3 mt-0 ms-4 fw-bold">
                  <label for="companyaddress" class="col-sm-3 ">Company Address:</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" id="companyaddress">
                  </div>
              </div>
              <div class="row mb-3 mt-0 ms-4 fw-bold">
                <label for="companyceoname" class="col-sm-3 ">Company CEO Name:</label>
                <div class="col-sm-8">
                  <input type="text" class="form-control" id="companyceoname">
                </div>
              </div>
              <div class="row mb-3 mt-0 ms-4 fw-bold">
                <label for="companysize" class="col-sm-3 ">Company Size:</label>
                <div class="col-sm-8">
                  <input type="text" class="form-control" id="companysize">
                </div>
              </div>
              <div class="row mb-3 mt-0 ms-4 fw-bold">
                <label for="companyrevenue" class="col-sm-3 ">Company Revenue:</label>
                <div class="col-sm-8">
                  <input type="text" class="form-control" id="companyrevenue">
                </div> 
              </div>
              <div class="row mb-3 mt-0 ms-4 fw-bold">
                <label for="industry" class="col-sm-3 ">Industry:</label>
                <div class="col-sm-8">
                  <input type="text" class="form-control" id="industry">
                </div> 
              </div>
              <div class="row mb-3 mt-0 ms-4 fw-bold">
                <label for="companynumber" class="col-sm-3 ">Company Number:</label>
                <div class="col-sm-8">
                  <input type="text" class="form-control" id="companynumber">
                </div> 
              </div>
              <div class="row mb-3 mt-0 ms-4 fw-bold">
                <label for="companyemail" class="col-sm-3 ">Company Email:</label>
                <div class="col-sm-8">
                  <input type="text" class="form-control" id="companyemail">
                </div> 
              </div>
              <div class="row mb-3 mt-0 ms-4">
                <label for="companydescription" class="col-sm-3 fw-bold ">Company Description:</label>
                <div class="col-sm-8">
                  <textarea class="form-control" placeholder="Description Here" style="width: 100%;" id="companydescription" rows="5"></textarea>
                </div> 
              </div>
              <div class="row mb-3 mt-0 ms-4">
                <label for="datecreated" class="col-sm-3 fw-bold">Date/Time Created:</label>
                <div class="col-sm-8">
                  <input type="text" class="form-control" id="datecreated">
                </div> 
              </div>
              
                <div class="row mb-3 mt-0 ms-4">
                    <label for="verify" class="col-sm-3 fw-bold">Verification Status:</label>
                    <div class="col-sm-8 " style="margin-left:0px;">
                      <select class="form-select" aria-label="Default select example" id="verify">
                        
                        <option value="1">Verified</option>
                        <option value="2">Not verified</option>
                  
                      </select>
                    </div>
                </div>
     
            </form>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-success">Save Details</button>
          <button type="button" class="btn btn-secondary" style="width: 70px;" data-bs-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>