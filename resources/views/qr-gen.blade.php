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
                <label for="period-dd">Select Module Period:</label>
                <select name="dropdown1" id="period-dd">
                    <option value="">-- Select --</option>
                    <option value="ValPer1">0750 - 0940</option>
                    <option value="ValPer2">0950 - 1140</option>
                    <option value="ValPer3">1150 - 1340</option>
                    <option value="ValPer4">1410 - 1600</option>
                    <option value="ValPer5">1610 - 1800</option>
                </select>
            </div>

            <div class="form-group">
                <label for="mod-major-dd">Select Module Major:</label>
                <select name="dropdown2" id="mod-major-dd">
                    <option value="">-- Select --</option>
                    <option value="ValModZC">ZC - Computer Science</option>
                    <option value="ValModZD">ZD - Data Science</option>
                    <option value="ValModZS">ZS - Cyber Security and Forensics</option>
                </select>
            </div>

            <div class="form-group">
                <label for="dropdown3">Select Module:</label>
                <select name="dropdown3" id="dropdown3">
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

    <script src="/js/qr-gen.js"></script>

    {{-- <script>
        let dropdown1 = document.getElementById("module-dd");
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
    </script> --}}
</body>
</html>
