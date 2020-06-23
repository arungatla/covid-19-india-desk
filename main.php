<?php

    $jsonData=file_get_contents("https://api.covid19india.org/data.json");
    $data=json_decode($jsonData,true);
    $active_cases=number_format($data["statewise"][0]['active']);
    $confirmed_cases=number_format($data["statewise"][0]['confirmed']);
    $recovered_cases=number_format($data["statewise"][0]['recovered']);
    $deceased_cases=number_format($data["statewise"][0]['deaths']);
    $lastupdate=$data["statewise"][0]['lastupdatedtime'];


    // print_r($data)

    $days_count_prev=count($data['statewise'])-1;
    $days_count=$data['cases_time_series'][$days_count_prev];
    // echo $days_count['date'];
?>