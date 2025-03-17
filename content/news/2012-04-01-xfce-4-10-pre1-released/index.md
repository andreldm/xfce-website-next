---
title:     "Xfce 4.10pre1 released"
date:      2012-04-01
version:   "4.10pre1"
author:    "Release Manager"
timestamp: 1333238400
---

The Xfce development team is proud to announce the first preview release for Xfce 4.10. Together with this preview release, the Xfce project announces the feature freeze for the final 4.10 release which is set to be pushed out to the world on April 28th, 2012.

This release incorporates major changes to the core of the Xfce desktop environment and hopefully succeeds in fulfilling a number of long time requests. Among the most notable updates is the new application finder that merges the functionality of the old appfinder and xfrun4. The Panel also has a new vertical mode [aka Deskbar] for better space usage on wide-screen monitors and a new actions plugin. On the settings side the settings helper is integrated in xfsettingsd, saving 1 running process. There is also a reworked settings dialog with categories and pluggable dialogs enabled by default. Basic Synaptics and Wacom settings in the Mouse settings and a new MIME-Type editor. Thunar gained a more polished layout to reduce space usage and more responsive interaction with the thumbnail generator. Because we have not decided on how to merge the desktop functionality into Thunar yet, Xfdesktop has instead received various improvements, including single-click support, desktop icon thumbnails and better pasting of files. The Session Manager has improved power management code, tips have been removed and cleanup sessions from the interface. Last but not least, the Window Manager now has support for tiling windows and arrow key navigation in the task switcher.

Another big change for users is the removal of user documentation of the packages and introduction of <a href="https://docs.xfce.org">docs.xfce.org</a>. The reason for this change is the limited contribution of documentation since Xfce 4.8, so we hope the wiki will attract more contributors. The help buttons in the interface still work, but you\'ll be asked to open the documentation website in your web browser.

Furthermore we dropped xfce-utils. Its content has either been removed or moved to other Xfce packages. All other dependency changes are listed in the 4.10pre1 ChangeLog. The Xfce core also gained a couple of new components because we think they are critical for a minimal desktop: xfce4-power-manager (power management), tumbler (thumbnail generation for Thunar and other components), garcon (menu library, was already a dependency in 4.8), thunar-volman (volume manager for Thunar).

Of course translations also improved a lot, thanks to the amazing work of our translation teams.

We hope you will enjoy this release. Please give us feedback by sharing your thoughts, blogging, tweeting, denting or by filing bug reports. With your help, 4.10 will be the best release ever (at least until 4.12)!

Kind regards and thanks to everyone who has contributed to this release,<br />
The Xfce development team
