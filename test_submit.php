<?php
$ch = curl_init();
$cfile = new CURLFile(realpath('./composer.json'), 'application/json', 'test.pdf');
$data = [
    'firstNameInput' => 'John',
    'fullNameInput' => 'John Doe',
    'phoneInput' => '1234567890',
    'emailInput' => 'john@example.com',
    'genderSelect' => 'male',
    'ageInput' => '30',
    'qualificationInput' => 'B.Ed',
    'degreeInput' => 'M.Ed',
    'experience' => '5 years',
    'resumeFile' => $cfile
];
curl_setopt($ch, CURLOPT_URL, 'http://localhost:8000/teacher-login');
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, ['Accept: application/json']);
$response = curl_exec($ch);
echo $response;
curl_close($ch);
