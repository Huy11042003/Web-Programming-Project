<?php

include ('DBconnection.php');

// insert table users
$imagePath = 'https://i.pinimg.com/originals/ee/f4/4c/eef44ce61bce4df845e5d3f390269c37.jpg';
$imageData = file_get_contents($imagePath);
$imageData = base64_encode($imageData); 

$sql = "INSERT INTO users(first_name, last_name, wanted_job, country, city, 
address, date_of_birth, upload_photo,email, profile)
VALUES ('Hieu', 'Nguyen',  'software engineer', 'Vietnam', 'Ho Chi Minh', 
'23 Hai Ba Trung street', '2003-01-01', 
'$imageData',
'hieu.nguyenminh', 'I am tired of coding')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}


// insert table certification
$sql = "INSERT INTO user_certification(user_id, certi_name, 
certi_description)
VALUES (1, 'Ielts', 'Ielts band 8.5')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

//insert table education
$sql = "INSERT INTO user_education(user_id, edu_school, 
edu_degree, edu_startDay, edu_endDay, edu_description)
VALUES (1, 'Back Khoa University', 'Normal degree', '2018-1-1', '2022-1-1', 
'GPA: 4.0'),
(1, 'Kinh te University', 'Normal degree', '2017-2-2', '2023-4-4', 
'GPA: 3.0')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

//insert table experience
$sql = "INSERT INTO user_experience(user_id, exp_job, exp_startDay, exp_endDay,
exp_description)
VALUES (1, 'FPT newbee', '2022-1-2', '2023-2-1', 'There is no description here'),
(1, 'TGDD newbee', '2022-1-2', '2023-2-1', 'There is no description here')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

//insert table languages
$sql = "INSERT INTO user_languages(user_id, languages)
VALUES (1, 'English'),
(1, 'Chinese'),
(1, 'Vietnamese')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

//insert table phoneNumber
$sql = "INSERT INTO user_phoneNumber(user_id, phone_number)
VALUES (1, '0112012564'),
(1, '0954312534'),
(1, '0182348694')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}


//insert table skills
$sql = "INSERT INTO user_skills(user_id, skills)
VALUES (1, 'Tin hoc Van phong'),
(1, 'Communication'),
(1, 'PHP'),
(1, 'Javascript')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}
?>