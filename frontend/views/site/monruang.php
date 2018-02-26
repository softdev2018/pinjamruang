<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = 'Monitoring Ruangan';
$this->params['breadcrumbs'][] = $this->title;
?>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" />
<div class="site-about">
    <h1><!--?= Html::encode($this->title) ?-->Monitoring Ruangan</h1>

    <!--p>This is the About page. You may modify the following file to customize its content:</p>

    <code><!?= __FILE__ ?></code-->


    <div class="row" style="margin-left: -15px;
      margin-right: -15px;
      margin-bottom: 30px;">
      <div class="panel12" style="width: 1200px; margin-left: -15px; margin-bottom: 18px;
        background-color: #F4F4F4;
        border: 1px solid transparent;
        border-radius: 2px;
        -webkit-box-shadow: 0 1px 1px rgba(0,0,0,0.05);
        box-shadow: 0 1px 1px rgba(0,0,0,0.05);
        color: #000;">
      <div class="responsive-table">
        <div class="pull-left">

        </div>
        <div>
          <label class="pull-right" style="float:right; font-size:15px; color:#000; text-align: center; display: inline-block; font-weight: 700; margin-bottom:5px;">
							<button class=" btn btn-warning" value="primary" disabled=""><span class="fa fa-thumbs-up"></span></button> Kosong
							<button class=" btn btn-success" value="primary" disabled=""><span class="fa fa-check"></span></button>   ACC
							<button class=" btn btn-primary" value="primary" disabled=""><span class="fa fa-lock"></span></button>   Booking
							<button class=" btn btn-danger" value="primary" disabled=""><span class="fa fa-circle-o"></span></button>  Rutin
              <br>
							<br>
					</label>
        </div>
        <center>
          <table class="table striped table-bordered" width="100%" cellspacing="0">
            <thead>
              <tr>
                <th><center>Ruang/Sesi(jam)</center></th>
                <th><center>1 <br/><br/> (08-09)</center></th>
                <th><center>2 <br/><br/> (09-10)</center></th>
                <th><center>3 <br/><br/> (10-11)</center></th>
                <th><center>4 <br/><br/> (11-12)</center></th>
                <th><center>5 <br/><br/> (12-13)</center></th>
                <th><center>6 <br/><br/> (13-14)</center></th>
                <th><center>7 <br/><br/> (14-15)</center></th>
                <th><center>8 <br/><br/> (15-16)</center></th>
                <th><center>9 <br/><br/> (16-17)</center></th>
                <th><center>10 <br/><br/> (17-18)</center></th>
                <th><center>11 <br/><br/> (18-19)</center></th>
                <th><center>12 <br/><br/> (19-20)</center></th>
                <th><center>13 <br/><br/> (20-21)</center></th>
              </tr>
            </thead>
            <tbody id="ruangan">
              <tr>
                <td>Ruangan 1</td>
                <td width="20px"><button class="waves-effect waves-light btn"><span class="fa fa-thumbs-up"></span></button></td>
                <td width="20px"><button class="btn btn-warning disabled"><span class="fa fa-thumbs-up"></span></button></td>
                <td width="20px"><button class=" btn btn-warning disabled"><span class="fa fa-thumbs-up"></span></button></td>
                <td width="20px"><button class=" btn btn-warning disabled"><span class="fa fa-thumbs-up"></span></button></td>
                <td width="20px"><button class=" btn btn-warning disabled"><span class="fa fa-thumbs-up"></span></button></td>
                <td width="20px"><button class=" btn btn-warning disabled"><span class="fa fa-thumbs-up"></span></button></td>
                <td width="20px"><button class=" btn btn-warning disabled"><span class="fa fa-thumbs-up"></span></button></td>
                <td width="20px"><button class=" btn btn-warning disabled"><span class="fa fa-thumbs-up"></span></button></td>
                <td width="20px"><button class=" btn btn-warning disabled"><span class="fa fa-thumbs-up"></span></button></td>
                <td width="20px"><button class=" btn btn-warning disabled"><span class="fa fa-thumbs-up"></span></button></td>
                <td width="20px"><button class=" btn btn-warning disabled"><span class="fa fa-thumbs-up"></span></button></td>
                <td width="20px"><button class=" btn btn-warning disabled"><span class="fa fa-thumbs-up"></span></button></td>
                <td width="20px"><button class=" btn btn-warning disabled"><span class="fa fa-thumbs-up"></span></button></td>
              </tr>

              <tr>
                <td>Ruangan 2</td>
                <td width="20px"><button class=" btn btn-warning disabled"><span class="fa fa-thumbs-up"></span></button></td>
                <td width="20px"><button class=" btn btn-warning disabled"><span class="fa fa-thumbs-up"></span></button></td>
                <td width="20px"><button class=" btn btn-warning disabled"><span class="fa fa-thumbs-up"></span></button></td>
                <td width="20px"><button class=" btn btn-warning disabled"><span class="fa fa-thumbs-up"></span></button></td>
                <td width="20px"><button class=" btn btn-warning disabled"><span class="fa fa-thumbs-up"></span></button></td>
                <td width="20px"><button class=" btn btn-warning disabled"><span class="fa fa-thumbs-up"></span></button></td>
                <td width="20px"><button class=" btn btn-warning disabled"><span class="fa fa-thumbs-up"></span></button></td>
                <td width="20px"><button class=" btn btn-warning disabled"><span class="fa fa-thumbs-up"></span></button></td>
                <td width="20px"><button class=" btn btn-warning disabled"><span class="fa fa-thumbs-up"></span></button></td>
                <td width="20px"><button class=" btn btn-warning disabled"><span class="fa fa-thumbs-up"></span></button></td>
                <td width="20px"><button class=" btn btn-warning disabled"><span class="fa fa-thumbs-up"></span></button></td>
                <td width="20px"><button class=" btn btn-warning disabled"><span class="fa fa-thumbs-up"></span></button></td>
                <td width="20px"><button class=" btn btn-warning disabled"><span class="fa fa-thumbs-up"></span></button></td>
              </tr>

              <tr>
                <td>Ruangan 3</td>
                <td width="20px"><button class=" btn btn-warning disabled"><span class="fa fa-thumbs-up"></span></button></td>
                <td width="20px"><button class=" btn btn-warning disabled"><span class="fa fa-thumbs-up"></span></button></td>
                <td width="20px"><button class=" btn btn-warning disabled"><span class="fa fa-thumbs-up"></span></button></td>
                <td width="20px"><button class=" btn btn-warning disabled"><span class="fa fa-thumbs-up"></span></button></td>
                <td width="20px"><button class=" btn btn-warning disabled"><span class="fa fa-thumbs-up"></span></button></td>
                <td width="20px"><button class=" btn btn-warning disabled"><span class="fa fa-thumbs-up"></span></button></td>
                <td width="20px"><button class=" btn btn-warning disabled"><span class="fa fa-thumbs-up"></span></button></td>
                <td width="20px"><button class=" btn btn-warning disabled"><span class="fa fa-thumbs-up"></span></button></td>
                <td width="20px"><button class=" btn btn-warning disabled"><span class="fa fa-thumbs-up"></span></button></td>
                <td width="20px"><button class=" btn btn-warning disabled"><span class="fa fa-thumbs-up"></span></button></td>
                <td width="20px"><button class=" btn btn-warning disabled"><span class="fa fa-thumbs-up"></span></button></td>
                <td width="20px"><button class=" btn btn-warning disabled"><span class="fa fa-thumbs-up"></span></button></td>
                <td width="20px"><button class=" btn btn-warning disabled"><span class="fa fa-thumbs-up"></span></button></td>
              </tr>

              <tr>
                <td>Ruangan 4</td>
                <td width="20px"><button class=" btn btn-warning disabled"><span class="fa fa-thumbs-up"></span></button></td>
                <td width="20px"><button class=" btn btn-warning disabled"><span class="fa fa-thumbs-up"></span></button></td>
                <td width="20px"><button class=" btn btn-warning disabled"><span class="fa fa-thumbs-up"></span></button></td>
                <td width="20px"><button class=" btn btn-warning disabled"><span class="fa fa-thumbs-up"></span></button></td>
                <td width="20px"><button class=" btn btn-warning disabled"><span class="fa fa-thumbs-up"></span></button></td>
                <td width="20px"><button class=" btn btn-warning disabled"><span class="fa fa-thumbs-up"></span></button></td>
                <td width="20px"><button class=" btn btn-warning disabled"><span class="fa fa-thumbs-up"></span></button></td>
                <td width="20px"><button class=" btn btn-warning disabled"><span class="fa fa-thumbs-up"></span></button></td>
                <td width="20px"><button class=" btn btn-warning disabled"><span class="fa fa-thumbs-up"></span></button></td>
                <td width="20px"><button class=" btn btn-warning disabled"><span class="fa fa-thumbs-up"></span></button></td>
                <td width="20px"><button class=" btn btn-warning disabled"><span class="fa fa-thumbs-up"></span></button></td>
                <td width="20px"><button class=" btn btn-warning disabled"><span class="fa fa-thumbs-up"></span></button></td>
                <td width="20px"><button class=" btn btn-warning disabled"><span class="fa fa-thumbs-up"></span></button></td>
              </tr>
            </tbody>
          </table>
        </center>
      </div>
      </div>
    </div>
  </div>
</div>
