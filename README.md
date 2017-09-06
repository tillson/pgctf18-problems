# PGCTF18 Problems
This repo is dedicated to keeping track of problems as we build them, as well as storing dockerfiles and LFS images.

# Windows XP
#### Login
welcometopgctf

### Administrator isn’t alone.
#### Flag
`pgctf{user_d3scripti0ns}`

#### Internal Notes
To solve this problem, open Computer Management in the administrative tools section of control panel, and find the Users tab inside Local Users and Groups.

### This is my cOEMputer.
#### Flag
`pgctf{oem_for_the_w1n}`

#### Internal Notes
To solve this problem, open Control Panel and go to System. Inside the OEM section of the system information panel, there is a flag.

### PGCTF Planning
#### Flag
`pgctf{th1s_is_a_ema1l}`

#### Internal Notes
To solve this problem, open Outlook and go to outbox.

### The File Called History (Suggested name change?)
#### Flag
`pgctf{1nternet_3xplorer_is_m3m3}`

#### Internal Notes
To solve this problem, dig deep into the Internet Explorer search history.

### A little Dev Center told me about Pseudo-Locales
#### Flag
`pgctf{r3g3d1t_is_m3m3}`

#### Internal Notes
Buried deep in Windows Registry is the flag. When you google “Pseudo-Locales” a registry path for Pseudo-Locales comes up. If you follow it you can find the flag at the bottom of the registry page.

### Windows XP Gaming <3
#### Flag
`pgctf{br1ng_p1nball_back_2017}`

#### Internal Notes
Open 3D Pinball and open the high scores menu.


### All My Friends
#### Flag
`pgctf{w3_l0ve_y0u}`

#### Internal Notes
Open Address Book and go to the PGCTF Founding Members group, details tab.
