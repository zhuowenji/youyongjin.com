#!/bin/bash
root=$(cd "$(dirname "$0")"; pwd)
rsync -avz -e ssh $root aws:/home/project --exclude .DS_Store --exclude vendor/ --exclude .git  --exclude storage --exclude .env --delete
