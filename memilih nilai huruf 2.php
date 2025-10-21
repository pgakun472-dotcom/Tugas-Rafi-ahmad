<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tugas 4 – Memberi Nilai Huruf (Dengan Perulangan)</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 40px;
      background-color: #f9f9f9;
    }
    h2 {
      color: #333;
    }
    table {
      border-collapse: collapse;
      width: 60%;
      background: white;
      box-shadow: 0 2px 5px rgba(0,0,0,0.1);
    }
    th, td {
      border: 1px solid #ccc;
      padding: 8px;
      text-align: center;
    }
    th {
      background-color: #4CAF50;
      color: white;
    }
    input, button {
      margin: 5px;
      padding: 8px;
      font-size: 14px;
    }
  </style>
</head>
<body>
  <h2>Tugas 4 – Memberi Nilai Huruf pada Daftar Nilai</h2>

  <p>Masukkan jumlah nilai yang ingin dihitung:</p>
  <input type="number" id="jumlahNilai" placeholder="contoh: 5">
  <button onclick="masukkanNilai()">Mulai Input Nilai</button>

  <div id="inputArea"></div>

  <table id="tabelNilai" style="margin-top:20px; display:none;">
    <tr>
      <th>No</th>
      <th>Nilai Angka</th>
      <th>Nilai Huruf</th>
    </tr>
  </table>

  <script>
    // Fungsi menentukan nilai huruf
    function getNilaiHuruf(nilai) {
      if (nilai >= 85) return "A (Sangat Baik)";
      else if (nilai >= 70) return "B (Baik)";
      else if (nilai >= 60) return "C (Cukup)";
      else return "D (Kurang)";
    }

    // Fungsi untuk meminta input nilai dari pengguna
    function masukkanNilai() {
      const jumlah = document.getElementById("jumlahNilai").value;
      const inputArea = document.getElementById("inputArea");
      inputArea.innerHTML = ""; // kosongkan area sebelumnya

      if (jumlah <= 0) {
        alert("Masukkan jumlah nilai yang benar!");
        return;
      }

      // Buat input nilai menggunakan perulangan
      let htmlInput = "<h3>Masukkan Nilai:</h3>";
      for (let i = 0; i < jumlah; i++) {
        htmlInput += `<label>Nilai ke-${i + 1}: </label>
                      <input type="number" id="nilai${i}" min="0" max="100" required><br>`;
      }
      htmlInput += `<button onclick="tampilkanNilai(${jumlah})">Tampilkan Hasil</button>`;
      inputArea.innerHTML = htmlInput;
    }

    // Fungsi untuk menampilkan hasil nilai huruf
    function tampilkanNilai(jumlah) {
      const tabel = document.getElementById("tabelNilai");
      tabel.style.display = "table";

      // Hapus baris lama (selain header)
      while (tabel.rows.length > 1) {
        tabel.deleteRow(1);
      }

      // Gunakan perulangan untuk membaca semua nilai
      for (let i = 0; i < jumlah; i++) {
        const nilai = parseInt(document.getElementById(`nilai${i}`).value);

        // Buat baris baru di tabel
        const row = tabel.insertRow();
        const cellNo = row.insertCell(0);
        const cellAngka = row.insertCell(1);
        const cellHuruf = row.insertCell(2);

        cellNo.textContent = i + 1;
        cellAngka.textContent = nilai;
        cellHuruf.textContent = getNilaiHuruf(nilai);
      }
    }
  </script>
</body>
</html>