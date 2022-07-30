<?xml version="1.0" encoding="UTF-8"?>
<rss version="2.0" xmlns:content="http://purl.org/rss/1.0/modules/content/" xmlns:dc="http://purl.org/dc/elements/1.1/">
	<channel>
		<title><![CDATA[Burgershot - Programación]]></title>
		<link>https://www.burgershot.gg/</link>
		<description><![CDATA[Burgershot - https://www.burgershot.gg]]></description>
		<pubDate>Sat, 30 Jul 2022 07:09:28 +0000</pubDate>
		<generator>MyBB</generator>
		<item>
			<title><![CDATA[[MySQL] Problema con registro de datos]]></title>
			<link>https://www.burgershot.gg/showthread.php?tid=2307</link>
			<pubDate>Tue, 19 Jul 2022 17:47:31 +0000</pubDate>
			<dc:creator><![CDATA[<a href="https://www.burgershot.gg/member.php?action=profile&uid=782">GARS</a>]]></dc:creator>
			<guid isPermaLink="false">https://www.burgershot.gg/showthread.php?tid=2307</guid>
			<description><![CDATA[Hola, tengo un problema con MySQL al registrar nuevos datos, mi servidor era SQLite y lo pase a MySQL pero al registrar un nuevo dato (registrar cuenta) en la base de datos esta no me figura/registra la el ID de forma ascendiente, me explico, en la tabla solo me registra como ID 0, así:<br />
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
}</code></div></div>]]></description>
			<content:encoded><![CDATA[Hola, tengo un problema con MySQL al registrar nuevos datos, mi servidor era SQLite y lo pase a MySQL pero al registrar un nuevo dato (registrar cuenta) en la base de datos esta no me figura/registra la el ID de forma ascendiente, me explico, en la tabla solo me registra como ID 0, así:<br />
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
}</code></div></div>]]></content:encoded>
		</item>
		<item>
			<title><![CDATA[ayuda con FCNPC]]></title>
			<link>https://www.burgershot.gg/showthread.php?tid=2257</link>
			<pubDate>Sat, 04 Dec 2021 21:44:43 +0000</pubDate>
			<dc:creator><![CDATA[<a href="https://www.burgershot.gg/member.php?action=profile&uid=3109">Nikolay_Staggs</a>]]></dc:creator>
			<guid isPermaLink="false">https://www.burgershot.gg/showthread.php?tid=2257</guid>
			<description><![CDATA[hola amigos tengo un problema con los NPCS cuando ejecuto el server me sale un message:<br />
<br />
[15:28:42] No collision data found.<br />
[15:28:42] » Sistema de objetos dinámicos cargado (0).<br />
[15:28:42] [npc:join] Soldado_0 has joined the server (IP)<br />
[15:28:42] [npc:part] Soldado_0 has left the server (1:0)<br />
[15:28:42] [FCNPC] Error: NPC 'Soldado_0' not created. Name 'Soldado_0' is invalid or the maxnpc limit in server.cfg has been reached.<br />
[15:28:42] GM FUNCIONA<br />
[15:28:42] Number of vehicle models: 0<br />
<br />
tiene 22 NPC y los jugadores son 50<br />
Mi versión de SAMP es 0.3.8-RC4 <br />
<br />
porfa ayuda]]></description>
			<content:encoded><![CDATA[hola amigos tengo un problema con los NPCS cuando ejecuto el server me sale un message:<br />
<br />
[15:28:42] No collision data found.<br />
[15:28:42] » Sistema de objetos dinámicos cargado (0).<br />
[15:28:42] [npc:join] Soldado_0 has joined the server (IP)<br />
[15:28:42] [npc:part] Soldado_0 has left the server (1:0)<br />
[15:28:42] [FCNPC] Error: NPC 'Soldado_0' not created. Name 'Soldado_0' is invalid or the maxnpc limit in server.cfg has been reached.<br />
[15:28:42] GM FUNCIONA<br />
[15:28:42] Number of vehicle models: 0<br />
<br />
tiene 22 NPC y los jugadores son 50<br />
Mi versión de SAMP es 0.3.8-RC4 <br />
<br />
porfa ayuda]]></content:encoded>
		</item>
		<item>
			<title><![CDATA[[Ayuda] Damage System]]></title>
			<link>https://www.burgershot.gg/showthread.php?tid=2060</link>
			<pubDate>Sat, 29 May 2021 03:32:11 +0000</pubDate>
			<dc:creator><![CDATA[<a href="https://www.burgershot.gg/member.php?action=profile&uid=3810">icecoldkangaroo12</a>]]></dc:creator>
			<guid isPermaLink="false">https://www.burgershot.gg/showthread.php?tid=2060</guid>
			<description><![CDATA[Buenas <span style="font-weight: bold;" class="mycode_b">comunidad.</span><br />
<br />
Necesito ayuda respecto a un <span style="font-weight: bold;" class="mycode_b">sistema de daño</span> me refiero a un sistema de daño infringido por armas<br />
<br />
<span style="font-weight: bold;" class="mycode_b">Me refiero -  </span>fNecesito modificar el daño que haga un arma en mi servidor pero lo quiero hacer sin utilizar includes o plugins que hagan este trabajo y aquí voy a lo que lleve a crear este post, ¿se pueden modificar el daño de un arma sin utilizar por ejemplo &lt;<span style="font-weight: bold;" class="mycode_b">weapon-config</span>&gt;?<br />
<br />
<span style="font-weight: bold;" class="mycode_b">Ejemplo:  </span>Necesito que el arma 'sawn-off' al jugador le quite -60 de vida por ejemplo o -50 o el valor que yo especifique, como llego a eso? hay alguna manera manual de hacerlo? si es así necesito una respuesta y un ejemplo de como podria hacerlo porfavor :) <br />
<br />
<span style="font-weight: bold;" class="mycode_b">NOTA - </span>Estoy utilizando el callback <span style="font-weight: bold;" class="mycode_b"><span style="color: #005dc2;" class="mycode_color">OnPlayerTakeDamage(</span></span><span style="color: #005dc2;" class="mycode_color">parameters</span><span style="color: #005dc2;" class="mycode_color"><span style="font-weight: bold;" class="mycode_b">)</span></span><br />
<br />
Si me podrian dar una solución o algunos ejemplos se los agradecería.]]></description>
			<content:encoded><![CDATA[Buenas <span style="font-weight: bold;" class="mycode_b">comunidad.</span><br />
<br />
Necesito ayuda respecto a un <span style="font-weight: bold;" class="mycode_b">sistema de daño</span> me refiero a un sistema de daño infringido por armas<br />
<br />
<span style="font-weight: bold;" class="mycode_b">Me refiero -  </span>fNecesito modificar el daño que haga un arma en mi servidor pero lo quiero hacer sin utilizar includes o plugins que hagan este trabajo y aquí voy a lo que lleve a crear este post, ¿se pueden modificar el daño de un arma sin utilizar por ejemplo &lt;<span style="font-weight: bold;" class="mycode_b">weapon-config</span>&gt;?<br />
<br />
<span style="font-weight: bold;" class="mycode_b">Ejemplo:  </span>Necesito que el arma 'sawn-off' al jugador le quite -60 de vida por ejemplo o -50 o el valor que yo especifique, como llego a eso? hay alguna manera manual de hacerlo? si es así necesito una respuesta y un ejemplo de como podria hacerlo porfavor :) <br />
<br />
<span style="font-weight: bold;" class="mycode_b">NOTA - </span>Estoy utilizando el callback <span style="font-weight: bold;" class="mycode_b"><span style="color: #005dc2;" class="mycode_color">OnPlayerTakeDamage(</span></span><span style="color: #005dc2;" class="mycode_color">parameters</span><span style="color: #005dc2;" class="mycode_color"><span style="font-weight: bold;" class="mycode_b">)</span></span><br />
<br />
Si me podrian dar una solución o algunos ejemplos se los agradecería.]]></content:encoded>
		</item>
		<item>
			<title><![CDATA[No puedo entrar a muchos servidores.]]></title>
			<link>https://www.burgershot.gg/showthread.php?tid=1965</link>
			<pubDate>Fri, 30 Apr 2021 17:09:20 +0000</pubDate>
			<dc:creator><![CDATA[<a href="https://www.burgershot.gg/member.php?action=profile&uid=3381">Chessy</a>]]></dc:creator>
			<guid isPermaLink="false">https://www.burgershot.gg/showthread.php?tid=1965</guid>
			<description><![CDATA[hi there, i simply cannot connect to any server that i list, but when i go in the Internet tab it shows a lot of servers, and i can play them, but this ones not, for some reason not, i tried using the numeric IP and it either didn't work<br />
<br />
Hola gente, tengo un problema, y es que simplemente no me puedo conectar a ninguno de los servidores que tengo en mi lista de favoritos, pero cuando voy a la pestaña Internet me muestra un montón de servidores, a los cuales puedo jugar, y si los agrego a mi lista también, excepto justo estos que muestro en la lista, tampoco cambiando la IP DNS por la numérica afecta en nada<br />
<br />
Qué fue lo que probé:<br />
* Reinstalar el GTA y dejarlo virgen sólo con SA-MP, reinstalar SA-MP solo<br />
* Borrar todo lo del regedit relacionado a SA-MP<br />
* Deshabilitar totalmente el Firewall de Windows, agregar SA-MP como excepción total<br />
* Crear otro usuario de Windows<br />
* Reiniciar el modem durante 10 minutos varias veces (no cambia nunca la IP)<br />
* Traté de usar otros launchers de SA-MP, tampoco, nada.<br />
* Los VPN me andan muy lageados<br />
<br />
Cuando hago ping a estos servidores con ping x en cmd funciona bien.<br />
<br />
Qué puede estar pasando? Alguna idea?<br />
<br />
Es sólo conmigo, tengo un amigo a 2 casas de distancia que tiene el mismo proveedor de internet y se puede conectar a todos estos. Ya no sé qué hacer.<br />
<br />
<img src="https://i.imgur.com/stv7wmT.jpg" loading="lazy"  alt="[Image: stv7wmT.jpg]" class="mycode_img" />]]></description>
			<content:encoded><![CDATA[hi there, i simply cannot connect to any server that i list, but when i go in the Internet tab it shows a lot of servers, and i can play them, but this ones not, for some reason not, i tried using the numeric IP and it either didn't work<br />
<br />
Hola gente, tengo un problema, y es que simplemente no me puedo conectar a ninguno de los servidores que tengo en mi lista de favoritos, pero cuando voy a la pestaña Internet me muestra un montón de servidores, a los cuales puedo jugar, y si los agrego a mi lista también, excepto justo estos que muestro en la lista, tampoco cambiando la IP DNS por la numérica afecta en nada<br />
<br />
Qué fue lo que probé:<br />
* Reinstalar el GTA y dejarlo virgen sólo con SA-MP, reinstalar SA-MP solo<br />
* Borrar todo lo del regedit relacionado a SA-MP<br />
* Deshabilitar totalmente el Firewall de Windows, agregar SA-MP como excepción total<br />
* Crear otro usuario de Windows<br />
* Reiniciar el modem durante 10 minutos varias veces (no cambia nunca la IP)<br />
* Traté de usar otros launchers de SA-MP, tampoco, nada.<br />
* Los VPN me andan muy lageados<br />
<br />
Cuando hago ping a estos servidores con ping x en cmd funciona bien.<br />
<br />
Qué puede estar pasando? Alguna idea?<br />
<br />
Es sólo conmigo, tengo un amigo a 2 casas de distancia que tiene el mismo proveedor de internet y se puede conectar a todos estos. Ya no sé qué hacer.<br />
<br />
<img src="https://i.imgur.com/stv7wmT.jpg" loading="lazy"  alt="[Image: stv7wmT.jpg]" class="mycode_img" />]]></content:encoded>
		</item>
		<item>
			<title><![CDATA[Error: No estás cerca de un basurero/container]]></title>
			<link>https://www.burgershot.gg/showthread.php?tid=1951</link>
			<pubDate>Tue, 27 Apr 2021 06:31:31 +0000</pubDate>
			<dc:creator><![CDATA[<a href="https://www.burgershot.gg/member.php?action=profile&uid=3381">Chessy</a>]]></dc:creator>
			<guid isPermaLink="false">https://www.burgershot.gg/showthread.php?tid=1951</guid>
			<description><![CDATA[(nosé porqué se espacia así ed horrible automáticamente el post).<br />
<br />
Hola, resulta que estoy desarrollando un sistema de basureros, los cuales se puede ver el contenido con un comando llamado /verbasura.<br />
<br />
<br />
<br />
Hace un ratito estaba funcionando bien, no sé si es porque es las 3 de la mañana y tengo brain lagging o el error no es lógico.<br />
<br />
<br />
<br />
Cuestión, ocupo este comando /verbasura al lado del container y me dice, no estás cerca de un container<br />
<br />
<br />
<br />
Me pregunté si el rango de operación del comando era muy corto, le agrandé más, fui a la db, ocupé las coordenadas exactas que se guardaron al ser creado (porque son dinámicos) y ni así.<br />
<br />
<br />
<br />
Este es el comando:<br />
<br />
<br />
<br />
<div class="codeblock"><div class="title">Code:</div><div class="body" dir="ltr"><code>CMD:verbasura(playerid, params[])<br />
<br />
{<br />
<br />
new success;<br />
<br />
<br />
for (new e = 1; e &lt; MAX_CONTAINERS; e++)<br />
<br />
<br />
{<br />
<br />
if(IsPlayerInRangeOfPoint(playerid,5,containerInfo[e][cX], containerInfo[e][cY], containerInfo[e][cZ]))<br />
<br />
{<br />
<br />
<br />
success++;<br />
<br />
if(GetPVarInt(playerid,"ESPOSADO"))<br />
<br />
{<br />
<br />
ErrorM(playerid, "Estás esposado, no puedes hacer esto en este momento.");<br />
<br />
return 1;<br />
}<br />
<br />
MostrarBasura(playerid, e);<br />
<br />
<br />
return 1;<br />
<br />
<br />
}<br />
<br />
<br />
}<br />
<br />
if(!success) ErrorM(playerid, "No estás cerca de un basurero/container.");<br />
<br />
<br />
SetPVarInt(playerid, "caflood", GetTickCount());<br />
<br />
<br />
return 1;<br />
<br />
<br />
}</code></div></div><br />
Me dirás, ah, debe ser porque <br />
<br />
<div class="codeblock"><div class="title">Code:</div><div class="body" dir="ltr"><code>containerInfo[e][cX], containerInfo[e][cY], containerInfo[e][cZ]</code></div></div><br />
Son valores vacíos, tienen un 0. Y no, porque se ocupan para crear el objeto y el label flotante arriba del contenedor... <br />
<br />
¿Puede ser porque la función mostrarbasura genere error (traté de descartarlo con la variable success)? (No hay errores en mysql.log [Está en modo ALL] / error.log / warnings.log / server_log.txt)]]></description>
			<content:encoded><![CDATA[(nosé porqué se espacia así ed horrible automáticamente el post).<br />
<br />
Hola, resulta que estoy desarrollando un sistema de basureros, los cuales se puede ver el contenido con un comando llamado /verbasura.<br />
<br />
<br />
<br />
Hace un ratito estaba funcionando bien, no sé si es porque es las 3 de la mañana y tengo brain lagging o el error no es lógico.<br />
<br />
<br />
<br />
Cuestión, ocupo este comando /verbasura al lado del container y me dice, no estás cerca de un container<br />
<br />
<br />
<br />
Me pregunté si el rango de operación del comando era muy corto, le agrandé más, fui a la db, ocupé las coordenadas exactas que se guardaron al ser creado (porque son dinámicos) y ni así.<br />
<br />
<br />
<br />
Este es el comando:<br />
<br />
<br />
<br />
<div class="codeblock"><div class="title">Code:</div><div class="body" dir="ltr"><code>CMD:verbasura(playerid, params[])<br />
<br />
{<br />
<br />
new success;<br />
<br />
<br />
for (new e = 1; e &lt; MAX_CONTAINERS; e++)<br />
<br />
<br />
{<br />
<br />
if(IsPlayerInRangeOfPoint(playerid,5,containerInfo[e][cX], containerInfo[e][cY], containerInfo[e][cZ]))<br />
<br />
{<br />
<br />
<br />
success++;<br />
<br />
if(GetPVarInt(playerid,"ESPOSADO"))<br />
<br />
{<br />
<br />
ErrorM(playerid, "Estás esposado, no puedes hacer esto en este momento.");<br />
<br />
return 1;<br />
}<br />
<br />
MostrarBasura(playerid, e);<br />
<br />
<br />
return 1;<br />
<br />
<br />
}<br />
<br />
<br />
}<br />
<br />
if(!success) ErrorM(playerid, "No estás cerca de un basurero/container.");<br />
<br />
<br />
SetPVarInt(playerid, "caflood", GetTickCount());<br />
<br />
<br />
return 1;<br />
<br />
<br />
}</code></div></div><br />
Me dirás, ah, debe ser porque <br />
<br />
<div class="codeblock"><div class="title">Code:</div><div class="body" dir="ltr"><code>containerInfo[e][cX], containerInfo[e][cY], containerInfo[e][cZ]</code></div></div><br />
Son valores vacíos, tienen un 0. Y no, porque se ocupan para crear el objeto y el label flotante arriba del contenedor... <br />
<br />
¿Puede ser porque la función mostrarbasura genere error (traté de descartarlo con la variable success)? (No hay errores en mysql.log [Está en modo ALL] / error.log / warnings.log / server_log.txt)]]></content:encoded>
		</item>
		<item>
			<title><![CDATA[ayuda con a_sampdb]]></title>
			<link>https://www.burgershot.gg/showthread.php?tid=1870</link>
			<pubDate>Tue, 13 Apr 2021 04:57:57 +0000</pubDate>
			<dc:creator><![CDATA[<a href="https://www.burgershot.gg/member.php?action=profile&uid=3109">Nikolay_Staggs</a>]]></dc:creator>
			<guid isPermaLink="false">https://www.burgershot.gg/showthread.php?tid=1870</guid>
			<description><![CDATA[Hola amigos estoy haciendo una GameMode desde 0 y estoy haciendo el registro con a_sampdb pero no me guarda los datos solo se crean las Table en la carpeta les paso lo que dise en la carpeta<br />
SQLite format 3   @                                                               -â<br />
  ž ž                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                `tableUSERSUSERSCREATE TABLE `USERS` (`NAME`,`PASS`,`EXP`,`LEVEL_ADMIN`,`SCORE`,`DINERO`)<br />
les paso el GameMode<br />
<br />
<br />
///_______________________________///<br />
<br />
#include &lt;a_samp&gt;<br />
#include &lt;zcmd&gt;<br />
#include &lt;sscanf2&gt;<br />
<br />
#define DIALOGO_REGISTRO          (1)<br />
#define DIALOG_INGRESO            (2)<br />
#define DIALOG_REGISTRO_FINALIZADO (3)<br />
<br />
#define MAX_PASSWORD_INVALIDA 3<br />
<br />
#define BLANCO                                        "{FFFFFF}"<br />
<br />
/*ret_memcpy<br />
strtok*/<br />
<br />
main()<br />
{<br />
print("\n----------------------------------");<br />
print("  Death Match\n");<br />
print("----------------------------------\n");<br />
}<br />
<br />
//_____Enum______//<br />
enum DATA_PLAYER<br />
{<br />
    GAME_IDENTIFICADO,<br />
    GAME_REGISTRADO,<br />
GAME_EXP,<br />
GAME_ADMIN_LEVEL,<br />
GAME_SCORE,<br />
GAME_MONEY,<br />
GAME_PASS[60]<br />
}<br />
new PLAYER_INFO[MAX_PLAYERS][DATA_PLAYER];<br />
//_________News__________//<br />
new GAME_PASSWORD_INCORRECTA[MAX_PLAYERS];<br />
new DB:Database;<br />
<br />
new Float:Spawn_Player[][4] =<br />
{<br />
    {1751.1097,-2106.4529,13.5469,183.1979}, // El-Corona - Outside random house<br />
    {2652.6418,-1989.9175,13.9988,182.7107}, // Random house in willowfield - near playa de seville and stadium<br />
    {2489.5225,-1957.9258,13.5881,2.3440}, // Hotel in willowfield - near cluckin bell<br />
    {2689.5203,-1695.9354,10.0517,39.5312}, // Outside stadium - lots of cars<br />
    {2770.5393,-1628.3069,12.1775,4.9637}, // South in east beach - north of stadium - carparks nearby<br />
    {2807.9282,-1176.8883,25.3805,173.6018}, // North in east beach - near apartments<br />
    {2552.5417,-958.0850,82.6345,280.2542}, // Random house north of Las Colinas<br />
    {2232.1309,-1159.5679,25.8906,103.2939}, // Jefferson motel<br />
    {2388.1003,-1279.8933,25.1291,94.3321}, // House south of pig pen<br />
    {2481.1885,-1536.7186,24.1467,273.4944}, // East LS - near clucking bell and car wash<br />
    {2495.0720,-1687.5278,13.5150,359.6696}, // Outside CJ's house - lots of cars nearby<br />
    {2306.8252,-1675.4340,13.9221,2.6271}, // House in ganton - lots of cars nearby<br />
    {2191.8403,-1455.8251,25.5391,267.9925}, // House in south jefferson - lots of cars nearby<br />
    {1830.1359,-1092.1849,23.8656,94.0113}, // Mulholland intersection carpark<br />
    {2015.3630,-1717.2535,13.5547,93.3655}, // Idlewood house<br />
    {1654.7091,-1656.8516,22.5156,177.9729}, // Right next to PD<br />
    {1219.0851,-1812.8058,16.5938,190.0045}, // Conference Center<br />
    {1508.6849,-1059.0846,25.0625,1.8058}, // Across the street of BANK - lots of cars in intersection carpark<br />
    {1421.0819,-885.3383,50.6531,3.6516}, // Outside house in vinewood<br />
    {1133.8237,-1272.1558,13.5469,192.4113}, // Near hospital<br />
    {1235.2196,-1608.6111,13.5469,181.2655}, // Backalley west of mainstreet<br />
    {590.4648,-1252.2269,18.2116,25.0473}, // Outside "BAnk of San Andreas"<br />
    {842.5260,-1007.7679,28.4185,213.9953}, // North of Graveyard<br />
    {911.9332,-1232.6490,16.9766,5.2999}, // LS Film Studio<br />
    {477.6021,-1496.6207,20.4345,266.9252}, // Rodeo Place<br />
    {255.4621,-1366.3256,53.1094,312.0852}, // Outside propery in richman<br />
    {281.5446,-1261.4562,73.9319,305.0017}, // Another richman property<br />
    {790.1918,-839.8533,60.6328,191.9514}, // Mulholland house<br />
    {1299.1859,-801.4249,84.1406,269.5274}, // Maddoggs<br />
    {1240.3170,-2036.6886,59.9575,276.4659}, // Verdant Bluffs<br />
    {2215.5181,-2627.8174,13.5469,273.7786}, // Ocean docks 1<br />
    {2509.4346,-2637.6543,13.6453,358.3565}, // Ocean Docks spawn 2<br />
    {1435.8024,2662.3647,11.3926,1.1650}, //  Northern train station<br />
    {1457.4762,2773.4868,10.8203,272.2754}, //  Northern golf club<br />
    {1739.6390,2803.0569,14.2735,285.3929}, //  Northern housing estate 1<br />
    {1870.3096,2785.2471,14.2734,42.3102}, //  Northern housing estate 2<br />
    {1959.7142,2754.6863,10.8203,181.4731}, //  Northern house 1<br />
    {2314.2556,2759.4504,10.8203,93.2711}, //  Northern industrial estate 1<br />
    {2216.5674,2715.0334,10.8130,267.6540}, //  Northern industrial estate 2<br />
    {2101.4192,2678.7874,10.8130,92.0607}, //  Northern near railway line<br />
    {1951.1090,2660.3877,10.8203,180.8461}, //  Northern house 2<br />
    {1666.6949,2604.9861,10.8203,179.8495}, //  Northern house 3<br />
    {2808.3367,2421.5107,11.0625,136.2060}, //  Northern shopping centre<br />
    {2633.3203,2349.7061,10.6719,178.7175}, //  V-Rock<br />
    {2606.6348,2161.7490,10.8203,88.7508}, //  South V-Rock<br />
    {2616.5286,2100.6226,10.8158,177.7834}, //  North Ammunation 1<br />
    {2491.8816,2397.9370,10.8203,266.6003}, //  North carpark 1<br />
    {2531.7891,2530.3223,21.8750,91.6686}, //  North carpark 2<br />
    {2340.6677,2530.4324,10.8203,177.8630}, //  North Pizza Stack<br />
    {2097.6855,2491.3313,14.8390,181.8117}, //  Emerald Isle<br />
    {1893.1000,2423.2412,11.1782,269.4385}, //  Souvenir shop<br />
    {1698.9330,2241.8320,10.8203,357.8584}, //  Northern casino<br />
    {1479.4559,2249.0769,11.0234,306.3790}, //  Baseball stadium 1<br />
    {1298.1548,2083.4016,10.8127,256.7034}, //  Baseball stadium 2<br />
    {1117.8785,2304.1514,10.8203,81.5490}, //  North carparks<br />
    {1108.9878,1705.8639,10.8203,0.6785}, //  Dirtring racing 1<br />
    {1423.9780,1034.4188,10.8203,90.9590}, //  Sumo<br />
    {1537.4377,752.0641,11.0234,271.6893}, //  Church<br />
    {1917.9590,702.6984,11.1328,359.2682}, //  Southern housing estate<br />
    {2089.4785,658.0414,11.2707,357.3572}, //  Southern house 1<br />
    {2489.8286,928.3251,10.8280,67.2245}, //  Wedding chapel<br />
    {2697.4717,856.4916,9.8360,267.0983}, //  Southern construction site<br />
    {2845.6104,1288.1444,11.3906,3.6506}, //  Southern train station<br />
    {2437.9370,1293.1442,10.8203,86.3830}, //  Wedding chapel (near Pyramid)<br />
    {2299.5430,1451.4177,10.8203,269.1287}, //  Carpark (near Pyramid)<br />
    {2214.3008,2041.9165,10.8203,268.7626}, //  Central parking lot<br />
    {2005.9174,2152.0835,10.8203,270.1372}, //  Central motel<br />
    {2222.1042,1837.4220,10.8203,88.6461}, //  Clowns Pocket<br />
    {2025.6753,1916.4363,12.3382,272.5852}, //  The Visage<br />
    {2087.9902,1516.5336,10.8203,48.9300}, //  Royal Casino<br />
    {2172.1624,1398.7496,11.0625,91.3783}, //  Auto Bahn<br />
    {2139.1841,987.7975,10.8203,0.2315}, //  Come-a-lot<br />
    {1860.9672,1030.2910,10.8203,271.6988}, //  Behind 4 Dragons<br />
    {1673.2345,1316.1067,10.8203,177.7294}, //  Airport carpark<br />
    {1412.6187,2000.0596,14.7396,271.3568}, //  South baseball stadium houses<br />
    {-2723.4639,-314.8138,7.1839,43.5562},  // golf course spawn<br />
    {-2694.5344,64.5550,4.3359,95.0190},  // in front of a house<br />
    {-2458.2000,134.5419,35.1719,303.9446},  // hotel<br />
    {-2796.6589,219.5733,7.1875,88.8288},  // house<br />
    {-2706.5261,397.7129,4.3672,179.8611},  // park<br />
    {-2866.7683,691.9363,23.4989,286.3060},  // house<br />
    {-2764.9543,785.6434,52.7813,357.6817},  // donut shop<br />
    {-2660.9402,883.2115,79.7738,357.4440},  // house<br />
    {-2861.0796,1047.7109,33.6068,188.2750}, //  parking lot<br />
    {-2629.2009,1383.1367,7.1833,179.7006},  // parking lot at the bridge<br />
    {-2079.6802,1430.0189,7.1016,177.6486},  // pier<br />
    {-1660.2294,1382.6698,9.8047,136.2952}, //  pier 69<br />
    {-1674.1964,430.3246,7.1797,226.1357},  // gas station]<br />
    {-1954.9982,141.8080,27.1747,277.7342},  // train station<br />
    {-1956.1447,287.1091,35.4688,90.4465},  // car shop<br />
    {-1888.1117,615.7245,35.1719,128.4498},  // random<br />
    {-1922.5566,886.8939,35.3359,272.1293},  // random<br />
    {-1983.3458,1117.0645,53.1243,271.2390},  // church<br />
    {-2417.6458,970.1491,45.2969,269.3676},  // gas station<br />
    {-2108.0171,902.8030,76.5792,5.7139},  // house<br />
    {-2097.5664,658.0771,52.3672,270.4487},  // random<br />
    {-2263.6650,393.7423,34.7708,136.4152},  // random<br />
    {-2287.5027,149.1875,35.3125,266.3989},  // baseball parking lot<br />
    {-2039.3571,-97.7205,35.1641,7.4744},  // driving school<br />
    {-1867.5022,-141.9203,11.8984,22.4499},  // factory<br />
    {-1537.8992,116.0441,17.3226,120.8537},  // docks ship<br />
    {-1708.4763,7.0187,3.5489,319.3260},  // docks hangar<br />
    {-1427.0858,-288.9430,14.1484,137.0812},  // airport<br />
    {-2173.0654,-392.7444,35.3359,237.0159},  // stadium<br />
    {-2320.5286,-180.3870,35.3135,179.6980},  // burger shot<br />
    {-2930.0049,487.2518,4.9141,3.8258}  // harbor<br />
};<br />
<br />
public OnGameModeInit()<br />
{<br />
SetGameModeText("Blank Script");<br />
UsePlayerPedAnims();<br />
<br />
for(new x = 0; x &lt; 312; x++)<br />
{<br />
if(x != 74) AddPlayerClass(x, 0.0, 0.0, 0.0, 0.0, -1, -1, -1, -1, -1, -1);<br />
}<br />
<br />
//loaddb();<br />
return 1;<br />
}<br />
<br />
/*stock loaddb()<br />
{<br />
Database = db_open("DM_FREEROAM/User_DM.db");<br />
<br />
db_query(Database,"CREATE TABLE IF NOT EXISTS `USERS` (`NAME`,`PASS`,`EXP`,`LEVEL_ADMIN`,`SCORE`,`DINERO`)");<br />
return 1;<br />
}*/<br />
<br />
public OnGameModeExit()<br />
{<br />
    db_close(Database);<br />
return 1;<br />
}<br />
<br />
public OnPlayerRequestClass(playerid, classid)<br />
{<br />
    SetPlayerPos(playerid, 545.2801, -1746.7690, 19.5009);<br />
    SetPlayerCameraPos(playerid, 547.5287, -1750.2517, 19.6819);<br />
    SetPlayerCameraLookAt(playerid, 545.2801, -1746.7690, 19.5009);<br />
    SetPlayerFacingAngle(playerid, 32.0000);<br />
return 1;<br />
}<br />
<br />
public OnPlayerConnect(playerid)<br />
{<br />
    GAME_PASSWORD_INCORRECTA[playerid] = 0;<br />
    <br />
    new string[250], DB_Query[450], DBResult:Result, field[50];<br />
    <br />
    format(DB_Query, sizeof(DB_Query), "SELECT * FROM `USERS` WHERE `NAME` = '%s' COLLATE NOCASE", NAME_USER(playerid));<br />
    if(db_num_rows(Result))<br />
    {<br />
format(string, sizeof(string), "{CCCCCC}- Bienvenido %s.\n- Escribe tu contraseña para identificarte", NAME_USER(playerid));<br />
  ShowPlayerDialog(playerid, DIALOG_INGRESO, DIALOG_STYLE_PASSWORD, ""#BLANCO"Ingreso", string, "Ingresar", "Salir");<br />
        Result = db_query(Database, DB_Query);<br />
    db_get_field_assoc(Result, "PASS", field, sizeof(field));<br />
    format(PLAYER_INFO[playerid][GAME_PASS], 60, "%s", field);<br />
    }<br />
    else<br />
    {<br />
  format(string, sizeof(string), "{CCCCCC}- Bienvenido %s.\n- Escribe una contraseña para Registrarte", NAME_USER(playerid));<br />
  ShowPlayerDialog(playerid, DIALOGO_REGISTRO, DIALOG_STYLE_PASSWORD, ""#BLANCO"Registrar", string, "Ok", "Salir");<br />
    }<br />
    db_free_result(Result);<br />
return 1;<br />
}<br />
<br />
public OnPlayerDisconnect(playerid, reason)<br />
{<br />
    GuardarDatos(playerid);<br />
return 1;<br />
}<br />
<br />
public OnPlayerSpawn(playerid)<br />
{<br />
if(PLAYER_INFO[playerid][GAME_REGISTRADO] == 1 &amp;&amp; PLAYER_INFO[playerid][GAME_IDENTIFICADO] == 1)<br />
{<br />
new randplay = random(sizeof(Spawn_Player));<br />
    SetPlayerPos(playerid, Spawn_Player[randplay][0], Spawn_Player[randplay][1], Spawn_Player[randplay][2] + (1.0));<br />
  }<br />
return 1;<br />
}<br />
<br />
public OnPlayerRequestSpawn(playerid)<br />
{<br />
if ((!PLAYER_INFO[playerid][GAME_REGISTRADO]) || (!PLAYER_INFO[playerid][GAME_IDENTIFICADO]))<br />
{<br />
SendClientMessage(playerid, -1, "{CCCCCC}[Cuentas]: No puedes spawnear hasta no \"Registrarte\" y \"Ingresar\"");<br />
    }<br />
return 1;<br />
}<br />
<br />
public OnPlayerText(playerid, text[])<br />
{<br />
    if((!PLAYER_INFO[playerid][GAME_REGISTRADO]) || (!PLAYER_INFO[playerid][GAME_IDENTIFICADO]))<br />
    {<br />
  SendClientMessage(playerid, -1, "{CCCCCC}[Cuentas]: No puedes hablar hasta no \"Registrarte\" y \"Ingresar\"");<br />
  return 0;<br />
    }<br />
return 1;<br />
}<br />
<br />
public OnPlayerDeath(playerid, killerid, reason)<br />
{<br />
PLAYER_INFO[killerid][GAME_EXP]++;<br />
PLAYER_INFO[playerid][GAME_SCORE]++;<br />
PLAYER_INFO[playerid][GAME_EXP] --;<br />
return 1;<br />
}<br />
<br />
public OnVehicleSpawn(vehicleid)<br />
{<br />
return 1;<br />
}<br />
<br />
public OnVehicleDeath(vehicleid, killerid)<br />
{<br />
return 1;<br />
}<br />
<br />
public OnPlayerEnterVehicle(playerid, vehicleid, ispassenger)<br />
{<br />
return 1;<br />
}<br />
<br />
public OnPlayerExitVehicle(playerid, vehicleid)<br />
{<br />
return 1;<br />
}<br />
<br />
public OnPlayerStateChange(playerid, newstate, oldstate)<br />
{<br />
return 1;<br />
}<br />
<br />
public OnPlayerEnterCheckpoint(playerid)<br />
{<br />
return 1;<br />
}<br />
<br />
public OnPlayerLeaveCheckpoint(playerid)<br />
{<br />
return 1;<br />
}<br />
<br />
public OnPlayerEnterRaceCheckpoint(playerid)<br />
{<br />
return 1;<br />
}<br />
<br />
public OnPlayerLeaveRaceCheckpoint(playerid)<br />
{<br />
return 1;<br />
}<br />
<br />
public OnRconCommand(cmd[])<br />
{<br />
return 1;<br />
}<br />
<br />
public OnObjectMoved(objectid)<br />
{<br />
return 1;<br />
}<br />
<br />
public OnPlayerObjectMoved(playerid, objectid)<br />
{<br />
return 1;<br />
}<br />
<br />
public OnPlayerPickUpPickup(playerid, pickupid)<br />
{<br />
return 1;<br />
}<br />
<br />
public OnVehicleMod(playerid, vehicleid, componentid)<br />
{<br />
return 1;<br />
}<br />
<br />
public OnVehiclePaintjob(playerid, vehicleid, paintjobid)<br />
{<br />
return 1;<br />
}<br />
<br />
public OnVehicleRespray(playerid, vehicleid, color1, color2)<br />
{<br />
return 1;<br />
}<br />
<br />
public OnPlayerSelectedMenuRow(playerid, row)<br />
{<br />
return 1;<br />
}<br />
<br />
public OnPlayerExitedMenu(playerid)<br />
{<br />
return 1;<br />
}<br />
<br />
public OnPlayerInteriorChange(playerid, newinteriorid, oldinteriorid)<br />
{<br />
return 1;<br />
}<br />
<br />
public OnPlayerKeyStateChange(playerid, newkeys, oldkeys)<br />
{<br />
return 1;<br />
}<br />
<br />
public OnRconLoginAttempt(ip[], password[], success)<br />
{<br />
return 1;<br />
}<br />
<br />
public OnPlayerUpdate(playerid)<br />
{<br />
return 1;<br />
}<br />
<br />
public OnPlayerStreamIn(playerid, forplayerid)<br />
{<br />
return 1;<br />
}<br />
<br />
public OnPlayerStreamOut(playerid, forplayerid)<br />
{<br />
return 1;<br />
}<br />
<br />
public OnVehicleStreamIn(vehicleid, forplayerid)<br />
{<br />
return 1;<br />
}<br />
<br />
public OnVehicleStreamOut(vehicleid, forplayerid)<br />
{<br />
return 1;<br />
}<br />
<br />
public OnDialogResponse(playerid, dialogid, response, listitem, inputtext[])<br />
{<br />
    new string[250];<br />
    if(dialogid == DIALOGO_REGISTRO)<br />
    {<br />
new DB_Query[450];<br />
        if(!response) return Kick(playerid);<br />
        {<br />
            if(strlen(inputtext) &lt;= 4)<br />
            {<br />
                format(string, sizeof(string) ,"{CCCCCC}- Por favor %s.\n- Tu contraseña debe tener mas de 4 a 16 digitos.", NAME_USER(playerid));<br />
                ShowPlayerDialog(playerid, DIALOGO_REGISTRO, DIALOG_STYLE_INPUT, "Registro", string, "Registrar", "Salir");<br />
                PlayerPlaySound(playerid, 1085, 0.0, 0.0, 0.0);<br />
                return 1;<br />
            }<br />
                <br />
            format(DB_Query, sizeof(DB_Query), "INSERT INTO `USERS` (`NAME`, `PASS`, `EXP`, `LEVEL_ADMIN`, `SCORE`, `DINERO`) VALUES('%s','%s','%s', '%d', '%d', '%d', '%d')",<br />
<br />
            NAME_USER(playerid),<br />
            inputtext,<br />
            PLAYER_INFO[playerid][GAME_EXP],<br />
            PLAYER_INFO[playerid][GAME_ADMIN_LEVEL],<br />
            PLAYER_INFO[playerid][GAME_SCORE],<br />
            PLAYER_INFO[playerid][GAME_MONEY]);<br />
            GuardarDatos(playerid);<br />
<br />
            SetPlayerScore(playerid, PLAYER_INFO[playerid][GAME_SCORE]);<br />
            GivePlayerMoney(playerid, PLAYER_INFO[playerid][GAME_MONEY]);<br />
            <br />
            PLAYER_INFO[playerid][GAME_IDENTIFICADO] = 1;<br />
            PLAYER_INFO[playerid][GAME_REGISTRADO] = 1;<br />
            <br />
            format(string, sizeof (string), "{CCCCCC}- Fuiste registrado en nuestra base de datos %s.\n- Tu contraseña es: %s", NAME_USER(playerid), inputtext);<br />
            ShowPlayerDialog(playerid, DIALOG_REGISTRO_FINALIZADO, DIALOG_STYLE_MSGBOX, "Registro terminado", string, "Aceptar", "");<br />
        }<br />
    }<br />
    else if(dialogid == DIALOG_INGRESO)<br />
    {<br />
new DB_Query[450], DBResult: Result;<br />
        if(!response) return Kick(playerid);<br />
        {<br />
            if(strlen(inputtext) == 0)<br />
            {<br />
                format(string, sizeof(string) ,"{CCCCCC}- Por favor %s.\n- No introduciste ningun digito, escribelo nuevamente", NAME_USER(playerid));<br />
                ShowPlayerDialog(playerid, DIALOG_INGRESO, DIALOG_STYLE_INPUT, "Ingreso", string, "Ingresar", "Salir");<br />
                PlayerPlaySound(playerid, 1085, 0.0, 0.0, 0.0);<br />
                return 1;<br />
            }<br />
            <br />
            if(!strcmp(inputtext, PLAYER_INFO[playerid][GAME_PASS]))<br />
            {<br />
                format(DB_Query, sizeof(DB_Query), "SELECT * FROM `USERS` WHERE `NAME` = '%q' COLLATE NOCASE", NAME_USER(playerid));<br />
                Result = db_query(Database, DB_Query);<br />
                if(db_num_rows(Result))<br />
                {<br />
                    PLAYER_INFO[playerid][GAME_EXP] = db_get_field_assoc_int(Result, "EXP");<br />
                    PLAYER_INFO[playerid][GAME_ADMIN_LEVEL] = db_get_field_assoc_int(Result, "LEVEL_ADMIN");<br />
                    PLAYER_INFO[playerid][GAME_SCORE] = db_get_field_assoc_int(Result, "SCORE");<br />
                    PLAYER_INFO[playerid][GAME_MONEY] = db_get_field_assoc_int(Result, "DINERO");<br />
                }<br />
                else<br />
                {<br />
                    GAME_PASSWORD_INCORRECTA[playerid]++;<br />
                    format(string, sizeof(string), "{CCCCCC}- Por favor %s.\n- Ingresa una contraseña correcta", NAME_USER(playerid));<br />
                    ShowPlayerDialog(playerid, DIALOG_INGRESO, DIALOG_STYLE_PASSWORD, "{6F0000}Error", string, "Ok", "Salir");<br />
<br />
                    if(GAME_PASSWORD_INCORRECTA[playerid] == MAX_PASSWORD_INVALIDA)<br />
                    {<br />
                        format(string,sizeof(string),"{6F0000}[Cuentas]: %s fue expulsado (Max intentos de ingresar(Contraseña invalida))", NAME_USER(playerid));<br />
                        SendClientMessageToAll(-1, string);<br />
                        SendClientMessage(playerid, -1, "** Haz puesto varias contraseñas incorrectas has sido kickeado del servidor por seguridad.");<br />
                        Kick(playerid);<br />
                        PlayerPlaySound(playerid, 1085, 0.0, 0.0, 0.0);<br />
                    }<br />
    }<br />
            }<br />
        }<br />
    }<br />
    return 1;<br />
}<br />
<br />
public OnPlayerClickPlayer(playerid, clickedplayerid, source)<br />
{<br />
return 1;<br />
}<br />
<br />
//__________Comandos_Usar______________//<br />
CMD:duda(playerid, params[])<br />
{<br />
new str[50], mensaje[128];<br />
if(sscanf(params, "s[128]", mensaje)) return SendClientMessage(playerid, -1, "USA [/duda] [tu duda]");<br />
if(PLAYER_INFO[playerid][GAME_ADMIN_LEVEL]) format(str, sizeof(str), "{A300A0}Admin [%s] {FFFFFF}[%s]", NAME_USER(playerid), mensaje);<br />
else format(str, sizeof(str), "Duda [%s %d] [%s]", NAME_USER(playerid), playerid, mensaje);<br />
SendClientMessageToAll(0x008D6EFF, str);<br />
return 1;<br />
}<br />
<br />
//________Comandos_Admin_________//<br />
CMD:dameadmin(playerid, params[])<br />
{<br />
if(IsPlayerAdmin(playerid))<br />
{<br />
PLAYER_INFO[playerid][GAME_ADMIN_LEVEL] = 1;<br />
SendClientMessage(playerid, -1, "Ok");<br />
GuardarDatos(playerid);<br />
}<br />
else<br />
{<br />
        SendClientMessage(playerid, -1, "No eres admin rcon");<br />
}<br />
return 1;<br />
}<br />
//_____Info_____//<br />
stock NAME_USER(playerid)<br />
{<br />
new User_Name[MAX_PLAYER_NAME];<br />
GetPlayerName(playerid, User_Name,  sizeof(User_Name));<br />
return User_Name;<br />
}<br />
<br />
stock GuardarDatos(playerid)<br />
{<br />
new DB_Query[450];<br />
format(DB_Query, sizeof(DB_Query), "UPDATE `USERS` SET `EXP` = '%d', `LEVEL_ADMIN` = '%d', `SCORE` = '%d', `DINERO` = '%d' WHERE `NAME` = '%q' COLLATE NOCASE",<br />
PLAYER_INFO[playerid][GAME_EXP],<br />
PLAYER_INFO[playerid][GAME_ADMIN_LEVEL],<br />
PLAYER_INFO[playerid][GAME_SCORE],<br />
PLAYER_INFO[playerid][GAME_MONEY],<br />
NAME_USER(playerid));<br />
db_query(Database, DB_Query);<br />
return 1;<br />
}<br />
<br />
//______Nuevos_Public________//]]></description>
			<content:encoded><![CDATA[Hola amigos estoy haciendo una GameMode desde 0 y estoy haciendo el registro con a_sampdb pero no me guarda los datos solo se crean las Table en la carpeta les paso lo que dise en la carpeta<br />
SQLite format 3   @                                                               -â<br />
  ž ž                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                `tableUSERSUSERSCREATE TABLE `USERS` (`NAME`,`PASS`,`EXP`,`LEVEL_ADMIN`,`SCORE`,`DINERO`)<br />
les paso el GameMode<br />
<br />
<br />
///_______________________________///<br />
<br />
#include &lt;a_samp&gt;<br />
#include &lt;zcmd&gt;<br />
#include &lt;sscanf2&gt;<br />
<br />
#define DIALOGO_REGISTRO          (1)<br />
#define DIALOG_INGRESO            (2)<br />
#define DIALOG_REGISTRO_FINALIZADO (3)<br />
<br />
#define MAX_PASSWORD_INVALIDA 3<br />
<br />
#define BLANCO                                        "{FFFFFF}"<br />
<br />
/*ret_memcpy<br />
strtok*/<br />
<br />
main()<br />
{<br />
print("\n----------------------------------");<br />
print("  Death Match\n");<br />
print("----------------------------------\n");<br />
}<br />
<br />
//_____Enum______//<br />
enum DATA_PLAYER<br />
{<br />
    GAME_IDENTIFICADO,<br />
    GAME_REGISTRADO,<br />
GAME_EXP,<br />
GAME_ADMIN_LEVEL,<br />
GAME_SCORE,<br />
GAME_MONEY,<br />
GAME_PASS[60]<br />
}<br />
new PLAYER_INFO[MAX_PLAYERS][DATA_PLAYER];<br />
//_________News__________//<br />
new GAME_PASSWORD_INCORRECTA[MAX_PLAYERS];<br />
new DB:Database;<br />
<br />
new Float:Spawn_Player[][4] =<br />
{<br />
    {1751.1097,-2106.4529,13.5469,183.1979}, // El-Corona - Outside random house<br />
    {2652.6418,-1989.9175,13.9988,182.7107}, // Random house in willowfield - near playa de seville and stadium<br />
    {2489.5225,-1957.9258,13.5881,2.3440}, // Hotel in willowfield - near cluckin bell<br />
    {2689.5203,-1695.9354,10.0517,39.5312}, // Outside stadium - lots of cars<br />
    {2770.5393,-1628.3069,12.1775,4.9637}, // South in east beach - north of stadium - carparks nearby<br />
    {2807.9282,-1176.8883,25.3805,173.6018}, // North in east beach - near apartments<br />
    {2552.5417,-958.0850,82.6345,280.2542}, // Random house north of Las Colinas<br />
    {2232.1309,-1159.5679,25.8906,103.2939}, // Jefferson motel<br />
    {2388.1003,-1279.8933,25.1291,94.3321}, // House south of pig pen<br />
    {2481.1885,-1536.7186,24.1467,273.4944}, // East LS - near clucking bell and car wash<br />
    {2495.0720,-1687.5278,13.5150,359.6696}, // Outside CJ's house - lots of cars nearby<br />
    {2306.8252,-1675.4340,13.9221,2.6271}, // House in ganton - lots of cars nearby<br />
    {2191.8403,-1455.8251,25.5391,267.9925}, // House in south jefferson - lots of cars nearby<br />
    {1830.1359,-1092.1849,23.8656,94.0113}, // Mulholland intersection carpark<br />
    {2015.3630,-1717.2535,13.5547,93.3655}, // Idlewood house<br />
    {1654.7091,-1656.8516,22.5156,177.9729}, // Right next to PD<br />
    {1219.0851,-1812.8058,16.5938,190.0045}, // Conference Center<br />
    {1508.6849,-1059.0846,25.0625,1.8058}, // Across the street of BANK - lots of cars in intersection carpark<br />
    {1421.0819,-885.3383,50.6531,3.6516}, // Outside house in vinewood<br />
    {1133.8237,-1272.1558,13.5469,192.4113}, // Near hospital<br />
    {1235.2196,-1608.6111,13.5469,181.2655}, // Backalley west of mainstreet<br />
    {590.4648,-1252.2269,18.2116,25.0473}, // Outside "BAnk of San Andreas"<br />
    {842.5260,-1007.7679,28.4185,213.9953}, // North of Graveyard<br />
    {911.9332,-1232.6490,16.9766,5.2999}, // LS Film Studio<br />
    {477.6021,-1496.6207,20.4345,266.9252}, // Rodeo Place<br />
    {255.4621,-1366.3256,53.1094,312.0852}, // Outside propery in richman<br />
    {281.5446,-1261.4562,73.9319,305.0017}, // Another richman property<br />
    {790.1918,-839.8533,60.6328,191.9514}, // Mulholland house<br />
    {1299.1859,-801.4249,84.1406,269.5274}, // Maddoggs<br />
    {1240.3170,-2036.6886,59.9575,276.4659}, // Verdant Bluffs<br />
    {2215.5181,-2627.8174,13.5469,273.7786}, // Ocean docks 1<br />
    {2509.4346,-2637.6543,13.6453,358.3565}, // Ocean Docks spawn 2<br />
    {1435.8024,2662.3647,11.3926,1.1650}, //  Northern train station<br />
    {1457.4762,2773.4868,10.8203,272.2754}, //  Northern golf club<br />
    {1739.6390,2803.0569,14.2735,285.3929}, //  Northern housing estate 1<br />
    {1870.3096,2785.2471,14.2734,42.3102}, //  Northern housing estate 2<br />
    {1959.7142,2754.6863,10.8203,181.4731}, //  Northern house 1<br />
    {2314.2556,2759.4504,10.8203,93.2711}, //  Northern industrial estate 1<br />
    {2216.5674,2715.0334,10.8130,267.6540}, //  Northern industrial estate 2<br />
    {2101.4192,2678.7874,10.8130,92.0607}, //  Northern near railway line<br />
    {1951.1090,2660.3877,10.8203,180.8461}, //  Northern house 2<br />
    {1666.6949,2604.9861,10.8203,179.8495}, //  Northern house 3<br />
    {2808.3367,2421.5107,11.0625,136.2060}, //  Northern shopping centre<br />
    {2633.3203,2349.7061,10.6719,178.7175}, //  V-Rock<br />
    {2606.6348,2161.7490,10.8203,88.7508}, //  South V-Rock<br />
    {2616.5286,2100.6226,10.8158,177.7834}, //  North Ammunation 1<br />
    {2491.8816,2397.9370,10.8203,266.6003}, //  North carpark 1<br />
    {2531.7891,2530.3223,21.8750,91.6686}, //  North carpark 2<br />
    {2340.6677,2530.4324,10.8203,177.8630}, //  North Pizza Stack<br />
    {2097.6855,2491.3313,14.8390,181.8117}, //  Emerald Isle<br />
    {1893.1000,2423.2412,11.1782,269.4385}, //  Souvenir shop<br />
    {1698.9330,2241.8320,10.8203,357.8584}, //  Northern casino<br />
    {1479.4559,2249.0769,11.0234,306.3790}, //  Baseball stadium 1<br />
    {1298.1548,2083.4016,10.8127,256.7034}, //  Baseball stadium 2<br />
    {1117.8785,2304.1514,10.8203,81.5490}, //  North carparks<br />
    {1108.9878,1705.8639,10.8203,0.6785}, //  Dirtring racing 1<br />
    {1423.9780,1034.4188,10.8203,90.9590}, //  Sumo<br />
    {1537.4377,752.0641,11.0234,271.6893}, //  Church<br />
    {1917.9590,702.6984,11.1328,359.2682}, //  Southern housing estate<br />
    {2089.4785,658.0414,11.2707,357.3572}, //  Southern house 1<br />
    {2489.8286,928.3251,10.8280,67.2245}, //  Wedding chapel<br />
    {2697.4717,856.4916,9.8360,267.0983}, //  Southern construction site<br />
    {2845.6104,1288.1444,11.3906,3.6506}, //  Southern train station<br />
    {2437.9370,1293.1442,10.8203,86.3830}, //  Wedding chapel (near Pyramid)<br />
    {2299.5430,1451.4177,10.8203,269.1287}, //  Carpark (near Pyramid)<br />
    {2214.3008,2041.9165,10.8203,268.7626}, //  Central parking lot<br />
    {2005.9174,2152.0835,10.8203,270.1372}, //  Central motel<br />
    {2222.1042,1837.4220,10.8203,88.6461}, //  Clowns Pocket<br />
    {2025.6753,1916.4363,12.3382,272.5852}, //  The Visage<br />
    {2087.9902,1516.5336,10.8203,48.9300}, //  Royal Casino<br />
    {2172.1624,1398.7496,11.0625,91.3783}, //  Auto Bahn<br />
    {2139.1841,987.7975,10.8203,0.2315}, //  Come-a-lot<br />
    {1860.9672,1030.2910,10.8203,271.6988}, //  Behind 4 Dragons<br />
    {1673.2345,1316.1067,10.8203,177.7294}, //  Airport carpark<br />
    {1412.6187,2000.0596,14.7396,271.3568}, //  South baseball stadium houses<br />
    {-2723.4639,-314.8138,7.1839,43.5562},  // golf course spawn<br />
    {-2694.5344,64.5550,4.3359,95.0190},  // in front of a house<br />
    {-2458.2000,134.5419,35.1719,303.9446},  // hotel<br />
    {-2796.6589,219.5733,7.1875,88.8288},  // house<br />
    {-2706.5261,397.7129,4.3672,179.8611},  // park<br />
    {-2866.7683,691.9363,23.4989,286.3060},  // house<br />
    {-2764.9543,785.6434,52.7813,357.6817},  // donut shop<br />
    {-2660.9402,883.2115,79.7738,357.4440},  // house<br />
    {-2861.0796,1047.7109,33.6068,188.2750}, //  parking lot<br />
    {-2629.2009,1383.1367,7.1833,179.7006},  // parking lot at the bridge<br />
    {-2079.6802,1430.0189,7.1016,177.6486},  // pier<br />
    {-1660.2294,1382.6698,9.8047,136.2952}, //  pier 69<br />
    {-1674.1964,430.3246,7.1797,226.1357},  // gas station]<br />
    {-1954.9982,141.8080,27.1747,277.7342},  // train station<br />
    {-1956.1447,287.1091,35.4688,90.4465},  // car shop<br />
    {-1888.1117,615.7245,35.1719,128.4498},  // random<br />
    {-1922.5566,886.8939,35.3359,272.1293},  // random<br />
    {-1983.3458,1117.0645,53.1243,271.2390},  // church<br />
    {-2417.6458,970.1491,45.2969,269.3676},  // gas station<br />
    {-2108.0171,902.8030,76.5792,5.7139},  // house<br />
    {-2097.5664,658.0771,52.3672,270.4487},  // random<br />
    {-2263.6650,393.7423,34.7708,136.4152},  // random<br />
    {-2287.5027,149.1875,35.3125,266.3989},  // baseball parking lot<br />
    {-2039.3571,-97.7205,35.1641,7.4744},  // driving school<br />
    {-1867.5022,-141.9203,11.8984,22.4499},  // factory<br />
    {-1537.8992,116.0441,17.3226,120.8537},  // docks ship<br />
    {-1708.4763,7.0187,3.5489,319.3260},  // docks hangar<br />
    {-1427.0858,-288.9430,14.1484,137.0812},  // airport<br />
    {-2173.0654,-392.7444,35.3359,237.0159},  // stadium<br />
    {-2320.5286,-180.3870,35.3135,179.6980},  // burger shot<br />
    {-2930.0049,487.2518,4.9141,3.8258}  // harbor<br />
};<br />
<br />
public OnGameModeInit()<br />
{<br />
SetGameModeText("Blank Script");<br />
UsePlayerPedAnims();<br />
<br />
for(new x = 0; x &lt; 312; x++)<br />
{<br />
if(x != 74) AddPlayerClass(x, 0.0, 0.0, 0.0, 0.0, -1, -1, -1, -1, -1, -1);<br />
}<br />
<br />
//loaddb();<br />
return 1;<br />
}<br />
<br />
/*stock loaddb()<br />
{<br />
Database = db_open("DM_FREEROAM/User_DM.db");<br />
<br />
db_query(Database,"CREATE TABLE IF NOT EXISTS `USERS` (`NAME`,`PASS`,`EXP`,`LEVEL_ADMIN`,`SCORE`,`DINERO`)");<br />
return 1;<br />
}*/<br />
<br />
public OnGameModeExit()<br />
{<br />
    db_close(Database);<br />
return 1;<br />
}<br />
<br />
public OnPlayerRequestClass(playerid, classid)<br />
{<br />
    SetPlayerPos(playerid, 545.2801, -1746.7690, 19.5009);<br />
    SetPlayerCameraPos(playerid, 547.5287, -1750.2517, 19.6819);<br />
    SetPlayerCameraLookAt(playerid, 545.2801, -1746.7690, 19.5009);<br />
    SetPlayerFacingAngle(playerid, 32.0000);<br />
return 1;<br />
}<br />
<br />
public OnPlayerConnect(playerid)<br />
{<br />
    GAME_PASSWORD_INCORRECTA[playerid] = 0;<br />
    <br />
    new string[250], DB_Query[450], DBResult:Result, field[50];<br />
    <br />
    format(DB_Query, sizeof(DB_Query), "SELECT * FROM `USERS` WHERE `NAME` = '%s' COLLATE NOCASE", NAME_USER(playerid));<br />
    if(db_num_rows(Result))<br />
    {<br />
format(string, sizeof(string), "{CCCCCC}- Bienvenido %s.\n- Escribe tu contraseña para identificarte", NAME_USER(playerid));<br />
  ShowPlayerDialog(playerid, DIALOG_INGRESO, DIALOG_STYLE_PASSWORD, ""#BLANCO"Ingreso", string, "Ingresar", "Salir");<br />
        Result = db_query(Database, DB_Query);<br />
    db_get_field_assoc(Result, "PASS", field, sizeof(field));<br />
    format(PLAYER_INFO[playerid][GAME_PASS], 60, "%s", field);<br />
    }<br />
    else<br />
    {<br />
  format(string, sizeof(string), "{CCCCCC}- Bienvenido %s.\n- Escribe una contraseña para Registrarte", NAME_USER(playerid));<br />
  ShowPlayerDialog(playerid, DIALOGO_REGISTRO, DIALOG_STYLE_PASSWORD, ""#BLANCO"Registrar", string, "Ok", "Salir");<br />
    }<br />
    db_free_result(Result);<br />
return 1;<br />
}<br />
<br />
public OnPlayerDisconnect(playerid, reason)<br />
{<br />
    GuardarDatos(playerid);<br />
return 1;<br />
}<br />
<br />
public OnPlayerSpawn(playerid)<br />
{<br />
if(PLAYER_INFO[playerid][GAME_REGISTRADO] == 1 &amp;&amp; PLAYER_INFO[playerid][GAME_IDENTIFICADO] == 1)<br />
{<br />
new randplay = random(sizeof(Spawn_Player));<br />
    SetPlayerPos(playerid, Spawn_Player[randplay][0], Spawn_Player[randplay][1], Spawn_Player[randplay][2] + (1.0));<br />
  }<br />
return 1;<br />
}<br />
<br />
public OnPlayerRequestSpawn(playerid)<br />
{<br />
if ((!PLAYER_INFO[playerid][GAME_REGISTRADO]) || (!PLAYER_INFO[playerid][GAME_IDENTIFICADO]))<br />
{<br />
SendClientMessage(playerid, -1, "{CCCCCC}[Cuentas]: No puedes spawnear hasta no \"Registrarte\" y \"Ingresar\"");<br />
    }<br />
return 1;<br />
}<br />
<br />
public OnPlayerText(playerid, text[])<br />
{<br />
    if((!PLAYER_INFO[playerid][GAME_REGISTRADO]) || (!PLAYER_INFO[playerid][GAME_IDENTIFICADO]))<br />
    {<br />
  SendClientMessage(playerid, -1, "{CCCCCC}[Cuentas]: No puedes hablar hasta no \"Registrarte\" y \"Ingresar\"");<br />
  return 0;<br />
    }<br />
return 1;<br />
}<br />
<br />
public OnPlayerDeath(playerid, killerid, reason)<br />
{<br />
PLAYER_INFO[killerid][GAME_EXP]++;<br />
PLAYER_INFO[playerid][GAME_SCORE]++;<br />
PLAYER_INFO[playerid][GAME_EXP] --;<br />
return 1;<br />
}<br />
<br />
public OnVehicleSpawn(vehicleid)<br />
{<br />
return 1;<br />
}<br />
<br />
public OnVehicleDeath(vehicleid, killerid)<br />
{<br />
return 1;<br />
}<br />
<br />
public OnPlayerEnterVehicle(playerid, vehicleid, ispassenger)<br />
{<br />
return 1;<br />
}<br />
<br />
public OnPlayerExitVehicle(playerid, vehicleid)<br />
{<br />
return 1;<br />
}<br />
<br />
public OnPlayerStateChange(playerid, newstate, oldstate)<br />
{<br />
return 1;<br />
}<br />
<br />
public OnPlayerEnterCheckpoint(playerid)<br />
{<br />
return 1;<br />
}<br />
<br />
public OnPlayerLeaveCheckpoint(playerid)<br />
{<br />
return 1;<br />
}<br />
<br />
public OnPlayerEnterRaceCheckpoint(playerid)<br />
{<br />
return 1;<br />
}<br />
<br />
public OnPlayerLeaveRaceCheckpoint(playerid)<br />
{<br />
return 1;<br />
}<br />
<br />
public OnRconCommand(cmd[])<br />
{<br />
return 1;<br />
}<br />
<br />
public OnObjectMoved(objectid)<br />
{<br />
return 1;<br />
}<br />
<br />
public OnPlayerObjectMoved(playerid, objectid)<br />
{<br />
return 1;<br />
}<br />
<br />
public OnPlayerPickUpPickup(playerid, pickupid)<br />
{<br />
return 1;<br />
}<br />
<br />
public OnVehicleMod(playerid, vehicleid, componentid)<br />
{<br />
return 1;<br />
}<br />
<br />
public OnVehiclePaintjob(playerid, vehicleid, paintjobid)<br />
{<br />
return 1;<br />
}<br />
<br />
public OnVehicleRespray(playerid, vehicleid, color1, color2)<br />
{<br />
return 1;<br />
}<br />
<br />
public OnPlayerSelectedMenuRow(playerid, row)<br />
{<br />
return 1;<br />
}<br />
<br />
public OnPlayerExitedMenu(playerid)<br />
{<br />
return 1;<br />
}<br />
<br />
public OnPlayerInteriorChange(playerid, newinteriorid, oldinteriorid)<br />
{<br />
return 1;<br />
}<br />
<br />
public OnPlayerKeyStateChange(playerid, newkeys, oldkeys)<br />
{<br />
return 1;<br />
}<br />
<br />
public OnRconLoginAttempt(ip[], password[], success)<br />
{<br />
return 1;<br />
}<br />
<br />
public OnPlayerUpdate(playerid)<br />
{<br />
return 1;<br />
}<br />
<br />
public OnPlayerStreamIn(playerid, forplayerid)<br />
{<br />
return 1;<br />
}<br />
<br />
public OnPlayerStreamOut(playerid, forplayerid)<br />
{<br />
return 1;<br />
}<br />
<br />
public OnVehicleStreamIn(vehicleid, forplayerid)<br />
{<br />
return 1;<br />
}<br />
<br />
public OnVehicleStreamOut(vehicleid, forplayerid)<br />
{<br />
return 1;<br />
}<br />
<br />
public OnDialogResponse(playerid, dialogid, response, listitem, inputtext[])<br />
{<br />
    new string[250];<br />
    if(dialogid == DIALOGO_REGISTRO)<br />
    {<br />
new DB_Query[450];<br />
        if(!response) return Kick(playerid);<br />
        {<br />
            if(strlen(inputtext) &lt;= 4)<br />
            {<br />
                format(string, sizeof(string) ,"{CCCCCC}- Por favor %s.\n- Tu contraseña debe tener mas de 4 a 16 digitos.", NAME_USER(playerid));<br />
                ShowPlayerDialog(playerid, DIALOGO_REGISTRO, DIALOG_STYLE_INPUT, "Registro", string, "Registrar", "Salir");<br />
                PlayerPlaySound(playerid, 1085, 0.0, 0.0, 0.0);<br />
                return 1;<br />
            }<br />
                <br />
            format(DB_Query, sizeof(DB_Query), "INSERT INTO `USERS` (`NAME`, `PASS`, `EXP`, `LEVEL_ADMIN`, `SCORE`, `DINERO`) VALUES('%s','%s','%s', '%d', '%d', '%d', '%d')",<br />
<br />
            NAME_USER(playerid),<br />
            inputtext,<br />
            PLAYER_INFO[playerid][GAME_EXP],<br />
            PLAYER_INFO[playerid][GAME_ADMIN_LEVEL],<br />
            PLAYER_INFO[playerid][GAME_SCORE],<br />
            PLAYER_INFO[playerid][GAME_MONEY]);<br />
            GuardarDatos(playerid);<br />
<br />
            SetPlayerScore(playerid, PLAYER_INFO[playerid][GAME_SCORE]);<br />
            GivePlayerMoney(playerid, PLAYER_INFO[playerid][GAME_MONEY]);<br />
            <br />
            PLAYER_INFO[playerid][GAME_IDENTIFICADO] = 1;<br />
            PLAYER_INFO[playerid][GAME_REGISTRADO] = 1;<br />
            <br />
            format(string, sizeof (string), "{CCCCCC}- Fuiste registrado en nuestra base de datos %s.\n- Tu contraseña es: %s", NAME_USER(playerid), inputtext);<br />
            ShowPlayerDialog(playerid, DIALOG_REGISTRO_FINALIZADO, DIALOG_STYLE_MSGBOX, "Registro terminado", string, "Aceptar", "");<br />
        }<br />
    }<br />
    else if(dialogid == DIALOG_INGRESO)<br />
    {<br />
new DB_Query[450], DBResult: Result;<br />
        if(!response) return Kick(playerid);<br />
        {<br />
            if(strlen(inputtext) == 0)<br />
            {<br />
                format(string, sizeof(string) ,"{CCCCCC}- Por favor %s.\n- No introduciste ningun digito, escribelo nuevamente", NAME_USER(playerid));<br />
                ShowPlayerDialog(playerid, DIALOG_INGRESO, DIALOG_STYLE_INPUT, "Ingreso", string, "Ingresar", "Salir");<br />
                PlayerPlaySound(playerid, 1085, 0.0, 0.0, 0.0);<br />
                return 1;<br />
            }<br />
            <br />
            if(!strcmp(inputtext, PLAYER_INFO[playerid][GAME_PASS]))<br />
            {<br />
                format(DB_Query, sizeof(DB_Query), "SELECT * FROM `USERS` WHERE `NAME` = '%q' COLLATE NOCASE", NAME_USER(playerid));<br />
                Result = db_query(Database, DB_Query);<br />
                if(db_num_rows(Result))<br />
                {<br />
                    PLAYER_INFO[playerid][GAME_EXP] = db_get_field_assoc_int(Result, "EXP");<br />
                    PLAYER_INFO[playerid][GAME_ADMIN_LEVEL] = db_get_field_assoc_int(Result, "LEVEL_ADMIN");<br />
                    PLAYER_INFO[playerid][GAME_SCORE] = db_get_field_assoc_int(Result, "SCORE");<br />
                    PLAYER_INFO[playerid][GAME_MONEY] = db_get_field_assoc_int(Result, "DINERO");<br />
                }<br />
                else<br />
                {<br />
                    GAME_PASSWORD_INCORRECTA[playerid]++;<br />
                    format(string, sizeof(string), "{CCCCCC}- Por favor %s.\n- Ingresa una contraseña correcta", NAME_USER(playerid));<br />
                    ShowPlayerDialog(playerid, DIALOG_INGRESO, DIALOG_STYLE_PASSWORD, "{6F0000}Error", string, "Ok", "Salir");<br />
<br />
                    if(GAME_PASSWORD_INCORRECTA[playerid] == MAX_PASSWORD_INVALIDA)<br />
                    {<br />
                        format(string,sizeof(string),"{6F0000}[Cuentas]: %s fue expulsado (Max intentos de ingresar(Contraseña invalida))", NAME_USER(playerid));<br />
                        SendClientMessageToAll(-1, string);<br />
                        SendClientMessage(playerid, -1, "** Haz puesto varias contraseñas incorrectas has sido kickeado del servidor por seguridad.");<br />
                        Kick(playerid);<br />
                        PlayerPlaySound(playerid, 1085, 0.0, 0.0, 0.0);<br />
                    }<br />
    }<br />
            }<br />
        }<br />
    }<br />
    return 1;<br />
}<br />
<br />
public OnPlayerClickPlayer(playerid, clickedplayerid, source)<br />
{<br />
return 1;<br />
}<br />
<br />
//__________Comandos_Usar______________//<br />
CMD:duda(playerid, params[])<br />
{<br />
new str[50], mensaje[128];<br />
if(sscanf(params, "s[128]", mensaje)) return SendClientMessage(playerid, -1, "USA [/duda] [tu duda]");<br />
if(PLAYER_INFO[playerid][GAME_ADMIN_LEVEL]) format(str, sizeof(str), "{A300A0}Admin [%s] {FFFFFF}[%s]", NAME_USER(playerid), mensaje);<br />
else format(str, sizeof(str), "Duda [%s %d] [%s]", NAME_USER(playerid), playerid, mensaje);<br />
SendClientMessageToAll(0x008D6EFF, str);<br />
return 1;<br />
}<br />
<br />
//________Comandos_Admin_________//<br />
CMD:dameadmin(playerid, params[])<br />
{<br />
if(IsPlayerAdmin(playerid))<br />
{<br />
PLAYER_INFO[playerid][GAME_ADMIN_LEVEL] = 1;<br />
SendClientMessage(playerid, -1, "Ok");<br />
GuardarDatos(playerid);<br />
}<br />
else<br />
{<br />
        SendClientMessage(playerid, -1, "No eres admin rcon");<br />
}<br />
return 1;<br />
}<br />
//_____Info_____//<br />
stock NAME_USER(playerid)<br />
{<br />
new User_Name[MAX_PLAYER_NAME];<br />
GetPlayerName(playerid, User_Name,  sizeof(User_Name));<br />
return User_Name;<br />
}<br />
<br />
stock GuardarDatos(playerid)<br />
{<br />
new DB_Query[450];<br />
format(DB_Query, sizeof(DB_Query), "UPDATE `USERS` SET `EXP` = '%d', `LEVEL_ADMIN` = '%d', `SCORE` = '%d', `DINERO` = '%d' WHERE `NAME` = '%q' COLLATE NOCASE",<br />
PLAYER_INFO[playerid][GAME_EXP],<br />
PLAYER_INFO[playerid][GAME_ADMIN_LEVEL],<br />
PLAYER_INFO[playerid][GAME_SCORE],<br />
PLAYER_INFO[playerid][GAME_MONEY],<br />
NAME_USER(playerid));<br />
db_query(Database, DB_Query);<br />
return 1;<br />
}<br />
<br />
//______Nuevos_Public________//]]></content:encoded>
		</item>
		<item>
			<title><![CDATA[ayuda con registro dini]]></title>
			<link>https://www.burgershot.gg/showthread.php?tid=1674</link>
			<pubDate>Tue, 16 Feb 2021 02:39:21 +0000</pubDate>
			<dc:creator><![CDATA[<a href="https://www.burgershot.gg/member.php?action=profile&uid=3109">Nikolay_Staggs</a>]]></dc:creator>
			<guid isPermaLink="false">https://www.burgershot.gg/showthread.php?tid=1674</guid>
			<description><![CDATA[tengo dos días tratando de resolver el problema  pero no puedo, por que no se guardan los datos de los usuarios :)<br />
 este es el código" <br />
<br />
//_____Enum______//<br />
enum DATA_PLAYER<br />
{<br />
    GAME_IDENTIFICADO,<br />
    GAME_REGISTRADO,<br />
GAME_EXP,<br />
GAME_ADMIN_LEVEL,<br />
GAME_SCORE,<br />
GAME_MONEY<br />
};<br />
new PLAYER_INFO[MAX_PLAYERS][DATA_PLAYER];<br />
//_________News__________//<br />
new GAME_PASSWORD_INCORRECTA[MAX_PLAYERS];<br />
<br />
<br />
public OnPlayerConnect(playerid)<br />
{<br />
    GAME_PASSWORD_INCORRECTA[playerid] = 0;<br />
    <br />
    new string[250];<br />
<br />
    if (fexist(ac_ARCHIBO_USER(playerid)))<br />
    {<br />
PLAYER_INFO[playerid][GAME_REGISTRADO] = 1;<br />
    }<br />
    <br />
    if (PLAYER_INFO[playerid][GAME_REGISTRADO])<br />
    {<br />
format(string, sizeof(string), "{CCCCCC}- Bienvenido %s.\n- Escribe tu contraseña para identificarte", NAME_USER(playerid));<br />
  ShowPlayerDialog(playerid, DIALOG_INGRESO, DIALOG_STYLE_PASSWORD, ""#BLANCO"Ingreso", string, "Ingresar", "Salir");<br />
    }<br />
    else<br />
    {<br />
  format(string, sizeof(string), "{CCCCCC}- Bienvenido %s.\n- Escribe una contraseña para Registrarte", NAME_USER(playerid));<br />
  ShowPlayerDialog(playerid, DIALOGO_REGISTRO, DIALOG_STYLE_PASSWORD, ""#BLANCO"Registrar", string, "Ok", "Salir");<br />
    }<br />
    <br />
    RESET_USER(playerid);<br />
return 1;<br />
}<br />
<br />
<br />
public OnDialogResponse(playerid, dialogid, response, listitem, inputtext[])<br />
{<br />
    new string[250];<br />
    if(dialogid == DIALOGO_REGISTRO)<br />
    {<br />
        dini_Create(ac_ARCHIBO_USER(playerid));<br />
        dini_IntSet(ac_ARCHIBO_USER(playerid), "contraseña",        adler32(inputtext));<br />
        dini_IntSet(ac_ARCHIBO_USER(playerid), "Exp",              PLAYER_INFO[playerid][GAME_EXP]);<br />
        dini_IntSet(ac_ARCHIBO_USER(playerid), "Admin",            PLAYER_INFO[playerid][GAME_ADMIN_LEVEL]);<br />
        dini_IntSet(ac_ARCHIBO_USER(playerid), "Score",            PLAYER_INFO[playerid][GAME_SCORE]);<br />
        dini_IntSet(ac_ARCHIBO_USER(playerid), "Dinero",            PLAYER_INFO[playerid][GAME_MONEY]);<br />
        <br />
        PLAYER_INFO[playerid][GAME_IDENTIFICADO] = 1;<br />
        PLAYER_INFO[playerid][GAME_REGISTRADO] = 1;<br />
    }<br />
    else if(dialogid == DIALOG_INGRESO)<br />
    {<br />
        if (dini_Int(ac_ARCHIBO_USER(playerid), "Contraseña") == adler32(inputtext))<br />
        {<br />
            PLAYER_INFO[playerid][GAME_IDENTIFICADO] = 1;<br />
            PLAYER_INFO[playerid][GAME_REGISTRADO] = 1;<br />
            <br />
            PLAYER_INFO[playerid][GAME_EXP] = dini_Int                (ac_ARCHIBO_USER(playerid), "Exp");<br />
            PLAYER_INFO[playerid][GAME_ADMIN_LEVEL] = dini_Int        (ac_ARCHIBO_USER(playerid), "Admin");<br />
            SetPlayerScore(playerid, dini_Int                          (ac_ARCHIBO_USER(playerid), "Score"));<br />
            GivePlayerMoney(playerid, dini_Int                        (ac_ARCHIBO_USER(playerid), "Dinero"));<br />
        }<br />
        else<br />
        {<br />
            GAME_PASSWORD_INCORRECTA[playerid]++;<br />
            format(string, sizeof(string), "{CCCCCC}- Por favor %s.\n- Ingresa una contraseña correcta", NAME_USER(playerid));<br />
            ShowPlayerDialog(playerid, DIALOG_INGRESO, DIALOG_STYLE_PASSWORD, "{6F0000}Error", string, "Ok", "Salir");<br />
<br />
            if(GAME_PASSWORD_INCORRECTA[playerid] == MAX_PASSWORD_INVALIDA)<br />
            {<br />
                format(string,sizeof(string),"{6F0000}[Cuentas]: %s fue expulsado (Max intentos de ingresar(Contraseña invalida))", NAME_USER(playerid));<br />
                SendClientMessageToAll(-1, string);<br />
                SendClientMessage(playerid, -1, "** Haz puesto varias contraseñas incorrectas has sido kickeado del servidor por seguridad.");<br />
                Kick(playerid);<br />
            }<br />
        }<br />
    }<br />
    return 1;<br />
}<br />
<br />
<br />
stock NAME_USER(playerid)<br />
{<br />
	new User_Name[MAX_PLAYER_NAME];<br />
	GetPlayerName(playerid, User_Name,  sizeof(User_Name));<br />
	return User_Name;<br />
}<br />
<br />
stock ac_ARCHIBO_USER(playerid)<br />
{<br />
	new User_Name[250];<br />
	GetPlayerName(playerid, User_Name,  sizeof(User_Name));<br />
	format(User_Name, sizeof(User_Name), "DM_FREEROAM/%s.ini", User_Name);<br />
	return User_Name;<br />
}<br />
<br />
stock SAVE_USER(playerid)<br />
{<br />
    if(PLAYER_INFO[playerid][GAME_IDENTIFICADO])<br />
    {<br />
        dini_IntSet(ac_ARCHIBO_USER(playerid), "Exp",          PLAYER_INFO[playerid][GAME_EXP]);<br />
dini_IntSet(ac_ARCHIBO_USER(playerid), "Admin",        PLAYER_INFO[playerid][GAME_ADMIN_LEVEL]);<br />
        dini_IntSet(ac_ARCHIBO_USER(playerid), "Score",        GetPlayerScore(playerid));<br />
        dini_IntSet(ac_ARCHIBO_USER(playerid), "Dinero",        GetPlayerMoney(playerid));<br />
    }<br />
    return 1;<br />
}<br />
<br />
stock adler32(buf[])<br />
{<br />
    new len = strlen(buf), key1 = 1, key2 = 0, n;<br />
    for (n = 0; n &lt; len; n ++)<br />
    {<br />
        key1 = (key1 + buf[n])  % 65521;<br />
        key2 = (key2 + key1)    % 65521;<br />
    }<br />
    return (key2 &lt;&lt; 16) + key1;<br />
}<br />
<br />
<br />
stock RESET_USER(playerid)<br />
{<br />
    PLAYER_INFO[playerid][GAME_IDENTIFICADO] = 0;<br />
    PLAYER_INFO[playerid][GAME_REGISTRADO] = 0;<br />
    PLAYER_INFO[playerid][GAME_EXP] = 0;<br />
    PLAYER_INFO[playerid][GAME_ADMIN_LEVEL] = 0;<br />
    PLAYER_INFO[playerid][GAME_SCORE] = 0;<br />
    PLAYER_INFO[playerid][GAME_MONEY] = 0;<br />
    return 1;<br />
}]]></description>
			<content:encoded><![CDATA[tengo dos días tratando de resolver el problema  pero no puedo, por que no se guardan los datos de los usuarios :)<br />
 este es el código" <br />
<br />
//_____Enum______//<br />
enum DATA_PLAYER<br />
{<br />
    GAME_IDENTIFICADO,<br />
    GAME_REGISTRADO,<br />
GAME_EXP,<br />
GAME_ADMIN_LEVEL,<br />
GAME_SCORE,<br />
GAME_MONEY<br />
};<br />
new PLAYER_INFO[MAX_PLAYERS][DATA_PLAYER];<br />
//_________News__________//<br />
new GAME_PASSWORD_INCORRECTA[MAX_PLAYERS];<br />
<br />
<br />
public OnPlayerConnect(playerid)<br />
{<br />
    GAME_PASSWORD_INCORRECTA[playerid] = 0;<br />
    <br />
    new string[250];<br />
<br />
    if (fexist(ac_ARCHIBO_USER(playerid)))<br />
    {<br />
PLAYER_INFO[playerid][GAME_REGISTRADO] = 1;<br />
    }<br />
    <br />
    if (PLAYER_INFO[playerid][GAME_REGISTRADO])<br />
    {<br />
format(string, sizeof(string), "{CCCCCC}- Bienvenido %s.\n- Escribe tu contraseña para identificarte", NAME_USER(playerid));<br />
  ShowPlayerDialog(playerid, DIALOG_INGRESO, DIALOG_STYLE_PASSWORD, ""#BLANCO"Ingreso", string, "Ingresar", "Salir");<br />
    }<br />
    else<br />
    {<br />
  format(string, sizeof(string), "{CCCCCC}- Bienvenido %s.\n- Escribe una contraseña para Registrarte", NAME_USER(playerid));<br />
  ShowPlayerDialog(playerid, DIALOGO_REGISTRO, DIALOG_STYLE_PASSWORD, ""#BLANCO"Registrar", string, "Ok", "Salir");<br />
    }<br />
    <br />
    RESET_USER(playerid);<br />
return 1;<br />
}<br />
<br />
<br />
public OnDialogResponse(playerid, dialogid, response, listitem, inputtext[])<br />
{<br />
    new string[250];<br />
    if(dialogid == DIALOGO_REGISTRO)<br />
    {<br />
        dini_Create(ac_ARCHIBO_USER(playerid));<br />
        dini_IntSet(ac_ARCHIBO_USER(playerid), "contraseña",        adler32(inputtext));<br />
        dini_IntSet(ac_ARCHIBO_USER(playerid), "Exp",              PLAYER_INFO[playerid][GAME_EXP]);<br />
        dini_IntSet(ac_ARCHIBO_USER(playerid), "Admin",            PLAYER_INFO[playerid][GAME_ADMIN_LEVEL]);<br />
        dini_IntSet(ac_ARCHIBO_USER(playerid), "Score",            PLAYER_INFO[playerid][GAME_SCORE]);<br />
        dini_IntSet(ac_ARCHIBO_USER(playerid), "Dinero",            PLAYER_INFO[playerid][GAME_MONEY]);<br />
        <br />
        PLAYER_INFO[playerid][GAME_IDENTIFICADO] = 1;<br />
        PLAYER_INFO[playerid][GAME_REGISTRADO] = 1;<br />
    }<br />
    else if(dialogid == DIALOG_INGRESO)<br />
    {<br />
        if (dini_Int(ac_ARCHIBO_USER(playerid), "Contraseña") == adler32(inputtext))<br />
        {<br />
            PLAYER_INFO[playerid][GAME_IDENTIFICADO] = 1;<br />
            PLAYER_INFO[playerid][GAME_REGISTRADO] = 1;<br />
            <br />
            PLAYER_INFO[playerid][GAME_EXP] = dini_Int                (ac_ARCHIBO_USER(playerid), "Exp");<br />
            PLAYER_INFO[playerid][GAME_ADMIN_LEVEL] = dini_Int        (ac_ARCHIBO_USER(playerid), "Admin");<br />
            SetPlayerScore(playerid, dini_Int                          (ac_ARCHIBO_USER(playerid), "Score"));<br />
            GivePlayerMoney(playerid, dini_Int                        (ac_ARCHIBO_USER(playerid), "Dinero"));<br />
        }<br />
        else<br />
        {<br />
            GAME_PASSWORD_INCORRECTA[playerid]++;<br />
            format(string, sizeof(string), "{CCCCCC}- Por favor %s.\n- Ingresa una contraseña correcta", NAME_USER(playerid));<br />
            ShowPlayerDialog(playerid, DIALOG_INGRESO, DIALOG_STYLE_PASSWORD, "{6F0000}Error", string, "Ok", "Salir");<br />
<br />
            if(GAME_PASSWORD_INCORRECTA[playerid] == MAX_PASSWORD_INVALIDA)<br />
            {<br />
                format(string,sizeof(string),"{6F0000}[Cuentas]: %s fue expulsado (Max intentos de ingresar(Contraseña invalida))", NAME_USER(playerid));<br />
                SendClientMessageToAll(-1, string);<br />
                SendClientMessage(playerid, -1, "** Haz puesto varias contraseñas incorrectas has sido kickeado del servidor por seguridad.");<br />
                Kick(playerid);<br />
            }<br />
        }<br />
    }<br />
    return 1;<br />
}<br />
<br />
<br />
stock NAME_USER(playerid)<br />
{<br />
	new User_Name[MAX_PLAYER_NAME];<br />
	GetPlayerName(playerid, User_Name,  sizeof(User_Name));<br />
	return User_Name;<br />
}<br />
<br />
stock ac_ARCHIBO_USER(playerid)<br />
{<br />
	new User_Name[250];<br />
	GetPlayerName(playerid, User_Name,  sizeof(User_Name));<br />
	format(User_Name, sizeof(User_Name), "DM_FREEROAM/%s.ini", User_Name);<br />
	return User_Name;<br />
}<br />
<br />
stock SAVE_USER(playerid)<br />
{<br />
    if(PLAYER_INFO[playerid][GAME_IDENTIFICADO])<br />
    {<br />
        dini_IntSet(ac_ARCHIBO_USER(playerid), "Exp",          PLAYER_INFO[playerid][GAME_EXP]);<br />
dini_IntSet(ac_ARCHIBO_USER(playerid), "Admin",        PLAYER_INFO[playerid][GAME_ADMIN_LEVEL]);<br />
        dini_IntSet(ac_ARCHIBO_USER(playerid), "Score",        GetPlayerScore(playerid));<br />
        dini_IntSet(ac_ARCHIBO_USER(playerid), "Dinero",        GetPlayerMoney(playerid));<br />
    }<br />
    return 1;<br />
}<br />
<br />
stock adler32(buf[])<br />
{<br />
    new len = strlen(buf), key1 = 1, key2 = 0, n;<br />
    for (n = 0; n &lt; len; n ++)<br />
    {<br />
        key1 = (key1 + buf[n])  % 65521;<br />
        key2 = (key2 + key1)    % 65521;<br />
    }<br />
    return (key2 &lt;&lt; 16) + key1;<br />
}<br />
<br />
<br />
stock RESET_USER(playerid)<br />
{<br />
    PLAYER_INFO[playerid][GAME_IDENTIFICADO] = 0;<br />
    PLAYER_INFO[playerid][GAME_REGISTRADO] = 0;<br />
    PLAYER_INFO[playerid][GAME_EXP] = 0;<br />
    PLAYER_INFO[playerid][GAME_ADMIN_LEVEL] = 0;<br />
    PLAYER_INFO[playerid][GAME_SCORE] = 0;<br />
    PLAYER_INFO[playerid][GAME_MONEY] = 0;<br />
    return 1;<br />
}]]></content:encoded>
		</item>
		<item>
			<title><![CDATA[[Ayuda] Urgente]]></title>
			<link>https://www.burgershot.gg/showthread.php?tid=1668</link>
			<pubDate>Sat, 13 Feb 2021 04:39:59 +0000</pubDate>
			<dc:creator><![CDATA[<a href="https://www.burgershot.gg/member.php?action=profile&uid=3358">Kaiser</a>]]></dc:creator>
			<guid isPermaLink="false">https://www.burgershot.gg/showthread.php?tid=1668</guid>
			<description><![CDATA[Tengo un error al iniciar el servidor en un host, la GM es con MySQL, y creo que parece haber un error de conexión, o realmente no sé que podría ser en verdad, aquí dejo lo que marca en el log al encender el servidor, cuando enciendo el servidor desde XAMPP me va perfecto sin errores, pero por el host me manda tremenedo error.<br />
<br />
<div class="codeblock"><div class="title">Code:</div><div class="body" dir="ltr"><code>Loaded log file: "server_log.txt".<br />
----------<br />
<br />
SA-MP Dedicated Server<br />
----------------------<br />
v0.3.7-R2, (C)2005-2015 SA-MP Team<br />
<br />
[22:09:20] <br />
[22:09:20] Server Plugins<br />
[22:09:20] --------------<br />
[22:09:20]  Loading plugin: mysql.so<br />
[22:09:20]  Failed (libmysqlclient_r.so.16: cannot open shared object file: No such file or directory)<br />
[22:09:20]  Loading plugin: sscanf.so<br />
[22:09:20] <br />
<br />
[22:09:20]  ===============================<br />
<br />
[22:09:20]      sscanf plugin loaded.    <br />
<br />
[22:09:20]          Version:  2.8.3        <br />
<br />
[22:09:20]  (c) 2018 Alex "Y_Less" Cole  <br />
<br />
[22:09:20]  ===============================<br />
<br />
[22:09:20]  Loaded.<br />
[22:09:20]  Loading plugin: crashdetect.so<br />
[22:09:20]  CrashDetect v4.18.1 is OK.<br />
[22:09:20]  Loaded.<br />
[22:09:20]  Loading plugin: streamer.so<br />
[22:09:20] <br />
<br />
*** Streamer Plugin v2.9.4 by Incognito loaded ***<br />
<br />
[22:09:20]  Loaded.<br />
[22:09:20]  Loaded 3 plugins.<br />
<br />
[22:09:20] <br />
[22:09:20] Filterscripts<br />
[22:09:20] ---------------<br />
[22:09:20]  Loading filterscript 'MAPEOS.amx'...<br />
[22:09:20]  Loading filterscript 'random.amx'...<br />
[22:09:21]  Loading filterscript 'Multinombres.amx'...<br />
[22:09:21] <br />
--------------------------------------<br />
[22:09:21] Multinombres by Woorlich y yor<br />
[22:09:21] --------------------------------------<br />
<br />
[22:09:21]  Loaded 3 filterscripts.<br />
<br />
[22:09:21] [debug] Run time error 19: "File or function is not found"<br />
[22:09:21] [debug]  mysql_connect<br />
[22:09:21] [debug]  mysql_errno<br />
[22:09:21] [debug]  mysql_tquery<br />
[22:09:21] [debug]  mysql_format<br />
[22:09:21] [debug]  mysql_query<br />
[22:09:21] [debug]  cache_get_row_count<br />
[22:09:21] [debug]  cache_get_row<br />
[22:09:21] [debug]  cache_get_row_int<br />
[22:09:21] [debug]  cache_delete<br />
[22:09:21] [debug]  cache_get_data<br />
[22:09:21] [debug]  cache_get_field_content_int<br />
[22:09:21] [debug]  cache_get_field_content<br />
[22:09:21] [debug]  cache_get_field_content_float<br />
[22:09:21] [debug]  cache_insert_id<br />
[22:09:21] [debug]  mysql_escape_string<br />
[22:09:21] [debug] Run time error 19: "File or function is not found"<br />
[22:09:21] [debug]  mysql_connect<br />
[22:09:21] [debug]  mysql_errno<br />
[22:09:21] [debug]  mysql_tquery<br />
[22:09:21] [debug]  mysql_format<br />
[22:09:21] [debug]  mysql_query<br />
[22:09:21] [debug]  cache_get_row_count<br />
[22:09:21] [debug]  cache_get_row<br />
[22:09:21] [debug]  cache_get_row_int<br />
[22:09:21] [debug]  cache_delete<br />
[22:09:21] [debug]  cache_get_data<br />
[22:09:21] [debug]  cache_get_field_content_int<br />
[22:09:21] [debug]  cache_get_field_content<br />
[22:09:21] [debug]  cache_get_field_content_float<br />
[22:09:21] [debug]  cache_insert_id<br />
[22:09:21] [debug]  mysql_escape_string<br />
[22:09:21] Script[gamemodes/Gamemode.amx]: Run time error 19: "File or function is not found"<br />
[22:09:21] Number of vehicle models: 0<br />
[22:10:29] [connection] 201.156.222.114:64199 requests connection cookie.<br />
[22:10:30] [connection] incoming connection: 201.156.222.114:64199 id: 0<br />
[22:10:30] [debug] Run time error 19: "File or function is not found"<br />
[22:10:30] [debug]  mysql_connect<br />
[22:10:30] [debug]  mysql_errno<br />
[22:10:30] [debug]  mysql_tquery<br />
[22:10:30] [debug]  mysql_format<br />
[22:10:30] [debug]  mysql_query<br />
[22:10:30] [debug]  cache_get_row_count<br />
[22:10:30] [debug]  cache_get_row<br />
[22:10:30] [debug]  cache_get_row_int<br />
[22:10:30] [debug]  cache_delete<br />
[22:10:30] [debug]  cache_get_data<br />
[22:10:30] [debug]  cache_get_field_content_int<br />
[22:10:30] [debug]  cache_get_field_content<br />
[22:10:30] [debug]  cache_get_field_content_float<br />
[22:10:30] [debug]  cache_insert_id<br />
[22:10:30] [debug]  mysql_escape_string<br />
[22:10:30] [join] King_Schultz has joined the server (0:201.156.222.114)<br />
[22:10:30] [debug] Run time error 19: "File or function is not found"<br />
[22:10:30] [debug]  mysql_connect<br />
[22:10:30] [debug]  mysql_errno<br />
[22:10:30] [debug]  mysql_tquery<br />
[22:10:30] [debug]  mysql_format<br />
[22:10:30] [debug]  mysql_query<br />
[22:10:30] [debug]  cache_get_row_count<br />
[22:10:30] [debug]  cache_get_row<br />
[22:10:30] [debug]  cache_get_row_int<br />
[22:10:30] [debug]  cache_delete<br />
[22:10:30] [debug]  cache_get_data<br />
[22:10:30] [debug]  cache_get_field_content_int<br />
[22:10:30] [debug]  cache_get_field_content<br />
[22:10:30] [debug]  cache_get_field_content_float<br />
[22:10:30] [debug]  cache_insert_id<br />
[22:10:30] [debug]  mysql_escape_string<br />
[22:10:33] [debug] Run time error 19: "File or function is not found"<br />
[22:10:33] [debug]  mysql_connect<br />
[22:10:33] [debug]  mysql_errno<br />
[22:10:33] [debug]  mysql_tquery<br />
[22:10:33] [debug]  mysql_format<br />
[22:10:33] [debug]  mysql_query<br />
[22:10:33] [debug]  cache_get_row_count<br />
[22:10:33] [debug]  cache_get_row<br />
[22:10:33] [debug]  cache_get_row_int<br />
[22:10:33] [debug]  cache_delete<br />
[22:10:33] [debug]  cache_get_data<br />
[22:10:33] [debug]  cache_get_field_content_int<br />
[22:10:33] [debug]  cache_get_field_content<br />
[22:10:33] [debug]  cache_get_field_content_float<br />
[22:10:33] [debug]  cache_insert_id<br />
[22:10:33] [debug]  mysql_escape_string<br />
[22:10:39] [debug] Run time error 19: "File or function is not found"<br />
[22:10:39] [debug]  mysql_connect<br />
[22:10:39] [debug]  mysql_errno<br />
[22:10:39] [debug]  mysql_tquery<br />
[22:10:39] [debug]  mysql_format<br />
[22:10:39] [debug]  mysql_query<br />
[22:10:39] [debug]  cache_get_row_count<br />
[22:10:39] [debug]  cache_get_row<br />
[22:10:39] [debug]  cache_get_row_int<br />
[22:10:39] [debug]  cache_delete<br />
[22:10:39] [debug]  cache_get_data<br />
[22:10:39] [debug]  cache_get_field_content_int<br />
[22:10:39] [debug]  cache_get_field_content<br />
[22:10:39] [debug]  cache_get_field_content_float<br />
[22:10:39] [debug]  cache_insert_id<br />
[22:10:39] [debug]  mysql_escape_string<br />
[22:10:39] [part] King_Schultz has left the server (0:1)</code></div></div>]]></description>
			<content:encoded><![CDATA[Tengo un error al iniciar el servidor en un host, la GM es con MySQL, y creo que parece haber un error de conexión, o realmente no sé que podría ser en verdad, aquí dejo lo que marca en el log al encender el servidor, cuando enciendo el servidor desde XAMPP me va perfecto sin errores, pero por el host me manda tremenedo error.<br />
<br />
<div class="codeblock"><div class="title">Code:</div><div class="body" dir="ltr"><code>Loaded log file: "server_log.txt".<br />
----------<br />
<br />
SA-MP Dedicated Server<br />
----------------------<br />
v0.3.7-R2, (C)2005-2015 SA-MP Team<br />
<br />
[22:09:20] <br />
[22:09:20] Server Plugins<br />
[22:09:20] --------------<br />
[22:09:20]  Loading plugin: mysql.so<br />
[22:09:20]  Failed (libmysqlclient_r.so.16: cannot open shared object file: No such file or directory)<br />
[22:09:20]  Loading plugin: sscanf.so<br />
[22:09:20] <br />
<br />
[22:09:20]  ===============================<br />
<br />
[22:09:20]      sscanf plugin loaded.    <br />
<br />
[22:09:20]          Version:  2.8.3        <br />
<br />
[22:09:20]  (c) 2018 Alex "Y_Less" Cole  <br />
<br />
[22:09:20]  ===============================<br />
<br />
[22:09:20]  Loaded.<br />
[22:09:20]  Loading plugin: crashdetect.so<br />
[22:09:20]  CrashDetect v4.18.1 is OK.<br />
[22:09:20]  Loaded.<br />
[22:09:20]  Loading plugin: streamer.so<br />
[22:09:20] <br />
<br />
*** Streamer Plugin v2.9.4 by Incognito loaded ***<br />
<br />
[22:09:20]  Loaded.<br />
[22:09:20]  Loaded 3 plugins.<br />
<br />
[22:09:20] <br />
[22:09:20] Filterscripts<br />
[22:09:20] ---------------<br />
[22:09:20]  Loading filterscript 'MAPEOS.amx'...<br />
[22:09:20]  Loading filterscript 'random.amx'...<br />
[22:09:21]  Loading filterscript 'Multinombres.amx'...<br />
[22:09:21] <br />
--------------------------------------<br />
[22:09:21] Multinombres by Woorlich y yor<br />
[22:09:21] --------------------------------------<br />
<br />
[22:09:21]  Loaded 3 filterscripts.<br />
<br />
[22:09:21] [debug] Run time error 19: "File or function is not found"<br />
[22:09:21] [debug]  mysql_connect<br />
[22:09:21] [debug]  mysql_errno<br />
[22:09:21] [debug]  mysql_tquery<br />
[22:09:21] [debug]  mysql_format<br />
[22:09:21] [debug]  mysql_query<br />
[22:09:21] [debug]  cache_get_row_count<br />
[22:09:21] [debug]  cache_get_row<br />
[22:09:21] [debug]  cache_get_row_int<br />
[22:09:21] [debug]  cache_delete<br />
[22:09:21] [debug]  cache_get_data<br />
[22:09:21] [debug]  cache_get_field_content_int<br />
[22:09:21] [debug]  cache_get_field_content<br />
[22:09:21] [debug]  cache_get_field_content_float<br />
[22:09:21] [debug]  cache_insert_id<br />
[22:09:21] [debug]  mysql_escape_string<br />
[22:09:21] [debug] Run time error 19: "File or function is not found"<br />
[22:09:21] [debug]  mysql_connect<br />
[22:09:21] [debug]  mysql_errno<br />
[22:09:21] [debug]  mysql_tquery<br />
[22:09:21] [debug]  mysql_format<br />
[22:09:21] [debug]  mysql_query<br />
[22:09:21] [debug]  cache_get_row_count<br />
[22:09:21] [debug]  cache_get_row<br />
[22:09:21] [debug]  cache_get_row_int<br />
[22:09:21] [debug]  cache_delete<br />
[22:09:21] [debug]  cache_get_data<br />
[22:09:21] [debug]  cache_get_field_content_int<br />
[22:09:21] [debug]  cache_get_field_content<br />
[22:09:21] [debug]  cache_get_field_content_float<br />
[22:09:21] [debug]  cache_insert_id<br />
[22:09:21] [debug]  mysql_escape_string<br />
[22:09:21] Script[gamemodes/Gamemode.amx]: Run time error 19: "File or function is not found"<br />
[22:09:21] Number of vehicle models: 0<br />
[22:10:29] [connection] 201.156.222.114:64199 requests connection cookie.<br />
[22:10:30] [connection] incoming connection: 201.156.222.114:64199 id: 0<br />
[22:10:30] [debug] Run time error 19: "File or function is not found"<br />
[22:10:30] [debug]  mysql_connect<br />
[22:10:30] [debug]  mysql_errno<br />
[22:10:30] [debug]  mysql_tquery<br />
[22:10:30] [debug]  mysql_format<br />
[22:10:30] [debug]  mysql_query<br />
[22:10:30] [debug]  cache_get_row_count<br />
[22:10:30] [debug]  cache_get_row<br />
[22:10:30] [debug]  cache_get_row_int<br />
[22:10:30] [debug]  cache_delete<br />
[22:10:30] [debug]  cache_get_data<br />
[22:10:30] [debug]  cache_get_field_content_int<br />
[22:10:30] [debug]  cache_get_field_content<br />
[22:10:30] [debug]  cache_get_field_content_float<br />
[22:10:30] [debug]  cache_insert_id<br />
[22:10:30] [debug]  mysql_escape_string<br />
[22:10:30] [join] King_Schultz has joined the server (0:201.156.222.114)<br />
[22:10:30] [debug] Run time error 19: "File or function is not found"<br />
[22:10:30] [debug]  mysql_connect<br />
[22:10:30] [debug]  mysql_errno<br />
[22:10:30] [debug]  mysql_tquery<br />
[22:10:30] [debug]  mysql_format<br />
[22:10:30] [debug]  mysql_query<br />
[22:10:30] [debug]  cache_get_row_count<br />
[22:10:30] [debug]  cache_get_row<br />
[22:10:30] [debug]  cache_get_row_int<br />
[22:10:30] [debug]  cache_delete<br />
[22:10:30] [debug]  cache_get_data<br />
[22:10:30] [debug]  cache_get_field_content_int<br />
[22:10:30] [debug]  cache_get_field_content<br />
[22:10:30] [debug]  cache_get_field_content_float<br />
[22:10:30] [debug]  cache_insert_id<br />
[22:10:30] [debug]  mysql_escape_string<br />
[22:10:33] [debug] Run time error 19: "File or function is not found"<br />
[22:10:33] [debug]  mysql_connect<br />
[22:10:33] [debug]  mysql_errno<br />
[22:10:33] [debug]  mysql_tquery<br />
[22:10:33] [debug]  mysql_format<br />
[22:10:33] [debug]  mysql_query<br />
[22:10:33] [debug]  cache_get_row_count<br />
[22:10:33] [debug]  cache_get_row<br />
[22:10:33] [debug]  cache_get_row_int<br />
[22:10:33] [debug]  cache_delete<br />
[22:10:33] [debug]  cache_get_data<br />
[22:10:33] [debug]  cache_get_field_content_int<br />
[22:10:33] [debug]  cache_get_field_content<br />
[22:10:33] [debug]  cache_get_field_content_float<br />
[22:10:33] [debug]  cache_insert_id<br />
[22:10:33] [debug]  mysql_escape_string<br />
[22:10:39] [debug] Run time error 19: "File or function is not found"<br />
[22:10:39] [debug]  mysql_connect<br />
[22:10:39] [debug]  mysql_errno<br />
[22:10:39] [debug]  mysql_tquery<br />
[22:10:39] [debug]  mysql_format<br />
[22:10:39] [debug]  mysql_query<br />
[22:10:39] [debug]  cache_get_row_count<br />
[22:10:39] [debug]  cache_get_row<br />
[22:10:39] [debug]  cache_get_row_int<br />
[22:10:39] [debug]  cache_delete<br />
[22:10:39] [debug]  cache_get_data<br />
[22:10:39] [debug]  cache_get_field_content_int<br />
[22:10:39] [debug]  cache_get_field_content<br />
[22:10:39] [debug]  cache_get_field_content_float<br />
[22:10:39] [debug]  cache_insert_id<br />
[22:10:39] [debug]  mysql_escape_string<br />
[22:10:39] [part] King_Schultz has left the server (0:1)</code></div></div>]]></content:encoded>
		</item>
		<item>
			<title><![CDATA[Estoy creando un servidor.]]></title>
			<link>https://www.burgershot.gg/showthread.php?tid=1652</link>
			<pubDate>Mon, 08 Feb 2021 09:45:53 +0000</pubDate>
			<dc:creator><![CDATA[<a href="https://www.burgershot.gg/member.php?action=profile&uid=3414">Zett0x</a>]]></dc:creator>
			<guid isPermaLink="false">https://www.burgershot.gg/showthread.php?tid=1652</guid>
			<description><![CDATA[Hola a toda la comunidad, empecé por aburrimiento hace unos meses la creación de un servidor de roleplay desde 0 (gamemode vacía), ya sabía programar y mysql así que solo me tuve que adaptar al lenguaje.<br />
Actualmente tiene:<br />
- Sistema de registro y login mysql.(encripta las pass)<br />
- Sistema de casas: Pones una casa en venta y le asocias el interior que quieres e incluso una cochera.<br />
- Todo lo referente a roleplay básico: gritar, hablar, comandos, chat por proximidad.<br />
-Sistema de llamadas teléfonicas.<br />
-Trabajo de camionero y cosechador.<br />
<br />
Si alguien quiere colaborar me enviais un mp, ya iré informando más si estáis interesados.]]></description>
			<content:encoded><![CDATA[Hola a toda la comunidad, empecé por aburrimiento hace unos meses la creación de un servidor de roleplay desde 0 (gamemode vacía), ya sabía programar y mysql así que solo me tuve que adaptar al lenguaje.<br />
Actualmente tiene:<br />
- Sistema de registro y login mysql.(encripta las pass)<br />
- Sistema de casas: Pones una casa en venta y le asocias el interior que quieres e incluso una cochera.<br />
- Todo lo referente a roleplay básico: gritar, hablar, comandos, chat por proximidad.<br />
-Sistema de llamadas teléfonicas.<br />
-Trabajo de camionero y cosechador.<br />
<br />
Si alguien quiere colaborar me enviais un mp, ya iré informando más si estáis interesados.]]></content:encoded>
		</item>
		<item>
			<title><![CDATA[[Duda]]]></title>
			<link>https://www.burgershot.gg/showthread.php?tid=1641</link>
			<pubDate>Sat, 06 Feb 2021 01:52:17 +0000</pubDate>
			<dc:creator><![CDATA[<a href="https://www.burgershot.gg/member.php?action=profile&uid=3358">Kaiser</a>]]></dc:creator>
			<guid isPermaLink="false">https://www.burgershot.gg/showthread.php?tid=1641</guid>
			<description><![CDATA[Buenas noches, tenía la duda de cómo le puedo agregar una función de animación a un comando, por ejemplo:<br />
<br />
Quiero que el comando /robarbanco ejecuté una animación cómo si se estuviera agachando.<br />
<br />
¿Qué tendría que hacer para meterle esa función?]]></description>
			<content:encoded><![CDATA[Buenas noches, tenía la duda de cómo le puedo agregar una función de animación a un comando, por ejemplo:<br />
<br />
Quiero que el comando /robarbanco ejecuté una animación cómo si se estuviera agachando.<br />
<br />
¿Qué tendría que hacer para meterle esa función?]]></content:encoded>
		</item>
		<item>
			<title><![CDATA[[Ayuda] 4 errores]]></title>
			<link>https://www.burgershot.gg/showthread.php?tid=1615</link>
			<pubDate>Fri, 29 Jan 2021 22:11:41 +0000</pubDate>
			<dc:creator><![CDATA[<a href="https://www.burgershot.gg/member.php?action=profile&uid=3358">Kaiser</a>]]></dc:creator>
			<guid isPermaLink="false">https://www.burgershot.gg/showthread.php?tid=1615</guid>
			<description><![CDATA[Buenas de nuevo jaja, acá tengo 4 erroes y ya intente varias cosas pero no encuentro la solución, me podrían decir que puedo hacer.<br />
<br />
<div class="codeblock"><div class="title">Code:</div><div class="body" dir="ltr"><code>gamemodes&#92;Gamemode.pwn(21163) : error 029: invalid expression, assumed zero<br />
gamemodes&#92;Gamemode.pwn(21163) : error 029: invalid expression, assumed zero<br />
gamemodes&#92;Gamemode.pwn(21163) : error 076: syntax error in the expression, or invalid function call<br />
gamemodes&#92;Gamemode.pwn(21163) : fatal error 107: too many error messages on one line</code></div></div><br />
Linea del error:<br />
<br />
<div class="codeblock"><div class="title">Code:</div><div class="body" dir="ltr"><code>format(string,sizeof(string),"Pizzas: ~r~%d~w~ /~g~ 5",dMaletero[GetPlayerVehicleID](playerid)); // Cambiar variables por el maletero</code></div></div><br />
Linea completa.<br />
<br />
<div class="codeblock"><div class="title">Code:</div><div class="body" dir="ltr"><code>funcion MostrartTextoPizzero(playerid)<br />
{<br />
    new string[56];<br />
    format(string,sizeof(string),"Pizzas: ~r~%d~w~ /~g~ 5",dMaletero[GetPlayerVehicleID](playerid)); // Cambiar variables por el maletero<br />
    TextoPizza[0][playerid] = CreatePlayerTextDraw(playerid,510.000000, 170.000000, string);<br />
    PlayerTextDrawBackgroundColor(playerid,TextoPizza[0][playerid], 255);<br />
    PlayerTextDrawFont(playerid,TextoPizza[0][playerid], 1);<br />
    PlayerTextDrawLetterSize(playerid,TextoPizza[0][playerid], 0.300000, 1.000000);<br />
    PlayerTextDrawColor(playerid,TextoPizza[0][playerid], -1);<br />
    PlayerTextDrawSetOutline(playerid,TextoPizza[0][playerid], 1);<br />
    PlayerTextDrawSetProportional(playerid,TextoPizza[0][playerid], 1);<br />
    PlayerTextDrawSetSelectable(playerid,TextoPizza[0][playerid], 0);*/</code></div></div><br />
<br />
El sistema consiste en un maletero para las motos del trabajo de pizzero, lo encontre desactivado esa funcion en la GM con la que estoy aprendiendo, ya intente cambiar la variable a maletero, pero me marca otro error, y aparte los demás que salen.]]></description>
			<content:encoded><![CDATA[Buenas de nuevo jaja, acá tengo 4 erroes y ya intente varias cosas pero no encuentro la solución, me podrían decir que puedo hacer.<br />
<br />
<div class="codeblock"><div class="title">Code:</div><div class="body" dir="ltr"><code>gamemodes&#92;Gamemode.pwn(21163) : error 029: invalid expression, assumed zero<br />
gamemodes&#92;Gamemode.pwn(21163) : error 029: invalid expression, assumed zero<br />
gamemodes&#92;Gamemode.pwn(21163) : error 076: syntax error in the expression, or invalid function call<br />
gamemodes&#92;Gamemode.pwn(21163) : fatal error 107: too many error messages on one line</code></div></div><br />
Linea del error:<br />
<br />
<div class="codeblock"><div class="title">Code:</div><div class="body" dir="ltr"><code>format(string,sizeof(string),"Pizzas: ~r~%d~w~ /~g~ 5",dMaletero[GetPlayerVehicleID](playerid)); // Cambiar variables por el maletero</code></div></div><br />
Linea completa.<br />
<br />
<div class="codeblock"><div class="title">Code:</div><div class="body" dir="ltr"><code>funcion MostrartTextoPizzero(playerid)<br />
{<br />
    new string[56];<br />
    format(string,sizeof(string),"Pizzas: ~r~%d~w~ /~g~ 5",dMaletero[GetPlayerVehicleID](playerid)); // Cambiar variables por el maletero<br />
    TextoPizza[0][playerid] = CreatePlayerTextDraw(playerid,510.000000, 170.000000, string);<br />
    PlayerTextDrawBackgroundColor(playerid,TextoPizza[0][playerid], 255);<br />
    PlayerTextDrawFont(playerid,TextoPizza[0][playerid], 1);<br />
    PlayerTextDrawLetterSize(playerid,TextoPizza[0][playerid], 0.300000, 1.000000);<br />
    PlayerTextDrawColor(playerid,TextoPizza[0][playerid], -1);<br />
    PlayerTextDrawSetOutline(playerid,TextoPizza[0][playerid], 1);<br />
    PlayerTextDrawSetProportional(playerid,TextoPizza[0][playerid], 1);<br />
    PlayerTextDrawSetSelectable(playerid,TextoPizza[0][playerid], 0);*/</code></div></div><br />
<br />
El sistema consiste en un maletero para las motos del trabajo de pizzero, lo encontre desactivado esa funcion en la GM con la que estoy aprendiendo, ya intente cambiar la variable a maletero, pero me marca otro error, y aparte los demás que salen.]]></content:encoded>
		</item>
		<item>
			<title><![CDATA[ayuda CP]]></title>
			<link>https://www.burgershot.gg/showthread.php?tid=1611</link>
			<pubDate>Thu, 28 Jan 2021 20:33:24 +0000</pubDate>
			<dc:creator><![CDATA[<a href="https://www.burgershot.gg/member.php?action=profile&uid=3109">Nikolay_Staggs</a>]]></dc:creator>
			<guid isPermaLink="false">https://www.burgershot.gg/showthread.php?tid=1611</guid>
			<description><![CDATA[Tengo una duda cómo puedo enganchar un remolque y que se marqué un CreateDynamicCP tengo esta función<br />
<br />
public OnPlayerAttachTrailer(playerid, vehicleid, trailerid)<br />
{<br />
if(IsTrailerAttachedToVehicle(vehicleid) &amp;&amp; SPAWN_REMOLQUE_GASOLINA != 1)<br />
{<br />
Random_Gasolina(playerid);<br />
}<br />
    return 1;<br />
}<br />
<br />
stock Random_Gasolina(playerid)<br />
{<br />
	new Gascolina = random(3);<br />
	switch(Gascolina)<br />
	{<br />
		case 0:<br />
		{<br />
			if(IsValidDynamicCP(PLAYER_TEMP[playerid][pt_TRAILERO_CHECKPOINT]))<br />
			{<br />
				DestroyDynamicCP(PLAYER_TEMP[playerid][pt_TRAILERO_CHECKPOINT]);<br />
				PLAYER_TEMP[playerid][pt_TRAILERO_CHECKPOINT] = INVALID_STREAMER_ID;<br />
			}<br />
			PLAYER_TEMP[playerid][pt_TRAILERO_CHECKPOINT] = CreateDynamicCP(363.3305, 869.4847, 20.3811, 5.0, 0, 0, playerid, 9999999999.0);<br />
            SendClientMessage(playerid, -1, "Lleva el remolque hacia donde se marcó");<br />
<br />
			new info[1];<br />
			info[0] = CHECKPOINT_TYPE_ENTER_GASOLINE;<br />
			Streamer_SetArrayData(STREAMER_TYPE_CP, PLAYER_TEMP[playerid][pt_TRAILERO_CHECKPOINT], E_STREAMER_EXTRA_ID, info);<br />
		}<br />
		case 1:<br />
		{<br />
			if(IsValidDynamicCP(PLAYER_TEMP[playerid][pt_TRAILERO_CHECKPOINT]))<br />
			{<br />
				DestroyDynamicCP(PLAYER_TEMP[playerid][pt_TRAILERO_CHECKPOINT]);<br />
				PLAYER_TEMP[playerid][pt_TRAILERO_CHECKPOINT] = INVALID_STREAMER_ID;<br />
			}<br />
			PLAYER_TEMP[playerid][pt_TRAILERO_CHECKPOINT] = CreateDynamicCP(-137.1521, -72.7862, 3.0911, 5.0, 0, 0, playerid, 9999999999.0);<br />
			SendClientMessage(playerid, -1, "Lleva el remolque hacia donde se marcó");<br />
<br />
			new info[1];<br />
			info[0] = CHECKPOINT_TYPE_ENTER_GASOLINE;<br />
			Streamer_SetArrayData(STREAMER_TYPE_CP, PLAYER_TEMP[playerid][pt_TRAILERO_CHECKPOINT], E_STREAMER_EXTRA_ID, info);<br />
		}<br />
		case 2:<br />
		{<br />
			if(IsValidDynamicCP(PLAYER_TEMP[playerid][pt_TRAILERO_CHECKPOINT]))<br />
			{<br />
				DestroyDynamicCP(PLAYER_TEMP[playerid][pt_TRAILERO_CHECKPOINT]);<br />
				PLAYER_TEMP[playerid][pt_TRAILERO_CHECKPOINT] = INVALID_STREAMER_ID;<br />
			}<br />
			PLAYER_TEMP[playerid][pt_TRAILERO_CHECKPOINT] = CreateDynamicCP(2822.7476, 955.9294, 10.7289, 5.0, 0, 0, playerid, 9999999999.0);<br />
			SendClientMessage(playerid, -1, "Lleva el remolque hacia donde se marcó");<br />
<br />
			new info[1];<br />
			info[0] = CHECKPOINT_TYPE_ENTER_GASOLINE;<br />
			Streamer_SetArrayData(STREAMER_TYPE_CP, PLAYER_TEMP[playerid][pt_TRAILERO_CHECKPOINT], E_STREAMER_EXTRA_ID, info);<br />
		}<br />
	}<br />
	return 1;<br />
}]]></description>
			<content:encoded><![CDATA[Tengo una duda cómo puedo enganchar un remolque y que se marqué un CreateDynamicCP tengo esta función<br />
<br />
public OnPlayerAttachTrailer(playerid, vehicleid, trailerid)<br />
{<br />
if(IsTrailerAttachedToVehicle(vehicleid) &amp;&amp; SPAWN_REMOLQUE_GASOLINA != 1)<br />
{<br />
Random_Gasolina(playerid);<br />
}<br />
    return 1;<br />
}<br />
<br />
stock Random_Gasolina(playerid)<br />
{<br />
	new Gascolina = random(3);<br />
	switch(Gascolina)<br />
	{<br />
		case 0:<br />
		{<br />
			if(IsValidDynamicCP(PLAYER_TEMP[playerid][pt_TRAILERO_CHECKPOINT]))<br />
			{<br />
				DestroyDynamicCP(PLAYER_TEMP[playerid][pt_TRAILERO_CHECKPOINT]);<br />
				PLAYER_TEMP[playerid][pt_TRAILERO_CHECKPOINT] = INVALID_STREAMER_ID;<br />
			}<br />
			PLAYER_TEMP[playerid][pt_TRAILERO_CHECKPOINT] = CreateDynamicCP(363.3305, 869.4847, 20.3811, 5.0, 0, 0, playerid, 9999999999.0);<br />
            SendClientMessage(playerid, -1, "Lleva el remolque hacia donde se marcó");<br />
<br />
			new info[1];<br />
			info[0] = CHECKPOINT_TYPE_ENTER_GASOLINE;<br />
			Streamer_SetArrayData(STREAMER_TYPE_CP, PLAYER_TEMP[playerid][pt_TRAILERO_CHECKPOINT], E_STREAMER_EXTRA_ID, info);<br />
		}<br />
		case 1:<br />
		{<br />
			if(IsValidDynamicCP(PLAYER_TEMP[playerid][pt_TRAILERO_CHECKPOINT]))<br />
			{<br />
				DestroyDynamicCP(PLAYER_TEMP[playerid][pt_TRAILERO_CHECKPOINT]);<br />
				PLAYER_TEMP[playerid][pt_TRAILERO_CHECKPOINT] = INVALID_STREAMER_ID;<br />
			}<br />
			PLAYER_TEMP[playerid][pt_TRAILERO_CHECKPOINT] = CreateDynamicCP(-137.1521, -72.7862, 3.0911, 5.0, 0, 0, playerid, 9999999999.0);<br />
			SendClientMessage(playerid, -1, "Lleva el remolque hacia donde se marcó");<br />
<br />
			new info[1];<br />
			info[0] = CHECKPOINT_TYPE_ENTER_GASOLINE;<br />
			Streamer_SetArrayData(STREAMER_TYPE_CP, PLAYER_TEMP[playerid][pt_TRAILERO_CHECKPOINT], E_STREAMER_EXTRA_ID, info);<br />
		}<br />
		case 2:<br />
		{<br />
			if(IsValidDynamicCP(PLAYER_TEMP[playerid][pt_TRAILERO_CHECKPOINT]))<br />
			{<br />
				DestroyDynamicCP(PLAYER_TEMP[playerid][pt_TRAILERO_CHECKPOINT]);<br />
				PLAYER_TEMP[playerid][pt_TRAILERO_CHECKPOINT] = INVALID_STREAMER_ID;<br />
			}<br />
			PLAYER_TEMP[playerid][pt_TRAILERO_CHECKPOINT] = CreateDynamicCP(2822.7476, 955.9294, 10.7289, 5.0, 0, 0, playerid, 9999999999.0);<br />
			SendClientMessage(playerid, -1, "Lleva el remolque hacia donde se marcó");<br />
<br />
			new info[1];<br />
			info[0] = CHECKPOINT_TYPE_ENTER_GASOLINE;<br />
			Streamer_SetArrayData(STREAMER_TYPE_CP, PLAYER_TEMP[playerid][pt_TRAILERO_CHECKPOINT], E_STREAMER_EXTRA_ID, info);<br />
		}<br />
	}<br />
	return 1;<br />
}]]></content:encoded>
		</item>
		<item>
			<title><![CDATA[[Ayuda] error 022: must be lvalue (non-constant)]]></title>
			<link>https://www.burgershot.gg/showthread.php?tid=1608</link>
			<pubDate>Thu, 28 Jan 2021 08:51:07 +0000</pubDate>
			<dc:creator><![CDATA[<a href="https://www.burgershot.gg/member.php?action=profile&uid=3358">Kaiser</a>]]></dc:creator>
			<guid isPermaLink="false">https://www.burgershot.gg/showthread.php?tid=1608</guid>
			<description><![CDATA[Buenas madrugadas jaja, bueno, acá tengo un error que no he podido solucionar, alguien podría decirme que podría ser y cómo lo soluciono.<br />
<br />
<div class="codeblock"><div class="title">Code:</div><div class="body" dir="ltr"><code>(54132) : error 022: must be lvalue (non-constant)</code></div></div><br />
Este es el código completo.<br />
<br />
<div class="codeblock"><div class="title">Code:</div><div class="body" dir="ltr"><code>//**************************************************************************<br />
CMD:regaloatodos(playerid)<br />
{<br />
if(Staff(playerid,Director)) return 1;<br />
{<br />
if (Regalo)<br />
{<br />
new string[128];<br />
format(string, sizeof(string), "{474747}[ADMINISTRACIÓN]{FFFFFF} %s envió regalos a todo el servidor.", NombreJugador(playerid));<br />
MensajeAll(CxVERDE, string);<br />
Regalo = 0; // Linea del error<br />
foreach(Player, i) { RegaloTodos(i); }<br />
} else return Mensaje(playerid, 0, "212", "Este comando ya fue usado, puedes usarlo en el próximo pago diario.");<br />
}<br />
return 1;<br />
}<br />
/// Sistema de regalos actualizado<br />
stock RegaloTodos(playerid) {<br />
    new gift = Random(1, 3);<br />
    switch(gift) {<br />
        case 1: {<br />
                DarDinero(playerid, 2500);<br />
                Mensaje(playerid, 2, "0", "Felicidades - recibiste &#36;250 del regalo!");<br />
            }<br />
        case 2: {<br />
                InfoUsuario[playerid][uExperiencia] += 2;<br />
                Mensaje(playerid, 2, "0", "Felicidades - recibiste dos puntos de experiencia del regalo!");<br />
            }<br />
        case 3: {<br />
                InfoUsuario[playerid][uExperiencia] += 1;<br />
                Mensaje(playerid, 2, "0", "Felicidades - recibiste un punto de experiencia del regalo!");<br />
            }<br />
        default: return RegaloTodos(playerid);<br />
    }<br />
    return 1;<br />
}</code></div></div>]]></description>
			<content:encoded><![CDATA[Buenas madrugadas jaja, bueno, acá tengo un error que no he podido solucionar, alguien podría decirme que podría ser y cómo lo soluciono.<br />
<br />
<div class="codeblock"><div class="title">Code:</div><div class="body" dir="ltr"><code>(54132) : error 022: must be lvalue (non-constant)</code></div></div><br />
Este es el código completo.<br />
<br />
<div class="codeblock"><div class="title">Code:</div><div class="body" dir="ltr"><code>//**************************************************************************<br />
CMD:regaloatodos(playerid)<br />
{<br />
if(Staff(playerid,Director)) return 1;<br />
{<br />
if (Regalo)<br />
{<br />
new string[128];<br />
format(string, sizeof(string), "{474747}[ADMINISTRACIÓN]{FFFFFF} %s envió regalos a todo el servidor.", NombreJugador(playerid));<br />
MensajeAll(CxVERDE, string);<br />
Regalo = 0; // Linea del error<br />
foreach(Player, i) { RegaloTodos(i); }<br />
} else return Mensaje(playerid, 0, "212", "Este comando ya fue usado, puedes usarlo en el próximo pago diario.");<br />
}<br />
return 1;<br />
}<br />
/// Sistema de regalos actualizado<br />
stock RegaloTodos(playerid) {<br />
    new gift = Random(1, 3);<br />
    switch(gift) {<br />
        case 1: {<br />
                DarDinero(playerid, 2500);<br />
                Mensaje(playerid, 2, "0", "Felicidades - recibiste &#36;250 del regalo!");<br />
            }<br />
        case 2: {<br />
                InfoUsuario[playerid][uExperiencia] += 2;<br />
                Mensaje(playerid, 2, "0", "Felicidades - recibiste dos puntos de experiencia del regalo!");<br />
            }<br />
        case 3: {<br />
                InfoUsuario[playerid][uExperiencia] += 1;<br />
                Mensaje(playerid, 2, "0", "Felicidades - recibiste un punto de experiencia del regalo!");<br />
            }<br />
        default: return RegaloTodos(playerid);<br />
    }<br />
    return 1;<br />
}</code></div></div>]]></content:encoded>
		</item>
		<item>
			<title><![CDATA[[Ayuda] Error 001: expected token]]></title>
			<link>https://www.burgershot.gg/showthread.php?tid=1603</link>
			<pubDate>Wed, 27 Jan 2021 21:22:19 +0000</pubDate>
			<dc:creator><![CDATA[<a href="https://www.burgershot.gg/member.php?action=profile&uid=3358">Kaiser</a>]]></dc:creator>
			<guid isPermaLink="false">https://www.burgershot.gg/showthread.php?tid=1603</guid>
			<description><![CDATA[Buenas, pues al compilar la GM, me sale el siguiente error.<br />
<br />
<div class="codeblock"><div class="title">Code:</div><div class="body" dir="ltr"><code>error 001: expected token: "-string end-", but found "-identifier-"</code></div></div><br />
La linea del error es la siguiente:<br />
<br />
<div class="codeblock"><div class="title">Code:</div><div class="body" dir="ltr"><code>CreateDynamic3DTextLabel("Mercado Negro!&#92;n&#92;n{E69144}(/comprarm)"-1,872.06,-24.86,63.21,15);//mn</code></div></div><br />
Linea completa:<br />
<br />
<div class="codeblock"><div class="title">Code:</div><div class="body" dir="ltr"><code>CreateDynamic3DTextLabel("Destinos de Transporte!&#92;n&#92;n{E69144}(/destino)",-1, -242.3696,-236.5017,2.4297,15);//CAsilla Base<br />
CreateDynamic3DTextLabel("Destinos de Transporte!&#92;n&#92;n{E69144}(/destino)",-1,966.9528,2132.9231,10.8203,15);//CAsilla LV<br />
CreateDynamic3DTextLabel("Destinos de Transporte!&#92;n&#92;n{E69144}(/destino)",-1,-1737.5258,31.3217,3.5547,15);//CAsilla SF<br />
CreateDynamic3DTextLabel("Destinos de Transporte!&#92;n&#92;n{E69144}(/destino)",-1,2123.6130,-2275.2766,20.6719,15);//CAsilla LS<br />
CreateDynamic3DTextLabel("Destinos de Transporte!&#92;n&#92;n{E69144}(/destino)",-1,-2002.4324,-2409.7842,30.6250,15);//CAsilla AP<br />
CreateDynamic3DTextLabel("Mercado Negro!&#92;n&#92;n{E69144}(/comprarm)"-1,872.06,-24.86,63.21,15);//mn<br />
CreateDynamic3DTextLabel("Puedes vender el coche Aqui!&#92;n&#92;n{E69144}(/vendergob)",-1,1782.9520,-1696.0848,13.4739,15);<br />
CreateDynamic3DTextLabel("Taller de Facciones Legales!&#92;n&#92;n{E69144}(/reparar)",-1,1943.6232,-1984.3682,13.7481,15);<br />
CreateDynamic3DTextLabel("Taller de Facciones Legales!&#92;n&#92;n{E69144}(/reparar)",-1,117.1935, 1885.1022, 18.0179,15);<br />
CreateDynamic3DTextLabel("Empieza a trabajar usando&#92;n&#92;n{9676C8}(/dinamita)",-1,-1842.1353,1321.0210,1059.2139,5);<br />
    CreateDynamic3DTextLabel("Para coger una pala&#92;n&#92;n{9676C8}(/pala)",-1,-1854.4734,1334.7629,1057.2260,5);<br />
    CreateDynamic3DTextLabel("Para coger una pala&#92;n&#92;n{9676C8}(/pala)",-1,1037.5548,1738.2552,1514.4860,15);//mina job<br />
    CreateDynamic3DTextLabel("Equipo LSPP&#92;n{FFFF6E}(/provisiones)&#92;n(/uniforme)",-1,1498.5148,-1348.9795,905.3040,5);//LSPD<br />
    CreateDynamic3DTextLabel("Equipo RCSD&#92;n{FFFF6E}(/provisiones)&#92;n(/uniforme)",-1,256.2475,73.7030,1003.6406,5);//SASD<br />
    CreateDynamic3DTextLabel("Equipo GN&#92;n{FFFF6E}(/provisiones)&#92;n(/uniforme)",-1,1313.8560,-1784.6996,1565.9984,5);//GN<br />
    CreateDynamic3DTextLabel("Enfermeria GN&#92;n(/curar)",-1,-209.8801,-1759.7628,675.7687,5);//GN</code></div></div><br />
¿Cómo puedo arreglar ese error?]]></description>
			<content:encoded><![CDATA[Buenas, pues al compilar la GM, me sale el siguiente error.<br />
<br />
<div class="codeblock"><div class="title">Code:</div><div class="body" dir="ltr"><code>error 001: expected token: "-string end-", but found "-identifier-"</code></div></div><br />
La linea del error es la siguiente:<br />
<br />
<div class="codeblock"><div class="title">Code:</div><div class="body" dir="ltr"><code>CreateDynamic3DTextLabel("Mercado Negro!&#92;n&#92;n{E69144}(/comprarm)"-1,872.06,-24.86,63.21,15);//mn</code></div></div><br />
Linea completa:<br />
<br />
<div class="codeblock"><div class="title">Code:</div><div class="body" dir="ltr"><code>CreateDynamic3DTextLabel("Destinos de Transporte!&#92;n&#92;n{E69144}(/destino)",-1, -242.3696,-236.5017,2.4297,15);//CAsilla Base<br />
CreateDynamic3DTextLabel("Destinos de Transporte!&#92;n&#92;n{E69144}(/destino)",-1,966.9528,2132.9231,10.8203,15);//CAsilla LV<br />
CreateDynamic3DTextLabel("Destinos de Transporte!&#92;n&#92;n{E69144}(/destino)",-1,-1737.5258,31.3217,3.5547,15);//CAsilla SF<br />
CreateDynamic3DTextLabel("Destinos de Transporte!&#92;n&#92;n{E69144}(/destino)",-1,2123.6130,-2275.2766,20.6719,15);//CAsilla LS<br />
CreateDynamic3DTextLabel("Destinos de Transporte!&#92;n&#92;n{E69144}(/destino)",-1,-2002.4324,-2409.7842,30.6250,15);//CAsilla AP<br />
CreateDynamic3DTextLabel("Mercado Negro!&#92;n&#92;n{E69144}(/comprarm)"-1,872.06,-24.86,63.21,15);//mn<br />
CreateDynamic3DTextLabel("Puedes vender el coche Aqui!&#92;n&#92;n{E69144}(/vendergob)",-1,1782.9520,-1696.0848,13.4739,15);<br />
CreateDynamic3DTextLabel("Taller de Facciones Legales!&#92;n&#92;n{E69144}(/reparar)",-1,1943.6232,-1984.3682,13.7481,15);<br />
CreateDynamic3DTextLabel("Taller de Facciones Legales!&#92;n&#92;n{E69144}(/reparar)",-1,117.1935, 1885.1022, 18.0179,15);<br />
CreateDynamic3DTextLabel("Empieza a trabajar usando&#92;n&#92;n{9676C8}(/dinamita)",-1,-1842.1353,1321.0210,1059.2139,5);<br />
    CreateDynamic3DTextLabel("Para coger una pala&#92;n&#92;n{9676C8}(/pala)",-1,-1854.4734,1334.7629,1057.2260,5);<br />
    CreateDynamic3DTextLabel("Para coger una pala&#92;n&#92;n{9676C8}(/pala)",-1,1037.5548,1738.2552,1514.4860,15);//mina job<br />
    CreateDynamic3DTextLabel("Equipo LSPP&#92;n{FFFF6E}(/provisiones)&#92;n(/uniforme)",-1,1498.5148,-1348.9795,905.3040,5);//LSPD<br />
    CreateDynamic3DTextLabel("Equipo RCSD&#92;n{FFFF6E}(/provisiones)&#92;n(/uniforme)",-1,256.2475,73.7030,1003.6406,5);//SASD<br />
    CreateDynamic3DTextLabel("Equipo GN&#92;n{FFFF6E}(/provisiones)&#92;n(/uniforme)",-1,1313.8560,-1784.6996,1565.9984,5);//GN<br />
    CreateDynamic3DTextLabel("Enfermeria GN&#92;n(/curar)",-1,-209.8801,-1759.7628,675.7687,5);//GN</code></div></div><br />
¿Cómo puedo arreglar ese error?]]></content:encoded>
		</item>
		<item>
			<title><![CDATA[[include] Matrix Functions (Topic en Español)]]></title>
			<link>https://www.burgershot.gg/showthread.php?tid=1602</link>
			<pubDate>Wed, 27 Jan 2021 17:19:27 +0000</pubDate>
			<dc:creator><![CDATA[<a href="https://www.burgershot.gg/member.php?action=profile&uid=2996">Leonardo</a>]]></dc:creator>
			<guid isPermaLink="false">https://www.burgershot.gg/showthread.php?tid=1602</guid>
			<description><![CDATA[<div style="text-align: center;" class="mycode_align"><span style="font-weight: bold;" class="mycode_b"><span style="font-size: xx-large;" class="mycode_size">Matrix Functions</span></span></div>
<br />
Estas son funciones matrix, que se pueden usar para obtener la rotación de euler de un vehículo, o calcular el offset para usarlo en AttachObjectToVehicle/Player, también para crear un DetachObjectFromVehicle/Player, etc. <br />
<br />
<span style="font-weight: bold;" class="mycode_b">Functions:</span><br />
<ul class="mycode_list"><li>native Vector(Float:x, Float:y, Float:z);<br />
</li>
<li>native Matrix(const right[VECTOR], const front[VECTOR], const up[VECTOR], const pos[VECTOR]);<br />
</li>
<li>native Matrix_Invert(const matrix[MATRIX]);<br />
</li>
<li>native Matrix_BuildUp(matrix[MATRIX]);<br />
</li>
<li>native Matrix_SetRotation(matrix[MATRIX], Float:rx, Float:ry, Float:rz);<br />
</li>
<li>native Float:Matrix_GetRotationX(const matrix[MATRIX]);<br />
</li>
<li>native Float:Matrix_GetRotationY(const matrix[MATRIX]);<br />
</li>
<li>native Float:Matrix_GetRotationZ(const matrix[MATRIX]);<br />
</li>
<li>native Matrix_GetRotation(const matrix[MATRIX]);<br />
</li>
<li>native Matrix_Multiply3x3(const matrix[MATRIX], const vector[VECTOR]);<br />
</li>
<li>native Matrix_Multiply4x4(const matrix1[MATRIX], const matrix2[MATRIX]);<br />
</li>
<li>native Matrix_GetOffsetPosition(const matrix[MATRIX], const vector[VECTOR]);<br />
</li>
<li>native Matrix_GetOffsetRotation(const matrix[MATRIX], const vector[VECTOR], bool:invert = true);<br />
</li>
</ul>
<span style="font-weight: bold;" class="mycode_b">Video</span><br />
<br />
Éste es un video del filterscript de pruebas:<br />
<br />
<iframe width="560" height="315" src="//www.youtube.com/embed/vSZyMilgcuU" frameborder="0" allowfullscreen></iframe><br />
<br />
<br />
<span style="font-weight: bold;" class="mycode_b">Código fuente</span><br />
<br />
https://github.com/Leonardo541/matrix]]></description>
			<content:encoded><![CDATA[<div style="text-align: center;" class="mycode_align"><span style="font-weight: bold;" class="mycode_b"><span style="font-size: xx-large;" class="mycode_size">Matrix Functions</span></span></div>
<br />
Estas son funciones matrix, que se pueden usar para obtener la rotación de euler de un vehículo, o calcular el offset para usarlo en AttachObjectToVehicle/Player, también para crear un DetachObjectFromVehicle/Player, etc. <br />
<br />
<span style="font-weight: bold;" class="mycode_b">Functions:</span><br />
<ul class="mycode_list"><li>native Vector(Float:x, Float:y, Float:z);<br />
</li>
<li>native Matrix(const right[VECTOR], const front[VECTOR], const up[VECTOR], const pos[VECTOR]);<br />
</li>
<li>native Matrix_Invert(const matrix[MATRIX]);<br />
</li>
<li>native Matrix_BuildUp(matrix[MATRIX]);<br />
</li>
<li>native Matrix_SetRotation(matrix[MATRIX], Float:rx, Float:ry, Float:rz);<br />
</li>
<li>native Float:Matrix_GetRotationX(const matrix[MATRIX]);<br />
</li>
<li>native Float:Matrix_GetRotationY(const matrix[MATRIX]);<br />
</li>
<li>native Float:Matrix_GetRotationZ(const matrix[MATRIX]);<br />
</li>
<li>native Matrix_GetRotation(const matrix[MATRIX]);<br />
</li>
<li>native Matrix_Multiply3x3(const matrix[MATRIX], const vector[VECTOR]);<br />
</li>
<li>native Matrix_Multiply4x4(const matrix1[MATRIX], const matrix2[MATRIX]);<br />
</li>
<li>native Matrix_GetOffsetPosition(const matrix[MATRIX], const vector[VECTOR]);<br />
</li>
<li>native Matrix_GetOffsetRotation(const matrix[MATRIX], const vector[VECTOR], bool:invert = true);<br />
</li>
</ul>
<span style="font-weight: bold;" class="mycode_b">Video</span><br />
<br />
Éste es un video del filterscript de pruebas:<br />
<br />
<iframe width="560" height="315" src="//www.youtube.com/embed/vSZyMilgcuU" frameborder="0" allowfullscreen></iframe><br />
<br />
<br />
<span style="font-weight: bold;" class="mycode_b">Código fuente</span><br />
<br />
https://github.com/Leonardo541/matrix]]></content:encoded>
		</item>
	</channel>
</rss>