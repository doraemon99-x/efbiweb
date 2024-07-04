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
    </style>
</head>
<body>
<div class="container text-center">
    <h2 class="mt-3">Download Facebook Video</h2>
    <form action="download.php" method="GET" class="mt-3">
        <div class="form-group">
            <label for="videoUrl">Facebook Video URL</label>
            <input type="text" class="form-control" id="videoUrl" name="url" placeholder="Enter Facebook video URL" required>
        </div>
        <button type="submit" class="btn btn-primary">Download</button>
    </form>
</div>
</body>
</html>
