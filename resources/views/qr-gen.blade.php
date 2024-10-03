<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>QR Code Generator</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/qrcodejs/1.0.0/qrcode.min.js"></script>
    <link rel="stylesheet" href="{{asset('css/qr-gen.css')}}">
</head>
<body>
    <main>

        <form action="/" id="qr-generation-form">

            <div class="form-group">
                <label for="mod-major-dd">Select Module Major:</label>
                <select name="dropdown2" id="mod-major-dd">
                    <option value="">-- Select --</option>
                    <option value="ValZA">ZA - Artificial Intelligence & Robotics</option>
                    <option value="ValZC">ZC - Computer Science</option>
                    <option value="ValZD">ZD - Data Science</option>
                    <option value="ValZI">ZI - Applied Artificial Intelligence</option>
                    <option value="ValZS">ZS - Cybersecurity & Forensics</option>
                </select>
            </div>

            {{-- ! How to make that, when a value from mod-major-dd is selected, relevant modules come out --}}
            <div class="form-group">
                <label for="module-dd">Select Module:</label>
                <select name="dropdown3" id="module-dd">
                    <option value="">-- Select --</option>
                    <option value="Val">Option A</option>
                    <option value="ValueB">Option B</option>
                    <option value="ValueC">Option C</option>
                </select>
            </div>

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
            

            <input type="submit" value="Generate QR Code" />

        </form>

        <br />
        <div id="qr-code"></div>

    </main>

    <script src="/js/qr-gen.js"></script>
</body>
</html>
