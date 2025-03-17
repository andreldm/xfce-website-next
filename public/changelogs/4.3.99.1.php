<?php $head['title'] = 'Xfce 4.4 rc 1 (4.3.99.1) Changelog'; ?>

<h1>Xfce 4.4 rc 1 (4.3.99.1) Changelog</h1>

<h2>Utility Library <em>(libxfce4util)</em></h2>
<ul>
  <li>Enable compilation with compilers other than gcc (bug #1851).</li>
  <li>Updated translations: Fabian Nowak (de).</li>
  <li>New translations: Leandro Regueiro (gl), Dimitri Gogelia (ka).</li>
</ul>


<h2>Widget Library <em>(libxfcegui4)</em></h2>
<ul>
  <li>Use the slice allocator where appropriate and <tt>g_type_class_add_private()</tt> (bug #2087).</li>
  <li>Add delay for switching workspace when dragging something over the pager (bug #838).</li>
  <li>Allow to use flag buttons for the tasklist.</li>
</ul>


<h2>Extension Library <em>(exo)</em></h2>
<ul>
  <li>See the release notes at <a href="http://thunar.xfce.org/news.html">http://thunar.xfce.org/news.html</a>.</li>
</ul>


<h2>Settings Manager Plugins <em>(xfce-mcs-plugins)</em></h2>
<ul>
  <li>Use <tt>GtkComboBox</tt> instead of <tt>GtkOptionMenu</tt> in the user interface settings (bug #2134).</li>
  <li>Subpixel rendering options are now independent of the hinting options (bug #665).</li>
</ul>


<h2>Window Manager <em>(xfwm4)</em></h2>
<ul>
  <li>Implement borderless full maximization (bug #1750).</li>
  <li>Rework maximization switches (bug #2047).</li>
  <li>Unmap the client window when shaded (bug #2168).</li>
  <li>Fix a crash in compositor when the client vanishes (bug #2105).</li>
  <li>Make sure the icon selected in the tabwin matches the selected window in all cases (bug #2008).</li>
  <li>Add <tt>&lt;Xutil.h&gt;</tt> include for building on Solaris.</li>
  <li>Add new option to enable/disable unredirection of fullscreen override windows (overlays).</li>
  <li>Prevent shaped windows to request a frame.</li>
  <li>Fix meaning of the Xfwm/CycleMinimum option in the WM tweak plugin (bug #2058).</li>
  <li>Fix focus transition back to regular window when an override window grabbing keyboard is unmapped (bug #2090).</li>
  <li>Allow pkg-config to be more verbose (bug #2178).</li>
  <li>Add a fallback to the configure script to check for libXrender on Solaris 10 (bug #2165).</li>
  <li>Plug a few memory leaks.</li>
  <li>Reduce Xserver's memory usage my disabling frame caching.</li>
  <li>Fix bogus high CPU usage on loading themes that miss the menu button.</li>
</ul>


<h2>Desktop Manager <em>(xfdesktop)</em></h2>
<ul>
  <li>Fix backdrop image tearing during expose (bug #1944).</li>
  <li>Show icon tooltips where appropriate (bug #1526).</li>
  <li>Use thunarx extensions for the icon context menus and properties dialogs.</li>
  <li>Fix ugly gradients in the desktop wallpaper on 16-bit displays (bug #1819).</li>
  <li>Don't show a folder for the desktop directory itself (bug #1916).</li>
  <li>Fix problems with markup in text labels (bug #2082).</li>
  <li>Add 'File System', 'Home', and 'Trash' icons.</li>
  <li>Fix compositing emblems on icons (bug #1875).</li>
  <li>Use native Pango ellipsising support for the windowlist menu, which looks way better (bug #2127).</li>
  <li>Allow panel plugin's menu to be opened at the pointer position (bug #2103).</li>
  <li>Don't allow cut or delete if the file/dir isn't writeable (bug #2081).</li>
  <li>Memory leak fixes (bug #1910).</li>
  <li>Put the icon context menu on the proper screen (bug #2351).</li>
</ul>


<h2>Panel <em>(xfce4-panel)</em></h2>
<ul>
  <li>Fix/reimplement kiosk mode (bug #1993).</li>
  <li>Fix linking with -Wl,--as-needed (bug #1977).</li>
  <li>Reduce number of polls/timeouts.</li>
  <li>Prevent panel from being closed by Alt-F4 (bug #2116).</li>
  <li>Use g_slice_* functions from glib when available.</li>
  <li>Add search filter to 'Add item' dialog.</li>
  <li>Add dummy (empty) scripts for deprecated xftaskbar4 and xfce4-iconbox.</li>
  <li>Make desktop switching by scrolling over the pager optional (bug #1951).</li>
  <li>Use pango_ellipsize in windowlist and highlight active window.</li>
  <li>Flat buttons in taskbar by default (old behavior can still be selected).</li>
  <li>Prevent panel (item) dialogs from being always on top.</li>
  <li>Add xfce4-popup-windowlist program to allow showing the windowlist from a keyboard shortcut (bug #2104).</li>
  <li>Optionally show apps from all desktops iconbox.</li>
</ul>


<h2>Print Frontend <em>(xfprint)</em></h2>
<ul>
  <li>Prevent xfprint4 from removing the printed file when the filters aren't applied.</li>
  <li>Fix incompatibility with CUPS 1.2 (bug #2107).</li>
</ul>


<h2>Session Manager <em>(xfce4-session)</em></h2>
<ul>
  <li>Add support for HAL to shutdown/reboot the computer. Must be enabled explicitly using <tt>--with-shutdown-style=hal</tt> to configure (bug #2046).</li>
  <li>Do not try to save the <tt>xfce4-tips</tt> as part of the session (bug #1089).</li>
  <li>Add shutdown/reboot support for Solaris (bug #2230).</li>
  <li>Drop libgnome dependency for assistive technologies support.</li>
</ul>


<h2>Terminal Emulator <em>(Terminal)</em></h2>
<ul>
  <li>Parse <tt>file:</tt>-URIs dropped to a Terminal window properly and format them so they can be used in shell commands directly (bug #2076).</li>
  <li>Use the thumbnail preview support for the background image selection
that was added with exo 0.3.1.10rc1 (bug #2069).</li>
  <li>Add <tt>'~'</tt> to the default word chars.</li>
</ul>


<h2>File Manager <em>(Thunar)</em></h2>
<ul>
  <li>See the release notes at <a href="http://thunar.xfce.org/news.html">http://thunar.xfce.org/news.html</a>.</li>
</ul>


<h2>Calendar <em>(orage)</em></h2>
<ul>
  <li>Fixed jumping effect on panel plugin by adding possibility to define plugin size (bug #2101).</li>
  <li>Fixed slow month update (bug #2080).</li>
  <li>Fixed race condition in timezone handling causing wrong days being highlighted (bug #2157).</li>
  <li>Fixed several AMD64 pointer handling issues (Bugs bug #1900).</li>
  <li>Fixed utf8 problem with strftime n panel plugin (bug #2208).</li>
  <li>Panel plugin parameter window uses tables and is prettier.</li>
  <li>Corrected timezone parameter handling causing corrupions.</li>
  <li>Set alarm window to be on top.</li>
  <li>Use static icons with all windows except systray and about.</li>
  <li>Disable choices that do not make sense in appointment window.</li>
  <li>Possibility to make more complex repeating alarms like weekdays and every nth type settings.</li>
  <li>Trayicon has tooltip, which shows list of alarms.</li>
  <li>Long repeating sounds do not overlap, but wait and start only after the previous play has ended.</li>
</ul>


<h2>Archive Manager <em>(xarchiver)</em></h2>
<ul>
  <li>Added symbolic link column in <tt>tar/tar.bz2/tar.gz</tt> and RPM archives.</li>
  <li>Ability to extract files inside RPM archives without the directory they are contained in.</li>
  <li>View ability works now with files inside RPM archives nested in more than one directory.</li>
  <li>Increased speed! Xarchiver is faster than ever when opening archives.</li>
  <li>The GUI looks neat and clean respect to the 0.3.3 release.</li>
  <li>Added a brand extract and add dialog supporting most of the archiver command line options.</li>
  <li>Added drag and drop from and to Xarchiver window by using the XDS protocol.</li>
  <li>Added the (in)famous cmd-line switches; see xarchiver <tt>-?</tt> for details.</li>
  <li>Added a Stop button who cancels the current operation or you can use the ESC key.</li>
  <li>Added ability to test archives.</li>
  <li>Added an archive properties window showing useful info about the archive and its content.</li>
  <li>Added two menu entries in the Action menu to select or unselect the files in the treeview.</li>
  <li>Added support for ISO images (opening, extract and view only) but it's incomplete, see the <tt>TODO</tt> file.</li>
  <li>Row selection while you type ability. Useful when you have thousand of files inside the archive.</li>
  <li>The extract dialog now remembers the last used extraction path.</li>
  <li>The extract dialog automatically sets the destination directory as the archive path.</li>
  <li>The enter key can be also used with the extract dialog.</li>
  <li>You can use accelerators (keyboard shortcuts) for almost the menu entries.</li>
  <li>The Del key can also be used instead of the Delete button on the toolbar.</li>
  <li>Removed the confirmation dialog when opening bzip2 and gzip compressed files.</li>
  <li>Added a confirmation dialog when deleting files from the archive.</li>
  <li>Finally fixed bug randomly causing rar and arj output badly appears.</li>
  <li>Finally fixed bug randomly causing tar.bz2 and tar.gz archives to be corrupted when deleting files from them.</li>
  <li>Fixed some memory leaks but surely someone is left.</li>
  <li>Fixed bug causing filenames with spaces inside the archive not being viewed.</li>
  <li>Fixed bug causing filenames with spaces in arj archives appear truncated in Xarchiver window.</li>
  <li>Fixed a bug preventing the file dialog to select more than one file when adding to arj archives.</li>
  <li>Fixed progress bar not appearing when adding only one big file to an archive.</li>
  <li>Fixed a bug causing Xarchiver to hang when opening empty zip archives.</li>
  <li>Fixed a bug causing Xarchiver to exit when opening a not supported archive directly from the command line.</li>
</ul>
