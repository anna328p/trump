<?php
class NewUserForm extends DbConn
{
    public function createUser($usr, $uid, $email, $pw, $gender, $age , $location, $income, $party, $ethnicity)
    {
        try {

            $db = new DbConn;
            $tbl_members = $db->tbl_members;
            // prepare sql and bind parameters
            $stmt = $db->conn->prepare("INSERT INTO ".$tbl_members." (id, username, password, email, gender, age, location, income, party, ethnicity)
            VALUES (:id, :username, :password, :email, :gender, :age, :location, :income, :party, :ethnicity)");
            $stmt->bindParam(':id', $uid);
            $stmt->bindParam(':username', $usr);
            $stmt->bindParam(':email', $email);
            $stmt->bindParam(':password', $pw);
            $stmt->bindParam(':gender', $gender);
            $stmt->bindParam(':age', $age);
            $stmt->bindParam(':location', $location);
            $stmt->bindParam(':income', $income);
            $stmt->bindParam(':party', $party);
            $stmt->bindParam(':ethnicity', $ethnicity);
            $stmt->execute();

            $err = '';

        } catch (PDOException $e) {

            $err = "Error: " . $e->getMessage();

        }
        //Determines returned value ('true' or error code)
        if ($err == '') {

            $success = 'true';

        } else {

            $success = $err;

        };

        return $success;

    }
}
