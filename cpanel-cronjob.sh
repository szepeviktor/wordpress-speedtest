#!/bin/bash
#
# Print cron job for cPanel shared hosting.
#

DOC_ROOT="${HOME}/public_html"

echo "/bin/bash -c \"time for R in {1..10}; do /opt/alt/php56/usr/bin/php \
  ${DOC_ROOT}/wordpress-speedtest/index.php; done\" 2>> ${DOC_ROOT}/stderr.txt"

# Detect CPU
#     <pre style="white-space: pre-wrap;"><?php var_dump( file_get_contents( '/proc/cpuinfo' ) );
