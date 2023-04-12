<?php
class User
{
    protected $Conn;
    public function __construct($Conn)
    {
        $this->Conn = $Conn;
    }
    public function createUser($user_data)
    {
        $sec_password = password_hash($user_data['password'], PASSWORD_DEFAULT);
        $query = "INSERT INTO users (fname, lname, email, password, institution_id, course_id, user_image) VALUES (:fname, :lname, :email, :password, :institution_id, :course_id, :user_image)";
        $stmt = $this->Conn->prepare($query);
        return $stmt->execute(array(
            'fname' => $user_data['fname'],
            'lname' => $user_data['lname'],
            'email' => $user_data['email'],
            'password' => $sec_password,
            'institution_id' => $user_data['school'],
            'course_id' => $user_data['course'],
            'user_image' => $user_data['user_image']
        ));
    }
    public function checkUserExists($user_data)
    {
        $query = "SELECT * FROM users WHERE email = :email";
        $stmt = $this->Conn->prepare($query);
        $stmt->execute(array('email' => $user_data['email']));
        return $stmt->fetch();
    }
    public function loginUser($email, $password)
    {
        $query = "SELECT * FROM users WHERE email = :email";
        $stmt = $this->Conn->prepare($query);
        $stmt->execute(array('email' => $email));
        $attempt = $stmt->fetch();
        if ($attempt && password_verify($password, $attempt['password'])) {
            return $attempt;
        } else {
            return false;
        }
    }
    public function getUser($user_id)
    {
        $query = "SELECT * FROM users WHERE user_id = :user_id";
        $stmt = $this->Conn->prepare($query);
        $stmt->execute(array(':user_id' => $user_id));
        return $stmt->fetch();
    }
    public function changeUserPassword($current_pass, $new_pass)
    {

        if (!password_verify($current_pass, $_SESSION['user_data']['password'])) {
            // wrong pass
            return [false, "Current password is incorrect"];
        }
        $new_sec_pass = password_hash($new_pass, PASSWORD_DEFAULT);
        
        $query = "UPDATE users SET password = :password WHERE user_id = :user_id";

        $stmt = $this->Conn->prepare($query);

        $stmt->execute(array(':password' => $new_sec_pass, ':user_id' => $_SESSION['user_data']['user_id']));
        
        return true;
    }
    public function validateUserLogin($post)
    {
        if (!$post['email']) {
            $error = "Email not set";
        } else if (!$post['password']) {
            $error = "Password not set";
        } else if (strlen($post['password']) < 8) {
            $error = "Password must be at least 8 characters in length";
        } else if (!filter_var($post['email'], FILTER_VALIDATE_EMAIL)) {
            $error = "Email is not valid";
        }
        return $error;
    }
    public function validateUserSignup($_Post)
    {
        if ($_POST['add-school'] == '') {
            if (!$_POST['schools'] || $_POST['schools'] == "null") {
                $error = "Please select a school";
            } else {
                $school = $_POST['schools'];
            }
        } else {
            $school = $_POST['add-school'];
        };
        if ($_POST['add-course'] == '') {
            if (!$_POST['courses'] || $_POST['courses'] == "null") {
                $error = "Please select a course";
            } else {
                $course = $_POST['courses'];
            }
        } else {
            $course = $_POST['add-course'];
        };
        if (!$_POST['email']) {
            $error = "Email not set";
        } else if (!$_POST['password']) {
            $error = "Password not set";
        } else if (!$_POST['password_confirm']) {
            $error = "Confirm password not set";
        } else if ($_POST['password'] != $_POST['password_confirm']) {
            $error = "Password and confirm password must match";
        } else if (strlen($_POST['password']) < 8) {
            $error = "Password must be at least 8 characters in length";
        } else if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
            $error = "Email is not valid";
        } else {
            $_POST['school'] = $school;
            $_POST['course'] = $course;
        }
        $_POST['error'] = $error;
        return $_POST;
    }
    public function changeUserImage($image)
    {
        $query = "UPDATE users SET user_image = :user_image WHERE user_id = :user_id";
        $stmt = $this->Conn->prepare($query);
        $stmt->execute(array('user_image' => $image, 'user_id' => $_SESSION['user_data']['user_id']));
        return true;
    }
}
