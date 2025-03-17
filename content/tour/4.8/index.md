---
title:     "Xfce 4.8 tour"
version:   "4.8"
---

This tour will introduce you to all the new major visual features in Xfce 4.8. This is only the visual part of what has been done; for a full list of changes, see the {{< changelog version="4.8" >}}.

## File Manager (thunar)

### Remote shares browsing

Thunar now has optional support for GVFS which will allow you to browse remote shares using Thunar: FTP, Windows Shares, WebDav and SSH servers...

{{< figure src="thunar-remote.png" caption="Thunar browsing a remote share" >}}

### New file operations progress dialog

When several file operations (copy or move) are being handled in parallel, Thunar now shows a single progress dialog which displays all the relevant information.

{{< figure src="thunar-progress.png" caption="Progress dialog" >}}

### Eject button for removable devices

It is is now possible to eject removable devices by clicking the eject button near each removable device label in the side pane.

{{< figure src="thunar-eject.png" caption="Eject button" >}}

## Panel (xfce4-panel)

The Xfce panel has been totally rewritten in 4.8, here are the most visible changes.

### Improved positioning and size handling

The panel has much better support for positioning panels on the screen. It can be dragged and snapped to screen borders; floating positions are only remembered when moving a panel and the length of the panel can be adjusted as a percentage of the monitor size.

### Transparent backgrounds

The panel is now able to draw transparent panel backgrounds with non transparent items. Your panel items will remain readable and you will enjoy a nice panel look.

{{< figure src="panel-transparent.png" caption="Transparent panel background" >}}

### New item editor

The panel now features an item editor which allows to modify, move, add and remove items quickly. This is particularly useful for items which are hard to right click and gives you an easy way to change your panel layout from a single place.

{{< figure src="panel-editor.png" caption="Panel item editor" >}}

### Drag and drop to create launchers

You can now drag and drop menu entries from the panel applications menu, application finder or Thunar to the panel to create launchers. This feature should please the huge number of people who had been requesting it for ages. The launcher also has an integrated application finder to add new items.

### Window buttons plugin

The iconbox and tasklist plugins are new merged into 1 plugin, called window buttons. It implements different sorting modes, improved handling in vertical panels and can draw a similar frame as Xfwm4 Alt+tab when hovering a button.

### New fuzzy clock

An Xfce release without a new clock mode would not be a true Xfce release. Let us introduce you the 'fuzzy' clock mode!

{{< figure src="panel-fuzzy-clock.png" caption="New fuzzy clock mode" >}}

### New directory menu plugin

The directory menu plugin provides a menu reproducing the arborescence of a particular folder. This allows you to open a terminal or a file manager in a sub-folder in a very fast and efficient way.

{{< figure src="panel-directorymenu.png" caption="Directory menu plugin" >}}

### Applications menu edition

You can now edit the applications menu using any Freedesktop compliant menu editor, Alacarte being the one we used to test.

## Settings (xfce4-settings)

### Improved multihead setup configuration

Xfce can now handle and setup multihead setups for any randr 1.2 compatible driver. Unfortunately, this means it will not work with Nvidia proprietary drivers.

You can enable and disable plugged screens, set their resolution, refresh rate, rotation and reflection, clone screens or extend desktops.

{{< figure src="display-settings.png" caption="New display settings dialog" >}}

#### Timed confirmation

Any change made with the settings dialog will have to be confirmed within ten seconds or they will be reverted. This prevents broken video drivers from leaving your computer unusable.

{{< figure src="display-settings-confirmation.png" caption="Timed confirmation for display settings changes" >}}

#### Quick setup dialog

The quick setup dialog allows you to configure a dual screen setup in a second. Plug the second screen, press the display key or Windows + p and select the wanted layout. Done!

{{< figure src="minimal-display-settings.png" caption="Quick multihead setup" >}}

### Settings edition in the Xfce Settings Editor

The Xfce Settings Editor now deserves its name, it is no longer a simpler Xfconf settings viewer. You can now modify, delete, add and reset settings through its interface. It also monitors changes to update its view.

{{< figure src="settings-editor.png" caption="Editing Xfconf properties with the Settings Editor" >}}

### Improved keyboard layout selection

The layout selection dialog received a lot of love: it no longer displays cryptic language/variants codes but uses localized languages/variants names. Layout edition was also made easier by prefilling the dialogs with the current values.

{{< figure src="keyboard-settings-list.png" caption="Layouts and variants list" >}}
