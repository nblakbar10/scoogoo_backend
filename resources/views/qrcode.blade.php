<html>
<head>
    <title>QR Code</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
<body>
    <!-- <img id="qrcode" src="{{ $qrCode }}" alt="QR Code"> -->
    {{ $qrCode }}
    <script>
        // Auto-refresh the page every 30 seconds
        setInterval(function () {
            location.reload();
        }, 2000);
    </script>
</body>
</html>