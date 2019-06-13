<section>


    <div class="top">
    </div>
    <div class="form1">
        <div class="info">
            <?php echo date("d/m/y H:i:s"); ?>
            <h2>
                <?php

                $target = mktime(20, 0, 0, 6, 28, 2019) ;//set marriage date
                date_default_timezone_set("Asia/Jerusalem");
                $today = time();
                $difference =($target-$today);
                $days=floor($difference / (60*60*24));
                $hours=floor(($difference%(86400))/(3600)-2);
                //$hours =date('h',$difference) ;
                $minute = date('i',$difference);
                $second = date('s',$difference);

                echo $days ."d : ".$hours."h : ".$minute. "m : " .$second ."s left ";?>
            <h1>You are invited</h1>
            <h2>for the wedding of</h2>
            <h1>Michal & Ronen</h1>
            <p class="line">______________</p>
                <div id="details" onmouseover="resizeText(1)" onmouseout="resizeText(-1)">
                    <h2>The Details</h2>
                    <p>Thursday, June 28, 2019</p>
                    <p>
                    <?php
                    $agenda = array("07:30"=>"Reception", "08:30"=>"Ceremony", "09:00"=>"Celebration");
                    foreach($agenda as $x => $x_value)
                    {
                        echo $x . " pm " . $x_value;
                        echo "<br>";
                    }?>
                    </p>
                </div>

            <p class="line">______________</p>
            <p>
            <table class="w3-table w3-striped w3-border">
                <h2>Shuttle Info</h2>
                <tr>
                    <th>Shuttle number</th>
                    <th>Address</th>
                    <th>Hour</th>
                </tr>
                <tr>
                    <td onmouseover="tableHover(this,1)" onmouseout="tableHover(this,-1)">1</td>
                    <td onmouseover="tableHover(this,1)" onmouseout="tableHover(this,-1)">Niv David 9, Tel Aviv</td>
                    <td onmouseover="tableHover(this,1)" onmouseout="tableHover(this,-1)">18:00</td>
                </tr>
                <tr>
                    <td onmouseover="tableHover(this,1)" onmouseout="tableHover(this,-1)">2</td>
                    <td onmouseover="tableHover(this,1)" onmouseout="tableHover(this,-1)">Niv David 9, Tel Aviv</td>
                    <td onmouseover="tableHover(this,1)" onmouseout="tableHover(this,-1)">18:30</td>
                </tr>
        </div>
        </table>
        <br>
        <p class="line">______________</p>
        <h2>Trask hall</h2>
        <p>Yosef Yekuti'eli 6, Tel Aviv-Yafo </p>
        <p><a href="https://www.facebook.com/traskevents/" class="fa fa-facebook"></a></p>
        <div class="map">
            <iframe src="https://maps.google.com/maps?width=100%&amp;height=600&amp;hl=en&amp;q=Yosef%20Yekuti'eli%206%2C%20Tel%20Aviv-Yafo+(Trask%20hall)&amp;ie=UTF8&amp;t=&amp;z=19&amp;iwloc=A&amp;output=embed">
                <a href="https://www.maps.ie/map-my-route/">Plot a route map</a></iframe>
        </div>
        <br/>
    </div>
    <a href="rsvp.php">
        <button class="accept">Accept</button>
    </a>
    <a href="decline.php">
        <button class="regret"
        ">Decline</button></a>
    <div>

    </div>
    <script type="text/javascript" src="rsvp.js"></script>


</section>