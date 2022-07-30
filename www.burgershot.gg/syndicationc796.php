<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xmlns:dc="http://purl.org/dc/elements/1.1/">
	<title type="html"><![CDATA[Burgershot - Support]]></title>
	<subtitle type="html"><![CDATA[Burgershot - https://www.burgershot.gg]]></subtitle>
	<link rel="self" href="https://www.burgershot.gg/syndication.php"/>
	<id>https://www.burgershot.gg/</id>
	<link rel="alternate" type="text/html" href="https://www.burgershot.gg/"/>
	<updated>2022-07-30T07:00:59Z</updated>
	<generator uri="https://mybb.com">MyBB</generator>
	<entry xmlns="http://www.w3.org/2005/Atom">
		<author>
			<name type="html" xml:space="preserve"><![CDATA[<a href="https://www.burgershot.gg/member.php?action=profile&uid=4049">hiwyn</a>]]></name>
		</author>
		<published>2022-04-27T15:05:05Z</published>
		<updated>2022-04-27T15:05:05Z</updated>
		<link rel="alternate" type="text/html" href="https://www.burgershot.gg/showthread.php?tid=2291" />
		<id>https://www.burgershot.gg/showthread.php?tid=2291</id>
		<title xml:space="preserve"><![CDATA[I can't log in with voice client emulating]]></title>
		<content type="html" xml:space="preserve" xml:base="https://www.burgershot.gg/showthread.php?tid=2291"><![CDATA[I'm trying to install voice on my PC, but I play on VMBOX, because I can't use Windows...<br />
<br />
When I login print the message:<br />
<div class="codeblock"><div class="title">Code:</div><div class="body" dir="ltr"><code>Could not find sampvoice plugin.</code></div></div>Like I don't have voice installed<br />
<br />
But I did the steps:<br />
<br />
<br />
1- download the samp de 0.3.7 from: <a href="https://pawnokit.ru/ru/files" target="_blank" rel="noopener" class="mycode_url">https://pawnokit.ru/ru/files</a><br />
<a href="https://versions.2al.ru/files/sa-mp-0.3.7-install.exe" target="_blank" rel="noopener" class="mycode_url">sa-mp-0.3.7-install.exe</a><br />
01.05.2015 14:37:38<br />
15.52M<br />
3d248cc47f0434c158de30755fcf1506<br />
<br />
2- download the voice and extract on gta folder:<br />
<a href="https://github.com/CyberMor/sampvoice/releases/tag/v3.1" target="_blank" rel="noopener" class="mycode_url">https://github.com/CyberMor/sampvoice/releases/tag/v3.1</a><br />
<a href="https://github.com/CyberMor/sampvoice/releases/download/v3.1/sv_client_037_r1_english.zip" target="_blank" rel="noopener" class="mycode_url">sv_client_037_r1_english.zip<br />
 <br />
 <br />
</a>What might be missing? I really wanted to play with voice]]></content>
		<draft xmlns="http://purl.org/atom-blog/ns#">false</draft>
	</entry>
	<entry xmlns="http://www.w3.org/2005/Atom">
		<author>
			<name type="html" xml:space="preserve"><![CDATA[<a href="https://www.burgershot.gg/member.php?action=profile&uid=4049">hiwyn</a>]]></name>
		</author>
		<published>2022-04-23T14:18:40Z</published>
		<updated>2022-05-14T12:56:26Z</updated>
		<link rel="alternate" type="text/html" href="https://www.burgershot.gg/showthread.php?tid=2289" />
		<id>https://www.burgershot.gg/showthread.php?tid=2289</id>
		<title xml:space="preserve"><![CDATA[[debug] Long callback execution detected (hang or performance issue)]]></title>
		<content type="html" xml:space="preserve" xml:base="https://www.burgershot.gg/showthread.php?tid=2289"><![CDATA[nvm, delete it pls<br />
it was a problem in my script and it wont help anybody else here]]></content>
		<draft xmlns="http://purl.org/atom-blog/ns#">false</draft>
	</entry>
	<entry xmlns="http://www.w3.org/2005/Atom">
		<author>
			<name type="html" xml:space="preserve"><![CDATA[<a href="https://www.burgershot.gg/member.php?action=profile&uid=4049">hiwyn</a>]]></name>
		</author>
		<published>2022-04-23T13:51:43Z</published>
		<updated>2022-04-23T13:51:43Z</updated>
		<link rel="alternate" type="text/html" href="https://www.burgershot.gg/showthread.php?tid=2288" />
		<id>https://www.burgershot.gg/showthread.php?tid=2288</id>
		<title xml:space="preserve"><![CDATA[Why the accents are not working?]]></title>
		<content type="html" xml:space="preserve" xml:base="https://www.burgershot.gg/showthread.php?tid=2288"><![CDATA[Why the accents are not working?<br />
<br />
I mean, if i do:<br />
SendClientMessage(i, COLOR_LIGHTRED, "O servidor será <br />
<br />
Ingame it looks like: <br />
<a href="https://imgbb.com/" target="_blank" rel="noopener" class="mycode_url"><img src="https://i.ibb.co/TmxHLCW/Screenshot-from-2022-04-23-10-49-10.png" loading="lazy"  alt="[Image: Screenshot-from-2022-04-23-10-49-10.png]" class="mycode_img" /></a><br />
<br />
And all other accents like é, ã, ç looks like this /\<br />
<br />
---<br />
<br />
<br />
I'm compiling it on linux with this: https://github.com/pawn-lang/compiler/releases<br />
And with this .vscode/tasks.json:<br />
<br />
<div class="codeblock"><div class="title">Code:</div><div class="body" dir="ltr"><code>{<br />
  // See https://go.microsoft.com/fwlink/?LinkId=733558<br />
  // for the documentation about the tasks.json format<br />
  "version": "2.0.0",<br />
  "tasks": [<br />
    {<br />
      "label": "build",<br />
      "type": "shell",<br />
      "command": "/usr/bin/pawncc",<br />
      "args": [<br />
        "&#36;{file}",<br />
        "&#92;"-;+&#92;"",<br />
        "&#92;"-(+&#92;"",<br />
        "-i&#92;"/home/hiwyn/Documents/sampserver/include/&#92;""<br />
      ],<br />
      "group": {<br />
        "kind": "build",<br />
        "isDefault": true<br />
      },<br />
      "isBackground": false,<br />
      "presentation": {<br />
        "reveal": "silent",<br />
        "clear": false,<br />
        "panel": "dedicated"<br />
      },<br />
      "problemMatcher": [<br />
        {<br />
          "base": "&#36;pawncc",<br />
          "fileLocation": "relative"<br />
        }<br />
      ]<br />
    }<br />
  ]<br />
}</code></div></div><br />
What else should i do?]]></content>
		<draft xmlns="http://purl.org/atom-blog/ns#">false</draft>
	</entry>
	<entry xmlns="http://www.w3.org/2005/Atom">
		<author>
			<name type="html" xml:space="preserve"><![CDATA[<a href="https://www.burgershot.gg/member.php?action=profile&uid=4049">hiwyn</a>]]></name>
		</author>
		<published>2022-04-23T13:36:13Z</published>
		<updated>2022-04-23T13:36:13Z</updated>
		<link rel="alternate" type="text/html" href="https://www.burgershot.gg/showthread.php?tid=2287" />
		<id>https://www.burgershot.gg/showthread.php?tid=2287</id>
		<title xml:space="preserve"><![CDATA[My server is not showing on internet tab]]></title>
		<content type="html" xml:space="preserve" xml:base="https://www.burgershot.gg/showthread.php?tid=2287"><![CDATA[Just change on server.cfg<br />
<div class="codeblock"><div class="title">Code:</div><div class="body" dir="ltr"><code>lanmode 0</code></div></div>Isn't enough?<br />
<br />
what should i do to it starts to show?<br />
<br />
hosted tab is mouth paid, right?<br />
btw where is the official site to buy it?<br />
<br />
but internet tab is free, right?]]></content>
		<draft xmlns="http://purl.org/atom-blog/ns#">false</draft>
	</entry>
	<entry xmlns="http://www.w3.org/2005/Atom">
		<author>
			<name type="html" xml:space="preserve"><![CDATA[<a href="https://www.burgershot.gg/member.php?action=profile&uid=4049">hiwyn</a>]]></name>
		</author>
		<published>2022-04-23T13:25:46Z</published>
		<updated>2022-04-23T13:25:46Z</updated>
		<link rel="alternate" type="text/html" href="https://www.burgershot.gg/showthread.php?tid=2286" />
		<id>https://www.burgershot.gg/showthread.php?tid=2286</id>
		<title xml:space="preserve"><![CDATA[make vscode compiler rewrite actual file]]></title>
		<content type="html" xml:space="preserve" xml:base="https://www.burgershot.gg/showthread.php?tid=2286"><![CDATA[everytime i press F5 to compile a filterscript or a gamemode<br />
it creates the .amx, but creates where i open the vscode<br />
<br />
i mean, if i did:<br />
cd sampserver &amp;&amp; code .<br />
if i open a file MISSIONS.pwn in sampserver/gamemodes<br />
it will generate the amx in /home/sampserver instead of /home/sampserver/gamemodes<br />
<br />
there is a way to instead of generate the amx there it get the file path (.pwn i'm editing) and creates the amx there rewriting the actual?<br />
<br />
its boring, every time i edit a lib or a gm or a filterscript i got to move the amx after finish<br />
<br />
<br />
<br />
<br />
I'm compiling it on linux with this: https://github.com/pawn-lang/compiler/releases<br />
And with this .vscode/tasks.json:<br />
<br />
<div class="codeblock"><div class="title">Code:</div><div class="body" dir="ltr"><code>{<br />
  // See https://go.microsoft.com/fwlink/?LinkId=733558<br />
  // for the documentation about the tasks.json format<br />
  "version": "2.0.0",<br />
  "tasks": [<br />
    {<br />
      "label": "build",<br />
      "type": "shell",<br />
      "command": "/usr/bin/pawncc",<br />
      "args": [<br />
        "&#36;{file}",<br />
        "&#92;"-;+&#92;"",<br />
        "&#92;"-(+&#92;"",<br />
        "-i&#92;"/home/hiwyn/Documents/sampserver/include/&#92;""<br />
      ],<br />
      "group": {<br />
        "kind": "build",<br />
        "isDefault": true<br />
      },<br />
      "isBackground": false,<br />
      "presentation": {<br />
        "reveal": "silent",<br />
        "clear": false,<br />
        "panel": "dedicated"<br />
      },<br />
      "problemMatcher": [<br />
        {<br />
          "base": "&#36;pawncc",<br />
          "fileLocation": "relative"<br />
        }<br />
      ]<br />
    }<br />
  ]<br />
}</code></div></div>]]></content>
		<draft xmlns="http://purl.org/atom-blog/ns#">false</draft>
	</entry>
	<entry xmlns="http://www.w3.org/2005/Atom">
		<author>
			<name type="html" xml:space="preserve"><![CDATA[<a href="https://www.burgershot.gg/member.php?action=profile&uid=4333">TheKosT</a>]]></name>
		</author>
		<published>2022-04-02T14:21:40Z</published>
		<updated>2022-04-02T14:21:40Z</updated>
		<link rel="alternate" type="text/html" href="https://www.burgershot.gg/showthread.php?tid=2283" />
		<id>https://www.burgershot.gg/showthread.php?tid=2283</id>
		<title xml:space="preserve"><![CDATA[texture studio error.]]></title>
		<content type="html" xml:space="preserve" xml:base="https://www.burgershot.gg/showthread.php?tid=2283"><![CDATA[Hello friends how are you?<br />
<br />
I come to you because after a long time I have decided to dedicate myself to MAPPER again.<br />
<br />
I tried to open the texture STUDIO and firstly it gave me an error with the addons, well, I downloaded a gta default to use it and I solved it but I got an error.<br />
<br />
Now nothing is loaded from the server, the filescripts are not loaded or anything, could you help me? I would like to map again and with this error I cannot.<br />
<br />
<br />
<div class="codeblock"><div class="title">Code:</div><div class="body" dir="ltr"><code>SA-MP Dedicated Server<br />
----------------------<br />
v0.3.7-R2, (C)2005-2015 SA-MP Team<br />
<br />
[10:48:47] <br />
[10:48:47] Server Plugins<br />
[10:48:47] --------------<br />
[10:48:47]  Loading plugin: crashdetect<br />
[10:48:47]  Failed.<br />
[10:48:47]  Loading plugin: sscanf<br />
[10:48:47]  Failed.<br />
[10:48:47]  Loading plugin: streamer<br />
[10:48:47] <br />
<br />
*** Streamer Plugin v2.9.4 by Incognito loaded ***<br />
<br />
[10:48:47]  Loaded.<br />
[10:48:47]  Loading plugin: filemanager<br />
[10:48:47] ******************<br />
[10:48:47] ** FILE MANAGER **<br />
[10:48:47] **    Loaded    **<br />
[10:48:47] ** Version 1.5 **<br />
[10:48:47] ******************<br />
[10:48:47]  Loaded.<br />
[10:48:47]  Loaded 2 plugins.<br />
<br />
[10:48:47] <br />
[10:48:47] Filterscripts<br />
[10:48:47] ---------------<br />
[10:48:47]  Loading filterscript 'tstudio.amx'...<br />
[10:48:47]  Loading filterscript 'fsdebug.amx'...<br />
[10:48:47] <br />
  *********************<br />
  * SA:MP DEBUG 0.2  *<br />
[10:48:47]  * By Simon Campbell *<br />
  *********************<br />
[10:48:47]  * Version: 0.5d      *<br />
  *********************<br />
[10:48:47]  * -- LOADED        *<br />
  *********************<br />
<br />
[10:48:47]  Loaded 2 filterscripts.<br />
<br />
[10:48:47] <br />
/*-----------------------------------*&#92;<br />
[10:48:47] |*=====[TS Base GameMode Loaded]=====*|<br />
[10:48:47] &#92;*-----------------------------------*/<br />
<br />
[10:48:47] Number of vehicle models: 0<br />
[10:48:55] [connection] 127.0.0.1:51010 requests connection cookie.<br />
[10:48:56] [connection] incoming connection: 127.0.0.1:51010 id: 0<br />
[10:48:56] [join] James_Kalashnikov has joined the server (0:127.0.0.1)<br />
[10:53:48] RCON (In-Game): Player #0 (James_Kalashnikov) has logged in.<br />
[10:54:39] RCON (In-Game): Player [James_Kalashnikov] sent command: reloadfs<br />
[10:55:00] RCON (In-Game): Player [James_Kalashnikov] sent command: reloadfs<br />
[10:55:13] RCON (In-Game): Player [James_Kalashnikov] sent command: loadfs<br />
[10:55:17] RCON (In-Game): Player [James_Kalashnikov] sent command: unloadfs<br />
[11:08:49] [part] James_Kalashnikov has left the server (0:1)</code></div></div><br />
<br />
<img src="https://i.imgur.com/RbWMi2n.jpg" loading="lazy"  alt="[Image: RbWMi2n.jpg]" class="mycode_img" /><br />
https://i.imgur.com/RbWMi2n.jpg]]></content>
		<draft xmlns="http://purl.org/atom-blog/ns#">false</draft>
	</entry>
	<entry xmlns="http://www.w3.org/2005/Atom">
		<author>
			<name type="html" xml:space="preserve"><![CDATA[<a href="https://www.burgershot.gg/member.php?action=profile&uid=1749">kexy</a>]]></name>
		</author>
		<published>2022-02-27T15:42:53Z</published>
		<updated>2022-02-27T15:42:53Z</updated>
		<link rel="alternate" type="text/html" href="https://www.burgershot.gg/showthread.php?tid=2280" />
		<id>https://www.burgershot.gg/showthread.php?tid=2280</id>
		<title xml:space="preserve"><![CDATA[Mysql R41 problem.]]></title>
		<content type="html" xml:space="preserve" xml:base="https://www.burgershot.gg/showthread.php?tid=2280"><![CDATA[Hi all! I need help With MYSQL R41-4! It prints out these errors and I don't know why it could be, what could be wrong?<br />
<br />
<img src="https://i.ibb.co/yfmNJwy/mysql.png" loading="lazy"  alt="[Image: mysql.png]" class="mycode_img" /><br />
<br />
https://i.ibb.co/yfmNJwy/mysql.png]]></content>
		<draft xmlns="http://purl.org/atom-blog/ns#">false</draft>
	</entry>
	<entry xmlns="http://www.w3.org/2005/Atom">
		<author>
			<name type="html" xml:space="preserve"><![CDATA[<a href="https://www.burgershot.gg/member.php?action=profile&uid=4049">hiwyn</a>]]></name>
		</author>
		<published>2021-12-14T03:11:50Z</published>
		<updated>2021-12-14T05:09:22Z</updated>
		<link rel="alternate" type="text/html" href="https://www.burgershot.gg/showthread.php?tid=2259" />
		<id>https://www.burgershot.gg/showthread.php?tid=2259</id>
		<title xml:space="preserve"><![CDATA[error 090: public functions may not return arrays (symbol "GetRegionName")]]></title>
		<content type="html" xml:space="preserve" xml:base="https://www.burgershot.gg/showthread.php?tid=2259"><![CDATA[Why i'm getting this error:<br />
<br />
error 090: public functions may not return arrays (symbol "GetRegionName")<br />
return string;<br />
<br />
on this:<br />
<br />
<div class="codeblock"><div class="title">Code:</div><div class="body" dir="ltr"><code>forward GetRegionName(Float: X, Float: Y, Float: Z);<br />
public GetRegionName(Float: X, Float: Y, Float: Z) {<br />
    new string[128];<br />
    format(string, sizeof(string), "Idlewood");<br />
    return string;<br />
}</code></div></div>]]></content>
		<draft xmlns="http://purl.org/atom-blog/ns#">false</draft>
	</entry>
	<entry xmlns="http://www.w3.org/2005/Atom">
		<author>
			<name type="html" xml:space="preserve"><![CDATA[<a href="https://www.burgershot.gg/member.php?action=profile&uid=3596">Jhames</a>]]></name>
		</author>
		<published>2021-11-29T04:29:30Z</published>
		<updated>2021-11-29T04:29:30Z</updated>
		<link rel="alternate" type="text/html" href="https://www.burgershot.gg/showthread.php?tid=2253" />
		<id>https://www.burgershot.gg/showthread.php?tid=2253</id>
		<title xml:space="preserve"><![CDATA[Warning DCC_FindChannelByName]]></title>
		<content type="html" xml:space="preserve" xml:base="https://www.burgershot.gg/showthread.php?tid=2253"><![CDATA[<span style="color: #24292f;" class="mycode_color"><span style="font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Helvetica, Arial, sans-serif, 'Apple Color Emoji', 'Segoe UI Emoji';" class="mycode_font"><span style="font-weight: bold;" class="mycode_b">I'm getting a warning when using "DCC_FindChannelByName". where am I going wrong?</span></span></span><br />
<br />
<span style="color: #24292f;" class="mycode_color"><span style="font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Helvetica, Arial, sans-serif, 'Apple Color Emoji', 'Segoe UI Emoji';" class="mycode_font">Code:  </span></span><div class="codeblock"><div class="title">Code:</div><div class="body" dir="ltr"><code>printf("Channel ID: %d", DCC_FindChannelByName("log-server"));</code></div></div><br />
<span style="color: #24292f;" class="mycode_color"><span style="font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Helvetica, Arial, sans-serif, 'Apple Color Emoji', 'Segoe UI Emoji';" class="mycode_font">Warning :  <div class="codeblock"><div class="title">Code:</div><div class="body" dir="ltr"><code>warning 213: tag mismatch: expected tags "Float", or none ("_"); but found "DCC_Channel"</code></div></div></span></span>]]></content>
		<draft xmlns="http://purl.org/atom-blog/ns#">false</draft>
	</entry>
	<entry xmlns="http://www.w3.org/2005/Atom">
		<author>
			<name type="html" xml:space="preserve"><![CDATA[<a href="https://www.burgershot.gg/member.php?action=profile&uid=3506">Cherry.</a>]]></name>
		</author>
		<published>2021-11-21T20:28:02Z</published>
		<updated>2021-11-21T20:28:02Z</updated>
		<link rel="alternate" type="text/html" href="https://www.burgershot.gg/showthread.php?tid=2250" />
		<id>https://www.burgershot.gg/showthread.php?tid=2250</id>
		<title xml:space="preserve"><![CDATA[Crashing randomly.]]></title>
		<content type="html" xml:space="preserve" xml:base="https://www.burgershot.gg/showthread.php?tid=2250"><![CDATA[Hello<br />
<br />
My server is crashing randomly I don't have a clue why, running crashdetect on it but haven't seen anything wrong..<br />
These my plugins: <span style="font-weight: bold;" class="mycode_b">crashdetect.so sscanf.so mysql.so streamer.so whirlpool.so discord-connector.so nativechecker.so</span><br />
<br />
I also checked logs and last command performed before server shutted down and everything seems good... anyone can help me with it? I can pay for it if needed.]]></content>
		<draft xmlns="http://purl.org/atom-blog/ns#">false</draft>
	</entry>
	<entry xmlns="http://www.w3.org/2005/Atom">
		<author>
			<name type="html" xml:space="preserve"><![CDATA[<a href="https://www.burgershot.gg/member.php?action=profile&uid=3596">Jhames</a>]]></name>
		</author>
		<published>2021-10-30T11:12:38Z</published>
		<updated>2021-11-02T18:40:38Z</updated>
		<link rel="alternate" type="text/html" href="https://www.burgershot.gg/showthread.php?tid=2240" />
		<id>https://www.burgershot.gg/showthread.php?tid=2240</id>
		<title xml:space="preserve"><![CDATA[solved]]></title>
		<content type="html" xml:space="preserve" xml:base="https://www.burgershot.gg/showthread.php?tid=2240"><![CDATA[solved]]></content>
		<draft xmlns="http://purl.org/atom-blog/ns#">false</draft>
	</entry>
	<entry xmlns="http://www.w3.org/2005/Atom">
		<author>
			<name type="html" xml:space="preserve"><![CDATA[<a href="https://www.burgershot.gg/member.php?action=profile&uid=3506">Cherry.</a>]]></name>
		</author>
		<published>2021-10-06T02:41:07Z</published>
		<updated>2021-10-06T02:41:07Z</updated>
		<link rel="alternate" type="text/html" href="https://www.burgershot.gg/showthread.php?tid=2226" />
		<id>https://www.burgershot.gg/showthread.php?tid=2226</id>
		<title xml:space="preserve"><![CDATA[Loop skipping (Creating only odd numbers)]]></title>
		<content type="html" xml:space="preserve" xml:base="https://www.burgershot.gg/showthread.php?tid=2226"><![CDATA[Hey.<br />
<br />
I have a command of creating houses.<br />
The loop is creating houses just like 1,3,5,7,9,11..etc.<br />
<br />
I tried to investigate the problem in the loop and I can't see anything wrong.<br />
Somebody knows? Here's the code..<br />
<br />
<br />
<br />
<div class="codeblock"><div class="title">Code:</div><div class="body" dir="ltr"><code>COMMAND:housecreate(playerid, params[])<br />
{<br />
new houseid, price, Float:X, Float:Y, Float:Z, UID, text[128];<br />
if(sscanf(params,"ii",houseid, price)) return usage(playerid, "USAGE: /HouseCreate [Class] [Value]");<br />
if(houseid &#x26;t 1 || houseid &#x26;t 4) return error(playerid, "Invalid house ID.");<br />
new found = 0;<br />
for(new i = 1; i &#x26;t MAX_HOUSES; i++)<br />
{<br />
if(HouseInfo[i][hID] == 0 &amp;&amp; found == 0)<br />
{<br />
    found++;<br />
    UID = i;<br />
format(text, sizeof(text), "House id is %d", UID);<br />
SendClientMessage(playerid, -1, text);<br />
}<br />
}<br />
new count = 0;<br />
for(new i = 0; i &#x26;t sizeof(HouseCoordinates); i++)<br />
{<br />
    if(count == 0)<br />
    {<br />
        if(HouseCoordinates[i][Class] == houseid)<br />
        {<br />
        count++;<br />
HouseInfo[UID][hXi] = HouseCoordinates[i][mbX];<br />
HouseInfo[UID][hYi] = HouseCoordinates[i][mbY];<br />
HouseInfo[UID][hZi] = HouseCoordinates[i][mbZ];<br />
HouseInfo[UID][hIntIn] = HouseCoordinates[i][HouseInt];<br />
}<br />
}<br />
}<br />
HouseInfo[UID][hID] = UID;<br />
HouseInfo[UID][hValue] = price;<br />
HouseInfo[UID][hClass] = houseid;<br />
HouseInfo[UID][hIntOut] = GetPlayerInterior(playerid);<br />
HouseInfo[UID][hVwOut] = GetPlayerVirtualWorld(playerid);<br />
HouseInfo[UID][hVwIn] = MAX_INTS + UID;<br />
GetPlayerPos(playerid, X, Y, Z);<br />
HouseInfo[UID][hXo] = X;<br />
HouseInfo[UID][hYo] = Y;<br />
HouseInfo[UID][hZo] = Z;<br />
new query[516], owner[25];<br />
format(owner, sizeof(owner), "None");<br />
mysql_format(handlesql, query, sizeof(query),"INSERT INTO `houses`(`ID`, `Xo`, `Yo`, `Zo`, `Xi`, `Yi`, `Zi`, `IntOut`, `IntIn`, `VwOut`, `Owner`, `Value`) VALUES (%d, %f, %f, %f, %f, %f, %f, %d, %d, %d, '%e', %d)",<br />
UID, X, Y, Z, HouseInfo[UID][hXi], HouseInfo[UID][hYi], HouseInfo[UID][hZi], HouseInfo[UID][hIntOut], HouseInfo[UID][hIntIn], HouseInfo[UID][hVwOut],<br />
owner, price);<br />
mysql_pquery(handlesql, query);<br />
HouseInfo[UID][hIcon] = CreateDynamicCP(HouseInfo[UID][hXo], HouseInfo[UID][hYo], HouseInfo[UID][hZo], 1.5, HouseInfo[UID][hVwOut], -1, -1, 20.0);<br />
HouseInfo[UID][hIconi] = CreateDynamicCP(HouseInfo[UID][hXi], HouseInfo[UID][hYi], HouseInfo[UID][hZi], 1.5, HouseInfo[UID][hVwIn], -1, -1, 20.0);<br />
UpdateHouseText(UID);<br />
Iter_Add(HouseIterator, UID);<br />
return 1;<br />
}</code></div></div>]]></content>
		<draft xmlns="http://purl.org/atom-blog/ns#">false</draft>
	</entry>
	<entry xmlns="http://www.w3.org/2005/Atom">
		<author>
			<name type="html" xml:space="preserve"><![CDATA[<a href="https://www.burgershot.gg/member.php?action=profile&uid=3455">Paulthas01</a>]]></name>
		</author>
		<published>2021-10-02T13:28:06Z</published>
		<updated>2021-10-02T13:28:06Z</updated>
		<link rel="alternate" type="text/html" href="https://www.burgershot.gg/showthread.php?tid=2224" />
		<id>https://www.burgershot.gg/showthread.php?tid=2224</id>
		<title xml:space="preserve"><![CDATA[Write plugins]]></title>
		<content type="html" xml:space="preserve" xml:base="https://www.burgershot.gg/showthread.php?tid=2224"><![CDATA[Existe um post local falando sobre como escrever plug-ins para o samp?]]></content>
		<draft xmlns="http://purl.org/atom-blog/ns#">false</draft>
	</entry>
	<entry xmlns="http://www.w3.org/2005/Atom">
		<author>
			<name type="html" xml:space="preserve"><![CDATA[<a href="https://www.burgershot.gg/member.php?action=profile&uid=3506">Cherry.</a>]]></name>
		</author>
		<published>2021-09-22T01:46:18Z</published>
		<updated>2021-09-22T01:46:18Z</updated>
		<link rel="alternate" type="text/html" href="https://www.burgershot.gg/showthread.php?tid=2217" />
		<id>https://www.burgershot.gg/showthread.php?tid=2217</id>
		<title xml:space="preserve"><![CDATA[Can't see objects from distance.]]></title>
		<content type="html" xml:space="preserve" xml:base="https://www.burgershot.gg/showthread.php?tid=2217"><![CDATA[Hello.<br />
<br />
I have an issue with my server, Players can't see objects from distance, they must be SO close to them.<br />
Tried the entire versions of streamer and still the same issue...<br />
<br />
What can be the issue except of streamer?]]></content>
		<draft xmlns="http://purl.org/atom-blog/ns#">false</draft>
	</entry>
	<entry xmlns="http://www.w3.org/2005/Atom">
		<author>
			<name type="html" xml:space="preserve"><![CDATA[<a href="https://www.burgershot.gg/member.php?action=profile&uid=4049">hiwyn</a>]]></name>
		</author>
		<published>2021-09-18T15:56:01Z</published>
		<updated>2021-09-18T15:56:01Z</updated>
		<link rel="alternate" type="text/html" href="https://www.burgershot.gg/showthread.php?tid=2214" />
		<id>https://www.burgershot.gg/showthread.php?tid=2214</id>
		<title xml:space="preserve"><![CDATA[How to compile a GM on linux?]]></title>
		<content type="html" xml:space="preserve" xml:base="https://www.burgershot.gg/showthread.php?tid=2214"><![CDATA[How to compile a GM on linux?<br />
Is it possible to do on VSCODE?]]></content>
		<draft xmlns="http://purl.org/atom-blog/ns#">false</draft>
	</entry>
</feed>