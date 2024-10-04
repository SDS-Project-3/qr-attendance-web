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
                <select name="module-major" id="mod-major-dd">
                    <option value="">-- Select --</option>
                    <option value="ZA">ZA - Artificial Intelligence & Robotics</option>
                    <option value="ZC">ZC - Computer Science</option>
                    <option value="ZD">ZD - Data Science</option>
                    <option value="ZI">ZI - Applied Artificial Intelligence</option>
                    <option value="ZS">ZS - Cybersecurity & Forensics</option>
                    <option value="ZZ">ZZ - Degree Core</option>
                </select>
            </div>

            {{-- ! How to make that, when a value from mod-major-dd is selected, relevant modules come out --}}
            <div class="form-group">
                <label for="module-dd">Select Module:</label>
                <select name="module-name" id="module-dd">
                    <option value="">-- Select --</option>
                    <option value="Val">Option A</option>
                    <option value="ValueB">Option B</option>
                    <option value="ValueC">Option C</option>
                </select>
            </div>

            <div class="form-group">
                <label for="period-dd">Select Module Period:</label>
                <select name="module-period" id="period-dd">
                    <option value="">-- Select --</option>
                    <option value="AM1">0750 - 0940</option>
                    <option value="AM2">0950 - 1140</option>
                    <option value="AN0">1150 - 1340</option>
                    <option value="PM1">1410 - 1600</option>
                    <option value="PM2">1610 - 1800</option>
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
