<?php
include('../createDatabase/DBconnection.php');

session_start();
if (!isset($_SESSION['user_id'])) {
    header("Location: ../login.php");
    exit();
}

$targetUserId = $_SESSION['user_id'];
$listUser = [];
$listExpJob = [];
$listSkills = [];
$listCertificates = [];
$certificate = [
    'name',
    'description'
];
$Skill = [
    'name'
];
$expJob = [
    'startDate',
    'endDate',
    'job',
    'description'
];
$userEdu = [
    'startDate',
    'endDate',
    'degree',
    'school',
    'university',
    'GPA',
    'languages' => [],
    'phoneNumber' => []
];
$userSql = "SELECT * FROM users WHERE user_id = $targetUserId";
$userResult = $conn->query($userSql);

if ($userResult->num_rows > 0) {
    $userRow = $userResult->fetch_assoc();

    // Assign user data to variables
    $userId = $userRow["user_id"];
    $firstName = $userRow["first_name"];
    $lastName = $userRow["last_name"];
    $wantedJob = $userRow["wanted_job"];
    $country = $userRow["country"];
    $city = $userRow["city"];
    $address = $userRow["address"];
    $dateOfBirth = $userRow["date_of_birth"];
    $uploadPhoto = $userRow["upload_photo"];
    $email = $userRow["email"];
    $profile = $userRow["profile"];

    // Retrieve phone numbers
    $phoneSql = "SELECT phone_number FROM user_phoneNumber WHERE user_id = $targetUserId";
    $phoneResult = $conn->query($phoneSql);
    $phoneNumbers = [];

    if ($phoneResult->num_rows > 0) {
        while ($phoneRow = $phoneResult->fetch_assoc()) {
            $phoneNumbers[] = $phoneRow["phone_number"];
        }
    }

    // Retrieve skills
    $skillsSql = "SELECT skills FROM user_skills WHERE user_id = $targetUserId";
    $skillsResult = $conn->query($skillsSql);
    $skills = [];

    if ($skillsResult->num_rows > 0) {
        while ($skillsRow = $skillsResult->fetch_assoc()) {
            $skills[] = $skillsRow["skills"];
        }
    }

    // Retrieve certificates
    $certificatesSql = "SELECT certi_name, certi_description FROM user_certification WHERE user_id = $targetUserId";
    $certificatesResult = $conn->query($certificatesSql);
    $certificates = [];

    if ($certificatesResult->num_rows > 0) {
        while ($certificatesRow = $certificatesResult->fetch_assoc()) {
            $certificates[] = [
                'name' => $certificatesRow["certi_name"],
                'description' => $certificatesRow["certi_description"]
            ];
        }
    }

    // Print the user data
    // echo "User ID: $userId<br>";
    // echo "Name: $firstName $lastName<br>";
    // echo "Wanted Job: $wantedJob<br>";
    // echo "Country: $country<br>";
    // echo "City: $city<br>";
    // echo "Address: $address<br>";
    // echo "Date of Birth: $dateOfBirth<br>";
    // echo "Email: $email<br>";
    // echo "Profile: $profile<br>";
    // echo "Phone Numbers: " . implode(', ', $phoneNumbers) . "<br>";
    // echo "Skills: " . implode(', ', $skills) . "<br>";

    // echo "Certificates:<br>";
    // foreach ($certificates as $certificate) {
    //     echo "- Name: {$certificate['name']}, Description: {$certificate['description']}<br>";
    // }

    // echo '<img src="data:image/png;base64,'.$uploadPhoto.'"/>' alt='User Photo'><br>";
    // echo "<hr>";
} else {
    die("No records found for user ID $targetUserId");
}

// retrieve data from user_education
$sql = "SELECT * FROM user_education";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    while ($userRow = $result->fetch_assoc()) {
        $userEdu['startDate'] = $userRow['edu_startDay'];
        $userEdu['endDate'] = $userRow['edu_endDay'];
        $userEdu['degree'] = $userRow['edu_degree'];
        $userEdu['university'] = $userRow['edu_school'];
        array_push($listUser, $userEdu);
    }

    // foreach($listUser as $value){
    //     echo print_r($value);
    //     echo "</br>";
    // }
    // die();

}

// retrieve data from user_languages
$sql = "SELECT * FROM user_languages";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    while ($userRow = $result->fetch_assoc()) {
        array_push($userEdu['languages'], $userRow['languages']);
    }
}

// retrieve data from user_experience
$sql = "SELECT * FROM user_experience";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    while ($userRow = $result->fetch_assoc()) {
        $expJob['startDate'] = $userRow['exp_startDay'];
        $expJob['endDate'] = $userRow['exp_endDay'];
        $expJob['job'] = $userRow['exp_job'];
        $expJob['description'] = $userRow['exp_description'];
        array_push($listExpJob, $expJob);
    }
}

// retrieve data from user_skills
$sql = "SELECT * FROM user_skills";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    while ($userRow = $result->fetch_assoc()) {
        $Skill['name'] = $userRow['skills'];
        array_push($listSkills, $Skill);
    }
}

// retrieve data from user_phonenumber
$sql = "SELECT * FROM user_phonenumber";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    while ($userRow = $result->fetch_assoc()) {
        array_push($userEdu['phoneNumber'], $userRow['phone_number']);
    }
}

// retrieve data from user_certification
$sql = "SELECT * FROM user_certification";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    while ($userRow = $result->fetch_assoc()) {
        $certificate['name'] = $userRow['certi_name'];
        $certificate['description'] = $userRow['certi_description'];
        array_push($listCertificates, $certificate);
    }
}

$conn->close();
