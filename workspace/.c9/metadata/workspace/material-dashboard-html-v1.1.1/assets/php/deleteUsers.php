{"filter":false,"title":"deleteUsers.php","tooltip":"/material-dashboard-html-v1.1.1/assets/php/deleteUsers.php","ace":{"folds":[],"scrolltop":0,"scrollleft":0,"selection":{"start":{"row":7,"column":51},"end":{"row":7,"column":54},"isBackwards":true},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":0},"hash":"d7d448f1ac2faade1dfdc750050a7ed3bf0aaf90","undoManager":{"mark":10,"position":10,"stack":[[{"start":{"row":0,"column":0},"end":{"row":16,"column":2},"action":"insert","lines":["<?php","\tinclude(\"connect.php\");","\t\t$link=conectDataBase(); #We are calling the function","","\t\t#get the data from the form","\t\t$ID=$_GET['Id'];","\t\t#insert into the database","\t\tmysqli_query($link, \"delete from Rooms where Id='$ID' \");","","\t\t#show the result","\t\tmysqli_close($link);","","\t\theader(\"Location: ../../Dashboard/rooms.php\");","","","","?>"],"id":1}],[{"start":{"row":12,"column":36},"end":{"row":12,"column":41},"action":"remove","lines":["rooms"],"id":2},{"start":{"row":12,"column":36},"end":{"row":12,"column":37},"action":"insert","lines":["u"]}],[{"start":{"row":12,"column":37},"end":{"row":12,"column":38},"action":"insert","lines":["s"],"id":3}],[{"start":{"row":12,"column":38},"end":{"row":12,"column":39},"action":"insert","lines":["e"],"id":4}],[{"start":{"row":12,"column":39},"end":{"row":12,"column":40},"action":"insert","lines":["r"],"id":5}],[{"start":{"row":12,"column":40},"end":{"row":12,"column":41},"action":"insert","lines":["s"],"id":6}],[{"start":{"row":7,"column":35},"end":{"row":7,"column":40},"action":"remove","lines":["Rooms"],"id":7},{"start":{"row":7,"column":35},"end":{"row":7,"column":36},"action":"insert","lines":["u"]}],[{"start":{"row":7,"column":36},"end":{"row":7,"column":37},"action":"insert","lines":["s"],"id":8}],[{"start":{"row":7,"column":37},"end":{"row":7,"column":38},"action":"insert","lines":["e"],"id":9}],[{"start":{"row":7,"column":38},"end":{"row":7,"column":39},"action":"insert","lines":["r"],"id":10}],[{"start":{"row":7,"column":39},"end":{"row":7,"column":40},"action":"insert","lines":["s"],"id":11}]]},"timestamp":1495711718323}