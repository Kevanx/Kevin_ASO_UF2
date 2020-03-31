#!/bin/bash
echo "Processant l'eliminació del grup, esperi. "$1
sudo samba-tool group delete $1
sleep 2
echo "El grup "$1" ha sigut eliminat"