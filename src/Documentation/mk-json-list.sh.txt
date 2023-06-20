#!/bin/bash

for n in `ls -F`; do
    $fn = eval `echo $n | grep \/$ | tr -d \/` ;
    echo \"$fn\" ; 
done


