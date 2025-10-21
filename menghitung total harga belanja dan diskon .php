<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Menghitung Total Harga Belanja dan Diskon</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 40px;
      background-color: #f8f9fa;
    }
    h2 {
      color: #333;
    }
    input {
      width: 100px;
      padding: 5px;
      margin: 5px;
      text-align: center;
    }
    button {
      padding: 8px 16px;
      background-color: #28a745;
      color: white;
      border: none;
      border-radius: 5px;
      cursor: pointer;
    }
    button:hover {
      background-color: #218838;
    }
    #hasil {
      margin-top: 20px;
      padding: 10px;
      background: #fff;
      border-radius: 5px;
      box-shadow: 0 0 5px rgba(0,0,0,0.1);
      width: 320px;
    }
  </style>
</head>
<body>

  <h2>Tugas 2 - Menghitung Total Harga Belanja dan Diskon</h2>

  <p>Masukkan harga lima barang (dalam Rupiah):</p>

  <input type="number" id="barang1" placeholder="Barang 1">
  <input type="number" id="barang2" placeholder="Barang 2">
  <input type="number" id="barang3" placeholder="Barang 3">
  <input type="number" id="barang4" placeholder="Barang 4">
  <input type="number" id="barang5" placeholder="Barang 5">
  <br><br>
  <button onclick="hitungTotal()">Hitung Total</button>

  <div id="hasil"></div>

  <script>
    function hitungTotal() {
      // Ambil nilai harga dari input
      let harga = [
        Number(document.getElementById("barang1").value),
        Number(document.getElementById("barang2").value),
        Number(document.getElementById("barang3").value),
        Number(document.getElementById("barang4").value),
        Number(document.getElementById("barang5").value)
      ];

      let total = 0;
      let totalSetelahDiskon = 0;

      // Menggunakan perulangan untuk menghitung total dan diskon
      for (let i = 0; i < harga.length; i++) {
        let hargaBarang = harga[i];
        if (hargaBarang >= 30000) {
          hargaBarang = hargaBarang - (hargaBarang * 0.1); // Diskon 10%
        }
        totalSetelahDiskon += hargaBarang;
        total += harga[i];
      }

      // Tampilkan hasil
      document.getElementById("hasil").innerHTML = `
        <strong>Total Sebelum Diskon:</strong> Rp${total.toLocaleString()} <br>
        <strong>Total Setelah Diskon:</strong> Rp${totalSetelahDiskon.toLocaleString()}
      `;
    }
  </script>

</body>
</html>