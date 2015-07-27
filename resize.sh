#!/bin/bash
for i in ./app/images/*/*/*.*; 
do convert $i -resize 600x300\! $i; 
done