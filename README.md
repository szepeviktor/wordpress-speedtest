# WordPress Speedtest

WordPress speedtest with Sqlite3 on PHP-CLI. You only have to unpack it.

### Results

| Description                           | [CPU](https://www.cpubenchmark.net/singleThread.html "PassMark") | PHP | msec   | stable\* |
| ------------------------------------- | ---------------------------| --- | ------:| ------ |
| Virtualbox on Windows 7 Pro           | AMD FX-6300                | 5.4 |    219 | [✓]    |
| [Digital Ocean](https://www.digitalocean.com/?refcode=1f29354cd6ab)              | E5-2630L v2 | 5.6 | 195 | [✓] |
| [Linode](https://www.linode.com/?r=66de78b7ac99f79ec3a8e89a60c6c825dd107df1) / KVM | E5-2680 v3  | 5.6 | 180 | [&ensp;] |
| [RunAbove by OVH](http://runabove.me/HAR2) / Sandbox | Intel E312xx Sandy Bridge     | 5.5 | 200 | [&ensp;] |
| [RunAbove by OVH](http://runabove.me/HAR2) / Steadyfast | Intel E312xx Sandy Bridge  | 5.5 | **154** | [✓] |
| [OVH Public Cloud](https://www.ovh.com/fr/cloud/instances/cpu.xml) / CPU instance EG-7     | Intel E5-2687W v3 | 5.6 | **151**| [✓] |
| OVH Web / Cloud VPS                   | AMD Opteron 4386           | 5.5 |    210 | [✓]    |
| OVH Web / Cloud VPS                   | AMD Opteron 4284           | 5.6 |    293 | [✓]    |
| [Vultr](http://www.vultr.com/?ref=6815796) / Compute instances | N/A  | 5.6 | **165** | [&ensp;] |
| Aruba Cloud / Smart instance (€1)     | Intel L5640                | 5.6 |    210 | [&ensp;]    |
| EDIS / KVM Basic plus                 | Intel E5649                | 5.6 |    240 | [&ensp;]    |
| Joyent Public Cloud / High CPU 1.75 SmartOS | Intel E5-2670        | 5.5 |    245 | [&ensp;]    |
| Joyent Public Cloud / High CPU 1.75 KVM | Intel E5-2690 v3         | 5.6 |    267 | [&ensp;]    |
| SoYouStart dedicated by OVH / E3-SSD-3 | Intel E3-1245 v2           | 5.6 | **148**| [✓]    |
| SoYouStart dedicated by OVH / E3-SSD-3 | Intel E3-1245 v2 +         | 5.6 |    113 | [✓]    |
| Brightbox / SSD 1G                    | Intel E312xx Sandy Bridge  | 5.5 |    210 | [✓]    |
| Custom PC / ASUS P5KPL-AM EPU         | Intel Pentium E5400        | 5.3 |    262 | [&ensp;]    |
| [HostHatch](https://portal.hosthatch.com/aff.php?aff=250)             | Intel E5-1650 v2  | 5.6 | 256 | [&ensp;] |
| [StackPort](http://stackport.com/) / m1.medium (beta)                 | Intel ??? Haswell | 5.6 | **121** | [✓] |
| GleSYS / OpenVZ in Falkenberg         | Intel E5-2687W v3          | 5.6 |**129** | [✓]    |
| BigV / in York                        | QEMU ???                   | 5.6 |    210 | [✓]    |
| Wable / Bundle #2 (OpenVZ)            | N/A                        | 5.6 |    203 | [✓]    |
| Scaleway / C1                         | Marvell Armada 370/XP      | 5.6 |   1111 | [✓]    |
| [**UpCloud**](https://www.upcloud.com/pricing/) / in Frankfurt        | Intel E5-2687W v3 | 5.6 | **115** | [✓] |
| [SWNet Group](http://www.swnetgroup.hu/vps-virtualis-szerver-berles/) | Intel E5-2630 v3  | 5.6 | 167 | [&ensp;] |
| [Rendszerinformatika](http://servira.com/) | Intel E5-2665         | 5.5 |    222 | [&ensp;]    |
| Amazon EC2 / c4.large                 | Intel E5-2666 v3           | 5.6 | **113**| [✓]    |
| CenturyLink / Standard server         | Intel E5-2680              | 5.6 | **151**| [✓]    |
| CenturyLink / Hyperscale              | Intel E5-2697 v2           | 5.6 | **150**| [✓]    |
| RamNode / Premium KVM SSD in NL       | Intel E3-1230 V2           | 5.6 |    185 | [&ensp;]    |
| webtropia-myLoc / vServer M 4.0       | Intel E5-2620 v2           | 5.6 |    234 | [&ensp;]    |
| [**Cloud.hu by EZIT**](https://client.ezit.hu/aff.php?aff=036) / Cloud Webtárhely Plus 2 †† | Intel E3-1240 V2 | 7.0 | **122**| [✓] |
| [**Cloud.hu by EZIT**](https://client.ezit.hu/aff.php?aff=036) / Cloud Webtárhely Plus 2 †† | Intel E3-1240 V2 | 5.6 | 169 | [✓] |
| Tárhely.eu / Alap + DDR4              | Intel E5-1620 v3           | 5.6 |    175 | [&ensp;]    |
| ProfiTárhely / WORDPRESS †            | Intel E3-1230 V2           | 5.6 |    323 | [&ensp;]    |
| Magyar Hosting / EVO 3 ††             | Intel E5-1650              | 5.6 |    195 | [✓]    |
| Host Europe / Virtual Server Advanced | Intel E5-2620 v2           | 5.6 |    256 | [&ensp;]    |
| Cloud.hu by EZIT / Pro Cloud Flotta   | Intel X5670                | 5.6 |    283 | [&ensp;]    |
| **Description** | **[CPU](https://www.cpubenchmark.net/singleThread.html "PassMark")** | **PHP** | **msec** | **stable\*** |

<!-- PHP 5.6: Maxer:272ms✓ MagyarHosting:278ms[] servetheworld:225ms[]/195ms gandi:E5-2650L_php5.4_600ms[] -->

`*` Stable means deviation is within +/- 10%.

`†` Shared hosting with SSH access.

`††` Shared high-resource hosting with SSH access.

SoYouStart by OVH is a dedicated server provider, not VPS.

`+` CPU `scaling_governor` was set to `performance`.

### Quick installation

```bash
# On a Debian based system
apt-get install -y php5-cli php5-sqlite

# Test sqlite extension
php -m | grep -Eqx "sqlite3|SQLite" || echo "Please enable sqlite extension." >&2

# Download and untar in one go
wget -qO- https://github.com/szepeviktor/wordpress-speedtest/releases/download/v0.1.0/wordpress-speedtest.tar.gz|tar xzv

# Start a test
cd wordpress-speedtest/ && time php index.php > /dev/null
```


### Usage

```bash
# One time run
time php index.php|grep -q 'Hello world.</a></h2>' || echo "WordPress error." 1>&2

# Ten runs
time for R in {1..10}; do php index.php > /dev/null; done

# Live stability test
while :; do { time php index.php > /dev/null; sleep 0.2; } 2>&1|grep "^real"; done

# Simple graph * with percentage of change
MSEC_PERC=1 MSEC_DELAY=0 MSEC_DOT=— MSEC_DIVIDER=2 msec php index.php

# Nice graph of stability

apt-get install -y gnuplot5-nox feedgnuplot
while :; do { time php index.php > /dev/null; sleep 0.2; } 2>&1 \
 | sed -n 's/^real\s\+0m\([0-9.]\+\)s$/\1/p'; done \
 | feedgnuplot --terminal 'dumb 120,40' --stream --points --lines -xlen 30 --set "xtics 10"
```

On cPanel servers PHP-CLI binary can be found at `/opt/alt/php56/usr/bin/php`.

`*` Download `msec` from [szepeviktor/debian-server-tools](https://github.com/szepeviktor/debian-server-tools/blob/master/tools/msec).

Please [report your result](https://github.com/szepeviktor/wordpress-speedtest/issues/new)!
