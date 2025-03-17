---
title:     "Xfce 4.12 released"
date:      2015-02-28
version:   "4.12"
author:    "Release Manager"
timestamp: 1425081600
---

Xfce 4.12 is be the best release ever (yes, we like to party!)!<br />
Source: Internet comments.

Today, after 2 years and 10 months of work, we are pleased to announce the release of the Xfce desktop 4.12, a new stable version that supersedes Xfce 4.10.

This long period can only be explained by how awesome Xfce 4.10 was. But as all things, it needed some refreshing -  and for that we saw lots of new contributors providing valuable feedback, features and bugfixes. As always, Xfce follows its steady pace of evolution without revolution that seems to match our users' needs.

In this 4.12 cycle, we mainly focused on polishing our user experience on the desktop and window manager, and on updating some components to take advantage of newly available technologies.

The main highlights of this release are:

* The window manager gained a new themable Alt+Tab dialog with optional windows preview and a list mode. Initial Client side decoration support was implemented, window tiling mode was improved providing support for corner-tiling, and a new zooming mode was added. A HiDPI Xfwm theme was also added.
* The panel can now intelligently hide itself, supports Gtk3 plugins, and saw lots of its third-party plugins updated to take full advantage of the features added in 4.10.
* The desktop has a new wallpaper settings dialog, per workspace wallpaper support, and better multi-monitor handling. It also supports displaying folder cover art and emblems on icons now.
* Our session manager was updated to use logind and/or upower if available for hibernate/suspend support. For portability and to respect our users' choices, fallback modes were implemented relying on os-specific backends.
* Support for multi-monitor use was improved in a new display settings dialog and a quick setup popup on monitor plugging.
* The appearance dialog now showcases previews for icons and themes.
* Xfsettingsd now supports libinput.
* Power management was not forgotten: A new panel plugin was created, logind/upower support was added to handle battery/lid/brightness events, and locking via light-locker was implemented. The settings dialog was also revamped, and support for X11 screenblanking was added.
* Our file manager, the beloved Thunar, saw an insane amount of improvements: tab support, tons of bug fixes, speed-ups, key shortcuts for custom actions, better naming of file copies and links, nice freespace bar in properties, tweaks for the renamer and other dialogs, improved keyboard navigation, fixes for the treeview pane, better wallpaper support, Gtk3 bookmarks support, multiple file properties... need we say more?
* To prepare the future of Xfce with Gtk3, which no longer requires theme engines, we are stopping the development of our Gtk theme engine, and dropping our Gtk3 engine - theme makers, please update your themes  to CSS if you want them to work on the next Xfce version.
* Due to gstreamer1.0 having dropped the mixer-interface entirely, and xfce4-mixer and xfce4-volumed relying on this interface with gstreamer0.10, our mixer application and volume daemon cannot be ported to 1.0 and are consequently not maintained anymore.

Xfce wouldn't be what it is right now without all its goodies. In this area, we also saw a flurry of activity, most notably:

* Xfburn gained BluRay Disc burning support.
* Task manager UI was totally revamped, and got ported to Gtk3.
* Parole's UI was totally redone, parts of it rewritten with many features added. Furthermore it was ported to Gtk3 and gstreamer1.0.
* Mousepad was totally rewritten and got an initial port to Gtk3.
* Imgur.com support was added to the screenshooter.
* A new GNOME-Shell-like dashboard named xfdashboard is now available.
* A new alternative menu for the panel named whiskermenu was added.
* The GNOME2 hardware monitor plugin was ported to our panel.
* Weather plugin got a totally new user interface with powerful customization options and provides tons of detailed information.
* Eyes plugin uses 3D coordinates to calculate its eye position, so even more sometimes scary, sometimes funny eyes will spy on you!
* Netload plugin works with the new udev net interface names and can be configured to show transfer rates in the panel.
* Clipboard manager plugin optionally displays a QR code.
* Cpufreq plugin now supports the intel pstate driver and can adapt better for different panel sizes and information displayed.
* Nearly all plugins have been improved to give the same look and feel and to support the new deskbar panel mode.

An online tour of the changes in Xfce 4.12 can be viewed here:

<a href="https://xfce.org/about/tour">https://xfce.org/about/tour</a>

A detailed overview of the changes between Xfce 4.10 and Xfce 4.12 releases can be found on the following page:

<a href="https://xfce.org/download/changelogs">https://xfce.org/download/changelogs</a>

This release can be downloaded either as a set of individual packages or as a single fat tarball including all these individual versions:

<a href="http://archive.xfce.org/xfce/4.12">http://archive.xfce.org/xfce/4.12</a>

A warm thank you all the contributors, translators and packagers for your efforts in making this release possible. We would also like to thank our fantastic users and occasional contributors who submitted bug reports, helped us find issues and sometimes provided patches. We are currently reviewing all patches sent to us and will include many more fixes to Xfce in the next release. We would also like to thank the many people who donated money to our project via Bounty Source. This will help us meet and hack on Xfce in the future!

As always, we welcome everyone who would like to contribute to the development of Xfce! You can either <a href="https://docs.xfce.org/xfce/building">test Xfce</a> and <a href="https://bugzilla.xfce.org">report bugs</a>, you can help us with <a href="https://www.transifex.com/tag/xfce/">translations</a> and <a href="https://docs.xfce.org">documentation</a>, with <a href="https://wiki.xfce.org/design/start">usability and user experience</a> by packaging Xfce into your distribution, and by <a href="https://wiki.xfce.org/dev/howto/contribute">submitting patches</a> or entirely new features! You can get in touch with us on the Freenode IRC channel #xfce-dev and our <a href="https://mail.xfce.org/mailman/listinfo/xfce4-dev">mailing list</a>.

Best regards,<br />
The Xfce development team
