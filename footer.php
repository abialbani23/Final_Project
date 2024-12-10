<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Footer</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }

        footer {
            background-color: #333;
            color: #fff;
            padding: 20px 0;
        }

        .footer-container {
            display: flex;
            justify-content: space-around;
            padding: 20px;
        }

        .footer-description, .footer-cars, .footer-contact {
            flex: 1;
            margin: 0 10px;
        }

        .footer-description p {
            margin-bottom: 10px;
        }

        .social-media a {
            margin-right: 10px;
        }

        .social-media img {
            width: 40px;
            height: 40px;
        }

        .footer-cars h3, .footer-contact h3 {
            margin-bottom: 10px;
        }

        .footer-cars ul {
            list-style: none;
            padding: 0;
        }

        .footer-cars ul li {
            margin-bottom: 5px;
        }

        .footer-contact p {
            margin-bottom: 5px;
        }

        .footer-bottom {
            text-align: center;
            padding: 10px 0;
            border-top: 1px solid #444;
        }

        .whatsapp {
            position: fixed;
            bottom: 20px;
            right: 20px;
        }

        .whatsapp a {
            background-color: #25D366;
            color: #fff;
            padding: 10px 20px;
            border-radius: 50px;
            text-decoration: none;
        }
    </style>
</head>
<body>
    <footer>
        <div class="footer-container">
            <div class="footer-description">
                <p>Oto Track telah menyediakan berbagai jenis kendaraan seperti Sedan, SUV, dan beberapa mobil City Car selama bertahun-tahun.</p>
                <div class="social-media">
                    <a href="https://www.facebook.com/ototrackrentalmobil"><img src="https://static.vecteezy.com/system/resources/previews/020/964/386/original/facebook-circle-icon-for-web-design-free-png.png" alt="Facebook"></a>
                    <a href="https://www.ototrack.co.id/INSTAGRAM-URL"><img src="https://static.vecteezy.com/system/resources/previews/018/930/413/original/instagram-logo-instagram-icon-transparent-free-png.png" alt="Instagram"></a>
                    <a href="https://www.ototrack.co.id/YOUTUBE-URL"><img src="http://clipart-library.com/images_k/youtube-transparent-png/youtube-transparent-png-15.png" alt="YouTube"></a>
                    <a href="https://www.ototrack.co.id/TWITTER-URL"><img src="https://www.pngkey.com/png/full/2-27646_twitter-logo-png-transparent-background-logo-twitter-png.png" alt="Twitter"></a>
                    <a href="https://www.linkedin.com/company/oto-track"><img src="https://static.vecteezy.com/system/resources/previews/017/339/624/original/linkedin-icon-free-png.png" alt="LinkedIn"></a>
                </div>
            </div>
            <div class="footer-cars">
                <h3>Our Cars</h3>
                <ul>
                    <li>City Car</li>
                    <li>Sedan</li>
                    <li>MPV</li>
                    <li>SUV</li>
                    <li>Minivan & Minibus</li>
                    <li>Luxury Cars & Convertible</li>
                    <li>Pickup Trucks</li>
                </ul>
            </div>
            <div class="footer-contact">
                <h3>Reach Us</h3>
                <p>Perumnas No.10 Blok Y, Sukaharja, Telukjambe Timur, Karawang, Jawa Barat 41360</p>
                <p>0812-8353-5853</p>
                <p><a href="mailto:info@ototrack.co.id">info@ototrack.co.id</a></p>
            </div>
        </div>
        <div class="footer-bottom">
            <p>&copy; Copyright 2024 Ototrack Rental Mobil Karawang.</p>
        </div>
        <div class="whatsapp">
            <a href="https://api.whatsapp.com/send/?phone=6281283535853&text=Hallo%2C+dengan+Ototrack%3F+Kami+mau+rental+mobil.+Bisa%3F&type=phone_number&app_absent=0">WhatsApp Kami</a>
        </div>
    </footer>
</body>
</html>
