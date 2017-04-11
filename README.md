# Under Development! Please wait for initial release!
### This version of Pi Fusion is not really working and not released yet.
### This site is still a construction site. Work in progress...
-------------------------------------------------------------
# Pi Fusion
![dashboard_overview](https://electrodrome.net/images/phocagallery/computer_prog/hardware/einplatinencomputer/raspberry_pi/projekte/pi_fusion/dashboard_overview.png)

## Status:
Pi Fusion is still in the development stage and some things are still not working or flawed. Some things are dotted with the hot needle or quik and dirty programmed. Pi Fusion is constantly being expanded and improved - help us, if you want. Nevertheless you can already use the great software.

## Features:
....
### Screenshots
A lot of screenshots can be found [here](https://electrodrome.net/service/galerie/category/69-pi-fusion-dashboard).

## Requirements:
- Hardware: Raspberry Pi
- Operating system: Raspbian GNU Linux
- Webserver: nginx (recommended) / lighttpd / Apache2
- Script language: PHP 7.0+ (recommended) / PHP 5.6+ 
- SSH server enabled on the Raspberry Pi
- Active internet connection
- JavaScript enabled in the browser

## Installation:
#### Important Note
Pi Fusion will installed into the path /var/www/html/fusion. You can not change the directory, it is hard-coded at time.
### Automatic Installation (recommended)
You can install Pi Fusion automatically with an installation script on your Raspberry Pi. You must create an SSH connection and log in as a user pi. An active Internet connection must also be available. Then type the following command on the console:
```
curl -sSL https://raw.githubusercontent.com/ElectroDrome/raspberry-pi-fusion/master/install.sh | sudo bash
```
Now the installation script is started and Pi Fusion is installed for you. Follow the instructions in the installation process.
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

## Support:
**Support requests by private message will not be answered! Use the public options as listed below.**
### @ ElectroDrome.Net
#### Forum
English language is supported in this forum. Otherwise you can translate the whole website with a quick tool, if German language is used. Join the forum to stay up-to-date and be informed about Pi Fusion.

Create an user account @ https://electrodrome.net to use the service.

The forum of Pi Fusion can be found [here](https://electrodrome.net/forum/rpi-projekt-pi-fusion).
### @ Github
#### Issue
Create an issue for todos, bugs, feature requests and more.

## License:
Pi Fusion is an Open-Source-Project by Andreas Potthoff and contributors, that is licensed under [GNU GPL v2.0](https://www.gnu.org/licenses/gpl-2.0.en.html).

The documentation of Pi Fusion is licensed under the terms of the [Creative Commons Attribution-ShareAlike 3.0 International license](https://creativecommons.org/licenses/by-sa/3.0/).

## Credits & 3rd Party Licenses:
A list of the third party components and licenses used by Pi Fusion can be found [here](https://github.com/ElectroDrome/raspberry-pi-fusion/blob/master/3RD-PARTY-LICENSES.md).

All third party licenses can be found in the included folder _licenses_.

## How to contribute?
### You are welcome, if you want to contribute to the Pi Fusion project!
An instruction how to open an issue or a pull request can be found [here](https://github.com/ElectroDrome/raspberry-pi-fusion/blob/master/CONTRIBUTING.md).

If you make an pull request you must sign/agree to the [Contributor License Agreement](https://github.com/ElectroDrome/raspberry-pi-fusion/blob/master/CONTRIBUTOR-LICENSE-AGREEMENT.md).

## Contributors:
A list of the contributors of Pi Fusion can be found [here](https://github.com/ElectroDrome/raspberry-pi-fusion/blob/master/CONTRIBUTORS.md).

## To-do-list:
The To-Do-list of Pi Fusion can be found [here](https://github.com/ElectroDrome/raspberry-pi-fusion/blob/master/TO-DO-LIST.md).

## Change log:
The change log list of Pi Fusion can be found [here](https://github.com/ElectroDrome/raspberry-pi-fusion/blob/master/CHANGELOG.md).

