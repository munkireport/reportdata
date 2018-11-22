Configuration
-------------

Dashboard - IP Ranges

Plot IP ranges by providing an array with labels and
a partial IP address. Specify multiple partials in array
if you want to group them together.
The IP adress part is queried with SQL LIKE
Examples:
```
IP_LABELS='MYORG, ALTLOCATION'
IP_RANGES_MYORG='130.37'
IP_NAME_MYORG='My Organisation'
IP_RANGES_ALTLOCATION='211.88.12., 211.88.13.'
IP_NAME_ALTLOCATION='Alternative Location'
```
