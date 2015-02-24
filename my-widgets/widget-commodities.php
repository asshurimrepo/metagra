<!--<div class="widget-commodities">
    <ul class="list-inline">
        <li>Crude Oil <span><b style="color:#008800;">0.13</b></span><span><b style="color:#008800;"> (0.26%)</b></span></li>
        <li>Crude Oil <span><b style="color:#008800;">0.13</b></span><span><b style="color:#008800;"> (0.26%)</b></span></li>
        <li>Crude Oil <span><b style="color:#008800;">0.13</b></span><span><b style="color:#008800;"> (0.26%)</b></span></li>
        <li>Crude Oil <span><b style="color:#008800;">0.13</b></span><span><b style="color:#008800;"> (0.26%)</b></span></li>
    </ul>
</div>-->
<?=link_js('js/jquery.jticker.js')?>
<script type="text/javascript">
    jQuery(function($) {
        $('.ticker').jTicker();
    });
</script>
<style type="text/css">
    .ticker {
        background-color: #d0d5d1;
        color: #584c56;
        padding: 7px;
        font-size: 12px;
    }
    * { font-family:'roboto Condensed', sans-serif}
</style>
<div class="ticker">
    <span>
        Crude Oil <span><b style="color:#008800;"><i class="fa fa-arrow-up"></i> 0.13</b></span><span><b style="color:#008800;"> (0.26%)</b></span>
    </span>
</div>