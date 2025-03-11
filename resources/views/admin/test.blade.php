<?php

$api_url = "https://script.google.com/macros/s/AKfycbz97kVA_pmzdilHRKnc-HDbvtAsozAs_rVpkSvvzJWOujS9rYJOaj2fessaeC_UiIUx/exec"; // Replace with your API URL

$message = "";
$alertType = ""; // Stores success type (success/error)

// Handle API Requests
function sendRequest($action, $data = []) {
    global $api_url;
    $params = http_build_query(array_merge(["action" => $action], $data));
    $url = "$api_url?$params";
    
    $response = file_get_contents($url);
    return json_decode($response, true);
}

// Handle form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $action = $_POST["action"];
    $name = $_POST["name"] ?? '';
    $email = $_POST["email"] ?? '';
    $age = $_POST["age"] ?? '';
    $row = $_POST["row"] ?? '';

    if ($action == "create") {
        sendRequest("create", ["name" => $name, "email" => $email, "age" => $age]);
        $message = "Record added successfully!";
        $alertType = "success";
    } elseif ($action == "update" && $row) {
        sendRequest("update", ["row" => $row, "name" => $name, "email" => $email, "age" => $age]);
        $message = "Record updated successfully!";
        $alertType = "success";
    } elseif ($action == "delete" && $row) {
        sendRequest("delete", ["row" => $row]);
        $message = "Record deleted successfully!";
        $alertType = "success";
    }
}

// Fetch data from API
$data = sendRequest("read");

?>

<!DOCTYPE html>
<html>

<head>
    <title>PHP + Google Sheets CRUD with SweetAlert</title>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
    function showAlert(message, type) {
        if (message) {
            Swal.fire({
                icon: type,
                title: message,
                showConfirmButton: false,
                timer: 2000
            });
        }
    }
    </script>
</head>

<body onload="showAlert('<?php echo $message; ?>', '<?php echo $alertType; ?>')">

    <h2>Google Sheets CRUD with PHP & SweetAlert</h2>

    <!-- Form for Create -->
    <form method="POST">
        <input type="hidden" name="action" value="create">
        <label>Name:</label>
        <input type="text" name="name" required>
        <label>Email:</label>
        <input type="email" name="email" required>
        <label>Age:</label>
        <input type="number" name="age" required>
        <button type="submit">Add</button>
    </form>

    <!-- Table to Show Data -->
    <h3>Data from Google Sheets</h3>
    <table border="1">
        <tr>
            <th>No</th>
            <th>Name</th>
            <th>Email</th>
            <th>Age</th>
            <th>Update</th>
            <th>Detele</th>
        </tr>
        <?php if (!empty($data)): ?>
        <?php foreach ($data as $index => $row): ?>
        <tr>
            <form method="POST" style="display:inline;">
                <td><?php echo $index + 1; ?> <input type="hidden" name="action" value="update">
                    <input type="hidden" name="row" value="<?php echo $index + 1; ?>">
                </td>

                <td> <input type="text" name="name" value="<?php echo $row[0]; ?>" required></td>
                <td> <input type="email" name="email" value="<?php echo $row[1]; ?>" required></td>
                <td> <input type="number" name="age" value="<?php echo $row[2]; ?>" required></td>
                <td><button type="submit">Update</button></td>
            </form>
            <td>
                <!-- Delete Form -->
                <form method="POST" style="display:inline;" onsubmit="return confirmDelete(this);">
                    <input type="hidden" name="action" value="delete">
                    <input type="hidden" name="row" value="<?php echo $index + 1; ?>">
                    <button type="submit">Delete</button>
                </form>
            </td>
        </tr>
        <?php endforeach; ?>
        <?php endif; ?>
    </table>

    <script>
    function confirmDelete(form) {
        Swal.fire({
            title: "Are you sure?",
            text: "You won't be able to revert this!",
            icon: "warning",
            showCancelButton: true,
            confirmButtonColor: "#3085d6",
            cancelButtonColor: "#d33",
            confirmButtonText: "Yes, delete it!"
        }).then((result) => {
            if (result.isConfirmed) {
                form.submit();
            }
        });
        return false;
    }
    </script>

</body>

</html>