<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Admin</title>
    <style>
      body,html{width: 100%; height: 100%; margin: 0; padding: 0; box-sizing: border-box;}
      .print{
        margin: 0;
        width: 1122px;
        height: 792px;
        box-sizing: border-box;
      }
      .leftPrint{
        margin: 0;
        padding-left: 83px;
        padding-top: 20px;
        padding-right: 20px;
        width: 50%;
        height: 100%;
        float: left;
        box-sizing: border-box;
        background-color: #ff99dd;
      }
      .leftPrint header{
        text-align: center;
        font-size: 140;
        margin-bottom: 15px;
      }
      .leftPrint ol{margin: 0; padding: 0;text-align: justify; font-size: 12}
      h1{
        padding: 0;
        margin: 0;
        box-sizing: border-box;
      }

      .rightPrint{
        margin: 0;
        padding-left: 30px;
        padding-top: 20px;
        padding-right: 5px;
        width: 50%;
        height: 100%;
        float: left;
        box-sizing: border-box;
        background-color: #99ffff;
      }
      .rightPrint header{
        text-align: center;
        font-size: 14;
        margin-bottom: 15px;
      }
      .rightPrint table{
        text-align: left;
        width: 100%;
        margin: 0;
        padding: 0;
        font-size: 12
      }
      .rightPrint table tr, .rightPrint table tr td{
        vertical-align: top;
        margin: 0;
        padding: 0;
      }
      .footer{
        padding: 0;
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        width: 100%;
        height: auto;
      }
      .footerPhoto{height: 95px; width: 75px; float: left; border-style: solid; border-width: 1px; margin-top: 10px;}
      .footerTTD{text-align: center; float: left; margin-left:100px; margin-top: 5px;}
      @media print{
        .no-print, .no-print *{display: none !important;}
        @page{
          size : A4 landscape;
          margin: none;
        }
      }

      .td{
        width: 160px;
      }
      .isi{
        width: 347px;
      }
    </style>
  </head>
  <body>
    <section class="no-print">
      <select>
        <option value="">21</option>
      </select>
      <button  type="button" name="button" onclick="print()">Print</button>
    </section>
    <main class="print">
      <section class="leftPrint">
        <header>PETUNJUK PENGGUNAAN</header>
        <ol>
          <li>Laporan Hasil Belajar ini dipergunakan selama siswa mengikuti pelajaran di Sekolah Dasar Tunas Bangsa</li>
          <li>Apabila siswa pindah sekolah, maka Laporan Hasil Belajar Siswa ini dibawa oleh siswa yang bersangkutan untuk dipergunakan
          di sekolah baru dengan meninggalkan arsip atau copy di sekolah lama</li>
          <li>Apabila Laporan Hasil Belajar Siswa yang bersangkutan hilang, dapat diganti dengan Laporan Penilaian Hasil Belajar Siswa
          Pengganti yang nilai-nilainya diambil dari Buku Induk Sekolah Asal Siswa dan disahkan oleh Kepala Sekolah Asal</li>
          <li>Laporan Penilaian Hasil Belajar Siswa ini harus dilengkapi dengan pas foto dengan ukuran (3 cm x 4 cm) dan pengisiannya
          dilakukan oleh Guru Kelas</li>
        </ol>
      </section>

      <section class="rightPrint">
        <header>KETERANGAN TENTANG DIRI SISWA</header>
        <table>
          <tr>
            <td>1.</td>
            <td class="td">Nama siswa</td>
            <td>:</td>
            <td class="isi">Nicholas Alvaro Fayola Valdemar</td>
          </tr>
          <tr>
            <td>2.</td>
            <td class="td">NIS/NISN</td>
            <td>:</td>
            <td class="isi">163015/</td>
          </tr>
          <tr>
            <td>3.</td>
            <td class="td">Jenis kelamin</td>
            <td>:</td>
            <td class="isi">Laki-laki</td>
          </tr>
          <tr>
            <td>4.</td>
            <td class="td">Tempat dan tgl lahir</td>
            <td>:</td>
            <td class="isi">Jogja, 10 September 2009</td>
          </tr>
          <tr>
            <td>5.</td>
            <td class="td">Agama</td>
            <td>:</td>
            <td class="isi">Katolik</td>
          </tr>
          <tr>
            <td>6.</td>
            <td class="td">Anak ke-</td>
            <td>:</td>
            <td class="isi">1</td>
          </tr>
          <tr>
            <td>7.</td>
            <td class="td">Status dalam keluarga</td>
            <td>:</td>
            <td class="isi">Anak Kandung</td>
          </tr>
          <tr>
            <td>8.</td>
            <td class="td">Alamat siswa</td>
            <td>:</td>
            <td class="isi">Villa Ceria Lestari No. G12</td>
          </tr>
          <tr>
            <td></td>
            <td class="td">Telepon</td>
            <td>:</td>
            <td class="isi">05618123277</td>
          </tr>
          <tr>
            <td>9.</td>
            <td class="td">Diterima di sekolah ini</td>
            <td>:</td>
            <td class="isi"></td>
          </tr>
          <tr>
            <td></td>
            <td class="td">a. Di kelas</td>
            <td>:</td>
            <td class="isi">1</td>
          </tr>
          <tr>
            <td></td>
            <td class="td">b. Pada tanggal</td>
            <td>:</td>
            <td class="isi"></td>
          </tr>
          <tr>
            <td>10.</td>
            <td class="td">Sekolah asal</td>
            <td>:</td>
            <td class="isi"></td>
          </tr>
          <tr>
            <td></td>
            <td class="td">a. Nama sekolah</td>
            <td>:</td>
            <td class="isi">TK Tunas Bangsa</td>
          </tr>
          <tr>
            <td></td>
            <td class="td">b. Alamat</td>
            <td>:</td>
            <td class="isi">Jl. Arteri Supadio</td>
          </tr>
          <tr>
            <td>11.</td>
            <td class="td">Nama orang tua:</td>
            <td>:</td>
            <td class="isi"></td>
          </tr>
          <tr>
            <td></td>
            <td class="td">a. Ayah</td>
            <td>:</td>
            <td class="isi">Antonius Harya Pungkas Anom</td>
          </tr>
          <tr>
            <td></td>
            <td class="td">b. Ibu</td>
            <td>:</td>
            <td class="isi">Tirsa Elfira</td>
          </tr>
          <tr>
            <td>12.</td>
            <td class="td">Alamat orang tua</td>
            <td>:</td>
            <td class="isi">Villa Ceria Lestari No. G12 Jl. Sungau Raya dalam Komple Batara 3 No B.32</td>
          </tr>
          <tr>
            <td></td>
            <td class="td">Telepon</td>
            <td>:</td>
            <td class="isi">05618123277</td>
          </tr>
          <tr>
            <td>13.</td>
            <td class="td">Pekerjaan orang tua</td>
            <td>:</td>
            <td class="isi"></td>
          </tr>
          <tr>
            <td></td>
            <td class="td">a. Ayah</td>
            <td>:</td>
            <td class="isi">PNS</td>
          </tr>
          <tr>
            <td></td>
            <td class="td">b. Ibu</td>
            <td>:</td>
            <td class="isi">PNS</td>
          </tr>
          <tr>
            <td>14.</td>
            <td class="td">Nama wali</td>
            <td>:</td>
            <td class="isi"></td>
          </tr>
          <tr>
            <td>15.</td>
            <td class="td">Alamat wali</td>
            <td>:</td>
            <td class="isi"></td>
          </tr>
          <tr>
            <td></td>
            <td class="td">Telepon</td>
            <td>:</td>
            <td class="isi"></td>
          </tr>
          <tr>
            <td>16.</td>
            <td class="td">Pekerjaan wali</td>
            <td>:</td>
            <td class="isi"></td>
          </tr>
        </table>

        <section class="footer">
          <div class="footerPhoto"></div>
          <div class="footerTTD">
            Sungai Raya, 1 Juli 2016 <br>
            Kepala Sekolah <br><br><br><br><br>
            Agustin Madjid, S.Pd.
          </div>
        </section>
    </main>
    <script type="text/javascript">
      function printt(){
        window.print();
      }
    </script>
  </body>
</html>
