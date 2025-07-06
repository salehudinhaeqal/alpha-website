<!DOCTYPE html>
<html>
<head>
    <title>Pesan Baru dari Website</title>
</head>
<body>
    <h2>Anda Menerima Pesan Baru dari Form Kontak</h2>
    <p><strong>Nama:</strong> {{ $data['name'] }}</p>
    <p><strong>Email:</strong> {{ $data['email'] }}</p>
    <hr>
    <h3>Pesan:</h3>
    <p>{{ $data['message'] }}</p>
</body>
</html>