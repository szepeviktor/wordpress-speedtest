# WordPress Speedtest

WordPress speedtest with Sqlite3 on PHP-CLI. You only have to unpack it on a VPS or a shared hosting account with SSH access.

[Video on competing with Amazon](http://livestream.com/gigaom/structureeurope/videos/30328698) *4th video*
<!-- Amazon in sight http://livestream.com/accounts/74987/events/2361507/videos/30328698/player?autoPlay=true&mute=false -->

[Top 10 European Cloud Service Providers 2016 Price-Performance Report](http://connect.cloudspectator.com/european-cloud-service-providers-report-download)

[Cloud Provider Directory by Gartner](https://cloudharmony.com/cloudsquare)

### Results

| Description | [CPU](https://www.cpubenchmark.net/singleThread.html "PassMark") | PHP | msec | stable&#42; |
| ------------------------------------- | ---------------------------| --- | ------:| ----------- |
| [Tu Cloud Server](https://www.tucloudserver.com/) / VPS 50 in Madrid | Intel E5-2620 v2 | 5.6 | 179 | [✓] |
| [**UpCloud**](https://www.upcloud.com/pricing/)<a name="upcloud"></a> / in Frankfurt :alarm_clock: | Intel E5-2687W v3 | 5.6 | **115** | [✓] |
| [**Liquid Web**](http://liquidweb.evyy.net/c/295810/278394/4464) / Storm VPS 1GB :alarm_clock: | Intel E3-1271 v3 | 5.6 | **94** | [✓] |
| [**Contabo**](https://contabo.com/?show=vps) / VPS M SSD | Intel E5-2620 v3 | 5.6 | **159** | [✓] |
| [**Oktawave**](https://www.oktawave.com/en/instances) / v1.highcpu-2.09 :alarm_clock: | Intel E5-2660 v3 | 5.6 | **133** | [✓] |
| [Exoscale](https://portal.exoscale.ch/register?r=FY4A6ibqDioH) / Medium in CH-DK-2 :alarm_clock: | Intel E312xx Sandy Bridge | 5.6 | 178 | [✓] |
| [Exoscale](https://portal.exoscale.ch/register?r=FY4A6ibqDioH) / Medium in CH-GVA-2 :alarm_clock: | Intel E5-2680 v4 | 5.6 | **145** | [✓] |
| VPS.ag / Cloud VPS (€2, LXC)          | Intel E5-2440 v2           | 5.6 |    209 | [✓]         |
| [Private Layer](https://www.privatelayer.com/switzerland-cloud-server.php) / 4 Cores @ 3.0 GHz | Intel X5675 | 5.6 | **145** | [✓] |
| Google Compute Engine / n1-highcpu-2 :alarm_clock: | Intel Xeon 2.60 GHz | 5.6 | **137** | [✓] |
| [Digital Ocean](https://www.digitalocean.com/?refcode=1f29354cd6ab) :alarm_clock: | Intel E5-2630L v2 | 5.6 | 195 | [✓] |
| [Linode](https://www.linode.com/?r=66de78b7ac99f79ec3a8e89a60c6c825dd107df1) / KVM :alarm_clock: | Intel E5-2680 v3 | 5.6 | 180 | [&ensp;] |
| My custom PC :computer:               | AMD FX-6300                | 5.6 |    158 | [✓]         |
| [RunAbove by OVH](https://www.runabove.com/) / Steadyfast | Intel E312xx Sandy Bridge | 5.5 | **154** | [✓] |
| [OVH Public Cloud](https://www.ovh.com/fr/cloud/instances/cpu.xml) / CPU Instance EG-7 :alarm_clock: | Intel E5-2650 v3 | 5.6 | **128** | [&ensp;] |
| [OVH Public Cloud](https://www.ovh.com/fr/cloud/instances/cpu.xml) / CPU Instance HG-7 :alarm_clock: | Intel E5-2687W v3 | 5.6 | **160** | [&ensp;] |
| OVH Web / Cloud VPS                   | AMD Opteron 4386           | 5.5 |    210 | [✓]         |
| OVH Web / Cloud VPS                   | AMD Opteron 4284           | 5.6 |    293 | [✓]         |
| [Vultr](http://www.vultr.com/?ref=6815796) / Compute instances :alarm_clock: | N/A | 5.6 | **165** | [&ensp;] |
| Aruba Cloud / Smart Small (€1)        | Intel L5640                | 5.6 |    210 | [&ensp;]    |
| **Aruba Cloud** / Smart Large         | Intel E5-2650 v3           | 5.6 | **143**| [✓]         |
| Aruba Cloud / Smart Small (€1)        | Intel E5-2650L v3          | 5.6 |    190 | [&ensp;]    |
| **Aruba Cloud** / Smart Small (€1)    | Intel E5-2650L v4          | 5.6 | **138**| [✓]         |
| EDIS / KVM Basic plus                 | Intel E5649                | 5.6 |    240 | [&ensp;]    |
| Joyent Public Cloud / Infrastructure container High CPU 4 SmartOS | Intel E5-2670 | 5.6 | 245 | [&ensp;] |
| Joyent Public Cloud / KVM High CPU 1.75 | Intel E5-2670            | 5.6 |    160 | [✓]         |
| SoYouStart dedicated by OVH / E3-SSD-3 :computer: | Intel E3-1245 v2|5.6 | **148**| [✓]         |
| SoYouStart dedicated by OVH / E3-SSD-3 :computer: | Intel E3-1245 v2 +|5.6|   113 | [✓]         |
| Brightbox / SSD 1G :alarm_clock:      | Intel E312xx Sandy Bridge  | 5.5 |    210 | [✓]         |
| Custom PC / ASUS P5KPL-AM EPU :computer: | Intel Pentium E5400     | 5.3 |    262 | [&ensp;]    |
| [HostHatch](https://portal.hosthatch.com/aff.php?aff=250) / SSD VPS - KVM | Intel E5-1650 v2 | 5.6 | 256 | [&ensp;] |
| [StackPort](http://stackport.com/) / m1.medium (beta) :alarm_clock: | Intel Haswell | 5.6 | **121** | [✓] |
| [StackPort](http://stackport.com/) / m1.small :alarm_clock: | QEMU | 5.6 | **119**| [&ensp;]    |
| GleSYS / OpenVZ in Falkenberg :alarm_clock: | Intel E5-2687W v3    | 5.6 | **129**| [✓]         |
| Bytemark (formerly BigV) / in York    | QEMU                       | 5.6 |    210 | [✓]         |
| Wable / Bundle #2 (OpenVZ)            | N/A                        | 5.6 |    203 | [✓]         |
| Scaleway / C1 :computer: :alarm_clock: | Marvell Armada 370/XP     | 5.6 |   1111 | [✓]         |
| [SWNet Group](http://www.swnetgroup.hu/vps-virtualis-szerver-berles/) | Intel E5-2630 v3 | 5.6 | 167 | [&ensp;] |
| [Rendszerinformatika](http://servira.com/) | Intel E5-2665         | 5.5 |    222 | [&ensp;]    |
| Amazon EC2 / c4.large :alarm_clock:   | Intel E5-2666 v3           | 5.6 | **113**| [✓]         |
| CenturyLink / Standard server :alarm_clock: | Intel E5-2680        | 5.6 | **151**| [✓]         |
| CenturyLink / [Hyperscale](https://www.ctl.io/hyperscale/#Comparison) :alarm_clock: | Intel E5-2697 v2 | 5.6 | **150**| [✓] |
| RamNode / Premium KVM SSD in NL       | Intel E3-1230 V2           | 5.6 |    185 | [&ensp;]    |
| webtropia by myLoc / vServer M 4.0    | Intel E5-2620 v2           | 5.6 |    234 | [&ensp;]    |
| [**Cloud.hu by EZIT**](https://client.ezit.hu/aff.php?aff=036) / Cloud Webtárhely Plus 2 †† | Intel E3-1240 V2 | 7.0 | **122**| [✓] |
| [**Cloud.hu by EZIT**](https://client.ezit.hu/aff.php?aff=036) / Cloud Webtárhely Plus 2 †† | Intel E3-1240 V2 | 5.6 | 169 | [✓] |
| Tárhely.eu / Alap DDR4                | Intel E5-1620 v3           | 5.6 |    175 | [&ensp;]    |
| ProfiTárhely / WORDPRESS †            | Intel E3-1230 V2           | 5.6 |    323 | [&ensp;]    |
| [Magyar Hosting](https://online.mhosting.hu/partner.php?p=182&d=https%3A%2F%2Fwww.tarhely.com%2Fevo-ssd-tarhely) / EVO 3 †† | Intel E5-1650 | 5.6 | 195 | [✓] |
| Host Europe / Virtual Server Advanced | Intel E5-2620 v2           | 5.6 |    256 | [&ensp;]    |
| Host Europe / Root Server M           | Intel E5-2620 v2           | 5.6 |    207 | [✓]         |
| [**Host Europe**](http://affiliate.hosteurope.de/click.php/vLlAdsfI9ES5g6E5EMn3FzBErqYhwVEHUHD0fyDY-KE,) / new Virtual Server Advanced | Intel E5-2640 v3 | 5.6 | **122**| [✓]         |
| Cloud.hu by EZIT / Pro Cloud Flotta :alarm_clock: | Intel X5650    | 5.6 |    204 | [✓]         |
| elastichosts / VM 2000 MHz :alarm_clock: | Intel E5-2680 v2        | 5.6 |    179 | [✓]         |
| [VEXXHOST](https://vexxhost.com/?r=79a170e703) / v1-standard-1 | Intel E5520 | 5.6 | 220 | [✓]  |
| **Springs.io** by elastichosts / Container 8000 MHz :alarm_clock: | Intel E5-2680 v2 | 5.6 | 161 | [&ensp;] |
| CityCloud / 1C-1GB in London :alarm_clock: | Intel E312xx Sandy Bridge | 5.6 | **152** | [&ensp;] |
| [LeaseWeb](https://www.leaseweb.com/cloud/public) / Virtual Server Type S | QEMU | 5.6 | **153** | [✓] |
| [Hostinger](http://api.hostinger.co.uk/redir/7159840) / OpenVZ Plan 1 | Intel E5-2620 v3 | 5.6 | 264 | [✓] |
| Netrouting / XEN256                   | Intel X5650                | 5.6 |    198 | [&ensp;]    |
| [Magyar Hosting](https://online.mhosting.hu/partner.php?p=182&d=https%3A%2F%2Fwww.cloudvps.hu%2Fssd-vps) / SSD VPS | Intel X5690 | 5.5 | 180 | [&ensp;] |
| [Packet](https://www.packet.net/bare-metal/servers/type-1/) / Type 1 in EWR1 :computer: :alarm_clock: | Intel E3-1240 v3 | 5.6 | **99** | [✓] |
| servetheworld / SSD 2 GB in Norway    | Intel E5                   | 5.6 |    225 | [&ensp;]    |
| Pantheon / (sandbox site) ††          | Intel E5-2670              | 5.6 |    430 | [&ensp;]    |
| Maxer / VPS 2GHz                      | N/A                        | 5.6 |    272 | [✓]         |
| Gandi.net / Simple Hosting ††         | Intel E5-2650L             | 5.4 |    600 | [&ensp;]    |
| iFastNet / Entry (OpenVZ)             | Intel i7-4771              | 5.6 |    160 | [&ensp;]    |
| CloudSigma / in ZRH :alarm_clock:     | Intel E5-2697 v3           | 5.6 |    238 | [&ensp;]    |
| Scaleway / VC1S :alarm_clock:         | Intel Atom C2750           | 5.6 |    500 | [✓]         |
| Scaleway / C2S :computer: :alarm_clock: | Intel Atom C2550         | 5.6 |    381 | [✓]         |
| Telekom Cloud / c2.medium             | Intel E5-2658A v3          | 5.6 |    415 | [✓]         |
| US Dedicated / KVM 1                  | QEMU                       | 5.6 |    497 | [&ensp;]    |
| GoDaddy / Cloud Server Tiny :alarm_clock: | Intel E312xx Sandy Bridge | 5.6 | 190 | [✓]         |
| Zetta.IO / m3.medium :alarm_clock:    | Intel E5-2695 v2           | 5.6 |    209 | [✓]         |
| Zetta.IO / t2.small :alarm_clock:     | Intel E5-2640 v3           | 5.6 |    190 | [&ensp;]    |
| Microsoft Azure / Standard DS1 :alarm_clock: | Intel E5-2660       | 5.6 |    220 | [&ensp;]    |
| [Microsoft Azure](https://azure.microsoft.com/en-us/pricing/calculator/) / Standard D1 v2 :alarm_clock: | Intel E5-2673 v3 | 5.6 | **143** | [✓] |
| [Packet](https://www.packet.net/bare-metal/servers/type-1/) / Type 1 in AMS1 :computer: :alarm_clock: | Intel E3-1240 v5 | 5.6 | **93** | [✓] |
| RackForest / Linux VPS Eight          | Intel E5-2630 v2           | 5.6 |    230 | [✓]         |
| [RackForest](http://rackforest.hu/ssd-tarhely/) / SSD Ten †† | Intel E3-1231 v3 | 5.6 | **105** | [✓] |
| Binary Lane / 1 CPU 512 MB :alarm_clock: | N/A                     | 5.6 |    190 | [&ensp;]    |
| Server4You / vServer SSD M8           | Intel E5520                | 5.6 |    209 | [✓]         |
| Byte.nl / trial ††                    | Intel E56xx                | 5.6 |    381 | [✓]         |
| A Small Orange / Level II Cloud VPS + Cloud VIP Boost | QEMU       | 5.6 |    203 | [✓]         |
| SzerverPlex / 4core 2GB               | Intel X5450                | 5.6 |    256 | [✓]         |
| KnownHost / SSD-1 managed             | Intel E5-2620 v3           | 5.6 |    167 | [✓]         |
| [**Storm on Demand**](http://www.stormondemand.com/?RID=szepeviktor) / Storm VPS 1GB :alarm_clock: | Intel E3-1271 v3 | 5.6 | **94** | [✓] |
| Szerverem.hu / XXXL                   | AMD Opteron 6136           | 5.6 |    297 | [✓]         |
| [ATW](https://atw.hu/vps) / OctopusVS | Intel E5-2670              | 5.6 |    190 | [&ensp;]    |
| PCextreme / Agile 512M :alarm_clock:  | Common KVM                 | 5.6 |    143 | [&ensp;]    |
| PCextreme / Stamina 4G :alarm_clock:  | Common KVM                 | 5.6 |    198 | [✓]         |
| Integrity / vCloud                    | Intel E7-4870              | 5.6 |    181 | [✓]         |
| [**Inulogic**](https://www.inulogic.fr/catalogue/produit/vps-perso) / VPS Perso | Intel E3-1240 v2 | 5.6 | **117** | [✓] |
| Virpus / Pure SSD VPS                 | Intel E5-2620              | 5.6 |    341 | [&ensp;]    |
| ProfitBricks / in Frankfurt :alarm_clock: | AMD Opteron 62xx       | 5.6 |    201 | [✓]         |
| HostUS / Unmanaged VPS                | Intel E5-1650 v3           | 5.6 | **128**| [✓]         |
| GloboTech / Popular 2                 | Intel E5-26xx              | 5.6 |    234 | [✓]         |
| Versanus / 4core 0.5GB                | AMD Opteron 6238           | 5.6 |    270 | [&ensp;]    |
| ATW / FlyHOST :computer:              | ARMv7 rev 3 (v7l)          | 5.6 |    406 | [✓]         |
| Webhuset / SSD VPS 2GB                | Intel E5-2665              | 5.6 |    207 | [✓]         |
| Webonic / V2                          | Intel E312xx Sandy Bridge  | 5.6 |    175 | [&ensp;]    |
| **Tiktalik** / CPU Hog :alarm_clock:  | Intel E3-1230 V2           | 5.6 | **136**| [✓]         |
| Tiktalik / PRO :alarm_clock:          | Intel E3-1230 V2           | 5.6 |    140 | [&ensp;]    |
| **NephoScale** / CS2.2-SSD :alarm_clock: | Intel E5-2690 v2        | 5.6 | **143**| [✓]         |
| Joyent / Infrastructure Container :alarm_clock: | Intel E5-2690 v3 | 5.6 |    167 | [✓]         |
| CityCloud / 2C-1GB in Frankfurt :alarm_clock: | Intel E5-26XX      | 5.6 | **128**| [✓]         |
| TerraHost / VS X-5 2016               | Intel E3-1240 v5           | 5.6 | **107**| [✓]         |
| BlazingFast / SSD Cloud Server 2GB    | Intel E3-1240 v3           | 5.6 |    140 | [&ensp;]    |
| Hawk Host / Basic VPS                 | Intel E5-2620              | 5.6 |    255 | [&ensp;]    |
| Bluehost / VPS standard ††            | Intel E5-2650 v3           | 5.6 |    201 | [&ensp;]    |
| VPSDime / VPS 6GB                     | Intel E5-2630              | 5.6 |    231 | [✓]         |
| SoftLayer by IBM / VPS 2 cores :alarm_clock: | Intel E5-2650 v2    | 5.6 |    175 | [✓]         |
| [DreamHost](https://www.dreamhost.com/r.cgi?2206776) / gp1.lightspeed :alarm_clock: | Intel E5-2620 v4 | 5.6 | **150** | [&ensp;] |
| SwiftwayCloud / 3.0 GB                | Intel E5-2620              | 5.6 |    231 | [✓]         |
| Host1Plus / 2C-2GB in Frankfurt       | Intel E5-2620 v3           | 5.6 |    151 | [&ensp;]    |
| [**iwStack**](https://www.prometeus.net/billing/aff.php?aff=513) by Prometeus / 2C-1GB in NL :alarm_clock: | Intel E3-1241 v3 | 5.6 | **109** | [✓] |
| netcup / RS 2000 G7                   | Intel E5-2680 v4           | 5.6 |    148 | [&ensp;]    |
| [Neohost.com.ua](http://neohost.com.ua/?from=14478) / KVM-SSD-2048 | Intel E3-1230 v2 | 5.6 | **115** | [✓] |
| SnackHost by VSHosting / 1C-1GB :alarm_clock: | AMD Opteron 63xx   | 5.6 |    261 | [✓]         |
| Rackhost / VPS 2048                   | Intel 5160                 | 5.6 |    230 | [✓]         |
| [Packet](https://www.packet.net/bare-metal/servers/type-2a/) / Type 2A in EWR1 :computer: :alarm_clock: | Cavium ThunderX CN8890 | 5.6 | 500 | [✓] |
| Innofield / Flow App Engine           | Intel E5-2695 v2           | 5.6 |    206 | [✓]         |
| [e24cloud.com](https://www.e24cloud.com) / 4C 8GB :alarm_clock: | Intel E5-2670 v2 | 5.6 | 183 | [✓] |
| Cloudwatt by Orange / n1.cw.highcpu-2 :alarm_clock: | Intel E312xx | 5.6 |    200 | [✓]         |
| Dediserve / 2C-2GB in Vienna          | QEMU                       | 5.6 |    203 | [✓]         |
| Dediserve / 2C-2GB in Frankfurt       | Intel E5-2660              | 5.6 |    219 | [✓]         |
| Lunacloud / 2C-2GB in Portugal :alarm_clock: | Intel E5-2640 v2    | 5.6 |    201 | [&ensp;]    |
| Togglebox / 2C-2GB on HV41.dal :alarm_clock: | Intel E5-2670 v3    | 5.6 | **142**| [✓]         |
| Auro / standard.4 :alarm_clock:       | Intel E5-2670              | 5.6 | **141**| [✓]         |
| Sweden Dedicated / SSD VPS 1024 MB    | Intel E5640                | 5.6 |    337 | [✓]         |
| Cloudwatt by Orange / n2.cw.standard-2 :alarm_clock: | Intel E312xx | 5.6 |**109**| [✓]         |
| Steadfast / 2C-1GB :alarm_clock:      | Intel E5-2650              | 5.6 |    224 | [&ensp;]    |
| Kamatera / 2C-1GB shared vCPU :alarm_clock: | Intel E5-2690 v4     | 5.6 | **140**| [&ensp;]    |
| Kamatera / 2C-1GB dedicated vCPU :alarm_clock: | Intel E5-2690 v4  | 5.6 | **133**| [✓]         |
| Comalis / PRO 24G dedicated :computer: | Intel Xeon                | 5.6 |    185 | [✓]         |
| Atlantic.Net / G2.2GB :alarm_clock:   | Intel E5-2620              | 5.6 |    250 | [✓]         |
| [Advania](https://advania.com/cloud/open-cloud/) / Small Platinum | QEMU | 5.6 | 141 | [&ensp;] |
| Scaleway / X64-30GB :alarm_clock:     | Intel D-1531               | 5.6 |    211 | [&ensp;]    |
| Scaleway / ARM64-8GB :alarm_clock:    | Cavium ThunderX            | 5.6 |    559 | [✓]         |
| **Description** | **[CPU](https://www.cpubenchmark.net/singleThread.html "PassMark")** | **PHP** | **msec** | **stable&#42;** |

<!-- https://clients.altushost.com/register.php https://my.vps2day.com/register.html
https://www.yourserver.se/portal/register.php https://www.alistaro.com/ssd-virtual-servers.html -->

<!-- wget -O- https://git.io/vor8W|bash -x  -->

`*` Stable means deviation is within ± 10%, the main cause is
[memory bandwidth](https://github.com/szepeviktor/debian-server-tools/blob/master/monitoring/memory-bandwidth/README.md).

`†` Shared hosting with SSH access.

`††` High-resource hosting with SSH access.

:computer: Dedicated server, not VPS.

:alarm_clock: Hourly (or daily) billing available.

`+` CPU `scaling_governor` was set to `performance`.

### Quick installation

```bash
# On a Debian based system
apt-get install -y wget ca-certificates php5-cli php5-sqlite

# Test sqlite extension
php -m | grep -Eqx "sqlite3|SQLite" || echo "Please enable sqlite extension." 1>&2

# Download and untar in one go
wget -qO- https://github.com/szepeviktor/wordpress-speedtest/releases/download/v0.1.2/wordpress-speedtest.tar.gz|tar xzv

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

# Live stability test on one core
while :; do { time taskset 0x00000001 php index.php > /dev/null; sleep 0.2; } 2>&1|grep "^real"; done

# Simple graph * with percentage of change
MSEC_PERC=1 MSEC_DELAY=0 MSEC_DOT=_ MSEC_DIVIDER=2 msec php index.php

# Nice graph of stability
apt-get install -y gnuplot5-nox feedgnuplot
while :; do { time php index.php > /dev/null; sleep 0.2; } 2>&1 \
 | sed -n 's/^real\s\+0m\([0-9.]\+\)s$/\1/p'; done \
 | feedgnuplot --terminal 'dumb 120,40' --stream --points --lines -xlen 30 --set "xtics 10"

# CPU model
dmidecode --type 4
cat /proc/cpuinfo
```

`*` Download `msec` from [szepeviktor/debian-server-tools](https://github.com/szepeviktor/debian-server-tools/blob/master/tools/msec)

Install PHP 5.6 on Ubuntu 14.04 Trusty `LC_ALL=en_US.UTF-8 add-apt-repository ppa:ondrej/php5-5.6`

cPanel server's PHP-CLI binary location `/opt/alt/php56/usr/bin/php`

Please [report your result](https://github.com/szepeviktor/wordpress-speedtest/issues/new)!

### Provider Top List

```bash
{
echo "| Description | CPU | PHP | msec | stable |"
wget -qO- https://github.com/szepeviktor/wordpress-speedtest/raw/master/README.md \
    | grep "^|" | sed -e "s|\*\*||g" | grep -v "^| Description |" \
    | sort -t "|" -k 5 -n
} > wordpress-speedtest-sorted-results.md
```

Then use a Markdown editor like [Caret](http://caret.io/) to display it. Also see [issue #6](https://github.com/szepeviktor/wordpress-speedtest/issues/6).

### How to choose VPS provider?

Operation

1. Data center location
1. Price
1. Has own AS? Number of peers
1. Response to abuse report, spammer neighbors
    - http://www.projecthoneypot.org/
    - `http://www.senderbase.org/lookup/org/?search_string=AS-description`
    - `https://cleantalk.org/blacklists/AS0000`
1. Stores plain text passwords?
1. Response time of nighttime technical support in case of network or hardware failure
1. Daytime technical and billing support

Infrastructure

1. Redundancy: power, cooling, network, storage, **hypervisor**
1. Network: worldwide and regional bandwidth, port speed, D/DoS mitigation, IPv6 http://bgp.he.net/
1. CPU speed: PassMark CPU Mark 2000+, sysbench < 20 ms, WordPress Speedtest < 150 ms
1. Memory bandwidth: flat graphs with [bandwidth64](http://zsmith.co/bandwidth.html)
1. Disk access time: < 1 ms
1. Scheduled backup
