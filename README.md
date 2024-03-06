# TPwsk

create action
```sh
wsk action create script1 script1.js
wsk action create script2 script2.py
wsk action create script3 script3.php
wsk action create expose exposeUrl.js
```

create and lauch sequence 1 
```sh
 wsk action create sequence1 --sequence script1,script2,script3 -r
 wsk action invoke sequence1 -r
```

create url
```sh
wsk action create sequence2 --sequence script1,script2,script3,expose --web true
wsk action get sequence2 --url
```