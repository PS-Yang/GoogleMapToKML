# GoogleMapToKML
You can download your custom map to kmz,kml.
You must confirm your map's url not be forbid access.

##php
If you want to use,you must put MapToKML.php and pclzip.lib.php to floder.
You can call function GetKMLInfo(mid,name).
mid is the unique id , name is file name and not Chinese.
For example, your url like this "https://www.google.com/maps/d/viewer?mid=18MNhiwiRmy7r-Y9WmtcV_b5qfIY".
You can call function GetKMLInfo('18MNhiwiRmy7r-Y9WmtcV_b5qfIY','example') ,then you get example.kml and example.kmz .

