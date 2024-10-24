<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>QR Code Generator</title>

    <!-- Select2 CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css" rel="stylesheet" />

    <!-- jQuery and Select2 JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/qrcodejs/1.0.0/qrcode.min.js"></script>
    <link rel="stylesheet" href="{{asset('css/qr-gen.css')}}">
    
</head>
<body>
    <main>

        <form action="/create-qr" id="qr-generation-form">

            <div class="form-group">
                <label for="mod-major-dd">Select Module Major:</label>
                <select name="module-major" id="mod-major-dd" class="dd-select">
                    <option value="">-- Select --</option>
                    <option value="ZA">ZA - Artificial Intelligence & Robotics</option>
                    <option value="ZC">ZC - Computer Science</option>
                    <option value="ZD">ZD - Data Science</option>
                    <option value="ZI">ZI - Applied Artificial Intelligence</option>
                    <option value="ZS">ZS - Cybersecurity & Forensics</option>
                    <option value="ZZ">ZZ - Degree Core</option>
                </select>
            </div>

            {{-- ? How to make that, when a value from mod-major-dd is selected, relevant modules come out --}}
            <div class="form-group">
                <label for="module-dd">Select Module:</label>
                <select name="module-num" id="module-dd" class="dd-select">
                    <option value="">-- Select --</option>
                    <option value="1102">1102</option>
                    <option value="1103">1103</option>
                    <option value="1104">1104</option>
                    <option value="1201">1201</option>
                    <option value="1202">1202</option>
                    <option value="1301">1301</option>
                    <option value="2201">2201</option>
                    <option value="2202">2202</option>
                    <option value="2203">2203</option>
                    <option value="2204">2204</option>
                    <option value="2205">2205</option>
                    <option value="2301">2301</option>
                    <option value="2302">2302</option>
                    <option value="3201">3201</option>
                    <option value="3202">3202</option>
                    <option value="3301">3301</option>
                    <option value="3302">3302</option>
                    <option value="3303">3303</option>
                    <option value="3304">3304</option>
                    <option value="3305">3305</option>
                    <option value="3306">3306</option>
                    <option value="3307">3307</option>
                    <option value="3308">3308</option>
                    <option value="3309">3309</option>
                    <option value="3310">3310</option>
                    <option value="3311">3311</option>
                    <option value="3312">3312</option>
                    <option value="3313">3313</option>
                    <option value="4201">4201</option>
                    <option value="4202">4202</option>
                    <option value="4290">4290</option>
                    <option value="4301">4301</option>
                    <option value="4302">4302</option>
                    <option value="4303">4303</option>
                    <option value="4304">4304</option>
                    <option value="4305">4305</option>
                    <option value="4306">4306</option>
                    <option value="4307">4307</option>
                    <option value="4308">4308</option>
                    <option value="4309">4309</option>
                    <option value="4310">4310</option>
                    <option value="4311">4311</option>
                    <option value="4313">4313</option>
                    <option value="4314">4314</option>
                    <option value="4315">4315</option>
                </select>
            </div>

            <div class="form-group">
                <label for="period-dd">Select Module Period:</label>
                <select name="module-period" id="period-dd" class="dd-select">
                    <option value="">-- Select --</option>
                    <option value="AM1">Period 01: 0750 - 0940</option>
                    <option value="AM2">Period 02: 0950 - 1140</option>
                    <option value="AN0">Period 03: 1150 - 1340</option>
                    <option value="PM1">Period 04: 1410 - 1600</option>
                    <option value="PM2">Period 05: 1610 - 1800</option>
                </select>
            </div>
            
            <div class="form-group">
                {{-- TODO: Add calendar --}}
                <input type="date" name="date" id="date">
            </div>

            <input type="submit" value="Generate QR Code" />

        </form>

        <br />
        <div id="qr-code"></div>

    </main>

    <script src="/js/qr-gen.js"></script>
</body>
</html>
