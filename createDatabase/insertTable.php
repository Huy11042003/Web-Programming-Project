<?php

include ('DBconnection.php');

// insert table users

$imagePath = 'https://i.pinimg.com/originals/ee/f4/4c/eef44ce61bce4df845e5d3f390269c37.jpg';
$imageData = file_get_contents($imagePath);
$imageData = base64_encode($imageData); 

$sql = "INSERT INTO users(first_name, last_name, wanted_job, country, city, 
address, date_of_birth, upload_photo,email, profile)
VALUES ('Huy', 'Pham',  'software engineer', 'Vietnam', 'Ho Chi Minh', 
'1096 Lo Gom', '2003-04-11', 
'$imageData',
'huypham@gmail.com', 'I am a good timekeeper, always willing to learn new skills.')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

// insert table certification
$sql = "INSERT INTO user_certification(user_id, certi_name, 
certi_description)
VALUES (1, 'IELTS', 'IELTS 8.5')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

//insert table education
$sql = "INSERT INTO user_education(user_id, edu_school, 
edu_degree, edu_startDay, edu_endDay, edu_description)
VALUES (1, 'University of Technology', 'Normal degree', '2018-1-1', '2022-1-1', 
'GPA: 4.0')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

//insert table experience
$sql = "INSERT INTO user_experience(user_id, exp_job, exp_startDay, exp_endDay,
exp_description)
VALUES (1, 'FPT Intern', '2020-1-2', '2022-2-1', 'There is no description here'),
(1, 'Borsch Fresher', '2022-5-5', '2023-9-11', 'There is no description here')";

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
VALUES (1, '0909152634'),
(1, '0129486532')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}


//insert table skills
$sql = "INSERT INTO user_skills(user_id, skills)
VALUES (1, 'AI'),
(1, 'Database Analysis'),
(1, 'App Programming'),
(1, 'Web Programming')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$pass = md5('user1');
$sql = "INSERT INTO user_login(user_id, login_username, login_password) VALUES ('1', 'user1', '$pass');";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}


?>