<?php

    $jsonData=file_get_contents("https://api.covid19india.org/data.json");
    $data=json_decode($jsonData,true);
    $active_cases=number_format($data["statewise"][0]['active']);
    $confirmed_cases=number_format($data["statewise"][0]['confirmed']);
    $recovered_cases=number_format($data["statewise"][0]['recovered']);
    $deceased_cases=number_format($data["statewise"][0]['deaths']);
    $lastupdate=$data["statewise"][0]['lastupdatedtime'];


    // print_r($data)

    $days_count_prev=count($data['cases_time_series'])-1;
    $days_count=$data['cases_time_series'][$days_count_prev];
    // print_r($days_count);
    $confirmed_prev=-($data["statewise"][0]['confirmed']-$days_count['totalconfirmed']);
    $recovered_prev=-($data["statewise"][0]['recovered']-$days_count['totalrecovered']);
    $deaths_prev=-($data["statewise"][0]['deaths']-$days_count['totaldeceased']);

    // echo $confirmed_cases,"<br>";
    // echo $recovered_cases,"<br>";
    // echo $deceased_cases,"<br>";
    // echo $days_count['totalconfirmed'],"<br>";
    // echo $days_count['totalrecovered'],"<br>";
    // echo $days_count['totaldeceased'],"<br>";
    // echo $confirmed_prev,"<br>";
    // echo $recovered_prev,"<br>";
    // echo $deaths_prev,"<br>";
    // echo $active_cases,"<br>";
    
    
    
?>