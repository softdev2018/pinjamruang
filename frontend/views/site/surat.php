<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
//use common\models\Jabatan;
use yii\helpers\Url;
//use common\models\TtdSurat;
//use common\models\Fakultas;
//use common\models\Jurusan;
//use common\models\Universitas;
?>

<html>
<head>
<style>

.table1 {
    padding: 0px 20px 0px;
    text-align: justify;
    text-indent: 50px;
}

.table2 {
    text-align: center;
}
p {
    padding: 0px 20px 0px;
    text-align: justify;
    text-indent: 50px;
}


</style>
</head>
<body>
            <table width="100%">
                    <tr>
                        <td style="text-align:center;" rowspan="5">
                          <img src="<?= Url::to("@web/uploads/logo.jpg", true) ?>" width="90px"/>
                        </td>
                        <td style="text-align:center;">PEMERINTAH KOTA SURAKARTA
                        <br/><h3>
                        <b> BADAN KEPEGAWAIAN, PENDIDIKAN <br/>
                        DAN PELATIHAN DAERAH
                        </b></h3>
                        Jalan Jend. Sudirman No.2 Telepon (0271) 642020 Psw. 465, 465 Fax. (0271) 638088
                        <br/> Website : bkd.surakarta.go.id E-mail : bkppd@surakarta.go.id
                        <br/>S U R A K A R T A
                        <br/>Kode Pos 57111
                        </td>
                    </tr>

                    </table>
                    <hr size="5">

    <table width="100%" >
        <tr>
            <td>
                <div class="logo">
                <center>
                    <center><h4>SURAT KETERANGAN GELAR AKADEMIK DAN SEBUTAN PROFESI <br/>
                    NOMOR : <!--?php echo $model->no_kukuh; ?-->123456789 </h4></center>
                </center>
                </div>
            </td>
    </tr>
    </table>
                   <p>
                   Berdasarkan Surat Izin <!--?php echo $pengajuan->ttd_izin_belajar; ?--> Nomor :
                    <b><!--?php echo $pengajuan->no_izin_belajar; ?--></b> tanggal <b><!--?php echo $pengajuan->tgl_izin_belajar; ?--></b> dan Ijazah Pendidikan Nomor : <b><!--?php echo $pengajuan->no_ijazah; ?--></b> tanggal <b><!--?php echo $pengajuan->tgl_ijazah; ?--></b> bahwa Pegawai Negeri Sipil:</p>

        <table width="100%" >
            <tr>
                <td width="4%"></td>
                <td width="5%">1.</td>
                <td width="180px"><label>Nama</label></td>
                <td width="2px">:</td>
                <td><!--?php echo $model->nama; ?-->HAHhahaha</td>
            </tr>
            <tr>
                <td width="4%"></td>
                <td width="5%">2.</td>
                <td><label>NIP</label></td>
                <td>:</td>
                <td><!--?php echo $model->nip; ?-->012345785661</td>
            </tr>
            <tr>
                <td width="4%"></td>
                <td width="5%">4.</td>
                <td><label>Pangkat / Golongan</label></td>
                <td>:</td>
                <td><!--?php echo $model->gol; ?--></td>
            </tr>
            <tr>
                <td width="4%"></td>
                <td width="5%">4.</td>
                <td><label>Jabatan</label></td>
                <td>:</td>
                <td><!--?php echo $jabatan->jabatan; ?-->Mahasiswa</td>
            </tr>
            <tr>
                <td width="4%"></td>
                <td width="5%">5.</td>
                <td><label>Unit Kerja</label></td>
                <td>:</td>
                <td><!--?php echo $uk->unit_kj; ?--></td>
            </tr>
        </tr>
        </table>

    <table class="table1" >
        <tr>
            <td>
                <div >
                   Telah menyelesaikan pendidikan pada:
                </div>
            </td>
    </tr>
    </table>

        <table width="75%">

            <tr>
                <td width="13%"></td>
                <td width="5%">a.</td>
                <td width="150px"><label>Jenjang</label></td>
                <td width="2px">:</td>
                <td><!--?php echo $pengajuan->jenjang; ?-->Sarjana</td>
            </tr>
            <tr>
                <td width="13%"></td>
                <td width="5%">b.</td>
                <td><label>Fakultas</label></td>
                <td>:</td>
                <td><!--?php $models = Fakultas::find()->where(['id_fakultas'=>$pengajuan->id_fakultas])->one();
                            echo $models->fakultas; ?-->Teknik</td>
            </tr>
            <tr>
                <td width="13%"></td>
                <td width="5%">d.</td>
                <td><label>Program Studi</label></td>
                <td>:</td>
                <td><!--?php $models = Jurusan::find()->where(['id_jurusan'=>$pengajuan->id_prodi])->one();
                            echo $models->jurusan; ?-->Teknik Elektro</td>
            </tr>
            <tr>
                <td width="13%"></td>
                <td width="5%">c.</td>
                <td><label>Universitas</label></td>
                <td>:</td>
                <td><!--?php $models = Universitas::find()->where(['id_univ'=>$pengajuan->id_univ])->one();
                            echo $models->univ; ?--> Sebelas Maret
                </td>
            </tr>
            <tr>
                <td width="13%"></td>
                <td width="5%">d.</td>
                <td><label>Gelar Pendidikan</label></td>
                <td>:</td>
                <td><!--?php echo $pengajuan->gelar; ?-->Teknik Elektro</td>
            </tr>

        </tr>
        </table>
<p>Sehubungan dengan itu Pegawai Negeri Sipil yang bersangkutan dinyatakan dapat menggunakan gelar akademik dan sebutan profesi pada semua urusan dinas dan tata naskah surat resmi pemerintah serta untuk administrasi kepegawaian, dengan ketentuan:</p>
<ol>
  <li>Surat Keterangan ini dinyatakan tidak berlaku apabila ternyata dikemudian hari terbukti bahwa dalam proses belajar mengajar yang ditempuh oleh yang bersangkutan maupun gelar kesarjanaan diperoleh melalui cara-cara yang tidak sesuai dengan kaidah / norma akademik;</li>
  <li>Pelanggaran dalam hal penggunaan gelar dan atau penggunaan ijazah atau Surat Tanda Lulus yang tidak sah akan dikenai sanksi tindakan administratif atau tindakan disiplin Pegawai Negeri Sipil menurut peraturan perundang - undangan yang berlaku.</li>
</ol>
    <table class="table2">
        <tr>
            <td></td>
            <td width="40%"> Surakarta, 9 Mei 2017</td>
        </tr>
        <tr>
            <td></td>
            <td width="40%"> <b> an. WALIKOTA SURAKARTA</b></td>
        </tr>
        <tr>
            <td></td>
            <td width="40%"> <!--?php echo $ttd->jabatan; ?-->
            </td>
        </tr>
        </table>
        <br/>
        <br/>
            <table class="table2" width="100%">
        <tr>
            <td></td>
            <td width="40%"> <b> <!--?php echo $ttd->nama; ?-->haha </b></td>
        </tr>
        <tr>
            <td></td>
            <td width="40%"> <!--?php echo $ttd->jenis_jab; ?-->sarjana</td>
        </tr>
        <tr>
            <td></td>
            <td width="40%"> NIP. <!--?php echo $ttd->nip; ?-->
            </td>
        </tr>

        </table>
    <table class="table1">
        <tr>
            <td> Tembusan :</td>
        </tr>
        <tr>
            <td> 1. Menteri Dalam Negeri di Jakarta;</td>
        </tr>
    </table>

</body>
</html>
