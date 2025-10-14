<style>
  @-webkit-keyframes blink {
    50% {
      border-color: #03fc07;
    }
  }

  #bklinkwa {
    border: 4px solid;
    background-color: #ed557b;
    top: 10px;
    left: 10px;
    text-align: center;
    font-family: monospace;

    -webkit-animation: blink .5s step-end infinite alternate;
  }

  body {
    font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
    font-size: 14px;
    line-height: 1.42857143;
    color: #333;
    background-color: #1d0c0c;
  }

  .slash-text {
    color: #000;
    line-height: 1.4;
    font-size: 14px;
    padding: 4px 10px;
    text-shadow: 1px 1px #f4e1e1;
  }

  .borderwa {
    border: 4px solid;
    background-color: #ed557b;
    top: 10px;
    left: 10px;
    text-align: center;
    font-family: monospace;
  }

  .cm-patti h4 {
    font-size: 24px;
    color: #ff0;
    text-shadow: 1px 1px 3px #000000;
  }

  .cm-patti h6 {
    font-size: 15px;
    color: #ff0;
    text-shadow: 1px 1px 3px #000000;
  }

  .cm-patti h1 {
    margin: 0;
    background-image: linear-gradient(45deg, #9c27b0, #e91e63, #9c27b0);
    color: #fff;
    padding-top: 2px;
    border-bottom: 1px solid #ffffff61;
    font-size: 22px;
  }

  .cm-patti .aa55 {
    border-right: 1px solid #e91e63;
  }

  .matka-result h4 {
    background-color: #1a237e !important;
    color: #fff;
    padding-top: 2px;
    padding-bottom: 4px;
    font-size: 30px;
  }
</style>

<style type="text/css">
  .satta-result {}

  .satta-result h4 {
    font-size: 22px;
    background-color: transparent;
    color: #1a237e;
    text-shadow: 1px 1px #d9d9d9
  }

  .satta-result h5 {
    margin: 0;
    font-size: 22px;
    background-color: transparent;
    color: #880e4f;
    text-shadow: 1px 1px #0000001f;
    line-height: 1
  }

  .satta-result h6 {
    color: #7a028d;
    font-size: 15px;
    padding: 2px 0;
    text-shadow: 1px 1px 2px #c4c4c4;
    margin-bottom: 0
  }

  .satta-result div {
    padding: 3px
  }

  .satta-result div:last-child {
    border-bottom-width: 0
  }

  .result_timing,
  .result_timing_right {
    position: absolute;
    color: #7a028d;
    font-size: 15px;
    padding: 2px 0;
    transform: translateY(-158%);
    border-bottom: none !important
  }

  .result_timing {
    left: 14px;
    right: auto
  }

  .result_timing_right {
    right: 14px;
    left: auto
  }

  .btn_chart {
    border: 2px solid #ff006c;
    background-color: #ff006c;
    color: #fff;
    padding: 3px 7px;
    border-radius: 8px 0;
    box-shadow: 0px 0px 1px #000000d6;
    font-size: 12px;
    margin: 2px 0 -1px;
    display: block;
    transition: all .3s;
    text-shadow: 1px 1px 2px #222;
    margin-top: 5px
  }

  .fg-div h4 {
    border-radius: 4px;
    background: #ff006c;
    color: #fff;
    text-shadow: 1px 1px 0 #444;
    letter-spacing: 1px;
    font-size: 24px;
    padding: 4px 4px 4px;
    margin-bottom: 2px
  }

  .mb-1 {
    margin-bottom: 5px
  }

  .p-1 {
    padding: 5px 10px 8px
  }

  .bdr {
    border: 2px solid #eb008b;
    border-radius: 10px 0 10px 10px
  }

  .fg-div h6 {
    font-size: 22px;
    background-color: transparent;
    color: #1a237e;
    text-shadow: 1px 1px #d9d9d9
  }

  .fg-div h5 {
    font-size: 22px;
    color: #880e4f;
    text-shadow: 1px 1px 2px #ffe2c6
  }

  .fg-div .fg-p1 {
    font-size: 22px;
    text-shadow: 1px 1px 2px #ffe2c6
  }

  .fg-div .fg-c1>div {
    border: 2px solid #eb008b;
    border-radius: 10px 0 10px 10px;
    margin: 5px 0;
    padding: 5px
  }

  .fg-div .fg-c1 .fg-p2 {
    font-size: 22px;
    color: #880e4f;
    text-shadow: 1px 1px 2px #ffe2c6;
    border-radius: 4px;
    background: #ff006c;
    color: #fff;
    text-shadow: 1px 1px 0 #444;
    letter-spacing: 1px;
    font-size: 24px;
    padding: 4px 4px 4px;
    margin-bottom: 2px
  }

  .fg-div .fg-c1 .fg-p3 {
    font-size: 22px;
    color: #080808;
    text-shadow: 1px 1px 2px #ffe2c6
  }

  .fg-div .fg-c1 .fg-p4 {
    font-size: 20px
  }
</style>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<div style="display:flex;padding:5px;align-items:center;border:1px solid #eb008b;border-radius:10px 0 10px 10px;justify-content:space-between;margin-bottom:2px;margin-top:-40px;">
  <img src="<?php echo base_url(); ?>images/test6.png" alt="dpboss net LAXMI_PICTURE" width="90" height="68">
  <marquee style="color: black;">
    <?php
    foreach ($noticedata->result() as $row) {
      if ($row->notice2) {
        echo $row->notice2;
      }
    }
    ?>
  </marquee>
</div>
<div style="border: 0px solid #eb008b;border-radius: 10px 0 10px 10px;margin-bottom: 2px;">
  <div class="matka-result">
    <h4>
      <center>☔LIVE RESULT☔</center>
    </h4>
    <div class="matka-card">
      <div class="container-fluid">
        <div class="row gold-res-area">
          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="row gold-payment-type lazy" style="display: block;">
              <div>
                <div class="head head2" id="pc">
                  <h2 style="background-color:#342e36; font-size: 15px; color: yellow;">!!! MATKA LIVE GAME RESULTS !!!</h2>
                </div>
                <?php
                if ($fetch_data->num_rows() > 0) {
                  foreach ($fetch_data->result() as $row) {
                    $bazarid = $row->id;
                    date_default_timezone_set("Asia/Kolkata");

                    $currenttime = time();
                    $currenttime = date('Y-m-d H:i:s', $currenttime);
                    $currenttime = strtotime($currenttime);
                    $resultopenData = '';
                    $resultcloseData = '';
                    $gameResult = '';
                    $openpanaResult = '';
                    $openAAkdaResult = '';
                    $closepanaResult = '';
                    $closeAAkdaResult = '';
                    $currentDate = date('Y-m-d', $currenttime);

                    $sunrise = strtotime("-50 minutes", $currenttime);
                    $sunset = strtotime("+1 minutes", $currenttime);
                    $dateOpen = strtotime($row->open_time);
                    $dateClose = strtotime($row->close_time);

                    $date2 = $sunrise;
                    $date3 = $sunset;


                    if ($dateOpen > $date2 && $dateOpen < $date3) {
                      $openconditiontrue = 1;
                      $recent = 1;
                    } else if ($dateClose > $date2 && $dateClose < $date3) {
                      $closeconditiontrue = 1;
                      $recent = 1;
                    } else {
                      $recent = 0;
                    }
                    //$recent=getRecent($bazarid,'open',$currentDate);
                    if ($recent == 1) {
                      $midnightsunrise = "12:00 am";
                      $midnightsunset = "2:00 am";

                      $date456 = strtotime($midnightsunrise);
                      $date3567 = strtotime($midnightsunset);

                      if ($currenttime > $date456  && $currenttime < $date3567) {
                        $currentDate456 = date('Y-m-d', strtotime("-1 days"));
                        $resultopenData = getResult2($bazarid, 'open', $currentDate456);
                        foreach ($resultopenData->result() as $rowdata) {
                          $openpanaResult = $rowdata->result_pana;
                          $openAAkdaResult = $rowdata->result_AAkda;
                          $aftertimeopen = $rowdata->result_AAkda;
                        }

                        $resultcloseData = getResult2($bazarid, 'close', $currentDate);
                        foreach ($resultcloseData->result() as $rowdata2) {
                          $closepanaResult = $rowdata2->result_pana;
                          $closeAAkdaResult = $rowdata2->result_AAkda;
                          $aftertimeclose = $rowdata->result_AAkda;
                        }

                        if (empty($openpanaResult) and empty($closepanaResult)) {
                          $gameResult = 'Loading...';
                        } else if (!empty($openpanaResult) and empty($closepanaResult)) {
                          $gameResult = $openpanaResult . ' - ' . $openAAkdaResult . ' X - XXX';
                        } else if (empty($openpanaResult) and !empty($closepanaResult)) {
                          $gameResult = 'XXX-X ' . $closeAAkdaResult . ' - ' . $closepanaResult;
                        } else if (!empty($openpanaResult) and !empty($closepanaResult)) {
                          $gameResult = $openpanaResult . '-' . $openAAkdaResult . $closeAAkdaResult . '-' . $closepanaResult;
                        }
                      } else {
                        $resultopenData = getResult($bazarid, 'open', $currentDate);
                        foreach ($resultopenData->result() as $rowdata) {
                          $openpanaResult = $rowdata->result_pana;
                          $openAAkdaResult = $rowdata->result_AAkda;
                          $aftertimeopen = $rowdata->result_AAkda;
                        }

                        $resultcloseData = getResult($bazarid, 'close', $currentDate);
                        foreach ($resultcloseData->result() as $rowdata2) {
                          $closepanaResult = $rowdata2->result_pana;
                          $closeAAkdaResult = $rowdata2->result_AAkda;
                          $aftertimeclose = $rowdata->result_AAkda;
                        }

                        if (empty($openpanaResult) and empty($closepanaResult)) {
                          $gameResult = 'Loading...';
                        } else if (!empty($openpanaResult) and empty($closepanaResult)) {
                          if ($closeconditiontrue == 1) {
                            $gameResult = 'Loading...';
                          } else {
                            $gameResult = $openpanaResult . ' - ' . $openAAkdaResult . ' X - XXX';
                          }
                        } else if (empty($openpanaResult) and !empty($closepanaResult)) {
                          $gameResult = 'XXX-X ' . $closeAAkdaResult . ' - ' . $closepanaResult;
                        } else if (!empty($openpanaResult) and !empty($closepanaResult)) {
                          $gameResult = $openpanaResult . '-' . $openAAkdaResult . $closeAAkdaResult . '-' . $closepanaResult;
                        }
                        unset($closeconditiontrue);
                      }


                      if ($row->listbazar) {
                ?>
                        <div class="g-sing-result" style="background-color: #fcec03;">
                          </style>
                          <h3 style="font-size:22px; font-weight: bold;"><?php echo $row->bazar_name; ?></h3>
                          <ul>
                            <li><span class="blinking"><?php echo $gameResult;   ?></span></li>
                          </ul>
                        </div>
                <?php
                      }
                    }
                  }
                }
                ?>
              </div>
            </div>
          </div>
          <div class="head head2" id="pc">
            <h2 style="background-color:#342e36; font-size: 20px;" onclick="window.location.href=window.location.href">REFRESH</h2>
          </div>
        </div>
      </div>

    </div>
  </div>
</div>
<div>
  <div class="cm-patti">
    <h1>
      <center>Today Lucky Number</center>
    </h1>
    <table class="table table-bordered">
      <tr>
        <th>
          <h6><b>AAKDA</b></h6>
        </th>
        <th>
          <h6><b>PANA</b></h6>
        </th>
        <th>
          <h6><b>JODI</b></h6>
        </th>
        <th>
          <h6><b>MOTOR</b></h6>
        </th>
      </tr>
      <?php
      foreach ($gussing->result() as $row) {
      ?>
        <tr>
          <th>
            <h6><b><?php echo $row->aakda; ?></b></h6>
          </th>
          <th>
            <h6><b><?php echo $row->pana; ?></b></h6>
          </th>
          <th>
            <h6><b><?php echo $row->jodi; ?></b></h6>
          </th>
          <th>
            <h6><b><?php echo $row->motor; ?></b></h6>
          </th>
        </tr>
      <?php
      }
      ?>
    </table>
  </div>
</div>
<div>
  <h2 class="slash-text">
    <h2>MADHUR DAY | MADHUR MORNING | MADHUR NIGHT | DP BOSS | dpboss.net | MADHUR BAZAR | MADHUR DAY CHART | MADHUR MATKA </h2>
    <p class="borderwa">Madhur Morning | Madhur Day | Madhur Night | KALYAN MATKA | MATKA RESULT | KALYAN MATKA TIPS | SATTA MATKA | MATKA.COM |
      MATKA PANA JODI TODAY | BATTA SATKA | MATKA PATTI JODI NUMBER | MATKA RESULTS | MATKA CHART | MATKA JODI |
      SATTA COM | FULL RATE GAME | MATKA GAME | MATKA WAPKA | ALL MATKA RESULT LIVE ONLINE | MATKA RESULT
      | KALYAN MATKA RESULT | MAIN MATKA | madhur morning | madhur day | madhur night </p>
  </h2>
</div>
<div class="container-fluid">
  <div class="row gold-res-area">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
      <div class="row gold-payment-type lazy" style="display: block;">
        <div>
          <div class="head head2" id="pc">
            <h2 style="background-color:#342e36; font-size: 22px; color: yellow;">!!! MATKA ALL GAME RESULTS !!!</h2>
          </div>
          <?php
          if ($fetch_data->num_rows() > 0) {
            foreach ($fetch_data->result() as $row) {
              $bazarid = $row->id;
              date_default_timezone_set("Asia/Kolkata");

              $currenttime = time();
              $currenttime = date('Y-m-d H:i:s', $currenttime);
              $currenttime = strtotime($currenttime);
              $resultopenData = '';
              $resultcloseData = '';
              $gameResult = '';
              $openpanaResult = '';
              $openAAkdaResult = '';
              $closepanaResult = '';
              $closeAAkdaResult = '';
              //$currentDate=date('Y-m-d', $currenttime);

              //$sunrise = "12:01 am";
              //$sunset = "11:00 am";
              //$date1 = $currenttime;
              //$date2 = strtotime($sunrise);
              //$date3 = strtotime ($sunset);
              //echo $date1;
              //if ($date1 > $date2 && $date1 < $date3)
              //{
              // $currentDate=date('Y-m-d',strtotime("-1 days"));
              //echo $currentDate;
              //}else{

              //  $currentDate=date('Y-m-d', $currenttime);
              // echo $currentDate;
              //}
              $sunrise = strtotime("-150 minutes", $currenttime);
              $sunset = strtotime("+1 minutes", $currenttime);
              $dateOpen = strtotime($row->open_time);
              $dateClose = strtotime($row->close_time);

              $date2 = $sunrise;
              $date3 = $sunset;


              if ($dateOpen > $date2 && $dateOpen < $date3) {
                $openconditiontrue = 1;
                $recent = 1;
              } else if ($dateClose > $date2 && $dateClose < $date3) {
                $closeconditiontrue = 1;
                $recent = 1;
              } else {
                $recent = 0;
              }

              if ($recent == 0) {
                $resultopenData = getResult2($bazarid, 'open', $currentDate);
                foreach ($resultopenData->result() as $rowdata) {
                  $openpanaResult = $rowdata->result_pana;
                  $openAAkdaResult = $rowdata->result_AAkda;
                }

                $resultcloseData = getResult2($bazarid, 'close', $currentDate);
                foreach ($resultcloseData->result() as $rowdata2) {
                  $closepanaResult = $rowdata2->result_pana;
                  $closeAAkdaResult = $rowdata2->result_AAkda;
                }

                if (empty($openpanaResult) and empty($closepanaResult)) {
                  $gameResult = 'XXX-XX-XXX';
                } else if (!empty($openpanaResult) and empty($closepanaResult)) {
                  $gameResult = $openpanaResult . ' - ' . $openAAkdaResult . ' X - XXX';
                } else if (empty($openpanaResult) and !empty($closepanaResult)) {
                  $gameResult = 'XXX-X ' . $closeAAkdaResult . ' - ' . $closepanaResult;
                } else if (!empty($openpanaResult) and !empty($closepanaResult)) {
                  $gameResult = $openpanaResult . '-' . $openAAkdaResult . $closeAAkdaResult . '-' . $closepanaResult;
                }
              } else {
                $midnightsunrise = "12:00 am";
                $midnightsunset = "2:00 am";

                $date456 = strtotime($midnightsunrise);
                $date3567 = strtotime($midnightsunset);

                if ($currenttime > $date456  && $currenttime < $date3567) {
                  $currentDate456 = date('Y-m-d', strtotime("-1 days"));
                  $resultopenData = getResult2($bazarid, 'open', $currentDate456);
                  foreach ($resultopenData->result() as $rowdata) {
                    $openpanaResult = $rowdata->result_pana;
                    $openAAkdaResult = $rowdata->result_AAkda;
                    $aftertimeopen = $rowdata->result_AAkda;
                  }

                  $resultcloseData = getResult2($bazarid, 'close', $currentDate);
                  foreach ($resultcloseData->result() as $rowdata2) {
                    $closepanaResult = $rowdata2->result_pana;
                    $closeAAkdaResult = $rowdata2->result_AAkda;
                    $aftertimeclose = $rowdata->result_AAkda;
                  }

                  if (empty($openpanaResult) and empty($closepanaResult)) {
                    $gameResult = 'Loading...';
                  } else if (!empty($openpanaResult) and empty($closepanaResult)) {
                    $gameResult = $openpanaResult . ' - ' . $openAAkdaResult . ' X - XXX';
                  } else if (empty($openpanaResult) and !empty($closepanaResult)) {
                    $gameResult = 'XXX-X ' . $closeAAkdaResult . ' - ' . $closepanaResult;
                  } else if (!empty($openpanaResult) and !empty($closepanaResult)) {
                    $gameResult = $openpanaResult . '-' . $openAAkdaResult . $closeAAkdaResult . '-' . $closepanaResult;
                  }
                } else {

                  $resultopenData = getResult($bazarid, 'open', $currentDate);
                  foreach ($resultopenData->result() as $rowdata) {
                    $openpanaResult = $rowdata->result_pana;
                    $openAAkdaResult = $rowdata->result_AAkda;
                    $aftertimeopen = $rowdata->result_AAkda;
                  }

                  $resultcloseData = getResult($bazarid, 'close', $currentDate);
                  foreach ($resultcloseData->result() as $rowdata2) {
                    $closepanaResult = $rowdata2->result_pana;
                    $closeAAkdaResult = $rowdata2->result_AAkda;
                    $aftertimeclose = $rowdata->result_AAkda;
                  }

                  if (empty($openpanaResult) and empty($closepanaResult)) {
                    $gameResult = 'Loading...';
                  } else if (!empty($openpanaResult) and empty($closepanaResult)) {
                    $gameResult = $openpanaResult . ' - ' . $openAAkdaResult . ' X - XXX';
                  } else if (empty($openpanaResult) and !empty($closepanaResult)) {
                    $gameResult = 'XXX-X ' . $closeAAkdaResult . ' - ' . $closepanaResult;
                  } else if (!empty($openpanaResult) and !empty($closepanaResult)) {
                    $gameResult = $openpanaResult . '-' . $openAAkdaResult . $closeAAkdaResult . '-' . $closepanaResult;
                  }
                }
                unset($closeconditiontrue);
              }

              date_default_timezone_set("Asia/Kolkata");
              $currenttime = time();
              $currenttime = date('Y-m-d H:i:s', $currenttime);
              $currenttime = strtotime($currenttime);
              if (!empty($gameResult)) {
                $orgDate = getresult_time($currentDate, $bazarid);
                $orgd = strtotime($orgDate);
              } else {
                $orgd = 00000;
                $currenttime = 99999;
              }
              echo '<br>';
          ?>
              <div class="satta-result" style="border-color: #aa00c0;">
                <div <?php if (($row->higlightbazar)) { ?>
                  style="background-color: #fcec03;margin-top:-15px;" <?php   } else { ?> style="background-color:#ffd9b3;margin-top:-15px;" <?php } ?>>
                  <?php if ($row->higlightnotice == 1) { ?>
                    <h5>
                      <marquee STYLE="color:red;font-weight:bold; font-size:100%;font-style:normal"><B>
                          <?php echo  $row->Notice; ?>
                    </h5>
                    </B>
                    </marquee>
                  <?php } else { ?>

                    <h5>
                      <marquee STYLE="color:black;font-weight:bold; font-size:100%;"><B>
                          <?php echo  $row->Notice; ?>
                    </h5>
                    </B>
                    </marquee><?php } ?>
                  <center>
                    <h4>
                      <font size=5px"><b><?php echo $row->bazar_name; ?></b></font>
                    </h4>
                    <h5 class="blinking">
                      <font size="5px"><b style="font-size: 30px;"><?php echo $gameResult ?></b></font>
                    </h5>
                    <h6>
                      <font size="4px"><?php echo date('h:i a', strtotime($row->open_time)); ?> &nbsp;&nbsp; <?php echo date('h:i a', strtotime($row->close_time)); ?></font>
                    </h6>
                  </center>
                  <div class="result_timing">
                    <a href="<?php echo base_url(); ?>jodi-chart/<?php echo preg_replace('/[^0-9a-zA-Z]/', '-', strtolower($row->bazar_name));  ?>" class="btn_chart">
                      <font size="3px">Jodi</font>
                    </a>
                  </div>
                  <div class="result_timing_right">
                    <a href="<?php echo base_url(); ?>panel-chart/<?php echo preg_replace('/[^0-9a-zA-Z]/', '-', strtolower($row->bazar_name));  ?>" class="btn_chart">
                      <font size="3px">Panel</font>
                    </a>
                  </div>
                </div>
              </div>
          <?php
            }
          }
          ?>
        </div>
      </div>
    </div>
    <div class="head head2" id="pc">
      <h2 style="background-color:#342e36; font-size: 20px;" onclick="window.location.href=window.location.href">REFRESH</h2>
    </div>
  </div>
</div>
</div>
<div class="container-fluid">
</div>
</div>
<div class="container-fluid">
  <br>
  <div class="container">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
      <div class="row sing-chat-area">
        <div class="head" id="jc">
          <h2 style="background-color:#342e36; font-size: 22px; color: yellow;">ALL MATKA JODI CHART RECORDS</h2>
        </div>
        <ul>
          <?php
          if ($fetch_data->num_rows() > 0) {
            foreach ($fetch_data->result() as $row) {
          ?>
              <a href="<?php echo base_url(); ?>jodi-chart/<?php echo preg_replace('/[^0-9a-zA-Z]/', '-', strtolower($row->bazar_name)); ?>">
                <li>
                  <p><?php echo $row->bazar_name; ?></p>
                </li>
              </a>
          <?php
            }
          }
          ?>
        </ul>
      </div>
    </div>
  </div>
</div>
<div class="container-fluid">
  <div class="container">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
      <div class="row sing-chat-area">
        <div class="head head2" id="pc">
          <h2 style="background-color:#342e36; font-size: 22px; color: yellow;">ALL MATKA PANEL CHART RECORDS</h2>
        </div>
        <ul>
          <?php
          if ($fetch_data->num_rows() > 0) {
            foreach ($fetch_data->result() as $row) {
          ?>
              <a href="<?php echo base_url(); ?>panel-chart/<?php echo preg_replace('/[^0-9a-zA-Z]/', '-', strtolower($row->bazar_name)); ?>">
                <li>
                  <p><?php echo $row->bazar_name; ?></p>
                </li>
              </a>
          <?php

            }
          }
          ?>
        </ul>
      </div>
    </div>
  </div>
</div>
<div class="container-fluid">
  <div class="head head2" id="pc">
    <h2 style="background-color:#342e36; font-size: 25px; font-weight: bold; font-size: 25px; color: yellow;">
      madhurbazar madhur Kalyan main Matka Result</h2>
    <h4 class="borderwa"> India's No.1 Matka Site Heartly Welcome. Here You Will
      Get Perfect Guessing By Top Guesser And Fast Matka Result. Aaj Ka Satta Kalyan Fix
      Single Jodi Free Update Here You Find Top Matka Market Of India Kalyan Main Milan Rajdhani* *kalyan Matka Tips *fast Matka Result
      *kalyan Main Rajdhani Matka Chart *Matka Guessing By madhurbazar.com By App Best Matka Site By madhurbazar.com</h4>
  </div>
</div>
<div class="container-fluid">
  <div class="row gold-time-table">
    <div class="head" id="jc">
      <h2 style="background-color:#342e36; font-size: 22px; color: yellow;">!! TIME TABLE !!</h2>
    </div>
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
      <div class="gcon-table">
        <table>
          <tr style="font-weight:bold;">
            <th style="background-color: #9b0000;">BAZAAR</th>
            <th style="background-color: #9b0000;">OPEN TIME</th>
            <th style="background-color: #9b0000;">CLOSE TIME</th>
          </tr>
          <?php
          if ($fetch_data->num_rows() > 0) {
            foreach ($fetch_data->result() as $row) {
          ?>
              <tr style="font-weight:bold;font-size:15px;">
                <td><?php echo $row->bazar_name; ?></td>
                <td><?php echo $row->open_block_time; ?></td>
                <td><?php echo $row->close_block_time; ?></td>
              <tr>
              <?php
            }
          } else {
              ?>
              <tr>
                <td colspan="3">No Data Found</td>

              </tr>
            <?php
          }
            ?>
        </table>
      </div>
    </div>
  </div>
</div>

<?php
if ($meta) {
  if (!empty($meta->page_html)) {
    echo '<div class="container-fluid"><div style="margin-top:4rem;margin-bottom:5rem;font-style: normal;">' . $meta->page_html . '</div></div>';
  }
}
?>