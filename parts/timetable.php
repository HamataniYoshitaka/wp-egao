<?php
/**
* 診療時間テーブル
*/
?>
<div class="row" style="margin-top: 50px; margin-bottom: 50px;">
    <div class="col-md-10 col-md-offset-1">
        <table class="table table-information hidden-xs">
            <thead>
                <tr>
                    <th style="width: 130px;">診療時間</th>
                    <td>月</td>
                    <td>火</td>
                    <td>水</td>
                    <td>
                        木
                        <span class="kome">※</span>
                    </td>
                    <td>金</td>
                    <td>土</td>
                    <td>
                        日
                        <span class="kome">※</span>
                    </td>
                    <td>祝</td>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th>10:30 - 13:00</th>
                    <td><span class="icon-circle"></span></td>
                    <td><span class="icon-circle"></span></td>
                    <td><span class="icon-cross"></span></td>
                    <td><span class="icon-circle"></span></td>
                    <td><span class="icon-circle"></span></td>
                    <td><span class="icon-circle"></span></td>
                    <td><span class="icon-triangle"></span><br>9:30~</td>
                    <td><span class="icon-cross"></span></td>
                </tr>

                <tr>
                    <th>14:30 - 19:00</th>
                    <td><span class="icon-circle"></span></td>
                    <td><span class="icon-circle"></span></td>
                    <td><span class="icon-cross"></span></td>
                    <td><span class="icon-circle"></span></td>
                    <td><span class="icon-circle"></span></td>
                    <td><span class="icon-triangle"></span><br>18:00まで</td>
                    <td><span class="icon-triangle"></span><br>17:00まで</td>
                    <td><span class="icon-cross"></span></td>
                </tr>
            </tbody>
        </table>
        <table class="table table-information-xs visible-xs">
            <thead>
                <tr>
                    <th>診療時間</th>
                    <td>10:30 - 13:00</td>
                    <td>14:30 - 19:00</td>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th>月</th>
                    <td><span class="icon-circle"></span></td>
                    <td><span class="icon-circle"></span></td>
                </tr>
                <tr>
                    <th>火</th>
                    <td><span class="icon-circle"></span></td>
                    <td><span class="icon-circle"></span></td>
                </tr>
                <tr>
                    <th>水</th>
                    <td><span class="icon-cross"></span></td>
                    <td><span class="icon-cross"></span></td>
                </tr>
                <tr>
                    <th>木<span class="kome">※</span></th>
                    <td><span class="icon-circle"></span></td>
                    <td><span class="icon-circle"></span></td>
                </tr>
                <tr>
                    <th>金</th>
                    <td><span class="icon-circle"></span></td>
                    <td><span class="icon-circle"></span></td>
                </tr>
                <tr>
                    <th>土</th>
                    <td><span class="icon-circle"></span></td>
                    <td><span class="icon-triangle"></span><br>18:00まで</td>
                </tr>
                <tr>
                    <th>日<span class="kome">※</span></th>
                    <td><span class="icon-triangle"></span><br>9:30~</td>
                    <td><span class="icon-triangle"></span><br>17:00まで</td>
                </tr>
                <tr>
                    <th>祝</th>
                    <td><span class="icon-cross"></span></td>
                    <td><span class="icon-cross"></span></td>
                </tr>
            </tbody>
        </table>
        <p class="text-right">
            ※ 木曜日・日曜日隔週休み
        </p>
    </div>
</div><!-- /.row -->
