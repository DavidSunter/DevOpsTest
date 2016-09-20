#!/bin/bash

cd /root/www
git pull >> ../logs/deploy.log 2>&1
