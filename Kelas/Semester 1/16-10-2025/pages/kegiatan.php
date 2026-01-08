<?php 

    $kegiatan = [
        'Senin' => ['Upacara / Apel', 'PPLG', 'Koding & AI', 'PAI', 'IPAS', 'B. Jawa'],
        'Selasa' => ['B. Indo', 'IPAS', 'Sejarah', 'BK', 'PPLG'],
        'Rabu' => ['PPKN', 'PJOK', 'Matematika', 'Bahasa Inggris', 'Seni Budaya'],
        'Kamis' => ['PPLG', 'Informatika', 'Matematika'],
        'Jumat' => ['Senam / Istighosah / Jumat Bersih', 'Bahasa Indonesia', 'Bahasa Inggris', 'IPAS', 'PPLG'],
    ];

    $petugasPiket = [
        'Senin' => ['Hidayat','Yani','Rahman','Laksma','Rendi','Andaru','Fabio','Shifa'],
        'Selasa' => ['Putra','Bilal','Kevin','Dinda Dwi','Wildan','Keyza','Dinda Aulia'],
        'Rabu' => ['Adit','Naufal','Yemima','Nasrul','Chaca','Stella','Cinta'],
        'Kamis' => ['Ragil','Rafa','Erik','Nafilah','Yoga','Revanno','Arina'],
        'Jumat' => ['Alfian','Iman','Mirza','Daiyan','Awa','Geary','Vardhan']
    ]

?>

<h1 style="text-align: center; position:relative; margin-top:50px;">Kegiatan</h1>

<h3 style="text-align: center;">
    SMKN 2 Buduran Sidoarjo
</h3>

<br /> <br /> <br />

<h4 style="text-align: center;">Kegiatan Kelas X-RPL</h4>

<br />

<table class="table table-bordered mx-auto" style="width: 95%; text-align:center">
    <thead class="table-primary">
        <th>Hari</th>
        <th>Jam Ke-</th>
        <th>Jam</th>
        <th>Mata Pelajaran</th>
        <th>Petugas Piket</th>
    </thead>
    <tbody>
        <tr>
            <td rowspan="14" class="table-warning">Senin</td>
            <td>0</td>
            <td>07.00 - 07.35</td>
            <td><?php echo $kegiatan['Senin'][0] ?></td>
            <td rowspan="14"><?php foreach($petugasPiket['Senin'] as $namaPetugasPiket) echo $namaPetugasPiket.'<br>'; ?></td>
        </tr>
        <tr>
            <td>1</td>
            <td rowspan="2">07.35 - 08.45</td>
            <td rowspan="2"><?php echo $kegiatan['Senin'][1] ?></td>
        </tr>
        <tr>
            <td>2</td>
        </tr>
        <tr>
            <td>3</td>
            <td rowspan="2">08.45 - 09.55</td>
            <td rowspan="2"><?php echo $kegiatan['Senin'][2] ?></td>
        </tr>
        <tr>
            <td>4</td>
        </tr>
        <tr>
            <td colspan="3" class="table-success">Istirahat</td>
        </tr>
        <tr>
            <td>5</td>
            <td rowspan="3">10.10 - 11.55</td>
            <td rowspan="3"><?php echo $kegiatan['Senin'][3] ?></td>
        </tr>
        <tr>
            <td>6</td>
        </tr>
        <tr>
            <td>7</td>
        </tr>
        <tr>
            <td colspan="3" class="table-success">Sholat</td>
        </tr>
        <tr>
            <td>8</td>
            <td rowspan="2">12.30 - 13.30</td>
            <td rowspan="2"><?php echo $kegiatan['Senin'][4] ?></td>
        </tr>
        <tr>
            <td>9</td>
        </tr>
        <tr>
            <td>10</td>
            <td rowspan="2">13.30 - 14.30</td>
            <td rowspan="2"><?php echo $kegiatan['Senin'][5] ?></td>
        </tr>
        <tr>
            <td>11</td>
        </tr>

        <tr>
            <td class="table-danger" colspan="5"></td>
        </tr>



        <tr>
            <td rowspan="13" class="table-warning">Selasa</td>
            <td>1</td>
            <td rowspan="2">07.00 - 08.10</td>
            <td rowspan="2"><?php echo $kegiatan['Selasa'][0] ?></td>
            <td rowspan="14"><?php foreach($petugasPiket['Selasa'] as $namaPetugasPiket) echo $namaPetugasPiket.'<br>'; ?></td>
        </tr>
        <tr>
            <td>2</td>
        </tr>
        <tr>
            <td>3</td>
            <td rowspan="2">08.10 - 09.20</td>
            <td rowspan="2"><?php echo $kegiatan['Selasa'][1] ?></td>
        </tr>
        <tr>
            <td>4</td>
        </tr>
        <tr>
            <td colspan="3" class="table-success">Istirahat</td>
        </tr>
        <tr>
            <td>5</td>
            <td rowspan="2">09.35 - 10.45</td>
            <td rowspan="2"><?php echo $kegiatan['Selasa'][2] ?></td>
        </tr>
        <tr>
            <td>6</td>
        </tr>
        <tr>
            <td>7</td>
            <td>10.45 - 11.20</td>
            <td><?php echo $kegiatan['Selasa'][3] ?></td>
        </tr>
        <tr>
            <td>8</td>
            <td>11.20 - 11.55</td>
            <td><?php echo $kegiatan['Selasa'][4] ?></td>
        </tr>
        <tr>
            <td colspan="3" class="table-success">Sholat</td>
        </tr>
        <tr>
            <td>9</td>
            <td rowspan="3">12.30 - 14.00</td>
            <td rowspan="3"><?php echo $kegiatan['Selasa'][4] ?></td>
        </tr>
        <tr>
            <td>10</td>
        </tr>
        <tr>
            <td>11</td>
        </tr>

        <tr>
            <td class="table-danger" colspan="5"></td>
        </tr>



        <tr>
            <td rowspan="13" class="table-warning">Rabu</td>
            <td>1</td>
            <td rowspan="2">07.00 - 08.10</td>
            <td rowspan="2"><?php echo $kegiatan['Rabu'][0] ?></td>
            <td rowspan="14"><?php foreach($petugasPiket['Rabu'] as $namaPetugasPiket) echo $namaPetugasPiket.'<br>'; ?></td>
        </tr>
        <tr>
            <td>2</td>
        </tr>
        <tr>
            <td>3</td>
            <td rowspan="2">08.10 - 09.20</td>
            <td rowspan="2"><?php echo $kegiatan['Rabu'][1] ?></td>
        </tr>
        <tr>
            <td>4</td>
        </tr>
        <tr>
            <td colspan="3" class="table-success">Istirahat</td>
        </tr>
        <tr>
            <td>5</td>
            <td>09.35 - 10.10</td>
            <td><?php echo $kegiatan['Rabu'][1] ?></td>
        </tr>
        <tr>
            <td>6</td>
            <td rowspan="2">10.10 - 11.20</td>
            <td rowspan="2"><?php echo $kegiatan['Rabu'][2] ?></td>
        </tr>
        <tr>
            <td>7</td>
        </tr>
        <tr>
            <td>8</td>
            <td>11.20 - 11.55</td>
            <td><?php echo $kegiatan['Rabu'][3] ?></td>
        </tr>
        <tr>
            <td colspan="3" class="table-success">Sholat</td>
        </tr>
        <tr>
            <td>9</td>
            <td>12.30 - 13.00</td>
            <td><?php echo $kegiatan['Rabu'][3] ?></td>
        </tr>
        <tr>
            <td>10</td>
            <td rowspan="2">13.00 - 14.00</td>
            <td rowspan="2"><?php echo $kegiatan['Rabu'][4] ?></td>
        </tr>
        <tr>
            <td>11</td>
        </tr>

        <tr>
            <td class="table-danger" colspan="5"></td>
        </tr>



        <tr>
            <td rowspan="12" class="table-warning">Kamis</td>
            <td>1</td>
            <td rowspan="4">07.00 - 09.20</td>
            <td rowspan="4"><?php echo $kegiatan['Kamis'][0] ?></td>
            <td rowspan="13"><?php foreach($petugasPiket['Kamis'] as $namaPetugasPiket) echo $namaPetugasPiket.'<br>'; ?></td>
        </tr>
        <tr>
            <td>2</td>
        </tr>
        <tr>
            <td>3</td>
        </tr>
        <tr>
            <td>4</td>
        </tr>
        <tr>
            <td colspan="3" class="table-success">Istirahat</td>
        </tr>
        <tr>
            <td>5</td>
            <td rowspan="4">09.35 - 11.55</td>
            <td rowspan="4"><?php echo $kegiatan['Kamis'][1] ?></td>
        </tr>
        <tr>
            <td>6</td>
        </tr>
        <tr>
            <td>7</td>
        </tr>
        <tr>
            <td>8</td>
        </tr>
        <tr>
            <td colspan="3" class="table-success">Sholat</td>
        </tr>
        <tr>
            <td>9</td>
            <td rowspan="2">12.30 - 13.30</td>
            <td rowspan="2"><?php echo $kegiatan['Kamis'][2] ?></td>
        </tr>
        <tr>
            <td>10</td>
        </tr>

        <tr>
            <td class="table-danger" colspan="5"></td>
        </tr>



        <tr>
            <td rowspan="11" class="table-warning">Jumat</td>
            <td>0</td>
            <td>06.30 - 08.00</td>
            <td><?php echo $kegiatan['Jumat'][0] ?></td>
            <td rowspan="14"><?php foreach($petugasPiket['Jumat'] as $namaPetugasPiket) echo $namaPetugasPiket.'<br>'; ?></td>
        </tr>
        <tr>
            <td>1</td>
            <td rowspan="2">08.00 - 09.00</td>
            <td rowspan="2"><?php echo $kegiatan['Jumat'][1] ?></td>
        </tr>
        <tr>
            <td>2</td>
        </tr>
        <tr>
            <td>3</td>
            <td>09.00 - 09.30</td>
            <td><?php echo $kegiatan['Jumat'][2] ?></td>
        </tr>
        <tr>
            <td colspan="3" class="table-success">Istirahat</td>
        </tr>
        <tr>
            <td>4</td>
            <td>09.45 - 10.15</td>
            <td><?php echo $kegiatan['Jumat'][2] ?></td>
        </tr>
        <tr>
            <td>5</td>
            <td rowspan="2">09.45 - 10.15</td>
            <td rowspan="2"><?php echo $kegiatan['Jumat'][3] ?></td>
        </tr>
        <tr>
            <td>6</td>
        </tr>
        <tr>
            <td colspan="3" class="table-success">Sholat</td>
        </tr>
        <tr>
            <td>7</td>
            <td rowspan="2">12.30 - 13.20</td>
            <td rowspan="2"><?php echo $kegiatan['Jumat'][4] ?></td>
        </tr>
        <tr>
            <td>8</td>
        </tr>


    </tbody>
</table>