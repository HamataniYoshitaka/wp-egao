<div class="hidden">
<?php dynamic_sidebar('calendar1'); ?>
</div>

<br>
<p class="text-right">
    <i class="fa fa-square" aria-hidden="true" style="color: #b8da9c;"></i> - 小児予防歯科診療日&emsp;
    <i class="fa fa-square" aria-hidden="true" style="color: #fff100;"></i> - 休診日
</p>
<div class="row">
    <div class="col-sm-6">
        <div class="col-calendar clearfix">
            <div class="pull-left calendar-month">
                <h1 class="bold roboto-condensed month-number text-center"></h1>
                <h5 class="bold roboto-condensed tracking-2 month-text text-center"></h5>
            </div>
            <div class="pull-left calendar-days roboto-condensed">
            </div>
        </div>
    </div>
    <div class="col-sm-6 clearfix">
        <div class="col-calendar clearfix">
            <div class="pull-left calendar-month">
                <h1 class="bold roboto-condensed month-number text-center"></h1>
                <h5 class="bold roboto-condensed tracking-2 month-text text-center"></h5>
            </div>
            <div class="pull-left calendar-days roboto-condensed">
            </div>
        </div>
    </div>
</div>

<script>
$(window).load(function(){
    $('.wpsbc-calendar').each(function(i, e){
        $(e).css({'border': 'none', 'float': 'initial', 'margin': '0 auto'});
        var month = $(e).find('.wpsbc-heading>span').text();
        var mN = 1;
        if (month.match(/February/)) {mN = 2;}
        else if (month.match(/Mar/)) {mN = 3;}
        else if (month.match(/Apri/)) {mN = 4;}
        else if (month.match(/May/)) {mN = 5;}
        else if (month.match(/June/)) {mN = 6;}
        else if (month.match(/July/)) {mN = 7;}
        else if (month.match(/Aug/)) {mN = 8;}
        else if (month.match(/Sep/)) {mN = 9;}
        else if (month.match(/Oct/)) {mN = 10;}
        else if (month.match(/Nov/)) {mN = 11;}
        else if (month.match(/Dec/)) {mN = 12;}
        $(e).find('.wpsbc-heading').remove();
        $('.col-calendar').eq(i).find('.calendar-days').html(e);
        $('.col-calendar').eq(i).find('.month-number').text(mN);
        $('.col-calendar').eq(i).find('.month-text').text(month);
        $('.wpsbc-widget').remove();
    });
});
</script>
