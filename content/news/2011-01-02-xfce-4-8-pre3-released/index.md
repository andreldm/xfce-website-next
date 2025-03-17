---
title:     "Xfce 4.8pre3 released"
date:      2011-01-02
version:   "4.8pre3"
author:    "Release Manager"
timestamp: 1293926400
---

Today we are pleased to announce the third and hopefully final preview release of Xfce 4.8 which is set to be pushed out to the public on January 16th, 2011. Compared to Xfce 4.8pre2 this release mostly features translation updates and bug fixes.

With christmas and new year's eve between 4.8pre2 and 4.8pre3 it comes as no surprise that for most components only a few issues were tackled.

Among other things we updated the default keyboard shortcuts to include monitor keys. The status icon of the file manager's progress dialog is now properly hidden when the dialog is destroyed. Its wallpaper plugin is now capable of handling filenames with spaces. The environment variables of commands launched from the Xfce run dialog were not set properly, so we fixed that so that commands launched from the dialog always inherit the environment of the Xfce session.

We also made the --reboot and --halt parameters of xfce4-session-logout work again which previously simply logged out the active user. In order to avoid a race condition at session startup and in order to speed things up a little more we no longer use xrdb to update xft and cursor settings and instead, update the related XSETTINGS properties ourselves.

In the window manager xfwm4, we aligned the time period required for a double click with that of normal applications. Via the hidden option /general/mousewheel_rollup one can now disable windows being rolled up via the mouse wheel. The window manager now also properly handles resolution changes in fullscreen windows like those appearing in games. Xfwm4's application switcher now only appears once in cloned mode.

This may sound like a few useful fixes but it\'s nothing compared to the amount of work that went into the new Xfce panel once again. Around 20+ known bugs and regressions were fixed. Here is a short excerpt of the complete changelog: Translation domains were fixed for external plugins, plugins can be reordered with DND again, double-clicking items in the item editor shows their preferences, dragging items to the item editor dialog removes them from the panel again, tasklist windows can now be filtered by monitor. Another issue that appeared recently and has now been fixed is the icon sizing in the notification area, also known as the systray.

Xfce 4.8pre3 also features a lot of translation updates, as can be seen in the complete changelog.

Since we're following the Xfce <a href="/about/releasemodel">release model</a> for 4.8, we'd normally announce code freeze and the creation of early lifecycle support branches today. We decided against this because there are not enough people active to take care of all this at the moment. So we will continue fixing bugs in master branches as we did between 4.8pre2 and 4.8pre3.
