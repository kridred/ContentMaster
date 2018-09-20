<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- jQuery einbinden -->
    <script src="jquery-3.3.1.min.js"></script>
    <!-- Das neueste kompilierte und minimierte CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <!-- Optionales Theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
    <!-- Das neueste kompilierte und minimierte JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <style>
        h1 {color: lightslategrey;}
        #wrapper {
            font-family: arial;
            margin: 0 auto;
            max-width: 900px;
            padding-left: 20px;
            padding-right: 20px;
        }

        .succ {
            background-color: green;
            color: white;
            margin-top: 15px;
            margin-bottom: 15px;
            border: 1px solid gray;
            height: 30px;
            text-align: center;
            padding-top: 5px;
            border-radius: 5px 5px 5px 5px;
            box-shadow: 10px 10px 8px grey;
        }
        .diss {
            background-color: red;
            color: white;
            margin-top: 15px;
            margin-bottom: 15px;
            border: 1px solid gray;
            height: 30px;
            text-align: center;
            padding-top: 5px;
            border-radius: 5px 5px 5px 5px;
            box-shadow: 5px 10px grey;
        }
		.cbl1{
			float: left;
			padding-right: 10px;
		}
		.cbl2{
		   
			padding-left: 10px;
		}
		#clearfix{
			clear: both;
		}
        
        
        #cmversion{
            float: right;
            font-size: 0.8em;
            padding-top:20px;
        }
        .midexist{
            color: red;
        }
        
        
    </style>
    <title>W24M Auto-ContentMaster A</title>
</head>
<body onload="setInterval(TimerStart, 1800000);">
<!-- <body onload="setInterval(TimerStart, 60000);"> -->

<!-- select all Funktion für die Checkboxen (JavaScript) -->
<script>

    function TimerStart() {
        document.getElementById('btnQuery').click(); 
    }

</script>

    <div id="wrapper">
    <span id="cmversion">Version 1.1.8 [DEV-A] - Intervall: 30 Min.</span>
    
    <div>
        <form method="post">
        <a href="https://www.web24media.com" title="Web24Media GmbH ContentMaster"><img src="logo_cm.png" alt="ContentMaster Web24Media GmbH Logo"></a>
            <br>
            
            
           </div>
            
			   <div>
               <div>
					<h4>Länderliste:</h4>
                    
                    <br>
					<div class="cbl1">
						<input type="checkbox" name="opt[]" value="48" checked> Argentinien<br>
						<input type="checkbox" name="opt[]" value="34"> Australien<br>
						<input type="checkbox" name="opt[]" value="33" checked> Belgien<br>
						<input type="checkbox" name="opt[]" value="13"> Brasilien<br>
						<input type="checkbox" name="opt[]" value="78" checked> Bulgarien<br>
						<input type="checkbox" name="opt[]" value="8"> Dänemark<br>
						<input type="checkbox" name="opt[]" value="30" checked> Deutschland (Bundesliga)<br>
						<input type="checkbox" name="opt[]" value="122"> Deutschland (Ligen)<br>
						<input type="checkbox" name="opt[]" value="1" checked> England<br>
						<input type="checkbox" name="opt[]" value="19"> Finnland<br>
						<input type="checkbox" name="opt[]" value="7" checked> Frankreich<br>
						<input type="checkbox" name="opt[]" value="67"> Griechenland<br>
						<input type="checkbox" name="opt[]" value="35" checked> Holland<br>
						<input type="checkbox" name="opt[]" value="4"> International<br>
						<input type="checkbox" name="opt[]" value="393"> International (Copa)<br>
						<input type="checkbox" name="opt[]" value="66"> Israel<br>
						<input type="checkbox" name="opt[]" value="31" checked> Italien<br>
						<input type="checkbox" name="opt[]" value="52"> Japan<br>
					</div>
					<div class="cbl2">
						<input type="checkbox" name="opt[]" value="14" checked> Kroatien<br>
						<input type="checkbox" name="opt[]" value="12"> Mexiko<br>
						<input type="checkbox" name="opt[]" value="5" checked> Norwegen<br>
						<input type="checkbox" name="opt[]" value="17"> Österreich<br>
						<input type="checkbox" name="opt[]" value="47" checked> Polen<br>
						<input type="checkbox" name="opt[]" value="44"> Portugal<br>
						<input type="checkbox" name="opt[]" value="77" checked> Rumänien<br>
						<input type="checkbox" name="opt[]" value="21"> Russland<br>
						<input type="checkbox" name="opt[]" value="22" checked> Schottland<br>
						<input type="checkbox" name="opt[]" value="9"> Schweden<br>
						<input type="checkbox" name="opt[]" value="25" checked> Schweiz<br>
						<input type="checkbox" name="opt[]" value="152"> Serbien<br>
						<input type="checkbox" name="opt[]" value="32" checked> Spanien<br>
						<input type="checkbox" name="opt[]" value="46"> Türkei<br>
						<input type="checkbox" name="opt[]" value="393"> UEFA<br>
						<input type="checkbox" name="opt[]" value="11"> Ungarn<br>
						<input type="checkbox" name="opt[]" value="26"> USA<br>
						<input type="checkbox" name="opt[]" value="299"> Vereinigte Arabische Emirate<br>
					</div>
				</div>
                <br>
                
                <hr>
			   <span id="clearfix"></span>
            <br>
            <div id="btnPreview">
            <button type="submit" class="btn btn-info btn-lg btn-block" name="btnQuery" id="btnQuery" onclick="this.innerHTML='Spielvorschau Verarbeitung läuft - bitte warten...';"><span class="glyphicon glyphicon-import" aria-hidden="true"></span> Start</button></div>

            
            <?php 

                ///////////////////// DATENBANK VERBINDUNG /////////////////////////////////
                $db = mysqli_connect('localhost', 'wp_api_test', 'wp_test123$', 'wp_2odi6');
                mysqli_set_charset($db, 'utf8');
                ////////////////////////////////////////////////////////////////////////////
                $countArt = 0;
                $countRep = 0;
                
    ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////            
    ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////    
    /////////////////////////////////////////////////////////////SPIELBERICHT////////////////////////////////////////////////////////////////// 
    ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////   
    ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////


                // Button "Spielbericht anfordern" klick
				if(isset($_POST['btnQuery'])) 
				{ 
                    { 
                        if (isset($_POST['opt']))
                        { 
                            foreach ($_POST['opt'] as $value)
                            {
                                echo "<p><span class='glyphicon glyphicon-import'></span> http://betfindr.com/api-text-engine/country-feed-report/" . $value . "/bet90</p>";
                                $url = "http://betfindr.com/api-text-engine/country-feed-report/" . $value . "/bet90";
                                $username = 'bet90';
                                $password = 'Laby4uVc'; 
    
                                //////////////////////// HEADER ///////////////////////////////////////////////////////////////////
                                $options = [
                                            CURLOPT_HTTPHEADER => ['Content-Type: application/json'],
                                            CURLOPT_ENCODING => 'UTF-8',
                                            CURLOPT_URL => $url,
                                            CURLOPT_USERPWD => $username.':'.$password,
                                            CURLOPT_RETURNTRANSFER => 1,
                                           ]; 
                                // Header senden 
                                $ch = curl_init();
                                curl_setopt_array($ch, $options);
                                        
                                ///////////////////////// JSON Ergebnisse ziehen //////////////////////////////////////////////////
                                $response = curl_exec($ch);
    
                                // Verbindung schliessen
                                curl_close($ch);
    
                                // Objekt befüllen
                                $tournament_objects = json_decode($response);
                                $tournament = $tournament_objects->tournament;
                                // $lessAlert auf 0 setzen - zählt die inhaltlich unzureichenden Artikel
                                $lessAlert = 0;
                                
                                // Start JSON Durchlauf
                                foreach($tournament as $tournaments)
                                {
                                    $sqlterm_id = "";
                                    $sqlterm_id = "SELECT `term_id` FROM `wpstg0_term_taxonomy` WHERE `description` = 'TournamentId $tournaments->tournamentId'";
                                    $result_id = mysqli_query($db, $sqlterm_id);
                                    $t_id = mysqli_fetch_array($result_id);
                                    mysqli_free_result($result_id);        
                                   
                                    $match = $tournaments->matches;
                                    
                                        foreach($match as $matches)
                                        {
                                            // zusammenzählen der in den Durchläufen gesammelten Artikel
                                            $countRep .+ $countRep;
                                            // Datum und Uhrzeit zusammenstellen
                                            $datenow = date("Y-m-d H:i:s");
                                            $myDate = date("Y-m-d");
                                            // Datum zerstückeln, formatieren und neu anordnen
                                            $myString = $matches->dateTime;
                                            $k = explode(" ", $myString);
                                            $b = explode("-",$k[0]);
                                            $myDate = $b[2] . "." . $b[1] . "." . $b[0];
                                            $myDate2 = $b[2] . "-" . $b[1] . "-" . $b[0];
    
                                            for($i = 0; $i < count($t_id); $i++)
                                            {
                                                $termidx = $t_id[$i];
    
                                                /////// Zur Wette Button /////////////////////////////////////////////////////////////
                                                $sql_link = "SELECT link FROM custbl_btnlinks WHERE tid = $tournaments->tournamentId";
                                                $linkres = mysqli_query($db, $sql_link);
                                                $btnres = mysqli_fetch_array($linkres);
                                                $btnLink = $btnres[0];
                                                //////////////////////////////////////////////////////////////////////////////////////
    
                                                echo "Kategorie ID: " . $termidx . "<br>";
                                                echo "<br>MatchId: " . $matches->matchId . " - " . $matches->teamHome . " : " . $matches->teamAway . "<br>";
                                                $pTournament = $tournaments->tournamentName;
                                                $pTeamhome = $matches->teamHome;
                                                $pTeamhomeid = $matches->teamIdHome;
                                                $pTeamaway = $matches->teamAway;
                                                $pTeamawayid = $matches->teamIdAway;
                                                $pDatetime = $matches->dateTime;
                                                $pMatchid = $matches->matchId;
                                                $report= $matches->report->languages->de;
                                                $pReport_title = $report->reportTitle;
                                                $pReportsubtitle = $report->reportSubtitle . " - Spielbericht vom " . $myDate;
                                                // post_name aus title erstellen
                                                // alles kleingeschrieben
                                                $pReporttitle = strtolower($pReport_title);
                                                // Leerzeichen durch Bindestriche ersetzen und Datum an den Schluß
                                                $post_name = str_replace(' ', '-', $pReporttitle) . "-" . $myDate2;
                                                $textPart = $report->reportText->textSections;
    
    
                                                ////////////////////////////////////////////////////////////////////////////////////////////////////
                                                // einzelne TextParts zählen - wenn Section count($partCounter) < 2 und count($partCounter[$a] <= 2) 
                                                ////////////////////////////////////////////////////////////////////////////////////////////////////
                                                
                                                $partCounter = $report->reportText->textSections;
                                                
                                                for($a = 0; $a < count($partCounter); $a++)
                                                {
                                                    if(count($partCounter) < 2 && count($partCounter[$a]) <= 2)
                                                    {  
                                                        // hochzählen wenn nicht genug Content im Artikel
                                                        $lessAlert++; 
    
                                                    } else {
    
                                                    ////////////////////////////////////////////////////////////////////////////////////////////////////
                                                    /////////////////////////////////// START //////////////////////////////////////////////////////////
                                                    ////////////////////////////////////////////////////////////////////////////////////////////////////
    
    
                                                    $counter = count($textPart);
                                                    
                                                    $pContent = ""; // Content Variable leeren !!!
                                                    $pContent .= "<h2 class=headline>" . $pPreviewsubtitle . " </h2>";
                                                    $pContent .= "<div class=logobox><img src=https://blog.bet90.com/w24m/img/bluewall.png>";
                                                    //$pContent .= "<div class=matchlogos>";
                                                        // Teamlogos anzeigen - im Designmodifikator von DIVI im CSS die Bildgröße angeben 80x80
                                                        $pContent .= "<div class=logoa><img id=imgb src=https://blog.bet90.com/w24m/img/$pTeamhomeid.png></div><div class=logob><img id=imgc src=https://blog.bet90.com/w24m/img/$pTeamawayid.png></div>";
                                                    //$pContent .= "</div>";
                                                    $pContent .= "</div>";
                                                    $pContent .= "<p class=clearme></p>";
                                                    $pContent .= "<h2 class=headline>" . $pPreviewsubtitle . " </h2>";
                                                    $pContent .= "<div class=box>";
                                                    for($i = 0; $i < $counter; $i++)
                                                    {
                                                        $txtPart = $textPart[$i];
                                                        if($txtPart != NULL)
                                                        {   
                                                            foreach($txtPart as $txtParts)
                                                            {
                                            
                                                                $pContent .= "<div class=ctipp>" . $txtParts->textPart . "</div>";
                                                                
                                                            }
                                                        }
                                                    } 
                                                    
                                                    $pContent .= "</div>";
                                                    
                                                    ///////////////////// ZU DEN WETTEN BUTTON //////////////////////////////////////////////////////////////////
                                                    if($btnLink != NULL)
                                                    {
                                                        $pContent .= "<div class=et_pb_more_button><a class=et_pb_button  href=$btnLink>Zu den Wetten</a></div>";
                                                    }
                                                    /////////////////////////////////////////////////////////////////////////////////////////////////////////////
    
                                                    $pContent .= "<div class=disclaimer><br>Wett Tipps basieren auf der persönlichen Meinung des Autors. Es gibt keine Erfolgsgarantie! Bitte wetten Sie verantwortungsvoll.</div>";
    
                                                    $neph = "SELECT DISTINCT matchId FROM wpstg0_posts WHERE matchId > 0 AND kind = 'R'";
                                                    $resi = mysqli_query($db,$neph);
    
                                                    while($row = mysqli_fetch_array($resi))
                                                    {
                                                        for($i = 0; $i < count($row); $i++) 
                                                        {
                                                            $matchid_pool[] .= $row[$i];
                                                        }
                                                    }
    
                                                    if(!in_array($pMatchid, $matchid_pool)) 
                                                    {
                                                    /////// MAX ID ////////////
                                                    $sql_id = "SELECT MAX(ID) FROM wpstg0_posts";
                                                    $result_id = mysqli_query($db, $sql_id);
                                                    $maxid = mysqli_fetch_array($result_id);
                                                    mysqli_free_result($result_id);
                                                    $max = $maxid[0];
                                                    // Max ID auslesen und um 1 hochzählen
                                                    $max = $max + 1;
                                                    $reportcounter = 0;
                                                    // Artikel URL zusammenstellen
                                                    $guid = "https://blog.bet90.com?p=" . $max; // in der Testumgebung ohne / aber die anderen Einträge haben den Slash
$sql = <<<QUERY
INSERT INTO `wpstg0_posts`(`post_author`, `post_date`, `post_date_gmt`, `post_content`, `post_title`, `post_status`, `comment_status`, `post_name`, `guid`, `matchId`, `kind`)
VALUES (9, '$datenow', '$datenow', '$pContent', '$pReportsubtitle', 'publish', 'closed', '$post_name', '$guid', '$pMatchid', 'R')
QUERY;
    
                                                if(mysqli_query($db, $sql))
                                                {
                                                    echo "<div class='succ'>Daten _posts erfolgreich geschrieben</div>";  
                                                    $reportcounter++;
                                                    $countRep++; 
                                                } else {
                                                    echo "<div class='diss'>Fehler - Daten _posts konnten nicht geschrieben werden:</div>";    
                                                }
                                                    /////// MAX ID ////////////
                                                    $sql_id = "SELECT MAX(ID) FROM wpstg0_posts";
                                                    $result_id = mysqli_query($db, $sql_id);
                                                    $maxid = mysqli_fetch_array($result_id);
                                                    mysqli_free_result($result_id);
                                                    $max = $maxid[0];
$sql2 = <<<QUERY
INSERT INTO `wpstg0_term_relationships`(`object_id`, `term_taxonomy_id`, `term_order`, `matchId`, `kind`)
VALUES ($max, $termidx, 0, $pMatchid, 'R')
QUERY;
    
                                                if(mysqli_query($db, $sql2))
                                                {
                                                    echo "<div class='succ'>Daten _term_relationships erfolgreich geschrieben - Kategorie: $termidx</div>";	   
                                                } else {
                                                    echo "<div class='diss'>Fehler - Daten _term_relationships konnten nicht geschrieben werden:</div>";    
                                                }
                                                    } /* else {
                                                        echo "<span class='midexist'>MatchID schon vorhanden !</span><br>";
                                                    } */
                                                        }
                                                }    
                                            }         
                                        }     
                                }                       
                                echo "<hr>";
                            }            
                        } echo "<div class='succ'>Abfrage ist abgeschlossen</div>";
    
                        // $lessAlert halbieren, da es in der Schleife verdoppelt wird
                        $lessAlert = $lessAlert / 2;
                        
                         
                    }           
                   


    ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////            
    ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////    
    /////////////////////////////////////////////////////////////SPIELVORSCHAU///////////////////////////////////////////////////////////////// 
    ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////   
    ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////


                // Button "Spielvorschau anfordern" klick
				
                foreach ($_POST['opt'] as $value)
                {
                    echo "<p><span class='glyphicon glyphicon-import'></span> http://betfindr.com/api-text-engine/country-feed-preview/" . $value . "/bet90</p>";
                    $url = "http://betfindr.com/api-text-engine/country-feed-preview/" . $value . "/bet90";
                    $username = 'bet90';
                    $password = 'Laby4uVc'; 

                    //////////////////////// HEADER //////////////////////////////////////////////////////////////
                    $options = [
                                CURLOPT_HTTPHEADER => ['Content-Type: application/json'],
                                CURLOPT_ENCODING => 'UTF-8',
                                CURLOPT_URL => $url,
                                CURLOPT_USERPWD => $username.':'.$password,
                                CURLOPT_RETURNTRANSFER => 1,
                               ]; 
                    // Header senden 
                    $ch = curl_init();
                    curl_setopt_array($ch, $options);
                            
                    ///////////////////////// Ergebnisse ziehen //////////////////////////////////////////////////
                    $response = curl_exec($ch);

                    // Verbindung schliessen
                    curl_close($ch);
                    
                    // Objekt befüllen
                    $tournament_objects = json_decode($response);
                    $tournament = $tournament_objects->tournament;

                    foreach($tournament as $tournaments)
                    {
                        $sqlterm_id = "";
                        $sqlterm_id = "SELECT `term_id` FROM `wpstg0_term_taxonomy` WHERE `description` = 'TournamentId $tournaments->tournamentId'";
                        $result_id = mysqli_query($db, $sqlterm_id);
                        $t_id = mysqli_fetch_array($result_id);
                        mysqli_free_result($result_id);        
                       
                        $match = $tournaments->matches;
                        
                            foreach($match as $matches)
                            {
                                // zusammenzählen der in den Durchläufen gesammelten Artikel
                                $countArt .+ $countArt;
                                // Datum und Uhrzeit zusammenstellen
                                $datenow = date("Y-m-d H:i:s");
                                $my_Date = date("Y-m-d");

                                // Max ID auslesen und um 1 hochzählen
                                $max = $max + 1;

                                
                                //Datum zerstückeln und formatieren und neu anordnen
                                $myString = $matches->dateTime;
                                $k = explode(" ", $myString);
                                $b = explode("-",$k[0]);
                                $myDate = $b[2] . "." . $b[1] . "." . $b[0];
                                $myDate2 = $b[2] . "-" . $b[1] . "-" . $b[0];
                                
                                // Artikel URL zusammenstellen
                                $guid = "https://blog.bet90.com/blogstage?p=" . $max; // in der Testumgebung ohne / aber die anderen Einträge haben den Slash

                                for($i = 0; $i < count($t_id); $i++)
                                {   
                                    $termidx = $t_id[$i];

                                    /////// Zur Wette Button /////////////////////////////////////////////////////////////
                                    $sql_link = "SELECT link FROM custbl_btnlinks WHERE tid = $tournaments->tournamentId";
                                    $linkres = mysqli_query($db, $sql_link);
                                    $btnres = mysqli_fetch_array($linkres);
                                    $btnLink = $btnres[0];
                                    //////////////////////////////////////////////////////////////////////////////////////

                                    echo "Kategorie ID: " . $termidx . "<br>";
                                    $pNewtitle =  $matches->teamHome . " VS. " . $matches->teamAway . " am " . $myDate . " - Wett-Tipp und Vorschau";
                                    $pPost_Name = $matches->teamHome . " VS. " . $matches->teamAway . " am " . $myDate2 . " - Wett-Tipp und Vorschau";
                                    // post_name aus title erstellen
                                    // alles kleingeschrieben
                                    $pReporttitle = strtolower($pPost_Name);
                                    // Leerzeichen durch Bindestriche ersetzen und Datum an den Schluß
                                    $post_name = str_replace(' ', '-', $pReporttitle);
                                    $post_name = str_replace(':','',$post_name);
                                    $post_name = str_replace('.','',$post_name);

                                    $pTournament = $tournaments->tournamentName;
                                    $pTeamhome = $matches->teamHome;
                                    $pTeamhomeid = $matches->teamIdHome;
                                    $pTeamaway = $matches->teamAway;
                                    $pTeamawayid = $matches->teamIdAway;
                                    $pDatetime = $matches->dateTime;
                                    $pMatchid = $matches->matchId;
                                    $preview= $matches->preview->languages->de;
                                    
                                    for($r = 0;$r < count($preview); $r++){
                                        if($r == 0) {
                                            echo "vorhanden";
                                        } else {
                                            echo "nicht vorhanden";
                                        }
                                    }
                                    $pPreview_title = $pNewtitle;
                                    $pPreviewsubtitle = $preview->previewTitle;
                                    $textPart = $preview->previewText->textSections;
                                    $counter = count($textPart);
                                    $pContent = ""; // Content Variable leeren !!!!
                                    //$pContent .= "<h2 class=headline>" . $pPreviewsubtitle . " </h2>";
                                    $pContent .= "<div class=logobox><img id=imga src=https://blog.bet90.com/w24m/img/bluewall.png>";
                                    //$pContent .= "<div class=matchlogos>";
                                        // Teamlogos anzeigen - im Designmodifikator von DIVI im CSS die Bildgröße angeben 80x80
                                        $pContent .= "<div class=logoa><img id=imgb src=https://blog.bet90.com/w24m/img/$pTeamhomeid.png></div><div class=logob><img id=imgc src=https://blog.bet90.com/w24m/img/$pTeamawayid.png></div>";
                                    //$pContent .= "</div>";
                                    $pContent .= "</div>";
                                    $pContent .= "<span class=clearme></span>";
                                    $pContent .= "<h2 class=headline>" . $pPreviewsubtitle . " </h2>";
                                    $pContent .= "<div class=box>";
                                    for($i = 0; $i < $counter; $i++)
                                    {
                                        $txtPart = $textPart[$i];
                                        if($txtPart != NULL)
                                        {   
                                            foreach($txtPart as $txtParts)
                                            {
                                                $pContent .= "<div class=ctipp>" . $txtParts->textPart . "&nbsp;" . "</div>";
                                            }	      
                                        }
                                    }
                                    $pContent .= "</div>";
                                    $pContent .= "<hr>";
                                    
                                    
                                    ///////////////////////////////// TRENDS //////////////////////////////////////
                                    
                                    $pContent .= "<h2 class=htipp>Mögliche Wett-Tipps:</h2>";
                                    $pContent .= "<div class=prognose>";
                                    $tCounter = 0;
                                    $emptyTrend = 0;
                                    for($i = 0; $i < $counter; $i++) 
                                    {
                                        $txtPart = $textPart[$i];
                                        
                                        foreach($txtPart as $txtParts)
                                        {
                                            
                                            if($txtParts->trend != NULL)
                                            {       
                                                $tCounter++;
                                                $emptyTrend++;
                                                $pContent .= "<br><div class=trend>" . $txtParts->trend->languages->de->trend . "<br>";
                                                $pContent .= "<span style=color:#01DF74>Tipp " . $tCounter . ": " . $txtParts->trend->languages->de->callToAction . "</span></div><br>";
                                            }
                                        }
                                    }
                                    
                                    // Wenn keine Wett-Tipps vorliegen, Hinweis in rot anzeigen
                                    if($emptyTrend == 0)
                                    {
                                        $pContent .= "<br><div class=trend style=color:red>Für dieses Spiel liegen uns leider keine Wett-Tipps vor.</div><br>";
                                    }

                                    $pContent .= "</div>";

                                    ////////////// JETZT WETTEN BUTTON /////////////////////////////////////////////////////////////////////////
                                    if($btnLink != NULL)
                                    {
                                        $pContent .= "<div class=et_pb_more_button><a class=et_pb_button  href=$btnLink>Jetzt wetten</a></div>";
                                    }
                                    ////////////////////////////////////////////////////////////////////////////////////////////////////////////

                                    $pContent .= "<div class=disclaimer><br>Wett Tipps basieren auf der persönlichen Meinung des Autors. Es gibt keine Erfolgsgarantie! Bitte wetten Sie verantwortungsvoll.</div>";
                                   
                                    $neph = "SELECT DISTINCT matchId FROM wpstg0_posts WHERE matchId > 0 AND kind = 'P'";
                                    $resi = mysqli_query($db,$neph);

                                    while($row = mysqli_fetch_array($resi))
                                    {
                                        for($i = 0; $i < count($row); $i++) 
                                        {
                                            $matchid_pool[] .= $row[$i];
                                        }
                                    }
                                   
                                    if(!in_array($pMatchid, $matchid_pool)) 
                                    {
                                    /////// MAX ID ////////////
                                    $sql_id = "SELECT MAX(ID) FROM wpstg0_posts";
                                    $result_id = mysqli_query($db, $sql_id);
                                    $maxid = mysqli_fetch_array($result_id);
                                    mysqli_free_result($result_id);
                                    $max = $maxid[0];
                                    // Max ID auslesen und um 1 hochzählen
                                    $max = $max + 1;
                                    $previewcounter = 0;
                                    // Artikel URL zusammenstellen
                                    $guid = "https://blog.bet90.com?p=" . $max; // in der Testumgebung ohne / aber die anderen Einträge haben den Slash

$sql = <<<QUERY
INSERT INTO `wpstg0_posts`(`post_author`, `post_date`, `post_date_gmt`, `post_content`, `post_title`, `post_status`, `comment_status`, `post_name`, `guid`, `matchId`, `kind`)
VALUES (9, '$datenow', '$datenow', '$pContent', '$pPreview_title', 'publish', 'closed', '$post_name', '$guid', $pMatchid, 'P')
QUERY;

                                    if(mysqli_query($db, $sql))
                                    {
                                        echo "<div class='succ'>Daten _posts erfolgreich geschrieben</div>";
                                        $previewcounter++;
                                        $countArt++;
                                    } else {
                                        echo "<div class='diss'>Fehler - Daten _posts konnten nicht geschrieben werden:</div>";    
                                    } 
                                    /////// MAX ID ////////////
                                    $sql_id = "SELECT MAX(ID) FROM wpstg0_posts";
                                    $result_id = mysqli_query($db, $sql_id);
                                    $maxid = mysqli_fetch_array($result_id);
                                    mysqli_free_result($result_id);
                                    $max = $maxid[0];
                                   
$sql2 = <<<QUERY
INSERT INTO `wpstg0_term_relationships`(`object_id`, `term_taxonomy_id`, `term_order`, `matchId`, `kind`)
VALUES ($max, $termidx, 0, $pMatchid, 'P')
QUERY;

                                    if(mysqli_query($db, $sql2))
                                    {
                                        echo "<div class='succ'>Daten _term_relationships erfolgreich geschrieben - Kategorie: $termidx</div>";
                                    } else {
                                        echo "<div class='diss'>Fehler - Daten _term_relationships konnten nicht geschrieben werden:</div>";    
                                    }
                                        } else {
                                            echo "<span class='midexist'>MatchID schon vorhanden !</span><br>";
                                        }
                                    }      
                            }  
                    }                            
                    echo "<hr>";
                }            
            } echo "<div class='succ'>Abfrage ist abgeschlossen</div>";
                    
                    ////////////////////////////////////////////////////////////////
                    //////// E-Mail verschicken ////////////////////////////////////
                    ////////////////////////////////////////////////////////////////

                    // Wenn Tipps oder Berichte vorliegen - Benachrichtigung schicken
                    if($countArt > 0 || $countRep > 0){
                        /* $to = "content@web24media.com, d.metzger@web24media.com"; */
                        $to = "d.metzger@web24media.com";
                        //$message = $pc . " - " . $rc;
                        $message = "Auto E-Mail from ContentMaster";
                        $subject = "CMA1 - B: " . $countRep . " T: " . $countArt . " I: " .$lessAlert;
                        $header = "From: ContentMaster";
                        //...zusammensetzen und abschicken
                        mail($to, $subject, $message, $header);
                        echo "<script>location.reload();</script>";
                    }  

                    ////////////////////////////////////////////////////////////////
                    ////////////////////////////////////////////////////////////////
                    ////////////////////////////////////////////////////////////////
                    
            ?>
        </form>
        </div>
    </div>     
</body>
</html>
