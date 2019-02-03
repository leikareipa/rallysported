<!DOCTYPE html>
<html>
    <head>
		<meta name="viewport" content="width=device-width">
        <meta http-equiv="content-type" content="text/html; charset=UTF-8">
        <link rel="stylesheet" type="text/css" href="index.css">
        <link href="https://fonts.googleapis.com/css?family=Permanent+Marker|Quicksand" rel="stylesheet">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous">
        <title>RallySportED track list</title>
    </head>
    <body>
        <?php
            // URL to where the web/browser version of RallySportED is hosted. This will be used to
            // construct links to loading up given tracks in the web editor.
            $rsedWebpage = "http://www.tarpeeksihyvaesoft.com/rallysported/";

            // Returns as a string the quickest lap time in the given array of strings of lap times;
            // or, if the array is empty or otherwise invalid, a string (e.g. "n/a") to indicate that
            // no lap times are available.
            //
            // The array might be like so: ["0:17:70 Driver 1", "0:19:89 Driver 2"], in which case
            // "0:17:70 Driver 1" would be returned.
            //
            // NOTE: At present, the function is just barebones, and expects the first lap time string
            // in the array to be the best one; i.e. no processing is done to sort the array's entries.
            function top_lap_time_string($laptimesArray)
            {
                if (!is_array($laptimesArray) || count($laptimesArray) == 0)
                {
                    return "(n/a)";
                }

                return htmlentities(empty($laptimesArray[0])? "" : $laptimesArray[0]);
            }

            // Create a HTML list of all the tracks in the track database file, presenting to the viewer
            // some basic info about each track, and providing links to download the track and to open it
            // for editing in RallySportED.
            $trackDB = json_decode(file_get_contents("tracks.json"), true);
            if ($trackDB != NULL)
            {
                printf("<div id='track-list'>");
                foreach($trackDB["tracks"] as $track)
                {
                    $id = htmlentities(empty($track["id"])? "" : $track["id"]);
                    $name = htmlentities(empty($track["name"])? "" : $track["name"]);
                    $topLaptime = top_lap_time_string($track["top_laptimes"]);

                    printf("\n<div class='track'>");
                      printf("\n<div><a href='img/isometric/%s.png'><img src='img/isometric/%s.png'></a></div>", $id, $id);
                      printf("\n<div class='track-title'>%s</div>", strtolower($name . "."));
                      printf("\n<div style='transform: rotate(1deg);'>");
                        printf("\n<a class='track-download-tag' href='files/%s.zip' download='%s.zip'><i class='fas fa-file-download'></i></a>", $id, $name);
                        printf("\n<a class='track-view-tag' target='_blank' rel='noopener' href='%s?track=%s'><i class='fas fa-cut'></i> Edit copy in RallySportED</a>", $rsedWebpage, $id);
                      printf("\n</div>");
                      printf("\n<div class='info-text'><i class='fas fa-stopwatch'></i> Lap time to beat: %s</div>", $topLaptime);
                    printf("\n</div>\n");
                }
                printf("</div>\n");
            }
            else
            {
                printf("No tracks to display!");
            }
        ?>
    </body>
</html>
