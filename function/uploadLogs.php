<?php
require_once 'session.php';
require_once 'db_connect.php';
$conn = OpenCon();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $student_id = $_SESSION['user_ID'];
    
    if (isset($_FILES['file']) && $_FILES['file']['error'] == 0) {
        
        $file_tmp_name = $_FILES['file']['tmp_name'];
        $file_name = $_FILES['file']['name'];
        $file_size = $_FILES['file']['size'];
        $file_type = $_FILES['file']['type'];

        $upload_dir = $_SERVER['DOCUMENT_ROOT'] . '/MMU-FYP-System-PART2-main/logs/';
        $file_path = $upload_dir . basename($file_name);

        // Check if file is a PDF (optional validation)
        if ($file_type == "application/pdf") {
            // Check if the directory exists, if not, create it
            if (!is_dir($upload_dir)) {
                mkdir($upload_dir, 0777, true);  // Creates the directory if it doesn't exist
            }

            if (move_uploaded_file($file_tmp_name, $file_path)) {
                $sql = "INSERT INTO meeting_log (file_address, student_ID) VALUES ('$file_path', '$student_id')";
                
                if ($conn->query($sql)) {
                    echo "<script>
                            alert('Log uploaded successfully!');
                            window.location.href = '../meeting.php';
                          </script>";
                } else {
                    echo "<script>
                            alert('Error: Could not save the log to the database.');
                            window.location.href = '../meeting.php';
                          </script>";
                }
            } else {
                echo "<script>
                        alert('Error: Failed to upload the file.');
                        window.location.href = '../meeting.php';
                      </script>";
            }
        } else {
            echo "<script>
                    alert('Error: Only PDF files are allowed.');
                    window.location.href = '../meeting.php';
                  </script>";
        }
    } else {
        echo "<script>
                alert('Error: No file uploaded or file upload error.');
                window.location.href = '../meeting.php';
              </script>";
    }
}

$conn->close();
?>
