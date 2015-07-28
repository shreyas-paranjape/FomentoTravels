#!/bin/bash
for i in ./app/images/*/*/*/*.*; 
do convert  -strip -interlace Plane -quality 40 $i $i; 
done
