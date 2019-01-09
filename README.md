Configuration
-------------

Dashboard - IP Ranges

Plot IP ranges by providing an array with labels and
a partial IP address. Specify multiple partials in array
if you want to group them together.
The IP adress part is queried with SQL LIKE

The configuration has to be a YAML file and is loaded from: 

`local/module_configs/ip_ranges.yml`

You can override this file by specifying the following variable:

`REPORTDATA_IP_CONFIG_PATH=/path/to/custom/config.yml`

Example:

```
MyOrg: 100.99.
AltLocation:
    - 211.88.12.
    - 211.88.13.
Local: 127.0.0.1
```
