---
title:     "Xfce 4.8pre1 released"
date:      2010-11-07
version:   "4.8pre1"
author:    "Release Manager"
timestamp: 1289088000
---

The Xfce development team is proud to announce the first preview release for Xfce 4.8. Together with this preview release, the Xfce project announces the feature freeze for the final 4.8 release which is set to be pushed out to the world on January 16th, 2011.

This release incorporates major changes to the core of the Xfce desktop environment and hopefully succeeds in fulfilling a number of long time requests. Among the most notable updates is that we have ported the entire Xfce core (Thunar, xfdesktop and thunar-volman in particular) from ThunarVFS to GIO, bringing remote filesystems to the Xfce desktop. The panel has been rewritten from scratch and provides better launcher management and improved multi-head support. The list of new panel features is too long to mention in its entirety here. Thanks to the new menu library garcon (formerly known as libxfce4menu, but rewritten once again) we now support menu editing via a third-party menu editor such as Alacarte (we do not ship our own yet). Our core libraries have been streamlined a bit, a good example being the newly introduced libxfce4ui library which is meant to replace libxfcegui4.

Perhaps the most important achievement we will accomplish with Xfce 4.8 is that, despite suffering from the small size of the development team from time to time, the core of the desktop environment has been aligned with today's desktop technologies such as GIO, ConsoleKit, PolicyKit, udev and many more. A lot of old cruft like has been stripped from the core as well, as has happened with HAL and ThunarVFS (which is still around for compatibility reasons).

Thanks to the awesome Transifex translation platform, our language teams have been able to update their translations at an incredible pace. Please include them when praising this release!
