# WordPress speedtest

WordPress speedtest with Sqlite3 on PHP-CLI. You only have to unpack it.

### Results

| Description                           | [CPU](https://www.cpubenchmark.net/singleThread.html "PassMark") | PHP | msec   | stable\* |
| ------------------------------------- | ---------------------------| --- | ------:| ------ |
| Virtualbox on Windows 7 Pro           | AMD FX-6300                | 5.4 |    219 | [√]    |
| [Digital Ocean](https://www.digitalocean.com/?refcode=1f29354cd6ab)              | E5-2630L v2 | 5.6 | 195 | [√] |
| [Linode](https://www.linode.com/?r=66de78b7ac99f79ec3a8e89a60c6c825dd107df1) KVM | E5-2680 v3  | 5.6 | 180 | [&ensp;] |
| [RunAbove by OVH](http://runabove.me/HAR2) / Sandbox | Intel E312xx Sandy Bridge     | 5.5 | 200 | [&ensp;] |
| [RunAbove by OVH](http://runabove.me/HAR2) / Steadyfast | Intel E312xx Sandy Bridge  | 5.5 | **154** | [√] |
| OVH Public Cloud / CPU instance       | Intel E5-2687W v3          | 5.6 | **151**| [√]    |
| OVH Web / Cloud VPS                   | AMD Opteron 4386           | 5.5 |    210 | [√]    |
| OVH Web / Cloud VPS                   | AMD Opteron 4284           | 5.6 |    293 | [√]    |
| [Vultr](http://www.vultr.com/?ref=6815796) / Compute instances | N/A  | 5.6 | **165** | [&ensp;] |
| Aruba Cloud / Smart instance (€1)     | Intel L5640                | 5.6 |    210 | [&ensp;]    |
| EDIS / KVM Basic plus                 | Intel E5649                | 5.6 |    240 | [&ensp;]    |
| Joyent Public Cloud / High CPU 1.75 SmartOS | Intel E5-2670        | 5.5 |    245 | [&ensp;]    |
| Joyent Public Cloud / High CPU 1.75 KVM | Intel E5-2690 v3         | 5.6 |    267 | [&ensp;]    |
| SoYouStart by OVH / E3-SSD-3 †        | Intel E3-1245 v2           | 5.6 | **148**| [√]    |
| SoYouStart by OVH / E3-SSD-3 †        | Intel E3-1245 v2+          | 5.6 |    113 | [√]    |
| Brightbox / SSD 1G                    | Intel E312xx Sandy Bridge  | 5.5 |    210 | [√]    |
| Custom PC / ASUS P5KPL-AM EPU         | Intel Pentium E5400        | 5.3 |    262 | [&ensp;]    |
| [HostHatch](https://portal.hosthatch.com/aff.php?aff=250)             | Intel E5-1650 v2  | 5.6 | 256 | [&ensp;] |
| [StackPort](http://stackport.com/) / m1.medium (beta)                 | Intel ??? Haswell | 5.6 | **121** | [√] |
| GleSYS / OpenVZ in Falkenberg         | Intel E5-2687W v3          | 5.6 |**129** | [√]    |
| BigV / in York                        | QEMU ???                   | 5.6 |    210 | [√]    |
| Wable / Bundle #2 (OpenVZ)            | ???                        | 5.6 |    203 | [√]    |
| Scaleway / C1                         | Marvell Armada 370/XP      | 5.6 |   1111 | [√]    |
| [**UpCloud**](https://www.upcloud.com/pricing/) / in Frankfurt        | Intel E5-2687W v3 | 5.6 | **115** | [√] |
| [SWNet Group](http://www.swnetgroup.hu/vps-virtualis-szerver-berles/) | Intel E5-2630 v3  | 5.6 | **167** | [ ] |
| [Rendszerinformatika](http://servira.com/) | Intel E5-2665         | 5.5 |    222 | [&ensp;]    |

`*` Stable means deviation is within +/- 10%.

`†` SoYouStart by OVH is a dedicated server provider, not VPS.

`+` CPU `scaling_governor` was set to `performance`.

Please [report your result](https://github.com/szepeviktor/wordpress-speedtest/issues/new)!


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

#### One time run

`time php index.php | grep -q 'Hello world.</a></h2>' || echo "WordPress error." >&2`

#### Ten runs

`time for R in {1..10}; do php index.php > /dev/null; done`

#### Live stability test

`while :; do { time php index.php > /dev/null; sleep 0.2; } 2>&1|grep "^real"; done`

#### Simple graph with percentage of change

`MSEC_PERC=1 MSEC_DELAY=0 MSEC_DOT=— MSEC_DIVIDER=2 msec php index.php`

Download `msec` from [szepeviktor/debian-server-tools](https://github.com/szepeviktor/debian-server-tools/blob/master/tools/msec).

#### Nice graph of stability

```bash
apt-get install -y gnuplot5-nox feedgnuplot
while :; do { time php index.php > /dev/null; sleep 0.2; } 2>&1 \
 | sed -n 's/^real\s\+0m\([0-9.]\+\)s$/\1/p'; done \
 | feedgnuplot --terminal 'dumb 120,40' --stream --points --lines -xlen 30 --set "xtics 10"
```
