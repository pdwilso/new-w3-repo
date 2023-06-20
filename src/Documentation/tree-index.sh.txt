#!/bin/bash
##
## File: tree-index.sh
## Desc: Use tree(1) to make an index file for a directory
## Date: 2023-06-16
## Auth: sumkittehz.codes
##
# 1. Get the name of the directory to make the index file for.
# 
tree -hH .  --timefmt='%X %T'-DFRx -I '*~' -o index.html -T 'Clocks/'
