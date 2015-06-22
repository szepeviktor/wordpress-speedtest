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

| Description       | PHP | msec   | stable |
| ----------------- | --- | ------:| ------ |
| AMD FX-6300       | 5.4 |    219 | [x]    |
| AMD Opteron 4386  | 5.5 |    210 | [x]    |
| Intel E5-2687W v3 | 5.6 |    151 | [x]    |
| ???               | 7.0 |    151 | [ ]    |
| Intel L5640       | 5.6 |    210 | [ ]    |


1. AMD FX-6300: Virtualbox on Windows 7 Pro
2. AMD Opteron 4386: OVH Web / Cloud VPS
3. Intel E5-2687W v3: OVH Dedicated Cloud / CPU instance
4. ???: Vultr Compute Instances
5. Intel L5640: Aruba Cloud / Smart instance
