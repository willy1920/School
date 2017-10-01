<?php
  include "config/publicSession.php";
?>
<!DOCTYPE html>
<html lang="en">
  <?php
    include "config/publicHead.php";
  ?>
  <body>
    <menu class="leftMenu">
      <img class="iconPeople" src="image/peopleIcon.png" alt="Icon People">

      <ul class="leftMenu-ul" id="leftMenu">
        <li class="leftMenu-li" id="leftMenu0"><?php echo $_SESSION['user']; ?></li>
        <li class="leftMenu-li" id="leftMenu1">Lihat data siswa</li>
        <li class="leftMenu-li" id="leftMenu2">Input data siswa</li>
      </ul>
    </menu>

    <section id="">

    </section>

    <section id="dashboardInput" class="main">
      <input type="text" id="id">

      <section id="menuInput">
        <button type="button" id="menu1" class="button-secondary" onclick="menu(1)">1</button>
        <button type="button" id="menu2" class="button-secondary" onclick="menu(2)">2</button>
        <button type="button" id="menu3" class="button-secondary" onclick="menu(3)">3</button>
        <button type="button" id="menu4" class="button-secondary" onclick="menu(4)">4</button>
        <button type="button" id="menu5" class="button-secondary" onclick="menu(5)">5</button>
      </section>

      <section id="input1" style="display:none">
        <h1>Student Data</h1>
        <table>
          <tr>
            <td>Name</td>
            <td>:</td>
            <td><input type="text" id="inputName" placeholder="Andi" autofocus required></td>
          </tr>
          <tr>
            <td>NIS</td>
            <td>:</td>
            <td><input type="number" id="inputNIS" placeholder="6xxx"></td>
          </tr>
          <tr>
            <td>NISN</td>
            <td>:</td>
            <td><input type="text" id="inputNISN" placeholder="98182xxx"></td>
          </tr>
          <tr>
            <td>Sex</td>
            <td>:</td>
            <td>
              <select id="inputSex" class="select">
                <option value="M" class="select">Male</option>
                <option value="F" class="select">Female</option>
              </select>
            </td>
          </tr>
          <tr>
            <td>Place of birth</td>
            <td>:</td>
            <td><input type="text" id="inputPlace" placeholder="Pontianak" required></td>
          </tr>
          <tr>
            <td>Date of birth</td>
            <td>:</td>
            <td><input type="date" id="inputDate" required placeholder="1992-12-28"></td>
          </tr>
          <tr>
            <td>Generation</td>
            <td>:</td>
            <td><select id="inputGeneration">

            </select></td>
          </tr>
          <tr>
            <td>Class</td>
            <td>:</td>
            <td><select id="inputClass" required>

            </select></td>
          </tr>
        </table>
        <button class="buttons-submit" type="button" id="inputSubmit">Submit</button>
      </section>

      <section id="input2"  style="display:none">
        <h1>Student Data</h1>
        <table>
          <tr>
            <td>Student Nationality</td>
            <td>:</td>
            <td><input type="text" id="nationality" placeholder="Indonesia" required></td>
          </tr>
          <tr>
            <td>Last school name</td>
            <td>:</td>
            <td><input id="schoolName" type="text" placeholder="TK Tunas Bangsa"></td>
          </tr>
          <tr>
            <td>Last school address</td>
            <td>:</td>
            <td><input id="schoolAddress" type="text" placeholder="Jl. Arteri KM.2"></td>
          </tr>
          <tr>
            <td>Kelas Pertama di Tunas Bangsa</td>
            <td>:</td>
            <td><input type="text" id="firstGrade" placeholder="P1 Full"></td>
          </tr>
          <tr>
            <td>Jumlah Saudara</td>
            <td>:</td>
            <td><input type="number" id="saudara" placeholder="3"></td>
          </tr>
          <tr>
            <td>Anak ke-</td>
            <td>:</td>
            <td><input type="number" id="ke" placeholder="1"></td>
          </tr>
          <tr>
            <td>Status dalam keluarga</td>
            <td>:</td>
            <td><select id="status">
              <option value="Anak Kandung">Anak Kandung</option>
              <option value="Anak Angkat">Anak Angkat</option>
            </select></td>
          </tr>
          <tr>
            <td>Language</td>
            <td>:</td>
            <td><input type="text" id="language" placeholder="Indonesia"></td>
          </tr>
          <tr>
            <td>Religion</td>
            <td>:</td>
            <td><select id="religion">
              <option value="" selected>none</option>
              <option value="Islam">Islam</option>
              <option value="Kristen Protestan">Kristen Protestan</option>
              <option value="Katolik">Katolik</option>
              <option value="Buddha">Buddha</option>
              <option value="Hindu">Hindu</option>
              <option value="Kong Hu Cu">Kong Hu Cu</option>
            </select></td>
          </tr>
          <tr>
            <td>Accepted Date</td>
            <td>:</td>
            <td><input type="date" id="acceptedDate" placeholder="2017-05-28"></td>
          </tr>
        </table>
        <button class="buttons-submit" type="button" id="otherSubmit">Submit</button>
      </section>

      <section id="input3" style="display:none">
        <h1>Student Father</h1>
        <table>
          <tr>
            <td>Name</td>
            <td>:</td>
            <td><input type="text" id="dadName" placeholder="Father"></td>
          </tr>
          <tr>
            <td>Place of Birth</td>
            <td>:</td>
            <td><input type="text" id="dadPlace" placeholder="Pontianak"></td>
          </tr>
          <tr>
            <td>Date of birth</td>
            <td>:</td>
            <td><input type="date" id="dadDate" placeholder="1997-03-28"></td>
          </tr>
          <tr>
            <td>Address</td>
            <td>:</td>
            <td><input type="text" id="dadAddress" placeholder="Jl. Arteri KM.2"></td>
          </tr>
          <tr>
            <td>Job</td>
            <td>:</td>
            <td><input type="text" id="dadJob" placeholder="Guru"></td>
          </tr>
          <tr>
            <td>Office Address</td>
            <td>:</td>
            <td><input type="text" id="dadOffice" placeholder="Jl. Arteri KM.2"></td>
          </tr>
          <tr>
            <td>Phone Number</td>
            <td>:</td>
            <td><input type="number" id="dadNumber" placeholder="08xxxx"></td>
          </tr>
          <tr>
            <td>Whatsapp</td>
            <td>:</td>
            <td><input type="number" id="dadWA" placeholder="08xxxx"></td>
          </tr>
          <tr>
            <td>BBM</td>
            <td>:</td>
            <td><input type="text" id="dadBBM" placeholder="6fe128"></td>
          </tr>
          <tr>
            <td>Email</td>
            <td>:</td>
            <td><input type="email" id="dadEmail" placeholder="user@gmail.com"></td>
          </tr>
          <tr>
            <td>Last Education</td>
            <td>:</td>
            <td><input type="text" id="dadEducation" placeholder="S1 xxxx"></td>
          </tr>
          <tr>
            <td>Nationality</td>
            <td>:</td>
            <td><input type="text" id="dadNationality" placeholder="Indonesia"></td>
          </tr>
          <tr>
            <td>Religion</td>
            <td>:</td>
            <td><select id="dadReligion">
              <option value="" selected>none</option>
              <option value="Islam">Islam</option>
              <option value="Kristen Protestan">Kristen Protestan</option>
              <option value="Katolik">Katolik</option>
              <option value="Buddha">Buddha</option>
              <option value="Hindu">Hindu</option>
              <option value="Kong Hu Cu">Kong Hu Cu</option>
            </select></td>
          </tr>
        </table>
        <button class="buttons-submit" type="button" id="dadSubmit">Submit</button>
      </section>

      <section id="input4" style="display:none">
        <h1>Student Mother</h1>
        <table>
          <tr>
            <td>Name</td>
            <td>:</td>
            <td><input type="text" id="momName" placeholder="Father"></td>
          </tr>
          <tr>
            <td>Place of Birth</td>
            <td>:</td>
            <td><input type="text" id="momPlace" placeholder="Pontianak"></td>
          </tr>
          <tr>
            <td>Date of birth</td>
            <td>:</td>
            <td><input type="date" id="momDate" placeholder="1997-03-28"></td>
          </tr>
          <tr>
            <td>Address</td>
            <td>:</td>
            <td><input type="text" id="momAddress" placeholder="Jl. Arteri KM.2"></td>
          </tr>
          <tr>
            <td>Job</td>
            <td>:</td>
            <td><input type="text" id="momJob" placeholder="Guru"></td>
          </tr>
          <tr>
            <td>Office Address</td>
            <td>:</td>
            <td><input type="text" id="momOffice" placeholder="Jl. Arteri KM.2"></td>
          </tr>
          <tr>
            <td>Phone Number</td>
            <td>:</td>
            <td><input type="number" id="momNumber" placeholder="08xxxx"></td>
          </tr>
          <tr>
            <td>Whatsapp</td>
            <td>:</td>
            <td><input type="number" id="momWA" placeholder="08xxxx"></td>
          </tr>
          <tr>
            <td>BBM</td>
            <td>:</td>
            <td><input type="text" id="momBBM" placeholder="6fe128"></td>
          </tr>
          <tr>
            <td>Email</td>
            <td>:</td>
            <td><input type="email" id="momEmail" placeholder="user@gmail.com"></td>
          </tr>
          <tr>
            <td>Last Education</td>
            <td>:</td>
            <td><input type="text" id="momEducation" placeholder="S1 xxxx"></td>
          </tr>
          <tr>
            <td>Nationality</td>
            <td>:</td>
            <td><input type="text" id="momNationality" placeholder="Indonesia"></td>
          </tr>
          <tr>
            <td>Religion</td>
            <td>:</td>
            <td><select id="momReligion">
              <option value="" selected>none</option>
              <option value="Islam">Islam</option>
              <option value="Kristen Protestan">Kristen Protestan</option>
              <option value="Katolik">Katolik</option>
              <option value="Buddha">Buddha</option>
              <option value="Hindu">Hindu</option>
              <option value="Kong Hu Cu">Kong Hu Cu</option>
            </select></td>
          </tr>
        </table>
        <button class="buttons-submit" type="button" id="momSubmit">Submit</button>
      </section>

      <section id="input5" style="display:none">
        <h1>Student Guardian</h1>
        <table>
          <tr>
            <td>Name</td>
            <td>:</td>
            <td><input type="text" id="guardName" placeholder="Father"></td>
          </tr>
          <tr>
            <td>Place of Birth</td>
            <td>:</td>
            <td><input type="text" id="guardPlace" placeholder="Pontianak"></td>
          </tr>
          <tr>
            <td>Date of birth</td>
            <td>:</td>
            <td><input type="date" id="guardDate" placeholder="1997-03-28"></td>
          </tr>
          <tr>
            <td>Address</td>
            <td>:</td>
            <td><input type="text" id="guardAddress" placeholder="Jl. Arteri KM.2"></td>
          </tr>
          <tr>
            <td>Job</td>
            <td>:</td>
            <td><input type="text" id="guardJob" placeholder="Guru"></td>
          </tr>
          <tr>
            <td>Office Address</td>
            <td>:</td>
            <td><input type="text" id="guardOffice" placeholder="Jl. Arteri KM.2"></td>
          </tr>
          <tr>
            <td>Phone Number</td>
            <td>:</td>
            <td><input type="number" id="guardNumber" placeholder="08xxxx"></td>
          </tr>
          <tr>
            <td>Whatsapp</td>
            <td>:</td>
            <td><input type="number" id="guardWA" placeholder="08xxxx"></td>
          </tr>
          <tr>
            <td>BBM</td>
            <td>:</td>
            <td><input type="text" id="guardBBM" placeholder="6fe128"></td>
          </tr>
          <tr>
            <td>Email</td>
            <td>:</td>
            <td><input type="email" id="guardEmail" placeholder="user@gmail.com"></td>
          </tr>
          <tr>
            <td>Last Education</td>
            <td>:</td>
            <td><input type="text" id="guardEducation" placeholder="S1 xxxx"></td>
          </tr>
          <tr>
            <td>Nationality</td>
            <td>:</td>
            <td><input type="text" id="guardNationality" placeholder="Indonesia"></td>
          </tr>
          <tr>
            <td>Religion</td>
            <td>:</td>
            <td><select id="guardReligion">
              <option value="" selected>none</option>
              <option value="Islam">Islam</option>
              <option value="Kristen Protestan">Kristen Protestan</option>
              <option value="Katolik">Katolik</option>
              <option value="Buddha">Buddha</option>
              <option value="Hindu">Hindu</option>
              <option value="Kong Hu Cu">Kong Hu Cu</option>
            </select></td>
          </tr>
          <tr>
            <td>Relationship with student</td>
            <td>:</td>
            <td><input type="text" id="guardRelationship" placeholder="Nenek"></td>
          </tr>
        </table>
        <button class="buttons-submit" type="button" id="guardSubmit">Submit</button>
      </section>

    </section>


    <script type="text/javascript" src="js/TU.js"></script>
  </body>
</html>
