# GoogleMapToKML
You can download your custom map to kmz,kml.
You must confirm your map's url not be forbid access.

##php
If you want to use,you must put MapToKML.php and pclzip.lib.php to floder.
You can call function GetKMLInfo(mid,name).
mid is the unique id , name is file name and not Chinese.
For example, your url like this "https://www.google.com/maps/d/viewer?mid=18MNhiwiRmy7r-Y9WmtcV_b5qfIY".
You can call function GetKMLInfo('18MNhiwiRmy7r-Y9WmtcV_b5qfIY','example') ,then you get example.kml and example.kmz .



#GoogleMapToKML
可以將google的我的地圖 轉換成KMZ,KML檔
必須確定網址非私人的

##php
把MapToKML.php 跟 pclzip.lib.php 放入資料夾後，必須先include MapToKML.php才可以使用。
你可以使用GetKMLInfo(mid,name) function , 地圖mid及想要的檔案名稱(不能為中文)
舉例 https://www.google.com/maps/d/viewer?mid=18MNhiwiRmy7r-Y9WmtcV_b5qfIY
你可以使用GetKMLInfo('18MNhiwiRmy7r-Y9WmtcV_b5qfIY','example')
將會得到該地圖的KML及KMZ檔 檔名為example.