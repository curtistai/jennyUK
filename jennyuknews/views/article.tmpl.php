<?php include('includes/header.php'); ?>
<style>
img, object{
    max-height:90%;
    max-width:80%;
}
</style>
<body> 

<div data-role="page">

   <header data-role="header" class="<?php echo $siteName; ?>" data-theme="c">
      <h1> <?php echo ucWords($siteName).'+'; ?> </h1>
   </header><!-- /header -->

   <div data-role="content">	
        <h1> <?php echo $feed->title; ?> </h1>
        <div id="contentcontent"> <?php echo $feed->description; ?> </div>
   </div><!-- /content -->

   <footer data-role="footer" data-position="fixed" class="<?php echo $siteName; ?>" data-theme="g">
      <h4> 	I Love You As Always </h4>
   </footer>
</div><!-- /page -->

<script class="javascript" src="http://net.tutsplus.com/wp-content/plugins/google-syntax-highlighter/Scripts/shCore.js"></script>
<script class="javascript" src="http://net.tutsplus.com/wp-content/plugins/google-syntax-highlighter/Scripts/shBrushAll.js"></script>
<script class="javascript">
dp.SyntaxHighlighter.ClipboardSwf = 'http://net.tutsplus.com/wp-content/plugins/google-syntax-highlighter/Scripts/clipboard.swf';
dp.SyntaxHighlighter.HighlightAll('code');
</script>
<script>
   $('img, embed, object').removeAttr('height').removeAttr('width');
   </script>

</body>
</html>


