<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xmlns:dc="http://purl.org/dc/elements/1.1/">
	<title type="html"><![CDATA[Burgershot - All Forums]]></title>
	<subtitle type="html"><![CDATA[Burgershot - https://www.burgershot.gg]]></subtitle>
	<link rel="self" href="https://www.burgershot.gg/syndication.php"/>
	<id>https://www.burgershot.gg/</id>
	<link rel="alternate" type="text/html" href="https://www.burgershot.gg/"/>
	<updated>2022-07-30T06:53:00Z</updated>
	<generator uri="https://mybb.com">MyBB</generator>
	<entry xmlns="http://www.w3.org/2005/Atom">
		<author>
			<name type="html" xml:space="preserve"><![CDATA[<a href="https://www.burgershot.gg/member.php?action=profile&uid=4396">claudespeed</a>]]></name>
		</author>
		<published>2022-07-29T23:36:32Z</published>
		<updated>2022-07-29T23:36:32Z</updated>
		<link rel="alternate" type="text/html" href="https://www.burgershot.gg/showthread.php?tid=2309" />
		<id>https://www.burgershot.gg/showthread.php?tid=2309</id>
		<title xml:space="preserve"><![CDATA[goto label]]></title>
		<content type="html" xml:space="preserve" xml:base="https://www.burgershot.gg/showthread.php?tid=2309"><![CDATA[Is it possible in pawn to jump from one callback to another using goto?<br />
When I try to do so, I get an error:<div class="codeblock"><div class="title">Code:</div><div class="body" dir="ltr"><code>error 019: not a label: "rankedit"</code></div></div><br />
<div class="codeblock phpcodeblock"><div class="title">PHP Code:</div><div class="body"><div dir="ltr"><code><span style="color: #007700">public&nbsp;</span><span style="color: #0000BB">OnPlayerText</span><span style="color: #007700">(</span><span style="color: #0000BB">playerid</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">text</span><span style="color: #007700">[])<br />{<br /></span><span style="color: #0000BB"> &nbsp; &nbsp;</span><span style="color: #007700">new&nbsp;</span><span style="color: #0000BB">rank&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">GetPVarInt</span><span style="color: #007700">(</span><span style="color: #0000BB">playerid</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">"PlayerEditingOrgRank"</span><span style="color: #007700">);<br /></span><span style="color: #0000BB"> &nbsp; &nbsp;</span><span style="color: #007700">if(</span><span style="color: #0000BB">rank&nbsp;</span><span style="color: #007700">&#x26;t&nbsp;</span><span style="color: #0000BB">0</span><span style="color: #007700">)<br /></span><span style="color: #0000BB"> &nbsp; &nbsp;</span><span style="color: #007700">{<br /></span><span style="color: #0000BB"> &nbsp; &nbsp; &nbsp;  if</span><span style="color: #007700">(</span><span style="color: #0000BB">strlen</span><span style="color: #007700">(</span><span style="color: #0000BB">text</span><span style="color: #007700">)&nbsp;&#x26;t&nbsp;</span><span style="color: #0000BB">3&nbsp;</span><span style="color: #007700">||&nbsp;</span><span style="color: #0000BB">strlen</span><span style="color: #007700">(</span><span style="color: #0000BB">text</span><span style="color: #007700">)&nbsp;&#x26;t&nbsp;</span><span style="color: #0000BB">MAX_ORG_RANK_NAME</span><span style="color: #007700">)<br /></span><span style="color: #0000BB"> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;  return&nbsp;ERROR</span><span style="color: #007700">(</span><span style="color: #0000BB">playerid</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">"&nbsp;ime&nbsp;ranka&nbsp;mora&nbsp;biti&nbsp;izmedju&nbsp;3&nbsp;i&nbsp;"</span><span style="color: #FF8000">#MAX_ORG_RANK_NAME"&nbsp;karaktera"),&nbsp;0;<br /></span><span style="color: #0000BB"> &nbsp; &nbsp; &nbsp; &nbsp;</span><span style="color: #007700">new&nbsp;</span><span style="color: #0000BB">org&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">GetPVarInt</span><span style="color: #007700">(</span><span style="color: #0000BB">playerid</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">"PlayerEditingOrg"</span><span style="color: #007700">);<br /></span><span style="color: #0000BB"> &nbsp; &nbsp; &nbsp; &nbsp;SCMF</span><span style="color: #007700">(</span><span style="color: #0000BB">playerid</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">COLOR_GOLD</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">"%s&nbsp;|&nbsp;Ime&nbsp;ranka&nbsp;%s[%d]&nbsp;promijenjeno&nbsp;u&nbsp;%s"</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">OrgInfo</span><span style="color: #007700">[</span><span style="color: #0000BB">org</span><span style="color: #007700">][</span><span style="color: #0000BB">oName</span><span style="color: #007700">],&nbsp;</span><span style="color: #0000BB">OrgRankovi</span><span style="color: #007700">[</span><span style="color: #0000BB">org</span><span style="color: #007700">][</span><span style="color: #0000BB">rank</span><span style="color: #007700">],&nbsp;</span><span style="color: #0000BB">rank</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">text</span><span style="color: #007700">);<br /></span><span style="color: #0000BB"> &nbsp; &nbsp; &nbsp; &nbsp;strmid</span><span style="color: #007700">(</span><span style="color: #0000BB">OrgRankovi</span><span style="color: #007700">[</span><span style="color: #0000BB">org</span><span style="color: #007700">][</span><span style="color: #0000BB">rank</span><span style="color: #007700">],&nbsp;</span><span style="color: #0000BB">text</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">0</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">strlen</span><span style="color: #007700">(</span><span style="color: #0000BB">text</span><span style="color: #007700">),&nbsp;</span><span style="color: #0000BB">MAX_ORG_RANK_NAME</span><span style="color: #007700">);<br /></span><span style="color: #0000BB"> &nbsp; &nbsp; &nbsp; &nbsp;</span><span style="color: #007700">goto&nbsp;</span><span style="color: #0000BB">rankedit</span><span style="color: #007700">;&nbsp;</span><span style="color: #FF8000">//&#x26;t&nbsp;HERE<br /></span><span style="color: #0000BB"> &nbsp; &nbsp;</span><span style="color: #007700">}<br /></span><span style="color: #0000BB"> &nbsp; &nbsp;</span><span style="color: #007700">return&nbsp;</span><span style="color: #0000BB">0</span><span style="color: #007700">;<br />}&nbsp;<br /></span></code></div></div></div><br />
<div class="codeblock phpcodeblock"><div class="title">PHP Code:</div><div class="body"><div dir="ltr"><code><span style="color: #FF8000">//onDialogResponse--<br /></span><span style="color: #007700">case&nbsp;</span><span style="color: #0000BB">5</span><span style="color: #007700">:<br />{<br /></span><span style="color: #0000BB"> &nbsp;  rankedit</span><span style="color: #007700">:<br /></span><span style="color: #0000BB"> &nbsp; &nbsp;</span><span style="color: #007700">{<br /></span><span style="color: #0000BB"> &nbsp; &nbsp; &nbsp; &nbsp;format</span><span style="color: #007700">(</span><span style="color: #0000BB">string</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">sizeof</span><span style="color: #007700">(string),&nbsp;</span><span style="color: #DD0000">"1.&nbsp;%s&#092;n2.&nbsp;%s&#092;n3.&nbsp;%s&#092;n4.&nbsp;%s&#092;n5.&nbsp;%s&#092;n6.&nbsp;%s"</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">OrgRankovi</span><span style="color: #007700">[</span><span style="color: #0000BB">org</span><span style="color: #007700">][</span><span style="color: #0000BB">1</span><span style="color: #007700">],&nbsp;</span><span style="color: #0000BB">OrgRankovi</span><span style="color: #007700">[</span><span style="color: #0000BB">org</span><span style="color: #007700">][</span><span style="color: #0000BB">2</span><span style="color: #007700">],&nbsp;</span><span style="color: #0000BB">OrgRankovi</span><span style="color: #007700">[</span><span style="color: #0000BB">org</span><span style="color: #007700">][</span><span style="color: #0000BB">3</span><span style="color: #007700">],&nbsp;</span><span style="color: #0000BB">OrgRankovi</span><span style="color: #007700">[</span><span style="color: #0000BB">org</span><span style="color: #007700">][</span><span style="color: #0000BB">4</span><span style="color: #007700">],&nbsp;</span><span style="color: #0000BB">OrgRankovi</span><span style="color: #007700">[</span><span style="color: #0000BB">org</span><span style="color: #007700">][</span><span style="color: #0000BB">5</span><span style="color: #007700">],&nbsp;</span><span style="color: #0000BB">OrgRankovi</span><span style="color: #007700">[</span><span style="color: #0000BB">org</span><span style="color: #007700">][</span><span style="color: #0000BB">6</span><span style="color: #007700">]);<br /></span><span style="color: #0000BB"> &nbsp; &nbsp; &nbsp; &nbsp;ShowPlayerDialog</span><span style="color: #007700">(</span><span style="color: #0000BB">playerid</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">DIALOG_EDIT_ORG_RANKOVI</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">DIALOG_STYLE_LIST</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">"Promjena&nbsp;rankova"</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">string</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">"Odabir"</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">"Odustani"</span><span style="color: #007700">);<br /></span><span style="color: #0000BB"> &nbsp; &nbsp;</span><span style="color: #007700">}<br />}&nbsp;<br /></span></code></div></div></div>]]></content>
		<draft xmlns="http://purl.org/atom-blog/ns#">false</draft>
	</entry>
	<entry xmlns="http://www.w3.org/2005/Atom">
		<author>
			<name type="html" xml:space="preserve"><![CDATA[<a href="https://www.burgershot.gg/member.php?action=profile&uid=1432">fusez</a>]]></name>
		</author>
		<published>2022-07-19T19:30:40Z</published>
		<updated>2022-07-19T21:07:06Z</updated>
		<link rel="alternate" type="text/html" href="https://www.burgershot.gg/showthread.php?tid=2308" />
		<id>https://www.burgershot.gg/showthread.php?tid=2308</id>
		<title xml:space="preserve"><![CDATA[Fusez's Map Editor (Version 3) [Dynamic Categories] [Improved] [Best of Version 1&2 C]]></title>
		<content type="html" xml:space="preserve" xml:base="https://www.burgershot.gg/showthread.php?tid=2308"><![CDATA[<div style="text-align: center;" class="mycode_align"><img src="http://i.imgur.com/GXbn2ba.png" loading="lazy"  alt="[Image: GXbn2ba.png]" class="mycode_img" /></div>
<div style="text-align: center;" class="mycode_align"><span style="font-size: xx-large;" class="mycode_size">Version 3<span style="font-weight: bold;" class="mycode_b"> </span><a href="https://github.com/fusez/Map-Editor-V3" target="_blank" rel="noopener" class="mycode_url"><span style="font-weight: bold;" class="mycode_b">GitHub</span></a> Page</span></div>]]></content>
		<draft xmlns="http://purl.org/atom-blog/ns#">false</draft>
	</entry>
	<entry xmlns="http://www.w3.org/2005/Atom">
		<author>
			<name type="html" xml:space="preserve"><![CDATA[<a href="https://www.burgershot.gg/member.php?action=profile&uid=782">GARS</a>]]></name>
		</author>
		<published>2022-07-19T17:47:31Z</published>
		<updated>2022-07-19T17:47:31Z</updated>
		<link rel="alternate" type="text/html" href="https://www.burgershot.gg/showthread.php?tid=2307" />
		<id>https://www.burgershot.gg/showthread.php?tid=2307</id>
		<title xml:space="preserve"><![CDATA[[MySQL] Problema con registro de datos]]></title>
		<content type="html" xml:space="preserve" xml:base="https://www.burgershot.gg/showthread.php?tid=2307"><![CDATA[Hola, tengo un problema con MySQL al registrar nuevos datos, mi servidor era SQLite y lo pase a MySQL pero al registrar un nuevo dato (registrar cuenta) en la base de datos esta no me figura/registra la el ID de forma ascendiente, me explico, en la tabla solo me registra como ID 0, así:<br />
<br />
<img src="https://i.imgur.com/2UtuvbC.png" loading="lazy"  alt="[Image: 2UtuvbC.png]" class="mycode_img" /><br />
<br />
Y cuando quiero volver a registrar otros datos(cuenta) no registra.<br />
<br />
Acá como está la DB:<br />
<br />
<br />
<div class="codeblock"><div class="title">Code:</div><div class="body" dir="ltr"><code>CREATE TABLE `cuenta` (<br />
  `ID` int(11) NOT NULL,<br />
  `IP` varchar(16) DEFAULT NULL,<br />
  `NAME` varchar(24) DEFAULT NULL,<br />
  `EMAIL` varchar(32) DEFAULT NULL,<br />
  `PASS` varchar(65) DEFAULT NULL,<br />
  `CONNECTED` int(11) NOT NULL<br />
) ENGINE=InnoDB DEFAULT CHARSET=utf8;<br />
<br />
ALTER TABLE `cuenta`<br />
<br />
  ADD PRIMARY KEY (`ID`);</code></div></div><br />
Y en la gamemode así<br />
<br />
<div class="codeblock"><div class="title">Code:</div><div class="body" dir="ltr"><code>RegisterNP(playerid)<br />
{<br />
new DB_Query[500];<br />
format(DB_Query, sizeof DB_Query,<br />
"&#92;<br />
INSERT INTO `CUENTA`&#92;<br />
(&#92;<br />
`IP`, `NAME`, `EMAIL`, `PASS`, `CONNECTED`&#92;<br />
)&#92;<br />
VALUES&#92;<br />
(&#92;<br />
'%q', '%q', '%q', '%q', '1'&#92;<br />
);&#92;<br />
", INFO_AC[playerid][iac_IP], INFO_AC[playerid][iac_NAME], INFO_AC[playerid][iac_EMAIL], INFO_AC[playerid][iac_PASS]);<br />
mysql_tquery(DATABASE, DB_Query, "LoadRegisterNP", "i", playerid);<br />
return 1;<br />
}</code></div></div>]]></content>
		<draft xmlns="http://purl.org/atom-blog/ns#">false</draft>
	</entry>
	<entry xmlns="http://www.w3.org/2005/Atom">
		<author>
			<name type="html" xml:space="preserve"><![CDATA[<a href="https://www.burgershot.gg/member.php?action=profile&uid=4372">Kazuha</a>]]></name>
		</author>
		<published>2022-07-13T07:41:05Z</published>
		<updated>2022-07-13T07:41:05Z</updated>
		<link rel="alternate" type="text/html" href="https://www.burgershot.gg/showthread.php?tid=2306" />
		<id>https://www.burgershot.gg/showthread.php?tid=2306</id>
		<title xml:space="preserve"><![CDATA[GTA-MP.CZ]]></title>
		<content type="html" xml:space="preserve" xml:base="https://www.burgershot.gg/showthread.php?tid=2306"><![CDATA[▬ 🔥 Playing in the best GTA Server  ▬<br />
<br />
GTA-MULTIPLAYER.CZ is an SA-MP server with a lot of features from GTA Online and the famous GTA franchise and awesome shows!<br />
<br />
<br />
<br />
▬  ⭐️ Why play on our servers? ▬ <br />
<br />
<br />
- Many features from singleplayer<br />
- Pool and basketball minigames<br />
- Video game QUB3D from GTA V also Snake and Miner Arcade game<br />
- Custom-made roulettes, slot machines, video poker and horse-betting, Poker texas hold'em, and Wheel of fortune to win the unique vehicle<br />
- Stock market BAWSAQ and Crypto Currency market<br />
- Gang wars over 75 territories<br />
- More than 30 unique Jobs to earn money (including taxi driver paramedic, firefighter, pimping, valet parking and pizza-boy, and many more)<br />
- Singleplayer races and other challenges<br />
- Gyms, strip clubs, clothes shops, hidden packages, oysters, spray tags, horseshoes, and much more<br />
- A fishing activity for calming days<br />
- Drug Base business to take over and expand your empire and distribute your drugs along with Meth cooking<br />
- Experience the new events Undead Nightmare where you have to survive a massive amount of zombies<br />
- Also play a Shell Game in your free time to test your Focus<br />
- We also have a helpful Helper team that will answer all your questions<br />
- Professional, Friendly and supportive administration<br />
<br />
<br />
<br />
<br />
▬  ⚡️ Server Addresses  ▬ <br />
<br />
[CZ/EN] s1.gta-multiplayer.cz:7777<br />
[EN] s2.gta-multiplayer.cz:7777<br />
[EN] s3.gta-multiplayer.cz:7777<br />
[CZ] s4.gta-multiplayer.cz:7777 (0.3.DL)<br />
<br />
<br />
<br />
▬  🎉 Support me  ▬ <br />
<br />
<br />
🔗 - Website: https://gta-multiplayer.cz/en/<br />
🔗 - GTA-MULTIPLAYER.CZ's YouTube Official Channel: https://www.youtube.com/user/gtampLIVE<br />
🔗 - Discord:  https://discord.com/invite/SJDm5NPVvh<br />
<br />
<br />
Have a great day]]></content>
		<draft xmlns="http://purl.org/atom-blog/ns#">false</draft>
	</entry>
	<entry xmlns="http://www.w3.org/2005/Atom">
		<author>
			<name type="html" xml:space="preserve"><![CDATA[<a href="https://www.burgershot.gg/member.php?action=profile&uid=3098">Radical</a>]]></name>
		</author>
		<published>2022-07-02T23:07:43Z</published>
		<updated>2022-07-06T01:45:47Z</updated>
		<link rel="alternate" type="text/html" href="https://www.burgershot.gg/showthread.php?tid=1708" />
		<id>https://www.burgershot.gg/showthread.php?tid=1708</id>
		<title xml:space="preserve"><![CDATA[My suggestions [Update: 2022-07-06]]]></title>
		<content type="html" xml:space="preserve" xml:base="https://www.burgershot.gg/showthread.php?tid=1708"><![CDATA[Objects &amp; PlayerObjects:<br />
<div class="codeblock phpcodeblock"><div class="title">PHP Code:</div><div class="body"><div dir="ltr"><code><span style="color: #0000BB">SetObjectSize</span><span style="color: #007700">(</span><span style="color: #0000BB">objectid</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">Float</span><span style="color: #007700">:&nbsp;</span><span style="color: #0000BB">fX</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">Float</span><span style="color: #007700">:&nbsp;</span><span style="color: #0000BB">fY</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">Float</span><span style="color: #007700">:&nbsp;</span><span style="color: #0000BB">fZ</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">SetPlayerObjectSize</span><span style="color: #007700">(</span><span style="color: #0000BB">objectid</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">Float</span><span style="color: #007700">:&nbsp;</span><span style="color: #0000BB">fX</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">Float</span><span style="color: #007700">:&nbsp;</span><span style="color: #0000BB">fY</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">Float</span><span style="color: #007700">:&nbsp;</span><span style="color: #0000BB">fZ</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">GetObjectSize</span><span style="color: #007700">(</span><span style="color: #0000BB">objectid</span><span style="color: #007700">,&nbsp;&amp;</span><span style="color: #0000BB">Float</span><span style="color: #007700">:&nbsp;</span><span style="color: #0000BB">fX</span><span style="color: #007700">,&nbsp;&amp;</span><span style="color: #0000BB">Float</span><span style="color: #007700">:&nbsp;</span><span style="color: #0000BB">fY</span><span style="color: #007700">,&nbsp;&amp;</span><span style="color: #0000BB">Float</span><span style="color: #007700">:&nbsp;</span><span style="color: #0000BB">fZ</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">GetPlayerObjectSize</span><span style="color: #007700">(</span><span style="color: #0000BB">objectid</span><span style="color: #007700">,&nbsp;&amp;</span><span style="color: #0000BB">Float</span><span style="color: #007700">:&nbsp;</span><span style="color: #0000BB">fX</span><span style="color: #007700">,&nbsp;&amp;</span><span style="color: #0000BB">Float</span><span style="color: #007700">:&nbsp;</span><span style="color: #0000BB">fY</span><span style="color: #007700">,&nbsp;&amp;</span><span style="color: #0000BB">Float</span><span style="color: #007700">:&nbsp;</span><span style="color: #0000BB">fZ</span><span style="color: #007700">);&nbsp;<br /></span></code></div></div></div><br />
Textdraws &amp; PlayerTextDraws:<br />
<div class="codeblock phpcodeblock"><div class="title">PHP Code:</div><div class="body"><div dir="ltr"><code><span style="color: #0000BB">TextDrawFont</span><span style="color: #007700">(</span><span style="color: #0000BB">Text</span><span style="color: #007700">:</span><span style="color: #0000BB">text</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">fontface</span><span style="color: #007700">[]);&nbsp;</span><span style="color: #FF8000">//Able&nbsp;to&nbsp;use&nbsp;any&nbsp;font&nbsp;in&nbsp;TextDraw<br /></span><span style="color: #0000BB">PlayerTextDrawFont</span><span style="color: #007700">(</span><span style="color: #0000BB">playerid</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">PlayerText</span><span style="color: #007700">:</span><span style="color: #0000BB">text</span><span style="color: #007700">,</span><span style="color: #0000BB"> fontface</span><span style="color: #007700">[]);<br /><br /></span><span style="color: #0000BB">TextDrawRotateText</span><span style="color: #007700">(</span><span style="color: #0000BB">Text</span><span style="color: #007700">:</span><span style="color: #0000BB">text</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">Float</span><span style="color: #007700">:</span><span style="color: #0000BB">rotate</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">PlayerTextDrawRotateText</span><span style="color: #007700">(</span><span style="color: #0000BB">playerid</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">PlayerText</span><span style="color: #007700">:</span><span style="color: #0000BB">text</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">Float</span><span style="color: #007700">:</span><span style="color: #0000BB">rotate</span><span style="color: #007700">);<br /><br />-&nbsp;</span><span style="color: #0000BB">Make&nbsp;it&nbsp;possible&nbsp;to&nbsp;add&nbsp;a&nbsp;</span><span style="color: #007700">new&nbsp;</span><span style="color: #0000BB">txd&nbsp;</span><span style="color: #007700">and&nbsp;</span><span style="color: #0000BB">player&nbsp;download&nbsp;it&nbsp;when&nbsp;connect&nbsp;to&nbsp;the&nbsp;server</span><span style="color: #007700">.&nbsp;[../</span><span style="color: #0000BB">omp&nbsp;server</span><span style="color: #007700">/</span><span style="color: #0000BB">models</span><span style="color: #007700">/</span><span style="color: #0000BB">txd</span><span style="color: #007700">]<br />(</span><span style="color: #0000BB">Like&nbsp;samp&nbsp;0.3</span><span style="color: #007700">.</span><span style="color: #0000BB">DL&nbsp;download&nbsp;skin&nbsp;character&nbsp;files&nbsp;from&nbsp;server</span><span style="color: #007700">)&nbsp;(</span><span style="color: #0000BB">https</span><span style="color: #007700">:</span><span style="color: #FF8000">//ibb.co/R2qgXLJ)<br /><br /></span><span style="color: #007700">-&nbsp;</span><span style="color: #0000BB">Add&nbsp;color&nbsp;gradient&nbsp;textdraws</span><span style="color: #007700">.&nbsp;<br /></span></code></div></div></div><br />
Keys:<br />
<div class="codeblock phpcodeblock"><div class="title">PHP Code:</div><div class="body"><div dir="ltr"><code><span style="color: #007700">-&nbsp;</span><span style="color: #0000BB">Supporting&nbsp;all Keys</span><span style="color: #007700">.<br />if&nbsp;(</span><span style="color: #0000BB">newkeys&nbsp;</span><span style="color: #007700">==&nbsp;</span><span style="color: #0000BB">0x41</span><span style="color: #007700">)&nbsp;</span><span style="color: #FF8000">//&nbsp;'A'&nbsp;key&nbsp;<br /></span></code></div></div></div><br />
File functions:<br />
<div class="codeblock phpcodeblock"><div class="title">PHP Code:</div><div class="body"><div dir="ltr"><code><span style="color: #007700">-&nbsp;</span><span style="color: #0000BB">Reading&nbsp;a&nbsp;directory&nbsp;in&nbsp;scriptfiles</span><span style="color: #007700">.<br /></span><span style="color: #0000BB">readdir</span><span style="color: #007700">(...);&nbsp;<br /></span></code></div></div></div><br />
Players:<br />
<div class="codeblock phpcodeblock"><div class="title">PHP Code:</div><div class="body"><div dir="ltr"><code><span style="color: #0000BB">ReconnectPlayer</span><span style="color: #007700">(</span><span style="color: #0000BB">playerid</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">delay</span><span style="color: #007700">=</span><span style="color: #0000BB">0</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">TogglePlayerHUD</span><span style="color: #007700">(</span><span style="color: #0000BB">playerid</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">toggle</span><span style="color: #007700">);&nbsp;</span><span style="color: #FF8000">//Show/Hide&nbsp;game&nbsp;hud<br /></span><span style="color: #0000BB">TogglePlayerChat</span><span style="color: #007700">(</span><span style="color: #0000BB">playerid</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">toggle</span><span style="color: #007700">);&nbsp;</span><span style="color: #FF8000">//Show/Hide&nbsp;chats<br /></span><span style="color: #0000BB">ForcePlayerTakeScreenShot</span><span style="color: #007700">(</span><span style="color: #0000BB">playerid</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">BurnPlayer</span><span style="color: #007700">(</span><span style="color: #0000BB">playerid</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">TogglePlayerInvulnerable</span><span style="color: #007700">(</span><span style="color: #0000BB">playerid</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">toggle</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">ReloadPlayerArmedWeapon</span><span style="color: #007700">(</span><span style="color: #0000BB">playerid</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">RemoveWeaponFromPlayer</span><span style="color: #007700">(</span><span style="color: #0000BB">playerid</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">weaponid</span><span style="color: #007700">);<br /><br /></span><span style="color: #0000BB">PlayerDeathListShow</span><span style="color: #007700">(</span><span style="color: #0000BB">playerid</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">PlayerDeathListHide</span><span style="color: #007700">(</span><span style="color: #0000BB">playerid</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">PlayerDeathListPos</span><span style="color: #007700">(</span><span style="color: #0000BB">playerid</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">Float</span><span style="color: #007700">:</span><span style="color: #0000BB">X</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">Float</span><span style="color: #007700">:</span><span style="color: #0000BB">Y</span><span style="color: #007700">);<br /><br /></span><span style="color: #0000BB">SetPlayerFpsLimit</span><span style="color: #007700">(</span><span style="color: #0000BB">playerid</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">amount</span><span style="color: #007700">);&nbsp;</span><span style="color: #FF8000">//&nbsp;/fpslimit&nbsp;(30&nbsp;to&nbsp;90)<br /></span><span style="color: #0000BB">GetPlayerFpsLimit</span><span style="color: #007700">(</span><span style="color: #0000BB">playerid</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">SetPlayerFontSize</span><span style="color: #007700">(</span><span style="color: #0000BB">playerid</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">size</span><span style="color: #007700">);&nbsp;</span><span style="color: #FF8000">//Chat&nbsp;font&nbsp;size&nbsp;/fontsize&nbsp;(-3&nbsp;to&nbsp;5)<br /></span><span style="color: #0000BB">GetPlayerFontSize</span><span style="color: #007700">(</span><span style="color: #0000BB">playerid</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">SetPlayerPageSize</span><span style="color: #007700">(</span><span style="color: #0000BB">playerid</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">size</span><span style="color: #007700">);&nbsp;</span><span style="color: #FF8000">//&nbsp;/pagesize&nbsp;(10&nbsp;to&nbsp;20)<br /></span><span style="color: #0000BB">GetPlayerPageSize</span><span style="color: #007700">(</span><span style="color: #0000BB">playerid</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">TogglePlayerHeadMove</span><span style="color: #007700">(</span><span style="color: #0000BB">playerid</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">toggle</span><span style="color: #007700">);&nbsp;</span><span style="color: #FF8000">//&nbsp;/headmove<br /></span><span style="color: #0000BB">TogglePlayerDebugLabels</span><span style="color: #007700">(</span><span style="color: #0000BB">playerid</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">toggle</span><span style="color: #007700">);&nbsp;</span><span style="color: #FF8000">//&nbsp;/dl<br /></span><span style="color: #0000BB">TogglePlayerTimestamp</span><span style="color: #007700">(</span><span style="color: #0000BB">playerid</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">toggle</span><span style="color: #007700">);&nbsp;</span><span style="color: #FF8000">//&nbsp;/timestamp<br /></span><span style="color: #0000BB">TogglePlayerAudioMsg</span><span style="color: #007700">(</span><span style="color: #0000BB">playerid</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">toggle</span><span style="color: #007700">);&nbsp;</span><span style="color: #FF8000">//&nbsp;/audiomsg<br /></span><span style="color: #0000BB">QuitPlayer</span><span style="color: #007700">(</span><span style="color: #0000BB">playerid</span><span style="color: #007700">);&nbsp;</span><span style="color: #FF8000">//&nbsp;/quit<br /><br /></span><span style="color: #0000BB">TogglePlayerFirstPerson</span><span style="color: #007700">(</span><span style="color: #0000BB">playerid</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">toggle</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">TogglePlayerIronFist</span><span style="color: #007700">(</span><span style="color: #0000BB">playerid</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">toggle</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">TogglePlayerInfiniteRun</span><span style="color: #007700">(</span><span style="color: #0000BB">playerid</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">toggle</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">SetPlayerMapMarkPos</span><span style="color: #007700">(</span><span style="color: #0000BB">playerid</span><span style="color: #007700">,</span><span style="color: #0000BB"> Float</span><span style="color: #007700">:</span><span style="color: #0000BB">x</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">Float</span><span style="color: #007700">:</span><span style="color: #0000BB">y</span><span style="color: #007700">,</span><span style="color: #0000BB"> Float</span><span style="color: #007700">:</span><span style="color: #0000BB">z</span><span style="color: #007700">);&nbsp;</span><span style="color: #FF8000">//Red&nbsp;mark&nbsp;on&nbsp;map<br /></span><span style="color: #0000BB">GetPlayerMapMarkPos</span><span style="color: #007700">(</span><span style="color: #0000BB">playerid</span><span style="color: #007700">,</span><span style="color: #0000BB"> </span><span style="color: #007700">&amp;</span><span style="color: #0000BB">Float</span><span style="color: #007700">:</span><span style="color: #0000BB">x</span><span style="color: #007700">,</span><span style="color: #0000BB"> </span><span style="color: #007700">&amp;</span><span style="color: #0000BB">Float</span><span style="color: #007700">:</span><span style="color: #0000BB">y</span><span style="color: #007700">,</span><span style="color: #0000BB"> </span><span style="color: #007700">&amp;</span><span style="color: #0000BB">Float</span><span style="color: #007700">:</span><span style="color: #0000BB">z</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">GetPlayerBreathBar</span><span style="color: #007700">(</span><span style="color: #0000BB">playerid</span><span style="color: #007700">,&nbsp;&amp;</span><span style="color: #0000BB">Float</span><span style="color: #007700">:</span><span style="color: #0000BB">amount</span><span style="color: #007700">);&nbsp;</span><span style="color: #FF8000">//Blue&nbsp;bar&nbsp;that&nbsp;appears&nbsp;on&nbsp;breathing&nbsp;underwater&nbsp;(idk&nbsp;what&nbsp;to&nbsp;name&nbsp;this&nbsp;func)<br /></span><span style="color: #0000BB">TogglePlayerSeaWaves</span><span style="color: #007700">(</span><span style="color: #0000BB">playerid</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">toggle</span><span style="color: #007700">);&nbsp;</span><span style="color: #FF8000">//Toggle&nbsp;0&nbsp;=&nbsp;The&nbsp;sea&nbsp;does&nbsp;not&nbsp;wave&nbsp;and&nbsp;the&nbsp;water are&nbsp;smooth&nbsp;<br /></span></code></div></div></div><br />
Damage:<br />
<div class="codeblock phpcodeblock"><div class="title">PHP Code:</div><div class="body"><div dir="ltr"><code><span style="color: #0000BB">OnPlayerTakeDamage</span><span style="color: #007700">(...);<br /></span><span style="color: #0000BB">OnPlayerGiveDamage</span><span style="color: #007700">(...);<br />-&nbsp;If&nbsp;</span><span style="color: #0000BB">returns&nbsp;0</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">prevent&nbsp;player&nbsp;from&nbsp;health&nbsp;loss</span><span style="color: #007700">.<br /><br />-&nbsp;</span><span style="color: #0000BB">Add&nbsp;</span><span style="color: #007700">new&nbsp;</span><span style="color: #0000BB">weaponid&nbsp;supports</span><span style="color: #007700">:&nbsp;</span><span style="color: #0000BB">WEAPON_HYDRA</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">WEAPON_HUNTER</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">WEAPON_SEASPAROW</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">WEAPON_BARRON</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">WEAPON_RUSTLER</span><span style="color: #007700">.<br /><br />-</span><span style="color: #0000BB"> It&nbsp;would&nbsp;be&nbsp;nice&nbsp;to&nbsp;add&nbsp;all&nbsp;weapon</span><span style="color: #007700">-</span><span style="color: #0000BB">config functions&nbsp;like&nbsp;SetWeaponDamage</span><span style="color: #007700">()&nbsp;</span><span style="color: #0000BB">to&nbsp;omp</span><span style="color: #007700">.<br /><br />-&nbsp;If&nbsp;</span><span style="color: #0000BB">the&nbsp;player&nbsp;jumps&nbsp;from&nbsp;a&nbsp;height&nbsp;</span><span style="color: #007700">and&nbsp;</span><span style="color: #0000BB">dies&nbsp;</span><span style="color: #007700">,&nbsp;return&nbsp;</span><span style="color: #0000BB">last&nbsp;player&nbsp;who&nbsp;damage&nbsp;him</span><span style="color: #007700">.&nbsp;(</span><span style="color: #0000BB">On&nbsp;OnPlayerDeath</span><span style="color: #007700">)&nbsp;<br /></span></code></div></div></div><br />
Player HUD:<br />
<div class="codeblock phpcodeblock"><div class="title">PHP Code:</div><div class="body"><div dir="ltr"><code><span style="color: #007700">-&nbsp;</span><span style="color: #0000BB">Change&nbsp;game&nbsp;hud position</span><span style="color: #007700">:<br /></span><span style="color: #0000BB">HUD_HealthPos</span><span style="color: #007700">(</span><span style="color: #0000BB">playerid</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">Float</span><span style="color: #007700">:</span><span style="color: #0000BB">X</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">Float</span><span style="color: #007700">:</span><span style="color: #0000BB">Y</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">HUD_ArmourPos</span><span style="color: #007700">(</span><span style="color: #0000BB">playerid</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">Float</span><span style="color: #007700">:</span><span style="color: #0000BB">X</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">Float</span><span style="color: #007700">:</span><span style="color: #0000BB">Y</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">HUD_BreathBarPos</span><span style="color: #007700">(</span><span style="color: #0000BB">playerid</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">Float</span><span style="color: #007700">:</span><span style="color: #0000BB">X</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">Float</span><span style="color: #007700">:</span><span style="color: #0000BB">Y</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">HUD_WantedPos</span><span style="color: #007700">(</span><span style="color: #0000BB">playerid</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">Float</span><span style="color: #007700">:</span><span style="color: #0000BB">X</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">Float</span><span style="color: #007700">:</span><span style="color: #0000BB">Y</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">HUD_MoneyPos</span><span style="color: #007700">(</span><span style="color: #0000BB">playerid</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">Float</span><span style="color: #007700">:</span><span style="color: #0000BB">X</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">Float</span><span style="color: #007700">:</span><span style="color: #0000BB">Y</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">HUD_TimePos</span><span style="color: #007700">(</span><span style="color: #0000BB">playerid</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">Float</span><span style="color: #007700">:</span><span style="color: #0000BB">X</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">Float</span><span style="color: #007700">:</span><span style="color: #0000BB">Y</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">HUD_WeaponPos</span><span style="color: #007700">(</span><span style="color: #0000BB">playerid</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">Float</span><span style="color: #007700">:</span><span style="color: #0000BB">X</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">Float</span><span style="color: #007700">:</span><span style="color: #0000BB">Y</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">HUD_MiniMapPos</span><span style="color: #007700">(</span><span style="color: #0000BB">playerid</span><span style="color: #007700">,</span><span style="color: #0000BB"> Float</span><span style="color: #007700">:</span><span style="color: #0000BB">X</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">Float</span><span style="color: #007700">:</span><span style="color: #0000BB">Y</span><span style="color: #007700">);<br /><br />-&nbsp;</span><span style="color: #0000BB">Show</span><span style="color: #007700">/</span><span style="color: #0000BB">Hide&nbsp;game&nbsp;hud</span><span style="color: #007700">:<br /></span><span style="color: #0000BB">HUD_HealthToggle</span><span style="color: #007700">(</span><span style="color: #0000BB">playerid</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">toggle</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">HUD_ArmourToggle</span><span style="color: #007700">(</span><span style="color: #0000BB">playerid</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">toggle</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">HUD_BreathBarToggle</span><span style="color: #007700">(</span><span style="color: #0000BB">playerid</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">toggle</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">HUD_WantedToggle</span><span style="color: #007700">(</span><span style="color: #0000BB">playerid</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">toggle</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">HUD_MoneyToggle</span><span style="color: #007700">(</span><span style="color: #0000BB">playerid</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">toggle</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">HUD_TimeToggle</span><span style="color: #007700">(</span><span style="color: #0000BB">playerid</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">toggle</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">HUD_WeaponToggle</span><span style="color: #007700">(</span><span style="color: #0000BB">playerid</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">toggle</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">HUD_MiniMapToggle</span><span style="color: #007700">(</span><span style="color: #0000BB">playerid</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">toggle</span><span style="color: #007700">);&nbsp;<br /></span></code></div></div></div><br />
Audio Stream:<br />
<div class="codeblock phpcodeblock"><div class="title">PHP Code:</div><div class="body"><div dir="ltr"><code><span style="color: #0000BB">PlayAudioStreamForPlayerEx</span><span style="color: #007700">(</span><span style="color: #0000BB">playerid</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">url</span><span style="color: #007700">[],&nbsp;</span><span style="color: #0000BB">play_from_second&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">0</span><span style="color: #007700">,</span><span style="color: #0000BB"> Float</span><span style="color: #007700">:</span><span style="color: #0000BB">posX&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">0.0</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">Float</span><span style="color: #007700">:</span><span style="color: #0000BB">posY&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">0.0</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">Float</span><span style="color: #007700">:</span><span style="color: #0000BB">posZ&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">0.0</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">Float</span><span style="color: #007700">:</span><span style="color: #0000BB">distance&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">50.0</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">usepos&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">0</span><span style="color: #007700">);&nbsp;</span><span style="color: #FF8000">//Play&nbsp;audio&nbsp;from&nbsp;a&nbsp;specific&nbsp;second<br /></span><span style="color: #0000BB">PauseAudioStreamForPlayer</span><span style="color: #007700">(</span><span style="color: #0000BB">playerid</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">ResumeAudioStreamForPlayer</span><span style="color: #007700">(</span><span style="color: #0000BB">playerid</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">UpdateAudioStreamPosForPlayer</span><span style="color: #007700">(</span><span style="color: #0000BB">playerid</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">Float</span><span style="color: #007700">:</span><span style="color: #0000BB">posX&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">0.0</span><span style="color: #007700">,</span><span style="color: #0000BB"> Float</span><span style="color: #007700">:</span><span style="color: #0000BB">posY </span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">0.0</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">Float</span><span style="color: #007700">:</span><span style="color: #0000BB">posZ&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">0.0</span><span style="color: #007700">);&nbsp;</span><span style="color: #FF8000">//If&nbsp;positions&nbsp;is&nbsp;0.0 consider&nbsp;to&nbsp;player&nbsp;pos<br /></span><span style="color: #0000BB">GetPlayerAudioStreamUrl</span><span style="color: #007700">(</span><span style="color: #0000BB">playerid</span><span style="color: #007700">,&nbsp;&amp;</span><span style="color: #0000BB">dest</span><span style="color: #007700">[],&nbsp;</span><span style="color: #0000BB">len&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">sizeof&nbsp;dest</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">GetPlayerAudioStreamCurrentTime</span><span style="color: #007700">(</span><span style="color: #0000BB">playerid</span><span style="color: #007700">);</span><span style="color: #0000BB"> </span><span style="color: #FF8000">//Return&nbsp;in&nbsp;seconds<br /></span><span style="color: #0000BB">GetPlayerAudioStreamPos</span><span style="color: #007700">(</span><span style="color: #0000BB">playerid</span><span style="color: #007700">,&nbsp;&amp;</span><span style="color: #0000BB">Float</span><span style="color: #007700">:</span><span style="color: #0000BB">posX</span><span style="color: #007700">,&nbsp;&amp;</span><span style="color: #0000BB">Float</span><span style="color: #007700">:</span><span style="color: #0000BB">posY</span><span style="color: #007700">,&nbsp;&amp;</span><span style="color: #0000BB">Float</span><span style="color: #007700">:</span><span style="color: #0000BB">posZ</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">GetPlayerAudioStreamDistance</span><span style="color: #007700">(</span><span style="color: #0000BB">playerid</span><span style="color: #007700">,&nbsp;&amp;</span><span style="color: #0000BB">Float</span><span style="color: #007700">:</span><span style="color: #0000BB">distance</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">IsPlayerAudioStreamPaused</span><span style="color: #007700">(</span><span style="color: #0000BB">playerid</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">GetAudioStreamUrlLength</span><span style="color: #007700">(</span><span style="color: #0000BB">url</span><span style="color: #007700">[]);</span><span style="color: #0000BB"> </span><span style="color: #FF8000">//Return&nbsp;in&nbsp;seconds&nbsp;<br /></span></code></div></div></div><br />
Vehicles:<br />
<div class="codeblock phpcodeblock"><div class="title">PHP Code:</div><div class="body"><div dir="ltr"><code><span style="color: #0000BB">ToggleVehicleInvulnerable</span><span style="color: #007700">(</span><span style="color: #0000BB">vehicleid</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">toggle</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">SetVehicleSpeed</span><span style="color: #007700">(</span><span style="color: #0000BB">vehicleid</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">Float</span><span style="color: #007700">:</span><span style="color: #0000BB">speed</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">Float</span><span style="color: #007700">:</span><span style="color: #0000BB">GetVehicleSpeed</span><span style="color: #007700">(</span><span style="color: #0000BB">vehicleid</span><span style="color: #007700">);<br /><br /></span><span style="color: #0000BB">ToggleVehicleShoot</span><span style="color: #007700">(</span><span style="color: #0000BB">vehicleid</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">toggle</span><span style="color: #007700">);&nbsp;</span><span style="color: #FF8000">//Disable&nbsp;Hydra/Hunter/Rustler/SeaSparrow&nbsp;shooting<br /></span><span style="color: #0000BB">ToggleVehicleLightBars</span><span style="color: #007700">(</span><span style="color: #0000BB">vehicleid</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">toggle</span><span style="color: #007700">);&nbsp;</span><span style="color: #FF8000">//Police&nbsp;vehicles&nbsp;or&nbsp;Ambulance&nbsp;vehicles <br /></span><span style="color: #0000BB">ToggleVehicleBlowFuelTank</span><span style="color: #007700">(</span><span style="color: #0000BB">vehicleid</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">toggle</span><span style="color: #007700">);&nbsp;</span><span style="color: #FF8000">//In&nbsp;gta&nbsp;sa&nbsp;offline&nbsp;you&nbsp;able&nbsp;to&nbsp;blow&nbsp;vehicle by&nbsp;shooting&nbsp;at&nbsp;fuel&nbsp;tank.<br /></span><span style="color: #0000BB">FlipVehicle</span><span style="color: #007700">(</span><span style="color: #0000BB">vehicleid</span><span style="color: #007700">);&nbsp;</span><span style="color: #FF8000">//new&nbsp;Float:angle; GetVehicleZAngle(vehicleid,&nbsp;angle), SetVehicleZAngle(vehicleid,&nbsp;angle);&nbsp;<br /></span></code></div></div></div><br />
Actors:<br />
<div class="codeblock phpcodeblock"><div class="title">PHP Code:</div><div class="body"><div dir="ltr"><code><span style="color: #0000BB">SetActorArmedWeapon</span><span style="color: #007700">(</span><span style="color: #0000BB">actorid</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">weaponid</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">GetActorArmedWeapon</span><span style="color: #007700">(</span><span style="color: #0000BB">actorid</span><span style="color: #007700">);&nbsp;<br /></span></code></div></div></div><br />
Validation:<div class="codeblock phpcodeblock"><div class="title">PHP Code:</div><div class="body"><div dir="ltr"><code><span style="color: #0000BB">IsValidWeaponID</span><span style="color: #007700">(</span><span style="color: #0000BB">weaponid</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">IsValidVehicleModel</span><span style="color: #007700">(</span><span style="color: #0000BB">modelid</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">IsPositionInWater</span><span style="color: #007700">(</span><span style="color: #0000BB">Float</span><span style="color: #007700">:&nbsp;</span><span style="color: #0000BB">x</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">Float</span><span style="color: #007700">:&nbsp;</span><span style="color: #0000BB">y</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">Float</span><span style="color: #007700">:&nbsp;</span><span style="color: #0000BB">z</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">IsVehicleOverturned</span><span style="color: #007700">(</span><span style="color: #0000BB">vehicleid</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">IsPlayerAFK</span><span style="color: #007700">(</span><span style="color: #0000BB">playerid</span><span style="color: #007700">);&nbsp;</span><span style="color: #FF8000">//or&nbsp;IsPlayerPaused(playerid);<br /></span><span style="color: #0000BB">IsPlayerWalking</span><span style="color: #007700">(</span><span style="color: #0000BB">playerid</span><span style="color: #007700">);&nbsp;</span><span style="color: #FF8000">//W&nbsp;+&nbsp;ALT<br /></span><span style="color: #0000BB">IsPlayerRunning</span><span style="color: #007700">(</span><span style="color: #0000BB">playerid</span><span style="color: #007700">);&nbsp;</span><span style="color: #FF8000">//W&nbsp;+&nbsp;Space<br /></span><span style="color: #0000BB">IsPlayerStanding</span><span style="color: #007700">(</span><span style="color: #0000BB">playerid</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">IsPlayerInvulnerable</span><span style="color: #007700">(</span><span style="color: #0000BB">playerid</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">IsVehicleInvulnerable</span><span style="color: #007700">(</span><span style="color: #0000BB">vehicleid</span><span style="color: #007700">);&nbsp;<br /></span></code></div></div></div><br />
Strings:<br />
<div class="codeblock phpcodeblock"><div class="title">PHP Code:</div><div class="body"><div dir="ltr"><code><span style="color: #0000BB">IsNumeric</span><span style="color: #007700">(</span><span style="color: #0000BB">string</span><span style="color: #007700">[]);<br /></span><span style="color: #0000BB">IsDigit</span><span style="color: #007700">(</span><span style="color: #0000BB">string</span><span style="color: #007700">[]);<br /></span><span style="color: #0000BB">IsSpace</span><span style="color: #007700">(</span><span style="color: #0000BB">string</span><span style="color: #007700">[]);<br /></span><span style="color: #0000BB">IsLower</span><span style="color: #007700">(</span><span style="color: #0000BB">string</span><span style="color: #007700">[]);<br /></span><span style="color: #0000BB">IsUpper</span><span style="color: #007700">(</span><span style="color: #0000BB">string</span><span style="color: #007700">[]);<br /></span><span style="color: #0000BB">StrReplace</span><span style="color: #007700">(</span><span style="color: #0000BB">oldvalue</span><span style="color: #007700">[],&nbsp;</span><span style="color: #0000BB">newvalue</span><span style="color: #007700">[],&nbsp;&amp;</span><span style="color: #0000BB">dest</span><span style="color: #007700">[],&nbsp;</span><span style="color: #0000BB">len&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">sizeof&nbsp;dest</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">StrCpy</span><span style="color: #007700">(</span><span style="color: #0000BB">dest</span><span style="color: #007700">[],&nbsp;</span><span style="color: #0000BB">source</span><span style="color: #007700">[]);<br /></span><span style="color: #0000BB">StrCapitalize</span><span style="color: #007700">(</span><span style="color: #0000BB">string</span><span style="color: #007700">[],&nbsp;&amp;</span><span style="color: #0000BB">dest</span><span style="color: #007700">[],&nbsp;</span><span style="color: #0000BB">len&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">sizeof&nbsp;dest</span><span style="color: #007700">);&nbsp;</span><span style="color: #FF8000">//First&nbsp;character&nbsp;to&nbsp;upper&nbsp;case&nbsp;<br /></span></code></div></div></div><br />
Server:<br />
<div class="codeblock phpcodeblock"><div class="title">PHP Code:</div><div class="body"><div dir="ltr"><code><span style="color: #0000BB">GetServerIP</span><span style="color: #007700">();&nbsp;</span><span style="color: #FF8000">//Server public&nbsp;IP&nbsp;address<br /></span><span style="color: #0000BB">GetServerPing</span><span style="color: #007700">();&nbsp;<br /></span></code></div></div></div><br />
Socket:<br />
<div class="codeblock phpcodeblock"><div class="title">PHP Code:</div><div class="body"><div dir="ltr"><code><span style="color: #007700">-&nbsp;</span><span style="color: #0000BB">Add&nbsp;TCP&nbsp;</span><span style="color: #007700">&amp;&nbsp;</span><span style="color: #0000BB">UDP&nbsp;connections&nbsp;</span><span style="color: #007700">and&nbsp;</span><span style="color: #0000BB">functions</span><span style="color: #007700">.&nbsp;<br /></span></code></div></div></div><br />
Fixes:<br />
<div class="codeblock phpcodeblock"><div class="title">PHP Code:</div><div class="body"><div dir="ltr"><code><span style="color: #007700">-&nbsp;</span><span style="color: #0000BB">RemoveBuildingForPlayer</span><span style="color: #007700">(...);&nbsp;</span><span style="color: #FF8000">//&nbsp;It&nbsp;crashes&nbsp;game&nbsp;if&nbsp;number&nbsp;of&nbsp;removes&nbsp;is&nbsp;above&nbsp;1000<br /><br /></span><span style="color: #007700">-&nbsp;</span><span style="color: #0000BB">Enable&nbsp;tear&nbsp;gas&nbsp;coughing&nbsp;effect</span><span style="color: #007700">/</span><span style="color: #0000BB">anim</span><span style="color: #007700">.&nbsp;</span><span style="color: #0000BB">Also&nbsp;</span><span style="color: #007700">return&nbsp;</span><span style="color: #0000BB">amount&nbsp;of&nbsp;damage&nbsp;in&nbsp;OnPlayerTakeDamage</span><span style="color: #007700">.<br /><br />-&nbsp;</span><span style="color: #0000BB">When&nbsp;a&nbsp;vehicle&nbsp;dies&nbsp;then&nbsp;respawned&nbsp;the&nbsp;ID&nbsp;was&nbsp;change</span><span style="color: #007700">.&nbsp;</span><span style="color: #0000BB">ID&nbsp;should&nbsp;not&nbsp;change</span><span style="color: #007700">.<br /><br />-&nbsp;</span><span style="color: #0000BB">Head&nbsp;bleeding&nbsp;with&nbsp;headshot</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">animation&nbsp;deleted&nbsp;from&nbsp;sa</span><span style="color: #007700">-</span><span style="color: #0000BB">mp</span><span style="color: #007700">.&nbsp;Return&nbsp;</span><span style="color: #0000BB">it</span><span style="color: #007700">.<br /><br />-&nbsp;</span><span style="color: #0000BB">OnPlayerWeaponShoot</span><span style="color: #007700">(...);&nbsp;</span><span style="color: #FF8000">//Doesn't&nbsp;work&nbsp;in&nbsp;lagcompmode&nbsp;0<br /><br /></span><span style="color: #007700">-&nbsp;</span><span style="color: #0000BB">When&nbsp;player&nbsp;press&nbsp;TAB&nbsp;key&nbsp;the&nbsp;server&nbsp;textdraws&nbsp;are&nbsp;hide</span><span style="color: #007700">.&nbsp;<br /></span></code></div></div></div><br />
<span style="font-weight: bold;" class="mycode_b">Telegram:</span> <a href="http://t.me/adib_yg" target="_blank" rel="noopener" class="mycode_url">t.me/adib_yg</a><br />
<span style="font-weight: bold;" class="mycode_b">Discord:</span> <a href="http://discordapp.com/users/adib#5980" target="_blank" rel="noopener" class="mycode_url">Adib#5980</a>]]></content>
		<draft xmlns="http://purl.org/atom-blog/ns#">false</draft>
	</entry>
	<entry xmlns="http://www.w3.org/2005/Atom">
		<author>
			<name type="html" xml:space="preserve"><![CDATA[<a href="https://www.burgershot.gg/member.php?action=profile&uid=4372">Kazuha</a>]]></name>
		</author>
		<published>2022-06-26T10:02:41Z</published>
		<updated>2022-06-26T10:02:41Z</updated>
		<link rel="alternate" type="text/html" href="https://www.burgershot.gg/showthread.php?tid=2305" />
		<id>https://www.burgershot.gg/showthread.php?tid=2305</id>
		<title xml:space="preserve"><![CDATA[GTA-MULTIPLAYER.CZ]]></title>
		<content type="html" xml:space="preserve" xml:base="https://www.burgershot.gg/showthread.php?tid=2305"><![CDATA[▬ 🔥 Playing in the best GTA Server  ▬<br />
<br />
GTA-MULTIPLAYER.CZ is an SA-MP server with a lot of features from GTA Online and the famous GTA franchise and awesome shows!<br />
<br />
<br />
<br />
▬  ⭐️ Why play on our servers? ▬ <br />
<br />
<br />
- Many features from singleplayer<br />
- Pool and basketball minigames<br />
- Video game QUB3D from GTA V also Snake and Miner Arcade game<br />
- Custom-made roulettes, slot machines, video poker and horse-betting, Poker texas hold'em, and Wheel of fortune to win the unique vehicle<br />
- Stock market BAWSAQ and Crypto Currency market<br />
- Gang wars over 75 territories<br />
- More than 30 unique Jobs to earn money (including taxi driver paramedic, firefighter, pimping, valet parking and pizza-boy, and many more)<br />
- Singleplayer races and other challenges<br />
- Gyms, strip clubs, clothes shops, hidden packages, oysters, spray tags, horseshoes, and much more<br />
- A fishing activity for calming days<br />
- Drug Base business to take over and expand your empire and distribute your drugs along with Meth cooking<br />
- Experience the new events Undead Nightmare where you have to survive a massive amount of zombies<br />
- Also play a Shell Game in your free time to test your Focus<br />
- We also have a helpful Helper team that will answer all your questions<br />
- Professional, Friendly and supportive administration<br />
<br />
<br />
<br />
<br />
▬  ⚡️ Server Addresses  ▬ <br />
<br />
[CZ/EN] s1.gta-multiplayer.cz:7777<br />
[EN] s2.gta-multiplayer.cz:7777<br />
[EN] s3.gta-multiplayer.cz:7777<br />
[CZ] s4.gta-multiplayer.cz:7777 (0.3.DL)<br />
<br />
<br />
<br />
▬  🎉 Support me  ▬ <br />
<br />
<br />
🔗 - Website: https://gta-multiplayer.cz/en/<br />
🔗 - GTA-MULTIPLAYER.CZ's YouTube Official Channel: https://www.youtube.com/user/gtampLIVE<br />
🔗 - Discord:  https://discord.com/invite/SJDm5NPVvh<br />
<br />
<br />
Have a great day]]></content>
		<draft xmlns="http://purl.org/atom-blog/ns#">false</draft>
	</entry>
	<entry xmlns="http://www.w3.org/2005/Atom">
		<author>
			<name type="html" xml:space="preserve"><![CDATA[<a href="https://www.burgershot.gg/member.php?action=profile&uid=2613">yukie</a>]]></name>
		</author>
		<published>2022-06-20T15:17:29Z</published>
		<updated>2022-06-20T15:17:29Z</updated>
		<link rel="alternate" type="text/html" href="https://www.burgershot.gg/showthread.php?tid=2304" />
		<id>https://www.burgershot.gg/showthread.php?tid=2304</id>
		<title xml:space="preserve"><![CDATA[Weapon-config.inc no damage]]></title>
		<content type="html" xml:space="preserve" xml:base="https://www.burgershot.gg/showthread.php?tid=2304"><![CDATA[<span style="font-size: large;" class="mycode_size">Is there any other way to fix this on weapon-config, because there's no damage on my server</span>]]></content>
		<draft xmlns="http://purl.org/atom-blog/ns#">false</draft>
	</entry>
	<entry xmlns="http://www.w3.org/2005/Atom">
		<author>
			<name type="html" xml:space="preserve"><![CDATA[<a href="https://www.burgershot.gg/member.php?action=profile&uid=4426">PartyServerSAMP</a>]]></name>
		</author>
		<published>2022-06-18T15:57:28Z</published>
		<updated>2022-06-18T16:04:09Z</updated>
		<link rel="alternate" type="text/html" href="https://www.burgershot.gg/showthread.php?tid=2303" />
		<id>https://www.burgershot.gg/showthread.php?tid=2303</id>
		<title xml:space="preserve"><![CDATA[PartyServer | San Fierro TDM]]></title>
		<content type="html" xml:space="preserve" xml:base="https://www.burgershot.gg/showthread.php?tid=2303"><![CDATA[<div style="text-align: center;" class="mycode_align"><span style="font-weight: bold;" class="mycode_b"><span style="font-size: x-large;" class="mycode_size"><span style="color: #666666;" class="mycode_color">P</span><span style="color: #ff851b;" class="mycode_color">a</span></span></span><span style="font-weight: bold;" class="mycode_b"><span style="font-size: x-large;" class="mycode_size"><span style="color: #e82a1f;" class="mycode_color">r</span><span style="color: #c19e00;" class="mycode_color">t</span><span style="color: #b10dc9;" class="mycode_color">y</span><span style="color: #17b529;" class="mycode_color">S</span><span style="color: #44b8ff;" class="mycode_color">e</span><span style="color: #ff857a;" class="mycode_color">r</span><span style="color: #0074d9;" class="mycode_color">v</span><span style="color: #b10dc9;" class="mycode_color">e</span><span style="color: #2ecc40;" class="mycode_color">r</span> | San Fierro Team Deathmatch</span></span></div>
<div style="text-align: center;" class="mycode_align"><span style="font-weight: bold;" class="mycode_b"><span style="font-size: x-large;" class="mycode_size">IP address: <span style="color: #ff4136;" class="mycode_color">54.39.130.71:7777</span></span></span></div>
<div style="text-align: center;" class="mycode_align"><span style="font-size: x-large;" class="mycode_size"><span style="font-weight: bold;" class="mycode_b"><img src="https://www.pikpng.com/pngl/b/326-3268299_blue-default-discord-avatar-clipart.png" loading="lazy"  width="18" height="15" alt="[Image: 326-3268299_blue-default-discord-avatar-clipart.png]" class="mycode_img" /> Discord:</span> <span style="color: #1e92f7;" class="mycode_color"><a href="https://discord.gg/JFAwA5zn3b" target="_blank" rel="noopener" class="mycode_url">discord.partyserver</a></span></span></div>
<div style="text-align: center;" class="mycode_align"><span style="font-size: x-large;" class="mycode_size"><span style="font-weight: bold;" class="mycode_b">WEB:</span> <span style="color: #000000;" class="mycode_color"><a href="http://partyserver.ca/" target="_blank" rel="noopener" class="mycode_url">http://partyserver.ca/</a></span></span></div>
<div style="text-align: center;" class="mycode_align"><iframe width="560" height="315" src="//www.youtube.com/embed/IgwVgTaVb9A" frameborder="0" allowfullscreen></iframe></div>]]></content>
		<draft xmlns="http://purl.org/atom-blog/ns#">false</draft>
	</entry>
	<entry xmlns="http://www.w3.org/2005/Atom">
		<author>
			<name type="html" xml:space="preserve"><![CDATA[<a href="https://www.burgershot.gg/member.php?action=profile&uid=4372">Kazuha</a>]]></name>
		</author>
		<published>2022-06-15T16:53:55Z</published>
		<updated>2022-06-15T16:53:55Z</updated>
		<link rel="alternate" type="text/html" href="https://www.burgershot.gg/showthread.php?tid=2302" />
		<id>https://www.burgershot.gg/showthread.php?tid=2302</id>
		<title xml:space="preserve"><![CDATA[Welcome to Los Santos]]></title>
		<content type="html" xml:space="preserve" xml:base="https://www.burgershot.gg/showthread.php?tid=2302"><![CDATA[<span style="font-size: medium;" class="mycode_size"><span style="font-family: Roboto;" class="mycode_font">Hello, hope you're having a great day today I would like to introduce a server with a lot of features from GTA Online and GTA franchise and awesome shows!</span></span><br />
<br />
<br />
<br />
<br />
<span style="font-size: medium;" class="mycode_size"><span style="font-family: Roboto;" class="mycode_font"><span style="font-weight: bold;" class="mycode_b">Addresses:</span></span></span><br />
<br />
<span style="font-size: medium;" class="mycode_size"><span style="font-family: Roboto;" class="mycode_font">[CZ/EN] s1.gta-multiplayer.cz:7777</span></span><br />
<span style="font-size: medium;" class="mycode_size"><span style="font-family: Roboto;" class="mycode_font">[EN] s2.gta-multiplayer.cz:7777</span></span><br />
<span style="font-size: medium;" class="mycode_size"><span style="font-family: Roboto;" class="mycode_font">[EN] s3.gta-multiplayer.cz:7777</span></span><br />
<br />
<br />
<br />
<br />
<span style="font-size: medium;" class="mycode_size"><span style="font-family: Roboto;" class="mycode_font"><span style="font-weight: bold;" class="mycode_b">Why play on our servers?:</span></span></span><br />
<br />
<br />
<span style="font-size: medium;" class="mycode_size"><span style="font-family: Roboto;" class="mycode_font">- Many features from singleplayer</span></span><br />
<span style="font-size: medium;" class="mycode_size"><span style="font-family: Roboto;" class="mycode_font">- Pool and basketball minigames</span></span><br />
<span style="font-size: medium;" class="mycode_size"><span style="font-family: Roboto;" class="mycode_font">- Video game QUB3D from GTA V also Snake and Miner Arcade game</span></span><br />
<span style="font-size: medium;" class="mycode_size"><span style="font-family: Roboto;" class="mycode_font">- Custom made roulettes, slot machines, video poker and horse-betting, Poker texas hold'em, and Wheel of fortune to win a unique vehicle</span></span><br />
<span style="font-size: medium;" class="mycode_size"><span style="font-family: Roboto;" class="mycode_font">- Stock market BAWSAQ and Crypto Currency market</span></span><br />
<span style="font-size: medium;" class="mycode_size"><span style="font-family: Roboto;" class="mycode_font">- Gang wars over 75 territories</span></span><br />
<span style="font-size: medium;" class="mycode_size"><span style="font-family: Roboto;" class="mycode_font">- More than 30 unique Jobs to earn money (including taxi driver paramedic, firefighter, pimping, valet parking and pizza-boy, and many more)</span></span><br />
<span style="font-size: medium;" class="mycode_size"><span style="font-family: Roboto;" class="mycode_font">- Singleplayer races and other challenges</span></span><br />
<span style="font-size: medium;" class="mycode_size"><span style="font-family: Roboto;" class="mycode_font">- Gyms, strip clubs, clothes shops, hidden packages, oysters, spray tags, horseshoes, and much more</span></span><br />
<span style="font-size: medium;" class="mycode_size"><span style="font-family: Roboto;" class="mycode_font">- A fishing activity for calming days</span></span><br />
<span style="font-size: medium;" class="mycode_size"><span style="font-family: Roboto;" class="mycode_font">- Drug Base business to take over and expand your empire and distribute your drugs along with Meth cooking</span></span><br />
<span style="font-size: medium;" class="mycode_size"><span style="font-family: Roboto;" class="mycode_font">- Experience the new events Undead Nightmare where you have to survive a massive amount of zombies</span></span><br />
<span style="font-size: medium;" class="mycode_size"><span style="font-family: Roboto;" class="mycode_font">- Also play a Shell Game in your free time to test your Focus</span></span><br />
<span style="font-size: medium;" class="mycode_size"><span style="font-family: Roboto;" class="mycode_font">- We also have a helpful Helper team that will answer all your questions</span></span><br />
<span style="font-size: medium;" class="mycode_size"><span style="font-family: Roboto;" class="mycode_font">- Professional, Friendly and supportive administration</span></span><br />
<br />
<br />
<span style="font-size: medium;" class="mycode_size"><a href="https://gta-multiplayer.cz/en/" target="_blank" rel="noopener" class="mycode_url"><span style="color: #d91e18;" class="mycode_color"><span style="font-family: Roboto;" class="mycode_font"><span style="text-decoration: underline;" class="mycode_u">Visit our Website</span></span></span></a></span><br />
<span style="font-size: medium;" class="mycode_size"><a href="https://www.youtube.com/watch?v=jcpCWWHwTOo" target="_blank" rel="noopener" class="mycode_url"><span style="color: #d91e18;" class="mycode_color"><span style="font-family: Roboto;" class="mycode_font">Watch our server Trailer</span></span></a></span><br />
<a href="https://discord.com/invite/SJDm5NPVvh" target="_blank" rel="noopener" class="mycode_url"><span style="color: #d91e18;" class="mycode_color"><span style="font-size: medium;" class="mycode_size"><span style="font-family: Roboto;" class="mycode_font">Join our Discord Server</span></span></span></a>]]></content>
		<draft xmlns="http://purl.org/atom-blog/ns#">false</draft>
	</entry>
	<entry xmlns="http://www.w3.org/2005/Atom">
		<author>
			<name type="html" xml:space="preserve"><![CDATA[<a href="https://www.burgershot.gg/member.php?action=profile&uid=2996">Leonardo</a>]]></name>
		</author>
		<published>2022-06-12T09:00:34Z</published>
		<updated>2022-06-12T10:28:33Z</updated>
		<link rel="alternate" type="text/html" href="https://www.burgershot.gg/showthread.php?tid=2301" />
		<id>https://www.burgershot.gg/showthread.php?tid=2301</id>
		<title xml:space="preserve"><![CDATA[[Work in progress] TextDraw Editor (online)]]></title>
		<content type="html" xml:space="preserve" xml:base="https://www.burgershot.gg/showthread.php?tid=2301"><![CDATA[<div style="text-align: center;" class="mycode_align"><span style="font-weight: bold;" class="mycode_b"><span style="font-size: xx-large;" class="mycode_size">TextDraw Editor</span></span></div>
<br />
A TextDraw Editor built in Vanilla JS<br />
<br />
<span style="text-decoration: underline;" class="mycode_u">Work in progress!! For more information, visit the github repository.</span><br />
<br />
<span style="font-weight: bold;" class="mycode_b">Preview</span><br />
<br />
<div style="text-align: center;" class="mycode_align"><img src="https://i.imgur.com/2fQfySy.jpg" loading="lazy"  alt="[Image: 2fQfySy.jpg]" class="mycode_img" /></div>
<br />
<span style="font-weight: bold;" class="mycode_b">Source code</span><br />
<br />
<a href="https://github.com/Leonardo541/TextDrawEditor" target="_blank" rel="noopener" class="mycode_url">https://github.com/Leonardo541/TextDrawEditor</a><br />
<br />
<span style="font-weight: bold;" class="mycode_b">Demo at</span><br />
<br />
<a href="https://leonardo541.github.io/TextDrawEditor/" target="_blank" rel="noopener" class="mycode_url">https://leonardo541.github.io/TextDrawEditor/</a>]]></content>
		<draft xmlns="http://purl.org/atom-blog/ns#">false</draft>
	</entry>
	<entry xmlns="http://www.w3.org/2005/Atom">
		<author>
			<name type="html" xml:space="preserve"><![CDATA[<a href="https://www.burgershot.gg/member.php?action=profile&uid=4372">Kazuha</a>]]></name>
		</author>
		<published>2022-06-09T01:51:28Z</published>
		<updated>2022-06-09T01:51:28Z</updated>
		<link rel="alternate" type="text/html" href="https://www.burgershot.gg/showthread.php?tid=2300" />
		<id>https://www.burgershot.gg/showthread.php?tid=2300</id>
		<title xml:space="preserve"><![CDATA[GTA-MULTIPLAYER.CZ]]></title>
		<content type="html" xml:space="preserve" xml:base="https://www.burgershot.gg/showthread.php?tid=2300"><![CDATA[Hello, hope you're having a great day today I would like to introduce a server with a lot of features from GTA Online and GTA franchise and awesome shows!<br />
<br />
<br />
<br />
<br />
<span style="font-weight: bold;" class="mycode_b">Addresses:</span><br />
<br />
[CZ/EN] s1.gta-multiplayer.cz:7777<br />
[EN] s2.gta-multiplayer.cz:7777<br />
[EN] s3.gta-multiplayer.cz:7777<br />
<br />
<br />
<br />
<br />
<span style="font-weight: bold;" class="mycode_b">Why play on our servers?:</span><br />
<br />
<br />
- Many features from singleplayer<br />
- Pool and basketball minigames<br />
- Video game QUB3D from GTA V also Snake and Miner Arcade game<br />
- Custom made roulettes, slot machines, video poker and horse-betting, Poker texas hold'em, and Wheel of fortune to win a unique vehicle<br />
- Stock market BAWSAQ and Crypto Currency market<br />
- Gang wars over 75 territories<br />
- More than 30 unique Jobs to earn money (including taxi driver paramedic, firefighter, pimping, valet parking and pizza-boy, and many more)<br />
- Singleplayer races and other challenges<br />
- Gyms, strip clubs, clothes shops, hidden packages, oysters, spray tags, horseshoes, and much more<br />
- A fishing activity for calming days<br />
- Drug Base business to take over and expand your empire and distribute your drugs along with Meth cooking<br />
- Experience the new events Undead Nightmare where you have to survive a massive amount of zombies<br />
- Also play a Shell Game in your free time to test your Focus<br />
- We also have a helpful Helper team which will answer all your questions<br />
- Professional, Friendly and supportive administration<br />
<br />
<br />
<a href="https://gta-multiplayer.cz/en/" target="_blank" rel="noopener" class="mycode_url">Visit our Website</a><br />
<a href="https://www.youtube.com/watch?v=jcpCWWHwTOo" target="_blank" rel="noopener" class="mycode_url">Watch our server Trailer</a><br />
<a href="https://discord.com/invite/SJDm5NPVvh" target="_blank" rel="noopener" class="mycode_url">Join our Discord Server</a>]]></content>
		<draft xmlns="http://purl.org/atom-blog/ns#">false</draft>
	</entry>
	<entry xmlns="http://www.w3.org/2005/Atom">
		<author>
			<name type="html" xml:space="preserve"><![CDATA[<a href="https://www.burgershot.gg/member.php?action=profile&uid=3872">Haitam</a>]]></name>
		</author>
		<published>2022-06-07T19:16:44Z</published>
		<updated>2022-06-07T19:16:44Z</updated>
		<link rel="alternate" type="text/html" href="https://www.burgershot.gg/showthread.php?tid=2299" />
		<id>https://www.burgershot.gg/showthread.php?tid=2299</id>
		<title xml:space="preserve"><![CDATA[How to get rid and replace the SERVER: Unknown command message?]]></title>
		<content type="html" xml:space="preserve" xml:base="https://www.burgershot.gg/showthread.php?tid=2299"><![CDATA[Hello, I am trying to learn PAWN scripting, how can I get rid of the SERVER: Unknown command message? And please tell me a good way to learn basics and start scripting! Thanks.]]></content>
		<draft xmlns="http://purl.org/atom-blog/ns#">false</draft>
	</entry>
	<entry xmlns="http://www.w3.org/2005/Atom">
		<author>
			<name type="html" xml:space="preserve"><![CDATA[<a href="https://www.burgershot.gg/member.php?action=profile&uid=3956">NoxxeR</a>]]></name>
		</author>
		<published>2022-06-06T18:54:34Z</published>
		<updated>2022-06-06T18:54:34Z</updated>
		<link rel="alternate" type="text/html" href="https://www.burgershot.gg/showthread.php?tid=2298" />
		<id>https://www.burgershot.gg/showthread.php?tid=2298</id>
		<title xml:space="preserve"><![CDATA[So whats up now is the beta is out?]]></title>
		<content type="html" xml:space="preserve" xml:base="https://www.burgershot.gg/showthread.php?tid=2298"><![CDATA[Whats up with the new Open Multiplayer client? Will it be released to the public? The server beta has been released.<br />
<br />
Everybody will enjoy life if you guys release the Client, some of us havent played in a long time GTA SA, we need a good client soon.]]></content>
		<draft xmlns="http://purl.org/atom-blog/ns#">false</draft>
	</entry>
	<entry xmlns="http://www.w3.org/2005/Atom">
		<author>
			<name type="html" xml:space="preserve"><![CDATA[<a href="https://www.burgershot.gg/member.php?action=profile&uid=4409">Xyranaut</a>]]></name>
		</author>
		<published>2022-06-04T05:41:13Z</published>
		<updated>2022-06-04T05:43:20Z</updated>
		<link rel="alternate" type="text/html" href="https://www.burgershot.gg/showthread.php?tid=2297" />
		<id>https://www.burgershot.gg/showthread.php?tid=2297</id>
		<title xml:space="preserve"><![CDATA[GTA Maps in open.mp?]]></title>
		<content type="html" xml:space="preserve" xml:base="https://www.burgershot.gg/showthread.php?tid=2297"><![CDATA[As per last update of SA:MP, we got access to GTA VC Map in SA:MP<br />
I've recently seen a video in which a guy has merged GTA 3, VC, SA, 4 and 5 maps in GTA SA and provided links.<br />
<br />
I was wondering can it be possible to integrate installation of map files with 'installation of open.mp'? <br />
So everybody who uses open.mp will have full access to those maps without making one person having access to map by installing it manually.<br />
<br />
It would be cool to integrate all maps and use it as multiplayer just by adding that map mod addition along with open.mp]]></content>
		<draft xmlns="http://purl.org/atom-blog/ns#">false</draft>
	</entry>
	<entry xmlns="http://www.w3.org/2005/Atom">
		<author>
			<name type="html" xml:space="preserve"><![CDATA[<a href="https://www.burgershot.gg/member.php?action=profile&uid=2844">Davee52</a>]]></name>
		</author>
		<published>2022-05-30T15:24:09Z</published>
		<updated>2022-05-30T15:24:09Z</updated>
		<link rel="alternate" type="text/html" href="https://www.burgershot.gg/showthread.php?tid=2296" />
		<id>https://www.burgershot.gg/showthread.php?tid=2296</id>
		<title xml:space="preserve"><![CDATA[AttachDynamicObjectToObject]]></title>
		<content type="html" xml:space="preserve" xml:base="https://www.burgershot.gg/showthread.php?tid=2296"><![CDATA[Hi. I tried to use AttachDynamicObjectToObject, but failed, the object doesn't attach. Any ideas?<br />
<div class="codeblock"><div class="title">Code:</div><div class="body" dir="ltr"><code>new id,p;<br />
stock CreateATM(Float:PX,Float:PY,Float:PZ,Float:PRX, Float:PRY, Float:PRZ){<br />
id= CreateDynamicObject(19526, PX,PY,PZ, PRX,PRY,PRZ, -1, -1, -1, 10.00, 10.00);<br />
SetDynamicObjectMaterial(id, 0, 2942, "kmb_atmx", "kmb_atm", 0x00000000);<br />
SetDynamicObjectMaterial(id, 2, 14708, "labig1int2", "ab_mottleGrey", 0x00000000);<br />
SetDynamicObjectMaterial(id, 3, 2942, "kmb_atmx", "kmb_atm_sign", 0x00000000);<br />
SetDynamicObjectMaterial(id, 5, 1252, "barrelexpos", "atm", 0x00000000);<br />
p = CreateDynamicObject(19483, PX+0.2123, PY+0.12836, PZ+1.1343, 0.000000, -48.300056, -90.000053, -1, -1, -1, 10.00, 10.00);<br />
SetDynamicObjectMaterialText(p, 0, "{ffffff}CASH", 130, "Ariel", 20, 1, 0x00000000, 0x00000000, 1);<br />
AttachDynamicObjectToObject(p,id,0.2123,0.12836,1.1343,0.000000, -48.300056, -90.000053,1);<br />
}</code></div></div><br />
P.S: It does work correctly when I convert it to default Create Object and AttachObjectToObject.. But i'm using streamer plugin]]></content>
		<draft xmlns="http://purl.org/atom-blog/ns#">false</draft>
	</entry>
</feed>