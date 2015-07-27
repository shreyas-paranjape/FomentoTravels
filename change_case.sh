#!/bin/bash
for i in ./app/images/**/*.*;
do mv -- "$f" "$(tr [:lower:] [:upper:] <<< "$f")" ;
done;