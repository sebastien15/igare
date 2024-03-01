<?php
include_once 'config/database.php';

class CrudController {

    public function createRecord($data) {
        global $conn;

        $number = $data->number;
        $name = $data->name;
        // ... (include other fields)

        $sql = "INSERT INTO Bikes (number, name, bike_id, status, owner, agent_username, agent_nid, approved_motif, use_type, actions) 
                VALUES ('$number', '$name', $data->bike_id, '$data->status', '$data->owner', '$data->agent_username', '$data->agent_nid', '$data->approved_motif', '$data->use_type', '$data->actions')";

        if ($conn->query($sql) === TRUE) {
            return "Record created successfully";
        } else {
            return "Error: " . $sql . "<br>" . $conn->error;
        }
    }

    public function readRecords() {
        global $conn;

        $sql = "SELECT * FROM Bikes";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            $rows = array();
            while($row = $result->fetch_assoc()) {
                $rows[] = $row;
            }
            return $rows;
        } else {
            return [];
        }
    }

    public function updateRecord($data) {
        global $conn;

        $sql = "UPDATE Bikes SET 
                number='$data->number',
                name='$data->name',
                bike_id=$data->bike_id,
                status='$data->status',
                owner='$data->owner',
                agent_username='$data->agent_username',
                agent_nid='$data->agent_nid',
                approved_motif='$data->approved_motif',
                use_type='$data->use_type',
                actions='$data->actions'
                WHERE id=$data->id";

        if ($conn->query($sql) === TRUE) {
            return "Record updated successfully";
        } else {
            return "Error: " . $sql . "<br>" . $conn->error;
        }
    }

    public function deleteRecord($data) {
        global $conn;

        $sql = "DELETE FROM Bikes WHERE id=$data->id";

        if ($conn->query($sql) === TRUE) {
            return "Record deleted successfully";
        } else {
            return "Error: " . $sql . "<br>" . $conn->error;
        }
    }
}

// Usage example:
// $crudController = new CrudController();
// $data = json_decode(file_get_contents("php://input"));
// echo $crudController->createRecord($data);
// echo json_encode($crudController->readRecords());
// echo $crudController->updateRecord($data);
// echo $crudController->deleteRecord($data);

?>
