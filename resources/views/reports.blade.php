<!DOCTYPE html>
<html>
<head>
    <title>Laravel</title>

    <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">

    <style>
        html, body {
            height: 100%;
        }

        body {
            margin: 0;
            padding: 0;
            width: 100%;
            display: table;
            font-weight: 100;
            font-family: 'Lato';
        }

        .container {
            text-align: center;
            display: table-cell;
            vertical-align: middle;
        }

        .content {
            text-align: center;
            display: inline-block;
        }

        .title {
            font-size: 30px;
        }
    </style>
</head>
<body>
<div class="container">
    <div class="content">

        <div class="container">
            <div class="title">User</div>
        </div>
        <div class="container">
            <div class="title">Event</div>
        </div>
        <div class="container">
            <div class="title">Count</div>
        </div>
        <div class="container">
            <div class="title">Avg</div>
        </div>
        <div class="container">
            <div class="title">Min</div>
        </div>
        <div class="container">
            <div class="title">Max</div>
        </div>
        <br>
        <?php
        foreach ($data as $item) {

            echo "<div class=\"container\">" . $item->user_id . "</div>";
            echo "<div class=\"container\">" . $item->event_name . "</div>";
            echo "<div class=\"container\">" . $item->count . "</div>";
            echo "<div class=\"container\">" . $item->avg_duration . "</div>";
            echo "<div class=\"container\">" . $item->min_duration . "</div>";
            echo "<div class=\"container\">" . $item->max_duration . "</div>";
            echo "<br>";

        }

        ?>
    </div>
    <!--<?php dump($data);?>-->
</div>
</body>
</html>
