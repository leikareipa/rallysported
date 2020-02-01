`Note!` This is an umbrella repository for the various projects that make up RallySportED. You'll find links to the individual projects, below.

# RallySportED
RallySportED is a set of tools for modding the cult 1996 DOS game Rally-Sport.

The tools grant you the following powers:
- Create new tracks
- Modify existing tracks
- Edit textures
- Edit the AI
- Alter the game's hard-coded palettes

And they're available for a variety of platforms:
- DOS
- Linux
- Windows
- Browsers

At the moment, RallySportED provides exclusive support for the demo version of Rally-Sport, which you can find online and also bundled with the binary distributions of RallySportED. The full commercial release of the game is not supported, at this time (generally speaking, the commercial release adds a couple of tracks, fixes a few bugs, and introduces split-screen support, but is otherwise the same as the demo version).

<table>
    <tr>
        <td align="center"><img src="screenshots/tiny/rsed.png"></td>
        <td align="center"><img src="screenshots/tiny/rai.png"></td>
        <td align="center"><img src="screenshots/tiny/rtex.png"></td>
        <td align="center"><img src="screenshots/tiny/rgeo-web.png"></td> 
    </tr>
</table>

# The toolset
**[RallySportED for DOS](../../../rallysported-dos)**\
Track, texture, and AI editors for DOS. These tools can be run on 386/486-class machines. Written in assembly and C++.

**[RallySportED for browsers](../../../rallysported-js)**\
Track editor for browsers. Written in JavaScript.

**[RallySportED for desktops](../../../rallysported-diverse)**\
Track and texture editors for Linux and Windows (95 and up). Includes 3d acceleration through OpenGL and Glide; supports Qt and the Win32 API. Written in C++.

**[SETPAL](../../../rallysported-setpal)**\
A small DOS utility for modifying Rally-Sport's hard-coded palettes. Written in C.

**[SETKEYS](../../../rallysported-setkeys)**\
A small DOS utility for modifying Rally-Sport's hard-coded keyboard driving controls. Written in oldschool C++.

# Documentation
Each one of the RallySportED projects listed in the [Toolset](#the-toolset) section comes with its own documentation relevant to that project.

But you can also find more general documentation relating to the RallySportED ecosystem in this repo's [docs](docs/) directory; such as information about Rally-Sport's data formats, which many of the RallySportED projects expect you to refer to.
