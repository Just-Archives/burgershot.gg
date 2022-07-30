<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xmlns:dc="http://purl.org/dc/elements/1.1/">
	<title type="html"><![CDATA[Burgershot - Portuguese/Português]]></title>
	<subtitle type="html"><![CDATA[Burgershot - https://www.burgershot.gg]]></subtitle>
	<link rel="self" href="https://www.burgershot.gg/syndication.php"/>
	<id>https://www.burgershot.gg/</id>
	<link rel="alternate" type="text/html" href="https://www.burgershot.gg/"/>
	<updated>2022-07-30T07:11:39Z</updated>
	<generator uri="https://mybb.com">MyBB</generator>
	<entry xmlns="http://www.w3.org/2005/Atom">
		<author>
			<name type="html" xml:space="preserve"><![CDATA[<a href="https://www.burgershot.gg/member.php?action=profile&uid=3596">Jhames</a>]]></name>
		</author>
		<published>2021-10-30T19:50:45Z</published>
		<updated>2021-10-30T19:50:45Z</updated>
		<link rel="alternate" type="text/html" href="https://www.burgershot.gg/showthread.php?tid=2242" />
		<id>https://www.burgershot.gg/showthread.php?tid=2242</id>
		<title xml:space="preserve"><![CDATA[Erro ao compilar GM VSCode]]></title>
		<content type="html" xml:space="preserve" xml:base="https://www.burgershot.gg/showthread.php?tid=2242"><![CDATA[O que pode ser esse erro ?<br />
<br />
<div class="codeblock"><div class="title">Code:</div><div class="body" dir="ltr"><code>&#x26;t Executing task in folder GFRJ: C:&#92;Users&#92;Telzi&#92;Desktop&#92;GFRJ&#92;pawno&#92;pawncc.exe 'c:&#92;Users&#92;Telzi&#92;Desktop&#92;GFRJ&#92;gamemodes&#92;gtafaccoesbr.pwn' '-Dc:&#92;Users&#92;Telzi&#92;Desktop&#92;GFRJ&#92;gamemodes' '-;+' '-(+' '-d3' &#x26;t<br />
<br />
Pawn compiler 3.10.10                  Copyright (c) 1997-2006, ITB CompuPhase<br />
<br />
O processo de terminal "C:&#92;Program Files&#92;PowerShell&#92;7&#92;pwsh.exe -Command C:&#92;Users&#92;Telzi&#92;Desktop&#92;GFRJ&#92;pawno&#92;pawncc.exe 'c:&#92;Users&#92;Telzi&#92;Desktop&#92;GFRJ&#92;gamemodes&#92;gtafaccoesbr.pwn' '-Dc:&#92;Users&#92;Telzi&#92;Desktop&#92;GFRJ&#92;gamemodes' '-;+' '-(+' '-d3'" foi terminado com o código de saída: 1.<br />
<br />
O terminal será reutilizado por tarefas, pressione qualquer tecla para fechá-lo.</code></div></div><br />
<br />
<img src="https://i.imgur.com/d04v6a2.jpg" loading="lazy"  alt="[Image: d04v6a2.jpg]" class="mycode_img" />]]></content>
		<draft xmlns="http://purl.org/atom-blog/ns#">false</draft>
	</entry>
	<entry xmlns="http://www.w3.org/2005/Atom">
		<author>
			<name type="html" xml:space="preserve"><![CDATA[<a href="https://www.burgershot.gg/member.php?action=profile&uid=3880">Pedxz</a>]]></name>
		</author>
		<published>2021-06-23T19:36:17Z</published>
		<updated>2021-06-23T19:38:49Z</updated>
		<link rel="alternate" type="text/html" href="https://www.burgershot.gg/showthread.php?tid=2132" />
		<id>https://www.burgershot.gg/showthread.php?tid=2132</id>
		<title xml:space="preserve"><![CDATA[[AJUDA] Ajuda com código]]></title>
		<content type="html" xml:space="preserve" xml:base="https://www.burgershot.gg/showthread.php?tid=2132"><![CDATA[<div style="text-align: center;" class="mycode_align">Eu tenho esta linha de códigos:</div>
<div class="codeblock"><div class="title">Code:</div><div class="body" dir="ltr"><code>CMD:cv(playerid, params[])<br />
{<br />
if(aInfo[playerid][Admin] == 0) return SendClientMessage(playerid, COLOR_ERRO, "[ x ] Você não tem permissão!");<br />
<br />
new sVeiculo[50], vehicleid, modeloid, cor1, cor2;<br />
<br />
if(sscanf(params, "s[50]dd", sVeiculo, cor1, cor2)) return SendClientMessage(playerid, COLOR_ERRO, "[ x ] Uso correto: /CV [ Veículo ID / Nome ] [ Cor 1 ] [ Cor 2 ]");<br />
<br />
if(cor1 &#x26;t 0 || cor1 &#x26;t 255 || cor2 &#x26;t 0 || cor2 &#x26;t 255) return SendClientMessage(playerid, COLOR_ERRO, "[ x ] Use IDs de cores de 0 a 255!");<br />
<br />
if(IsNumeric(sVeiculo)) modeloid = strval(sVeiculo);<br />
else modeloid = ReturnVehicleID(sVeiculo);<br />
<br />
if(modeloid &#x26;t 400 || modeloid &#x26;t 611 || modeloid == -1) return SendClientMessage(playerid, COLOR_ERRO, "[ x ] Modelo de veículo inválido!");<br />
<br />
new Float:pPos[4];<br />
<br />
GetPlayerPos(playerid, pPos[0], pPos[1], pPos[2]);<br />
GetPlayerFacingAngle(playerid, pPos[3]);<br />
<br />
vehicleid = CreateVehicle(modeloid, pPos[0], pPos[1], pPos[2], pPos[3], cor1, cor2, -1);<br />
<br />
vCriado[vehicleid] = true;<br />
<br />
LinkVehicleToInterior(vehicleid, GetPlayerInterior(playerid));<br />
SetVehicleVirtualWorld(vehicleid, GetPlayerVirtualWorld(playerid));<br />
<br />
PutPlayerInVehicle(playerid, vehicleid, 0);<br />
PlayerPlaySound(playerid, 1133, 0.0, 0.0, 0.0);<br />
<br />
format(gStr, sizeof(gStr), "[BPL] Veículo %s criado com sucesso! ( Modelo ID: %d - Veículo ID: %d )", GetVehicleModelNameEx(modeloid), modeloid, vehicleid);<br />
    SendClientMessage(playerid, COLOR_VERDECMD, gStr);<br />
    return 1;<br />
}<br />
<br />
CMD:criarveiculo(playerid, params[])<br />
{<br />
new sCMD[50];<br />
format(sCMD, sizeof(sCMD), "/cv %s", params);<br />
<br />
ExecutarComando(playerid, sCMD);<br />
return 1;<br />
}<br />
<br />
// -------------------------------------------------------------------------------------------------------------- //<br />
<br />
CMD:dv(playerid)<br />
{<br />
if(aInfo[playerid][Admin] == 0) return SendClientMessage(playerid, COLOR_ERRO, "[ x ] Você não tem permissão!");<br />
<br />
if(!IsPlayerInAnyVehicle(playerid)) return SendClientMessage(playerid, COLOR_ERRO, "[ x ] Você não está em um veículo!");<br />
<br />
new vehicleid = GetPlayerVehicleID(playerid);<br />
<br />
if(vCriado[vehicleid] == false) return SendClientMessage(playerid, COLOR_ERRO, "[ x ] Você só pode destruir veículos criados!");<br />
<br />
format(gStr, sizeof(gStr), "[BPL] Veículo %s excluído com sucesso! (ID %d)", GetVehicleModelName(vehicleid), vehicleid);<br />
SendClientMessage(playerid, COLOR_VERDECMD, gStr);<br />
<br />
sDestroyVehicle(vehicleid);<br />
PlayerPlaySound(playerid, 1057, 0.0, 0.0, 0.0);<br />
<br />
Streamer_Update(playerid);<br />
return 1;<br />
}</code></div></div><br />
<br />
<div style="text-align: center;" class="mycode_align">Porém, ao compilar esses erros surgem e eu não entendo o porque:<br />
</div>
<div style="text-align: left;" class="mycode_align"><div class="codeblock"><div class="title">Code:</div><div class="body" dir="ltr"><code>C:&#92;Users&#92;Matheus&#92;Desktop&#92;BPL GAMES 2.0 - Copia&#92;gamemodes&#92;bpl.pwn(303) : warning 216: nested comment[/align]<br />
<br />
[align=left]C:&#92;Users&#92;Matheus&#92;Desktop&#92;BPL GAMES 2.0 - Copia&#92;gamemodes&#92;bpl.pwn(312) : error 017: undefined symbol "Admin"[/align]<br />
<br />
[align=left]C:&#92;Users&#92;Matheus&#92;Desktop&#92;BPL GAMES 2.0 - Copia&#92;gamemodes&#92;bpl.pwn(320) : error 017: undefined symbol "IsNumeric"[/align]<br />
<br />
[align=left]C:&#92;Users&#92;Matheus&#92;Desktop&#92;BPL GAMES 2.0 - Copia&#92;gamemodes&#92;bpl.pwn(321) : error 017: undefined symbol "ReturnVehicleID"[/align]<br />
<br />
[align=left]C:&#92;Users&#92;Matheus&#92;Desktop&#92;BPL GAMES 2.0 - Copia&#92;gamemodes&#92;bpl.pwn(340) : error 017: undefined symbol "GetVehicleModelNameEx"[/align]<br />
<br />
[align=left]C:&#92;Users&#92;Matheus&#92;Desktop&#92;BPL GAMES 2.0 - Copia&#92;gamemodes&#92;bpl.pwn(350) : error 017: undefined symbol "ExecutarComando"[/align]<br />
<br />
[align=left]C:&#92;Users&#92;Matheus&#92;Desktop&#92;BPL GAMES 2.0 - Copia&#92;gamemodes&#92;bpl.pwn(358) : error 017: undefined symbol "Admin"[/align]<br />
<br />
[align=left]C:&#92;Users&#92;Matheus&#92;Desktop&#92;BPL GAMES 2.0 - Copia&#92;gamemodes&#92;bpl.pwn(366) : error 017: undefined symbol "GetVehicleModelName"[/align]<br />
<br />
[align=left]C:&#92;Users&#92;Matheus&#92;Desktop&#92;BPL GAMES 2.0 - Copia&#92;gamemodes&#92;bpl.pwn(369) : error 017: undefined symbol "sDestroyVehicle"[/align]<br />
<br />
[align=left]C:&#92;Users&#92;Matheus&#92;Desktop&#92;BPL GAMES 2.0 - Copia&#92;gamemodes&#92;bpl.pwn(376) : warning 203: symbol is never used: "PlayerInfo"[/align]<br />
<br />
[align=left]Pawn compiler 3.10.4 Copyright (c) 1997-2006, ITB CompuPhase[/align]<br />
<br />
<br />
<br />
[align=left]8 Errors.[/align]<br />
<br />
[align=left]</code></div></div></div>
<br />
<br />
<br />
Poderiam me ajudar? E me dizer qual foi o causador dos erros?]]></content>
		<draft xmlns="http://purl.org/atom-blog/ns#">false</draft>
	</entry>
	<entry xmlns="http://www.w3.org/2005/Atom">
		<author>
			<name type="html" xml:space="preserve"><![CDATA[<a href="https://www.burgershot.gg/member.php?action=profile&uid=3361">pushline</a>]]></name>
		</author>
		<published>2021-06-18T22:08:31Z</published>
		<updated>2021-06-18T22:08:31Z</updated>
		<link rel="alternate" type="text/html" href="https://www.burgershot.gg/showthread.php?tid=2117" />
		<id>https://www.burgershot.gg/showthread.php?tid=2117</id>
		<title xml:space="preserve"><![CDATA[samp.ban]]></title>
		<content type="html" xml:space="preserve" xml:base="https://www.burgershot.gg/showthread.php?tid=2117"><![CDATA[Meu comando de ban adiciona um arquivo .ini (dof2) numa pasta bans e ipbans, e adiciona o IP na samp.ban. <br />
<br />
Eu quero desativar que o comando ban adicione o ip na samp.ban<br />
<br />
Código<br />
<br />
<div class="codeblock phpcodeblock"><div class="title">PHP Code:</div><div class="body"><div dir="ltr"><code><span style="color: #FF8000">#define&nbsp;Ban(%0)&nbsp;SetTimerEx("Banir",&nbsp;200,&nbsp;false,&nbsp;"i",&nbsp;%0)<br /><br /></span><span style="color: #007700">function::</span><span style="color: #0000BB">Banir</span><span style="color: #007700">(</span><span style="color: #0000BB">playerid</span><span style="color: #007700">)&nbsp;{<br /></span><span style="color: #FF8000">#undef&nbsp;Ban<br /></span><span style="color: #0000BB">Ban</span><span style="color: #007700">(</span><span style="color: #0000BB">playerid</span><span style="color: #007700">);<br /></span><span style="color: #FF8000">#define&nbsp;Ban(%0)&nbsp;SetTimerEx("Banir",&nbsp;200,&nbsp;false,&nbsp;"i",&nbsp;%0)<br /></span><span style="color: #007700">return&nbsp;</span><span style="color: #0000BB">1</span><span style="color: #007700">;<br />}<br /><br /></span><span style="color: #0000BB">CMD</span><span style="color: #007700">:</span><span style="color: #0000BB">banir</span><span style="color: #007700">(</span><span style="color: #0000BB">playerid</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">params</span><span style="color: #007700">[])<br />{<br />if&nbsp;(!</span><span style="color: #0000BB">APlayerData</span><span style="color: #007700">[</span><span style="color: #0000BB">playerid</span><span style="color: #007700">][</span><span style="color: #0000BB">pLogged</span><span style="color: #007700">])<br /></span><span style="color: #0000BB"> &nbsp; &nbsp;</span><span style="color: #007700">return&nbsp;</span><span style="color: #0000BB">SendClientMessage</span><span style="color: #007700">(</span><span style="color: #0000BB">playerid</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">COLOR_GRAD1</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">"&nbsp;Você&nbsp;não&nbsp;está&nbsp;logado."</span><span style="color: #007700">);<br /></span><span style="color: #0000BB"> &nbsp; &nbsp;</span><span style="color: #007700">if&nbsp;(</span><span style="color: #0000BB">APlayerData</span><span style="color: #007700">[</span><span style="color: #0000BB">playerid</span><span style="color: #007700">][</span><span style="color: #0000BB">pAdmin</span><span style="color: #007700">]&nbsp;&#x26;t&nbsp;</span><span style="color: #0000BB">1</span><span style="color: #007700">)<br /></span><span style="color: #0000BB"> &nbsp; &nbsp; &nbsp; &nbsp;</span><span style="color: #007700">return&nbsp;</span><span style="color: #0000BB">SendClientMessage</span><span style="color: #007700">(</span><span style="color: #0000BB">playerid</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">COLOR_GRAD1</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">"»&nbsp;Você&nbsp;não&nbsp;é&nbsp;um&nbsp;administrador."</span><span style="color: #007700">);<br /><br /></span><span style="color: #0000BB"> &nbsp; &nbsp;</span><span style="color: #007700">new&nbsp;</span><span style="color: #0000BB">id</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">ReasonBan1</span><span style="color: #007700">[</span><span style="color: #0000BB">30</span><span style="color: #007700">],&nbsp;</span><span style="color: #0000BB">Stringa</span><span style="color: #007700">[</span><span style="color: #0000BB">156</span><span style="color: #007700">];<br /></span><span style="color: #0000BB"> &nbsp; &nbsp;</span><span style="color: #007700">if&nbsp;(</span><span style="color: #0000BB">sscanf</span><span style="color: #007700">(</span><span style="color: #0000BB">params</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">"us[30]"</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">id</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">ReasonBan1</span><span style="color: #007700">))<br /></span><span style="color: #0000BB"> &nbsp; &nbsp; &nbsp; &nbsp;</span><span style="color: #007700">return&nbsp;</span><span style="color: #0000BB">SendClientMessage</span><span style="color: #007700">(</span><span style="color: #0000BB">playerid</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">COLOR_GRAD1</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">"&nbsp;(DICA):&nbsp;Use&nbsp;(/ban)&nbsp;[ID/Parte&nbsp;do&nbsp;nome]&nbsp;[Reason]"</span><span style="color: #007700">);<br /></span><span style="color: #0000BB"> &nbsp; &nbsp;<br /> &nbsp; &nbsp;</span><span style="color: #007700">if&nbsp;(</span><span style="color: #0000BB">APlayerData</span><span style="color: #007700">[</span><span style="color: #0000BB">id</span><span style="color: #007700">][</span><span style="color: #0000BB">pLogged</span><span style="color: #007700">]&nbsp;&#x26;t&nbsp;</span><span style="color: #0000BB">APlayerData</span><span style="color: #007700">[</span><span style="color: #0000BB">playerid</span><span style="color: #007700">][</span><span style="color: #0000BB">pLogged</span><span style="color: #007700">])<br /></span><span style="color: #0000BB"> &nbsp; &nbsp; &nbsp; &nbsp;</span><span style="color: #007700">return&nbsp;</span><span style="color: #0000BB">SendClientMessage</span><span style="color: #007700">(</span><span style="color: #0000BB">playerid</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">COLOR_GRAD1</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">"»&nbsp;Você&nbsp;não&nbsp;pode&nbsp;banir&nbsp;um&nbsp;administrador&nbsp;de&nbsp;nível&nbsp;maior&nbsp;que&nbsp;o&nbsp;seu."</span><span style="color: #007700">);<br /><br /></span><span style="color: #0000BB"> &nbsp; &nbsp;</span><span style="color: #007700">if&nbsp;(</span><span style="color: #0000BB">id&nbsp;</span><span style="color: #007700">==&nbsp;</span><span style="color: #0000BB">playerid</span><span style="color: #007700">)<br /></span><span style="color: #0000BB"> &nbsp; &nbsp; &nbsp; &nbsp;</span><span style="color: #007700">return&nbsp;</span><span style="color: #0000BB">SendClientMessage</span><span style="color: #007700">(</span><span style="color: #0000BB">playerid</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">COLOR_GRAD1</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">"Você&nbsp;não&nbsp;pode&nbsp;banir&nbsp;a&nbsp;si&nbsp;mesmo"</span><span style="color: #007700">);<br /><br />if(</span><span style="color: #0000BB">APlayerData</span><span style="color: #007700">[</span><span style="color: #0000BB">playerid</span><span style="color: #007700">][</span><span style="color: #0000BB">pAdmin</span><span style="color: #007700">]&nbsp;&#x26;t&nbsp;</span><span style="color: #0000BB">0</span><span style="color: #007700">)<br />{<br /></span><span style="color: #0000BB"> &nbsp; &nbsp;DOF2_CreateFile</span><span style="color: #007700">(</span><span style="color: #0000BB">GetBanFile</span><span style="color: #007700">(</span><span style="color: #0000BB">id</span><span style="color: #007700">));<br /></span><span style="color: #0000BB"> &nbsp; &nbsp;DOF2_SetString</span><span style="color: #007700">(</span><span style="color: #0000BB">GetBanFile</span><span style="color: #007700">(</span><span style="color: #0000BB">id</span><span style="color: #007700">),&nbsp;</span><span style="color: #DD0000">"Name"</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">pName</span><span style="color: #007700">[</span><span style="color: #0000BB">id</span><span style="color: #007700">]);<br /></span><span style="color: #0000BB"> &nbsp; &nbsp;DOF2_SetString</span><span style="color: #007700">(</span><span style="color: #0000BB">GetBanFile</span><span style="color: #007700">(</span><span style="color: #0000BB">id</span><span style="color: #007700">),&nbsp;</span><span style="color: #DD0000">"Admin"</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">pName</span><span style="color: #007700">[</span><span style="color: #0000BB">playerid</span><span style="color: #007700">]);<br /></span><span style="color: #0000BB"> &nbsp; &nbsp;DOF2_SetString</span><span style="color: #007700">(</span><span style="color: #0000BB">GetBanFile</span><span style="color: #007700">(</span><span style="color: #0000BB">id</span><span style="color: #007700">),&nbsp;</span><span style="color: #DD0000">"Reason"</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">ReasonBan1</span><span style="color: #007700">);<br /></span><span style="color: #0000BB"> &nbsp; &nbsp;DOF2_SetString</span><span style="color: #007700">(</span><span style="color: #0000BB">GetBanFile</span><span style="color: #007700">(</span><span style="color: #0000BB">id</span><span style="color: #007700">),&nbsp;</span><span style="color: #DD0000">"Date"</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">GetDate</span><span style="color: #007700">());<br /></span><span style="color: #0000BB"> &nbsp; &nbsp;DOF2_SetString</span><span style="color: #007700">(</span><span style="color: #0000BB">GetBanFile</span><span style="color: #007700">(</span><span style="color: #0000BB">id</span><span style="color: #007700">),&nbsp;</span><span style="color: #DD0000">"IP"</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">pIP</span><span style="color: #007700">[</span><span style="color: #0000BB">id</span><span style="color: #007700">]);<br /></span><span style="color: #0000BB"> &nbsp; &nbsp;DOF2_SaveFile</span><span style="color: #007700">();<br /><br /></span><span style="color: #0000BB"> &nbsp; &nbsp;DOF2_CreateFile</span><span style="color: #007700">(</span><span style="color: #0000BB">GetIPFile</span><span style="color: #007700">(</span><span style="color: #0000BB">id</span><span style="color: #007700">));<br /></span><span style="color: #0000BB"> &nbsp; &nbsp;DOF2_SetString</span><span style="color: #007700">(</span><span style="color: #0000BB">GetIPFile</span><span style="color: #007700">(</span><span style="color: #0000BB">id</span><span style="color: #007700">),&nbsp;</span><span style="color: #DD0000">"Name"</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">pName</span><span style="color: #007700">[</span><span style="color: #0000BB">id</span><span style="color: #007700">]);<br /></span><span style="color: #0000BB"> &nbsp; &nbsp;DOF2_SetString</span><span style="color: #007700">(</span><span style="color: #0000BB">GetIPFile</span><span style="color: #007700">(</span><span style="color: #0000BB">id</span><span style="color: #007700">),&nbsp;</span><span style="color: #DD0000">"Admin"</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">pName</span><span style="color: #007700">[</span><span style="color: #0000BB">playerid</span><span style="color: #007700">]);<br /></span><span style="color: #0000BB"> &nbsp; &nbsp;DOF2_SetString</span><span style="color: #007700">(</span><span style="color: #0000BB">GetIPFile</span><span style="color: #007700">(</span><span style="color: #0000BB">id</span><span style="color: #007700">),&nbsp;</span><span style="color: #DD0000">"Reason"</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">ReasonBan1</span><span style="color: #007700">);<br /></span><span style="color: #0000BB"> &nbsp; &nbsp;DOF2_SetString</span><span style="color: #007700">(</span><span style="color: #0000BB">GetIPFile</span><span style="color: #007700">(</span><span style="color: #0000BB">id</span><span style="color: #007700">),&nbsp;</span><span style="color: #DD0000">"Date"</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">GetDate</span><span style="color: #007700">());<br /></span><span style="color: #0000BB"> &nbsp; &nbsp;DOF2_SetString</span><span style="color: #007700">(</span><span style="color: #0000BB">GetIPFile</span><span style="color: #007700">(</span><span style="color: #0000BB">id</span><span style="color: #007700">),&nbsp;</span><span style="color: #DD0000">"IP"</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">pIP</span><span style="color: #007700">[</span><span style="color: #0000BB">id</span><span style="color: #007700">]);<br /></span><span style="color: #0000BB"> &nbsp; &nbsp;DOF2_SaveFile</span><span style="color: #007700">();<br /><br /></span><span style="color: #0000BB"> &nbsp; &nbsp; &nbsp; &nbsp;format</span><span style="color: #007700">(</span><span style="color: #0000BB">Stringa</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">sizeof</span><span style="color: #007700">(</span><span style="color: #0000BB">Stringa</span><span style="color: #007700">),&nbsp;</span><span style="color: #DD0000">"%s&nbsp;%s&nbsp;baniu&nbsp;o&nbsp;player&nbsp;%s,&nbsp;motivo:&nbsp;%s"</span><span style="color: #007700">,</span><span style="color: #0000BB">AdmCargo</span><span style="color: #007700">[</span><span style="color: #0000BB">APlayerData</span><span style="color: #007700">[</span><span style="color: #0000BB">playerid</span><span style="color: #007700">][</span><span style="color: #0000BB">pAdmin</span><span style="color: #007700">]],&nbsp;</span><span style="color: #0000BB">pName</span><span style="color: #007700">[</span><span style="color: #0000BB">playerid</span><span style="color: #007700">],&nbsp;</span><span style="color: #0000BB">pName</span><span style="color: #007700">[</span><span style="color: #0000BB">id</span><span style="color: #007700">],&nbsp;</span><span style="color: #0000BB">ReasonBan1</span><span style="color: #007700">);<br /></span><span style="color: #0000BB"> &nbsp; &nbsp;SendClientMessageToAll</span><span style="color: #007700">(</span><span style="color: #0000BB">COLOR_LIGHTRED</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">Stringa</span><span style="color: #007700">);<br /><br /></span><span style="color: #0000BB"> &nbsp; &nbsp;format</span><span style="color: #007700">(</span><span style="color: #0000BB">Stringa</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">sizeof</span><span style="color: #007700">(</span><span style="color: #0000BB">Stringa</span><span style="color: #007700">),&nbsp;</span><span style="color: #DD0000">"BanLog:&nbsp;%s&nbsp;foi&nbsp;banido&nbsp;pelo&nbsp;admin&nbsp;%s,&nbsp;motivo:&nbsp;%s&nbsp;(%s)"</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">pName</span><span style="color: #007700">[</span><span style="color: #0000BB">id</span><span style="color: #007700">],&nbsp;</span><span style="color: #0000BB">pName</span><span style="color: #007700">[</span><span style="color: #0000BB">playerid</span><span style="color: #007700">],&nbsp;</span><span style="color: #0000BB">ReasonBan1</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">GetDate</span><span style="color: #007700">());<br /></span><span style="color: #0000BB"> &nbsp; &nbsp;BanLog</span><span style="color: #007700">(</span><span style="color: #0000BB">Stringa</span><span style="color: #007700">);<br /><br /></span><span style="color: #0000BB">Ban</span><span style="color: #007700">(</span><span style="color: #0000BB">id</span><span style="color: #007700">);<br />}<br />else&nbsp;if(</span><span style="color: #0000BB">APlayerData</span><span style="color: #007700">[</span><span style="color: #0000BB">playerid</span><span style="color: #007700">][</span><span style="color: #0000BB">pAdminTemp</span><span style="color: #007700">]&nbsp;&#x26;t&nbsp;</span><span style="color: #0000BB">0</span><span style="color: #007700">)<br />{<br /></span><span style="color: #0000BB"> &nbsp; &nbsp;DOF2_CreateFile</span><span style="color: #007700">(</span><span style="color: #0000BB">GetBanFile</span><span style="color: #007700">(</span><span style="color: #0000BB">id</span><span style="color: #007700">));<br /></span><span style="color: #0000BB"> &nbsp; &nbsp;DOF2_SetString</span><span style="color: #007700">(</span><span style="color: #0000BB">GetBanFile</span><span style="color: #007700">(</span><span style="color: #0000BB">id</span><span style="color: #007700">),&nbsp;</span><span style="color: #DD0000">"Name"</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">pName</span><span style="color: #007700">[</span><span style="color: #0000BB">id</span><span style="color: #007700">]);<br /></span><span style="color: #0000BB"> &nbsp; &nbsp;DOF2_SetString</span><span style="color: #007700">(</span><span style="color: #0000BB">GetBanFile</span><span style="color: #007700">(</span><span style="color: #0000BB">id</span><span style="color: #007700">),&nbsp;</span><span style="color: #DD0000">"Admin"</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">pName</span><span style="color: #007700">[</span><span style="color: #0000BB">playerid</span><span style="color: #007700">]);<br /></span><span style="color: #0000BB"> &nbsp; &nbsp;DOF2_SetString</span><span style="color: #007700">(</span><span style="color: #0000BB">GetBanFile</span><span style="color: #007700">(</span><span style="color: #0000BB">id</span><span style="color: #007700">),&nbsp;</span><span style="color: #DD0000">"Reason"</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">ReasonBan1</span><span style="color: #007700">);<br /></span><span style="color: #0000BB"> &nbsp; &nbsp;DOF2_SetString</span><span style="color: #007700">(</span><span style="color: #0000BB">GetBanFile</span><span style="color: #007700">(</span><span style="color: #0000BB">id</span><span style="color: #007700">),&nbsp;</span><span style="color: #DD0000">"Date"</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">GetDate</span><span style="color: #007700">());<br /></span><span style="color: #0000BB"> &nbsp; &nbsp;DOF2_SetString</span><span style="color: #007700">(</span><span style="color: #0000BB">GetBanFile</span><span style="color: #007700">(</span><span style="color: #0000BB">id</span><span style="color: #007700">),&nbsp;</span><span style="color: #DD0000">"IP"</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">pIP</span><span style="color: #007700">[</span><span style="color: #0000BB">id</span><span style="color: #007700">]);<br /></span><span style="color: #0000BB"> &nbsp; &nbsp;DOF2_SaveFile</span><span style="color: #007700">();<br /><br /></span><span style="color: #0000BB"> &nbsp; &nbsp;DOF2_CreateFile</span><span style="color: #007700">(</span><span style="color: #0000BB">GetIPFile</span><span style="color: #007700">(</span><span style="color: #0000BB">id</span><span style="color: #007700">));<br /></span><span style="color: #0000BB"> &nbsp; &nbsp;DOF2_SetString</span><span style="color: #007700">(</span><span style="color: #0000BB">GetIPFile</span><span style="color: #007700">(</span><span style="color: #0000BB">id</span><span style="color: #007700">),&nbsp;</span><span style="color: #DD0000">"Name"</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">pName</span><span style="color: #007700">[</span><span style="color: #0000BB">id</span><span style="color: #007700">]);<br /></span><span style="color: #0000BB"> &nbsp; &nbsp;DOF2_SetString</span><span style="color: #007700">(</span><span style="color: #0000BB">GetIPFile</span><span style="color: #007700">(</span><span style="color: #0000BB">id</span><span style="color: #007700">),&nbsp;</span><span style="color: #DD0000">"Admin"</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">pName</span><span style="color: #007700">[</span><span style="color: #0000BB">playerid</span><span style="color: #007700">]);<br /></span><span style="color: #0000BB"> &nbsp; &nbsp;DOF2_SetString</span><span style="color: #007700">(</span><span style="color: #0000BB">GetIPFile</span><span style="color: #007700">(</span><span style="color: #0000BB">id</span><span style="color: #007700">),&nbsp;</span><span style="color: #DD0000">"Reason"</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">ReasonBan1</span><span style="color: #007700">);<br /></span><span style="color: #0000BB"> &nbsp; &nbsp;DOF2_SetString</span><span style="color: #007700">(</span><span style="color: #0000BB">GetIPFile</span><span style="color: #007700">(</span><span style="color: #0000BB">id</span><span style="color: #007700">),&nbsp;</span><span style="color: #DD0000">"Date"</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">GetDate</span><span style="color: #007700">());<br /></span><span style="color: #0000BB"> &nbsp;DOF2_SetString</span><span style="color: #007700">(</span><span style="color: #0000BB">GetIPFile</span><span style="color: #007700">(</span><span style="color: #0000BB">id</span><span style="color: #007700">),&nbsp;</span><span style="color: #DD0000">"IP"</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">pIP</span><span style="color: #007700">[</span><span style="color: #0000BB">id</span><span style="color: #007700">]);<br /></span><span style="color: #0000BB"> &nbsp; &nbsp;DOF2_SaveFile</span><span style="color: #007700">();<br /><br /></span><span style="color: #0000BB"> &nbsp; &nbsp; &nbsp; &nbsp;format</span><span style="color: #007700">(</span><span style="color: #0000BB">Stringa</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">sizeof</span><span style="color: #007700">(</span><span style="color: #0000BB">Stringa</span><span style="color: #007700">),&nbsp;</span><span style="color: #DD0000">"%s&nbsp;%s&nbsp;baniu&nbsp;o&nbsp;player&nbsp;%s,&nbsp;motivo:&nbsp;%s"</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">AdmCargo</span><span style="color: #007700">[</span><span style="color: #0000BB">APlayerData</span><span style="color: #007700">[</span><span style="color: #0000BB">playerid</span><span style="color: #007700">][</span><span style="color: #0000BB">pLogged</span><span style="color: #007700">]],&nbsp;</span><span style="color: #0000BB">pName</span><span style="color: #007700">[</span><span style="color: #0000BB">playerid</span><span style="color: #007700">],&nbsp;</span><span style="color: #0000BB">pName</span><span style="color: #007700">[</span><span style="color: #0000BB">id</span><span style="color: #007700">],&nbsp;</span><span style="color: #0000BB">ReasonBan1</span><span style="color: #007700">);<br /></span><span style="color: #0000BB"> &nbsp; &nbsp;SendClientMessageToAll</span><span style="color: #007700">(</span><span style="color: #0000BB">COLOR_LIGHTRED</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">Stringa</span><span style="color: #007700">);<br /><br /></span><span style="color: #0000BB"> &nbsp; &nbsp;format</span><span style="color: #007700">(</span><span style="color: #0000BB">Stringa</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">sizeof</span><span style="color: #007700">(</span><span style="color: #0000BB">Stringa</span><span style="color: #007700">),&nbsp;</span><span style="color: #DD0000">"BanLog:&nbsp;%s&nbsp;foi&nbsp;banido&nbsp;pelo&nbsp;admin&nbsp;%s,&nbsp;motivo:&nbsp;%s&nbsp;(%s)"</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">pName</span><span style="color: #007700">[</span><span style="color: #0000BB">id</span><span style="color: #007700">],&nbsp;</span><span style="color: #0000BB">pName</span><span style="color: #007700">[</span><span style="color: #0000BB">playerid</span><span style="color: #007700">],&nbsp;</span><span style="color: #0000BB">ReasonBan1</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">GetDate</span><span style="color: #007700">());<br /></span><span style="color: #0000BB"> &nbsp; &nbsp;BanLog</span><span style="color: #007700">(</span><span style="color: #0000BB">Stringa</span><span style="color: #007700">);<br /><br /></span><span style="color: #0000BB"> &nbsp; &nbsp; &nbsp; &nbsp;Ban</span><span style="color: #007700">(</span><span style="color: #0000BB">id</span><span style="color: #007700">);<br />}<br /></span><span style="color: #0000BB"> &nbsp; &nbsp;</span><span style="color: #007700">return&nbsp;</span><span style="color: #0000BB">1</span><span style="color: #007700">;<br />}&nbsp;<br /></span></code></div></div></div>]]></content>
		<draft xmlns="http://purl.org/atom-blog/ns#">false</draft>
	</entry>
	<entry xmlns="http://www.w3.org/2005/Atom">
		<author>
			<name type="html" xml:space="preserve"><![CDATA[<a href="https://www.burgershot.gg/member.php?action=profile&uid=3590">z0rdan</a>]]></name>
		</author>
		<published>2021-03-29T01:13:24Z</published>
		<updated>2021-03-29T01:13:24Z</updated>
		<link rel="alternate" type="text/html" href="https://www.burgershot.gg/showthread.php?tid=1816" />
		<id>https://www.burgershot.gg/showthread.php?tid=1816</id>
		<title xml:space="preserve"><![CDATA[Anti loading crasher]]></title>
		<content type="html" xml:space="preserve" xml:base="https://www.burgershot.gg/showthread.php?tid=1816"><![CDATA[Alguém sabe como posso adicionar a proteção pra esse tipo de hack?<br />
o player teleporta dentro de um veículo e logo dps fica "LOADING" na tela do outro jogador.]]></content>
		<draft xmlns="http://purl.org/atom-blog/ns#">false</draft>
	</entry>
	<entry xmlns="http://www.w3.org/2005/Atom">
		<author>
			<name type="html" xml:space="preserve"><![CDATA[<a href="https://www.burgershot.gg/member.php?action=profile&uid=3536">Will_33</a>]]></name>
		</author>
		<published>2021-03-13T01:54:18Z</published>
		<updated>2021-03-13T01:54:18Z</updated>
		<link rel="alternate" type="text/html" href="https://www.burgershot.gg/showthread.php?tid=1760" />
		<id>https://www.burgershot.gg/showthread.php?tid=1760</id>
		<title xml:space="preserve"><![CDATA[[Ajuda] Jogadores mobile]]></title>
		<content type="html" xml:space="preserve" xml:base="https://www.burgershot.gg/showthread.php?tid=1760"><![CDATA[Fala galera, estou hosteando um servidor tdm e o primeiro problema que tive com os players que vem do android foi que estes estavam invulneráveis. Colocando lagcomp 1 resolveu o problema, mas agora muitos destes crasham direto, alguns aleatóriamente, alguns quando morrem. Existe alguma lista de scripts que causam crash dos mobile?]]></content>
		<draft xmlns="http://purl.org/atom-blog/ns#">false</draft>
	</entry>
	<entry xmlns="http://www.w3.org/2005/Atom">
		<author>
			<name type="html" xml:space="preserve"><![CDATA[<a href="https://www.burgershot.gg/member.php?action=profile&uid=3010">Akirah</a>]]></name>
		</author>
		<published>2021-03-07T05:01:09Z</published>
		<updated>2021-03-07T05:01:09Z</updated>
		<link rel="alternate" type="text/html" href="https://www.burgershot.gg/showthread.php?tid=1735" />
		<id>https://www.burgershot.gg/showthread.php?tid=1735</id>
		<title xml:space="preserve"><![CDATA[[Ajuda] Registrar no SMF in-game]]></title>
		<content type="html" xml:space="preserve" xml:base="https://www.burgershot.gg/showthread.php?tid=1735"><![CDATA[Hello!<br />
<br />
Bom, gostaria de saber se existe algum tutorial, plugin ou sla o que que possa me ajudar com isso.<br />
<br />
Estou querendo fazer com que quando o jogador atingir um certo nível automaticamente uma conta para ele é criada no fórum, tentei fazer sozinho seguindo minha lógica porém não deu muito certo, poderiam me ajudar nisto? Não encontrei nada sobre ;-<br />
<br />
Desde já agradeço.]]></content>
		<draft xmlns="http://purl.org/atom-blog/ns#">false</draft>
	</entry>
	<entry xmlns="http://www.w3.org/2005/Atom">
		<author>
			<name type="html" xml:space="preserve"><![CDATA[<a href="https://www.burgershot.gg/member.php?action=profile&uid=3394">KledsonZG</a>]]></name>
		</author>
		<published>2021-02-03T20:56:39Z</published>
		<updated>2021-02-03T20:56:39Z</updated>
		<link rel="alternate" type="text/html" href="https://www.burgershot.gg/showthread.php?tid=1637" />
		<id>https://www.burgershot.gg/showthread.php?tid=1637</id>
		<title xml:space="preserve"><![CDATA[[AJUDA] Discord-Connector Plugin]]></title>
		<content type="html" xml:space="preserve" xml:base="https://www.burgershot.gg/showthread.php?tid=1637"><![CDATA[Alguém sabe como usar corretamente estas funções de criar uma reação no discord?<br />
<br />
<br />
<br />
<div class="codeblock phpcodeblock"><div class="title">PHP Code:</div><div class="body"><div dir="ltr"><code><span style="color: #0000BB">DCC_Emoji</span><span style="color: #007700">:</span><span style="color: #0000BB">DCC_CreateEmoji</span><span style="color: #007700">(const&nbsp;</span><span style="color: #0000BB">name</span><span style="color: #007700">[</span><span style="color: #0000BB">DCC_EMOJI_NAME_SIZE</span><span style="color: #007700">],&nbsp;const&nbsp;</span><span style="color: #0000BB">snowflake</span><span style="color: #007700">[</span><span style="color: #0000BB">DCC_ID_SIZE</span><span style="color: #007700">]&nbsp;=&nbsp;</span><span style="color: #DD0000">""</span><span style="color: #007700">);<br /><br /></span><span style="color: #0000BB">DCC_CreateReaction</span><span style="color: #007700">(</span><span style="color: #0000BB">DCC_Message</span><span style="color: #007700">:</span><span style="color: #0000BB">message</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">DCC_Emoji</span><span style="color: #007700">:</span><span style="color: #0000BB">reaction_emoji</span><span style="color: #007700">);&nbsp;<br /></span></code></div></div></div><br />
Estava tentando criar a reação usando este emoji: :white_check_mark:<br />
<br />
Foram as unicas funções deste plugin que não consegui entender como usar apesar do código compilar normalmente.]]></content>
		<draft xmlns="http://purl.org/atom-blog/ns#">false</draft>
	</entry>
	<entry xmlns="http://www.w3.org/2005/Atom">
		<author>
			<name type="html" xml:space="preserve"><![CDATA[<a href="https://www.burgershot.gg/member.php?action=profile&uid=3378">FelipeSilva</a>]]></name>
		</author>
		<published>2021-01-31T21:43:37Z</published>
		<updated>2021-01-31T21:43:37Z</updated>
		<link rel="alternate" type="text/html" href="https://www.burgershot.gg/showthread.php?tid=1624" />
		<id>https://www.burgershot.gg/showthread.php?tid=1624</id>
		<title xml:space="preserve"><![CDATA[[Pedido] Como detectar s0beit.]]></title>
		<content type="html" xml:space="preserve" xml:base="https://www.burgershot.gg/showthread.php?tid=1624"><![CDATA[O título é auto explicativo, como faço para detectar se um jogador está utilizando s0beit?]]></content>
		<draft xmlns="http://purl.org/atom-blog/ns#">false</draft>
	</entry>
	<entry xmlns="http://www.w3.org/2005/Atom">
		<author>
			<name type="html" xml:space="preserve"><![CDATA[<a href="https://www.burgershot.gg/member.php?action=profile&uid=3362">Friaux</a>]]></name>
		</author>
		<published>2021-01-29T05:10:33Z</published>
		<updated>2021-01-29T05:10:33Z</updated>
		<link rel="alternate" type="text/html" href="https://www.burgershot.gg/showthread.php?tid=1613" />
		<id>https://www.burgershot.gg/showthread.php?tid=1613</id>
		<title xml:space="preserve"><![CDATA[Servidor Scavenge não faleceu]]></title>
		<content type="html" xml:space="preserve" xml:base="https://www.burgershot.gg/showthread.php?tid=1613"><![CDATA[venho por meio desse tópico anunciar que estou recriando o servidor de scavenge and survive, servidor é antigo porém é um modo de sobrevivencia dos melhores que eu acho queria pedir a ajuda sei que a comunidade samp está passando por um certo perrengue<br />
sei que tambem é um modo de jogo esquecido e aqueles que querem ajudar estou aqui a disposição é só enviar uma mensagem<br />
<a href="samp://185.135.81.131:4511" target="_blank" rel="noopener" class="mycode_url">IP Do servidor para conexão</a><br />
<a href="https://nemesis-samp.forumeiros.com/" target="_blank" rel="noopener" class="mycode_url">forum do servidor para registro.</a>]]></content>
		<draft xmlns="http://purl.org/atom-blog/ns#">false</draft>
	</entry>
	<entry xmlns="http://www.w3.org/2005/Atom">
		<author>
			<name type="html" xml:space="preserve"><![CDATA[<a href="https://www.burgershot.gg/member.php?action=profile&uid=3361">pushline</a>]]></name>
		</author>
		<published>2021-01-28T23:37:21Z</published>
		<updated>2021-01-28T23:37:21Z</updated>
		<link rel="alternate" type="text/html" href="https://www.burgershot.gg/showthread.php?tid=1612" />
		<id>https://www.burgershot.gg/showthread.php?tid=1612</id>
		<title xml:space="preserve"><![CDATA[Ajuda - Round Time e Mapas]]></title>
		<content type="html" xml:space="preserve" xml:base="https://www.burgershot.gg/showthread.php?tid=1612"><![CDATA[Tenho um metodo de mudar de mapas (DM) e quero fazer um round time com textdraw que se mude sozinha (estilo payday de rpg)<br />
Tenho um settimer com 600000 de duração, como eu poderia fazer para que esse textdraw ganhe esse tempo e comece a contar sozinho e abaixando, e quando chegar a 0 mudar o map? E tem algum modo que esse switch(area) seja menor?<br />
<br />
codigo:<br />
<br />
<div class="codeblock phpcodeblock"><div class="title">PHP Code:</div><div class="body"><div dir="ltr"><code><span style="color: #007700">function::</span><span style="color: #0000BB">ChangeArea</span><span style="color: #007700">()<br />{<br /></span><span style="color: #0000BB">KillTimer</span><span style="color: #007700">(</span><span style="color: #0000BB">tbase</span><span style="color: #007700">);&nbsp;</span><span style="color: #0000BB">KillTimer</span><span style="color: #007700">(</span><span style="color: #0000BB">inicio</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">LastVote&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">GetTickCount</span><span style="color: #007700">();<br /></span><span style="color: #0000BB">tbase&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">SetTimer</span><span style="color: #007700">(</span><span style="color: #DD0000">"ChangeArea"</span><span style="color: #007700">,</span><span style="color: #0000BB">600000</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">1</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">area&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">randomEx</span><span style="color: #007700">(</span><span style="color: #0000BB">1</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">MAX_MAPS</span><span style="color: #007700">);<br /><br /></span><span style="color: #0000BB"> &nbsp; &nbsp;</span><span style="color: #007700">switch(</span><span style="color: #0000BB">area</span><span style="color: #007700">)<br />{<br />case&nbsp;</span><span style="color: #0000BB">1</span><span style="color: #007700">:&nbsp;{</span><span style="color: #0000BB">mapname&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #DD0000">"San&nbsp;Andreas"</span><span style="color: #007700">;}<br />case&nbsp;</span><span style="color: #0000BB">2</span><span style="color: #007700">:&nbsp;{</span><span style="color: #0000BB">mapname&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #DD0000">"BlackField"</span><span style="color: #007700">;}<br />case&nbsp;</span><span style="color: #0000BB">3</span><span style="color: #007700">:&nbsp;{</span><span style="color: #0000BB">mapname&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #DD0000">"Last&nbsp;Dime&nbsp;Motel"</span><span style="color: #007700">;}<br />case&nbsp;</span><span style="color: #0000BB">4</span><span style="color: #007700">:&nbsp;{</span><span style="color: #0000BB">mapname&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #DD0000">"Foster&nbsp;Valley"</span><span style="color: #007700">;}<br />case&nbsp;</span><span style="color: #0000BB">5</span><span style="color: #007700">:&nbsp;{</span><span style="color: #0000BB">mapname&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #DD0000">"Missionary&nbsp;Hill"</span><span style="color: #007700">;}<br />case&nbsp;</span><span style="color: #0000BB">6</span><span style="color: #007700">:&nbsp;{</span><span style="color: #0000BB">mapname&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #DD0000">"Los&nbsp;Santos&nbsp;International"</span><span style="color: #007700">;}<br />case&nbsp;</span><span style="color: #0000BB">7</span><span style="color: #007700">:&nbsp;{</span><span style="color: #0000BB">mapname&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #DD0000">"North&nbsp;Rock"</span><span style="color: #007700">;}<br />case&nbsp;</span><span style="color: #0000BB">8</span><span style="color: #007700">:&nbsp;{</span><span style="color: #0000BB">mapname&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #DD0000">"Golf&nbsp;Course"</span><span style="color: #007700">;}<br />case&nbsp;</span><span style="color: #0000BB">9</span><span style="color: #007700">:&nbsp;{</span><span style="color: #0000BB">mapname&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #DD0000">"Prickle&nbsp;Pine"</span><span style="color: #007700">;}<br />case&nbsp;</span><span style="color: #0000BB">10</span><span style="color: #007700">:&nbsp;{</span><span style="color: #0000BB">mapname&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #DD0000">"Verona&nbsp;Beach"</span><span style="color: #007700">;}<br />case&nbsp;</span><span style="color: #0000BB">11</span><span style="color: #007700">:&nbsp;{</span><span style="color: #0000BB">mapname&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #DD0000">"Roda&nbsp;Gigante"</span><span style="color: #007700">;}<br />case&nbsp;</span><span style="color: #0000BB">12</span><span style="color: #007700">:&nbsp;{</span><span style="color: #0000BB">mapname&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #DD0000">"Pilgrim"</span><span style="color: #007700">;}<br />case&nbsp;</span><span style="color: #0000BB">13</span><span style="color: #007700">:&nbsp;{</span><span style="color: #0000BB">mapname&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #DD0000">"Whitewood&nbsp;Estates"</span><span style="color: #007700">;}<br />case&nbsp;</span><span style="color: #0000BB">14</span><span style="color: #007700">:&nbsp;{</span><span style="color: #0000BB">mapname&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #DD0000">"BlackField&nbsp;Chapel"</span><span style="color: #007700">;}<br />case&nbsp;</span><span style="color: #0000BB">15</span><span style="color: #007700">:&nbsp;{</span><span style="color: #0000BB">mapname&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #DD0000">"Juniper&nbsp;Hollow"</span><span style="color: #007700">;}<br />case&nbsp;</span><span style="color: #0000BB">16</span><span style="color: #007700">:&nbsp;{</span><span style="color: #0000BB">mapname&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #DD0000">"Parque&nbsp;Glen"</span><span style="color: #007700">;}<br />case&nbsp;</span><span style="color: #0000BB">17</span><span style="color: #007700">:&nbsp;{</span><span style="color: #0000BB">mapname&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #DD0000">"Ganton"</span><span style="color: #007700">;}<br />case&nbsp;</span><span style="color: #0000BB">18</span><span style="color: #007700">:&nbsp;{</span><span style="color: #0000BB">mapname&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #DD0000">"Estacao&nbsp;Unity"</span><span style="color: #007700">;}<br />case&nbsp;</span><span style="color: #0000BB">19</span><span style="color: #007700">:&nbsp;{</span><span style="color: #0000BB">mapname&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #DD0000">"Mansao&nbsp;dos&nbsp;Lockwood"</span><span style="color: #007700">;}<br />case&nbsp;</span><span style="color: #0000BB">20</span><span style="color: #007700">:&nbsp;{</span><span style="color: #0000BB">mapname&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #DD0000">"Tierra&nbsp;Robada"</span><span style="color: #007700">;}<br />case&nbsp;</span><span style="color: #0000BB">21</span><span style="color: #007700">:&nbsp;{</span><span style="color: #0000BB">mapname&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #DD0000">"Las&nbsp;Barrancas"</span><span style="color: #007700">;}<br />case&nbsp;</span><span style="color: #0000BB">22</span><span style="color: #007700">:&nbsp;{</span><span style="color: #0000BB">mapname&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #DD0000">"Las&nbsp;Venturas&nbsp;Airport"</span><span style="color: #007700">;}<br />case&nbsp;</span><span style="color: #0000BB">23</span><span style="color: #007700">:&nbsp;{</span><span style="color: #0000BB">mapname&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #DD0000">"Hilltop&nbsp;Farm"</span><span style="color: #007700">;}<br />case&nbsp;</span><span style="color: #0000BB">24</span><span style="color: #007700">:&nbsp;{</span><span style="color: #0000BB">mapname&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #DD0000">"Palomino&nbsp;Creek"</span><span style="color: #007700">;}<br />case&nbsp;</span><span style="color: #0000BB">25</span><span style="color: #007700">:&nbsp;{</span><span style="color: #0000BB">mapname&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #DD0000">"Ocean&nbsp;Docks"</span><span style="color: #007700">;}<br />case&nbsp;</span><span style="color: #0000BB">26</span><span style="color: #007700">:&nbsp;{</span><span style="color: #0000BB">mapname&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #DD0000">"SF&nbsp;Bridge"</span><span style="color: #007700">;}<br />case&nbsp;</span><span style="color: #0000BB">27</span><span style="color: #007700">:&nbsp;{</span><span style="color: #0000BB">mapname&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #DD0000">"Redsands&nbsp;West"</span><span style="color: #007700">;}<br />case&nbsp;</span><span style="color: #0000BB">28</span><span style="color: #007700">:&nbsp;{</span><span style="color: #0000BB">mapname&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #DD0000">"Vale&nbsp;Ocultado"</span><span style="color: #007700">;}<br />case&nbsp;</span><span style="color: #0000BB">29</span><span style="color: #007700">:&nbsp;{</span><span style="color: #0000BB">mapname&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #DD0000">"Bone&nbsp;County"</span><span style="color: #007700">;}<br />case&nbsp;</span><span style="color: #0000BB">30</span><span style="color: #007700">:&nbsp;{</span><span style="color: #0000BB">mapname&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #DD0000">"Big&nbsp;Fabrica"</span><span style="color: #007700">;}<br />case&nbsp;</span><span style="color: #0000BB">31</span><span style="color: #007700">:&nbsp;{</span><span style="color: #0000BB">mapname&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #DD0000">"Spread&nbsp;Ranch"</span><span style="color: #007700">;}<br />case&nbsp;</span><span style="color: #0000BB">32</span><span style="color: #007700">:&nbsp;{</span><span style="color: #0000BB">mapname&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #DD0000">"Leafy&nbsp;Hollow"</span><span style="color: #007700">;}<br />case&nbsp;</span><span style="color: #0000BB">33</span><span style="color: #007700">:&nbsp;{</span><span style="color: #0000BB">mapname&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #DD0000">"Construcao"</span><span style="color: #007700">;}<br />case&nbsp;</span><span style="color: #0000BB">34</span><span style="color: #007700">:&nbsp;{</span><span style="color: #0000BB">mapname&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #DD0000">"Lunk&nbsp;Yard"</span><span style="color: #007700">;}<br />case&nbsp;</span><span style="color: #0000BB">35</span><span style="color: #007700">:&nbsp;{</span><span style="color: #0000BB">mapname&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #DD0000">"Doherty"</span><span style="color: #007700">;}<br />case&nbsp;</span><span style="color: #0000BB">36</span><span style="color: #007700">:&nbsp;{</span><span style="color: #0000BB">mapname&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #DD0000">"Quarry"</span><span style="color: #007700">;}<br />case&nbsp;</span><span style="color: #0000BB">37</span><span style="color: #007700">:&nbsp;{</span><span style="color: #0000BB">mapname&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #DD0000">"Broken&nbsp;City"</span><span style="color: #007700">;}<br />case&nbsp;</span><span style="color: #0000BB">38</span><span style="color: #007700">:&nbsp;{</span><span style="color: #0000BB">mapname&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #DD0000">"Diablo"</span><span style="color: #007700">;}<br />case&nbsp;</span><span style="color: #0000BB">39</span><span style="color: #007700">:&nbsp;{</span><span style="color: #0000BB">mapname&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #DD0000">"GreenGlass&nbsp;College"</span><span style="color: #007700">;}<br />case&nbsp;</span><span style="color: #0000BB">40</span><span style="color: #007700">:&nbsp;{</span><span style="color: #0000BB">mapname&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #DD0000">"The&nbsp;Esmerald&nbsp;Isle"</span><span style="color: #007700">;}<br />case&nbsp;</span><span style="color: #0000BB">41</span><span style="color: #007700">:&nbsp;{</span><span style="color: #0000BB">mapname&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #DD0000">"Idlewood"</span><span style="color: #007700">;}<br />case&nbsp;</span><span style="color: #0000BB">42</span><span style="color: #007700">:&nbsp;{</span><span style="color: #0000BB">mapname&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #DD0000">"Pracinha"</span><span style="color: #007700">;}<br />case&nbsp;</span><span style="color: #0000BB">43</span><span style="color: #007700">:&nbsp;{</span><span style="color: #0000BB">mapname&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #DD0000">"Casarao"</span><span style="color: #007700">;}<br />case&nbsp;</span><span style="color: #0000BB">44</span><span style="color: #007700">:&nbsp;{</span><span style="color: #0000BB">mapname&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #DD0000">"Country&nbsp;Side"</span><span style="color: #007700">;}<br />case&nbsp;</span><span style="color: #0000BB">45</span><span style="color: #007700">:&nbsp;{</span><span style="color: #0000BB">mapname&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #DD0000">"Construcao&nbsp;LV"</span><span style="color: #007700">;}<br />case&nbsp;</span><span style="color: #0000BB">46</span><span style="color: #007700">:&nbsp;{</span><span style="color: #0000BB">mapname&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #DD0000">"The&nbsp;Big&nbsp;Ear"</span><span style="color: #007700">;}<br />case&nbsp;</span><span style="color: #0000BB">47</span><span style="color: #007700">:&nbsp;{</span><span style="color: #0000BB">mapname&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #DD0000">"Rock&nbsp;Hotel"</span><span style="color: #007700">;}<br />case&nbsp;</span><span style="color: #0000BB">48</span><span style="color: #007700">:&nbsp;{</span><span style="color: #0000BB">mapname&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #DD0000">"Creek"</span><span style="color: #007700">;}<br />case&nbsp;</span><span style="color: #0000BB">49</span><span style="color: #007700">:&nbsp;{</span><span style="color: #0000BB">mapname&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #DD0000">"Estacionamento&nbsp;LV"</span><span style="color: #007700">;}<br />case&nbsp;</span><span style="color: #0000BB">50</span><span style="color: #007700">:&nbsp;{</span><span style="color: #0000BB">mapname&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #DD0000">"Arena&nbsp;Life"</span><span style="color: #007700">;}<br />case&nbsp;</span><span style="color: #0000BB">51</span><span style="color: #007700">:&nbsp;{</span><span style="color: #0000BB">mapname&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #DD0000">"Pista&nbsp;de&nbsp;Skate"</span><span style="color: #007700">;}<br />case&nbsp;</span><span style="color: #0000BB">52</span><span style="color: #007700">:&nbsp;{</span><span style="color: #0000BB">mapname&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #DD0000">"The&nbsp;High&nbsp;Roller"</span><span style="color: #007700">;}<br />case&nbsp;</span><span style="color: #0000BB">53</span><span style="color: #007700">:&nbsp;{</span><span style="color: #0000BB">mapname&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #DD0000">"Conference&nbsp;Center"</span><span style="color: #007700">;}<br />case&nbsp;</span><span style="color: #0000BB">54</span><span style="color: #007700">:&nbsp;{</span><span style="color: #0000BB">mapname&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #DD0000">"Rodovia"</span><span style="color: #007700">;}<br />case&nbsp;</span><span style="color: #0000BB">55</span><span style="color: #007700">:&nbsp;{</span><span style="color: #0000BB">mapname&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #DD0000">"East&nbsp;Los&nbsp;Santos"</span><span style="color: #007700">;}<br />case&nbsp;</span><span style="color: #0000BB">56</span><span style="color: #007700">:&nbsp;{</span><span style="color: #0000BB">mapname&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #DD0000">"Los&nbsp;Flores"</span><span style="color: #007700">;}<br />case&nbsp;</span><span style="color: #0000BB">57</span><span style="color: #007700">:&nbsp;{</span><span style="color: #0000BB">mapname&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #DD0000">"Los&nbsp;Vagos"</span><span style="color: #007700">;}<br />case&nbsp;</span><span style="color: #0000BB">58</span><span style="color: #007700">:&nbsp;{</span><span style="color: #0000BB">mapname&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #DD0000">"Marina"</span><span style="color: #007700">;}<br />case&nbsp;</span><span style="color: #0000BB">59</span><span style="color: #007700">:&nbsp;{</span><span style="color: #0000BB">mapname&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #DD0000">"Tony's&nbsp;liquor"</span><span style="color: #007700">;}<br />case&nbsp;</span><span style="color: #0000BB">60</span><span style="color: #007700">:&nbsp;{</span><span style="color: #0000BB">mapname&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #DD0000">"Big&nbsp;Smoke&nbsp;Hood"</span><span style="color: #007700">;}<br />case&nbsp;</span><span style="color: #0000BB">61</span><span style="color: #007700">:&nbsp;{</span><span style="color: #0000BB">mapname&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #DD0000">"Area&nbsp;51"</span><span style="color: #007700">;}<br />case&nbsp;</span><span style="color: #0000BB">62</span><span style="color: #007700">:&nbsp;{</span><span style="color: #0000BB">mapname&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #DD0000">"Bacres"</span><span style="color: #007700">;}<br />case&nbsp;</span><span style="color: #0000BB">63</span><span style="color: #007700">:&nbsp;{</span><span style="color: #0000BB">mapname&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #DD0000">"Bayside"</span><span style="color: #007700">;}<br />case&nbsp;</span><span style="color: #0000BB">64</span><span style="color: #007700">:&nbsp;{</span><span style="color: #0000BB">mapname&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #DD0000">"Esplanade&nbsp;North"</span><span style="color: #007700">;}<br />case&nbsp;</span><span style="color: #0000BB">65</span><span style="color: #007700">:&nbsp;{</span><span style="color: #0000BB">mapname&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #DD0000">"Fort&nbsp;Carson"</span><span style="color: #007700">;}<br />case&nbsp;</span><span style="color: #0000BB">66</span><span style="color: #007700">:&nbsp;{</span><span style="color: #0000BB">mapname&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #DD0000">"Green&nbsp;Palms"</span><span style="color: #007700">;}<br />case&nbsp;</span><span style="color: #0000BB">67</span><span style="color: #007700">:&nbsp;{</span><span style="color: #0000BB">mapname&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #DD0000">"Pershing&nbsp;Square"</span><span style="color: #007700">;}<br />case&nbsp;</span><span style="color: #0000BB">68</span><span style="color: #007700">:&nbsp;{</span><span style="color: #0000BB">mapname&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #DD0000">"Regular&nbsp;Tom"</span><span style="color: #007700">;}<br />case&nbsp;</span><span style="color: #0000BB">69</span><span style="color: #007700">:&nbsp;{</span><span style="color: #0000BB">mapname&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #DD0000">"San&nbsp;Fierro&nbsp;Beach"</span><span style="color: #007700">;}<br />case&nbsp;</span><span style="color: #0000BB">70</span><span style="color: #007700">:&nbsp;{</span><span style="color: #0000BB">mapname&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #DD0000">"Temple"</span><span style="color: #007700">;}<br />case&nbsp;</span><span style="color: #0000BB">71</span><span style="color: #007700">:&nbsp;{</span><span style="color: #0000BB">mapname&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #DD0000">"Jesus&nbsp;Hood"</span><span style="color: #007700">;}<br />case&nbsp;</span><span style="color: #0000BB">72</span><span style="color: #007700">:&nbsp;{</span><span style="color: #0000BB">mapname&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #DD0000">"Fintersection"</span><span style="color: #007700">;}<br />case&nbsp;</span><span style="color: #0000BB">73</span><span style="color: #007700">:&nbsp;{</span><span style="color: #0000BB">mapname&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #DD0000">"Cluckin&nbsp;Bell"</span><span style="color: #007700">;}<br />case&nbsp;</span><span style="color: #0000BB">74</span><span style="color: #007700">:&nbsp;{</span><span style="color: #0000BB">mapname&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #DD0000">"Gay&nbsp;Square"</span><span style="color: #007700">;}<br />case&nbsp;</span><span style="color: #0000BB">75</span><span style="color: #007700">:&nbsp;{</span><span style="color: #0000BB">mapname&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #DD0000">"Condominio&nbsp;SF"</span><span style="color: #007700">;}<br />case&nbsp;</span><span style="color: #0000BB">76</span><span style="color: #007700">:&nbsp;{</span><span style="color: #0000BB">mapname&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #DD0000">"Hoff&nbsp;Park"</span><span style="color: #007700">;}<br />case&nbsp;</span><span style="color: #0000BB">77</span><span style="color: #007700">:&nbsp;{</span><span style="color: #0000BB">mapname&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #DD0000">"Chafaris"</span><span style="color: #007700">;}<br />case&nbsp;</span><span style="color: #0000BB">78</span><span style="color: #007700">:&nbsp;{</span><span style="color: #0000BB">mapname&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #DD0000">"Santa&nbsp;Flora"</span><span style="color: #007700">;}<br />case&nbsp;</span><span style="color: #0000BB">79</span><span style="color: #007700">:&nbsp;{</span><span style="color: #0000BB">mapname&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #DD0000">"Juniper&nbsp;Hollow"</span><span style="color: #007700">;}<br />case&nbsp;</span><span style="color: #0000BB">80</span><span style="color: #007700">:&nbsp;{</span><span style="color: #0000BB">mapname&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #DD0000">"Calton&nbsp;Heights"</span><span style="color: #007700">;}<br />case&nbsp;</span><span style="color: #0000BB">81</span><span style="color: #007700">:&nbsp;{</span><span style="color: #0000BB">mapname&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #DD0000">"Queens"</span><span style="color: #007700">;}<br />case&nbsp;</span><span style="color: #0000BB">82</span><span style="color: #007700">:&nbsp;{</span><span style="color: #0000BB">mapname&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #DD0000">"Garden&nbsp;Center"</span><span style="color: #007700">;}<br />case&nbsp;</span><span style="color: #0000BB">83</span><span style="color: #007700">:&nbsp;{</span><span style="color: #0000BB">mapname&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #DD0000">"Angelpine"</span><span style="color: #007700">;}<br />case&nbsp;</span><span style="color: #0000BB">84</span><span style="color: #007700">:&nbsp;{</span><span style="color: #0000BB">mapname&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #DD0000">"Navio"</span><span style="color: #007700">;}<br />case&nbsp;</span><span style="color: #0000BB">85</span><span style="color: #007700">:&nbsp;{</span><span style="color: #0000BB">mapname&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #DD0000">"Golf"</span><span style="color: #007700">;}<br />case&nbsp;</span><span style="color: #0000BB">86</span><span style="color: #007700">:&nbsp;{</span><span style="color: #0000BB">mapname&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #DD0000">"Lsujo"</span><span style="color: #007700">;}<br />case&nbsp;</span><span style="color: #0000BB">87</span><span style="color: #007700">:&nbsp;{</span><span style="color: #0000BB">mapname&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #DD0000">"Avispa"</span><span style="color: #007700">;}<br />case&nbsp;</span><span style="color: #0000BB">88</span><span style="color: #007700">:&nbsp;{</span><span style="color: #0000BB">mapname&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #DD0000">"Ebasin"</span><span style="color: #007700">;}<br />case&nbsp;</span><span style="color: #0000BB">89</span><span style="color: #007700">:&nbsp;{</span><span style="color: #0000BB">mapname&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #DD0000">"Come-a-lot"</span><span style="color: #007700">;}<br />case&nbsp;</span><span style="color: #0000BB">90</span><span style="color: #007700">:&nbsp;{</span><span style="color: #0000BB">mapname&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #DD0000">"Hankypanky"</span><span style="color: #007700">;}<br />case&nbsp;</span><span style="color: #0000BB">91</span><span style="color: #007700">:&nbsp;{</span><span style="color: #0000BB">mapname&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #DD0000">"Red&nbsp;County"</span><span style="color: #007700">;}<br />case&nbsp;</span><span style="color: #0000BB">92</span><span style="color: #007700">:&nbsp;{</span><span style="color: #0000BB">mapname&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #DD0000">"Easterbasin"</span><span style="color: #007700">;}<br />case&nbsp;</span><span style="color: #0000BB">93</span><span style="color: #007700">:&nbsp;{</span><span style="color: #0000BB">mapname&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #DD0000">"East&nbsp;Beach"</span><span style="color: #007700">;}<br />case&nbsp;</span><span style="color: #0000BB">94</span><span style="color: #007700">:&nbsp;{</span><span style="color: #0000BB">mapname&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #DD0000">"Supa&nbsp;Save"</span><span style="color: #007700">;}<br />}<br /><br /></span><span style="color: #0000BB"> &nbsp; &nbsp;GetPlayerWon</span><span style="color: #007700">();<br /><br /></span><span style="color: #0000BB">UpdateRanks</span><span style="color: #007700">();<br /><br />foreach(</span><span style="color: #0000BB">Player</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">i</span><span style="color: #007700">)<br />{<br />if(</span><span style="color: #0000BB">APlayerData</span><span style="color: #007700">[</span><span style="color: #0000BB">i</span><span style="color: #007700">][</span><span style="color: #0000BB">Logado</span><span style="color: #007700">])<br />{<br /></span><span style="color: #0000BB">SaveAccount</span><span style="color: #007700">(</span><span style="color: #0000BB">i</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">rKills</span><span style="color: #007700">[</span><span style="color: #0000BB">i</span><span style="color: #007700">]&nbsp;=&nbsp;</span><span style="color: #0000BB">0</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">damageperplayer</span><span style="color: #007700">[</span><span style="color: #0000BB">i</span><span style="color: #007700">]&nbsp;=&nbsp;</span><span style="color: #0000BB">0</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">Votou</span><span style="color: #007700">[</span><span style="color: #0000BB">i</span><span style="color: #007700">]&nbsp;=&nbsp;</span><span style="color: #0000BB">false</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">MortesRodada</span><span style="color: #007700">[</span><span style="color: #0000BB">i</span><span style="color: #007700">]&nbsp;=&nbsp;</span><span style="color: #0000BB">0</span><span style="color: #007700">;<br /></span><span style="color: #0000BB"> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;KillsRodada</span><span style="color: #007700">[</span><span style="color: #0000BB">i</span><span style="color: #007700">]&nbsp;=&nbsp;</span><span style="color: #0000BB">0</span><span style="color: #007700">;<br />}<br />}<br /></span><span style="color: #0000BB">thirdplayer&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">0</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">secondplayer&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">0</span><span style="color: #007700">;<br /><br /></span><span style="color: #0000BB"> &nbsp; &nbsp;</span><span style="color: #007700">new&nbsp;</span><span style="color: #0000BB">StringMAP</span><span style="color: #007700">[</span><span style="color: #0000BB">30</span><span style="color: #007700">];<br /></span><span style="color: #0000BB">format</span><span style="color: #007700">(</span><span style="color: #0000BB">StringMAP</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">30</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">"mapname&nbsp;%s"</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">mapname</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">SendRconCommand</span><span style="color: #007700">(</span><span style="color: #0000BB">StringMAP</span><span style="color: #007700">);<br /><br />foreach(</span><span style="color: #0000BB">Player</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">i</span><span style="color: #007700">)<br />{<br />if(</span><span style="color: #0000BB">IsPlayerConnected</span><span style="color: #007700">(</span><span style="color: #0000BB">i</span><span style="color: #007700">)&nbsp;&amp;&amp;&nbsp;</span><span style="color: #0000BB">APlayerData</span><span style="color: #007700">[</span><span style="color: #0000BB">i</span><span style="color: #007700">][</span><span style="color: #0000BB">Logado</span><span style="color: #007700">]&nbsp;&amp;&amp;&nbsp;</span><span style="color: #0000BB">Duelo</span><span style="color: #007700">[</span><span style="color: #0000BB">i</span><span style="color: #007700">]&nbsp;==&nbsp;</span><span style="color: #0000BB">998&nbsp;</span><span style="color: #007700">&amp;&amp;&nbsp;</span><span style="color: #0000BB">AFK</span><span style="color: #007700">[</span><span style="color: #0000BB">i</span><span style="color: #007700">]&nbsp;==&nbsp;</span><span style="color: #0000BB">false</span><span style="color: #007700">)<br />{<br /></span><span style="color: #0000BB">TogglePlayerControllable</span><span style="color: #007700">(</span><span style="color: #0000BB">i</span><span style="color: #007700">,</span><span style="color: #0000BB">0</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">GameTextForPlayer</span><span style="color: #007700">(</span><span style="color: #0000BB">i</span><span style="color: #007700">,</span><span style="color: #DD0000">"~r~&#x26;t~y~Fim&nbsp;do&nbsp;Round~r~&#x26;t"</span><span style="color: #007700">,</span><span style="color: #0000BB">4000</span><span style="color: #007700">,</span><span style="color: #0000BB">6</span><span style="color: #007700">);<br />}<br />}<br /></span><span style="color: #0000BB">inicio&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">SetTimer</span><span style="color: #007700">(</span><span style="color: #DD0000">"Iniciar"</span><span style="color: #007700">,</span><span style="color: #0000BB">5000</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">0</span><span style="color: #007700">);<br />return&nbsp;</span><span style="color: #0000BB">1</span><span style="color: #007700">;<br />}&nbsp;<br /></span></code></div></div></div>]]></content>
		<draft xmlns="http://purl.org/atom-blog/ns#">false</draft>
	</entry>
	<entry xmlns="http://www.w3.org/2005/Atom">
		<author>
			<name type="html" xml:space="preserve"><![CDATA[<a href="https://www.burgershot.gg/member.php?action=profile&uid=3134">willian franco</a>]]></name>
		</author>
		<published>2021-01-19T19:24:56Z</published>
		<updated>2021-01-19T19:24:56Z</updated>
		<link rel="alternate" type="text/html" href="https://www.burgershot.gg/showthread.php?tid=1555" />
		<id>https://www.burgershot.gg/showthread.php?tid=1555</id>
		<title xml:space="preserve"><![CDATA[[AJUDA]EditDynamicObject]]></title>
		<content type="html" xml:space="preserve" xml:base="https://www.burgershot.gg/showthread.php?tid=1555"><![CDATA[os players android não estão conseguindo editar o EditDynamicObject portão, caixa ou acessória <br />
<br />
<br />
isso é problema do APK que nao tem esse sistema ou tem um sistema diferente para colocar e funcionar no android ?<br />
<br />
<br />
obrigadoo]]></content>
		<draft xmlns="http://purl.org/atom-blog/ns#">false</draft>
	</entry>
	<entry xmlns="http://www.w3.org/2005/Atom">
		<author>
			<name type="html" xml:space="preserve"><![CDATA[<a href="https://www.burgershot.gg/member.php?action=profile&uid=3306">sampaux</a>]]></name>
		</author>
		<published>2021-01-17T05:29:55Z</published>
		<updated>2021-01-17T06:41:23Z</updated>
		<link rel="alternate" type="text/html" href="https://www.burgershot.gg/showthread.php?tid=1538" />
		<id>https://www.burgershot.gg/showthread.php?tid=1538</id>
		<title xml:space="preserve"><![CDATA[[AJUDA] Como colocar player em um veiculo]]></title>
		<content type="html" xml:space="preserve" xml:base="https://www.burgershot.gg/showthread.php?tid=1538"><![CDATA[<div style="text-align: left;" class="mycode_align">Sou novo em pawn, comecei a menos de uma semana e estou criando uma gm de DM.</div>
<div style="text-align: left;" class="mycode_align">Eu criei o comando /veh que cria um veiculo de acordo com os parametros indicados,  porem eu queria que o player que usou o comando fosse colocado como motorista do veiculo assim que fosse criado.<br />
Eu pensei em usar o PutPlayerInVehicle, mas um dos parametros dele é o id do veiculo (sem ser o id do modelo) e eu não sei como eu consigo esse id automaticamente. Alguem pode me ajudar?</div>]]></content>
		<draft xmlns="http://purl.org/atom-blog/ns#">false</draft>
	</entry>
	<entry xmlns="http://www.w3.org/2005/Atom">
		<author>
			<name type="html" xml:space="preserve"><![CDATA[<a href="https://www.burgershot.gg/member.php?action=profile&uid=3253">Zarcort</a>]]></name>
		</author>
		<published>2021-01-06T04:34:45Z</published>
		<updated>2021-01-06T04:34:45Z</updated>
		<link rel="alternate" type="text/html" href="https://www.burgershot.gg/showthread.php?tid=1498" />
		<id>https://www.burgershot.gg/showthread.php?tid=1498</id>
		<title xml:space="preserve"><![CDATA[[AJUDA] Bug nas Teclas]]></title>
		<content type="html" xml:space="preserve" xml:base="https://www.burgershot.gg/showthread.php?tid=1498"><![CDATA[Olá. bem estou com um bug nas Keys e não estou entendendo.<br />
Quando eu ligo o servidor no meu PC tudo funciona normal. sabe o Aperte Y para ligar o veiculo?<br />
Quando coloco no host o Y e qualquer outra tecla que precise aperta pra funcionar algo não funciona mais.<br />
<br />
Qual pode ser a causa desse problema?]]></content>
		<draft xmlns="http://purl.org/atom-blog/ns#">false</draft>
	</entry>
	<entry xmlns="http://www.w3.org/2005/Atom">
		<author>
			<name type="html" xml:space="preserve"><![CDATA[<a href="https://www.burgershot.gg/member.php?action=profile&uid=3217">LeleziN</a>]]></name>
		</author>
		<published>2021-01-04T11:48:36Z</published>
		<updated>2021-01-04T11:48:36Z</updated>
		<link rel="alternate" type="text/html" href="https://www.burgershot.gg/showthread.php?tid=1491" />
		<id>https://www.burgershot.gg/showthread.php?tid=1491</id>
		<title xml:space="preserve"><![CDATA[Sistema de Plantação e Colheita]]></title>
		<content type="html" xml:space="preserve" xml:base="https://www.burgershot.gg/showthread.php?tid=1491"><![CDATA[<span style="color: #333333;" class="mycode_color"><span style="font-family: Roboto;" class="mycode_font">Bom pessoal venho em meio desse tópico pedir uma ajuda a vocês, bom se alguém tiver esse sistema ou algo parecido fico muito agradecido se poderem compartilhar comigo.</span></span><br />
<br />
<span style="color: #333333;" class="mycode_color"><span style="font-family: Roboto;" class="mycode_font">Tá Ir o vídeo do sistema, já procurei e não encontrei nada parecido.</span></span><br />
<a href="https://youtu.be/tH7ds3oaxIY" target="_blank" rel="noopener" class="mycode_url"><span style="color: #be2026;" class="mycode_color"><span style="font-family: Roboto;" class="mycode_font">https://youtu.be/tH7ds3oaxIY</span></span></a>]]></content>
		<draft xmlns="http://purl.org/atom-blog/ns#">false</draft>
	</entry>
	<entry xmlns="http://www.w3.org/2005/Atom">
		<author>
			<name type="html" xml:space="preserve"><![CDATA[<a href="https://www.burgershot.gg/member.php?action=profile&uid=3134">willian franco</a>]]></name>
		</author>
		<published>2021-01-03T00:32:56Z</published>
		<updated>2021-01-03T00:32:56Z</updated>
		<link rel="alternate" type="text/html" href="https://www.burgershot.gg/showthread.php?tid=1482" />
		<id>https://www.burgershot.gg/showthread.php?tid=1482</id>
		<title xml:space="preserve"><![CDATA[[AJUDA]Comando Bugando Portão, caixa e Movel.]]></title>
		<content type="html" xml:space="preserve" xml:base="https://www.burgershot.gg/showthread.php?tid=1482"><![CDATA[Boa noite, ja alterei o comando de varias formas para não dar esse bug porem nao deram errado,<br />
<br />
O móvel  quando é posicionado e clica em salvar é criado uma caixa de item quando alterado aparece um portão no lugar, <br />
<br />
<br />
<div class="codeblock"><div class="title">Code:</div><div class="body" dir="ltr"><code>public OnPlayerEditDynamicObject(playerid, objectid, response, Float:x, Float:y, Float:z, Float:rx, Float:ry, Float:rz){<br />
<br />
            if(response == 1 || response == 0){<br />
<br />
              if(EditandoCaixa[playerid] &#x26;t -1)<br />
  {<br />
                new i = EditandoCaixa[playerid];<br />
    DestroyDynamic3DTextLabel(SistemaCaixa[i][Caixa3d]);<br />
    //format(SistemaCaixa[i][CaixaText],300,"{CD853F}• {ffffff}Caixa de Itens{CD853F} •&#92;n{CD853F}Dono: {ffffff}%s&#92;n{CD853F}Itens: {ffffff}%d/50&#92;nAperte ' {CD853F}F{ffffff} ' para usar.",NomePlayer(playerid),ItemsCaixa(i));<br />
                format(SistemaCaixa[i][CaixaText],300,"Caixa de Itens&#92;n&#92;n&#92;<br />
Proprietário: {00BFFF}%s&#92;n&#92;<br />
{FFFFFF}Itens: {00BFFF}%d/50&#92;n&#92;n&#92;<br />
{FFFFFF}Aperte a letra {00aaff}ALT{FFFFFF} para usar",NomePlayer(playerid),ItemsCaixa(i));<br />
SendClientMessage(playerid, -1, "Voce salvou sua Caixa de Itens neste Local.");<br />
<br />
    SistemaCaixa[i][Caixa3d] = CreateDynamic3DTextLabel(SistemaCaixa[i][CaixaText], -1, x,y, z, 30, INVALID_PLAYER_ID, INVALID_VEHICLE_ID,  0, GetPlayerVirtualWorld(playerid), GetPlayerInterior(playerid), -1, 100.0);<br />
format(SistemaCaixa[i][CaixaDono],40, NomePlayer(playerid));<br />
SistemaCaixa[i][CaixaX] = x;<br />
SistemaCaixa[i][CaixaY] = y;<br />
SistemaCaixa[i][CaixaZ] = z;<br />
SistemaCaixa[i][CaixaRX] = rx;<br />
SistemaCaixa[i][CaixaRY] = ry;<br />
SistemaCaixa[i][CaixaRZ] = rz;<br />
SistemaCaixa[i][CaixaInterior] = GetPlayerInterior(playerid);<br />
SistemaCaixa[i][CaixaMundo] = GetPlayerVirtualWorld(playerid);<br />
DestroyDynamicObject(SistemaCaixa[i][CaixaObj]);<br />
SistemaCaixa[i][CaixaObj] = CreateDynamicObject(1271, x,y,z,rx,ry,rz,GetPlayerInterior(playerid),GetPlayerVirtualWorld(playerid),-1,200,0);<br />
    Streamer_Update(playerid);<br />
<br />
    new Filea[60];<br />
    format(Filea,60,"Caixas/Caixa_%d.ini",i);<br />
if(!IsValidDynamicObject(SistemaCaixa[i][CaixaObj]))<br />
{<br />
if(DOF2_FileExists(Filea)) DOF2_CreateFile(Filea);<br />
<br />
    DOF2_SetString(Filea,"CaixaDono", SistemaCaixa[i][CaixaDono] );<br />
    //DOF2_SetString(Filea,"CaixaText", SistemaCaixa[i][CaixaText] );<br />
    DOF2_SetFloat(Filea,"CaixaX", SistemaCaixa[i][CaixaX] );<br />
    DOF2_SetFloat(Filea,"CaixaY", SistemaCaixa[i][CaixaY] );<br />
    DOF2_SetFloat(Filea,"CaixaZ", SistemaCaixa[i][CaixaZ] );<br />
    DOF2_SetFloat(Filea,"CaixaRX", SistemaCaixa[i][CaixaRX] );<br />
    DOF2_SetFloat(Filea,"CaixaRY", SistemaCaixa[i][CaixaRY] );<br />
    DOF2_SetFloat(Filea,"CaixaRZ", SistemaCaixa[i][CaixaRZ] );<br />
DOF2_SetInt(Filea,"CaixaInterior", SistemaCaixa[i][CaixaInterior] );<br />
DOF2_SetInt(Filea,"CaixaMundo",  SistemaCaixa[i][CaixaMundo] );<br />
<br />
new str[30];<br />
for(new o; o&#x26;t50; o++)<br />
{<br />
format(str,30,"CaixaItem%d",o);<br />
DOF2_SetInt(Filea,str,SistemaCaixa[i][CaixaItem][o]);<br />
format(str,30,"CaixaUnidades%d",o);<br />
DOF2_SetInt(Filea,str,SistemaCaixa[i][CaixaUnidades][o]);<br />
}<br />
                    EditandoCaixa[playerid] = -1;<br />
        DOF2_SaveFile();<br />
    }<br />
  return 1;<br />
}<br />
      if(EditandoPortao[playerid] &#x26;t -1)<br />
{<br />
    new i = EditandoPortao[playerid];<br />
    DestroyDynamic3DTextLabel(SistemaPortao[i][Portao3d]);<br />
    new str[300];<br />
    format(str,300,"{CD853F}Portao de {ffffff}%s{CD853F} buzine ou&#92;ndigite {ffffff}/abrirportao{CD853F} para abrir",NomePlayer(playerid));<br />
    SendClientMessage(playerid, -1, "A posição do seu Portão foi salva neste Local ! Para mais informações use: /ajuda.");<br />
<br />
SistemaPortao[i][Portao3d] = CreateDynamic3DTextLabel(SistemaPortao[i][PortaoText], -1, x,y, z, 30, INVALID_PLAYER_ID, INVALID_VEHICLE_ID,  0, GetPlayerVirtualWorld(playerid), GetPlayerInterior(playerid), -1, 100.0);<br />
format(SistemaPortao[i][PortaoDono],40, NomePlayer(playerid));<br />
SistemaPortao[i][PortaoX] = x;<br />
SistemaPortao[i][PortaoY] = y;<br />
SistemaPortao[i][PortaoZ] = z;<br />
SistemaPortao[i][PortaoRX] = rx;<br />
SistemaPortao[i][PortaoRY] = ry;<br />
SistemaPortao[i][PortaoRZ] = rz;<br />
SistemaPortao[i][PortaoInterior] = GetPlayerInterior(playerid);<br />
SistemaPortao[i][PortaoMundo] = GetPlayerVirtualWorld(playerid);<br />
DestroyDynamicObject(SistemaPortao[i][PortaoObj]);<br />
SistemaPortao[i][PortaoObj] = CreateDynamicObject(980, x,y,z,rx,ry,rz,GetPlayerInterior(playerid),GetPlayerVirtualWorld(playerid),-1,200,0);<br />
    //SetDynamicObjectPos(SistemaPortao[i][PortaoObj], x,y,z);<br />
    //SetDynamicObjectRot(SistemaPortao[i][PortaoObj], rx,ry,rz);<br />
<br />
    Streamer_Update(playerid);<br />
<br />
    new Filea[60];<br />
    format(Filea,60,"Portoes/Portao_%d.ini",i);<br />
if(!IsValidDynamicObject(SistemaPortao[i][PortaoObj]))<br />
{<br />
if(DOF2_FileExists(Filea)) DOF2_CreateFile(Filea);<br />
<br />
    DOF2_SetString(Filea,"PortaoDono", SistemaPortao[i][PortaoDono] );<br />
    DOF2_SetString(Filea,"PortaoText", SistemaPortao[i][PortaoText] );<br />
    DOF2_SetFloat(Filea,"PortaoX", SistemaPortao[i][PortaoX] );<br />
    DOF2_SetFloat(Filea,"PortaoY", SistemaPortao[i][PortaoY] );<br />
    DOF2_SetFloat(Filea,"PortaoZ", SistemaPortao[i][PortaoZ] );<br />
    DOF2_SetFloat(Filea,"PortaoRX", SistemaPortao[i][PortaoRX] );<br />
    DOF2_SetFloat(Filea,"PortaoRY", SistemaPortao[i][PortaoRY] );<br />
    DOF2_SetFloat(Filea,"PortaoRZ", SistemaPortao[i][PortaoRZ] );<br />
DOF2_SetInt(Filea,"PortaoInterior", SistemaPortao[i][PortaoInterior] );<br />
DOF2_SetInt(Filea,"PortaoMundo",  SistemaPortao[i][PortaoMundo] );<br />
<br />
    DOF2_SaveFile();<br />
}<br />
    EditandoPortao[playerid] = -1;<br />
    return 1;<br />
  }<br />
<br />
            if(GetPVarInt(playerid, "editandoh") != 999){<br />
            new<br />
                m = GetPVarInt(playerid, "editMovel"),<br />
    casaid = PlayerInfo[playerid][pPHousekey];<br />
<br />
if(response == 1){<br />
<br />
MobInfo[casaid][m][mobX] = x;<br />
MobInfo[casaid][m][mobY] = y;<br />
MobInfo[casaid][m][mobZ] = z;<br />
<br />
MobInfo[casaid][m][mobRX] = rx;<br />
MobInfo[casaid][m][mobRY] = ry;<br />
MobInfo[casaid][m][mobRZ] = rz;<br />
<br />
DestroyDynamicObject(MobInfo[casaid][m][mobObject]);<br />
MobInfo[casaid][m][mobObject] = CreateDynamicObject(MobInfo[casaid][m][mobModel], x, y, z, rx, ry, rz, GetPlayerVirtualWorld(playerid));<br />
}else{<br />
<br />
    MobInfo[casaid][m][mobCreated] = 0;<br />
<br />
    DestroyDynamicObject(MobInfo[casaid][m][mobObject]);<br />
}<br />
<br />
            SetPVarInt(playerid, "editandoh", 0);<br />
<br />
        salvarMoveis(casaid);<br />
  }<br />
}<br />
return 1;<br />
}</code></div></div><br />
<br />
estou a dois dias alterando e testando e da o mesmo erro, acredito que o problema esta nesse public.<br />
<br />
Obrigado.]]></content>
		<draft xmlns="http://purl.org/atom-blog/ns#">false</draft>
	</entry>
</feed>