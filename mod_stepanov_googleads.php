<?php
defined('_JEXEC') or die;
$googleads_key=$params->get( 'googleads_key', '' );
$googleads_id=$params->get( 'googleads_id', '' );
?>
<!--GOOGLE ADSENCE-->
<div style="text-align: center;margin-bottom:12px;">
<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- stepanov.nichost.respons -->
<ins class="adsbygoogle"
     style="display:block"
     data-ad-client="<?php echo $googleads_key;?>" data-ad-slot="<?php echo $googleads_id;?>" data-ad-format="auto"></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script>
</div>
<!--GOOGLE ADSENCE-->
