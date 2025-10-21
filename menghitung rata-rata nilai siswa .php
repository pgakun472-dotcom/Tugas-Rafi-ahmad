<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Menghitung Rata-Rata Nilai Siswa</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 40px;
      background-color: #f9f9f9;
    }
    h2 {
      color: #333;
    }
    input {
      width: 60px;
      padding: 5px;
      margin: 5px;
      text-align: center;
    }
    button {
      padding: 8px 16px;
      background-color: #007bff;
      color: white;
      border: none;
      border-radius: 5px;
      cursor: pointer;
    }
    button:hover {
      background-color: #0056b3;
    }
    #hasil {
      margin-top: 20px;
      padding: 10px;
      background: #fff;
      border-radius: 5px;
      box-shadow: 0 0 5px rgba(0,0,0,0.1);
      width: 300px;
    }
  </style>
</head>
<body>

  <h2>Tugas 1 - Menghitung Rata-Rata Nilai Siswa</h2>

  <p>Masukkan nilai lima siswa:</p>

  <input type="number" id="nilai1" placeholder="Nilai 1">
  <input type="number" id="nilai2" placeholder="Nilai 2">
  <input type="number" id="nilai3" placeholder="Nilai 3">
  <input type="number" id="nilai4" placeholder="Nilai 4">
  <input type="number" id="nilai5" placeholder="Nilai 5">
  <br><br>
  <button onclick="hitungRataRata()">Hitung</button>

  <div id="hasil"></div>

  <script>
    function hitungRataRata() {
      // Ambil nilai dari input
      let nilai = [
        Number(document.getElementById("nilai1").value),
        Number(document.getElementById("nilai2").value),
        Number(document.getElementById("nilai3").value),
        Number(document.getElementById("nilai4").value),
        Number(document.getElementById("nilai5").value)
      ];

      // Hitung total
      let total = 0;
      for (let i = 0; i < nilai.length; i++) {
        total += nilai[i];
      }

      // Hitung rata-rata
      let rataRata = total / nilai.length;

      // Tentukan keterangan
      let keterangan = rataRata >= 75 ? "Lulus" : "Tidak Lulus";

      // Tampilkan hasil
      document.getElementById("hasil").innerHTML = `
        <strong>Rata-Rata Nilai:</strong> ${rataRata.toFixed(2)} <br>
        <strong>Keterangan:</strong> ${keterangan}
      `;
    }
  </script>

</body>
</html>