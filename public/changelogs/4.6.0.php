<?php $head['title'] = 'Xfce 4.6.0 Changelog'; ?>

<h1>Xfce 4.6.0 Changelog</h1>

<h2>Utility Library <em>(libxfce4util)</em></h2>
<ul>
  <li>Updated translations: Finnish, Brazilian Portuguese, Catalan, French, Ukrainian, Polish, Indonesian, English (GB), Norwegian, Simplified Chinese and Turkish.</li>
  <li>Add missing C++ wrappers in header files (patch by Jens Luedicke). </li>
</ul>

<h2>Widget Library <em>(libxfcegui4)</em></h2>
<ul>
  <li>Fix translations of libxfce4kbd-private not being used (bug #4784).</li>
  <li>Fix library ageing (bug #4864).</li>
  <li>Add default "xrandr --auto" for XF86Display so that monitor switching works with recent Xorg.</li>
  <li>Fix transient mode of XfceShortcutDialog.</li>
  <li>Add separate library version for libxfce4kbd-private.</li>
  <li>Add missing C++ wrappers in header files (bug #4941).</li>
  <li>Updated translations: Finnish, Catalan, French, Ukrainian, Turkish, English (GB), Spanish, German, Indonesian, Japanese, Norwegian Bokmal, Polish, Simplified Chinese, Hungarian.</li>
</ul>

<h2>Extension Library <em>(exo)</em></h2>
<ul>
  <li>Updated translations: French, Turkish, English (GB), Polish, Romanian, Greek and Spanish.</li>
</ul>

<h2>Menu Library <em>(libxfce4menu)</em></h2>
<ul>
  <li>Add hint about no invariant sections to COPYING.</li>
  <li>Fix crash when reading invalid menu files (bug #4879).</li>
  <li>Monitor the directories of .menu files and all directory dirs. Otherwise the menu is not regenerated when they are altered.</li>
  <li>Fix a massive memory leak. (bug #3812).</li>
  <li>Updated translations: German, Indonesian, Polish, English (GB), Turkish, Ukrainian, Finnish.</li>
</ul>

<h2>Window Manager <em>(xfwm4)</em></h2>
<ul>
  <li>Fix possible monitor cache size inconsistency when the screen size changes.</li>
  <li>Fix fill function not working with multiscreen.</li>
  <li>Fix size not properly computed by the fill function with a dock on top or left (bug #4960).</li>
  <li>Only display the shortcut conflict dialog if the conflict is with a different shortcut than the one being edited.</li>
  <li>When stealing a shortcut from another shortcuts provider, clear the shortcut of that provider first.</li>
  <li>Fix focus stealing prevention with applications which support the NET_WM_USER_TIME_WINDOW protocol.</li>
  <li>Do not automatically give focus to windows placed on lower layers, but focus those on upper layers at first map.</li>
  <li>Fix compilation failure in debug full without render.</li>
  <li>Fix ICCCM synthetic unmap notify handling causing a race condition with amule when started hidden to system tray (bug #4928).</li>
  <li>Fix margin maximum value (bug #4931).</li>
  <li>Apply font settings changes in real time (DPI, hinting, hint style, RGBA).</li>
  <li>Fix key "Super" remaining sticky when used as a modifier shortcut (bug #4959).</li>
  <li>Updated translations: Polish, Swedish, Brazilian Portuguese, English (GB), Spanish, Czech, Turkish.</li>
</ul>

<h2>Desktop Manager <em>(xfdesktop)</em></h2>
<ul>
  <li>Fix menu plugin crash when selecting custom menu file (bug #4879).</li>
  <li>Do not mark Gtk stock identifiers as translatable. Patch from Stefan Stuhr (bug #4721).</li>
  <li>Update Desktop files to contain icon-naming-spec compliant icon names and use 'exo-open' to start the Web browser and terminal emulator.</li>
  <li>Only regenerate the monitor on file changes we care about (bug #4979).</li>
  <li>Updated translations: Danish, Turkish, German, Polish, Simplified Chinese, English (GB), Japanese, French.</li>
</ul>

<h2>Panel <em>(xfce4-panel)</em></h2>
<ul>
  <li>Block the panel autohide if the widget is grabbed (bug #4597).</li>
  <li>Fix dragging to the submenu items of a launcher (bug #4026).</li>
  <li>Send the event time with startup notification instead of zero, so that focus stealing works properly.</li>
  <li>Set the foreground color of the lcd clock (bug #4923).</li>
  <li>Don't escape the command when dropping a Desktop file in the	launcher dialog (bug #4818).</li>
  <li>Updated translations: Turkish, French, Indonesian, Norwegian, Polish, Simplified Chinese, English (GB), Catalan, Ukrainian.</li>
</ul>

<h2>Session Manager <em>(xfce4-session)</em></h2>
<ul>
  <li>Respect the ICEAUTHORITY environment variable (bug #4369).</li>
  <li>Fix the sudo shutdown helper for systems without HAL (bug #4849).</li>
  <li>Avoid a spurious error dialog when using the sudo shutdown helper to shut down the system (bug #4849).</li>
  <li>Fix crash in autostart editor when adding a new application (bug #4934).</li>
  <li>Updated translations: Turkish, Indonesian, Greek, Hungarian, Brazilian, Russian, Polish, Basque, Ukrainian.</li>
</ul>

<h2>Settings Manager <em>(xfce4-settings)</em></h2>
<ul>
  <li>Make the Xrandr dependency optional. If Xrandr is disabled, the display plugin will not be compiled at all (bug #4836).</li>
  <li>When stealing a shortcut from another shortcuts provider, clear the shortcut of that provider first.</li>
  <li>Make embedded settings dialogs optional (and disabled by default). They can be turned on using --enable-pluggable-dialogs.</li>
  <li>Remove bold markup from the shortcut reset dialog text (bug #4785).</li>
  <li>Don't mark GTK+ stock labels as translatable.</li>
  <li>Add Gtk/IMModule XSETTINGS key (bug #4961).</li>
  <li>Fix DPI calculation when DPI settings are set to '-1', (eg default) since we
        can not depend on pango, cairo or fontconfig to do the right thing. </li>
  <li>Fix typing error in the ToolbarStyle default XSETTINGS registry value.</li>
  <li>Do not fill the xsettings channel from the settings-dialog, xfsettingsd takes
        care of this. </li>
  <li>Updated translations: Danish, Swedish, Japanese, Norwegian, Simplified Chinese, Turkish, Catalan, Ukrainian, Czech.</li>
</ul>

<h2>Configuration Manager <em>(xfconf)</em></h2>
<ul>
  <li>Fix a segfault of xfconfd at startup on amd64 (bug #4881).</li>
  <li>Code cleanup in g_critical assertion.</li>
  <li>Remove unimplemented --import and --export functions from xfconf-query.</li>
  <li>Fix encoding bug with xfconf-query input (bug #4622).</li>
  <li>Updated translations: Danish, French, Indonesian, Norwegian, Simplified Chinese, Swedish, Brazilian Portuguese, Spanish, Turkish, Basque, Czech.</li>
</ul>

<h2>File Manager <em>(thunar)</em></h2>
<ul>
  <li>Fix crash when entering the same hidden directory twice in the location entry (bug #4847).</li>
  <li>Pass the current event time to startup notification, so focus stealing works properly.</li>
  <li>Fix the Thunar font thumbnailer (bug #4821).</li>
  <li>Do not use msgctxt as it is not supported and breaks in older gettext.</li>
  <li>Updated translations: Danish, Turkish, French, Polish, English (GB).</li>
</ul>

<h2>Mixer <em>(xfce4-mixer)</em></h2>
<ul>
  <li>Add missing AudioVideo category which is obligatory if you use the Audio category (bug #4933).</li>
  <li>Fix toggling capture (bug #4777).</li>
  <li>Make Control + q and Control + s keybindings work.</li>
  <li>A few cosmetic improvements.</li>
  <li>Updated translations: Swedish, German, Indonesian, Norwegian, Polish, Spanish, Turkish, Ukrainian.</li>
</ul>

<h2>Utilities <em>(xfce-utils)</em></h2>
<ul>
  <li>Fix sysconfdir and datadir not being expanded properly in xinitrc (bug #4924).</li>
  <li>Export GTK_PATH variable in xinitrc so that GTK+ has a chance to find the Xfce theme engine even in a custom prefix (bug #4925).</li>
  <li>Fix typo in the Copyright entry patch by Enrico Troeger (bug #3993).</li>
  <li>Ensure that xfrun dialog text is selected when the dialog is reshown via the dbus interface (bug #2836).</li>
  <li>Updated translations: German, Japanese, Polish, Turkish.</li>
</ul>

<h2>Application Finder <em>(xfce4-appfinder)</em></h2>
<ul>
  <li>Try to load items from xfce-applications.menu before trying applications.menu in order to provide the same items as Xfdesktop does (reported by Mark Trompell).</li>
  <li>Updated translations: Indonesian, Polish, English (GB), Turkish, Ukrainian.</li>
</ul>
