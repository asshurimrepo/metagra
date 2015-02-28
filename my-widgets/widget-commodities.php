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
        $('.ticker').jTicker({
            offset: 2
        });
    });
</script>
<style type="text/css">
    .ticker {
        background-color: #d0d5d1;
        color: #584c56;
        padding: 7px;
        font-size: 12px;
        font-family:'roboto Condensed', sans-serif;
    }
    .ticker .desc { margin: 0 5px; }
    .ticker .up-stock {
        color:#008800;
        font-weight: bold;
    }
    .ticker .down-stock {
        color:#cc0000;
        font-weight: bold;
    }
    .ticker.energy{
        background-color: #f1f1f1;
    }
    .ticker-group{
        border: 2px solid #ccc;
        margin-top: 30px;
    }
</style>
<div class="ticker-group">
    <div class="ticker metal">
    <span>
        <?php
        $metalQuotes = getMetalQuotes();
        foreach( $metalQuotes  as $i => $quote ){
            echo '<span class="desc">'.$quote['descriptiveName'].' </span> <span class="'.$quote['arrowStatus'].'-stock"><i class="fa fa-arrow-'.$quote['arrowStatus'].'"></i> '.$quote['last'].' ('.str_replace('-','',$quote['currentPercent']).'%)</span>';
        }
        ?>
    </span>
    </div>
    <div class="ticker energy">
    <span>
        <?php
        $energyQuotes = getEnergyQuotes();
        foreach( $energyQuotes  as $i => $quote ){
            echo '<span class="desc">'.$quote['descriptiveName'].' </span> <span class="'.$quote['arrowStatus'].'-stock"><i class="fa fa-arrow-'.$quote['arrowStatus'].'"></i> '.$quote['last'].' ('.str_replace('-','',$quote['currentPercent']).'%)</span>';
        }
        ?>
    </span>
    </div>
</div>