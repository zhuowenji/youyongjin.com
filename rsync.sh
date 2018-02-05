#!/bin/bash
root=$(cd "$(dirname "$0")"; pwd)
rsync -avz -e ssh $root zhuo:/project --exclude .DS_Store --exclude vendor/ --exclude .git  --exclude storage --exclude .env --delete
