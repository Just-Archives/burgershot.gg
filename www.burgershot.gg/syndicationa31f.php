<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xmlns:dc="http://purl.org/dc/elements/1.1/">
	<title type="html"><![CDATA[Burgershot - Pawn Scripting]]></title>
	<subtitle type="html"><![CDATA[Burgershot - https://www.burgershot.gg]]></subtitle>
	<link rel="self" href="https://www.burgershot.gg/syndication.php"/>
	<id>https://www.burgershot.gg/</id>
	<link rel="alternate" type="text/html" href="https://www.burgershot.gg/"/>
	<updated>2022-07-30T07:01:45Z</updated>
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
	<entry xmlns="http://www.w3.org/2005/Atom">
		<author>
			<name type="html" xml:space="preserve"><![CDATA[<a href="https://www.burgershot.gg/member.php?action=profile&uid=4049">hiwyn</a>]]></name>
		</author>
		<published>2022-05-18T14:53:39Z</published>
		<updated>2022-05-20T03:43:00Z</updated>
		<link rel="alternate" type="text/html" href="https://www.burgershot.gg/showthread.php?tid=2295" />
		<id>https://www.burgershot.gg/showthread.php?tid=2295</id>
		<title xml:space="preserve"><![CDATA[samp voice frequency]]></title>
		<content type="html" xml:space="preserve" xml:base="https://www.burgershot.gg/showthread.php?tid=2295"><![CDATA[I tried but fail to put radio frequencies on samp voice...<br />
<br />
2 problems:<br />
<br />
1- you can hear and talk to everyone in any frequency, i mean you are in 3000, you can talk to people on 5000<br />
2- server crashes a while after people use this<br />
<br />
What i'm doing wrong?<br />
<br />
global<br />
<div class="codeblock"><div class="title">Code:</div><div class="body" dir="ltr"><code>#define MAX_RADIOS 9999<br />
forward ConnectRadioVoice(playerid);<br />
forward DisconnectRadioVoice(playerid);<br />
new SV_GSTREAM:StreamFreq[MAX_RADIOS] = SV_NULL;<br />
new players_in_radiofrequency[MAX_RADIOS];</code></div></div><br />
OnPlayerActivationKeyPress<br />
<div class="codeblock"><div class="title">Code:</div><div class="body" dir="ltr"><code>// radio voice<br />
if(radio_frequency[playerid] == 0) {<br />
&nbsp;&nbsp;&nbsp;&nbsp;SvAttachSpeakerToStream(StreamFreq[radio_frequency[playerid]], playerid);<br />
}<br />
// voice local<br />
else {<br />
&nbsp;&nbsp;&nbsp;&nbsp;SvAttachSpeakerToStream(lstream[playerid], playerid);<br />
}</code></div></div><br />
OnPlayerActivationKeyRelease<br />
<div class="codeblock"><div class="title">Code:</div><div class="body" dir="ltr"><code>// Detach the player from the local stream if the 'B' key is released<br />
&nbsp;&nbsp;&nbsp;&nbsp;if (keyid == 0x42 &amp;&amp; lstream[playerid]) {<br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;SvDetachSpeakerFromStream(lstream[playerid], playerid);<br />
&nbsp;&nbsp;&nbsp;&nbsp;}<br />
&nbsp;&nbsp;&nbsp;&nbsp;// Detach the player from the local stream if the 'B' key is released<br />
&nbsp;&nbsp;&nbsp;&nbsp;if (keyid == 0x42 &amp;&amp; StreamFreq[radio_frequency[playerid]]) {<br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;SvDetachSpeakerFromStream(StreamFreq[radio_frequency[playerid]], playerid);<br />
&nbsp;&nbsp;&nbsp;&nbsp;}</code></div></div><br />
functions from command<br />
<div class="codeblock"><div class="title">Code:</div><div class="body" dir="ltr"><code>public ConnectRadioVoice(playerid) {<br />
&nbsp;&nbsp;&nbsp;&nbsp;new rfid = radio_frequency[playerid];<br />
&nbsp;&nbsp;&nbsp;&nbsp;if(StreamFreq[rfid] == SV_NULL)<br />
&nbsp;&nbsp;&nbsp;&nbsp;{<br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;new string[128];<br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;format(string, sizeof(string), "Radio %i", rfid);<br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;StreamFreq[rfid] = SvCreateGStream(0xFF00FFFF, string);<br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;SvAttachListenerToStream(StreamFreq[rfid], playerid);<br />
&nbsp;&nbsp;&nbsp;&nbsp;}<br />
&nbsp;&nbsp;&nbsp;&nbsp;else<br />
&nbsp;&nbsp;&nbsp;&nbsp;{<br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;SvAttachListenerToStream(StreamFreq[rfid], playerid);<br />
&nbsp;&nbsp;&nbsp;&nbsp;}<br />
&nbsp;&nbsp;&nbsp;&nbsp;players_in_radiofrequency[rfid] += 1;<br />
&nbsp;&nbsp;&nbsp;&nbsp;return 1;<br />
}<br />
public DisconnectRadioVoice(playerid) {<br />
&nbsp;&nbsp;&nbsp;&nbsp;new rfid = radio_frequency[playerid];<br />
&nbsp;&nbsp;&nbsp;&nbsp;players_in_radiofrequency[rfid] -= 1;<br />
&nbsp;&nbsp;&nbsp;&nbsp;if(players_in_radiofrequency[rfid] &#x26;t= 0) {<br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;StreamFreq[rfid] = SV_NULL;<br />
&nbsp;&nbsp;&nbsp;&nbsp;}<br />
&nbsp;&nbsp;&nbsp;&nbsp;return 1;<br />
}</code></div></div><br />
command<br />
<div class="codeblock"><div class="title">Code:</div><div class="body" dir="ltr"><code>CMD:radio(playerid, params[]) {<br />
&nbsp;&nbsp;&nbsp;&nbsp;new frequency_id;<br />
&nbsp;&nbsp;&nbsp;&nbsp;if(sscanf(params,"i", frequency_id)) return SendClientMessage(playerid, -1, "Use: /testid [id]");<br />
&nbsp;&nbsp;&nbsp;&nbsp;if(frequency_id &#x26;t MAX_RADIOS || frequency_id &#x26;t 1) return SendClientMessage(playerid, -1, "O numero deve ser entre 1 e MAX_RADIOS");<br />
&nbsp;&nbsp;&nbsp;&nbsp;radio_frequency[playerid] = frequency_id;<br />
&nbsp;&nbsp;&nbsp;&nbsp;if(frequency_id == 0) DisconnectRadioVoice(playerid);<br />
&nbsp;&nbsp;&nbsp;&nbsp;else ConnectRadioVoice(playerid);<br />
&nbsp;&nbsp;&nbsp;&nbsp;return 1;<br />
}</code></div></div>]]></content>
		<draft xmlns="http://purl.org/atom-blog/ns#">false</draft>
	</entry>
	<entry xmlns="http://www.w3.org/2005/Atom">
		<author>
			<name type="html" xml:space="preserve"><![CDATA[<a href="https://www.burgershot.gg/member.php?action=profile&uid=3616">Axitz</a>]]></name>
		</author>
		<published>2022-05-11T12:28:05Z</published>
		<updated>2022-05-11T12:28:05Z</updated>
		<link rel="alternate" type="text/html" href="https://www.burgershot.gg/showthread.php?tid=2294" />
		<id>https://www.burgershot.gg/showthread.php?tid=2294</id>
		<title xml:space="preserve"><![CDATA[insert line as much as the amount.]]></title>
		<content type="html" xml:space="preserve" xml:base="https://www.burgershot.gg/showthread.php?tid=2294"><![CDATA[hi,<br />
<br />
for now, this line is inserting only 1 by 1 since i used People++; but I want to multiply it by the amount.<br />
<br />
so when i put like /test 10<br />
it will create 10 lines.<br />
<br />
example code as below.<br />
<br />
<br />
<div class="codeblock"><div class="title">Code:</div><div class="body" dir="ltr"><code>COMMAND:test(playerid, params[])<br />
{<br />
new  iAmount;<br />
if( sscanf ( params, "d", iAmount)) return SendClientMessage(playerid,-1, "[amount]");<br />
new PlayerName[MAX_PLAYER_NAME];<br />
GetPlayerName(playerid, PlayerName, sizeof(PlayerName));<br />
People++;<br />
Pool+=LOTTERY_PRICE;<br />
dini_IntSet("lottery.ini", "money", Pool);<br />
GivePlayerMoney(playerid, -LOTTERY_PRICE);<br />
new string[128];<br />
format(string, sizeof(string), "%d", People);<br />
dini_Set("lottery.ini", string, PlayerName);<br />
return 1;<br />
}</code></div></div>]]></content>
		<draft xmlns="http://purl.org/atom-blog/ns#">false</draft>
	</entry>
	<entry xmlns="http://www.w3.org/2005/Atom">
		<author>
			<name type="html" xml:space="preserve"><![CDATA[<a href="https://www.burgershot.gg/member.php?action=profile&uid=2989">PutuSuhartawan</a>]]></name>
		</author>
		<published>2022-05-11T11:12:23Z</published>
		<updated>2022-05-11T11:13:24Z</updated>
		<link rel="alternate" type="text/html" href="https://www.burgershot.gg/showthread.php?tid=2293" />
		<id>https://www.burgershot.gg/showthread.php?tid=2293</id>
		<title xml:space="preserve"><![CDATA[How Setting Server Console to Hidden login log connection cookie?]]></title>
		<content type="html" xml:space="preserve" xml:base="https://www.burgershot.gg/showthread.php?tid=2293"><![CDATA[<img src="https://media.discordapp.net/attachments/972133317199663104/972134081884201110/unknown.png" loading="lazy"  alt="[Image: unknown.png]" class="mycode_img" /><br />
<br />
<br />
And abaout the plugin setting. How to hidden plugin log too?<br />
<br />
[21:28:29] : [sv:dbg:network:connect] : player (32) assigned key (a1af9067de8251a2)<br />
[21:28:29] : [sv:dbg:network:receive] : player (32) identified (port:48538)<br />
[21:28:33] : [sv:dbg:network:connect] : connecting player (3) with address (180.249.82.178) ...<br />
[21:28:33] : [sv:dbg:network:connect] : player (3) assigned key (b252f9b4e9be3c94)<br />
[21:28:33] : [sv:dbg:network:receive] : player (3) identified (port:41177)<br />
[21:28:40] : [sv:dbg:network:connect] : disconnecting player (36) ...<br />
[21:28:41] : [sv:dbg:network:connect] : disconnecting player (25) ...<br />
[21:28:49] : [sv:dbg:network:connect] : disconnecting player (21) ...<br />
[21:28:51] : [sv:dbg:network:connect] : connecting player (36) with address (114.5.215.231) ...<br />
[21:28:51] : [sv:dbg:network:connect] : player (36) assigned key (e7d70572fdfac585)<br />
[21:28:51] : [sv:dbg:network:receive] : player (36) identified (port:64510)<br />
[21:28:53] : [sv:dbg:network:connect] : disconnecting player (14) ...<br />
[21:28:56] : [sv:dbg:network:connect] : connecting player (14) with address (128.14.65.219) ...<br />
[21:28:56] : [sv:dbg:network:connect] : player (14) assigned key (db410e80fef2bf7d)<br />
[21:29:03] : [sv:dbg:network:connect] : disconnecting player (72) ...<br />
[21:29:03] : [sv:dbg:network:connect] : disconnecting player (3) ...]]></content>
		<draft xmlns="http://purl.org/atom-blog/ns#">false</draft>
	</entry>
	<entry xmlns="http://www.w3.org/2005/Atom">
		<author>
			<name type="html" xml:space="preserve"><![CDATA[<a href="https://www.burgershot.gg/member.php?action=profile&uid=3616">Axitz</a>]]></name>
		</author>
		<published>2022-05-01T17:46:14Z</published>
		<updated>2022-05-01T17:46:14Z</updated>
		<link rel="alternate" type="text/html" href="https://www.burgershot.gg/showthread.php?tid=2292" />
		<id>https://www.burgershot.gg/showthread.php?tid=2292</id>
		<title xml:space="preserve"><![CDATA[Increase chance?]]></title>
		<content type="html" xml:space="preserve" xml:base="https://www.burgershot.gg/showthread.php?tid=2292"><![CDATA[Hi,<br />
<br />
How do I make/get people with a high amount of something have high amount of winning?<br />
<br />
Any short simple code, I'd appreciated it.]]></content>
		<draft xmlns="http://purl.org/atom-blog/ns#">false</draft>
	</entry>
	<entry xmlns="http://www.w3.org/2005/Atom">
		<author>
			<name type="html" xml:space="preserve"><![CDATA[<a href="https://www.burgershot.gg/member.php?action=profile&uid=152">Salik_Davince</a>]]></name>
		</author>
		<published>2022-04-24T08:10:07Z</published>
		<updated>2022-04-24T08:10:07Z</updated>
		<link rel="alternate" type="text/html" href="https://www.burgershot.gg/showthread.php?tid=2290" />
		<id>https://www.burgershot.gg/showthread.php?tid=2290</id>
		<title xml:space="preserve"><![CDATA[Object Rotation/Functions]]></title>
		<content type="html" xml:space="preserve" xml:base="https://www.burgershot.gg/showthread.php?tid=2290"><![CDATA[Hi, I know that the project is practically not supported, but I would like to ask how to implement the rotation of an object and position relative to another object, i.e. group objects, I know that 3DTryg includes the following functions, but I am not strong in trigonometry: (yandex translator) -<br />
<br />
<br />
* GetRotationFor2Point2D(Float:x,Float:y,Float:tx,Float:ty,&amp;Float:rz);<br />
* GetRotationFor2Point3D(Float:x,Float:y,Float:z,Float:tx,Float:ty,Float:tz,&amp;Float:rx,&amp;Float:rz);<br />
<br />
* ShiftVectorToRotation(Float:vx,Float:vy,Float:vz,&amp;Float:rx,&amp;Float:rz);<br />
* ShiftRotationToVector(Float:rx,Float:rz,&amp;Float:vx,&amp;Float:vy,&amp;Float:vz);<br />
<br />
* ShiftVectorRotation(Float:x,Float:y,Float:z,Float:rx,Float:ry,Float:rz,&amp;Float:tx,&amp;Float:ty,&amp;Float:tz);<br />
<br />
* Item::GetRotationQuat(elementid,Item3D_Type:element_type,&amp;Float:qw,&amp;Float:qx,&amp;Float:qy,&amp;Float:qz);<br />
<br />
* //Nero_3D Rotations Functions:<br />
* Tryg3D::GetRotationMatrixEuler(Float:matrix[][],Float:rx,Float:ry,Float:rz,T3D:eulermode:mode=T3D:euler_default);<br />
* Tryg3D::MatrixRotate(Float:matrix[][],Float:oX,Float:oY,Float:oZ,&amp;Float:x,&amp;Float:y,&amp;Float:z);<br />
* Tryg3D::QuatRotate(Float:qw,Float:qx,Float:qy,Float:qz,Float:oX,Float:oY,Float:oZ,&amp;Float:tx,&amp;Float:ty,&amp;Float:tz);<br />
* Tryg3D::GetQuatFromEuler(Float:rx,Float:ry,Float:rz,&amp;Float:qw,&amp;Float:qx,&amp;Float:qy,&amp;Float:qz,T3D:eulermode:mode=T3D:euler_default);<br />
* Tryg3D::EulerRotate(Float:rX,Float:rY,Float:rZ,Float:oX,Float:oY,Float:oZ,&amp;Float:tx,&amp;Float:ty,&amp;Float:tz,T3D:eulermode:mode=T3D:euler_default);<br />
<br />
<br />
==============================<br />
You can even show and cite functions without using 3DTryg, but<br />
==============================<br />
<br />
And the second question in conclusion is how to set the angle of the player towards the object and set the angle (rotation) of the object towards the player, thank you for your help.!]]></content>
		<draft xmlns="http://purl.org/atom-blog/ns#">false</draft>
	</entry>
	<entry xmlns="http://www.w3.org/2005/Atom">
		<author>
			<name type="html" xml:space="preserve"><![CDATA[<a href="https://www.burgershot.gg/member.php?action=profile&uid=3582">CrypticSin</a>]]></name>
		</author>
		<published>2022-04-14T00:14:18Z</published>
		<updated>2022-04-18T17:46:20Z</updated>
		<link rel="alternate" type="text/html" href="https://www.burgershot.gg/showthread.php?tid=2284" />
		<id>https://www.burgershot.gg/showthread.php?tid=2284</id>
		<title xml:space="preserve"><![CDATA[Health not saving in SQLite?]]></title>
		<content type="html" xml:space="preserve" xml:base="https://www.burgershot.gg/showthread.php?tid=2284"><![CDATA[Trying to save player health but doesn't seem to be working i'll like to know what im doing wrong?<br />
<br />
Created a table in OnGameModeInit:<br />
<div class="codeblock phpcodeblock"><div class="title">PHP Code:</div><div class="body"><div dir="ltr"><code><span style="color: #0000BB">db_query</span><span style="color: #007700">(</span><span style="color: #0000BB">server_database</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">"CREATE&nbsp;TABLE&nbsp;IF&nbsp;NOT&nbsp;EXISTS&nbsp;`USERS`&nbsp;(`NAME`,&nbsp;`IP`,&nbsp;`REGISTER_DATE`,&nbsp;`PASS`,&nbsp;`SCORE`,&nbsp;`KILLS`,&nbsp;`DEATHS`,&nbsp;`SKIN`,&nbsp;`HEALTH`,&nbsp;`pX`,&nbsp;`pY`,&nbsp;`pZ`,&nbsp;`pA`,&nbsp;`INT`,&nbsp;`WORLD`,&nbsp;`ADMIN`)"</span><span style="color: #007700">);;&nbsp;<br /></span></code></div></div></div><br />
Selecting data:<br />
<div class="codeblock phpcodeblock"><div class="title">PHP Code:</div><div class="body"><div dir="ltr"><code><span style="color: #007700">public&nbsp;</span><span style="color: #0000BB">OnPlayerLogin</span><span style="color: #007700">(</span><span style="color: #0000BB">playerid</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">bool</span><span style="color: #007700">:</span><span style="color: #0000BB">success</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">success</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;new&nbsp;</span><span style="color: #0000BB">query</span><span style="color: #007700">[</span><span style="color: #0000BB">256</span><span style="color: #007700">],&nbsp;</span><span style="color: #0000BB">field</span><span style="color: #007700">[</span><span style="color: #0000BB">24</span><span style="color: #007700">],&nbsp;</span><span style="color: #0000BB">field2</span><span style="color: #007700">[</span><span style="color: #0000BB">64</span><span style="color: #007700">];<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">format</span><span style="color: #007700">(</span><span style="color: #0000BB">query</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">sizeof</span><span style="color: #007700">(</span><span style="color: #0000BB">query</span><span style="color: #007700">),&nbsp;</span><span style="color: #DD0000">"SELECT&nbsp;*&nbsp;FROM&nbsp;`USERS`&nbsp;WHERE&nbsp;`NAME`&nbsp;=&nbsp;'%s'&nbsp;COLLATE&nbsp;NOCASE"</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">DB_Escape</span><span style="color: #007700">(</span><span style="color: #0000BB">ReturnName</span><span style="color: #007700">(</span><span style="color: #0000BB">playerid</span><span style="color: #007700">)));<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">database_result&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">db_query</span><span style="color: #007700">(</span><span style="color: #0000BB">server_database</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">query</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">db_num_rows</span><span style="color: #007700">(</span><span style="color: #0000BB">database_result</span><span style="color: #007700">))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">db_get_field_assoc</span><span style="color: #007700">(</span><span style="color: #0000BB">database_result</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">"ADMIN"</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">field</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">sizeof</span><span style="color: #007700">(</span><span style="color: #0000BB">field</span><span style="color: #007700">));<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">PlayerInfo</span><span style="color: #007700">[</span><span style="color: #0000BB">playerid</span><span style="color: #007700">][</span><span style="color: #0000BB">pAdmin</span><span style="color: #007700">]&nbsp;=&nbsp;</span><span style="color: #0000BB">strval</span><span style="color: #007700">(</span><span style="color: #0000BB">field</span><span style="color: #007700">);<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">db_get_field_assoc</span><span style="color: #007700">(</span><span style="color: #0000BB">database_result</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">"SCORE"</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">field</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">sizeof</span><span style="color: #007700">(</span><span style="color: #0000BB">field</span><span style="color: #007700">));<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">SetPlayerScore</span><span style="color: #007700">(</span><span style="color: #0000BB">playerid</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">strval</span><span style="color: #007700">(</span><span style="color: #0000BB">field</span><span style="color: #007700">));<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">db_get_field_assoc</span><span style="color: #007700">(</span><span style="color: #0000BB">database_result</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">"KILLS"</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">field</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">sizeof</span><span style="color: #007700">(</span><span style="color: #0000BB">field</span><span style="color: #007700">));<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">PlayerInfo</span><span style="color: #007700">[</span><span style="color: #0000BB">playerid</span><span style="color: #007700">][</span><span style="color: #0000BB">pKills</span><span style="color: #007700">]&nbsp;=&nbsp;</span><span style="color: #0000BB">strval</span><span style="color: #007700">(</span><span style="color: #0000BB">field</span><span style="color: #007700">);<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">db_get_field_assoc</span><span style="color: #007700">(</span><span style="color: #0000BB">database_result</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">"DEATHS"</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">field</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">sizeof</span><span style="color: #007700">(</span><span style="color: #0000BB">field</span><span style="color: #007700">));<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">PlayerInfo</span><span style="color: #007700">[</span><span style="color: #0000BB">playerid</span><span style="color: #007700">][</span><span style="color: #0000BB">pDeaths</span><span style="color: #007700">]&nbsp;=&nbsp;</span><span style="color: #0000BB">strval</span><span style="color: #007700">(</span><span style="color: #0000BB">field</span><span style="color: #007700">);<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">db_get_field_assoc</span><span style="color: #007700">(</span><span style="color: #0000BB">database_result</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">"SKIN"</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">field</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">sizeof</span><span style="color: #007700">(</span><span style="color: #0000BB">field</span><span style="color: #007700">));<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">PlayerInfo</span><span style="color: #007700">[</span><span style="color: #0000BB">playerid</span><span style="color: #007700">][</span><span style="color: #0000BB">pSkin</span><span style="color: #007700">]&nbsp;=&nbsp;</span><span style="color: #0000BB">strval</span><span style="color: #007700">(</span><span style="color: #0000BB">field</span><span style="color: #007700">);<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">db_get_field_assoc</span><span style="color: #007700">(</span><span style="color: #0000BB">database_result</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">"REGISTER_DATE"</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">field2</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">sizeof</span><span style="color: #007700">(</span><span style="color: #0000BB">field2</span><span style="color: #007700">));<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">PlayerInfo</span><span style="color: #007700">[</span><span style="color: #0000BB">playerid</span><span style="color: #007700">][</span><span style="color: #0000BB">pRegister</span><span style="color: #007700">]&nbsp;=&nbsp;</span><span style="color: #0000BB">field2</span><span style="color: #007700">;<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">db_get_field_assoc</span><span style="color: #007700">(</span><span style="color: #0000BB">database_result</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">"HEALTH"</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">field</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">sizeof</span><span style="color: #007700">(</span><span style="color: #0000BB">field</span><span style="color: #007700">));<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">PlayerInfo</span><span style="color: #007700">[</span><span style="color: #0000BB">playerid</span><span style="color: #007700">][</span><span style="color: #0000BB">pHealth</span><span style="color: #007700">]&nbsp;=&nbsp;</span><span style="color: #0000BB">floatstr</span><span style="color: #007700">(</span><span style="color: #0000BB">field</span><span style="color: #007700">);<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">db_get_field_assoc</span><span style="color: #007700">(</span><span style="color: #0000BB">database_result</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">"pX"</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">field</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">sizeof</span><span style="color: #007700">(</span><span style="color: #0000BB">field</span><span style="color: #007700">));<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">PlayerInfo</span><span style="color: #007700">[</span><span style="color: #0000BB">playerid</span><span style="color: #007700">][</span><span style="color: #0000BB">pX</span><span style="color: #007700">]&nbsp;=&nbsp;</span><span style="color: #0000BB">floatstr</span><span style="color: #007700">(</span><span style="color: #0000BB">field</span><span style="color: #007700">);<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">db_get_field_assoc</span><span style="color: #007700">(</span><span style="color: #0000BB">database_result</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">"pY"</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">field</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">sizeof</span><span style="color: #007700">(</span><span style="color: #0000BB">field</span><span style="color: #007700">));<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">PlayerInfo</span><span style="color: #007700">[</span><span style="color: #0000BB">playerid</span><span style="color: #007700">][</span><span style="color: #0000BB">pY</span><span style="color: #007700">]&nbsp;=&nbsp;</span><span style="color: #0000BB">floatstr</span><span style="color: #007700">(</span><span style="color: #0000BB">field</span><span style="color: #007700">);<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">db_get_field_assoc</span><span style="color: #007700">(</span><span style="color: #0000BB">database_result</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">"pZ"</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">field</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">sizeof</span><span style="color: #007700">(</span><span style="color: #0000BB">field</span><span style="color: #007700">));<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">PlayerInfo</span><span style="color: #007700">[</span><span style="color: #0000BB">playerid</span><span style="color: #007700">][</span><span style="color: #0000BB">pZ</span><span style="color: #007700">]&nbsp;=&nbsp;</span><span style="color: #0000BB">floatstr</span><span style="color: #007700">(</span><span style="color: #0000BB">field</span><span style="color: #007700">);<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">db_get_field_assoc</span><span style="color: #007700">(</span><span style="color: #0000BB">database_result</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">"pA"</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">field</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">sizeof</span><span style="color: #007700">(</span><span style="color: #0000BB">field</span><span style="color: #007700">));<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">PlayerInfo</span><span style="color: #007700">[</span><span style="color: #0000BB">playerid</span><span style="color: #007700">][</span><span style="color: #0000BB">pA</span><span style="color: #007700">]&nbsp;=&nbsp;</span><span style="color: #0000BB">floatstr</span><span style="color: #007700">(</span><span style="color: #0000BB">field</span><span style="color: #007700">);<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">db_get_field_assoc</span><span style="color: #007700">(</span><span style="color: #0000BB">database_result</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">"INT"</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">field</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">sizeof</span><span style="color: #007700">(</span><span style="color: #0000BB">field</span><span style="color: #007700">));<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">PlayerInfo</span><span style="color: #007700">[</span><span style="color: #0000BB">playerid</span><span style="color: #007700">][</span><span style="color: #0000BB">pInt</span><span style="color: #007700">]&nbsp;=&nbsp;</span><span style="color: #0000BB">strval</span><span style="color: #007700">(</span><span style="color: #0000BB">field</span><span style="color: #007700">);<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">db_get_field_assoc</span><span style="color: #007700">(</span><span style="color: #0000BB">database_result</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">"WORLD"</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">field</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">sizeof</span><span style="color: #007700">(</span><span style="color: #0000BB">field</span><span style="color: #007700">));<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">PlayerInfo</span><span style="color: #007700">[</span><span style="color: #0000BB">playerid</span><span style="color: #007700">][</span><span style="color: #0000BB">pWorld</span><span style="color: #007700">]&nbsp;=&nbsp;</span><span style="color: #0000BB">strval</span><span style="color: #007700">(</span><span style="color: #0000BB">field</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}&nbsp;<br /></span></code></div></div></div><br />
Inserting Health Data:<br />
<div class="codeblock phpcodeblock"><div class="title">PHP Code:</div><div class="body"><div dir="ltr"><code><span style="color: #0000BB"> &nbsp;  <br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">new&nbsp;</span><span style="color: #0000BB">query</span><span style="color: #007700">[</span><span style="color: #0000BB">400</span><span style="color: #007700">];<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">format</span><span style="color: #007700">(</span><span style="color: #0000BB">query</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">sizeof</span><span style="color: #007700">(</span><span style="color: #0000BB">query</span><span style="color: #007700">),&nbsp;</span><span style="color: #DD0000">"INSERT&nbsp;INTO&nbsp;`USERS`&nbsp;(`NAME`,&nbsp;`PASS`,&nbsp;`ADMIN`,&nbsp;`IP`,&nbsp;`REGISTER_DATE`,&nbsp;`SCORE`,&nbsp;`KILLS`,&nbsp;`DEATHS`,&nbsp;`SKIN`,&nbsp;`HEALTH`,&nbsp;`pX`,&nbsp;`pY`,&nbsp;`pZ`,&nbsp;`pA`,&nbsp;`INT`,&nbsp;`WORLD`)&nbsp;VALUES&nbsp;('%s',&nbsp;'%s',&nbsp;%d,&nbsp;'%s',&nbsp;'%s',&nbsp;%d,&nbsp;%d,&nbsp;%d,&nbsp;%d,&nbsp;%f,&nbsp;%f,&nbsp;%f,&nbsp;%f,&nbsp;%f,&nbsp;%d,&nbsp;%d)"</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">DB_Escape</span><span style="color: #007700">(</span><span style="color: #0000BB">ReturnName</span><span style="color: #007700">(</span><span style="color: #0000BB">playerid</span><span style="color: #007700">)),&nbsp;</span><span style="color: #0000BB">password</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">PLAYER</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">ip</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">Date</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">GetPlayerScore</span><span style="color: #007700">(</span><span style="color: #0000BB">playerid</span><span style="color: #007700">),&nbsp;</span><span style="color: #0000BB">PlayerInfo</span><span style="color: #007700">[</span><span style="color: #0000BB">playerid</span><span style="color: #007700">][</span><span style="color: #0000BB">pKills</span><span style="color: #007700">],&nbsp;</span><span style="color: #0000BB">PlayerInfo</span><span style="color: #007700">[</span><span style="color: #0000BB">playerid</span><span style="color: #007700">][</span><span style="color: #0000BB">pDeaths</span><span style="color: #007700">],&nbsp;</span><span style="color: #0000BB">GetPlayerSkin</span><span style="color: #007700">(</span><span style="color: #0000BB">playerid</span><span style="color: #007700">),&nbsp;</span><span style="color: #0000BB">PlayerInfo</span><span style="color: #007700">[</span><span style="color: #0000BB">playerid</span><span style="color: #007700">][</span><span style="color: #0000BB">pHealth</span><span style="color: #007700">],<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">PlayerInfo</span><span style="color: #007700">[</span><span style="color: #0000BB">playerid</span><span style="color: #007700">][</span><span style="color: #0000BB">pX</span><span style="color: #007700">],<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">PlayerInfo</span><span style="color: #007700">[</span><span style="color: #0000BB">playerid</span><span style="color: #007700">][</span><span style="color: #0000BB">pY</span><span style="color: #007700">],<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">PlayerInfo</span><span style="color: #007700">[</span><span style="color: #0000BB">playerid</span><span style="color: #007700">][</span><span style="color: #0000BB">pZ</span><span style="color: #007700">],<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">PlayerInfo</span><span style="color: #007700">[</span><span style="color: #0000BB">playerid</span><span style="color: #007700">][</span><span style="color: #0000BB">pA</span><span style="color: #007700">],<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">PlayerInfo</span><span style="color: #007700">[</span><span style="color: #0000BB">playerid</span><span style="color: #007700">][</span><span style="color: #0000BB">pInt</span><span style="color: #007700">],<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">PlayerInfo</span><span style="color: #007700">[</span><span style="color: #0000BB">playerid</span><span style="color: #007700">][</span><span style="color: #0000BB">pWorld</span><span style="color: #007700">]);<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">database_result&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">db_query</span><span style="color: #007700">(</span><span style="color: #0000BB">server_database</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">query</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">db_free_result</span><span style="color: #007700">(</span><span style="color: #0000BB">database_result</span><span style="color: #007700">);&nbsp;<br /></span></code></div></div></div><br />
Updating Data:<br />
<br />
<div class="codeblock phpcodeblock"><div class="title">PHP Code:</div><div class="body"><div dir="ltr"><code><span style="color: #0000BB"> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;  <br />stock&nbsp;SaveAccount</span><span style="color: #007700">(</span><span style="color: #0000BB">playerid</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;new&nbsp;</span><span style="color: #0000BB">query</span><span style="color: #007700">[</span><span style="color: #0000BB">400</span><span style="color: #007700">],&nbsp;</span><span style="color: #0000BB">Float</span><span style="color: #007700">:</span><span style="color: #0000BB">pos</span><span style="color: #007700">[</span><span style="color: #0000BB">4</span><span style="color: #007700">];<br />&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">PlayerInfo</span><span style="color: #007700">[</span><span style="color: #0000BB">playerid</span><span style="color: #007700">][</span><span style="color: #0000BB">pLoggedIn</span><span style="color: #007700">]&nbsp;==&nbsp;</span><span style="color: #0000BB">true</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">GetPlayerPos</span><span style="color: #007700">(</span><span style="color: #0000BB">playerid</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">pos</span><span style="color: #007700">[</span><span style="color: #0000BB">0</span><span style="color: #007700">],&nbsp;</span><span style="color: #0000BB">pos</span><span style="color: #007700">[</span><span style="color: #0000BB">1</span><span style="color: #007700">],&nbsp;</span><span style="color: #0000BB">pos</span><span style="color: #007700">[</span><span style="color: #0000BB">2</span><span style="color: #007700">]);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">GetPlayerFacingAngle</span><span style="color: #007700">(</span><span style="color: #0000BB">playerid</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">pos</span><span style="color: #007700">[</span><span style="color: #0000BB">3</span><span style="color: #007700">]);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">GetPlayerHealth</span><span style="color: #007700">(</span><span style="color: #0000BB">playerid</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">PlayerInfo</span><span style="color: #007700">[</span><span style="color: #0000BB">playerid</span><span style="color: #007700">][</span><span style="color: #0000BB">pHealth</span><span style="color: #007700">]);<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">format</span><span style="color: #007700">(</span><span style="color: #0000BB">query</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">sizeof</span><span style="color: #007700">(</span><span style="color: #0000BB">query</span><span style="color: #007700">),<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">"UPDATE&nbsp;`USERS`&nbsp;SET&nbsp;`ADMIN`&nbsp;=&nbsp;%d,&nbsp;`SCORE`&nbsp;=&nbsp;%d,&nbsp;`KILLS`&nbsp;=&nbsp;%d,&nbsp;`DEATHS`&nbsp;=&nbsp;%d,&nbsp;`SKIN`&nbsp;=&nbsp;%d,&nbsp;`HEALTH`&nbsp;=&nbsp;%f,&nbsp;`pX`&nbsp;=&nbsp;%f,&nbsp;`pY`&nbsp;=&nbsp;%f,&nbsp;`pZ`&nbsp;=&nbsp;%f,&nbsp;`pA`&nbsp;=&nbsp;%f,&nbsp;`INT`&nbsp;=&nbsp;%d,&nbsp;`WORLD`&nbsp;=&nbsp;%d,&nbsp;`ADMIN`&nbsp;=&nbsp;%d&nbsp;WHERE&nbsp;`NAME`&nbsp;=&nbsp;'%s'&nbsp;COLLATE&nbsp;NOCASE"</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">PlayerInfo</span><span style="color: #007700">[</span><span style="color: #0000BB">playerid</span><span style="color: #007700">][</span><span style="color: #0000BB">pAdmin</span><span style="color: #007700">],&nbsp;</span><span style="color: #0000BB">GetPlayerScore</span><span style="color: #007700">(</span><span style="color: #0000BB">playerid</span><span style="color: #007700">),&nbsp;</span><span style="color: #0000BB">PlayerInfo</span><span style="color: #007700">[</span><span style="color: #0000BB">playerid</span><span style="color: #007700">][</span><span style="color: #0000BB">pKills</span><span style="color: #007700">],&nbsp;</span><span style="color: #0000BB">PlayerInfo</span><span style="color: #007700">[</span><span style="color: #0000BB">playerid</span><span style="color: #007700">][</span><span style="color: #0000BB">pDeaths</span><span style="color: #007700">],&nbsp;</span><span style="color: #0000BB">GetPlayerSkin</span><span style="color: #007700">(</span><span style="color: #0000BB">playerid</span><span style="color: #007700">),&nbsp;</span><span style="color: #0000BB">PlayerInfo</span><span style="color: #007700">[</span><span style="color: #0000BB">playerid</span><span style="color: #007700">][</span><span style="color: #0000BB">pHealth</span><span style="color: #007700">],&nbsp;</span><span style="color: #0000BB">pos</span><span style="color: #007700">[</span><span style="color: #0000BB">0</span><span style="color: #007700">],&nbsp;</span><span style="color: #0000BB">pos</span><span style="color: #007700">[</span><span style="color: #0000BB">1</span><span style="color: #007700">],&nbsp;</span><span style="color: #0000BB">pos</span><span style="color: #007700">[</span><span style="color: #0000BB">2</span><span style="color: #007700">],&nbsp;</span><span style="color: #0000BB">pos</span><span style="color: #007700">[</span><span style="color: #0000BB">3</span><span style="color: #007700">],&nbsp;</span><span style="color: #0000BB">GetPlayerInterior</span><span style="color: #007700">(</span><span style="color: #0000BB">playerid</span><span style="color: #007700">),&nbsp;</span><span style="color: #0000BB">GetPlayerVirtualWorld</span><span style="color: #007700">(</span><span style="color: #0000BB">playerid</span><span style="color: #007700">),&nbsp;</span><span style="color: #0000BB">PlayerInfo</span><span style="color: #007700">[</span><span style="color: #0000BB">playerid</span><span style="color: #007700">][</span><span style="color: #0000BB">pAdmin</span><span style="color: #007700">],&nbsp;</span><span style="color: #0000BB">DB_Escape</span><span style="color: #007700">(</span><span style="color: #0000BB">ReturnName</span><span style="color: #007700">(</span><span style="color: #0000BB">playerid</span><span style="color: #007700">)));<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">database_result&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">db_query</span><span style="color: #007700">(</span><span style="color: #0000BB">server_database</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">query</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">db_free_result</span><span style="color: #007700">(</span><span style="color: #0000BB">database_result</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">1</span><span style="color: #007700">;<br />}&nbsp;<br /></span></code></div></div></div><br />
Code runs without errors but im still unsure on why its not saving and loading the players health..]]></content>
		<draft xmlns="http://purl.org/atom-blog/ns#">false</draft>
	</entry>
	<entry xmlns="http://www.w3.org/2005/Atom">
		<author>
			<name type="html" xml:space="preserve"><![CDATA[<a href="https://www.burgershot.gg/member.php?action=profile&uid=3616">Axitz</a>]]></name>
		</author>
		<published>2022-03-30T07:41:31Z</published>
		<updated>2022-04-01T03:01:37Z</updated>
		<link rel="alternate" type="text/html" href="https://www.burgershot.gg/showthread.php?tid=2282" />
		<id>https://www.burgershot.gg/showthread.php?tid=2282</id>
		<title xml:space="preserve"><![CDATA[cache_insert_id always return 0]]></title>
		<content type="html" xml:space="preserve" xml:base="https://www.burgershot.gg/showthread.php?tid=2282"><![CDATA[Hi, sorry how bad this was.<br />
<br />
I've created a team and the table is also is AI mode. There are multiples team in the query but whenever server restart or player quit, then create team, it always started at 0 again.<br />
<br />
<div class="codeblock phpcodeblock"><div class="title">PHP Code:</div><div class="body"><div dir="ltr"><code><span style="color: #0000BB">forward&nbsp;TeamCreated</span><span style="color: #007700">(</span><span style="color: #0000BB">b</span><span style="color: #007700">);<br />public&nbsp;</span><span style="color: #0000BB">TeamCreated</span><span style="color: #007700">(</span><span style="color: #0000BB">b</span><span style="color: #007700">)<br />{<br /><br /></span><span style="color: #0000BB"> &nbsp; &nbsp;TeamInfo</span><span style="color: #007700">[</span><span style="color: #0000BB">b</span><span style="color: #007700">][</span><span style="color: #0000BB">TeamID</span><span style="color: #007700">]&nbsp;=&nbsp;</span><span style="color: #0000BB">cache_insert_id</span><span style="color: #007700">();<br /></span><span style="color: #0000BB"> &nbsp; &nbsp;teamidd</span><span style="color: #007700">++;<br /></span><span style="color: #0000BB"> &nbsp; &nbsp;printf</span><span style="color: #007700">(</span><span style="color: #DD0000">"New&nbsp;Group&nbsp;is&nbsp;created:&nbsp;[%d]"</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">teamidd&nbsp;</span><span style="color: #007700">);<br />}&nbsp;<br /></span></code></div></div></div><br />
<br />
<div class="codeblock phpcodeblock"><div class="title">PHP Code:</div><div class="body"><div dir="ltr"><code><span style="color: #007700">if(</span><span style="color: #0000BB">strcmp</span><span style="color: #007700">(</span><span style="color: #0000BB">usage</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">"create"</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">false</span><span style="color: #007700">)&nbsp;==&nbsp;</span><span style="color: #0000BB">0</span><span style="color: #007700">)<br />{<br /></span><span style="color: #0000BB"> &nbsp; &nbsp;</span><span style="color: #007700">if(!</span><span style="color: #0000BB">strlen</span><span style="color: #007700">(</span><span style="color: #0000BB">usage1</span><span style="color: #007700">))&nbsp;return&nbsp;</span><span style="color: #0000BB">SCP</span><span style="color: #007700">(</span><span style="color: #0000BB">playerid</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">"create&nbsp;&#x26;tteamname&#x26;t"</span><span style="color: #007700">);<br /></span><span style="color: #0000BB"> &nbsp; &nbsp;</span><span style="color: #007700">if(</span><span style="color: #0000BB">strlen</span><span style="color: #007700">(</span><span style="color: #0000BB">usage1</span><span style="color: #007700">)&nbsp;&#x26;t&nbsp;</span><span style="color: #0000BB">5&nbsp;</span><span style="color: #007700">||&nbsp;</span><span style="color: #0000BB">strlen</span><span style="color: #007700">(</span><span style="color: #0000BB">usage1</span><span style="color: #007700">)&nbsp;&#x26;t&nbsp;</span><span style="color: #0000BB">30</span><span style="color: #007700">)&nbsp;return&nbsp;</span><span style="color: #0000BB">SendClientError</span><span style="color: #007700">(</span><span style="color: #0000BB">playerid</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">"Your&nbsp;team&nbsp;name&nbsp;is&nbsp;too&nbsp;short&nbsp;or&nbsp;too&nbsp;long!&nbsp;(Min&nbsp;5,&nbsp;Max&nbsp;30&nbsp;chars)"</span><span style="color: #007700">);<br /></span><span style="color: #0000BB"> &nbsp; &nbsp;</span><span style="color: #007700">new&nbsp;</span><span style="color: #0000BB">tmID&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">teamidd</span><span style="color: #007700">+</span><span style="color: #0000BB">1</span><span style="color: #007700">;<br /></span><span style="color: #0000BB"> &nbsp; &nbsp;</span><span style="color: #007700">if(</span><span style="color: #0000BB">PlayerInfo</span><span style="color: #007700">[</span><span style="color: #0000BB">playerid</span><span style="color: #007700">][</span><span style="color: #0000BB">tplayerteam</span><span style="color: #007700">]&nbsp;!=&nbsp;-</span><span style="color: #0000BB">1</span><span style="color: #007700">)&nbsp;return&nbsp;</span><span style="color: #0000BB">SendClientError</span><span style="color: #007700">(</span><span style="color: #0000BB">playerid</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">"You&nbsp;are&nbsp;already&nbsp;in&nbsp;a&nbsp;team.&nbsp;/team&nbsp;leave"</span><span style="color: #007700">);<br /></span><span style="color: #0000BB"> &nbsp; &nbsp;TeamInfo</span><span style="color: #007700">[</span><span style="color: #0000BB">tmID</span><span style="color: #007700">][</span><span style="color: #0000BB">TeamID</span><span style="color: #007700">]&nbsp;=&nbsp;</span><span style="color: #0000BB">tmID</span><span style="color: #007700">;<br /></span><span style="color: #0000BB"> &nbsp; &nbsp;PlayerInfo</span><span style="color: #007700">[</span><span style="color: #0000BB">playerid</span><span style="color: #007700">][</span><span style="color: #0000BB">tplayerteam</span><span style="color: #007700">]&nbsp;=&nbsp;</span><span style="color: #0000BB">tmID</span><span style="color: #007700">;<br /></span><span style="color: #0000BB"> &nbsp; &nbsp;PlayerInfo</span><span style="color: #007700">[</span><span style="color: #0000BB">playerid</span><span style="color: #007700">][</span><span style="color: #0000BB">tranklvl</span><span style="color: #007700">]&nbsp;=&nbsp;</span><span style="color: #0000BB">0</span><span style="color: #007700">;<br /></span><span style="color: #0000BB"> &nbsp; &nbsp;myStrcpy</span><span style="color: #007700">(</span><span style="color: #0000BB">PlayerInfo</span><span style="color: #007700">[</span><span style="color: #0000BB">playerid</span><span style="color: #007700">][</span><span style="color: #0000BB">TPTeamName</span><span style="color: #007700">],</span><span style="color: #0000BB">usage1</span><span style="color: #007700">);<br /></span><span style="color: #0000BB"> &nbsp; &nbsp;myStrcpy</span><span style="color: #007700">(</span><span style="color: #0000BB">PlayerInfo</span><span style="color: #007700">[</span><span style="color: #0000BB">playerid</span><span style="color: #007700">][</span><span style="color: #0000BB">trankname</span><span style="color: #007700">],</span><span style="color: #DD0000">"Children"</span><span style="color: #007700">);<br /></span><span style="color: #0000BB"> &nbsp; &nbsp;TeamInfo</span><span style="color: #007700">[</span><span style="color: #0000BB">tmID</span><span style="color: #007700">][</span><span style="color: #0000BB">TActive</span><span style="color: #007700">]=</span><span style="color: #0000BB">true</span><span style="color: #007700">;<br />new&nbsp;</span><span style="color: #0000BB">sQuery</span><span style="color: #007700">[</span><span style="color: #0000BB">528</span><span style="color: #007700">];<br /></span><span style="color: #0000BB">mysql_format</span><span style="color: #007700">(</span><span style="color: #0000BB">sqldb</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">sQuery</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">sizeof&nbsp;sQuery</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">"INSERT&nbsp;INTO&nbsp;`TeamInfo`&nbsp;(`TeamID`,&nbsp;`TeamName`,&nbsp;`StartRank`)&nbsp;VALUES&nbsp;(%d,'%e',&nbsp;'Children')"</span><span style="color: #007700">,</span><span style="color: #0000BB">tmID</span><span style="color: #007700">+</span><span style="color: #0000BB">1</span><span style="color: #007700">,</span><span style="color: #0000BB">usage1</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">mysql_tquery</span><span style="color: #007700">(</span><span style="color: #0000BB">sqldb</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">sQuery</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">"TeamCreated"</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">"i"</span><span style="color: #007700">,</span><span style="color: #0000BB">tmID</span><span style="color: #007700">);<br />}<br />else<br />{<br /></span><span style="color: #0000BB">SCP</span><span style="color: #007700">(</span><span style="color: #0000BB">playerid</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">"&#x26;tcreate&#x26;t&nbsp;&#x26;tinput&#x26;t"</span><span style="color: #007700">);<br />}<br />return&nbsp;</span><span style="color: #0000BB">1</span><span style="color: #007700">;<br />}&nbsp;<br /></span></code></div></div></div>]]></content>
		<draft xmlns="http://purl.org/atom-blog/ns#">false</draft>
	</entry>
	<entry xmlns="http://www.w3.org/2005/Atom">
		<author>
			<name type="html" xml:space="preserve"><![CDATA[<a href="https://www.burgershot.gg/member.php?action=profile&uid=770">Zow</a>]]></name>
		</author>
		<published>2022-01-26T21:29:44Z</published>
		<updated>2022-01-26T21:29:44Z</updated>
		<link rel="alternate" type="text/html" href="https://www.burgershot.gg/showthread.php?tid=2274" />
		<id>https://www.burgershot.gg/showthread.php?tid=2274</id>
		<title xml:space="preserve"><![CDATA[Which one is better?]]></title>
		<content type="html" xml:space="preserve" xml:base="https://www.burgershot.gg/showthread.php?tid=2274"><![CDATA[<div class="codeblock phpcodeblock"><div class="title">PHP Code:</div><div class="body"><div dir="ltr"><code><span style="color: #FF8000">#define&nbsp;SendErrorMessage(%0,&nbsp;%1)&nbsp;SendClientMessage(%0,&nbsp;COLOR_RED,&nbsp;"[*]{FFFFFF}&nbsp;"%1)&nbsp;<br /></span></code></div></div></div><br />
<div class="codeblock phpcodeblock"><div class="title">PHP Code:</div><div class="body"><div dir="ltr"><code><span style="color: #0000BB">SendErrorMessage</span><span style="color: #007700">(</span><span style="color: #0000BB">playerid</span><span style="color: #007700">,&nbsp;const&nbsp;</span><span style="color: #0000BB">msg</span><span style="color: #007700">[])&nbsp;{<br /></span><span style="color: #0000BB"> &nbsp; &nbsp;</span><span style="color: #007700">new<br /></span><span style="color: #0000BB"> &nbsp; &nbsp; &nbsp; &nbsp;string</span><span style="color: #007700">[</span><span style="color: #0000BB">145</span><span style="color: #007700">];<br /><br /></span><span style="color: #0000BB"> &nbsp; &nbsp;format</span><span style="color: #007700">(</span><span style="color: #0000BB">string</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">sizeof</span><span style="color: #007700">(string),&nbsp;</span><span style="color: #DD0000">"[*]"</span><span style="color: #0000BB">C_WHITE</span><span style="color: #DD0000">"&nbsp;%s"</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">msg</span><span style="color: #007700">);<br /><br /></span><span style="color: #0000BB"> &nbsp; &nbsp;</span><span style="color: #007700">return&nbsp;</span><span style="color: #0000BB">SendClientMessage</span><span style="color: #007700">(</span><span style="color: #0000BB">playerid</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">COLOR_RED</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">string</span><span style="color: #007700">);<br />}&nbsp;<br /></span></code></div></div></div><br />
I just want to know how different]]></content>
		<draft xmlns="http://purl.org/atom-blog/ns#">false</draft>
	</entry>
	<entry xmlns="http://www.w3.org/2005/Atom">
		<author>
			<name type="html" xml:space="preserve"><![CDATA[<a href="https://www.burgershot.gg/member.php?action=profile&uid=3078">Slade</a>]]></name>
		</author>
		<published>2022-01-24T16:55:46Z</published>
		<updated>2022-01-24T16:57:23Z</updated>
		<link rel="alternate" type="text/html" href="https://www.burgershot.gg/showthread.php?tid=2273" />
		<id>https://www.burgershot.gg/showthread.php?tid=2273</id>
		<title xml:space="preserve"><![CDATA[MySQL Query]]></title>
		<content type="html" xml:space="preserve" xml:base="https://www.burgershot.gg/showthread.php?tid=2273"><![CDATA[So basically i've done so many scripts using MySQL, but never had this problem and simply not finding way to solve it because i don't even understand why it happens.<br />
<br />
I will explain here, I don't really need to post code since my other scripts with literally same code works great, I also tried to google it, but no luck.<br />
<br />
So this is case: I've switched House system on old gamemode from Dini to MySQL. I've switched data by loading with Dini, saving with MySQL. Then i created loading. First I have used TQuery with callback, and got this errors:<br />
<br />
<div class="codeblock"><div class="title">Code:</div><div class="body" dir="ltr"><code>[01/24/22 17:50:46] [plugins/mysql] cache_get_value_name_float: no active cache (C:&#92;Users&#92;llc&#92;Documents&#92;GM&#92;gamemodes&#92;YUBGM.pwn:24580)<br />
[01/24/22 17:50:46] [plugins/mysql] cache_get_value_name_float: no active cache (C:&#92;Users&#92;llc&#92;Documents&#92;GM&#92;gamemodes&#92;YUBGM.pwn:24581)<br />
[01/24/22 17:50:46] [plugins/mysql] cache_get_value_name_float: no active cache (C:&#92;Users&#92;llc&#92;Documents&#92;GM&#92;gamemodes&#92;YUBGM.pwn:24582)</code></div></div><br />
This happens for every row in every iteration of cache num rows, table has around 1100 houses.<br />
<br />
I've done it also with mysql_query and cache variable, same error appears.<br />
Updated MySQL to latest version.<br />
Changed variable names from <span style="font-weight: bold;" class="mycode_b">cache_get_value_name_float to cache_get_value_float </span>but still the same.<br />
<br />
Important thing is: I printed second row after every iteration and cache function, and first 2 rows are getting loaded, and all others are not.<br />
So yes i got 2 first selected rows loaded, others are literally ignored in loop.<br />
<br />
Any possible solutions ?]]></content>
		<draft xmlns="http://purl.org/atom-blog/ns#">false</draft>
	</entry>
	<entry xmlns="http://www.w3.org/2005/Atom">
		<author>
			<name type="html" xml:space="preserve"><![CDATA[<a href="https://www.burgershot.gg/member.php?action=profile&uid=2495">Torque</a>]]></name>
		</author>
		<published>2021-12-28T18:23:50Z</published>
		<updated>2021-12-28T18:23:50Z</updated>
		<link rel="alternate" type="text/html" href="https://www.burgershot.gg/showthread.php?tid=2264" />
		<id>https://www.burgershot.gg/showthread.php?tid=2264</id>
		<title xml:space="preserve"><![CDATA[Add days to current time]]></title>
		<content type="html" xml:space="preserve" xml:base="https://www.burgershot.gg/showthread.php?tid=2264"><![CDATA[I'm saving the last login date/time using Now() in MySQL which sets a string such as <span style="font-weight: bold;" class="mycode_b"><span style="font-style: italic;" class="mycode_i">2021-12-28 12:41:53</span></span><br />
<br />
I want to check if 30 days have passed since the last login. How can I do this in the script? I imagine I would have to use a different method of saving the date in order to check this.]]></content>
		<draft xmlns="http://purl.org/atom-blog/ns#">false</draft>
	</entry>
	<entry xmlns="http://www.w3.org/2005/Atom">
		<author>
			<name type="html" xml:space="preserve"><![CDATA[<a href="https://www.burgershot.gg/member.php?action=profile&uid=3596">Jhames</a>]]></name>
		</author>
		<published>2021-12-01T23:51:11Z</published>
		<updated>2021-12-01T23:51:11Z</updated>
		<link rel="alternate" type="text/html" href="https://www.burgershot.gg/showthread.php?tid=2255" />
		<id>https://www.burgershot.gg/showthread.php?tid=2255</id>
		<title xml:space="preserve"><![CDATA[Detect loaded map]]></title>
		<content type="html" xml:space="preserve" xml:base="https://www.burgershot.gg/showthread.php?tid=2255"><![CDATA[<span style="font-weight: bold;" class="mycode_b">I am creating a loading system for when the player leaves the interior, and I would like to know if there is any way to detect when the map is loaded in order for the player to release the same. I saw this system on a server and would like to know how it works instead of crashing the player for a few seconds.</span>]]></content>
		<draft xmlns="http://purl.org/atom-blog/ns#">false</draft>
	</entry>
	<entry xmlns="http://www.w3.org/2005/Atom">
		<author>
			<name type="html" xml:space="preserve"><![CDATA[<a href="https://www.burgershot.gg/member.php?action=profile&uid=3596">Jhames</a>]]></name>
		</author>
		<published>2021-11-29T04:30:51Z</published>
		<updated>2021-11-29T04:30:51Z</updated>
		<link rel="alternate" type="text/html" href="https://www.burgershot.gg/showthread.php?tid=2254" />
		<id>https://www.burgershot.gg/showthread.php?tid=2254</id>
		<title xml:space="preserve"><![CDATA[Warning DCC_FindChannelByName]]></title>
		<content type="html" xml:space="preserve" xml:base="https://www.burgershot.gg/showthread.php?tid=2254"><![CDATA[<span style="color: #24292f;" class="mycode_color"><span style="font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Helvetica, Arial, sans-serif, 'Apple Color Emoji', 'Segoe UI Emoji';" class="mycode_font"><span style="font-weight: bold;" class="mycode_b">I'm getting a warning when using "DCC_FindChannelByName". where am I going wrong?</span></span></span><br />
<br />
<span style="color: #24292f;" class="mycode_color"><span style="font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Helvetica, Arial, sans-serif, 'Apple Color Emoji', 'Segoe UI Emoji';" class="mycode_font">Code:  <div class="codeblock"><div class="title">Code:</div><div class="body" dir="ltr"><code>printf("Channel ID: %d", DCC_FindChannelByName("log-server"));</code></div></div></span></span><br />
<span style="color: #24292f;" class="mycode_color"><span style="font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Helvetica, Arial, sans-serif, 'Apple Color Emoji', 'Segoe UI Emoji';" class="mycode_font">Warning :  <div class="codeblock"><div class="title">Code:</div><div class="body" dir="ltr"><code>warning 213: tag mismatch: expected tags "Float", or none ("_"); but found "DCC_Channel"</code></div></div></span></span>]]></content>
		<draft xmlns="http://purl.org/atom-blog/ns#">false</draft>
	</entry>
</feed>