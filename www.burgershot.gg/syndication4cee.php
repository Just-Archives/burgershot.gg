<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xmlns:dc="http://purl.org/dc/elements/1.1/">
	<title type="html"><![CDATA[Burgershot - Plugins]]></title>
	<subtitle type="html"><![CDATA[Burgershot - https://www.burgershot.gg]]></subtitle>
	<link rel="self" href="https://www.burgershot.gg/syndication.php"/>
	<id>https://www.burgershot.gg/</id>
	<link rel="alternate" type="text/html" href="https://www.burgershot.gg/"/>
	<updated>2022-07-30T07:04:12Z</updated>
	<generator uri="https://mybb.com">MyBB</generator>
	<entry xmlns="http://www.w3.org/2005/Atom">
		<author>
			<name type="html" xml:space="preserve"><![CDATA[<a href="https://www.burgershot.gg/member.php?action=profile&uid=804">Carlos</a>]]></name>
		</author>
		<published>2021-07-10T14:20:00Z</published>
		<updated>2021-07-10T14:20:00Z</updated>
		<link rel="alternate" type="text/html" href="https://www.burgershot.gg/showthread.php?tid=2161" />
		<id>https://www.burgershot.gg/showthread.php?tid=2161</id>
		<title xml:space="preserve"><![CDATA[samp-uuid-rs]]></title>
		<content type="html" xml:space="preserve" xml:base="https://www.burgershot.gg/showthread.php?tid=2161"><![CDATA[<span style="color: #FF4700;" class="mycode_color"><span style="font-size: xx-large;" class="mycode_size"><span style="font-weight: bold;" class="mycode_b">samp-uuid-rs</span></span></span><br />
<br />
<a href="https://github.com/carlos-menezes/samp-uuid-rs" target="_blank" rel="noopener" class="mycode_url"><img src="https://img.shields.io/badge/sampctl-samp--uuid--rs-2f2f2f.svg?style=for-the-badge" loading="lazy"  alt="[Image: sampctl-samp--uuid--rs-2f2f2f.svg?style=for-the-badge]" class="mycode_img" /></a><br />
<br />
This library provides a <a href="https://en.wikipedia.org/wiki/Universally_unique_identifier#Version_4_(random" target="_blank" rel="noopener" class="mycode_url">UUID v4</a> generator function.<br />
<br />
UUIDs are generally used for identifying information that needs to be unique within a system or network thereof. Their uniqueness and low probability in being repeated makes them useful for being associative keys in databases and identifiers for physical hardware within an organization.<br />
<br />
<span style="color: RoyalBlue;" class="mycode_color"><span style="font-size: x-large;" class="mycode_size"><span style="font-weight: bold;" class="mycode_b">Installation</span></span></span><br />
<br />
Simply install to your project:<br />
<br />
<div class="codeblock"><div class="title">Code:</div><div class="body" dir="ltr"><code>sampctl package install carlos-menezes/samp-uuid-rs</code></div></div><br />
Include in your code and begin using the library:<br />
<br />
<blockquote class="mycode_quote"><cite>Quote:</cite><span style="font-family: Courier New;" class="mycode_font"><br />
<span style="color: Blue;" class="mycode_color">#include &#x26;tuuid&#x26;t</span><br />
</span></blockquote>
<br />
<span style="color: RoyalBlue;" class="mycode_color"><span style="font-size: x-large;" class="mycode_size"><span style="font-weight: bold;" class="mycode_b">Usage</span></span></span><br />
<br />
<div class="codeblock"><div class="title">Code:</div><div class="body" dir="ltr"><code>new dest[UUID_LEN];<br />
UUID(dest);<br />
printf("%s", dest); // xxxxxxxx-xxxx-Mxxx-Nxxx-xxxxxxxxxxxx</code></div></div><br />
<span style="color: RoyalBlue;" class="mycode_color"><span style="font-size: x-large;" class="mycode_size"><span style="font-weight: bold;" class="mycode_b">Build</span></span></span><br />
<br />
To build, run:<br />
<br />
<div class="codeblock"><div class="title">Code:</div><div class="body" dir="ltr"><code>make build</code></div></div><br />
<span style="color: RoyalBlue;" class="mycode_color"><span style="font-size: x-large;" class="mycode_size"><span style="font-weight: bold;" class="mycode_b">Testing</span></span></span><br />
<br />
To test, run:<br />
<br />
<div class="codeblock"><div class="title">Code:</div><div class="body" dir="ltr"><code>make test</code></div></div>]]></content>
		<draft xmlns="http://purl.org/atom-blog/ns#">false</draft>
	</entry>
	<entry xmlns="http://www.w3.org/2005/Atom">
		<author>
			<name type="html" xml:space="preserve"><![CDATA[<a href="https://www.burgershot.gg/member.php?action=profile&uid=846">tim</a>]]></name>
		</author>
		<published>2020-09-28T21:06:38Z</published>
		<updated>2020-09-28T21:11:56Z</updated>
		<link rel="alternate" type="text/html" href="https://www.burgershot.gg/showthread.php?tid=1193" />
		<id>https://www.burgershot.gg/showthread.php?tid=1193</id>
		<title xml:space="preserve"><![CDATA[SampSharp - Write game modes in .NET Core]]></title>
		<content type="html" xml:space="preserve" xml:base="https://www.burgershot.gg/showthread.php?tid=1193"><![CDATA[<div style="text-align: center;" class="mycode_align"><img src="https://raw.githubusercontent.com/ikkentim/SampSharp/master/sampsharp.png" loading="lazy"  alt="[Image: sampsharp.png]" class="mycode_img" /></div>
<br />
<div style="text-align: center;" class="mycode_align"><span style="font-size: xx-large;" class="mycode_size"><span style="font-weight: bold;" class="mycode_b">SampSharp</span></span></div>
<br />
<div style="text-align: center;" class="mycode_align"><a href="https://github.com/ikkentim/SampSharp/stargazers" target="_blank" rel="noopener" class="mycode_url"><img src="https://img.shields.io/github/stars/ikkentim/SampSharp.svg" loading="lazy"  alt="[Image: SampSharp.svg]" class="mycode_img" /></a><a href="https://github.com/ikkentim/SampSharp/network" target="_blank" rel="noopener" class="mycode_url"> <img src="https://img.shields.io/github/forks/ikkentim/SampSharp.svg" loading="lazy"  alt="[Image: SampSharp.svg]" class="mycode_img" /></a><a href="https://github.com/ikkentim/SampSharp/issues" target="_blank" rel="noopener" class="mycode_url"> <img src="https://img.shields.io/github/issues/ikkentim/SampSharp.svg" loading="lazy"  alt="[Image: SampSharp.svg]" class="mycode_img" /></a><a href="https://github.com/ikkentim/SampSharp/releases" target="_blank" rel="noopener" class="mycode_url"> <img src="https://img.shields.io/github/downloads/ikkentim/SampSharp/total.svg" loading="lazy"  alt="[Image: total.svg]" class="mycode_img" /><br />
</a></div>
<div style="text-align: center;" class="mycode_align"><a href="https://discord.gg/gwcHpqp" target="_blank" rel="noopener" class="mycode_url"><span style="color: #0074D9;" class="mycode_color"><span style="font-weight: bold;" class="mycode_b"><span style="font-size: medium;" class="mycode_size">Join us on Discord</span></span></span></a></div>
<br />
SampSharp is a plugin and library which allows you to write SA-MP game modes in C#. The plugin works both on Linux and Windows. The library contains various classes for every type of resource available in SA-MP (players, vehicles, textdraws, etc). Aside from this wrapper around native functions, the library also contains a good structure to build your gamemode on. This plugin was initially released in 2014, and has received a good ever since and I'm still available for any questions related to this plugin.<br />
<br />
SampSharp provides two structures for developing game modes. SampSharp.GameMode and SampSharp.Entities.<br />
<br />
SampSharp.GameMode provides a simple object-oriented structure for developing your game mode. All callbacks are forwarded to the implementation of BaseMode and vanilla callbacks are forwarded as events to the related instances (eg. OnPlayerText fires the PlayerText event on the related Player instance). A simple code sample can be found below.<br />
<br />
<br />
<div class="codeblock phpcodeblock"><div class="title">PHP Code:</div><div class="body"><div dir="ltr"><code><span style="color: #007700">public&nbsp;class&nbsp;</span><span style="color: #0000BB">GameMode&nbsp;</span><span style="color: #007700">:&nbsp;</span><span style="color: #0000BB">BaseMode<br /></span><span style="color: #007700">{<br /></span><span style="color: #0000BB"> &nbsp; &nbsp;</span><span style="color: #007700">protected&nbsp;</span><span style="color: #0000BB">override&nbsp;void&nbsp;OnPlayerConnected</span><span style="color: #007700">(</span><span style="color: #0000BB">BasePlayer&nbsp;player</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">EventArgs&nbsp;e</span><span style="color: #007700">)<br /></span><span style="color: #0000BB"> &nbsp; &nbsp;</span><span style="color: #007700">{<br /></span><span style="color: #0000BB"> &nbsp; &nbsp; &nbsp; &nbsp;base</span><span style="color: #007700">.</span><span style="color: #0000BB">OnPlayerConnected</span><span style="color: #007700">(</span><span style="color: #0000BB">player</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">e</span><span style="color: #007700">);<br /><br /></span><span style="color: #0000BB"> &nbsp; &nbsp; &nbsp; &nbsp;player</span><span style="color: #007700">.</span><span style="color: #0000BB">SendClientMessage</span><span style="color: #007700">(&#36;</span><span style="color: #DD0000">"Welcome&nbsp;{player.Name},&nbsp;to&nbsp;a&nbsp;whole&nbsp;new&nbsp;world!"</span><span style="color: #007700">);<br /></span><span style="color: #0000BB"> &nbsp; &nbsp;</span><span style="color: #007700">}<br /><br /></span><span style="color: #0000BB"> &nbsp; &nbsp;</span><span style="color: #007700">[</span><span style="color: #0000BB">Command</span><span style="color: #007700">(</span><span style="color: #DD0000">"spawn"</span><span style="color: #007700">)]<br /></span><span style="color: #0000BB"> &nbsp; &nbsp;</span><span style="color: #007700">public&nbsp;static&nbsp;</span><span style="color: #0000BB">void&nbsp;VehicleCommand</span><span style="color: #007700">(</span><span style="color: #0000BB">BasePlayer&nbsp;player</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">VehicleModelType&nbsp;model</span><span style="color: #007700">)<br /></span><span style="color: #0000BB"> &nbsp; &nbsp;</span><span style="color: #007700">{<br /></span><span style="color: #0000BB"> &nbsp; &nbsp; &nbsp; &nbsp;Console</span><span style="color: #007700">.</span><span style="color: #0000BB">WriteLine</span><span style="color: #007700">(&#36;</span><span style="color: #DD0000">"Spawning&nbsp;a&nbsp;{model}&nbsp;for&nbsp;{player.Name}"</span><span style="color: #007700">);<br /></span><span style="color: #0000BB"> &nbsp; &nbsp; &nbsp; &nbsp;</span><span style="color: #007700">var&nbsp;</span><span style="color: #0000BB">vehicle&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">GtaVehicle</span><span style="color: #007700">.</span><span style="color: #0000BB">Create</span><span style="color: #007700">(</span><span style="color: #0000BB">model</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">player</span><span style="color: #007700">.</span><span style="color: #0000BB">Position&nbsp;</span><span style="color: #007700">+&nbsp;new&nbsp;</span><span style="color: #0000BB">Vector3</span><span style="color: #007700">(</span><span style="color: #0000BB">0</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">0</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">0.5f</span><span style="color: #007700">),&nbsp;</span><span style="color: #0000BB">player</span><span style="color: #007700">.</span><span style="color: #0000BB">Rotation</span><span style="color: #007700">.</span><span style="color: #0000BB">Z</span><span style="color: #007700">);<br /></span><span style="color: #0000BB"> &nbsp; &nbsp; &nbsp; &nbsp;player</span><span style="color: #007700">.</span><span style="color: #0000BB">PutInVehicle</span><span style="color: #007700">(</span><span style="color: #0000BB">vehicle</span><span style="color: #007700">);<br /></span><span style="color: #0000BB"> &nbsp; &nbsp; &nbsp; &nbsp;player</span><span style="color: #007700">.</span><span style="color: #0000BB">SendClientMessage</span><span style="color: #007700">(</span><span style="color: #0000BB">Color</span><span style="color: #007700">.</span><span style="color: #0000BB">GreenYellow</span><span style="color: #007700">,&nbsp;&#36;</span><span style="color: #DD0000">"You&nbsp;have&nbsp;spawned&nbsp;a&nbsp;{model}!"</span><span style="color: #007700">);<br /></span><span style="color: #0000BB"> &nbsp; &nbsp;</span><span style="color: #007700">}<br />}&nbsp;<br /></span></code></div></div></div><br />
SampSharp.Entities (only available since early 2020) provides an Entity-Component-System structure with full dependency injection support for developing your game mode. SampSharp.Entities is still in active development but is already stable and usable. Below, a similar code sample can be found:<br />
<br />
<div class="codeblock phpcodeblock"><div class="title">PHP Code:</div><div class="body"><div dir="ltr"><code><span style="color: #0000BB"> &nbsp; &nbsp;</span><span style="color: #007700">public&nbsp;class&nbsp;</span><span style="color: #0000BB">SampleSystem&nbsp;</span><span style="color: #007700">:&nbsp;</span><span style="color: #0000BB">ISystem<br /> &nbsp; &nbsp;</span><span style="color: #007700">{<br /></span><span style="color: #0000BB"> &nbsp; &nbsp; &nbsp; &nbsp;</span><span style="color: #007700">[</span><span style="color: #0000BB">Event</span><span style="color: #007700">]<br /></span><span style="color: #0000BB"> &nbsp; &nbsp; &nbsp; &nbsp;</span><span style="color: #007700">public&nbsp;</span><span style="color: #0000BB">void&nbsp;OnPlayerConnected</span><span style="color: #007700">(</span><span style="color: #0000BB">Player&nbsp;player</span><span style="color: #007700">)<br /></span><span style="color: #0000BB"> &nbsp; &nbsp; &nbsp; &nbsp;</span><span style="color: #007700">{<br /></span><span style="color: #0000BB"> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;player</span><span style="color: #007700">.</span><span style="color: #0000BB">SendClientMessage</span><span style="color: #007700">(&#36;</span><span style="color: #DD0000">"Welcome&nbsp;{player.Name},&nbsp;to&nbsp;a&nbsp;whole&nbsp;new&nbsp;world!"</span><span style="color: #007700">);<br /></span><span style="color: #0000BB"> &nbsp; &nbsp; &nbsp; &nbsp;</span><span style="color: #007700">}<br /><br /></span><span style="color: #0000BB"> &nbsp; &nbsp; &nbsp; &nbsp;</span><span style="color: #007700">[</span><span style="color: #0000BB">PlayerCommand</span><span style="color: #007700">(</span><span style="color: #DD0000">"spawn"</span><span style="color: #007700">)]<br /></span><span style="color: #0000BB"> &nbsp; &nbsp; &nbsp; &nbsp;</span><span style="color: #007700">public&nbsp;static&nbsp;</span><span style="color: #0000BB">void&nbsp;VehicleCommand</span><span style="color: #007700">(</span><span style="color: #0000BB">Player&nbsp;player</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">VehicleModelType&nbsp;model</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">IWorldService&nbsp;worldService</span><span style="color: #007700">)<br /></span><span style="color: #0000BB"> &nbsp; &nbsp; &nbsp; &nbsp;</span><span style="color: #007700">{<br /></span><span style="color: #0000BB"> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;Console</span><span style="color: #007700">.</span><span style="color: #0000BB">WriteLine</span><span style="color: #007700">(&#36;</span><span style="color: #DD0000">"Spawning&nbsp;a&nbsp;{model}&nbsp;for&nbsp;{player.Name}"</span><span style="color: #007700">);<br /></span><span style="color: #0000BB"> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</span><span style="color: #007700">var&nbsp;</span><span style="color: #0000BB">vehicle&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">worldService</span><span style="color: #007700">.</span><span style="color: #0000BB">CreateVehicle</span><span style="color: #007700">(</span><span style="color: #0000BB">model</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">player</span><span style="color: #007700">.</span><span style="color: #0000BB">Position&nbsp;</span><span style="color: #007700">+&nbsp;new&nbsp;</span><span style="color: #0000BB">Vector3</span><span style="color: #007700">(</span><span style="color: #0000BB">0</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">0</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">0.5f</span><span style="color: #007700">),&nbsp;</span><span style="color: #0000BB">player</span><span style="color: #007700">.</span><span style="color: #0000BB">Rotation</span><span style="color: #007700">.</span><span style="color: #0000BB">Z</span><span style="color: #007700">,&nbsp;-</span><span style="color: #0000BB">1</span><span style="color: #007700">,&nbsp;-</span><span style="color: #0000BB">1</span><span style="color: #007700">);<br /></span><span style="color: #0000BB"> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;player</span><span style="color: #007700">.</span><span style="color: #0000BB">PutInVehicle</span><span style="color: #007700">(</span><span style="color: #0000BB">vehicle</span><span style="color: #007700">);<br /></span><span style="color: #0000BB"> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;player</span><span style="color: #007700">.</span><span style="color: #0000BB">SendClientMessage</span><span style="color: #007700">(</span><span style="color: #0000BB">Color</span><span style="color: #007700">.</span><span style="color: #0000BB">GreenYellow</span><span style="color: #007700">,&nbsp;&#36;</span><span style="color: #DD0000">"You&nbsp;have&nbsp;spawned&nbsp;a&nbsp;{model}!"</span><span style="color: #007700">);<br /></span><span style="color: #0000BB"> &nbsp; &nbsp; &nbsp; &nbsp;</span><span style="color: #007700">}<br /></span><span style="color: #0000BB"> &nbsp; &nbsp;</span><span style="color: #007700">}&nbsp;<br /></span></code></div></div></div><br />
<span style="font-size: medium;" class="mycode_size"><span style="font-weight: bold;" class="mycode_b">Download</span></span><br />
<br />
Stable version: <a href="https://github.com/ikkentim/SampSharp/releases" target="_blank" rel="noopener" class="mycode_url"><img src="https://img.shields.io/github/release/ikkentim/SampSharp.svg" loading="lazy"  alt="[Image: SampSharp.svg]" class="mycode_img" /> <img src="https://img.shields.io/github/downloads/ikkentim/SampSharp/latest/total.svg" loading="lazy"  alt="[Image: total.svg]" class="mycode_img" /></a><br />
Unstable version: <a href="https://github.com/ikkentim/SampSharp/releases" target="_blank" rel="noopener" class="mycode_url"><img src="https://img.shields.io/github/tag/ikkentim/SampSharp.svg" loading="lazy"  alt="[Image: SampSharp.svg]" class="mycode_img" /></a><br />
<br />
<a href="https://github.com/ikkentim/SampSharp/releases" target="_blank" rel="noopener" class="mycode_url">https://github.com/ikkentim/SampSharp/releases</a><br />
<br />
<br />
<span style="font-size: medium;" class="mycode_size"><span style="font-weight: bold;" class="mycode_b">Documentation</span></span><br />
<br />
Our documentation website is still in development and some vital documentation is still lacking. If you need any assistance, feel free to join our Discord server!<br />
<br />
<a href="https://sampsharp.net" target="_blank" rel="noopener" class="mycode_url">https://sampsharp.net</a>]]></content>
		<draft xmlns="http://purl.org/atom-blog/ns#">false</draft>
	</entry>
	<entry xmlns="http://www.w3.org/2005/Atom">
		<author>
			<name type="html" xml:space="preserve"><![CDATA[<a href="https://www.burgershot.gg/member.php?action=profile&uid=340">Sasino97</a>]]></name>
		</author>
		<published>2019-06-21T06:14:18Z</published>
		<updated>2021-01-29T04:07:20Z</updated>
		<link rel="alternate" type="text/html" href="https://www.burgershot.gg/showthread.php?tid=664" />
		<id>https://www.burgershot.gg/showthread.php?tid=664</id>
		<title xml:space="preserve"><![CDATA[Streamer Plugin by Incognito]]></title>
		<content type="html" xml:space="preserve" xml:base="https://www.burgershot.gg/showthread.php?tid=664"><![CDATA[Since Incognito does not use these forums and since his Streamer plugin is very important to the community, I am re-posting his thread here.<br />
<br />
<blockquote class="mycode_quote"><cite>Quote:</cite><span style="font-size: x-large;" class="mycode_size">Streamer Plugin</span><br />
<br />
<span style="color: #000000;" class="mycode_color"><span style="font-size: medium;" class="mycode_size"><span style="font-family: verdana, geneva, lucida,;" class="mycode_font">This plugin streams objects, pickups, checkpoints, race checkpoints, map icons, and 3D text labels at user-defined server ticks. Basic area detection is also included. Because it is written entirely in C++, much of the overhead from PAWN is avoided. This streamer, as a result, is quite a bit faster than any other implementation currently available in PAWN.</span></span></span><br />
<br />
<span style="color: #000000;" class="mycode_color"><span style="font-size: large;" class="mycode_size"><span style="font-family: verdana, geneva, lucida,;" class="mycode_font"><span style="font-weight: bold;" class="mycode_b">Changelog</span></span></span></span><br />
<br />
<span style="font-size: small;" class="mycode_size"><span style="color: #000000;" class="mycode_color"><span style="font-family: verdana, geneva, lucida,;" class="mycode_font"><span style="font-weight: bold;" class="mycode_b"><a href="https://github.com/samp-incognito/samp-streamer-plugin/commits/master" target="_blank" rel="noopener" class="mycode_url"><span style="color: #1a425f;" class="mycode_color">GitHub Commit History</span></a></span></span></span></span><br />
<br />
<span style="color: #000000;" class="mycode_color"><span style="font-size: medium;" class="mycode_size"><span style="font-family: verdana, geneva, lucida,;" class="mycode_font">Refer to the CHANGES file the binary package for the full changelog.</span></span></span><br />
<br />
<span style="color: #000000;" class="mycode_color"><span style="font-size: large;" class="mycode_size"><span style="font-family: verdana, geneva, lucida,;" class="mycode_font"><span style="font-weight: bold;" class="mycode_b">Documentation</span></span></span></span><br />
<br />
<span style="font-size: small;" class="mycode_size"><span style="color: #000000;" class="mycode_color"><span style="font-family: verdana, geneva, lucida,;" class="mycode_font"><span style="font-weight: bold;" class="mycode_b"><a href="https://github.com/samp-incognito/samp-streamer-plugin/wiki" target="_blank" rel="noopener" class="mycode_url"><span style="color: #1a425f;" class="mycode_color">GitHub Wiki</span></a></span></span></span></span><br />
<br />
<span style="color: #000000;" class="mycode_color"><span style="font-size: medium;" class="mycode_size"><span style="font-family: verdana, geneva, lucida,;" class="mycode_font">Additional information can be found by searching this thread.</span></span></span><br />
<br />
<span style="color: #000000;" class="mycode_color"><span style="font-size: large;" class="mycode_size"><span style="font-family: verdana, geneva, lucida,;" class="mycode_font"><span style="font-weight: bold;" class="mycode_b">Download</span></span></span></span><br />
<br />
<span style="font-size: small;" class="mycode_size"><span style="color: #000000;" class="mycode_color"><span style="font-family: verdana, geneva, lucida,;" class="mycode_font"><span style="font-weight: bold;" class="mycode_b"><a href="https://github.com/samp-incognito/samp-streamer-plugin/releases/latest" target="_blank" rel="noopener" class="mycode_url"><span style="color: #1a425f;" class="mycode_color">GitHub Releases Page</span></a></span></span></span></span><br />
<br />
<span style="font-size: medium;" class="mycode_size"><span style="color: #000000;" class="mycode_color"><span style="font-family: verdana, geneva, lucida,;" class="mycode_font">The Windows version requires the </span></span><a href="https://www.microsoft.com/en-us/download/details.aspx?id=48145" target="_blank" rel="noopener" class="mycode_url"><span style="color: #1a425f;" class="mycode_color"><span style="font-family: verdana, geneva, lucida,;" class="mycode_font">Microsoft Visual C++ 2015 Redistributable Package</span></span></a><span style="color: #000000;" class="mycode_color"><span style="font-family: verdana, geneva, lucida,;" class="mycode_font">.</span></span></span></blockquote>
]]></content>
		<draft xmlns="http://purl.org/atom-blog/ns#">false</draft>
	</entry>
	<entry xmlns="http://www.w3.org/2005/Atom">
		<author>
			<name type="html" xml:space="preserve"><![CDATA[<a href="https://www.burgershot.gg/member.php?action=profile&uid=1102">bmisiak</a>]]></name>
		</author>
		<published>2019-05-21T05:36:34Z</published>
		<updated>2019-05-21T05:38:40Z</updated>
		<link rel="alternate" type="text/html" href="https://www.burgershot.gg/showthread.php?tid=576" />
		<id>https://www.burgershot.gg/showthread.php?tid=576</id>
		<title xml:space="preserve"><![CDATA[samp-precise-timers ⌚: A timer plugin written in Rust]]></title>
		<content type="html" xml:space="preserve" xml:base="https://www.burgershot.gg/showthread.php?tid=576"><![CDATA[<span style="font-size: x-large;" class="mycode_size">samp-precise-timers ⌚</span><br />
<a href="https://github.com/bmisiak/samp-precise-timers" target="_blank" rel="noopener" class="mycode_url">github.com/bmisiak/samp-precise-timers</a><br />
<br />
<br />
<span style="font-size: medium;" class="mycode_size">Briefly</span><br />
Developed for <a href="https://net4game.com/index" target="_blank" rel="noopener" class="mycode_url">net4game.com</a> (RolePlay), this plugin provides precise timers for the server. It is written in Rust, a memory-safe language.<br />
<br />
<span style="font-size: medium;" class="mycode_size">Why rewrite timers?</span><br />
I had a lot of safety concerns with some of the existing solutions. They weren't written with data integrity, memory safety or preventing server crashes in mind and seemed to have quite a few bugs. As privacy and safety is our primary concern at net4game, I wrote this in Rust, which combines high-level ergonomics with the performance of a low-level language. ⚡<br />
<br />
<span style="font-weight: bold;" class="mycode_b">Please check out the code</span> to see the benefits. You might like Rust a lot. The code is much simpler than C++ equivalents, especially the ones which still use *char, free() and delete[] instead of modern C++ idioms such as std::unique_ptr, but as Rust has no runtime, there is no overhead 😉<br />
<br />
<span style="font-size: medium;" class="mycode_size">We would like your help! 💃</span><br />
Oh, and if you enjoy working on servers, we are looking for a team to help our international expansion. 🎉  net4game has been around for a decade as the biggest Polish server. We introduced a lot of innovations over the years and we are almost ready to become international. Shoot me an e-mail at <a href="mailto:bm+code@net4game.com" class="mycode_email">bm+code@net4game.com</a> if you're interested.<br />
<br />
<span style="font-size: medium;" class="mycode_size"><a href="https://github.com/bmisiak/samp-precise-timers/releases" target="_blank" rel="noopener" class="mycode_url">Downloads on GitHub</a></span><br />
Also available on sampctl as <div class="codeblock"><div class="title">Code:</div><div class="body" dir="ltr"><code>bmisiak/samp-precise-timers</code></div></div><br />
On top of all of the above, I would love to help with developing open.mp!]]></content>
		<draft xmlns="http://purl.org/atom-blog/ns#">false</draft>
	</entry>
	<entry xmlns="http://www.w3.org/2005/Atom">
		<author>
			<name type="html" xml:space="preserve"><![CDATA[<a href="https://www.burgershot.gg/member.php?action=profile&uid=20">dakyskye</a>]]></name>
		</author>
		<published>2019-05-12T15:41:18Z</published>
		<updated>2020-01-26T17:51:42Z</updated>
		<link rel="alternate" type="text/html" href="https://www.burgershot.gg/showthread.php?tid=552" />
		<id>https://www.burgershot.gg/showthread.php?tid=552</id>
		<title xml:space="preserve"><![CDATA[pawn env]]></title>
		<content type="html" xml:space="preserve" xml:base="https://www.burgershot.gg/showthread.php?tid=552"><![CDATA[<span style="color: #FF4700;" class="mycode_color"><span style="font-size: xx-large;" class="mycode_size"><span style="font-weight: bold;" class="mycode_b">pawn-env</span></span></span><br />
<br />
<a href="https://github.com/dakyskye/pawn-env" target="_blank" rel="noopener" class="mycode_url"><img src="https://shields.southcla.ws/badge/sampctl-pawn--env-2f2f2f.svg?style=for-the-badge" loading="lazy"  alt="[Image: sampctl-pawn--env-2f2f2f.svg?style=for-the-badge]" class="mycode_img" /></a><br />
<br />
Access environment variables in PAWN<br />
<br />
<span style="color: RoyalBlue;" class="mycode_color"><span style="font-size: x-large;" class="mycode_size"><span style="font-weight: bold;" class="mycode_b">Installation</span></span></span><br />
<br />
Install to your project:<br />
<br />
<div class="codeblock"><div class="title">Code:</div><div class="body" dir="ltr"><code>sampctl package install dakyskye/pawn-env</code></div></div><br />
include in your code:<br />
<br />
<div class="codeblock"><div class="title">Code:</div><div class="body" dir="ltr"><code>#include &#x26;tenv&#x26;t</code></div></div><br />
and start using it.<br />
<br />
<span style="color: RoyalBlue;" class="mycode_color"><span style="font-size: x-large;" class="mycode_size"><span style="font-weight: bold;" class="mycode_b">Usage</span></span></span><br />
<br />
At development time, you can use <span style="font-family: courier new;" class="mycode_font">.env</span> file, but in production it’s not recommended.<br />
<br />
<span style="color: SlateGray;" class="mycode_color"><span style="font-size: medium;" class="mycode_size">Example <span style="font-family: courier new;" class="mycode_font">.env</span> file content:</span></span><br />
<br />
<div class="codeblock"><div class="title">Code:</div><div class="body" dir="ltr"><code>MYSQL_USER=user<br />
MYSQL_PASSWORD=password<br />
MYSQL_HOST=localhost<br />
MYSQL_DATABASE=database</code></div></div><br />
<span style="color: SlateGray;" class="mycode_color"><span style="font-size: medium;" class="mycode_size">Using it in the recommended way:</span></span><br />
<br />
<div class="codeblock"><div class="title">Code:</div><div class="body" dir="ltr"><code>MYSQL_USER=user MYSQL_PASSWORD=password MYSQL_HOST=localhost MYSQL_DATABASE=database sampctl package run</code></div></div><br />
<div class="codeblock"><div class="title">Code:</div><div class="body" dir="ltr"><code>&#36;env:MYSQL_USER="user"; &#36;env:MYSQL_PASSWORD="password"; &#36;env:MYSQL_HOST="localhost"; &#36;env:MYSQL_DATABASE="database"; sampctl package run</code></div></div><br />
<div class="codeblock"><div class="title">Code:</div><div class="body" dir="ltr"><code>docker run -d &#92;<br />
    -e MYSQL_USER=user &#92;<br />
    -e MYSQL_PASSWORD=password &#92;<br />
    -e MYSQL_HOST=localhost &#92;<br />
    -e MYSQL_DATABASE=database &#92;<br />
    --name my-container my/image</code></div></div><br />
<span style="color: RoyalBlue;" class="mycode_color"><span style="font-size: x-large;" class="mycode_size"><span style="font-weight: bold;" class="mycode_b">API</span></span></span><br />
<br />
<div class="codeblock"><div class="title">Code:</div><div class="body" dir="ltr"><code>native bool:Env_Has(const env[]);<br />
native bool:Env_Get(const env[], dest[], size=sizeof(dest));</code></div></div><ul class="mycode_list"><li><span style="font-family: courier new;" class="mycode_font">bool:Env_Has(const env[]);</span><br />
</li>
</ul>
It checks if an environment variable with passed name as <span style="font-family: courier new;" class="mycode_font">env</span> exists or not and returns the result as <span style="font-family: courier new;" class="mycode_font">true</span> or <span style="font-family: courier new;" class="mycode_font">false</span>, hence the <span style="font-family: courier new;" class="mycode_font">bool</span> tag.<br />
<ul class="mycode_list"><li><span style="font-family: courier new;" class="mycode_font">bool:Env_Get(const env[], dest[], size=sizeof(dest));</span><br />
</li>
</ul>
It reads the value of the environment variable of passed name as <span style="font-family: courier new;" class="mycode_font">env</span>, then packs it into <span style="font-family: courier new;" class="mycode_font">dest</span>.<br />
<br />
<span style="font-weight: bold;" class="mycode_b">Example usage</span> can be found in <a href="https://github.com/dakyskye/pawn-env/tree/master/tests/tests.pwn" target="_blank" rel="noopener" class="mycode_url">tests/tests.pwn</a><br />
<br />
<span style="color: RoyalBlue;" class="mycode_color"><span style="font-size: x-large;" class="mycode_size"><span style="font-weight: bold;" class="mycode_b">Building</span></span></span><br />
<br />
First of all, install GNU Make if you haven’t already.<br />
<br />
<div class="codeblock"><div class="title">Code:</div><div class="body" dir="ltr"><code>make build</code></div></div><br />
<div class="codeblock"><div class="title">Code:</div><div class="body" dir="ltr"><code>docker build -t pawn-env .<br />
docker run -v DISKLETTER:&#92;path&#92;to&#92;pawn-env&#92;plugins:/pawn-env/plugins --name pawn-env pawn-env</code></div></div><br />
An example path from my case: <span style="font-family: courier new;" class="mycode_font">X:\My-Workflow\pawn-env\plugins</span><br />
<br />
<span style="color: RoyalBlue;" class="mycode_color"><span style="font-size: x-large;" class="mycode_size"><span style="font-weight: bold;" class="mycode_b">Credits</span></span></span><br />
<ul class="mycode_list"><li><a href="https://github.com/Southclaws" target="_blank" rel="noopener" class="mycode_url">Southclaws</a> - for inspiration (see his <a href="https://github.com/Southclaws/pawn-env" target="_blank" rel="noopener" class="mycode_url">pawn-env</a>)<br />
</li>
<li><a href="https://github.com/Sreyas-Sreelal" target="_blank" rel="noopener" class="mycode_url">SyS</a> - for <a href="https://github.com/Sreyas-Sreelal/rs-plugin-boilerplate" target="_blank" rel="noopener" class="mycode_url">boilerplate</a><br />
</li>
<li><a href="https://github.com/ZOTTCE" target="_blank" rel="noopener" class="mycode_url">ZOTTCE</a> - for <a href="https://github.com/ZOTTCE/samp-rs" target="_blank" rel="noopener" class="mycode_url">samp-rs</a><br />
</li>
</ul>
]]></content>
		<draft xmlns="http://purl.org/atom-blog/ns#">false</draft>
	</entry>
	<entry xmlns="http://www.w3.org/2005/Atom">
		<author>
			<name type="html" xml:space="preserve"><![CDATA[<a href="https://www.burgershot.gg/member.php?action=profile&uid=6">Y_Less</a>]]></name>
		</author>
		<published>2019-04-21T23:34:39Z</published>
		<updated>2019-04-21T23:35:01Z</updated>
		<link rel="alternate" type="text/html" href="https://www.burgershot.gg/showthread.php?tid=426" />
		<id>https://www.burgershot.gg/showthread.php?tid=426</id>
		<title xml:space="preserve"><![CDATA[sscanf]]></title>
		<content type="html" xml:space="preserve" xml:base="https://www.burgershot.gg/showthread.php?tid=426"><![CDATA[<div style="text-align: center;" class="mycode_align"><span style="font-size: xx-large;" class="mycode_size"><span style="font-weight: bold;" class="mycode_b"><span style="color: red;" class="mycode_color"><span style="text-decoration: underline;" class="mycode_u"><span style="color: green;" class="mycode_color">sscanf 2.8.2</span></span></span></span></span></div>
<br />
<span style="font-size: xx-large;" class="mycode_size"><span style="font-weight: bold;" class="mycode_b"><span style="color: red;" class="mycode_color"><span style="text-decoration: underline;" class="mycode_u"><span style="color: green;" class="mycode_color">NPC modes</span></span></span></span></span><br />
<br />
To use sscanf in an NPC mode, download this file:<br />
<br />
<a href="http://dl.dropbox.com/u/21683085/npcdll.rar" target="_blank" rel="noopener" class="mycode_url">http://dl.dropbox.com/u/21683085/npcdll.rar</a><br />
<br />
And extract it to your root server directory (so "amxsscanf.dll" is in the same directory as "samp-npc.exe"). Then use as normal. The only tiny difference is that "u", "r", and "q" don't know if a user is a bot or not, so just assume they are all players - use accordingly.<br />
<br />
<span style="font-size: xx-large;" class="mycode_size"><span style="font-weight: bold;" class="mycode_b"><span style="color: red;" class="mycode_color"><span style="text-decoration: underline;" class="mycode_u"><span style="color: green;" class="mycode_color">Downloads</span></span></span></span></span><br />
<br />
GitHub repo (for sscanf 3):<br />
<br />
<a href="https://github.com/maddinat0r/sscanf/releases" target="_blank" rel="noopener" class="mycode_url">https://github.com/maddinat0r/sscanf/releases</a><br />
<br />
Source, Windows .dll, Linux .so and include:<br />
<br />
<a href="https://dl.dropboxusercontent.com/u/102595204/sscanf-2.8.2.zip" target="_blank" rel="noopener" class="mycode_url">https://dl.dropboxusercontent.com/u/1025...-2.8.2.zip</a><br />
<br />
<span style="font-size: xx-large;" class="mycode_size"><span style="font-weight: bold;" class="mycode_b"><span style="color: red;" class="mycode_color"><span style="text-decoration: underline;" class="mycode_u"><span style="color: green;" class="mycode_color">Use</span></span></span></span></span><br />
<br />
This behaves exactly as the old sscanf did, just MUCH faster and much more flexibly. To use it add:<br />
<br />
<div class="codeblock phpcodeblock"><div class="title">PHP Code:</div><div class="body"><div dir="ltr"><code><span style="color: #FF8000">#include&nbsp;&#x26;tsscanf2&#x26;t&nbsp;<br /></span></code></div></div></div><br />
To your modes and remove the old sscanf (the new include will detect the old version and throw an error if it is detected). On windows add:<br />
<br />
<div class="codeblock phpcodeblock"><div class="title">PHP Code:</div><div class="body"><div dir="ltr"><code><span style="color: #0000BB">plugins&nbsp;sscanf&nbsp;<br /></span></code></div></div></div><br />
To server.cfg. On Linux add:<br />
<br />
<div class="codeblock phpcodeblock"><div class="title">PHP Code:</div><div class="body"><div dir="ltr"><code><span style="color: #0000BB">plugins&nbsp;sscanf</span><span style="color: #007700">.</span><span style="color: #0000BB">so&nbsp;<br /></span></code></div></div></div><br />
The basic code looks like:<br />
<br />
<div class="codeblock phpcodeblock"><div class="title">PHP Code:</div><div class="body"><div dir="ltr"><code><span style="color: #007700">if&nbsp;(</span><span style="color: #0000BB">sscanf</span><span style="color: #007700">(</span><span style="color: #0000BB">params</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">"ui"</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">giveplayerid</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">amount</span><span style="color: #007700">))<br />{<br /></span><span style="color: #0000BB"> &nbsp; return&nbsp;SendClientMessage</span><span style="color: #007700">(</span><span style="color: #0000BB">playerid</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">0xFF0000AA</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">"Usage:&nbsp;/givecash&nbsp;&#x26;tplayerid/name&#x26;t&nbsp;&#x26;tamount&#x26;t"</span><span style="color: #007700">);<br />}&nbsp;<br /></span></code></div></div></div><br />
However it should be noted that sscanf can be used for any text processing you like. For example an ini processor could look like (don't worry about what the bits mean at this stage):<br />
<br />
<div class="codeblock phpcodeblock"><div class="title">PHP Code:</div><div class="body"><div dir="ltr"><code><span style="color: #007700">if&nbsp;(</span><span style="color: #0000BB">sscanf</span><span style="color: #007700">(</span><span style="color: #0000BB">szFileLine</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">"p&#x26;t=&#x26;ts[8]s[32]"</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">szIniName</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">szIniValue</span><span style="color: #007700">))<br />{<br /></span><span style="color: #0000BB"> &nbsp; printf</span><span style="color: #007700">(</span><span style="color: #DD0000">"Invalid&nbsp;INI&nbsp;format&nbsp;line"</span><span style="color: #007700">);<br />}&nbsp;<br /></span></code></div></div></div><br />
There is also an alternate function name to avoid confusion with the C standard sscanf:<br />
<br />
<div class="codeblock phpcodeblock"><div class="title">PHP Code:</div><div class="body"><div dir="ltr"><code><span style="color: #007700">if&nbsp;(</span><span style="color: #0000BB">unformat</span><span style="color: #007700">(</span><span style="color: #0000BB">params</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">"ui"</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">giveplayerid</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">amount</span><span style="color: #007700">))<br />{<br /></span><span style="color: #0000BB"> &nbsp; return&nbsp;SendClientMessage</span><span style="color: #007700">(</span><span style="color: #0000BB">playerid</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">0xFF0000AA</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">"Usage:&nbsp;/givecash&nbsp;&#x26;tplayerid/name&#x26;t&nbsp;&#x26;tamount&#x26;t"</span><span style="color: #007700">);<br />}&nbsp;<br /></span></code></div></div></div><br />
<span style="font-size: xx-large;" class="mycode_size"><span style="font-weight: bold;" class="mycode_b"><span style="color: red;" class="mycode_color"><span style="text-decoration: underline;" class="mycode_u"><span style="color: green;" class="mycode_color">Specifiers</span></span></span></span></span><br />
<br />
The available specifiers (the letters "u", "i" and "s" in the codes above) are below.<br />
<br />
   <ul class="mycode_list"><li><span style="font-weight: bold;" class="mycode_b"><span style="color: red;" class="mycode_color"><span style="text-decoration: underline;" class="mycode_u"><span style="color: green;" class="mycode_color">Basic specifiers</span></span></span></span><br />
</li>
</ul>
<br />
<div class="codeblock"><div class="title">Code:</div><div class="body" dir="ltr"><code>Specifier(s)               Name                   Example values<br />
   i, d         Integer                            1, 42, -10<br />
   c            Character                          a, o, *<br />
   l            Logical                            true, false<br />
   b            Binary                             01001, 0b1100<br />
   h, x         Hex                                1A, 0x23<br />
   o            Octal                              045 12<br />
   n            Number                             42, 0b010, 0xAC, 045<br />
   f            Float                              0.7, -99.5<br />
   g            IEEE Float                         0.7, -99.5, INFINITY, -INFINITY, NAN, NAN_E<br />
   u            User name/id (bots and players)    Y_Less, 0<br />
   q            Bot name/id                        ShopBot, 27<br />
   r            Player name/id                     Y_Less, 42</code></div></div><br />
   <ul class="mycode_list"><li><span style="font-weight: bold;" class="mycode_b"><span style="color: red;" class="mycode_color"><span style="text-decoration: underline;" class="mycode_u"><span style="color: green;" class="mycode_color">Strings</span></span></span></span><br />
</li>
</ul>
<br />
<br />
The specifier "s" is used, as before, for strings - but they are now more advanced. As before they support collection, so doing:<br />
<br />
<div class="codeblock phpcodeblock"><div class="title">PHP Code:</div><div class="body"><div dir="ltr"><code><span style="color: #0000BB">sscanf</span><span style="color: #007700">(</span><span style="color: #DD0000">"hello&nbsp;27"</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">"si"</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">str</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">val</span><span style="color: #007700">);&nbsp;<br /></span></code></div></div></div><br />
Will give:<br />
<br />
<div class="codeblock"><div class="title">Code:</div><div class="body" dir="ltr"><code>hello<br />
27</code></div></div><br />
Doing:<br />
<br />
<div class="codeblock phpcodeblock"><div class="title">PHP Code:</div><div class="body"><div dir="ltr"><code><span style="color: #0000BB">sscanf</span><span style="color: #007700">(</span><span style="color: #DD0000">"hello&nbsp;there&nbsp;27"</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">"si"</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">str</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">val</span><span style="color: #007700">);&nbsp;<br /></span></code></div></div></div><br />
Will fail as "there" is not a number. However doing:<br />
<br />
<div class="codeblock phpcodeblock"><div class="title">PHP Code:</div><div class="body"><div dir="ltr"><code><span style="color: #0000BB">sscanf</span><span style="color: #007700">(</span><span style="color: #DD0000">"hello&nbsp;there"</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">"s"</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">str</span><span style="color: #007700">);&nbsp;<br /></span></code></div></div></div><br />
Will give:<br />
<br />
<div class="codeblock"><div class="title">Code:</div><div class="body" dir="ltr"><code>hello there</code></div></div><br />
Because there is nothing after "s" in the specifier, the string gets everything. To stop this simply add a space:<br />
<br />
<div class="codeblock phpcodeblock"><div class="title">PHP Code:</div><div class="body"><div dir="ltr"><code><span style="color: #0000BB">sscanf</span><span style="color: #007700">(</span><span style="color: #DD0000">"hello&nbsp;there"</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">"s&nbsp;"</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">str</span><span style="color: #007700">);&nbsp;<br /></span></code></div></div></div><br />
Will give:<br />
<br />
<div class="codeblock"><div class="title">Code:</div><div class="body" dir="ltr"><code>hello</code></div></div><br />
You can also escape parts of strings with "\\" - note that it is two backslashes as 1 is used by the compiler:<br />
<br />
<div class="codeblock phpcodeblock"><div class="title">PHP Code:</div><div class="body"><div dir="ltr"><code><span style="color: #0000BB">sscanf</span><span style="color: #007700">(</span><span style="color: #DD0000">"hello&#092;&#092;&nbsp;there&nbsp;27"</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">"si"</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">str</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">val</span><span style="color: #007700">);&nbsp;<br /></span></code></div></div></div><br />
Will give:<br />
<br />
<div class="codeblock"><div class="title">Code:</div><div class="body" dir="ltr"><code>hello there<br />
27</code></div></div><br />
All these examples however will give warnings in the server as the new version has array sizes. The above code should be:<br />
<br />
<div class="codeblock phpcodeblock"><div class="title">PHP Code:</div><div class="body"><div dir="ltr"><code><span style="color: #007700">new<br /></span><span style="color: #0000BB"> &nbsp; str</span><span style="color: #007700">[</span><span style="color: #0000BB">32</span><span style="color: #007700">],<br /></span><span style="color: #0000BB"> &nbsp; val</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">sscanf</span><span style="color: #007700">(</span><span style="color: #DD0000">"hello&#092;&#092;&nbsp;there&nbsp;27"</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">"s[32]i"</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">str</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">val</span><span style="color: #007700">);&nbsp;<br /></span></code></div></div></div><br />
As you can see - the format specifier now contains the length of the target string, ensuring that you can never have your strings overflow and cause problems. This can be combined with the SA:MP compiler's stringizing:<br />
<br />
<div class="codeblock phpcodeblock"><div class="title">PHP Code:</div><div class="body"><div dir="ltr"><code><span style="color: #FF8000">#define&nbsp;STR_SIZE&nbsp;32<br /></span><span style="color: #007700">new<br /></span><span style="color: #0000BB"> &nbsp; str</span><span style="color: #007700">[</span><span style="color: #0000BB">STR_SIZE</span><span style="color: #007700">],<br /></span><span style="color: #0000BB"> &nbsp; val</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">sscanf</span><span style="color: #007700">(</span><span style="color: #DD0000">"hello&#092;&#092;&nbsp;there&nbsp;27"</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">"s["&nbsp;</span><span style="color: #FF8000">#STR_SIZE&nbsp;"]i",&nbsp;str,&nbsp;val);&nbsp;<br /></span></code></div></div></div><br />
So when you change your string size you don't need to change your specifiers.<br />
<br />
What happened to "z", the optional string? z has been removed (you can still use it but will get a server warning) to make way for the new optional parameter system described later on.<br />
<br />
   <ul class="mycode_list"><li><span style="font-weight: bold;" class="mycode_b"><span style="color: red;" class="mycode_color"><span style="text-decoration: underline;" class="mycode_u"><span style="color: green;" class="mycode_color">Arrays</span></span></span></span><br />
</li>
</ul>
<br />
One of the advanced new specifiers is "a", which creates an array, obviously. The syntax is similar to that of strings and, as you will see later, the delimiter code:<br />
<br />
<div class="codeblock phpcodeblock"><div class="title">PHP Code:</div><div class="body"><div dir="ltr"><code><span style="color: #007700">new<br /></span><span style="color: #0000BB"> &nbsp; arr</span><span style="color: #007700">[</span><span style="color: #0000BB">5</span><span style="color: #007700">];<br /></span><span style="color: #0000BB">sscanf</span><span style="color: #007700">(</span><span style="color: #DD0000">"1&nbsp;2&nbsp;3&nbsp;4&nbsp;5"</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">"a&#x26;ti&#x26;t[5]"</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">arr</span><span style="color: #007700">);&nbsp;<br /></span></code></div></div></div><br />
The "a" specifier is immediately followed by a single type enclosed in angle brackets - this type can be any of the basic types listed above. It is the followed, as with strings now, by an array size. The code above will put the numbers 1 to 5 into the 5 indexes of the "arr" array variable.<br />
<br />
Arrays can now also be combined with strings (see below), specifying the string size in the array type:<br />
<br />
<div class="codeblock"><div class="title">Code:</div><div class="body" dir="ltr"><code>a&#x26;ts[10]&#x26;t[12]</code></div></div><br />
This will produce an array of 12 strings, each up to 10 characters long (9 + NULL). Optional string arrays still follow the optional array syntax:<br />
<br />
<div class="codeblock"><div class="title">Code:</div><div class="body" dir="ltr"><code>A&#x26;ts[10]&#x26;t(hello)[12]</code></div></div><br />
However, unlike numbers you can't specify a progression and have it fill up. This code:<br />
<br />
<div class="codeblock"><div class="title">Code:</div><div class="body" dir="ltr"><code>A&#x26;ti&#x26;t(0, 1)[4]</code></div></div><br />
Will by default produce:<br />
<br />
<div class="codeblock"><div class="title">Code:</div><div class="body" dir="ltr"><code>0, 1, 2, 3</code></div></div><br />
However, this code:<br />
<br />
<div class="codeblock"><div class="title">Code:</div><div class="body" dir="ltr"><code>A&#x26;ts[10]&#x26;t(hi, there)[4]</code></div></div><br />
Will by default produce:<br />
<br />
<div class="codeblock"><div class="title">Code:</div><div class="body" dir="ltr"><code>"hi, there", "hi, there", "hi, there", "hi, there"</code></div></div><br />
As normal, you can add brackets in to the default string value with "\)":<br />
<br />
<div class="codeblock"><div class="title">Code:</div><div class="body" dir="ltr"><code>A&#x26;ts[10]&#x26;t(hi (code&#92;))[4]</code></div></div><br />
It should also be noted that there is NO length checking on default strings. If you do:<br />
<br />
<div class="codeblock"><div class="title">Code:</div><div class="body" dir="ltr"><code>A&#x26;ts[10]&#x26;t(This is longer than 10 characters)[4]</code></div></div><br />
You will probably just corrupt the PAWN stack. The length checking is to ensure no users enter malicious data; however, in this case it is up to the scripter to ensure that the data is correct as they are the only one affecting it and shouldn't be trying to crash their own server. Interestingly, arrays of strings actually also work with jagged arrays and arrays that have been shuffled by Slice's quicksort function (this isn't a side-effect, I specifically wrote them to do so).<br />
<br />
   <ul class="mycode_list"><li><span style="font-weight: bold;" class="mycode_b"><span style="color: red;" class="mycode_color"><span style="text-decoration: underline;" class="mycode_u"><span style="color: green;" class="mycode_color">Enums</span></span></span></span><br />
</li>
</ul>
<br />
This is possibly the most powerful addition to sscanf ever. This gives you the ability to define the structure of an enum within your specifier string and read any data straight into it. The format takes after that of arrays, but with more types - and you can include strings in enums (but not other enums or arrays):<br />
<br />
<div class="codeblock phpcodeblock"><div class="title">PHP Code:</div><div class="body"><div dir="ltr"><code><span style="color: #0000BB">enum<br /> &nbsp; E_DATA<br /></span><span style="color: #007700">{<br /></span><span style="color: #0000BB"> &nbsp; E_DATA_C</span><span style="color: #007700">,<br /></span><span style="color: #0000BB"> &nbsp; Float</span><span style="color: #007700">:</span><span style="color: #0000BB">E_DATA_X</span><span style="color: #007700">,<br /></span><span style="color: #0000BB"> &nbsp; E_DATA_NAME</span><span style="color: #007700">[</span><span style="color: #0000BB">32</span><span style="color: #007700">],<br /></span><span style="color: #0000BB"> &nbsp; E_DATA_Z<br /></span><span style="color: #007700">}<br /><br /></span><span style="color: #0000BB">main<br /></span><span style="color: #007700">{<br /></span><span style="color: #0000BB"> &nbsp; new<br /> &nbsp; &nbsp; &nbsp; var</span><span style="color: #007700">[</span><span style="color: #0000BB">E_DATA</span><span style="color: #007700">];<br /></span><span style="color: #0000BB"> &nbsp; sscanf</span><span style="color: #007700">(</span><span style="color: #DD0000">"1&nbsp;12.0&nbsp;Bob&nbsp;c"</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">"e&#x26;tifs[32]c&#x26;t"</span><span style="color: #007700">,&nbsp;var);<br />}&nbsp;<br /></span></code></div></div></div><br />
Now I'll be impressed if you can read that code straight off, so I'll explain it slowly:<br />
<br />
<div class="codeblock phpcodeblock"><div class="title">PHP Code:</div><div class="body"><div dir="ltr"><code><span style="color: #0000BB">e&nbsp;</span><span style="color: #007700">-&nbsp;</span><span style="color: #0000BB">Start&nbsp;of&nbsp;the&nbsp;</span><span style="color: #DD0000">"enum"&nbsp;</span><span style="color: #0000BB">type<br /></span><span style="color: #007700">&#x26;t&nbsp;-&nbsp;</span><span style="color: #0000BB">Starts&nbsp;the&nbsp;specification&nbsp;of&nbsp;the&nbsp;structure&nbsp;of&nbsp;the&nbsp;enum<br />i&nbsp;</span><span style="color: #007700">-&nbsp;</span><span style="color: #0000BB">An&nbsp;integer</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">corresponds&nbsp;with&nbsp;E_DATA_C<br />f&nbsp;</span><span style="color: #007700">-&nbsp;</span><span style="color: #0000BB">A&nbsp;float</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">corresponds&nbsp;with&nbsp;E_DATA_X<br />s</span><span style="color: #007700">[</span><span style="color: #0000BB">32</span><span style="color: #007700">]&nbsp;-&nbsp;</span><span style="color: #0000BB">A&nbsp;32&nbsp;cell&nbsp;string</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">corresponds&nbsp;with&nbsp;E_DATA_NAME<br />c&nbsp;</span><span style="color: #007700">-&nbsp;</span><span style="color: #0000BB">A&nbsp;character</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">corresponds&nbsp;with&nbsp;E_DATA_Z<br /></span><span style="color: #007700">&#x26;t&nbsp;-&nbsp;</span><span style="color: #0000BB">End&nbsp;of&nbsp;the&nbsp;enum&nbsp;specification&nbsp;<br /></span></code></div></div></div><br />
Note that an enum doesn't require a size like arrays and strings - it's size is determined by the number and size of the types. Most, but not all, specifiers can be used inside enums (notably arrays and other enums can't be).<br />
<br />
   <ul class="mycode_list"><li><span style="font-weight: bold;" class="mycode_b"><span style="color: red;" class="mycode_color"><span style="text-decoration: underline;" class="mycode_u"><span style="color: green;" class="mycode_color">Quiet</span></span></span></span><br />
</li>
</ul>
<br />
The two new specifiers "{" and "}" are used for what are known as "quiet" strings. These are strings which are read and checked, but not saved. For example:<br />
<br />
<div class="codeblock phpcodeblock"><div class="title">PHP Code:</div><div class="body"><div dir="ltr"><code><span style="color: #0000BB">sscanf</span><span style="color: #007700">(</span><span style="color: #DD0000">"42&nbsp;-100"</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">"{i}i"</span><span style="color: #007700">,&nbsp;var);&nbsp;<br /></span></code></div></div></div><br />
Clearly there are two numbers and two "i", but only one return variable. This is because the first "i" is quiet so is not saved, but affects the return value. The code above makes "var" "-100". The code below will fail in an if check:<br />
<br />
<div class="codeblock phpcodeblock"><div class="title">PHP Code:</div><div class="body"><div dir="ltr"><code><span style="color: #0000BB">sscanf</span><span style="color: #007700">(</span><span style="color: #DD0000">"hi&nbsp;-100"</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">"{i}i"</span><span style="color: #007700">,&nbsp;var);&nbsp;<br /></span></code></div></div></div><br />
Although the first integer is not saved it is still read - and "hi" is not an integer. Quiet zones can be as long as you like, even for the whole string if you only want to check values are right, not save them:<br />
<br />
<div class="codeblock phpcodeblock"><div class="title">PHP Code:</div><div class="body"><div dir="ltr"><code><span style="color: #0000BB">sscanf</span><span style="color: #007700">(</span><span style="color: #DD0000">"1&nbsp;2&nbsp;3"</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">"i{ii}"</span><span style="color: #007700">,&nbsp;var);<br /></span><span style="color: #0000BB">sscanf</span><span style="color: #007700">(</span><span style="color: #DD0000">"1&nbsp;2&nbsp;3"</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">"{iii}"</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">sscanf</span><span style="color: #007700">(</span><span style="color: #DD0000">"1&nbsp;2&nbsp;3"</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">"i{a&#x26;ti&#x26;t[2]}"</span><span style="color: #007700">,&nbsp;var);&nbsp;<br /></span></code></div></div></div><br />
You can also embed quiet sections inside enum specifications:<br />
<br />
<div class="codeblock phpcodeblock"><div class="title">PHP Code:</div><div class="body"><div dir="ltr"><code><span style="color: #0000BB">sscanf</span><span style="color: #007700">(</span><span style="color: #DD0000">"1&nbsp;12.0&nbsp;Bob&nbsp;42&nbsp;INFINITY&nbsp;c"</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">"e&#x26;tifs[32]{ig}c&#x26;t"</span><span style="color: #007700">,&nbsp;var);&nbsp;<br /></span></code></div></div></div><br />
Quiet sections cannot contain other quiet sections, however they can include enums which contain quiet sections.<br />
<br />
   <ul class="mycode_list"><li><span style="font-weight: bold;" class="mycode_b"><span style="color: red;" class="mycode_color"><span style="text-decoration: underline;" class="mycode_u"><span style="color: green;" class="mycode_color">Searches</span></span></span></span><br />
</li>
</ul>
<br />
Searches were in the last version of sscanf too, but I'm explaining them again anyway. Strings enclosed in single quotes (') are scanned for in the main string and the position moved on. Note that to search for a single quote you escape it as above using "\\":<br />
<br />
<div class="codeblock phpcodeblock"><div class="title">PHP Code:</div><div class="body"><div dir="ltr"><code><span style="color: #0000BB">sscanf</span><span style="color: #007700">(</span><span style="color: #DD0000">"10&nbsp;11&nbsp;woo&nbsp;12"</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">"i'woo'i"</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">var0</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">var1</span><span style="color: #007700">);&nbsp;<br /></span></code></div></div></div><br />
Gives:<br />
<br />
<div class="codeblock"><div class="title">Code:</div><div class="body" dir="ltr"><code>10<br />
12</code></div></div><br />
You could achieve the same effect with:<br />
<br />
<div class="codeblock phpcodeblock"><div class="title">PHP Code:</div><div class="body"><div dir="ltr"><code><span style="color: #0000BB">sscanf</span><span style="color: #007700">(</span><span style="color: #DD0000">"10&nbsp;11&nbsp;woo&nbsp;12"</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">"i{is[1000]}i"</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">var0</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">var1</span><span style="color: #007700">);&nbsp;<br /></span></code></div></div></div><br />
But that wouldn't check that the string was "woo". Also note the use of "1000" for the string size. Quiet strings must still have a length, but as they aren't saved anywhere you can make this number as large as you like to cover any eventuality. Enum specifications can include search strings.<br />
<br />
   <ul class="mycode_list"><li><span style="font-weight: bold;" class="mycode_b"><span style="color: red;" class="mycode_color"><span style="text-decoration: underline;" class="mycode_u"><span style="color: green;" class="mycode_color">Enums</span></span></span></span><br />
</li>
</ul>
<br />
This is a feature similar to quiet sections, which allows you to skip overwriting certain parts of an enum:<br />
<br />
<div class="codeblock"><div class="title">Code:</div><div class="body" dir="ltr"><code>e&#x26;tii-i-ii&#x26;t</code></div></div><br />
Here the "-" is a "minus", and tells sscanf that there is an enum element there, but not to do anything, so if you had:<br />
<br />
<div class="codeblock phpcodeblock"><div class="title">PHP Code:</div><div class="body"><div dir="ltr"><code><span style="color: #0000BB">enum&nbsp;E<br /></span><span style="color: #007700">{<br /></span><span style="color: #0000BB"> &nbsp; E_A</span><span style="color: #007700">,<br /></span><span style="color: #0000BB"> &nbsp; E_B</span><span style="color: #007700">,<br /></span><span style="color: #0000BB"> &nbsp; E_C</span><span style="color: #007700">,<br /></span><span style="color: #0000BB"> &nbsp; E_D</span><span style="color: #007700">,<br /></span><span style="color: #0000BB"> &nbsp; E_E<br /></span><span style="color: #007700">}&nbsp;<br /></span></code></div></div></div><br />
And you only wanted to update the first two and the last fields and leave all others untouched you could use that specifier above. This way sscanf knows how to skip over the memory, and how much memory to skip. Note that this doesn't read anything, so you could also combine this with quiet sections:<br />
<br />
<div class="codeblock"><div class="title">Code:</div><div class="body" dir="ltr"><code>e&#x26;tii-i-i{ii}i&#x26;t</code></div></div><br />
That will read two values and save them, skip over two memory locations, read two values and NOT save them, then read and save a last value. In this way you can have written down all the values for every slot in the enum, but have only used 3 of them. Note that this is the same with "E" - if you do:<br />
<br />
<div class="codeblock"><div class="title">Code:</div><div class="body" dir="ltr"><code>E&#x26;tii-i-ii&#x26;t</code></div></div><br />
You should ONLY specify THREE defaults, not all five:<br />
<br />
<div class="codeblock"><div class="title">Code:</div><div class="body" dir="ltr"><code>E&#x26;tii-i-ii&#x26;t(11, 22, 55)</code></div></div><br />
   <ul class="mycode_list"><li><span style="font-weight: bold;" class="mycode_b"><span style="color: red;" class="mycode_color"><span style="text-decoration: underline;" class="mycode_u"><span style="color: green;" class="mycode_color">Delimiters</span></span></span></span><br />
</li>
</ul>
<br />
The previous version of sscanf had "p" to change the symbol used to separate tokens. This specifier still exists but it has been formalised to match the array and enum syntax. What was previously:<br />
<br />
<div class="codeblock phpcodeblock"><div class="title">PHP Code:</div><div class="body"><div dir="ltr"><code><span style="color: #0000BB">sscanf</span><span style="color: #007700">(</span><span style="color: #DD0000">"1,2,3"</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">"p,iii"</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">var0</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">var1</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">var2</span><span style="color: #007700">);&nbsp;<br /></span></code></div></div></div><br />
Is now:<br />
<br />
<div class="codeblock phpcodeblock"><div class="title">PHP Code:</div><div class="body"><div dir="ltr"><code><span style="color: #0000BB">sscanf</span><span style="color: #007700">(</span><span style="color: #DD0000">"1,2,3"</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">"p&#x26;t,&#x26;tiii"</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">var0</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">var1</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">var2</span><span style="color: #007700">);&nbsp;<br /></span></code></div></div></div><br />
The old version will still work, but it will give a warning. Enum specifications can include delimiters, and is the only time "&#x26;t&#x26;t"s are contained in other "&#x26;t&#x26;t"s:<br />
<br />
<div class="codeblock phpcodeblock"><div class="title">PHP Code:</div><div class="body"><div dir="ltr"><code><span style="color: #0000BB">sscanf</span><span style="color: #007700">(</span><span style="color: #DD0000">"1&nbsp;12.0&nbsp;Bob,c"</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">"e&#x26;tifp&#x26;t,&#x26;ts[32]c&#x26;t"</span><span style="color: #007700">,&nbsp;var);&nbsp;<br /></span></code></div></div></div><br />
Note that the delimiter will remain in effect after the enum is complete. You can even use "&#x26;t" as a specifier by doing "p&#x26;t\&#x26;t&#x26;t" (or the older "p&#x26;t").<br />
<br />
When used with strings, the collection behaviour is overruled. Most specifiers are still space delimited, so for example this will work:<br />
<br />
<div class="codeblock phpcodeblock"><div class="title">PHP Code:</div><div class="body"><div dir="ltr"><code><span style="color: #0000BB">sscanf</span><span style="color: #007700">(</span><span style="color: #DD0000">"1&nbsp;2&nbsp;3"</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">"p&#x26;t;&#x26;tiii"</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">var0</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">var1</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">var2</span><span style="color: #007700">);&nbsp;<br /></span></code></div></div></div><br />
Despite the fact that there are no ";"s. However, strings will ONLY use the specified delimiters, so:<br />
<br />
<div class="codeblock phpcodeblock"><div class="title">PHP Code:</div><div class="body"><div dir="ltr"><code><span style="color: #0000BB">sscanf</span><span style="color: #007700">(</span><span style="color: #DD0000">"hello&nbsp;1"</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">"p&#x26;t-&#x26;ts[32]i"</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">str</span><span style="color: #007700">,&nbsp;var);&nbsp;<br /></span></code></div></div></div><br />
Will NOT work - the variable "str" will contain "hello 1". On the other hand, the example from earlier, slightly modified:<br />
<br />
<div class="codeblock phpcodeblock"><div class="title">PHP Code:</div><div class="body"><div dir="ltr"><code><span style="color: #0000BB">sscanf</span><span style="color: #007700">(</span><span style="color: #DD0000">"hello&nbsp;there&#x26;t27"</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">"p&#x26;t&#x26;t&#x26;ts[32]i"</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">str</span><span style="color: #007700">,&nbsp;var);&nbsp;<br /></span></code></div></div></div><br />
WILL work and will give an output of:<br />
<br />
<div class="codeblock"><div class="title">Code:</div><div class="body" dir="ltr"><code>hello there<br />
27</code></div></div><br />
You can now have optional delimiters using "P" (upper case "p" to match other "optional" specifiers). These are optional in the sense that you specify multiple delimiters and any one of them can be used to end the next symbol:<br />
<br />
<div class="codeblock phpcodeblock"><div class="title">PHP Code:</div><div class="body"><div dir="ltr"><code><span style="color: #0000BB">sscanf</span><span style="color: #007700">(</span><span style="color: #DD0000">"(4,&nbsp;5,&nbsp;6,&nbsp;7)"</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">"P&#x26;t(),&#x26;t{s[2]}iiii"</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">a</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">b</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">c</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">d</span><span style="color: #007700">);&nbsp;<br /></span></code></div></div></div><br />
This uses a "quiet section" to ignore anything before the first "(", and then uses multiple delimiters to end all the text. Example:<br />
<br />
<div class="codeblock phpcodeblock"><div class="title">PHP Code:</div><div class="body"><div dir="ltr"><code><span style="color: #0000BB">sscanf</span><span style="color: #007700">(</span><span style="color: #DD0000">"42,&nbsp;43;&nbsp;44@"</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">"P&#x26;t,;@&#x26;ta&#x26;ti&#x26;t[3]"</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">arr</span><span style="color: #007700">);&nbsp;<br /></span></code></div></div></div><br />
   <ul class="mycode_list"><li><span style="font-weight: bold;" class="mycode_b"><span style="color: red;" class="mycode_color"><span style="text-decoration: underline;" class="mycode_u"><span style="color: green;" class="mycode_color">Optional specifiers</span></span></span></span><br />
</li>
</ul>
<br />
EVERY format specifier (that is, everything except '', {} and p) now has an optional equivalent - this is just their letter capitalised, so for example the old "z" optional string specifier is now "S" (there is still "z" and, for completeness, "Z", but both give warnings). In addition to optional specifiers, there are also now default values:<br />
<br />
<div class="codeblock phpcodeblock"><div class="title">PHP Code:</div><div class="body"><div dir="ltr"><code><span style="color: #0000BB">sscanf</span><span style="color: #007700">(</span><span style="color: #DD0000">""</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">"I(12)"</span><span style="color: #007700">,&nbsp;var);&nbsp;<br /></span></code></div></div></div><br />
The "()"s (round brackets) contain the default value for the optional integer and, as the main string has no data, the value of "var" becomes "12". Default values come before array sizes and after specifications, so an optional array would look like:<br />
<br />
<div class="codeblock phpcodeblock"><div class="title">PHP Code:</div><div class="body"><div dir="ltr"><code><span style="color: #0000BB">sscanf</span><span style="color: #007700">(</span><span style="color: #DD0000">"1&nbsp;2"</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">"A&#x26;ti&#x26;t(3)[4]"</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">arr</span><span style="color: #007700">);&nbsp;<br /></span></code></div></div></div><br />
Note that the size of the array is "4" and the default value is "3". There are also two values which are defined, so the final value of "arr" is:<br />
<br />
<div class="codeblock"><div class="title">Code:</div><div class="body" dir="ltr"><code>1, 2, 3, 3</code></div></div><br />
Array default values are clever, the final value of:<br />
<br />
<div class="codeblock phpcodeblock"><div class="title">PHP Code:</div><div class="body"><div dir="ltr"><code><span style="color: #0000BB">sscanf</span><span style="color: #007700">(</span><span style="color: #DD0000">""</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">"A&#x26;ti&#x26;t(3,6)[4]"</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">arr</span><span style="color: #007700">);&nbsp;<br /></span></code></div></div></div><br />
Will be:<br />
<br />
<div class="codeblock"><div class="title">Code:</div><div class="body" dir="ltr"><code>3, 6, 9, 12</code></div></div><br />
The difference between "3" and "6" is "3", so the values increase by that every index. Note that it is not very clever, so:<br />
<br />
<div class="codeblock phpcodeblock"><div class="title">PHP Code:</div><div class="body"><div dir="ltr"><code><span style="color: #0000BB">sscanf</span><span style="color: #007700">(</span><span style="color: #DD0000">""</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">"A&#x26;ti&#x26;t(1,2,2)[4]"</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">arr</span><span style="color: #007700">);&nbsp;<br /></span></code></div></div></div><br />
Will produce:<br />
<br />
<div class="codeblock"><div class="title">Code:</div><div class="body" dir="ltr"><code>1, 2, 2, 2</code></div></div><br />
The difference between "2" and "2" (the last 2 numbers in the default) is 0, so there will be no further increase. For "l" (logical) arrays, the value is always the same as the last value, as it is with "g" if the last value is one of the special values (INFINITY, NEG_INFINITY (same as -INFINITY), NAN or NAN_E). Note that:<br />
<br />
<div class="codeblock phpcodeblock"><div class="title">PHP Code:</div><div class="body"><div dir="ltr"><code><span style="color: #0000BB">sscanf</span><span style="color: #007700">(</span><span style="color: #DD0000">""</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">"a&#x26;tI&#x26;t(1,2,2)[4]"</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">arr</span><span style="color: #007700">);&nbsp;<br /></span></code></div></div></div><br />
Is invalid syntax, the "A" must be the capital part.<br />
<br />
Enums can also be optional:<br />
<br />
<div class="codeblock phpcodeblock"><div class="title">PHP Code:</div><div class="body"><div dir="ltr"><code><span style="color: #0000BB">sscanf</span><span style="color: #007700">(</span><span style="color: #DD0000">"4"</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">"E&#x26;tifs[32]c&#x26;t(1,&nbsp;12.0,&nbsp;Bob,&nbsp;c)"</span><span style="color: #007700">,&nbsp;var);&nbsp;<br /></span></code></div></div></div><br />
In that code all values except "4" will be default. Also, again, you can escape commas with "\\" in default enum strings. Some final examples:<br />
<br />
<div class="codeblock phpcodeblock"><div class="title">PHP Code:</div><div class="body"><div dir="ltr"><code><span style="color: #0000BB">sscanf</span><span style="color: #007700">(</span><span style="color: #DD0000">"1"</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">"I(2)I(3)I(4)"</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">var0</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">var1</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">var2</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">sscanf</span><span style="color: #007700">(</span><span style="color: #DD0000">""</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">"O(045)H(0xF4)B(0b0100)U(Y_Less)"</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">octnum</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">hexnum</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">binnum</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">user</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">sscanf</span><span style="color: #007700">(</span><span style="color: #DD0000">"0xFF"</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">"N(0b101)"</span><span style="color: #007700">);&nbsp;<br /></span></code></div></div></div><br />
That last example is of a specifier not too well described yet - the "number" specifier, which will work out the format of the number from the leading characters (0x, 0b, 0 or nothing). Also note that the second example has changed - see the next section.<br />
<br />
   <ul class="mycode_list"><li><span style="font-weight: bold;" class="mycode_b"><span style="color: red;" class="mycode_color"><span style="text-decoration: underline;" class="mycode_u"><span style="color: green;" class="mycode_color">Users</span></span></span></span><br />
</li>
</ul>
<br />
The "u", "q", and "r" specifiers search for a user by name or ID. The method of this search has changed in the latest versions of "sscanf".<br />
<br />
Additionally "U", "Q", and "R" used to take a name or ID as their default value - this has since been changed to JUST a number, and sscanf will not try and determine if this number is online:<br />
<br />
Previous:<br />
<br />
<div class="codeblock phpcodeblock"><div class="title">PHP Code:</div><div class="body"><div dir="ltr"><code><span style="color: #0000BB">sscanf</span><span style="color: #007700">(</span><span style="color: #0000BB">params</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">"U(Y_Less)"</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">id</span><span style="color: #007700">);<br />if&nbsp;(</span><span style="color: #0000BB">id&nbsp;</span><span style="color: #007700">==&nbsp;</span><span style="color: #0000BB">INVALID_PLAYER_ID</span><span style="color: #007700">)<br />{<br /></span><span style="color: #0000BB"> &nbsp; </span><span style="color: #FF8000">//&nbsp;Y_Less&nbsp;or&nbsp;the&nbsp;entered&nbsp;player&nbsp;is&nbsp;not&nbsp;connected.<br /></span><span style="color: #007700">}&nbsp;<br /></span></code></div></div></div><br />
New:<br />
<br />
<div class="codeblock phpcodeblock"><div class="title">PHP Code:</div><div class="body"><div dir="ltr"><code><span style="color: #0000BB">sscanf</span><span style="color: #007700">(</span><span style="color: #0000BB">params</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">"U(-1)"</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">id</span><span style="color: #007700">);<br />if&nbsp;(</span><span style="color: #0000BB">id&nbsp;</span><span style="color: #007700">==&nbsp;-</span><span style="color: #0000BB">1</span><span style="color: #007700">)<br />{<br /></span><span style="color: #0000BB"> &nbsp; </span><span style="color: #FF8000">//&nbsp;No&nbsp;player&nbsp;was&nbsp;entered.<br /></span><span style="color: #007700">}<br />else&nbsp;if&nbsp;(</span><span style="color: #0000BB">id&nbsp;</span><span style="color: #007700">==&nbsp;</span><span style="color: #0000BB">INVALID_PLAYER_ID</span><span style="color: #007700">)<br /></span><span style="color: #0000BB"> &nbsp; </span><span style="color: #FF8000">//&nbsp;Entered&nbsp;player&nbsp;is&nbsp;not&nbsp;connected.<br /></span><span style="color: #007700">}&nbsp;<br /></span></code></div></div></div><br />
See the section on options for more details.<br />
<br />
Users can now optionally return an ARRAY of users instead of just one. This array is just a list of matched IDs, followed by "INVALID_PLAYER_ID". Given the following players:<br />
<br />
<div class="codeblock"><div class="title">Code:</div><div class="body" dir="ltr"><code>0) Y_Less<br />
1) [CLAN]Y_Less<br />
2) Jake<br />
3) Alex<br />
4) Hass</code></div></div><br />
This code:<br />
<br />
<div class="codeblock phpcodeblock"><div class="title">PHP Code:</div><div class="body"><div dir="ltr"><code><span style="color: #007700">new&nbsp;</span><span style="color: #0000BB">ids</span><span style="color: #007700">[</span><span style="color: #0000BB">3</span><span style="color: #007700">],&nbsp;</span><span style="color: #0000BB">i</span><span style="color: #007700">;<br />if&nbsp;(</span><span style="color: #0000BB">sscanf</span><span style="color: #007700">(</span><span style="color: #DD0000">"Le"</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">"?&#x26;tMATCH_NAME_PARTIAL=1&#x26;tu[3]"</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">ids</span><span style="color: #007700">))&nbsp;</span><span style="color: #0000BB">printf</span><span style="color: #007700">(</span><span style="color: #DD0000">"Error&nbsp;in&nbsp;input"</span><span style="color: #007700">);<br />for&nbsp;(</span><span style="color: #0000BB">i&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">0</span><span style="color: #007700">;&nbsp;</span><span style="color: #0000BB">ids</span><span style="color: #007700">[</span><span style="color: #0000BB">i</span><span style="color: #007700">]&nbsp;!=&nbsp;</span><span style="color: #0000BB">INVALID_PLAYER_ID</span><span style="color: #007700">;&nbsp;++</span><span style="color: #0000BB">i</span><span style="color: #007700">)<br />{<br /></span><span style="color: #0000BB"> &nbsp; if&nbsp;</span><span style="color: #007700">(</span><span style="color: #0000BB">ids</span><span style="color: #007700">[</span><span style="color: #0000BB">i</span><span style="color: #007700">]&nbsp;==&nbsp;</span><span style="color: #0000BB">cellmin</span><span style="color: #007700">)<br /></span><span style="color: #0000BB"> &nbsp; </span><span style="color: #007700">{<br /></span><span style="color: #0000BB"> &nbsp; &nbsp; &nbsp; printf</span><span style="color: #007700">(</span><span style="color: #DD0000">"Too&nbsp;many&nbsp;matches"</span><span style="color: #007700">);<br /></span><span style="color: #0000BB"> &nbsp; &nbsp; &nbsp; break</span><span style="color: #007700">;<br /></span><span style="color: #0000BB"> &nbsp; </span><span style="color: #007700">}<br /></span><span style="color: #0000BB"> &nbsp; printf</span><span style="color: #007700">(</span><span style="color: #DD0000">"id&nbsp;=&nbsp;%d"</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">ids</span><span style="color: #007700">[</span><span style="color: #0000BB">i</span><span style="color: #007700">]);<br />}<br />if&nbsp;(</span><span style="color: #0000BB">i&nbsp;</span><span style="color: #007700">==&nbsp;</span><span style="color: #0000BB">0</span><span style="color: #007700">)&nbsp;</span><span style="color: #0000BB">printf</span><span style="color: #007700">(</span><span style="color: #DD0000">"No&nbsp;matching&nbsp;players&nbsp;found."</span><span style="color: #007700">);&nbsp;<br /></span></code></div></div></div><br />
Will output:<br />
<br />
<div class="codeblock"><div class="title">Code:</div><div class="body" dir="ltr"><code>id = 0<br />
id = 1<br />
Too many matches</code></div></div><br />
Searching "Les" instead will give:<br />
<br />
<div class="codeblock"><div class="title">Code:</div><div class="body" dir="ltr"><code>id = 0<br />
id = 1</code></div></div><br />
And searching without "MATCH_NAME_PARTIAL" will give:<br />
<br />
<div class="codeblock"><div class="title">Code:</div><div class="body" dir="ltr"><code>No matching players found.</code></div></div><br />
Basically, if an array of size "N" is passed, this code will return the first N-1 results. If there are less than "N" players whose name matches the given name then that many players will be returned and the next slot will be "INVALID_PLAYER_ID" to indicate the end of the list. On the other hand if there are MORE than "N - 1" players whose name matches the given pattern, then the last slot will be "cellmin" to indicate this fact.<br />
<br />
When combined with "U" and returning the default, the first slot is always exactly the default value (even if that's not a valid connected player) and the next slot is always "INVALID_PLAYER_ID".<br />
<br />
Note also that user arrays can't be combined with normal arrays or enums, but normal single-return user specifiers still can be.<br />
<br />
   <ul class="mycode_list"><li><span style="font-weight: bold;" class="mycode_b"><span style="color: red;" class="mycode_color"><span style="text-decoration: underline;" class="mycode_u"><span style="color: green;" class="mycode_color">Custom (kustom) specifiers</span></span></span></span><br />
</li>
</ul>
<br />
The latest version of sscanf adds a new "k" specifier to allow you to define your own specifers in PAWN:<br />
<br />
<div class="codeblock phpcodeblock"><div class="title">PHP Code:</div><div class="body"><div dir="ltr"><code><span style="color: #0000BB">SSCANF</span><span style="color: #007700">:</span><span style="color: #0000BB">playerstate</span><span style="color: #007700">(</span><span style="color: #0000BB">string</span><span style="color: #007700">[])<br />{<br /></span><span style="color: #0000BB"> &nbsp; if&nbsp;</span><span style="color: #007700">(</span><span style="color: #DD0000">'0'&nbsp;</span><span style="color: #007700">&#x26;t=&nbsp;</span><span style="color: #0000BB">string</span><span style="color: #007700">[</span><span style="color: #0000BB">0</span><span style="color: #007700">]&nbsp;&#x26;t=&nbsp;</span><span style="color: #DD0000">'9'</span><span style="color: #007700">)<br /></span><span style="color: #0000BB"> &nbsp; </span><span style="color: #007700">{<br /></span><span style="color: #0000BB"> &nbsp; &nbsp; &nbsp; new<br /> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; ret&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">strval</span><span style="color: #007700">(string);<br /></span><span style="color: #0000BB"> &nbsp; &nbsp; &nbsp; if&nbsp;</span><span style="color: #007700">(</span><span style="color: #0000BB">0&nbsp;</span><span style="color: #007700">&#x26;t=&nbsp;</span><span style="color: #0000BB">ret&nbsp;</span><span style="color: #007700">&#x26;t=&nbsp;</span><span style="color: #0000BB">9</span><span style="color: #007700">)<br /></span><span style="color: #0000BB"> &nbsp; &nbsp; &nbsp; </span><span style="color: #007700">{<br /></span><span style="color: #0000BB"> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; return&nbsp;ret</span><span style="color: #007700">;<br /></span><span style="color: #0000BB"> &nbsp; &nbsp; &nbsp; </span><span style="color: #007700">}<br /></span><span style="color: #0000BB"> &nbsp; </span><span style="color: #007700">}<br /></span><span style="color: #0000BB"> &nbsp; else&nbsp;</span><span style="color: #007700">if&nbsp;(!</span><span style="color: #0000BB">strcmp</span><span style="color: #007700">(</span><span style="color: #0000BB">string</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">"PLAYER_STATE_NONE"</span><span style="color: #007700">))&nbsp;return&nbsp;</span><span style="color: #0000BB">0</span><span style="color: #007700">;<br /></span><span style="color: #0000BB"> &nbsp; else&nbsp;</span><span style="color: #007700">if&nbsp;(!</span><span style="color: #0000BB">strcmp</span><span style="color: #007700">(</span><span style="color: #0000BB">string</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">"PLAYER_STATE_ONFOOT"</span><span style="color: #007700">))&nbsp;return&nbsp;</span><span style="color: #0000BB">1</span><span style="color: #007700">;<br /></span><span style="color: #0000BB"> &nbsp; else&nbsp;</span><span style="color: #007700">if&nbsp;(!</span><span style="color: #0000BB">strcmp</span><span style="color: #007700">(</span><span style="color: #0000BB">string</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">"PLAYER_STATE_DRIVER"</span><span style="color: #007700">))&nbsp;return&nbsp;</span><span style="color: #0000BB">2</span><span style="color: #007700">;<br /></span><span style="color: #0000BB"> &nbsp; else&nbsp;</span><span style="color: #007700">if&nbsp;(!</span><span style="color: #0000BB">strcmp</span><span style="color: #007700">(</span><span style="color: #0000BB">string</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">"PLAYER_STATE_PASSENGER"</span><span style="color: #007700">))&nbsp;return&nbsp;</span><span style="color: #0000BB">3</span><span style="color: #007700">;<br /></span><span style="color: #0000BB"> &nbsp; else&nbsp;</span><span style="color: #007700">if&nbsp;(!</span><span style="color: #0000BB">strcmp</span><span style="color: #007700">(</span><span style="color: #0000BB">string</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">"PLAYER_STATE_WASTED"</span><span style="color: #007700">))&nbsp;return&nbsp;</span><span style="color: #0000BB">7</span><span style="color: #007700">;<br /></span><span style="color: #0000BB"> &nbsp; else&nbsp;</span><span style="color: #007700">if&nbsp;(!</span><span style="color: #0000BB">strcmp</span><span style="color: #007700">(</span><span style="color: #0000BB">string</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">"PLAYER_STATE_SPAWNED"</span><span style="color: #007700">))&nbsp;return&nbsp;</span><span style="color: #0000BB">8</span><span style="color: #007700">;<br /></span><span style="color: #0000BB"> &nbsp; else&nbsp;</span><span style="color: #007700">if&nbsp;(!</span><span style="color: #0000BB">strcmp</span><span style="color: #007700">(</span><span style="color: #0000BB">string</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">"PLAYER_STATE_SPECTATING"</span><span style="color: #007700">))&nbsp;return&nbsp;</span><span style="color: #0000BB">9</span><span style="color: #007700">;<br />}&nbsp;<br /></span></code></div></div></div><br />
The code above, when added to the top level of your mode, will add the "playerstate" specifier, allowing you to do:<br />
<br />
<div class="codeblock phpcodeblock"><div class="title">PHP Code:</div><div class="body"><div dir="ltr"><code><span style="color: #0000BB">sscanf</span><span style="color: #007700">(</span><span style="color: #0000BB">params</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">"uk&#x26;tplayerstate&#x26;t"</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">playerid</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">state</span><span style="color: #007700">);&nbsp;<br /></span></code></div></div></div><br />
This system supports optional custom specifiers with no additional PAWN code:<br />
<br />
<div class="codeblock phpcodeblock"><div class="title">PHP Code:</div><div class="body"><div dir="ltr"><code><span style="color: #0000BB">sscanf</span><span style="color: #007700">(</span><span style="color: #0000BB">params</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">"uK&#x26;tplayerstate&#x26;t(PLAYER_STATE_NONE)"</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">playerid</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">state</span><span style="color: #007700">);&nbsp;<br /></span></code></div></div></div><br />
The new version of "sscanf2.inc" includes functions for "k&#x26;tweapon&#x26;t" and "k&#x26;tvehicle&#x26;t" allowing you to enter either the ID or name and get the ID back, but both are VERY basic at the moment and I expect other people will improve on them.<br />
<br />
Note that custom specifiers are not supported in either arrays or enumerations.<br />
<br />
Note also that custom specifiers always take a string input and always return a number, but this can be a Float, bool, or any other single cell tag type.<br />
<br />
The optional kustom specifier "K" takes a default value that is NOT (as of sscanf 2.8) parsed by the given callback:<br />
<br />
<div class="codeblock"><div class="title">Code:</div><div class="body" dir="ltr"><code>K&#x26;tvehicle&#x26;t(999)</code></div></div><br />
"999" is NOT a valid vehicle model, but if no other value is supplied then 999 will be returned, allowing you to differentiate between the user entering an invalid vehicle and not entering anything at all.<br />
<br />
Also as of sscanf 2.8, "k" can be used in both arrays and enums.<br />
<br />
<span style="font-size: xx-large;" class="mycode_size"><span style="font-weight: bold;" class="mycode_b"><span style="color: red;" class="mycode_color"><span style="text-decoration: underline;" class="mycode_u"><span style="color: green;" class="mycode_color">Options</span></span></span></span></span><br />
<br />
The latest version of sscanf introduces several options that can be used to customise the way in which sscanf operates. There are two ways of setting these options - globally and locally:<br />
<br />
<div class="codeblock phpcodeblock"><div class="title">PHP Code:</div><div class="body"><div dir="ltr"><code><span style="color: #0000BB">SSCANF_Option</span><span style="color: #007700">(</span><span style="color: #0000BB">SSCANF_QUIET</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">1</span><span style="color: #007700">);&nbsp;<br /></span></code></div></div></div><br />
This sets the "SSCANF_QUIET" option globally. Every time "sscanf" is called the option (see below) will be in effect. Note that the use of:<br />
<br />
<div class="codeblock"><div class="title">Code:</div><div class="body" dir="ltr"><code>SSCANF_QUIET</code></div></div><br />
Instead of a string as:<br />
<br />
<div class="codeblock"><div class="title">Code:</div><div class="body" dir="ltr"><code>SSCANF_QUIET</code></div></div><br />
Is entirely valid here - all the options are defined in the sscanf2 include already.<br />
<br />
Alternatively you can use "?" to specify an option locally - i.e. only for the current sscanf call:<br />
<br />
<div class="codeblock phpcodeblock"><div class="title">PHP Code:</div><div class="body"><div dir="ltr"><code><span style="color: #0000BB">sscanf</span><span style="color: #007700">(</span><span style="color: #0000BB">params</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">"si"</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">str</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">num</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">sscanf</span><span style="color: #007700">(</span><span style="color: #0000BB">params</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">"?&#x26;tSSCANF_QUIET=1&#x26;tsi"</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">str</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">num</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">sscanf</span><span style="color: #007700">(</span><span style="color: #0000BB">params</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">"si"</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">str</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">num</span><span style="color: #007700">);&nbsp;<br /></span></code></div></div></div><br />
Obviously "s" without a length is deprecated, and the first and last "sscanf" calls will give a warning in the console, but the second one won't as for just that one call prints have been disabled. The following code disables prints globally then enables them locally:<br />
<br />
<div class="codeblock phpcodeblock"><div class="title">PHP Code:</div><div class="body"><div dir="ltr"><code><span style="color: #0000BB">SSCANF_Option</span><span style="color: #007700">(</span><span style="color: #0000BB">SSCANF_QUIET</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">1</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">sscanf</span><span style="color: #007700">(</span><span style="color: #0000BB">params</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">"si"</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">str</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">num</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">sscanf</span><span style="color: #007700">(</span><span style="color: #0000BB">params</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">"?&#x26;tSSCANF_QUIET=0&#x26;tsi"</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">str</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">num</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">sscanf</span><span style="color: #007700">(</span><span style="color: #0000BB">params</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">"si"</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">str</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">num</span><span style="color: #007700">);&nbsp;<br /></span></code></div></div></div><br />
Note that disabling prints is a VERY bad idea when developing code as you open yourself up to unreported buffer overflows when no length is specified on strings less than 32 cells (the default length).<br />
<br />
To specify multiple options requires multiple calls:<br />
<br />
<div class="codeblock phpcodeblock"><div class="title">PHP Code:</div><div class="body"><div dir="ltr"><code><span style="color: #0000BB">SSCANF_Option</span><span style="color: #007700">(</span><span style="color: #0000BB">SSCANF_QUIET</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">1</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">SSCANF_Option</span><span style="color: #007700">(</span><span style="color: #0000BB">MATCH_NAME_PARTIAL</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">0</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">sscanf</span><span style="color: #007700">(</span><span style="color: #0000BB">params</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">"?&#x26;tSSCANF_QUIET=1&#x26;t?&#x26;tMATCH_NAME_PARTIAL=0&#x26;ts[10]i"</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">str</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">num</span><span style="color: #007700">);&nbsp;<br /></span></code></div></div></div><br />
The options are:<br />
<br />
   <ul class="mycode_list"><li><span style="font-weight: bold;" class="mycode_b"><span style="color: red;" class="mycode_color"><span style="text-decoration: underline;" class="mycode_u"><span style="color: green;" class="mycode_color">OLD_DEFAULT_NAME:</span></span></span></span><br />
</li>
</ul>
<br />
   The behaviour of "U", "Q", and "R" have been changed to take any number as a default, instead of a connected player. Setting "OLD_DEFAULT_NAME" to "1" will revert to the old version.<br />
<br />
   <ul class="mycode_list"><li><span style="font-weight: bold;" class="mycode_b"><span style="color: red;" class="mycode_color"><span style="text-decoration: underline;" class="mycode_u"><span style="color: green;" class="mycode_color">MATCH_NAME_PARTIAL:</span></span></span></span><br />
</li>
</ul>
<br />
   Currently sscanf will search for players by name, and will ALWAYS search for player whose name STARTS with the specified string. If you have, say "[CLAN]Y_Less" connected and someone types "Y_Less", sscanf will not find "[CLAN]Y_Less" because there name doesn't start with the specified name. This option, when set to 1, will search ANYWHERE in the player's name for the given string.<br />
<br />
   <ul class="mycode_list"><li><span style="font-weight: bold;" class="mycode_b"><span style="color: red;" class="mycode_color"><span style="text-decoration: underline;" class="mycode_u"><span style="color: green;" class="mycode_color">CELLMIN_ON_MATCHES:</span></span></span></span><br />
</li>
</ul>
<br />
   Whatever the value of "MATCH_NAME_PARTIAL", the first found player will always be returned, so if you do a search for "_" on an RP server, you could get almost anyone. To detect this case, if more than one player will match the specified string then sscanf will return an ID of "cellmin" instead. This can be combined with "U" for a lot more power:<br />
<br />
   <div class="codeblock phpcodeblock"><div class="title">PHP Code:</div><div class="body"><div dir="ltr"><code><span style="color: #0000BB"> &nbsp; sscanf</span><span style="color: #007700">(</span><span style="color: #0000BB">params</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">"?&#x26;tCELLMIN_ON_MATCHES=1&#x26;tU(-1)"</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">id</span><span style="color: #007700">);<br /></span><span style="color: #0000BB"> &nbsp; if&nbsp;</span><span style="color: #007700">(</span><span style="color: #0000BB">id&nbsp;</span><span style="color: #007700">==&nbsp;-</span><span style="color: #0000BB">1</span><span style="color: #007700">)<br /></span><span style="color: #0000BB"> &nbsp; </span><span style="color: #007700">{<br /></span><span style="color: #0000BB"> &nbsp; &nbsp; &nbsp; </span><span style="color: #FF8000">//&nbsp;No&nbsp;player&nbsp;was&nbsp;entered.<br /></span><span style="color: #0000BB"> &nbsp; </span><span style="color: #007700">}<br /></span><span style="color: #0000BB"> &nbsp; else&nbsp;</span><span style="color: #007700">if&nbsp;(</span><span style="color: #0000BB">id&nbsp;</span><span style="color: #007700">==&nbsp;</span><span style="color: #0000BB">cellmin</span><span style="color: #007700">)<br /></span><span style="color: #0000BB"> &nbsp; </span><span style="color: #007700">{<br /></span><span style="color: #0000BB"> &nbsp; &nbsp; &nbsp; </span><span style="color: #FF8000">//&nbsp;Multiple&nbsp;matches&nbsp;found<br /></span><span style="color: #0000BB"> &nbsp; </span><span style="color: #007700">}<br /></span><span style="color: #0000BB"> &nbsp; else&nbsp;</span><span style="color: #007700">if&nbsp;(</span><span style="color: #0000BB">id&nbsp;</span><span style="color: #007700">==&nbsp;</span><span style="color: #0000BB">INVALID_PLAYER_ID</span><span style="color: #007700">)<br /></span><span style="color: #0000BB"> &nbsp; </span><span style="color: #007700">{<br /></span><span style="color: #0000BB"> &nbsp; &nbsp; &nbsp; </span><span style="color: #FF8000">//&nbsp;Entered&nbsp;player&nbsp;is&nbsp;not&nbsp;connected.<br /></span><span style="color: #0000BB"> &nbsp; </span><span style="color: #007700">}<br /></span><span style="color: #0000BB"> &nbsp; else<br /> &nbsp; </span><span style="color: #007700">{<br /></span><span style="color: #0000BB"> &nbsp; &nbsp; &nbsp; </span><span style="color: #FF8000">//&nbsp;Found&nbsp;just&nbsp;one&nbsp;player.<br /></span><span style="color: #0000BB"> &nbsp; </span><span style="color: #007700">}<br /></span><span style="color: #0000BB"> &nbsp; &nbsp;<br /></span></code></div></div></div><br />
   <ul class="mycode_list"><li><span style="font-weight: bold;" class="mycode_b"><span style="color: red;" class="mycode_color"><span style="text-decoration: underline;" class="mycode_u"><span style="color: green;" class="mycode_color">SSCANF_QUIET:</span></span></span></span><br />
</li>
</ul>
<br />
   Don't print any errors to the console. REALLY not recommended unless you KNOW your code is stable and in production.<br />
<br />
   <ul class="mycode_list"><li><span style="font-weight: bold;" class="mycode_b"><span style="color: red;" class="mycode_color"><span style="text-decoration: underline;" class="mycode_u"><span style="color: green;" class="mycode_color">OLD_DEFAULT_KUSTOM:</span></span></span></span><br />
</li>
</ul>
<br />
   As with "U", "K" used to require a valid identifier as the default and would parse it using the specified callback, so this would NOT work:<br />
<br />
   <div class="codeblock"><div class="title">Code:</div><div class="body" dir="ltr"><code>   K&#x26;tvehicle&#x26;t(Veyron)<br />
   </code></div></div><br />
   Because that is not a valid vehicle name in GTA. The new version now JUST takes a number and returns that regardless:<br />
<br />
   [code<br />
   K&#x26;tvehicle&#x26;t(9999)<br />
   [/code]<br />
<br />
   This setting reverts to the old behaviour.<br />
<br />
<span style="font-size: xx-large;" class="mycode_size"><span style="font-weight: bold;" class="mycode_b"><span style="color: red;" class="mycode_color"><span style="text-decoration: underline;" class="mycode_u"><span style="color: green;" class="mycode_color">All specifiers</span></span></span></span></span><br />
<br />
For quick reference, here is a list of ALL the specifiers and their use:<br />
<br />
<div class="codeblock"><div class="title">Code:</div><div class="body" dir="ltr"><code>[b][u]Format[/u][/b] [b][u]Use[/u][/b]<br />
L(true/false) Optional logical truthity<br />
l Logical truthity<br />
K&#x26;tcallback&#x26;t(any format number)        Optional custom operator<br />
k&#x26;tcallback&#x26;t Custom operator<br />
B(binary) Optional binary number<br />
b Binary number<br />
N(any format number) Optional number<br />
n Number<br />
C(character) Optional character<br />
c Character<br />
I(integer) Optional integer<br />
i Integer<br />
D(integer) Optional integer<br />
d Integer<br />
H(hex value) Optional hex number<br />
h Hex number<br />
O(octal value) Optional octal value<br />
o Octal value<br />
F(float) Optional floating point number<br />
f Floating point number<br />
G(float/INFINITY/-INFINITY/NAN/NAN_E) Optional float with IEEE definitions<br />
g Float with IEEE definitions<br />
{ Open quiet section<br />
} Close quiet section<br />
P&#x26;tdelimiters&#x26;t Multiple delimiters change<br />
p&#x26;tdelimiter&#x26;t Delimiter change<br />
Z(string)[length] Invalid optional string<br />
z(string)[length] Deprecated optional string<br />
S(string)[length] Optional string<br />
s[length] String<br />
U(any format number) Optional user (bot/player)<br />
u User (bot/player)<br />
Q(any format number) Optional bot (bot)<br />
q Bot (bot)<br />
R(any format number) Optional player (player)<br />
r Player (player)<br />
A&#x26;ttype&#x26;t(default)[length] Optional array of given type<br />
a&#x26;ttype&#x26;t[length] Array of given type<br />
E&#x26;tspecification&#x26;t(default) Optional enumeration of given layout<br />
e&#x26;tspecification&#x26;t Enumeration of given layout<br />
'string' Search string<br />
% Deprecated optional specifier prefix<br />
? Local options specifier</code></div></div><br />
<span style="font-size: xx-large;" class="mycode_size"><span style="font-weight: bold;" class="mycode_b"><span style="color: red;" class="mycode_color"><span style="text-decoration: underline;" class="mycode_u"><span style="color: green;" class="mycode_color">"extract"</span></span></span></span></span><br />
<br />
I've written some (extendable) macros so you can do:<br />
<br />
<div class="codeblock phpcodeblock"><div class="title">PHP Code:</div><div class="body"><div dir="ltr"><code><span style="color: #0000BB">extract&nbsp;params&nbsp;</span><span style="color: #007700">-&#x26;t&nbsp;</span><span style="color: #0000BB">new&nbsp;a</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">string</span><span style="color: #007700">:</span><span style="color: #0000BB">b</span><span style="color: #007700">[</span><span style="color: #0000BB">32</span><span style="color: #007700">],&nbsp;</span><span style="color: #0000BB">Float</span><span style="color: #007700">:</span><span style="color: #0000BB">c</span><span style="color: #007700">;&nbsp;else<br />{<br /></span><span style="color: #0000BB"> &nbsp; return&nbsp;SendClientMessage</span><span style="color: #007700">(</span><span style="color: #0000BB">playerid</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">COLOUR_RED</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">"FAIL!"</span><span style="color: #007700">);<br />}&nbsp;<br /></span></code></div></div></div><br />
This will compile as:<br />
<br />
<div class="codeblock phpcodeblock"><div class="title">PHP Code:</div><div class="body"><div dir="ltr"><code><span style="color: #007700">new&nbsp;</span><span style="color: #0000BB">a</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">string</span><span style="color: #007700">:</span><span style="color: #0000BB">b</span><span style="color: #007700">[</span><span style="color: #0000BB">32</span><span style="color: #007700">],&nbsp;</span><span style="color: #0000BB">Float</span><span style="color: #007700">:</span><span style="color: #0000BB">c</span><span style="color: #007700">;<br />if&nbsp;(</span><span style="color: #0000BB">unformat</span><span style="color: #007700">(</span><span style="color: #0000BB">params</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">"is[32]f"</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">a</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">b</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">c</span><span style="color: #007700">))<br />{<br /></span><span style="color: #0000BB"> &nbsp; return&nbsp;SendClientMessage</span><span style="color: #007700">(</span><span style="color: #0000BB">playerid</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">COLOUR_RED</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">"FAIL!"</span><span style="color: #007700">);<br />}&nbsp;<br /></span></code></div></div></div><br />
Note that "unformat" is the same as "sscanf", also note that the "SendClientMessage" part is optional:<br />
<br />
<div class="codeblock phpcodeblock"><div class="title">PHP Code:</div><div class="body"><div dir="ltr"><code><span style="color: #0000BB">extract&nbsp;params&nbsp;</span><span style="color: #007700">-&#x26;t&nbsp;</span><span style="color: #0000BB">new&nbsp;a</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">string</span><span style="color: #007700">:</span><span style="color: #0000BB">b</span><span style="color: #007700">[</span><span style="color: #0000BB">32</span><span style="color: #007700">],&nbsp;</span><span style="color: #0000BB">Float</span><span style="color: #007700">:</span><span style="color: #0000BB">c</span><span style="color: #007700">;&nbsp;<br /></span></code></div></div></div><br />
Will simply compile as:<br />
<br />
<div class="codeblock phpcodeblock"><div class="title">PHP Code:</div><div class="body"><div dir="ltr"><code><span style="color: #007700">new&nbsp;</span><span style="color: #0000BB">a</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">string</span><span style="color: #007700">:</span><span style="color: #0000BB">b</span><span style="color: #007700">[</span><span style="color: #0000BB">32</span><span style="color: #007700">],&nbsp;</span><span style="color: #0000BB">Float</span><span style="color: #007700">:</span><span style="color: #0000BB">c</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">unformat</span><span style="color: #007700">(</span><span style="color: #0000BB">params</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">"is[32]f"</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">a</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">b</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">c</span><span style="color: #007700">);&nbsp;<br /></span></code></div></div></div><br />
Basically it just simplifies sscanf a little bit (IMHO). I like new operators and syntax, hence this, examples:<br />
<br />
<div class="codeblock phpcodeblock"><div class="title">PHP Code:</div><div class="body"><div dir="ltr"><code><span style="color: #FF8000">//&nbsp;An&nbsp;int&nbsp;and&nbsp;a&nbsp;float.<br /></span><span style="color: #0000BB">extract&nbsp;params&nbsp;</span><span style="color: #007700">-&#x26;t&nbsp;</span><span style="color: #0000BB">new&nbsp;a</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">Float</span><span style="color: #007700">:</span><span style="color: #0000BB">b</span><span style="color: #007700">;<br /></span><span style="color: #FF8000">//&nbsp;An&nbsp;int&nbsp;and&nbsp;an&nbsp;OPTIONAL&nbsp;float.<br /></span><span style="color: #0000BB">extract&nbsp;params&nbsp;</span><span style="color: #007700">-&#x26;t&nbsp;</span><span style="color: #0000BB">new&nbsp;a</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">Float</span><span style="color: #007700">:</span><span style="color: #0000BB">b&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">7.0</span><span style="color: #007700">;<br /></span><span style="color: #FF8000">//&nbsp;An&nbsp;int&nbsp;and&nbsp;a&nbsp;string.<br /></span><span style="color: #0000BB">extract&nbsp;params&nbsp;</span><span style="color: #007700">-&#x26;t&nbsp;</span><span style="color: #0000BB">new&nbsp;a</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">string</span><span style="color: #007700">:</span><span style="color: #0000BB">s</span><span style="color: #007700">[</span><span style="color: #0000BB">32</span><span style="color: #007700">];<br /></span><span style="color: #FF8000">//&nbsp;An&nbsp;int&nbsp;and&nbsp;a&nbsp;playerid.<br /></span><span style="color: #0000BB">extract&nbsp;params&nbsp;</span><span style="color: #007700">-&#x26;t&nbsp;</span><span style="color: #0000BB">new&nbsp;a</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">player</span><span style="color: #007700">:</span><span style="color: #0000BB">b</span><span style="color: #007700">;&nbsp;<br /></span></code></div></div></div><br />
As I say, the syntax is extendable, so to add hex numbers you would do:<br />
<br />
<div class="codeblock phpcodeblock"><div class="title">PHP Code:</div><div class="body"><div dir="ltr"><code><span style="color: #FF8000">#define&nbsp;hex_EXTRO:%0##%1,%2|||%3=%9|||%4,%5)&nbsp;EXTRY:%0##%1H"("#%9")"#,%2,%3|||%4|||%5)<br />#define&nbsp;hex_EXTRN:%0##%1,%2|||%3|||%4,%5)&nbsp;EXTRY:%0##%1h,%2,%3|||%4|||%5)<br />#define&nbsp;hex_EXTRW:%0##%1,%2|||%3[%7]|||%4,%5)&nbsp;EXTRY:%0##%1a&#x26;th&#x26;t[%7],%2,%3|||%4|||%5)&nbsp;<br /></span></code></div></div></div><br />
That will add the tag "hex" to the system. Yes, the lines look complicated (because they are), but the ONLY things you need to change are the name before the underscore and the letter near the middle ("H", "h" and "a&#x26;th&#x26;t" in the examples above for "optional", "required" and "required array" (no optional arrays yet besides strings)).<br />
<br />
New examples (with "hex" added):<br />
<br />
<div class="codeblock phpcodeblock"><div class="title">PHP Code:</div><div class="body"><div dir="ltr"><code><span style="color: #FF8000">//&nbsp;A&nbsp;hex&nbsp;number&nbsp;and&nbsp;a&nbsp;player.<br /></span><span style="color: #0000BB">extract&nbsp;params&nbsp;</span><span style="color: #007700">-&#x26;t&nbsp;</span><span style="color: #0000BB">new&nbsp;hex</span><span style="color: #007700">:</span><span style="color: #0000BB">a</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">player</span><span style="color: #007700">:</span><span style="color: #0000BB">b</span><span style="color: #007700">;<br /></span><span style="color: #FF8000">//&nbsp;32&nbsp;numbers&nbsp;then&nbsp;32&nbsp;players.<br /></span><span style="color: #0000BB">extract&nbsp;params&nbsp;</span><span style="color: #007700">-&#x26;t&nbsp;</span><span style="color: #0000BB">new&nbsp;a</span><span style="color: #007700">[</span><span style="color: #0000BB">32</span><span style="color: #007700">],&nbsp;</span><span style="color: #0000BB">player</span><span style="color: #007700">:</span><span style="color: #0000BB">b</span><span style="color: #007700">[</span><span style="color: #0000BB">32</span><span style="color: #007700">];<br /></span><span style="color: #FF8000">//&nbsp;11&nbsp;floats,&nbsp;an&nbsp;optional&nbsp;string,&nbsp;then&nbsp;an&nbsp;optional&nbsp;hex&nbsp;number.<br /></span><span style="color: #0000BB">extract&nbsp;params&nbsp;</span><span style="color: #007700">-&#x26;t&nbsp;</span><span style="color: #0000BB">new&nbsp;Float</span><span style="color: #007700">:</span><span style="color: #0000BB">f</span><span style="color: #007700">[</span><span style="color: #0000BB">11</span><span style="color: #007700">],&nbsp;</span><span style="color: #0000BB">string</span><span style="color: #007700">:</span><span style="color: #0000BB">s</span><span style="color: #007700">[</span><span style="color: #0000BB">12</span><span style="color: #007700">]&nbsp;=&nbsp;</span><span style="color: #DD0000">"optional"</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">hex</span><span style="color: #007700">:</span><span style="color: #0000BB">end&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">0xFF</span><span style="color: #007700">;&nbsp;<br /></span></code></div></div></div><br />
The code is actually surprisingly simple (I developed another new technique to simplify my "tag" macros and it paid off big style here). By default "Float", "string", "player" and "_" (i.e. no tag) are supported, and their individual letter definitions take up the majority of the code as demonstrated with the "hex" addition above. Note that "string:" is now used extensively in my code to differentiate from tagless arrays in cases like this, it is removed automatically but "player:" and "hex:" are not so you may wish to add:<br />
<br />
<div class="codeblock phpcodeblock"><div class="title">PHP Code:</div><div class="body"><div dir="ltr"><code><span style="color: #FF8000">#define&nbsp;player:<br />#define&nbsp;hex:&nbsp;<br /></span></code></div></div></div><br />
To avoid tag mismatch warnings (to remove them AFTER the compiler has used them to determine the correct specifier).<br />
<br />
The very first example had an "else", this will turn:<br />
<br />
<div class="codeblock phpcodeblock"><div class="title">PHP Code:</div><div class="body"><div dir="ltr"><code><span style="color: #0000BB">unformat</span><span style="color: #007700">(</span><span style="color: #0000BB">params</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">"ii"</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">a</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">b</span><span style="color: #007700">);&nbsp;<br /></span></code></div></div></div><br />
In to:<br />
<br />
<div class="codeblock phpcodeblock"><div class="title">PHP Code:</div><div class="body"><div dir="ltr"><code><span style="color: #007700">if&nbsp;(</span><span style="color: #0000BB">unformat</span><span style="color: #007700">(</span><span style="color: #0000BB">params</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">"ii"</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">a</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">b</span><span style="color: #007700">))&nbsp;<br /></span></code></div></div></div><br />
You MUST put the "else" on the same line as "extract" for it to be detected, but then you can use normal single or multi-line statements. This is to cover common command use cases, you can even leave things on the same line:<br />
<br />
<div class="codeblock phpcodeblock"><div class="title">PHP Code:</div><div class="body"><div dir="ltr"><code><span style="color: #007700">else&nbsp;return&nbsp;</span><span style="color: #0000BB">SendClientMessage</span><span style="color: #007700">(</span><span style="color: #0000BB">playerid</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">0xFF0000AA</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">"Usage:&nbsp;/cmd&nbsp;&#x26;twhatever&#x26;t"</span><span style="color: #007700">);&nbsp;<br /></span></code></div></div></div><br />
There is now the ability to split by things other than space (i.e. adds "P&#x26;t?&#x26;t" to the syntax - updated from using "p" to "P"):<br />
<br />
<div class="codeblock phpcodeblock"><div class="title">PHP Code:</div><div class="body"><div dir="ltr"><code><span style="color: #0000BB">extract&nbsp;params</span><span style="color: #007700">&#x26;t|&#x26;t&nbsp;-&#x26;t&nbsp;</span><span style="color: #0000BB">new&nbsp;a</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">string</span><span style="color: #007700">:</span><span style="color: #0000BB">b</span><span style="color: #007700">[</span><span style="color: #0000BB">32</span><span style="color: #007700">],&nbsp;</span><span style="color: #0000BB">Float</span><span style="color: #007700">:</span><span style="color: #0000BB">c</span><span style="color: #007700">;&nbsp;<br /></span></code></div></div></div><br />
Will simply compile as:<br />
<br />
<div class="codeblock phpcodeblock"><div class="title">PHP Code:</div><div class="body"><div dir="ltr"><code><span style="color: #007700">new&nbsp;</span><span style="color: #0000BB">a</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">string</span><span style="color: #007700">:</span><span style="color: #0000BB">b</span><span style="color: #007700">[</span><span style="color: #0000BB">32</span><span style="color: #007700">],&nbsp;</span><span style="color: #0000BB">Float</span><span style="color: #007700">:</span><span style="color: #0000BB">c</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">unformat</span><span style="color: #007700">(</span><span style="color: #0000BB">params</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">"P&#x26;t|&#x26;tis[32]f"</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">a</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">b</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">c</span><span style="color: #007700">);&nbsp;<br /></span></code></div></div></div><br />
Note that for technical reasons you can use "&#x26;t-&#x26;t" (because it looks like the arrow after the "extract" keyword). You also can't use "&#x26;t;&#x26;t", "&#x26;t,&#x26;t", or "&#x26;t)&#x26;t" because of a bug with "#", but you can use any other character (most notably "&#x26;t|&#x26;t", as is popular with SQL scripts). I'm thinking of adding enums and existing variables (currently you HAVE to declare new variables), but not right now.<br />
<br />
<span style="font-size: xx-large;" class="mycode_size"><span style="font-weight: bold;" class="mycode_b"><span style="color: red;" class="mycode_color"><span style="text-decoration: underline;" class="mycode_u"><span style="color: green;" class="mycode_color">Errors/Warnings</span></span></span></span></span><br />
<br />
   <ul class="mycode_list"><li><span style="font-weight: bold;" class="mycode_b"><span style="color: red;" class="mycode_color"><span style="text-decoration: underline;" class="mycode_u"><span style="color: green;" class="mycode_color">MSVRC100.dll not found</span></span></span></span><br />
</li>
</ul>
<br />
If you get this error, DO NOT just download the dll from a random website. This is part of the "Microsoft Visual Studio Redistributable Package". This is required for many programs, but they often come with it. Download it here:<br />
<br />
<a href="http://www.microsoft.com/download/en...s.aspx?id=5555" target="_blank" rel="noopener" class="mycode_url">http://www.microsoft.com/download/en...s.aspx?id=5555</a><br />
<br />
   <ul class="mycode_list"><li><span style="font-weight: bold;" class="mycode_b"><span style="color: red;" class="mycode_color"><span style="text-decoration: underline;" class="mycode_u"><span style="color: green;" class="mycode_color">sscanf error: System not initialised</span></span></span></span><br />
</li>
</ul>
<br />
If you get this error, you need to make sure that you have recompiled ALL your scripts using the LATEST version of "sscanf2.inc". Older versions didn't really require this as they only had two natives - "sscanf" and "unformat", the new version has some other functions - you don't need to worry about them, but you must use "sscanf2.inc" so that they are correctly called. If you think you have done this and STILL get the error then try again - make sure you are using the correct version of PAWNO for example.<br />
<br />
   <ul class="mycode_list"><li><span style="font-weight: bold;" class="mycode_b"><span style="color: red;" class="mycode_color"><span style="text-decoration: underline;" class="mycode_u"><span style="color: green;" class="mycode_color">sscanf warning: String buffer overflow.</span></span></span></span><br />
</li>
</ul>
<br />
This error comes up when people try and put too much data in to a string. For example:<br />
<br />
<div class="codeblock phpcodeblock"><div class="title">PHP Code:</div><div class="body"><div dir="ltr"><code><span style="color: #007700">new&nbsp;</span><span style="color: #0000BB">str</span><span style="color: #007700">[</span><span style="color: #0000BB">10</span><span style="color: #007700">];<br /></span><span style="color: #0000BB">sscanf</span><span style="color: #007700">(</span><span style="color: #DD0000">"Hello&nbsp;there,&nbsp;how&nbsp;are&nbsp;you?"</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">"s[10]"</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">str</span><span style="color: #007700">);&nbsp;<br /></span></code></div></div></div><br />
That code will try and put the string "Hello there, how are you?" in to the variable called "str". However, "str" is only 10 cells big and can thus only hold the string "Hello ther" (with a NULL terminator). In this case, the rest of the data is ignored - which could be good or bad:<br />
<br />
<div class="codeblock phpcodeblock"><div class="title">PHP Code:</div><div class="body"><div dir="ltr"><code><span style="color: #007700">new&nbsp;</span><span style="color: #0000BB">str</span><span style="color: #007700">[</span><span style="color: #0000BB">10</span><span style="color: #007700">],&nbsp;</span><span style="color: #0000BB">num</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">sscanf</span><span style="color: #007700">(</span><span style="color: #DD0000">"Hello&nbsp;there&nbsp;you|42"</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">"p&#x26;t|&#x26;ts[10]i"</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">str</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">num</span><span style="color: #007700">);&nbsp;<br /></span></code></div></div></div><br />
In this case "num" is still correctly set to "42", but the warning is given for lost data ("e you").<br />
<br />
Currently there is nothing you can do about this from a programming side (you can't even detect it - that is a problem I intend to address), as long as you specify how much data a user should enter this will simply discard the excess, or make the destination variable large enough to handle all cases.<br />
<ul class="mycode_list"><li><span style="font-weight: bold;" class="mycode_b"><span style="color: red;" class="mycode_color"><span style="text-decoration: underline;" class="mycode_u"><span style="color: green;" class="mycode_color">sscanf warning: Optional types invalid in array specifiers, consider using 'A'.</span></span></span></span><br />
</li>
</ul>
<br />
A specifier such as:<br />
<br />
<div class="codeblock"><div class="title">Code:</div><div class="body" dir="ltr"><code>a&#x26;tI(5)&#x26;t[10]</code></div></div><br />
Has been written - here indicating an array of optional integers all with the default value "5". Instead you should use:<br />
<br />
<div class="codeblock"><div class="title">Code:</div><div class="body" dir="ltr"><code>A&#x26;ti&#x26;t(5)[10]</code></div></div><br />
This is an optional array of integers all with the default value "5", the advantage of this is that arrays can have multiple defaults:<br />
<br />
<div class="codeblock"><div class="title">Code:</div><div class="body" dir="ltr"><code>A&#x26;ti&#x26;t(5, 6)[10]</code></div></div><br />
That will set the array to "5, 6, 7, 8, 9, 10, 11, 12, 13, 14" by default, incrementing by the found difference each time.<br />
<ul class="mycode_list"><li><span style="font-weight: bold;" class="mycode_b"><span style="color: red;" class="mycode_color"><span style="text-decoration: underline;" class="mycode_u"><span style="color: green;" class="mycode_color">sscanf warning: Optional types invalid in enum specifiers, consider using 'E'.</span></span></span></span><br />
</li>
</ul>
<br />
Similar to the previous warning, A specifier such as:<br />
<br />
<div class="codeblock"><div class="title">Code:</div><div class="body" dir="ltr"><code>e&#x26;tI(5)f&#x26;t</code></div></div><br />
Is invalid, instead use:<br />
<br />
<div class="codeblock"><div class="title">Code:</div><div class="body" dir="ltr"><code>E&#x26;tif&#x26;t(42, 11.0)</code></div></div><br />
This forces ALL the parts of an enum to be optional - anything less is not possible.<br />
<br />
   <ul class="mycode_list"><li><span style="font-weight: bold;" class="mycode_b"><span style="color: red;" class="mycode_color"><span style="text-decoration: underline;" class="mycode_u"><span style="color: green;" class="mycode_color">sscanf error: Multi-dimensional arrays are not supported.</span></span></span></span><br />
</li>
</ul>
<br />
This is not allowed:<br />
<br />
<div class="codeblock phpcodeblock"><div class="title">PHP Code:</div><div class="body"><div dir="ltr"><code><span style="color: #0000BB">sscanf</span><span style="color: #007700">(</span><span style="color: #0000BB">params</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">"a&#x26;ta&#x26;ti&#x26;t[5]&#x26;t[10]"</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">arr</span><span style="color: #007700">);&nbsp;<br /></span></code></div></div></div><br />
A work-around can be done using:<br />
<br />
<div class="codeblock phpcodeblock"><div class="title">PHP Code:</div><div class="body"><div dir="ltr"><code><span style="color: #0000BB">sscanf</span><span style="color: #007700">(</span><span style="color: #0000BB">params</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">"a&#x26;ti&#x26;t[50]"</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">arr</span><span style="color: #007700">[</span><span style="color: #0000BB">0</span><span style="color: #007700">]);&nbsp;<br /></span></code></div></div></div><br />
That will correctly set up the pointers for the system.<br />
<br />
   <ul class="mycode_list"><li><span style="font-weight: bold;" class="mycode_b"><span style="color: red;" class="mycode_color"><span style="text-decoration: underline;" class="mycode_u"><span style="color: green;" class="mycode_color">sscanf error: Search strings are not supported in arrays.</span></span></span></span><br />
</li>
</ul>
<br />
This is not allowed (see the section on search strings):<br />
<br />
<div class="codeblock"><div class="title">Code:</div><div class="body" dir="ltr"><code>a&#x26;t'hello'i&#x26;t[10]</code></div></div><br />
   <ul class="mycode_list"><li><span style="font-weight: bold;" class="mycode_b"><span style="color: red;" class="mycode_color"><span style="text-decoration: underline;" class="mycode_u"><span style="color: green;" class="mycode_color">sscanf error: Delimiters are not supported in arrays.</span></span></span></span><br />
</li>
</ul>
<br />
This is not allowed:<br />
<br />
<div class="codeblock"><div class="title">Code:</div><div class="body" dir="ltr"><code>a&#x26;tp&#x26;t,&#x26;ti&#x26;t[10]</code></div></div><br />
Instead use:<br />
<br />
<div class="codeblock"><div class="title">Code:</div><div class="body" dir="ltr"><code>p&#x26;t,&#x26;ta&#x26;ti&#x26;t[10]</code></div></div><br />
   <ul class="mycode_list"><li><span style="font-weight: bold;" class="mycode_b"><span style="color: red;" class="mycode_color"><span style="text-decoration: underline;" class="mycode_u"><span style="color: green;" class="mycode_color">sscanf error: Quiet sections are not supported in arrays.</span></span></span></span><br />
</li>
</ul>
<br />
<br />
This is not allowed:<br />
<br />
<div class="codeblock"><div class="title">Code:</div><div class="body" dir="ltr"><code>a&#x26;t{i}&#x26;t[10]</code></div></div><br />
Instead use:<br />
<br />
<div class="codeblock"><div class="title">Code:</div><div class="body" dir="ltr"><code>{a&#x26;ti&#x26;t[10]}</code></div></div><br />
   <ul class="mycode_list"><li><span style="font-weight: bold;" class="mycode_b"><span style="color: red;" class="mycode_color"><span style="text-decoration: underline;" class="mycode_u"><span style="color: green;" class="mycode_color">sscanf error: Unknown format specifier '?'.</span></span></span></span><br />
</li>
</ul>
<br />
The given specifier is not known (this post contains a full list of all the specifiers near the bottom).<br />
<ul class="mycode_list"><li><span style="font-weight: bold;" class="mycode_b"><span style="color: red;" class="mycode_color"><span style="text-decoration: underline;" class="mycode_u"><span style="color: green;" class="mycode_color">sscanf warning: 'Z' doesn't exist - that would be an optional, deprecated optional string!.</span></span></span></span><br />
</li>
</ul>
<br />
You used "Z", don't; instead use "S".<br />
<br />
   <ul class="mycode_list"><li><span style="font-weight: bold;" class="mycode_b"><span style="color: red;" class="mycode_color"><span style="text-decoration: underline;" class="mycode_u"><span style="color: green;" class="mycode_color">sscanf warning: 'z' is deprecated, consider using 'S' instead.</span></span></span></span><br />
</li>
</ul>
<br />
<br />
You used "z", don't; instead use "S".<br />
<br />
   <ul class="mycode_list"><li><span style="font-weight: bold;" class="mycode_b"><span style="color: red;" class="mycode_color"><span style="text-decoration: underline;" class="mycode_u"><span style="color: green;" class="mycode_color">sscanf warning: Empty default values.</span></span></span></span><br />
</li>
</ul>
<br />
An optional specifier has been set as (for example):<br />
<br />
<div class="codeblock"><div class="title">Code:</div><div class="body" dir="ltr"><code>I()</code></div></div><br />
Instead of:<br />
<br />
<div class="codeblock"><div class="title">Code:</div><div class="body" dir="ltr"><code>I(42)</code></div></div><br />
This does not apply to strings as they can be legitimately empty.<br />
<br />
   <ul class="mycode_list"><li><span style="font-weight: bold;" class="mycode_b"><span style="color: red;" class="mycode_color"><span style="text-decoration: underline;" class="mycode_u"><span style="color: green;" class="mycode_color">sscanf warning: Unclosed default value.</span></span></span></span><br />
</li>
</ul>
<br />
You have a default value on an optional specifier that looks like:<br />
<br />
<div class="codeblock"><div class="title">Code:</div><div class="body" dir="ltr"><code>I(42</code></div></div><br />
Instead of:<br />
<br />
<div class="codeblock"><div class="title">Code:</div><div class="body" dir="ltr"><code>I(42)</code></div></div><br />
   <ul class="mycode_list"><li><span style="font-weight: bold;" class="mycode_b"><span style="color: red;" class="mycode_color"><span style="text-decoration: underline;" class="mycode_u"><span style="color: green;" class="mycode_color">sscanf warning: No default value found.</span></span></span></span><br />
</li>
</ul>
<br />
You have no default value on an optional specifier:<br />
<br />
<div class="codeblock"><div class="title">Code:</div><div class="body" dir="ltr"><code>I</code></div></div><br />
Instead of:<br />
<br />
<div class="codeblock"><div class="title">Code:</div><div class="body" dir="ltr"><code>I(42)</code></div></div><ul class="mycode_list"><li><span style="font-weight: bold;" class="mycode_b"><span style="color: red;" class="mycode_color"><span style="text-decoration: underline;" class="mycode_u"><span style="color: green;" class="mycode_color">sscanf warning: Unclosed specifier parameter, assuming '&#x26;t', consider using something like p&#x26;t&#x26;t&#x26;t.</span></span></span></span><br />
</li>
</ul>
<br />
A custom delimiter of:<br />
<br />
<div class="codeblock"><div class="title">Code:</div><div class="body" dir="ltr"><code>p&#x26;t</code></div></div><br />
Was found with no matching "&#x26;t" after one character. In this case the system assumes you are using the old (deprecated) style of delimiters and sets it to just "&#x26;t". Instead use:<br />
<br />
<div class="codeblock"><div class="title">Code:</div><div class="body" dir="ltr"><code>p&#x26;t,&#x26;t</code></div></div><br />
Or, if you really do want a delimiter of "&#x26;t" then use:<br />
<br />
<div class="codeblock"><div class="title">Code:</div><div class="body" dir="ltr"><code>p&#x26;t&#x26;t&#x26;t</code></div></div><br />
Note that this does not need to be escaped; however, a delimiter of "&#x26;t" does:<br />
<br />
<div class="codeblock"><div class="title">Code:</div><div class="body" dir="ltr"><code>p&#x26;t&#92;&#x26;t&#x26;t</code></div></div><br />
The "\" may also need to be escaped when writing actual PAWN strings, leading to:<br />
<br />
<div class="codeblock"><div class="title">Code:</div><div class="body" dir="ltr"><code>p&#x26;t&#92;&#92;&#x26;t&#x26;t</code></div></div><br />
This also applies to array types ("a&#x26;t" vs "a&#x26;ti&#x26;t"), note that this will result in an invalid array type.<br />
<ul class="mycode_list"><li><span style="font-weight: bold;" class="mycode_b"><span style="color: red;" class="mycode_color"><span style="text-decoration: underline;" class="mycode_u"><span style="color: green;" class="mycode_color">sscanf warning: Unenclosed specifier parameters are deprecated, consider using something like p&#x26;t&#x26;t&#x26;t.</span></span></span></span><br />
</li>
</ul>
<br />
You are using the old style:<br />
<br />
<div class="codeblock"><div class="title">Code:</div><div class="body" dir="ltr"><code>p,</code></div></div><br />
Instead of:<br />
<br />
<div class="codeblock"><div class="title">Code:</div><div class="body" dir="ltr"><code>p&#x26;t,&#x26;t</code></div></div><br />
This also applies to array types ("ai" vs "a&#x26;ti&#x26;t").<br />
<ul class="mycode_list"><li><span style="font-weight: bold;" class="mycode_b"><span style="color: red;" class="mycode_color"><span style="text-decoration: underline;" class="mycode_u"><span style="color: green;" class="mycode_color">sscanf warning: No specified parameter found.</span></span></span></span><br />
</li>
</ul>
<br />
The format specifier just ends with:<br />
<br />
<div class="codeblock"><div class="title">Code:</div><div class="body" dir="ltr"><code>p</code></div></div><br />
This also applies to array types ("a" vs "a&#x26;ti&#x26;t").<br />
<ul class="mycode_list"><li><span style="font-weight: bold;" class="mycode_b"><span style="color: red;" class="mycode_color"><span style="text-decoration: underline;" class="mycode_u"><span style="color: green;" class="mycode_color">sscanf warning: Missing string length end.</span></span></span></span><br />
</li>
</ul>
<ul class="mycode_list"><li><span style="font-weight: bold;" class="mycode_b"><span style="color: red;" class="mycode_color"><span style="text-decoration: underline;" class="mycode_u"><span style="color: green;" class="mycode_color">sscanf warning: Missing length end.</span></span></span></span><br />
</li>
</ul>
<br />
A string has been written as:<br />
<br />
<div class="codeblock"><div class="title">Code:</div><div class="body" dir="ltr"><code>s[10</code></div></div><br />
Instead of:<br />
<br />
<div class="codeblock"><div class="title">Code:</div><div class="body" dir="ltr"><code>s[10]</code></div></div><br />
I.e. the length has not been closed.<br />
<ul class="mycode_list"><li><span style="font-weight: bold;" class="mycode_b"><span style="color: red;" class="mycode_color"><span style="text-decoration: underline;" class="mycode_u"><span style="color: green;" class="mycode_color">sscanf warning: Arrays without a length are deprecated, please add a destination size.</span></span></span></span><br />
</li>
</ul>
<br />
A string has been written as:<br />
<br />
<div class="codeblock"><div class="title">Code:</div><div class="body" dir="ltr"><code>s</code></div></div><br />
Instead of:<br />
<br />
<div class="codeblock"><div class="title">Code:</div><div class="body" dir="ltr"><code>s[10]</code></div></div><br />
I.e. the length has not been included.<br />
<br />
   <ul class="mycode_list"><li><span style="font-weight: bold;" class="mycode_b"><span style="color: red;" class="mycode_color"><span style="text-decoration: underline;" class="mycode_u"><span style="color: green;" class="mycode_color">sscanf error: Invalid data length.</span></span></span></span><br />
</li>
</ul>
<br />
An invalid array or string size has been specified (0, negative, or not a number).<br />
<br />
   <ul class="mycode_list"><li><span style="font-weight: bold;" class="mycode_b"><span style="color: red;" class="mycode_color"><span style="text-decoration: underline;" class="mycode_u"><span style="color: green;" class="mycode_color">sscanf error: Invalid character in data length.</span></span></span></span><br />
</li>
</ul>
<br />
A string or array has been given a length that is not a number.<br />
<br />
   <ul class="mycode_list"><li><span style="font-weight: bold;" class="mycode_b"><span style="color: red;" class="mycode_color"><span style="text-decoration: underline;" class="mycode_u"><span style="color: green;" class="mycode_color">sscanf warning: Strings without a length are deprecated, please add a destination size.</span></span></span></span><br />
</li>
</ul>
<br />
In the old system, strings were not required to have lengths but this introduced security problems with overflows. Now you must add a length or get the default of "32".<br />
<br />
   <ul class="mycode_list"><li><span style="font-weight: bold;" class="mycode_b"><span style="color: red;" class="mycode_color"><span style="text-decoration: underline;" class="mycode_u"><span style="color: green;" class="mycode_color">sscanf error: String/array must include a length, please add a destination size.</span></span></span></span><br />
</li>
</ul>
<br />
Arrays are newer than strings, so never had an implementation not requiring a length, so there is no compatability problems in REQUIRING a length to be given.<br />
<br />
   <ul class="mycode_list"><li><span style="font-weight: bold;" class="mycode_b"><span style="color: red;" class="mycode_color"><span style="text-decoration: underline;" class="mycode_u"><span style="color: green;" class="mycode_color">sscanf warning: Can't have nestled quiet sections.</span></span></span></span><br />
</li>
</ul>
<br />
You have tried writing something like this:<br />
<br />
<div class="codeblock"><div class="title">Code:</div><div class="body" dir="ltr"><code>{i{x}}</code></div></div><br />
This has a quiet section ("{}") inside another one, which makes no sense.<br />
<br />
   <ul class="mycode_list"><li><span style="font-weight: bold;" class="mycode_b"><span style="color: red;" class="mycode_color"><span style="text-decoration: underline;" class="mycode_u"><span style="color: green;" class="mycode_color">sscanf warning: Not in a quiet section.</span></span></span></span><br />
</li>
</ul>
<br />
"}" was found with no corresponding "{":<br />
<br />
<div class="codeblock"><div class="title">Code:</div><div class="body" dir="ltr"><code>i}</code></div></div><br />
   <ul class="mycode_list"><li><span style="font-weight: bold;" class="mycode_b"><span style="color: red;" class="mycode_color"><span style="text-decoration: underline;" class="mycode_u"><span style="color: green;" class="mycode_color">sscanf warning: Can't remove quiet in enum.</span></span></span></span><br />
</li>
</ul>
<br />
This is caused by specifiers such as:<br />
<br />
<div class="codeblock"><div class="title">Code:</div><div class="body" dir="ltr"><code>{fe&#x26;ti}x&#x26;t</code></div></div><br />
Where the quiet section is started before the enum, but finishes part way through it rather than after it. This can be emulated by:<br />
<br />
<div class="codeblock"><div class="title">Code:</div><div class="body" dir="ltr"><code>{f}e&#x26;t{i}x&#x26;t</code></div></div><br />
   <ul class="mycode_list"><li><span style="font-weight: bold;" class="mycode_b"><span style="color: red;" class="mycode_color"><span style="text-decoration: underline;" class="mycode_u"><span style="color: green;" class="mycode_color">sscanf error: Arrays are not supported in enums.</span></span></span></span><br />
</li>
</ul>
<br />
<br />
Basically, you can't do:<br />
<br />
<div class="codeblock"><div class="title">Code:</div><div class="body" dir="ltr"><code>e&#x26;tfa&#x26;ti&#x26;t[5]f&#x26;t</code></div></div><br />
You can, however, still do:<br />
<br />
<div class="codeblock"><div class="title">Code:</div><div class="body" dir="ltr"><code>e&#x26;tfiiiiif&#x26;t</code></div></div><br />
This is a little more awkward, but is actually more technically correct given how enums are compiled.<br />
<br />
   <ul class="mycode_list"><li><span style="font-weight: bold;" class="mycode_b"><span style="color: red;" class="mycode_color"><span style="text-decoration: underline;" class="mycode_u"><span style="color: green;" class="mycode_color">sscanf warning: Unclosed string literal.</span></span></span></span><br />
</li>
</ul>
<br />
A specifier starts a string with "'", but doesn't close it:<br />
<br />
<div class="codeblock"><div class="title">Code:</div><div class="body" dir="ltr"><code>i'hello</code></div></div><ul class="mycode_list"><li><span style="font-weight: bold;" class="mycode_b"><span style="color: red;" class="mycode_color"><span style="text-decoration: underline;" class="mycode_u"><span style="color: green;" class="mycode_color">sscanf warning: sscanf specifiers do not require '%' before them.</span></span></span></span><br />
</li>
</ul>
<br />
"format" uses code such as "%d", sscanf only needs "d", and confusingly the C equivalent function (also called "sscanf") DOES require "%". Sorry.<br />
<ul class="mycode_list"><li><span style="font-weight: bold;" class="mycode_b"><span style="color: red;" class="mycode_color"><span style="text-decoration: underline;" class="mycode_u"><span style="color: green;" class="mycode_color">sscanf error: Insufficient default values.</span></span></span></span><br />
</li>
</ul>
<br />
Default values for arrays can be partially specified and the remainder will be inferred from the pattern of the last two:<br />
<br />
<div class="codeblock"><div class="title">Code:</div><div class="body" dir="ltr"><code>A&#x26;ti&#x26;t(0, 1)[10]</code></div></div><br />
That specifier will default to the numbers "0" to "9". However, because enums have a mixture of types, all the default values for "E" must ALWAYS be specified:<br />
<br />
<div class="codeblock"><div class="title">Code:</div><div class="body" dir="ltr"><code>E&#x26;tiiff&#x26;t(0, 1, 0.0, 1.0)</code></div></div><br />
This will not do:<br />
<br />
<div class="codeblock"><div class="title">Code:</div><div class="body" dir="ltr"><code>E&#x26;tiiff&#x26;t(0, 1)</code></div></div><ul class="mycode_list"><li><span style="font-weight: bold;" class="mycode_b"><span style="color: red;" class="mycode_color"><span style="text-decoration: underline;" class="mycode_u"><span style="color: green;" class="mycode_color">sscanf error: Options are not supported in enums.</span></span></span></span><br />
</li>
</ul>
<ul class="mycode_list"><li><span style="font-weight: bold;" class="mycode_b"><span style="color: red;" class="mycode_color"><span style="text-decoration: underline;" class="mycode_u"><span style="color: green;" class="mycode_color">sscanf error: Options are not supported in arrays.</span></span></span></span><br />
</li>
</ul>
<br />
The "?" specifier for local options must appear outside any other specifier.<br />
<br />
   <ul class="mycode_list"><li><span style="font-weight: bold;" class="mycode_b"><span style="color: red;" class="mycode_color"><span style="text-decoration: underline;" class="mycode_u"><span style="color: green;" class="mycode_color">sscanf error: No option value.</span></span></span></span><br />
</li>
</ul>
<br />
An option was specified with no value:<br />
<br />
<div class="codeblock"><div class="title">Code:</div><div class="body" dir="ltr"><code>?&#x26;tOLD_DEFAULT_NAME&#x26;t</code></div></div><br />
   <ul class="mycode_list"><li><span style="font-weight: bold;" class="mycode_b"><span style="color: red;" class="mycode_color"><span style="text-decoration: underline;" class="mycode_u"><span style="color: green;" class="mycode_color">sscanf error: Unknown option name.</span></span></span></span><br />
</li>
</ul>
<br />
The given option was not recognised. Check spelling and case:<br />
<br />
<div class="codeblock"><div class="title">Code:</div><div class="body" dir="ltr"><code>?&#x26;tNOT_A_VALID_NAME=1&#x26;t</code></div></div><ul class="mycode_list"><li><span style="font-weight: bold;" class="mycode_b"><span style="color: red;" class="mycode_color"><span style="text-decoration: underline;" class="mycode_u"><span style="color: green;" class="mycode_color">sscanf warning: Could not find function SSCANF:?.</span></span></span></span><br />
</li>
</ul>
<br />
A "k" specifier has been used, but the corresponding function could not be found. If you think it is there check the spelling matches exactly - including the case.<br />
<ul class="mycode_list"><li><span style="font-weight: bold;" class="mycode_b"><span style="color: red;" class="mycode_color"><span style="text-decoration: underline;" class="mycode_u"><span style="color: green;" class="mycode_color">sscanf error: SSCANF_Init has incorrect parameters.</span></span></span></span><br />
</li>
</ul>
<ul class="mycode_list"><li><span style="font-weight: bold;" class="mycode_b"><span style="color: red;" class="mycode_color"><span style="text-decoration: underline;" class="mycode_u"><span style="color: green;" class="mycode_color">sscanf error: SSCANF_Join has incorrect parameters.</span></span></span></span><br />
</li>
</ul>
<ul class="mycode_list"><li><span style="font-weight: bold;" class="mycode_b"><span style="color: red;" class="mycode_color"><span style="text-decoration: underline;" class="mycode_u"><span style="color: green;" class="mycode_color">sscanf error: SSCANF_Leave has incorrect parameters.</span></span></span></span><br />
</li>
</ul>
<ul class="mycode_list"><li><span style="font-weight: bold;" class="mycode_b"><span style="color: red;" class="mycode_color"><span style="text-decoration: underline;" class="mycode_u"><span style="color: green;" class="mycode_color">sscanf error: SSCANF_SetPlayerName has incorrect parameters.</span></span></span></span><br />
</li>
</ul>
<br />
You edited something in the sscanf2 include - undo it or redownload it.<br />
<br />
<span style="font-size: xx-large;" class="mycode_size"><span style="font-weight: bold;" class="mycode_b"><span style="color: red;" class="mycode_color"><span style="text-decoration: underline;" class="mycode_u"><span style="color: green;" class="mycode_color">Changelog</span></span></span></span></span><br />
<br />
<span style="font-weight: bold;" class="mycode_b"><span style="color: red;" class="mycode_color"><span style="text-decoration: underline;" class="mycode_u"><span style="color: green;" class="mycode_color">sscanf 2.8.2 - 18/04/2015</span></span></span></span><br />
- Fixed a bug where "u" wasn't working correctly after a server restart.]]></content>
		<draft xmlns="http://purl.org/atom-blog/ns#">false</draft>
	</entry>
	<entry xmlns="http://www.w3.org/2005/Atom">
		<author>
			<name type="html" xml:space="preserve"><![CDATA[<a href="https://www.burgershot.gg/member.php?action=profile&uid=82">IllidanS4</a>]]></name>
		</author>
		<published>2019-04-20T13:57:54Z</published>
		<updated>2019-04-20T13:57:54Z</updated>
		<link rel="alternate" type="text/html" href="https://www.burgershot.gg/showthread.php?tid=404" />
		<id>https://www.burgershot.gg/showthread.php?tid=404</id>
		<title xml:space="preserve"><![CDATA[Yet Another Lua Plugin]]></title>
		<content type="html" xml:space="preserve" xml:base="https://www.burgershot.gg/showthread.php?tid=404"><![CDATA[<div style="text-align: center;" class="mycode_align"><span style="font-size: large;" class="mycode_size"><a href="https://github.com/IllidanS4/YALP" target="_blank" rel="noopener" class="mycode_url">YALP v1.0</a></span></div>
<div style="text-align: center;" class="mycode_align"><span style="font-weight: bold;" class="mycode_b"><span style="font-size: small;" class="mycode_size"><a href="https://github.com/IllidanS4/YALP/releases/" target="_blank" rel="noopener" class="mycode_url">Download</a></span></span></div>
<div style="text-align: center;" class="mycode_align"><span style="font-size: small;" class="mycode_size"><a href="https://github.com/IllidanS4/YALP/wiki" target="_blank" rel="noopener" class="mycode_url">Tutorials</a></span></div>
<br />
<span style="font-weight: bold;" class="mycode_b">Introduction</span><br />
This plugin allows you to use Lua, your favourite dynamic flexible scripting language, in SA-MP, for all purposes, be it sandboxing user scripts, debugging the server, or developing filterscripts and gamemodes. <span style="font-style: italic;" class="mycode_i">YALP</span> provides lightweight and flexible Lua environment that can use existing or future natives from SA-MP or plugins.<br />
<br />
The main feature of <span style="font-style: italic;" class="mycode_i">YALP</span> is a powerful interop API to interact with existing Pawn natives and callbacks. It is very easy to call existing functions, <span style="font-style: italic;" class="mycode_i">without needing to declare them anywhere</span>:<br />
<div class="codeblock"><div class="title">Code:</div><div class="body" dir="ltr"><code>interop.native.SetPlayerPos(0, 1235.31, -2331.84, 12.33)</code></div></div><span style="font-style: italic;" class="mycode_i">YALP</span> automatically converts all arguments to their proper Pawn cells, and allows you to specify what the function returns in the actuall call. All standard cell and single-dimensional array types are supported.<br />
<br />
Callbacks can be specified in a similar simple way:<br />
<div class="codeblock"><div class="title">Code:</div><div class="body" dir="ltr"><code>function interop.public.OnPlayerConnect(playerid)<br />
  -- ...<br />
end</code></div></div><br />
Thanks to these mechanisms, you can use any framework you want, or build your own in Lua, without depending on new versions of this plugin.<br />
<br />
<span style="font-weight: bold;" class="mycode_b">Configuration</span><br />
There is no special XML, JSON or other configuration of this plugin, because you can specify everything when you create a new Lua state (you can create any number you wish, and run any code inside). You can specify what packages should be loaded or available in the Lua instance, how much maximum memory it should take, or even limit for how long Lua functions can run.<br />
<br />
<span style="font-weight: bold;" class="mycode_b">Features</span><br />
All standard Lua packages are available (although some of the more unsafe ones aren't allowed by default). The powerful interop package can interface with any Pawn native function or callback. There is also an advanced timer library with support for simple asynchronous functions (with Lua coroutines) and all sorts of timers. The remote package contains functions for remote communication between two separate Lua instance (via serialization or proxies).<br />
<br />
The standard Lua packages are also enhanced with a couple of useful functions. Please see the <span style="text-decoration: underline;" class="mycode_u"><a href="https://github.com/IllidanS4/YALP/wiki/Lua-API" target="_blank" rel="noopener" class="mycode_url">wiki</a></span> for a list of all new functions.<br />
<br />
The <span style="text-decoration: underline;" class="mycode_u"><a href="https://github.com/IllidanS4/YALP/wiki/Pawn-API" target="_blank" rel="noopener" class="mycode_url">Pawn API</a></span> is basically a port of the <span style="text-decoration: underline;" class="mycode_u"><a href="https://www.lua.org/manual/5.3/manual.html#4.8" target="_blank" rel="noopener" class="mycode_url">Lua C API</a></span>, allowing advanced manipulation of the Lua machine. It is recommended to use the Lua API, since it can do everything that Pawn can do, but if you need to interact with an existing complex Pawn library, it is possible as well.<br />
<br />
<span style="font-weight: bold;" class="mycode_b">Sample code</span><br />
<div class="codeblock"><div class="title">Code:</div><div class="body" dir="ltr"><code>#include &#x26;ta_samp&#x26;t<br />
#include &#x26;tYALP&#x26;t<br />
<br />
public OnFilterScriptInit()<br />
{<br />
    new Lua:l = lua_newstate(); // creates a new Lua instance<br />
    <br />
    if(lua_loadfile(l, "script.lua")) // loads a Lua script and returns an error code<br />
    {<br />
        lua_stackdump(l); // prints the stack for more information about the error<br />
        return;<br />
    }<br />
    lua_bind(l); // binds the Lua instance to the current Pawn filterscript/gamemode, so all interation with it is rerouted to Lua<br />
    // if the binding succeeds, this code is not run (and the Lua instance is destroyed if the script is unloaded)<br />
    lua_stackdump(l);<br />
}</code></div></div><div class="codeblock"><div class="title">Code:</div><div class="body" dir="ltr"><code>-- script.lua<br />
local interop = require "interop"<br />
interop.native.print("Hello from Lua!")</code></div></div>]]></content>
		<draft xmlns="http://purl.org/atom-blog/ns#">false</draft>
	</entry>
	<entry xmlns="http://www.w3.org/2005/Atom">
		<author>
			<name type="html" xml:space="preserve"><![CDATA[<a href="https://www.burgershot.gg/member.php?action=profile&uid=36">Yashas</a>]]></name>
		</author>
		<published>2019-04-17T05:00:54Z</published>
		<updated>2019-04-17T05:29:23Z</updated>
		<link rel="alternate" type="text/html" href="https://www.burgershot.gg/showthread.php?tid=316" />
		<id>https://www.burgershot.gg/showthread.php?tid=316</id>
		<title xml:space="preserve"><![CDATA[[Include] pawn-array-view: non-owning spans for multi-dimensional pawn arrays]]></title>
		<content type="html" xml:space="preserve" xml:base="https://www.burgershot.gg/showthread.php?tid=316"><![CDATA[<span style="font-size: xx-large;" class="mycode_size">pawn-array-view</span><br />
<br />
<span style="font-weight: bold;" class="mycode_b">pawn-array-view</span> is an efficient C++ library that abstracts the <a href="https://github.com/YashasSamaga/AMX-Assembly-Docs/blob/master/DOCUMENT.md#multi-dimensional-arrays" target="_blank" rel="noopener" class="mycode_url">complex memory layout of multi-dimensional pawn arrays</a> and provides an intuitive C/++ array-like interface for dealing with them. The name suggests that the library only allows read-only access to the arrays but that's not true; you can access and modify the arrays. Any decent C++ compiler will be able to optimize off all access and modifications to the arrays into simple pointer arithmetic. <br />
<br />
<span style="font-size: large;" class="mycode_size">Defects (Help Wanted)</span> <br />
LICM optimizations aren't pushing loop invariant subexpressions out of the loop because of aliased pointers. I haven't figured out how to correctly place restrict qualifiers which aren't ignored.<br />
<br />
<div class="codeblock"><div class="title">Code:</div><div class="body" dir="ltr"><code>int main() {<br />
&nbsp;&nbsp;&nbsp;&nbsp;pawn::array_view&#x26;tint, 3&#x26;t array((cell*)0x10000);<br />
&nbsp;&nbsp;&nbsp;&nbsp;for(int i = 0; i &#x26;t 100; i++) {<br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;for(int j = 0; j &#x26;t 100; j++) {<br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;for(int k = 0; k &#x26;t 128; k++) {<br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;array[i][j][k] = 10;<br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />
&nbsp;&nbsp;&nbsp;&nbsp;}<br />
&nbsp;&nbsp;&nbsp;&nbsp;return 0;<br />
}</code></div></div><br />
The compiler does not move the array[i][j] calculations outside the loop. There is a valid reason to not move them since modifying an element could modify something which would require recalculating the indexes. This is useful only when indirection tables are being modified. The common case is data being modified but not the indirection table. In this situation, moving the calculations out of the loop improves performance.<br />
<br />
There are more consequences. The compiler can also vectorize the loop if it manages to pull the subexpression out of the loop. The failure to move the subexpression outside the loop prevents a ton of optimizations.<br />
<br />
Note that the optimizations happen when the array is only being read. The problem is for modifications only.<br />
<br />
<span style="font-size: large;" class="mycode_size">Plans</span><br />
If the size of the arrays are known at compile-time, a better interface can be provided. I have plans on providing full-fledged container like support for arrays where the dimensions are available at compile time.<br />
<br />
There is a project going on in the develop branch which has working but inefficient code for dealing with known dimensions at run-time.<br />
<br />
I plan on renaming array_view to span. This include was initially providing a view but then the ability to mutate was added but the name wasn't changed. It's a very misleading name now.<br />
<br />
<span style="font-size: large;" class="mycode_size">Links</span><ul class="mycode_list"><li><a href="https://github.com/YashasSamaga/pawn-array-view/blob/master/lib/pawn/array_view.hpp" target="_blank" rel="noopener" class="mycode_url"><span style="font-weight: bold;" class="mycode_b">array_view.hpp</span></a><br />
</li>
<li><a href="https://github.com/YashasSamaga/pawn-array-view/blob/master/README.md" target="_blank" rel="noopener" class="mycode_url"><span style="font-weight: bold;" class="mycode_b">documentation</span></a><br />
</li>
<li><a href="https://github.com/YashasSamaga/pawn-array-view/blob/master/plugin/natives/tests.cpp" target="_blank" rel="noopener" class="mycode_url"><span style="font-weight: bold;" class="mycode_b">examples</span></a><br />
</li>
<li><a href="https://github.com/YashasSamaga/pawn-array-view" target="_blank" rel="noopener" class="mycode_url"><span style="font-weight: bold;" class="mycode_b">project repository</span></a><br />
</li>
<li><a href="https://github.com/YashasSamaga/pawn-array-view/tree/develop" target="_blank" rel="noopener" class="mycode_url"><span style="font-weight: bold;" class="mycode_b">develop branch (interesting stuff happens here)</span></a><br />
</li>
</ul>
]]></content>
		<draft xmlns="http://purl.org/atom-blog/ns#">false</draft>
	</entry>
	<entry xmlns="http://www.w3.org/2005/Atom">
		<author>
			<name type="html" xml:space="preserve"><![CDATA[<a href="https://www.burgershot.gg/member.php?action=profile&uid=9">BigETI</a>]]></name>
		</author>
		<published>2019-04-15T11:35:00Z</published>
		<updated>2019-04-15T11:35:00Z</updated>
		<link rel="alternate" type="text/html" href="https://www.burgershot.gg/showthread.php?tid=253" />
		<id>https://www.burgershot.gg/showthread.php?tid=253</id>
		<title xml:space="preserve"><![CDATA[PAWN memory access plugin]]></title>
		<content type="html" xml:space="preserve" xml:base="https://www.burgershot.gg/showthread.php?tid=253"><![CDATA[<div style="text-align: center;" class="mycode_align"><span style="font-size: xx-large;" class="mycode_size"><span style="color: DarkSlateBlue;" class="mycode_color">PAWN memory access plugin</span></span><br />
<span style="color: Brown;" class="mycode_color">A successor to <a href="http://forum.sa-mp.com/showthread.php?t=451381" target="_blank" rel="noopener" class="mycode_url">http://forum.sa-mp.com/showthread.php?t=451381</a></span></div>
<span style="font-size: x-large;" class="mycode_size"><br />
<span style="color: RoyalBlue;" class="mycode_color">Description</span></span><br />
The PAWN memory access plugin allows to allocate and free memory from heap in PAWN.<br />
<span style="font-size: x-large;" class="mycode_size"><br />
<span style="color: RoyalBlue;" class="mycode_color">Project</span></span><br />
All of the source code, builds and documentations are located at <a href="https://github.com/BigETI/pawn-memory" target="_blank" rel="noopener" class="mycode_url">GitHub</a>: <a href="https://github.com/BigETI/pawn-memory" target="_blank" rel="noopener" class="mycode_url">https://github.com/BigETI/pawn-memory</a>]]></content>
		<draft xmlns="http://purl.org/atom-blog/ns#">false</draft>
	</entry>
	<entry xmlns="http://www.w3.org/2005/Atom">
		<author>
			<name type="html" xml:space="preserve"><![CDATA[<a href="https://www.burgershot.gg/member.php?action=profile&uid=444">EvgeN 1137</a>]]></name>
		</author>
		<published>2019-04-14T23:45:52Z</published>
		<updated>2019-04-15T03:47:05Z</updated>
		<link rel="alternate" type="text/html" href="https://www.burgershot.gg/showthread.php?tid=221" />
		<id>https://www.burgershot.gg/showthread.php?tid=221</id>
		<title xml:space="preserve"><![CDATA[SAMP GameMode in Assembly (SGMA)]]></title>
		<content type="html" xml:space="preserve" xml:base="https://www.burgershot.gg/showthread.php?tid=221"><![CDATA[<div style="text-align: center;" class="mycode_align"><span style="font-size: large;" class="mycode_size"><span style="font-weight: bold;" class="mycode_b">SAMP GameMode in Assembly (SGMA)</span></span></div>
<br />
<br />
SGMA is the first SAMP gamemode written entirely in assembly programming language using fasm<br />
<br />
Technical features:<ul class="mycode_list"><li>As fast as it gets: doesn't use an AMX machine, runs on native x86 code<br />
</li>
<li>Cross-platform: in assembly, yeah!<br />
</li>
</ul>
Gamemode features:<ul class="mycode_list"><li>Simple Deathmatch<br />
</li>
<li>SQLite-based account system<br />
</li>
<li>Weapon store<br />
</li>
</ul>
<span style="font-weight: bold;" class="mycode_b"><a href="https://github.com/evgen1137/SGMA/releases/tag/1.0" target="_blank" rel="noopener" class="mycode_url">Download page</a></span><br />
<span style="font-weight: bold;" class="mycode_b"><a href="https://github.com/evgen1137/SGMA/" target="_blank" rel="noopener" class="mycode_url">GitHub page</a></span><br />
Also please read the <a href="https://github.com/evgen1137/SGMA/blob/master/NOTES.md" target="_blank" rel="noopener" class="mycode_url">technical and development notes (click)</a>]]></content>
		<draft xmlns="http://purl.org/atom-blog/ns#">false</draft>
	</entry>
	<entry xmlns="http://www.w3.org/2005/Atom">
		<author>
			<name type="html" xml:space="preserve"><![CDATA[<a href="https://www.burgershot.gg/member.php?action=profile&uid=457">Bork</a>]]></name>
		</author>
		<published>2019-04-14T23:40:58Z</published>
		<updated>2019-04-15T08:26:42Z</updated>
		<link rel="alternate" type="text/html" href="https://www.burgershot.gg/showthread.php?tid=219" />
		<id>https://www.burgershot.gg/showthread.php?tid=219</id>
		<title xml:space="preserve"><![CDATA[samp-crypto - bcrypt, scrypt & argon2 hashing]]></title>
		<content type="html" xml:space="preserve" xml:base="https://www.burgershot.gg/showthread.php?tid=219"><![CDATA[<span style="font-weight: bold;" class="mycode_b"><span style="font-size: xx-large;" class="mycode_size">samp crypto</span></span><br />
<span style="font-size: small;" class="mycode_size"><span style="color: #24292e;" class="mycode_color"><span style="font-size: small;" class="mycode_size"><span style="font-family: -apple-system, BlinkMacSystemFont,;" class="mycode_font">A SAMP cryptography plugin written in Rust. This plugin was written as a means to make it really simple for anyone to transition from Whirlpool, SHA256_PassHash or any other hashing method similar to these without major script changes, like the other bcrypt plugins do. This is my first plugin written in Rust, I tried cleaning up all my code and I will continue to do so however you may still see some older code. If you wish to clean it up please fork the repo, make changes and create a PR! I will happily review and accept it.</span></span></span></span><br />
<span style="font-size: small;" class="mycode_size"><span style="color: #24292e;" class="mycode_color"><span style="font-size: small;" class="mycode_size"><span style="font-family: -apple-system, BlinkMacSystemFont,;" class="mycode_font"><img src="https://img.shields.io/github/downloads/infin1tyy/samp-crypto/total.svg" loading="lazy"  alt="[Image: total.svg]" class="mycode_img" /> <img src="https://img.shields.io/github/issues/infin1tyy/samp-crypto.svg" loading="lazy"  alt="[Image: samp-crypto.svg]" class="mycode_img" /> <img src="https://img.shields.io/github/release/infin1tyy/samp-crypto.svg" loading="lazy"  alt="[Image: samp-crypto.svg]" class="mycode_img" /></span></span></span></span><br />
<br />
<span style="font-size: small;" class="mycode_size"><span style="color: #24292e;" class="mycode_color"><span style="font-size: small;" class="mycode_size"><span style="font-family: -apple-system, BlinkMacSystemFont,;" class="mycode_font"><span style="text-decoration: underline;" class="mycode_u"><span style="font-weight: bold;" class="mycode_b">Encryption Methods</span></span></span></span></span></span><ul class="mycode_list"><li><span style="color: #24292e;" class="mycode_color"><span style="font-size: small;" class="mycode_size">Bcrypt</span></span><br />
</li>
<li><span style="color: #24292e;" class="mycode_color"><span style="font-size: small;" class="mycode_size">Scrypt</span></span><br />
</li>
<li><span style="color: #24292e;" class="mycode_color"><span style="font-size: small;" class="mycode_size">Argon2i (Argon2d and 2id will be brought out soon if demand is there)</span></span><br />
</li>
</ul>
<span style="font-weight: bold;" class="mycode_b"><span style="text-decoration: underline;" class="mycode_u">Installation</span></span><ul class="mycode_list"><li>Head to the release page and download the latest version of samp crypto (<a href="https://github.com/infin1tyy/samp-crypto/releases" target="_blank" rel="noopener" class="mycode_url"><span style="color: #0366d6;" class="mycode_color">https://github.com/infin1tyy/samp-crypto/releases</span></a>).<br />
<br />
</li>
<li>Place the .inc into your pawno/include folder.<br />
<br />
</li>
<li>Place the .dll or .so in your plugins folder (if one doesn't exist, create a new one).<br />
<br />
</li>
<li>Add samp_crypto to your server.cfg (if on linux, add libsamp_crypto.so to your server.cfg instead.<br />
<br />
</li>
<li>Enjoy!<br />
</li>
</ul>
<span style="font-weight: bold;" class="mycode_b"><span style="text-decoration: underline;" class="mycode_u">How to Use</span></span><br />
<a href="https://github.com/infin1tyy/samp-crypto/wiki" target="_blank" rel="noopener" class="mycode_url">Click me to go to the wiki!</a><br />
<br />
<span style="font-weight: bold;" class="mycode_b"><span style="text-decoration: underline;" class="mycode_u">Downloads</span></span><br />
<a href="https://github.com/infin1tyy/samp-crypto/releases" target="_blank" rel="noopener" class="mycode_url">Binaries</a><br />
<a href="https://github.com/infin1tyy/samp-crypto" target="_blank" rel="noopener" class="mycode_url">Source Code</a><br />
<br />
<span style="font-weight: bold;" class="mycode_b"><span style="text-decoration: underline;" class="mycode_u">Credits</span></span><br />
The credits can be found <a href="https://github.com/infin1tyy/samp-crypto/blob/master/README.md" target="_blank" rel="noopener" class="mycode_url">here</a>, in the GitHub README.md<br />
<br />
<span style="font-weight: bold;" class="mycode_b"><span style="text-decoration: underline;" class="mycode_u">Notes</span></span><br />
I was debating whether or not I should release this for a while. After what has been going on in SAMP, with essentially the community being divided between the players in the Discord and the SAMP forum, I wasn't sure who to support. A lot of the people from this community have been quite spiteful towards me, however, I'm putting that in the past and I suppose my support is with you lot.<br />
samp crypto will be a burgershot.gg exclusive.<br />
Special thanks to iAmir &amp; Dakyskye from the bottom of my heart.<br />
For anyone who didn't believe in me, fuck you I suppose. :joy: Maybe this'll prove I'm worth something. And I'd like to apologize for never delivering on that Postgres plugin, but do know that I still have it in mind and I'll make it happen whenever I have the experience to do so.]]></content>
		<draft xmlns="http://purl.org/atom-blog/ns#">false</draft>
	</entry>
	<entry xmlns="http://www.w3.org/2005/Atom">
		<author>
			<name type="html" xml:space="preserve"><![CDATA[<a href="https://www.burgershot.gg/member.php?action=profile&uid=30">Crayder</a>]]></name>
		</author>
		<published>2019-04-14T14:38:29Z</published>
		<updated>2019-04-15T03:47:34Z</updated>
		<link rel="alternate" type="text/html" href="https://www.burgershot.gg/showthread.php?tid=175" />
		<id>https://www.burgershot.gg/showthread.php?tid=175</id>
		<title xml:space="preserve"><![CDATA[ColAndreas - Collision Detection and Raytracing]]></title>
		<content type="html" xml:space="preserve" xml:base="https://www.burgershot.gg/showthread.php?tid=175"><![CDATA[<img src="http://i.imgur.com/in7FgoQ.gif" loading="lazy"  alt="[Image: in7FgoQ.gif]" class="mycode_img" /><br />
<span style="color: DimGray;" class="mycode_color">____________________________________________________________________________________________________ </span><br />
<br />
<span style="font-size: large;" class="mycode_size"><span style="color: MediumTurquoise;" class="mycode_color"><span style="font-weight: bold;" class="mycode_b">Developers:</span></span></span><br />
<br />
<span style="font-weight: bold;" class="mycode_b">Initial Developers:</span><br />
[uL]Slice<br />
[uL]Chris420<br />
[uL]Pottus<br />
<span style="font-weight: bold;" class="mycode_b">Latest Developers:</span><br />
uint32 (new developer ?) (Where'd ya go?) - This guy fixed some major shit, including the initial SA-MP object thing.<br />
Crayder<br />
Codectile<br />
<span style="color: DimGray;" class="mycode_color">____________________________________________________________________________________________________ </span><br />
<br />
<span style="font-weight: bold;" class="mycode_b"><span style="color: #6666ff;" class="mycode_color"><span style="font-size: medium;" class="mycode_size"><span style="text-decoration: underline;" class="mycode_u">Download today!</span></span></span></span><br />
<span style="color: DimGray;" class="mycode_color">____________________________________________________________________________________________________ </span><br />
<br />
<span style="font-size: large;" class="mycode_size"><span style="color: MediumTurquoise;" class="mycode_color"><span style="font-weight: bold;" class="mycode_b">Installation Instructions:</span></span></span><br />
<ol type="1" class="mycode_list"><li>Navigate to the github repository's release section (link above) and download the latest version.<br />
</li>
<li>If you don't need the source just download the wizard, the plugin, and include.<br />
</li>
<li>Run the binary builder application. This will generate a binary in which ColAndreas load data from.<br />
</li>
<li>Create a folder in your scriptfiles called "colandreas" and place the binary file there.<br />
</li>
<li>Add ColAndreas to your server.cfg.<br />
</li>
</ol>
<span style="color: DimGray;" class="mycode_color">____________________________________________________________________________________________________ </span><br />
<br />
<span style="font-size: large;" class="mycode_size"><span style="color: MediumTurquoise;" class="mycode_color"><span style="font-weight: bold;" class="mycode_b">Current Functions:</span></span></span><br />
<div class="codeblock"><div class="title">Code:</div><div class="body" dir="ltr"><code>CA_ContactTest(modelid, Float:x, Float:y, Float:z, Float:rx, Float:ry, Float:rz)<br />
CA_CreateDynamicObject_DC(modelid, Float:x, Float:y, Float:z, Float:rx, Float:ry, Float:rz, vw = -1, interior = -1, playerid = -1, Float:streamdist = 300.0, Float:drawdist = 300.0)<br />
CA_CreateDynamicObject_SC(modelid, Float:x, Float:y, Float:z, Float:rx, Float:ry, Float:rz, vw = -1, interior = -1, playerid = -1, Float:streamdist = 300.0, Float:drawdist = 300.0)<br />
CA_CreateDynamicObjectEx_DC(modelid, Float:x, Float:y, Float:z, Float:rx, Float:ry, Float:rz, Float:drawdistance = 0.0, Float:streamdistance = 200.0, worlds[] = { -1 }, interiors[] = { -1 }, players[] = { -1 }, maxworlds = sizeof worlds, maxinteriors = sizeof interiors, maxplayers = sizeof players)<br />
CA_CreateDynamicObjectEx_SC(modelid, Float:x, Float:y, Float:z, Float:rx, Float:ry, Float:rz, Float:drawdistance = 0.0, Float:streamdistance = 200.0, worlds[] = { -1 }, interiors[] = { -1 }, players[] = { -1 }, maxworlds = sizeof worlds, maxinteriors = sizeof interiors, maxplayers = sizeof players)<br />
CA_CreateObject(modelid, Float:x, Float:y, Float:z, Float:rx, Float:ry, Float:rz, bool:add = false)<br />
CA_CreateObject_DC(modelid, Float:x, Float:y, Float:z, Float:rx, Float:ry, Float:rz, Float:drawdistance = 300.0)<br />
CA_CreateObject_SC(modelid, Float:x, Float:y, Float:z, Float:rx, Float:ry, Float:rz, Float:drawdistance = 300.0)<br />
CA_DestroyAllObjects_DC()<br />
CA_DestroyObject(index)<br />
CA_DestroyObject_DC(index)<br />
CA_EulerToQuat(Float:rx, Float:ry, Float:rz, &amp;Float:x, &amp;Float:y, &amp;Float:z, &amp;Float:w)<br />
CA_FindZ_For2DCoord(Float:x, Float:y, &amp;Float:z)<br />
CA_GetModelBoundingBox(modelid, &amp;Float:minx, &amp;Float:miny, &amp;Float:minz, &amp;Float:maxx, &amp;Float:maxy, &amp;Float:maxz)<br />
CA_GetModelBoundingSphere(modelid, &amp;Float:offx, &amp;Float:offy, &amp;Float:offz, &amp;Float:radius)<br />
CA_GetObjectExtraID(index, type)<br />
CA_Init()<br />
CA_IsPlayerBlocked(playerid, Float:dist=1.5, Float:height=0.5)<br />
CA_IsPlayerInWater(playerid, &amp;Float:depth, &amp;Float:playerdepth)<br />
CA_IsPlayerNearWater(playerid, Float:dist=3.0, Float:height=3.0)<br />
CA_IsPlayerOnSurface(playerid, Float:tolerance=1.5)<br />
CA_QuatToEuler(Float:x, Float:y, Float:z, Float:w, &amp;Float:rx, &amp;Float:ry, &amp;Float:rz)<br />
CA_RayCastLine(Float:StartX, Float:StartY, Float:StartZ, Float:EndX, Float:EndY, Float:EndZ, &amp;Float:x, &amp;Float:y, &amp;Float:z)<br />
CA_RayCastLineAngle(Float:StartX, Float:StartY, Float:StartZ, Float:EndX, Float:EndY, Float:EndZ, &amp;Float:x, &amp;Float:y, &amp;Float:z, &amp;Float:rx, &amp;Float:ry, &amp;Float:rz)<br />
CA_RayCastLineAngleEx(Float:StartX, Float:StartY, Float:StartZ, Float:EndX, Float:EndY, Float:EndZ, &amp;Float:x, &amp;Float:y, &amp;Float:z, &amp;Float:rx, &amp;Float:ry, &amp;Float:rz, &amp;Float:ocx, &amp;Float:ocy, &amp;Float:ocz, &amp;Float:orx, &amp;Float:ory, &amp;Float:orz)<br />
CA_RayCastLineExtraID(type, Float:StartX, Float:StartY, Float:StartZ, Float:EndX, Float:EndY, Float:EndZ, &amp;Float:x, &amp;Float:y, &amp;Float:z)<br />
CA_RayCastLineEx(Float:StartX, Float:StartY, Float:StartZ, Float:EndX, Float:EndY, Float:EndZ, &amp;Float:x, &amp;Float:y, &amp;Float:z, &amp;Float:rx, &amp;Float:ry, &amp;Float:rz, &amp;Float:rw, &amp;Float:cx, &amp;Float:cy, &amp;Float:cz)<br />
CA_RayCastLineID(Float:StartX, Float:StartY, Float:StartZ, Float:EndX, Float:EndY, Float:EndZ, &amp;Float:x, &amp;Float:y, &amp;Float:z)<br />
CA_RayCastLineNormal(Float:startx, Float:starty, Float:startz, Float:endx, Float:endy, Float:endz, &amp;Float:x, &amp;Float:y, &amp;Float:z, &amp;Float:nx, &amp;Float:ny, &amp;Float:nz)<br />
CA_RayCastMultiLine(Float:StartX, Float:StartY, Float:StartZ, Float:EndX, Float:EndY, Float:EndZ, Float:retx[], Float:rety[], Float:retz[], Float:retdist[], ModelIDs[], size = sizeof(retx))<br />
CA_RayCastReflectionVector(Float:startx, Float:starty, Float:startz, Float:endx, Float:endy, Float:endz, &amp;Float:x, &amp;Float:y, &amp;Float:z, &amp;Float:nx, &amp;Float:ny, &amp;Float:nz)<br />
CA_RemoveBarriers()<br />
CA_RemoveBreakableBuildings()<br />
CA_RemoveBuilding(modelid, Float:x, Float:y, Float:z, Float:radius)<br />
CA_SetObjectExtraID(index, type, data)<br />
CA_SetObjectPos(index, Float:x, Float:y, Float:z)<br />
CA_SetObjectPos_DC(index, Float:x, Float:y, Float:z)<br />
CA_SetObjectRot(index, Float:rx, Float:ry, Float:rz)<br />
CA_SetObjectRot_DC(index, Float:rx, Float:ry, Float:rz)<br />
Float:CA_GetRoomHeight(Float:x, Float:y, Float:z)</code></div></div><span style="color: DimGray;" class="mycode_color">____________________________________________________________________________________________________ </span><br />
<br />
<span style="font-size: large;" class="mycode_size"><span style="color: MediumTurquoise;" class="mycode_color"><span style="font-weight: bold;" class="mycode_b">Loading ColAndreas:</span></span></span><br />
<br />
We recommend using a filterscript to help organize your objects. There is a specific order of operations required to load successfully.<br />
<br />
<div class="codeblock"><div class="title">Code:</div><div class="body" dir="ltr"><code>public OnFilterScriptInit()<br />
{<br />
// Add any remove buildings (This only works once)<br />
CA_RemoveBuilding();<br />
<br />
// Initialize the collision world (This creates San Andreas, the entire map, excluding removed buildings)<br />
CA_Init();<br />
<br />
// Create objects<br />
CA_CreateDynamicObject_SC();<br />
<br />
return 1;<br />
}</code></div></div><span style="color: DimGray;" class="mycode_color">____________________________________________________________________________________________________ </span><br />
<br />
<span style="font-size: large;" class="mycode_size"><span style="color: MediumTurquoise;" class="mycode_color"><span style="font-weight: bold;" class="mycode_b">Capability Demo:</span></span></span><br />
<iframe width="560" height="315" src="//www.youtube.com/embed/aSabQWqQBkI" frameborder="0" allowfullscreen></iframe><br />
<span style="color: DimGray;" class="mycode_color">____________________________________________________________________________________________________ </span><br />
<br />
<span style="font-size: large;" class="mycode_size"><span style="color: MediumTurquoise;" class="mycode_color"><span style="font-weight: bold;" class="mycode_b">Known Issues:</span></span></span><ul class="mycode_list"><li>There is no virtual world / interior support (there may never be).<br />
</li>
</ul>
]]></content>
		<draft xmlns="http://purl.org/atom-blog/ns#">false</draft>
	</entry>
	<entry xmlns="http://www.w3.org/2005/Atom">
		<author>
			<name type="html" xml:space="preserve"><![CDATA[<a href="https://www.burgershot.gg/member.php?action=profile&uid=36">Yashas</a>]]></name>
		</author>
		<published>2019-04-14T11:30:50Z</published>
		<updated>2019-04-17T04:54:44Z</updated>
		<link rel="alternate" type="text/html" href="https://www.burgershot.gg/showthread.php?tid=152" />
		<id>https://www.burgershot.gg/showthread.php?tid=152</id>
		<title xml:space="preserve"><![CDATA[Aimbot detector using Artifical Intelligence]]></title>
		<content type="html" xml:space="preserve" xml:base="https://www.burgershot.gg/showthread.php?tid=152"><![CDATA[<span style="font-weight: bold;" class="mycode_b"><span style="font-size: xx-large;" class="mycode_size"><span style="color: DarkRed;" class="mycode_color">Anti</span><span style="color: Black;" class="mycode_color">Aimbot</span></span></span><br />
<br />
<span style="font-weight: bold;" class="mycode_b"><span style="color: DarkRed;" class="mycode_color">Version:</span> E1 (experimental version)</span><br />
<br />
<span style="font-weight: bold;" class="mycode_b">DISCLAIMER:</span> <br />
- the plugin is still experimental and has undergone rigorous testing on artificial servers but hasn't been tested on a real server with a large player base<br />
- works for M4/AK47/MP5 only<br />
<br />
AntiAimbot is an aimbot detector which uses a combination of empirical methods and artificial intelligence to accurately identify players using any form of aim assist. Empirical methods such as high ratio on moving players are used to efficiently suspect players of using aimbot. The samples of players suspected of using aim assist tools are forwarded to a combination of AI machinery consisting of mainly a neural network and a support vector machine for further detailed analysis. The AI machinery investigates the samples and decides if the feat achieved is humanly possible or not by "probably" (they are all black boxes) analyzing how quickly the aim moves, how synchronized the aim was with the motion of the victim, how fast the player reacts to changes and many such features.<br />
<br />
<div style="text-align: center;" class="mycode_align">The latest version is significantly more accurate than the version used in the vdeio.</div>
<br />
<div style="text-align: center;" class="mycode_align"><iframe width="560" height="315" src="//www.youtube.com/embed/BUl2NU3YRxw" frameborder="0" allowfullscreen></iframe></div>
<br />
<span style="color: DarkGreen;" class="mycode_color"><span style="font-size: x-large;" class="mycode_size">Overview:</span></span><br />
<br />
The entire process can be divided into two sections based on the type of used: empirical methods and artificial intelligence methods. The empirical methods are used to quickly suspect the <span style="font-style: italic;" class="mycode_i">possibility</span> of an aim assist software being used while the artificial intelligence based methods are used to analyze the suspected samples more rigorously.<br />
<br />
The AI-based detectors are trained to identify possible use of aim assist accurately when possible, i.e. they give negatives when they aren't sure. Given enough time, they will mostly detect the use of aim assist.<br />
<br />
<blockquote class="mycode_quote"><cite>Quote:</cite>The submitted vectors go through a lot of stages.<br />
<br />
stages of data flow:<br />
<br />
    data collection: a script collects shot vectors<br />
    pre-filter: carries out checks to eliminate unreliable shot vectors<br />
    transform: transforms shot vectors to a form suitable for feature extraction<br />
    pooling: pool together a variable number of transformed vectors to form a complete sample<br />
    extract features: extract features from the vector pool<br />
    post-filter: carry out basic empirical checks on the sample to check reliability and possible use of aim-assist; if suspicious, forward it to the AI machinery<br />
    detectors: run through different detectors and average the result<br />
<br />
<br />
Some of the pre-filter conditions are:<br />
- must use a M4/AK47/MP5 (other weapons are disabled because of their unreliability)<br />
- the victim must be moving<br />
- and many more<br />
<br />
If a shot fails any of these conditions, the entire running pool is rejected and starts afresh.<br />
<br />
After pooling many shots together, it goes through another filter. The filter decides if there is enough information that can be extracted from the pool; if not, it continues to collect more shot. Once there is enough useful information, it checks for reliability and estimates the use of aimbot, for example, by checking the pool's ratio (required to be high for last X number of shots where X is between 7 and 20).<br />
<br />
It's only after this step the sample is said to be fully complete. This is when `submit_vector` returns 1. This sample is put in a queue for processing. The detectors are running in different threads. They pick a sample from the input queue, investigate it, dump it to the output queue. In the server's next tick cycle, results are pulled out of the output queue and the callback is triggered for each sample.<br />
<br />
Hence, the callback is triggered only when there was enough suspicion and after it was processed by the AI machinery.<br />
<br />
TL;DR:<br />
- callback is triggered only when there is some suspicion, i.e. when the empirical methods suggest the use of aimbot<br />
* however, the AI machinery can reverse the decision and say this may not have been an aimbot<br />
- it's difficult to get the callback triggered without using an aimbot because most samples are rejected empirical methods<br />
- callback is triggered every minute or so when an aimbot is used<br />
* the callback being triggered does not imply that aimbot was used; you need to check the probabilities </blockquote>
<br />
<span style="color: DarkGreen;" class="mycode_color"><span style="font-size: x-large;" class="mycode_size">Usage:</span></span><br />
<br />
<span style="font-size: large;" class="mycode_size">building plugin from source (Linux):</span><br />
<ol type="1" class="mycode_list"><li>install gcc-8, g++8, gcc-8-multilib, g++-8-multilib, cmake<br />
</li>
<li>clone the <a href="https://github.com/YashasSamaga/sampml" target="_blank" rel="noopener" class="mycode_url"><span style="font-weight: bold;" class="mycode_b">sampml</span></a> repository<br />
</li>
<li>change directory to `examples/anti-aimbot/plugin`<br />
</li>
<li>create and enter `build` directory<br />
</li>
<li>generate build files using `cmake .. -DCMAKE_BUILD_TYPE=Release -DCMAKE_C_COMPILER=gcc-8 -DCMAKE_CXX_COMPILER=g++-8`<br />
</li>
<li>build plugin using `cmake --build . -- -j &#x26;tnumber of threads&#x26;t`<br />
</li>
</ol>
<span style="font-size: large;" class="mycode_size">building plugin from source (Windows):</span><br />
<ol type="1" class="mycode_list"><li>clone the <a href="https://github.com/YashasSamaga/sampml" target="_blank" rel="noopener" class="mycode_url"><span style="font-weight: bold;" class="mycode_b">sampml</span></a> repository<br />
</li>
<li>open `examples/anti-aimbot/plugin` directory in Visual Studio 2017<br />
</li>
<li>click on CMake-&#x26;tBuild<br />
</li>
</ol>
<span style="font-size: large;" class="mycode_size">installing:</span><br />
<ol type="1" class="mycode_list"><li>move the plugin binary to the `plugins` directory<br />
</li>
<li>create a new directory `anti-aimbot` in the `plugins` directory<br />
</li>
<li>create a new directory `models` in `plugins/anti-aimbot` directory<br />
</li>
<li>copy three model files from `examples/anti-aimbot/training/models` to the models folder<br />
</li>
<li>[optional] create config.cfg in the `anti-aimbot` directory<br />
</li>
</ol>
<span style="font-size: large;" class="mycode_size">configuring the plugin:</span><br />
<span style="font-weight: bold;" class="mycode_b">thread_pool_size:</span> number of threads that can be used for detectors (default: 4)<br />
<span style="font-weight: bold;" class="mycode_b">rf_model_file:</span> random forest model file (default: plugins/anti-aimbot/models/rf_classifier.dat)<br />
<span style="font-weight: bold;" class="mycode_b">svm_model_file</span>: svm model file (default: plugins/anti-aimbot/models/svm_classifier.dat)<br />
<span style="font-weight: bold;" class="mycode_b">dnn_model_file</span>: dnn model file (default: plugins/anti-aimbot/models/dnn_classifier.dat)<br />
<br />
<span style="font-weight: bold;" class="mycode_b">Example `config.cfg`:</span><br />
<div class="codeblock"><div class="title">Code:</div><div class="body" dir="ltr"><code>thread_pool_size 2<br />
dnn_model_file plugins/anti-aimbot/models/dnn2_classifier.dat</code></div></div><br />
<span style="font-size: large;" class="mycode_size">submitting a shot vector:</span><br />
<br />
<div class="codeblock"><div class="title">Code:</div><div class="body" dir="ltr"><code>stock CollectDataOPWS(data[E_SHOT_VECTOR], playerid, weaponid, hittype, hitid, Float:fX, Float:fY, Float:fZ)<br />
native submit_vector(playerid, data[E_SHOT_VECTOR]);</code></div></div><br />
<div class="codeblock"><div class="title">Code:</div><div class="body" dir="ltr"><code>#include &#x26;taimbot_dc.inc&#x26;t<br />
public OnPlayerWeaponShot(playerid, weaponid, hittype, hitid, Float:fX, Float:fY, Float:fZ)<br />
{<br />
        new data[E_SHOT_VECTOR];<br />
        CollectDataOPWS(data, playerid, weaponid, hittype, hitid, fX, fY, fZ);<br />
    submit_vector(playerid, data);<br />
     return 1;<br />
}</code></div></div><br />
<span style="font-size: large;" class="mycode_size">obtaining results:</span><br />
<br />
<div class="codeblock"><div class="title">Code:</div><div class="body" dir="ltr"><code>forward OnPlayerSuspectedForAimbot(playerid, Float:probabilities[3], time[3]);</code></div></div><br />
<div class="codeblock"><div class="title">Code:</div><div class="body" dir="ltr"><code>#include &#x26;taimbot_dc.inc&#x26;t<br />
public OnPlayerSuspectedForAimbot(playerid, Float:probabilities[3], time[3])<br />
{<br />
    /* results are sent after a few seconds; hence, check if the player is still connected */<br />
    if(!IsPlayerConnected(playerid))<br />
        return 1;<br />
<br />
    static enum {<br />
        COLOR_RED = 0xFF0000FF,<br />
        COLOR_GREEN = 0x00FF00FF,<br />
    };<br />
<br />
    new str[144], name[MAX_PLAYER_NAME];<br />
    GetPlayerName(playerid, name, sizeof(name));<br />
<br />
    /*<br />
    ** there are three independent detectors<br />
    ** - random forest<br />
    ** - support vector machine<br />
    ** - deep neural network<br />
    **<br />
    ** `probabilities` contains the outputs of the detectors in the aforementioned order<br />
    ** `time` contains the CPU microseconds used by each of the detectors in the aforementioned order<br />
    **<br />
    ** the average of the probabilities can be used to get an overall estimate<br />
    ** choose a cutoff above which the result is considered to be an aimbot sample<br />
    ** the code below sends a message for all samples<br />
    */    <br />
<br />
    const Float:cutoff = 0.6;<br />
    new Float:avg = (probabilities[0] + probabilities[1] + probabilities[2])/3;<br />
<br />
    format(str, sizeof(str), "%s(%d) &#x26;t&#x26;t RF: %.2f (%dus) SVM: %.2f (%dus), DNN: %.2f (%dus)",<br />
                             name, playerid,<br />
                             probabilities[0], time[0],<br />
                             probabilities[1], time[1],<br />
                              probabilities[2], time[2]);<br />
                              <br />
    new color = ((avg &#x26;t cutoff) ? COLOR_RED : COLOR_GREEN);<br />
    SendClientMessageToAll(color, str);<br />
    <br />
    format(str, sizeof(str), "Average: %.2f (%s)", avg, ((avg &#x26;t cutoff) ? ("MOSTLY USING AIMBOT") : ("MAY NOT BE USING AIMBOT")));<br />
    SendClientMessageToAll(color, str);<br />
}</code></div></div><br />
<span style="color: DarkGreen;" class="mycode_color"><span style="font-size: x-large;" class="mycode_size">Links:</span></span><br />
<span style="font-weight: bold;" class="mycode_b"><a href="https://github.com/YashasSamaga/sampml" target="_blank" rel="noopener" class="mycode_url">GitHub Repository</a></span><br />
<br />
<span style="font-weight: bold;" class="mycode_b"><a href="https://discord.gg/A3e8D6J" target="_blank" rel="noopener" class="mycode_url">Contributing &amp; Support Requests</a></span><br />
discord server for:<br />
- research &amp; development<br />
- support requests<br />
- contributing<br />
<br />
Looking for people to test the plugin on real servers and provide feedback. Only three skin aimbots were used for training and hence the detectors might fail for specific cases which I expect to be reported. You can get the training summary on Travis or AppVeyor.<br />
<br />
<span style="color: DarkGreen;" class="mycode_color"><span style="font-size: x-large;" class="mycode_size">Credits:</span></span><br />
<span style="font-size: small;" class="mycode_size">Over dozen people were involved in testing an collecting data. I'd like to mention the top contributors:</span><br />
<ol type="1" class="mycode_list"><li><span style="font-size: small;" class="mycode_size">Helium</span><br />
</li>
<li><span style="font-size: small;" class="mycode_size"><span style="font-size: small;" class="mycode_size">Variable/H2O</span></span><br />
</li>
<li><span style="font-size: small;" class="mycode_size">Luzziz</span><br />
</li>
</ol>
]]></content>
		<draft xmlns="http://purl.org/atom-blog/ns#">false</draft>
	</entry>
	<entry xmlns="http://www.w3.org/2005/Atom">
		<author>
			<name type="html" xml:space="preserve"><![CDATA[<a href="https://www.burgershot.gg/member.php?action=profile&uid=43">SyS</a>]]></name>
		</author>
		<published>2019-04-14T07:41:02Z</published>
		<updated>2019-05-07T16:36:23Z</updated>
		<link rel="alternate" type="text/html" href="https://www.burgershot.gg/showthread.php?tid=136" />
		<id>https://www.burgershot.gg/showthread.php?tid=136</id>
		<title xml:space="preserve"><![CDATA[SampBcrypt]]></title>
		<content type="html" xml:space="preserve" xml:base="https://www.burgershot.gg/showthread.php?tid=136"><![CDATA[<div style="text-align: center;" class="mycode_align"><span style="color: #996633;" class="mycode_color"><span style="font-size: xx-large;" class="mycode_size"><span style="font-weight: bold;" class="mycode_b">SampBcrypt</span></span></span></div>
<br />
<div style="text-align: center;" class="mycode_align"><a href="https://travis-ci.org/Sreyas-Sreelal/samp-bcrypt" target="_blank" rel="noopener" class="mycode_url"><img src="https://travis-ci.org/Sreyas-Sreelal/samp-bcrypt.svg?branch=master" loading="lazy"  alt="[Image: samp-bcrypt.svg?branch=master]" class="mycode_img" /></a> <a href="https://ci.appveyor.com/project/Sreyas-Sreelal/samp-bcrypt" target="_blank" rel="noopener" class="mycode_url"><img src="https://ci.appveyor.com/api/projects/status/5rq55kukvy8xymly?svg=true" loading="lazy"  alt="[Image: 5rq55kukvy8xymly?svg=true]" class="mycode_img" /></a> <a href="https://github.com/Sreyas-Sreelal/samp-bcrypt" target="_blank" rel="noopener" class="mycode_url"><img src="https://shields.southcla.ws/badge/sampctl-SampBcrypt-2f2f2f.svg" loading="lazy"  alt="[Image: sampctl-SampBcrypt-2f2f2f.svg]" class="mycode_img" /></a> <a href="https://github.com/Sreyas-Sreelal/samp-bcrypt/issues" target="_blank" rel="noopener" class="mycode_url"><img src="https://img.shields.io/github/issues/Sreyas-Sreelal/samp-bcrypt.svg" loading="lazy"  alt="[Image: samp-bcrypt.svg]" class="mycode_img" /></a> <a href="https://github.com/Sreyas-Sreelal/samp-bcrypt/pulls" target="_blank" rel="noopener" class="mycode_url"><img src="https://img.shields.io/github/issues-pr-raw/sreyas-sreelal/samp-bcrypt.svg" loading="lazy"  alt="[Image: samp-bcrypt.svg]" class="mycode_img" /></a> <a href="http://LICENSE" target="_blank" rel="noopener" class="mycode_url"><img src="https://img.shields.io/github/license/sreyas-sreelal/samp-bcrypt.svg" loading="lazy"  alt="[Image: samp-bcrypt.svg]" class="mycode_img" /></a></div>
<br />
<div style="text-align: center;" class="mycode_align">A bcrypt plugin for samp in Rust.</div>
<br />
<span style="color: #993399;" class="mycode_color"><span style="font-size: x-large;" class="mycode_size"><span style="font-weight: bold;" class="mycode_b">Installation</span></span></span><br />
<br />
<span style="color: DeepSkyBlue;" class="mycode_color"><span style="font-size: large;" class="mycode_size"><span style="font-weight: bold;" class="mycode_b">sampctl</span></span></span><br />
<br />
If you are a sampctl user <br />
<br />
<span style="font-family: courier new;" class="mycode_font">sampctl p install Sreyas-Sreelal/samp-bcrypt</span><br />
<br />
<span style="color: DeepSkyBlue;" class="mycode_color"><span style="font-size: large;" class="mycode_size"><span style="font-weight: bold;" class="mycode_b">OR</span></span></span><br />
<ul class="mycode_list"><li>Download suitable binary files from releases for your operating system<br />
</li>
<li>Add it your <span style="font-family: courier new;" class="mycode_font">plugins</span> folder<br />
</li>
<li>Add <span style="font-family: courier new;" class="mycode_font">samp_bcrypt</span> to server.cfg or  <span style="font-family: courier new;" class="mycode_font">samp_bcrypt.so</span> (for linux)<br />
</li>
<li>Add <a href="http://include/samp_bcrypt.inc" target="_blank" rel="noopener" class="mycode_url">samp_bcrypt.inc</a> in includes folder<br />
</li>
</ul>
<span style="color: #993399;" class="mycode_color"><span style="font-size: x-large;" class="mycode_size"><span style="font-weight: bold;" class="mycode_b">Building</span></span></span><br />
<ul class="mycode_list"><li>Clone the repo<br />
<br />
<span style="font-family: courier new;" class="mycode_font">git clone https://github.com/Sreyas-Sreelal/samp-bcrypt.git</span><br />
<br />
</li>
<li>Setup testing server<br />
<br />
<span style="font-family: courier new;" class="mycode_font">make setup</span><br />
<br />
</li>
<li>Build using makefile<br />
<br />
<span style="font-family: courier new;" class="mycode_font">make release</span> for release builds<br />
<br />
<span style="font-family: courier new;" class="mycode_font">make debug</span> for debug builds<br />
<br />
</li>
<li>Run the tests<br />
<br />
<span style="font-family: courier new;" class="mycode_font">make run</span><br />
</li>
</ul>
<span style="color: #993399;" class="mycode_color"><span style="font-size: x-large;" class="mycode_size"><span style="font-weight: bold;" class="mycode_b">API</span></span></span><br />
<ul class="mycode_list"><li><span style="font-weight: bold;" class="mycode_b">bcrypt_hash(playerid,callback[],input[],cost)</span><br />
<ul class="mycode_list"><li><span style="font-family: courier new;" class="mycode_font">playerid</span> - id of the player<br />
</li>
<li><span style="font-family: courier new;" class="mycode_font">callback[]</span> - callback to execute after hashing<br />
</li>
<li><span style="font-family: courier new;" class="mycode_font">input[]</span> - string to hash<br />
</li>
<li><span style="font-family: courier new;" class="mycode_font">cost</span> - work factor (4 - 31)<br />
</li>
</ul>
</li>
<li><span style="font-weight: bold;" class="mycode_b">Example</span><br />
<br />
<div class="codeblock phpcodeblock"><div class="title">PHP Code:</div><div class="body"><div dir="ltr"><code><span style="color: #0000BB">main</span><span style="color: #007700">(){<br />&nbsp;</span><span style="color: #0000BB">bcrypt_hash</span><span style="color: #007700">(</span><span style="color: #0000BB">0</span><span style="color: #007700">,</span><span style="color: #DD0000">"OnPassswordHash"</span><span style="color: #007700">,</span><span style="color: #DD0000">"text"</span><span style="color: #007700">,</span><span style="color: #0000BB">12</span><span style="color: #007700">);<br />}<br /><br /><br /></span><span style="color: #0000BB">forward&nbsp;OnPassswordHash</span><span style="color: #007700">(</span><span style="color: #0000BB">playerid</span><span style="color: #007700">);<br />public&nbsp;</span><span style="color: #0000BB">OnPassswordHash</span><span style="color: #007700">(</span><span style="color: #0000BB">playerid</span><span style="color: #007700">){<br />&nbsp;</span><span style="color: #FF8000">//hashing&nbsp;completed<br /></span><span style="color: #007700">}&nbsp;<br /></span></code></div></div></div><br />
</li>
<li><span style="font-weight: bold;" class="mycode_b">bcrypt_get_hash(dest[],size = sizeof(hash))</span><br />
<ul class="mycode_list"><li><span style="font-family: courier new;" class="mycode_font">dest[]</span> - string to store hashed data<br />
</li>
<li><span style="font-family: courier new;" class="mycode_font">size</span> - max size of dest string<br />
</li>
</ul>
</li>
<li><span style="font-weight: bold;" class="mycode_b">Example</span><br />
<br />
<div class="codeblock phpcodeblock"><div class="title">PHP Code:</div><div class="body"><div dir="ltr"><code><span style="color: #0000BB">main</span><span style="color: #007700">(){<br />&nbsp;</span><span style="color: #0000BB">bcrypt_hash</span><span style="color: #007700">(</span><span style="color: #0000BB">0</span><span style="color: #007700">,</span><span style="color: #DD0000">"OnPassswordHash"</span><span style="color: #007700">,</span><span style="color: #DD0000">"text"</span><span style="color: #007700">,</span><span style="color: #0000BB">12</span><span style="color: #007700">);<br />}<br /><br /><br /></span><span style="color: #0000BB">forward&nbsp;OnPassswordHash</span><span style="color: #007700">(</span><span style="color: #0000BB">playerid</span><span style="color: #007700">);<br />public&nbsp;</span><span style="color: #0000BB">OnPassswordHash</span><span style="color: #007700">(</span><span style="color: #0000BB">playerid</span><span style="color: #007700">){<br />&nbsp;new&nbsp;</span><span style="color: #0000BB">dest</span><span style="color: #007700">[</span><span style="color: #0000BB">250</span><span style="color: #007700">];<br />&nbsp;</span><span style="color: #0000BB">bcrypt_get_hash</span><span style="color: #007700">(</span><span style="color: #0000BB">dest</span><span style="color: #007700">);<br />&nbsp;</span><span style="color: #0000BB">printf</span><span style="color: #007700">(</span><span style="color: #DD0000">"hash&nbsp;:&nbsp;%s"</span><span style="color: #007700">,</span><span style="color: #0000BB">dest</span><span style="color: #007700">);<br />}&nbsp;<br /></span></code></div></div></div><br />
</li>
<li><span style="font-weight: bold;" class="mycode_b">bcrypt_verify(playerid,callback[],input[],hash[])</span><br />
<ul class="mycode_list"><li><span style="font-family: courier new;" class="mycode_font">playerid</span> - id of the player<br />
</li>
<li><span style="font-family: courier new;" class="mycode_font">callback[]</span> - callback to execute after hashing<br />
</li>
<li><span style="font-family: courier new;" class="mycode_font">input[]</span> - text to compare with hash<br />
</li>
<li><span style="font-family: courier new;" class="mycode_font">hash[]</span> - hash to compare with text<br />
</li>
</ul>
</li>
<li><span style="font-weight: bold;" class="mycode_b">Example</span><br />
<br />
<div class="codeblock phpcodeblock"><div class="title">PHP Code:</div><div class="body"><div dir="ltr"><code><span style="color: #0000BB">main</span><span style="color: #007700">(){<br />&nbsp;</span><span style="color: #0000BB">bcrypt_hash</span><span style="color: #007700">(</span><span style="color: #0000BB">0</span><span style="color: #007700">,</span><span style="color: #DD0000">"OnPassswordHash"</span><span style="color: #007700">,</span><span style="color: #DD0000">"text"</span><span style="color: #007700">,</span><span style="color: #0000BB">12</span><span style="color: #007700">);<br />}<br /><br /><br /></span><span style="color: #0000BB">forward&nbsp;OnPassswordHash</span><span style="color: #007700">(</span><span style="color: #0000BB">playerid</span><span style="color: #007700">);<br />public&nbsp;</span><span style="color: #0000BB">OnPassswordHash</span><span style="color: #007700">(</span><span style="color: #0000BB">playerid</span><span style="color: #007700">){<br />&nbsp;new&nbsp;</span><span style="color: #0000BB">dest</span><span style="color: #007700">[</span><span style="color: #0000BB">250</span><span style="color: #007700">];<br />&nbsp;</span><span style="color: #0000BB">bcrypt_get_hash</span><span style="color: #007700">(</span><span style="color: #0000BB">dest</span><span style="color: #007700">);<br />&nbsp;</span><span style="color: #0000BB">bcrypt_verify</span><span style="color: #007700">(</span><span style="color: #0000BB">playerid</span><span style="color: #007700">,</span><span style="color: #DD0000">"OnPassswordVerify"</span><span style="color: #007700">,</span><span style="color: #DD0000">"text"</span><span style="color: #007700">,</span><span style="color: #0000BB">dest</span><span style="color: #007700">);<br />}<br /><br /><br /></span><span style="color: #0000BB">forward&nbsp;OnPassswordVerify</span><span style="color: #007700">(</span><span style="color: #0000BB">playerid</span><span style="color: #007700">,</span><span style="color: #0000BB">bool</span><span style="color: #007700">:</span><span style="color: #0000BB">success</span><span style="color: #007700">);<br />public&nbsp;</span><span style="color: #0000BB">OnPassswordVerify</span><span style="color: #007700">(</span><span style="color: #0000BB">playerid</span><span style="color: #007700">,</span><span style="color: #0000BB">bool</span><span style="color: #007700">:</span><span style="color: #0000BB">success</span><span style="color: #007700">){<br />&nbsp;</span><span style="color: #FF8000">//success&nbsp;denotes&nbsp;verifying&nbsp;was&nbsp;successful&nbsp;or&nbsp;not<br />&nbsp;</span><span style="color: #007700">if(</span><span style="color: #0000BB">success</span><span style="color: #007700">){<br />&nbsp;</span><span style="color: #FF8000">//verfied<br />&nbsp;</span><span style="color: #007700">}&nbsp;else{<br />&nbsp;</span><span style="color: #FF8000">//hash&nbsp;doesn't&nbsp;match&nbsp;with&nbsp;text<br />&nbsp;</span><span style="color: #007700">}<br />}&nbsp;<br /></span></code></div></div></div><br />
</li>
<li><span style="font-weight: bold;" class="mycode_b">bcrypt_set_thread_limit(value)</span><br />
<ul class="mycode_list"><li><span style="font-family: courier new;" class="mycode_font">value</span> - number of worker threads at a time<br />
</li>
</ul>
</li>
<li><span style="font-weight: bold;" class="mycode_b">Example</span><br />
<br />
<div class="codeblock phpcodeblock"><div class="title">PHP Code:</div><div class="body"><div dir="ltr"><code><span style="color: #0000BB">main</span><span style="color: #007700">(){<br />&nbsp;</span><span style="color: #0000BB">bcrypt_set_thread_limit</span><span style="color: #007700">(</span><span style="color: #0000BB">3</span><span style="color: #007700">);<br />}&nbsp;<br /></span></code></div></div></div></li>
</ul>
]]></content>
		<draft xmlns="http://purl.org/atom-blog/ns#">false</draft>
	</entry>
	<entry xmlns="http://www.w3.org/2005/Atom">
		<author>
			<name type="html" xml:space="preserve"><![CDATA[<a href="https://www.burgershot.gg/member.php?action=profile&uid=43">SyS</a>]]></name>
		</author>
		<published>2019-04-14T06:46:59Z</published>
		<updated>2019-04-15T03:47:54Z</updated>
		<link rel="alternate" type="text/html" href="https://www.burgershot.gg/showthread.php?tid=131" />
		<id>https://www.burgershot.gg/showthread.php?tid=131</id>
		<title xml:space="preserve"><![CDATA[PawnScraper]]></title>
		<content type="html" xml:space="preserve" xml:base="https://www.burgershot.gg/showthread.php?tid=131"><![CDATA[<div style="text-align: center;" class="mycode_align"><span style="color: #ff9933;" class="mycode_color"><span style="font-size: xx-large;" class="mycode_size">PawnScraper</span></span></div>
<br />
<br />
<div style="text-align: center;" class="mycode_align">
<img src="https://travis-ci.org/Sreyas-Sreelal/pawn-scraper.svg?branch=master" loading="lazy"  alt="[Image: pawn-scraper.svg?branch=master]" class="mycode_img" /> <img src="https://ci.appveyor.com/api/projects/status/5rq55kukvy8xymly?svg=true" loading="lazy"  alt="[Image: 5rq55kukvy8xymly?svg=true]" class="mycode_img" /> <img src="https://shields.southcla.ws/badge/sampctl-PawnScraper-2f2f2f.svg" loading="lazy"  alt="[Image: sampctl-PawnScraper-2f2f2f.svg]" class="mycode_img" /> <img src="https://img.shields.io/github/issues/Sreyas-Sreelal/pawn-scraper.svg" loading="lazy"  alt="[Image: pawn-scraper.svg]" class="mycode_img" /> <img src="https://img.shields.io/github/issues-pr-raw/sreyas-sreelal/pawn-scraper.svg" loading="lazy"  alt="[Image: pawn-scraper.svg]" class="mycode_img" /> <img src="https://img.shields.io/github/license/sreyas-sreelal/pawn-scraper.svg" loading="lazy"  alt="[Image: pawn-scraper.svg]" class="mycode_img" /><br />
<br />
A powerful scraper plugin that provides interface for utlising html_parsers and css selectors in pawn.</div>
<span style="font-size: medium;" class="mycode_size"><span style="font-family: Fixedsys;" class="mycode_font"><br />
<br />
<span style="color: #7F00FF;" class="mycode_color"><span style="font-size: x-large;" class="mycode_size"><span style="font-weight: bold;" class="mycode_b">Installing</span></span></span><br />
<br />
Thanks to <a href="https://www.github/southclaws" target="_blank" rel="noopener" class="mycode_url">Southclaws</a>,plugin installation is now much easier with <a href="https://www.github/southclaws/sampctl" target="_blank" rel="noopener" class="mycode_url">sampctl</a><br />
<br />
<div class="codeblock phpcodeblock"><div class="title">PHP Code:</div><div class="body"><div dir="ltr"><code><span style="color: #0000BB">sampctl&nbsp;p&nbsp;install&nbsp;Sreyas</span><span style="color: #007700">-</span><span style="color: #0000BB">Sreelal</span><span style="color: #007700">/</span><span style="color: #0000BB">pawn</span><span style="color: #007700">-</span><span style="color: #0000BB">scraper&nbsp;<br /></span></code></div></div></div><br />
<span style="color: SlateGray;" class="mycode_color"><span style="font-size: medium;" class="mycode_size">OR</span></span><br />
</span></span><ul class="mycode_list"><li>Download suitable binary files from <a href="https://github.com/Sreyas-Sreelal/pawn-scraper/releases" target="_blank" rel="noopener" class="mycode_url">releases</a> for your operating system<br />
</li>
<li>Add it your <span style="font-family: courier new;" class="mycode_font">plugins</span> folder<br />
</li>
<li>Add <span style="font-family: courier new;" class="mycode_font">PawnScraper</span> to server.cfg or  <span style="font-family: courier new;" class="mycode_font">PawnScraper.so</span> (for linux)<br />
</li>
<li>Add <a href="https://github.com/Sreyas-Sreelal/pawn-scraper/blob/master/include/pawnscraper.inc" target="_blank" rel="noopener" class="mycode_url">pawnscraper.inc</a> in includes folder<br />
</li>
</ul>
<span style="font-size: medium;" class="mycode_size"><br />
<br />
<span style="color: #7F00FF;" class="mycode_color"><span style="font-size: x-large;" class="mycode_size"><span style="font-weight: bold;" class="mycode_b">Building</span></span></span><br />
</span><ul class="mycode_list"><li>Clone the repo<br />
<br />
<div class="codeblock phpcodeblock"><div class="title">PHP Code:</div><div class="body"><div dir="ltr"><code><span style="color: #0000BB">git&nbsp;</span><span style="color: #007700">clone&nbsp;</span><span style="color: #0000BB">https</span><span style="color: #007700">:</span><span style="color: #FF8000">//github.com/Sreyas-Sreelal/pawn-scraper.git&nbsp;<br /></span></code></div></div></div><br />
</li>
<li>Compile the plugin using nightly compiler<br />
<ul class="mycode_list"><li><span style="font-weight: bold;" class="mycode_b">Windows</span><br />
<div class="codeblock phpcodeblock"><div class="title">PHP Code:</div><div class="body"><div dir="ltr"><code><span style="color: #0000BB">cargo&nbsp;</span><span style="color: #007700">+</span><span style="color: #0000BB">nightly</span><span style="color: #007700">-</span><span style="color: #0000BB">i686</span><span style="color: #007700">-</span><span style="color: #0000BB">pc</span><span style="color: #007700">-</span><span style="color: #0000BB">windows</span><span style="color: #007700">-</span><span style="color: #0000BB">msvc&nbsp;build&nbsp;</span><span style="color: #007700">--</span><span style="color: #0000BB">release&nbsp;<br /></span></code></div></div></div></li>
<li><span style="font-weight: bold;" class="mycode_b">Linux</span><br />
<div class="codeblock phpcodeblock"><div class="title">PHP Code:</div><div class="body"><div dir="ltr"><code><span style="color: #0000BB">cargo&nbsp;</span><span style="color: #007700">+</span><span style="color: #0000BB">nightly</span><span style="color: #007700">-</span><span style="color: #0000BB">i686</span><span style="color: #007700">-</span><span style="color: #0000BB">unknown</span><span style="color: #007700">-</span><span style="color: #0000BB">linux</span><span style="color: #007700">-</span><span style="color: #0000BB">gnu&nbsp;build&nbsp;</span><span style="color: #007700">--</span><span style="color: #0000BB">release&nbsp;<br /></span></code></div></div></div></li>
</ul>
</li>
</ul>
<span style="font-size: medium;" class="mycode_size"><br />
<br />
<span style="color: #7F00FF;" class="mycode_color"><span style="font-size: x-large;" class="mycode_size"><span style="font-weight: bold;" class="mycode_b">API</span></span></span><br />
</span><ul class="mycode_list"><li><span style="font-size: medium;" class="mycode_size">ParseHtmlDocument(document[])</span>]<br />
<ul class="mycode_list"><li><span style="font-weight: bold;" class="mycode_b">Params</span><br />
<ul class="mycode_list"><li><span style="font-family: courier new;" class="mycode_font">document[]</span> - string of html document<br />
</li>
</ul>
</li>
<li><span style="font-weight: bold;" class="mycode_b">Returns</span><br />
<ul class="mycode_list"><li>Html document instance id<br />
</li>
<li>if failed to parse document <span style="font-family: courier new;" class="mycode_font">INVALID_HTML_DOC</span> is returned<br />
</li>
</ul>
</li>
<li><span style="font-weight: bold;" class="mycode_b">Example Usage</span><br />
<span style="font-family: courier new;" class="mycode_font"><br />
<div class="codeblock phpcodeblock"><div class="title">PHP Code:</div><div class="body"><div dir="ltr"><code><span style="color: #007700">new&nbsp;</span><span style="color: #0000BB">Html</span><span style="color: #007700">:</span><span style="color: #0000BB">doc&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">ParseHtmlDocument</span><span style="color: #007700">(</span><span style="color: #DD0000">"&#092;<br />&nbsp;&#x26;t!DOCTYPE&nbsp;html&#x26;t&#092;<br />&nbsp;&#x26;tmeta&nbsp;charset=&#092;"utf-8&#092;"&#x26;t&#092;<br />&nbsp;&#x26;ttitle&#x26;tHello,&nbsp;world!&#x26;t/title&#x26;t&#092;<br />&nbsp;&#x26;th1&nbsp;class=&#092;"foo&#092;"&#x26;tHello,&nbsp;&#x26;ti&#x26;tworld!&#x26;t/i&#x26;t&#x26;t/h1&#x26;t&#092;<br />&nbsp;"</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">ASSERT</span><span style="color: #007700">(</span><span style="color: #0000BB">doc&nbsp;</span><span style="color: #007700">!=&nbsp;</span><span style="color: #0000BB">INVALID_HTML_DOC</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">DeleteHtml</span><span style="color: #007700">(</span><span style="color: #0000BB">doc</span><span style="color: #007700">);&nbsp;<br /></span></code></div></div></div></span><br />
</li>
</ul>
</li>
<li><span style="font-size: medium;" class="mycode_size">ResponseParseHtml(Response:id)</span><br />
<ul class="mycode_list"><li><span style="font-weight: bold;" class="mycode_b">Params</span><br />
<ul class="mycode_list"><li><span style="font-family: courier new;" class="mycode_font">id</span> - Http response id returned from HttpGet<br />
</li>
</ul>
</li>
<li><span style="font-weight: bold;" class="mycode_b">Returns</span><br />
<ul class="mycode_list"><li>Html document instance id<br />
</li>
<li>if failed to parse document <span style="font-family: courier new;" class="mycode_font">INVALID_HTML_DOC</span> is returned<br />
</li>
</ul>
</li>
<li><span style="font-weight: bold;" class="mycode_b">Example Usage</span><br />
<span style="font-family: courier new;" class="mycode_font"><br />
<div class="codeblock phpcodeblock"><div class="title">PHP Code:</div><div class="body"><div dir="ltr"><code><span style="color: #007700">new&nbsp;</span><span style="color: #0000BB">Response</span><span style="color: #007700">:</span><span style="color: #0000BB">response&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">HttpGet</span><span style="color: #007700">(</span><span style="color: #DD0000">"https://www.sa-mp.com"</span><span style="color: #007700">);<br />new&nbsp;</span><span style="color: #0000BB">Html</span><span style="color: #007700">:</span><span style="color: #0000BB">doc&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">ResponseParseHtml</span><span style="color: #007700">(</span><span style="color: #0000BB">response</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">ASSERT</span><span style="color: #007700">(</span><span style="color: #0000BB">doc&nbsp;</span><span style="color: #007700">!=&nbsp;</span><span style="color: #0000BB">INVALID_HTML_DOC</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">DeleteHtml</span><span style="color: #007700">(</span><span style="color: #0000BB">doc</span><span style="color: #007700">);&nbsp;<br /></span></code></div></div></div></span><br />
</li>
</ul>
</li>
<li><span style="font-size: medium;" class="mycode_size">HttpGet(url[],Header:headerid=INVALID_HEADER)</span><br />
<ul class="mycode_list"><li><span style="font-weight: bold;" class="mycode_b">Params</span><br />
<ul class="mycode_list"><li><span style="font-family: courier new;" class="mycode_font">url[]</span> - Url of a website<br />
</li>
<li><span style="font-family: courier new;" class="mycode_font">header</span> - id of header object created using CreateHeader<br />
</li>
</ul>
</li>
<li><span style="font-weight: bold;" class="mycode_b">Returns</span><br />
<ul class="mycode_list"><li>Response id if successful<br />
</li>
<li>if failed to <span style="font-family: courier new;" class="mycode_font">INVALID_HTTP_RESPONSE</span> is returned<br />
</li>
</ul>
</li>
<li><span style="font-weight: bold;" class="mycode_b">Example Usage</span><br />
<span style="font-family: courier new;" class="mycode_font"><br />
<div class="codeblock phpcodeblock"><div class="title">PHP Code:</div><div class="body"><div dir="ltr"><code><span style="color: #007700">new&nbsp;</span><span style="color: #0000BB">Response</span><span style="color: #007700">:</span><span style="color: #0000BB">response&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">HttpGet</span><span style="color: #007700">(</span><span style="color: #DD0000">"https://www.sa-mp.com"</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">ASSERT</span><span style="color: #007700">(</span><span style="color: #0000BB">response&nbsp;</span><span style="color: #007700">!=&nbsp;</span><span style="color: #0000BB">INVALID_HTTP_RESPONSE</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">DeleteResponse</span><span style="color: #007700">(</span><span style="color: #0000BB">response</span><span style="color: #007700">);&nbsp;<br /></span></code></div></div></div></span><br />
</li>
</ul>
</li>
<li><span style="font-size: medium;" class="mycode_size">HttpGetThreaded(playerid,callback[],url[],Header:headerid=INVALID_HEADER)</span><br />
<ul class="mycode_list"><li><span style="font-weight: bold;" class="mycode_b">Params</span><br />
<ul class="mycode_list"><li><span style="font-family: courier new;" class="mycode_font">playerid</span> - id of the player<br />
</li>
<li><span style="font-family: courier new;" class="mycode_font">callback[]</span> - name of the callback function to handle the response.<br />
</li>
<li><span style="font-family: courier new;" class="mycode_font">url[]</span> - Url of a website<br />
</li>
<li><span style="font-family: courier new;" class="mycode_font">header</span> - id of header object created using CreateHeader<br />
</li>
</ul>
</li>
<li><span style="font-weight: bold;" class="mycode_b">Example Usage</span><br />
<div class="codeblock phpcodeblock"><div class="title">PHP Code:</div><div class="body"><div dir="ltr"><code><span style="color: #0000BB">HttpGetThreaded</span><span style="color: #007700">(</span><span style="color: #0000BB">0</span><span style="color: #007700">,</span><span style="color: #DD0000">"MyHandler"</span><span style="color: #007700">,</span><span style="color: #DD0000">"https://sa-mp.com"</span><span style="color: #007700">);<br /></span><span style="color: #FF8000">//********<br /></span><span style="color: #0000BB">forward&nbsp;MyHandler</span><span style="color: #007700">(</span><span style="color: #0000BB">playerid</span><span style="color: #007700">,</span><span style="color: #0000BB">Response</span><span style="color: #007700">:</span><span style="color: #0000BB">responseid</span><span style="color: #007700">);<br />public&nbsp;</span><span style="color: #0000BB">MyHandler</span><span style="color: #007700">(</span><span style="color: #0000BB">playerid</span><span style="color: #007700">,</span><span style="color: #0000BB">Response</span><span style="color: #007700">:</span><span style="color: #0000BB">responseid</span><span style="color: #007700">){<br /></span><span style="color: #0000BB"> &nbsp; &nbsp;ASSERT</span><span style="color: #007700">(</span><span style="color: #0000BB">responseid&nbsp;</span><span style="color: #007700">!=&nbsp;</span><span style="color: #0000BB">INVALID_HTTP_RESPONSE</span><span style="color: #007700">);<br /></span><span style="color: #0000BB"> &nbsp; &nbsp;DeleteResponse</span><span style="color: #007700">(</span><span style="color: #0000BB">responseid</span><span style="color: #007700">);<br />}&nbsp;<br /></span></code></div></div></div></li>
</ul>
</li>
<li><span style="font-size: medium;" class="mycode_size">ParseSelector(string[])</span><br />
<ul class="mycode_list"><li><span style="font-weight: bold;" class="mycode_b">Params</span><br />
<ul class="mycode_list"><li><span style="font-family: courier new;" class="mycode_font">string[]</span> - CSS selector<br />
</li>
</ul>
</li>
<li><span style="font-weight: bold;" class="mycode_b">Returns</span><br />
<ul class="mycode_list"><li>Selector instance id if successful<br />
</li>
<li>if failed to <span style="font-family: courier new;" class="mycode_font">INVALID_SELECTOR</span> is returned<br />
</li>
</ul>
</li>
<li><span style="font-weight: bold;" class="mycode_b">Example Usage</span><br />
<span style="font-family: courier new;" class="mycode_font"><br />
<div class="codeblock phpcodeblock"><div class="title">PHP Code:</div><div class="body"><div dir="ltr"><code><span style="color: #007700">new&nbsp;</span><span style="color: #0000BB">Selector</span><span style="color: #007700">:</span><span style="color: #0000BB">selector&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">ParseSelector</span><span style="color: #007700">(</span><span style="color: #DD0000">"h1&nbsp;.foo"</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">ASSERT</span><span style="color: #007700">(</span><span style="color: #0000BB">selector&nbsp;</span><span style="color: #007700">!=&nbsp;</span><span style="color: #0000BB">INVALID_SELECTOR</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">DeleteSelector</span><span style="color: #007700">(</span><span style="color: #0000BB">selector</span><span style="color: #007700">);&nbsp;<br /></span></code></div></div></div></span><br />
</li>
</ul>
</li>
<li><span style="font-size: medium;" class="mycode_size">CreateHeader(…)</span><br />
<ul class="mycode_list"><li><span style="font-weight: bold;" class="mycode_b">Params</span><br />
<ul class="mycode_list"><li>key,value pairs of String type<br />
</li>
</ul>
</li>
<li><span style="font-weight: bold;" class="mycode_b">Returns</span><br />
<ul class="mycode_list"><li>Header instance id if successful<br />
</li>
<li>if failed to <span style="font-family: courier new;" class="mycode_font">INVALID_HEADER</span> is returned<br />
</li>
</ul>
</li>
<li><span style="font-weight: bold;" class="mycode_b">Example Usage</span><br />
<span style="font-family: courier new;" class="mycode_font"><br />
<div class="codeblock phpcodeblock"><div class="title">PHP Code:</div><div class="body"><div dir="ltr"><code><span style="color: #007700">new&nbsp;</span><span style="color: #0000BB">Header</span><span style="color: #007700">:</span><span style="color: #0000BB">header&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">CreateHeader</span><span style="color: #007700">(<br /></span><span style="color: #0000BB"> &nbsp; &nbsp;</span><span style="color: #DD0000">"User-Agent"</span><span style="color: #007700">,</span><span style="color: #DD0000">"Mozilla/5.0&nbsp;(Windows&nbsp;NT&nbsp;10.0;&nbsp;Win64;&nbsp;x64)&nbsp;AppleWebKit/537.36"<br /></span><span style="color: #007700">);<br /></span><span style="color: #0000BB">ASSERT</span><span style="color: #007700">(</span><span style="color: #0000BB">header&nbsp;</span><span style="color: #007700">!=&nbsp;</span><span style="color: #0000BB">INVALID_HEADER</span><span style="color: #007700">);<br />new&nbsp;</span><span style="color: #0000BB">Response</span><span style="color: #007700">:</span><span style="color: #0000BB">response&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">HttpGet</span><span style="color: #007700">(</span><span style="color: #DD0000">"https://sa-mp.com/"</span><span style="color: #007700">,</span><span style="color: #0000BB">header</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">ASSERT</span><span style="color: #007700">(</span><span style="color: #0000BB">response&nbsp;</span><span style="color: #007700">!=&nbsp;</span><span style="color: #0000BB">INVALID_HTTP_RESPONSE</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">ASSERT</span><span style="color: #007700">(</span><span style="color: #0000BB">DeleteHeader</span><span style="color: #007700">(</span><span style="color: #0000BB">header</span><span style="color: #007700">)&nbsp;==&nbsp;</span><span style="color: #0000BB">1</span><span style="color: #007700">);&nbsp;<br /></span></code></div></div></div></span><br />
</li>
</ul>
</li>
<li><span style="font-size: medium;" class="mycode_size">GetNthElementName(Html:docid,Selector:selectorid,idx,string[],size = sizeof(string))</span><br />
<ul class="mycode_list"><li><span style="font-weight: bold;" class="mycode_b">Params</span><br />
<ul class="mycode_list"><li><span style="font-family: courier new;" class="mycode_font">docid</span> - Html instance id<br />
</li>
<li><span style="font-family: courier new;" class="mycode_font">selectorid</span> - CSS selector instance id<br />
</li>
<li><span style="font-family: courier new;" class="mycode_font">idx</span> - the n’th occurence of element in the document (starts from 0)<br />
</li>
<li><span style="font-family: courier new;" class="mycode_font">string[]</span> - element name is stored<br />
</li>
<li><span style="font-family: courier new;" class="mycode_font">size</span> - sizeof string<br />
</li>
</ul>
</li>
<li><span style="font-weight: bold;" class="mycode_b">Returns</span><br />
<ul class="mycode_list"><li><span style="font-family: courier new;" class="mycode_font">1</span> if successful<br />
</li>
<li><span style="font-family: courier new;" class="mycode_font">0</span> if failed<br />
</li>
</ul>
</li>
<li><span style="font-weight: bold;" class="mycode_b">Example Usage</span><br />
<br />
<div class="codeblock phpcodeblock"><div class="title">PHP Code:</div><div class="body"><div dir="ltr"><code><span style="color: #007700">new&nbsp;</span><span style="color: #0000BB">Html</span><span style="color: #007700">:</span><span style="color: #0000BB">doc&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">ParseHtmlDocument</span><span style="color: #007700">(</span><span style="color: #DD0000">"&#092;<br /> &nbsp; &nbsp;&#x26;t!DOCTYPE&nbsp;html&#x26;t&#092;<br /> &nbsp; &nbsp;&#x26;tmeta&nbsp;charset=&#092;"utf-8&#092;"&#x26;t&#092;<br /> &nbsp; &nbsp;&#x26;ttitle&#x26;tHello,&nbsp;world!&#x26;t/title&#x26;t&#092;<br /> &nbsp; &nbsp;&#x26;th1&nbsp;class=&#092;"foo&#092;"&#x26;tHello,&nbsp;&#x26;ti&#x26;tworld!&#x26;t/i&#x26;t&#x26;t/h1&#x26;t&#092;<br />"</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">ASSERT</span><span style="color: #007700">(</span><span style="color: #0000BB">doc&nbsp;</span><span style="color: #007700">!=&nbsp;</span><span style="color: #0000BB">INVALID_HTML_DOC</span><span style="color: #007700">);<br /><br />new&nbsp;</span><span style="color: #0000BB">Selector</span><span style="color: #007700">:</span><span style="color: #0000BB">selector&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">ParseSelector</span><span style="color: #007700">(</span><span style="color: #DD0000">"i"</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">ASSERT</span><span style="color: #007700">(</span><span style="color: #0000BB">selector&nbsp;</span><span style="color: #007700">!=&nbsp;</span><span style="color: #0000BB">INVALID_SELECTOR</span><span style="color: #007700">);<br /><br />new&nbsp;</span><span style="color: #0000BB">i</span><span style="color: #007700">=&nbsp;-</span><span style="color: #0000BB">1</span><span style="color: #007700">,</span><span style="color: #0000BB">element_name</span><span style="color: #007700">[</span><span style="color: #0000BB">10</span><span style="color: #007700">];<br />while(</span><span style="color: #0000BB">GetNthElementName</span><span style="color: #007700">(</span><span style="color: #0000BB">doc</span><span style="color: #007700">,</span><span style="color: #0000BB">selector</span><span style="color: #007700">,++</span><span style="color: #0000BB">i</span><span style="color: #007700">,</span><span style="color: #0000BB">element_name</span><span style="color: #007700">)!=</span><span style="color: #0000BB">0</span><span style="color: #007700">){<br /></span><span style="color: #0000BB"> &nbsp; &nbsp;ASSERT</span><span style="color: #007700">(</span><span style="color: #0000BB">strcmp</span><span style="color: #007700">(</span><span style="color: #0000BB">element_name</span><span style="color: #007700">,</span><span style="color: #DD0000">"i"</span><span style="color: #007700">)&nbsp;==&nbsp;</span><span style="color: #0000BB">0</span><span style="color: #007700">);<br />}<br /><br /></span><span style="color: #0000BB">DeleteSelector</span><span style="color: #007700">(</span><span style="color: #0000BB">selector</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">DeleteHtml</span><span style="color: #007700">(</span><span style="color: #0000BB">doc</span><span style="color: #007700">);&nbsp;<br /></span></code></div></div></div></li>
</ul>
</li>
<li><span style="font-size: medium;" class="mycode_size">GetNthElementText(Html:docid,Selector:selectorid,idx,string[],size = sizeof(string))</span><br />
<ul class="mycode_list"><li><span style="font-weight: bold;" class="mycode_b">Params</span><br />
<ul class="mycode_list"><li><span style="font-family: courier new;" class="mycode_font">docid</span> - Html instance id<br />
</li>
<li><span style="font-family: courier new;" class="mycode_font">selectorid</span> - CSS selector instance id<br />
</li>
<li><span style="font-family: courier new;" class="mycode_font">idx</span> - the n’th occurence of element in the document (starts from 0)<br />
</li>
<li><span style="font-family: courier new;" class="mycode_font">string[]</span> - element name<br />
</li>
<li><span style="font-family: courier new;" class="mycode_font">size</span> - sizeof string<br />
</li>
</ul>
</li>
<li><span style="font-weight: bold;" class="mycode_b">Returns</span><br />
<ul class="mycode_list"><li><span style="font-family: courier new;" class="mycode_font">1</span> if successful<br />
</li>
<li><span style="font-family: courier new;" class="mycode_font">0</span> if failed<br />
</li>
</ul>
</li>
<li><span style="font-weight: bold;" class="mycode_b">Example Usage</span><br />
<br />
<div class="codeblock phpcodeblock"><div class="title">PHP Code:</div><div class="body"><div dir="ltr"><code><span style="color: #007700">new&nbsp;</span><span style="color: #0000BB">Html</span><span style="color: #007700">:</span><span style="color: #0000BB">doc&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">ParseHtmlDocument</span><span style="color: #007700">(</span><span style="color: #DD0000">"&#092;<br /> &nbsp; &nbsp;&#x26;t!DOCTYPE&nbsp;html&#x26;t&#092;<br /> &nbsp; &nbsp;&#x26;tmeta&nbsp;charset=&#092;"utf-8&#092;"&#x26;t&#092;<br /> &nbsp; &nbsp;&#x26;ttitle&#x26;tHello,&nbsp;world!&#x26;t/title&#x26;t&#092;<br /> &nbsp; &nbsp;&#x26;th1&nbsp;class=&#092;"foo&#092;"&#x26;tHello,&nbsp;&#x26;ti&#x26;tworld!&#x26;t/i&#x26;t&#x26;t/h1&#x26;t&#092;<br />"</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">ASSERT</span><span style="color: #007700">(</span><span style="color: #0000BB">doc&nbsp;</span><span style="color: #007700">!=&nbsp;</span><span style="color: #0000BB">INVALID_HTML_DOC</span><span style="color: #007700">);<br /><br />new&nbsp;</span><span style="color: #0000BB">Selector</span><span style="color: #007700">:</span><span style="color: #0000BB">selector&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">ParseSelector</span><span style="color: #007700">(</span><span style="color: #DD0000">"h1.foo"</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">ASSERT</span><span style="color: #007700">(</span><span style="color: #0000BB">selector&nbsp;</span><span style="color: #007700">!=&nbsp;</span><span style="color: #0000BB">INVALID_SELECTOR</span><span style="color: #007700">);<br /><br />new&nbsp;</span><span style="color: #0000BB">element_text</span><span style="color: #007700">[</span><span style="color: #0000BB">20</span><span style="color: #007700">];<br /></span><span style="color: #0000BB">ASSERT</span><span style="color: #007700">(</span><span style="color: #0000BB">GetNthElementText</span><span style="color: #007700">(</span><span style="color: #0000BB">doc</span><span style="color: #007700">,</span><span style="color: #0000BB">selector</span><span style="color: #007700">,</span><span style="color: #0000BB">0</span><span style="color: #007700">,</span><span style="color: #0000BB">element_text</span><span style="color: #007700">)&nbsp;==&nbsp;</span><span style="color: #0000BB">1</span><span style="color: #007700">);<br /><br />new&nbsp;</span><span style="color: #0000BB">check&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">strcmp</span><span style="color: #007700">(</span><span style="color: #0000BB">element_text</span><span style="color: #007700">,(</span><span style="color: #DD0000">"Hello,&nbsp;world!"</span><span style="color: #007700">));<br /></span><span style="color: #0000BB">ASSERT</span><span style="color: #007700">(</span><span style="color: #0000BB">check&nbsp;</span><span style="color: #007700">==&nbsp;</span><span style="color: #0000BB">0</span><span style="color: #007700">);<br /><br /></span><span style="color: #0000BB">DeleteSelector</span><span style="color: #007700">(</span><span style="color: #0000BB">selector</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">DeleteHtml</span><span style="color: #007700">(</span><span style="color: #0000BB">doc</span><span style="color: #007700">);&nbsp;<br /></span></code></div></div></div></li>
</ul>
</li>
<li><span style="font-size: medium;" class="mycode_size">GetNthElementAttrVal(Html:docid,Selector:selectorid,idx,attribute[],string[],size = sizeof(string))</span><br />
<ul class="mycode_list"><li><span style="font-weight: bold;" class="mycode_b">Params</span><br />
<ul class="mycode_list"><li><span style="font-family: courier new;" class="mycode_font">docid</span> - Html instance id<br />
</li>
<li><span style="font-family: courier new;" class="mycode_font">selectorid</span> - CSS selector instance id<br />
</li>
<li><span style="font-family: courier new;" class="mycode_font">idx</span> - the n’th occurence of element in the document (starts from 0)<br />
</li>
<li><span style="font-family: courier new;" class="mycode_font">attribute[]</span> - the attribute of element<br />
</li>
<li><span style="font-family: courier new;" class="mycode_font">string[]</span> - element name<br />
</li>
<li><span style="font-family: courier new;" class="mycode_font">size</span> - sizeof string<br />
</li>
</ul>
</li>
<li><span style="font-weight: bold;" class="mycode_b">Returns</span><br />
<ul class="mycode_list"><li><span style="font-family: courier new;" class="mycode_font">1</span> if successful<br />
</li>
<li><span style="font-family: courier new;" class="mycode_font">0</span> if failed<br />
</li>
</ul>
</li>
<li><span style="font-weight: bold;" class="mycode_b">Example Usage</span><br />
<br />
<div class="codeblock phpcodeblock"><div class="title">PHP Code:</div><div class="body"><div dir="ltr"><code><span style="color: #007700">new&nbsp;</span><span style="color: #0000BB">Html</span><span style="color: #007700">:</span><span style="color: #0000BB">doc&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">ParseHtmlDocument</span><span style="color: #007700">(</span><span style="color: #DD0000">"&#092;<br />&nbsp;&#x26;t!DOCTYPE&nbsp;html&#x26;t&#092;<br />&nbsp;&#x26;tmeta&nbsp;charset=&#092;"utf-8&#092;"&#x26;t&#092;<br />&nbsp;&#x26;ttitle&#x26;tHello,&nbsp;world!&#x26;t/title&#x26;t&#092;<br />&nbsp;&#x26;th1&nbsp;class=&#092;"foo&#092;"&#x26;tHello,&nbsp;&#x26;ti&#x26;tworld!&#x26;t/i&#x26;t&#x26;t/h1&#x26;t&#092;<br />"</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">ASSERT</span><span style="color: #007700">(</span><span style="color: #0000BB">doc&nbsp;</span><span style="color: #007700">!=&nbsp;</span><span style="color: #0000BB">INVALID_HTML_DOC</span><span style="color: #007700">);<br /><br />new&nbsp;</span><span style="color: #0000BB">Selector</span><span style="color: #007700">:</span><span style="color: #0000BB">selector&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">ParseSelector</span><span style="color: #007700">(</span><span style="color: #DD0000">"h1"</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">ASSERT</span><span style="color: #007700">(</span><span style="color: #0000BB">selector&nbsp;</span><span style="color: #007700">!=&nbsp;</span><span style="color: #0000BB">INVALID_SELECTOR</span><span style="color: #007700">);<br /><br />new&nbsp;</span><span style="color: #0000BB">element_attribute</span><span style="color: #007700">[</span><span style="color: #0000BB">20</span><span style="color: #007700">];<br /></span><span style="color: #0000BB">ASSERT</span><span style="color: #007700">(</span><span style="color: #0000BB">GetNthElementAttrVal</span><span style="color: #007700">(</span><span style="color: #0000BB">doc</span><span style="color: #007700">,</span><span style="color: #0000BB">selector</span><span style="color: #007700">,</span><span style="color: #0000BB">0</span><span style="color: #007700">,</span><span style="color: #DD0000">"class"</span><span style="color: #007700">,</span><span style="color: #0000BB">element_attribute</span><span style="color: #007700">)&nbsp;==&nbsp;</span><span style="color: #0000BB">1</span><span style="color: #007700">);<br /><br />new&nbsp;</span><span style="color: #0000BB">check&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">strcmp</span><span style="color: #007700">(</span><span style="color: #0000BB">element_attribute</span><span style="color: #007700">,(</span><span style="color: #DD0000">"foo"</span><span style="color: #007700">));<br /></span><span style="color: #0000BB">ASSERT</span><span style="color: #007700">(</span><span style="color: #0000BB">check&nbsp;</span><span style="color: #007700">==&nbsp;</span><span style="color: #0000BB">0</span><span style="color: #007700">);<br /><br /></span><span style="color: #0000BB">DeleteSelector</span><span style="color: #007700">(</span><span style="color: #0000BB">selector</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">DeleteHtml</span><span style="color: #007700">(</span><span style="color: #0000BB">doc</span><span style="color: #007700">);&nbsp;<br /></span></code></div></div></div></li>
</ul>
</li>
<li><span style="font-size: medium;" class="mycode_size">DeleteHtml(Html:id)</span><br />
<ul class="mycode_list"><li><span style="font-weight: bold;" class="mycode_b">Params</span><br />
<ul class="mycode_list"><li><span style="font-family: courier new;" class="mycode_font">id</span> - html instance to be deleted<br />
</li>
</ul>
</li>
<li><span style="font-weight: bold;" class="mycode_b">Returns</span><br />
<ul class="mycode_list"><li><span style="font-family: courier new;" class="mycode_font">1</span> if successful<br />
</li>
<li><span style="font-family: courier new;" class="mycode_font">0</span> if failed<br />
</li>
</ul>
</li>
</ul>
</li>
<li><span style="font-size: medium;" class="mycode_size">DeleteSelector(Selector:id)</span><br />
<ul class="mycode_list"><li><span style="font-weight: bold;" class="mycode_b">Params</span><br />
<ul class="mycode_list"><li><span style="font-family: courier new;" class="mycode_font">id</span> - selector instance to be deleted<br />
</li>
</ul>
</li>
<li><span style="font-weight: bold;" class="mycode_b">Returns</span><br />
<ul class="mycode_list"><li><span style="font-family: courier new;" class="mycode_font">1</span> if successful<br />
</li>
<li><span style="font-family: courier new;" class="mycode_font">0</span> if failed<br />
</li>
</ul>
</li>
</ul>
</li>
<li><span style="font-size: medium;" class="mycode_size">DeleteResponse(Html:id)</span><br />
<ul class="mycode_list"><li><span style="font-weight: bold;" class="mycode_b">Params</span><br />
<ul class="mycode_list"><li><span style="font-family: courier new;" class="mycode_font">id</span> - response instance to be deleted<br />
</li>
</ul>
</li>
<li><span style="font-weight: bold;" class="mycode_b">Returns</span><br />
<ul class="mycode_list"><li><span style="font-family: courier new;" class="mycode_font">1</span> if successful<br />
</li>
<li><span style="font-family: courier new;" class="mycode_font">0</span> if failed<br />
</li>
</ul>
</li>
</ul>
</li>
<li><span style="font-size: medium;" class="mycode_size">DeleteHeader(Header:id)</span><br />
<ul class="mycode_list"><li><span style="font-weight: bold;" class="mycode_b">Params</span><br />
<ul class="mycode_list"><li><span style="font-family: courier new;" class="mycode_font">id</span> - header instance to be deleted<br />
</li>
</ul>
</li>
<li><span style="font-weight: bold;" class="mycode_b">Returns</span><br />
<ul class="mycode_list"><li><span style="font-family: courier new;" class="mycode_font">1</span> if successful<br />
</li>
<li><span style="font-family: courier new;" class="mycode_font">0</span> if failed<br />
</li>
</ul>
</li>
</ul>
</li>
</ul>
<br />
<br />
<span style="color: #7F00FF;" class="mycode_color"><span style="font-size: x-large;" class="mycode_size"><span style="font-weight: bold;" class="mycode_b">Example Usage</span></span></span><br />
<br />
A small example to fetch all links in wiki.sa-mp.com<br />
<br />
<span style="font-size: small;" class="mycode_size"><div class="codeblock phpcodeblock"><div class="title">PHP Code:</div><div class="body"><div dir="ltr"><code><span style="color: #007700">new&nbsp;</span><span style="color: #0000BB">Response</span><span style="color: #007700">:</span><span style="color: #0000BB">response&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">HttpGet</span><span style="color: #007700">(</span><span style="color: #DD0000">"https://wiki.sa-mp.com"</span><span style="color: #007700">);<br />if(</span><span style="color: #0000BB">response&nbsp;</span><span style="color: #007700">==&nbsp;</span><span style="color: #0000BB">INVALID_HTTP_RESPONSE</span><span style="color: #007700">){<br />&nbsp;</span><span style="color: #0000BB">printf</span><span style="color: #007700">(</span><span style="color: #DD0000">"HTTP&nbsp;ERROR"</span><span style="color: #007700">);<br />&nbsp;return;<br />}<br /><br />new&nbsp;</span><span style="color: #0000BB">Html</span><span style="color: #007700">:</span><span style="color: #0000BB">html&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">ResponseParseHtml</span><span style="color: #007700">(</span><span style="color: #0000BB">response</span><span style="color: #007700">);<br />if(</span><span style="color: #0000BB">html&nbsp;</span><span style="color: #007700">==&nbsp;</span><span style="color: #0000BB">INVALID_HTML_DOC</span><span style="color: #007700">){<br />&nbsp;</span><span style="color: #0000BB">DeleteResponse</span><span style="color: #007700">(</span><span style="color: #0000BB">response</span><span style="color: #007700">);<br />&nbsp;return;<br />}<br /><br />new&nbsp;</span><span style="color: #0000BB">Selector</span><span style="color: #007700">:</span><span style="color: #0000BB">selector&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">ParseSelector</span><span style="color: #007700">(</span><span style="color: #DD0000">"a"</span><span style="color: #007700">);<br />if(</span><span style="color: #0000BB">selector&nbsp;</span><span style="color: #007700">==&nbsp;</span><span style="color: #0000BB">INVALID_SELECTOR</span><span style="color: #007700">){<br />&nbsp;</span><span style="color: #0000BB">DeleteResponse</span><span style="color: #007700">(</span><span style="color: #0000BB">response</span><span style="color: #007700">);<br />&nbsp;</span><span style="color: #0000BB">DeleteHtml</span><span style="color: #007700">(</span><span style="color: #0000BB">html</span><span style="color: #007700">);<br />&nbsp;return;<br />}<br /><br />new&nbsp;</span><span style="color: #0000BB">str</span><span style="color: #007700">[</span><span style="color: #0000BB">500</span><span style="color: #007700">],</span><span style="color: #0000BB">i</span><span style="color: #007700">;<br />while(</span><span style="color: #0000BB">GetNthElementAttrVal</span><span style="color: #007700">(</span><span style="color: #0000BB">html</span><span style="color: #007700">,</span><span style="color: #0000BB">selector</span><span style="color: #007700">,</span><span style="color: #0000BB">i</span><span style="color: #007700">,</span><span style="color: #DD0000">"href"</span><span style="color: #007700">,</span><span style="color: #0000BB">str</span><span style="color: #007700">)){<br />&nbsp;</span><span style="color: #0000BB">printf</span><span style="color: #007700">(</span><span style="color: #DD0000">"%s"</span><span style="color: #007700">,</span><span style="color: #0000BB">str</span><span style="color: #007700">);<br />&nbsp;++</span><span style="color: #0000BB">i</span><span style="color: #007700">;<br />}<br /></span><span style="color: #FF8000">//delete&nbsp;created&nbsp;objects&nbsp;after&nbsp;the&nbsp;usage..<br /></span><span style="color: #0000BB">DeleteHtml</span><span style="color: #007700">(</span><span style="color: #0000BB">html</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">DeleteResponse</span><span style="color: #007700">(</span><span style="color: #0000BB">response</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">DeleteSelector</span><span style="color: #007700">(</span><span style="color: #0000BB">selector</span><span style="color: #007700">);&nbsp;<br /></span></code></div></div></div></span><br />
The same above with threaded http call would be<br />
<br />
<span style="font-size: small;" class="mycode_size"><div class="codeblock phpcodeblock"><div class="title">PHP Code:</div><div class="body"><div dir="ltr"><code><span style="color: #0000BB">HttpGetThreaded</span><span style="color: #007700">(</span><span style="color: #0000BB">0</span><span style="color: #007700">,</span><span style="color: #DD0000">"MyHandler"</span><span style="color: #007700">,</span><span style="color: #DD0000">"https://wiki.sa-mp.com"</span><span style="color: #007700">);<br /></span><span style="color: #FF8000">//...<br /></span><span style="color: #0000BB">forward&nbsp;MyHandler</span><span style="color: #007700">(</span><span style="color: #0000BB">playerid</span><span style="color: #007700">,</span><span style="color: #0000BB">Response</span><span style="color: #007700">:</span><span style="color: #0000BB">responseid</span><span style="color: #007700">);<br />public&nbsp;</span><span style="color: #0000BB">MyHandler</span><span style="color: #007700">(</span><span style="color: #0000BB">playerid</span><span style="color: #007700">,</span><span style="color: #0000BB">Response</span><span style="color: #007700">:</span><span style="color: #0000BB">responseid</span><span style="color: #007700">){<br />&nbsp;if(</span><span style="color: #0000BB">responseid&nbsp;</span><span style="color: #007700">==&nbsp;</span><span style="color: #0000BB">INVALID_HTTP_RESPONSE</span><span style="color: #007700">){<br />&nbsp;</span><span style="color: #0000BB">printf</span><span style="color: #007700">(</span><span style="color: #DD0000">"HTTP&nbsp;ERROR"</span><span style="color: #007700">);<br />&nbsp;return&nbsp;</span><span style="color: #0000BB">0</span><span style="color: #007700">;<br />&nbsp;}<br /><br />&nbsp;new&nbsp;</span><span style="color: #0000BB">Html</span><span style="color: #007700">:</span><span style="color: #0000BB">html&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">ResponseParseHtml</span><span style="color: #007700">(</span><span style="color: #0000BB">responseid</span><span style="color: #007700">);<br />&nbsp;if(</span><span style="color: #0000BB">html&nbsp;</span><span style="color: #007700">==&nbsp;</span><span style="color: #0000BB">INVALID_HTML_DOC</span><span style="color: #007700">){<br />&nbsp;</span><span style="color: #0000BB">DeleteResponse</span><span style="color: #007700">(</span><span style="color: #0000BB">response</span><span style="color: #007700">);<br />&nbsp;return&nbsp;</span><span style="color: #0000BB">0</span><span style="color: #007700">;<br />&nbsp;}<br /><br />&nbsp;new&nbsp;</span><span style="color: #0000BB">Selector</span><span style="color: #007700">:</span><span style="color: #0000BB">selector&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">ParseSelector</span><span style="color: #007700">(</span><span style="color: #DD0000">"a"</span><span style="color: #007700">);<br />&nbsp;if(</span><span style="color: #0000BB">selector&nbsp;</span><span style="color: #007700">==&nbsp;</span><span style="color: #0000BB">INVALID_SELECTOR</span><span style="color: #007700">){<br />&nbsp;</span><span style="color: #0000BB">DeleteResponse</span><span style="color: #007700">(</span><span style="color: #0000BB">response</span><span style="color: #007700">);<br />&nbsp;</span><span style="color: #0000BB">DeleteHtml</span><span style="color: #007700">(</span><span style="color: #0000BB">html</span><span style="color: #007700">);<br />&nbsp;return&nbsp;</span><span style="color: #0000BB">0</span><span style="color: #007700">;<br />&nbsp;}<br /><br />&nbsp;new&nbsp;</span><span style="color: #0000BB">str</span><span style="color: #007700">[</span><span style="color: #0000BB">500</span><span style="color: #007700">],</span><span style="color: #0000BB">i</span><span style="color: #007700">;<br />&nbsp;while(</span><span style="color: #0000BB">GetNthElementAttrVal</span><span style="color: #007700">(</span><span style="color: #0000BB">html</span><span style="color: #007700">,</span><span style="color: #0000BB">selector</span><span style="color: #007700">,</span><span style="color: #0000BB">i</span><span style="color: #007700">,</span><span style="color: #DD0000">"href"</span><span style="color: #007700">,</span><span style="color: #0000BB">str</span><span style="color: #007700">)){<br />&nbsp;</span><span style="color: #0000BB">printf</span><span style="color: #007700">(</span><span style="color: #DD0000">"%s"</span><span style="color: #007700">,</span><span style="color: #0000BB">str</span><span style="color: #007700">);<br />&nbsp;++</span><span style="color: #0000BB">i</span><span style="color: #007700">;<br />&nbsp;}<br /><br />&nbsp;</span><span style="color: #0000BB">DeleteHtml</span><span style="color: #007700">(</span><span style="color: #0000BB">html</span><span style="color: #007700">);<br />&nbsp;</span><span style="color: #0000BB">Delete</span><span style="color: #007700">(</span><span style="color: #0000BB">response</span><span style="color: #007700">);<br />&nbsp;</span><span style="color: #0000BB">DeleteSelector</span><span style="color: #007700">(</span><span style="color: #0000BB">selector</span><span style="color: #007700">);<br />&nbsp;return&nbsp;</span><span style="color: #0000BB">1</span><span style="color: #007700">;<br />}&nbsp;<br /></span></code></div></div></div></span><br />
<br />
More examples can be found in <a href="https://github.com/Sreyas-Sreelal/pawn-scraper/tree/master/examples" target="_blank" rel="noopener" class="mycode_url">examples</a><br />
<br />
<span style="color: #7F00FF;" class="mycode_color"><span style="font-size: x-large;" class="mycode_size"><span style="font-weight: bold;" class="mycode_b">Repository</span></span></span><br />
<a href="https://github.com/Sreyas-Sreelal/pawn-scraper" target="_blank" rel="noopener" class="mycode_url">https://github.com/Sreyas-Sreelal/pawn-scraper</a><br />
<br />
<span style="color: #7F00FF;" class="mycode_color"><span style="font-size: x-large;" class="mycode_size"><span style="font-weight: bold;" class="mycode_b">Note</span></span></span><br />
<br />
The plugin is in primary stage and more tests and features needed to be added.I’m open to any kind of contribution, just open a pull request if you have anything to improve or add new features.<br />
<br />
<span style="color: #7F00FF;" class="mycode_color"><span style="font-size: x-large;" class="mycode_size"><span style="font-weight: bold;" class="mycode_b">Special thanks</span></span></span><br />
<ul class="mycode_list"><li><a href="https://github.com/ZOTTCE" target="_blank" rel="noopener" class="mycode_url">Eva</a> for <a href="https://github.com/ZOTTCE/samp-sdk" target="_blank" rel="noopener" class="mycode_url">samp-rust-sdk</a><br />
</li>
<li><a href="https://github.com/Y-Less" target="_blank" rel="noopener" class="mycode_url">Y_Less</a> for <a href="https://github.com/pawn-lang/YSI-Includes" target="_blank" rel="noopener" class="mycode_url">y_tests</a><br />
</li>
<li>Discord members in <a href="https://discord.me/page/samp" target="_blank" rel="noopener" class="mycode_url">SAMP discord channel</a><br />
</li>
</ul>
]]></content>
		<draft xmlns="http://purl.org/atom-blog/ns#">false</draft>
	</entry>
</feed>