<?php
$list = [];
$replenish;
if (!empty($_POST['data'])){
    $data = $_POST['data'];
    if (!empty($data)){
        $data = json_decode($_POST['data']);
        foreach($data as $item){
            if ($item->name === 'dateofregister'){
                $list[$item->name] = $item->value;
                continue;
            }
            if ($item->name === 'sum1'){
                $list[$item->name] = $item->value;
                continue;
            }
            if ($item->name === 'period'){
                $list[$item->name] = $item->value;
                continue;
            }
            if ($item->name === 'recharge1'){
                $list[$item->name] = $item->value;
                continue;
            }
            if ($item->name === 'yes'){
                $replenish = $item->name;
                continue;
            }
        }
    }
}
$summn = $list['sum1'];
$period = explode("-", $list['dateofregister']);
$percent = 0.1;
if ($replenish === 'yes'){
    $summadd = $list['recharge1'];
    for ($i = 1; $i < intval($list['period']); $i++){
        $summn1 = $summn;
        $daysn = cal_days_in_month(CAL_GREGORIAN, intval($period[1]), intval($period[0]));
        $daysy = 365 + (date($period[0]) % 4 == 0 && (date($period[0]) % 100 != 0 || date($period[0]) % 400 == 0));
        $summn = $summn1 + ($summn1 + $summadd) * $daysn * ($percent / $daysy);
        if (intval($period[1]) != 12){
            $period[1] = intval($period[1]) + 1;
        }
        else{
            $period[0] = intval($period[0]) + 1;
            $period[1] = 1;
        }
    }
}
else{
    for ($i = 1; $i < intval($list['period']); $i++){
        $summn1 = $summn;
        $daysn = cal_days_in_month(CAL_GREGORIAN, intval($period[1]), intval($period[0]));
        $daysy = 365 + (date($period[0]) % 4 == 0 && (date($period[0]) % 100 != 0 || date($period[0]) % 400 == 0));
        $summn = $summn1 + $summn1 * $daysn * ($percent / $daysy);
        if (intval($period[1]) != 12){
            $period[1] = intval($period[1]) + 1;
        }
        else{
            $period[0] = intval($period[0]) + 1;
            $period[1] = 1;
        }
    }
}
echo round($summn);