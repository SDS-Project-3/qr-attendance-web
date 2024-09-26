<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>QR Code Generator</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/qrcodejs/1.0.0/qrcode.min.js"></script>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }
        .form-group {
            margin-bottom: 15px;
        }
        select {
            width: 200px;
            padding: 8px;
            margin-right: 10px;
        }
        input[type="submit"] {
            padding: 10px 15px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        input[type="submit"]:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <main>
        <form action="/" id="qr-generation-form">
            <div class="form-group">
                <label for="dropdown1">Select Option 1:</label>
                <select name="dropdown1" id="dropdown1">
                    <option value="">-- Select --</option>
                    <option value="Value1">Option 1</option>
                    <option value="Value2">Option 2</option>
                    <option value="Value3">Option 3</option>
                </select>
            </div>
            <div class="form-group">
                <label for="dropdown2">Select Option 2:</label>
                <select name="dropdown2" id="dropdown2">
                    <option value="">-- Select --</option>
                    <option value="ValueA">Option A</option>
                    <option value="ValueB">Option B</option>
                    <option value="ValueC">Option C</option>
                </select>
            </div>
            <input type="submit" value="Generate QR Code" />
        </form>
        <br />
        <div id="qr-code"></div>
    </main>
    <script>
        let dropdown1 = document.getElementById("dropdown1");
        let dropdown2 = document.getElementById("dropdown2");
        let qrGenerationForm = document.getElementById("qr-generation-form");
        let qrCode;

        function generateQrCode(qrContent) {
            return new QRCode("qr-code", {
                text: qrContent,
                width: 256,
                height: 256,
                colorDark: "#000000",
                colorLight: "#ffffff",
                correctLevel: QRCode.CorrectLevel.H,
            });
        }

        qrGenerationForm.addEventListener("submit", function (event) {
            event.preventDefault();
            let selectedOption1 = dropdown1.value;
            let selectedOption2 = dropdown2.value;

            // Combine the selected options to form the QR code content
            let qrContent = `Option1: ${selectedOption1}, Option2: ${selectedOption2}`;

            if (qrCode == null) {
                qrCode = generateQrCode(qrContent);
            } else {
                qrCode.makeCode(qrContent);
            }
        });
    </script>
</body>
</html>
