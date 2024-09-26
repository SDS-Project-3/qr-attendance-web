<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>QR Code Generator</h1>

    <!-- The element where the QR code will be rendered -->
    <div id="qrcode"></div>

    <!-- Include QRCode.js -->
    <script src="https://cdn.jsdelivr.net/gh/davidshimjs/qrcodejs/qrcode.min.js"></script>

    <script src="{{ asset('js/qr-generation.js') }}"></script>
</body>
</html>