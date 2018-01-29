<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <link rel="stylesheet" href="/css/croppie.css" />
    <!-- <link rel="stylesheet" href="/css/dribbble.css" /> -->

    <script>
        window.Scholio = <?php echo json_encode(['csrfToken' => csrf_token()]); ?>
    </script>
</head>
<body>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>

    <div id="app">
        <image-crop img-url="{{ auth()->user()->info->avatar }}" img-width="500" img-height="200"></image-crop>
    </div>

    <script src="/js/app.js"></script>
</body>
</html>

