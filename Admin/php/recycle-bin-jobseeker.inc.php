<?php
//includes db connection from 2 folders back
include '../../php/db-connection.php';


//check if profile pic is not null && if file exists  then returns a string value of the profile picture location
function getProfilePicLoc($profilePic)
{
    if ($profilePic != NULL && file_exists("../../storage/" . $profilePic)) {
        return "../storage/" . $profilePic;
    } else {
        return "../storage/noProfilePic.png";
    }
}


// Convert old date time into textual format
function dateTimeConvertion($date)
{
    return date('M d, Y, h:i A', strtotime($date));
}


if (isset($_POST['loadData'])) {
    // Variables to store the data
    $page = 0;
    // Set the item limit per page
    $pageLimit = 2;
    //Variable to hold the querryu result
    $tableData = "";

    // Check if the page number is set
    if (isset($_POST['page'])) {
        // Set the page number
        $page = $_POST['page'];
        // Check if search is set
    } elseif (isset($_POST['search'])) {
        // Set the page number to 1
        $page = 1;
    } else {
        // Set the page number to 1
        $page = 1;
    }

    // Calculate the starting row
    $start = ($page - 1) * $pageLimit;

    // Check if search is present
    if (isset($_POST['search'])) {
        $search = $_POST['search'];
        $statement = "SELECT * FROM jobseeker_recylebin WHERE fullname LIKE '%$search%' OR mobile_number LIKE '%$search%' OR email LIKE '%$search%' LIMIT $start, $pageLimit";
        $paginationStatement = "SELECT * FROM jobseeker_reycyclebin WHERE fullname LIKE '%$search%' OR mobile_number LIKE '%$search%' OR email LIKE '%$search%'";
    } else {
        $statement = "SELECT * FROM jobseeker_recyclebin LIMIT $start, $pageLimit";
        $paginationStatement = "SELECT * FROM jobseeker_recyclebin";
    }
    //fetch all the jobseeker info from the database
    $checkJobseekerInfo = mysqli_query($conn, $statement);
    while ($row = mysqli_fetch_assoc($checkJobseekerInfo)) {
        $jobseekerId = $row['jobseeker_id'];
        $profilePicture = getProfilePicLoc($row['profile_picture']);
        $jobseekerId = $row['jobseeker_id'];
        $fullName = $row['fullname'];
        $resume = "../storage" . $row['resume'];
        $email = $row['email'];
        $number = $row['mobile_number'];
        $date = dateTimeConvertion($row['date_created']);
        //storing the data into $output.
        $tableData .=  "<tr class='tr'>
                            <td class='view-pp'><img src='{$profilePicture}' class='image' alt='' data-bs-toggle='modal' data-bs-target='#profile'></td>
                            <td>{$fullName}</td>
                            <td>{$number}</td>
                            <td>{$email}</td>
                            <td>{$date}</td>
                            <td>              
                            <button class='btn text-white btn-success' title='Restore' type='button' id='btn-info'><i class='fa-solid fa-clock-rotate-left'></i></button>
                            <button class='btn btn-danger' title='Delete' type='button' id='btn-info' data-bs-toggle='modal' data-bs-target='#exampleModal'><i class='bi bi-trash3'></i></button>
                            </td>
                        </tr>";
    }

    // Query to get the total number of employers
    $GetRecordsQuery = mysqli_query($conn, $paginationStatement);
    // Query to get the total number of employers
    $totalRecords = mysqli_num_rows($GetRecordsQuery);
    // Calculate the total number of employers
    $totalPages = ceil($totalRecords / $pageLimit);
    $pagination = "";

    // check if the page number is greater than 1
    if ($page >= 1) {
        // Set the previous page
        $previous = $page - 1;
        $pagination .=  "<li class='page-item' data-page='{$previous}'>
                                <a class='page-link bg-info text-dark'>Previous</a>
                            </li>";
    } else {
        $pagination .=  "<li class='page-item' data-page='{$previous}'>
                                <a class='page-link bg-info text-dark'>Previous</a>
                            </li>";
    }

    // Loop through the pages
    for ($i = 1; $i <= $totalPages; $i++) {
        $active = '';
        if ($page == $i) {
            $active = 'active';
        }
        $pagination .= "<li class='page-item {$active}' data-page='{$i}'>
                                    <a class='page-link text-dark'>{$i}</a>
                                </li>";
    }

    // Check if there are more than 1 page
    if ($page <= $totalPages) {
        // Set the next page
        $next = $page + 1;
        $pagination .=  "<li class='page-item' data-page='{$next}'>
                                    <a class='page-link bg-info text-dark'>Next</a>
                                </li>";
    } else {
        $pagination .=  "<li class='page-item' data-page='{$next}'>
                                <a class='page-link bg-info text-dark'>Next</a>
                            </li>";
    }

    // For entries display
    $entries_start = $start + 1;
    $entries_end = $start + $pageLimit;

    $entries = "<span>Show <b>{$entries_start}</b> to <b>{$entries_end}</b> of {$totalRecords} entries</span>";

    // Stored and return the displays for employer management page
    $response = array(
        'tableData' => $tableData,
        'pagination' => $pagination,
        'entries' => $entries
    );
    // Return this output variable to the ajax call
    echo json_encode($response);
}








?>