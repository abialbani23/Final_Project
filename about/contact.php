<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kontak Kami - Ototrack</title>
    <link rel="stylesheet" href="../assets/css/styles.css"> <!-- Link ke file CSS -->
</head>
<body>
    <header>
        <h1>Kontak Kami</h1>
    </header>
    <main>
        <section>
            <h2>Hubungi Kami</h2>
            <p>Jika Anda memiliki pertanyaan atau ingin menghubungi kami, silakan gunakan informasi di bawah ini:</p>
            <ul>
                <li><strong>Email:</strong> info@ototrack.co.id</li>
                <li><strong>Telepon:</strong> +62 123 456 789</li>
                <li><strong>Alamat:</strong> Jl. Contoh No. 123, Jakarta, Indonesia</li>
            </ul>
        </section>

        <section>
            <h2>Form Kontak</h2>
            <form method="POST" action="send_contact.php"> <!-- Form untuk mengirim pesan -->
                <label for="name">Nama:</label>
                <input type="text" id="name" name="name" required>
                
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>
                
                <label for="message">Pesan:</label>
                <textarea id="message" name="message" required></textarea>
                
                <button type="submit">Kirim</button>
            </form>
        </section>
    </main>
    <footer>
        <p>&copy; <?php echo date("Y"); ?> Ototrack. Semua hak dilindungi.</p>
    </footer>
</body>
</html>