 <?php

$aakd_data=gameDataByBazarAdmin('aakda',date('Y-m-d',strtotime($date)),$bazar_id,$bazar_type);

foreach($aakd_data->result() as $rowd){

$data_single['0']=$rowd->value1;
$data_single['1']=$rowd->value2;
$data_single['2']=$rowd->value3;
$data_single['3']=$rowd->value4;
$data_single['4']=$rowd->value5;
$data_single['5']=$rowd->value6;
$data_single['6']=$rowd->value7;
$data_single['7']=$rowd->value8;
$data_single['8']=$rowd->value9;
$data_single['9']=$rowd->value10;

//echo $single0;
}

arsort($data_single);
$array4 = array_unique($data_single);
foreach ($array4 as $key => $val) {
    if (!array_key_exists($key,$data_single)) unset($array4[$key]);
}
$gamename='single';
$date=date('Y-m-d',strtotime($date));
$bazar =$bazar_id;
$category = $bazar_type;

$pana['128'] = retAdmin_t('n128',$gamename,$date,$bazar,$category);
$pana['129'] = retAdmin_t('n129',$gamename,$date,$bazar,$category);
$pana['120'] = retAdmin_t('n120',$gamename,$date,$bazar,$category);
$pana['130'] = retAdmin_t('n130',$gamename,$date,$bazar,$category);
$pana['140'] = retAdmin_t('n140',$gamename,$date,$bazar,$category);
$pana['123'] = retAdmin_t('n123',$gamename,$date,$bazar,$category);
$pana['124'] = retAdmin_t('n124',$gamename,$date,$bazar,$category);
$pana['125'] = retAdmin_t('n125',$gamename,$date,$bazar,$category);
$pana['126'] = retAdmin_t('n126',$gamename,$date,$bazar,$category);
$pana['127'] = retAdmin_t('n127',$gamename,$date,$bazar,$category);

$pana['290'] = retAdmin_t('n290',$gamename,$date,$bazar,$category);
$pana['246'] = retAdmin_t('n246',$gamename,$date,$bazar,$category);
$pana['247'] = retAdmin_t('n247',$gamename,$date,$bazar,$category);
$pana['248'] = retAdmin_t('n248',$gamename,$date,$bazar,$category);
$pana['258'] = retAdmin_t('n258',$gamename,$date,$bazar,$category);
$pana['259'] = retAdmin_t('n259',$gamename,$date,$bazar,$category);
$pana['278'] = retAdmin_t('n278',$gamename,$date,$bazar,$category);
$pana['279'] = retAdmin_t('n279',$gamename,$date,$bazar,$category);
$pana['289'] = retAdmin_t('n289',$gamename,$date,$bazar,$category);
$pana['235'] = retAdmin_t('n235',$gamename,$date,$bazar,$category);

$pana['579'] = retAdmin_t('n579',$gamename,$date,$bazar,$category);
$pana['589'] = retAdmin_t('n589',$gamename,$date,$bazar,$category);
$pana['670'] = retAdmin_t('n670',$gamename,$date,$bazar,$category);
$pana['680'] = retAdmin_t('n680',$gamename,$date,$bazar,$category);
$pana['690'] = retAdmin_t('n690',$gamename,$date,$bazar,$category);
$pana['457'] = retAdmin_t('n457',$gamename,$date,$bazar,$category);
$pana['467'] = retAdmin_t('n467',$gamename,$date,$bazar,$category);
$pana['468'] = retAdmin_t('n468',$gamename,$date,$bazar,$category);
$pana['478'] = retAdmin_t('n478',$gamename,$date,$bazar,$category);
$pana['569'] = retAdmin_t('n569',$gamename,$date,$bazar,$category);

$pana['137'] = retAdmin_t('n137',$gamename,$date,$bazar,$category);
$pana['138'] = retAdmin_t('n138',$gamename,$date,$bazar,$category);
$pana['139'] = retAdmin_t('n139',$gamename,$date,$bazar,$category);
$pana['149'] = retAdmin_t('n149',$gamename,$date,$bazar,$category);
$pana['159'] = retAdmin_t('n159',$gamename,$date,$bazar,$category);
$pana['150'] = retAdmin_t('n150',$gamename,$date,$bazar,$category);
$pana['160'] = retAdmin_t('n160',$gamename,$date,$bazar,$category);
$pana['134'] = retAdmin_t('n134',$gamename,$date,$bazar,$category);
$pana['135'] = retAdmin_t('n135',$gamename,$date,$bazar,$category);
$pana['136'] = retAdmin_t('n136',$gamename,$date,$bazar,$category);

$pana['380'] = retAdmin_t('n380',$gamename,$date,$bazar,$category);
$pana['345'] = retAdmin_t('n345',$gamename,$date,$bazar,$category);
$pana['256'] = retAdmin_t('n256',$gamename,$date,$bazar,$category);
$pana['257'] = retAdmin_t('n257',$gamename,$date,$bazar,$category);
$pana['267'] = retAdmin_t('n267',$gamename,$date,$bazar,$category);
$pana['268'] = retAdmin_t('n268',$gamename,$date,$bazar,$category);
$pana['340'] = retAdmin_t('n340',$gamename,$date,$bazar,$category);
$pana['350'] = retAdmin_t('n350',$gamename,$date,$bazar,$category);
$pana['360'] = retAdmin_t('n360',$gamename,$date,$bazar,$category);
$pana['370'] = retAdmin_t('n370',$gamename,$date,$bazar,$category);
$pana['678'] = retAdmin_t('n678',$gamename,$date,$bazar,$category);
$pana['679'] = retAdmin_t('n679',$gamename,$date,$bazar,$category);
$pana['689'] = retAdmin_t('n689',$gamename,$date,$bazar,$category);
$pana['789'] = retAdmin_t('n789',$gamename,$date,$bazar,$category);
$pana['780'] = retAdmin_t('n780',$gamename,$date,$bazar,$category);
$pana['790'] = retAdmin_t('n790',$gamename,$date,$bazar,$category);
$pana['890'] = retAdmin_t('n890',$gamename,$date,$bazar,$category);
$pana['567'] = retAdmin_t('n567',$gamename,$date,$bazar,$category);
$pana['568'] = retAdmin_t('n568',$gamename,$date,$bazar,$category);
$pana['578'] = retAdmin_t('n578',$gamename,$date,$bazar,$category);

    $pana['146'] = retAdmin_t('n146',$gamename,$date,$bazar,$category);
    $pana['147'] = retAdmin_t('n147',$gamename,$date,$bazar,$category);
    $pana['148'] = retAdmin_t('n148',$gamename,$date,$bazar,$category);
    $pana['158'] = retAdmin_t('n158',$gamename,$date,$bazar,$category);
    $pana['168'] = retAdmin_t('n168',$gamename,$date,$bazar,$category);
    $pana['169'] = retAdmin_t('n169',$gamename,$date,$bazar,$category);
    $pana['179'] = retAdmin_t('n179',$gamename,$date,$bazar,$category);
    $pana['170'] = retAdmin_t('n170',$gamename,$date,$bazar,$category);
    $pana['180'] = retAdmin_t('n180',$gamename,$date,$bazar,$category);
    $pana['145'] = retAdmin_t('n145',$gamename,$date,$bazar,$category);
    $pana['470'] = retAdmin_t('n470',$gamename,$date,$bazar,$category);
    $pana['390'] = retAdmin_t('n390',$gamename,$date,$bazar,$category);
    $pana['346'] = retAdmin_t('n346',$gamename,$date,$bazar,$category);
    $pana['347'] = retAdmin_t('n347',$gamename,$date,$bazar,$category);
    $pana['348'] = retAdmin_t('n348',$gamename,$date,$bazar,$category);
    $pana['349'] = retAdmin_t('n349',$gamename,$date,$bazar,$category);
    $pana['359'] = retAdmin_t('n359',$gamename,$date,$bazar,$category);
    $pana['369'] = retAdmin_t('n369',$gamename,$date,$bazar,$category);
    $pana['379'] = retAdmin_t('n379',$gamename,$date,$bazar,$category);
    $pana['389'] = retAdmin_t('n389',$gamename,$date,$bazar,$category);
    $pana['236'] = retAdmin_t('n236',$gamename,$date,$bazar,$category);
    $pana['156'] = retAdmin_t('n156',$gamename,$date,$bazar,$category);
    $pana['157'] = retAdmin_t('n157',$gamename,$date,$bazar,$category);
    $pana['167'] = retAdmin_t('n167',$gamename,$date,$bazar,$category);
    $pana['230'] = retAdmin_t('n230',$gamename,$date,$bazar,$category);
    $pana['178'] = retAdmin_t('n178',$gamename,$date,$bazar,$category);
    $pana['250'] = retAdmin_t('n250',$gamename,$date,$bazar,$category);
    $pana['189'] = retAdmin_t('n189',$gamename,$date,$bazar,$category);
    $pana['270'] = retAdmin_t('n270',$gamename,$date,$bazar,$category);
    $pana['190'] = retAdmin_t('n190',$gamename,$date,$bazar,$category); 
    $pana['489'] = retAdmin_t('n489',$gamename,$date,$bazar,$category);
    $pana['480'] = retAdmin_t('n480',$gamename,$date,$bazar,$category);
    $pana['490'] = retAdmin_t('n490',$gamename,$date,$bazar,$category);
    $pana['356'] = retAdmin_t('n356',$gamename,$date,$bazar,$category);
    $pana['357'] = retAdmin_t('n357',$gamename,$date,$bazar,$category);
    $pana['358'] = retAdmin_t('n358',$gamename,$date,$bazar,$category);
    $pana['368'] = retAdmin_t('n368',$gamename,$date,$bazar,$category);
    $pana['378'] = retAdmin_t('n378',$gamename,$date,$bazar,$category);
    $pana['450'] = retAdmin_t('n450',$gamename,$date,$bazar,$category);
    $pana['460'] = retAdmin_t('n460',$gamename,$date,$bazar,$category);
    $pana['245'] = retAdmin_t('n245',$gamename,$date,$bazar,$category);
    $pana['237'] = retAdmin_t('n237',$gamename,$date,$bazar,$category);
    $pana['238'] = retAdmin_t('n238',$gamename,$date,$bazar,$category);
    $pana['239'] = retAdmin_t('n239',$gamename,$date,$bazar,$category);
    $pana['249'] = retAdmin_t('n249',$gamename,$date,$bazar,$category);
    $pana['240'] = retAdmin_t('n240',$gamename,$date,$bazar,$category);
    $pana['269'] = retAdmin_t('n269',$gamename,$date,$bazar,$category);
    $pana['260'] = retAdmin_t('n260',$gamename,$date,$bazar,$category);
    $pana['234'] = retAdmin_t('n234',$gamename,$date,$bazar,$category);
    $pana['280'] = retAdmin_t('n280',$gamename,$date,$bazar,$category);
    $pana['560'] = retAdmin_t('n560',$gamename,$date,$bazar,$category);
    $pana['570'] = retAdmin_t('n570',$gamename,$date,$bazar,$category);
    $pana['580'] = retAdmin_t('n580',$gamename,$date,$bazar,$category);
    $pana['590'] = retAdmin_t('n590',$gamename,$date,$bazar,$category);
    $pana['456'] = retAdmin_t('n456',$gamename,$date,$bazar,$category);
    $pana['367'] = retAdmin_t('n367',$gamename,$date,$bazar,$category);
    $pana['458'] = retAdmin_t('n458',$gamename,$date,$bazar,$category);
    $pana['459'] = retAdmin_t('n459',$gamename,$date,$bazar,$category);
    $pana['469'] =  retAdmin_t('n469',$gamename,$date,$bazar,$category);
    $pana['479'] =  retAdmin_t('n479',$gamename,$date,$bazar,$category); 

    $gamename='double';

      $pana['100'] =  retAdmin_t('n100',$gamename,$date,$bazar,$category);
      $pana['200'] =  retAdmin_t('n200',$gamename,$date,$bazar,$category);
      $pana['300'] =  retAdmin_t('n300',$gamename,$date,$bazar,$category);
      $pana['400'] =  retAdmin_t('n400',$gamename,$date,$bazar,$category);
      $pana['500'] =  retAdmin_t('n500',$gamename,$date,$bazar,$category);
      $pana['600'] =  retAdmin_t('n600',$gamename,$date,$bazar,$category);
      $pana['700'] =  retAdmin_t('n700',$gamename,$date,$bazar,$category);
      $pana['800'] =  retAdmin_t('n800',$gamename,$date,$bazar,$category);
      $pana['900'] =  retAdmin_t('n900',$gamename,$date,$bazar,$category);
      $pana['226'] =  retAdmin_t('n226',$gamename,$date,$bazar,$category);
      $pana['335'] =  retAdmin_t('n335',$gamename,$date,$bazar,$category);
      $pana['336'] =  retAdmin_t('n336',$gamename,$date,$bazar,$category);
      $pana['355'] =  retAdmin_t('n355',$gamename,$date,$bazar,$category);
      $pana['338'] =  retAdmin_t('n338',$gamename,$date,$bazar,$category); 
      $pana['339'] =  retAdmin_t('n339',$gamename,$date,$bazar,$category);
      $pana['448'] =  retAdmin_t('n448',$gamename,$date,$bazar,$category);
      $pana['223'] =  retAdmin_t('n223',$gamename,$date,$bazar,$category);
      $pana['288'] =  retAdmin_t('n288',$gamename,$date,$bazar,$category);
      $pana['225'] =  retAdmin_t('n225',$gamename,$date,$bazar,$category);
      $pana['668'] =  retAdmin_t('n668',$gamename,$date,$bazar,$category);
      $pana['344'] =  retAdmin_t('n344',$gamename,$date,$bazar,$category);
      $pana['499'] =  retAdmin_t('n499',$gamename,$date,$bazar,$category);
      $pana['445'] =  retAdmin_t('n445',$gamename,$date,$bazar,$category);
      $pana['446'] =  retAdmin_t('n446',$gamename,$date,$bazar,$category);
      $pana['366'] =  retAdmin_t('n366',$gamename,$date,$bazar,$category);
      $pana['446'] =  retAdmin_t('n446',$gamename,$date,$bazar,$category);
      $pana['377'] =  retAdmin_t('n377',$gamename,$date,$bazar,$category);
      $pana['440'] =  retAdmin_t('n440',$gamename,$date,$bazar,$category);
      $pana['388'] =  retAdmin_t('n388',$gamename,$date,$bazar,$category);
      $pana['488'] =  retAdmin_t('n488',$gamename,$date,$bazar,$category);
      $pana['119'] =  retAdmin_t('n119',$gamename,$date,$bazar,$category);
      $pana['110'] =  retAdmin_t('n110',$gamename,$date,$bazar,$category);
      $pana['166'] =  retAdmin_t('n166',$gamename,$date,$bazar,$category);
      $pana['112'] =  retAdmin_t('n112',$gamename,$date,$bazar,$category);
      $pana['113'] =  retAdmin_t('n113',$gamename,$date,$bazar,$category);
      $pana['114'] =  retAdmin_t('n114',$gamename,$date,$bazar,$category);
      $pana['115'] =  retAdmin_t('n115',$gamename,$date,$bazar,$category);
      $pana['116'] =  retAdmin_t('n116',$gamename,$date,$bazar,$category);
      $pana['117'] =  retAdmin_t('n117',$gamename,$date,$bazar,$category);
      $pana['118'] =  retAdmin_t('n118',$gamename,$date,$bazar,$category);
      $pana['399'] =  retAdmin_t('n399',$gamename,$date,$bazar,$category);
      $pana['660'] =  retAdmin_t('n660',$gamename,$date,$bazar,$category);
      $pana['599'] =  retAdmin_t('n599',$gamename,$date,$bazar,$category);
      $pana['455'] =  retAdmin_t('n455',$gamename,$date,$bazar,$category);
      $pana['447'] =  retAdmin_t('n447',$gamename,$date,$bazar,$category);
      $pana['556'] =  retAdmin_t('n556',$gamename,$date,$bazar,$category);
      $pana['449'] =  retAdmin_t('n449',$gamename,$date,$bazar,$category);
      $pana['477'] =  retAdmin_t('n477',$gamename,$date,$bazar,$category); 
      $pana['559'] =  retAdmin_t('n559',$gamename,$date,$bazar,$category); 
      $pana['334'] =  retAdmin_t('n334',$gamename,$date,$bazar,$category); 
      $pana['155'] =  retAdmin_t('n155',$gamename,$date,$bazar,$category);
      $pana['228'] =  retAdmin_t('n228',$gamename,$date,$bazar,$category); 
      $pana['229'] =  retAdmin_t('n229',$gamename,$date,$bazar,$category);
      $pana['220'] =  retAdmin_t('n220',$gamename,$date,$bazar,$category);
      $pana['122'] =  retAdmin_t('n122',$gamename,$date,$bazar,$category);
      $pana['277'] =  retAdmin_t('n277',$gamename,$date,$bazar,$category);
      $pana['133'] =  retAdmin_t('n133',$gamename,$date,$bazar,$category);  
      $pana['224'] =  retAdmin_t('n224',$gamename,$date,$bazar,$category); 
      $pana['144'] =  retAdmin_t('n144',$gamename,$date,$bazar,$category);  
      $pana['299'] =  retAdmin_t('n299',$gamename,$date,$bazar,$category);  
      $pana['588'] =  retAdmin_t('n588',$gamename,$date,$bazar,$category); 
      $pana['688'] =  retAdmin_t('n688',$gamename,$date,$bazar,$category);  
      $pana['779'] =  retAdmin_t('n779',$gamename,$date,$bazar,$category);
      $pana['699'] =  retAdmin_t('n699',$gamename,$date,$bazar,$category); 
      $pana['799'] =  retAdmin_t('n799',$gamename,$date,$bazar,$category);  
      $pana['880'] =  retAdmin_t('n880',$gamename,$date,$bazar,$category); 
      $pana['557'] =  retAdmin_t('n557',$gamename,$date,$bazar,$category);  
      $pana['558'] =  retAdmin_t('n558',$gamename,$date,$bazar,$category); 
      $pana['577'] =  retAdmin_t('n577',$gamename,$date,$bazar,$category); 
      $pana['550'] =  retAdmin_t('n550',$gamename,$date,$bazar,$category); 
      $pana['227'] =  retAdmin_t('n227',$gamename,$date,$bazar,$category); 
      $pana['255'] =  retAdmin_t('n255',$gamename,$date,$bazar,$category); 
      $pana['337'] =  retAdmin_t('n337',$gamename,$date,$bazar,$category); 
      $pana['266'] =  retAdmin_t('n266',$gamename,$date,$bazar,$category); 
      $pana['177'] =  retAdmin_t('n177',$gamename,$date,$bazar,$category); 
      $pana['330'] =  retAdmin_t('n330',$gamename,$date,$bazar,$category);
      $pana['188'] =  retAdmin_t('n188',$gamename,$date,$bazar,$category); 
      $pana['233'] =  retAdmin_t('n233',$gamename,$date,$bazar,$category);  
      $pana['199'] =  retAdmin_t('n199',$gamename,$date,$bazar,$category);  
      $pana['244'] =  retAdmin_t('n244',$gamename,$date,$bazar,$category);
      $pana['669'] =  retAdmin_t('n669',$gamename,$date,$bazar,$category);  
      $pana['778'] =  retAdmin_t('n778',$gamename,$date,$bazar,$category);  
      $pana['788'] =  retAdmin_t('n788',$gamename,$date,$bazar,$category);
      $pana['770'] =  retAdmin_t('n770',$gamename,$date,$bazar,$category);
      $pana['889'] =  retAdmin_t('n889',$gamename,$date,$bazar,$category);
      $pana['899'] =  retAdmin_t('n899',$gamename,$date,$bazar,$category);
      $pana['566'] =  retAdmin_t('n566',$gamename,$date,$bazar,$category);
      $pana['990'] =  retAdmin_t('n990',$gamename,$date,$bazar,$category); 
      $pana['667'] =  retAdmin_t('n667',$gamename,$date,$bazar,$category); 
      $pana['677'] =  retAdmin_t('n677',$gamename,$date,$bazar,$category);

      $gamename='triple';
      $triple_data=rettripledataAdmin($gamename,$date,$bazar,$category);

foreach($triple_data->result() as $rowtriple){

$pana['777']=$rowtriple->value1;
$pana['444']=$rowtriple->value2;
$pana['111']=$rowtriple->value3;
$pana['888']=$rowtriple->value4;
$pana['555']=$rowtriple->value5;
$pana['222']=$rowtriple->value6;
$pana['999']=$rowtriple->value7;
$pana['666']=$rowtriple->value8;
$pana['333']=$rowtriple->value9;
$pana['000']=$rowtriple->value10;

//echo $single0;
}
 
$array2 = array_unique($pana);
foreach ($array2 as $key => $val) {
    if (!array_key_exists($key,$pana)) unset($array2[$key]);
}
arsort($array2);
foreach($array2 as $key => $value)          
    if(empty($value)) 
        unset($array2[$key]); 

?>   <div id="home4" class="tab-pane in active">
                          <div class="row">
                      <div class="col-sm-6" class="widget-container-col ui-sortable" id="widget-container-col-2">
                      <div class="widget-box widget-color-blue ui-sortable-handle" id="widget-box-2">
                        <div class="widget-header">
                          <h5 class="widget-title bigger lighter">
                          
                         PANA
                            
                          </h5>

                          
                        </div>

                        <div class="widget-body">
                          <div class="widget-main no-padding" style="overflow: scroll;height: 250px;">
                            <table class="table table-striped table-bordered table-hover">
                              <thead class="thin-border-bottom">
                                <tr>
                                 

                                  <th>
                                    
                                    PANA
                                  </th>
                                  <th class=""><i class="ace-icon fa fa-inr"></i>AMOUNT</th>
                                </tr>
                              </thead>
                               <tbody>
                                  <?php $i=0; foreach($array2 as $x=>$x_value)
                                       {  if($x_value > 0 and $i<20){?>

                                       <tr>
                                        <?php $pana_no = array_keys($pana,$x_value);?>
                                         <td style=" width: 200px;word-break: break-all;"><?php for($p_n=0;$p_n<count($pana_no);$p_n++){
                                            echo $pana_no[$p_n];
                                            if($p_n < count($pana_no)-1 )
                                              echo ",";
                                         } ?></td>
                                         <td><?= $x_value; ?></td>
                                       </tr>
                                      <?php  $i++;} }?>
                              </tbody>
                                 
                            </table>
                          </div>
                        </div>
                      </div>
                            </div>
                             <div class="col-sm-6" class="widget-container-col ui-sortable" id="widget-container-col-2">
                      <div class="widget-box widget-color-blue ui-sortable-handle" id="widget-box-2">
                        <div class="widget-header">
                          <h5 class="widget-title bigger lighter">
                            
                            AAKDA
                            
                          </h5>

                          
                        </div>

                        <div class="widget-body">
                          <div class="widget-main no-padding" style="overflow: scroll;height: 250px;">
                            <table class="table table-striped table-bordered table-hover">
                              <thead class="thin-border-bottom">
                                <tr>
                                 

                                  <th>
                                   
                                    AAKDA
                                  </th>
                                  <th class=""><i class="ace-icon fa fa-inr"></i>AMOUNT</th>
                                </tr>
                              </thead>
                                <tbody>
                                    <?php $i=0; foreach($array4 as $x=>$x_value)
                                          {  if($x_value > 0 and $i<5){?>
                                        <tr>
                                           <?php $pana_no = array_keys($data_single,$x_value);?>
                                        <td style=" width: 200px;word-break: break-all;"><?php for($p_n=0;$p_n<count($pana_no);$p_n++){
                                            echo $pana_no[$p_n];
                                            if($p_n < count($pana_no)-1 )
                                              echo ",";
                                         } ?></td>
                                         <td><?= $x_value; ?></td>
                                       </tr>
                                      <?php  $i++;} }?>
                                    
                              </tbody>
                            </table>
                          </div>
                        </div>
                      </div>
                            </div>
                          </div>
                         </div>

                        <div id="profile4" class="tab-pane">
                            <div class="row">
                      <div class="col-sm-6" class="widget-container-col ui-sortable" id="widget-container-col-2">
                      <div class="widget-box widget-color-blue ui-sortable-handle" id="widget-box-2">
                        <div class="widget-header">
                          <h5 class="widget-title bigger lighter">
                            <i class="ace-icon fa fa-table"></i>
                            PANA
                            <?php asort($array2) ; ?>
                          </h5>

                          
                        </div>

                        <div class="widget-body">
                          <div class="widget-main no-padding" style="overflow: scroll;height: 250px;">
                            <table class="table table-striped table-bordered table-hover" style="table-layout: fixed;">
                              <thead class="thin-border-bottom">
                                <tr>
                                 

                                  <th>
                                   PANA
                                  </th>
                                  <th class=""><i class="ace-icon fa fa-inr"></i>AMOUNT</th>
                                </tr>
                              </thead>

                                  <tbody>
                                <?php $i=0; foreach($array2 as $x=>$x_value)
                                       {  if($x_value > 0 and $i<20){?>

                                       <tr>
                                        <?php $pana_no = array_keys($pana,$x_value);?>
                                         <td style=" width: 200px;word-break: break-all;"><?php for($p_n=0;$p_n<count($pana_no);$p_n++){
                                            echo $pana_no[$p_n];
                                            if($p_n < count($pana_no)-1 )
                                              echo ",";
                                         } ?></td>
                                         <td><?= $x_value; ?></td>
                                       </tr>
                                      <?php  $i++;} }?>
                              </tbody>
                            </table>
                          </div>
                        </div>
                      </div>
                            </div>
                             <div class="col-sm-6" class="widget-container-col ui-sortable" id="widget-container-col-2">
                      <div class="widget-box widget-color-blue ui-sortable-handle" id="widget-box-2">
                        <div class="widget-header">
                          <h5 class="widget-title bigger lighter">
                            <i class="ace-icon fa fa-table"></i>
                            AAKDA
                             <?php asort($array4) ; ?>
                          </h5>

                          
                        </div>

                        <div class="widget-body">
                          <div class="widget-main no-padding" style="overflow: scroll;height: 250px;">
                            <table class="table table-striped table-bordered table-hover">
                              <thead class="thin-border-bottom">
                                <tr>
                                 

                                  <th>
                                 
                                    AAKDA
                                  </th>
                                  <th class=""><i class="ace-icon fa fa-inr"></i>AMOUNT</th>
                                </tr>
                              </thead>

                                  <tbody>
                              <tbody>
                                    <?php $i=0; foreach($array4 as $x=>$x_value)
                                          {  if($x_value > 0 and $i<5){?>
                                    <?php $pana_no = array_keys($data_single,$x_value);?>

                                       <tr>
                                        <td style=" width: 200px;word-break: break-all;"><?php for($p_n=0;$p_n<count($pana_no);$p_n++){
                                            echo $pana_no[$p_n];
                                            if($p_n < count($pana_no)-1 )
                                              echo ",";
                                         } ?></td>
                                         <td><?= $x_value; ?></td>
                                       </tr>
                                      <?php $i++;} }?>
                              </tbody>
                                
                              </tbody>
                            </table>
                          </div>
                        </div>
                      </div>
                            </div>
                          </div>
                        </div>