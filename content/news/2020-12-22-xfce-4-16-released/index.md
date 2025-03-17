---
title:     "Xfce 4.16 released"
date:      2020-12-22
version:   "4.16"
author:    "Release Manager"
timestamp: 1608595200
---

Today, after 1 year and 4 months of work, we are happy to announce the release of the Xfce desktop 4.16, a new stable version that supersedes Xfce 4.14.

4.16 was a special cycle in many respects (not only pandemic-wise, but also). One of the corner-stones of the non-code changes concerns our migration to GitLab, which is a change in development workflow and a huge step forward in terms of becoming more contributor-friendly and welcoming. In parts, the <a href="https://www.xfce.org/download/changelogs/4.16">humungous changelog of Xfce 4.16</a> can be attributed to new contributors proposing merge requests (288 merge requests were merged or closed against our core components alone!). We also created a reference Docker container (<a href="https://hub.docker.com/r/xfce/xfce-build">xfce/xfce-build</a>) and added CI pipelines to all components to ensure we don´t break the build. None of this would have been possible without our hosting being sponsored by <a href="https://gandi.net">Gandi</a> and <a href="https://fosshost.org">Fosshost</a>!

Another big change concerns our visual identity, which we updated from a strange mix of random (partly Tango-based) icons and not following any naming scheme to a new, visually consistent set (following the freedesktop.org naming specification and a fixed color palette). We're aware this will generate some work for icon theme maintainers (if they really want to override our gorgeous icons ;)) but we believe the longterm benefit outweighs this one-time effort.

{{< figure src="upstream-icons.png" caption="Upstream icons" >}}

And then finally we did some housekeeping (e.g. by dropping Gtk2 support code) and we also added features and improvements - all while sticking to a reasonable release cycle timeframe.

So without further ado, here go the <strong>main highlights of this release</strong>:

* The <a href="https://docs.xfce.org/xfce/xfwm4/start">window manager</a> received lots of updates and improvements again in the area of compositing and GLX. If a primary display was set, the alt-tab dialog will now only be shown there. Furthermore some handy new options to zoom the cursor along with rest of the display as well as an option to keep minimized windows in the most recently used list complement this release.
* We added a new plugin to the <a href="https://docs.xfce.org/xfce/xfce4-panel/start">panel</a> dubbed "statustray" which combines both StatusNotifier and legacy Systray items. An animated autohide transition now clearly shows the user "where the panel has gone" and a dark mode (enabled by default) makes the panel drop into the background a bit more with bright themes like the Gtk default Adwaita. Quite a few more smaller improvements were also introduced like accessing desktop actions from a Launcher´s right-click menu, the Window Buttons plugin now offering to `Launch a new instance` of an application and the Workspace Switcher now optionally showing automatic numbering for workspaces.
* Support for fractional scaling was added to the <a href="https://docs.xfce.org/xfce/xfce4-settings/display">display dialog</a>, along with highlighting the preferred mode of a display with an asterisk and adding aspect ratios next to resolutions. Falling back to a working mode after misconfiguring the display layout has also been made more robust.
* A new tab in the "About Xfce" dialog shows basic system information like CPU or GPU type. Furthermore the layout and visuals of the dialog were improved.
* The <a href="https://docs.xfce.org/xfce/xfce4-settings/start">settings manager</a> has improved search and filter capabilities. Furthermore all settings dialogs now use window decorations drawn by Gtk (client side decorations).
* The "Mime Settings" and "Preferred Applications" dialogs were merged into the "Default Applications" dialog - making it easier for users to set which application handles which filetype or action from one place.
* Our file manager <a href="https://docs.xfce.org/xfce/thunar/start">Thunar</a> received a boatload of fixes and quite a few notable features, including pause for copy/move operations, support for queued file transfer, remembering view settings per directory and support for transparency in Gtk themes.
* Our <a href="https://docs.xfce.org/xfce/thunar/tumbler">thumbnailing service tumbler</a> became more flexible by being able to exclude paths. Furthermore support for .epub (e-book format) was added.
* The <a href="https://docs.xfce.org/xfce/xfce4-session/start">session manager</a> offers improved support for GPG agent 2.1 and the setting dialog was visually improved.
* The <a href="https://docs.xfce.org/xfce/xfce4-power-manager/start">power manager</a> received a lot of bugfixes and some smaller features - among them a cleanup of its settings dialog, an optional visual indicator for when `Presentation Mode` is enabled, more accurate battery status icons and automatically dismissing low-power notifications upon the connection of a charger.
* The <a href="https://docs.xfce.org/xfce/xfdesktop/start">desktop</a> mostly received bugfixes and small improvements - and the new default wallpaper!
* Our menu library <a href="https://docs.xfce.org/xfce/garcon/start">garcon</a> received new APIs and now doesn´t launch applications as children of the process hosting the menu anymore. The previous behavior led to applications crashing along with e.g. the panel.
* The <a href="https://docs.xfce.org/xfce/xfce4-appfinder/start">applicaton finder</a> now allows for sorting applications by "frecency" - a combination of frequency and recency.
* Dependency updates: Drop Gtk2, add LibGTop, bump Gtk >= 3.22, GLib and GDBus >= 2.50

An online tour of the changes in Xfce 4.16 can be viewed here:

<a href="https://www.xfce.org/about/tour416">https://www.xfce.org/about/tour416</a>

A detailed overview of the changes between Xfce 4.14 and Xfce 4.16 releases can be found on the following page:

<a href="https://www.xfce.org/download/changelogs/4.16">https://www.xfce.org/download/changelogs</a>

This release can be downloaded either as a set of individual packages or as a single fat tarball including all these individual versions:

<a href="https://archive.xfce.org/xfce/4.16">https://archive.xfce.org/xfce/4.16</a>

Best regards,<br />
The Xfce development team
