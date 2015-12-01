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

        <table>
            <tr>
                <td class="title">User</td>
                <td class="title">Event</td>
                <td class="title">Count</td>
                <td class="title">Avg</td>
                <td class="title">Min</td>
                <td class="title">Max</td>
            </tr>
            <?php
            foreach ($data as $item) {
                echo "<tr>";
                echo "<td class='container'>" . $item->user_id . "</td>";
                echo "<td class='container'>" . $item->event_name . "</td>";
                echo "<td class='container'>" . $item->count . "</td>";
                echo "<td class='container'>" . $item->avg_duration . "</td>";
                echo "<td class='container'>" . $item->min_duration . "</td>";
                echo "<td class='container'>" . $item->max_duration . "</td>";
                echo "</tr>";
            }
            ?>
        </table>
    </div>
    <!--<?php dump($data);?>-->
</div>
</body>
</html>
