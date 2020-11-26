
<html lang="en" dir="ltr">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <script type="text/javascript" src="chk_frm.js"></script>
<script type="text/javascript" src="tinymce/tiny_mce/tiny_mce.js"></script>
<script type="text/javascript" src="tinymce/tiny_mce/plugins/tinybrowser/tb_tinymce.js.php"></script>
<script type="text/javascript">
tinyMCE.init({
theme : "advanced",
mode : "textareas",
textarea_trigger : "convert_this",
file_browser_callback : 'tinyBrowser',
plugins: 'safari,pagebreak,style,layer,table,save,advhr,advimage,advlink,emotions,iespell,inlinepopups,insertdatetime,preview,media,searchreplace,print,contextmenu,paste,directionality,fullscreen,noneditable,visualchars,nonbreaking,xhtmlxtras,template,tinyBrowser,advimage',
// Theme options
		theme_advanced_buttons1 : "save,newdocument,|,bold,italic,underline,strikethrough,|,justifyleft,justifycenter,justifyright,justifyfull,|,styleselect,formatselect,fontselect,fontsizeselect",
		theme_advanced_buttons2 : "cut,copy,paste,pastetext,pasteword,|,search,replace,|,bullist,numlist,|,outdent,indent,blockquote,|,undo,redo,|,link,unlink,anchor,image,cleanup,help,code,|,insertdate,inserttime,preview,|,forecolor,backcolor",
		theme_advanced_buttons3 : "tablecontrols,|,hr,removeformat,visualaid,|,sub,sup,|,charmap,emotions,iespell,media,advhr,|,print,|,ltr,rtl,|,fullscreen",
		theme_advanced_buttons4 : "insertlayer,moveforward,movebackward,absolute,|,styleprops,|,cite,abbr,acronym,del,ins,attribs,|,visualchars,nonbreaking,template,pagebreak",
		theme_advanced_toolbar_location : "top",
		theme_advanced_toolbar_align : "left",
		theme_advanced_statusbar_location : "bottom",
		theme_advanced_resizing : true,


// Example content CSS (should be your site CSS)
content_css : "css/content.css",

theme_advanced_toolbar_location : "top"
//theme_advanced_toolbar_align : "left",
});
</script>
        <title>Dashboard</title>
        <?php require_once('header.php');

        if(isset($_GET['siteSetting'])){
        require_once('view_setSetting.php');    
        }
       else  if(isset($_GET['addMeun'])){
        require_once('view_meun.php');    
        }
    else if(isset($_GET['addBanner'])){
        require_once('view_addBanner.php');    
        }
          else if(isset($_GET['addItem'])){
        require_once('view_add_item.php');    
        }
    else{
        echo "<h1>Page Not Found (404)</h1>";
       }
        require_once("footer.php");
        ?>