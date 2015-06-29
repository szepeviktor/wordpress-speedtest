# WordPress speedtest

One time run:

`time php index.php | grep -q 'Hello world.</a></h2>' || echo "WordPress error." >&2`

Ten runs:

`time for R in {1..10}; do php index.php > /dev/null; done`

Live stability test:

`while :; do { time php index.php > /dev/null; sleep 0.2; } 2>&1|grep "^real"; done`

Nice graph of stability:

```bash
apt-get install -y gnuplot5-nox feedgnuplot
while :; do { time php index.php > /dev/null; sleep 0.2; } 2>&1 \
 | sed -n 's/^real\s\+0m\([0-9.]\+\)s$/\1/p'; done \
 | feedgnuplot --terminal 'dumb 120,40' --stream --points --lines -xlen 30 --set "xtics 10"
```

Please [report your result](https://github.com/szepeviktor/wordpress-speedtest/issues/new)!

### Results

| Description                           | CPU               | PHP | msec   | stable |
| ------------------------------------- | ------------------| --- | ------:| ------ |
| Virtualbox on Windows 7 Pro           | AMD FX-6300       | 5.4 |    219 | [x]    |
| OVH Web / Cloud VPS                   | AMD Opteron 4386  | 5.5 |    210 | [x]    |
| OVH Public Cloud / CPU instance       | Intel E5-2687W v3 | 5.6 |    151 | [x]    |
| Vultr Compute Instances               | N/A               | 7.0 |    151 | [ ]    |
| Aruba Cloud / Smart instance          | Intel L5640       | 5.6 |    210 | [ ]    |


### Dependencies

```bash
# On a Debian based system
apt-get install -y php5-cli php5-sqlite

# Untar in one go
wget -qO- https://github.com/szepeviktor/wordpress-speedtest/releases/download/v0.1.0/wordpress-speedtest.tar.gz|tar xzv

# Start a test
cd wordpress-speedtest/ && time php index.php > /dev/null
```
