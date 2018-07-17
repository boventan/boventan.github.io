<?php
  // 接收参数q
  $vote = htmlspecialchars($_REQUEST['q']);

  // 获取文件中存储的数据
  $filename = "poll_result.txt";
  $conn = file($filename);
  
  // 将数据分割到数组 (分行列出数值，COUNT末尾。)
  $array = explode("||", $conn[0]);
  $aa = $array[0];
  $ab = $array[1];
  $ac = $array[2];
  $ad = $array[3];
  $ae = $array[4];
  $af = $array[5];
  $ag = $array[6];
  $ah = $array[7];
  $ai = $array[8];
  $aj = $array[9];
  $ba = $array[10];
  $bb = $array[11];
  $bc = $array[12];
  $bd = $array[13];
  $be = $array[14];
  $bf = $array[15];
  $bg = $array[16];
  $bh = $array[17];
  $bi = $array[18];
  $bj = $array[19];
  $ca = $array[20];
  $cb = $array[21];
  $cc = $array[22];
  $cd = $array[23];
  $ce = $array[24];
  $cf = $array[25];
  $cg = $array[26];
  $ch = $array[27];
  $ci = $array[28];
  $cj = $array[29];
  $da = $array[30];
  $db = $array[31];
  $dc = $array[32];
  $dd = $array[33];
  $de = $array[34];
  $df = $array[35];
  $dg = $array[36];
  $dh = $array[37];
  $di = $array[38];
  $dj = $array[39];
  $ea = $array[40];
  $eb = $array[41];
  $ec = $array[42];
  $ed = $array[43];
  $ee = $array[44];
  $ef = $array[45];
  $eg = $array[46];
  $eh = $array[47];
  $ei = $array[48];
  $ej = $array[49];
  $fa = $array[50];
  $fb = $array[51];
  $fc = $array[52];
  $fd = $array[53];
  $fe = $array[54];
  $ff = $array[55];
  $fg = $array[56];
  $fh = $array[57];
  $fi = $array[58];
  $fj = $array[59];
  $ga = $array[60];
  $gb = $array[61];
  $gc = $array[62];
  $gd = $array[63];
  $ge = $array[64];
  $gf = $array[65];
  $gg = $array[66];
  $gh = $array[67];
  $gi = $array[68];
  $gj = $array[69];
  $ha = $array[70];
  $hb = $array[71];
  $hc = $array[72];
  $hd = $array[73];
  $he = $array[74];
  $hf = $array[75];
  $hg = $array[76];
  $hh = $array[77];
  $hi = $array[78];
  $hj = $array[79];
  $submit = $array[80];
  $ballot = $array[81];
  
  $voteArray = explode(",",$vote);
  
  foreach($voteArray  as $value){  

// VOTE为数组编号
    if ($value == 0) {
      $aa += 1;
      $ballot += 1;
    }
    if ($value == 1) {
      $ab += 1;
      $ballot += 1;
    }
    if ($value == 2) {
      $ac += 1;
      $ballot += 1;
    }
    if ($value == 3) {
      $ad += 1;
      $ballot += 1;
    }
    if ($value == 4) {
      $ae += 1;
      $ballot += 1;
    }
    if ($value == 5) {
      $af += 1;
      $ballot += 1;
    }
    if ($value == 6) {
      $ag += 1;
      $ballot += 1;
    }
    if ($value == 7) {
      $ah += 1;
      $ballot += 1;
    }
    if ($value == 8) {
      $ai += 1;
      $ballot += 1;
    }
    if ($value == 9) {
      $aj += 1;
      $ballot += 1;
    }
    if ($value == 10) {
      $ba += 1;
      $ballot += 1;
    }
    if ($value == 11) {
      $bb += 1;
      $ballot += 1;
    }
    if ($value == 12) {
      $bc += 1;
      $ballot += 1;
    }
    if ($value == 13) {
      $bd += 1;
      $ballot += 1;
    }
    if ($value == 14) {
      $be += 1;
      $ballot += 1;
    }
    if ($value == 15) {
      $bf += 1;
      $ballot += 1;
    }
    if ($value == 16) {
      $bg += 1;
      $ballot += 1;
    }
    if ($value == 17) {
      $bh += 1;
      $ballot += 1;
    }
    if ($value == 18) {
      $bi += 1;
      $ballot += 1;
    }
    if ($value == 19) {
      $bj += 1;
      $ballot += 1;
    }
    if ($value == 20) {
      $ca += 1;
      $ballot += 1;
    }
    if ($value == 21) {
      $cb += 1;
      $ballot += 1;
    }
    if ($value == 22) {
      $cc += 1;
      $ballot += 1;
    }
    if ($value == 24) {
      $cd += 1;
      $ballot += 1;
    }
    if ($value == 24) {
      $ce += 1;
      $ballot += 1;
    }
    if ($value == 25) {
      $cf += 1;
      $ballot += 1;
    }
    if ($value == 26) {
      $cg += 1;
      $ballot += 1;
    }
    if ($value == 27) {
      $ch += 1;
      $ballot += 1;
    }
    if ($value == 28) {
      $ci += 1;
      $ballot += 1;
    }
    if ($value == 29) {
      $cj += 1;
      $ballot += 1;
    }
    if ($value == 30) {
      $da += 1;
      $ballot += 1;
    }
    if ($value == 31) {
      $db += 1;
      $ballot += 1;
    }
    if ($value == 32) {
      $dc += 1;
      $ballot += 1;
    }
    if ($value == 33) {
      $dd += 1;
      $ballot += 1;
    }
    if ($value == 34) {
      $de += 1;
      $ballot += 1;
    }
    if ($value == 35) {
      $df += 1;
      $ballot += 1;
    }
    if ($value == 36) {
      $dg += 1;
      $ballot += 1;
    }
    if ($value == 37) {
      $dh += 1;
      $ballot += 1;
    }
    if ($value == 38) {
      $di += 1;
      $ballot += 1;
    }
    if ($value == 39) {
      $dj += 1;
      $ballot += 1;
    }
      if ($value == 40) {
      $ea += 1;
      $ballot += 1;
    }
      if ($value == 41) {
      $eb += 1;
      $ballot += 1;
    }
      if ($value == 42) {
      $ec += 1;
      $ballot += 1;
    }
      if ($value == 43) {
      $ed += 1;
      $ballot += 1;
    }
      if ($value == 44) {
      $ee += 1;
      $ballot += 1;
    }
      if ($value == 45) {
      $ef += 1;
      $ballot += 1;
    }
      if ($value == 46) {
      $eg += 1;
      $ballot += 1;
    }
      if ($value == 47) {
      $eh += 1;
      $ballot += 1;
    }
      if ($value == 48) {
      $ei += 1;
      $ballot += 1;
    }
      if ($value == 49) {
      $ej += 1;
      $ballot += 1;
    }
      if ($value == 50) {
      $fa += 1;
      $ballot += 1;
    }
      if ($value == 51) {
      $fb += 1;
      $ballot += 1;
    }
      if ($value == 52) {
      $fc += 1;
      $ballot += 1;
    }
      if ($value == 53) {
      $fd += 1;
      $ballot += 1;
    }
      if ($value == 54) {
      $fe += 1;
      $ballot += 1;
    }
      if ($value == 55) {
      $ff += 1;
      $ballot += 1;
    }
      if ($value == 56) {
      $fg += 1;
      $ballot += 1;
    }
      if ($value == 57) {
      $fh += 1;
      $ballot += 1;
    }
      if ($value == 58) {
      $fi += 1;
      $ballot += 1;
    }
      if ($value == 59) {
      $fj += 1;
      $ballot += 1;
    }
      if ($value == 60) {
      $ga += 1;
      $ballot += 1;
    }
      if ($value == 61) {
      $gb += 1;
      $ballot += 1;
    }
      if ($value == 62) {
      $gc += 1;
      $ballot += 1;
    }
      if ($value == 63) {
      $gd += 1;
      $ballot += 1;
    }
      if ($value == 64) {
      $ge += 1;
      $ballot += 1;
    }
      if ($value == 65) {
      $gf += 1;
      $ballot += 1;
    }
      if ($value == 66) {
      $gg += 1;
      $ballot += 1;
    }
      if ($value == 67) {
      $gh += 1;
      $ballot += 1;
    }
      if ($value == 68) {
      $gi += 1;
      $ballot += 1;
    }
      if ($value == 69) {
      $gj += 1;
      $ballot += 1;
    }
      if ($value == 70) {
      $ha += 1;
      $ballot += 1;
    }
      if ($value == 71) {
      $hb += 1;
      $ballot += 1;
    }
      if ($value == 72) {
      $hc += 1;
      $ballot += 1;
    }
      if ($value == 73) {
      $hd += 1;
      $ballot += 1;
    }
      if ($value == 74) {
      $he += 1;
      $ballot += 1;
    }
      if ($value == 75) {
      $hf += 1;
      $ballot += 1;
    }
      if ($value == 76) {
      $hg += 1;
      $ballot += 1;
    }
      if ($value == 77) {
      $hh += 1;
      $ballot += 1;
    }
      if ($value == 78) {
      $hi += 1;
      $ballot += 1;
    }
      if ($value == 79) {
      $hj += 1;
      $ballot += 1;
    }
  }

  $submit += 1;
  $ballot += 1;
  
  // 将投票数据保存到文档 (分别设立数值)
  $insertvote = $aa . '||' . $ab . '||' . $ac . '||' . $ad . '||' . $ae . '||' . $af . '||' . $ag . '||' . $ah . '||' . $ai . '||' . $aj . '||' . $ba . '||' . $bb . '||' . $bc . '||' . $bd . '||' . $be . '||' . $bf . '||' . $bg . '||' . $bh . '||' . $bi . '||' . $bj . '||' . $ca . '||' . $cb . '||' . $cc . '||' . $cd . '||' . $ce . '||' . $cf . '||' . $cg . '||' . $ch . '||' . $ci . '||' . $cj . '||' . $da . '||' . $db . '||' . $dc . '||' . $dd . '||' . $de . '||' . $df . '||' . $dg . '||' . $dh . '||' . $di . '||' . $dj . '||' . $ea . '||' . $eb . '||' . $ec . '||' . $ed . '||' . $ee . '||' . $ef . '||' . $eg . '||' . $eh . '||' . $ei . '||' . $ej . '||' . $fa . '||' . $fb . '||' . $fc . '||' . $fd . '||' . $fe . '||' . $ff . '||' . $fg . '||' . $fh . '||' . $fi . '||' . $fj . '||' . $ga . '||' . $gb . '||' . $gc . '||' . $gd . '||' . $ge . '||' . $gf . '||' . $gg . '||' . $gh . '||' . $gi . '||' . $gj . '||' . $ha . '||' . $hb . '||' . $hc . '||' . $hd . '||' . $he . '||' . $hf . '||' . $hg . '||' . $hh . '||' . $hi . '||' . $hj . '||' . $submit . '||' . $ballot;
  $fp = fopen($filename, "w");
  fputs($fp, $insertvote);
  fclose($fp);
 ?>

<table width=100% border=0 cellspacing=2 cellpadding=2><tr>
<td class="votetitle vt4125" colspan=2> Test </td></tr>
<tr valign=top>
<td height=20 class=voteitem width="50%"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i><?php echo $aa ?>票</td>
<td height=20 class=voteitem width="50%"><i class="fa fa-thumbs-o-down" aria-hidden="true"></i><?php echo $ab ?>票</td></tr>
<tr valign=top></table>

<table width=100% border=0 cellspacing=2 cellpadding=2><tr>
<td class="votetitle vt4125" colspan=2>时代倾城241110</td></tr>
<tr valign=top><td height=20 class=voteitem width="50%"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i><?php echo $ac ?>票</td>
<td height=20 class=voteitem width="50%"><i class="fa fa-thumbs-o-down" aria-hidden="true"></i><?php echo $ad ?>票</td></tr>
<tr valign=top></table>

<table width=100% border=0 cellspacing=2 cellpadding=2><tr>
<td class="votetitle vt4125" colspan=2>明昇壹城400531</td></tr>
<tr valign=top><td height=20 class=voteitem width="50%"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i><?php echo $ae ?>票</td>
<td height=20 class=voteitem width="50%"><i class="fa fa-thumbs-o-down" aria-hidden="true"></i><?php echo $af ?>票</td></tr>
<tr valign=top></table>

<table width=100% border=0 cellspacing=2 cellpadding=2><tr>
<td class="votetitle vt4125" colspan=2>荣盛花语书苑252353</td></tr>
<tr valign=top><td height=20 class=voteitem width="50%"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i><?php echo $ag ?>票</td>
<td height=20 class=voteitem width="50%"><i class="fa fa-thumbs-o-down" aria-hidden="true"></i><?php echo $ag ?>票</td></tr>
<tr valign=top></table>

<table width=100% border=0 cellspacing=2 cellpadding=2><tr>
<td class="votetitle vt4125" colspan=2>福天藏郡417811</td></tr>
<tr valign=top><td height=20 class=voteitem width="50%"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i><?php echo $ai ?>票</td>
<td height=20 class=voteitem width="50%"><i class="fa fa-thumbs-o-down" aria-hidden="true"></i><?php echo $aj ?>票</td></tr>
<tr valign=top></table>

<table width=100% border=0 cellspacing=2 cellpadding=2><tr>
<td class="votetitle vt4125" colspan=2>阳光城·尚东湾298140</td></tr>
<tr valign=top><td height=20 class=voteitem width="50%"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i><?php echo $ba ?>票</td>
<td height=20 class=voteitem width="50%"><i class="fa fa-thumbs-o-down" aria-hidden="true"></i><?php echo $bb ?>票</td></tr>
<tr valign=top></table>

<table width=100% border=0 cellspacing=2 cellpadding=2><tr>
<td class="votetitle vt4125" colspan=2>澳海澜庭245119</td></tr>
<tr valign=top><td height=20 class=voteitem width="50%"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i><?php echo $bc ?>票</td>
<td height=20 class=voteitem width="50%"><i class="fa fa-thumbs-o-down" aria-hidden="true"></i><?php echo $bd ?>票</td></tr>
<tr valign=top></table>

<table width=100% border=0 cellspacing=2 cellpadding=2><tr>
<td class="votetitle vt4125" colspan=2>勤诚达境界城412119</td></tr>
<tr valign=top><td height=20 class=voteitem width="50%"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i><?php echo $be ?>票</td>
<td height=20 class=voteitem width="50%"><i class="fa fa-thumbs-o-down" aria-hidden="true"></i><?php echo $bf ?>票</td></tr>
<tr valign=top></table>

<table width=100% border=0 cellspacing=2 cellpadding=2><tr>
<td class="votetitle vt4125" colspan=2>中国铁建山语城237935</td></tr>
<tr valign=top><td height=20 class=voteitem width="50%"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i><?php echo $bg ?>票</td>
<td height=20 class=voteitem width="50%"><i class="fa fa-thumbs-o-down" aria-hidden="true"></i><?php echo $bh ?>票</td></tr>
<tr valign=top></table>

<table width=100% border=0 cellspacing=2 cellpadding=2><tr>
<td class="votetitle vt4125" colspan=2>中交·中央公园246292</td></tr>
<tr valign=top><td height=20 class=voteitem width="50%"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i><?php echo $bi ?>票</td>
<td height=20 class=voteitem width="50%"><i class="fa fa-thumbs-o-down" aria-hidden="true"></i><?php echo $bj ?>票</td></tr>
<tr valign=top></table>
 
<table width=100% border=0 cellspacing=2 cellpadding=2><tr>
<td class="votetitle vt4125" colspan=2>澳海谷山府414146</td></tr>
<tr valign=top><td height=20 class=voteitem width="50%"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i><?php echo $ca ?>票</td>
<td height=20 class=voteitem width="50%"><i class="fa fa-thumbs-o-down" aria-hidden="true"></i><?php echo $cb ?>票</td></tr>
<tr valign=top></table>
    
<table width=100% border=0 cellspacing=2 cellpadding=2><tr>
<td class="votetitle vt4125" colspan=2>新华联梦想城400872</td></tr>
<tr valign=top><td height=20 class=voteitem width="50%"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i><?php echo $cc ?>票</td>
<td height=20 class=voteitem width="50%"><i class="fa fa-thumbs-o-down" aria-hidden="true"></i><?php echo $cd ?>票</td></tr>
<tr valign=top></table>
    
<table width=100% border=0 cellspacing=2 cellpadding=2><tr>
<td class="votetitle vt4125" colspan=2>中建嘉和城411045</td></tr>
<tr valign=top><td height=20 class=voteitem width="50%"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i><?php echo $ce ?>票</td>
<td height=20 class=voteitem width="50%"><i class="fa fa-thumbs-o-down" aria-hidden="true"></i><?php echo $cf ?>票</td></tr>
<tr valign=top></table>
    
<table width=100% border=0 cellspacing=2 cellpadding=2><tr>
<td class="votetitle vt4125" colspan=2>中冶中央公园252244</td></tr>
<tr valign=top><td height=20 class=voteitem width="50%"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i><?php echo $cg ?>票</td>
<td height=20 class=voteitem width="50%"><i class="fa fa-thumbs-o-down" aria-hidden="true"></i><?php echo $ch ?>票</td></tr>
<tr valign=top></table>
    
<table width=100% border=0 cellspacing=2 cellpadding=2><tr>
<td class="votetitle vt4125" colspan=2>润和滨江府252222</td></tr>
<tr valign=top><td height=20 class=voteitem width="50%"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i><?php echo $ci ?>票</td>
<td height=20 class=voteitem width="50%"><i class="fa fa-thumbs-o-down" aria-hidden="true"></i><?php echo $cj ?>票</td></tr>
<tr valign=top></table>
  
<table width=100% border=0 cellspacing=2 cellpadding=2><tr>
<td class="votetitle vt4125" colspan=2>润和紫郡245132</td></tr>
<tr valign=top><td height=20 class=voteitem width="50%"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i><?php echo $da ?>票</td>
<td height=20 class=voteitem width="50%"><i class="fa fa-thumbs-o-down" aria-hidden="true"></i><?php echo $db ?>票</td></tr>
<tr valign=top></table>
    
<table width=100% border=0 cellspacing=2 cellpadding=2><tr>
<td class="votetitle vt4125" colspan=2>凯富南方鑫城243194</td></tr>
<tr valign=top><td height=20 class=voteitem width="50%"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i><?php echo $dc ?>票</td>
<td height=20 class=voteitem width="50%"><i class="fa fa-thumbs-o-down" aria-hidden="true"></i><?php echo $dd ?>票</td></tr>
<tr valign=top></table>

<table width=100% border=0 cellspacing=2 cellpadding=2><tr>
<td class="votetitle vt4125" colspan=2>福泽园253014</td></tr>
<tr valign=top><td height=20 class=voteitem width="50%"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i><?php echo $de ?>票</td>
<td height=20 class=voteitem width="50%"><i class="fa fa-thumbs-o-down" aria-hidden="true"></i><?php echo $df ?>票</td></tr>
<tr valign=top></table>
     
<table width=100% border=0 cellspacing=2 cellpadding=2><tr>
<td class="votetitle vt4125" colspan=2>芙蓉万国城MOMA251951</td></tr>
<tr valign=top><td height=20 class=voteitem width="50%"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i><?php echo $dg ?>票</td>
<td height=20 class=voteitem width="50%"><i class="fa fa-thumbs-o-down" aria-hidden="true"></i><?php echo $dh ?>票</td></tr>
<tr valign=top></table>

<table width=100% border=0 cellspacing=2 cellpadding=2><tr>
<td class="votetitle vt4125" colspan=2>金谷豪庭400915</td></tr>
<tr valign=top><td height=20 class=voteitem width="50%"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i><?php echo $di ?>票</td>
<td height=20 class=voteitem width="50%"><i class="fa fa-thumbs-o-down" aria-hidden="true"></i><?php echo $dj ?>票</td></tr>
<tr valign=top></table>

<table width=100% border=0 cellspacing=2 cellpadding=2><tr>
<td class="votetitle vt4125" colspan=2>碧桂园公园壹号246418</td></tr>
<tr valign=top><td height=20 class=voteitem width="50%"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i><?php echo $ea ?>票</td>
<td height=20 class=voteitem width="50%"><i class="fa fa-thumbs-o-down" aria-hidden="true"></i><?php echo $eb ?>票</td></tr>
<tr valign=top></table>

<table width=100% border=0 cellspacing=2 cellpadding=2><tr>
<td class="votetitle vt4125" colspan=2>万科里金域国际251253</td></tr>
<tr valign=top><td height=20 class=voteitem width="50%"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i><?php echo $ec ?>票</td>
<td height=20 class=voteitem width="50%"><i class="fa fa-thumbs-o-down" aria-hidden="true"></i><?php echo $ed ?>票</td></tr>
<tr valign=top></table>

<table width=100% border=0 cellspacing=2 cellpadding=2><tr>
<td class="votetitle vt4125" colspan=2>水墨林溪251685</td></tr>
<tr valign=top><td height=20 class=voteitem width="50%"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i><?php echo $ee ?>票</td>
<td height=20 class=voteitem width="50%"><i class="fa fa-thumbs-o-down" aria-hidden="true"></i><?php echo $ef ?>票</td></tr>
<tr valign=top></table>

<table width=100% border=0 cellspacing=2 cellpadding=2><tr>
<td class="votetitle vt4125" colspan=2>善化国际253016</td></tr>
<tr valign=top><td height=20 class=voteitem width="50%"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i><?php echo $eg ?>票</td>
<td height=20 class=voteitem width="50%"><i class="fa fa-thumbs-o-down" aria-hidden="true"></i><?php echo $eh ?>票</td></tr>
<tr valign=top></table>

<table width=100% border=0 cellspacing=2 cellpadding=2><tr>
<td class="votetitle vt4125" colspan=2>半山壹号249621</td></tr>
<tr valign=top><td height=20 class=voteitem width="50%"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i><?php echo $ei ?>票</td>
<td height=20 class=voteitem width="50%"><i class="fa fa-thumbs-o-down" aria-hidden="true"></i><?php echo $ej ?>票</td></tr>
<tr valign=top></table>

<table width=100% border=0 cellspacing=2 cellpadding=2><tr>
<td class="votetitle vt4125" colspan=2>五矿哈佛小镇252311</td></tr>
<tr valign=top><td height=20 class=voteitem width="50%"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i><?php echo $fa ?>票</td>
<td height=20 class=voteitem width="50%"><i class="fa fa-thumbs-o-down" aria-hidden="true"></i><?php echo $fb ?>票</td></tr>
<tr valign=top></table>

<table width=100% border=0 cellspacing=2 cellpadding=2><tr>
<td class="votetitle vt4125" colspan=2>中悦·领秀城252200</td></tr>
<tr valign=top><td height=20 class=voteitem width="50%"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i><?php echo $fc ?>票</td>
<td height=20 class=voteitem width="50%"><i class="fa fa-thumbs-o-down" aria-hidden="true"></i><?php echo $fd ?>票</td></tr>
<tr valign=top></table>

<table width=100% border=0 cellspacing=2 cellpadding=2><tr>
<td class="votetitle vt4125" colspan=2>荣泰商业广场412401</td></tr>
<tr valign=top><td height=20 class=voteitem width="50%"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i><?php echo $fe ?>票</td>
<td height=20 class=voteitem width="50%"><i class="fa fa-thumbs-o-down" aria-hidden="true"></i><?php echo $ff ?>票</td></tr>
<tr valign=top></table>
 
<table width=100% border=0 cellspacing=2 cellpadding=2><tr>
<td class="votetitle vt4125" colspan=2>北大资源理想家园411351</td></tr>
<tr valign=top><td height=20 class=voteitem width="50%"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i><?php echo $fg ?>票</td>
<td height=20 class=voteitem width="50%"><i class="fa fa-thumbs-o-down" aria-hidden="true"></i><?php echo $fh ?>票</td></tr>
<tr valign=top></table>
 
<table width=100% border=0 cellspacing=2 cellpadding=2><tr>
<td class="votetitle vt4125" colspan=2>山与墅297599</td></tr>
<tr valign=top><td height=20 class=voteitem width="50%"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i><?php echo $fi ?>票</td>
<td height=20 class=voteitem width="50%"><i class="fa fa-thumbs-o-down" aria-hidden="true"></i><?php echo $fj ?>票</td></tr>
<tr valign=top></table>
 
<table width=100% border=0 cellspacing=2 cellpadding=2><tr>
<td class="votetitle vt4125" colspan=2>北辰中央公园252358</td></tr>
<tr valign=top><td height=20 class=voteitem width="50%"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i><?php echo $ga ?>票</td>
<td height=20 class=voteitem width="50%"><i class="fa fa-thumbs-o-down" aria-hidden="true"></i><?php echo $gb ?>票</td></tr>
<tr valign=top></table>
 
<table width=100% border=0 cellspacing=2 cellpadding=2><tr>
<td class="votetitle vt4125" colspan=2>天鸿中央大院399970</td></tr>
<tr valign=top><td height=20 class=voteitem width="50%"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i><?php echo $gc ?>票</td>
<td height=20 class=voteitem width="50%"><i class="fa fa-thumbs-o-down" aria-hidden="true"></i><?php echo $gd ?>票</td></tr>
<tr valign=top></table>
 
<table width=100% border=0 cellspacing=2 cellpadding=2><tr>
<td class="votetitle vt4125" colspan=2>中建悦和城416115</td></tr>
<tr valign=top><td height=20 class=voteitem width="50%"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i><?php echo $ge ?>票</td>
<td height=20 class=voteitem width="50%"><i class="fa fa-thumbs-o-down" aria-hidden="true"></i><?php echo $gf ?>票</td></tr>
<tr valign=top></table>
 
<table width=100% border=0 cellspacing=2 cellpadding=2><tr>
<td class="votetitle vt4125" colspan=2>中海国际社区公寓240743</td></tr>
<tr valign=top><td height=20 class=voteitem width="50%"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i><?php echo $gg ?>票</td>
<td height=20 class=voteitem width="50%"><i class="fa fa-thumbs-o-down" aria-hidden="true"></i><?php echo $gh ?>票</td></tr>
<tr valign=top></table>
 
<table width=100% border=0 cellspacing=2 cellpadding=2><tr>
<td class="votetitle vt4125" colspan=2>星澜之悦411376</td></tr>
<tr valign=top><td height=20 class=voteitem width="50%"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i><?php echo $gi ?>票</td>
<td height=20 class=voteitem width="50%"><i class="fa fa-thumbs-o-down" aria-hidden="true"></i><?php echo $gj ?>票</td></tr>
<tr valign=top></table>
 
<table width=100% border=0 cellspacing=2 cellpadding=2><tr>
<td class="votetitle vt4125" colspan=2>美来美城市广场416171</td></tr>
<tr valign=top><td height=20 class=voteitem width="50%"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i><?php echo $ha ?>票</td>
<td height=20 class=voteitem width="50%"><i class="fa fa-thumbs-o-down" aria-hidden="true"></i><?php echo $hb ?>票</td></tr>
<tr valign=top></table>
 
<table width=100% border=0 cellspacing=2 cellpadding=2><tr>
<td class="votetitle vt4125" colspan=2>长房东云台410148</td></tr>
<tr valign=top><td height=20 class=voteitem width="50%"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i><?php echo $hc ?>票</td>
<td height=20 class=voteitem width="50%"><i class="fa fa-thumbs-o-down" aria-hidden="true"></i><?php echo $hd ?>票</td></tr>
<tr valign=top></table>
 
<table width=100% border=0 cellspacing=2 cellpadding=2><tr>
<td class="votetitle vt4125" colspan=2>纳爱斯阳光丽城238299</td></tr>
<tr valign=top><td height=20 class=voteitem width="50%"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i><?php echo $he ?>票</td>
<td height=20 class=voteitem width="50%"><i class="fa fa-thumbs-o-down" aria-hidden="true"></i><?php echo $hf ?>票</td></tr>
<tr valign=top></table>
 
<table width=100% border=0 cellspacing=2 cellpadding=2><tr>
<td class="votetitle vt4125" colspan=2>丽发新城245175</td></tr>
<tr valign=top><td height=20 class=voteitem width="50%"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i><?php echo $hg ?>票</td>
<td height=20 class=voteitem width="50%"><i class="fa fa-thumbs-o-down" aria-hidden="true"></i><?php echo $hh ?>票</td></tr>
<tr valign=top></table>
 
<!-- <table width=100% border=0 cellspacing=2 cellpadding=2><tr>
<td class="votetitle vt4125" colspan=2> End </td></tr>
<tr valign=top><td height=20 class=voteitem width="50%"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i><?php echo $hi ?>票</td>
<td height=20 class=voteitem width="50%"><i class="fa fa-thumbs-o-down" aria-hidden="true"></i><?php echo $hj ?>票</td></tr>
<tr valign=top></table> -->

<!-- MikeCRM --> 
<iframe height="800" allowTransparency="true" style="width:100%;height:420px;border:none;overflow:auto;" frameborder="0" src="http://anydates.mikecrm.com/oypHIvK"></iframe>

 <!-- <h5><p><.?php echo "已有 " . $ballot . " 人参与本次投票！"; ?></p></h5> -->