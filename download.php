<?php
if (isset($_GET['url'])) {
    $videoUrl = $_GET['url'];
    $apiUrl = "https://aiovideodownloader.com/api/facebook?url=" . urlencode($videoUrl);

    $response = file_get_contents($apiUrl);
    $data = json_decode($response, true);

    if (isset($data['hd'])) {
        $downloadLink = $data['hd'];
        $thumbnail = $data['thumbnail'];
        $title = $data['title'];
    } else {
        $error = "Failed to fetch the HD download link. Please check the URL and try again.";
    }
} else {
    header("Location: index.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Download Facebook Video</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            background-color: #2c3e50;
            color: #ecf0f1;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            padding: 20px;
            box-sizing: border-box;
        }
        .container {
            background-color: #34495e;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
            width: 100%;
            max-width: 500px;
        }
        .btn-primary {
            background-color: #2980b9;
            border: none;
        }
        .btn-primary:hover {
            background-color: #3498db;
        }
        .thumbnail {
            width: 50%;
            height: 57vh;
            max-width: 400px;
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
<div class="container text-center">
    <?php if (isset($downloadLink)): ?>
        <h2 class="mt-3">Download Your Video</h2>
        <img src="<?php echo $thumbnail; ?>" alt="Thumbnail" class="thumbnail">
        <p><?php echo $title; ?></p>
        <a href="<?php echo $downloadLink; ?>" class="btn btn-primary" download>Download HD Video</a>
    <?php else: ?>
        <div class="alert alert-danger mt-3">
            <?php echo $error; ?>
        </div>
    <?php endif; ?>
    <a href="index.php" class="btn btn-secondary mt-3">Go Back</a>
</div>
</body>
</html>
