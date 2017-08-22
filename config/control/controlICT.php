<?php
  include "db.php";

  class ICT extends Database{

    function dashboardBiodata(){
      $mysqli = mysqli_connect($this->host, $this->user, $this->pass, $this->name);
      $query = $mysqli->query("SELECT * FROM generation");
      $num = $query->num_rows;
      if($num > 0){
        ?>
          <select id="generationOption">
        <?php
        while ($row = $query->fetch_assoc()) {
          echo "<option value='".$row['id']."'>".$row['generation']."</option>";
        }
        ?>
          </select><br>
          <input type="submit" onclick="selectGeneration()">
        <?php
      }
    }

    function showPrintBiodata($data, $length){
      $mysqli = mysqli_connect($this->host, $this->user, $this->pass, $this->name);
      $sqlString = '';
      for ($i=0; $i < $length ; $i++) {
        if($i != $length - 1){
          $sqlString = $sqlString.$data[$i].",";
        } else{
          $sqlString = $sqlString.$data[$i];
        }
      }
      $sql = "SELECT
      name,
      nis,
      nisn,
      sex,
      place_birth,
      date_birth
      from students where id in ($sqlString)";
      $query = $mysqli->query($sql);
      $num = $query->num_rows;

      if($num > 0){
        while($row = $query->fetch_assoc()){
          ?>
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
                  <td class="isi"><?php echo $row['name']; ?></td>
                </tr>
                <tr>
                  <td>2.</td>
                  <td class="td">NIS/NISN</td>
                  <td>:</td>
                  <td class="isi"><?php echo $row['nis']."/".$row['nisn']; ?></td>
                </tr>
                <tr>
                  <td>3.</td>
                  <td class="td">Jenis kelamin</td>
                  <td>:</td>
                  <td class="isi"><?php if($row['sex'] = "M"){ echo 'Laki-laki';} else{echo "Perempuan";} ?></td>
                </tr>
                <tr>
                  <td>4.</td>
                  <td class="td">Tempat dan tgl lahir</td>
                  <td>:</td>
                  <td class="isi"><?php echo $row['place_birth'].", ".$row['date_birth']; ?></td>
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
          <?php
        }
      }

    }

    function biodata($generation){
      $mysqli = mysqli_connect($this->host, $this->user, $this->pass, $this->name);
      $sql = "SELECT students.id,
        students.name FROM
        students
        INNER JOIN generation ON students.generation = generation.id
        WHERE generation.id = ".$generation;
      $query = $mysqli->query($sql);
      $num = $query->num_rows;
      if($num > 0){
        ?>
        <table id="tableBiodata">
        <?php
        while ($row = $query->fetch_assoc()) {
          ?>
          <tr>
            <td><input type="checkbox" value="<?php echo $row['id']; ?>"></td>
            <td><?php echo $row['name']; ?></td>
          </tr>
          <?php
        }
        ?>
          <tr>
            <td><input type="submit" onclick="submitBiodata()"></td>
          </tr>
        </table>
        <?php
      } else{
        echo "Tidak ada data";
      }
    }

    function dashboardGeneration(){
      ?>
      Generasi ke : <input type="number" id="generation" placeholder="21" autofocus><br>
      <input type="submit" onclick="generationSubmit()">
      <?php
    }

    function generationSubmit($a){
      $mysqli = mysqli_connect($this->host, $this->user, $this->pass, $this->name);
      $stmt = $mysqli->prepare("INSERT INTO generation (generation) VALUES (?)");
      if($stmt) {
        $stmt->bind_param("i", $a);
        if($stmt->execute()){
          echo '{"code":"1"}';
        } else {
          echo '{"code":"0"}';
        }
      } else{
        '{"code":"0"}';
      }
    }

  }

?>
