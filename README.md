# Under Development! Please wait for initial release!
### This version of Pi Fusion is not really working and not released yet.
### This site is still a construction site. Work in progress...
-------------------------------------------------------------
# Pi Fusion

## Requirements:
- Hardware: Raspberry Pi
- Operating system: Raspbian GNU / Linux
- Webserver: nginx (recommended)
- Script language: PHP 5.6+ / PHP 7.0+ (recommended)
- SSH server on the Raspberry Pi enabled
- Active internet connection
- JavaScript enabled in the browser

## Installation:
### Automatic Installation (recommended)
You can install Pi Fusion automatically with an installation script on your Raspberry Pi. You must create an SSH connection and log in as a user pi. An active Internet connection must also be available. Then type the following command on the console:
```
curl -sSL https://raw.githubusercontent.com/ElectroDrome/raspberry-pi-fusion/master/install.sh | sudo bash
```
### Manual Installation
A guide on how to install Pi Fusion manually on the Raspberry Pi can be found [here](https://electrodrome.net/forum/rpi-pi-fusion-general-installation/242-manuelle-installation-von-pi-fusion).

## Start Pi Fusion Dashboard:
### Locally on the Raspberry Pi
Start a web browser and enter the following URL:
```
http://localhost/fusion/index.php
```
### In the network
If you do not know the IP address of the Raspberry Pi, you can determine it as follows (optional):
```
hostname -I
```
The output appears, for example: **192.168.178.24** 2002:25c9:924a:0:e99b:5ec7:c248:8798
The first part shows the IP which is needed to start Pi Fusion in the network, the second part representing the IPv6 address.
Start a web browser and enter the following URL with your IP:
``` 
http://192.168.178.24/fusion/index.php
```

## Update:
### Automatic Update (recommended)
Go in Pi Fusion to the settings. Here is automatically checked if a new version is present. If a new version is available you can click **Install update**.
### Manual Update
To update Pi Fusion to the current version manually, go to the Pi Fusion directory:
```
cd /var/www/html/fusion
```
And then start the update with:
```
sudo -u www-data git pull
```

## License:
Pi Fusion is an Open-Source-Project by Andreas Potthoff and contributors, that is licensed under [GNU GPL v2.0](https://www.gnu.org/licenses/gpl-2.0.en.html).

## Credits & 3rd Party Licenses:
A list of the third party components and licenses used by Pi Fusion found [here](https://github.com/ElectroDrome/raspberry-pi-fusion/blob/master/3RD-PARTY-LICENSES.md).
