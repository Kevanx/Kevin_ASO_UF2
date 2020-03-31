#!/bin/bash
rm group.txt
echo  "Llistat de grups"
sudo samba-tool group list > group.txt