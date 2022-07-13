<?php
    session_start();
    //includes db connection from 2 folders back
    include '../../php/db-connection.php';

    function dateTimeConvertion($date){
        return date('M d, Y, h:i A', strtotime($date));
    }
    $tableData = "";
    $getPosts = mysqli_query($conn, "SELECT * FROM `jobpost`");
    while($row = mysqli_fetch_assoc($getPosts)){
        $uid = $row['postedby_uid'];
        $postId = $row['post_iud'];
        $getEmployerName = mysqli_query($conn, "SELECT * FROM `employer` WHERE `employer_id` = '$uid'");
        while($name = mysqli_fetch_assoc($getEmployerName)){
        $employer = $name['employer_name'];}
        $companyName = $row['company_name'];
        $jobCategory = $row['job_category'];
        $date = dateTimeConvertion($row['date_posted']);
        $tableData .=  "<tr class='tr'>
                        <td>{$employer}</td>
                        <td>{$companyName}</td>
                        <td>{$jobCategory}</td>
                        <td>{$date}</td>
                        <td>
                            <button class='btn-success' type='button' id='btn-info' data-bs-toggle='modal' data-bs-target='#modal-editdetails' title='Edit Details'><i class='fa-solid fa-pen-to-square'></i></button>
                            <button class='btn btn-danger' type='button' id='btn-info' data-id='{$postId}' data-bs-toggle='modal' data-bs-target='#modal-delete' title='Delete'><i class='bi bi-trash3'></i></button>
                        </td>";
                    }
                    $response = array('tableData' => $tableData);
    echo json_encode($response);
    
    if (isset($_POST['deleteJobseeker'])) {
    //$postUid = mysqli_real_escape_string($conn, $postId);
    
    //deleting the jobseeker and moving it to recycle bin
    $fetchDeletedQuery = mysqli_query($conn, "SELECT * FROM `jobpost` WHERE `post_iud` = '$postId'");
    $row = mysqli_fetch_assoc($fetchDeletedQuery);
    $companyName = $row['company_name'];
    $jobTitle = $row['job_title'];
    $employment = $row['employment_type'];
    $jobCategory = $row['job_category'];
    $jobDescription = $row['job_description'];
    $salary = $row['salary'];
    $employerEmail = $row['employer_email'];
    $primarySkill = $row['primary_skill'];
    $secondarySkill = $row['secondary_skill'];
    $postedby = $row['postedby_uid'];
    $date = dateTimeConvertion($row['date_posted']);
        
    mysqli_query($conn, "INSERT INTO `jobpost_recycler`(
    `company_name`,
    `job_title`,
    `employment_type`,
    `job_category`,
    `job_description`,
    `salary`,
    `employer_email`,
    `primary_skill`,
    `secondary_skill`,
    `postedby_uid`,
    `date_posted`
)
VALUES(
    '$companyName',
    '$jobTitle',
    '$employment',
    '$jobCategory',
    '$jobDescription',
    '$salary',
    '$employerEmail',
    '$primarySkill',
    '$secondarySkill',
    '$postedby',
    '$date'
)");

    mysqli_query($conn, "DELETE FROM `jobpost` WHERE `post_iud` = '$postId'");
    
}