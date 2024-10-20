<?php
// Database connection configuration
$dbHost = 'localhost';
$dbUsername = 'root';
$dbPassword = '';
$dbName = 'dbc_pet_care';

// Create a database connection
$connection = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);
if ($connection->connect_error) {
    die("Connection failed: " . $connection->connect_error);
}

// Function to fetch chat messages from the database
function getChatMessages() {
    global $connection;
    $query = "SELECT * FROM chat_messages ORDER BY created_at ASC";
    $result = $connection->query($query);

    $messages = array();
    while ($row = $result->fetch_assoc()) {
        $messages[] = $row;
    }

    return $messages;
}

// Function to save a chat message to the database
function saveChatMessage($sender, $message) {
    global $connection;
    $sender = $connection->real_escape_string($sender);
    $message = $connection->real_escape_string($message);

    $query = "INSERT INTO chat_messages (sender, message) VALUES ('$sender', '$message')";
    $connection->query($query);
}

// Handle the form submission
if (isset($_POST['sender']) && isset($_POST['message'])) {
    $sender = $_POST['sender'];
    $message = $_POST['message'];

    saveChatMessage($sender, $message);
}

// Fetch the chat messages from the database
$chatMessages = getChatMessages();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Chat Page</title>
    <style>
        .message {
            margin-bottom: 10px;
        }
        .sender {
            font-weight: bold;
        }
        .timestamp {
            color: #888;
            font-size: 0.8em;
        }
    </style>
</head>
<body>
    <h1>Chat Page</h1>

    <div id="chat-box">
        <?php foreach ($chatMessages as $chatMessage): ?>
            <div class="message">
                <span class="sender"><?php echo $chatMessage['sender']; ?>:</span>
                <span class="message-text"><?php echo $chatMessage['message']; ?></span>
                <span class="timestamp"><?php echo $chatMessage['created_at']; ?></span>
            </div>
        <?php endforeach; ?>
    </div>

    <form method="post" action="chat.php">
        <input type="text" name="sender" placeholder="Your Name" required>
        <input type="text" name="message" placeholder="Your Message" required>
        <button type="submit">Send</button>
    </form>
</body>
</html>
