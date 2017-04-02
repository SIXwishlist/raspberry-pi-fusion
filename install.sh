################################################################################
# This script is used to install Pi Fusion on a Raspbian system through
# the curl command. The usage of this script is:
# curl -sSL https://electrodrome.net/install.sh | sudo bash
# It will download and install Pi Fusion automatically.
# This script is based on:
# Pi Control Installer by Willy Fritzsche released under the GNU GPL v2 license.
################################################################################

#!/bin/bash

# clear screen
clear

# shell colors
red='\e[1;31m%s\e[0m\n'
green='\e[1;32m%s\e[0m\n'
yellow='\e[1;33m%s\e[0m\n'
blue='\e[1;34m%s\e[0m\n'
magenta='\e[1;35m%s\e[0m\n'
cyan='\e[1;36m%s\e[0m\n'

distribution=""
distributionCode=""

webserver=""
webroot=""
customWebpath=""

phpVersion=""

hostname=$(cat /proc/sys/kernel/hostname)
ipaddress=$(ip route get 8.8.8.8 | awk '{print $NF; exit}')

# some functions
function getDistribution () {
	distro="$(lsb_release -si 2>/dev/null)"
	
	if [ "$distro" == "" ]
	then
		distro="$(cat /etc/*-release | grep -E ^ID= | cut -d= -f2)"
	fi
	
	if echo "$distro" | grep -Eiq raspbian
	then
		distribution="Raspbian"
		return
	fi
	
	distribution="$distro"
}

function getDistributionCode () {
	distrocode="$(lsb_release -sr 2>/dev/null)"
	
	if [ "$distrocode" == "" ]
	then
		distrocode="$(cat /etc/*-release | grep -E ^VERSION_ID= | grep -Eo [[:digit:]])"
	fi
	
	if echo "$distrocode" | grep -Eq 7
	then
		distributionCode="7"
		return
	fi
	
	if echo "$distrocode" | grep -Eq 8
	then
		distributionCode="8"
		return
	fi
	
	distributionCode="$distrocode"
}

function checkDistribution () {
	if [ "$distribution" != "Raspbian" ]
	then
		distributionCheck="0"
		return
	fi
	
	if [[ "$distributionCode" != "7" && "$distributionCode" != "8" ]]
	then
		distributionCheck="0"
		return
	fi
	
	distributionCheck="1"
}

function getWebserver () {
	response="$(curl -I -s --max-time 20 127.0.0.1 | grep Server)"
	
	if [ "$response" == "" ]
	then
		webserver="nothing"
		return
	fi
	
	if echo "$response" | grep -Eiq apache
	then
		webserver="Apache2"
		webroot="/var/www/html/"
		return
	fi
	
	if echo "$response" | grep -Eiq nginx
	then
		webserver="Nginx"
		webroot="/var/www/html/"
		return
	fi
	
	if echo "$response" | grep -Eiq lighttpd
	then
		webserver="Lighttpd"
		webroot="/var/www/html/"
		return
	fi
	
	if [ "$response" != "" ]
	then
		webserver="unknown"
		return
	fi
}

function checkForNginx () {
	if [ "$(command -v nginx)" == "" ]
	then
		checkForNginx="0"
		return
	else
		checkForNginx="1"
		return
	fi
}



######################################################################################

# print intro
printf "$blue" "+-------------------------------------------------------------------+"
printf "$blue" "########  ####    ######## ##     ##  ######  ####  #######  ##    ##"
printf "$blue" "##     ##  ##     ##       ##     ## ##    ##  ##  ##     ## ###   ##"
printf "$blue" "##     ##  ##     ##       ##     ## ##        ##  ##     ## ####  ##"
printf "$blue" "########   ##     ######   ##     ##  ######   ##  ##     ## ## ## ##"
printf "$blue" "##         ##     ##       ##     ##       ##  ##  ##     ## ##  ####"
printf "$blue" "##         ##     ##       ##     ## ##    ##  ##  ##     ## ##   ###"
printf "$blue" "##        ####    ##        #######   ######  ####  #######  ##    ##"
printf "$blue" "+-------------------------------------------------------------------+"
printf "                         Installer v0.1 Beta\n\n"
printf "  This script installs Pi Fusion automatically on a Raspbian system.\n"
printf "    Be sure that all requirements are given. Further information:\n"
printf "        https://github.com/ElectroDrome/raspberry-pi-fusion\n"
printf "+-------------------------------------------------------------------+\n"

# ask user for installation
while true; do
    read -p "Do you wish to install Pi Fusion now? (y/n)" yn </dev/tty
    case $yn in
        [Yy]* ) break;;
        [Nn]* ) exit;;
        * ) echo "Please answer with yes or no.";;
    esac
done

# check root privileges
printf "$yellow" "***** Checking root privileges"
sleep 2

if [ "$(whoami)" == "root" ]
then
	printf "$green" "***** Found root privileges"
else
	printf "$red" "***** Error! You do not have enough privileges to continue the installation"
	printf "$cyan" "***** Please repeat the installation process with root privileges!"
	exit 1;
fi

# check distribution
printf "$yellow" "***** Checking Raspbian distribution"
sleep 2

getDistribution
getDistributionCode
checkDistribution

if  [ "$distributionCheck" == "1" ]
then
	printf "$green" "***** Found compatible distribution: $distribution $distributionCode"
else
	printf "$red" "***** Error! $distribution $distributionCode is not compatible with Pi Fusion"
	exit 1;
fi

# system upgrade
printf "$yellow" "***** System update/upgrade"
sleep 2

apt-get update -qy
apt-get upgrade -qy
printf "$green" "***** The system has been successfully updated"

# check git
printf "$yellow" "***** Checking git package"
sleep 2

if [ "$(command -v git)" != "" ]
then
	printf "$green" "***** The git package is installed"
else
	printf "$red" "***** The git package is not installed"
	printf "$cyan" "***** The git package will be installed"
	sleep 2
	apt-get install -qy git
	printf "$green" "***** The git package has been successfully installed"
fi

# check shellinabox
printf "$yellow" "***** Checking shellinabox package"
sleep 2

if [ "$(command -v shellinaboxd)" != "" ]
then
	printf "$green" "***** The shellinabox package is installed"
else
	printf "$red" "***** The shellinabox package is not installed"
	printf "$cyan" "***** The shellinabox package will be installed"
	sleep 2
	apt-get install -qy shellinabox
	printf "$green" "***** The shellinabox package has been successfully installed"
fi

# check webserver
printf "$yellow" "***** Checking webserver"
sleep 2

getWebserver

if [[ "$webserver" == "Apache2" || "$webserver" == "Nginx" || "$webserver" == "Lighttpd" ]]
then
	printf "$green" "***** Found Webserver: $webserver"
elif [[ "$webserver" == "nothing" ]]
then
	if ( "checkForNginx" == "0" )
	then
		printf "$red" "***** The webserver is not installed"
	    printf "$cyan" "***** The webserver nginx will be installed"
		sleep 2
		apt-get install -qy nginx-full
		printf "$green" "***** The webserver nginx has been successfully installed"
	else
		webserver="Nginx"
		printf "$green" "***** Found Webserver: $webserver"
	fi
elif [[ "$webserver" == "unknown" ]]
then
	printf "$red" "Webserver not recognized! Manual input is required."
	printf "%s" "Please enter the absolute path to the web directory: "
	read webroot </dev/tty
	printf "\n"
fi

# check webroot
printf "$yellow" "***** Checking webroot"
sleep 2

checkWebroot













