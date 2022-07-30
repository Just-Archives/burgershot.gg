<?xml version="1.0" encoding="UTF-8"?>
<rss version="2.0" xmlns:content="http://purl.org/rss/1.0/modules/content/" xmlns:dc="http://purl.org/dc/elements/1.1/">
	<channel>
		<title><![CDATA[Burgershot - Tutorials]]></title>
		<link>https://www.burgershot.gg/</link>
		<description><![CDATA[Burgershot - https://www.burgershot.gg]]></description>
		<pubDate>Sat, 30 Jul 2022 07:02:37 +0000</pubDate>
		<generator>MyBB</generator>
		<item>
			<title><![CDATA[Associating a Discord account with SA-MP account]]></title>
			<link>https://www.burgershot.gg/showthread.php?tid=1610</link>
			<pubDate>Thu, 28 Jan 2021 19:04:41 +0000</pubDate>
			<dc:creator><![CDATA[<a href="https://www.burgershot.gg/member.php?action=profile&uid=3126">phlair</a>]]></dc:creator>
			<guid isPermaLink="false">https://www.burgershot.gg/showthread.php?tid=1610</guid>
			<description><![CDATA[Below is an excerpt from a Discord post to solve a common problem - it will benefit others with the necessary effort/attitude, so I'm sharing it here for posterity.<br />
<br />
So, finished the write-up for the discord-samp linking stuff. It contains:<br />
- Motivation for the problem<br />
- Full description of the problem<br />
- Solution of the problem (logic)<br />
- Proof of solution of the problem<br />
- Implementation directions<br />
<br />
You should read it accompanied with all the contents of <a href="https://github.com/lagoevia/cahoa/blob/master/Volume%20I/Appendices/A/HOME.md" target="_blank" rel="noopener" class="mycode_url">Appendix A of CAHOA</a> if you haven't read that already.<br />
Look forward to seeing some good engagement with it, and it becoming useful in encouraging a "think first, do later" mindset.<br />
<br />
Link to the write-up: https://gist.github.com/lagoevia/c3d6f38c8d282c3f6871e910f0de9dcb]]></description>
			<content:encoded><![CDATA[Below is an excerpt from a Discord post to solve a common problem - it will benefit others with the necessary effort/attitude, so I'm sharing it here for posterity.<br />
<br />
So, finished the write-up for the discord-samp linking stuff. It contains:<br />
- Motivation for the problem<br />
- Full description of the problem<br />
- Solution of the problem (logic)<br />
- Proof of solution of the problem<br />
- Implementation directions<br />
<br />
You should read it accompanied with all the contents of <a href="https://github.com/lagoevia/cahoa/blob/master/Volume%20I/Appendices/A/HOME.md" target="_blank" rel="noopener" class="mycode_url">Appendix A of CAHOA</a> if you haven't read that already.<br />
Look forward to seeing some good engagement with it, and it becoming useful in encouraging a "think first, do later" mindset.<br />
<br />
Link to the write-up: https://gist.github.com/lagoevia/c3d6f38c8d282c3f6871e910f0de9dcb]]></content:encoded>
		</item>
		<item>
			<title><![CDATA[Ternary Operator Basics]]></title>
			<link>https://www.burgershot.gg/showthread.php?tid=1566</link>
			<pubDate>Wed, 20 Jan 2021 19:29:59 +0000</pubDate>
			<dc:creator><![CDATA[<a href="https://www.burgershot.gg/member.php?action=profile&uid=2931">RhaegarX</a>]]></dc:creator>
			<guid isPermaLink="false">https://www.burgershot.gg/showthread.php?tid=1566</guid>
			<description><![CDATA[<span style="color: #e8c500;" class="mycode_color"><span style="font-size: large;" class="mycode_size"><span style="color: #202124;" class="mycode_color"><span style="font-size: small;" class="mycode_size"><span style="font-family: Tahoma, Verdana, Arial, sans-serif;" class="mycode_font"><span style="font-weight: bold;" class="mycode_b"><span style="font-style: italic;" class="mycode_i">"Sorry for the bad English, I'm using the translator to do this tutorial."</span></span></span></span></span></span></span><br />
<br />
<span style="color: #e8c500;" class="mycode_color"><span style="font-size: large;" class="mycode_size"><span style="font-weight: bold;" class="mycode_b">- What is a ternary operator?</span></span></span><br />
<br />
In various situations in programming we need to deal with various scenarios, through conditional structures, such as if, else and switch. However, in some situations we deal with wave situations there are only 2 possible returns.<br />
<br />
For example, let's imagine a hypothetical situation, in which if the player is an administrator he wins &#36; 1500, otherwise he will win &#36; 500.<br />
We can do this logic using the if and else operator:<br />
<br />
<div class="codeblock phpcodeblock"><div class="title">PHP Code:</div><div class="body"><div dir="ltr"><code><span style="color: #007700">if&nbsp;(</span><span style="color: #0000BB">PlayerData</span><span style="color: #007700">[</span><span style="color: #0000BB">playerid</span><span style="color: #007700">][</span><span style="color: #0000BB">pAdmin</span><span style="color: #007700">]&nbsp;&gt;&nbsp;</span><span style="color: #0000BB">0</span><span style="color: #007700">)<br />{</span><span style="color: #0000BB"> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<br /> &nbsp; &nbsp;GivePlayerMoney</span><span style="color: #007700">(</span><span style="color: #0000BB">playerid</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">1500</span><span style="color: #007700">);<br /><br />}&nbsp;<br />else<br />{<br /></span><span style="color: #0000BB"> &nbsp; &nbsp;GivePlayerMoney</span><span style="color: #007700">(</span><span style="color: #0000BB">playerid</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">500</span><span style="color: #007700">);<br />}&nbsp;<br /></span></code></div></div></div><br />
Now notice that we are making a relatively long structure for a simple action, with only two possibilities. Is there no other way to write this code in a simpler way? Yes, there is, and that is what the ternary operator is for:<br />
<br />
<div class="codeblock phpcodeblock"><div class="title">PHP Code:</div><div class="body"><div dir="ltr"><code><span style="color: #0000BB">GivePlayerMoney</span><span style="color: #007700">(</span><span style="color: #0000BB">playerid</span><span style="color: #007700">,&nbsp;(</span><span style="color: #0000BB">PlayerData</span><span style="color: #007700">[</span><span style="color: #0000BB">playerid</span><span style="color: #007700">][</span><span style="color: #0000BB">pAdmin</span><span style="color: #007700">]&nbsp;&gt;&nbsp;</span><span style="color: #0000BB">0&nbsp;</span><span style="color: #007700">?&nbsp;</span><span style="color: #0000BB">1500&nbsp;</span><span style="color: #007700">:&nbsp;</span><span style="color: #0000BB">500</span><span style="color: #007700">));&nbsp;<br /></span></code></div></div></div><br />
Now we did the same action with just one line of code, however let's understand a little bit about how to build a ternary operator.<br />
<br />
<span style="color: #e8c500;" class="mycode_color"><span style="font-size: large;" class="mycode_size"><span style="font-weight: bold;" class="mycode_b">- How to build a ternary operator?</span></span></span><br />
<br />
Building a ternary operator is simple, its own structure is self-explanatory.<br />
<br />
<div class="codeblock phpcodeblock"><div class="title">PHP Code:</div><div class="body"><div dir="ltr"><code><span style="color: #007700">(</span><span style="color: #0000BB">condition&nbsp;</span><span style="color: #007700">?&nbsp;</span><span style="color: #0000BB">value&nbsp;</span><span style="color: #007700">if&nbsp;</span><span style="color: #0000BB">true&nbsp;</span><span style="color: #007700">:&nbsp;</span><span style="color: #0000BB">value&nbsp;</span><span style="color: #007700">if&nbsp;</span><span style="color: #0000BB">false</span><span style="color: #007700">)&nbsp;<br /></span></code></div></div></div><br />
To better understand, we can see that the '?' acts as an if and the ':' acts as the else.<br />
<br />
<span style="font-weight: bold;" class="mycode_b"><span style="color: #e8c500;" class="mycode_color"><span style="font-size: large;" class="mycode_size">- In what situations will I use the ternary operator?</span></span></span><br />
<br />
This is a relative question, it depends a lot on the type of logic that you will build for your system, but as stated in the first question we will use the ternary operator for situations in which there are only 2 possibilities of return. Remembering that the ternary operator is not limited to returning only number values, but can also return strings and other options.<br />
<br />
Example of a string with a ternary operator:<br />
<br />
<div class="codeblock phpcodeblock"><div class="title">PHP Code:</div><div class="body"><div dir="ltr"><code><span style="color: #0000BB">SendClientMessage</span><span style="color: #007700">(</span><span style="color: #0000BB">playerid</span><span style="color: #007700">,&nbsp;-</span><span style="color: #0000BB">1</span><span style="color: #007700">,&nbsp;(</span><span style="color: #0000BB">playerData</span><span style="color: #007700">[</span><span style="color: #0000BB">playerid</span><span style="color: #007700">][</span><span style="color: #0000BB">pAdmin</span><span style="color: #007700">]&nbsp;&gt;&nbsp;</span><span style="color: #0000BB">0&nbsp;</span><span style="color: #007700">?&nbsp;</span><span style="color: #DD0000">"True"&nbsp;</span><span style="color: #007700">:&nbsp;</span><span style="color: #DD0000">"false"</span><span style="color: #007700">));&nbsp;<br /></span></code></div></div></div><br />
<span style="font-weight: bold;" class="mycode_b"><span style="color: #e8c500;" class="mycode_color"><span style="font-size: large;" class="mycode_size">- Problems with ternary operator</span></span></span><br />
<br />
The main problem with the ternary operator is its structure, which because it is very compact, its structure can be difficult to read by programmers who are not used to it.<br />
<br />
<span style="font-weight: bold;" class="mycode_b"><span style="color: #e8c500;" class="mycode_color"><span style="font-size: large;" class="mycode_size">- End</span></span></span><br />
<br />
This is my first personal authoring tutorial, i hope you like it and criticism will always be welcome!]]></description>
			<content:encoded><![CDATA[<span style="color: #e8c500;" class="mycode_color"><span style="font-size: large;" class="mycode_size"><span style="color: #202124;" class="mycode_color"><span style="font-size: small;" class="mycode_size"><span style="font-family: Tahoma, Verdana, Arial, sans-serif;" class="mycode_font"><span style="font-weight: bold;" class="mycode_b"><span style="font-style: italic;" class="mycode_i">"Sorry for the bad English, I'm using the translator to do this tutorial."</span></span></span></span></span></span></span><br />
<br />
<span style="color: #e8c500;" class="mycode_color"><span style="font-size: large;" class="mycode_size"><span style="font-weight: bold;" class="mycode_b">- What is a ternary operator?</span></span></span><br />
<br />
In various situations in programming we need to deal with various scenarios, through conditional structures, such as if, else and switch. However, in some situations we deal with wave situations there are only 2 possible returns.<br />
<br />
For example, let's imagine a hypothetical situation, in which if the player is an administrator he wins &#36; 1500, otherwise he will win &#36; 500.<br />
We can do this logic using the if and else operator:<br />
<br />
<div class="codeblock phpcodeblock"><div class="title">PHP Code:</div><div class="body"><div dir="ltr"><code><span style="color: #007700">if&nbsp;(</span><span style="color: #0000BB">PlayerData</span><span style="color: #007700">[</span><span style="color: #0000BB">playerid</span><span style="color: #007700">][</span><span style="color: #0000BB">pAdmin</span><span style="color: #007700">]&nbsp;&gt;&nbsp;</span><span style="color: #0000BB">0</span><span style="color: #007700">)<br />{</span><span style="color: #0000BB"> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<br /> &nbsp; &nbsp;GivePlayerMoney</span><span style="color: #007700">(</span><span style="color: #0000BB">playerid</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">1500</span><span style="color: #007700">);<br /><br />}&nbsp;<br />else<br />{<br /></span><span style="color: #0000BB"> &nbsp; &nbsp;GivePlayerMoney</span><span style="color: #007700">(</span><span style="color: #0000BB">playerid</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">500</span><span style="color: #007700">);<br />}&nbsp;<br /></span></code></div></div></div><br />
Now notice that we are making a relatively long structure for a simple action, with only two possibilities. Is there no other way to write this code in a simpler way? Yes, there is, and that is what the ternary operator is for:<br />
<br />
<div class="codeblock phpcodeblock"><div class="title">PHP Code:</div><div class="body"><div dir="ltr"><code><span style="color: #0000BB">GivePlayerMoney</span><span style="color: #007700">(</span><span style="color: #0000BB">playerid</span><span style="color: #007700">,&nbsp;(</span><span style="color: #0000BB">PlayerData</span><span style="color: #007700">[</span><span style="color: #0000BB">playerid</span><span style="color: #007700">][</span><span style="color: #0000BB">pAdmin</span><span style="color: #007700">]&nbsp;&gt;&nbsp;</span><span style="color: #0000BB">0&nbsp;</span><span style="color: #007700">?&nbsp;</span><span style="color: #0000BB">1500&nbsp;</span><span style="color: #007700">:&nbsp;</span><span style="color: #0000BB">500</span><span style="color: #007700">));&nbsp;<br /></span></code></div></div></div><br />
Now we did the same action with just one line of code, however let's understand a little bit about how to build a ternary operator.<br />
<br />
<span style="color: #e8c500;" class="mycode_color"><span style="font-size: large;" class="mycode_size"><span style="font-weight: bold;" class="mycode_b">- How to build a ternary operator?</span></span></span><br />
<br />
Building a ternary operator is simple, its own structure is self-explanatory.<br />
<br />
<div class="codeblock phpcodeblock"><div class="title">PHP Code:</div><div class="body"><div dir="ltr"><code><span style="color: #007700">(</span><span style="color: #0000BB">condition&nbsp;</span><span style="color: #007700">?&nbsp;</span><span style="color: #0000BB">value&nbsp;</span><span style="color: #007700">if&nbsp;</span><span style="color: #0000BB">true&nbsp;</span><span style="color: #007700">:&nbsp;</span><span style="color: #0000BB">value&nbsp;</span><span style="color: #007700">if&nbsp;</span><span style="color: #0000BB">false</span><span style="color: #007700">)&nbsp;<br /></span></code></div></div></div><br />
To better understand, we can see that the '?' acts as an if and the ':' acts as the else.<br />
<br />
<span style="font-weight: bold;" class="mycode_b"><span style="color: #e8c500;" class="mycode_color"><span style="font-size: large;" class="mycode_size">- In what situations will I use the ternary operator?</span></span></span><br />
<br />
This is a relative question, it depends a lot on the type of logic that you will build for your system, but as stated in the first question we will use the ternary operator for situations in which there are only 2 possibilities of return. Remembering that the ternary operator is not limited to returning only number values, but can also return strings and other options.<br />
<br />
Example of a string with a ternary operator:<br />
<br />
<div class="codeblock phpcodeblock"><div class="title">PHP Code:</div><div class="body"><div dir="ltr"><code><span style="color: #0000BB">SendClientMessage</span><span style="color: #007700">(</span><span style="color: #0000BB">playerid</span><span style="color: #007700">,&nbsp;-</span><span style="color: #0000BB">1</span><span style="color: #007700">,&nbsp;(</span><span style="color: #0000BB">playerData</span><span style="color: #007700">[</span><span style="color: #0000BB">playerid</span><span style="color: #007700">][</span><span style="color: #0000BB">pAdmin</span><span style="color: #007700">]&nbsp;&gt;&nbsp;</span><span style="color: #0000BB">0&nbsp;</span><span style="color: #007700">?&nbsp;</span><span style="color: #DD0000">"True"&nbsp;</span><span style="color: #007700">:&nbsp;</span><span style="color: #DD0000">"false"</span><span style="color: #007700">));&nbsp;<br /></span></code></div></div></div><br />
<span style="font-weight: bold;" class="mycode_b"><span style="color: #e8c500;" class="mycode_color"><span style="font-size: large;" class="mycode_size">- Problems with ternary operator</span></span></span><br />
<br />
The main problem with the ternary operator is its structure, which because it is very compact, its structure can be difficult to read by programmers who are not used to it.<br />
<br />
<span style="font-weight: bold;" class="mycode_b"><span style="color: #e8c500;" class="mycode_color"><span style="font-size: large;" class="mycode_size">- End</span></span></span><br />
<br />
This is my first personal authoring tutorial, i hope you like it and criticism will always be welcome!]]></content:encoded>
		</item>
		<item>
			<title><![CDATA[CODE: A Hands-on Approach]]></title>
			<link>https://www.burgershot.gg/showthread.php?tid=1424</link>
			<pubDate>Wed, 16 Dec 2020 02:01:48 +0000</pubDate>
			<dc:creator><![CDATA[<a href="https://www.burgershot.gg/member.php?action=profile&uid=3126">phlair</a>]]></dc:creator>
			<guid isPermaLink="false">https://www.burgershot.gg/showthread.php?tid=1424</guid>
			<description><![CDATA[<span style="font-size: large;" class="mycode_size"><span style="font-family: Verdana;" class="mycode_font"><span style="text-decoration: underline;" class="mycode_u">Information</span></span></span><br />
<br />
<span style="font-size: small;" class="mycode_size"><span style="font-family: Verdana;" class="mycode_font">CODE: A Hands-on Approach (cahoa) is a project that aims to serve as a hands-on tutorial for teaching programming (via PAWN, and currently SA-MP). People of different skill levels/experience will benefit from this, but it is mainly targeted at beginners.</span></span><br />
<br />
<span style="font-size: large;" class="mycode_size"><span style="font-family: Verdana;" class="mycode_font"><span style="text-decoration: underline;" class="mycode_u">Details</span></span></span><br />
<br />
<span style="font-size: small;" class="mycode_size">You'll find the most up to date draft as a GitHub Gist <a href="https://gist.github.com/lagoevia/1d2daa353c2dac189273d80e3af2f333" target="_blank" rel="noopener" class="mycode_url">here</a></span><br />
<br />
<span style="font-size: small;" class="mycode_size">I look forward to your responses and feedback!</span><br />
<br />
<span style="font-size: large;" class="mycode_size"><span style="font-family: Verdana;" class="mycode_font"><span style="text-decoration: underline;" class="mycode_u">Update</span></span></span><br />
<br />
<span style="font-size: medium;" class="mycode_size"><span style="font-size: small;" class="mycode_size"><span style="font-family: Verdana;" class="mycode_font">The Git Repository is live, and can be found <a href="https://github.com/lagoevia/cahoa" target="_blank" rel="noopener" class="mycode_url">on GitHub</a></span></span></span><br />
<br />
<span style="font-size: small;" class="mycode_size"><span style="font-family: Verdana;" class="mycode_font">I'll update it over time, and give some progress updates here and on Discord.</span></span>]]></description>
			<content:encoded><![CDATA[<span style="font-size: large;" class="mycode_size"><span style="font-family: Verdana;" class="mycode_font"><span style="text-decoration: underline;" class="mycode_u">Information</span></span></span><br />
<br />
<span style="font-size: small;" class="mycode_size"><span style="font-family: Verdana;" class="mycode_font">CODE: A Hands-on Approach (cahoa) is a project that aims to serve as a hands-on tutorial for teaching programming (via PAWN, and currently SA-MP). People of different skill levels/experience will benefit from this, but it is mainly targeted at beginners.</span></span><br />
<br />
<span style="font-size: large;" class="mycode_size"><span style="font-family: Verdana;" class="mycode_font"><span style="text-decoration: underline;" class="mycode_u">Details</span></span></span><br />
<br />
<span style="font-size: small;" class="mycode_size">You'll find the most up to date draft as a GitHub Gist <a href="https://gist.github.com/lagoevia/1d2daa353c2dac189273d80e3af2f333" target="_blank" rel="noopener" class="mycode_url">here</a></span><br />
<br />
<span style="font-size: small;" class="mycode_size">I look forward to your responses and feedback!</span><br />
<br />
<span style="font-size: large;" class="mycode_size"><span style="font-family: Verdana;" class="mycode_font"><span style="text-decoration: underline;" class="mycode_u">Update</span></span></span><br />
<br />
<span style="font-size: medium;" class="mycode_size"><span style="font-size: small;" class="mycode_size"><span style="font-family: Verdana;" class="mycode_font">The Git Repository is live, and can be found <a href="https://github.com/lagoevia/cahoa" target="_blank" rel="noopener" class="mycode_url">on GitHub</a></span></span></span><br />
<br />
<span style="font-size: small;" class="mycode_size"><span style="font-family: Verdana;" class="mycode_font">I'll update it over time, and give some progress updates here and on Discord.</span></span>]]></content:encoded>
		</item>
		<item>
			<title><![CDATA[Learn to pawn (basic/medium/advanced level)]]></title>
			<link>https://www.burgershot.gg/showthread.php?tid=1404</link>
			<pubDate>Wed, 02 Dec 2020 13:09:02 +0000</pubDate>
			<dc:creator><![CDATA[<a href="https://www.burgershot.gg/member.php?action=profile&uid=2967">Ryder Sixz</a>]]></dc:creator>
			<guid isPermaLink="false">https://www.burgershot.gg/showthread.php?tid=1404</guid>
			<description><![CDATA[Hi, I know this may sound stupid XD but I do it with the best of intentions. Some time ago I downloaded a fairly complete tutorial on how to learn pawn. It is in Spanish (<span style="font-style: italic;" class="mycode_i"><span style="color: #005dc2;" class="mycode_color">you can translate it in 1 second with the tool that </span><span style="color: #008e02;" class="mycode_color"><span style="font-weight: bold;" class="mycode_b">Google Chrome</span> </span><span style="color: #005dc2;" class="mycode_color">brings</span></span>) Well, I hope it is helpful for you. When you download it, you only have to open it with a browser.<br />
<br />
<a href="http://www.mediafire.com/file/82qh8180xe6ept2/%5BTutorial" target="_blank" rel="noopener" class="mycode_url">+Aprender+pawn+(nivel+basico_medio_avanzado)+-+SA-MP+Forums.htm/file]http://www.mediafire.com/file/82qh8180xe6ept2/[Tutorial]+Aprender+pawn+(nivel+basico_medio_avanzado)+-+SA-MP+Forums.htm/file</a><br />
<br />
Personally, he helped me a lot. All credits to the <span style="font-size: medium;" class="mycode_size">creator of that post!</span>]]></description>
			<content:encoded><![CDATA[Hi, I know this may sound stupid XD but I do it with the best of intentions. Some time ago I downloaded a fairly complete tutorial on how to learn pawn. It is in Spanish (<span style="font-style: italic;" class="mycode_i"><span style="color: #005dc2;" class="mycode_color">you can translate it in 1 second with the tool that </span><span style="color: #008e02;" class="mycode_color"><span style="font-weight: bold;" class="mycode_b">Google Chrome</span> </span><span style="color: #005dc2;" class="mycode_color">brings</span></span>) Well, I hope it is helpful for you. When you download it, you only have to open it with a browser.<br />
<br />
<a href="http://www.mediafire.com/file/82qh8180xe6ept2/%5BTutorial" target="_blank" rel="noopener" class="mycode_url">+Aprender+pawn+(nivel+basico_medio_avanzado)+-+SA-MP+Forums.htm/file]http://www.mediafire.com/file/82qh8180xe6ept2/[Tutorial]+Aprender+pawn+(nivel+basico_medio_avanzado)+-+SA-MP+Forums.htm/file</a><br />
<br />
Personally, he helped me a lot. All credits to the <span style="font-size: medium;" class="mycode_size">creator of that post!</span>]]></content:encoded>
		</item>
		<item>
			<title><![CDATA[Kyosaur's Plugin Development Guide]]></title>
			<link>https://www.burgershot.gg/showthread.php?tid=1309</link>
			<pubDate>Tue, 03 Nov 2020 18:19:19 +0000</pubDate>
			<dc:creator><![CDATA[<a href="https://www.burgershot.gg/member.php?action=profile&uid=2900">Bee</a>]]></dc:creator>
			<guid isPermaLink="false">https://www.burgershot.gg/showthread.php?tid=1309</guid>
			<description><![CDATA[Hey everyone,<br />
<br />
I recently started learning about plugin development for SA:MP. I asked around for a good tutorial and a super awesome guy in Discord suggested me to take a look at Kyosaur's Plugin Development Guide. I read it and it is pretty amazing. He also suggested that someone should port over the guide to burgershot.gg. So here it is. <br />
<br />
<a href="https://github.com/rabeehrz/samp-guides/blob/master/plugin-development-guide.md" target="_blank" rel="noopener" class="mycode_url">View in Github</a><br />
<br />
<span style="font-weight: bold;" class="mycode_b">Is it exactly the same?</span><br />
<br />
The content is 99.9% same. 99.9% because some threads were removed and I couldn't link it. It was broken even in the original post. I updated the existing links and made some formatting changes while converting it into Markdown.<br />
<br />
<span style="font-weight: bold;" class="mycode_b">Why is it in Markdown?</span><br />
<br />
I tried use the BB Code in Burgershot. It was messed up and insanely buggy. I kept losing content and had to start over again and again. <span style="font-weight: bold;" class="mycode_b">Also, Why not in Markdown?</span>]]></description>
			<content:encoded><![CDATA[Hey everyone,<br />
<br />
I recently started learning about plugin development for SA:MP. I asked around for a good tutorial and a super awesome guy in Discord suggested me to take a look at Kyosaur's Plugin Development Guide. I read it and it is pretty amazing. He also suggested that someone should port over the guide to burgershot.gg. So here it is. <br />
<br />
<a href="https://github.com/rabeehrz/samp-guides/blob/master/plugin-development-guide.md" target="_blank" rel="noopener" class="mycode_url">View in Github</a><br />
<br />
<span style="font-weight: bold;" class="mycode_b">Is it exactly the same?</span><br />
<br />
The content is 99.9% same. 99.9% because some threads were removed and I couldn't link it. It was broken even in the original post. I updated the existing links and made some formatting changes while converting it into Markdown.<br />
<br />
<span style="font-weight: bold;" class="mycode_b">Why is it in Markdown?</span><br />
<br />
I tried use the BB Code in Burgershot. It was messed up and insanely buggy. I kept losing content and had to start over again and again. <span style="font-weight: bold;" class="mycode_b">Also, Why not in Markdown?</span>]]></content:encoded>
		</item>
		<item>
			<title><![CDATA[How to use SAMPCTL vscode/sublime.]]></title>
			<link>https://www.burgershot.gg/showthread.php?tid=1256</link>
			<pubDate>Mon, 19 Oct 2020 10:01:09 +0000</pubDate>
			<dc:creator><![CDATA[<a href="https://www.burgershot.gg/member.php?action=profile&uid=2339">XoMoX</a>]]></dc:creator>
			<guid isPermaLink="false">https://www.burgershot.gg/showthread.php?tid=1256</guid>
			<description><![CDATA[<div style="text-align: center;" class="mycode_align"><span style="font-weight: bold;" class="mycode_b"><span style="color: #1e92f7;" class="mycode_color"><span style="font-size: x-large;" class="mycode_size">INTRODUCTION TO SAMPCTL</span></span></span></div>
<div style="text-align: left;" class="mycode_align"><span style="font-size: medium;" class="mycode_size"><span style="color: #000000;" class="mycode_color">Sampctl is like a node npm just like in node.js but its in pawn there are many compatible libraries aka includes, there are many reasons to use sampctl. <br />
1st is the compiler for vscode and sublime it can support both editors. <br />
2nd you can install libraries/includes in just a line.<br />
3rd you can say goodbye to server.cfg, in sampctl you will use pawn.json instead of server.cfg</span></span></div>
<br />
<div style="text-align: center;" class="mycode_align"><span style="font-weight: bold;" class="mycode_b"><span style="font-size: x-large;" class="mycode_size"><span style="color: #1e92f7;" class="mycode_color">INSTALLING SAMPCTL</span></span></span></div>
<br />
<span style="font-size: medium;" class="mycode_size">There are 2 ways to install this (Actually there are 3 or smth).<br />
First way is using SCOOP, (INSTALL SCOOP <a href="https://scoop.sh/" target="_blank" rel="noopener" class="mycode_url">HERE</a> or just run <div class="codeblock"><div class="title">Code:</div><div class="body" dir="ltr"><code>iex (new-object net.webclient).downloadstring('https://get.scoop.sh')</code></div></div>) after that you can now you can execute this<br />
<div class="codeblock"><div class="title">Code:</div><div class="body" dir="ltr"><code>scoop bucket add southclaws https://github.com/Southclaws/scoops.git; scoop install sampct</code></div></div></span><br />
<span style="font-size: medium;" class="mycode_size">from another line. You can now run `sampctl` in PowerShell, CMD, git bash but you will need to restart any other open terminals if you install scoop for the first time so it is loaded in the the PATH environmet variable properly</span><br />
<br />
<span style="color: #24292e;" class="mycode_color"><span style="font-size: medium;" class="mycode_size">The second way is installing it manually here are the steps.</span></span><br />
<span style="color: #24292e;" class="mycode_color"><span style="font-size: medium;" class="mycode_size">1. Create a directory on your `c:\` drive root named `sampctl`</span></span><br />
<span style="color: #24292e;" class="mycode_color"><span style="font-size: medium;" class="mycode_size">2. Download a Window release of sampctl and place the .exe file into the `sampctl` directory you created</span></span><br />
<span style="color: #24292e;" class="mycode_color"><span style="font-size: medium;" class="mycode_size">3. </span></span><a href="https://github.com/Southclaws/sampctl/wiki/Windows-PATH" target="_blank" rel="noopener" class="mycode_url"><span style="color: #24292e;" class="mycode_color"><span style="font-size: large;" class="mycode_size">Add `c:\sampctl\` to your system PATH.<br />
</span></span></a><span style="color: #24292e;" class="mycode_color"><span style="font-size: medium;" class="mycode_size">4. Open a new shell (PowerShell, CMD, or bash</span></span><span style="color: #24292e;" class="mycode_color"><span style="font-size: medium;" class="mycode_size">) and type `sampctl` - if you did the above correctly, you'll see sampctl help.</span></span><br />
<br />
<br />
<div style="text-align: center;" class="mycode_align"><span style="color: #1e92f7;" class="mycode_color"><span style="font-size: x-large;" class="mycode_size"><span style="font-weight: bold;" class="mycode_b">USING SAMPCTL</span><br />
</span></span><br />
<div style="text-align: left;" class="mycode_align"><span style="color: #24292e;" class="mycode_color"><span style="font-size: medium;" class="mycode_size"><span style="font-weight: bold;" class="mycode_b"> </span>1. How to install sampctl to your gamemode. <br />
Open up PowerShell or CMD in your server files directory (Where samp-server.exe and server.cfg located) use `sampctl p init` and you'll see this.<br />
<img src="https://i.imgur.com/imLKAR2.png?1" loading="lazy"  alt="[Image: imLKAR2.png?1]" class="mycode_img" /></span></span></div>
</div>
<span style="font-size: medium;" class="mycode_size">i never used .yaml im only using .json so select what you want here and you need to give information for your <span style="font-weight: bold;" class="mycode_b">gamemode/library</span> like if you want it to release to Github.</span><br />
<br />
<span style="font-size: medium;" class="mycode_size">Now it will gonna ask you if you want to publish a <span style="font-weight: bold;" class="mycode_b">gamemode/library</span> like this.</span><br />
<span style="font-size: medium;" class="mycode_size"><img src="https://i.imgur.com/nNHalYm.png?1" loading="lazy"  alt="[Image: nNHalYm.png?1]" class="mycode_img" /></span><br />
<span style="font-size: medium;" class="mycode_size">Library means if you want to create a reusable includes this is where the fun begins, if you create a Library using sampctl we can download that using one command line which we will cover later.</span><br />
<br />
<span style="font-size: medium;" class="mycode_size">Now you can select your Text editor you'll see an option like this.</span><br />
<span style="font-size: medium;" class="mycode_size"><img src="https://i.imgur.com/b26GovK.png?1" loading="lazy"  alt="[Image: b26GovK.png?1]" class="mycode_img" /></span><br />
<span style="font-size: medium;" class="mycode_size">You can go select any <span style="font-weight: bold;" class="mycode_b">Text editors</span> you want (vscode or Sublime) for me I'm gonna select <span style="font-weight: bold;" class="mycode_b">VScode </span>for this.</span><br />
<br />
<span style="font-size: medium;" class="mycode_size">Then lastly you're gonna select your <span style="font-weight: bold;" class="mycode_b">main .pwn</span> file<br />
<img src="https://i.imgur.com/VA4bFrH.png?1" loading="lazy"  alt="[Image: VA4bFrH.png?1]" class="mycode_img" /></span><br />
<span style="font-size: medium;" class="mycode_size"><span style="font-weight: bold;" class="mycode_b">IT MUST BE YOUR MAIN .PWN FILE</span> but don't worry you will be able to change this in your pawn.json HAHA now you're done. If you're using vscode you can simply do <span style="font-weight: bold;" class="mycode_b">ctrl + shift + b</span> to compile your script I think the same goes to Sublime</span><br />
<br />
<span style="font-size: medium;" class="mycode_size">2. How to install dependencies.</span><br />
<span style="font-size: medium;" class="mycode_size">Well you can only install dependencies compatible or made with sampctl you've seen an option there earlier in the tutorial with the selection "gamemode / library" if you create a library you can just simply install it in your gamemode with just 1 line<br />
`<span style="font-weight: bold;" class="mycode_b">sampctl p install</span>` so for instance `<span style="font-weight: bold;" class="mycode_b">sampctl p install CnRXomoX/X_Enex</span>` now some of you are asking "How did he get the link"(Assuming you're asking) well its pretty easy you can take a look at this picture</span><br />
<span style="font-size: medium;" class="mycode_size"><img src="https://i.imgur.com/i06WID9.png?1" loading="lazy"  alt="[Image: i06WID9.png?1]" class="mycode_img" /></span><br />
<span style="font-size: medium;" class="mycode_size">Do you see the difference? you can enter it without the github.com because sampctl automatically adds it without hesitation downloading it 1 by 1 and this is the fun thing about sampctl it automatically downloads the .dll file or .so files automatically!</span><br />
<span style="font-size: medium;" class="mycode_size">So no need to search "How to fix .dll error samp script".</span><br />
<br />
<span style="font-size: medium;" class="mycode_size">You can see your downloaded libraries/includes in your <span style="font-weight: bold;" class="mycode_b">dependency folder</span></span><br />
<span style="font-size: medium;" class="mycode_size">If you just cloned your gamemode onto another <span style="font-weight: bold;" class="mycode_b">PC/LAPTOP</span> you can run `<span style="font-weight: bold;" class="mycode_b">sampctl p ensure</span>` to download the libraries/includes that is in your dependencies folder and .dll files in your plugins!</span><br />
<br />
<div style="text-align: center;" class="mycode_align"><span style="font-weight: bold;" class="mycode_b"><span style="color: #1e92f7;" class="mycode_color"><span style="font-size: xx-large;" class="mycode_size">Sources.</span></span></span><br />
<div style="text-align: left;" class="mycode_align"><span style="color: #000000;" class="mycode_color"><span style="font-size: large;" class="mycode_size">sampctl GitHub repo: <a href="https://github.com/Southclaws/sampctl" target="_blank" rel="noopener" class="mycode_url">https://github.com/Southclaws/sampctl<br />
</a>sampctl .exe file: <a href="https://github.com/sampctl/installer/releases" target="_blank" rel="noopener" class="mycode_url">https://github.com/sampctl/installer/releases<br />
</a>You can go visit the GitHub repo for additional information</span></span></div>
</div>
<br />
<span style="font-size: medium;" class="mycode_size"><span style="color: #ffffff;" class="mycode_color"><span style="font-size: medium;" class="mycode_size"><span style="font-family: 'Proxima Nova Regular', 'Helvetica Neue', Helvetica, Arial, sans-serif;" class="mycode_font">[img]https://i.imgur.com/nNHalYm.png?1[/img</span></span></span></span>]]></description>
			<content:encoded><![CDATA[<div style="text-align: center;" class="mycode_align"><span style="font-weight: bold;" class="mycode_b"><span style="color: #1e92f7;" class="mycode_color"><span style="font-size: x-large;" class="mycode_size">INTRODUCTION TO SAMPCTL</span></span></span></div>
<div style="text-align: left;" class="mycode_align"><span style="font-size: medium;" class="mycode_size"><span style="color: #000000;" class="mycode_color">Sampctl is like a node npm just like in node.js but its in pawn there are many compatible libraries aka includes, there are many reasons to use sampctl. <br />
1st is the compiler for vscode and sublime it can support both editors. <br />
2nd you can install libraries/includes in just a line.<br />
3rd you can say goodbye to server.cfg, in sampctl you will use pawn.json instead of server.cfg</span></span></div>
<br />
<div style="text-align: center;" class="mycode_align"><span style="font-weight: bold;" class="mycode_b"><span style="font-size: x-large;" class="mycode_size"><span style="color: #1e92f7;" class="mycode_color">INSTALLING SAMPCTL</span></span></span></div>
<br />
<span style="font-size: medium;" class="mycode_size">There are 2 ways to install this (Actually there are 3 or smth).<br />
First way is using SCOOP, (INSTALL SCOOP <a href="https://scoop.sh/" target="_blank" rel="noopener" class="mycode_url">HERE</a> or just run <div class="codeblock"><div class="title">Code:</div><div class="body" dir="ltr"><code>iex (new-object net.webclient).downloadstring('https://get.scoop.sh')</code></div></div>) after that you can now you can execute this<br />
<div class="codeblock"><div class="title">Code:</div><div class="body" dir="ltr"><code>scoop bucket add southclaws https://github.com/Southclaws/scoops.git; scoop install sampct</code></div></div></span><br />
<span style="font-size: medium;" class="mycode_size">from another line. You can now run `sampctl` in PowerShell, CMD, git bash but you will need to restart any other open terminals if you install scoop for the first time so it is loaded in the the PATH environmet variable properly</span><br />
<br />
<span style="color: #24292e;" class="mycode_color"><span style="font-size: medium;" class="mycode_size">The second way is installing it manually here are the steps.</span></span><br />
<span style="color: #24292e;" class="mycode_color"><span style="font-size: medium;" class="mycode_size">1. Create a directory on your `c:\` drive root named `sampctl`</span></span><br />
<span style="color: #24292e;" class="mycode_color"><span style="font-size: medium;" class="mycode_size">2. Download a Window release of sampctl and place the .exe file into the `sampctl` directory you created</span></span><br />
<span style="color: #24292e;" class="mycode_color"><span style="font-size: medium;" class="mycode_size">3. </span></span><a href="https://github.com/Southclaws/sampctl/wiki/Windows-PATH" target="_blank" rel="noopener" class="mycode_url"><span style="color: #24292e;" class="mycode_color"><span style="font-size: large;" class="mycode_size">Add `c:\sampctl\` to your system PATH.<br />
</span></span></a><span style="color: #24292e;" class="mycode_color"><span style="font-size: medium;" class="mycode_size">4. Open a new shell (PowerShell, CMD, or bash</span></span><span style="color: #24292e;" class="mycode_color"><span style="font-size: medium;" class="mycode_size">) and type `sampctl` - if you did the above correctly, you'll see sampctl help.</span></span><br />
<br />
<br />
<div style="text-align: center;" class="mycode_align"><span style="color: #1e92f7;" class="mycode_color"><span style="font-size: x-large;" class="mycode_size"><span style="font-weight: bold;" class="mycode_b">USING SAMPCTL</span><br />
</span></span><br />
<div style="text-align: left;" class="mycode_align"><span style="color: #24292e;" class="mycode_color"><span style="font-size: medium;" class="mycode_size"><span style="font-weight: bold;" class="mycode_b"> </span>1. How to install sampctl to your gamemode. <br />
Open up PowerShell or CMD in your server files directory (Where samp-server.exe and server.cfg located) use `sampctl p init` and you'll see this.<br />
<img src="https://i.imgur.com/imLKAR2.png?1" loading="lazy"  alt="[Image: imLKAR2.png?1]" class="mycode_img" /></span></span></div>
</div>
<span style="font-size: medium;" class="mycode_size">i never used .yaml im only using .json so select what you want here and you need to give information for your <span style="font-weight: bold;" class="mycode_b">gamemode/library</span> like if you want it to release to Github.</span><br />
<br />
<span style="font-size: medium;" class="mycode_size">Now it will gonna ask you if you want to publish a <span style="font-weight: bold;" class="mycode_b">gamemode/library</span> like this.</span><br />
<span style="font-size: medium;" class="mycode_size"><img src="https://i.imgur.com/nNHalYm.png?1" loading="lazy"  alt="[Image: nNHalYm.png?1]" class="mycode_img" /></span><br />
<span style="font-size: medium;" class="mycode_size">Library means if you want to create a reusable includes this is where the fun begins, if you create a Library using sampctl we can download that using one command line which we will cover later.</span><br />
<br />
<span style="font-size: medium;" class="mycode_size">Now you can select your Text editor you'll see an option like this.</span><br />
<span style="font-size: medium;" class="mycode_size"><img src="https://i.imgur.com/b26GovK.png?1" loading="lazy"  alt="[Image: b26GovK.png?1]" class="mycode_img" /></span><br />
<span style="font-size: medium;" class="mycode_size">You can go select any <span style="font-weight: bold;" class="mycode_b">Text editors</span> you want (vscode or Sublime) for me I'm gonna select <span style="font-weight: bold;" class="mycode_b">VScode </span>for this.</span><br />
<br />
<span style="font-size: medium;" class="mycode_size">Then lastly you're gonna select your <span style="font-weight: bold;" class="mycode_b">main .pwn</span> file<br />
<img src="https://i.imgur.com/VA4bFrH.png?1" loading="lazy"  alt="[Image: VA4bFrH.png?1]" class="mycode_img" /></span><br />
<span style="font-size: medium;" class="mycode_size"><span style="font-weight: bold;" class="mycode_b">IT MUST BE YOUR MAIN .PWN FILE</span> but don't worry you will be able to change this in your pawn.json HAHA now you're done. If you're using vscode you can simply do <span style="font-weight: bold;" class="mycode_b">ctrl + shift + b</span> to compile your script I think the same goes to Sublime</span><br />
<br />
<span style="font-size: medium;" class="mycode_size">2. How to install dependencies.</span><br />
<span style="font-size: medium;" class="mycode_size">Well you can only install dependencies compatible or made with sampctl you've seen an option there earlier in the tutorial with the selection "gamemode / library" if you create a library you can just simply install it in your gamemode with just 1 line<br />
`<span style="font-weight: bold;" class="mycode_b">sampctl p install</span>` so for instance `<span style="font-weight: bold;" class="mycode_b">sampctl p install CnRXomoX/X_Enex</span>` now some of you are asking "How did he get the link"(Assuming you're asking) well its pretty easy you can take a look at this picture</span><br />
<span style="font-size: medium;" class="mycode_size"><img src="https://i.imgur.com/i06WID9.png?1" loading="lazy"  alt="[Image: i06WID9.png?1]" class="mycode_img" /></span><br />
<span style="font-size: medium;" class="mycode_size">Do you see the difference? you can enter it without the github.com because sampctl automatically adds it without hesitation downloading it 1 by 1 and this is the fun thing about sampctl it automatically downloads the .dll file or .so files automatically!</span><br />
<span style="font-size: medium;" class="mycode_size">So no need to search "How to fix .dll error samp script".</span><br />
<br />
<span style="font-size: medium;" class="mycode_size">You can see your downloaded libraries/includes in your <span style="font-weight: bold;" class="mycode_b">dependency folder</span></span><br />
<span style="font-size: medium;" class="mycode_size">If you just cloned your gamemode onto another <span style="font-weight: bold;" class="mycode_b">PC/LAPTOP</span> you can run `<span style="font-weight: bold;" class="mycode_b">sampctl p ensure</span>` to download the libraries/includes that is in your dependencies folder and .dll files in your plugins!</span><br />
<br />
<div style="text-align: center;" class="mycode_align"><span style="font-weight: bold;" class="mycode_b"><span style="color: #1e92f7;" class="mycode_color"><span style="font-size: xx-large;" class="mycode_size">Sources.</span></span></span><br />
<div style="text-align: left;" class="mycode_align"><span style="color: #000000;" class="mycode_color"><span style="font-size: large;" class="mycode_size">sampctl GitHub repo: <a href="https://github.com/Southclaws/sampctl" target="_blank" rel="noopener" class="mycode_url">https://github.com/Southclaws/sampctl<br />
</a>sampctl .exe file: <a href="https://github.com/sampctl/installer/releases" target="_blank" rel="noopener" class="mycode_url">https://github.com/sampctl/installer/releases<br />
</a>You can go visit the GitHub repo for additional information</span></span></div>
</div>
<br />
<span style="font-size: medium;" class="mycode_size"><span style="color: #ffffff;" class="mycode_color"><span style="font-size: medium;" class="mycode_size"><span style="font-family: 'Proxima Nova Regular', 'Helvetica Neue', Helvetica, Arial, sans-serif;" class="mycode_font">[img]https://i.imgur.com/nNHalYm.png?1[/img</span></span></span></span>]]></content:encoded>
		</item>
		<item>
			<title><![CDATA[Weapon Saving MySQL]]></title>
			<link>https://www.burgershot.gg/showthread.php?tid=1201</link>
			<pubDate>Fri, 02 Oct 2020 10:44:35 +0000</pubDate>
			<dc:creator><![CDATA[<a href="https://www.burgershot.gg/member.php?action=profile&uid=2339">XoMoX</a>]]></dc:creator>
			<guid isPermaLink="false">https://www.burgershot.gg/showthread.php?tid=1201</guid>
			<description><![CDATA[<div style="text-align: center;" class="mycode_align"><span style="font-size: large;" class="mycode_size">Originated From Vince</span></div>
<div style="text-align: left;" class="mycode_align"><span style="font-size: large;" class="mycode_size"><span style="font-weight: bold;" class="mycode_b"><span style="text-decoration: underline;" class="mycode_u"><span style="color: #1e92f7;" class="mycode_color">Weapon Information</span></span></span></span></div>
<br />
<span style="color: #000000;" class="mycode_color">There are 13 different weapon slots and thus a player can theoretically hold up to 13 different weapons. In practice, though, this is usually more like 4 or 5.</span><br />
<span style="color: #000000;" class="mycode_color"><br />
<img src="http://puu.sh/7Y1My.png" loading="lazy"  alt="[Image: 7Y1My.png]" class="mycode_img" /><br />
<br />
This structure allows for a more compact view and allows for the use of aggregate functions such as COUNT(). This allows me to find out how many weapons each player has, how many players have an M4 or even the total amount of ammo currently circulating (for a specific weapon). This may all seem trivial but it is difficult, if not impossible, to achieve with your average non-normalized "weapon1, ammo1 ... weapon13, ammo13" approach.</span><br />
<br />
From the above screenshot we can deduct that the player 1 has 3 weapons: a nite stick (id 3) with 1 ammo, a desert eagle (id 24) with 21 ammo and an M4 (id 31) with 266 ammo.<br />
<br />
<span style="color: #1e92f7;" class="mycode_color"><span style="font-weight: bold;" class="mycode_b"><span style="text-decoration: underline;" class="mycode_u">Creating The Table</span></span></span><br />
<span style="color: #44b8ff;" class="mycode_color">userid </span>is a reference to the player's unique ID which is stored in another table, along with their name, password, etc. Notice that phpMyAdmin conveniently makes the userid clickable if a foreign key exists. <span style="color: #44b8ff;" class="mycode_color">weaponid </span>is simply the weaponid as is returned from functions like GetPlayerWeapon and GetPlayerWeaponData. <span style="color: #44b8ff;" class="mycode_color">ammo </span>holds the ammunition associated with aforementioned weaponid.<br />
<br />
<img src="https://i.imgur.com/4m11mSS.png" loading="lazy"  alt="[Image: 4m11mSS.png]" class="mycode_img" /><br />
<br />
The options you need to edit are marked in yellow. Note that the type and attributes of the userid may differ in your case: this field needs to be declared with the exact same definition as your main userid. This may mean that you do not need to set that field to unsigned. The userid does need to be declared as an index though. It is neither a primary key, nor an unique key. For the weaponid we choose an unsigned tinyint since we're only dealing with non-negative numbers up to 46. The ammo is declared unsigned as well since there's no such thing as negative ammunition. Lastly, don't forget to set the engine to InnoDB. Click Save to create the table.<br />
<br />
<span style="color: #1e92f7;" class="mycode_color"><span style="font-weight: bold;" class="mycode_b"><span style="text-decoration: underline;" class="mycode_u">Setting Limits</span></span></span><br />
You should've been brought to the structures tab of the table you just created. Navigate there if this isn't the case.<br />
Before continuing, we will first impose some extra limits to avoid cluttering the table with useless data later on. Each player (userid) can only hold exactly one specific weapon (weaponid) at once. This is a PRIMARY property (Everytable needs to have a PRIMARY key). Therefore, tick the checkboxes in front of userid and weaponid. Then click on the UNIQUE button underneath the table.<br />
<br />
<img src="https://imgur.com/lROnnYA.png" loading="lazy"  alt="[Image: lROnnYA.png]" class="mycode_img" /><br />
<br />
<span style="color: #1e92f7;" class="mycode_color"><span style="font-weight: bold;" class="mycode_b"><span style="text-decoration: underline;" class="mycode_u">Creating the foreign key<br />
</span></span></span><br />
You should've been brought back to the structures tab. Navigate there if this isn't the case. Underneath the structure definition you should see a link titled Relation view. Click this to be brought to the "relation creator".<br />
<br />
<img src="http://i.imgur.com/76QZOqP.png" loading="lazy"  alt="[Image: 76QZOqP.png]" class="mycode_img" /><br />
<br />
I'm creating a link to the <span style="font-style: italic;" class="mycode_i">id </span>field in the table <span style="font-style: italic;" class="mycode_i">playerinfo </span>in the database <span style="font-style: italic;" class="mycode_i">vcnr</span>. Your table and database will be called differently. Select the proper ID. Note that for fields to show up in this list, they need to be defined as a key! We also want any changes made in the main table to be CASCADED into this table. Click Save. This concludes the table creation part in phpMyAdmin. Now back to Pawn.<br />
<br />
<span style="color: #1e92f7;" class="mycode_color"><span style="font-weight: bold;" class="mycode_b"><span style="text-decoration: underline;" class="mycode_u">Saving</span></span></span><br />
<br />
<span style="color: #000000;" class="mycode_color">For this table, we will only use SELECT, INSERT and DELETE queries. There will be no real UPDATE queries. Instead, we will only use a special insert query:</span><br />
<br />
<span style="color: #000000;" class="mycode_color"><div class="codeblock"><div class="title">Code:</div><div class="body" dir="ltr"><code>INSERT INTO ... ON DUPLICATE KEY UPDATE ...</code></div></div></span><br />
<br />
<span style="color: #000000;" class="mycode_color">This query will try to insert the data as normal. If this fails because the data already exists (duplicate key) it will instead perform an update. In our context this means that we will merely update the ammo if a weaponid is already present for a specific user.</span><br />
<br />
<span style="color: #000000;" class="mycode_color"><div class="codeblock"><div class="title">Code:</div><div class="body" dir="ltr"><code>[/color]<br />
new<br />
    weaponid,<br />
    ammo;<br />
    <br />
for(new i; i &lt; 13; i++) // looping through all weapon slots (0 - 12)<br />
{<br />
    GetPlayerWeaponData(playerid, i, weaponid, ammo); // get weaponid and ammo<br />
<br />
    if(!weaponid) continue; // don't insert if there's no weapon in this slot<br />
    <br />
    mysql_format(userDB, mysqlquery, sizeof(mysqlquery), "INSERT INTO player_weapons VALUES (%d, %d, %d) ON DUPLICATE KEY UPDATE ammo = %d;", PlayerInfo[playerid][pSQLID], weaponid, ammo, ammo);<br />
    mysql_pquery(userDB, mysqlquery); // parallel queries<br />
}<br />
<br />
[color=#000000]}</code></div></div></span><br />
<br />
<span style="color: #000000;" class="mycode_color">The above snippet will insert or update all the weapons the player currently has. I am using parallel queries for speed: the order in which the inserts are performed isn't at all important. You will need to substitute the userid variable with your own. The same query can also be used stand-alone in other places. You can, for example, write a hook for GivePlayerWeapon which immediately performs an insert as soon as the weapon is given.</span><br />
<br />
<span style="font-weight: bold;" class="mycode_b"><span style="text-decoration: underline;" class="mycode_u"><span style="color: #1e92f7;" class="mycode_color">Loading</span></span></span><br />
<br />
Now to retrieve this data and give the players their weapons back. Our standard select query;<br />
<br />
<div class="codeblock"><div class="title">Code:</div><div class="body" dir="ltr"><code>SELECT weaponid, ammo FROM player_weapons WHERE userid = %d;</code></div></div><br />
<div class="codeblock"><div class="title">Code:</div><div class="body" dir="ltr"><code>public OnLoadPlayerWeapons(playerid)<br />
{<br />
    <br />
new<br />
        rows,<br />
        weaponid,<br />
        ammo;<br />
    cache_get_row_count(rows);<br />
    for(new i; i &lt; rows; i++) // loop through all the rows that were found<br />
    {<br />
        cache_get_value_name_int(i, "weaponid", weaponid);<br />
        cache_get_value_name_int(i, "ammo", ammo;<br />
        if(!(0 &lt;= weaponid &lt;= 46)) // check if weapon is valid (should be)<br />
        {<br />
            printf("[info] Warning: OnLoadPlayerWeapons - Unknown weaponid '%d'. Skipping.", weaponid);<br />
            continue;<br />
        }<br />
        <br />
        GivePlayerWeapon(playerid, weaponid, ammo); <br />
    }<br />
    return;<br />
<br />
}</code></div></div><br />
<span style="font-weight: bold;" class="mycode_b"><span style="text-decoration: underline;" class="mycode_u"><span style="color: #1e92f7;" class="mycode_color">Purging obsolete data</span></span></span><br />
<br />
<span style="color: #000000;" class="mycode_color">Whenever a weapon is taken away, do not forget to delete it from the database otherwise it will be returned to the player when they next join. You could write a hook for ResetPlayerWeapons. It may also be possible that weapons that have no ammo are left behind in the table. This doesn't affect anything in-game and can be cleaned up with a query (delete where ammo = 0) when the server starts, or on a cron job.</span>]]></description>
			<content:encoded><![CDATA[<div style="text-align: center;" class="mycode_align"><span style="font-size: large;" class="mycode_size">Originated From Vince</span></div>
<div style="text-align: left;" class="mycode_align"><span style="font-size: large;" class="mycode_size"><span style="font-weight: bold;" class="mycode_b"><span style="text-decoration: underline;" class="mycode_u"><span style="color: #1e92f7;" class="mycode_color">Weapon Information</span></span></span></span></div>
<br />
<span style="color: #000000;" class="mycode_color">There are 13 different weapon slots and thus a player can theoretically hold up to 13 different weapons. In practice, though, this is usually more like 4 or 5.</span><br />
<span style="color: #000000;" class="mycode_color"><br />
<img src="http://puu.sh/7Y1My.png" loading="lazy"  alt="[Image: 7Y1My.png]" class="mycode_img" /><br />
<br />
This structure allows for a more compact view and allows for the use of aggregate functions such as COUNT(). This allows me to find out how many weapons each player has, how many players have an M4 or even the total amount of ammo currently circulating (for a specific weapon). This may all seem trivial but it is difficult, if not impossible, to achieve with your average non-normalized "weapon1, ammo1 ... weapon13, ammo13" approach.</span><br />
<br />
From the above screenshot we can deduct that the player 1 has 3 weapons: a nite stick (id 3) with 1 ammo, a desert eagle (id 24) with 21 ammo and an M4 (id 31) with 266 ammo.<br />
<br />
<span style="color: #1e92f7;" class="mycode_color"><span style="font-weight: bold;" class="mycode_b"><span style="text-decoration: underline;" class="mycode_u">Creating The Table</span></span></span><br />
<span style="color: #44b8ff;" class="mycode_color">userid </span>is a reference to the player's unique ID which is stored in another table, along with their name, password, etc. Notice that phpMyAdmin conveniently makes the userid clickable if a foreign key exists. <span style="color: #44b8ff;" class="mycode_color">weaponid </span>is simply the weaponid as is returned from functions like GetPlayerWeapon and GetPlayerWeaponData. <span style="color: #44b8ff;" class="mycode_color">ammo </span>holds the ammunition associated with aforementioned weaponid.<br />
<br />
<img src="https://i.imgur.com/4m11mSS.png" loading="lazy"  alt="[Image: 4m11mSS.png]" class="mycode_img" /><br />
<br />
The options you need to edit are marked in yellow. Note that the type and attributes of the userid may differ in your case: this field needs to be declared with the exact same definition as your main userid. This may mean that you do not need to set that field to unsigned. The userid does need to be declared as an index though. It is neither a primary key, nor an unique key. For the weaponid we choose an unsigned tinyint since we're only dealing with non-negative numbers up to 46. The ammo is declared unsigned as well since there's no such thing as negative ammunition. Lastly, don't forget to set the engine to InnoDB. Click Save to create the table.<br />
<br />
<span style="color: #1e92f7;" class="mycode_color"><span style="font-weight: bold;" class="mycode_b"><span style="text-decoration: underline;" class="mycode_u">Setting Limits</span></span></span><br />
You should've been brought to the structures tab of the table you just created. Navigate there if this isn't the case.<br />
Before continuing, we will first impose some extra limits to avoid cluttering the table with useless data later on. Each player (userid) can only hold exactly one specific weapon (weaponid) at once. This is a PRIMARY property (Everytable needs to have a PRIMARY key). Therefore, tick the checkboxes in front of userid and weaponid. Then click on the UNIQUE button underneath the table.<br />
<br />
<img src="https://imgur.com/lROnnYA.png" loading="lazy"  alt="[Image: lROnnYA.png]" class="mycode_img" /><br />
<br />
<span style="color: #1e92f7;" class="mycode_color"><span style="font-weight: bold;" class="mycode_b"><span style="text-decoration: underline;" class="mycode_u">Creating the foreign key<br />
</span></span></span><br />
You should've been brought back to the structures tab. Navigate there if this isn't the case. Underneath the structure definition you should see a link titled Relation view. Click this to be brought to the "relation creator".<br />
<br />
<img src="http://i.imgur.com/76QZOqP.png" loading="lazy"  alt="[Image: 76QZOqP.png]" class="mycode_img" /><br />
<br />
I'm creating a link to the <span style="font-style: italic;" class="mycode_i">id </span>field in the table <span style="font-style: italic;" class="mycode_i">playerinfo </span>in the database <span style="font-style: italic;" class="mycode_i">vcnr</span>. Your table and database will be called differently. Select the proper ID. Note that for fields to show up in this list, they need to be defined as a key! We also want any changes made in the main table to be CASCADED into this table. Click Save. This concludes the table creation part in phpMyAdmin. Now back to Pawn.<br />
<br />
<span style="color: #1e92f7;" class="mycode_color"><span style="font-weight: bold;" class="mycode_b"><span style="text-decoration: underline;" class="mycode_u">Saving</span></span></span><br />
<br />
<span style="color: #000000;" class="mycode_color">For this table, we will only use SELECT, INSERT and DELETE queries. There will be no real UPDATE queries. Instead, we will only use a special insert query:</span><br />
<br />
<span style="color: #000000;" class="mycode_color"><div class="codeblock"><div class="title">Code:</div><div class="body" dir="ltr"><code>INSERT INTO ... ON DUPLICATE KEY UPDATE ...</code></div></div></span><br />
<br />
<span style="color: #000000;" class="mycode_color">This query will try to insert the data as normal. If this fails because the data already exists (duplicate key) it will instead perform an update. In our context this means that we will merely update the ammo if a weaponid is already present for a specific user.</span><br />
<br />
<span style="color: #000000;" class="mycode_color"><div class="codeblock"><div class="title">Code:</div><div class="body" dir="ltr"><code>[/color]<br />
new<br />
    weaponid,<br />
    ammo;<br />
    <br />
for(new i; i &lt; 13; i++) // looping through all weapon slots (0 - 12)<br />
{<br />
    GetPlayerWeaponData(playerid, i, weaponid, ammo); // get weaponid and ammo<br />
<br />
    if(!weaponid) continue; // don't insert if there's no weapon in this slot<br />
    <br />
    mysql_format(userDB, mysqlquery, sizeof(mysqlquery), "INSERT INTO player_weapons VALUES (%d, %d, %d) ON DUPLICATE KEY UPDATE ammo = %d;", PlayerInfo[playerid][pSQLID], weaponid, ammo, ammo);<br />
    mysql_pquery(userDB, mysqlquery); // parallel queries<br />
}<br />
<br />
[color=#000000]}</code></div></div></span><br />
<br />
<span style="color: #000000;" class="mycode_color">The above snippet will insert or update all the weapons the player currently has. I am using parallel queries for speed: the order in which the inserts are performed isn't at all important. You will need to substitute the userid variable with your own. The same query can also be used stand-alone in other places. You can, for example, write a hook for GivePlayerWeapon which immediately performs an insert as soon as the weapon is given.</span><br />
<br />
<span style="font-weight: bold;" class="mycode_b"><span style="text-decoration: underline;" class="mycode_u"><span style="color: #1e92f7;" class="mycode_color">Loading</span></span></span><br />
<br />
Now to retrieve this data and give the players their weapons back. Our standard select query;<br />
<br />
<div class="codeblock"><div class="title">Code:</div><div class="body" dir="ltr"><code>SELECT weaponid, ammo FROM player_weapons WHERE userid = %d;</code></div></div><br />
<div class="codeblock"><div class="title">Code:</div><div class="body" dir="ltr"><code>public OnLoadPlayerWeapons(playerid)<br />
{<br />
    <br />
new<br />
        rows,<br />
        weaponid,<br />
        ammo;<br />
    cache_get_row_count(rows);<br />
    for(new i; i &lt; rows; i++) // loop through all the rows that were found<br />
    {<br />
        cache_get_value_name_int(i, "weaponid", weaponid);<br />
        cache_get_value_name_int(i, "ammo", ammo;<br />
        if(!(0 &lt;= weaponid &lt;= 46)) // check if weapon is valid (should be)<br />
        {<br />
            printf("[info] Warning: OnLoadPlayerWeapons - Unknown weaponid '%d'. Skipping.", weaponid);<br />
            continue;<br />
        }<br />
        <br />
        GivePlayerWeapon(playerid, weaponid, ammo); <br />
    }<br />
    return;<br />
<br />
}</code></div></div><br />
<span style="font-weight: bold;" class="mycode_b"><span style="text-decoration: underline;" class="mycode_u"><span style="color: #1e92f7;" class="mycode_color">Purging obsolete data</span></span></span><br />
<br />
<span style="color: #000000;" class="mycode_color">Whenever a weapon is taken away, do not forget to delete it from the database otherwise it will be returned to the player when they next join. You could write a hook for ResetPlayerWeapons. It may also be possible that weapons that have no ammo are left behind in the table. This doesn't affect anything in-game and can be cleaned up with a query (delete where ammo = 0) when the server starts, or on a cron job.</span>]]></content:encoded>
		</item>
		<item>
			<title><![CDATA[Make simple entrance]]></title>
			<link>https://www.burgershot.gg/showthread.php?tid=1153</link>
			<pubDate>Thu, 30 Jul 2020 10:08:55 +0000</pubDate>
			<dc:creator><![CDATA[<a href="https://www.burgershot.gg/member.php?action=profile&uid=1608">Tama</a>]]></dc:creator>
			<guid isPermaLink="false">https://www.burgershot.gg/showthread.php?tid=1153</guid>
			<description><![CDATA[Hello guys, today i want to teach you how to make a simple entrance, it's easy to make entrance.<br />
All you need to do just follow my instruction, okay ;)<br />
<br />
First, you need to download these includes below.<ul class="mycode_list"><li>sscanf -&gt; <a href="https://github.com/maddinat0r/sscanf/releases" target="_blank" rel="noopener" class="mycode_url">https://github.com/maddinat0r/sscanf/releases</a><br />
</li>
<li>streamer -&gt;<a href="https://github.com/samp-incognito/samp-streamer-plugin/releases" target="_blank" rel="noopener" class="mycode_url">https://github.com/samp-incognito/samp-s...n/releases</a><br />
</li>
<li>Pawn.CMD -&gt; <a href="https://github.com/urShadow/Pawn.CMD/releases" target="_blank" rel="noopener" class="mycode_url">https://github.com/urShadow/Pawn.CMD/releases</a> (or you can download your own version of CMD processor)<br />
</li>
</ul>
Then you need to extract each of that include to each folder. If you found .dll file, put it on Plugins and if you found .inc file you can put on "pawno/includes"<br />
Okay, i assuming you have extracted the include/plugins, now let's get started.<br />
<br />
Make a base script, like this:<br />
<div class="codeblock phpcodeblock"><div class="title">PHP Code:</div><div class="body"><div dir="ltr"><code><span style="color: #FF8000">#define&nbsp;FILTERSCRIPT<br /><br />#include&nbsp;&lt;a_samp&gt;<br />#include&nbsp;&lt;sscanf2&gt;<br />#include&nbsp;&lt;streamer&gt;<br />#include&nbsp;&lt;Pawn.CMD&gt;<br /><br /></span><span style="color: #007700">public&nbsp;</span><span style="color: #0000BB">OnFilterScriptInit</span><span style="color: #007700">()</span><span style="color: #0000BB"> </span><span style="color: #007700">{<br /></span><span style="color: #0000BB"> &nbsp; &nbsp;</span><span style="color: #007700">return&nbsp;</span><span style="color: #0000BB">1</span><span style="color: #007700">;<br />}<br /><br />public&nbsp;</span><span style="color: #0000BB">OnFilterScriptExit</span><span style="color: #007700">()</span><span style="color: #0000BB"> </span><span style="color: #007700">{<br /></span><span style="color: #0000BB"> &nbsp; &nbsp;</span><span style="color: #007700">return&nbsp;</span><span style="color: #0000BB">1</span><span style="color: #007700">;<br />}&nbsp;<br /></span></code></div></div></div><br />
Add MAX_ENTRANCE, enum (alias), and public variable like this:<br />
<div class="codeblock phpcodeblock"><div class="title">PHP Code:</div><div class="body"><div dir="ltr"><code><span style="color: #FF8000">#define&nbsp;MAX_ENTRANCE&nbsp;22&nbsp;//&nbsp;maximum&nbsp;entrance&nbsp;"server"&nbsp;could&nbsp;handle/store&nbsp;temporarily<br /><br /></span><span style="color: #0000BB">enum <br /> &nbsp;  e_ENTRANCE_DATA&nbsp;</span><span style="color: #007700">{<br /></span><span style="color: #0000BB"> &nbsp; &nbsp;bool</span><span style="color: #007700">:</span><span style="color: #0000BB">isExists</span><span style="color: #007700">,&nbsp;</span><span style="color: #FF8000">//&nbsp;checking&nbsp;if&nbsp;entrance&nbsp;exists<br /></span><span style="color: #0000BB"> &nbsp; &nbsp;name</span><span style="color: #007700">[</span><span style="color: #0000BB">24</span><span style="color: #007700">],&nbsp;</span><span style="color: #FF8000">//&nbsp;entrance&nbsp;name<br /></span><span style="color: #0000BB"> &nbsp; &nbsp;Float</span><span style="color: #007700">:</span><span style="color: #0000BB">pos</span><span style="color: #007700">[</span><span style="color: #0000BB">3</span><span style="color: #007700">],&nbsp;</span><span style="color: #FF8000">//&nbsp;outside&nbsp;position<br /></span><span style="color: #0000BB"> &nbsp; &nbsp;Float</span><span style="color: #007700">:</span><span style="color: #0000BB">intPos</span><span style="color: #007700">[</span><span style="color: #0000BB">3</span><span style="color: #007700">],&nbsp;</span><span style="color: #FF8000">//&nbsp;inside&nbsp;position<br /></span><span style="color: #0000BB"> &nbsp; &nbsp;int</span><span style="color: #007700">,&nbsp;</span><span style="color: #FF8000">//&nbsp;interior&nbsp;id<br /></span><span style="color: #0000BB"> &nbsp; &nbsp;world&nbsp;</span><span style="color: #FF8000">//&nbsp;world&nbsp;id<br /></span><span style="color: #007700">};<br />new&nbsp;</span><span style="color: #0000BB">EntranceData</span><span style="color: #007700">[</span><span style="color: #0000BB">MAX_ENTRANCE</span><span style="color: #007700">][</span><span style="color: #0000BB">e_ENTRANCE_DATA</span><span style="color: #007700">];&nbsp;<br /></span></code></div></div></div><br />
Next step is making a command, use your word like "entrancecreate, entranceedit, entrancedelete" or anything for the command name.<br />
And adding "security" like IsPlayerAdmin(playerid) you can preventing people from creating a entrance.<br />
You can do like this if you want:<br />
<div class="codeblock phpcodeblock"><div class="title">PHP Code:</div><div class="body"><div dir="ltr"><code><span style="color: #0000BB">CMD</span><span style="color: #007700">:</span><span style="color: #0000BB">makeentrance</span><span style="color: #007700">(</span><span style="color: #0000BB">playerid</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">params</span><span style="color: #007700">[])&nbsp;{<br /></span><span style="color: #0000BB"> &nbsp; &nbsp;</span><span style="color: #007700">if&nbsp;(!</span><span style="color: #0000BB">IsPlayerAdmin</span><span style="color: #007700">(</span><span style="color: #0000BB">playerid</span><span style="color: #007700">))&nbsp;return&nbsp;</span><span style="color: #0000BB">SendClientMessage</span><span style="color: #007700">(</span><span style="color: #0000BB">playerid</span><span style="color: #007700">,&nbsp;-</span><span style="color: #0000BB">1</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">"You&nbsp;are&nbsp;not&nbsp;administrator"</span><span style="color: #007700">);<br /></span><span style="color: #0000BB"> &nbsp; &nbsp;</span><span style="color: #007700">if&nbsp;(!</span><span style="color: #0000BB">isnull</span><span style="color: #007700">(</span><span style="color: #0000BB">params</span><span style="color: #007700">))&nbsp;return&nbsp;</span><span style="color: #0000BB">SendClientMessage</span><span style="color: #007700">(</span><span style="color: #0000BB">playerid</span><span style="color: #007700">,&nbsp;-</span><span style="color: #0000BB">1</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">"/makeentrance&nbsp;&lt;name&gt;"</span><span style="color: #007700">);&nbsp;</span><span style="color: #FF8000">//&nbsp;tell&nbsp;player&nbsp;if&nbsp;"params"&nbsp;is&nbsp;null&nbsp;<br /></span></code></div></div></div><br />
Inside the cmd, you need to add this.<br />
<div class="codeblock phpcodeblock"><div class="title">PHP Code:</div><div class="body"><div dir="ltr"><code><span style="color: #0000BB"> &nbsp; </span><span style="color: #FF8000">//&nbsp;getting&nbsp;the&nbsp;next&nbsp;slot&nbsp;with&nbsp;checking&nbsp;if&nbsp;isExists&nbsp;on&nbsp;"i"&nbsp;variable is&nbsp;false<br /></span><span style="color: #0000BB"> &nbsp; &nbsp;</span><span style="color: #007700">for&nbsp;(new&nbsp;</span><span style="color: #0000BB">i</span><span style="color: #007700">;&nbsp;</span><span style="color: #0000BB">i&nbsp;</span><span style="color: #007700">&lt;&nbsp;</span><span style="color: #0000BB">MAX_ENTRANCE</span><span style="color: #007700">;&nbsp;</span><span style="color: #0000BB">i&nbsp;</span><span style="color: #007700">++)&nbsp;if&nbsp;(!</span><span style="color: #0000BB">EntranceData</span><span style="color: #007700">[</span><span style="color: #0000BB">i</span><span style="color: #007700">][</span><span style="color: #0000BB">isExists</span><span style="color: #007700">])&nbsp;{<br /><br /></span><span style="color: #0000BB"> &nbsp; &nbsp; &nbsp; &nbsp;</span><span style="color: #FF8000">//&nbsp;storing&nbsp;useful&nbsp;data&nbsp;to&nbsp;server,&nbsp;this&nbsp;prevents&nbsp;for&nbsp;"false&nbsp;detection"<br /></span><span style="color: #0000BB"> &nbsp; &nbsp; &nbsp; &nbsp;EntranceData</span><span style="color: #007700">[</span><span style="color: #0000BB">i</span><span style="color: #007700">][</span><span style="color: #0000BB">isExists</span><span style="color: #007700">]&nbsp;=&nbsp;</span><span style="color: #0000BB">true</span><span style="color: #007700">;<br /><br /></span><span style="color: #0000BB"> &nbsp; &nbsp; &nbsp;  </span><span style="color: #FF8000">//you&nbsp;can&nbsp;use&nbsp;strcat&nbsp;if&nbsp;you&nbsp;want,&nbsp;but&nbsp;i&nbsp;prefer&nbsp;format<br /></span><span style="color: #0000BB"> &nbsp; &nbsp; &nbsp; &nbsp;format</span><span style="color: #007700">(</span><span style="color: #0000BB">EntranceData</span><span style="color: #007700">[</span><span style="color: #0000BB">i</span><span style="color: #007700">][</span><span style="color: #0000BB">name</span><span style="color: #007700">],&nbsp;</span><span style="color: #0000BB">24</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">params</span><span style="color: #007700">);<br /><br /></span><span style="color: #0000BB"> &nbsp; &nbsp; &nbsp; </span><span style="color: #FF8000">//&nbsp;getting&nbsp;player&nbsp;position&nbsp;and&nbsp;angle&nbsp;for&nbsp;teleport/spawning&nbsp;pickup<br /></span><span style="color: #0000BB"> &nbsp; &nbsp; &nbsp; &nbsp;GetPlayerPos</span><span style="color: #007700">(</span><span style="color: #0000BB">playerid</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">EntranceData</span><span style="color: #007700">[</span><span style="color: #0000BB">i</span><span style="color: #007700">][</span><span style="color: #0000BB">pos</span><span style="color: #007700">][</span><span style="color: #0000BB">0</span><span style="color: #007700">],</span><span style="color: #0000BB"> EntranceData</span><span style="color: #007700">[</span><span style="color: #0000BB">i</span><span style="color: #007700">][</span><span style="color: #0000BB">pos</span><span style="color: #007700">][</span><span style="color: #0000BB">1</span><span style="color: #007700">],</span><span style="color: #0000BB"> EntranceData</span><span style="color: #007700">[</span><span style="color: #0000BB">i</span><span style="color: #007700">][</span><span style="color: #0000BB">pos</span><span style="color: #007700">][</span><span style="color: #0000BB">2</span><span style="color: #007700">]);<br /></span><span style="color: #0000BB"> &nbsp; &nbsp; &nbsp; &nbsp;GetPlayerFacingAngle</span><span style="color: #007700">(</span><span style="color: #0000BB">playerid</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">EntranceData</span><span style="color: #007700">[</span><span style="color: #0000BB">i</span><span style="color: #007700">][</span><span style="color: #0000BB">pos</span><span style="color: #007700">][</span><span style="color: #0000BB">3</span><span style="color: #007700">]);<br /></span><span style="color: #0000BB"> &nbsp; &nbsp; &nbsp; <br /> &nbsp; &nbsp; &nbsp; &nbsp;</span><span style="color: #FF8000">//&nbsp;spawning&nbsp;"dynamic&nbsp;pickup"&nbsp;on&nbsp;stored&nbsp;location<br /></span><span style="color: #0000BB"> &nbsp; &nbsp; &nbsp; &nbsp;EntranceData</span><span style="color: #007700">[</span><span style="color: #0000BB">i</span><span style="color: #007700">][</span><span style="color: #0000BB">text</span><span style="color: #007700">]&nbsp;=&nbsp;</span><span style="color: #0000BB">CreateDynamic3DTextLabel</span><span style="color: #007700">(</span><span style="color: #0000BB">EntranceData</span><span style="color: #007700">[</span><span style="color: #0000BB">i</span><span style="color: #007700">][</span><span style="color: #0000BB">name</span><span style="color: #007700">],&nbsp;-</span><span style="color: #0000BB">1</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">EntranceData</span><span style="color: #007700">[</span><span style="color: #0000BB">i</span><span style="color: #007700">][</span><span style="color: #0000BB">pos</span><span style="color: #007700">][</span><span style="color: #0000BB">0</span><span style="color: #007700">],</span><span style="color: #0000BB"> EntranceData</span><span style="color: #007700">[</span><span style="color: #0000BB">i</span><span style="color: #007700">][</span><span style="color: #0000BB">pos</span><span style="color: #007700">][</span><span style="color: #0000BB">1</span><span style="color: #007700">],</span><span style="color: #0000BB"> EntranceData</span><span style="color: #007700">[</span><span style="color: #0000BB">i</span><span style="color: #007700">][</span><span style="color: #0000BB">pos</span><span style="color: #007700">][</span><span style="color: #0000BB">2</span><span style="color: #007700">],&nbsp;</span><span style="color: #0000BB">4.0</span><span style="color: #007700">);<br /></span><span style="color: #0000BB"> &nbsp; &nbsp; &nbsp; &nbsp;EntranceData</span><span style="color: #007700">[</span><span style="color: #0000BB">i</span><span style="color: #007700">][</span><span style="color: #0000BB">model</span><span style="color: #007700">]&nbsp;=&nbsp;</span><span style="color: #0000BB">CreateDynamicPickup</span><span style="color: #007700">(</span><span style="color: #0000BB">modelid</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">type</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">EntranceData</span><span style="color: #007700">[</span><span style="color: #0000BB">i</span><span style="color: #007700">][</span><span style="color: #0000BB">pos</span><span style="color: #007700">][</span><span style="color: #0000BB">0</span><span style="color: #007700">],</span><span style="color: #0000BB"> EntranceData</span><span style="color: #007700">[</span><span style="color: #0000BB">i</span><span style="color: #007700">][</span><span style="color: #0000BB">pos</span><span style="color: #007700">][</span><span style="color: #0000BB">1</span><span style="color: #007700">],</span><span style="color: #0000BB"> EntranceData</span><span style="color: #007700">[</span><span style="color: #0000BB">i</span><span style="color: #007700">][</span><span style="color: #0000BB">pos</span><span style="color: #007700">][</span><span style="color: #0000BB">2</span><span style="color: #007700">],&nbsp;</span><span style="color: #0000BB">0</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">0</span><span style="color: #007700">);<br /><br /></span><span style="color: #0000BB"> &nbsp; &nbsp; &nbsp;  </span><span style="color: #FF8000">//&nbsp;and&nbsp;tell&nbsp;player&nbsp;if&nbsp;everything&nbsp;done<br /></span><span style="color: #0000BB"> &nbsp; &nbsp; &nbsp;  SendClientMessage</span><span style="color: #007700">(</span><span style="color: #0000BB">playerid</span><span style="color: #007700">,&nbsp;-</span><span style="color: #0000BB">1</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">"Successfully&nbsp;making&nbsp;a&nbsp;entrance"</span><span style="color: #007700">);<br /></span><span style="color: #0000BB"> &nbsp; &nbsp; &nbsp; &nbsp;</span><span style="color: #007700">return&nbsp;</span><span style="color: #0000BB">1</span><span style="color: #007700">;<br /></span><span style="color: #0000BB"> &nbsp;  </span><span style="color: #007700">}<br /></span><span style="color: #0000BB"> &nbsp; &nbsp; </span><span style="color: #FF8000">//&nbsp;if&nbsp;MAX_ENTRANCE&nbsp;has&nbsp;reached,&nbsp;tell&nbsp;player<br /></span><span style="color: #0000BB"> &nbsp; &nbsp; SendClientMessage</span><span style="color: #007700">(</span><span style="color: #0000BB">playerid</span><span style="color: #007700">,&nbsp;-</span><span style="color: #0000BB">1</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">"Server&nbsp;cannot&nbsp;handle&nbsp;more&nbsp;entrance"</span><span style="color: #007700">);<br /></span><span style="color: #0000BB"> &nbsp; &nbsp; return&nbsp;1</span><span style="color: #007700">;<br />}&nbsp;<br /></span></code></div></div></div><br />
That code will checking if number within "i" variable is free to use, and if is then the code will set isExists to prevent "overwriting" data/false detection.<br />
And storing player position and angle is useful for teleporting and "spawning" pickup on that positon.<br />
<br />
After making command for creating entrance, now you need to make another command for storing interior position, so you can enter/exit.<br />
For example, i will make "entrancepos" instead "entranceedit" because i want to make things simpler.<br />
<div class="codeblock phpcodeblock"><div class="title">PHP Code:</div><div class="body"><div dir="ltr"><code><span style="color: #0000BB">CMD</span><span style="color: #007700">:</span><span style="color: #0000BB">interiorentrance</span><span style="color: #007700">(</span><span style="color: #0000BB">playerid</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">params</span><span style="color: #007700">[])&nbsp;{<br /></span><span style="color: #0000BB"> &nbsp;  <br /> &nbsp; &nbsp;</span><span style="color: #FF8000">//&nbsp;make&nbsp;local&nbsp;variable&nbsp;first&nbsp;to&nbsp;avoid&nbsp;warning/error<br /></span><span style="color: #0000BB"> &nbsp;  new&nbsp;entId</span><span style="color: #007700">;<br /></span><span style="color: #0000BB"> &nbsp;  <br /> &nbsp; </span><span style="color: #FF8000">//&nbsp;check&nbsp;if&nbsp;player&nbsp;not&nbsp;input&nbsp;anything&nbsp;or&nbsp;if&nbsp;player&nbsp;input&nbsp;is&nbsp;NaN<br /></span><span style="color: #0000BB"> &nbsp; &nbsp;</span><span style="color: #007700">if&nbsp;(</span><span style="color: #0000BB">sscanf</span><span style="color: #007700">(</span><span style="color: #0000BB">params</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">"i"</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">entId</span><span style="color: #007700">))<br /></span><span style="color: #0000BB"> &nbsp; &nbsp; &nbsp; &nbsp;</span><span style="color: #007700">return&nbsp;</span><span style="color: #0000BB">SendClientMessage</span><span style="color: #007700">(</span><span style="color: #0000BB">playerid</span><span style="color: #007700">,&nbsp;-</span><span style="color: #0000BB">1</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">"/nteriorentrance&lt;entrance&nbsp;ID&gt;"</span><span style="color: #007700">);&nbsp;</span><span style="color: #FF8000">//&nbsp;then&nbsp;tell&nbsp;player&nbsp;to&nbsp;do&nbsp;like&nbsp;this.<br /></span><span style="color: #0000BB">  <br /> &nbsp; &nbsp;</span><span style="color: #FF8000">//&nbsp;check&nbsp;again&nbsp;if&nbsp;entrance&nbsp;is&nbsp;valid,&nbsp;using&nbsp;this&nbsp;method&nbsp;will&nbsp;avoid&nbsp;any&nbsp;warning&nbsp;like&nbsp;"Array&nbsp;out&nbsp;of&nbsp;bonds"<br /></span><span style="color: #0000BB"> &nbsp; &nbsp;</span><span style="color: #007700">if&nbsp;((</span><span style="color: #0000BB">entId&nbsp;</span><span style="color: #007700">&lt;&nbsp;</span><span style="color: #0000BB">1&nbsp;</span><span style="color: #007700">||&nbsp;</span><span style="color: #0000BB">entId&nbsp;</span><span style="color: #007700">&gt;=&nbsp;</span><span style="color: #0000BB">MAX_ENTRANCE</span><span style="color: #007700">)&nbsp;&amp;&amp;&nbsp;(!</span><span style="color: #0000BB">EntranceData</span><span style="color: #007700">[</span><span style="color: #0000BB">entId</span><span style="color: #007700">][</span><span style="color: #0000BB">isExists</span><span style="color: #007700">]))<br /></span><span style="color: #0000BB"> &nbsp; &nbsp; &nbsp; &nbsp;</span><span style="color: #007700">return&nbsp;</span><span style="color: #0000BB">SendClientMessage</span><span style="color: #007700">(</span><span style="color: #0000BB">playerid</span><span style="color: #007700">,&nbsp;-</span><span style="color: #0000BB">1</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">"Invalid&nbsp;entrance&nbsp;ID"</span><span style="color: #007700">);&nbsp;</span><span style="color: #FF8000">//&nbsp;if&nbsp;is,&nbsp;tell&nbsp;player&nbsp;that&nbsp;ID&nbsp;is&nbsp;not&nbsp;exists.<br /><br /></span><span style="color: #0000BB"> &nbsp; &nbsp;</span><span style="color: #FF8000">//&nbsp;if&nbsp;things&nbsp;are&nbsp;clear,&nbsp;now&nbsp;we&nbsp;can&nbsp;safely&nbsp;store&nbsp;our&nbsp;position&nbsp;to&nbsp;Entrance&nbsp;Data.<br /></span><span style="color: #0000BB"> &nbsp; &nbsp;GetPlayerPos</span><span style="color: #007700">(</span><span style="color: #0000BB">playerid</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">EntranceData</span><span style="color: #007700">[</span><span style="color: #0000BB">entId</span><span style="color: #007700">][</span><span style="color: #0000BB">pos</span><span style="color: #007700">][</span><span style="color: #0000BB">0</span><span style="color: #007700">],</span><span style="color: #0000BB"> EntranceData</span><span style="color: #007700">[</span><span style="color: #0000BB">entId</span><span style="color: #007700">][</span><span style="color: #0000BB">pos</span><span style="color: #007700">][</span><span style="color: #0000BB">1</span><span style="color: #007700">],</span><span style="color: #0000BB"> EntranceData</span><span style="color: #007700">[</span><span style="color: #0000BB">entId</span><span style="color: #007700">][</span><span style="color: #0000BB">pos</span><span style="color: #007700">][</span><span style="color: #0000BB">2</span><span style="color: #007700">]);<br /></span><span style="color: #0000BB"> &nbsp; &nbsp;GetPlayerFacingAngle</span><span style="color: #007700">(</span><span style="color: #0000BB">playerid</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">EntranceData</span><span style="color: #007700">[</span><span style="color: #0000BB">entId</span><span style="color: #007700">][</span><span style="color: #0000BB">pos</span><span style="color: #007700">][</span><span style="color: #0000BB">3</span><span style="color: #007700">]);<br /></span><span style="color: #0000BB"> <br /> &nbsp; &nbsp;EntranceData</span><span style="color: #007700">[</span><span style="color: #0000BB">entId</span><span style="color: #007700">][</span><span style="color: #0000BB">int</span><span style="color: #007700">]&nbsp;=&nbsp;</span><span style="color: #0000BB">GetPlayerInterior</span><span style="color: #007700">(</span><span style="color: #0000BB">playerid</span><span style="color: #007700">);<br /></span><span style="color: #0000BB"> &nbsp; &nbsp;EntranceData</span><span style="color: #007700">[</span><span style="color: #0000BB">entId</span><span style="color: #007700">][</span><span style="color: #0000BB">world</span><span style="color: #007700">]&nbsp;=&nbsp;</span><span style="color: #0000BB">GetPlayerVirtualWorld</span><span style="color: #007700">(</span><span style="color: #0000BB">playerid</span><span style="color: #007700">);<br /></span><span style="color: #0000BB"> &nbsp;  <br /> &nbsp; &nbsp;</span><span style="color: #FF8000">//&nbsp;tell&nbsp;player&nbsp;if&nbsp;script&nbsp;successfully&nbsp;storing&nbsp;data.<br /></span><span style="color: #0000BB"> &nbsp; &nbsp;SendClientMessage</span><span style="color: #007700">(</span><span style="color: #0000BB">playerid</span><span style="color: #007700">,&nbsp;-</span><span style="color: #0000BB">1</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">"Successfully&nbsp;editing&nbsp;Entrance&nbsp;Interior"</span><span style="color: #007700">);<br /></span><span style="color: #0000BB"> &nbsp; &nbsp;</span><span style="color: #007700">return&nbsp;</span><span style="color: #0000BB">1</span><span style="color: #007700">;<br />}&nbsp;<br /></span></code></div></div></div><br />
We're finish making those command, now the last but not least.. Making a delete command.<br />
<div class="codeblock phpcodeblock"><div class="title">PHP Code:</div><div class="body"><div dir="ltr"><code><span style="color: #0000BB">CMD</span><span style="color: #007700">:</span><span style="color: #0000BB">deleteentrance</span><span style="color: #007700">(</span><span style="color: #0000BB">playerid</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">params</span><span style="color: #007700">[])&nbsp;{<br /></span><span style="color: #0000BB"> &nbsp; &nbsp;</span><span style="color: #FF8000">//&nbsp;make&nbsp;local&nbsp;variable&nbsp;first&nbsp;to&nbsp;avoid&nbsp;warning/error<br /></span><span style="color: #0000BB"> &nbsp;  new&nbsp;entId</span><span style="color: #007700">;<br /></span><span style="color: #0000BB"> &nbsp;  <br /> &nbsp; </span><span style="color: #FF8000">//&nbsp;check&nbsp;if&nbsp;player&nbsp;not&nbsp;input&nbsp;anything&nbsp;or&nbsp;if&nbsp;player&nbsp;input&nbsp;is&nbsp;NaN<br /></span><span style="color: #0000BB"> &nbsp; &nbsp;</span><span style="color: #007700">if&nbsp;(</span><span style="color: #0000BB">sscanf</span><span style="color: #007700">(</span><span style="color: #0000BB">params</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">"i"</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">entId</span><span style="color: #007700">))<br /></span><span style="color: #0000BB"> &nbsp; &nbsp; &nbsp; &nbsp;</span><span style="color: #007700">return&nbsp;</span><span style="color: #0000BB">SendClientMessage</span><span style="color: #007700">(</span><span style="color: #0000BB">playerid</span><span style="color: #007700">,&nbsp;-</span><span style="color: #0000BB">1</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">"/deleteentrance&nbsp;&lt;entrance&nbsp;ID&gt;"</span><span style="color: #007700">);&nbsp;</span><span style="color: #FF8000">//&nbsp;then&nbsp;tell&nbsp;player&nbsp;to&nbsp;do&nbsp;like&nbsp;this.<br /></span><span style="color: #0000BB">  <br /> &nbsp; &nbsp;</span><span style="color: #FF8000">//&nbsp;check&nbsp;again&nbsp;if&nbsp;entrance&nbsp;is&nbsp;valid,&nbsp;using&nbsp;this&nbsp;method&nbsp;will&nbsp;avoid&nbsp;any&nbsp;warning&nbsp;like&nbsp;"Array&nbsp;out&nbsp;of&nbsp;bonds"<br /></span><span style="color: #0000BB"> &nbsp; &nbsp;</span><span style="color: #007700">if&nbsp;((</span><span style="color: #0000BB">entId&nbsp;</span><span style="color: #007700">&lt;&nbsp;</span><span style="color: #0000BB">1&nbsp;</span><span style="color: #007700">||&nbsp;</span><span style="color: #0000BB">entId&nbsp;</span><span style="color: #007700">&gt;=&nbsp;</span><span style="color: #0000BB">MAX_ENTRANCE</span><span style="color: #007700">)&nbsp;&amp;&amp;&nbsp;(!</span><span style="color: #0000BB">EntranceData</span><span style="color: #007700">[</span><span style="color: #0000BB">entId</span><span style="color: #007700">][</span><span style="color: #0000BB">isExists</span><span style="color: #007700">]))<br /></span><span style="color: #0000BB"> &nbsp; &nbsp; &nbsp; &nbsp;</span><span style="color: #007700">return&nbsp;</span><span style="color: #0000BB">SendClientMessage</span><span style="color: #007700">(</span><span style="color: #0000BB">playerid</span><span style="color: #007700">,&nbsp;-</span><span style="color: #0000BB">1</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">"Invalid&nbsp;entrance&nbsp;ID"</span><span style="color: #007700">);&nbsp;</span><span style="color: #FF8000">//&nbsp;if&nbsp;is,&nbsp;tell&nbsp;player&nbsp;that&nbsp;ID&nbsp;is&nbsp;not&nbsp;exists.<br /><br /></span><span style="color: #0000BB"> &nbsp; &nbsp;</span><span style="color: #FF8000">//&nbsp;okay first,&nbsp;we&nbsp;gonna&nbsp;kick&nbsp;people&nbsp;if&nbsp;they&nbsp;are&nbsp;inside&nbsp;of&nbsp;what&nbsp;we&nbsp;want&nbsp;to&nbsp;destroy/delete.<br /></span><span style="color: #0000BB"> &nbsp; &nbsp;</span><span style="color: #007700">for&nbsp;(new&nbsp;</span><span style="color: #0000BB">i</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">j&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">GetPlayerPoolSize</span><span style="color: #007700">();&nbsp;</span><span style="color: #0000BB">i&nbsp;</span><span style="color: #007700">&lt;&nbsp;</span><span style="color: #0000BB">j</span><span style="color: #007700">;&nbsp;</span><span style="color: #0000BB">i&nbsp;</span><span style="color: #007700">++)&nbsp;if&nbsp;(</span><span style="color: #0000BB">PlayerInEntrance</span><span style="color: #007700">[</span><span style="color: #0000BB">i</span><span style="color: #007700">]&nbsp;==&nbsp;</span><span style="color: #0000BB">entId</span><span style="color: #007700">)&nbsp;{<br /><br /></span><span style="color: #0000BB"> &nbsp; &nbsp; &nbsp; &nbsp;SetPlayerPos</span><span style="color: #007700">(</span><span style="color: #0000BB">playerid</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">EntranceData</span><span style="color: #007700">[</span><span style="color: #0000BB">entId</span><span style="color: #007700">][</span><span style="color: #0000BB">pos</span><span style="color: #007700">][</span><span style="color: #0000BB">0</span><span style="color: #007700">],</span><span style="color: #0000BB"> EntranceData</span><span style="color: #007700">[</span><span style="color: #0000BB">entId</span><span style="color: #007700">][</span><span style="color: #0000BB">pos</span><span style="color: #007700">][</span><span style="color: #0000BB">1</span><span style="color: #007700">],</span><span style="color: #0000BB"> EntranceData</span><span style="color: #007700">[</span><span style="color: #0000BB">entId</span><span style="color: #007700">][</span><span style="color: #0000BB">pos</span><span style="color: #007700">][</span><span style="color: #0000BB">2</span><span style="color: #007700">]);<br /></span><span style="color: #0000BB"> &nbsp; &nbsp; &nbsp; &nbsp;SetPlayerFacingAngle</span><span style="color: #007700">(</span><span style="color: #0000BB">playerid</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">EntranceData</span><span style="color: #007700">[</span><span style="color: #0000BB">entId</span><span style="color: #007700">][</span><span style="color: #0000BB">pos</span><span style="color: #007700">][</span><span style="color: #0000BB">3</span><span style="color: #007700">]);<br /></span><span style="color: #0000BB"> <br /> &nbsp; &nbsp; &nbsp; &nbsp;SetPlayerInterior</span><span style="color: #007700">(</span><span style="color: #0000BB">playerid</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">0</span><span style="color: #007700">);<br /></span><span style="color: #0000BB"> &nbsp; &nbsp; &nbsp; &nbsp;SetPlayerVirtualWorld</span><span style="color: #007700">(</span><span style="color: #0000BB">playerid</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">0</span><span style="color: #007700">);<br /><br /></span><span style="color: #0000BB"> &nbsp; &nbsp; &nbsp; &nbsp;PlayerInEntrance</span><span style="color: #007700">[</span><span style="color: #0000BB">playerid</span><span style="color: #007700">]&nbsp;=&nbsp;-</span><span style="color: #0000BB">1</span><span style="color: #007700">;<br /></span><span style="color: #0000BB"> &nbsp; &nbsp;</span><span style="color: #007700">}<br /><br /></span><span style="color: #0000BB"> &nbsp; &nbsp;</span><span style="color: #FF8000">//&nbsp;and let's&nbsp;destroy&nbsp;entrance&nbsp;pickup&nbsp;and&nbsp;text.<br /></span><span style="color: #0000BB"> &nbsp;  if&nbsp;</span><span style="color: #007700">(</span><span style="color: #0000BB">IsValidDynamic3DTextLabel</span><span style="color: #007700">(</span><span style="color: #0000BB">EntranceData</span><span style="color: #007700">[</span><span style="color: #0000BB">entId</span><span style="color: #007700">][</span><span style="color: #0000BB">text</span><span style="color: #007700">]))<br /></span><span style="color: #0000BB"> &nbsp; &nbsp; &nbsp; &nbsp;DestroyDynamic3DTextLabel</span><span style="color: #007700">(</span><span style="color: #0000BB">EntranceData</span><span style="color: #007700">[</span><span style="color: #0000BB">entId</span><span style="color: #007700">][</span><span style="color: #0000BB">text</span><span style="color: #007700">]);<br /><br /></span><span style="color: #0000BB"> &nbsp; &nbsp;</span><span style="color: #007700">if&nbsp;(</span><span style="color: #0000BB">IsValidDynamicPickup</span><span style="color: #007700">(</span><span style="color: #0000BB">EntranceData</span><span style="color: #007700">[</span><span style="color: #0000BB">entId</span><span style="color: #007700">][</span><span style="color: #0000BB">model</span><span style="color: #007700">]))<br /></span><span style="color: #0000BB"> &nbsp; &nbsp; &nbsp; &nbsp;DestroyDynamicPickup</span><span style="color: #007700">(</span><span style="color: #0000BB">EntranceData</span><span style="color: #007700">[</span><span style="color: #0000BB">entId</span><span style="color: #007700">][</span><span style="color: #0000BB">model</span><span style="color: #007700">]);<br /><br /></span><span style="color: #0000BB"> &nbsp; &nbsp;</span><span style="color: #FF8000">//&nbsp;if&nbsp;things&nbsp;are&nbsp;clear,&nbsp;now&nbsp;we&nbsp;can&nbsp;safely&nbsp;reset Entrance&nbsp;Data.<br /></span><span style="color: #0000BB"> &nbsp; &nbsp;</span><span style="color: #007700">new&nbsp;</span><span style="color: #0000BB">tmpReset</span><span style="color: #007700">[</span><span style="color: #0000BB">e_ENTRANCE_DATA</span><span style="color: #007700">];<br /></span><span style="color: #0000BB"> &nbsp; &nbsp;EntranceData</span><span style="color: #007700">[</span><span style="color: #0000BB">entId</span><span style="color: #007700">]</span><span style="color: #0000BB"> </span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">tmpReset</span><span style="color: #007700">;<br /></span><span style="color: #0000BB"> &nbsp; &nbsp;EntranceData</span><span style="color: #007700">[</span><span style="color: #0000BB">entId</span><span style="color: #007700">][</span><span style="color: #0000BB">isExists</span><span style="color: #007700">]&nbsp;=&nbsp;</span><span style="color: #0000BB">false</span><span style="color: #007700">;<br /></span><span style="color: #0000BB"> &nbsp; &nbsp;</span><span style="color: #007700">return&nbsp;</span><span style="color: #0000BB">1</span><span style="color: #007700">;<br />}&nbsp;<br /></span></code></div></div></div><br />
Now we're done with command, lets go to the next step.<br />
Okay, we need to make a code so people can enter a entrance with "F" or whatever key you'll use.<br />
Lets say i want to make "F" for enter/exit the entrance.<br />
<div class="codeblock phpcodeblock"><div class="title">PHP Code:</div><div class="body"><div dir="ltr"><code><span style="color: #007700">public&nbsp;</span><span style="color: #0000BB">OnPlayerKeyStatechange</span><span style="color: #007700">(</span><span style="color: #0000BB">playerid</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">newkeys</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">oldkeys</span><span style="color: #007700">)&nbsp;{<br /><br /></span><span style="color: #0000BB"> &nbsp; &nbsp;</span><span style="color: #FF8000">//&nbsp;this&nbsp;code is&nbsp;detecting&nbsp;if&nbsp;player&nbsp;pressed&nbsp;KEY_FIRE&nbsp;(F/Enter/LMB/TAB)<br /></span><span style="color: #0000BB"> &nbsp; &nbsp;</span><span style="color: #007700">if&nbsp;((</span><span style="color: #0000BB">newkeys&nbsp;</span><span style="color: #007700">&amp;&nbsp;</span><span style="color: #0000BB">KEY_FIRE</span><span style="color: #007700">)&nbsp;&amp;&amp;&nbsp;!(</span><span style="color: #0000BB">oldkeys&nbsp;</span><span style="color: #007700">&amp;&nbsp;</span><span style="color: #0000BB">KEY_FIRE</span><span style="color: #007700">))&nbsp;{<br /><br /></span><span style="color: #0000BB"> &nbsp; &nbsp; &nbsp;  </span><span style="color: #FF8000">//making&nbsp;local&nbsp;variabel&nbsp;for&nbsp;storing&nbsp;entrance&nbsp;ID<br /></span><span style="color: #0000BB"> &nbsp; &nbsp; &nbsp; &nbsp;</span><span style="color: #007700">new&nbsp;</span><span style="color: #0000BB">entId</span><span style="color: #007700">;<br /><br /></span><span style="color: #0000BB"> &nbsp; &nbsp; &nbsp; &nbsp;</span><span style="color: #FF8000">//&nbsp;we&nbsp;need&nbsp;to&nbsp;make&nbsp;a&nbsp;function&nbsp;which&nbsp;detects&nbsp;if&nbsp;player&nbsp;is&nbsp;nearing&nbsp;any<br /></span><span style="color: #0000BB"> &nbsp; &nbsp; &nbsp; &nbsp;</span><span style="color: #FF8000">//&nbsp;entrance&nbsp;within&nbsp;radius&nbsp;2.5,&nbsp;if&nbsp;does then&nbsp;script returning&nbsp;a&nbsp;entrance&nbsp;ID.<br /></span><span style="color: #0000BB"> &nbsp; &nbsp; &nbsp; &nbsp;</span><span style="color: #007700">if&nbsp;((</span><span style="color: #0000BB">entId&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">GetNearestEntrance</span><span style="color: #007700">(</span><span style="color: #0000BB">playerid</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">2.5</span><span style="color: #007700">))&nbsp;!=&nbsp;-</span><span style="color: #0000BB">1</span><span style="color: #007700">)&nbsp;{<br /><br /></span><span style="color: #0000BB"> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</span><span style="color: #FF8000">//&nbsp;after&nbsp;that,&nbsp;teleport&nbsp;player&nbsp;to&nbsp;inside of&nbsp;nearest&nbsp;entrance<br /></span><span style="color: #0000BB"> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;SetPlayerPos</span><span style="color: #007700">(</span><span style="color: #0000BB">playerid</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">EntranceData</span><span style="color: #007700">[</span><span style="color: #0000BB">entId</span><span style="color: #007700">][</span><span style="color: #0000BB">intPos</span><span style="color: #007700">][</span><span style="color: #0000BB">0</span><span style="color: #007700">],</span><span style="color: #0000BB"> EntranceData</span><span style="color: #007700">[</span><span style="color: #0000BB">entId</span><span style="color: #007700">][</span><span style="color: #0000BB">intPos</span><span style="color: #007700">][</span><span style="color: #0000BB">1</span><span style="color: #007700">],</span><span style="color: #0000BB"> EntranceData</span><span style="color: #007700">[</span><span style="color: #0000BB">entId</span><span style="color: #007700">][</span><span style="color: #0000BB">intPos</span><span style="color: #007700">][</span><span style="color: #0000BB">2</span><span style="color: #007700">]);<br /></span><span style="color: #0000BB"> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;SetPlayerFacingAngle</span><span style="color: #007700">(</span><span style="color: #0000BB">playerid</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">EntranceData</span><span style="color: #007700">[</span><span style="color: #0000BB">entId</span><span style="color: #007700">][</span><span style="color: #0000BB">intPos</span><span style="color: #007700">][</span><span style="color: #0000BB">3</span><span style="color: #007700">]);<br /></span><span style="color: #0000BB"> <br /> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;SetPlayerInterior</span><span style="color: #007700">(</span><span style="color: #0000BB">playerid</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">EntranceData</span><span style="color: #007700">[</span><span style="color: #0000BB">entId</span><span style="color: #007700">][</span><span style="color: #0000BB">int</span><span style="color: #007700">]);<br /></span><span style="color: #0000BB"> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;SetPlayerVirtualWorld</span><span style="color: #007700">(</span><span style="color: #0000BB">playerid</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">EntranceData</span><span style="color: #007700">[</span><span style="color: #0000BB">entId</span><span style="color: #007700">][</span><span style="color: #0000BB">world</span><span style="color: #007700">]);<br /><br /></span><span style="color: #0000BB"> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</span><span style="color: #FF8000">//&nbsp;storing&nbsp;entrance&nbsp;ID&nbsp;to&nbsp;player&nbsp;variable,&nbsp;so&nbsp;we&nbsp;can&nbsp;use&nbsp;that&nbsp;later.<br /></span><span style="color: #0000BB"> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;PlayerInEntrance</span><span style="color: #007700">[</span><span style="color: #0000BB">playerid</span><span style="color: #007700">]&nbsp;=&nbsp;</span><span style="color: #0000BB">entId</span><span style="color: #007700">;<br /></span><span style="color: #0000BB"> &nbsp; &nbsp; &nbsp; &nbsp;</span><span style="color: #007700">}</span><span style="color: #0000BB"> <br /><br /> &nbsp; &nbsp; &nbsp; &nbsp;</span><span style="color: #FF8000">//&nbsp;this&nbsp;code&nbsp;checking&nbsp;player&nbsp;if&nbsp;they&nbsp;pressed&nbsp;"F"/KEY_FIRE&nbsp;and&nbsp;player&nbsp;in&nbsp;near&nbsp;exit&nbsp;+&nbsp;player&nbsp;inside&nbsp;a&nbsp;entrance.<br /></span><span style="color: #0000BB"> &nbsp; &nbsp; &nbsp; &nbsp;</span><span style="color: #007700">if&nbsp;((</span><span style="color: #0000BB">entId&nbsp;</span><span style="color: #007700">=</span><span style="color: #0000BB"> PlayerInEntrance</span><span style="color: #007700">[</span><span style="color: #0000BB">playerid</span><span style="color: #007700">]&nbsp;!=&nbsp;-</span><span style="color: #0000BB">1</span><span style="color: #007700">)</span><span style="color: #0000BB"> </span><span style="color: #007700">&amp;&amp;&nbsp;</span><span style="color: #0000BB">IsPlayerInRangeOfPoint</span><span style="color: #007700">(</span><span style="color: #0000BB">playerid</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">2.5</span><span style="color: #007700">,</span><span style="color: #0000BB"> EntranceData</span><span style="color: #007700">[</span><span style="color: #0000BB">entId</span><span style="color: #007700">][</span><span style="color: #0000BB">intPos</span><span style="color: #007700">][</span><span style="color: #0000BB">0</span><span style="color: #007700">],</span><span style="color: #0000BB"> EntranceData</span><span style="color: #007700">[</span><span style="color: #0000BB">entId</span><span style="color: #007700">][</span><span style="color: #0000BB">intPos</span><span style="color: #007700">][</span><span style="color: #0000BB">1</span><span style="color: #007700">],</span><span style="color: #0000BB"> EntranceData</span><span style="color: #007700">[</span><span style="color: #0000BB">entId</span><span style="color: #007700">][</span><span style="color: #0000BB">intPos</span><span style="color: #007700">][</span><span style="color: #0000BB">2</span><span style="color: #007700">]))&nbsp;{<br /></span><span style="color: #0000BB"> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</span><span style="color: #FF8000">//&nbsp;after&nbsp;that,&nbsp;teleport&nbsp;player&nbsp;to&nbsp;outside of&nbsp;nearest&nbsp;entrance<br /></span><span style="color: #0000BB"> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;SetPlayerPos</span><span style="color: #007700">(</span><span style="color: #0000BB">playerid</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">EntranceData</span><span style="color: #007700">[</span><span style="color: #0000BB">entId</span><span style="color: #007700">][</span><span style="color: #0000BB">pos</span><span style="color: #007700">][</span><span style="color: #0000BB">0</span><span style="color: #007700">],</span><span style="color: #0000BB"> EntranceData</span><span style="color: #007700">[</span><span style="color: #0000BB">entId</span><span style="color: #007700">][</span><span style="color: #0000BB">pos</span><span style="color: #007700">][</span><span style="color: #0000BB">1</span><span style="color: #007700">],</span><span style="color: #0000BB"> EntranceData</span><span style="color: #007700">[</span><span style="color: #0000BB">entId</span><span style="color: #007700">][</span><span style="color: #0000BB">pos</span><span style="color: #007700">][</span><span style="color: #0000BB">2</span><span style="color: #007700">]);<br /></span><span style="color: #0000BB"> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;SetPlayerFacingAngle</span><span style="color: #007700">(</span><span style="color: #0000BB">playerid</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">EntranceData</span><span style="color: #007700">[</span><span style="color: #0000BB">entId</span><span style="color: #007700">][</span><span style="color: #0000BB">pos</span><span style="color: #007700">][</span><span style="color: #0000BB">3</span><span style="color: #007700">]);<br /></span><span style="color: #0000BB"> <br /> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;SetPlayerInterior</span><span style="color: #007700">(</span><span style="color: #0000BB">playerid</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">0</span><span style="color: #007700">);<br /></span><span style="color: #0000BB"> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;SetPlayerVirtualWorld</span><span style="color: #007700">(</span><span style="color: #0000BB">playerid</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">0</span><span style="color: #007700">);<br /><br /></span><span style="color: #0000BB"> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</span><span style="color: #FF8000">//&nbsp;change player&nbsp;variable&nbsp;to&nbsp;-1&nbsp;to&nbsp;avoid&nbsp;false&nbsp;detection.<br /></span><span style="color: #0000BB"> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;PlayerInEntrance</span><span style="color: #007700">[</span><span style="color: #0000BB">playerid</span><span style="color: #007700">]&nbsp;=&nbsp;-</span><span style="color: #0000BB">1</span><span style="color: #007700">;<br /></span><span style="color: #0000BB"> &nbsp; &nbsp; &nbsp; &nbsp;</span><span style="color: #007700">}<br /></span><span style="color: #0000BB"> &nbsp; &nbsp;</span><span style="color: #007700">}<br /></span><span style="color: #0000BB"> &nbsp; &nbsp;</span><span style="color: #007700">return&nbsp;</span><span style="color: #0000BB">1</span><span style="color: #007700">;<br />}&nbsp;<br /></span></code></div></div></div><br />
Last but not least, we're gonna make "function" to check is player near any entrance <br />
and returning entrance ID if that entrance is closest to player than any entrance.<br />
<br />
<div class="codeblock phpcodeblock"><div class="title">PHP Code:</div><div class="body"><div dir="ltr"><code><span style="color: #0000BB">GetNearestEntrance</span><span style="color: #007700">(</span><span style="color: #0000BB">playerid</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">Float</span><span style="color: #007700">:</span><span style="color: #0000BB">radius&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">4.0</span><span style="color: #007700">)&nbsp;{<br /></span><span style="color: #0000BB"> &nbsp; &nbsp;</span><span style="color: #007700">for&nbsp;(new&nbsp;</span><span style="color: #0000BB">i</span><span style="color: #007700">;&nbsp;</span><span style="color: #0000BB">i&nbsp;</span><span style="color: #007700">&lt;&nbsp;</span><span style="color: #0000BB">MAX_ENTRANCE</span><span style="color: #007700">;&nbsp;</span><span style="color: #0000BB">i&nbsp;</span><span style="color: #007700">++)&nbsp;if&nbsp;(</span><span style="color: #0000BB">IsPlayerInRangeOfPoint</span><span style="color: #007700">(</span><span style="color: #0000BB">playerid</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">2.5</span><span style="color: #007700">,</span><span style="color: #0000BB"> EntranceData</span><span style="color: #007700">[</span><span style="color: #0000BB">entId</span><span style="color: #007700">][</span><span style="color: #0000BB">pos</span><span style="color: #007700">][</span><span style="color: #0000BB">0</span><span style="color: #007700">],</span><span style="color: #0000BB"> EntranceData</span><span style="color: #007700">[</span><span style="color: #0000BB">entId</span><span style="color: #007700">][</span><span style="color: #0000BB">pos</span><span style="color: #007700">][</span><span style="color: #0000BB">1</span><span style="color: #007700">],</span><span style="color: #0000BB"> EntranceData</span><span style="color: #007700">[</span><span style="color: #0000BB">entId</span><span style="color: #007700">][</span><span style="color: #0000BB">pos</span><span style="color: #007700">][</span><span style="color: #0000BB">2</span><span style="color: #007700">]))&nbsp;{<br /></span><span style="color: #0000BB"> &nbsp; &nbsp; &nbsp; &nbsp;</span><span style="color: #007700">return&nbsp;</span><span style="color: #0000BB">i</span><span style="color: #007700">;</span><span style="color: #0000BB"> &nbsp;  <br /> &nbsp;  </span><span style="color: #007700">}<br /></span><span style="color: #0000BB"> &nbsp; &nbsp;</span><span style="color: #007700">return&nbsp;-</span><span style="color: #0000BB">1</span><span style="color: #007700">;<br />}&nbsp;<br /></span></code></div></div></div><br />
Yaay, we finish making Entrance System, if you don't understand please reply so i/other people can give you proper way to make you understand.<br />
Sorry if my bad english hehe ~<br />
<br />
Oh yeah, btw here is the full code:<br />
<div class="codeblock phpcodeblock"><div class="title">PHP Code:</div><div class="body"><div dir="ltr"><code><span style="color: #FF8000">#define&nbsp;FILTERSCRIPT<br /><br />#include&nbsp;&lt;a_samp&gt;<br />#include&nbsp;&lt;sscanf2&gt;<br />#include&nbsp;&lt;streamer&gt;<br />#include&nbsp;&lt;Pawn.CMD&gt;<br /><br /></span><span style="color: #007700">public&nbsp;</span><span style="color: #0000BB">OnFilterScriptInit</span><span style="color: #007700">()</span><span style="color: #0000BB"> </span><span style="color: #007700">{<br /></span><span style="color: #0000BB"> &nbsp; &nbsp;</span><span style="color: #007700">return&nbsp;</span><span style="color: #0000BB">1</span><span style="color: #007700">;<br />}<br /><br />public&nbsp;</span><span style="color: #0000BB">OnFilterScriptExit</span><span style="color: #007700">()</span><span style="color: #0000BB"> </span><span style="color: #007700">{<br /></span><span style="color: #0000BB"> &nbsp; &nbsp;</span><span style="color: #007700">return&nbsp;</span><span style="color: #0000BB">1</span><span style="color: #007700">;<br />}<br /><br /></span><span style="color: #0000BB">CMD</span><span style="color: #007700">:</span><span style="color: #0000BB">makeentrance</span><span style="color: #007700">(</span><span style="color: #0000BB">playerid</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">params</span><span style="color: #007700">[])&nbsp;{<br /></span><span style="color: #0000BB"> &nbsp; &nbsp;</span><span style="color: #007700">if&nbsp;(!</span><span style="color: #0000BB">IsPlayerAdmin</span><span style="color: #007700">(</span><span style="color: #0000BB">playerid</span><span style="color: #007700">))&nbsp;return&nbsp;</span><span style="color: #0000BB">SendClientMessage</span><span style="color: #007700">(</span><span style="color: #0000BB">playerid</span><span style="color: #007700">,&nbsp;-</span><span style="color: #0000BB">1</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">"You&nbsp;are&nbsp;not&nbsp;administrator"</span><span style="color: #007700">);<br /></span><span style="color: #0000BB"> &nbsp; &nbsp;</span><span style="color: #007700">if&nbsp;(!</span><span style="color: #0000BB">isnull</span><span style="color: #007700">(</span><span style="color: #0000BB">params</span><span style="color: #007700">))&nbsp;return&nbsp;</span><span style="color: #0000BB">SendClientMessage</span><span style="color: #007700">(</span><span style="color: #0000BB">playerid</span><span style="color: #007700">,&nbsp;-</span><span style="color: #0000BB">1</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">"/makeentrance&nbsp;&lt;name&gt;"</span><span style="color: #007700">);&nbsp;</span><span style="color: #FF8000">//&nbsp;tell&nbsp;player&nbsp;if&nbsp;"params"&nbsp;is&nbsp;null<br /><br /></span><span style="color: #0000BB"> &nbsp; </span><span style="color: #FF8000">//&nbsp;getting&nbsp;the&nbsp;next&nbsp;slot&nbsp;with&nbsp;checking&nbsp;if&nbsp;isExists&nbsp;on&nbsp;"i"&nbsp;variable is&nbsp;false<br /></span><span style="color: #0000BB"> &nbsp; &nbsp;</span><span style="color: #007700">for&nbsp;(new&nbsp;</span><span style="color: #0000BB">i</span><span style="color: #007700">;&nbsp;</span><span style="color: #0000BB">i&nbsp;</span><span style="color: #007700">&lt;&nbsp;</span><span style="color: #0000BB">MAX_ENTRANCE</span><span style="color: #007700">;&nbsp;</span><span style="color: #0000BB">i&nbsp;</span><span style="color: #007700">++)&nbsp;if&nbsp;(!</span><span style="color: #0000BB">EntranceData</span><span style="color: #007700">[</span><span style="color: #0000BB">i</span><span style="color: #007700">][</span><span style="color: #0000BB">isExists</span><span style="color: #007700">])&nbsp;{<br /><br /></span><span style="color: #0000BB"> &nbsp; &nbsp; &nbsp; &nbsp;</span><span style="color: #FF8000">//&nbsp;storing&nbsp;useful&nbsp;data&nbsp;to&nbsp;server,&nbsp;this&nbsp;prevents&nbsp;for&nbsp;"false&nbsp;detection"<br /></span><span style="color: #0000BB"> &nbsp; &nbsp; &nbsp; &nbsp;EntranceData</span><span style="color: #007700">[</span><span style="color: #0000BB">i</span><span style="color: #007700">][</span><span style="color: #0000BB">isExists</span><span style="color: #007700">]&nbsp;=&nbsp;</span><span style="color: #0000BB">true</span><span style="color: #007700">;<br /><br /></span><span style="color: #0000BB"> &nbsp; &nbsp; &nbsp;  </span><span style="color: #FF8000">//you&nbsp;can&nbsp;use&nbsp;strcat&nbsp;if&nbsp;you&nbsp;want,&nbsp;but&nbsp;i&nbsp;prefer&nbsp;format<br /></span><span style="color: #0000BB"> &nbsp; &nbsp; &nbsp; &nbsp;format</span><span style="color: #007700">(</span><span style="color: #0000BB">EntranceData</span><span style="color: #007700">[</span><span style="color: #0000BB">i</span><span style="color: #007700">][</span><span style="color: #0000BB">name</span><span style="color: #007700">],&nbsp;</span><span style="color: #0000BB">24</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">params</span><span style="color: #007700">);<br /><br /></span><span style="color: #0000BB"> &nbsp; &nbsp; &nbsp; </span><span style="color: #FF8000">//&nbsp;getting&nbsp;player&nbsp;position&nbsp;and&nbsp;angle&nbsp;for&nbsp;teleport/spawning&nbsp;pickup<br /></span><span style="color: #0000BB"> &nbsp; &nbsp; &nbsp; &nbsp;GetPlayerPos</span><span style="color: #007700">(</span><span style="color: #0000BB">playerid</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">EntranceData</span><span style="color: #007700">[</span><span style="color: #0000BB">i</span><span style="color: #007700">][</span><span style="color: #0000BB">pos</span><span style="color: #007700">][</span><span style="color: #0000BB">0</span><span style="color: #007700">],</span><span style="color: #0000BB"> EntranceData</span><span style="color: #007700">[</span><span style="color: #0000BB">i</span><span style="color: #007700">][</span><span style="color: #0000BB">pos</span><span style="color: #007700">][</span><span style="color: #0000BB">1</span><span style="color: #007700">],</span><span style="color: #0000BB"> EntranceData</span><span style="color: #007700">[</span><span style="color: #0000BB">i</span><span style="color: #007700">][</span><span style="color: #0000BB">pos</span><span style="color: #007700">][</span><span style="color: #0000BB">2</span><span style="color: #007700">]);<br /></span><span style="color: #0000BB"> &nbsp; &nbsp; &nbsp; &nbsp;GetPlayerFacingAngle</span><span style="color: #007700">(</span><span style="color: #0000BB">playerid</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">EntranceData</span><span style="color: #007700">[</span><span style="color: #0000BB">i</span><span style="color: #007700">][</span><span style="color: #0000BB">pos</span><span style="color: #007700">][</span><span style="color: #0000BB">3</span><span style="color: #007700">]);<br /></span><span style="color: #0000BB"> &nbsp; &nbsp; &nbsp; <br /> &nbsp; &nbsp; &nbsp; &nbsp;</span><span style="color: #FF8000">//&nbsp;spawning&nbsp;"dynamic&nbsp;pickup"&nbsp;on&nbsp;stored&nbsp;location<br /></span><span style="color: #0000BB"> &nbsp; &nbsp; &nbsp; &nbsp;EntranceData</span><span style="color: #007700">[</span><span style="color: #0000BB">i</span><span style="color: #007700">][</span><span style="color: #0000BB">text</span><span style="color: #007700">]&nbsp;=&nbsp;</span><span style="color: #0000BB">CreateDynamic3DTextLabel</span><span style="color: #007700">(</span><span style="color: #0000BB">EntranceData</span><span style="color: #007700">[</span><span style="color: #0000BB">i</span><span style="color: #007700">][</span><span style="color: #0000BB">name</span><span style="color: #007700">],&nbsp;-</span><span style="color: #0000BB">1</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">EntranceData</span><span style="color: #007700">[</span><span style="color: #0000BB">i</span><span style="color: #007700">][</span><span style="color: #0000BB">pos</span><span style="color: #007700">][</span><span style="color: #0000BB">0</span><span style="color: #007700">],</span><span style="color: #0000BB"> EntranceData</span><span style="color: #007700">[</span><span style="color: #0000BB">i</span><span style="color: #007700">][</span><span style="color: #0000BB">pos</span><span style="color: #007700">][</span><span style="color: #0000BB">1</span><span style="color: #007700">],</span><span style="color: #0000BB"> EntranceData</span><span style="color: #007700">[</span><span style="color: #0000BB">i</span><span style="color: #007700">][</span><span style="color: #0000BB">pos</span><span style="color: #007700">][</span><span style="color: #0000BB">2</span><span style="color: #007700">],&nbsp;</span><span style="color: #0000BB">4.0</span><span style="color: #007700">);<br /></span><span style="color: #0000BB"> &nbsp; &nbsp; &nbsp; &nbsp;EntranceData</span><span style="color: #007700">[</span><span style="color: #0000BB">i</span><span style="color: #007700">][</span><span style="color: #0000BB">model</span><span style="color: #007700">]&nbsp;=&nbsp;</span><span style="color: #0000BB">CreateDynamicPickup</span><span style="color: #007700">(</span><span style="color: #0000BB">modelid</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">type</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">EntranceData</span><span style="color: #007700">[</span><span style="color: #0000BB">i</span><span style="color: #007700">][</span><span style="color: #0000BB">pos</span><span style="color: #007700">][</span><span style="color: #0000BB">0</span><span style="color: #007700">],</span><span style="color: #0000BB"> EntranceData</span><span style="color: #007700">[</span><span style="color: #0000BB">i</span><span style="color: #007700">][</span><span style="color: #0000BB">pos</span><span style="color: #007700">][</span><span style="color: #0000BB">1</span><span style="color: #007700">],</span><span style="color: #0000BB"> EntranceData</span><span style="color: #007700">[</span><span style="color: #0000BB">i</span><span style="color: #007700">][</span><span style="color: #0000BB">pos</span><span style="color: #007700">][</span><span style="color: #0000BB">2</span><span style="color: #007700">],&nbsp;</span><span style="color: #0000BB">0</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">0</span><span style="color: #007700">);<br /><br /></span><span style="color: #0000BB"> &nbsp; &nbsp; &nbsp;  </span><span style="color: #FF8000">//&nbsp;and&nbsp;tell&nbsp;player&nbsp;if&nbsp;everything&nbsp;done<br /></span><span style="color: #0000BB"> &nbsp; &nbsp; &nbsp;  SendClientMessage</span><span style="color: #007700">(</span><span style="color: #0000BB">playerid</span><span style="color: #007700">,&nbsp;-</span><span style="color: #0000BB">1</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">"Successfully&nbsp;making&nbsp;a&nbsp;entrance"</span><span style="color: #007700">);<br /></span><span style="color: #0000BB"> &nbsp; &nbsp; &nbsp; &nbsp;</span><span style="color: #007700">return&nbsp;</span><span style="color: #0000BB">1</span><span style="color: #007700">;<br /></span><span style="color: #0000BB"> &nbsp;  </span><span style="color: #007700">}<br /></span><span style="color: #0000BB"> &nbsp; &nbsp; </span><span style="color: #FF8000">//&nbsp;if&nbsp;MAX_ENTRANCE&nbsp;has&nbsp;reached,&nbsp;tell&nbsp;player<br /></span><span style="color: #0000BB"> &nbsp; &nbsp; SendClientMessage</span><span style="color: #007700">(</span><span style="color: #0000BB">playerid</span><span style="color: #007700">,&nbsp;-</span><span style="color: #0000BB">1</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">"Server&nbsp;cannot&nbsp;handle&nbsp;more&nbsp;entrance"</span><span style="color: #007700">);<br /></span><span style="color: #0000BB"> &nbsp; &nbsp; return&nbsp;1</span><span style="color: #007700">;<br />}<br /><br /></span><span style="color: #0000BB">CMD</span><span style="color: #007700">:</span><span style="color: #0000BB">interiorentrance</span><span style="color: #007700">(</span><span style="color: #0000BB">playerid</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">params</span><span style="color: #007700">[])&nbsp;{<br /></span><span style="color: #0000BB"> &nbsp;  <br /> &nbsp; &nbsp;</span><span style="color: #FF8000">//&nbsp;make&nbsp;local&nbsp;variable&nbsp;first&nbsp;to&nbsp;avoid&nbsp;warning/error<br /></span><span style="color: #0000BB"> &nbsp;  new&nbsp;entId</span><span style="color: #007700">;<br /></span><span style="color: #0000BB"> &nbsp;  <br /> &nbsp; </span><span style="color: #FF8000">//&nbsp;check&nbsp;if&nbsp;player&nbsp;not&nbsp;input&nbsp;anything&nbsp;or&nbsp;if&nbsp;player&nbsp;input&nbsp;is&nbsp;NaN<br /></span><span style="color: #0000BB"> &nbsp; &nbsp;</span><span style="color: #007700">if&nbsp;(</span><span style="color: #0000BB">sscanf</span><span style="color: #007700">(</span><span style="color: #0000BB">params</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">"i"</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">entId</span><span style="color: #007700">))<br /></span><span style="color: #0000BB"> &nbsp; &nbsp; &nbsp; &nbsp;</span><span style="color: #007700">return&nbsp;</span><span style="color: #0000BB">SendClientMessage</span><span style="color: #007700">(</span><span style="color: #0000BB">playerid</span><span style="color: #007700">,&nbsp;-</span><span style="color: #0000BB">1</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">"/nteriorentrance&lt;entrance&nbsp;ID&gt;"</span><span style="color: #007700">);&nbsp;</span><span style="color: #FF8000">//&nbsp;then&nbsp;tell&nbsp;player&nbsp;to&nbsp;do&nbsp;like&nbsp;this.<br /></span><span style="color: #0000BB">  <br /> &nbsp; &nbsp;</span><span style="color: #FF8000">//&nbsp;check&nbsp;again&nbsp;if&nbsp;entrance&nbsp;is&nbsp;valid,&nbsp;using&nbsp;this&nbsp;method&nbsp;will&nbsp;avoid&nbsp;any&nbsp;warning&nbsp;like&nbsp;"Array&nbsp;out&nbsp;of&nbsp;bonds"<br /></span><span style="color: #0000BB"> &nbsp; &nbsp;</span><span style="color: #007700">if&nbsp;((</span><span style="color: #0000BB">entId&nbsp;</span><span style="color: #007700">&lt;&nbsp;</span><span style="color: #0000BB">1&nbsp;</span><span style="color: #007700">||&nbsp;</span><span style="color: #0000BB">entId&nbsp;</span><span style="color: #007700">&gt;=&nbsp;</span><span style="color: #0000BB">MAX_ENTRANCE</span><span style="color: #007700">)&nbsp;&amp;&amp;&nbsp;(!</span><span style="color: #0000BB">EntranceData</span><span style="color: #007700">[</span><span style="color: #0000BB">entId</span><span style="color: #007700">][</span><span style="color: #0000BB">isExists</span><span style="color: #007700">]))<br /></span><span style="color: #0000BB"> &nbsp; &nbsp; &nbsp; &nbsp;</span><span style="color: #007700">return&nbsp;</span><span style="color: #0000BB">SendClientMessage</span><span style="color: #007700">(</span><span style="color: #0000BB">playerid</span><span style="color: #007700">,&nbsp;-</span><span style="color: #0000BB">1</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">"Invalid&nbsp;entrance&nbsp;ID"</span><span style="color: #007700">);&nbsp;</span><span style="color: #FF8000">//&nbsp;if&nbsp;is,&nbsp;tell&nbsp;player&nbsp;that&nbsp;ID&nbsp;is&nbsp;not&nbsp;exists.<br /><br /></span><span style="color: #0000BB"> &nbsp; &nbsp;</span><span style="color: #FF8000">//&nbsp;if&nbsp;things&nbsp;are&nbsp;clear,&nbsp;now&nbsp;we&nbsp;can&nbsp;safely&nbsp;store&nbsp;our&nbsp;position&nbsp;to&nbsp;Entrance&nbsp;Data.<br /></span><span style="color: #0000BB"> &nbsp; &nbsp;GetPlayerPos</span><span style="color: #007700">(</span><span style="color: #0000BB">playerid</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">EntranceData</span><span style="color: #007700">[</span><span style="color: #0000BB">entId</span><span style="color: #007700">][</span><span style="color: #0000BB">pos</span><span style="color: #007700">][</span><span style="color: #0000BB">0</span><span style="color: #007700">],</span><span style="color: #0000BB"> EntranceData</span><span style="color: #007700">[</span><span style="color: #0000BB">entId</span><span style="color: #007700">][</span><span style="color: #0000BB">pos</span><span style="color: #007700">][</span><span style="color: #0000BB">1</span><span style="color: #007700">],</span><span style="color: #0000BB"> EntranceData</span><span style="color: #007700">[</span><span style="color: #0000BB">entId</span><span style="color: #007700">][</span><span style="color: #0000BB">pos</span><span style="color: #007700">][</span><span style="color: #0000BB">2</span><span style="color: #007700">]);<br /></span><span style="color: #0000BB"> &nbsp; &nbsp;GetPlayerFacingAngle</span><span style="color: #007700">(</span><span style="color: #0000BB">playerid</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">EntranceData</span><span style="color: #007700">[</span><span style="color: #0000BB">entId</span><span style="color: #007700">][</span><span style="color: #0000BB">pos</span><span style="color: #007700">][</span><span style="color: #0000BB">3</span><span style="color: #007700">]);<br /></span><span style="color: #0000BB"> <br /> &nbsp; &nbsp;EntranceData</span><span style="color: #007700">[</span><span style="color: #0000BB">entId</span><span style="color: #007700">][</span><span style="color: #0000BB">int</span><span style="color: #007700">]&nbsp;=&nbsp;</span><span style="color: #0000BB">GetPlayerInterior</span><span style="color: #007700">(</span><span style="color: #0000BB">playerid</span><span style="color: #007700">);<br /></span><span style="color: #0000BB"> &nbsp; &nbsp;EntranceData</span><span style="color: #007700">[</span><span style="color: #0000BB">entId</span><span style="color: #007700">][</span><span style="color: #0000BB">world</span><span style="color: #007700">]&nbsp;=&nbsp;</span><span style="color: #0000BB">GetPlayerVirtualWorld</span><span style="color: #007700">(</span><span style="color: #0000BB">playerid</span><span style="color: #007700">);<br /></span><span style="color: #0000BB"> &nbsp;  <br /> &nbsp; &nbsp;</span><span style="color: #FF8000">//&nbsp;tell&nbsp;player&nbsp;if&nbsp;script&nbsp;successfully&nbsp;storing&nbsp;data.<br /></span><span style="color: #0000BB"> &nbsp; &nbsp;SendClientMessage</span><span style="color: #007700">(</span><span style="color: #0000BB">playerid</span><span style="color: #007700">,&nbsp;-</span><span style="color: #0000BB">1</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">"Successfully&nbsp;editing&nbsp;Entrance&nbsp;Interior"</span><span style="color: #007700">);<br /></span><span style="color: #0000BB"> &nbsp; &nbsp;</span><span style="color: #007700">return&nbsp;</span><span style="color: #0000BB">1</span><span style="color: #007700">;<br />}<br /><br /></span><span style="color: #0000BB">CMD</span><span style="color: #007700">:</span><span style="color: #0000BB">deleteentrance</span><span style="color: #007700">(</span><span style="color: #0000BB">playerid</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">params</span><span style="color: #007700">[])&nbsp;{<br /></span><span style="color: #0000BB"> &nbsp; &nbsp;</span><span style="color: #FF8000">//&nbsp;make&nbsp;local&nbsp;variable&nbsp;first&nbsp;to&nbsp;avoid&nbsp;warning/error<br /></span><span style="color: #0000BB"> &nbsp;  new&nbsp;entId</span><span style="color: #007700">;<br /></span><span style="color: #0000BB"> &nbsp;  <br /> &nbsp; </span><span style="color: #FF8000">//&nbsp;check&nbsp;if&nbsp;player&nbsp;not&nbsp;input&nbsp;anything&nbsp;or&nbsp;if&nbsp;player&nbsp;input&nbsp;is&nbsp;NaN<br /></span><span style="color: #0000BB"> &nbsp; &nbsp;</span><span style="color: #007700">if&nbsp;(</span><span style="color: #0000BB">sscanf</span><span style="color: #007700">(</span><span style="color: #0000BB">params</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">"i"</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">entId</span><span style="color: #007700">))<br /></span><span style="color: #0000BB"> &nbsp; &nbsp; &nbsp; &nbsp;</span><span style="color: #007700">return&nbsp;</span><span style="color: #0000BB">SendClientMessage</span><span style="color: #007700">(</span><span style="color: #0000BB">playerid</span><span style="color: #007700">,&nbsp;-</span><span style="color: #0000BB">1</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">"/deleteentrance&nbsp;&lt;entrance&nbsp;ID&gt;"</span><span style="color: #007700">);&nbsp;</span><span style="color: #FF8000">//&nbsp;then&nbsp;tell&nbsp;player&nbsp;to&nbsp;do&nbsp;like&nbsp;this.<br /></span><span style="color: #0000BB">  <br /> &nbsp; &nbsp;</span><span style="color: #FF8000">//&nbsp;check&nbsp;again&nbsp;if&nbsp;entrance&nbsp;is&nbsp;valid,&nbsp;using&nbsp;this&nbsp;method&nbsp;will&nbsp;avoid&nbsp;any&nbsp;warning&nbsp;like&nbsp;"Array&nbsp;out&nbsp;of&nbsp;bonds"<br /></span><span style="color: #0000BB"> &nbsp; &nbsp;</span><span style="color: #007700">if&nbsp;((</span><span style="color: #0000BB">entId&nbsp;</span><span style="color: #007700">&lt;&nbsp;</span><span style="color: #0000BB">1&nbsp;</span><span style="color: #007700">||&nbsp;</span><span style="color: #0000BB">entId&nbsp;</span><span style="color: #007700">&gt;=&nbsp;</span><span style="color: #0000BB">MAX_ENTRANCE</span><span style="color: #007700">)&nbsp;&amp;&amp;&nbsp;(!</span><span style="color: #0000BB">EntranceData</span><span style="color: #007700">[</span><span style="color: #0000BB">entId</span><span style="color: #007700">][</span><span style="color: #0000BB">isExists</span><span style="color: #007700">]))<br /></span><span style="color: #0000BB"> &nbsp; &nbsp; &nbsp; &nbsp;</span><span style="color: #007700">return&nbsp;</span><span style="color: #0000BB">SendClientMessage</span><span style="color: #007700">(</span><span style="color: #0000BB">playerid</span><span style="color: #007700">,&nbsp;-</span><span style="color: #0000BB">1</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">"Invalid&nbsp;entrance&nbsp;ID"</span><span style="color: #007700">);&nbsp;</span><span style="color: #FF8000">//&nbsp;if&nbsp;is,&nbsp;tell&nbsp;player&nbsp;that&nbsp;ID&nbsp;is&nbsp;not&nbsp;exists.<br /><br /></span><span style="color: #0000BB"> &nbsp; &nbsp;</span><span style="color: #FF8000">//&nbsp;okay first,&nbsp;we&nbsp;gonna&nbsp;kick&nbsp;people&nbsp;if&nbsp;they&nbsp;are&nbsp;inside&nbsp;of&nbsp;what&nbsp;we&nbsp;want&nbsp;to&nbsp;destroy/delete.<br /></span><span style="color: #0000BB"> &nbsp; &nbsp;</span><span style="color: #007700">for&nbsp;(new&nbsp;</span><span style="color: #0000BB">i</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">j&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">GetPlayerPoolSize</span><span style="color: #007700">();&nbsp;</span><span style="color: #0000BB">i&nbsp;</span><span style="color: #007700">&lt;&nbsp;</span><span style="color: #0000BB">j</span><span style="color: #007700">;&nbsp;</span><span style="color: #0000BB">i&nbsp;</span><span style="color: #007700">++)&nbsp;if&nbsp;(</span><span style="color: #0000BB">PlayerInEntrance</span><span style="color: #007700">[</span><span style="color: #0000BB">i</span><span style="color: #007700">]&nbsp;==&nbsp;</span><span style="color: #0000BB">entId</span><span style="color: #007700">)&nbsp;{<br /><br /></span><span style="color: #0000BB"> &nbsp; &nbsp; &nbsp; &nbsp;SetPlayerPos</span><span style="color: #007700">(</span><span style="color: #0000BB">playerid</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">EntranceData</span><span style="color: #007700">[</span><span style="color: #0000BB">entId</span><span style="color: #007700">][</span><span style="color: #0000BB">pos</span><span style="color: #007700">][</span><span style="color: #0000BB">0</span><span style="color: #007700">],</span><span style="color: #0000BB"> EntranceData</span><span style="color: #007700">[</span><span style="color: #0000BB">entId</span><span style="color: #007700">][</span><span style="color: #0000BB">pos</span><span style="color: #007700">][</span><span style="color: #0000BB">1</span><span style="color: #007700">],</span><span style="color: #0000BB"> EntranceData</span><span style="color: #007700">[</span><span style="color: #0000BB">entId</span><span style="color: #007700">][</span><span style="color: #0000BB">pos</span><span style="color: #007700">][</span><span style="color: #0000BB">2</span><span style="color: #007700">]);<br /></span><span style="color: #0000BB"> &nbsp; &nbsp; &nbsp; &nbsp;SetPlayerFacingAngle</span><span style="color: #007700">(</span><span style="color: #0000BB">playerid</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">EntranceData</span><span style="color: #007700">[</span><span style="color: #0000BB">entId</span><span style="color: #007700">][</span><span style="color: #0000BB">pos</span><span style="color: #007700">][</span><span style="color: #0000BB">3</span><span style="color: #007700">]);<br /></span><span style="color: #0000BB"> <br /> &nbsp; &nbsp; &nbsp; &nbsp;SetPlayerInterior</span><span style="color: #007700">(</span><span style="color: #0000BB">playerid</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">0</span><span style="color: #007700">);<br /></span><span style="color: #0000BB"> &nbsp; &nbsp; &nbsp; &nbsp;SetPlayerVirtualWorld</span><span style="color: #007700">(</span><span style="color: #0000BB">playerid</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">0</span><span style="color: #007700">);<br /><br /></span><span style="color: #0000BB"> &nbsp; &nbsp; &nbsp; &nbsp;PlayerInEntrance</span><span style="color: #007700">[</span><span style="color: #0000BB">playerid</span><span style="color: #007700">]&nbsp;=&nbsp;-</span><span style="color: #0000BB">1</span><span style="color: #007700">;<br /></span><span style="color: #0000BB"> &nbsp; &nbsp;</span><span style="color: #007700">}<br /><br /></span><span style="color: #0000BB"> &nbsp; &nbsp;</span><span style="color: #FF8000">//&nbsp;and let's&nbsp;destroy&nbsp;entrance&nbsp;pickup&nbsp;and&nbsp;text.<br /></span><span style="color: #0000BB"> &nbsp;  if&nbsp;</span><span style="color: #007700">(</span><span style="color: #0000BB">IsValidDynamic3DTextLabel</span><span style="color: #007700">(</span><span style="color: #0000BB">EntranceData</span><span style="color: #007700">[</span><span style="color: #0000BB">entId</span><span style="color: #007700">][</span><span style="color: #0000BB">text</span><span style="color: #007700">]))<br /></span><span style="color: #0000BB"> &nbsp; &nbsp; &nbsp; &nbsp;DestroyDynamic3DTextLabel</span><span style="color: #007700">(</span><span style="color: #0000BB">EntranceData</span><span style="color: #007700">[</span><span style="color: #0000BB">entId</span><span style="color: #007700">][</span><span style="color: #0000BB">text</span><span style="color: #007700">]);<br /><br /></span><span style="color: #0000BB"> &nbsp; &nbsp;</span><span style="color: #007700">if&nbsp;(</span><span style="color: #0000BB">IsValidDynamicPickup</span><span style="color: #007700">(</span><span style="color: #0000BB">EntranceData</span><span style="color: #007700">[</span><span style="color: #0000BB">entId</span><span style="color: #007700">][</span><span style="color: #0000BB">model</span><span style="color: #007700">]))<br /></span><span style="color: #0000BB"> &nbsp; &nbsp; &nbsp; &nbsp;DestroyDynamicPickup</span><span style="color: #007700">(</span><span style="color: #0000BB">EntranceData</span><span style="color: #007700">[</span><span style="color: #0000BB">entId</span><span style="color: #007700">][</span><span style="color: #0000BB">model</span><span style="color: #007700">]);<br /><br /></span><span style="color: #0000BB"> &nbsp; &nbsp;</span><span style="color: #FF8000">//&nbsp;if&nbsp;things&nbsp;are&nbsp;clear,&nbsp;now&nbsp;we&nbsp;can&nbsp;safely&nbsp;reset Entrance&nbsp;Data.<br /></span><span style="color: #0000BB"> &nbsp; &nbsp;</span><span style="color: #007700">new&nbsp;</span><span style="color: #0000BB">tmpReset</span><span style="color: #007700">[</span><span style="color: #0000BB">e_ENTRANCE_DATA</span><span style="color: #007700">];<br /></span><span style="color: #0000BB"> &nbsp; &nbsp;EntranceData</span><span style="color: #007700">[</span><span style="color: #0000BB">entId</span><span style="color: #007700">]</span><span style="color: #0000BB"> </span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">tmpReset</span><span style="color: #007700">;<br /></span><span style="color: #0000BB"> &nbsp; &nbsp;EntranceData</span><span style="color: #007700">[</span><span style="color: #0000BB">entId</span><span style="color: #007700">][</span><span style="color: #0000BB">isExists</span><span style="color: #007700">]&nbsp;=&nbsp;</span><span style="color: #0000BB">false</span><span style="color: #007700">;<br /></span><span style="color: #0000BB"> &nbsp; &nbsp;</span><span style="color: #007700">return&nbsp;</span><span style="color: #0000BB">1</span><span style="color: #007700">;<br />}<br /><br />public&nbsp;</span><span style="color: #0000BB">OnPlayerKeyStatechange</span><span style="color: #007700">(</span><span style="color: #0000BB">playerid</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">newkeys</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">oldkeys</span><span style="color: #007700">)&nbsp;{<br /><br /></span><span style="color: #0000BB"> &nbsp; &nbsp;</span><span style="color: #FF8000">//&nbsp;this&nbsp;code is&nbsp;detecting&nbsp;if&nbsp;player&nbsp;pressed&nbsp;KEY_FIRE&nbsp;(F/Enter/LMB/TAB)<br /></span><span style="color: #0000BB"> &nbsp; &nbsp;</span><span style="color: #007700">if&nbsp;((</span><span style="color: #0000BB">newkeys&nbsp;</span><span style="color: #007700">&amp;&nbsp;</span><span style="color: #0000BB">KEY_FIRE</span><span style="color: #007700">)&nbsp;&amp;&amp;&nbsp;!(</span><span style="color: #0000BB">oldkeys&nbsp;</span><span style="color: #007700">&amp;&nbsp;</span><span style="color: #0000BB">KEY_FIRE</span><span style="color: #007700">))&nbsp;{<br /><br /></span><span style="color: #0000BB"> &nbsp; &nbsp; &nbsp;  </span><span style="color: #FF8000">//making&nbsp;local&nbsp;variabel&nbsp;for&nbsp;storing&nbsp;entrance&nbsp;ID<br /></span><span style="color: #0000BB"> &nbsp; &nbsp; &nbsp; &nbsp;</span><span style="color: #007700">new&nbsp;</span><span style="color: #0000BB">entId</span><span style="color: #007700">;<br /><br /></span><span style="color: #0000BB"> &nbsp; &nbsp; &nbsp; &nbsp;</span><span style="color: #FF8000">//&nbsp;we&nbsp;need&nbsp;to&nbsp;make&nbsp;a&nbsp;function&nbsp;which&nbsp;detects&nbsp;if&nbsp;player&nbsp;is&nbsp;nearing&nbsp;any<br /></span><span style="color: #0000BB"> &nbsp; &nbsp; &nbsp; &nbsp;</span><span style="color: #FF8000">//&nbsp;entrance&nbsp;within&nbsp;radius&nbsp;2.5,&nbsp;if&nbsp;does then&nbsp;script returning&nbsp;a&nbsp;entrance&nbsp;ID.<br /></span><span style="color: #0000BB"> &nbsp; &nbsp; &nbsp; &nbsp;</span><span style="color: #007700">if&nbsp;((</span><span style="color: #0000BB">entId&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">GetNearestEntrance</span><span style="color: #007700">(</span><span style="color: #0000BB">playerid</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">2.5</span><span style="color: #007700">))&nbsp;!=&nbsp;-</span><span style="color: #0000BB">1</span><span style="color: #007700">)&nbsp;{<br /><br /></span><span style="color: #0000BB"> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</span><span style="color: #FF8000">//&nbsp;after&nbsp;that,&nbsp;teleport&nbsp;player&nbsp;to&nbsp;inside of&nbsp;nearest&nbsp;entrance<br /></span><span style="color: #0000BB"> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;SetPlayerPos</span><span style="color: #007700">(</span><span style="color: #0000BB">playerid</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">EntranceData</span><span style="color: #007700">[</span><span style="color: #0000BB">entId</span><span style="color: #007700">][</span><span style="color: #0000BB">intPos</span><span style="color: #007700">][</span><span style="color: #0000BB">0</span><span style="color: #007700">],</span><span style="color: #0000BB"> EntranceData</span><span style="color: #007700">[</span><span style="color: #0000BB">entId</span><span style="color: #007700">][</span><span style="color: #0000BB">intPos</span><span style="color: #007700">][</span><span style="color: #0000BB">1</span><span style="color: #007700">],</span><span style="color: #0000BB"> EntranceData</span><span style="color: #007700">[</span><span style="color: #0000BB">entId</span><span style="color: #007700">][</span><span style="color: #0000BB">intPos</span><span style="color: #007700">][</span><span style="color: #0000BB">2</span><span style="color: #007700">]);<br /></span><span style="color: #0000BB"> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;SetPlayerFacingAngle</span><span style="color: #007700">(</span><span style="color: #0000BB">playerid</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">EntranceData</span><span style="color: #007700">[</span><span style="color: #0000BB">entId</span><span style="color: #007700">][</span><span style="color: #0000BB">intPos</span><span style="color: #007700">][</span><span style="color: #0000BB">3</span><span style="color: #007700">]);<br /></span><span style="color: #0000BB"> <br /> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;SetPlayerInterior</span><span style="color: #007700">(</span><span style="color: #0000BB">playerid</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">EntranceData</span><span style="color: #007700">[</span><span style="color: #0000BB">entId</span><span style="color: #007700">][</span><span style="color: #0000BB">int</span><span style="color: #007700">]);<br /></span><span style="color: #0000BB"> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;SetPlayerVirtualWorld</span><span style="color: #007700">(</span><span style="color: #0000BB">playerid</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">EntranceData</span><span style="color: #007700">[</span><span style="color: #0000BB">entId</span><span style="color: #007700">][</span><span style="color: #0000BB">world</span><span style="color: #007700">]);<br /><br /></span><span style="color: #0000BB"> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</span><span style="color: #FF8000">//&nbsp;storing&nbsp;entrance&nbsp;ID&nbsp;to&nbsp;player&nbsp;variable,&nbsp;so&nbsp;we&nbsp;can&nbsp;use&nbsp;that&nbsp;later.<br /></span><span style="color: #0000BB"> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;PlayerInEntrance</span><span style="color: #007700">[</span><span style="color: #0000BB">playerid</span><span style="color: #007700">]&nbsp;=&nbsp;</span><span style="color: #0000BB">entId</span><span style="color: #007700">;<br /></span><span style="color: #0000BB"> &nbsp; &nbsp; &nbsp; &nbsp;</span><span style="color: #007700">}</span><span style="color: #0000BB"> <br /><br /> &nbsp; &nbsp; &nbsp; &nbsp;</span><span style="color: #FF8000">//&nbsp;this&nbsp;code&nbsp;checking&nbsp;player&nbsp;if&nbsp;they&nbsp;pressed&nbsp;"F"/KEY_FIRE&nbsp;and&nbsp;player&nbsp;in&nbsp;near&nbsp;exit&nbsp;+&nbsp;player&nbsp;inside&nbsp;a&nbsp;entrance.<br /></span><span style="color: #0000BB"> &nbsp; &nbsp; &nbsp; &nbsp;</span><span style="color: #007700">if&nbsp;((</span><span style="color: #0000BB">entId&nbsp;</span><span style="color: #007700">=</span><span style="color: #0000BB"> PlayerInEntrance</span><span style="color: #007700">[</span><span style="color: #0000BB">playerid</span><span style="color: #007700">]&nbsp;!=&nbsp;-</span><span style="color: #0000BB">1</span><span style="color: #007700">)</span><span style="color: #0000BB"> </span><span style="color: #007700">&amp;&amp;&nbsp;</span><span style="color: #0000BB">IsPlayerInRangeOfPoint</span><span style="color: #007700">(</span><span style="color: #0000BB">playerid</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">2.5</span><span style="color: #007700">,</span><span style="color: #0000BB"> EntranceData</span><span style="color: #007700">[</span><span style="color: #0000BB">entId</span><span style="color: #007700">][</span><span style="color: #0000BB">intPos</span><span style="color: #007700">][</span><span style="color: #0000BB">0</span><span style="color: #007700">],</span><span style="color: #0000BB"> EntranceData</span><span style="color: #007700">[</span><span style="color: #0000BB">entId</span><span style="color: #007700">][</span><span style="color: #0000BB">intPos</span><span style="color: #007700">][</span><span style="color: #0000BB">1</span><span style="color: #007700">],</span><span style="color: #0000BB"> EntranceData</span><span style="color: #007700">[</span><span style="color: #0000BB">entId</span><span style="color: #007700">][</span><span style="color: #0000BB">intPos</span><span style="color: #007700">][</span><span style="color: #0000BB">2</span><span style="color: #007700">]))&nbsp;{<br /></span><span style="color: #0000BB"> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</span><span style="color: #FF8000">//&nbsp;after&nbsp;that,&nbsp;teleport&nbsp;player&nbsp;to&nbsp;outside of&nbsp;nearest&nbsp;entrance<br /></span><span style="color: #0000BB"> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;SetPlayerPos</span><span style="color: #007700">(</span><span style="color: #0000BB">playerid</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">EntranceData</span><span style="color: #007700">[</span><span style="color: #0000BB">entId</span><span style="color: #007700">][</span><span style="color: #0000BB">pos</span><span style="color: #007700">][</span><span style="color: #0000BB">0</span><span style="color: #007700">],</span><span style="color: #0000BB"> EntranceData</span><span style="color: #007700">[</span><span style="color: #0000BB">entId</span><span style="color: #007700">][</span><span style="color: #0000BB">pos</span><span style="color: #007700">][</span><span style="color: #0000BB">1</span><span style="color: #007700">],</span><span style="color: #0000BB"> EntranceData</span><span style="color: #007700">[</span><span style="color: #0000BB">entId</span><span style="color: #007700">][</span><span style="color: #0000BB">pos</span><span style="color: #007700">][</span><span style="color: #0000BB">2</span><span style="color: #007700">]);<br /></span><span style="color: #0000BB"> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;SetPlayerFacingAngle</span><span style="color: #007700">(</span><span style="color: #0000BB">playerid</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">EntranceData</span><span style="color: #007700">[</span><span style="color: #0000BB">entId</span><span style="color: #007700">][</span><span style="color: #0000BB">pos</span><span style="color: #007700">][</span><span style="color: #0000BB">3</span><span style="color: #007700">]);<br /></span><span style="color: #0000BB"> <br /> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;SetPlayerInterior</span><span style="color: #007700">(</span><span style="color: #0000BB">playerid</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">0</span><span style="color: #007700">);<br /></span><span style="color: #0000BB"> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;SetPlayerVirtualWorld</span><span style="color: #007700">(</span><span style="color: #0000BB">playerid</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">0</span><span style="color: #007700">);<br /><br /></span><span style="color: #0000BB"> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</span><span style="color: #FF8000">//&nbsp;change player&nbsp;variable&nbsp;to&nbsp;-1&nbsp;to&nbsp;avoid&nbsp;false&nbsp;detection.<br /></span><span style="color: #0000BB"> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;PlayerInEntrance</span><span style="color: #007700">[</span><span style="color: #0000BB">playerid</span><span style="color: #007700">]&nbsp;=&nbsp;-</span><span style="color: #0000BB">1</span><span style="color: #007700">;<br /></span><span style="color: #0000BB"> &nbsp; &nbsp; &nbsp; &nbsp;</span><span style="color: #007700">}<br /></span><span style="color: #0000BB"> &nbsp; &nbsp;</span><span style="color: #007700">}<br /></span><span style="color: #0000BB"> &nbsp; &nbsp;</span><span style="color: #007700">return&nbsp;</span><span style="color: #0000BB">1</span><span style="color: #007700">;<br />}<br /><br /></span><span style="color: #0000BB">GetNearestEntrance</span><span style="color: #007700">(</span><span style="color: #0000BB">playerid</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">Float</span><span style="color: #007700">:</span><span style="color: #0000BB">radius&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">4.0</span><span style="color: #007700">)&nbsp;{<br /></span><span style="color: #0000BB"> &nbsp; &nbsp;</span><span style="color: #007700">for&nbsp;(new&nbsp;</span><span style="color: #0000BB">i</span><span style="color: #007700">;&nbsp;</span><span style="color: #0000BB">i&nbsp;</span><span style="color: #007700">&lt;&nbsp;</span><span style="color: #0000BB">MAX_ENTRANCE</span><span style="color: #007700">;&nbsp;</span><span style="color: #0000BB">i&nbsp;</span><span style="color: #007700">++)&nbsp;if&nbsp;(</span><span style="color: #0000BB">IsPlayerInRangeOfPoint</span><span style="color: #007700">(</span><span style="color: #0000BB">playerid</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">2.5</span><span style="color: #007700">,</span><span style="color: #0000BB"> EntranceData</span><span style="color: #007700">[</span><span style="color: #0000BB">entId</span><span style="color: #007700">][</span><span style="color: #0000BB">pos</span><span style="color: #007700">][</span><span style="color: #0000BB">0</span><span style="color: #007700">],</span><span style="color: #0000BB"> EntranceData</span><span style="color: #007700">[</span><span style="color: #0000BB">entId</span><span style="color: #007700">][</span><span style="color: #0000BB">pos</span><span style="color: #007700">][</span><span style="color: #0000BB">1</span><span style="color: #007700">],</span><span style="color: #0000BB"> EntranceData</span><span style="color: #007700">[</span><span style="color: #0000BB">entId</span><span style="color: #007700">][</span><span style="color: #0000BB">pos</span><span style="color: #007700">][</span><span style="color: #0000BB">2</span><span style="color: #007700">]))&nbsp;{<br /></span><span style="color: #0000BB"> &nbsp; &nbsp; &nbsp; &nbsp;</span><span style="color: #007700">return&nbsp;</span><span style="color: #0000BB">i</span><span style="color: #007700">;</span><span style="color: #0000BB"> &nbsp;  <br /> &nbsp;  </span><span style="color: #007700">}<br /></span><span style="color: #0000BB"> &nbsp; &nbsp;</span><span style="color: #007700">return&nbsp;-</span><span style="color: #0000BB">1</span><span style="color: #007700">;<br />}&nbsp;<br /></span></code></div></div></div>]]></description>
			<content:encoded><![CDATA[Hello guys, today i want to teach you how to make a simple entrance, it's easy to make entrance.<br />
All you need to do just follow my instruction, okay ;)<br />
<br />
First, you need to download these includes below.<ul class="mycode_list"><li>sscanf -&gt; <a href="https://github.com/maddinat0r/sscanf/releases" target="_blank" rel="noopener" class="mycode_url">https://github.com/maddinat0r/sscanf/releases</a><br />
</li>
<li>streamer -&gt;<a href="https://github.com/samp-incognito/samp-streamer-plugin/releases" target="_blank" rel="noopener" class="mycode_url">https://github.com/samp-incognito/samp-s...n/releases</a><br />
</li>
<li>Pawn.CMD -&gt; <a href="https://github.com/urShadow/Pawn.CMD/releases" target="_blank" rel="noopener" class="mycode_url">https://github.com/urShadow/Pawn.CMD/releases</a> (or you can download your own version of CMD processor)<br />
</li>
</ul>
Then you need to extract each of that include to each folder. If you found .dll file, put it on Plugins and if you found .inc file you can put on "pawno/includes"<br />
Okay, i assuming you have extracted the include/plugins, now let's get started.<br />
<br />
Make a base script, like this:<br />
<div class="codeblock phpcodeblock"><div class="title">PHP Code:</div><div class="body"><div dir="ltr"><code><span style="color: #FF8000">#define&nbsp;FILTERSCRIPT<br /><br />#include&nbsp;&lt;a_samp&gt;<br />#include&nbsp;&lt;sscanf2&gt;<br />#include&nbsp;&lt;streamer&gt;<br />#include&nbsp;&lt;Pawn.CMD&gt;<br /><br /></span><span style="color: #007700">public&nbsp;</span><span style="color: #0000BB">OnFilterScriptInit</span><span style="color: #007700">()</span><span style="color: #0000BB"> </span><span style="color: #007700">{<br /></span><span style="color: #0000BB"> &nbsp; &nbsp;</span><span style="color: #007700">return&nbsp;</span><span style="color: #0000BB">1</span><span style="color: #007700">;<br />}<br /><br />public&nbsp;</span><span style="color: #0000BB">OnFilterScriptExit</span><span style="color: #007700">()</span><span style="color: #0000BB"> </span><span style="color: #007700">{<br /></span><span style="color: #0000BB"> &nbsp; &nbsp;</span><span style="color: #007700">return&nbsp;</span><span style="color: #0000BB">1</span><span style="color: #007700">;<br />}&nbsp;<br /></span></code></div></div></div><br />
Add MAX_ENTRANCE, enum (alias), and public variable like this:<br />
<div class="codeblock phpcodeblock"><div class="title">PHP Code:</div><div class="body"><div dir="ltr"><code><span style="color: #FF8000">#define&nbsp;MAX_ENTRANCE&nbsp;22&nbsp;//&nbsp;maximum&nbsp;entrance&nbsp;"server"&nbsp;could&nbsp;handle/store&nbsp;temporarily<br /><br /></span><span style="color: #0000BB">enum <br /> &nbsp;  e_ENTRANCE_DATA&nbsp;</span><span style="color: #007700">{<br /></span><span style="color: #0000BB"> &nbsp; &nbsp;bool</span><span style="color: #007700">:</span><span style="color: #0000BB">isExists</span><span style="color: #007700">,&nbsp;</span><span style="color: #FF8000">//&nbsp;checking&nbsp;if&nbsp;entrance&nbsp;exists<br /></span><span style="color: #0000BB"> &nbsp; &nbsp;name</span><span style="color: #007700">[</span><span style="color: #0000BB">24</span><span style="color: #007700">],&nbsp;</span><span style="color: #FF8000">//&nbsp;entrance&nbsp;name<br /></span><span style="color: #0000BB"> &nbsp; &nbsp;Float</span><span style="color: #007700">:</span><span style="color: #0000BB">pos</span><span style="color: #007700">[</span><span style="color: #0000BB">3</span><span style="color: #007700">],&nbsp;</span><span style="color: #FF8000">//&nbsp;outside&nbsp;position<br /></span><span style="color: #0000BB"> &nbsp; &nbsp;Float</span><span style="color: #007700">:</span><span style="color: #0000BB">intPos</span><span style="color: #007700">[</span><span style="color: #0000BB">3</span><span style="color: #007700">],&nbsp;</span><span style="color: #FF8000">//&nbsp;inside&nbsp;position<br /></span><span style="color: #0000BB"> &nbsp; &nbsp;int</span><span style="color: #007700">,&nbsp;</span><span style="color: #FF8000">//&nbsp;interior&nbsp;id<br /></span><span style="color: #0000BB"> &nbsp; &nbsp;world&nbsp;</span><span style="color: #FF8000">//&nbsp;world&nbsp;id<br /></span><span style="color: #007700">};<br />new&nbsp;</span><span style="color: #0000BB">EntranceData</span><span style="color: #007700">[</span><span style="color: #0000BB">MAX_ENTRANCE</span><span style="color: #007700">][</span><span style="color: #0000BB">e_ENTRANCE_DATA</span><span style="color: #007700">];&nbsp;<br /></span></code></div></div></div><br />
Next step is making a command, use your word like "entrancecreate, entranceedit, entrancedelete" or anything for the command name.<br />
And adding "security" like IsPlayerAdmin(playerid) you can preventing people from creating a entrance.<br />
You can do like this if you want:<br />
<div class="codeblock phpcodeblock"><div class="title">PHP Code:</div><div class="body"><div dir="ltr"><code><span style="color: #0000BB">CMD</span><span style="color: #007700">:</span><span style="color: #0000BB">makeentrance</span><span style="color: #007700">(</span><span style="color: #0000BB">playerid</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">params</span><span style="color: #007700">[])&nbsp;{<br /></span><span style="color: #0000BB"> &nbsp; &nbsp;</span><span style="color: #007700">if&nbsp;(!</span><span style="color: #0000BB">IsPlayerAdmin</span><span style="color: #007700">(</span><span style="color: #0000BB">playerid</span><span style="color: #007700">))&nbsp;return&nbsp;</span><span style="color: #0000BB">SendClientMessage</span><span style="color: #007700">(</span><span style="color: #0000BB">playerid</span><span style="color: #007700">,&nbsp;-</span><span style="color: #0000BB">1</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">"You&nbsp;are&nbsp;not&nbsp;administrator"</span><span style="color: #007700">);<br /></span><span style="color: #0000BB"> &nbsp; &nbsp;</span><span style="color: #007700">if&nbsp;(!</span><span style="color: #0000BB">isnull</span><span style="color: #007700">(</span><span style="color: #0000BB">params</span><span style="color: #007700">))&nbsp;return&nbsp;</span><span style="color: #0000BB">SendClientMessage</span><span style="color: #007700">(</span><span style="color: #0000BB">playerid</span><span style="color: #007700">,&nbsp;-</span><span style="color: #0000BB">1</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">"/makeentrance&nbsp;&lt;name&gt;"</span><span style="color: #007700">);&nbsp;</span><span style="color: #FF8000">//&nbsp;tell&nbsp;player&nbsp;if&nbsp;"params"&nbsp;is&nbsp;null&nbsp;<br /></span></code></div></div></div><br />
Inside the cmd, you need to add this.<br />
<div class="codeblock phpcodeblock"><div class="title">PHP Code:</div><div class="body"><div dir="ltr"><code><span style="color: #0000BB"> &nbsp; </span><span style="color: #FF8000">//&nbsp;getting&nbsp;the&nbsp;next&nbsp;slot&nbsp;with&nbsp;checking&nbsp;if&nbsp;isExists&nbsp;on&nbsp;"i"&nbsp;variable is&nbsp;false<br /></span><span style="color: #0000BB"> &nbsp; &nbsp;</span><span style="color: #007700">for&nbsp;(new&nbsp;</span><span style="color: #0000BB">i</span><span style="color: #007700">;&nbsp;</span><span style="color: #0000BB">i&nbsp;</span><span style="color: #007700">&lt;&nbsp;</span><span style="color: #0000BB">MAX_ENTRANCE</span><span style="color: #007700">;&nbsp;</span><span style="color: #0000BB">i&nbsp;</span><span style="color: #007700">++)&nbsp;if&nbsp;(!</span><span style="color: #0000BB">EntranceData</span><span style="color: #007700">[</span><span style="color: #0000BB">i</span><span style="color: #007700">][</span><span style="color: #0000BB">isExists</span><span style="color: #007700">])&nbsp;{<br /><br /></span><span style="color: #0000BB"> &nbsp; &nbsp; &nbsp; &nbsp;</span><span style="color: #FF8000">//&nbsp;storing&nbsp;useful&nbsp;data&nbsp;to&nbsp;server,&nbsp;this&nbsp;prevents&nbsp;for&nbsp;"false&nbsp;detection"<br /></span><span style="color: #0000BB"> &nbsp; &nbsp; &nbsp; &nbsp;EntranceData</span><span style="color: #007700">[</span><span style="color: #0000BB">i</span><span style="color: #007700">][</span><span style="color: #0000BB">isExists</span><span style="color: #007700">]&nbsp;=&nbsp;</span><span style="color: #0000BB">true</span><span style="color: #007700">;<br /><br /></span><span style="color: #0000BB"> &nbsp; &nbsp; &nbsp;  </span><span style="color: #FF8000">//you&nbsp;can&nbsp;use&nbsp;strcat&nbsp;if&nbsp;you&nbsp;want,&nbsp;but&nbsp;i&nbsp;prefer&nbsp;format<br /></span><span style="color: #0000BB"> &nbsp; &nbsp; &nbsp; &nbsp;format</span><span style="color: #007700">(</span><span style="color: #0000BB">EntranceData</span><span style="color: #007700">[</span><span style="color: #0000BB">i</span><span style="color: #007700">][</span><span style="color: #0000BB">name</span><span style="color: #007700">],&nbsp;</span><span style="color: #0000BB">24</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">params</span><span style="color: #007700">);<br /><br /></span><span style="color: #0000BB"> &nbsp; &nbsp; &nbsp; </span><span style="color: #FF8000">//&nbsp;getting&nbsp;player&nbsp;position&nbsp;and&nbsp;angle&nbsp;for&nbsp;teleport/spawning&nbsp;pickup<br /></span><span style="color: #0000BB"> &nbsp; &nbsp; &nbsp; &nbsp;GetPlayerPos</span><span style="color: #007700">(</span><span style="color: #0000BB">playerid</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">EntranceData</span><span style="color: #007700">[</span><span style="color: #0000BB">i</span><span style="color: #007700">][</span><span style="color: #0000BB">pos</span><span style="color: #007700">][</span><span style="color: #0000BB">0</span><span style="color: #007700">],</span><span style="color: #0000BB"> EntranceData</span><span style="color: #007700">[</span><span style="color: #0000BB">i</span><span style="color: #007700">][</span><span style="color: #0000BB">pos</span><span style="color: #007700">][</span><span style="color: #0000BB">1</span><span style="color: #007700">],</span><span style="color: #0000BB"> EntranceData</span><span style="color: #007700">[</span><span style="color: #0000BB">i</span><span style="color: #007700">][</span><span style="color: #0000BB">pos</span><span style="color: #007700">][</span><span style="color: #0000BB">2</span><span style="color: #007700">]);<br /></span><span style="color: #0000BB"> &nbsp; &nbsp; &nbsp; &nbsp;GetPlayerFacingAngle</span><span style="color: #007700">(</span><span style="color: #0000BB">playerid</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">EntranceData</span><span style="color: #007700">[</span><span style="color: #0000BB">i</span><span style="color: #007700">][</span><span style="color: #0000BB">pos</span><span style="color: #007700">][</span><span style="color: #0000BB">3</span><span style="color: #007700">]);<br /></span><span style="color: #0000BB"> &nbsp; &nbsp; &nbsp; <br /> &nbsp; &nbsp; &nbsp; &nbsp;</span><span style="color: #FF8000">//&nbsp;spawning&nbsp;"dynamic&nbsp;pickup"&nbsp;on&nbsp;stored&nbsp;location<br /></span><span style="color: #0000BB"> &nbsp; &nbsp; &nbsp; &nbsp;EntranceData</span><span style="color: #007700">[</span><span style="color: #0000BB">i</span><span style="color: #007700">][</span><span style="color: #0000BB">text</span><span style="color: #007700">]&nbsp;=&nbsp;</span><span style="color: #0000BB">CreateDynamic3DTextLabel</span><span style="color: #007700">(</span><span style="color: #0000BB">EntranceData</span><span style="color: #007700">[</span><span style="color: #0000BB">i</span><span style="color: #007700">][</span><span style="color: #0000BB">name</span><span style="color: #007700">],&nbsp;-</span><span style="color: #0000BB">1</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">EntranceData</span><span style="color: #007700">[</span><span style="color: #0000BB">i</span><span style="color: #007700">][</span><span style="color: #0000BB">pos</span><span style="color: #007700">][</span><span style="color: #0000BB">0</span><span style="color: #007700">],</span><span style="color: #0000BB"> EntranceData</span><span style="color: #007700">[</span><span style="color: #0000BB">i</span><span style="color: #007700">][</span><span style="color: #0000BB">pos</span><span style="color: #007700">][</span><span style="color: #0000BB">1</span><span style="color: #007700">],</span><span style="color: #0000BB"> EntranceData</span><span style="color: #007700">[</span><span style="color: #0000BB">i</span><span style="color: #007700">][</span><span style="color: #0000BB">pos</span><span style="color: #007700">][</span><span style="color: #0000BB">2</span><span style="color: #007700">],&nbsp;</span><span style="color: #0000BB">4.0</span><span style="color: #007700">);<br /></span><span style="color: #0000BB"> &nbsp; &nbsp; &nbsp; &nbsp;EntranceData</span><span style="color: #007700">[</span><span style="color: #0000BB">i</span><span style="color: #007700">][</span><span style="color: #0000BB">model</span><span style="color: #007700">]&nbsp;=&nbsp;</span><span style="color: #0000BB">CreateDynamicPickup</span><span style="color: #007700">(</span><span style="color: #0000BB">modelid</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">type</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">EntranceData</span><span style="color: #007700">[</span><span style="color: #0000BB">i</span><span style="color: #007700">][</span><span style="color: #0000BB">pos</span><span style="color: #007700">][</span><span style="color: #0000BB">0</span><span style="color: #007700">],</span><span style="color: #0000BB"> EntranceData</span><span style="color: #007700">[</span><span style="color: #0000BB">i</span><span style="color: #007700">][</span><span style="color: #0000BB">pos</span><span style="color: #007700">][</span><span style="color: #0000BB">1</span><span style="color: #007700">],</span><span style="color: #0000BB"> EntranceData</span><span style="color: #007700">[</span><span style="color: #0000BB">i</span><span style="color: #007700">][</span><span style="color: #0000BB">pos</span><span style="color: #007700">][</span><span style="color: #0000BB">2</span><span style="color: #007700">],&nbsp;</span><span style="color: #0000BB">0</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">0</span><span style="color: #007700">);<br /><br /></span><span style="color: #0000BB"> &nbsp; &nbsp; &nbsp;  </span><span style="color: #FF8000">//&nbsp;and&nbsp;tell&nbsp;player&nbsp;if&nbsp;everything&nbsp;done<br /></span><span style="color: #0000BB"> &nbsp; &nbsp; &nbsp;  SendClientMessage</span><span style="color: #007700">(</span><span style="color: #0000BB">playerid</span><span style="color: #007700">,&nbsp;-</span><span style="color: #0000BB">1</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">"Successfully&nbsp;making&nbsp;a&nbsp;entrance"</span><span style="color: #007700">);<br /></span><span style="color: #0000BB"> &nbsp; &nbsp; &nbsp; &nbsp;</span><span style="color: #007700">return&nbsp;</span><span style="color: #0000BB">1</span><span style="color: #007700">;<br /></span><span style="color: #0000BB"> &nbsp;  </span><span style="color: #007700">}<br /></span><span style="color: #0000BB"> &nbsp; &nbsp; </span><span style="color: #FF8000">//&nbsp;if&nbsp;MAX_ENTRANCE&nbsp;has&nbsp;reached,&nbsp;tell&nbsp;player<br /></span><span style="color: #0000BB"> &nbsp; &nbsp; SendClientMessage</span><span style="color: #007700">(</span><span style="color: #0000BB">playerid</span><span style="color: #007700">,&nbsp;-</span><span style="color: #0000BB">1</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">"Server&nbsp;cannot&nbsp;handle&nbsp;more&nbsp;entrance"</span><span style="color: #007700">);<br /></span><span style="color: #0000BB"> &nbsp; &nbsp; return&nbsp;1</span><span style="color: #007700">;<br />}&nbsp;<br /></span></code></div></div></div><br />
That code will checking if number within "i" variable is free to use, and if is then the code will set isExists to prevent "overwriting" data/false detection.<br />
And storing player position and angle is useful for teleporting and "spawning" pickup on that positon.<br />
<br />
After making command for creating entrance, now you need to make another command for storing interior position, so you can enter/exit.<br />
For example, i will make "entrancepos" instead "entranceedit" because i want to make things simpler.<br />
<div class="codeblock phpcodeblock"><div class="title">PHP Code:</div><div class="body"><div dir="ltr"><code><span style="color: #0000BB">CMD</span><span style="color: #007700">:</span><span style="color: #0000BB">interiorentrance</span><span style="color: #007700">(</span><span style="color: #0000BB">playerid</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">params</span><span style="color: #007700">[])&nbsp;{<br /></span><span style="color: #0000BB"> &nbsp;  <br /> &nbsp; &nbsp;</span><span style="color: #FF8000">//&nbsp;make&nbsp;local&nbsp;variable&nbsp;first&nbsp;to&nbsp;avoid&nbsp;warning/error<br /></span><span style="color: #0000BB"> &nbsp;  new&nbsp;entId</span><span style="color: #007700">;<br /></span><span style="color: #0000BB"> &nbsp;  <br /> &nbsp; </span><span style="color: #FF8000">//&nbsp;check&nbsp;if&nbsp;player&nbsp;not&nbsp;input&nbsp;anything&nbsp;or&nbsp;if&nbsp;player&nbsp;input&nbsp;is&nbsp;NaN<br /></span><span style="color: #0000BB"> &nbsp; &nbsp;</span><span style="color: #007700">if&nbsp;(</span><span style="color: #0000BB">sscanf</span><span style="color: #007700">(</span><span style="color: #0000BB">params</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">"i"</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">entId</span><span style="color: #007700">))<br /></span><span style="color: #0000BB"> &nbsp; &nbsp; &nbsp; &nbsp;</span><span style="color: #007700">return&nbsp;</span><span style="color: #0000BB">SendClientMessage</span><span style="color: #007700">(</span><span style="color: #0000BB">playerid</span><span style="color: #007700">,&nbsp;-</span><span style="color: #0000BB">1</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">"/nteriorentrance&lt;entrance&nbsp;ID&gt;"</span><span style="color: #007700">);&nbsp;</span><span style="color: #FF8000">//&nbsp;then&nbsp;tell&nbsp;player&nbsp;to&nbsp;do&nbsp;like&nbsp;this.<br /></span><span style="color: #0000BB">  <br /> &nbsp; &nbsp;</span><span style="color: #FF8000">//&nbsp;check&nbsp;again&nbsp;if&nbsp;entrance&nbsp;is&nbsp;valid,&nbsp;using&nbsp;this&nbsp;method&nbsp;will&nbsp;avoid&nbsp;any&nbsp;warning&nbsp;like&nbsp;"Array&nbsp;out&nbsp;of&nbsp;bonds"<br /></span><span style="color: #0000BB"> &nbsp; &nbsp;</span><span style="color: #007700">if&nbsp;((</span><span style="color: #0000BB">entId&nbsp;</span><span style="color: #007700">&lt;&nbsp;</span><span style="color: #0000BB">1&nbsp;</span><span style="color: #007700">||&nbsp;</span><span style="color: #0000BB">entId&nbsp;</span><span style="color: #007700">&gt;=&nbsp;</span><span style="color: #0000BB">MAX_ENTRANCE</span><span style="color: #007700">)&nbsp;&amp;&amp;&nbsp;(!</span><span style="color: #0000BB">EntranceData</span><span style="color: #007700">[</span><span style="color: #0000BB">entId</span><span style="color: #007700">][</span><span style="color: #0000BB">isExists</span><span style="color: #007700">]))<br /></span><span style="color: #0000BB"> &nbsp; &nbsp; &nbsp; &nbsp;</span><span style="color: #007700">return&nbsp;</span><span style="color: #0000BB">SendClientMessage</span><span style="color: #007700">(</span><span style="color: #0000BB">playerid</span><span style="color: #007700">,&nbsp;-</span><span style="color: #0000BB">1</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">"Invalid&nbsp;entrance&nbsp;ID"</span><span style="color: #007700">);&nbsp;</span><span style="color: #FF8000">//&nbsp;if&nbsp;is,&nbsp;tell&nbsp;player&nbsp;that&nbsp;ID&nbsp;is&nbsp;not&nbsp;exists.<br /><br /></span><span style="color: #0000BB"> &nbsp; &nbsp;</span><span style="color: #FF8000">//&nbsp;if&nbsp;things&nbsp;are&nbsp;clear,&nbsp;now&nbsp;we&nbsp;can&nbsp;safely&nbsp;store&nbsp;our&nbsp;position&nbsp;to&nbsp;Entrance&nbsp;Data.<br /></span><span style="color: #0000BB"> &nbsp; &nbsp;GetPlayerPos</span><span style="color: #007700">(</span><span style="color: #0000BB">playerid</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">EntranceData</span><span style="color: #007700">[</span><span style="color: #0000BB">entId</span><span style="color: #007700">][</span><span style="color: #0000BB">pos</span><span style="color: #007700">][</span><span style="color: #0000BB">0</span><span style="color: #007700">],</span><span style="color: #0000BB"> EntranceData</span><span style="color: #007700">[</span><span style="color: #0000BB">entId</span><span style="color: #007700">][</span><span style="color: #0000BB">pos</span><span style="color: #007700">][</span><span style="color: #0000BB">1</span><span style="color: #007700">],</span><span style="color: #0000BB"> EntranceData</span><span style="color: #007700">[</span><span style="color: #0000BB">entId</span><span style="color: #007700">][</span><span style="color: #0000BB">pos</span><span style="color: #007700">][</span><span style="color: #0000BB">2</span><span style="color: #007700">]);<br /></span><span style="color: #0000BB"> &nbsp; &nbsp;GetPlayerFacingAngle</span><span style="color: #007700">(</span><span style="color: #0000BB">playerid</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">EntranceData</span><span style="color: #007700">[</span><span style="color: #0000BB">entId</span><span style="color: #007700">][</span><span style="color: #0000BB">pos</span><span style="color: #007700">][</span><span style="color: #0000BB">3</span><span style="color: #007700">]);<br /></span><span style="color: #0000BB"> <br /> &nbsp; &nbsp;EntranceData</span><span style="color: #007700">[</span><span style="color: #0000BB">entId</span><span style="color: #007700">][</span><span style="color: #0000BB">int</span><span style="color: #007700">]&nbsp;=&nbsp;</span><span style="color: #0000BB">GetPlayerInterior</span><span style="color: #007700">(</span><span style="color: #0000BB">playerid</span><span style="color: #007700">);<br /></span><span style="color: #0000BB"> &nbsp; &nbsp;EntranceData</span><span style="color: #007700">[</span><span style="color: #0000BB">entId</span><span style="color: #007700">][</span><span style="color: #0000BB">world</span><span style="color: #007700">]&nbsp;=&nbsp;</span><span style="color: #0000BB">GetPlayerVirtualWorld</span><span style="color: #007700">(</span><span style="color: #0000BB">playerid</span><span style="color: #007700">);<br /></span><span style="color: #0000BB"> &nbsp;  <br /> &nbsp; &nbsp;</span><span style="color: #FF8000">//&nbsp;tell&nbsp;player&nbsp;if&nbsp;script&nbsp;successfully&nbsp;storing&nbsp;data.<br /></span><span style="color: #0000BB"> &nbsp; &nbsp;SendClientMessage</span><span style="color: #007700">(</span><span style="color: #0000BB">playerid</span><span style="color: #007700">,&nbsp;-</span><span style="color: #0000BB">1</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">"Successfully&nbsp;editing&nbsp;Entrance&nbsp;Interior"</span><span style="color: #007700">);<br /></span><span style="color: #0000BB"> &nbsp; &nbsp;</span><span style="color: #007700">return&nbsp;</span><span style="color: #0000BB">1</span><span style="color: #007700">;<br />}&nbsp;<br /></span></code></div></div></div><br />
We're finish making those command, now the last but not least.. Making a delete command.<br />
<div class="codeblock phpcodeblock"><div class="title">PHP Code:</div><div class="body"><div dir="ltr"><code><span style="color: #0000BB">CMD</span><span style="color: #007700">:</span><span style="color: #0000BB">deleteentrance</span><span style="color: #007700">(</span><span style="color: #0000BB">playerid</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">params</span><span style="color: #007700">[])&nbsp;{<br /></span><span style="color: #0000BB"> &nbsp; &nbsp;</span><span style="color: #FF8000">//&nbsp;make&nbsp;local&nbsp;variable&nbsp;first&nbsp;to&nbsp;avoid&nbsp;warning/error<br /></span><span style="color: #0000BB"> &nbsp;  new&nbsp;entId</span><span style="color: #007700">;<br /></span><span style="color: #0000BB"> &nbsp;  <br /> &nbsp; </span><span style="color: #FF8000">//&nbsp;check&nbsp;if&nbsp;player&nbsp;not&nbsp;input&nbsp;anything&nbsp;or&nbsp;if&nbsp;player&nbsp;input&nbsp;is&nbsp;NaN<br /></span><span style="color: #0000BB"> &nbsp; &nbsp;</span><span style="color: #007700">if&nbsp;(</span><span style="color: #0000BB">sscanf</span><span style="color: #007700">(</span><span style="color: #0000BB">params</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">"i"</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">entId</span><span style="color: #007700">))<br /></span><span style="color: #0000BB"> &nbsp; &nbsp; &nbsp; &nbsp;</span><span style="color: #007700">return&nbsp;</span><span style="color: #0000BB">SendClientMessage</span><span style="color: #007700">(</span><span style="color: #0000BB">playerid</span><span style="color: #007700">,&nbsp;-</span><span style="color: #0000BB">1</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">"/deleteentrance&nbsp;&lt;entrance&nbsp;ID&gt;"</span><span style="color: #007700">);&nbsp;</span><span style="color: #FF8000">//&nbsp;then&nbsp;tell&nbsp;player&nbsp;to&nbsp;do&nbsp;like&nbsp;this.<br /></span><span style="color: #0000BB">  <br /> &nbsp; &nbsp;</span><span style="color: #FF8000">//&nbsp;check&nbsp;again&nbsp;if&nbsp;entrance&nbsp;is&nbsp;valid,&nbsp;using&nbsp;this&nbsp;method&nbsp;will&nbsp;avoid&nbsp;any&nbsp;warning&nbsp;like&nbsp;"Array&nbsp;out&nbsp;of&nbsp;bonds"<br /></span><span style="color: #0000BB"> &nbsp; &nbsp;</span><span style="color: #007700">if&nbsp;((</span><span style="color: #0000BB">entId&nbsp;</span><span style="color: #007700">&lt;&nbsp;</span><span style="color: #0000BB">1&nbsp;</span><span style="color: #007700">||&nbsp;</span><span style="color: #0000BB">entId&nbsp;</span><span style="color: #007700">&gt;=&nbsp;</span><span style="color: #0000BB">MAX_ENTRANCE</span><span style="color: #007700">)&nbsp;&amp;&amp;&nbsp;(!</span><span style="color: #0000BB">EntranceData</span><span style="color: #007700">[</span><span style="color: #0000BB">entId</span><span style="color: #007700">][</span><span style="color: #0000BB">isExists</span><span style="color: #007700">]))<br /></span><span style="color: #0000BB"> &nbsp; &nbsp; &nbsp; &nbsp;</span><span style="color: #007700">return&nbsp;</span><span style="color: #0000BB">SendClientMessage</span><span style="color: #007700">(</span><span style="color: #0000BB">playerid</span><span style="color: #007700">,&nbsp;-</span><span style="color: #0000BB">1</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">"Invalid&nbsp;entrance&nbsp;ID"</span><span style="color: #007700">);&nbsp;</span><span style="color: #FF8000">//&nbsp;if&nbsp;is,&nbsp;tell&nbsp;player&nbsp;that&nbsp;ID&nbsp;is&nbsp;not&nbsp;exists.<br /><br /></span><span style="color: #0000BB"> &nbsp; &nbsp;</span><span style="color: #FF8000">//&nbsp;okay first,&nbsp;we&nbsp;gonna&nbsp;kick&nbsp;people&nbsp;if&nbsp;they&nbsp;are&nbsp;inside&nbsp;of&nbsp;what&nbsp;we&nbsp;want&nbsp;to&nbsp;destroy/delete.<br /></span><span style="color: #0000BB"> &nbsp; &nbsp;</span><span style="color: #007700">for&nbsp;(new&nbsp;</span><span style="color: #0000BB">i</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">j&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">GetPlayerPoolSize</span><span style="color: #007700">();&nbsp;</span><span style="color: #0000BB">i&nbsp;</span><span style="color: #007700">&lt;&nbsp;</span><span style="color: #0000BB">j</span><span style="color: #007700">;&nbsp;</span><span style="color: #0000BB">i&nbsp;</span><span style="color: #007700">++)&nbsp;if&nbsp;(</span><span style="color: #0000BB">PlayerInEntrance</span><span style="color: #007700">[</span><span style="color: #0000BB">i</span><span style="color: #007700">]&nbsp;==&nbsp;</span><span style="color: #0000BB">entId</span><span style="color: #007700">)&nbsp;{<br /><br /></span><span style="color: #0000BB"> &nbsp; &nbsp; &nbsp; &nbsp;SetPlayerPos</span><span style="color: #007700">(</span><span style="color: #0000BB">playerid</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">EntranceData</span><span style="color: #007700">[</span><span style="color: #0000BB">entId</span><span style="color: #007700">][</span><span style="color: #0000BB">pos</span><span style="color: #007700">][</span><span style="color: #0000BB">0</span><span style="color: #007700">],</span><span style="color: #0000BB"> EntranceData</span><span style="color: #007700">[</span><span style="color: #0000BB">entId</span><span style="color: #007700">][</span><span style="color: #0000BB">pos</span><span style="color: #007700">][</span><span style="color: #0000BB">1</span><span style="color: #007700">],</span><span style="color: #0000BB"> EntranceData</span><span style="color: #007700">[</span><span style="color: #0000BB">entId</span><span style="color: #007700">][</span><span style="color: #0000BB">pos</span><span style="color: #007700">][</span><span style="color: #0000BB">2</span><span style="color: #007700">]);<br /></span><span style="color: #0000BB"> &nbsp; &nbsp; &nbsp; &nbsp;SetPlayerFacingAngle</span><span style="color: #007700">(</span><span style="color: #0000BB">playerid</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">EntranceData</span><span style="color: #007700">[</span><span style="color: #0000BB">entId</span><span style="color: #007700">][</span><span style="color: #0000BB">pos</span><span style="color: #007700">][</span><span style="color: #0000BB">3</span><span style="color: #007700">]);<br /></span><span style="color: #0000BB"> <br /> &nbsp; &nbsp; &nbsp; &nbsp;SetPlayerInterior</span><span style="color: #007700">(</span><span style="color: #0000BB">playerid</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">0</span><span style="color: #007700">);<br /></span><span style="color: #0000BB"> &nbsp; &nbsp; &nbsp; &nbsp;SetPlayerVirtualWorld</span><span style="color: #007700">(</span><span style="color: #0000BB">playerid</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">0</span><span style="color: #007700">);<br /><br /></span><span style="color: #0000BB"> &nbsp; &nbsp; &nbsp; &nbsp;PlayerInEntrance</span><span style="color: #007700">[</span><span style="color: #0000BB">playerid</span><span style="color: #007700">]&nbsp;=&nbsp;-</span><span style="color: #0000BB">1</span><span style="color: #007700">;<br /></span><span style="color: #0000BB"> &nbsp; &nbsp;</span><span style="color: #007700">}<br /><br /></span><span style="color: #0000BB"> &nbsp; &nbsp;</span><span style="color: #FF8000">//&nbsp;and let's&nbsp;destroy&nbsp;entrance&nbsp;pickup&nbsp;and&nbsp;text.<br /></span><span style="color: #0000BB"> &nbsp;  if&nbsp;</span><span style="color: #007700">(</span><span style="color: #0000BB">IsValidDynamic3DTextLabel</span><span style="color: #007700">(</span><span style="color: #0000BB">EntranceData</span><span style="color: #007700">[</span><span style="color: #0000BB">entId</span><span style="color: #007700">][</span><span style="color: #0000BB">text</span><span style="color: #007700">]))<br /></span><span style="color: #0000BB"> &nbsp; &nbsp; &nbsp; &nbsp;DestroyDynamic3DTextLabel</span><span style="color: #007700">(</span><span style="color: #0000BB">EntranceData</span><span style="color: #007700">[</span><span style="color: #0000BB">entId</span><span style="color: #007700">][</span><span style="color: #0000BB">text</span><span style="color: #007700">]);<br /><br /></span><span style="color: #0000BB"> &nbsp; &nbsp;</span><span style="color: #007700">if&nbsp;(</span><span style="color: #0000BB">IsValidDynamicPickup</span><span style="color: #007700">(</span><span style="color: #0000BB">EntranceData</span><span style="color: #007700">[</span><span style="color: #0000BB">entId</span><span style="color: #007700">][</span><span style="color: #0000BB">model</span><span style="color: #007700">]))<br /></span><span style="color: #0000BB"> &nbsp; &nbsp; &nbsp; &nbsp;DestroyDynamicPickup</span><span style="color: #007700">(</span><span style="color: #0000BB">EntranceData</span><span style="color: #007700">[</span><span style="color: #0000BB">entId</span><span style="color: #007700">][</span><span style="color: #0000BB">model</span><span style="color: #007700">]);<br /><br /></span><span style="color: #0000BB"> &nbsp; &nbsp;</span><span style="color: #FF8000">//&nbsp;if&nbsp;things&nbsp;are&nbsp;clear,&nbsp;now&nbsp;we&nbsp;can&nbsp;safely&nbsp;reset Entrance&nbsp;Data.<br /></span><span style="color: #0000BB"> &nbsp; &nbsp;</span><span style="color: #007700">new&nbsp;</span><span style="color: #0000BB">tmpReset</span><span style="color: #007700">[</span><span style="color: #0000BB">e_ENTRANCE_DATA</span><span style="color: #007700">];<br /></span><span style="color: #0000BB"> &nbsp; &nbsp;EntranceData</span><span style="color: #007700">[</span><span style="color: #0000BB">entId</span><span style="color: #007700">]</span><span style="color: #0000BB"> </span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">tmpReset</span><span style="color: #007700">;<br /></span><span style="color: #0000BB"> &nbsp; &nbsp;EntranceData</span><span style="color: #007700">[</span><span style="color: #0000BB">entId</span><span style="color: #007700">][</span><span style="color: #0000BB">isExists</span><span style="color: #007700">]&nbsp;=&nbsp;</span><span style="color: #0000BB">false</span><span style="color: #007700">;<br /></span><span style="color: #0000BB"> &nbsp; &nbsp;</span><span style="color: #007700">return&nbsp;</span><span style="color: #0000BB">1</span><span style="color: #007700">;<br />}&nbsp;<br /></span></code></div></div></div><br />
Now we're done with command, lets go to the next step.<br />
Okay, we need to make a code so people can enter a entrance with "F" or whatever key you'll use.<br />
Lets say i want to make "F" for enter/exit the entrance.<br />
<div class="codeblock phpcodeblock"><div class="title">PHP Code:</div><div class="body"><div dir="ltr"><code><span style="color: #007700">public&nbsp;</span><span style="color: #0000BB">OnPlayerKeyStatechange</span><span style="color: #007700">(</span><span style="color: #0000BB">playerid</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">newkeys</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">oldkeys</span><span style="color: #007700">)&nbsp;{<br /><br /></span><span style="color: #0000BB"> &nbsp; &nbsp;</span><span style="color: #FF8000">//&nbsp;this&nbsp;code is&nbsp;detecting&nbsp;if&nbsp;player&nbsp;pressed&nbsp;KEY_FIRE&nbsp;(F/Enter/LMB/TAB)<br /></span><span style="color: #0000BB"> &nbsp; &nbsp;</span><span style="color: #007700">if&nbsp;((</span><span style="color: #0000BB">newkeys&nbsp;</span><span style="color: #007700">&amp;&nbsp;</span><span style="color: #0000BB">KEY_FIRE</span><span style="color: #007700">)&nbsp;&amp;&amp;&nbsp;!(</span><span style="color: #0000BB">oldkeys&nbsp;</span><span style="color: #007700">&amp;&nbsp;</span><span style="color: #0000BB">KEY_FIRE</span><span style="color: #007700">))&nbsp;{<br /><br /></span><span style="color: #0000BB"> &nbsp; &nbsp; &nbsp;  </span><span style="color: #FF8000">//making&nbsp;local&nbsp;variabel&nbsp;for&nbsp;storing&nbsp;entrance&nbsp;ID<br /></span><span style="color: #0000BB"> &nbsp; &nbsp; &nbsp; &nbsp;</span><span style="color: #007700">new&nbsp;</span><span style="color: #0000BB">entId</span><span style="color: #007700">;<br /><br /></span><span style="color: #0000BB"> &nbsp; &nbsp; &nbsp; &nbsp;</span><span style="color: #FF8000">//&nbsp;we&nbsp;need&nbsp;to&nbsp;make&nbsp;a&nbsp;function&nbsp;which&nbsp;detects&nbsp;if&nbsp;player&nbsp;is&nbsp;nearing&nbsp;any<br /></span><span style="color: #0000BB"> &nbsp; &nbsp; &nbsp; &nbsp;</span><span style="color: #FF8000">//&nbsp;entrance&nbsp;within&nbsp;radius&nbsp;2.5,&nbsp;if&nbsp;does then&nbsp;script returning&nbsp;a&nbsp;entrance&nbsp;ID.<br /></span><span style="color: #0000BB"> &nbsp; &nbsp; &nbsp; &nbsp;</span><span style="color: #007700">if&nbsp;((</span><span style="color: #0000BB">entId&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">GetNearestEntrance</span><span style="color: #007700">(</span><span style="color: #0000BB">playerid</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">2.5</span><span style="color: #007700">))&nbsp;!=&nbsp;-</span><span style="color: #0000BB">1</span><span style="color: #007700">)&nbsp;{<br /><br /></span><span style="color: #0000BB"> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</span><span style="color: #FF8000">//&nbsp;after&nbsp;that,&nbsp;teleport&nbsp;player&nbsp;to&nbsp;inside of&nbsp;nearest&nbsp;entrance<br /></span><span style="color: #0000BB"> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;SetPlayerPos</span><span style="color: #007700">(</span><span style="color: #0000BB">playerid</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">EntranceData</span><span style="color: #007700">[</span><span style="color: #0000BB">entId</span><span style="color: #007700">][</span><span style="color: #0000BB">intPos</span><span style="color: #007700">][</span><span style="color: #0000BB">0</span><span style="color: #007700">],</span><span style="color: #0000BB"> EntranceData</span><span style="color: #007700">[</span><span style="color: #0000BB">entId</span><span style="color: #007700">][</span><span style="color: #0000BB">intPos</span><span style="color: #007700">][</span><span style="color: #0000BB">1</span><span style="color: #007700">],</span><span style="color: #0000BB"> EntranceData</span><span style="color: #007700">[</span><span style="color: #0000BB">entId</span><span style="color: #007700">][</span><span style="color: #0000BB">intPos</span><span style="color: #007700">][</span><span style="color: #0000BB">2</span><span style="color: #007700">]);<br /></span><span style="color: #0000BB"> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;SetPlayerFacingAngle</span><span style="color: #007700">(</span><span style="color: #0000BB">playerid</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">EntranceData</span><span style="color: #007700">[</span><span style="color: #0000BB">entId</span><span style="color: #007700">][</span><span style="color: #0000BB">intPos</span><span style="color: #007700">][</span><span style="color: #0000BB">3</span><span style="color: #007700">]);<br /></span><span style="color: #0000BB"> <br /> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;SetPlayerInterior</span><span style="color: #007700">(</span><span style="color: #0000BB">playerid</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">EntranceData</span><span style="color: #007700">[</span><span style="color: #0000BB">entId</span><span style="color: #007700">][</span><span style="color: #0000BB">int</span><span style="color: #007700">]);<br /></span><span style="color: #0000BB"> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;SetPlayerVirtualWorld</span><span style="color: #007700">(</span><span style="color: #0000BB">playerid</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">EntranceData</span><span style="color: #007700">[</span><span style="color: #0000BB">entId</span><span style="color: #007700">][</span><span style="color: #0000BB">world</span><span style="color: #007700">]);<br /><br /></span><span style="color: #0000BB"> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</span><span style="color: #FF8000">//&nbsp;storing&nbsp;entrance&nbsp;ID&nbsp;to&nbsp;player&nbsp;variable,&nbsp;so&nbsp;we&nbsp;can&nbsp;use&nbsp;that&nbsp;later.<br /></span><span style="color: #0000BB"> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;PlayerInEntrance</span><span style="color: #007700">[</span><span style="color: #0000BB">playerid</span><span style="color: #007700">]&nbsp;=&nbsp;</span><span style="color: #0000BB">entId</span><span style="color: #007700">;<br /></span><span style="color: #0000BB"> &nbsp; &nbsp; &nbsp; &nbsp;</span><span style="color: #007700">}</span><span style="color: #0000BB"> <br /><br /> &nbsp; &nbsp; &nbsp; &nbsp;</span><span style="color: #FF8000">//&nbsp;this&nbsp;code&nbsp;checking&nbsp;player&nbsp;if&nbsp;they&nbsp;pressed&nbsp;"F"/KEY_FIRE&nbsp;and&nbsp;player&nbsp;in&nbsp;near&nbsp;exit&nbsp;+&nbsp;player&nbsp;inside&nbsp;a&nbsp;entrance.<br /></span><span style="color: #0000BB"> &nbsp; &nbsp; &nbsp; &nbsp;</span><span style="color: #007700">if&nbsp;((</span><span style="color: #0000BB">entId&nbsp;</span><span style="color: #007700">=</span><span style="color: #0000BB"> PlayerInEntrance</span><span style="color: #007700">[</span><span style="color: #0000BB">playerid</span><span style="color: #007700">]&nbsp;!=&nbsp;-</span><span style="color: #0000BB">1</span><span style="color: #007700">)</span><span style="color: #0000BB"> </span><span style="color: #007700">&amp;&amp;&nbsp;</span><span style="color: #0000BB">IsPlayerInRangeOfPoint</span><span style="color: #007700">(</span><span style="color: #0000BB">playerid</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">2.5</span><span style="color: #007700">,</span><span style="color: #0000BB"> EntranceData</span><span style="color: #007700">[</span><span style="color: #0000BB">entId</span><span style="color: #007700">][</span><span style="color: #0000BB">intPos</span><span style="color: #007700">][</span><span style="color: #0000BB">0</span><span style="color: #007700">],</span><span style="color: #0000BB"> EntranceData</span><span style="color: #007700">[</span><span style="color: #0000BB">entId</span><span style="color: #007700">][</span><span style="color: #0000BB">intPos</span><span style="color: #007700">][</span><span style="color: #0000BB">1</span><span style="color: #007700">],</span><span style="color: #0000BB"> EntranceData</span><span style="color: #007700">[</span><span style="color: #0000BB">entId</span><span style="color: #007700">][</span><span style="color: #0000BB">intPos</span><span style="color: #007700">][</span><span style="color: #0000BB">2</span><span style="color: #007700">]))&nbsp;{<br /></span><span style="color: #0000BB"> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</span><span style="color: #FF8000">//&nbsp;after&nbsp;that,&nbsp;teleport&nbsp;player&nbsp;to&nbsp;outside of&nbsp;nearest&nbsp;entrance<br /></span><span style="color: #0000BB"> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;SetPlayerPos</span><span style="color: #007700">(</span><span style="color: #0000BB">playerid</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">EntranceData</span><span style="color: #007700">[</span><span style="color: #0000BB">entId</span><span style="color: #007700">][</span><span style="color: #0000BB">pos</span><span style="color: #007700">][</span><span style="color: #0000BB">0</span><span style="color: #007700">],</span><span style="color: #0000BB"> EntranceData</span><span style="color: #007700">[</span><span style="color: #0000BB">entId</span><span style="color: #007700">][</span><span style="color: #0000BB">pos</span><span style="color: #007700">][</span><span style="color: #0000BB">1</span><span style="color: #007700">],</span><span style="color: #0000BB"> EntranceData</span><span style="color: #007700">[</span><span style="color: #0000BB">entId</span><span style="color: #007700">][</span><span style="color: #0000BB">pos</span><span style="color: #007700">][</span><span style="color: #0000BB">2</span><span style="color: #007700">]);<br /></span><span style="color: #0000BB"> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;SetPlayerFacingAngle</span><span style="color: #007700">(</span><span style="color: #0000BB">playerid</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">EntranceData</span><span style="color: #007700">[</span><span style="color: #0000BB">entId</span><span style="color: #007700">][</span><span style="color: #0000BB">pos</span><span style="color: #007700">][</span><span style="color: #0000BB">3</span><span style="color: #007700">]);<br /></span><span style="color: #0000BB"> <br /> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;SetPlayerInterior</span><span style="color: #007700">(</span><span style="color: #0000BB">playerid</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">0</span><span style="color: #007700">);<br /></span><span style="color: #0000BB"> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;SetPlayerVirtualWorld</span><span style="color: #007700">(</span><span style="color: #0000BB">playerid</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">0</span><span style="color: #007700">);<br /><br /></span><span style="color: #0000BB"> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</span><span style="color: #FF8000">//&nbsp;change player&nbsp;variable&nbsp;to&nbsp;-1&nbsp;to&nbsp;avoid&nbsp;false&nbsp;detection.<br /></span><span style="color: #0000BB"> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;PlayerInEntrance</span><span style="color: #007700">[</span><span style="color: #0000BB">playerid</span><span style="color: #007700">]&nbsp;=&nbsp;-</span><span style="color: #0000BB">1</span><span style="color: #007700">;<br /></span><span style="color: #0000BB"> &nbsp; &nbsp; &nbsp; &nbsp;</span><span style="color: #007700">}<br /></span><span style="color: #0000BB"> &nbsp; &nbsp;</span><span style="color: #007700">}<br /></span><span style="color: #0000BB"> &nbsp; &nbsp;</span><span style="color: #007700">return&nbsp;</span><span style="color: #0000BB">1</span><span style="color: #007700">;<br />}&nbsp;<br /></span></code></div></div></div><br />
Last but not least, we're gonna make "function" to check is player near any entrance <br />
and returning entrance ID if that entrance is closest to player than any entrance.<br />
<br />
<div class="codeblock phpcodeblock"><div class="title">PHP Code:</div><div class="body"><div dir="ltr"><code><span style="color: #0000BB">GetNearestEntrance</span><span style="color: #007700">(</span><span style="color: #0000BB">playerid</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">Float</span><span style="color: #007700">:</span><span style="color: #0000BB">radius&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">4.0</span><span style="color: #007700">)&nbsp;{<br /></span><span style="color: #0000BB"> &nbsp; &nbsp;</span><span style="color: #007700">for&nbsp;(new&nbsp;</span><span style="color: #0000BB">i</span><span style="color: #007700">;&nbsp;</span><span style="color: #0000BB">i&nbsp;</span><span style="color: #007700">&lt;&nbsp;</span><span style="color: #0000BB">MAX_ENTRANCE</span><span style="color: #007700">;&nbsp;</span><span style="color: #0000BB">i&nbsp;</span><span style="color: #007700">++)&nbsp;if&nbsp;(</span><span style="color: #0000BB">IsPlayerInRangeOfPoint</span><span style="color: #007700">(</span><span style="color: #0000BB">playerid</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">2.5</span><span style="color: #007700">,</span><span style="color: #0000BB"> EntranceData</span><span style="color: #007700">[</span><span style="color: #0000BB">entId</span><span style="color: #007700">][</span><span style="color: #0000BB">pos</span><span style="color: #007700">][</span><span style="color: #0000BB">0</span><span style="color: #007700">],</span><span style="color: #0000BB"> EntranceData</span><span style="color: #007700">[</span><span style="color: #0000BB">entId</span><span style="color: #007700">][</span><span style="color: #0000BB">pos</span><span style="color: #007700">][</span><span style="color: #0000BB">1</span><span style="color: #007700">],</span><span style="color: #0000BB"> EntranceData</span><span style="color: #007700">[</span><span style="color: #0000BB">entId</span><span style="color: #007700">][</span><span style="color: #0000BB">pos</span><span style="color: #007700">][</span><span style="color: #0000BB">2</span><span style="color: #007700">]))&nbsp;{<br /></span><span style="color: #0000BB"> &nbsp; &nbsp; &nbsp; &nbsp;</span><span style="color: #007700">return&nbsp;</span><span style="color: #0000BB">i</span><span style="color: #007700">;</span><span style="color: #0000BB"> &nbsp;  <br /> &nbsp;  </span><span style="color: #007700">}<br /></span><span style="color: #0000BB"> &nbsp; &nbsp;</span><span style="color: #007700">return&nbsp;-</span><span style="color: #0000BB">1</span><span style="color: #007700">;<br />}&nbsp;<br /></span></code></div></div></div><br />
Yaay, we finish making Entrance System, if you don't understand please reply so i/other people can give you proper way to make you understand.<br />
Sorry if my bad english hehe ~<br />
<br />
Oh yeah, btw here is the full code:<br />
<div class="codeblock phpcodeblock"><div class="title">PHP Code:</div><div class="body"><div dir="ltr"><code><span style="color: #FF8000">#define&nbsp;FILTERSCRIPT<br /><br />#include&nbsp;&lt;a_samp&gt;<br />#include&nbsp;&lt;sscanf2&gt;<br />#include&nbsp;&lt;streamer&gt;<br />#include&nbsp;&lt;Pawn.CMD&gt;<br /><br /></span><span style="color: #007700">public&nbsp;</span><span style="color: #0000BB">OnFilterScriptInit</span><span style="color: #007700">()</span><span style="color: #0000BB"> </span><span style="color: #007700">{<br /></span><span style="color: #0000BB"> &nbsp; &nbsp;</span><span style="color: #007700">return&nbsp;</span><span style="color: #0000BB">1</span><span style="color: #007700">;<br />}<br /><br />public&nbsp;</span><span style="color: #0000BB">OnFilterScriptExit</span><span style="color: #007700">()</span><span style="color: #0000BB"> </span><span style="color: #007700">{<br /></span><span style="color: #0000BB"> &nbsp; &nbsp;</span><span style="color: #007700">return&nbsp;</span><span style="color: #0000BB">1</span><span style="color: #007700">;<br />}<br /><br /></span><span style="color: #0000BB">CMD</span><span style="color: #007700">:</span><span style="color: #0000BB">makeentrance</span><span style="color: #007700">(</span><span style="color: #0000BB">playerid</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">params</span><span style="color: #007700">[])&nbsp;{<br /></span><span style="color: #0000BB"> &nbsp; &nbsp;</span><span style="color: #007700">if&nbsp;(!</span><span style="color: #0000BB">IsPlayerAdmin</span><span style="color: #007700">(</span><span style="color: #0000BB">playerid</span><span style="color: #007700">))&nbsp;return&nbsp;</span><span style="color: #0000BB">SendClientMessage</span><span style="color: #007700">(</span><span style="color: #0000BB">playerid</span><span style="color: #007700">,&nbsp;-</span><span style="color: #0000BB">1</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">"You&nbsp;are&nbsp;not&nbsp;administrator"</span><span style="color: #007700">);<br /></span><span style="color: #0000BB"> &nbsp; &nbsp;</span><span style="color: #007700">if&nbsp;(!</span><span style="color: #0000BB">isnull</span><span style="color: #007700">(</span><span style="color: #0000BB">params</span><span style="color: #007700">))&nbsp;return&nbsp;</span><span style="color: #0000BB">SendClientMessage</span><span style="color: #007700">(</span><span style="color: #0000BB">playerid</span><span style="color: #007700">,&nbsp;-</span><span style="color: #0000BB">1</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">"/makeentrance&nbsp;&lt;name&gt;"</span><span style="color: #007700">);&nbsp;</span><span style="color: #FF8000">//&nbsp;tell&nbsp;player&nbsp;if&nbsp;"params"&nbsp;is&nbsp;null<br /><br /></span><span style="color: #0000BB"> &nbsp; </span><span style="color: #FF8000">//&nbsp;getting&nbsp;the&nbsp;next&nbsp;slot&nbsp;with&nbsp;checking&nbsp;if&nbsp;isExists&nbsp;on&nbsp;"i"&nbsp;variable is&nbsp;false<br /></span><span style="color: #0000BB"> &nbsp; &nbsp;</span><span style="color: #007700">for&nbsp;(new&nbsp;</span><span style="color: #0000BB">i</span><span style="color: #007700">;&nbsp;</span><span style="color: #0000BB">i&nbsp;</span><span style="color: #007700">&lt;&nbsp;</span><span style="color: #0000BB">MAX_ENTRANCE</span><span style="color: #007700">;&nbsp;</span><span style="color: #0000BB">i&nbsp;</span><span style="color: #007700">++)&nbsp;if&nbsp;(!</span><span style="color: #0000BB">EntranceData</span><span style="color: #007700">[</span><span style="color: #0000BB">i</span><span style="color: #007700">][</span><span style="color: #0000BB">isExists</span><span style="color: #007700">])&nbsp;{<br /><br /></span><span style="color: #0000BB"> &nbsp; &nbsp; &nbsp; &nbsp;</span><span style="color: #FF8000">//&nbsp;storing&nbsp;useful&nbsp;data&nbsp;to&nbsp;server,&nbsp;this&nbsp;prevents&nbsp;for&nbsp;"false&nbsp;detection"<br /></span><span style="color: #0000BB"> &nbsp; &nbsp; &nbsp; &nbsp;EntranceData</span><span style="color: #007700">[</span><span style="color: #0000BB">i</span><span style="color: #007700">][</span><span style="color: #0000BB">isExists</span><span style="color: #007700">]&nbsp;=&nbsp;</span><span style="color: #0000BB">true</span><span style="color: #007700">;<br /><br /></span><span style="color: #0000BB"> &nbsp; &nbsp; &nbsp;  </span><span style="color: #FF8000">//you&nbsp;can&nbsp;use&nbsp;strcat&nbsp;if&nbsp;you&nbsp;want,&nbsp;but&nbsp;i&nbsp;prefer&nbsp;format<br /></span><span style="color: #0000BB"> &nbsp; &nbsp; &nbsp; &nbsp;format</span><span style="color: #007700">(</span><span style="color: #0000BB">EntranceData</span><span style="color: #007700">[</span><span style="color: #0000BB">i</span><span style="color: #007700">][</span><span style="color: #0000BB">name</span><span style="color: #007700">],&nbsp;</span><span style="color: #0000BB">24</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">params</span><span style="color: #007700">);<br /><br /></span><span style="color: #0000BB"> &nbsp; &nbsp; &nbsp; </span><span style="color: #FF8000">//&nbsp;getting&nbsp;player&nbsp;position&nbsp;and&nbsp;angle&nbsp;for&nbsp;teleport/spawning&nbsp;pickup<br /></span><span style="color: #0000BB"> &nbsp; &nbsp; &nbsp; &nbsp;GetPlayerPos</span><span style="color: #007700">(</span><span style="color: #0000BB">playerid</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">EntranceData</span><span style="color: #007700">[</span><span style="color: #0000BB">i</span><span style="color: #007700">][</span><span style="color: #0000BB">pos</span><span style="color: #007700">][</span><span style="color: #0000BB">0</span><span style="color: #007700">],</span><span style="color: #0000BB"> EntranceData</span><span style="color: #007700">[</span><span style="color: #0000BB">i</span><span style="color: #007700">][</span><span style="color: #0000BB">pos</span><span style="color: #007700">][</span><span style="color: #0000BB">1</span><span style="color: #007700">],</span><span style="color: #0000BB"> EntranceData</span><span style="color: #007700">[</span><span style="color: #0000BB">i</span><span style="color: #007700">][</span><span style="color: #0000BB">pos</span><span style="color: #007700">][</span><span style="color: #0000BB">2</span><span style="color: #007700">]);<br /></span><span style="color: #0000BB"> &nbsp; &nbsp; &nbsp; &nbsp;GetPlayerFacingAngle</span><span style="color: #007700">(</span><span style="color: #0000BB">playerid</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">EntranceData</span><span style="color: #007700">[</span><span style="color: #0000BB">i</span><span style="color: #007700">][</span><span style="color: #0000BB">pos</span><span style="color: #007700">][</span><span style="color: #0000BB">3</span><span style="color: #007700">]);<br /></span><span style="color: #0000BB"> &nbsp; &nbsp; &nbsp; <br /> &nbsp; &nbsp; &nbsp; &nbsp;</span><span style="color: #FF8000">//&nbsp;spawning&nbsp;"dynamic&nbsp;pickup"&nbsp;on&nbsp;stored&nbsp;location<br /></span><span style="color: #0000BB"> &nbsp; &nbsp; &nbsp; &nbsp;EntranceData</span><span style="color: #007700">[</span><span style="color: #0000BB">i</span><span style="color: #007700">][</span><span style="color: #0000BB">text</span><span style="color: #007700">]&nbsp;=&nbsp;</span><span style="color: #0000BB">CreateDynamic3DTextLabel</span><span style="color: #007700">(</span><span style="color: #0000BB">EntranceData</span><span style="color: #007700">[</span><span style="color: #0000BB">i</span><span style="color: #007700">][</span><span style="color: #0000BB">name</span><span style="color: #007700">],&nbsp;-</span><span style="color: #0000BB">1</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">EntranceData</span><span style="color: #007700">[</span><span style="color: #0000BB">i</span><span style="color: #007700">][</span><span style="color: #0000BB">pos</span><span style="color: #007700">][</span><span style="color: #0000BB">0</span><span style="color: #007700">],</span><span style="color: #0000BB"> EntranceData</span><span style="color: #007700">[</span><span style="color: #0000BB">i</span><span style="color: #007700">][</span><span style="color: #0000BB">pos</span><span style="color: #007700">][</span><span style="color: #0000BB">1</span><span style="color: #007700">],</span><span style="color: #0000BB"> EntranceData</span><span style="color: #007700">[</span><span style="color: #0000BB">i</span><span style="color: #007700">][</span><span style="color: #0000BB">pos</span><span style="color: #007700">][</span><span style="color: #0000BB">2</span><span style="color: #007700">],&nbsp;</span><span style="color: #0000BB">4.0</span><span style="color: #007700">);<br /></span><span style="color: #0000BB"> &nbsp; &nbsp; &nbsp; &nbsp;EntranceData</span><span style="color: #007700">[</span><span style="color: #0000BB">i</span><span style="color: #007700">][</span><span style="color: #0000BB">model</span><span style="color: #007700">]&nbsp;=&nbsp;</span><span style="color: #0000BB">CreateDynamicPickup</span><span style="color: #007700">(</span><span style="color: #0000BB">modelid</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">type</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">EntranceData</span><span style="color: #007700">[</span><span style="color: #0000BB">i</span><span style="color: #007700">][</span><span style="color: #0000BB">pos</span><span style="color: #007700">][</span><span style="color: #0000BB">0</span><span style="color: #007700">],</span><span style="color: #0000BB"> EntranceData</span><span style="color: #007700">[</span><span style="color: #0000BB">i</span><span style="color: #007700">][</span><span style="color: #0000BB">pos</span><span style="color: #007700">][</span><span style="color: #0000BB">1</span><span style="color: #007700">],</span><span style="color: #0000BB"> EntranceData</span><span style="color: #007700">[</span><span style="color: #0000BB">i</span><span style="color: #007700">][</span><span style="color: #0000BB">pos</span><span style="color: #007700">][</span><span style="color: #0000BB">2</span><span style="color: #007700">],&nbsp;</span><span style="color: #0000BB">0</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">0</span><span style="color: #007700">);<br /><br /></span><span style="color: #0000BB"> &nbsp; &nbsp; &nbsp;  </span><span style="color: #FF8000">//&nbsp;and&nbsp;tell&nbsp;player&nbsp;if&nbsp;everything&nbsp;done<br /></span><span style="color: #0000BB"> &nbsp; &nbsp; &nbsp;  SendClientMessage</span><span style="color: #007700">(</span><span style="color: #0000BB">playerid</span><span style="color: #007700">,&nbsp;-</span><span style="color: #0000BB">1</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">"Successfully&nbsp;making&nbsp;a&nbsp;entrance"</span><span style="color: #007700">);<br /></span><span style="color: #0000BB"> &nbsp; &nbsp; &nbsp; &nbsp;</span><span style="color: #007700">return&nbsp;</span><span style="color: #0000BB">1</span><span style="color: #007700">;<br /></span><span style="color: #0000BB"> &nbsp;  </span><span style="color: #007700">}<br /></span><span style="color: #0000BB"> &nbsp; &nbsp; </span><span style="color: #FF8000">//&nbsp;if&nbsp;MAX_ENTRANCE&nbsp;has&nbsp;reached,&nbsp;tell&nbsp;player<br /></span><span style="color: #0000BB"> &nbsp; &nbsp; SendClientMessage</span><span style="color: #007700">(</span><span style="color: #0000BB">playerid</span><span style="color: #007700">,&nbsp;-</span><span style="color: #0000BB">1</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">"Server&nbsp;cannot&nbsp;handle&nbsp;more&nbsp;entrance"</span><span style="color: #007700">);<br /></span><span style="color: #0000BB"> &nbsp; &nbsp; return&nbsp;1</span><span style="color: #007700">;<br />}<br /><br /></span><span style="color: #0000BB">CMD</span><span style="color: #007700">:</span><span style="color: #0000BB">interiorentrance</span><span style="color: #007700">(</span><span style="color: #0000BB">playerid</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">params</span><span style="color: #007700">[])&nbsp;{<br /></span><span style="color: #0000BB"> &nbsp;  <br /> &nbsp; &nbsp;</span><span style="color: #FF8000">//&nbsp;make&nbsp;local&nbsp;variable&nbsp;first&nbsp;to&nbsp;avoid&nbsp;warning/error<br /></span><span style="color: #0000BB"> &nbsp;  new&nbsp;entId</span><span style="color: #007700">;<br /></span><span style="color: #0000BB"> &nbsp;  <br /> &nbsp; </span><span style="color: #FF8000">//&nbsp;check&nbsp;if&nbsp;player&nbsp;not&nbsp;input&nbsp;anything&nbsp;or&nbsp;if&nbsp;player&nbsp;input&nbsp;is&nbsp;NaN<br /></span><span style="color: #0000BB"> &nbsp; &nbsp;</span><span style="color: #007700">if&nbsp;(</span><span style="color: #0000BB">sscanf</span><span style="color: #007700">(</span><span style="color: #0000BB">params</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">"i"</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">entId</span><span style="color: #007700">))<br /></span><span style="color: #0000BB"> &nbsp; &nbsp; &nbsp; &nbsp;</span><span style="color: #007700">return&nbsp;</span><span style="color: #0000BB">SendClientMessage</span><span style="color: #007700">(</span><span style="color: #0000BB">playerid</span><span style="color: #007700">,&nbsp;-</span><span style="color: #0000BB">1</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">"/nteriorentrance&lt;entrance&nbsp;ID&gt;"</span><span style="color: #007700">);&nbsp;</span><span style="color: #FF8000">//&nbsp;then&nbsp;tell&nbsp;player&nbsp;to&nbsp;do&nbsp;like&nbsp;this.<br /></span><span style="color: #0000BB">  <br /> &nbsp; &nbsp;</span><span style="color: #FF8000">//&nbsp;check&nbsp;again&nbsp;if&nbsp;entrance&nbsp;is&nbsp;valid,&nbsp;using&nbsp;this&nbsp;method&nbsp;will&nbsp;avoid&nbsp;any&nbsp;warning&nbsp;like&nbsp;"Array&nbsp;out&nbsp;of&nbsp;bonds"<br /></span><span style="color: #0000BB"> &nbsp; &nbsp;</span><span style="color: #007700">if&nbsp;((</span><span style="color: #0000BB">entId&nbsp;</span><span style="color: #007700">&lt;&nbsp;</span><span style="color: #0000BB">1&nbsp;</span><span style="color: #007700">||&nbsp;</span><span style="color: #0000BB">entId&nbsp;</span><span style="color: #007700">&gt;=&nbsp;</span><span style="color: #0000BB">MAX_ENTRANCE</span><span style="color: #007700">)&nbsp;&amp;&amp;&nbsp;(!</span><span style="color: #0000BB">EntranceData</span><span style="color: #007700">[</span><span style="color: #0000BB">entId</span><span style="color: #007700">][</span><span style="color: #0000BB">isExists</span><span style="color: #007700">]))<br /></span><span style="color: #0000BB"> &nbsp; &nbsp; &nbsp; &nbsp;</span><span style="color: #007700">return&nbsp;</span><span style="color: #0000BB">SendClientMessage</span><span style="color: #007700">(</span><span style="color: #0000BB">playerid</span><span style="color: #007700">,&nbsp;-</span><span style="color: #0000BB">1</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">"Invalid&nbsp;entrance&nbsp;ID"</span><span style="color: #007700">);&nbsp;</span><span style="color: #FF8000">//&nbsp;if&nbsp;is,&nbsp;tell&nbsp;player&nbsp;that&nbsp;ID&nbsp;is&nbsp;not&nbsp;exists.<br /><br /></span><span style="color: #0000BB"> &nbsp; &nbsp;</span><span style="color: #FF8000">//&nbsp;if&nbsp;things&nbsp;are&nbsp;clear,&nbsp;now&nbsp;we&nbsp;can&nbsp;safely&nbsp;store&nbsp;our&nbsp;position&nbsp;to&nbsp;Entrance&nbsp;Data.<br /></span><span style="color: #0000BB"> &nbsp; &nbsp;GetPlayerPos</span><span style="color: #007700">(</span><span style="color: #0000BB">playerid</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">EntranceData</span><span style="color: #007700">[</span><span style="color: #0000BB">entId</span><span style="color: #007700">][</span><span style="color: #0000BB">pos</span><span style="color: #007700">][</span><span style="color: #0000BB">0</span><span style="color: #007700">],</span><span style="color: #0000BB"> EntranceData</span><span style="color: #007700">[</span><span style="color: #0000BB">entId</span><span style="color: #007700">][</span><span style="color: #0000BB">pos</span><span style="color: #007700">][</span><span style="color: #0000BB">1</span><span style="color: #007700">],</span><span style="color: #0000BB"> EntranceData</span><span style="color: #007700">[</span><span style="color: #0000BB">entId</span><span style="color: #007700">][</span><span style="color: #0000BB">pos</span><span style="color: #007700">][</span><span style="color: #0000BB">2</span><span style="color: #007700">]);<br /></span><span style="color: #0000BB"> &nbsp; &nbsp;GetPlayerFacingAngle</span><span style="color: #007700">(</span><span style="color: #0000BB">playerid</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">EntranceData</span><span style="color: #007700">[</span><span style="color: #0000BB">entId</span><span style="color: #007700">][</span><span style="color: #0000BB">pos</span><span style="color: #007700">][</span><span style="color: #0000BB">3</span><span style="color: #007700">]);<br /></span><span style="color: #0000BB"> <br /> &nbsp; &nbsp;EntranceData</span><span style="color: #007700">[</span><span style="color: #0000BB">entId</span><span style="color: #007700">][</span><span style="color: #0000BB">int</span><span style="color: #007700">]&nbsp;=&nbsp;</span><span style="color: #0000BB">GetPlayerInterior</span><span style="color: #007700">(</span><span style="color: #0000BB">playerid</span><span style="color: #007700">);<br /></span><span style="color: #0000BB"> &nbsp; &nbsp;EntranceData</span><span style="color: #007700">[</span><span style="color: #0000BB">entId</span><span style="color: #007700">][</span><span style="color: #0000BB">world</span><span style="color: #007700">]&nbsp;=&nbsp;</span><span style="color: #0000BB">GetPlayerVirtualWorld</span><span style="color: #007700">(</span><span style="color: #0000BB">playerid</span><span style="color: #007700">);<br /></span><span style="color: #0000BB"> &nbsp;  <br /> &nbsp; &nbsp;</span><span style="color: #FF8000">//&nbsp;tell&nbsp;player&nbsp;if&nbsp;script&nbsp;successfully&nbsp;storing&nbsp;data.<br /></span><span style="color: #0000BB"> &nbsp; &nbsp;SendClientMessage</span><span style="color: #007700">(</span><span style="color: #0000BB">playerid</span><span style="color: #007700">,&nbsp;-</span><span style="color: #0000BB">1</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">"Successfully&nbsp;editing&nbsp;Entrance&nbsp;Interior"</span><span style="color: #007700">);<br /></span><span style="color: #0000BB"> &nbsp; &nbsp;</span><span style="color: #007700">return&nbsp;</span><span style="color: #0000BB">1</span><span style="color: #007700">;<br />}<br /><br /></span><span style="color: #0000BB">CMD</span><span style="color: #007700">:</span><span style="color: #0000BB">deleteentrance</span><span style="color: #007700">(</span><span style="color: #0000BB">playerid</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">params</span><span style="color: #007700">[])&nbsp;{<br /></span><span style="color: #0000BB"> &nbsp; &nbsp;</span><span style="color: #FF8000">//&nbsp;make&nbsp;local&nbsp;variable&nbsp;first&nbsp;to&nbsp;avoid&nbsp;warning/error<br /></span><span style="color: #0000BB"> &nbsp;  new&nbsp;entId</span><span style="color: #007700">;<br /></span><span style="color: #0000BB"> &nbsp;  <br /> &nbsp; </span><span style="color: #FF8000">//&nbsp;check&nbsp;if&nbsp;player&nbsp;not&nbsp;input&nbsp;anything&nbsp;or&nbsp;if&nbsp;player&nbsp;input&nbsp;is&nbsp;NaN<br /></span><span style="color: #0000BB"> &nbsp; &nbsp;</span><span style="color: #007700">if&nbsp;(</span><span style="color: #0000BB">sscanf</span><span style="color: #007700">(</span><span style="color: #0000BB">params</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">"i"</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">entId</span><span style="color: #007700">))<br /></span><span style="color: #0000BB"> &nbsp; &nbsp; &nbsp; &nbsp;</span><span style="color: #007700">return&nbsp;</span><span style="color: #0000BB">SendClientMessage</span><span style="color: #007700">(</span><span style="color: #0000BB">playerid</span><span style="color: #007700">,&nbsp;-</span><span style="color: #0000BB">1</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">"/deleteentrance&nbsp;&lt;entrance&nbsp;ID&gt;"</span><span style="color: #007700">);&nbsp;</span><span style="color: #FF8000">//&nbsp;then&nbsp;tell&nbsp;player&nbsp;to&nbsp;do&nbsp;like&nbsp;this.<br /></span><span style="color: #0000BB">  <br /> &nbsp; &nbsp;</span><span style="color: #FF8000">//&nbsp;check&nbsp;again&nbsp;if&nbsp;entrance&nbsp;is&nbsp;valid,&nbsp;using&nbsp;this&nbsp;method&nbsp;will&nbsp;avoid&nbsp;any&nbsp;warning&nbsp;like&nbsp;"Array&nbsp;out&nbsp;of&nbsp;bonds"<br /></span><span style="color: #0000BB"> &nbsp; &nbsp;</span><span style="color: #007700">if&nbsp;((</span><span style="color: #0000BB">entId&nbsp;</span><span style="color: #007700">&lt;&nbsp;</span><span style="color: #0000BB">1&nbsp;</span><span style="color: #007700">||&nbsp;</span><span style="color: #0000BB">entId&nbsp;</span><span style="color: #007700">&gt;=&nbsp;</span><span style="color: #0000BB">MAX_ENTRANCE</span><span style="color: #007700">)&nbsp;&amp;&amp;&nbsp;(!</span><span style="color: #0000BB">EntranceData</span><span style="color: #007700">[</span><span style="color: #0000BB">entId</span><span style="color: #007700">][</span><span style="color: #0000BB">isExists</span><span style="color: #007700">]))<br /></span><span style="color: #0000BB"> &nbsp; &nbsp; &nbsp; &nbsp;</span><span style="color: #007700">return&nbsp;</span><span style="color: #0000BB">SendClientMessage</span><span style="color: #007700">(</span><span style="color: #0000BB">playerid</span><span style="color: #007700">,&nbsp;-</span><span style="color: #0000BB">1</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">"Invalid&nbsp;entrance&nbsp;ID"</span><span style="color: #007700">);&nbsp;</span><span style="color: #FF8000">//&nbsp;if&nbsp;is,&nbsp;tell&nbsp;player&nbsp;that&nbsp;ID&nbsp;is&nbsp;not&nbsp;exists.<br /><br /></span><span style="color: #0000BB"> &nbsp; &nbsp;</span><span style="color: #FF8000">//&nbsp;okay first,&nbsp;we&nbsp;gonna&nbsp;kick&nbsp;people&nbsp;if&nbsp;they&nbsp;are&nbsp;inside&nbsp;of&nbsp;what&nbsp;we&nbsp;want&nbsp;to&nbsp;destroy/delete.<br /></span><span style="color: #0000BB"> &nbsp; &nbsp;</span><span style="color: #007700">for&nbsp;(new&nbsp;</span><span style="color: #0000BB">i</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">j&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">GetPlayerPoolSize</span><span style="color: #007700">();&nbsp;</span><span style="color: #0000BB">i&nbsp;</span><span style="color: #007700">&lt;&nbsp;</span><span style="color: #0000BB">j</span><span style="color: #007700">;&nbsp;</span><span style="color: #0000BB">i&nbsp;</span><span style="color: #007700">++)&nbsp;if&nbsp;(</span><span style="color: #0000BB">PlayerInEntrance</span><span style="color: #007700">[</span><span style="color: #0000BB">i</span><span style="color: #007700">]&nbsp;==&nbsp;</span><span style="color: #0000BB">entId</span><span style="color: #007700">)&nbsp;{<br /><br /></span><span style="color: #0000BB"> &nbsp; &nbsp; &nbsp; &nbsp;SetPlayerPos</span><span style="color: #007700">(</span><span style="color: #0000BB">playerid</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">EntranceData</span><span style="color: #007700">[</span><span style="color: #0000BB">entId</span><span style="color: #007700">][</span><span style="color: #0000BB">pos</span><span style="color: #007700">][</span><span style="color: #0000BB">0</span><span style="color: #007700">],</span><span style="color: #0000BB"> EntranceData</span><span style="color: #007700">[</span><span style="color: #0000BB">entId</span><span style="color: #007700">][</span><span style="color: #0000BB">pos</span><span style="color: #007700">][</span><span style="color: #0000BB">1</span><span style="color: #007700">],</span><span style="color: #0000BB"> EntranceData</span><span style="color: #007700">[</span><span style="color: #0000BB">entId</span><span style="color: #007700">][</span><span style="color: #0000BB">pos</span><span style="color: #007700">][</span><span style="color: #0000BB">2</span><span style="color: #007700">]);<br /></span><span style="color: #0000BB"> &nbsp; &nbsp; &nbsp; &nbsp;SetPlayerFacingAngle</span><span style="color: #007700">(</span><span style="color: #0000BB">playerid</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">EntranceData</span><span style="color: #007700">[</span><span style="color: #0000BB">entId</span><span style="color: #007700">][</span><span style="color: #0000BB">pos</span><span style="color: #007700">][</span><span style="color: #0000BB">3</span><span style="color: #007700">]);<br /></span><span style="color: #0000BB"> <br /> &nbsp; &nbsp; &nbsp; &nbsp;SetPlayerInterior</span><span style="color: #007700">(</span><span style="color: #0000BB">playerid</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">0</span><span style="color: #007700">);<br /></span><span style="color: #0000BB"> &nbsp; &nbsp; &nbsp; &nbsp;SetPlayerVirtualWorld</span><span style="color: #007700">(</span><span style="color: #0000BB">playerid</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">0</span><span style="color: #007700">);<br /><br /></span><span style="color: #0000BB"> &nbsp; &nbsp; &nbsp; &nbsp;PlayerInEntrance</span><span style="color: #007700">[</span><span style="color: #0000BB">playerid</span><span style="color: #007700">]&nbsp;=&nbsp;-</span><span style="color: #0000BB">1</span><span style="color: #007700">;<br /></span><span style="color: #0000BB"> &nbsp; &nbsp;</span><span style="color: #007700">}<br /><br /></span><span style="color: #0000BB"> &nbsp; &nbsp;</span><span style="color: #FF8000">//&nbsp;and let's&nbsp;destroy&nbsp;entrance&nbsp;pickup&nbsp;and&nbsp;text.<br /></span><span style="color: #0000BB"> &nbsp;  if&nbsp;</span><span style="color: #007700">(</span><span style="color: #0000BB">IsValidDynamic3DTextLabel</span><span style="color: #007700">(</span><span style="color: #0000BB">EntranceData</span><span style="color: #007700">[</span><span style="color: #0000BB">entId</span><span style="color: #007700">][</span><span style="color: #0000BB">text</span><span style="color: #007700">]))<br /></span><span style="color: #0000BB"> &nbsp; &nbsp; &nbsp; &nbsp;DestroyDynamic3DTextLabel</span><span style="color: #007700">(</span><span style="color: #0000BB">EntranceData</span><span style="color: #007700">[</span><span style="color: #0000BB">entId</span><span style="color: #007700">][</span><span style="color: #0000BB">text</span><span style="color: #007700">]);<br /><br /></span><span style="color: #0000BB"> &nbsp; &nbsp;</span><span style="color: #007700">if&nbsp;(</span><span style="color: #0000BB">IsValidDynamicPickup</span><span style="color: #007700">(</span><span style="color: #0000BB">EntranceData</span><span style="color: #007700">[</span><span style="color: #0000BB">entId</span><span style="color: #007700">][</span><span style="color: #0000BB">model</span><span style="color: #007700">]))<br /></span><span style="color: #0000BB"> &nbsp; &nbsp; &nbsp; &nbsp;DestroyDynamicPickup</span><span style="color: #007700">(</span><span style="color: #0000BB">EntranceData</span><span style="color: #007700">[</span><span style="color: #0000BB">entId</span><span style="color: #007700">][</span><span style="color: #0000BB">model</span><span style="color: #007700">]);<br /><br /></span><span style="color: #0000BB"> &nbsp; &nbsp;</span><span style="color: #FF8000">//&nbsp;if&nbsp;things&nbsp;are&nbsp;clear,&nbsp;now&nbsp;we&nbsp;can&nbsp;safely&nbsp;reset Entrance&nbsp;Data.<br /></span><span style="color: #0000BB"> &nbsp; &nbsp;</span><span style="color: #007700">new&nbsp;</span><span style="color: #0000BB">tmpReset</span><span style="color: #007700">[</span><span style="color: #0000BB">e_ENTRANCE_DATA</span><span style="color: #007700">];<br /></span><span style="color: #0000BB"> &nbsp; &nbsp;EntranceData</span><span style="color: #007700">[</span><span style="color: #0000BB">entId</span><span style="color: #007700">]</span><span style="color: #0000BB"> </span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">tmpReset</span><span style="color: #007700">;<br /></span><span style="color: #0000BB"> &nbsp; &nbsp;EntranceData</span><span style="color: #007700">[</span><span style="color: #0000BB">entId</span><span style="color: #007700">][</span><span style="color: #0000BB">isExists</span><span style="color: #007700">]&nbsp;=&nbsp;</span><span style="color: #0000BB">false</span><span style="color: #007700">;<br /></span><span style="color: #0000BB"> &nbsp; &nbsp;</span><span style="color: #007700">return&nbsp;</span><span style="color: #0000BB">1</span><span style="color: #007700">;<br />}<br /><br />public&nbsp;</span><span style="color: #0000BB">OnPlayerKeyStatechange</span><span style="color: #007700">(</span><span style="color: #0000BB">playerid</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">newkeys</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">oldkeys</span><span style="color: #007700">)&nbsp;{<br /><br /></span><span style="color: #0000BB"> &nbsp; &nbsp;</span><span style="color: #FF8000">//&nbsp;this&nbsp;code is&nbsp;detecting&nbsp;if&nbsp;player&nbsp;pressed&nbsp;KEY_FIRE&nbsp;(F/Enter/LMB/TAB)<br /></span><span style="color: #0000BB"> &nbsp; &nbsp;</span><span style="color: #007700">if&nbsp;((</span><span style="color: #0000BB">newkeys&nbsp;</span><span style="color: #007700">&amp;&nbsp;</span><span style="color: #0000BB">KEY_FIRE</span><span style="color: #007700">)&nbsp;&amp;&amp;&nbsp;!(</span><span style="color: #0000BB">oldkeys&nbsp;</span><span style="color: #007700">&amp;&nbsp;</span><span style="color: #0000BB">KEY_FIRE</span><span style="color: #007700">))&nbsp;{<br /><br /></span><span style="color: #0000BB"> &nbsp; &nbsp; &nbsp;  </span><span style="color: #FF8000">//making&nbsp;local&nbsp;variabel&nbsp;for&nbsp;storing&nbsp;entrance&nbsp;ID<br /></span><span style="color: #0000BB"> &nbsp; &nbsp; &nbsp; &nbsp;</span><span style="color: #007700">new&nbsp;</span><span style="color: #0000BB">entId</span><span style="color: #007700">;<br /><br /></span><span style="color: #0000BB"> &nbsp; &nbsp; &nbsp; &nbsp;</span><span style="color: #FF8000">//&nbsp;we&nbsp;need&nbsp;to&nbsp;make&nbsp;a&nbsp;function&nbsp;which&nbsp;detects&nbsp;if&nbsp;player&nbsp;is&nbsp;nearing&nbsp;any<br /></span><span style="color: #0000BB"> &nbsp; &nbsp; &nbsp; &nbsp;</span><span style="color: #FF8000">//&nbsp;entrance&nbsp;within&nbsp;radius&nbsp;2.5,&nbsp;if&nbsp;does then&nbsp;script returning&nbsp;a&nbsp;entrance&nbsp;ID.<br /></span><span style="color: #0000BB"> &nbsp; &nbsp; &nbsp; &nbsp;</span><span style="color: #007700">if&nbsp;((</span><span style="color: #0000BB">entId&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">GetNearestEntrance</span><span style="color: #007700">(</span><span style="color: #0000BB">playerid</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">2.5</span><span style="color: #007700">))&nbsp;!=&nbsp;-</span><span style="color: #0000BB">1</span><span style="color: #007700">)&nbsp;{<br /><br /></span><span style="color: #0000BB"> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</span><span style="color: #FF8000">//&nbsp;after&nbsp;that,&nbsp;teleport&nbsp;player&nbsp;to&nbsp;inside of&nbsp;nearest&nbsp;entrance<br /></span><span style="color: #0000BB"> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;SetPlayerPos</span><span style="color: #007700">(</span><span style="color: #0000BB">playerid</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">EntranceData</span><span style="color: #007700">[</span><span style="color: #0000BB">entId</span><span style="color: #007700">][</span><span style="color: #0000BB">intPos</span><span style="color: #007700">][</span><span style="color: #0000BB">0</span><span style="color: #007700">],</span><span style="color: #0000BB"> EntranceData</span><span style="color: #007700">[</span><span style="color: #0000BB">entId</span><span style="color: #007700">][</span><span style="color: #0000BB">intPos</span><span style="color: #007700">][</span><span style="color: #0000BB">1</span><span style="color: #007700">],</span><span style="color: #0000BB"> EntranceData</span><span style="color: #007700">[</span><span style="color: #0000BB">entId</span><span style="color: #007700">][</span><span style="color: #0000BB">intPos</span><span style="color: #007700">][</span><span style="color: #0000BB">2</span><span style="color: #007700">]);<br /></span><span style="color: #0000BB"> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;SetPlayerFacingAngle</span><span style="color: #007700">(</span><span style="color: #0000BB">playerid</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">EntranceData</span><span style="color: #007700">[</span><span style="color: #0000BB">entId</span><span style="color: #007700">][</span><span style="color: #0000BB">intPos</span><span style="color: #007700">][</span><span style="color: #0000BB">3</span><span style="color: #007700">]);<br /></span><span style="color: #0000BB"> <br /> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;SetPlayerInterior</span><span style="color: #007700">(</span><span style="color: #0000BB">playerid</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">EntranceData</span><span style="color: #007700">[</span><span style="color: #0000BB">entId</span><span style="color: #007700">][</span><span style="color: #0000BB">int</span><span style="color: #007700">]);<br /></span><span style="color: #0000BB"> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;SetPlayerVirtualWorld</span><span style="color: #007700">(</span><span style="color: #0000BB">playerid</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">EntranceData</span><span style="color: #007700">[</span><span style="color: #0000BB">entId</span><span style="color: #007700">][</span><span style="color: #0000BB">world</span><span style="color: #007700">]);<br /><br /></span><span style="color: #0000BB"> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</span><span style="color: #FF8000">//&nbsp;storing&nbsp;entrance&nbsp;ID&nbsp;to&nbsp;player&nbsp;variable,&nbsp;so&nbsp;we&nbsp;can&nbsp;use&nbsp;that&nbsp;later.<br /></span><span style="color: #0000BB"> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;PlayerInEntrance</span><span style="color: #007700">[</span><span style="color: #0000BB">playerid</span><span style="color: #007700">]&nbsp;=&nbsp;</span><span style="color: #0000BB">entId</span><span style="color: #007700">;<br /></span><span style="color: #0000BB"> &nbsp; &nbsp; &nbsp; &nbsp;</span><span style="color: #007700">}</span><span style="color: #0000BB"> <br /><br /> &nbsp; &nbsp; &nbsp; &nbsp;</span><span style="color: #FF8000">//&nbsp;this&nbsp;code&nbsp;checking&nbsp;player&nbsp;if&nbsp;they&nbsp;pressed&nbsp;"F"/KEY_FIRE&nbsp;and&nbsp;player&nbsp;in&nbsp;near&nbsp;exit&nbsp;+&nbsp;player&nbsp;inside&nbsp;a&nbsp;entrance.<br /></span><span style="color: #0000BB"> &nbsp; &nbsp; &nbsp; &nbsp;</span><span style="color: #007700">if&nbsp;((</span><span style="color: #0000BB">entId&nbsp;</span><span style="color: #007700">=</span><span style="color: #0000BB"> PlayerInEntrance</span><span style="color: #007700">[</span><span style="color: #0000BB">playerid</span><span style="color: #007700">]&nbsp;!=&nbsp;-</span><span style="color: #0000BB">1</span><span style="color: #007700">)</span><span style="color: #0000BB"> </span><span style="color: #007700">&amp;&amp;&nbsp;</span><span style="color: #0000BB">IsPlayerInRangeOfPoint</span><span style="color: #007700">(</span><span style="color: #0000BB">playerid</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">2.5</span><span style="color: #007700">,</span><span style="color: #0000BB"> EntranceData</span><span style="color: #007700">[</span><span style="color: #0000BB">entId</span><span style="color: #007700">][</span><span style="color: #0000BB">intPos</span><span style="color: #007700">][</span><span style="color: #0000BB">0</span><span style="color: #007700">],</span><span style="color: #0000BB"> EntranceData</span><span style="color: #007700">[</span><span style="color: #0000BB">entId</span><span style="color: #007700">][</span><span style="color: #0000BB">intPos</span><span style="color: #007700">][</span><span style="color: #0000BB">1</span><span style="color: #007700">],</span><span style="color: #0000BB"> EntranceData</span><span style="color: #007700">[</span><span style="color: #0000BB">entId</span><span style="color: #007700">][</span><span style="color: #0000BB">intPos</span><span style="color: #007700">][</span><span style="color: #0000BB">2</span><span style="color: #007700">]))&nbsp;{<br /></span><span style="color: #0000BB"> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</span><span style="color: #FF8000">//&nbsp;after&nbsp;that,&nbsp;teleport&nbsp;player&nbsp;to&nbsp;outside of&nbsp;nearest&nbsp;entrance<br /></span><span style="color: #0000BB"> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;SetPlayerPos</span><span style="color: #007700">(</span><span style="color: #0000BB">playerid</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">EntranceData</span><span style="color: #007700">[</span><span style="color: #0000BB">entId</span><span style="color: #007700">][</span><span style="color: #0000BB">pos</span><span style="color: #007700">][</span><span style="color: #0000BB">0</span><span style="color: #007700">],</span><span style="color: #0000BB"> EntranceData</span><span style="color: #007700">[</span><span style="color: #0000BB">entId</span><span style="color: #007700">][</span><span style="color: #0000BB">pos</span><span style="color: #007700">][</span><span style="color: #0000BB">1</span><span style="color: #007700">],</span><span style="color: #0000BB"> EntranceData</span><span style="color: #007700">[</span><span style="color: #0000BB">entId</span><span style="color: #007700">][</span><span style="color: #0000BB">pos</span><span style="color: #007700">][</span><span style="color: #0000BB">2</span><span style="color: #007700">]);<br /></span><span style="color: #0000BB"> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;SetPlayerFacingAngle</span><span style="color: #007700">(</span><span style="color: #0000BB">playerid</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">EntranceData</span><span style="color: #007700">[</span><span style="color: #0000BB">entId</span><span style="color: #007700">][</span><span style="color: #0000BB">pos</span><span style="color: #007700">][</span><span style="color: #0000BB">3</span><span style="color: #007700">]);<br /></span><span style="color: #0000BB"> <br /> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;SetPlayerInterior</span><span style="color: #007700">(</span><span style="color: #0000BB">playerid</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">0</span><span style="color: #007700">);<br /></span><span style="color: #0000BB"> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;SetPlayerVirtualWorld</span><span style="color: #007700">(</span><span style="color: #0000BB">playerid</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">0</span><span style="color: #007700">);<br /><br /></span><span style="color: #0000BB"> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</span><span style="color: #FF8000">//&nbsp;change player&nbsp;variable&nbsp;to&nbsp;-1&nbsp;to&nbsp;avoid&nbsp;false&nbsp;detection.<br /></span><span style="color: #0000BB"> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;PlayerInEntrance</span><span style="color: #007700">[</span><span style="color: #0000BB">playerid</span><span style="color: #007700">]&nbsp;=&nbsp;-</span><span style="color: #0000BB">1</span><span style="color: #007700">;<br /></span><span style="color: #0000BB"> &nbsp; &nbsp; &nbsp; &nbsp;</span><span style="color: #007700">}<br /></span><span style="color: #0000BB"> &nbsp; &nbsp;</span><span style="color: #007700">}<br /></span><span style="color: #0000BB"> &nbsp; &nbsp;</span><span style="color: #007700">return&nbsp;</span><span style="color: #0000BB">1</span><span style="color: #007700">;<br />}<br /><br /></span><span style="color: #0000BB">GetNearestEntrance</span><span style="color: #007700">(</span><span style="color: #0000BB">playerid</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">Float</span><span style="color: #007700">:</span><span style="color: #0000BB">radius&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">4.0</span><span style="color: #007700">)&nbsp;{<br /></span><span style="color: #0000BB"> &nbsp; &nbsp;</span><span style="color: #007700">for&nbsp;(new&nbsp;</span><span style="color: #0000BB">i</span><span style="color: #007700">;&nbsp;</span><span style="color: #0000BB">i&nbsp;</span><span style="color: #007700">&lt;&nbsp;</span><span style="color: #0000BB">MAX_ENTRANCE</span><span style="color: #007700">;&nbsp;</span><span style="color: #0000BB">i&nbsp;</span><span style="color: #007700">++)&nbsp;if&nbsp;(</span><span style="color: #0000BB">IsPlayerInRangeOfPoint</span><span style="color: #007700">(</span><span style="color: #0000BB">playerid</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">2.5</span><span style="color: #007700">,</span><span style="color: #0000BB"> EntranceData</span><span style="color: #007700">[</span><span style="color: #0000BB">entId</span><span style="color: #007700">][</span><span style="color: #0000BB">pos</span><span style="color: #007700">][</span><span style="color: #0000BB">0</span><span style="color: #007700">],</span><span style="color: #0000BB"> EntranceData</span><span style="color: #007700">[</span><span style="color: #0000BB">entId</span><span style="color: #007700">][</span><span style="color: #0000BB">pos</span><span style="color: #007700">][</span><span style="color: #0000BB">1</span><span style="color: #007700">],</span><span style="color: #0000BB"> EntranceData</span><span style="color: #007700">[</span><span style="color: #0000BB">entId</span><span style="color: #007700">][</span><span style="color: #0000BB">pos</span><span style="color: #007700">][</span><span style="color: #0000BB">2</span><span style="color: #007700">]))&nbsp;{<br /></span><span style="color: #0000BB"> &nbsp; &nbsp; &nbsp; &nbsp;</span><span style="color: #007700">return&nbsp;</span><span style="color: #0000BB">i</span><span style="color: #007700">;</span><span style="color: #0000BB"> &nbsp;  <br /> &nbsp;  </span><span style="color: #007700">}<br /></span><span style="color: #0000BB"> &nbsp; &nbsp;</span><span style="color: #007700">return&nbsp;-</span><span style="color: #0000BB">1</span><span style="color: #007700">;<br />}&nbsp;<br /></span></code></div></div></div>]]></content:encoded>
		</item>
		<item>
			<title><![CDATA[How to fix your .dll errors!]]></title>
			<link>https://www.burgershot.gg/showthread.php?tid=1050</link>
			<pubDate>Fri, 17 Apr 2020 15:56:50 +0000</pubDate>
			<dc:creator><![CDATA[<a href="https://www.burgershot.gg/member.php?action=profile&uid=562">Koky</a>]]></dc:creator>
			<guid isPermaLink="false">https://www.burgershot.gg/showthread.php?tid=1050</guid>
			<description><![CDATA[So today I came across this very annoying issue with these .dll's required to run my gamemode. I'll show you what I did to fix it and how simple it is.<br />
<br />
Most of these errors are due to Visual C Runtimes not being installed or being corrupt. (correct me if I'm wrong)<br />
<br />
Errors I had: <br />
<br />
MSVCR100.dll is either not designed to run on Windows or it contains and error.<br />
<br />
MSVCP100.dll is either not designed to run on Windows or it contains and error.<br />
<br />
<img src="https://cdn.discordapp.com/attachments/231799180127895553/700711965777068062/unknown.png" loading="lazy"  alt="[Image: unknown.png]" class="mycode_img" /><br />
<br />
<img src="https://cdn.discordapp.com/attachments/231799180127895553/700711980620841020/unknown.png" loading="lazy"  alt="[Image: unknown.png]" class="mycode_img" /><br />
<br />
There's a pretty simple fix thanks to Polygon from the SA:MP Discord.<br />
<br />
How to fix:<br />
<br />
<ol type="1" class="mycode_list"><li>Download <a href="https://www.techpowerup.com/download/visual-c-redistributable-runtime-package-all-in-one/" target="_blank" rel="noopener" class="mycode_url">THIS</a>.<br />
</li>
<li>Extract it onto your desktop in a new folder.<br />
</li>
<li>Run the install_all.bat file!<br />
</li>
</ol>
<img src="https://gyazo.com/3d8716933ad172c11e7fe16ed320fbee.png" loading="lazy"  alt="[Image: 3d8716933ad172c11e7fe16ed320fbee.png]" class="mycode_img" /><br />
<br />
Then just click yes on all the confirmations, etc. Might also be a good idea to restart your computer.<br />
<br />
Hope this fixed it, any other issues just leave them below and I'll try my best to help you.]]></description>
			<content:encoded><![CDATA[So today I came across this very annoying issue with these .dll's required to run my gamemode. I'll show you what I did to fix it and how simple it is.<br />
<br />
Most of these errors are due to Visual C Runtimes not being installed or being corrupt. (correct me if I'm wrong)<br />
<br />
Errors I had: <br />
<br />
MSVCR100.dll is either not designed to run on Windows or it contains and error.<br />
<br />
MSVCP100.dll is either not designed to run on Windows or it contains and error.<br />
<br />
<img src="https://cdn.discordapp.com/attachments/231799180127895553/700711965777068062/unknown.png" loading="lazy"  alt="[Image: unknown.png]" class="mycode_img" /><br />
<br />
<img src="https://cdn.discordapp.com/attachments/231799180127895553/700711980620841020/unknown.png" loading="lazy"  alt="[Image: unknown.png]" class="mycode_img" /><br />
<br />
There's a pretty simple fix thanks to Polygon from the SA:MP Discord.<br />
<br />
How to fix:<br />
<br />
<ol type="1" class="mycode_list"><li>Download <a href="https://www.techpowerup.com/download/visual-c-redistributable-runtime-package-all-in-one/" target="_blank" rel="noopener" class="mycode_url">THIS</a>.<br />
</li>
<li>Extract it onto your desktop in a new folder.<br />
</li>
<li>Run the install_all.bat file!<br />
</li>
</ol>
<img src="https://gyazo.com/3d8716933ad172c11e7fe16ed320fbee.png" loading="lazy"  alt="[Image: 3d8716933ad172c11e7fe16ed320fbee.png]" class="mycode_img" /><br />
<br />
Then just click yes on all the confirmations, etc. Might also be a good idea to restart your computer.<br />
<br />
Hope this fixed it, any other issues just leave them below and I'll try my best to help you.]]></content:encoded>
		</item>
		<item>
			<title><![CDATA[Texture Studio Guide]]></title>
			<link>https://www.burgershot.gg/showthread.php?tid=991</link>
			<pubDate>Sat, 15 Feb 2020 13:12:32 +0000</pubDate>
			<dc:creator><![CDATA[<a href="https://www.burgershot.gg/member.php?action=profile&uid=2088">Uproar</a>]]></dc:creator>
			<guid isPermaLink="false">https://www.burgershot.gg/showthread.php?tid=991</guid>
			<description><![CDATA[<div style="text-align: center;" class="mycode_align"><span style="font-weight: bold;" class="mycode_b"><span style="text-decoration: underline;" class="mycode_u"><span style="font-size: large;" class="mycode_size">Texture Studio - A Basic Guide</span></span></span></div>
<br />
A texture studio guide with basic commands and tips.<br />
<br />
<div style="text-align: center;" class="mycode_align"><span style="text-decoration: underline;" class="mycode_u">Installation</span></div>
Click <a href="https://github.com/Pottus/Texture-Studio/releases" target="_blank" rel="noopener" class="mycode_url">here</a> to see all versions of Texture Studio. I recommend 1.9c but it's upto you. Then click on the <a href="https://i.imgur.com/gpPZnH6.png" target="_blank" rel="noopener" class="mycode_url">Source Code (.zip)</a>. Once downloaded, unzip it to a folder you want, I use Documents. Then download the <a href="http://files.sa-mp.com/samp037_svr_R2-1-1_win32.zip" target="_blank" rel="noopener" class="mycode_url">Windows Server</a>. The provided link is for 0.3.7 R2. If you wish to get the 0.3.DL R1 server, click <a href="http://forum.sa-mp.com/files/03DL/samp03DL_svr_R1_win32.zip" target="_blank" rel="noopener" class="mycode_url">here</a>.<br />
Make a new folder in your documents with any name, and unzip the server.zip download to there. Open the folder, copy the samp-server.exe and paste it in your texture studio folder.<br />
Done.<br />
<br />
<div style="text-align: center;" class="mycode_align"><span style="text-decoration: underline;" class="mycode_u">Launching Texture Studio</span></div>
To launch texture studio, you need a working SAMP version which matches your server.zip download.<br />
Go to Texture Studio folder, double click and open the samp-server.exe. It is the backbone of your texture studio server! Do not close it while mapping. Now open your SAMP client, and click 'Add Server'. Enter the IP as <span style="font-weight: bold;" class="mycode_b">localhost</span> and if this doesn't work, delete and add a server with IP <span style="font-weight: bold;" class="mycode_b">127.0.0.1</span>. This should work. It should show up like <a href="https://i.imgur.com/1mYbo3J.png" target="_blank" rel="noopener" class="mycode_url">this</a>. Connect to the server.<br />
And you should be in-game now with Texture Studio loaded!<br />
<br />
<div style="text-align: center;" class="mycode_align"><span style="text-decoration: underline;" class="mycode_u">Creating a Map</span></div>
To create a new map, once you go in-game, type <span style="font-weight: bold;" class="mycode_b">/newmap</span>. Enter the shortest name that comes into your mind. For example, I'd name <span style="font-style: italic;" class="mycode_i">San Andreas State Police HeadQuarter Map</span> as <span style="font-style: italic;" class="mycode_i">sasphq</span>. As simple as that. <br />
<br />
<div style="text-align: center;" class="mycode_align"><span style="text-decoration: underline;" class="mycode_u">Placing, Selecting and Editing Objects</span></div>
To create a new object, use <span style="font-weight: bold;" class="mycode_b">/cobject</span>. Either fetch object IDs from <a href="https://dev.prineside.com/en/gtasa_samp_model_id/" target="_blank" rel="noopener" class="mycode_url">here</a> or you can do it the other way where you don't need to use /cobject. <br />
In this method, use <span style="font-weight: bold;" class="mycode_b">/osearch</span>. Don't enter the full name of the object you're searching. Like for 'pipe', use 'pip' instead for more results, some objects are named weirdly. Now a list of search results should pop up on the left side. Click on each of them to see a preview and click <span style="font-weight: bold;" class="mycode_b">Create</span> when you find the appropriate object!.<br />
<br />
For selecting, use <span style="font-weight: bold;" class="mycode_b">/sel</span> followed by the Index. Then use <span style="font-weight: bold;" class="mycode_b">/editobject</span> to edit it. To clone/duplicate the object, press <span style="font-weight: bold;" class="mycode_b">Left ALT</span> when the /editobject GUI is open. For proper rotations and movement, use <span style="font-weight: bold;" class="mycode_b">/rx, /ry, /rz</span> and <span style="font-weight: bold;" class="mycode_b">/ox, /oy, /oz</span> respectively followed by rotation/movement value. <br />
For example, I want to rotate a wall by 90 degrees. I'll use /sel to select it then I'll use <span style="font-style: italic;" class="mycode_i">/rz 90</span>. <a href="https://imgur.com/K3eXCoQ" target="_blank" rel="noopener" class="mycode_url">Here</a> is a small demonstration of me using it.<br />
<br />
<div style="text-align: center;" class="mycode_align"><span style="text-decoration: underline;" class="mycode_u">Tiling</span></div>
Tiling is an important part. Select an object with /sel and then type <span style="font-weight: bold;" class="mycode_b">/sindex</span>. There will be several numbers shown. Each number indicates one tile. An object can have innumerable number of tiles. 1, 2, 3, etc.. You need to focus on the one you're using. /mtcolor and /mtset depends on this.<br />
To reset the tile labels, use <span style="font-weight: bold;" class="mycode_b">/rindex</span><br />
Each object has unique tiling. Now while I was making a floor with the man_parquet texture (3840), tiling held a lot of importance.<br />
Look at the images below. Different objects, same texture. Notice the difference? <br />
<div style="text-align: center;" class="mycode_align"><img src="https://i.imgur.com/ce1Tfvpl.png" loading="lazy"  alt="[Image: ce1Tfvpl.png]" class="mycode_img" /></div>
<br />
<br />
<span style="font-weight: bold;" class="mycode_b">You're right, different tiling! Look at their tiling:-</span><br />
<br />
<div style="text-align: center;" class="mycode_align"><img src="https://i.imgur.com/bQF0rYFl.png" loading="lazy"  alt="[Image: bQF0rYFl.png]" class="mycode_img" /></div>
<br />
<br />
<div style="text-align: center;" class="mycode_align"><span style="text-decoration: underline;" class="mycode_u">Groups</span></div>
To add objects to a group, use <span style="font-weight: bold;" class="mycode_b">/gadd</span> followed by the object Index. To edit the group, use <span style="font-weight: bold;" class="mycode_b">/editgroup</span>. Again, you can always use the rotation and movement commands which are <span style="font-weight: bold;" class="mycode_b">/grx, /gry, /grz</span> and <span style="font-weight: bold;" class="mycode_b">/gox, /goy, /goz</span> respectively. Refer to the above paragraph for more information.<br />
<br />
Use <span style="font-weight: bold;" class="mycode_b">/grem</span> to remove a particular object from the group or use <span style="font-weight: bold;" class="mycode_b">/gclear</span> to clear the whole group selection. If you wish to delete all the objects in the group, use <span style="font-weight: bold;" class="mycode_b">/gdelete</span> and use <span style="font-weight: bold;" class="mycode_b">/gclone</span> to clone all the objects in the group.<br />
<br />
Use <span style="font-weight: bold;" class="mycode_b">/gmtset</span> to set a texture for all of the objects in the group and use <span style="font-weight: bold;" class="mycode_b">/gmtcolor</span> to set the color.<br />
<br />
I'll tell how /gmtcolor and /mtcolor works, in the next section.<br />
<br />
Below is a demonstration of a few of them.<br />
<div style="text-align: center;" class="mycode_align"><img src="https://i.imgur.com/xkZvmK4.gifl" loading="lazy"  alt="[Image: xkZvmK4.gifl]" class="mycode_img" /></div>
<br />
<br />
<div style="text-align: center;" class="mycode_align"><span style="text-decoration: underline;" class="mycode_u">Texturing</span></div>
Use <span style="font-weight: bold;" class="mycode_b">/mtextures</span> to open the texture pallete. Scroll through the pallet using <span style="font-weight: bold;" class="mycode_b">Y and H</span>. Use <span style="font-weight: bold;" class="mycode_b">Numpad 4 and Numpad 6</span> to change texture pages. Use <span style="font-weight: bold;" class="mycode_b">Left ALT</span> to apply a texture. Did a mistake? Use <span style="font-weight: bold;" class="mycode_b">/mtset 0 0</span>. 0 is the default texture for any object, every object has its own unique one. <br />
Use <span style="font-weight: bold;" class="mycode_b">/tsearch</span> to search for a texture and click on the one you want. You'll see the texture index on the bottom right of your screen. Use <span style="font-weight: bold;" class="mycode_b">/mtset 0 [Texture ID]</span> where the 0 is the tile ID and Texture ID is the Index.<br />
<br />
<span style="font-weight: bold;" class="mycode_b">/mtcolor</span> and <span style="font-weight: bold;" class="mycode_b">/gmtcolor</span> use the same format.<br />
/mtcolor 0 0xFFFF0000 is what I used in the demonstration above.<br />
Here, I divided it for you.<br />
<div style="text-align: center;" class="mycode_align"><img src="https://i.imgur.com/hurLtxwl.png" loading="lazy"  alt="[Image: hurLtxwl.png]" class="mycode_img" /></div>
<br />
<br />
<span style="font-weight: bold;" class="mycode_b">Site used to fetch color hexcodes:</span> <a href="http://www.colorpicker.com/" target="_blank" rel="noopener" class="mycode_url">http://www.colorpicker.com/</a><br />
<br />
<div style="text-align: center;" class="mycode_align"><span style="text-decoration: underline;" class="mycode_u">Lighting and Shadows</span></div>
The default GTA lighting and textures are horrible sometimes. Either too dark or too bright. There's a way to fix it.<br />
I've just explained /mtcolor above. Understand it then read further in this section.<br />
<br />
Okay so now that you know what /mtcolor exactly does, you can use it to fix the lighting. <br />
Type <span style="font-weight: bold;" class="mycode_b">/mtcolor 0 0xFFFFFFFF</span>. It'll set a uniform shadow/highlight value to all indexes/tiles of the object.<br />
<br />
<div style="text-align: center;" class="mycode_align"><span style="text-decoration: underline;" class="mycode_u">Text</span></div>
Use <span style="font-weight: bold;" class="mycode_b">/sel</span> to select an object and then use <span style="font-weight: bold;" class="mycode_b">/text</span> to edit text.<br />
Firstly, set <span style="font-weight: bold;" class="mycode_b">Font Bold to "On"</span> because thin fonts look bad.<br />
Then set alignment to <span style="font-weight: bold;" class="mycode_b">Center</span><br />
Then set <span style="font-weight: bold;" class="mycode_b">Font Size to 512x128 or 512x256 or 512x512</span>. Just keep in mind that these numbers (like 512, 128, etc.) indicate the number of pixels. So, more the number of pixels, clearer is your text.<br />
I'd suggest <span style="font-weight: bold;" class="mycode_b">Ariel or Calibri Font for a modern themed text</span>. Go for <span style="font-weight: bold;" class="mycode_b">Engravers if it's an old-styled map</span>.<br />
Then <span style="font-weight: bold;" class="mycode_b">Click on Edit Font</span>. A box will pop up.<br />
Enter your text in the format shown below.<br />
In the end, set <span style="font-weight: bold;" class="mycode_b">Font to "On'</span>.<br />
<div style="text-align: center;" class="mycode_align"><img src="https://i.imgur.com/tACVjHz.pngl" loading="lazy"  alt="[Image: tACVjHz.pngl]" class="mycode_img" /></div>
<br />
<br />
For using text, I'd suggest using the <a href="https://dev.prineside.com/en/gtasa_samp_model_id/search/?q=Plane00" target="_blank" rel="noopener" class="mycode_url">plane</a> objects. They don't have collision and are good for using text. I also use the <a href="https://dev.prineside.com/en/gtasa_samp_model_id/model/11737-RockstarMat1/" target="_blank" rel="noopener" class="mycode_url">Rockstar Mat</a> object sometimes. <br />
<br />
<div style="text-align: center;" class="mycode_align"><span style="text-decoration: underline;" class="mycode_u">Handling Default GTA Objects</span></div>
The default GTA mapping may seem weird sometimes or maybe you want to remove some default objects to make a map there. Or do you want to change the texture and placement of the default objects?<br />
Use <span style="font-weight: bold;" class="mycode_b">/gtaobjects </span>to have texture studio show you all GTA objects. Then you'll see the index in the first line.<br />
To remove the object, type <span style="font-weight: bold;" class="mycode_b">/remobject</span>.<br />
To either bring it back or to simply swap a non removed GTA object into a texture studio object, type <span style="font-weight: bold;" class="mycode_b">/swapbuilding</span>.<br />
Keep in mind, if you remove a default object then swap it to a texture studio object and then if you delete your object, you can only bring it back via <span style="font-weight: bold;" class="mycode_b">/undo</span><br />
<br />
<div style="text-align: center;" class="mycode_align"><span style="text-decoration: underline;" class="mycode_u">Exporting</span></div>
To export your map as a filterscript, use <span style="font-weight: bold;" class="mycode_b">/exportallmap</span>. Put draw distance more than 500.0, always. It'll be saved in Texture Studio Folder &gt; scriptfiles &gt; ExportMaps.<br />
To import it as filterscript, first open the .pwn export in pawno and press F5 to compile. Then put .amx file in your filterscripts folder.<br />
To export your map as simple .txt file, use <span style="font-weight: bold;" class="mycode_b">/exportmap</span>. Again, draw distance 500.0 or above.<br />
Select the type of code you want, CreateObject or CreateDynamicObject then click Export. It'll be saved as a .txt file in Texture Studio Folder &gt; scriptfiles &gt; ExportMaps.<br />
<br />
<div style="text-align: center;" class="mycode_align"><span style="font-weight: bold;" class="mycode_b"><span style="text-decoration: underline;" class="mycode_u"><span style="font-size: medium;" class="mycode_size">Texture Studio Common Bug Fixes</span></span></span></div>
<ul class="mycode_list"><li><span style="font-weight: bold;" class="mycode_b">Some commands not working-</span> Quit SAMP, close and re-open samp-server.exe<br />
</li>
<li><span style="font-weight: bold;" class="mycode_b">The Co-Ordinates are messed up-</span> Sometimes rotating along one axis rotates it along another, the object is bugged. Delete the object, restart SAMP and samp-server.exe<br />
</li>
<li><span style="font-weight: bold;" class="mycode_b">No commands work-</span> Your Texture Studio download must be incomplete. Delete all of the files and re-install it once again.<br />
</li>
</ul>
<br />
<div style="text-align: center;" class="mycode_align"><img src="https://i.imgur.com/YoAM8rR.png" loading="lazy"  alt="[Image: YoAM8rR.png]" class="mycode_img" /></div>
<br />
<div style="text-align: center;" class="mycode_align">I hope you liked the guide.</div>
<div style="text-align: center;" class="mycode_align"><span style="font-weight: bold;" class="mycode_b">Ask in a reply below if you have any questions.</span></div>]]></description>
			<content:encoded><![CDATA[<div style="text-align: center;" class="mycode_align"><span style="font-weight: bold;" class="mycode_b"><span style="text-decoration: underline;" class="mycode_u"><span style="font-size: large;" class="mycode_size">Texture Studio - A Basic Guide</span></span></span></div>
<br />
A texture studio guide with basic commands and tips.<br />
<br />
<div style="text-align: center;" class="mycode_align"><span style="text-decoration: underline;" class="mycode_u">Installation</span></div>
Click <a href="https://github.com/Pottus/Texture-Studio/releases" target="_blank" rel="noopener" class="mycode_url">here</a> to see all versions of Texture Studio. I recommend 1.9c but it's upto you. Then click on the <a href="https://i.imgur.com/gpPZnH6.png" target="_blank" rel="noopener" class="mycode_url">Source Code (.zip)</a>. Once downloaded, unzip it to a folder you want, I use Documents. Then download the <a href="http://files.sa-mp.com/samp037_svr_R2-1-1_win32.zip" target="_blank" rel="noopener" class="mycode_url">Windows Server</a>. The provided link is for 0.3.7 R2. If you wish to get the 0.3.DL R1 server, click <a href="http://forum.sa-mp.com/files/03DL/samp03DL_svr_R1_win32.zip" target="_blank" rel="noopener" class="mycode_url">here</a>.<br />
Make a new folder in your documents with any name, and unzip the server.zip download to there. Open the folder, copy the samp-server.exe and paste it in your texture studio folder.<br />
Done.<br />
<br />
<div style="text-align: center;" class="mycode_align"><span style="text-decoration: underline;" class="mycode_u">Launching Texture Studio</span></div>
To launch texture studio, you need a working SAMP version which matches your server.zip download.<br />
Go to Texture Studio folder, double click and open the samp-server.exe. It is the backbone of your texture studio server! Do not close it while mapping. Now open your SAMP client, and click 'Add Server'. Enter the IP as <span style="font-weight: bold;" class="mycode_b">localhost</span> and if this doesn't work, delete and add a server with IP <span style="font-weight: bold;" class="mycode_b">127.0.0.1</span>. This should work. It should show up like <a href="https://i.imgur.com/1mYbo3J.png" target="_blank" rel="noopener" class="mycode_url">this</a>. Connect to the server.<br />
And you should be in-game now with Texture Studio loaded!<br />
<br />
<div style="text-align: center;" class="mycode_align"><span style="text-decoration: underline;" class="mycode_u">Creating a Map</span></div>
To create a new map, once you go in-game, type <span style="font-weight: bold;" class="mycode_b">/newmap</span>. Enter the shortest name that comes into your mind. For example, I'd name <span style="font-style: italic;" class="mycode_i">San Andreas State Police HeadQuarter Map</span> as <span style="font-style: italic;" class="mycode_i">sasphq</span>. As simple as that. <br />
<br />
<div style="text-align: center;" class="mycode_align"><span style="text-decoration: underline;" class="mycode_u">Placing, Selecting and Editing Objects</span></div>
To create a new object, use <span style="font-weight: bold;" class="mycode_b">/cobject</span>. Either fetch object IDs from <a href="https://dev.prineside.com/en/gtasa_samp_model_id/" target="_blank" rel="noopener" class="mycode_url">here</a> or you can do it the other way where you don't need to use /cobject. <br />
In this method, use <span style="font-weight: bold;" class="mycode_b">/osearch</span>. Don't enter the full name of the object you're searching. Like for 'pipe', use 'pip' instead for more results, some objects are named weirdly. Now a list of search results should pop up on the left side. Click on each of them to see a preview and click <span style="font-weight: bold;" class="mycode_b">Create</span> when you find the appropriate object!.<br />
<br />
For selecting, use <span style="font-weight: bold;" class="mycode_b">/sel</span> followed by the Index. Then use <span style="font-weight: bold;" class="mycode_b">/editobject</span> to edit it. To clone/duplicate the object, press <span style="font-weight: bold;" class="mycode_b">Left ALT</span> when the /editobject GUI is open. For proper rotations and movement, use <span style="font-weight: bold;" class="mycode_b">/rx, /ry, /rz</span> and <span style="font-weight: bold;" class="mycode_b">/ox, /oy, /oz</span> respectively followed by rotation/movement value. <br />
For example, I want to rotate a wall by 90 degrees. I'll use /sel to select it then I'll use <span style="font-style: italic;" class="mycode_i">/rz 90</span>. <a href="https://imgur.com/K3eXCoQ" target="_blank" rel="noopener" class="mycode_url">Here</a> is a small demonstration of me using it.<br />
<br />
<div style="text-align: center;" class="mycode_align"><span style="text-decoration: underline;" class="mycode_u">Tiling</span></div>
Tiling is an important part. Select an object with /sel and then type <span style="font-weight: bold;" class="mycode_b">/sindex</span>. There will be several numbers shown. Each number indicates one tile. An object can have innumerable number of tiles. 1, 2, 3, etc.. You need to focus on the one you're using. /mtcolor and /mtset depends on this.<br />
To reset the tile labels, use <span style="font-weight: bold;" class="mycode_b">/rindex</span><br />
Each object has unique tiling. Now while I was making a floor with the man_parquet texture (3840), tiling held a lot of importance.<br />
Look at the images below. Different objects, same texture. Notice the difference? <br />
<div style="text-align: center;" class="mycode_align"><img src="https://i.imgur.com/ce1Tfvpl.png" loading="lazy"  alt="[Image: ce1Tfvpl.png]" class="mycode_img" /></div>
<br />
<br />
<span style="font-weight: bold;" class="mycode_b">You're right, different tiling! Look at their tiling:-</span><br />
<br />
<div style="text-align: center;" class="mycode_align"><img src="https://i.imgur.com/bQF0rYFl.png" loading="lazy"  alt="[Image: bQF0rYFl.png]" class="mycode_img" /></div>
<br />
<br />
<div style="text-align: center;" class="mycode_align"><span style="text-decoration: underline;" class="mycode_u">Groups</span></div>
To add objects to a group, use <span style="font-weight: bold;" class="mycode_b">/gadd</span> followed by the object Index. To edit the group, use <span style="font-weight: bold;" class="mycode_b">/editgroup</span>. Again, you can always use the rotation and movement commands which are <span style="font-weight: bold;" class="mycode_b">/grx, /gry, /grz</span> and <span style="font-weight: bold;" class="mycode_b">/gox, /goy, /goz</span> respectively. Refer to the above paragraph for more information.<br />
<br />
Use <span style="font-weight: bold;" class="mycode_b">/grem</span> to remove a particular object from the group or use <span style="font-weight: bold;" class="mycode_b">/gclear</span> to clear the whole group selection. If you wish to delete all the objects in the group, use <span style="font-weight: bold;" class="mycode_b">/gdelete</span> and use <span style="font-weight: bold;" class="mycode_b">/gclone</span> to clone all the objects in the group.<br />
<br />
Use <span style="font-weight: bold;" class="mycode_b">/gmtset</span> to set a texture for all of the objects in the group and use <span style="font-weight: bold;" class="mycode_b">/gmtcolor</span> to set the color.<br />
<br />
I'll tell how /gmtcolor and /mtcolor works, in the next section.<br />
<br />
Below is a demonstration of a few of them.<br />
<div style="text-align: center;" class="mycode_align"><img src="https://i.imgur.com/xkZvmK4.gifl" loading="lazy"  alt="[Image: xkZvmK4.gifl]" class="mycode_img" /></div>
<br />
<br />
<div style="text-align: center;" class="mycode_align"><span style="text-decoration: underline;" class="mycode_u">Texturing</span></div>
Use <span style="font-weight: bold;" class="mycode_b">/mtextures</span> to open the texture pallete. Scroll through the pallet using <span style="font-weight: bold;" class="mycode_b">Y and H</span>. Use <span style="font-weight: bold;" class="mycode_b">Numpad 4 and Numpad 6</span> to change texture pages. Use <span style="font-weight: bold;" class="mycode_b">Left ALT</span> to apply a texture. Did a mistake? Use <span style="font-weight: bold;" class="mycode_b">/mtset 0 0</span>. 0 is the default texture for any object, every object has its own unique one. <br />
Use <span style="font-weight: bold;" class="mycode_b">/tsearch</span> to search for a texture and click on the one you want. You'll see the texture index on the bottom right of your screen. Use <span style="font-weight: bold;" class="mycode_b">/mtset 0 [Texture ID]</span> where the 0 is the tile ID and Texture ID is the Index.<br />
<br />
<span style="font-weight: bold;" class="mycode_b">/mtcolor</span> and <span style="font-weight: bold;" class="mycode_b">/gmtcolor</span> use the same format.<br />
/mtcolor 0 0xFFFF0000 is what I used in the demonstration above.<br />
Here, I divided it for you.<br />
<div style="text-align: center;" class="mycode_align"><img src="https://i.imgur.com/hurLtxwl.png" loading="lazy"  alt="[Image: hurLtxwl.png]" class="mycode_img" /></div>
<br />
<br />
<span style="font-weight: bold;" class="mycode_b">Site used to fetch color hexcodes:</span> <a href="http://www.colorpicker.com/" target="_blank" rel="noopener" class="mycode_url">http://www.colorpicker.com/</a><br />
<br />
<div style="text-align: center;" class="mycode_align"><span style="text-decoration: underline;" class="mycode_u">Lighting and Shadows</span></div>
The default GTA lighting and textures are horrible sometimes. Either too dark or too bright. There's a way to fix it.<br />
I've just explained /mtcolor above. Understand it then read further in this section.<br />
<br />
Okay so now that you know what /mtcolor exactly does, you can use it to fix the lighting. <br />
Type <span style="font-weight: bold;" class="mycode_b">/mtcolor 0 0xFFFFFFFF</span>. It'll set a uniform shadow/highlight value to all indexes/tiles of the object.<br />
<br />
<div style="text-align: center;" class="mycode_align"><span style="text-decoration: underline;" class="mycode_u">Text</span></div>
Use <span style="font-weight: bold;" class="mycode_b">/sel</span> to select an object and then use <span style="font-weight: bold;" class="mycode_b">/text</span> to edit text.<br />
Firstly, set <span style="font-weight: bold;" class="mycode_b">Font Bold to "On"</span> because thin fonts look bad.<br />
Then set alignment to <span style="font-weight: bold;" class="mycode_b">Center</span><br />
Then set <span style="font-weight: bold;" class="mycode_b">Font Size to 512x128 or 512x256 or 512x512</span>. Just keep in mind that these numbers (like 512, 128, etc.) indicate the number of pixels. So, more the number of pixels, clearer is your text.<br />
I'd suggest <span style="font-weight: bold;" class="mycode_b">Ariel or Calibri Font for a modern themed text</span>. Go for <span style="font-weight: bold;" class="mycode_b">Engravers if it's an old-styled map</span>.<br />
Then <span style="font-weight: bold;" class="mycode_b">Click on Edit Font</span>. A box will pop up.<br />
Enter your text in the format shown below.<br />
In the end, set <span style="font-weight: bold;" class="mycode_b">Font to "On'</span>.<br />
<div style="text-align: center;" class="mycode_align"><img src="https://i.imgur.com/tACVjHz.pngl" loading="lazy"  alt="[Image: tACVjHz.pngl]" class="mycode_img" /></div>
<br />
<br />
For using text, I'd suggest using the <a href="https://dev.prineside.com/en/gtasa_samp_model_id/search/?q=Plane00" target="_blank" rel="noopener" class="mycode_url">plane</a> objects. They don't have collision and are good for using text. I also use the <a href="https://dev.prineside.com/en/gtasa_samp_model_id/model/11737-RockstarMat1/" target="_blank" rel="noopener" class="mycode_url">Rockstar Mat</a> object sometimes. <br />
<br />
<div style="text-align: center;" class="mycode_align"><span style="text-decoration: underline;" class="mycode_u">Handling Default GTA Objects</span></div>
The default GTA mapping may seem weird sometimes or maybe you want to remove some default objects to make a map there. Or do you want to change the texture and placement of the default objects?<br />
Use <span style="font-weight: bold;" class="mycode_b">/gtaobjects </span>to have texture studio show you all GTA objects. Then you'll see the index in the first line.<br />
To remove the object, type <span style="font-weight: bold;" class="mycode_b">/remobject</span>.<br />
To either bring it back or to simply swap a non removed GTA object into a texture studio object, type <span style="font-weight: bold;" class="mycode_b">/swapbuilding</span>.<br />
Keep in mind, if you remove a default object then swap it to a texture studio object and then if you delete your object, you can only bring it back via <span style="font-weight: bold;" class="mycode_b">/undo</span><br />
<br />
<div style="text-align: center;" class="mycode_align"><span style="text-decoration: underline;" class="mycode_u">Exporting</span></div>
To export your map as a filterscript, use <span style="font-weight: bold;" class="mycode_b">/exportallmap</span>. Put draw distance more than 500.0, always. It'll be saved in Texture Studio Folder &gt; scriptfiles &gt; ExportMaps.<br />
To import it as filterscript, first open the .pwn export in pawno and press F5 to compile. Then put .amx file in your filterscripts folder.<br />
To export your map as simple .txt file, use <span style="font-weight: bold;" class="mycode_b">/exportmap</span>. Again, draw distance 500.0 or above.<br />
Select the type of code you want, CreateObject or CreateDynamicObject then click Export. It'll be saved as a .txt file in Texture Studio Folder &gt; scriptfiles &gt; ExportMaps.<br />
<br />
<div style="text-align: center;" class="mycode_align"><span style="font-weight: bold;" class="mycode_b"><span style="text-decoration: underline;" class="mycode_u"><span style="font-size: medium;" class="mycode_size">Texture Studio Common Bug Fixes</span></span></span></div>
<ul class="mycode_list"><li><span style="font-weight: bold;" class="mycode_b">Some commands not working-</span> Quit SAMP, close and re-open samp-server.exe<br />
</li>
<li><span style="font-weight: bold;" class="mycode_b">The Co-Ordinates are messed up-</span> Sometimes rotating along one axis rotates it along another, the object is bugged. Delete the object, restart SAMP and samp-server.exe<br />
</li>
<li><span style="font-weight: bold;" class="mycode_b">No commands work-</span> Your Texture Studio download must be incomplete. Delete all of the files and re-install it once again.<br />
</li>
</ul>
<br />
<div style="text-align: center;" class="mycode_align"><img src="https://i.imgur.com/YoAM8rR.png" loading="lazy"  alt="[Image: YoAM8rR.png]" class="mycode_img" /></div>
<br />
<div style="text-align: center;" class="mycode_align">I hope you liked the guide.</div>
<div style="text-align: center;" class="mycode_align"><span style="font-weight: bold;" class="mycode_b">Ask in a reply below if you have any questions.</span></div>]]></content:encoded>
		</item>
		<item>
			<title><![CDATA[Detailed Mapping Guide/Tips]]></title>
			<link>https://www.burgershot.gg/showthread.php?tid=990</link>
			<pubDate>Sat, 15 Feb 2020 12:59:28 +0000</pubDate>
			<dc:creator><![CDATA[<a href="https://www.burgershot.gg/member.php?action=profile&uid=2088">Uproar</a>]]></dc:creator>
			<guid isPermaLink="false">https://www.burgershot.gg/showthread.php?tid=990</guid>
			<description><![CDATA[<span style="font-family: verdana;" class="mycode_font">Hello everyone, this guide was posted back in April 2018 on the SAMP forum- but since I can't acces it from where I live, I'll be reposting it here.</span><br />
<span style="font-family: verdana;" class="mycode_font">Many of you want to start mapping, but lack either the motivation or the ideas. Here in this thread, I'm going to list some <span style="color: red;" class="mycode_color">tips, some commonly known bugs, useful objects</span> and such.<br />
<blockquote class="mycode_quote"><cite>Quote:</cite>You need to have a criticism sense, I know your map is like your baby and you think its all beautiful and stuff, but its not. You need to get over this mentality and judge your map objectively.</blockquote>
<span style="font-weight: bold;" class="mycode_b">This thread mainly is about roleplay maps but some tips can come in handy with all types of maps</span><br />
<br />
</span><br />
<div style="text-align: center;" class="mycode_align">
<span style="font-weight: bold;" class="mycode_b"><span style="text-decoration: underline;" class="mycode_u"><span style="font-size: large;" class="mycode_size">Map Editor Choice</span></span></span></div>
<br />
<span style="font-size: x-small;" class="mycode_size">This is completely your own choice.<br />
</span><ul class="mycode_list"><li>If you're going for mapping without textures and just with normal objects, without text and stuff, use <a href="http://forum.sa-mp.com/showthread.php?t=282801" target="_blank" rel="noopener" class="mycode_url"><span style="color: #0000ff;" class="mycode_color">Map Editor</span></a>. This is <span style="font-weight: bold;" class="mycode_b">not</span> an in-game editor, but a seperate program.<br />
</li>
<li>If you're going for an in-game map editor with textures, text and actor + anim support, go for <a href="http://forum.sa-mp.com/showthread.php?t=648101" target="_blank" rel="noopener" class="mycode_url"><span style="color: #0000ff;" class="mycode_color">Fusez's Map Editor</span></a>. This has an in-built smoothcam too, so you can record videos for your showcase pretty easily. It has a lot more, so you can click on the thread and check it out yourself.<br />
</li>
<li>Then comes my personal favorite program, <a href="http://forum.sa-mp.com/showthread.php?t=582490&amp;highlight=texture+studio" target="_blank" rel="noopener" class="mycode_url"><span style="color: #0000ff;" class="mycode_color">Texture Studio</span></a>. It is by far the easiest program with a lot of features. You may think it is complicated but it is not.<br />
</li>
<li>In the end, the <a href="http://forum.sa-mp.com/showthread.php?t=620522" target="_blank" rel="noopener" class="mycode_url"><span style="color: #0000ff;" class="mycode_color">Ultimate Creator</span></a>. This one deserves more peers but I didn't work with it, so don't know how is it. As far as I know, this editor mainly works with keyboard shortcuts and such, check the thread for more information.<br />
</li>
</ul>
<br />
<br />
<div style="text-align: center;" class="mycode_align"><span style="font-weight: bold;" class="mycode_b"><span style="text-decoration: underline;" class="mycode_u"><span style="font-size: large;" class="mycode_size">Object Choice and Placement</span></span></span></div>
<br />
Coming to the objects, you need to have a really good imagination and creativity. In Texture Studio, you can still edit textures and make them look almost completely different! But in map editors without texture support, this can be a nightmare. You can also edit textures in the code with <span style="font-weight: bold;" class="mycode_b">SetObjectMaterial</span> but it isn't easy, neither do I know more about scripting.<br />
<br />
<div style="text-align: center;" class="mycode_align"><span style="font-size: medium;" class="mycode_size"><span style="font-weight: bold;" class="mycode_b">For object and texture IDs, use <a href="https://dev.prineside.com/en/gtasa_samp_model_id/" target="_blank" rel="noopener" class="mycode_url"><span style="color: #0000ff;" class="mycode_color">this</span></a> website.</span></span><br />
I'll list below how to use that website.</div>
<ul class="mycode_list"><li><span style="font-weight: bold;" class="mycode_b">Object selection</span>- Use objects that suit your theme. If you're making a old styled map like for a county server, use wooden textures, mostly. DO NOT use any modern objects in such a map. Vintage objects work the best with such a map. Just imagine yourself being in the 1950s, how would it feel? What would your environment consist of? There, that's how you decide your objects. In a modern themed map, use any object you want but don't use objects with too plain textures. If you still plan to make them look better and realistic, retexture them to a proper texture combination without making it look cartoonish. Collision holds a major role here too. If you need players to NOT pass through a particular object, use an object with collision. If you're really scrict about how players collide with an object and if the object doesn't have a proper collision like this, simply use the chip objects (The stack of coins in gambling).<br />
</li>
</ul>
<div style="text-align: center;" class="mycode_align"><img src="https://i.imgur.com/pDu2aQQl.png" loading="lazy"  alt="[Image: pDu2aQQl.png]" class="mycode_img" /></div>
<ul class="mycode_list"><li><span style="font-weight: bold;" class="mycode_b">Object Placement</span>- Placing objects is a major part of the map. If you're using Map Editor, it's comparatively difficult to align some objects properly (They either float in the air or are badly aligned along). In texture studio, use the /editobject GUI to place them properly. Now you might need an object which isn't there in GTA SA? Use your creativity. Make a new object with small existing objects. For example, a computer monitor. There isn't a modern one available. So use the LCDTV1 object and for the stand, either use the Lava Lamp and retexture it and place it behind the LCD TV so that it looks like a screen or use 2 Switch objects (Retexture them according to your needs). Then place one horizontal and another one at 45 degrees so that it holds the LCD TV like <a href="https://imgur.com/a/ax3EE" target="_blank" rel="noopener" class="mycode_url"><span style="color: #0000ff;" class="mycode_color">this</span></a>.<br />
</li>
</ul>
<br />
<br />
If you're placing two object side by side or very near to make one big object, make sure they don't overlap along and become glitchy like below. To avoid it, simply move the second object back by 0.001 along the forward/backward axis (<span style="font-weight: bold;" class="mycode_b">/ox 0.001</span> or <span style="font-weight: bold;" class="mycode_b">/oy 0.001</span> in Texture Studio), so it doesn't really look like it's behind but avoids the glitch.<br />
<div style="text-align: center;" class="mycode_align"><img src="https://i.imgur.com/ead1n4C.gifl" loading="lazy"  alt="[Image: ead1n4C.gifl]" class="mycode_img" /></div>
<br />
<blockquote class="mycode_quote"><cite>Flashhie Wrote:</cite>If you place small detailed objects, never place them at a 90 degree angle. Because in real life nobody places the stuff on table perfectly, even if they want it to.</blockquote><br />
And that's right! Have a look at this:-<br />
<div style="text-align: center;" class="mycode_align"><img src="https://i.imgur.com/HU22sfE.png?1" loading="lazy"  alt="[Image: HU22sfE.png?1]" class="mycode_img" /><br />
<img src="https://i.imgur.com/c4bV3nW.png?1" loading="lazy"  alt="[Image: c4bV3nW.png?1]" class="mycode_img" /></div>
<br />
<br />
<br />
<div style="text-align: center;" class="mycode_align"><span style="font-weight: bold;" class="mycode_b"><span style="text-decoration: underline;" class="mycode_u"><span style="font-size: large;" class="mycode_size">Textures</span></span></span></div>
<br />
Textures are a very important part of your map. Good textures can make it look so realistic, believe me. I always placed objects and only used the concrete texture (Index 3 in texture studio) but later I realised how good does proper texturing result in. Again, if you're making a old styled map, use old textures. Mostly wood.<br />
<br />
Useful Wooden Textures - 223, 229, 230, 288, 301, 1054, 3840.<br />
<br />
For a modern-themed map, NEVER use plain textures like 8691 to 8705. Use textures that look realistic, you won't want your map to look like a minecraft map, do you? Ever seen plastic walls of a building? No. Use concrete textures. If you still like plain textures, use texture ID 3 and edit the color with /mtcolor. Do not use plain textures. They may look decent with your ENB Shaders but not everyone has ENB, so don't use plain textures at all!<br />
Now you can always use /mtcolor to set the color in texture studio. More details about this in the Texture Studio section below.<br />
If you wish to find texture of a default GTA object, go <a href="https://dev.prineside.com/en/gtasa_samp_model_id/" target="_blank" rel="noopener" class="mycode_url"><span style="color: #0000ff;" class="mycode_color">here</span></a>, search for your object and once you get it click on the "Details" button, then click <a href="https://i.imgur.com/PId4mRU.png?1" target="_blank" rel="noopener" class="mycode_url"><span style="color: #0000ff;" class="mycode_color">here</span></a> and you'll get a list of the textures on it. Go to texture studio and use /tsearch [Your texture name] (Remove the square brackets).<br />
<br />
<div style="text-align: center;" class="mycode_align"><span style="font-weight: bold;" class="mycode_b"><span style="text-decoration: underline;" class="mycode_u"><span style="font-size: large;" class="mycode_size">Using <a href="https://dev.prineside.com/en/gtasa_samp_model_id" target="_blank" rel="noopener" class="mycode_url"><span style="color: #0000ff;" class="mycode_color">dev.prineside.com</span></a></span></span></span></div>
<br />
It's really easy. Use the search bar or the categories below to search for an object. Then if you see your object on the screen, click on it, then click on details. To get the textures of that object, click on the .txd file on the right side of your screen. Then go in game and use /tsearch [Texture Name] to search for it. Below is a demonstration. (Sorry for the bad quality, it's because I made it into .gif instead of a YouTube video which will be annoying to open)<br />
<div style="text-align: center;" class="mycode_align"><img src="https://imgur.com/RXbp7Hv.gifl" loading="lazy"  alt="[Image: RXbp7Hv.gifl]" class="mycode_img" /></div>
<br />
<br />
Below, I'll show you how to get the position(s) of a certain object. For example the pershing square object. Search for it, scroll down and click on "Fullscreen / Position Export" then you'll see the co-ordinates on the right side of your screen. Here is a demonstration of the same:-<br />
<div style="text-align: center;" class="mycode_align"><img src="https://i.imgur.com/k84M1Cb.gif" loading="lazy"  alt="[Image: k84M1Cb.gif]" class="mycode_img" /></div>
<br />
<br />
<span style="text-decoration: underline;" class="mycode_u">Searching an Object by position</span><br />
Click on the small location blip icon in the search bar. The San Andreas Map will pop up, click on the location you wish to see the objects near to, and it'll show all of them.<br />
<div style="text-align: center;" class="mycode_align"><img src="https://i.imgur.com/kAR9xzRl.png" loading="lazy"  alt="[Image: kAR9xzRl.png]" class="mycode_img" /><br />
<br />
<br />
<span style="font-weight: bold;" class="mycode_b"><span style="text-decoration: underline;" class="mycode_u"><span style="font-size: large;" class="mycode_size">Useful Textures</span></span></span></div>
Concrete textures- 3, 139, 8438, 8535.<br />
Wood textures- 223, 229, 230, 288, 301, 1054, 3840.<br />
Glass and window textures- 1123, 3565.<br />
<br />
<br />
<div style="text-align: center;" class="mycode_align"><span style="font-weight: bold;" class="mycode_b"><span style="text-decoration: underline;" class="mycode_u"><span style="font-size: large;" class="mycode_size"><a href="https://imgur.com/a/JYeXN" target="_blank" rel="noopener" class="mycode_url">Useful Objects (Click Here)</a></span></span></span></div>
<br />
<div style="text-align: center;" class="mycode_align"><img src="https://i.imgur.com/YoAM8rR.png" loading="lazy"  alt="[Image: YoAM8rR.png]" class="mycode_img" /></div>
<br />
<div style="text-align: center;" class="mycode_align">I hope you like it.</div>
<div style="text-align: center;" class="mycode_align">Questions and suggestions are welcome.</div>
<div style="text-align: center;" class="mycode_align"><span style="font-weight: bold;" class="mycode_b">For more help, ask below in a reply.</span></div>]]></description>
			<content:encoded><![CDATA[<span style="font-family: verdana;" class="mycode_font">Hello everyone, this guide was posted back in April 2018 on the SAMP forum- but since I can't acces it from where I live, I'll be reposting it here.</span><br />
<span style="font-family: verdana;" class="mycode_font">Many of you want to start mapping, but lack either the motivation or the ideas. Here in this thread, I'm going to list some <span style="color: red;" class="mycode_color">tips, some commonly known bugs, useful objects</span> and such.<br />
<blockquote class="mycode_quote"><cite>Quote:</cite>You need to have a criticism sense, I know your map is like your baby and you think its all beautiful and stuff, but its not. You need to get over this mentality and judge your map objectively.</blockquote>
<span style="font-weight: bold;" class="mycode_b">This thread mainly is about roleplay maps but some tips can come in handy with all types of maps</span><br />
<br />
</span><br />
<div style="text-align: center;" class="mycode_align">
<span style="font-weight: bold;" class="mycode_b"><span style="text-decoration: underline;" class="mycode_u"><span style="font-size: large;" class="mycode_size">Map Editor Choice</span></span></span></div>
<br />
<span style="font-size: x-small;" class="mycode_size">This is completely your own choice.<br />
</span><ul class="mycode_list"><li>If you're going for mapping without textures and just with normal objects, without text and stuff, use <a href="http://forum.sa-mp.com/showthread.php?t=282801" target="_blank" rel="noopener" class="mycode_url"><span style="color: #0000ff;" class="mycode_color">Map Editor</span></a>. This is <span style="font-weight: bold;" class="mycode_b">not</span> an in-game editor, but a seperate program.<br />
</li>
<li>If you're going for an in-game map editor with textures, text and actor + anim support, go for <a href="http://forum.sa-mp.com/showthread.php?t=648101" target="_blank" rel="noopener" class="mycode_url"><span style="color: #0000ff;" class="mycode_color">Fusez's Map Editor</span></a>. This has an in-built smoothcam too, so you can record videos for your showcase pretty easily. It has a lot more, so you can click on the thread and check it out yourself.<br />
</li>
<li>Then comes my personal favorite program, <a href="http://forum.sa-mp.com/showthread.php?t=582490&amp;highlight=texture+studio" target="_blank" rel="noopener" class="mycode_url"><span style="color: #0000ff;" class="mycode_color">Texture Studio</span></a>. It is by far the easiest program with a lot of features. You may think it is complicated but it is not.<br />
</li>
<li>In the end, the <a href="http://forum.sa-mp.com/showthread.php?t=620522" target="_blank" rel="noopener" class="mycode_url"><span style="color: #0000ff;" class="mycode_color">Ultimate Creator</span></a>. This one deserves more peers but I didn't work with it, so don't know how is it. As far as I know, this editor mainly works with keyboard shortcuts and such, check the thread for more information.<br />
</li>
</ul>
<br />
<br />
<div style="text-align: center;" class="mycode_align"><span style="font-weight: bold;" class="mycode_b"><span style="text-decoration: underline;" class="mycode_u"><span style="font-size: large;" class="mycode_size">Object Choice and Placement</span></span></span></div>
<br />
Coming to the objects, you need to have a really good imagination and creativity. In Texture Studio, you can still edit textures and make them look almost completely different! But in map editors without texture support, this can be a nightmare. You can also edit textures in the code with <span style="font-weight: bold;" class="mycode_b">SetObjectMaterial</span> but it isn't easy, neither do I know more about scripting.<br />
<br />
<div style="text-align: center;" class="mycode_align"><span style="font-size: medium;" class="mycode_size"><span style="font-weight: bold;" class="mycode_b">For object and texture IDs, use <a href="https://dev.prineside.com/en/gtasa_samp_model_id/" target="_blank" rel="noopener" class="mycode_url"><span style="color: #0000ff;" class="mycode_color">this</span></a> website.</span></span><br />
I'll list below how to use that website.</div>
<ul class="mycode_list"><li><span style="font-weight: bold;" class="mycode_b">Object selection</span>- Use objects that suit your theme. If you're making a old styled map like for a county server, use wooden textures, mostly. DO NOT use any modern objects in such a map. Vintage objects work the best with such a map. Just imagine yourself being in the 1950s, how would it feel? What would your environment consist of? There, that's how you decide your objects. In a modern themed map, use any object you want but don't use objects with too plain textures. If you still plan to make them look better and realistic, retexture them to a proper texture combination without making it look cartoonish. Collision holds a major role here too. If you need players to NOT pass through a particular object, use an object with collision. If you're really scrict about how players collide with an object and if the object doesn't have a proper collision like this, simply use the chip objects (The stack of coins in gambling).<br />
</li>
</ul>
<div style="text-align: center;" class="mycode_align"><img src="https://i.imgur.com/pDu2aQQl.png" loading="lazy"  alt="[Image: pDu2aQQl.png]" class="mycode_img" /></div>
<ul class="mycode_list"><li><span style="font-weight: bold;" class="mycode_b">Object Placement</span>- Placing objects is a major part of the map. If you're using Map Editor, it's comparatively difficult to align some objects properly (They either float in the air or are badly aligned along). In texture studio, use the /editobject GUI to place them properly. Now you might need an object which isn't there in GTA SA? Use your creativity. Make a new object with small existing objects. For example, a computer monitor. There isn't a modern one available. So use the LCDTV1 object and for the stand, either use the Lava Lamp and retexture it and place it behind the LCD TV so that it looks like a screen or use 2 Switch objects (Retexture them according to your needs). Then place one horizontal and another one at 45 degrees so that it holds the LCD TV like <a href="https://imgur.com/a/ax3EE" target="_blank" rel="noopener" class="mycode_url"><span style="color: #0000ff;" class="mycode_color">this</span></a>.<br />
</li>
</ul>
<br />
<br />
If you're placing two object side by side or very near to make one big object, make sure they don't overlap along and become glitchy like below. To avoid it, simply move the second object back by 0.001 along the forward/backward axis (<span style="font-weight: bold;" class="mycode_b">/ox 0.001</span> or <span style="font-weight: bold;" class="mycode_b">/oy 0.001</span> in Texture Studio), so it doesn't really look like it's behind but avoids the glitch.<br />
<div style="text-align: center;" class="mycode_align"><img src="https://i.imgur.com/ead1n4C.gifl" loading="lazy"  alt="[Image: ead1n4C.gifl]" class="mycode_img" /></div>
<br />
<blockquote class="mycode_quote"><cite>Flashhie Wrote:</cite>If you place small detailed objects, never place them at a 90 degree angle. Because in real life nobody places the stuff on table perfectly, even if they want it to.</blockquote><br />
And that's right! Have a look at this:-<br />
<div style="text-align: center;" class="mycode_align"><img src="https://i.imgur.com/HU22sfE.png?1" loading="lazy"  alt="[Image: HU22sfE.png?1]" class="mycode_img" /><br />
<img src="https://i.imgur.com/c4bV3nW.png?1" loading="lazy"  alt="[Image: c4bV3nW.png?1]" class="mycode_img" /></div>
<br />
<br />
<br />
<div style="text-align: center;" class="mycode_align"><span style="font-weight: bold;" class="mycode_b"><span style="text-decoration: underline;" class="mycode_u"><span style="font-size: large;" class="mycode_size">Textures</span></span></span></div>
<br />
Textures are a very important part of your map. Good textures can make it look so realistic, believe me. I always placed objects and only used the concrete texture (Index 3 in texture studio) but later I realised how good does proper texturing result in. Again, if you're making a old styled map, use old textures. Mostly wood.<br />
<br />
Useful Wooden Textures - 223, 229, 230, 288, 301, 1054, 3840.<br />
<br />
For a modern-themed map, NEVER use plain textures like 8691 to 8705. Use textures that look realistic, you won't want your map to look like a minecraft map, do you? Ever seen plastic walls of a building? No. Use concrete textures. If you still like plain textures, use texture ID 3 and edit the color with /mtcolor. Do not use plain textures. They may look decent with your ENB Shaders but not everyone has ENB, so don't use plain textures at all!<br />
Now you can always use /mtcolor to set the color in texture studio. More details about this in the Texture Studio section below.<br />
If you wish to find texture of a default GTA object, go <a href="https://dev.prineside.com/en/gtasa_samp_model_id/" target="_blank" rel="noopener" class="mycode_url"><span style="color: #0000ff;" class="mycode_color">here</span></a>, search for your object and once you get it click on the "Details" button, then click <a href="https://i.imgur.com/PId4mRU.png?1" target="_blank" rel="noopener" class="mycode_url"><span style="color: #0000ff;" class="mycode_color">here</span></a> and you'll get a list of the textures on it. Go to texture studio and use /tsearch [Your texture name] (Remove the square brackets).<br />
<br />
<div style="text-align: center;" class="mycode_align"><span style="font-weight: bold;" class="mycode_b"><span style="text-decoration: underline;" class="mycode_u"><span style="font-size: large;" class="mycode_size">Using <a href="https://dev.prineside.com/en/gtasa_samp_model_id" target="_blank" rel="noopener" class="mycode_url"><span style="color: #0000ff;" class="mycode_color">dev.prineside.com</span></a></span></span></span></div>
<br />
It's really easy. Use the search bar or the categories below to search for an object. Then if you see your object on the screen, click on it, then click on details. To get the textures of that object, click on the .txd file on the right side of your screen. Then go in game and use /tsearch [Texture Name] to search for it. Below is a demonstration. (Sorry for the bad quality, it's because I made it into .gif instead of a YouTube video which will be annoying to open)<br />
<div style="text-align: center;" class="mycode_align"><img src="https://imgur.com/RXbp7Hv.gifl" loading="lazy"  alt="[Image: RXbp7Hv.gifl]" class="mycode_img" /></div>
<br />
<br />
Below, I'll show you how to get the position(s) of a certain object. For example the pershing square object. Search for it, scroll down and click on "Fullscreen / Position Export" then you'll see the co-ordinates on the right side of your screen. Here is a demonstration of the same:-<br />
<div style="text-align: center;" class="mycode_align"><img src="https://i.imgur.com/k84M1Cb.gif" loading="lazy"  alt="[Image: k84M1Cb.gif]" class="mycode_img" /></div>
<br />
<br />
<span style="text-decoration: underline;" class="mycode_u">Searching an Object by position</span><br />
Click on the small location blip icon in the search bar. The San Andreas Map will pop up, click on the location you wish to see the objects near to, and it'll show all of them.<br />
<div style="text-align: center;" class="mycode_align"><img src="https://i.imgur.com/kAR9xzRl.png" loading="lazy"  alt="[Image: kAR9xzRl.png]" class="mycode_img" /><br />
<br />
<br />
<span style="font-weight: bold;" class="mycode_b"><span style="text-decoration: underline;" class="mycode_u"><span style="font-size: large;" class="mycode_size">Useful Textures</span></span></span></div>
Concrete textures- 3, 139, 8438, 8535.<br />
Wood textures- 223, 229, 230, 288, 301, 1054, 3840.<br />
Glass and window textures- 1123, 3565.<br />
<br />
<br />
<div style="text-align: center;" class="mycode_align"><span style="font-weight: bold;" class="mycode_b"><span style="text-decoration: underline;" class="mycode_u"><span style="font-size: large;" class="mycode_size"><a href="https://imgur.com/a/JYeXN" target="_blank" rel="noopener" class="mycode_url">Useful Objects (Click Here)</a></span></span></span></div>
<br />
<div style="text-align: center;" class="mycode_align"><img src="https://i.imgur.com/YoAM8rR.png" loading="lazy"  alt="[Image: YoAM8rR.png]" class="mycode_img" /></div>
<br />
<div style="text-align: center;" class="mycode_align">I hope you like it.</div>
<div style="text-align: center;" class="mycode_align">Questions and suggestions are welcome.</div>
<div style="text-align: center;" class="mycode_align"><span style="font-weight: bold;" class="mycode_b">For more help, ask below in a reply.</span></div>]]></content:encoded>
		</item>
		<item>
			<title><![CDATA[Basic SA-MP & Pawn Guide]]></title>
			<link>https://www.burgershot.gg/showthread.php?tid=738</link>
			<pubDate>Fri, 02 Aug 2019 20:02:02 +0000</pubDate>
			<dc:creator><![CDATA[<a href="https://www.burgershot.gg/member.php?action=profile&uid=1458">Ygzeb</a>]]></dc:creator>
			<guid isPermaLink="false">https://www.burgershot.gg/showthread.php?tid=738</guid>
			<description><![CDATA[<div style="text-align: center;" class="mycode_align"><span style="color: Sienna;" class="mycode_color"><span style="font-family: Arial Black;" class="mycode_font"><span style="font-size: large;" class="mycode_size">BASIC SA-MP  &amp; PAWN GUIDE</span></span></span></div>
<br />
<div style="text-align: center;" class="mycode_align"><img src="http://i.imgur.com/YPOK9Or.png" loading="lazy"  alt="[Image: YPOK9Or.png]" class="mycode_img" /></div>
<br />
<span style="color: DarkOrange;" class="mycode_color"><span style="font-family: Arial Black;" class="mycode_font"><span style="font-size: medium;" class="mycode_size">INTRO:</span></span></span><br />
<br />
This guide is based on other tutorials and on my own experience. It is created specially for new scripters and people who want to learn SA-MP Pawn scripting, it explains just basic scripting and how to start.<br />
<br />
* Note: this guide is based on the one I made for SA-MP forum in the first months of 2015; if you read this later, some elements may have changed or updated.<br />
<br />
Based on:<br />
<br />
<a href="http://forum.sa-mp.com/showthread.php?t=317336" target="_blank" rel="noopener" class="mycode_url">Nicholas tutorial</a><br />
<a href="http://forum.sa-mp.com/showthread.php?t=177490" target="_blank" rel="noopener" class="mycode_url">Kwarde tutorial</a><br />
<a href="http://wiki.sa-mp.com/" target="_blank" rel="noopener" class="mycode_url">Wiki SA-MP</a><br />
<br />
Own knowledge.<br />
<br />
<br />
<br />
<span style="color: DarkOrange;" class="mycode_color"><span style="font-family: Arial Black;" class="mycode_font"><span style="font-size: medium;" class="mycode_size">INDEX:</span></span></span><br />
<br />
<span style="font-weight: bold;" class="mycode_b">STARTING</span><br />
   <br />
<span style="font-style: italic;" class="mycode_i"><span style="font-weight: bold;" class="mycode_b">Explaining each file (basic ones)</span></span><br />
<br />
scriptfiles<br />
plugins<br />
pawno<br />
npcmodes<br />
include<br />
gamemodes<br />
filterscripts<br />
announce.exe<br />
samp-npc.exe<br />
samp-server.exe<br />
server.cfg<br />
<br />
<span style="font-weight: bold;" class="mycode_b">CONFIGURATION</span><br />
<br />
<span style="font-weight: bold;" class="mycode_b">PAWN SCRIPTING</span><br />
   <br />
<span style="font-style: italic;" class="mycode_i"><span style="font-weight: bold;" class="mycode_b">Publics</span></span><br />
<br />
public OnGameModeInit()<br />
public OnGameModeExit()<br />
public OnPlayerRequestClass(playerid, classid)<br />
public OnPlayerConnect(playerid)<br />
public OnPlayerSpawn(playerid)<br />
public OnPlayerDeath(playerid)<br />
public OnPlayerDisconnect(playerid, reason)<br />
public OnPlayerText(playerid)<br />
public OnPlayerUpdate(playerid)<br />
<br />
<span style="font-style: italic;" class="mycode_i"><span style="font-weight: bold;" class="mycode_b">Functions</span></span><br />
<br />
SetPlayerPos(playerid, X, Y, Z);<br />
TextDrawCreate(X, Y, text[])<br />
<br />
<span style="font-style: italic;" class="mycode_i"><span style="font-weight: bold;" class="mycode_b">Dialog Function (menus &amp; others)</span></span><br />
<br />
ShowPlayerDialog(playerid, dialogid, style, caption[], info[], button1[], button2[]);<br />
Message box style (sends a message to the player)<br />
Input style (allows players to input text into the dialog)<br />
List style (menu, show the player a list of options)<br />
Password style (allows players to input text into the dialog without revealing it)<br />
<br />
<span style="font-weight: bold;" class="mycode_b">CREATING AND REMOVING OBJECTS</span><br />
<br />
<span style="font-style: italic;" class="mycode_i"><span style="font-weight: bold;" class="mycode_b">Map editor (1 &amp; 2)</span></span><br />
<br />
Start using it<br />
Creating objects<br />
Removing objects<br />
<br />
<span style="font-style: italic;" class="mycode_i"><span style="font-weight: bold;" class="mycode_b">MTA map editor</span></span><br />
<br />
Start using it<br />
Delux GTA Map Converter v2<br />
<br />
<span style="font-style: italic;" class="mycode_i"><span style="font-weight: bold;" class="mycode_b">Creating Objects</span></span><br />
<br />
Streamer installation<br />
<br />
<br />
<br />
<span style="font-weight: bold;" class="mycode_b">START PRACTICING</span><br />
<br />
<br />
<br />
<span style="color: DarkOrange;" class="mycode_color"><span style="font-family: Arial Black;" class="mycode_font"><span style="font-size: medium;" class="mycode_size">STARTING:</span></span></span><br />
<br />
First we must download the <a href="http://www.sa-mp.com/download.php" target="_blank" rel="noopener" class="mycode_url">SA-MP Windows Server</a> from SA-MP.com<br />
<br />
After doing this we will open the files contained in the download and after decompressing it, we will see our server files &amp; folders...<br />
<br />
Basic files &amp; folders:<br />
<br />
scriptfiles, plugins, pawno, npcmodes, include, gamemodes, filterscripts, announce.exe, samp-npc.exe, samp-server.exe &amp; server.cfg<br />
<br />
Other files:<br />
<br />
Text files that include terms &amp; a configuration guide (samp-license.txt &amp; server-readme.txt respectively).<br />
<br />
<br />
<span style="color: Green;" class="mycode_color"><span style="font-family: Arial Black;" class="mycode_font"><span style="font-size: medium;" class="mycode_size">Explaining each file (basic ones):</span></span></span><br />
<br />
scriptfiles: this folder contains information called inside your script or logs created by your script, usually used as a database.<br />
<br />
plugins: this folder contains additional codes that give more options in SA-MP programming, usually programmed in other languages. This guide will not give detailed information about plugins as they are more advanced.<br />
<br />
pawno: contains the basic program to start scripting in SA-MP; also has the "include" folder that contains basic includes to start our script (SA-MP basic functions). We can also add our own includes and add them to our script.<br />
<br />
npcmodes: this contains information about NPCs (script &amp; rec); this guide will not give detailed information about NPCs as they are more advanced.<br />
<br />
include: this contains codes that can be included inside your script.<br />
<br />
gamemodes: contains basic gamemodes and we must place our gamemode if we create one.<br />
<br />
filterscripts: contains additional codes apart from your gamemode, not included in it and can be called by using rcon commands.<br />
<br />
announce.exe: this will allow us to show our server on Masterlist.<br />
<br />
samp-npc.exe: this will allow us to use NPCs.<br />
<br />
samp-server.exe: we start our server with this.<br />
<br />
server.cfg: our server configuration.<br />
<br />
<br />
<br />
<br />
<span style="color: DarkOrange;" class="mycode_color"><span style="font-family: Arial Black;" class="mycode_font"><span style="font-size: medium;" class="mycode_size">CONFIGURATION:</span></span></span><br />
<br />
First we must open the file "server.cfg" and edit our server configuration.<br />
<br />
After opening it, you will find:<br />
<br />
<div class="codeblock"><div class="title">Code:</div><div class="body" dir="ltr"><code>echo Executing Server Config...<br />
lanmode 0<br />
rcon_password changeme<br />
maxplayers 50<br />
port 7777<br />
hostname SA-MP 0.3 Server<br />
gamemode0 grandlarc 1<br />
filterscripts gl_actions gl_realtime gl_property gl_mapicon ls_mall ls_elevator attachments skinchanger vspawner<br />
announce 0<br />
query 1<br />
chatlogging 0<br />
weburl www.sa-mp.com<br />
onfoot_rate 40<br />
incar_rate 40<br />
weapon_rate 40<br />
stream_distance 300.0<br />
stream_rate 1000<br />
maxnpc 0<br />
logtimeformat [%H:%M:%S]</code></div></div><br />
You can edit your configuration based on this:<br />
<br />
<div class="codeblock"><div class="title">Code:</div><div class="body" dir="ltr"><code>echo Executing Server Config...<br />
lanmode 0 (lan mode on "1" or off "0")<br />
rcon_password changeme (the rcon password you will use "/Rcon login"; you must edit this) <br />
maxplayers 50 (amount of slots available for players)<br />
port 7777 (the port you will use, for example: 127.0.0.1:7777)<br />
hostname SA-MP 0.3 server (the name of your server)<br />
gamemode0 grandlarc1 (name of the gamemode you will use, you can add a gamemode if you create/download one)<br />
filterscripts gl_actions gl_realtime gl_property gl_mapicon ls_mall ls_elevator attachments skinchanger vspawner (filterscripts that will be used)<br />
announce 0 (server visible on Masterlist; "1" to show it and "0" to hide it)<br />
query 1 (information of the server visible "1", "0" will disable your server information to other players)<br />
chatlogging 0 (save chat logs in server_log.txt "1", not saving it "0")<br />
weburl www.sa-mp.com (website of your server)<br />
onfoot_rate 40 (we will not explain this in this tutorial, advanced)<br />
incar_rate 40 (we will not explain this in this tutorial, advanced)<br />
weapon_rate 40 (we will not explain this in this tutorial, advanced)<br />
stream_distance 300.0 (we will not explain this in this tutorial, advanced)<br />
stream_rate 1000 (we will not explain this in this tutorial, advanced)<br />
maxnpc 0 (number of NPCs that can join your server)<br />
logtimeformat [%H:%M:%S]</code></div></div><br />
You can also read more information about <a href="http://wiki.sa-mp.com/wiki/Server.cfg" target="_blank" rel="noopener" class="mycode_url">server.cfg configuration</a>.<br />
<br />
Configuration example (this guide is based on this configuration):<br />
<br />
<div class="codeblock"><div class="title">Code:</div><div class="body" dir="ltr"><code>echo Executing Server Config...<br />
lanmode 0<br />
rcon_password Pawn<br />
maxplayers 100<br />
port 7777<br />
hostname SA-MP Server [0.3z]<br />
gamemode0 Basic 1<br />
filterscripts gl_actions gl_realtime gl_property gl_mapicon ls_mall ls_elevator attachments skinchanger vspawner<br />
announce 1<br />
query 1<br />
chatlogging 1<br />
weburl www.sa-mp.com<br />
onfoot_rate 40<br />
incar_rate 40<br />
weapon_rate 40<br />
stream_distance 300.0<br />
stream_rate 1000<br />
maxnpc 0<br />
logtimeformat [%H:%M:%S]</code></div></div><br />
<br />
<br />
<span style="color: DarkOrange;" class="mycode_color"><span style="font-family: Arial Black;" class="mycode_font"><span style="font-size: medium;" class="mycode_size">PAWN SCRIPTING:</span></span></span><br />
<br />
After changing our configuration we will start scripting our gamemode.<br />
<br />
In this case we will use a basic mode you can download <a href="http://www.mediafire.com/download/pp1n47wuc4n49w7/Basic.pwn" target="_blank" rel="noopener" class="mycode_url">here</a>.<br />
<br />
Put it inside the "gamemodes" folder.<br />
<br />
After doing this open the pawno folder inside your server and open the file "pawno.exe".<br />
<br />
Press "File/Open" (or just press CTRL + O) and open our basic mode, placed inside the gamemodes folder.<br />
<br />
Inside we have this:<br />
<br />
<div class="codeblock"><div class="title">Code:</div><div class="body" dir="ltr"><code>#include &lt;a_samp&gt;</code></div></div><br />
This is the basic SA-MP include, it will be included in every script you create in SA-MP.<br />
<br />
This message will be shown in console when we open our server with samp-server.exe:<br />
<br />
<div class="codeblock"><div class="title">Code:</div><div class="body" dir="ltr"><code>main()<br />
{<br />
print("Blank mode developed by Ygzeb.");<br />
}</code></div></div><br />
The blue text is the message that will be shown.<br />
<br />
You can edit the text that you want to be shown in console when your gamemode starts, just editing the blue text; for example:<br />
<br />
<div class="codeblock"><div class="title">Code:</div><div class="body" dir="ltr"><code>main()<br />
{<br />
print("My first mode!");<br />
}</code></div></div><br />
* Note: Every code must have opening and closing braces to start and end the function (all codes).<br />
<br />
Example:<br />
<br />
Opening braces = <span style="color: Red;" class="mycode_color">Red</span><br />
Closing braces = <span style="color: Lime;" class="mycode_color">Green</span><br />
<br />
main()<br />
<span style="color: #ff3333;" class="mycode_color">{</span><br />
print("My first mode!");<br />
<span style="color: #33cc33;" class="mycode_color">}</span><br />
<br />
<br />
<span style="font-weight: bold;" class="mycode_b">* Note: It is very important to press F5 after editing or creating a script! This will update the AMX file and all changes will be saved ("if there is not mistake", but in special cases may happen programming mistakes that will not figure in the compilation and will affect your server). If everything is okay you will see something like:</span><br />
<br />
<img src="http://i.imgur.com/Gobeslv.jpg" loading="lazy"  alt="[Image: Gobeslv.jpg]" class="mycode_img" /><br />
<br />
If not there is a mistake and you need to fix it.<br />
<br />
<br />
<span style="color: Green;" class="mycode_color"><span style="font-family: Arial Black;" class="mycode_font"><span style="font-size: medium;" class="mycode_size">Publics:</span></span></span><br />
<br />
Publics are basic functions called while your server is running. SA-MP counts with basic publics called in most gamemodes. Most basic public names describe when the public is executed.<br />
<br />
Some basic publics are called in special moments, for example while spawning; you can add a function to that moment.<br />
<br />
Example; if we want to set players health to 50 when spawning it would be something like:<br />
<br />
<div class="codeblock"><div class="title">Code:</div><div class="body" dir="ltr"><code>public OnPlayerSpawn(playerid)<br />
{<br />
   SetPlayerHealth(playerid, 50);<br />
   return 1;<br />
}</code></div></div><br />
* Note: we can not use identical publics in the same script; for example two OnPlayerSpawn publics; if we want to add an extra function we must add it inside the same public or inside a filterscript. Base on the last example, we will add a message while spawning:<br />
<br />
<div class="codeblock"><div class="title">Code:</div><div class="body" dir="ltr"><code>public OnPlayerSpawn(playerid)<br />
{<br />
   SetPlayerHealth(playerid, 50);<br />
   SendClientMessage(playerid, -1, "You spawned!"); // Function added.<br />
   return 1;<br />
}</code></div></div><br />
Here are some basic publics that are mostly used by scripters:<br />
<br />
<span style="font-weight: bold;" class="mycode_b">public OnGameModeInit()</span> - Called when your mode starts.<br />
<br />
Additional information: <a href="http://wiki.sa-mp.com/wiki/OnGameModeInit" target="_blank" rel="noopener" class="mycode_url">https://sampwiki.blast.hk/wiki/OnGameModeInit</a><br />
<br />
Basic structure:<br />
<br />
<div class="codeblock"><div class="title">Code:</div><div class="body" dir="ltr"><code>public OnGameModeInit()<br />
{<br />
    // Code here.<br />
    return 1;<br />
}</code></div></div><br />
Example code:<br />
<br />
<div class="codeblock"><div class="title">Code:</div><div class="body" dir="ltr"><code>public OnGameModeInit()<br />
{<br />
    UsePlayerPedAnims(); // Allow players to run like CJ.<br />
    SetGameModeText("Blank"); // Name of your mode; will be show in SA-MP list.<br />
    AddPlayerClass(115, 1958.3783, 1343.1572, 15.3746, 269.1425, 0, 0, 0, 0, 0, 0);<br />
    AddPlayerClass(122, 1958.3783, 1343.1572, 15.3746, 269.1425, 0, 0, 0, 0, 0, 0);<br />
    AddPlayerClass(166, 1958.3783, 1343.1572, 15.3746, 269.1425, 0, 0, 0, 0, 0, 0);<br />
    AddPlayerClass(270, 1958.3783, 1343.1572, 15.3746, 269.1425, 0, 0, 0, 0, 0, 0);<br />
    return 1;<br />
}</code></div></div><br />
AddPlayerClass is a function that adds skin options to class selection; for example if we want to add Sweet's Skin we should add this to our code:<br />
<br />
<div class="codeblock"><div class="title">Code:</div><div class="body" dir="ltr"><code>AddPlayerClass(270, 1958.3783, 1343.1572, 15.3746, 269.1425, 0, 0, 0, 0, 0, 0);</code></div></div><br />
The number "270" is the skin ID of Sweet.<br />
<br />
<span style="font-weight: bold;" class="mycode_b">public OnGameModeExit()</span> - Called when your mode ends; it is not necessary in all scripts (optional in most cases).<br />
<br />
Additional information: <a href="http://wiki.sa-mp.com/wiki/OnGameModeExit" target="_blank" rel="noopener" class="mycode_url">https://sampwiki.blast.hk/wiki/OnGameModeExit</a><br />
<br />
Basic structure:<br />
<br />
<div class="codeblock"><div class="title">Code:</div><div class="body" dir="ltr"><code>public OnGameModeExit()<br />
{<br />
    // Code here.<br />
    return 1;<br />
}</code></div></div><br />
Example code:<br />
<br />
<div class="codeblock"><div class="title">Code:</div><div class="body" dir="ltr"><code>public OnGameModeExit()<br />
{<br />
    print("Mode ended."); // Message to console (blue text).<br />
    return 1;<br />
}</code></div></div><br />
<span style="font-weight: bold;" class="mycode_b">public OnPlayerRequestClass(playerid, classid)</span> - Called when you choose your skin.<br />
<br />
Additional information: <a href="http://wiki.sa-mp.com/wiki/OnPlayerRequestClass" target="_blank" rel="noopener" class="mycode_url">https://sampwiki.blast.hk/wiki/OnPlayerRequestClass</a><br />
<br />
Basic structure:<br />
<br />
<div class="codeblock"><div class="title">Code:</div><div class="body" dir="ltr"><code>public OnPlayerRequestClass(playerid, classid)<br />
{<br />
    // Code here.<br />
    return 1;<br />
}</code></div></div><br />
Example code:<br />
<br />
<div class="codeblock"><div class="title">Code:</div><div class="body" dir="ltr"><code>public OnPlayerRequestClass(playerid, classid)<br />
{<br />
    SetPlayerPos(playerid, 2294.2810, 558.2053, 7.7813); // Skin position.<br />
    SetPlayerCameraPos(playerid, 2294.3071, 560.6948, 8.7324); // Position of the camera.<br />
    SetPlayerCameraLookAt(playerid, 2294.2810, 558.2053, 7.7813); // Position where the camera is looking at.<br />
    SetPlayerFacingAngle(playerid, 0);<br />
    return 1;<br />
}</code></div></div><br />
SetPlayerFacingAngle sets the angle where the player is looking; it's structure is:<br />
<br />
<div class="codeblock"><div class="title">Code:</div><div class="body" dir="ltr"><code>playerid = ID of the player<br />
0 = angle (in this case north).<br />
<br />
    north (0)<br />
           |<br />
(90) west-   -east (270)<br />
           |<br />
        south (180)</code></div></div><br />
More information about <a href="http://wiki.sa-mp.com/wiki/SetPlayerFacingAngle" target="_blank" rel="noopener" class="mycode_url">SetPlayerFacingAngle</a>.<br />
<br />
<span style="font-weight: bold;" class="mycode_b">public OnPlayerConnect(playerid)</span> - Called when a player connects.<br />
<br />
Additional information: <a href="http://wiki.sa-mp.com/wiki/OnPlayerConnect" target="_blank" rel="noopener" class="mycode_url">https://sampwiki.blast.hk/wiki/OnPlayerConnect</a><br />
<br />
Basic structure:<br />
<br />
<div class="codeblock"><div class="title">Code:</div><div class="body" dir="ltr"><code>public OnPlayerConnect(playerid)<br />
{<br />
    // Code here.<br />
    return 1;<br />
}</code></div></div><br />
Example code:<br />
<br />
<div class="codeblock"><div class="title">Code:</div><div class="body" dir="ltr"><code>public OnPlayerConnect(playerid)<br />
{<br />
    PlayAudioStreamForPlayer(playerid, "http://s1.radio.ge/Music/AcDc/1980_Back_In_Black/06_Back_In_Black.mp3"); // Will play Back in Black, AC/DC.<br />
    return 1;<br />
}</code></div></div><br />
PlayAudioStreamForPlayer is a function that plays an audio stream for a player. It's basic structure is:<br />
<br />
<div class="codeblock"><div class="title">Code:</div><div class="body" dir="ltr"><code>playerid = ID of the player<br />
"http://s1.radio.ge/Music/AcDc/1980_Back_In_Black/06_Back_In_Black.mp3" = audio link</code></div></div><br />
* Note: audio links must be in a specific format to be played; for example this<a href="ttp://s1.radio.ge/Music/AcDc/1980_Back_In_Black/06_Back_In_Black.mp3" target="_blank" rel="noopener" class="mycode_url">link</a>.<br />
<br />
You can find music in many websites. For example in <a href="http://mp3skull.com" target="_blank" rel="noopener" class="mycode_url">this</a> website.<br />
<br />
<span style="font-weight: bold;" class="mycode_b">public OnPlayerSpawn(playerid)</span> - Used after class selection, while spawning. This are the functions that will affect you when spawning.<br />
<br />
Additional information: <a href="http://wiki.sa-mp.com/wiki/OnPlayerSpawn" target="_blank" rel="noopener" class="mycode_url">https://sampwiki.blast.hk/wiki/OnPlayerSpawn</a><br />
<br />
Basic structure:<br />
<br />
<div class="codeblock"><div class="title">Code:</div><div class="body" dir="ltr"><code>public OnPlayerSpawn(playerid)<br />
{<br />
    // Code here.<br />
    return 1;<br />
}</code></div></div><br />
Example code:<br />
<br />
<div class="codeblock"><div class="title">Code:</div><div class="body" dir="ltr"><code>public OnPlayerSpawn(playerid)<br />
{<br />
   SendClientMessage(playerid, -1, "You spawned!"); // Sends a message.<br />
   return 1;<br />
}</code></div></div><br />
SendClientMessage is a function that sends a message to the player; it's structure is:<br />
<br />
<div class="codeblock"><div class="title">Code:</div><div class="body" dir="ltr"><code>playerid = ID of the player<br />
-1 = Color, -1 is white<br />
"You spawned!" = message</code></div></div><br />
More information about <a href="http://wiki.sa-mp.com/wiki/SendClientMessage" target="_blank" rel="noopener" class="mycode_url">SendClientMessage</a>.<br />
<br />
<span style="font-weight: bold;" class="mycode_b">public OnPlayerDeath(playerid)</span> - Called when you die. This function will affect you when you die.<br />
<br />
Additional information: <a href="http://wiki.sa-mp.com/wiki/OnPlayerDeath" target="_blank" rel="noopener" class="mycode_url">https://sampwiki.blast.hk/wiki/OnPlayerDeath</a><br />
<br />
Basic structure:<br />
<br />
<div class="codeblock"><div class="title">Code:</div><div class="body" dir="ltr"><code>public OnPlayerDeath(playerid)<br />
{<br />
    // Code here.<br />
    return 1;<br />
}</code></div></div><br />
Example code:<br />
<br />
<div class="codeblock"><div class="title">Code:</div><div class="body" dir="ltr"><code>public OnPlayerDeath(playerid)<br />
{<br />
   GameTextForPlayer(playerid, "Wasted", 5000, 2); // Screen message for player.<br />
   return 1;<br />
}</code></div></div><br />
GameTextForPlayer is a function that sends a screen message to the player; it's structure is:<br />
<br />
<div class="codeblock"><div class="title">Code:</div><div class="body" dir="ltr"><code>playerid = ID of the player<br />
"Wasted" = message<br />
5000 = time in milliseconds; in this case 5 seconds<br />
2 = type of message</code></div></div><br />
More information about <a href="http://wiki.sa-mp.com/wiki/GameTextForPlayer" target="_blank" rel="noopener" class="mycode_url">GameTextForPlayer</a>.<br />
<br />
<span style="font-weight: bold;" class="mycode_b">public OnPlayerDisconnect(playerid, reason)</span> - Called when a player disconnects.<br />
<br />
Additional information: <a href="http://wiki.sa-mp.com/wiki/OnPlayerDisconnect" target="_blank" rel="noopener" class="mycode_url">https://sampwiki.blast.hk/wiki/OnPlayerDisconnect</a><br />
<br />
Basic structure:<br />
<br />
<div class="codeblock"><div class="title">Code:</div><div class="body" dir="ltr"><code>public OnPlayerDisconnect(playerid, reason)<br />
{<br />
    // Code here.<br />
    return 1;<br />
}</code></div></div><br />
Example code:<br />
<br />
<div class="codeblock"><div class="title">Code:</div><div class="body" dir="ltr"><code>public OnPlayerDisconnect(playerid, reason)<br />
{<br />
    // Sending a message to all players that a player disconnected.<br />
    new String[64], // Variable assigned to a message. 64 is the number of characters that will be used in our message (maybe more).<br />
    Name[MAX_PLAYER_NAME];  // Variable assigned to the player's name; usually defined as MAX_PLAYER_NAME.<br />
    GetPlayerName(playerid, Name, MAX_PLAYER_NAME); // Getting the name of the player (Name) and it's length     which is MAX_PLAYER_NAME (default by SA-MP).<br />
    format(String, sizeof String, "%s left the server.", Name); // Applying a format to our message.<br />
    SendClientMessageToAll(-1, String); // Sending the message to all players; String is the format we used for this message.<br />
    return 1;<br />
}</code></div></div><br />
<span style="font-weight: bold;" class="mycode_b">public OnPlayerText(playerid)</span> - Called when a player sends a message (chat).<br />
<br />
Additional information: <a href="http://wiki.sa-mp.com/wiki/OnPlayerText" target="_blank" rel="noopener" class="mycode_url">https://sampwiki.blast.hk/wiki/OnPlayerText</a><br />
<br />
Basic structure:<br />
<br />
<div class="codeblock"><div class="title">Code:</div><div class="body" dir="ltr"><code>public OnPlayerText(playerid, text[])<br />
{<br />
    // Code here.<br />
    return 1;<br />
}</code></div></div><br />
Example code:<br />
<br />
<div class="codeblock"><div class="title">Code:</div><div class="body" dir="ltr"><code>public OnPlayerText(playerid, text[])<br />
{<br />
    new Name[MAX_PLAYER_NAME], String[175];<br />
    GetPlayerName(playerid, Name, sizeof(Name));<br />
    format(String, sizeof(String), "%s [%d]: {FFFFFF}%s", Name, playerid, text); // Assigning a format.<br />
    SendClientMessageToAll(GetPlayerColor(playerid), String); // Sending the message with GetPlayerColor, that is the actual color of the player.<br />
    return 0; // Ignoring the default text, ending the function.<br />
}</code></div></div><br />
This function is the format assigned to SendClientMessageToAll. When it is send, it will follow that format:<br />
<br />
<div class="codeblock"><div class="title">Code:</div><div class="body" dir="ltr"><code>format(String, sizeof(String), "%s [%d]: {FFFFFF}%s", Name, playerid, text); </code></div></div><br />
<div class="codeblock"><div class="title">Code:</div><div class="body" dir="ltr"><code>%s and %d are values assigned depending on the player.<br />
%s is a letter value (in this case the player's name and the text).<br />
%d is a numerical value (ID of the player).</code></div></div><br />
<div class="codeblock"><div class="title">Code:</div><div class="body" dir="ltr"><code>format(String, sizeof(String), "%s [%d]: {FFFFFF}%s", Name, playerid, text); </code></div></div><br />
Name, playerid &amp; text are the values assigned to %s, %d and %s.<br />
<br />
<span style="font-weight: bold;" class="mycode_b">public OnPlayerUpdate(playerid)</span> - Called everytime a client/player updates the server with their status.<br />
<br />
Additional information: <a href="http://wiki.sa-mp.com/wiki/OnPlayerUpdate" target="_blank" rel="noopener" class="mycode_url">https://sampwiki.blast.hk/wiki/OnPlayerUpdate</a><br />
<br />
Basic structure:<br />
<br />
<div class="codeblock"><div class="title">Code:</div><div class="body" dir="ltr"><code>public OnPlayerUpdate(playerid)<br />
{<br />
    // Code here.<br />
    return 1; // If it returns 0 the client will not be updated to others (like paused).<br />
}</code></div></div><br />
Example code:<br />
<br />
<div class="codeblock"><div class="title">Code:</div><div class="body" dir="ltr"><code>public OnPlayerUpdate(playerid)<br />
{<br />
    if(GetPlayerWeapon(playerid) == 38) return Kick(playerid); // Kicking the player if he is using minigun.<br />
    return 1;<br />
}</code></div></div><br />
"if" is used to determine that if something is happening, the server will execute that function.<br />
<br />
It would mean something like:<br />
<br />
If he is using minigun, kick him!<br />
<br />
* Note: using "if" in OnPlayerUpdate may cause lag, this is just an example.<br />
<br />
Using return means that the function ends there, with "Kick(playerid);". If you have other code down that function, it will not be executed.<br />
<br />
For example:<br />
<br />
<div class="codeblock"><div class="title">Code:</div><div class="body" dir="ltr"><code>public OnPlayerUpdate(playerid)<br />
{<br />
    if(GetPlayerWeapon(playerid) == 38) return Kick(playerid);<br />
    SendClientMessage(playerid, -1, "Updated!"); // Will not be executed if the player is using a minigun.<br />
    return 1;<br />
}</code></div></div><br />
<br />
<span style="color: Green;" class="mycode_color"><span style="font-family: Arial Black;" class="mycode_font"><span style="font-size: medium;" class="mycode_size">Functions:</span></span></span><br />
<br />
Basically, most functions names (native functions) describe what the function does; you can find many of them <a href="http://wiki.sa-mp.com/wiki/Category:Scripting_Functions" target="_blank" rel="noopener" class="mycode_url">here</a>.<br />
<br />
Some basic functions that might be used in a basic gamemode:<br />
<br />
<span style="font-weight: bold;" class="mycode_b">SetPlayerPos(playerid, X, Y, Z);</span> - Sets a player position (X, Y &amp; Z are the place where the player will be moved).<br />
<br />
Additional information: <a href="http://wiki.sa-mp.com/wiki/SetPlayerPos" target="_blank" rel="noopener" class="mycode_url">https://sampwiki.blast.hk/wiki/SetPlayerPos</a><br />
<br />
Example code:<br />
<br />
<div class="codeblock"><div class="title">Code:</div><div class="body" dir="ltr"><code>SetPlayerPos(playerid, 0.0, 0.0, 3.0); // Changes player's position to a farm.</code></div></div><br />
You can save your current position by using the command /Save inside the game (default command by SA-MP). After using this you must go to "\GTA San Andreas User Files\SAMP" and then open the file "savedpositions.txt". There you will find something like:<br />
<br />
<div class="codeblock"><div class="title">Code:</div><div class="body" dir="ltr"><code>AddPlayerClass(270, 700, 700, 5, 0, 0, 0, 0, 0, 0, 0);</code></div></div><br />
Then just copy the red values:<br />
<br />
<div class="codeblock"><div class="title">Code:</div><div class="body" dir="ltr"><code>AddPlayerClass(270, 700, 700, 5, 0, 0, 0, 0, 0, 0, 0);</code></div></div><br />
* Note: obviously our values are not red, it is just for the example.<br />
<br />
Then paste those values inside your SetPlayerPos function; like this:<br />
<br />
<div class="codeblock"><div class="title">Code:</div><div class="body" dir="ltr"><code>SetPlayerPos(playerid, 700, 700, 5);</code></div></div><br />
You can also use <a href="http://forum.sa-mp.com/showthread.php?t=540563" target="_blank" rel="noopener" class="mycode_url">this system</a> that will do it for you.<br />
<br />
<span style="font-weight: bold;" class="mycode_b">TextDrawCreate(X, Y, text[])</span> - Creates a textdraw (X &amp; Y are the coords in the screen and "text" is the text that will be shown).<br />
<br />
Additional information: <a href="http://wiki.sa-mp.com/wiki/TextDrawCreate" target="_blank" rel="noopener" class="mycode_url">https://sampwiki.blast.hk/wiki/TextDrawCreate</a><br />
<br />
Example of textdraw:<br />
<br />
<div class="codeblock"><div class="title">Code:</div><div class="body" dir="ltr"><code>new Text:Textdraw0;<br />
<br />
public OnGameModeInit()<br />
{<br />
    Textdraw0 = TextDrawCreate(240.0, 580.0, "SA-MP 0.3z"); // This creates a textdraw without any modification.<br />
    return 1;<br />
}</code></div></div><br />
An easy way to use this function is using a <a href="http://forum.sa-mp.com/showthread.php?t=376758" target="_blank" rel="noopener" class="mycode_url">Textdraw Creator</a>.<br />
<br />
To show a textdraw to a player you should use the function TextDrawShowForPlayer.<br />
<br />
Example of use (based on the last example):<br />
<br />
<div class="codeblock"><div class="title">Code:</div><div class="body" dir="ltr"><code>public OnPlayerConnect(playerid)<br />
{<br />
    TextDrawShowForPlayer(playerid, Textdraw0);<br />
}</code></div></div><br />
To hide a textdraw to a player you must use the function TextDrawHideForPlayer.<br />
<br />
Example:<br />
<br />
<div class="codeblock"><div class="title">Code:</div><div class="body" dir="ltr"><code>public OnPlayerDisconnect(playerid, reason)<br />
{<br />
    TextDrawHideForPlayer(playerid, Textdraw0);<br />
    return 1;<br />
}</code></div></div><br />
And to destroy a textdraw you use the function TextDrawDestroy.<br />
<br />
Example:<br />
<br />
<div class="codeblock"><div class="title">Code:</div><div class="body" dir="ltr"><code>public OnGameModeInit()<br />
{<br />
    TextDrawDestroy(Textdraw0);<br />
    return 1;<br />
}</code></div></div><br />
<br />
<span style="color: Green;" class="mycode_color"><span style="font-family: Arial Black;" class="mycode_font"><span style="font-size: medium;" class="mycode_size">Dialog Function (menus &amp; others):</span></span></span><br />
<br />
<span style="font-weight: bold;" class="mycode_b">ShowPlayerDialog(playerid, dialogid, style, caption[], info[], button1[], button2[]);</span> - Shows the player a dialog box.<br />
<br />
Additional information: <a href="http://wiki.sa-mp.com/wiki/ShowPlayerDialog" target="_blank" rel="noopener" class="mycode_url">https://sampwiki.blast.hk/wiki/ShowPlayerDialog</a><br />
<br />
* Note: Every dialog needs a unique "dialogid"; unless you do not use that ID inside the public OnDialogResponse (filterscripts and include dialogs must also use a unique dialogid).<br />
<br />
There are 4 types of dialog:<br />
<br />
<span style="font-weight: bold;" class="mycode_b">Message box style (sends a message to the player):</span><br />
<br />
<img src="http://wiki.sa-mp.com/wroot/images2/a/a1/Dialog_style_msgbox.png" loading="lazy"  alt="[Image: Dialog_style_msgbox.png]" class="mycode_img" /><br />
<br />
Example code (with cancel button):<br />
<br />
<div class="codeblock"><div class="title">Code:</div><div class="body" dir="ltr"><code>if(!strcmp(cmdtext, "/Help", true))<br />
{<br />
    new Menu[202]; // This is the number of characters you are using inside your dialog (all characters).<br />
    Menu[0]='&#92;0'; // Variable of the dialog, defined before.<br />
    strcat(Menu, "This is the text that will be shown inside your dialog. You can add another&#92;n", 77); // 77 is the number of characters in this line.<br />
    strcat(Menu, "line using the symbol shown in the upper line (n). You do not need to add&#92;n", 153); // 153 is the number of characters in the other lines plus this line.<br />
    strcat(Menu, "that symbol in the last line of your dialog box.", 202); // This are all the characters in your dialog box (202).<br />
    ShowPlayerDialog(playerid, 1, DIALOG_STYLE_MSGBOX, "Dialog Help", Menu, "Accept", "Cancel");<br />
    return 1;<br />
}</code></div></div><br />
Every lines has characters; the first line has 77 characters, so we put 77 at the end.<br />
<br />
In the second line we have to count the characters in that line plus the characters in all the lines before that line. In this case is 153; so we put 153 at the end.<br />
<br />
Example code (without cancel button):<br />
<br />
<div class="codeblock"><div class="title">Code:</div><div class="body" dir="ltr"><code>if(!strcmp(cmdtext, "/Help", true))<br />
{<br />
    new Menu[202];<br />
    Menu[0]='&#92;0';<br />
    strcat(Menu, "This is the text that will be shown inside your dialog. You can add another&#92;n", 77); // strcat  concatenates (joins together) our Menu string and our text.<br />
    strcat(Menu, "line using the symbol shown in the upper line (n). You do not need to add&#92;n", 153); // Every line uses strcat.<br />
    strcat(Menu, "that symbol in the last line of your dialog box.", 202);<br />
    ShowPlayerDialog(playerid, 1, DIALOG_STYLE_MSGBOX, "Dialog Help", Menu, "Accept", ""); // We leave the second botton just with "".<br />
    return 1;<br />
}</code></div></div><br />
The function "strcat"  concatenates (joins together) our Menu string and our text.<br />
<br />
* Note: You can use special websites to <a href="http://www.lettercount.com/" target="_blank" rel="noopener" class="mycode_url">count characters</a>.<br />
<br />
When counting characters you just count the characters inside the ""; for example:<br />
<br />
<div class="codeblock"><div class="title">Code:</div><div class="body" dir="ltr"><code>if(!strcmp(cmdtext, "/Help", true))<br />
{<br />
    new Menu[202];<br />
    Menu[0]='&#92;0';<br />
    strcat(Menu, "This is the text that will be shown inside your dialog. You can add another&#92;n", 77);<br />
    strcat(Menu, "line using the symbol shown in the upper line (n). You do not need to add&#92;n", 153);<br />
    strcat(Menu, "that symbol in the last line of your dialog box.", 202);<br />
    ShowPlayerDialog(playerid, 1, DIALOG_STYLE_MSGBOX, "Dialog Help", Menu, "Accept", "");<br />
    return 1;<br />
}</code></div></div><br />
The \n character also counts.<br />
<br />
We can also add a function when we press "Accept" or "Cancel" inside the public OnDialogResponse.<br />
<br />
For example:<br />
<br />
<div class="codeblock"><div class="title">Code:</div><div class="body" dir="ltr"><code>if(!strcmp(cmdtext, "/Help", true))<br />
{<br />
    new Menu[202];<br />
    Menu[0]='&#92;0';<br />
    strcat(Menu, "This is the text that will be shown inside your dialog. You can add another&#92;n", 77);<br />
    strcat(Menu, "line using the symbol shown in the upper line (n). You do not need to add&#92;n", 153);<br />
    strcat(Menu, "that symbol in the last line of your dialog box.", 202);<br />
    ShowPlayerDialog(playerid, 1, DIALOG_STYLE_MSGBOX, "Dialog Help", Menu, "Accept", "");<br />
    return 1;<br />
}</code></div></div><br />
We add a message function inside the public OnDialogResponse:<br />
<br />
<div class="codeblock"><div class="title">Code:</div><div class="body" dir="ltr"><code>public OnDialogResponse(playerid, dialogid, response, listitem, inputtext[])<br />
{<br />
    if(dialogid == 1) // Number 1 is the number of our dialog.<br />
    {<br />
        if(response) // If they clicked 'Accept'. <br />
        {<br />
            SendClientMessage(playerid, -1, "Thanks for reading!");<br />
        }<br />
    return 1; // Closing dialog response from dialog # 1!<br />
    }<br />
return 1; // Closing the public.<br />
}</code></div></div><br />
* Note: When using OnDialogResponse every dialog needs a number. In this case we used number 1:<br />
<br />
<div class="codeblock"><div class="title">Code:</div><div class="body" dir="ltr"><code>ShowPlayerDialog(playerid, 1, DIALOG_STYLE_MSGBOX, "Dialog Help", Menu, "Accept", "");<br />
    return 1;<br />
}</code></div></div><br />
<span style="font-weight: bold;" class="mycode_b">Input style (allows players to input text into the dialog):</span><br />
<br />
<img src="http://wiki.sa-mp.com/wroot/images2/d/d5/Dialog_style_input.png" loading="lazy"  alt="[Image: Dialog_style_input.png]" class="mycode_img" /><br />
<br />
Example code:<br />
<br />
<div class="codeblock"><div class="title">Code:</div><div class="body" dir="ltr"><code>ShowPlayerDialog(playerid, 2, DIALOG_STYLE_INPUT, "Text", "Write a text for all players!", "Accept", "Cancel");</code></div></div><br />
After creating our code we must create a function to that code; so we will use the public OnDialogResponse:<br />
<br />
Example code:<br />
<br />
<div class="codeblock"><div class="title">Code:</div><div class="body" dir="ltr"><code>public OnDialogResponse(playerid, dialogid, response, listitem, inputtext[])<br />
{<br />
    if(dialogid == 2)<br />
    {<br />
        if(!response) // If they clicked 'Cancel'. <br />
        {<br />
            SendClientMessage(playerid, -1, "Message canceled!");<br />
        }<br />
        else // If they pressed 'Accept'.<br />
        {<br />
            new String[200], Name[MAX_PLAYER_NAME]; // Defining variables.<br />
            GetPlayerName(playerid, Name, MAX_PLAYER_NAME); // Getting player's name.<br />
            format(String, sizeof(String), "[&lt;!&gt;] Announce from %s: %s", Name, inputtext); // Using a format for the message.<br />
            SendClientMessageToAll(-1, String);<br />
        }<br />
    return 1; // Closing dialog response from dialog # 2!<br />
    }<br />
return 1; // Closing the public.<br />
}</code></div></div><br />
<span style="font-weight: bold;" class="mycode_b">List style (menu, show the player a list of options):</span><br />
<br />
<img src="http://wiki.sa-mp.com/wroot/images2/b/b1/Dialog_style_list.png" loading="lazy"  alt="[Image: Dialog_style_list.png]" class="mycode_img" /><br />
<br />
Example code (creating a weapon menu):<br />
<br />
<div class="codeblock"><div class="title">Code:</div><div class="body" dir="ltr"><code>if(!strcmp(cmdtext, "/Weapon", true))<br />
{<br />
    ShowPlayerDialog(playerid, 3, DIALOG_STYLE_LIST, "Weapons", "Desert Eagle&#92;n AK-47&#92;n Combat Shotgun", "Select", "Close");<br />
    return 1;<br />
}</code></div></div><br />
<div class="codeblock"><div class="title">Code:</div><div class="body" dir="ltr"><code>"Weapons" = Title of the list.<br />
"Desert Eagle&#92;n AK-47&#92;n Combat Shotgun" = List.<br />
"Select" = Choose a weapon.<br />
"Close" = Close the list.</code></div></div><br />
The \n symbol is used to separate the elements of the list.<br />
<br />
To give the weapon we use the public OnDialogResponse:<br />
<br />
<div class="codeblock"><div class="title">Code:</div><div class="body" dir="ltr"><code>public OnDialogResponse(playerid, dialogid, response, listitem, inputtext[])<br />
{<br />
    if(dialogid == 3)<br />
    {<br />
        if(response) // If they clicked 'Select' or double-clicked a weapon.<br />
        {<br />
            switch(listitem) // We create a switch to list all the items; each case is a item from our dialog.<br />
            {<br />
                case 0:<br />
                {<br />
                    GivePlayerWeapon(playerid, 24, 14); // Give them a desert eagle with 14 bullets.<br />
                }<br />
                case 1:<br />
                {<br />
                    GivePlayerWeapon(playerid, 30, 120); // Give them an AK-47 with 120 bullets.<br />
                }<br />
                case 2:<br />
                {<br />
                    GivePlayerWeapon(playerid, 27, 28); // Give them a Combat Shotgun with 28 bullets.<br />
                }<br />
            }<br />
        }<br />
        return 1; // Ending the dialog #3.<br />
    }<br />
    return 1;<br />
}</code></div></div><br />
Structure of the function GivePlayerWeapon:<br />
<br />
<div class="codeblock"><div class="title">Code:</div><div class="body" dir="ltr"><code>GivePlayerWeapon(playerid, weaponid, ammo);</code></div></div><br />
Additional information about this function: <a href="http://wiki.sa-mp.com/wiki/GivePlayerWeapon" target="_blank" rel="noopener" class="mycode_url">https://sampwiki.blast.hk/wiki/GivePlayerWeapon</a><br />
<br />
<span style="font-weight: bold;" class="mycode_b">Password style (allows players to input text into the dialog without revealing it):</span><br />
<br />
<img src="http://wiki.sa-mp.com/wroot/images2/f/f8/Dialog_style_password.png" loading="lazy"  alt="[Image: Dialog_style_password.png]" class="mycode_img" /><br />
<br />
It has the same structure of "Input style"; mostly used in account systems (it is a bit advanced for this tutorial).<br />
<br />
If you want to create an account system you can read this tutorials:<br />
<br />
<a href="http://forum.sa-mp.com/showthread.php?t=273088" target="_blank" rel="noopener" class="mycode_url">Kush account system guide (Y_INI).</a><br />
<a href="http://forum.sa-mp.com/showthread.php?t=278188" target="_blank" rel="noopener" class="mycode_url">Lorenc_ account system guide (SQLite using rBits).</a><br />
<br />
<br />
<br />
<br />
<br />
<span style="color: DarkOrange;" class="mycode_color"><span style="font-family: Arial Black;" class="mycode_font"><span style="font-size: medium;" class="mycode_size">CREATING AND REMOVING OBJECTS:</span></span></span><br />
<br />
There are many programs to create maps for your server; the most known are:<br />
<br />
<a href="http://forum.sa-mp.com/showthread.php?t=282801" target="_blank" rel="noopener" class="mycode_url">Map editor 1</a><br />
<a href="http://forum.sa-mp.com/showthread.php?t=139409" target="_blank" rel="noopener" class="mycode_url">Map editor 2</a><br />
<a href="http://www.mtasa.com/" target="_blank" rel="noopener" class="mycode_url">MTA map editor</a><br />
<br />
Game Object ID List: <a href="http://wiki.sa-mp.com/wiki/Model_ID" target="_blank" rel="noopener" class="mycode_url">https://sampwiki.blast.hk/wiki/Model_ID</a><br />
<br />
<br />
<span style="color: Green;" class="mycode_color"><span style="font-family: Arial Black;" class="mycode_font"><span style="font-size: medium;" class="mycode_size">Map editor (1 &amp; 2):</span></span></span><br />
<br />
Both have the same structure; so this is an explanation for both.<br />
<br />
<span style="font-weight: bold;" class="mycode_b">Start using it:</span><br />
<br />
- After dowloading it, you must open the file "editor.exe" and press the button "LOAD".<br />
<br />
- It will load the game map (GTA-SA); you can move your camera by moving your mouse while clicking the right mouse button. You can move around the map with the mouse scroll or with the keys "W, A, S &amp; D" while pressing the right mouse button.<br />
<br />
<span style="font-weight: bold;" class="mycode_b">Creating objects:</span><br />
<br />
- Move to the place where you want to add your mapping, then press the button "Objects" inside the menu (the menu on the right of the window).<br />
<br />
- Press "Add" and search the object you want to add (ID or name); then press double click on it and press the button "Add".<br />
<br />
- After doing it press on the object shown on the right of the window and after doing it press "insert".<br />
<br />
- You can move the object by using the "Movement" panel.<br />
<br />
- After mapping you can get the code and add it to your GM by pressing "Show Code". Copy the code and paste it inside the public OnGameModeInit.<br />
<br />
Example code:<br />
<br />
<div class="codeblock"><div class="title">Code:</div><div class="body" dir="ltr"><code>public OnGameModeInit()<br />
{<br />
    CreateObject(2587, 2001.195679, 1547.113892, 14.283400, 0.0, 0.0, 96.0); // Object will render at it's default distance.<br />
    return 1;<br />
}</code></div></div><br />
Additional information: <a href="http://wiki.sa-mp.com/wiki/CreateObject" target="_blank" rel="noopener" class="mycode_url">https://sampwiki.blast.hk/wiki/CreateObject</a><br />
<br />
<span style="font-weight: bold;" class="mycode_b">Removing objects:</span><br />
<br />
- Move around the map and search the object you want to delete.<br />
<br />
- Click on it and press "Supr".<br />
<br />
- After deleting the object press "Show Code". Paste the code inside the public OnPlayerConnect.<br />
<br />
Example code:<br />
<br />
<div class="codeblock"><div class="title">Code:</div><div class="body" dir="ltr"><code>public OnPlayerConnect(playerid)<br />
{<br />
    RemoveBuildingForPlayer(playerid, 3782, 1803.0859, -1294.2031, 34.3438, 0.25);<br />
    return 1;<br />
}</code></div></div><br />
Additional information: <a href="http://wiki.sa-mp.com/wiki/RemoveBuildingForPlayer" target="_blank" rel="noopener" class="mycode_url">https://sampwiki.blast.hk/wiki/RemoveBuildingForPlayer</a><br />
<br />
<br />
<span style="color: Green;" class="mycode_color"><span style="font-family: Arial Black;" class="mycode_font"><span style="font-size: medium;" class="mycode_size">MTA map editor:</span></span></span><br />
<br />
This program is easier than the other editor.<br />
<br />
You can download it <a href="http://www.mtasa.com/" target="_blank" rel="noopener" class="mycode_url">here</a>.<br />
<br />
* Note: It is able to create objects but not to delete them from the original map.<br />
<br />
<span style="font-weight: bold;" class="mycode_b">Start using it:</span><br />
<br />
- After downloading it, open the file MTA.exe<br />
<br />
- Click on the map editor.<br />
<br />
- To move around the map use the camera and the keys "W, A, S &amp; D".<br />
<br />
- To create objects press "F" and click on the cube object (in the bottom):<br />
<br />
<img src="http://i.imgur.com/uwz65v3.jpg" loading="lazy"  alt="[Image: uwz65v3.jpg]" class="mycode_img" /><br />
<br />
- Search or select your object and place it on the map.<br />
<br />
* Note: You can move it down and up by clicking on the object and using the keys "Page Down (pg dn)" and "Page Up (pg up)". To rotate it use "Shift + Scroll". To change it's angle use "CTRL + Page Down/Page Up" or "CTRL + Arrow keys".<br />
<br />
- To save your map press the save button:<br />
<br />
<img src="http://i.imgur.com/bROE6FQ.jpg" loading="lazy"  alt="[Image: bROE6FQ.jpg]" class="mycode_img" /><br />
<br />
- To get the object code you can use a MTA converter:<br />
<br />
<a href="http://gtamap.delux-host.com/converter/" target="_blank" rel="noopener" class="mycode_url">Delux GTA Map Converter v2</a> (2015)<br />
<br />
<span style="font-weight: bold;" class="mycode_b">Delux GTA Map Converter v2:</span><br />
<br />
- Instead of <span style="font-weight: bold;" class="mycode_b">IPL file format</span> choose <span style="font-weight: bold;" class="mycode_b">PAWN Code for SA-MP</span>. Search your map inside your MTA folder; it is usually inside \mods\deathmatch\resources.<br />
<br />
- Copy your code.<br />
<br />
<br />
<span style="color: Green;" class="mycode_color"><span style="font-family: Arial Black;" class="mycode_font"><span style="font-size: medium;" class="mycode_size">Creating Objects:</span></span></span><br />
<br />
After having the code of the object(s), you must add it inside the public OnGameModeInit or OnFilterScriptInit.<br />
<br />
Example code:<br />
<br />
<div class="codeblock"><div class="title">Code:</div><div class="body" dir="ltr"><code>public OnGameModeInit()<br />
{<br />
    CreateObject(2587, 2001.195679, 1547.113892, 14.283400, 0.0, 0.0, 96.0); // Object will render at it's default distance.<br />
    CreateObject(2587, 2001.195679, 1547.113892, 14.283400, 0.0, 0.0, 96.0, 250.0); // Object will render at 250.0 units (visible at 250 units).<br />
    return 1;<br />
}</code></div></div><br />
But SA-MP has an object limit of 1000 objects. If you want to optimize your script or you want to add more objects you should use the plugin <a href="http://forum.sa-mp.com/showthread.php?t=102865" target="_blank" rel="noopener" class="mycode_url">Streamer</a>.<br />
<br />
<span style="font-weight: bold;" class="mycode_b">Streamer installation:</span><br />
<br />
- Dowload it from the streamer plugin thread.<br />
<br />
- After downloading it, paste the file "streamer.so" or "streamer.dll" inside the plugins folder (or just paste the plugins folder, the download one, inside your server folder).<br />
<br />
- Copy the include "streamer.inc" inside your pawno includes folder.<br />
<br />
- Edit the file "server.cfg" inside your server folder and add this line if you are using Windows:<br />
<br />
<div class="codeblock"><div class="title">Code:</div><div class="body" dir="ltr"><code>plugins streamer.dll</code></div></div><br />
If you are using Linux add:<br />
<br />
<div class="codeblock"><div class="title">Code:</div><div class="body" dir="ltr"><code>plugins streamer.so</code></div></div><br />
- Copy this code down all the includes (include example: #include &lt;a_samp&gt;), inside every script that uses streamer:<br />
<br />
<div class="codeblock"><div class="title">Code:</div><div class="body" dir="ltr"><code>#include &lt;streamer&gt;<br />
<br />
#define STREAMER_TYPE_OBJECT (0)<br />
#define STREAMER_TYPE_PICKUP (1)<br />
#define STREAMER_TYPE_CP (2)<br />
#define STREAMER_TYPE_RACE_CP (3)<br />
#define STREAMER_TYPE_MAP_ICON (4)<br />
#define STREAMER_TYPE_3D_TEXT_LABEL (5)<br />
#define STREAMER_TYPE_AREA (6)<br />
<br />
#define STREAMER_AREA_TYPE_CIRCLE (0)<br />
#define STREAMER_AREA_TYPE_CYLINDER (1)<br />
#define STREAMER_AREA_TYPE_SPHERE (2)<br />
#define STREAMER_AREA_TYPE_RECTANGLE (3)<br />
#define STREAMER_AREA_TYPE_CUBOID (4)<br />
#define STREAMER_AREA_TYPE_POLYGON (5)<br />
<br />
#define STREAMER_OBJECT_TYPE_GLOBAL (0)<br />
#define STREAMER_OBJECT_TYPE_PLAYER (1)<br />
#define STREAMER_OBJECT_TYPE_DYNAMIC (2)<br />
<br />
enum<br />
{<br />
    E_STREAMER_ATTACHED_OBJECT,<br />
    E_STREAMER_ATTACHED_PLAYER,<br />
    E_STREAMER_ATTACHED_VEHICLE,<br />
    E_STREAMER_ATTACH_OFFSET_X,<br />
    E_STREAMER_ATTACH_OFFSET_Y,<br />
    E_STREAMER_ATTACH_OFFSET_Z,<br />
    E_STREAMER_ATTACH_R_X,<br />
    E_STREAMER_ATTACH_R_Y,<br />
    E_STREAMER_ATTACH_R_Z,<br />
    E_STREAMER_ATTACH_X,<br />
    E_STREAMER_ATTACH_Y,<br />
    E_STREAMER_ATTACH_Z,<br />
    E_STREAMER_COLOR,<br />
    E_STREAMER_DRAW_DISTANCE,<br />
    E_STREAMER_EXTRA_ID,<br />
    E_STREAMER_INTERIOR_ID,<br />
    E_STREAMER_MAX_X,<br />
    E_STREAMER_MAX_Y,<br />
    E_STREAMER_MAX_Z,<br />
    E_STREAMER_MIN_X,<br />
    E_STREAMER_MIN_Y,<br />
    E_STREAMER_MIN_Z,<br />
    E_STREAMER_MODEL_ID,<br />
    E_STREAMER_MOVE_R_X,<br />
    E_STREAMER_MOVE_R_Y,<br />
    E_STREAMER_MOVE_R_Z,<br />
    E_STREAMER_MOVE_SPEED,<br />
    E_STREAMER_MOVE_X,<br />
    E_STREAMER_MOVE_Y,<br />
    E_STREAMER_MOVE_Z,<br />
    E_STREAMER_NEXT_X,<br />
    E_STREAMER_NEXT_Y,<br />
    E_STREAMER_NEXT_Z,<br />
    E_STREAMER_PLAYER_ID,<br />
    E_STREAMER_R_X,<br />
    E_STREAMER_R_Y,<br />
    E_STREAMER_R_Z,<br />
    E_STREAMER_SIZE,<br />
    E_STREAMER_STREAM_DISTANCE,<br />
    E_STREAMER_STYLE,<br />
    E_STREAMER_TEST_LOS,<br />
    E_STREAMER_TYPE,<br />
    E_STREAMER_WORLD_ID,<br />
    E_STREAMER_X,<br />
    E_STREAMER_Y,<br />
    E_STREAMER_Z<br />
}</code></div></div><br />
* Note: This code is based on the Streamer plugin update from 2015 (v2.7.4).<br />
<br />
- After doing this edit the object code you have. Instead of using "CreateObject" use "CreateDynamicObject".<br />
<br />
Example:<br />
<br />
Instead of using a normal code...<br />
<br />
<div class="codeblock"><div class="title">Code:</div><div class="body" dir="ltr"><code>public OnGameModeInit()<br />
{<br />
    CreateObject(2587, 2001.195679, 1547.113892, 14.283400, 0.0, 0.0, 96.0);<br />
    return 1;<br />
}</code></div></div><br />
Use this:<br />
<br />
<div class="codeblock"><div class="title">Code:</div><div class="body" dir="ltr"><code>public OnGameModeInit()<br />
{<br />
    CreateDynamicObject(2587, 2001.195679, 1547.113892, 14.283400, 0.0, 0.0, 96.0);<br />
    return 1;<br />
}</code></div></div><br />
* Note: You can edit your "CreateObject" code faster by using a ".txt" file. Paste the code inside of it; press "CTRL + R", search "CreateObject" and replace it with "CreateDynamicObject" (use this if your map is very big).<br />
<br />
- After doing this open the PWN file where you want to add the objects (usually inside the gamemode) and paste your code.<br />
<br />
Example code:<br />
<br />
<div class="codeblock"><div class="title">Code:</div><div class="body" dir="ltr"><code>public OnGameModeInit()<br />
{<br />
    CreateDynamicObject(2587, 2001.195679, 1547.113892, 14.283400, 0.0, 0.0, 96.0);<br />
    return 1;<br />
}</code></div></div><br />
Additional information about <a href="http://forum.sa-mp.com/showthread.php?t=102865" target="_blank" rel="noopener" class="mycode_url">Streamer plugin</a>.<br />
<br />
<br />
<br />
<br />
<span style="color: DarkOrange;" class="mycode_color"><span style="font-family: Arial Black;" class="mycode_font"><span style="font-size: medium;" class="mycode_size">START PRACTICING:</span></span></span><br />
<br />
Now you know this, you can practice by editing other scripts or you can try creating your own script.<br />
<br />
A good way of starting is editing other gamemodes!<br />
<br />
If there is any mistake in this guide or something should be added, just post it.<br />
<br />
* Note: this is an small guide compared to all the basic information of SA-MP that a new scripter should know; this guide will be updated according to post suggestions on this thread.<br />
<br />
<br />
<br />
<br />
Guide credits: Ygzeb (David Talledo)<br />
<br />
Special thanks to:<br />
<br />
Y_Less for a correction in some information presented in this guide and Kwarde that helped to update some links that were broken (2021) :)<br />
<br />
Addon (2021) .- Some links or images may just not work now or in the future, they may be fixed or not. However, I hope this guide will still help people.]]></description>
			<content:encoded><![CDATA[<div style="text-align: center;" class="mycode_align"><span style="color: Sienna;" class="mycode_color"><span style="font-family: Arial Black;" class="mycode_font"><span style="font-size: large;" class="mycode_size">BASIC SA-MP  &amp; PAWN GUIDE</span></span></span></div>
<br />
<div style="text-align: center;" class="mycode_align"><img src="http://i.imgur.com/YPOK9Or.png" loading="lazy"  alt="[Image: YPOK9Or.png]" class="mycode_img" /></div>
<br />
<span style="color: DarkOrange;" class="mycode_color"><span style="font-family: Arial Black;" class="mycode_font"><span style="font-size: medium;" class="mycode_size">INTRO:</span></span></span><br />
<br />
This guide is based on other tutorials and on my own experience. It is created specially for new scripters and people who want to learn SA-MP Pawn scripting, it explains just basic scripting and how to start.<br />
<br />
* Note: this guide is based on the one I made for SA-MP forum in the first months of 2015; if you read this later, some elements may have changed or updated.<br />
<br />
Based on:<br />
<br />
<a href="http://forum.sa-mp.com/showthread.php?t=317336" target="_blank" rel="noopener" class="mycode_url">Nicholas tutorial</a><br />
<a href="http://forum.sa-mp.com/showthread.php?t=177490" target="_blank" rel="noopener" class="mycode_url">Kwarde tutorial</a><br />
<a href="http://wiki.sa-mp.com/" target="_blank" rel="noopener" class="mycode_url">Wiki SA-MP</a><br />
<br />
Own knowledge.<br />
<br />
<br />
<br />
<span style="color: DarkOrange;" class="mycode_color"><span style="font-family: Arial Black;" class="mycode_font"><span style="font-size: medium;" class="mycode_size">INDEX:</span></span></span><br />
<br />
<span style="font-weight: bold;" class="mycode_b">STARTING</span><br />
   <br />
<span style="font-style: italic;" class="mycode_i"><span style="font-weight: bold;" class="mycode_b">Explaining each file (basic ones)</span></span><br />
<br />
scriptfiles<br />
plugins<br />
pawno<br />
npcmodes<br />
include<br />
gamemodes<br />
filterscripts<br />
announce.exe<br />
samp-npc.exe<br />
samp-server.exe<br />
server.cfg<br />
<br />
<span style="font-weight: bold;" class="mycode_b">CONFIGURATION</span><br />
<br />
<span style="font-weight: bold;" class="mycode_b">PAWN SCRIPTING</span><br />
   <br />
<span style="font-style: italic;" class="mycode_i"><span style="font-weight: bold;" class="mycode_b">Publics</span></span><br />
<br />
public OnGameModeInit()<br />
public OnGameModeExit()<br />
public OnPlayerRequestClass(playerid, classid)<br />
public OnPlayerConnect(playerid)<br />
public OnPlayerSpawn(playerid)<br />
public OnPlayerDeath(playerid)<br />
public OnPlayerDisconnect(playerid, reason)<br />
public OnPlayerText(playerid)<br />
public OnPlayerUpdate(playerid)<br />
<br />
<span style="font-style: italic;" class="mycode_i"><span style="font-weight: bold;" class="mycode_b">Functions</span></span><br />
<br />
SetPlayerPos(playerid, X, Y, Z);<br />
TextDrawCreate(X, Y, text[])<br />
<br />
<span style="font-style: italic;" class="mycode_i"><span style="font-weight: bold;" class="mycode_b">Dialog Function (menus &amp; others)</span></span><br />
<br />
ShowPlayerDialog(playerid, dialogid, style, caption[], info[], button1[], button2[]);<br />
Message box style (sends a message to the player)<br />
Input style (allows players to input text into the dialog)<br />
List style (menu, show the player a list of options)<br />
Password style (allows players to input text into the dialog without revealing it)<br />
<br />
<span style="font-weight: bold;" class="mycode_b">CREATING AND REMOVING OBJECTS</span><br />
<br />
<span style="font-style: italic;" class="mycode_i"><span style="font-weight: bold;" class="mycode_b">Map editor (1 &amp; 2)</span></span><br />
<br />
Start using it<br />
Creating objects<br />
Removing objects<br />
<br />
<span style="font-style: italic;" class="mycode_i"><span style="font-weight: bold;" class="mycode_b">MTA map editor</span></span><br />
<br />
Start using it<br />
Delux GTA Map Converter v2<br />
<br />
<span style="font-style: italic;" class="mycode_i"><span style="font-weight: bold;" class="mycode_b">Creating Objects</span></span><br />
<br />
Streamer installation<br />
<br />
<br />
<br />
<span style="font-weight: bold;" class="mycode_b">START PRACTICING</span><br />
<br />
<br />
<br />
<span style="color: DarkOrange;" class="mycode_color"><span style="font-family: Arial Black;" class="mycode_font"><span style="font-size: medium;" class="mycode_size">STARTING:</span></span></span><br />
<br />
First we must download the <a href="http://www.sa-mp.com/download.php" target="_blank" rel="noopener" class="mycode_url">SA-MP Windows Server</a> from SA-MP.com<br />
<br />
After doing this we will open the files contained in the download and after decompressing it, we will see our server files &amp; folders...<br />
<br />
Basic files &amp; folders:<br />
<br />
scriptfiles, plugins, pawno, npcmodes, include, gamemodes, filterscripts, announce.exe, samp-npc.exe, samp-server.exe &amp; server.cfg<br />
<br />
Other files:<br />
<br />
Text files that include terms &amp; a configuration guide (samp-license.txt &amp; server-readme.txt respectively).<br />
<br />
<br />
<span style="color: Green;" class="mycode_color"><span style="font-family: Arial Black;" class="mycode_font"><span style="font-size: medium;" class="mycode_size">Explaining each file (basic ones):</span></span></span><br />
<br />
scriptfiles: this folder contains information called inside your script or logs created by your script, usually used as a database.<br />
<br />
plugins: this folder contains additional codes that give more options in SA-MP programming, usually programmed in other languages. This guide will not give detailed information about plugins as they are more advanced.<br />
<br />
pawno: contains the basic program to start scripting in SA-MP; also has the "include" folder that contains basic includes to start our script (SA-MP basic functions). We can also add our own includes and add them to our script.<br />
<br />
npcmodes: this contains information about NPCs (script &amp; rec); this guide will not give detailed information about NPCs as they are more advanced.<br />
<br />
include: this contains codes that can be included inside your script.<br />
<br />
gamemodes: contains basic gamemodes and we must place our gamemode if we create one.<br />
<br />
filterscripts: contains additional codes apart from your gamemode, not included in it and can be called by using rcon commands.<br />
<br />
announce.exe: this will allow us to show our server on Masterlist.<br />
<br />
samp-npc.exe: this will allow us to use NPCs.<br />
<br />
samp-server.exe: we start our server with this.<br />
<br />
server.cfg: our server configuration.<br />
<br />
<br />
<br />
<br />
<span style="color: DarkOrange;" class="mycode_color"><span style="font-family: Arial Black;" class="mycode_font"><span style="font-size: medium;" class="mycode_size">CONFIGURATION:</span></span></span><br />
<br />
First we must open the file "server.cfg" and edit our server configuration.<br />
<br />
After opening it, you will find:<br />
<br />
<div class="codeblock"><div class="title">Code:</div><div class="body" dir="ltr"><code>echo Executing Server Config...<br />
lanmode 0<br />
rcon_password changeme<br />
maxplayers 50<br />
port 7777<br />
hostname SA-MP 0.3 Server<br />
gamemode0 grandlarc 1<br />
filterscripts gl_actions gl_realtime gl_property gl_mapicon ls_mall ls_elevator attachments skinchanger vspawner<br />
announce 0<br />
query 1<br />
chatlogging 0<br />
weburl www.sa-mp.com<br />
onfoot_rate 40<br />
incar_rate 40<br />
weapon_rate 40<br />
stream_distance 300.0<br />
stream_rate 1000<br />
maxnpc 0<br />
logtimeformat [%H:%M:%S]</code></div></div><br />
You can edit your configuration based on this:<br />
<br />
<div class="codeblock"><div class="title">Code:</div><div class="body" dir="ltr"><code>echo Executing Server Config...<br />
lanmode 0 (lan mode on "1" or off "0")<br />
rcon_password changeme (the rcon password you will use "/Rcon login"; you must edit this) <br />
maxplayers 50 (amount of slots available for players)<br />
port 7777 (the port you will use, for example: 127.0.0.1:7777)<br />
hostname SA-MP 0.3 server (the name of your server)<br />
gamemode0 grandlarc1 (name of the gamemode you will use, you can add a gamemode if you create/download one)<br />
filterscripts gl_actions gl_realtime gl_property gl_mapicon ls_mall ls_elevator attachments skinchanger vspawner (filterscripts that will be used)<br />
announce 0 (server visible on Masterlist; "1" to show it and "0" to hide it)<br />
query 1 (information of the server visible "1", "0" will disable your server information to other players)<br />
chatlogging 0 (save chat logs in server_log.txt "1", not saving it "0")<br />
weburl www.sa-mp.com (website of your server)<br />
onfoot_rate 40 (we will not explain this in this tutorial, advanced)<br />
incar_rate 40 (we will not explain this in this tutorial, advanced)<br />
weapon_rate 40 (we will not explain this in this tutorial, advanced)<br />
stream_distance 300.0 (we will not explain this in this tutorial, advanced)<br />
stream_rate 1000 (we will not explain this in this tutorial, advanced)<br />
maxnpc 0 (number of NPCs that can join your server)<br />
logtimeformat [%H:%M:%S]</code></div></div><br />
You can also read more information about <a href="http://wiki.sa-mp.com/wiki/Server.cfg" target="_blank" rel="noopener" class="mycode_url">server.cfg configuration</a>.<br />
<br />
Configuration example (this guide is based on this configuration):<br />
<br />
<div class="codeblock"><div class="title">Code:</div><div class="body" dir="ltr"><code>echo Executing Server Config...<br />
lanmode 0<br />
rcon_password Pawn<br />
maxplayers 100<br />
port 7777<br />
hostname SA-MP Server [0.3z]<br />
gamemode0 Basic 1<br />
filterscripts gl_actions gl_realtime gl_property gl_mapicon ls_mall ls_elevator attachments skinchanger vspawner<br />
announce 1<br />
query 1<br />
chatlogging 1<br />
weburl www.sa-mp.com<br />
onfoot_rate 40<br />
incar_rate 40<br />
weapon_rate 40<br />
stream_distance 300.0<br />
stream_rate 1000<br />
maxnpc 0<br />
logtimeformat [%H:%M:%S]</code></div></div><br />
<br />
<br />
<span style="color: DarkOrange;" class="mycode_color"><span style="font-family: Arial Black;" class="mycode_font"><span style="font-size: medium;" class="mycode_size">PAWN SCRIPTING:</span></span></span><br />
<br />
After changing our configuration we will start scripting our gamemode.<br />
<br />
In this case we will use a basic mode you can download <a href="http://www.mediafire.com/download/pp1n47wuc4n49w7/Basic.pwn" target="_blank" rel="noopener" class="mycode_url">here</a>.<br />
<br />
Put it inside the "gamemodes" folder.<br />
<br />
After doing this open the pawno folder inside your server and open the file "pawno.exe".<br />
<br />
Press "File/Open" (or just press CTRL + O) and open our basic mode, placed inside the gamemodes folder.<br />
<br />
Inside we have this:<br />
<br />
<div class="codeblock"><div class="title">Code:</div><div class="body" dir="ltr"><code>#include &lt;a_samp&gt;</code></div></div><br />
This is the basic SA-MP include, it will be included in every script you create in SA-MP.<br />
<br />
This message will be shown in console when we open our server with samp-server.exe:<br />
<br />
<div class="codeblock"><div class="title">Code:</div><div class="body" dir="ltr"><code>main()<br />
{<br />
print("Blank mode developed by Ygzeb.");<br />
}</code></div></div><br />
The blue text is the message that will be shown.<br />
<br />
You can edit the text that you want to be shown in console when your gamemode starts, just editing the blue text; for example:<br />
<br />
<div class="codeblock"><div class="title">Code:</div><div class="body" dir="ltr"><code>main()<br />
{<br />
print("My first mode!");<br />
}</code></div></div><br />
* Note: Every code must have opening and closing braces to start and end the function (all codes).<br />
<br />
Example:<br />
<br />
Opening braces = <span style="color: Red;" class="mycode_color">Red</span><br />
Closing braces = <span style="color: Lime;" class="mycode_color">Green</span><br />
<br />
main()<br />
<span style="color: #ff3333;" class="mycode_color">{</span><br />
print("My first mode!");<br />
<span style="color: #33cc33;" class="mycode_color">}</span><br />
<br />
<br />
<span style="font-weight: bold;" class="mycode_b">* Note: It is very important to press F5 after editing or creating a script! This will update the AMX file and all changes will be saved ("if there is not mistake", but in special cases may happen programming mistakes that will not figure in the compilation and will affect your server). If everything is okay you will see something like:</span><br />
<br />
<img src="http://i.imgur.com/Gobeslv.jpg" loading="lazy"  alt="[Image: Gobeslv.jpg]" class="mycode_img" /><br />
<br />
If not there is a mistake and you need to fix it.<br />
<br />
<br />
<span style="color: Green;" class="mycode_color"><span style="font-family: Arial Black;" class="mycode_font"><span style="font-size: medium;" class="mycode_size">Publics:</span></span></span><br />
<br />
Publics are basic functions called while your server is running. SA-MP counts with basic publics called in most gamemodes. Most basic public names describe when the public is executed.<br />
<br />
Some basic publics are called in special moments, for example while spawning; you can add a function to that moment.<br />
<br />
Example; if we want to set players health to 50 when spawning it would be something like:<br />
<br />
<div class="codeblock"><div class="title">Code:</div><div class="body" dir="ltr"><code>public OnPlayerSpawn(playerid)<br />
{<br />
   SetPlayerHealth(playerid, 50);<br />
   return 1;<br />
}</code></div></div><br />
* Note: we can not use identical publics in the same script; for example two OnPlayerSpawn publics; if we want to add an extra function we must add it inside the same public or inside a filterscript. Base on the last example, we will add a message while spawning:<br />
<br />
<div class="codeblock"><div class="title">Code:</div><div class="body" dir="ltr"><code>public OnPlayerSpawn(playerid)<br />
{<br />
   SetPlayerHealth(playerid, 50);<br />
   SendClientMessage(playerid, -1, "You spawned!"); // Function added.<br />
   return 1;<br />
}</code></div></div><br />
Here are some basic publics that are mostly used by scripters:<br />
<br />
<span style="font-weight: bold;" class="mycode_b">public OnGameModeInit()</span> - Called when your mode starts.<br />
<br />
Additional information: <a href="http://wiki.sa-mp.com/wiki/OnGameModeInit" target="_blank" rel="noopener" class="mycode_url">https://sampwiki.blast.hk/wiki/OnGameModeInit</a><br />
<br />
Basic structure:<br />
<br />
<div class="codeblock"><div class="title">Code:</div><div class="body" dir="ltr"><code>public OnGameModeInit()<br />
{<br />
    // Code here.<br />
    return 1;<br />
}</code></div></div><br />
Example code:<br />
<br />
<div class="codeblock"><div class="title">Code:</div><div class="body" dir="ltr"><code>public OnGameModeInit()<br />
{<br />
    UsePlayerPedAnims(); // Allow players to run like CJ.<br />
    SetGameModeText("Blank"); // Name of your mode; will be show in SA-MP list.<br />
    AddPlayerClass(115, 1958.3783, 1343.1572, 15.3746, 269.1425, 0, 0, 0, 0, 0, 0);<br />
    AddPlayerClass(122, 1958.3783, 1343.1572, 15.3746, 269.1425, 0, 0, 0, 0, 0, 0);<br />
    AddPlayerClass(166, 1958.3783, 1343.1572, 15.3746, 269.1425, 0, 0, 0, 0, 0, 0);<br />
    AddPlayerClass(270, 1958.3783, 1343.1572, 15.3746, 269.1425, 0, 0, 0, 0, 0, 0);<br />
    return 1;<br />
}</code></div></div><br />
AddPlayerClass is a function that adds skin options to class selection; for example if we want to add Sweet's Skin we should add this to our code:<br />
<br />
<div class="codeblock"><div class="title">Code:</div><div class="body" dir="ltr"><code>AddPlayerClass(270, 1958.3783, 1343.1572, 15.3746, 269.1425, 0, 0, 0, 0, 0, 0);</code></div></div><br />
The number "270" is the skin ID of Sweet.<br />
<br />
<span style="font-weight: bold;" class="mycode_b">public OnGameModeExit()</span> - Called when your mode ends; it is not necessary in all scripts (optional in most cases).<br />
<br />
Additional information: <a href="http://wiki.sa-mp.com/wiki/OnGameModeExit" target="_blank" rel="noopener" class="mycode_url">https://sampwiki.blast.hk/wiki/OnGameModeExit</a><br />
<br />
Basic structure:<br />
<br />
<div class="codeblock"><div class="title">Code:</div><div class="body" dir="ltr"><code>public OnGameModeExit()<br />
{<br />
    // Code here.<br />
    return 1;<br />
}</code></div></div><br />
Example code:<br />
<br />
<div class="codeblock"><div class="title">Code:</div><div class="body" dir="ltr"><code>public OnGameModeExit()<br />
{<br />
    print("Mode ended."); // Message to console (blue text).<br />
    return 1;<br />
}</code></div></div><br />
<span style="font-weight: bold;" class="mycode_b">public OnPlayerRequestClass(playerid, classid)</span> - Called when you choose your skin.<br />
<br />
Additional information: <a href="http://wiki.sa-mp.com/wiki/OnPlayerRequestClass" target="_blank" rel="noopener" class="mycode_url">https://sampwiki.blast.hk/wiki/OnPlayerRequestClass</a><br />
<br />
Basic structure:<br />
<br />
<div class="codeblock"><div class="title">Code:</div><div class="body" dir="ltr"><code>public OnPlayerRequestClass(playerid, classid)<br />
{<br />
    // Code here.<br />
    return 1;<br />
}</code></div></div><br />
Example code:<br />
<br />
<div class="codeblock"><div class="title">Code:</div><div class="body" dir="ltr"><code>public OnPlayerRequestClass(playerid, classid)<br />
{<br />
    SetPlayerPos(playerid, 2294.2810, 558.2053, 7.7813); // Skin position.<br />
    SetPlayerCameraPos(playerid, 2294.3071, 560.6948, 8.7324); // Position of the camera.<br />
    SetPlayerCameraLookAt(playerid, 2294.2810, 558.2053, 7.7813); // Position where the camera is looking at.<br />
    SetPlayerFacingAngle(playerid, 0);<br />
    return 1;<br />
}</code></div></div><br />
SetPlayerFacingAngle sets the angle where the player is looking; it's structure is:<br />
<br />
<div class="codeblock"><div class="title">Code:</div><div class="body" dir="ltr"><code>playerid = ID of the player<br />
0 = angle (in this case north).<br />
<br />
    north (0)<br />
           |<br />
(90) west-   -east (270)<br />
           |<br />
        south (180)</code></div></div><br />
More information about <a href="http://wiki.sa-mp.com/wiki/SetPlayerFacingAngle" target="_blank" rel="noopener" class="mycode_url">SetPlayerFacingAngle</a>.<br />
<br />
<span style="font-weight: bold;" class="mycode_b">public OnPlayerConnect(playerid)</span> - Called when a player connects.<br />
<br />
Additional information: <a href="http://wiki.sa-mp.com/wiki/OnPlayerConnect" target="_blank" rel="noopener" class="mycode_url">https://sampwiki.blast.hk/wiki/OnPlayerConnect</a><br />
<br />
Basic structure:<br />
<br />
<div class="codeblock"><div class="title">Code:</div><div class="body" dir="ltr"><code>public OnPlayerConnect(playerid)<br />
{<br />
    // Code here.<br />
    return 1;<br />
}</code></div></div><br />
Example code:<br />
<br />
<div class="codeblock"><div class="title">Code:</div><div class="body" dir="ltr"><code>public OnPlayerConnect(playerid)<br />
{<br />
    PlayAudioStreamForPlayer(playerid, "http://s1.radio.ge/Music/AcDc/1980_Back_In_Black/06_Back_In_Black.mp3"); // Will play Back in Black, AC/DC.<br />
    return 1;<br />
}</code></div></div><br />
PlayAudioStreamForPlayer is a function that plays an audio stream for a player. It's basic structure is:<br />
<br />
<div class="codeblock"><div class="title">Code:</div><div class="body" dir="ltr"><code>playerid = ID of the player<br />
"http://s1.radio.ge/Music/AcDc/1980_Back_In_Black/06_Back_In_Black.mp3" = audio link</code></div></div><br />
* Note: audio links must be in a specific format to be played; for example this<a href="ttp://s1.radio.ge/Music/AcDc/1980_Back_In_Black/06_Back_In_Black.mp3" target="_blank" rel="noopener" class="mycode_url">link</a>.<br />
<br />
You can find music in many websites. For example in <a href="http://mp3skull.com" target="_blank" rel="noopener" class="mycode_url">this</a> website.<br />
<br />
<span style="font-weight: bold;" class="mycode_b">public OnPlayerSpawn(playerid)</span> - Used after class selection, while spawning. This are the functions that will affect you when spawning.<br />
<br />
Additional information: <a href="http://wiki.sa-mp.com/wiki/OnPlayerSpawn" target="_blank" rel="noopener" class="mycode_url">https://sampwiki.blast.hk/wiki/OnPlayerSpawn</a><br />
<br />
Basic structure:<br />
<br />
<div class="codeblock"><div class="title">Code:</div><div class="body" dir="ltr"><code>public OnPlayerSpawn(playerid)<br />
{<br />
    // Code here.<br />
    return 1;<br />
}</code></div></div><br />
Example code:<br />
<br />
<div class="codeblock"><div class="title">Code:</div><div class="body" dir="ltr"><code>public OnPlayerSpawn(playerid)<br />
{<br />
   SendClientMessage(playerid, -1, "You spawned!"); // Sends a message.<br />
   return 1;<br />
}</code></div></div><br />
SendClientMessage is a function that sends a message to the player; it's structure is:<br />
<br />
<div class="codeblock"><div class="title">Code:</div><div class="body" dir="ltr"><code>playerid = ID of the player<br />
-1 = Color, -1 is white<br />
"You spawned!" = message</code></div></div><br />
More information about <a href="http://wiki.sa-mp.com/wiki/SendClientMessage" target="_blank" rel="noopener" class="mycode_url">SendClientMessage</a>.<br />
<br />
<span style="font-weight: bold;" class="mycode_b">public OnPlayerDeath(playerid)</span> - Called when you die. This function will affect you when you die.<br />
<br />
Additional information: <a href="http://wiki.sa-mp.com/wiki/OnPlayerDeath" target="_blank" rel="noopener" class="mycode_url">https://sampwiki.blast.hk/wiki/OnPlayerDeath</a><br />
<br />
Basic structure:<br />
<br />
<div class="codeblock"><div class="title">Code:</div><div class="body" dir="ltr"><code>public OnPlayerDeath(playerid)<br />
{<br />
    // Code here.<br />
    return 1;<br />
}</code></div></div><br />
Example code:<br />
<br />
<div class="codeblock"><div class="title">Code:</div><div class="body" dir="ltr"><code>public OnPlayerDeath(playerid)<br />
{<br />
   GameTextForPlayer(playerid, "Wasted", 5000, 2); // Screen message for player.<br />
   return 1;<br />
}</code></div></div><br />
GameTextForPlayer is a function that sends a screen message to the player; it's structure is:<br />
<br />
<div class="codeblock"><div class="title">Code:</div><div class="body" dir="ltr"><code>playerid = ID of the player<br />
"Wasted" = message<br />
5000 = time in milliseconds; in this case 5 seconds<br />
2 = type of message</code></div></div><br />
More information about <a href="http://wiki.sa-mp.com/wiki/GameTextForPlayer" target="_blank" rel="noopener" class="mycode_url">GameTextForPlayer</a>.<br />
<br />
<span style="font-weight: bold;" class="mycode_b">public OnPlayerDisconnect(playerid, reason)</span> - Called when a player disconnects.<br />
<br />
Additional information: <a href="http://wiki.sa-mp.com/wiki/OnPlayerDisconnect" target="_blank" rel="noopener" class="mycode_url">https://sampwiki.blast.hk/wiki/OnPlayerDisconnect</a><br />
<br />
Basic structure:<br />
<br />
<div class="codeblock"><div class="title">Code:</div><div class="body" dir="ltr"><code>public OnPlayerDisconnect(playerid, reason)<br />
{<br />
    // Code here.<br />
    return 1;<br />
}</code></div></div><br />
Example code:<br />
<br />
<div class="codeblock"><div class="title">Code:</div><div class="body" dir="ltr"><code>public OnPlayerDisconnect(playerid, reason)<br />
{<br />
    // Sending a message to all players that a player disconnected.<br />
    new String[64], // Variable assigned to a message. 64 is the number of characters that will be used in our message (maybe more).<br />
    Name[MAX_PLAYER_NAME];  // Variable assigned to the player's name; usually defined as MAX_PLAYER_NAME.<br />
    GetPlayerName(playerid, Name, MAX_PLAYER_NAME); // Getting the name of the player (Name) and it's length     which is MAX_PLAYER_NAME (default by SA-MP).<br />
    format(String, sizeof String, "%s left the server.", Name); // Applying a format to our message.<br />
    SendClientMessageToAll(-1, String); // Sending the message to all players; String is the format we used for this message.<br />
    return 1;<br />
}</code></div></div><br />
<span style="font-weight: bold;" class="mycode_b">public OnPlayerText(playerid)</span> - Called when a player sends a message (chat).<br />
<br />
Additional information: <a href="http://wiki.sa-mp.com/wiki/OnPlayerText" target="_blank" rel="noopener" class="mycode_url">https://sampwiki.blast.hk/wiki/OnPlayerText</a><br />
<br />
Basic structure:<br />
<br />
<div class="codeblock"><div class="title">Code:</div><div class="body" dir="ltr"><code>public OnPlayerText(playerid, text[])<br />
{<br />
    // Code here.<br />
    return 1;<br />
}</code></div></div><br />
Example code:<br />
<br />
<div class="codeblock"><div class="title">Code:</div><div class="body" dir="ltr"><code>public OnPlayerText(playerid, text[])<br />
{<br />
    new Name[MAX_PLAYER_NAME], String[175];<br />
    GetPlayerName(playerid, Name, sizeof(Name));<br />
    format(String, sizeof(String), "%s [%d]: {FFFFFF}%s", Name, playerid, text); // Assigning a format.<br />
    SendClientMessageToAll(GetPlayerColor(playerid), String); // Sending the message with GetPlayerColor, that is the actual color of the player.<br />
    return 0; // Ignoring the default text, ending the function.<br />
}</code></div></div><br />
This function is the format assigned to SendClientMessageToAll. When it is send, it will follow that format:<br />
<br />
<div class="codeblock"><div class="title">Code:</div><div class="body" dir="ltr"><code>format(String, sizeof(String), "%s [%d]: {FFFFFF}%s", Name, playerid, text); </code></div></div><br />
<div class="codeblock"><div class="title">Code:</div><div class="body" dir="ltr"><code>%s and %d are values assigned depending on the player.<br />
%s is a letter value (in this case the player's name and the text).<br />
%d is a numerical value (ID of the player).</code></div></div><br />
<div class="codeblock"><div class="title">Code:</div><div class="body" dir="ltr"><code>format(String, sizeof(String), "%s [%d]: {FFFFFF}%s", Name, playerid, text); </code></div></div><br />
Name, playerid &amp; text are the values assigned to %s, %d and %s.<br />
<br />
<span style="font-weight: bold;" class="mycode_b">public OnPlayerUpdate(playerid)</span> - Called everytime a client/player updates the server with their status.<br />
<br />
Additional information: <a href="http://wiki.sa-mp.com/wiki/OnPlayerUpdate" target="_blank" rel="noopener" class="mycode_url">https://sampwiki.blast.hk/wiki/OnPlayerUpdate</a><br />
<br />
Basic structure:<br />
<br />
<div class="codeblock"><div class="title">Code:</div><div class="body" dir="ltr"><code>public OnPlayerUpdate(playerid)<br />
{<br />
    // Code here.<br />
    return 1; // If it returns 0 the client will not be updated to others (like paused).<br />
}</code></div></div><br />
Example code:<br />
<br />
<div class="codeblock"><div class="title">Code:</div><div class="body" dir="ltr"><code>public OnPlayerUpdate(playerid)<br />
{<br />
    if(GetPlayerWeapon(playerid) == 38) return Kick(playerid); // Kicking the player if he is using minigun.<br />
    return 1;<br />
}</code></div></div><br />
"if" is used to determine that if something is happening, the server will execute that function.<br />
<br />
It would mean something like:<br />
<br />
If he is using minigun, kick him!<br />
<br />
* Note: using "if" in OnPlayerUpdate may cause lag, this is just an example.<br />
<br />
Using return means that the function ends there, with "Kick(playerid);". If you have other code down that function, it will not be executed.<br />
<br />
For example:<br />
<br />
<div class="codeblock"><div class="title">Code:</div><div class="body" dir="ltr"><code>public OnPlayerUpdate(playerid)<br />
{<br />
    if(GetPlayerWeapon(playerid) == 38) return Kick(playerid);<br />
    SendClientMessage(playerid, -1, "Updated!"); // Will not be executed if the player is using a minigun.<br />
    return 1;<br />
}</code></div></div><br />
<br />
<span style="color: Green;" class="mycode_color"><span style="font-family: Arial Black;" class="mycode_font"><span style="font-size: medium;" class="mycode_size">Functions:</span></span></span><br />
<br />
Basically, most functions names (native functions) describe what the function does; you can find many of them <a href="http://wiki.sa-mp.com/wiki/Category:Scripting_Functions" target="_blank" rel="noopener" class="mycode_url">here</a>.<br />
<br />
Some basic functions that might be used in a basic gamemode:<br />
<br />
<span style="font-weight: bold;" class="mycode_b">SetPlayerPos(playerid, X, Y, Z);</span> - Sets a player position (X, Y &amp; Z are the place where the player will be moved).<br />
<br />
Additional information: <a href="http://wiki.sa-mp.com/wiki/SetPlayerPos" target="_blank" rel="noopener" class="mycode_url">https://sampwiki.blast.hk/wiki/SetPlayerPos</a><br />
<br />
Example code:<br />
<br />
<div class="codeblock"><div class="title">Code:</div><div class="body" dir="ltr"><code>SetPlayerPos(playerid, 0.0, 0.0, 3.0); // Changes player's position to a farm.</code></div></div><br />
You can save your current position by using the command /Save inside the game (default command by SA-MP). After using this you must go to "\GTA San Andreas User Files\SAMP" and then open the file "savedpositions.txt". There you will find something like:<br />
<br />
<div class="codeblock"><div class="title">Code:</div><div class="body" dir="ltr"><code>AddPlayerClass(270, 700, 700, 5, 0, 0, 0, 0, 0, 0, 0);</code></div></div><br />
Then just copy the red values:<br />
<br />
<div class="codeblock"><div class="title">Code:</div><div class="body" dir="ltr"><code>AddPlayerClass(270, 700, 700, 5, 0, 0, 0, 0, 0, 0, 0);</code></div></div><br />
* Note: obviously our values are not red, it is just for the example.<br />
<br />
Then paste those values inside your SetPlayerPos function; like this:<br />
<br />
<div class="codeblock"><div class="title">Code:</div><div class="body" dir="ltr"><code>SetPlayerPos(playerid, 700, 700, 5);</code></div></div><br />
You can also use <a href="http://forum.sa-mp.com/showthread.php?t=540563" target="_blank" rel="noopener" class="mycode_url">this system</a> that will do it for you.<br />
<br />
<span style="font-weight: bold;" class="mycode_b">TextDrawCreate(X, Y, text[])</span> - Creates a textdraw (X &amp; Y are the coords in the screen and "text" is the text that will be shown).<br />
<br />
Additional information: <a href="http://wiki.sa-mp.com/wiki/TextDrawCreate" target="_blank" rel="noopener" class="mycode_url">https://sampwiki.blast.hk/wiki/TextDrawCreate</a><br />
<br />
Example of textdraw:<br />
<br />
<div class="codeblock"><div class="title">Code:</div><div class="body" dir="ltr"><code>new Text:Textdraw0;<br />
<br />
public OnGameModeInit()<br />
{<br />
    Textdraw0 = TextDrawCreate(240.0, 580.0, "SA-MP 0.3z"); // This creates a textdraw without any modification.<br />
    return 1;<br />
}</code></div></div><br />
An easy way to use this function is using a <a href="http://forum.sa-mp.com/showthread.php?t=376758" target="_blank" rel="noopener" class="mycode_url">Textdraw Creator</a>.<br />
<br />
To show a textdraw to a player you should use the function TextDrawShowForPlayer.<br />
<br />
Example of use (based on the last example):<br />
<br />
<div class="codeblock"><div class="title">Code:</div><div class="body" dir="ltr"><code>public OnPlayerConnect(playerid)<br />
{<br />
    TextDrawShowForPlayer(playerid, Textdraw0);<br />
}</code></div></div><br />
To hide a textdraw to a player you must use the function TextDrawHideForPlayer.<br />
<br />
Example:<br />
<br />
<div class="codeblock"><div class="title">Code:</div><div class="body" dir="ltr"><code>public OnPlayerDisconnect(playerid, reason)<br />
{<br />
    TextDrawHideForPlayer(playerid, Textdraw0);<br />
    return 1;<br />
}</code></div></div><br />
And to destroy a textdraw you use the function TextDrawDestroy.<br />
<br />
Example:<br />
<br />
<div class="codeblock"><div class="title">Code:</div><div class="body" dir="ltr"><code>public OnGameModeInit()<br />
{<br />
    TextDrawDestroy(Textdraw0);<br />
    return 1;<br />
}</code></div></div><br />
<br />
<span style="color: Green;" class="mycode_color"><span style="font-family: Arial Black;" class="mycode_font"><span style="font-size: medium;" class="mycode_size">Dialog Function (menus &amp; others):</span></span></span><br />
<br />
<span style="font-weight: bold;" class="mycode_b">ShowPlayerDialog(playerid, dialogid, style, caption[], info[], button1[], button2[]);</span> - Shows the player a dialog box.<br />
<br />
Additional information: <a href="http://wiki.sa-mp.com/wiki/ShowPlayerDialog" target="_blank" rel="noopener" class="mycode_url">https://sampwiki.blast.hk/wiki/ShowPlayerDialog</a><br />
<br />
* Note: Every dialog needs a unique "dialogid"; unless you do not use that ID inside the public OnDialogResponse (filterscripts and include dialogs must also use a unique dialogid).<br />
<br />
There are 4 types of dialog:<br />
<br />
<span style="font-weight: bold;" class="mycode_b">Message box style (sends a message to the player):</span><br />
<br />
<img src="http://wiki.sa-mp.com/wroot/images2/a/a1/Dialog_style_msgbox.png" loading="lazy"  alt="[Image: Dialog_style_msgbox.png]" class="mycode_img" /><br />
<br />
Example code (with cancel button):<br />
<br />
<div class="codeblock"><div class="title">Code:</div><div class="body" dir="ltr"><code>if(!strcmp(cmdtext, "/Help", true))<br />
{<br />
    new Menu[202]; // This is the number of characters you are using inside your dialog (all characters).<br />
    Menu[0]='&#92;0'; // Variable of the dialog, defined before.<br />
    strcat(Menu, "This is the text that will be shown inside your dialog. You can add another&#92;n", 77); // 77 is the number of characters in this line.<br />
    strcat(Menu, "line using the symbol shown in the upper line (n). You do not need to add&#92;n", 153); // 153 is the number of characters in the other lines plus this line.<br />
    strcat(Menu, "that symbol in the last line of your dialog box.", 202); // This are all the characters in your dialog box (202).<br />
    ShowPlayerDialog(playerid, 1, DIALOG_STYLE_MSGBOX, "Dialog Help", Menu, "Accept", "Cancel");<br />
    return 1;<br />
}</code></div></div><br />
Every lines has characters; the first line has 77 characters, so we put 77 at the end.<br />
<br />
In the second line we have to count the characters in that line plus the characters in all the lines before that line. In this case is 153; so we put 153 at the end.<br />
<br />
Example code (without cancel button):<br />
<br />
<div class="codeblock"><div class="title">Code:</div><div class="body" dir="ltr"><code>if(!strcmp(cmdtext, "/Help", true))<br />
{<br />
    new Menu[202];<br />
    Menu[0]='&#92;0';<br />
    strcat(Menu, "This is the text that will be shown inside your dialog. You can add another&#92;n", 77); // strcat  concatenates (joins together) our Menu string and our text.<br />
    strcat(Menu, "line using the symbol shown in the upper line (n). You do not need to add&#92;n", 153); // Every line uses strcat.<br />
    strcat(Menu, "that symbol in the last line of your dialog box.", 202);<br />
    ShowPlayerDialog(playerid, 1, DIALOG_STYLE_MSGBOX, "Dialog Help", Menu, "Accept", ""); // We leave the second botton just with "".<br />
    return 1;<br />
}</code></div></div><br />
The function "strcat"  concatenates (joins together) our Menu string and our text.<br />
<br />
* Note: You can use special websites to <a href="http://www.lettercount.com/" target="_blank" rel="noopener" class="mycode_url">count characters</a>.<br />
<br />
When counting characters you just count the characters inside the ""; for example:<br />
<br />
<div class="codeblock"><div class="title">Code:</div><div class="body" dir="ltr"><code>if(!strcmp(cmdtext, "/Help", true))<br />
{<br />
    new Menu[202];<br />
    Menu[0]='&#92;0';<br />
    strcat(Menu, "This is the text that will be shown inside your dialog. You can add another&#92;n", 77);<br />
    strcat(Menu, "line using the symbol shown in the upper line (n). You do not need to add&#92;n", 153);<br />
    strcat(Menu, "that symbol in the last line of your dialog box.", 202);<br />
    ShowPlayerDialog(playerid, 1, DIALOG_STYLE_MSGBOX, "Dialog Help", Menu, "Accept", "");<br />
    return 1;<br />
}</code></div></div><br />
The \n character also counts.<br />
<br />
We can also add a function when we press "Accept" or "Cancel" inside the public OnDialogResponse.<br />
<br />
For example:<br />
<br />
<div class="codeblock"><div class="title">Code:</div><div class="body" dir="ltr"><code>if(!strcmp(cmdtext, "/Help", true))<br />
{<br />
    new Menu[202];<br />
    Menu[0]='&#92;0';<br />
    strcat(Menu, "This is the text that will be shown inside your dialog. You can add another&#92;n", 77);<br />
    strcat(Menu, "line using the symbol shown in the upper line (n). You do not need to add&#92;n", 153);<br />
    strcat(Menu, "that symbol in the last line of your dialog box.", 202);<br />
    ShowPlayerDialog(playerid, 1, DIALOG_STYLE_MSGBOX, "Dialog Help", Menu, "Accept", "");<br />
    return 1;<br />
}</code></div></div><br />
We add a message function inside the public OnDialogResponse:<br />
<br />
<div class="codeblock"><div class="title">Code:</div><div class="body" dir="ltr"><code>public OnDialogResponse(playerid, dialogid, response, listitem, inputtext[])<br />
{<br />
    if(dialogid == 1) // Number 1 is the number of our dialog.<br />
    {<br />
        if(response) // If they clicked 'Accept'. <br />
        {<br />
            SendClientMessage(playerid, -1, "Thanks for reading!");<br />
        }<br />
    return 1; // Closing dialog response from dialog # 1!<br />
    }<br />
return 1; // Closing the public.<br />
}</code></div></div><br />
* Note: When using OnDialogResponse every dialog needs a number. In this case we used number 1:<br />
<br />
<div class="codeblock"><div class="title">Code:</div><div class="body" dir="ltr"><code>ShowPlayerDialog(playerid, 1, DIALOG_STYLE_MSGBOX, "Dialog Help", Menu, "Accept", "");<br />
    return 1;<br />
}</code></div></div><br />
<span style="font-weight: bold;" class="mycode_b">Input style (allows players to input text into the dialog):</span><br />
<br />
<img src="http://wiki.sa-mp.com/wroot/images2/d/d5/Dialog_style_input.png" loading="lazy"  alt="[Image: Dialog_style_input.png]" class="mycode_img" /><br />
<br />
Example code:<br />
<br />
<div class="codeblock"><div class="title">Code:</div><div class="body" dir="ltr"><code>ShowPlayerDialog(playerid, 2, DIALOG_STYLE_INPUT, "Text", "Write a text for all players!", "Accept", "Cancel");</code></div></div><br />
After creating our code we must create a function to that code; so we will use the public OnDialogResponse:<br />
<br />
Example code:<br />
<br />
<div class="codeblock"><div class="title">Code:</div><div class="body" dir="ltr"><code>public OnDialogResponse(playerid, dialogid, response, listitem, inputtext[])<br />
{<br />
    if(dialogid == 2)<br />
    {<br />
        if(!response) // If they clicked 'Cancel'. <br />
        {<br />
            SendClientMessage(playerid, -1, "Message canceled!");<br />
        }<br />
        else // If they pressed 'Accept'.<br />
        {<br />
            new String[200], Name[MAX_PLAYER_NAME]; // Defining variables.<br />
            GetPlayerName(playerid, Name, MAX_PLAYER_NAME); // Getting player's name.<br />
            format(String, sizeof(String), "[&lt;!&gt;] Announce from %s: %s", Name, inputtext); // Using a format for the message.<br />
            SendClientMessageToAll(-1, String);<br />
        }<br />
    return 1; // Closing dialog response from dialog # 2!<br />
    }<br />
return 1; // Closing the public.<br />
}</code></div></div><br />
<span style="font-weight: bold;" class="mycode_b">List style (menu, show the player a list of options):</span><br />
<br />
<img src="http://wiki.sa-mp.com/wroot/images2/b/b1/Dialog_style_list.png" loading="lazy"  alt="[Image: Dialog_style_list.png]" class="mycode_img" /><br />
<br />
Example code (creating a weapon menu):<br />
<br />
<div class="codeblock"><div class="title">Code:</div><div class="body" dir="ltr"><code>if(!strcmp(cmdtext, "/Weapon", true))<br />
{<br />
    ShowPlayerDialog(playerid, 3, DIALOG_STYLE_LIST, "Weapons", "Desert Eagle&#92;n AK-47&#92;n Combat Shotgun", "Select", "Close");<br />
    return 1;<br />
}</code></div></div><br />
<div class="codeblock"><div class="title">Code:</div><div class="body" dir="ltr"><code>"Weapons" = Title of the list.<br />
"Desert Eagle&#92;n AK-47&#92;n Combat Shotgun" = List.<br />
"Select" = Choose a weapon.<br />
"Close" = Close the list.</code></div></div><br />
The \n symbol is used to separate the elements of the list.<br />
<br />
To give the weapon we use the public OnDialogResponse:<br />
<br />
<div class="codeblock"><div class="title">Code:</div><div class="body" dir="ltr"><code>public OnDialogResponse(playerid, dialogid, response, listitem, inputtext[])<br />
{<br />
    if(dialogid == 3)<br />
    {<br />
        if(response) // If they clicked 'Select' or double-clicked a weapon.<br />
        {<br />
            switch(listitem) // We create a switch to list all the items; each case is a item from our dialog.<br />
            {<br />
                case 0:<br />
                {<br />
                    GivePlayerWeapon(playerid, 24, 14); // Give them a desert eagle with 14 bullets.<br />
                }<br />
                case 1:<br />
                {<br />
                    GivePlayerWeapon(playerid, 30, 120); // Give them an AK-47 with 120 bullets.<br />
                }<br />
                case 2:<br />
                {<br />
                    GivePlayerWeapon(playerid, 27, 28); // Give them a Combat Shotgun with 28 bullets.<br />
                }<br />
            }<br />
        }<br />
        return 1; // Ending the dialog #3.<br />
    }<br />
    return 1;<br />
}</code></div></div><br />
Structure of the function GivePlayerWeapon:<br />
<br />
<div class="codeblock"><div class="title">Code:</div><div class="body" dir="ltr"><code>GivePlayerWeapon(playerid, weaponid, ammo);</code></div></div><br />
Additional information about this function: <a href="http://wiki.sa-mp.com/wiki/GivePlayerWeapon" target="_blank" rel="noopener" class="mycode_url">https://sampwiki.blast.hk/wiki/GivePlayerWeapon</a><br />
<br />
<span style="font-weight: bold;" class="mycode_b">Password style (allows players to input text into the dialog without revealing it):</span><br />
<br />
<img src="http://wiki.sa-mp.com/wroot/images2/f/f8/Dialog_style_password.png" loading="lazy"  alt="[Image: Dialog_style_password.png]" class="mycode_img" /><br />
<br />
It has the same structure of "Input style"; mostly used in account systems (it is a bit advanced for this tutorial).<br />
<br />
If you want to create an account system you can read this tutorials:<br />
<br />
<a href="http://forum.sa-mp.com/showthread.php?t=273088" target="_blank" rel="noopener" class="mycode_url">Kush account system guide (Y_INI).</a><br />
<a href="http://forum.sa-mp.com/showthread.php?t=278188" target="_blank" rel="noopener" class="mycode_url">Lorenc_ account system guide (SQLite using rBits).</a><br />
<br />
<br />
<br />
<br />
<br />
<span style="color: DarkOrange;" class="mycode_color"><span style="font-family: Arial Black;" class="mycode_font"><span style="font-size: medium;" class="mycode_size">CREATING AND REMOVING OBJECTS:</span></span></span><br />
<br />
There are many programs to create maps for your server; the most known are:<br />
<br />
<a href="http://forum.sa-mp.com/showthread.php?t=282801" target="_blank" rel="noopener" class="mycode_url">Map editor 1</a><br />
<a href="http://forum.sa-mp.com/showthread.php?t=139409" target="_blank" rel="noopener" class="mycode_url">Map editor 2</a><br />
<a href="http://www.mtasa.com/" target="_blank" rel="noopener" class="mycode_url">MTA map editor</a><br />
<br />
Game Object ID List: <a href="http://wiki.sa-mp.com/wiki/Model_ID" target="_blank" rel="noopener" class="mycode_url">https://sampwiki.blast.hk/wiki/Model_ID</a><br />
<br />
<br />
<span style="color: Green;" class="mycode_color"><span style="font-family: Arial Black;" class="mycode_font"><span style="font-size: medium;" class="mycode_size">Map editor (1 &amp; 2):</span></span></span><br />
<br />
Both have the same structure; so this is an explanation for both.<br />
<br />
<span style="font-weight: bold;" class="mycode_b">Start using it:</span><br />
<br />
- After dowloading it, you must open the file "editor.exe" and press the button "LOAD".<br />
<br />
- It will load the game map (GTA-SA); you can move your camera by moving your mouse while clicking the right mouse button. You can move around the map with the mouse scroll or with the keys "W, A, S &amp; D" while pressing the right mouse button.<br />
<br />
<span style="font-weight: bold;" class="mycode_b">Creating objects:</span><br />
<br />
- Move to the place where you want to add your mapping, then press the button "Objects" inside the menu (the menu on the right of the window).<br />
<br />
- Press "Add" and search the object you want to add (ID or name); then press double click on it and press the button "Add".<br />
<br />
- After doing it press on the object shown on the right of the window and after doing it press "insert".<br />
<br />
- You can move the object by using the "Movement" panel.<br />
<br />
- After mapping you can get the code and add it to your GM by pressing "Show Code". Copy the code and paste it inside the public OnGameModeInit.<br />
<br />
Example code:<br />
<br />
<div class="codeblock"><div class="title">Code:</div><div class="body" dir="ltr"><code>public OnGameModeInit()<br />
{<br />
    CreateObject(2587, 2001.195679, 1547.113892, 14.283400, 0.0, 0.0, 96.0); // Object will render at it's default distance.<br />
    return 1;<br />
}</code></div></div><br />
Additional information: <a href="http://wiki.sa-mp.com/wiki/CreateObject" target="_blank" rel="noopener" class="mycode_url">https://sampwiki.blast.hk/wiki/CreateObject</a><br />
<br />
<span style="font-weight: bold;" class="mycode_b">Removing objects:</span><br />
<br />
- Move around the map and search the object you want to delete.<br />
<br />
- Click on it and press "Supr".<br />
<br />
- After deleting the object press "Show Code". Paste the code inside the public OnPlayerConnect.<br />
<br />
Example code:<br />
<br />
<div class="codeblock"><div class="title">Code:</div><div class="body" dir="ltr"><code>public OnPlayerConnect(playerid)<br />
{<br />
    RemoveBuildingForPlayer(playerid, 3782, 1803.0859, -1294.2031, 34.3438, 0.25);<br />
    return 1;<br />
}</code></div></div><br />
Additional information: <a href="http://wiki.sa-mp.com/wiki/RemoveBuildingForPlayer" target="_blank" rel="noopener" class="mycode_url">https://sampwiki.blast.hk/wiki/RemoveBuildingForPlayer</a><br />
<br />
<br />
<span style="color: Green;" class="mycode_color"><span style="font-family: Arial Black;" class="mycode_font"><span style="font-size: medium;" class="mycode_size">MTA map editor:</span></span></span><br />
<br />
This program is easier than the other editor.<br />
<br />
You can download it <a href="http://www.mtasa.com/" target="_blank" rel="noopener" class="mycode_url">here</a>.<br />
<br />
* Note: It is able to create objects but not to delete them from the original map.<br />
<br />
<span style="font-weight: bold;" class="mycode_b">Start using it:</span><br />
<br />
- After downloading it, open the file MTA.exe<br />
<br />
- Click on the map editor.<br />
<br />
- To move around the map use the camera and the keys "W, A, S &amp; D".<br />
<br />
- To create objects press "F" and click on the cube object (in the bottom):<br />
<br />
<img src="http://i.imgur.com/uwz65v3.jpg" loading="lazy"  alt="[Image: uwz65v3.jpg]" class="mycode_img" /><br />
<br />
- Search or select your object and place it on the map.<br />
<br />
* Note: You can move it down and up by clicking on the object and using the keys "Page Down (pg dn)" and "Page Up (pg up)". To rotate it use "Shift + Scroll". To change it's angle use "CTRL + Page Down/Page Up" or "CTRL + Arrow keys".<br />
<br />
- To save your map press the save button:<br />
<br />
<img src="http://i.imgur.com/bROE6FQ.jpg" loading="lazy"  alt="[Image: bROE6FQ.jpg]" class="mycode_img" /><br />
<br />
- To get the object code you can use a MTA converter:<br />
<br />
<a href="http://gtamap.delux-host.com/converter/" target="_blank" rel="noopener" class="mycode_url">Delux GTA Map Converter v2</a> (2015)<br />
<br />
<span style="font-weight: bold;" class="mycode_b">Delux GTA Map Converter v2:</span><br />
<br />
- Instead of <span style="font-weight: bold;" class="mycode_b">IPL file format</span> choose <span style="font-weight: bold;" class="mycode_b">PAWN Code for SA-MP</span>. Search your map inside your MTA folder; it is usually inside \mods\deathmatch\resources.<br />
<br />
- Copy your code.<br />
<br />
<br />
<span style="color: Green;" class="mycode_color"><span style="font-family: Arial Black;" class="mycode_font"><span style="font-size: medium;" class="mycode_size">Creating Objects:</span></span></span><br />
<br />
After having the code of the object(s), you must add it inside the public OnGameModeInit or OnFilterScriptInit.<br />
<br />
Example code:<br />
<br />
<div class="codeblock"><div class="title">Code:</div><div class="body" dir="ltr"><code>public OnGameModeInit()<br />
{<br />
    CreateObject(2587, 2001.195679, 1547.113892, 14.283400, 0.0, 0.0, 96.0); // Object will render at it's default distance.<br />
    CreateObject(2587, 2001.195679, 1547.113892, 14.283400, 0.0, 0.0, 96.0, 250.0); // Object will render at 250.0 units (visible at 250 units).<br />
    return 1;<br />
}</code></div></div><br />
But SA-MP has an object limit of 1000 objects. If you want to optimize your script or you want to add more objects you should use the plugin <a href="http://forum.sa-mp.com/showthread.php?t=102865" target="_blank" rel="noopener" class="mycode_url">Streamer</a>.<br />
<br />
<span style="font-weight: bold;" class="mycode_b">Streamer installation:</span><br />
<br />
- Dowload it from the streamer plugin thread.<br />
<br />
- After downloading it, paste the file "streamer.so" or "streamer.dll" inside the plugins folder (or just paste the plugins folder, the download one, inside your server folder).<br />
<br />
- Copy the include "streamer.inc" inside your pawno includes folder.<br />
<br />
- Edit the file "server.cfg" inside your server folder and add this line if you are using Windows:<br />
<br />
<div class="codeblock"><div class="title">Code:</div><div class="body" dir="ltr"><code>plugins streamer.dll</code></div></div><br />
If you are using Linux add:<br />
<br />
<div class="codeblock"><div class="title">Code:</div><div class="body" dir="ltr"><code>plugins streamer.so</code></div></div><br />
- Copy this code down all the includes (include example: #include &lt;a_samp&gt;), inside every script that uses streamer:<br />
<br />
<div class="codeblock"><div class="title">Code:</div><div class="body" dir="ltr"><code>#include &lt;streamer&gt;<br />
<br />
#define STREAMER_TYPE_OBJECT (0)<br />
#define STREAMER_TYPE_PICKUP (1)<br />
#define STREAMER_TYPE_CP (2)<br />
#define STREAMER_TYPE_RACE_CP (3)<br />
#define STREAMER_TYPE_MAP_ICON (4)<br />
#define STREAMER_TYPE_3D_TEXT_LABEL (5)<br />
#define STREAMER_TYPE_AREA (6)<br />
<br />
#define STREAMER_AREA_TYPE_CIRCLE (0)<br />
#define STREAMER_AREA_TYPE_CYLINDER (1)<br />
#define STREAMER_AREA_TYPE_SPHERE (2)<br />
#define STREAMER_AREA_TYPE_RECTANGLE (3)<br />
#define STREAMER_AREA_TYPE_CUBOID (4)<br />
#define STREAMER_AREA_TYPE_POLYGON (5)<br />
<br />
#define STREAMER_OBJECT_TYPE_GLOBAL (0)<br />
#define STREAMER_OBJECT_TYPE_PLAYER (1)<br />
#define STREAMER_OBJECT_TYPE_DYNAMIC (2)<br />
<br />
enum<br />
{<br />
    E_STREAMER_ATTACHED_OBJECT,<br />
    E_STREAMER_ATTACHED_PLAYER,<br />
    E_STREAMER_ATTACHED_VEHICLE,<br />
    E_STREAMER_ATTACH_OFFSET_X,<br />
    E_STREAMER_ATTACH_OFFSET_Y,<br />
    E_STREAMER_ATTACH_OFFSET_Z,<br />
    E_STREAMER_ATTACH_R_X,<br />
    E_STREAMER_ATTACH_R_Y,<br />
    E_STREAMER_ATTACH_R_Z,<br />
    E_STREAMER_ATTACH_X,<br />
    E_STREAMER_ATTACH_Y,<br />
    E_STREAMER_ATTACH_Z,<br />
    E_STREAMER_COLOR,<br />
    E_STREAMER_DRAW_DISTANCE,<br />
    E_STREAMER_EXTRA_ID,<br />
    E_STREAMER_INTERIOR_ID,<br />
    E_STREAMER_MAX_X,<br />
    E_STREAMER_MAX_Y,<br />
    E_STREAMER_MAX_Z,<br />
    E_STREAMER_MIN_X,<br />
    E_STREAMER_MIN_Y,<br />
    E_STREAMER_MIN_Z,<br />
    E_STREAMER_MODEL_ID,<br />
    E_STREAMER_MOVE_R_X,<br />
    E_STREAMER_MOVE_R_Y,<br />
    E_STREAMER_MOVE_R_Z,<br />
    E_STREAMER_MOVE_SPEED,<br />
    E_STREAMER_MOVE_X,<br />
    E_STREAMER_MOVE_Y,<br />
    E_STREAMER_MOVE_Z,<br />
    E_STREAMER_NEXT_X,<br />
    E_STREAMER_NEXT_Y,<br />
    E_STREAMER_NEXT_Z,<br />
    E_STREAMER_PLAYER_ID,<br />
    E_STREAMER_R_X,<br />
    E_STREAMER_R_Y,<br />
    E_STREAMER_R_Z,<br />
    E_STREAMER_SIZE,<br />
    E_STREAMER_STREAM_DISTANCE,<br />
    E_STREAMER_STYLE,<br />
    E_STREAMER_TEST_LOS,<br />
    E_STREAMER_TYPE,<br />
    E_STREAMER_WORLD_ID,<br />
    E_STREAMER_X,<br />
    E_STREAMER_Y,<br />
    E_STREAMER_Z<br />
}</code></div></div><br />
* Note: This code is based on the Streamer plugin update from 2015 (v2.7.4).<br />
<br />
- After doing this edit the object code you have. Instead of using "CreateObject" use "CreateDynamicObject".<br />
<br />
Example:<br />
<br />
Instead of using a normal code...<br />
<br />
<div class="codeblock"><div class="title">Code:</div><div class="body" dir="ltr"><code>public OnGameModeInit()<br />
{<br />
    CreateObject(2587, 2001.195679, 1547.113892, 14.283400, 0.0, 0.0, 96.0);<br />
    return 1;<br />
}</code></div></div><br />
Use this:<br />
<br />
<div class="codeblock"><div class="title">Code:</div><div class="body" dir="ltr"><code>public OnGameModeInit()<br />
{<br />
    CreateDynamicObject(2587, 2001.195679, 1547.113892, 14.283400, 0.0, 0.0, 96.0);<br />
    return 1;<br />
}</code></div></div><br />
* Note: You can edit your "CreateObject" code faster by using a ".txt" file. Paste the code inside of it; press "CTRL + R", search "CreateObject" and replace it with "CreateDynamicObject" (use this if your map is very big).<br />
<br />
- After doing this open the PWN file where you want to add the objects (usually inside the gamemode) and paste your code.<br />
<br />
Example code:<br />
<br />
<div class="codeblock"><div class="title">Code:</div><div class="body" dir="ltr"><code>public OnGameModeInit()<br />
{<br />
    CreateDynamicObject(2587, 2001.195679, 1547.113892, 14.283400, 0.0, 0.0, 96.0);<br />
    return 1;<br />
}</code></div></div><br />
Additional information about <a href="http://forum.sa-mp.com/showthread.php?t=102865" target="_blank" rel="noopener" class="mycode_url">Streamer plugin</a>.<br />
<br />
<br />
<br />
<br />
<span style="color: DarkOrange;" class="mycode_color"><span style="font-family: Arial Black;" class="mycode_font"><span style="font-size: medium;" class="mycode_size">START PRACTICING:</span></span></span><br />
<br />
Now you know this, you can practice by editing other scripts or you can try creating your own script.<br />
<br />
A good way of starting is editing other gamemodes!<br />
<br />
If there is any mistake in this guide or something should be added, just post it.<br />
<br />
* Note: this is an small guide compared to all the basic information of SA-MP that a new scripter should know; this guide will be updated according to post suggestions on this thread.<br />
<br />
<br />
<br />
<br />
Guide credits: Ygzeb (David Talledo)<br />
<br />
Special thanks to:<br />
<br />
Y_Less for a correction in some information presented in this guide and Kwarde that helped to update some links that were broken (2021) :)<br />
<br />
Addon (2021) .- Some links or images may just not work now or in the future, they may be fixed or not. However, I hope this guide will still help people.]]></content:encoded>
		</item>
		<item>
			<title><![CDATA[A Proper Way to Store Passwords]]></title>
			<link>https://www.burgershot.gg/showthread.php?tid=493</link>
			<pubDate>Tue, 30 Apr 2019 07:50:08 +0000</pubDate>
			<dc:creator><![CDATA[<a href="https://www.burgershot.gg/member.php?action=profile&uid=340">Sasino97</a>]]></dc:creator>
			<guid isPermaLink="false">https://www.burgershot.gg/showthread.php?tid=493</guid>
			<description><![CDATA[Passwords<br />
<hr class="mycode_hr" />
<div style="text-align: center;" class="mycode_align"><span style="font-size: xx-large;" class="mycode_size"><span style="font-family: Impact;" class="mycode_font"><span style="color: #339933;" class="mycode_color">A Proper Way to Store Passwords</span></span></span></div>
<br />
<div style="text-align: center;" class="mycode_align"><span style="color: #336633;" class="mycode_color">By Sasinosoft</span></div>
<br />
<span style="font-size: x-small;" class="mycode_size">This is an edited version of my SA-MP forums article about storing passwords the most secure way.</span><br />
<br />
<span style="font-size: x-large;" class="mycode_size"><span style="color: #339933;" class="mycode_color"><span style="font-family: Impact;" class="mycode_font">Introduction</span></span></span><br />
The first thing we must be aware of when programming anything that will ask the user to enter a password, is that the user is giving us their trust. It is our duty to keep their password as safe as possible, so that in case of attack to our servers, the attacker will not be able to read their password. <br />
<br />
You might think, in the case of San Andreas Multiplayer, that <span style="font-style: italic;" class="mycode_i">"it is just a game"</span>, so the security of the game accounts is not to be taken seriously. However, a poll showed that 59% of people use the same password everywhere or almost everywhere.<span style="font-size: xx-small;" class="mycode_size"> <a href="https://hotforsecurity.bitdefender.com/blog/59-of-people-use-the-same-password-everywhere-poll-finds-19851.html" target="_blank" rel="noopener" class="mycode_url">[source]</a> </span><br />
<br />
If the attacker gets access to your game data base, he will most likely obtain all your users' nicknames and passwords, and if they are not properly hashed, then congratulations: you have just made his work easier. After getting this information, the attacker will proceed to check for each user if he is registered on the main websites, such as Google, Microsoft, mail providers, using the passwords and user names he just stole, and this creates high security risks, including the possibility of stealing payment information.<br />
<br />
Here you are a few tips to make his work harder.<br />
<br />
<br />
<span style="color: #339933;" class="mycode_color"><span style="font-size: x-large;" class="mycode_size"><span style="font-family: Impact;" class="mycode_font">Do not store passwords in plain text</span></span></span><br />
It is believed that at least <span style="font-weight: bold;" class="mycode_b">30% of the websites store the passwords in plain text</span>. <a href="http://plaintextoffenders.com/about/" target="_blank" rel="noopener" class="mycode_url"><span style="font-size: xx-small;" class="mycode_size">[source]</span></a> This is really a shame, and it must come to an end. If any website emails your password back in plain text, then it is likely storing your password as such, and compromising your security in all the websites that you used the same password. <br />
<br />
You must never do so. In the case of a San Andreas Multiplayer server, as soon as you receive the user password in the inputtext parameter of OnDialogResponse, you must one-way hash it. Fortunately, the developers of SA-MP added the SHA256_PassHash function in version 0.3.7 R2-1, so there is no more excuse for those who don't like to use external plugins. <span style="font-size: xx-small;" class="mycode_size"><a href="http://forum.sa-mp.com/showthread.php?t=581336" target="_blank" rel="noopener" class="mycode_url">[great tutorial]</a></span><br />
Said that, I also add that there are better algorithms than SHA-256, such as <span style="font-weight: bold;" class="mycode_b">bcrypt</span>. On the Burgershot forums you can find at least two plugins for bcrypt <span style="font-size: xx-small;" class="mycode_size"><a href="https://www.burgershot.gg/showthread.php?tid=136" target="_blank" rel="noopener" class="mycode_url">[SyS's SampBcrypt]</a> <a href="https://www.burgershot.gg/showthread.php?tid=219" target="_blank" rel="noopener" class="mycode_url">[Bork's samp-crypto]</a>.</span><br />
<br />
<span style="font-size: x-large;" class="mycode_size"><span style="color: #339933;" class="mycode_color"><span style="font-family: Impact;" class="mycode_font">Do not simply hash the password and store it</span></span></span><br />
Why? Just hashing the password and storing it, adds very little security; most users' passwords are simple words or numbers which can be found in dictionaries. If this is the case, the attacker will easily detect the password of the user, simply by searching the hash in rainbow tables; these are per-algorithm tables which already contain the hashes of the most common passwords and more, and they are publicly available on the internet. <a href="http://project-rainbowcrack.com/table.htm" target="_blank" rel="noopener" class="mycode_url"><span style="font-size: xx-small;" class="mycode_size">[example]</span></a><br />
<br />
To avoid this problem, and force the attacker to use brute-force attacks, thus wasting his time, money and energy, thus reducing his intentions to get the passwords, you must put salt on them.<br />
<br />
The salt is a value that is concatenated to the password before hashing it, and there are different ways to do this, and different opinions about how this should be done. <a href="http://forum.sa-mp.com/showthread.php?t=350664" target="_blank" rel="noopener" class="mycode_url"><span style="font-size: xx-small;" class="mycode_size">[tutorial for SA-MP - Whirlpool]</span></a> The salt is unique for each user, and it is not intended to be secret: its value is stored in plain text into the database at the moment of registration, and it is read by your program when the user attempts to log in.<br />
<br />
<br />
<span style="font-size: x-large;" class="mycode_size"><span style="color: #339933;" class="mycode_color"><span style="font-family: Impact;" class="mycode_font">Do not use usernames as salt</span></span></span><br />
If your SA-MP Server does this, and another website that your user is registered on with the same username and the same password does the same, both databases will contain the same password hash for the user. If the attacker, after getting a copy of your database and that of the other website, notices this coincidence, then he will most likely focus on this particular user. <br />
<br />
Also, if you implemented a system to let the user change his password, you would then going to hash it with the same salt as before: you usually want to avoid this.<br />
The best practice is to generate a random string the first time the user registers, and to store it into the database in a separate column. When the user wants to change his password, your program will generate a new random string, and update the value in the database.<br />
<br />
<br />
<span style="color: #339933;" class="mycode_color"><span style="font-size: x-large;" class="mycode_size"><span style="font-family: Impact;" class="mycode_font">Avoid writing your own hashing algorithm</span></span></span><br />
<br />
While it may seem a good idea to write your own algorithm so that there are no pre-made attacks against it, it's not. Real motivated hackers will simply analyze it and then they will crack it. Do not do this, unless you work for the NSA and your algorithm has been tested for years. Do not do this even if you have studied cryptography and security. This is because, even if you think that your algorithm is strong enough, it has not been tested enough against all the possible kinds of attack. Do not risk, and if you have written one, just keep it as your personal project.<br />
<br />
<span style="color: #339933;" class="mycode_color"><span style="font-size: x-large;" class="mycode_size"><span style="font-family: Impact;" class="mycode_font">Use bcrypt</span></span></span><br />
<div style="text-align: center;" class="mycode_align"><img src="https://i0.wp.com/wptavern.com/wp-content/uploads/2016/03/passwords.jpg?ssl=1http://http://" loading="lazy"  alt="[Image: http:]" class="mycode_img" /></div>
<br />
In this post I mentioned different hashing algorithms whose implementations are also available for SA-MP Servers. I must also say that the best option you have is to use bcrypt <a href="https://www.burgershot.gg/showthread.php?tid=136" target="_blank" rel="noopener" class="mycode_url"><span style="font-size: xx-small;" class="mycode_size">[SyS's SampBcrypt]</span></a><span style="font-size: xx-small;" class="mycode_size"> </span><span style="font-size: xx-small;" class="mycode_size"><a href="https://www.burgershot.gg/showthread.php?tid=219" target="_blank" rel="noopener" class="mycode_url">[Bork's samp-crypto]</a>.</span><br />
The primary advantage is that bcrypt, unlike the other algorithms mentioned here, aims at being slow to execute, especially on GPUs. When we are computing our hash during user registration or login, we don't care if it takes 1 second or more, because most likely the user will not notice it, instead we really care about the attacker being as slow as possible at brute/dictionary attacking our hashed password. SHA and Whirlpool are aimed at being as fast as possible to execute, and while this means that the user's password is checked in the blink of an eye, it also means that the attacker is able to crack the password in fewer time (with the appropriate equipment).<br />
By using bcrypt, we make almost impossible for an attacker to crack the password, definitely not worth it for him.<br />
Among the advantages, I have to mention that bcrypt will generate the salt for you and put it in the same string as the hash, so you will just need one data base column.<br />
We hope that the open.mp team will implement native support for bcrypt in the API.<br />
<br />
<span style="color: #339933;" class="mycode_color"><span style="font-size: x-large;" class="mycode_size"><span style="font-family: Impact;" class="mycode_font">Bonus tips</span></span></span><ul class="mycode_list"><li>Also put pepper. Pepper is another value that is added to the algorithm before the final hash, but instead of being a different value for each user, it is a single constant string which is used for every hash, and it is secretly hardcoded in your code. Of course, after your first user is registered, you must never change it again.<br />
</li>
<li>Force the user to use a password of a certain minimum length, and made of multiple words.<br />
</li>
<li>In your register dialog, tell the user not to use the same password as other websites or SA-MP Servers, and not to tell his password to anyone.<br />
</li>
<li>Ask the user to input his password twice during registration and password changing procedure.<br />
</li>
<li>Kick the user and prevent him from logging in again for a certain time if he fails to log in for a certain number of times. This makes unpractical using direct brute force attacks to your server.<br />
</li>
<li>Implement a system to change the password, and encourage your users to change it when they feel it is compromised.<br />
</li>
</ul>
]]></description>
			<content:encoded><![CDATA[Passwords<br />
<hr class="mycode_hr" />
<div style="text-align: center;" class="mycode_align"><span style="font-size: xx-large;" class="mycode_size"><span style="font-family: Impact;" class="mycode_font"><span style="color: #339933;" class="mycode_color">A Proper Way to Store Passwords</span></span></span></div>
<br />
<div style="text-align: center;" class="mycode_align"><span style="color: #336633;" class="mycode_color">By Sasinosoft</span></div>
<br />
<span style="font-size: x-small;" class="mycode_size">This is an edited version of my SA-MP forums article about storing passwords the most secure way.</span><br />
<br />
<span style="font-size: x-large;" class="mycode_size"><span style="color: #339933;" class="mycode_color"><span style="font-family: Impact;" class="mycode_font">Introduction</span></span></span><br />
The first thing we must be aware of when programming anything that will ask the user to enter a password, is that the user is giving us their trust. It is our duty to keep their password as safe as possible, so that in case of attack to our servers, the attacker will not be able to read their password. <br />
<br />
You might think, in the case of San Andreas Multiplayer, that <span style="font-style: italic;" class="mycode_i">"it is just a game"</span>, so the security of the game accounts is not to be taken seriously. However, a poll showed that 59% of people use the same password everywhere or almost everywhere.<span style="font-size: xx-small;" class="mycode_size"> <a href="https://hotforsecurity.bitdefender.com/blog/59-of-people-use-the-same-password-everywhere-poll-finds-19851.html" target="_blank" rel="noopener" class="mycode_url">[source]</a> </span><br />
<br />
If the attacker gets access to your game data base, he will most likely obtain all your users' nicknames and passwords, and if they are not properly hashed, then congratulations: you have just made his work easier. After getting this information, the attacker will proceed to check for each user if he is registered on the main websites, such as Google, Microsoft, mail providers, using the passwords and user names he just stole, and this creates high security risks, including the possibility of stealing payment information.<br />
<br />
Here you are a few tips to make his work harder.<br />
<br />
<br />
<span style="color: #339933;" class="mycode_color"><span style="font-size: x-large;" class="mycode_size"><span style="font-family: Impact;" class="mycode_font">Do not store passwords in plain text</span></span></span><br />
It is believed that at least <span style="font-weight: bold;" class="mycode_b">30% of the websites store the passwords in plain text</span>. <a href="http://plaintextoffenders.com/about/" target="_blank" rel="noopener" class="mycode_url"><span style="font-size: xx-small;" class="mycode_size">[source]</span></a> This is really a shame, and it must come to an end. If any website emails your password back in plain text, then it is likely storing your password as such, and compromising your security in all the websites that you used the same password. <br />
<br />
You must never do so. In the case of a San Andreas Multiplayer server, as soon as you receive the user password in the inputtext parameter of OnDialogResponse, you must one-way hash it. Fortunately, the developers of SA-MP added the SHA256_PassHash function in version 0.3.7 R2-1, so there is no more excuse for those who don't like to use external plugins. <span style="font-size: xx-small;" class="mycode_size"><a href="http://forum.sa-mp.com/showthread.php?t=581336" target="_blank" rel="noopener" class="mycode_url">[great tutorial]</a></span><br />
Said that, I also add that there are better algorithms than SHA-256, such as <span style="font-weight: bold;" class="mycode_b">bcrypt</span>. On the Burgershot forums you can find at least two plugins for bcrypt <span style="font-size: xx-small;" class="mycode_size"><a href="https://www.burgershot.gg/showthread.php?tid=136" target="_blank" rel="noopener" class="mycode_url">[SyS's SampBcrypt]</a> <a href="https://www.burgershot.gg/showthread.php?tid=219" target="_blank" rel="noopener" class="mycode_url">[Bork's samp-crypto]</a>.</span><br />
<br />
<span style="font-size: x-large;" class="mycode_size"><span style="color: #339933;" class="mycode_color"><span style="font-family: Impact;" class="mycode_font">Do not simply hash the password and store it</span></span></span><br />
Why? Just hashing the password and storing it, adds very little security; most users' passwords are simple words or numbers which can be found in dictionaries. If this is the case, the attacker will easily detect the password of the user, simply by searching the hash in rainbow tables; these are per-algorithm tables which already contain the hashes of the most common passwords and more, and they are publicly available on the internet. <a href="http://project-rainbowcrack.com/table.htm" target="_blank" rel="noopener" class="mycode_url"><span style="font-size: xx-small;" class="mycode_size">[example]</span></a><br />
<br />
To avoid this problem, and force the attacker to use brute-force attacks, thus wasting his time, money and energy, thus reducing his intentions to get the passwords, you must put salt on them.<br />
<br />
The salt is a value that is concatenated to the password before hashing it, and there are different ways to do this, and different opinions about how this should be done. <a href="http://forum.sa-mp.com/showthread.php?t=350664" target="_blank" rel="noopener" class="mycode_url"><span style="font-size: xx-small;" class="mycode_size">[tutorial for SA-MP - Whirlpool]</span></a> The salt is unique for each user, and it is not intended to be secret: its value is stored in plain text into the database at the moment of registration, and it is read by your program when the user attempts to log in.<br />
<br />
<br />
<span style="font-size: x-large;" class="mycode_size"><span style="color: #339933;" class="mycode_color"><span style="font-family: Impact;" class="mycode_font">Do not use usernames as salt</span></span></span><br />
If your SA-MP Server does this, and another website that your user is registered on with the same username and the same password does the same, both databases will contain the same password hash for the user. If the attacker, after getting a copy of your database and that of the other website, notices this coincidence, then he will most likely focus on this particular user. <br />
<br />
Also, if you implemented a system to let the user change his password, you would then going to hash it with the same salt as before: you usually want to avoid this.<br />
The best practice is to generate a random string the first time the user registers, and to store it into the database in a separate column. When the user wants to change his password, your program will generate a new random string, and update the value in the database.<br />
<br />
<br />
<span style="color: #339933;" class="mycode_color"><span style="font-size: x-large;" class="mycode_size"><span style="font-family: Impact;" class="mycode_font">Avoid writing your own hashing algorithm</span></span></span><br />
<br />
While it may seem a good idea to write your own algorithm so that there are no pre-made attacks against it, it's not. Real motivated hackers will simply analyze it and then they will crack it. Do not do this, unless you work for the NSA and your algorithm has been tested for years. Do not do this even if you have studied cryptography and security. This is because, even if you think that your algorithm is strong enough, it has not been tested enough against all the possible kinds of attack. Do not risk, and if you have written one, just keep it as your personal project.<br />
<br />
<span style="color: #339933;" class="mycode_color"><span style="font-size: x-large;" class="mycode_size"><span style="font-family: Impact;" class="mycode_font">Use bcrypt</span></span></span><br />
<div style="text-align: center;" class="mycode_align"><img src="https://i0.wp.com/wptavern.com/wp-content/uploads/2016/03/passwords.jpg?ssl=1http://http://" loading="lazy"  alt="[Image: http:]" class="mycode_img" /></div>
<br />
In this post I mentioned different hashing algorithms whose implementations are also available for SA-MP Servers. I must also say that the best option you have is to use bcrypt <a href="https://www.burgershot.gg/showthread.php?tid=136" target="_blank" rel="noopener" class="mycode_url"><span style="font-size: xx-small;" class="mycode_size">[SyS's SampBcrypt]</span></a><span style="font-size: xx-small;" class="mycode_size"> </span><span style="font-size: xx-small;" class="mycode_size"><a href="https://www.burgershot.gg/showthread.php?tid=219" target="_blank" rel="noopener" class="mycode_url">[Bork's samp-crypto]</a>.</span><br />
The primary advantage is that bcrypt, unlike the other algorithms mentioned here, aims at being slow to execute, especially on GPUs. When we are computing our hash during user registration or login, we don't care if it takes 1 second or more, because most likely the user will not notice it, instead we really care about the attacker being as slow as possible at brute/dictionary attacking our hashed password. SHA and Whirlpool are aimed at being as fast as possible to execute, and while this means that the user's password is checked in the blink of an eye, it also means that the attacker is able to crack the password in fewer time (with the appropriate equipment).<br />
By using bcrypt, we make almost impossible for an attacker to crack the password, definitely not worth it for him.<br />
Among the advantages, I have to mention that bcrypt will generate the salt for you and put it in the same string as the hash, so you will just need one data base column.<br />
We hope that the open.mp team will implement native support for bcrypt in the API.<br />
<br />
<span style="color: #339933;" class="mycode_color"><span style="font-size: x-large;" class="mycode_size"><span style="font-family: Impact;" class="mycode_font">Bonus tips</span></span></span><ul class="mycode_list"><li>Also put pepper. Pepper is another value that is added to the algorithm before the final hash, but instead of being a different value for each user, it is a single constant string which is used for every hash, and it is secretly hardcoded in your code. Of course, after your first user is registered, you must never change it again.<br />
</li>
<li>Force the user to use a password of a certain minimum length, and made of multiple words.<br />
</li>
<li>In your register dialog, tell the user not to use the same password as other websites or SA-MP Servers, and not to tell his password to anyone.<br />
</li>
<li>Ask the user to input his password twice during registration and password changing procedure.<br />
</li>
<li>Kick the user and prevent him from logging in again for a certain time if he fails to log in for a certain number of times. This makes unpractical using direct brute force attacks to your server.<br />
</li>
<li>Implement a system to change the password, and encourage your users to change it when they feel it is compromised.<br />
</li>
</ul>
]]></content:encoded>
		</item>
		<item>
			<title><![CDATA[Returning strings and arrays]]></title>
			<link>https://www.burgershot.gg/showthread.php?tid=397</link>
			<pubDate>Sat, 20 Apr 2019 00:07:24 +0000</pubDate>
			<dc:creator><![CDATA[<a href="https://www.burgershot.gg/member.php?action=profile&uid=82">IllidanS4</a>]]></dc:creator>
			<guid isPermaLink="false">https://www.burgershot.gg/showthread.php?tid=397</guid>
			<description><![CDATA[While functions in Pawn typically return only simple cell-sized values, the language does allow for (even native) functions to return arrays and therefore also strings. However, the mechanism that allows it is a bit more complex and may not be suited for some use cases.<br />
<br />
First of all, let's look at the standard way of getting a string out of a function.<br />
<br />
<span style="font-weight: bold;" class="mycode_b">Via an output parameter</span><br />
All native SA-MP functions produce a string via a standard non-const array parameter. Since arrays are passed by reference (meaning the function gets access to the actual <span style="font-style: italic;" class="mycode_i">variable</span> and not just the value inside), the native function can easily store any data inside:<br />
<div class="codeblock"><div class="title">Code:</div><div class="body" dir="ltr"><code>new name[MAX_PLAYER_NAME + 1];<br />
GetPlayerName(playerid, name, sizeof name);</code></div></div>Usually, another parameter is used alongside the array parameter to specify the length of the array. In Pawn, there is no simple way to obtain the length of an array directly at runtime, and so the compiler has to provide the length when needed (the <span style="font-family: Courier New;" class="mycode_font">sizeof</span> operator). For strings, an extra cell must be allocated in the array to store the null character, indicating the end of the string (hence the <span style="font-family: Courier New;" class="mycode_font">+ 1</span>).<br />
<br />
This way is especially useful for obtaining variable-length arrays (such as strings). The <span style="font-family: Courier New;" class="mycode_font">format</span> function, for example, can be only implemented for this way, because the theoretical length of the output string is unlimited.<br />
<br />
<span style="font-weight: bold;" class="mycode_b">Returning an array directly</span><br />
If you want to produce a <span style="font-weight: bold;" class="mycode_b">fixed-size</span> array, you can return it from a function directly:<br />
<div class="codeblock"><div class="title">Code:</div><div class="body" dir="ltr"><code>forward [MAX_PLAYER_NAME + 1]PlayerName(playerid);<br />
stock PlayerName(playerid)<br />
{<br />
    new name[MAX_PLAYER_NAME + 1];<br />
    GetPlayerName(playerid, name, sizeof name);<br />
    return name;<br />
}</code></div></div>The forward declaration is optional, but it is useful since it makes you keep in mind that the length of the array is important.<br />
<br />
Now, if you know a bit of other languages like C etc., you may be aware that since <span style="font-family: Courier New;" class="mycode_font">name</span> is allocated on the stack, it doesn't exist anymore when the function returns. Pawn gets over this fact using a trick – when the function is called, an extra space for the array is allocated, and the address of this variable is provided to the function via a secret parameter.<br />
<br />
In reality, the function looks like this:<br />
<div class="codeblock"><div class="title">Code:</div><div class="body" dir="ltr"><code>stock PlayerName(playerid, output[MAX_PLAYER_NAME + 1])<br />
{<br />
    new name[MAX_PLAYER_NAME + 1];<br />
    GetPlayerName(playerid, name, sizeof name);<br />
    output = name;<br />
}</code></div></div>As you can see, returning a string is just a convenient syntactic shortcut for an extra output parameter.<br />
<br />
However, this comes at a cost of slightly decreased performance and bugs in certain cases. Let's start with the issues:<br />
<div class="codeblock"><div class="title">Code:</div><div class="body" dir="ltr"><code>stock Select(index, arg[], arg2[])<br />
{<br />
    if(index == 0) return arg;<br />
    return arg2;<br />
}</code></div></div>This simple function seems to return one of the arguments, but since they have indeterminate sizes (represented as 0), the compiler thinks this function returns a zero-sized array and does not actually allocate any extra space for the string. You cannot return strings (or arrays) that have indeterminate length, and the compiler sometimes fails to inform you about this.<br />
<br />
<div class="codeblock"><div class="title">Code:</div><div class="body" dir="ltr"><code>forward [4]Func1();<br />
stock Func1()<br />
{<br />
    new str[] = "abc";<br />
    return str;<br />
}<br />
<br />
forward [4]Func2();<br />
stock Func2()<br />
{<br />
    return Func1();<br />
}</code></div></div>This code is also horribly wrong, but in a subtle way. <span style="font-family: Courier New;" class="mycode_font">Func2</span> does allocate extra space for the array returned from <span style="font-family: Courier New;" class="mycode_font">Func1</span>, but before the array can be copied to the secret output array of the second function, it is deallocated again and isn't accessible anymore.<br />
<br />
<div class="codeblock"><div class="title">Code:</div><div class="body" dir="ltr"><code>stock Func(...)<br />
{<br />
    new str[] = "abc";<br />
    return str;<br />
}</code></div></div>The extra output argument is placed <span style="font-style: italic;" class="mycode_i">at the end</span> of all arguments, even after the variadic ones. However, the compiler fails to correctly obtain the return address in this case, and assumes its position is constant.<br />
<br />
In all these cases, returning a string is a really bad thing to do, since the code usually compiles fine, and the issue only becomes apparent at runtime.<br />
<br />
There is a slight performance cost associated with returning arrays as well: the <span style="font-family: Courier New;" class="mycode_font">output = name;</span> always happens if the function is implemented in Pawn, and so the array is copied at least once. Take a look at this code:<br />
<br />
<div class="codeblock"><div class="title">Code:</div><div class="body" dir="ltr"><code>new name[MAX_PLAYER_NAME + 1]; // = PlayerName(playerid); doesn't work, direct assignment isn't supported<br />
name = PlayerName(playerid);</code></div></div>The compiler again allocates extra space for the string returned from <span style="font-family: Courier New;" class="mycode_font">PlayerName</span> (always on the heap), before it moves it to <span style="font-family: Courier New;" class="mycode_font">name</span>. Therefore, the array has to be unnecessarily copied twice before it is usable.<br />
<br />
As you can see, returning arrays has some significant drawbacks, but it is still useful in some cases, when you are cautious.<br />
<div class="codeblock"><div class="title">Code:</div><div class="body" dir="ltr"><code>format(string, sizeof string, "Your name is %s.", PlayerName(playerid));</code></div></div>This is the intended usage of returning arrays – as temporary arguments to other functions. In all other cases, using a normal output parameter is safer and faster. In this case, no extra copying happens at the caller's site.<br />
<br />
<span style="font-family: Courier New;" class="mycode_font">PlayerName</span> itself can be "fixed" to return the string directly without unnecessary copying, via in-line assembly:<br />
<div class="codeblock"><div class="title">Code:</div><div class="body" dir="ltr"><code>forward [MAX_PLAYER_NAME + 1]PlayerName(playerid);<br />
stock PlayerName(playerid)<br />
{<br />
    #assert MAX_PLAYER_NAME + 1 == 25<br />
    #emit PUSH.C 25 // size parameter of GetPlayerName<br />
    #emit PUSH.S 16 // secret return parameter of PlayerName at address 16 (&amp;playerid + 4)<br />
    #emit PUSH.S playerid // equal to 12<br />
    #emit PUSH.C 12 // number of bytes passed to the function (4 * 3 arguments)<br />
    #emit SYSREQ.C GetPlayerName // calling the function<br />
    #emit STACK 16 // cleanup of the arguments from the stack<br />
    #emit RETN<br />
}</code></div></div>This way, <span style="font-family: Courier New;" class="mycode_font">PlayerName</span> does no extra copying, passing the secret return address directly to <span style="font-family: Courier New;" class="mycode_font">GetPlayerName</span>.<br />
<br />
<span style="font-weight: bold;" class="mycode_b"><span style="font-style: italic;" class="mycode_i">PawnPlus</span> strings</span><br />
Dynamic strings in <span style="font-style: italic;" class="mycode_i"><a href="https://www.burgershot.gg/showthread.php?tid=96" target="_blank" rel="noopener" class="mycode_url">PawnPlus</a></span> offer the flexibility and convenience of normal values, since they are passed around as references.<br />
<div class="codeblock"><div class="title">Code:</div><div class="body" dir="ltr"><code>stock String:Func()<br />
{<br />
    return str_new("abc");<br />
}</code></div></div>The string can be returned from functions, passed to other functions or even to native functions, inspected, or modified, and all of this without any additional copying.<br />
<br />
<span style="font-weight: bold;" class="mycode_b">Constant strings</span><br />
All the previous methods are suitable for strings that are produced at runtime, but for constant strings, I'd advise against using any of them. Use macros instead.<br />
<br />
<div class="codeblock"><div class="title">Code:</div><div class="body" dir="ltr"><code>new const _tips[][] = {<br />
    "Tip one",<br />
    "Tip two",<br />
    "Tip three",<br />
    "Tip four"<br />
};<br />
#define RandomTip() (_tips[random(sizeof _tips)])</code></div></div>Using this in functions like <span style="font-family: Courier New;" class="mycode_font">SendClientMessage</span> requires no string copying at all, since the address of the string is used directly. You can also afford to use variable-length strings in the array, resulting in a little more efficient storage.]]></description>
			<content:encoded><![CDATA[While functions in Pawn typically return only simple cell-sized values, the language does allow for (even native) functions to return arrays and therefore also strings. However, the mechanism that allows it is a bit more complex and may not be suited for some use cases.<br />
<br />
First of all, let's look at the standard way of getting a string out of a function.<br />
<br />
<span style="font-weight: bold;" class="mycode_b">Via an output parameter</span><br />
All native SA-MP functions produce a string via a standard non-const array parameter. Since arrays are passed by reference (meaning the function gets access to the actual <span style="font-style: italic;" class="mycode_i">variable</span> and not just the value inside), the native function can easily store any data inside:<br />
<div class="codeblock"><div class="title">Code:</div><div class="body" dir="ltr"><code>new name[MAX_PLAYER_NAME + 1];<br />
GetPlayerName(playerid, name, sizeof name);</code></div></div>Usually, another parameter is used alongside the array parameter to specify the length of the array. In Pawn, there is no simple way to obtain the length of an array directly at runtime, and so the compiler has to provide the length when needed (the <span style="font-family: Courier New;" class="mycode_font">sizeof</span> operator). For strings, an extra cell must be allocated in the array to store the null character, indicating the end of the string (hence the <span style="font-family: Courier New;" class="mycode_font">+ 1</span>).<br />
<br />
This way is especially useful for obtaining variable-length arrays (such as strings). The <span style="font-family: Courier New;" class="mycode_font">format</span> function, for example, can be only implemented for this way, because the theoretical length of the output string is unlimited.<br />
<br />
<span style="font-weight: bold;" class="mycode_b">Returning an array directly</span><br />
If you want to produce a <span style="font-weight: bold;" class="mycode_b">fixed-size</span> array, you can return it from a function directly:<br />
<div class="codeblock"><div class="title">Code:</div><div class="body" dir="ltr"><code>forward [MAX_PLAYER_NAME + 1]PlayerName(playerid);<br />
stock PlayerName(playerid)<br />
{<br />
    new name[MAX_PLAYER_NAME + 1];<br />
    GetPlayerName(playerid, name, sizeof name);<br />
    return name;<br />
}</code></div></div>The forward declaration is optional, but it is useful since it makes you keep in mind that the length of the array is important.<br />
<br />
Now, if you know a bit of other languages like C etc., you may be aware that since <span style="font-family: Courier New;" class="mycode_font">name</span> is allocated on the stack, it doesn't exist anymore when the function returns. Pawn gets over this fact using a trick – when the function is called, an extra space for the array is allocated, and the address of this variable is provided to the function via a secret parameter.<br />
<br />
In reality, the function looks like this:<br />
<div class="codeblock"><div class="title">Code:</div><div class="body" dir="ltr"><code>stock PlayerName(playerid, output[MAX_PLAYER_NAME + 1])<br />
{<br />
    new name[MAX_PLAYER_NAME + 1];<br />
    GetPlayerName(playerid, name, sizeof name);<br />
    output = name;<br />
}</code></div></div>As you can see, returning a string is just a convenient syntactic shortcut for an extra output parameter.<br />
<br />
However, this comes at a cost of slightly decreased performance and bugs in certain cases. Let's start with the issues:<br />
<div class="codeblock"><div class="title">Code:</div><div class="body" dir="ltr"><code>stock Select(index, arg[], arg2[])<br />
{<br />
    if(index == 0) return arg;<br />
    return arg2;<br />
}</code></div></div>This simple function seems to return one of the arguments, but since they have indeterminate sizes (represented as 0), the compiler thinks this function returns a zero-sized array and does not actually allocate any extra space for the string. You cannot return strings (or arrays) that have indeterminate length, and the compiler sometimes fails to inform you about this.<br />
<br />
<div class="codeblock"><div class="title">Code:</div><div class="body" dir="ltr"><code>forward [4]Func1();<br />
stock Func1()<br />
{<br />
    new str[] = "abc";<br />
    return str;<br />
}<br />
<br />
forward [4]Func2();<br />
stock Func2()<br />
{<br />
    return Func1();<br />
}</code></div></div>This code is also horribly wrong, but in a subtle way. <span style="font-family: Courier New;" class="mycode_font">Func2</span> does allocate extra space for the array returned from <span style="font-family: Courier New;" class="mycode_font">Func1</span>, but before the array can be copied to the secret output array of the second function, it is deallocated again and isn't accessible anymore.<br />
<br />
<div class="codeblock"><div class="title">Code:</div><div class="body" dir="ltr"><code>stock Func(...)<br />
{<br />
    new str[] = "abc";<br />
    return str;<br />
}</code></div></div>The extra output argument is placed <span style="font-style: italic;" class="mycode_i">at the end</span> of all arguments, even after the variadic ones. However, the compiler fails to correctly obtain the return address in this case, and assumes its position is constant.<br />
<br />
In all these cases, returning a string is a really bad thing to do, since the code usually compiles fine, and the issue only becomes apparent at runtime.<br />
<br />
There is a slight performance cost associated with returning arrays as well: the <span style="font-family: Courier New;" class="mycode_font">output = name;</span> always happens if the function is implemented in Pawn, and so the array is copied at least once. Take a look at this code:<br />
<br />
<div class="codeblock"><div class="title">Code:</div><div class="body" dir="ltr"><code>new name[MAX_PLAYER_NAME + 1]; // = PlayerName(playerid); doesn't work, direct assignment isn't supported<br />
name = PlayerName(playerid);</code></div></div>The compiler again allocates extra space for the string returned from <span style="font-family: Courier New;" class="mycode_font">PlayerName</span> (always on the heap), before it moves it to <span style="font-family: Courier New;" class="mycode_font">name</span>. Therefore, the array has to be unnecessarily copied twice before it is usable.<br />
<br />
As you can see, returning arrays has some significant drawbacks, but it is still useful in some cases, when you are cautious.<br />
<div class="codeblock"><div class="title">Code:</div><div class="body" dir="ltr"><code>format(string, sizeof string, "Your name is %s.", PlayerName(playerid));</code></div></div>This is the intended usage of returning arrays – as temporary arguments to other functions. In all other cases, using a normal output parameter is safer and faster. In this case, no extra copying happens at the caller's site.<br />
<br />
<span style="font-family: Courier New;" class="mycode_font">PlayerName</span> itself can be "fixed" to return the string directly without unnecessary copying, via in-line assembly:<br />
<div class="codeblock"><div class="title">Code:</div><div class="body" dir="ltr"><code>forward [MAX_PLAYER_NAME + 1]PlayerName(playerid);<br />
stock PlayerName(playerid)<br />
{<br />
    #assert MAX_PLAYER_NAME + 1 == 25<br />
    #emit PUSH.C 25 // size parameter of GetPlayerName<br />
    #emit PUSH.S 16 // secret return parameter of PlayerName at address 16 (&amp;playerid + 4)<br />
    #emit PUSH.S playerid // equal to 12<br />
    #emit PUSH.C 12 // number of bytes passed to the function (4 * 3 arguments)<br />
    #emit SYSREQ.C GetPlayerName // calling the function<br />
    #emit STACK 16 // cleanup of the arguments from the stack<br />
    #emit RETN<br />
}</code></div></div>This way, <span style="font-family: Courier New;" class="mycode_font">PlayerName</span> does no extra copying, passing the secret return address directly to <span style="font-family: Courier New;" class="mycode_font">GetPlayerName</span>.<br />
<br />
<span style="font-weight: bold;" class="mycode_b"><span style="font-style: italic;" class="mycode_i">PawnPlus</span> strings</span><br />
Dynamic strings in <span style="font-style: italic;" class="mycode_i"><a href="https://www.burgershot.gg/showthread.php?tid=96" target="_blank" rel="noopener" class="mycode_url">PawnPlus</a></span> offer the flexibility and convenience of normal values, since they are passed around as references.<br />
<div class="codeblock"><div class="title">Code:</div><div class="body" dir="ltr"><code>stock String:Func()<br />
{<br />
    return str_new("abc");<br />
}</code></div></div>The string can be returned from functions, passed to other functions or even to native functions, inspected, or modified, and all of this without any additional copying.<br />
<br />
<span style="font-weight: bold;" class="mycode_b">Constant strings</span><br />
All the previous methods are suitable for strings that are produced at runtime, but for constant strings, I'd advise against using any of them. Use macros instead.<br />
<br />
<div class="codeblock"><div class="title">Code:</div><div class="body" dir="ltr"><code>new const _tips[][] = {<br />
    "Tip one",<br />
    "Tip two",<br />
    "Tip three",<br />
    "Tip four"<br />
};<br />
#define RandomTip() (_tips[random(sizeof _tips)])</code></div></div>Using this in functions like <span style="font-family: Courier New;" class="mycode_font">SendClientMessage</span> requires no string copying at all, since the address of the string is used directly. You can also afford to use variable-length strings in the array, resulting in a little more efficient storage.]]></content:encoded>
		</item>
		<item>
			<title><![CDATA[How to Create Basic Commands]]></title>
			<link>https://www.burgershot.gg/showthread.php?tid=341</link>
			<pubDate>Thu, 18 Apr 2019 01:50:10 +0000</pubDate>
			<dc:creator><![CDATA[<a href="https://www.burgershot.gg/member.php?action=profile&uid=99">DTV</a>]]></dc:creator>
			<guid isPermaLink="false">https://www.burgershot.gg/showthread.php?tid=341</guid>
			<description><![CDATA[<span style="font-family: Verdana;" class="mycode_font"><span style="font-size: x-small;" class="mycode_size">Note: I'm by no means a professional at scripting but what I'm going to tell is what I've learned through the years. I'm going to explain it how I understand it so apologizes if how I describe something isn't correct. This also won't be using sampctl for obtaining the proper include/plugin files, I've simply haven't learned it yet so please don't haze me for not using it here.</span><br />
</span><br />
<br />
<br />
<div style="text-align: center;" class="mycode_align"><span style="font-family: Verdana;" class="mycode_font"><span style="color: #33ccff;" class="mycode_color"><span style="font-size: xx-large;" class="mycode_size">How to Create Basic Commands</span></span></span></div>
<div style="text-align: center;" class="mycode_align"><span style="font-family: Verdana;" class="mycode_font">Last Updated: 17/04/19</span></div>
<br />
<br />
<div style="text-align: center;" class="mycode_align"><span style="font-family: Verdana;" class="mycode_font">This tutorial is aimed at beginners who have little experience with coding. It will go over what you'll need, how to create a command, what you can do within a command, etc. </span></div>
<br />
<br />
<span style="font-family: Verdana;" class="mycode_font"><span style="color: #33ccff;" class="mycode_color"><span style="font-size: large;" class="mycode_size">I. Requirements</span></span></span><br />
<br />
<br />
<span style="font-family: Verdana;" class="mycode_font">- <a href="https://github.com/YashasSamaga/I-ZCMD" target="_blank" rel="noopener" class="mycode_url">Improved ZCMD</a></span><br />
<span style="font-family: Verdana;" class="mycode_font">- <a href="https://github.com/maddinat0r/sscanf/releases" target="_blank" rel="noopener" class="mycode_url">sscanf</a></span><br />
<br />
<br />
<span style="font-family: Verdana;" class="mycode_font"><span style="color: #33ccff;" class="mycode_color"><span style="font-size: large;" class="mycode_size">II. Getting started</span></span></span><br />
<br />
<br />
<span style="font-family: Verdana;" class="mycode_font">First thing you'll need to do is get your script ready. If you use the default IDE that comes with the SA-MP server package, you can press “New” and it will create this for you. However, the following will work as well:</span><br />
<br />
<br />
<div class="codeblock phpcodeblock"><div class="title">PHP Code:</div><div class="body"><div dir="ltr"><code><span style="color: #FF8000">#include&nbsp;&lt;a_samp&gt;<br /><br /><br /></span><span style="color: #007700">public&nbsp;</span><span style="color: #0000BB">OnGameModeInit</span><span style="color: #007700">()<br />{<br /></span><span style="color: #0000BB"> &nbsp;  return&nbsp;1</span><span style="color: #007700">;<br />}<br /><br /><br />public&nbsp;</span><span style="color: #0000BB">OnGameModeExit</span><span style="color: #007700">()<br />{<br /></span><span style="color: #0000BB"> &nbsp; &nbsp;</span><span style="color: #007700">return&nbsp;</span><span style="color: #0000BB">1</span><span style="color: #007700">;<br />}&nbsp;<br /></span></code></div></div></div><br />
<br />
<span style="font-family: Verdana;" class="mycode_font">The first thing we'll need to do is add I-ZCMD and sscanf to our script so that we can access their functions. We do this by typing </span><span style="font-family: Courier New;" class="mycode_font">#include &lt;include_name_here&gt;</span><span style="font-family: Verdana;" class="mycode_font"> at the top of your script. It should look something like this:</span><br />
<br />
<br />
<div class="codeblock phpcodeblock"><div class="title">PHP Code:</div><div class="body"><div dir="ltr"><code><span style="color: #FF8000">#include&nbsp;&lt;a_samp&gt;&nbsp;//any&nbsp;native&nbsp;samp&nbsp;includes&nbsp;should&nbsp;be&nbsp;above&nbsp;all&nbsp;user-made&nbsp;includes<br />#include&nbsp;&lt;izcmd&gt;<br />#include&nbsp;&lt;sscanf2&gt;&nbsp;<br /></span></code></div></div></div><br />
<br />
<span style="font-family: Verdana;" class="mycode_font">Now you should compile the script to make sure no errors occur. If done right, you should have no errors or warnings. Next step is creating the commands.</span><br />
<br />
<br />
<span style="font-family: Verdana;" class="mycode_font"><span style="color: #33ccff;" class="mycode_color"><span style="font-size: large;" class="mycode_size">III. Creating a Command</span></span></span><br />
<br />
<br />
<span style="font-family: Verdana;" class="mycode_font">Creating a command in the early days of SA-MP required use of </span><span style="font-family: Courier New;" class="mycode_font"><span style="color: #3333ff;" class="mycode_color">public </span>OnPlayerCommandText(playerid, cmdtext[])</span><span style="font-family: Verdana;" class="mycode_font"> along with using strcmp and strtok to understand what commands were being typed and to gather command parameters that the player typed alongside the command. This is no longer used by most scripters as its been shown time and time again to be very inefficient compared to other command processors made today. We'll be using izcmd as our command processor as its (or the original zcmd) the one that most scripters use today. We create a command by doing the following:</span><br />
<br />
<br />
<div class="codeblock phpcodeblock"><div class="title">PHP Code:</div><div class="body"><div dir="ltr"><code><span style="color: #0000BB">CMD</span><span style="color: #007700">:</span><span style="color: #0000BB">examplecmd</span><span style="color: #007700">(</span><span style="color: #0000BB">playerid</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">params</span><span style="color: #007700">[])<br />{<br /></span><span style="color: #0000BB"> &nbsp; &nbsp;</span><span style="color: #007700">return&nbsp;</span><span style="color: #0000BB">1</span><span style="color: #007700">;<br />}&nbsp;<br /></span></code></div></div></div><br />
<br />
<span style="font-family: Verdana;" class="mycode_font">The example above is one of the common ways scripters will create a command, however izcmd allows you to create a command a few more ways such as:</span><br />
<br />
<br />
<div class="codeblock phpcodeblock"><div class="title">PHP Code:</div><div class="body"><div dir="ltr"><code><span style="color: #0000BB">COMMAND</span><span style="color: #007700">:</span><span style="color: #0000BB">examplecmd</span><span style="color: #007700">(</span><span style="color: #0000BB">playerid</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">params</span><span style="color: #007700">[])<br />{<br /></span><span style="color: #0000BB"> &nbsp; &nbsp;</span><span style="color: #007700">return&nbsp;</span><span style="color: #0000BB">1</span><span style="color: #007700">;<br />}<br /></span><span style="color: #0000BB">command</span><span style="color: #007700">(</span><span style="color: #0000BB">examplecmd</span><span style="color: #007700">,</span><span style="color: #0000BB">playerid</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">params</span><span style="color: #007700">[])<br />{<br /></span><span style="color: #0000BB"> &nbsp;  return&nbsp;1</span><span style="color: #007700">;<br />}<br /></span><span style="color: #0000BB">cmd</span><span style="color: #007700">(</span><span style="color: #0000BB">examplecmd</span><span style="color: #007700">,</span><span style="color: #0000BB">playerid</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">params</span><span style="color: #007700">[])<br />{<br /></span><span style="color: #0000BB"> &nbsp;  return&nbsp;1</span><span style="color: #007700">;<br />}&nbsp;<br /></span></code></div></div></div><br />
<br />
<span style="font-family: Verdana;" class="mycode_font">For the rest of the tutorial, we'll be using the first example. Commands can be placed anywhere in the script below the </span><span style="font-family: Courier New;" class="mycode_font">#include</span><span style="font-family: Verdana;" class="mycode_font"> lines. Now when a player types in /examplecmd, it won't do anything as there's no code to go along with it however the script will recognize it as a command. Let's made this command send out a simple message:</span><br />
<br />
<br />
<div class="codeblock phpcodeblock"><div class="title">PHP Code:</div><div class="body"><div dir="ltr"><code><span style="color: #0000BB">CMD</span><span style="color: #007700">:</span><span style="color: #0000BB">examplecmd</span><span style="color: #007700">(</span><span style="color: #0000BB">playerid</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">params</span><span style="color: #007700">[])<br />{<br /></span><span style="color: #0000BB"> &nbsp;  SendClientMessage</span><span style="color: #007700">(</span><span style="color: #0000BB">playerid</span><span style="color: #007700">,&nbsp;-</span><span style="color: #0000BB">1</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">“Hello&nbsp;world</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">I&nbsp;made&nbsp;a&nbsp;command</span><span style="color: #007700">!</span><span style="color: #0000BB">”</span><span style="color: #007700">);&nbsp;</span><span style="color: #FF8000">//sends&nbsp;a&nbsp;message&nbsp;to&nbsp;the&nbsp;client&nbsp;(the&nbsp;player)<br /></span><span style="color: #0000BB"> &nbsp;  return&nbsp;1</span><span style="color: #007700">;<br />}&nbsp;<br /></span></code></div></div></div><br />
<br />
<span style="font-family: Verdana;" class="mycode_font">Now when a player types /examplecmd, it will show them the message “Hello world, I made a command!”. This is a very simple command however, so let's make it give the player full health and armour:</span><br />
<br />
<br />
<div class="codeblock phpcodeblock"><div class="title">PHP Code:</div><div class="body"><div dir="ltr"><code><span style="color: #0000BB">CMD</span><span style="color: #007700">:</span><span style="color: #0000BB">examplecmd</span><span style="color: #007700">(</span><span style="color: #0000BB">playerid</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">params</span><span style="color: #007700">[])<br />{<br /></span><span style="color: #0000BB"> &nbsp;  SendClientMessage</span><span style="color: #007700">(</span><span style="color: #0000BB">playerid</span><span style="color: #007700">,&nbsp;-</span><span style="color: #0000BB">1</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">“Hello&nbsp;world</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">I&nbsp;made&nbsp;a&nbsp;command</span><span style="color: #007700">!</span><span style="color: #0000BB">”</span><span style="color: #007700">);&nbsp;</span><span style="color: #FF8000">//sends&nbsp;a&nbsp;message&nbsp;to&nbsp;the&nbsp;client&nbsp;(the&nbsp;player)<br /></span><span style="color: #0000BB"> &nbsp;  SetPlayerHealth</span><span style="color: #007700">(</span><span style="color: #0000BB">playerid</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">100.0</span><span style="color: #007700">);&nbsp;</span><span style="color: #FF8000">//sets&nbsp;the&nbsp;player's&nbsp;health&nbsp;value&nbsp;to&nbsp;100&nbsp;(full&nbsp;health)<br /></span><span style="color: #0000BB"> &nbsp;  SetPlayerArmour</span><span style="color: #007700">(</span><span style="color: #0000BB">playerid</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">100.0</span><span style="color: #007700">);&nbsp;</span><span style="color: #FF8000">//sets&nbsp;the&nbsp;player's&nbsp;armor&nbsp;value&nbsp;to&nbsp;100&nbsp;(full&nbsp;armour)<br /></span><span style="color: #0000BB"> &nbsp;  return&nbsp;1</span><span style="color: #007700">;<br />}&nbsp;<br /></span></code></div></div></div><br />
<br />
<span style="font-family: Verdana;" class="mycode_font">Now when the player types /examplecmd, it will set the player's health and armour values to 100 along with sending them a message. Now, making commands like this will work fine but what if a player needs to type in additional information that the command requires from the player?</span><br />
<br />
<br />
<span style="font-family: Verdana;" class="mycode_font"><span style="color: #33ccff;" class="mycode_color"><span style="font-size: large;" class="mycode_size">IV: Dealing with parameters</span></span></span><br />
<br />
<br />
<span style="font-family: Verdana;" class="mycode_font">Parameters are what the player will type after the command so that the script can use them. Not all commands will require parameters but when they do, you'll need something to discern if the player's typed any parameters after the command, what those parameters are, how many there are, etc. This is what sscanf will help us do. Here's an example command where the player needs to type in a number to set their health to a specific value:</span><br />
<br />
<br />
<div class="codeblock phpcodeblock"><div class="title">PHP Code:</div><div class="body"><div dir="ltr"><code><span style="color: #0000BB">CMD</span><span style="color: #007700">:</span><span style="color: #0000BB">sethealth</span><span style="color: #007700">(</span><span style="color: #0000BB">playerid</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">params</span><span style="color: #007700">[])<br />{<br /></span><span style="color: #0000BB"> &nbsp;  new&nbsp;Float</span><span style="color: #007700">:</span><span style="color: #0000BB">hp</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">string</span><span style="color: #007700">[</span><span style="color: #0000BB">128</span><span style="color: #007700">];&nbsp;</span><span style="color: #FF8000">//we&nbsp;declare&nbsp;a&nbsp;float&nbsp;variable&nbsp;that&nbsp;will&nbsp;hold&nbsp;the&nbsp;specific&nbsp;value&nbsp;typed&nbsp;by&nbsp;the&nbsp;player&nbsp;along&nbsp;with&nbsp;a&nbsp;string&nbsp;variable&nbsp;that'll&nbsp;be&nbsp;used&nbsp;to&nbsp;display&nbsp;a&nbsp;formatted&nbsp;message<br /></span><span style="color: #0000BB"> &nbsp;  if</span><span style="color: #007700">(</span><span style="color: #0000BB">sscanf</span><span style="color: #007700">(</span><span style="color: #0000BB">params</span><span style="color: #007700">,</span><span style="color: #0000BB">”f”</span><span style="color: #007700">,</span><span style="color: #0000BB">hp</span><span style="color: #007700">))&nbsp;</span><span style="color: #FF8000">//here,&nbsp;sscanf&nbsp;is&nbsp;used&nbsp;to&nbsp;tell&nbsp;the&nbsp;script&nbsp;the&nbsp;values&nbsp;it&nbsp;should&nbsp;expect&nbsp;from&nbsp;the&nbsp;player.&nbsp;In&nbsp;this&nbsp;case,&nbsp;its&nbsp;checking&nbsp;if&nbsp;anything&nbsp;besides&nbsp;the&nbsp;command&nbsp;name&nbsp;was&nbsp;typed&nbsp;or&nbsp;if&nbsp;the&nbsp;value&nbsp;provided&nbsp;will&nbsp;work&nbsp;(i.e.&nbsp;if&nbsp;a&nbsp;letter&nbsp;was&nbsp;typed&nbsp;in&nbsp;place&nbsp;of&nbsp;a&nbsp;number)<br /></span><span style="color: #0000BB"> &nbsp;  </span><span style="color: #007700">{<br /></span><span style="color: #0000BB"> &nbsp;   &nbsp;  return&nbsp;SendClientMessage</span><span style="color: #007700">(</span><span style="color: #0000BB">playerid</span><span style="color: #007700">,&nbsp;-</span><span style="color: #0000BB">1</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">“Syntax</span><span style="color: #007700">:&nbsp;/</span><span style="color: #0000BB">sethealth&nbsp;</span><span style="color: #007700">[</span><span style="color: #0000BB">value</span><span style="color: #007700">]</span><span style="color: #0000BB">”</span><span style="color: #007700">);&nbsp;</span><span style="color: #FF8000">//this&nbsp;is&nbsp;where&nbsp;you&nbsp;tell&nbsp;the&nbsp;player&nbsp;how&nbsp;to&nbsp;use&nbsp;the&nbsp;command&nbsp;properly<br /></span><span style="color: #0000BB"> &nbsp;  </span><span style="color: #007700">}<br /><br /></span><span style="color: #0000BB"> &nbsp;  SetPlayerHealth</span><span style="color: #007700">(</span><span style="color: #0000BB">playerid</span><span style="color: #007700">,</span><span style="color: #0000BB">hp</span><span style="color: #007700">);&nbsp;</span><span style="color: #FF8000">//assuming&nbsp;that&nbsp;sscanf&nbsp;found&nbsp;nothing&nbsp;wrong&nbsp;with&nbsp;the&nbsp;value&nbsp;the&nbsp;player&nbsp;provided,&nbsp;it&nbsp;will&nbsp;store&nbsp;that&nbsp;value&nbsp;in&nbsp;our&nbsp;`hp`&nbsp;variable,&nbsp;ready&nbsp;to&nbsp;be&nbsp;used&nbsp;in&nbsp;our&nbsp;command&nbsp;here.<br /></span><span style="color: #0000BB"> &nbsp;  format</span><span style="color: #007700">(</span><span style="color: #0000BB">string</span><span style="color: #007700">,</span><span style="color: #0000BB">sizeof</span><span style="color: #007700">(string),</span><span style="color: #0000BB">”You&nbsp;have&nbsp;set&nbsp;your&nbsp;health&nbsp;value&nbsp;to&nbsp;</span><span style="color: #007700">%</span><span style="color: #0000BB">f</span><span style="color: #007700">.</span><span style="color: #0000BB">”</span><span style="color: #007700">,</span><span style="color: #0000BB">hp</span><span style="color: #007700">);&nbsp;</span><span style="color: #FF8000">//format&nbsp;is&nbsp;used&nbsp;here&nbsp;to&nbsp;have&nbsp;the&nbsp;string&nbsp;variable&nbsp;store&nbsp;a&nbsp;message&nbsp;where&nbsp;the&nbsp;message&nbsp;needs&nbsp;additional&nbsp;information&nbsp;to&nbsp;finish,&nbsp;in&nbsp;this&nbsp;case&nbsp;the&nbsp;value&nbsp;the&nbsp;player&nbsp;typed&nbsp;in&nbsp;for&nbsp;the&nbsp;command<br /></span><span style="color: #0000BB"> &nbsp;  SendClientMessage</span><span style="color: #007700">(</span><span style="color: #0000BB">playerid</span><span style="color: #007700">,&nbsp;-</span><span style="color: #0000BB">1</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">string</span><span style="color: #007700">);&nbsp;</span><span style="color: #FF8000">//instead&nbsp;of&nbsp;typing&nbsp;a&nbsp;message,&nbsp;we&nbsp;put&nbsp;our&nbsp;`string`&nbsp;variable&nbsp;in&nbsp;place&nbsp;as&nbsp;its&nbsp;already&nbsp;storing&nbsp;a&nbsp;message&nbsp;to&nbsp;be&nbsp;used<br /></span><span style="color: #0000BB"> &nbsp;  return&nbsp;1</span><span style="color: #007700">;<br />}&nbsp;<br /></span></code></div></div></div><br />
<br />
<span style="font-family: Verdana;" class="mycode_font">When the player types /sethealth, the script will see that no parameters have been typed in and will give a message to the player on how to use the command. The same will happen if the player was to type something like `/sethealth f` as its looking for a decimal number. Once the player types in a number, the script will see that and (assuming there's no other parameters to deal with) continue with the command with the information given by the player. If the player typed `/sethealth 100`, it will set their health to 100, if they typed `/sethealth 1`, it will set their health to 1 and so on.</span><br />
<br />
<br />
<span style="font-family: Verdana;" class="mycode_font"><span style="color: #33ccff;" class="mycode_color"><span style="font-size: large;" class="mycode_size">V: Further Examples</span></span></span><br />
<br />
<br />
<span style="font-family: Verdana;" class="mycode_font">For the final section, I'm going to leave a few basic commands that do various things to give an idea of how creating a command goes. If there's something I'm doing that I haven't covered earlier, it will be mentioned in the examples.</span><br />
<br />
<br />
<span style="font-size: medium;" class="mycode_size"><span style="font-family: Verdana;" class="mycode_font"><span style="font-weight: bold;" class="mycode_b">a.</span> /freezeplayer</span></span><br />
<div class="codeblock phpcodeblock"><div class="title">PHP Code:</div><div class="body"><div dir="ltr"><code><span style="color: #0000BB">CMD</span><span style="color: #007700">:</span><span style="color: #0000BB">freezeplayer</span><span style="color: #007700">(</span><span style="color: #0000BB">playerid</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">params</span><span style="color: #007700">[])<br />{<br /></span><span style="color: #0000BB"> &nbsp;  new&nbsp;targetid</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">string</span><span style="color: #007700">[</span><span style="color: #0000BB">128</span><span style="color: #007700">],&nbsp;</span><span style="color: #0000BB">name</span><span style="color: #007700">[</span><span style="color: #0000BB">MAX_PLAYER_NAME</span><span style="color: #007700">+</span><span style="color: #0000BB">1</span><span style="color: #007700">];&nbsp;</span><span style="color: #FF8000">//name&nbsp;string&nbsp;is&nbsp;to&nbsp;store&nbsp;player's&nbsp;name,&nbsp;the&nbsp;+1&nbsp;is&nbsp;to&nbsp;account&nbsp;for&nbsp;null&nbsp;character<br /></span><span style="color: #0000BB"> &nbsp;  if</span><span style="color: #007700">(</span><span style="color: #0000BB">sscanf</span><span style="color: #007700">(</span><span style="color: #0000BB">params</span><span style="color: #007700">,</span><span style="color: #0000BB">”r”</span><span style="color: #007700">,</span><span style="color: #0000BB">targetid</span><span style="color: #007700">))&nbsp;</span><span style="color: #FF8000">//”r”&nbsp;specifier&nbsp;tells&nbsp;sscanf&nbsp;to&nbsp;look&nbsp;for&nbsp;a&nbsp;playerid.&nbsp;Some&nbsp;will&nbsp;tell&nbsp;you&nbsp;to&nbsp;use&nbsp;“u”&nbsp;but&nbsp;that&nbsp;looks&nbsp;for&nbsp;both&nbsp;players&nbsp;AND&nbsp;npcs,&nbsp;either&nbsp;way&nbsp;it&nbsp;will&nbsp;work&nbsp;but&nbsp;if&nbsp;you&nbsp;don't&nbsp;want&nbsp;npcs&nbsp;to&nbsp;be&nbsp;included,&nbsp;use&nbsp;“r”&nbsp;for&nbsp;playerid&nbsp;parameters<br /></span><span style="color: #0000BB"> &nbsp;  </span><span style="color: #007700">{<br /></span><span style="color: #0000BB"> &nbsp;   &nbsp;  return&nbsp;SendClientMessage</span><span style="color: #007700">(</span><span style="color: #0000BB">playerid</span><span style="color: #007700">,&nbsp;-</span><span style="color: #0000BB">1</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">“Syntax</span><span style="color: #007700">:</span><span style="color: #0000BB"> </span><span style="color: #007700">/</span><span style="color: #0000BB">freezeplayer&nbsp;</span><span style="color: #007700">[</span><span style="color: #0000BB">playerid</span><span style="color: #007700">/</span><span style="color: #0000BB">name</span><span style="color: #007700">]</span><span style="color: #0000BB">”</span><span style="color: #007700">);<br /></span><span style="color: #0000BB"> &nbsp;  </span><span style="color: #007700">}<br /></span><span style="color: #0000BB"> &nbsp;  TogglePlayerControllable</span><span style="color: #007700">(</span><span style="color: #0000BB">targetid</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">false</span><span style="color: #007700">);&nbsp;</span><span style="color: #FF8000">//this&nbsp;function&nbsp;will&nbsp;toggle&nbsp;the&nbsp;player's&nbsp;ability&nbsp;to&nbsp;move,&nbsp;depending&nbsp;on&nbsp;whether&nbsp;its&nbsp;toggled&nbsp;true&nbsp;or&nbsp;false&nbsp;(1&nbsp;or&nbsp;0)<br /></span><span style="color: #0000BB"> &nbsp;  GetPlayerName</span><span style="color: #007700">(</span><span style="color: #0000BB">targetid</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">name</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">sizeof</span><span style="color: #007700">(</span><span style="color: #0000BB">name</span><span style="color: #007700">));&nbsp;</span><span style="color: #FF8000">//this&nbsp;is&nbsp;used&nbsp;to&nbsp;get&nbsp;the&nbsp;player's&nbsp;name&nbsp;and&nbsp;store&nbsp;it&nbsp;in&nbsp;the&nbsp;`name`&nbsp;variable<br /></span><span style="color: #0000BB"> &nbsp;  format</span><span style="color: #007700">(</span><span style="color: #0000BB">string</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">sizeof</span><span style="color: #007700">(string),&nbsp;</span><span style="color: #0000BB">”You&nbsp;have&nbsp;frozen&nbsp;</span><span style="color: #007700">%</span><span style="color: #0000BB">s</span><span style="color: #007700">.</span><span style="color: #0000BB">”</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">name</span><span style="color: #007700">);<br /></span><span style="color: #0000BB"> &nbsp;  SendClientMessage</span><span style="color: #007700">(</span><span style="color: #0000BB">playerid</span><span style="color: #007700">,&nbsp;-</span><span style="color: #0000BB">1</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">string</span><span style="color: #007700">);<br /></span><span style="color: #0000BB"> &nbsp;  return&nbsp;1</span><span style="color: #007700">;<br />}&nbsp;<br /></span></code></div></div></div><br />
<br />
<span style="font-size: medium;" class="mycode_size"><span style="font-family: Verdana;" class="mycode_font"><span style="font-weight: bold;" class="mycode_b">b.</span> /givedeagle</span></span><br />
<div class="codeblock phpcodeblock"><div class="title">PHP Code:</div><div class="body"><div dir="ltr"><code><span style="color: #0000BB">CMD</span><span style="color: #007700">:</span><span style="color: #0000BB">givedeagle</span><span style="color: #007700">(</span><span style="color: #0000BB">playerid</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">params</span><span style="color: #007700">[])<br />{<br /></span><span style="color: #0000BB"> &nbsp;  new&nbsp;targetid</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">ammo</span><span style="color: #007700">,</span><span style="color: #0000BB">string</span><span style="color: #007700">[</span><span style="color: #0000BB">128</span><span style="color: #007700">],</span><span style="color: #0000BB">name</span><span style="color: #007700">[</span><span style="color: #0000BB">MAX_PLAYER_NAME</span><span style="color: #007700">+</span><span style="color: #0000BB">1</span><span style="color: #007700">];<br /></span><span style="color: #0000BB"> &nbsp;  if</span><span style="color: #007700">(</span><span style="color: #0000BB">sscanf</span><span style="color: #007700">(</span><span style="color: #0000BB">params</span><span style="color: #007700">,</span><span style="color: #0000BB">”rd”</span><span style="color: #007700">,</span><span style="color: #0000BB">targetid</span><span style="color: #007700">,</span><span style="color: #0000BB">ammo</span><span style="color: #007700">))&nbsp;</span><span style="color: #FF8000">//the&nbsp;“d”&nbsp;specifier&nbsp;is&nbsp;meant&nbsp;for&nbsp;integers,&nbsp;you&nbsp;can&nbsp;use&nbsp;“i”&nbsp;in&nbsp;place&nbsp;of&nbsp;it&nbsp;as&nbsp;well<br /></span><span style="color: #0000BB"> &nbsp;  </span><span style="color: #007700">{<br /></span><span style="color: #0000BB"> &nbsp;   &nbsp;  return&nbsp;SendClientMessage</span><span style="color: #007700">(</span><span style="color: #0000BB">playerid</span><span style="color: #007700">,&nbsp;-</span><span style="color: #0000BB">1</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">“Syntax</span><span style="color: #007700">:</span><span style="color: #0000BB"> </span><span style="color: #007700">/</span><span style="color: #0000BB">givedeagle&nbsp;</span><span style="color: #007700">[</span><span style="color: #0000BB">playerid</span><span style="color: #007700">/</span><span style="color: #0000BB">name</span><span style="color: #007700">]&nbsp;[</span><span style="color: #0000BB">ammo</span><span style="color: #007700">]</span><span style="color: #0000BB">”</span><span style="color: #007700">);<br /></span><span style="color: #0000BB"> &nbsp;  </span><span style="color: #007700">}<br /></span><span style="color: #0000BB"> &nbsp;  GivePlayerWeapon</span><span style="color: #007700">(</span><span style="color: #0000BB">targetid</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">WEAPON_DEAGLE</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">ammo</span><span style="color: #007700">);&nbsp;</span><span style="color: #FF8000">//gives&nbsp;the&nbsp;targetid&nbsp;a&nbsp;desert&nbsp;eagle&nbsp;with&nbsp;the&nbsp;ammo&nbsp;the&nbsp;player&nbsp;specified&nbsp;(you&nbsp;can&nbsp;use&nbsp;24&nbsp;in&nbsp;place&nbsp;of&nbsp;WEAPON_DEAGLE&nbsp;and&nbsp;it&nbsp;will&nbsp;work&nbsp;the&nbsp;same).<br /></span><span style="color: #0000BB"> &nbsp;  GetPlayerName</span><span style="color: #007700">(</span><span style="color: #0000BB">targetid</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">name</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">sizeof</span><span style="color: #007700">(</span><span style="color: #0000BB">name</span><span style="color: #007700">));<br /></span><span style="color: #0000BB"> &nbsp;  format</span><span style="color: #007700">(</span><span style="color: #0000BB">string</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">sizeof</span><span style="color: #007700">(string),&nbsp;</span><span style="color: #0000BB">“You&nbsp;have&nbsp;given&nbsp;</span><span style="color: #007700">%</span><span style="color: #0000BB">s&nbsp;a&nbsp;Desert&nbsp;Eagle&nbsp;with&nbsp;</span><span style="color: #007700">%</span><span style="color: #0000BB">d&nbsp;ammo</span><span style="color: #007700">.</span><span style="color: #0000BB">”</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">name</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">ammo</span><span style="color: #007700">);<br /></span><span style="color: #0000BB"> &nbsp;  SendClientMessage</span><span style="color: #007700">(</span><span style="color: #0000BB">playerid</span><span style="color: #007700">,&nbsp;-</span><span style="color: #0000BB">1</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">string</span><span style="color: #007700">);<br /></span><span style="color: #0000BB"> &nbsp;  return&nbsp;1</span><span style="color: #007700">;<br />}&nbsp;<br /></span></code></div></div></div><br />
<br />
<span style="font-size: medium;" class="mycode_size"><span style="font-family: Verdana;" class="mycode_font"><span style="font-weight: bold;" class="mycode_b">c.</span> /setserverhour</span></span><br />
<div class="codeblock phpcodeblock"><div class="title">PHP Code:</div><div class="body"><div dir="ltr"><code><span style="color: #0000BB">CMD</span><span style="color: #007700">:</span><span style="color: #0000BB">setserverhour</span><span style="color: #007700">(</span><span style="color: #0000BB">playerid</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">params</span><span style="color: #007700">[])<br />{<br /></span><span style="color: #0000BB"> &nbsp;  new&nbsp;hour</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">string</span><span style="color: #007700">[</span><span style="color: #0000BB">128</span><span style="color: #007700">];<br /></span><span style="color: #0000BB"> &nbsp;  if</span><span style="color: #007700">(</span><span style="color: #0000BB">sscanf</span><span style="color: #007700">(</span><span style="color: #0000BB">params</span><span style="color: #007700">,</span><span style="color: #0000BB">”d”</span><span style="color: #007700">,</span><span style="color: #0000BB">hour</span><span style="color: #007700">))&nbsp;<br /></span><span style="color: #0000BB"> &nbsp;  </span><span style="color: #007700">{<br /></span><span style="color: #0000BB"> &nbsp;   &nbsp;  return&nbsp;SendClientMessage</span><span style="color: #007700">(</span><span style="color: #0000BB">playerid</span><span style="color: #007700">,&nbsp;-</span><span style="color: #0000BB">1</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">“Syntax</span><span style="color: #007700">:</span><span style="color: #0000BB"> </span><span style="color: #007700">/</span><span style="color: #0000BB">setserverhour&nbsp;</span><span style="color: #007700">[</span><span style="color: #0000BB">hour</span><span style="color: #007700">]</span><span style="color: #0000BB">”</span><span style="color: #007700">);<br /></span><span style="color: #0000BB"> &nbsp;  </span><span style="color: #007700">}<br /></span><span style="color: #0000BB"> &nbsp;  if</span><span style="color: #007700">(</span><span style="color: #0000BB">hour&nbsp;</span><span style="color: #007700">&lt;&nbsp;</span><span style="color: #0000BB">0&nbsp;</span><span style="color: #007700">||&nbsp;</span><span style="color: #0000BB">hour&nbsp;</span><span style="color: #007700">&gt;&nbsp;</span><span style="color: #0000BB">23</span><span style="color: #007700">)&nbsp;</span><span style="color: #FF8000">//checking&nbsp;to&nbsp;see&nbsp;if&nbsp;the&nbsp;hour&nbsp;inputted&nbsp;is&nbsp;either&nbsp;below&nbsp;0&nbsp;or&nbsp;above&nbsp;23<br /></span><span style="color: #0000BB"> &nbsp;  </span><span style="color: #007700">{<br /></span><span style="color: #0000BB"> &nbsp;   &nbsp;  return&nbsp;SendClientMessage</span><span style="color: #007700">(</span><span style="color: #0000BB">playerid</span><span style="color: #007700">,&nbsp;-</span><span style="color: #0000BB">1</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">“You&nbsp;can&nbsp;only&nbsp;set&nbsp;the&nbsp;server&nbsp;hour&nbsp;between&nbsp;0&nbsp;to&nbsp;23.”</span><span style="color: #007700">);<br /></span><span style="color: #0000BB"> &nbsp;  </span><span style="color: #007700">}<br /></span><span style="color: #0000BB"> &nbsp;  SetWorldTime</span><span style="color: #007700">(</span><span style="color: #0000BB">hour</span><span style="color: #007700">);&nbsp;</span><span style="color: #FF8000">//this&nbsp;is&nbsp;used&nbsp;to&nbsp;set&nbsp;the&nbsp;server's&nbsp;time&nbsp;and&nbsp;thus&nbsp;whether&nbsp;its&nbsp;day&nbsp;or&nbsp;night,&nbsp;it&nbsp;only&nbsp;accepts&nbsp;an&nbsp;hour&nbsp;parameter<br /></span><span style="color: #0000BB"> &nbsp;  format</span><span style="color: #007700">(</span><span style="color: #0000BB">string</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">sizeof</span><span style="color: #007700">(string),&nbsp;</span><span style="color: #0000BB">“You&nbsp;have&nbsp;set&nbsp;the&nbsp;server&nbsp;hour&nbsp;to&nbsp;</span><span style="color: #007700">%</span><span style="color: #0000BB">d</span><span style="color: #007700">.</span><span style="color: #0000BB">”</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">hour</span><span style="color: #007700">);<br /></span><span style="color: #0000BB"> &nbsp;  SendClientMessage</span><span style="color: #007700">(</span><span style="color: #0000BB">playerid</span><span style="color: #007700">,&nbsp;-</span><span style="color: #0000BB">1</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">string</span><span style="color: #007700">);<br /></span><span style="color: #0000BB"> &nbsp;  return&nbsp;1</span><span style="color: #007700">;<br />}&nbsp;<br /></span></code></div></div></div><br />
<br />
<span style="font-size: medium;" class="mycode_size"><span style="font-family: Verdana;" class="mycode_font"><span style="font-weight: bold;" class="mycode_b">d.</span> /setmoney</span></span><br />
<div class="codeblock phpcodeblock"><div class="title">PHP Code:</div><div class="body"><div dir="ltr"><code><span style="color: #0000BB">CMD</span><span style="color: #007700">:</span><span style="color: #0000BB">setmoney</span><span style="color: #007700">(</span><span style="color: #0000BB">playerid</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">params</span><span style="color: #007700">[])<br />{<br /></span><span style="color: #0000BB"> &nbsp;  new&nbsp;amount</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">string</span><span style="color: #007700">[</span><span style="color: #0000BB">128</span><span style="color: #007700">];<br /></span><span style="color: #0000BB"> &nbsp;  if</span><span style="color: #007700">(</span><span style="color: #0000BB">sscanf</span><span style="color: #007700">(</span><span style="color: #0000BB">params</span><span style="color: #007700">,</span><span style="color: #0000BB">”d”</span><span style="color: #007700">,</span><span style="color: #0000BB">amount</span><span style="color: #007700">))<br /></span><span style="color: #0000BB"> &nbsp;  </span><span style="color: #007700">{<br /></span><span style="color: #0000BB"> &nbsp;   &nbsp;  return&nbsp;SendClientMessage</span><span style="color: #007700">(</span><span style="color: #0000BB">playerid</span><span style="color: #007700">,&nbsp;-</span><span style="color: #0000BB">1</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">“Syntax</span><span style="color: #007700">:</span><span style="color: #0000BB"> </span><span style="color: #007700">/</span><span style="color: #0000BB">setmoney&nbsp;</span><span style="color: #007700">[</span><span style="color: #0000BB">amount</span><span style="color: #007700">]</span><span style="color: #0000BB">”</span><span style="color: #007700">);<br /></span><span style="color: #0000BB"> &nbsp;  </span><span style="color: #007700">}<br /></span><span style="color: #0000BB"> &nbsp;  ResetPlayerMoney</span><span style="color: #007700">(</span><span style="color: #0000BB">playerid</span><span style="color: #007700">);&nbsp;</span><span style="color: #FF8000">//resets&nbsp;any&nbsp;money&nbsp;the&nbsp;player&nbsp;has&nbsp;to&nbsp;0<br /></span><span style="color: #0000BB"> &nbsp;  GivePlayerMoney</span><span style="color: #007700">(</span><span style="color: #0000BB">playerid</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">amount</span><span style="color: #007700">);&nbsp;</span><span style="color: #FF8000">//gives&nbsp;the&nbsp;player&nbsp;the&nbsp;amount&nbsp;of&nbsp;money&nbsp;they&nbsp;specify<br /></span><span style="color: #0000BB"> &nbsp;  format</span><span style="color: #007700">(</span><span style="color: #0000BB">string</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">sizeof</span><span style="color: #007700">(string),&nbsp;</span><span style="color: #0000BB">“You&nbsp;have&nbsp;set&nbsp;your&nbsp;money&nbsp;to&nbsp;</span><span style="color: #007700">&#36;%</span><span style="color: #0000BB">d</span><span style="color: #007700">.</span><span style="color: #0000BB">”</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">amount</span><span style="color: #007700">);<br /></span><span style="color: #0000BB"> &nbsp;  SendClientMessage</span><span style="color: #007700">(</span><span style="color: #0000BB">playerid</span><span style="color: #007700">,&nbsp;-</span><span style="color: #0000BB">1</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">string</span><span style="color: #007700">);<br /></span><span style="color: #0000BB"> &nbsp;  return&nbsp;1</span><span style="color: #007700">;<br />}&nbsp;<br /></span></code></div></div></div><br />
<br />
<span style="font-family: Verdana;" class="mycode_font">This concludes the tutorial. I've never really written anything like this so feedback is appreciated, I hope one of you learns something from this!</span>]]></description>
			<content:encoded><![CDATA[<span style="font-family: Verdana;" class="mycode_font"><span style="font-size: x-small;" class="mycode_size">Note: I'm by no means a professional at scripting but what I'm going to tell is what I've learned through the years. I'm going to explain it how I understand it so apologizes if how I describe something isn't correct. This also won't be using sampctl for obtaining the proper include/plugin files, I've simply haven't learned it yet so please don't haze me for not using it here.</span><br />
</span><br />
<br />
<br />
<div style="text-align: center;" class="mycode_align"><span style="font-family: Verdana;" class="mycode_font"><span style="color: #33ccff;" class="mycode_color"><span style="font-size: xx-large;" class="mycode_size">How to Create Basic Commands</span></span></span></div>
<div style="text-align: center;" class="mycode_align"><span style="font-family: Verdana;" class="mycode_font">Last Updated: 17/04/19</span></div>
<br />
<br />
<div style="text-align: center;" class="mycode_align"><span style="font-family: Verdana;" class="mycode_font">This tutorial is aimed at beginners who have little experience with coding. It will go over what you'll need, how to create a command, what you can do within a command, etc. </span></div>
<br />
<br />
<span style="font-family: Verdana;" class="mycode_font"><span style="color: #33ccff;" class="mycode_color"><span style="font-size: large;" class="mycode_size">I. Requirements</span></span></span><br />
<br />
<br />
<span style="font-family: Verdana;" class="mycode_font">- <a href="https://github.com/YashasSamaga/I-ZCMD" target="_blank" rel="noopener" class="mycode_url">Improved ZCMD</a></span><br />
<span style="font-family: Verdana;" class="mycode_font">- <a href="https://github.com/maddinat0r/sscanf/releases" target="_blank" rel="noopener" class="mycode_url">sscanf</a></span><br />
<br />
<br />
<span style="font-family: Verdana;" class="mycode_font"><span style="color: #33ccff;" class="mycode_color"><span style="font-size: large;" class="mycode_size">II. Getting started</span></span></span><br />
<br />
<br />
<span style="font-family: Verdana;" class="mycode_font">First thing you'll need to do is get your script ready. If you use the default IDE that comes with the SA-MP server package, you can press “New” and it will create this for you. However, the following will work as well:</span><br />
<br />
<br />
<div class="codeblock phpcodeblock"><div class="title">PHP Code:</div><div class="body"><div dir="ltr"><code><span style="color: #FF8000">#include&nbsp;&lt;a_samp&gt;<br /><br /><br /></span><span style="color: #007700">public&nbsp;</span><span style="color: #0000BB">OnGameModeInit</span><span style="color: #007700">()<br />{<br /></span><span style="color: #0000BB"> &nbsp;  return&nbsp;1</span><span style="color: #007700">;<br />}<br /><br /><br />public&nbsp;</span><span style="color: #0000BB">OnGameModeExit</span><span style="color: #007700">()<br />{<br /></span><span style="color: #0000BB"> &nbsp; &nbsp;</span><span style="color: #007700">return&nbsp;</span><span style="color: #0000BB">1</span><span style="color: #007700">;<br />}&nbsp;<br /></span></code></div></div></div><br />
<br />
<span style="font-family: Verdana;" class="mycode_font">The first thing we'll need to do is add I-ZCMD and sscanf to our script so that we can access their functions. We do this by typing </span><span style="font-family: Courier New;" class="mycode_font">#include &lt;include_name_here&gt;</span><span style="font-family: Verdana;" class="mycode_font"> at the top of your script. It should look something like this:</span><br />
<br />
<br />
<div class="codeblock phpcodeblock"><div class="title">PHP Code:</div><div class="body"><div dir="ltr"><code><span style="color: #FF8000">#include&nbsp;&lt;a_samp&gt;&nbsp;//any&nbsp;native&nbsp;samp&nbsp;includes&nbsp;should&nbsp;be&nbsp;above&nbsp;all&nbsp;user-made&nbsp;includes<br />#include&nbsp;&lt;izcmd&gt;<br />#include&nbsp;&lt;sscanf2&gt;&nbsp;<br /></span></code></div></div></div><br />
<br />
<span style="font-family: Verdana;" class="mycode_font">Now you should compile the script to make sure no errors occur. If done right, you should have no errors or warnings. Next step is creating the commands.</span><br />
<br />
<br />
<span style="font-family: Verdana;" class="mycode_font"><span style="color: #33ccff;" class="mycode_color"><span style="font-size: large;" class="mycode_size">III. Creating a Command</span></span></span><br />
<br />
<br />
<span style="font-family: Verdana;" class="mycode_font">Creating a command in the early days of SA-MP required use of </span><span style="font-family: Courier New;" class="mycode_font"><span style="color: #3333ff;" class="mycode_color">public </span>OnPlayerCommandText(playerid, cmdtext[])</span><span style="font-family: Verdana;" class="mycode_font"> along with using strcmp and strtok to understand what commands were being typed and to gather command parameters that the player typed alongside the command. This is no longer used by most scripters as its been shown time and time again to be very inefficient compared to other command processors made today. We'll be using izcmd as our command processor as its (or the original zcmd) the one that most scripters use today. We create a command by doing the following:</span><br />
<br />
<br />
<div class="codeblock phpcodeblock"><div class="title">PHP Code:</div><div class="body"><div dir="ltr"><code><span style="color: #0000BB">CMD</span><span style="color: #007700">:</span><span style="color: #0000BB">examplecmd</span><span style="color: #007700">(</span><span style="color: #0000BB">playerid</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">params</span><span style="color: #007700">[])<br />{<br /></span><span style="color: #0000BB"> &nbsp; &nbsp;</span><span style="color: #007700">return&nbsp;</span><span style="color: #0000BB">1</span><span style="color: #007700">;<br />}&nbsp;<br /></span></code></div></div></div><br />
<br />
<span style="font-family: Verdana;" class="mycode_font">The example above is one of the common ways scripters will create a command, however izcmd allows you to create a command a few more ways such as:</span><br />
<br />
<br />
<div class="codeblock phpcodeblock"><div class="title">PHP Code:</div><div class="body"><div dir="ltr"><code><span style="color: #0000BB">COMMAND</span><span style="color: #007700">:</span><span style="color: #0000BB">examplecmd</span><span style="color: #007700">(</span><span style="color: #0000BB">playerid</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">params</span><span style="color: #007700">[])<br />{<br /></span><span style="color: #0000BB"> &nbsp; &nbsp;</span><span style="color: #007700">return&nbsp;</span><span style="color: #0000BB">1</span><span style="color: #007700">;<br />}<br /></span><span style="color: #0000BB">command</span><span style="color: #007700">(</span><span style="color: #0000BB">examplecmd</span><span style="color: #007700">,</span><span style="color: #0000BB">playerid</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">params</span><span style="color: #007700">[])<br />{<br /></span><span style="color: #0000BB"> &nbsp;  return&nbsp;1</span><span style="color: #007700">;<br />}<br /></span><span style="color: #0000BB">cmd</span><span style="color: #007700">(</span><span style="color: #0000BB">examplecmd</span><span style="color: #007700">,</span><span style="color: #0000BB">playerid</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">params</span><span style="color: #007700">[])<br />{<br /></span><span style="color: #0000BB"> &nbsp;  return&nbsp;1</span><span style="color: #007700">;<br />}&nbsp;<br /></span></code></div></div></div><br />
<br />
<span style="font-family: Verdana;" class="mycode_font">For the rest of the tutorial, we'll be using the first example. Commands can be placed anywhere in the script below the </span><span style="font-family: Courier New;" class="mycode_font">#include</span><span style="font-family: Verdana;" class="mycode_font"> lines. Now when a player types in /examplecmd, it won't do anything as there's no code to go along with it however the script will recognize it as a command. Let's made this command send out a simple message:</span><br />
<br />
<br />
<div class="codeblock phpcodeblock"><div class="title">PHP Code:</div><div class="body"><div dir="ltr"><code><span style="color: #0000BB">CMD</span><span style="color: #007700">:</span><span style="color: #0000BB">examplecmd</span><span style="color: #007700">(</span><span style="color: #0000BB">playerid</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">params</span><span style="color: #007700">[])<br />{<br /></span><span style="color: #0000BB"> &nbsp;  SendClientMessage</span><span style="color: #007700">(</span><span style="color: #0000BB">playerid</span><span style="color: #007700">,&nbsp;-</span><span style="color: #0000BB">1</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">“Hello&nbsp;world</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">I&nbsp;made&nbsp;a&nbsp;command</span><span style="color: #007700">!</span><span style="color: #0000BB">”</span><span style="color: #007700">);&nbsp;</span><span style="color: #FF8000">//sends&nbsp;a&nbsp;message&nbsp;to&nbsp;the&nbsp;client&nbsp;(the&nbsp;player)<br /></span><span style="color: #0000BB"> &nbsp;  return&nbsp;1</span><span style="color: #007700">;<br />}&nbsp;<br /></span></code></div></div></div><br />
<br />
<span style="font-family: Verdana;" class="mycode_font">Now when a player types /examplecmd, it will show them the message “Hello world, I made a command!”. This is a very simple command however, so let's make it give the player full health and armour:</span><br />
<br />
<br />
<div class="codeblock phpcodeblock"><div class="title">PHP Code:</div><div class="body"><div dir="ltr"><code><span style="color: #0000BB">CMD</span><span style="color: #007700">:</span><span style="color: #0000BB">examplecmd</span><span style="color: #007700">(</span><span style="color: #0000BB">playerid</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">params</span><span style="color: #007700">[])<br />{<br /></span><span style="color: #0000BB"> &nbsp;  SendClientMessage</span><span style="color: #007700">(</span><span style="color: #0000BB">playerid</span><span style="color: #007700">,&nbsp;-</span><span style="color: #0000BB">1</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">“Hello&nbsp;world</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">I&nbsp;made&nbsp;a&nbsp;command</span><span style="color: #007700">!</span><span style="color: #0000BB">”</span><span style="color: #007700">);&nbsp;</span><span style="color: #FF8000">//sends&nbsp;a&nbsp;message&nbsp;to&nbsp;the&nbsp;client&nbsp;(the&nbsp;player)<br /></span><span style="color: #0000BB"> &nbsp;  SetPlayerHealth</span><span style="color: #007700">(</span><span style="color: #0000BB">playerid</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">100.0</span><span style="color: #007700">);&nbsp;</span><span style="color: #FF8000">//sets&nbsp;the&nbsp;player's&nbsp;health&nbsp;value&nbsp;to&nbsp;100&nbsp;(full&nbsp;health)<br /></span><span style="color: #0000BB"> &nbsp;  SetPlayerArmour</span><span style="color: #007700">(</span><span style="color: #0000BB">playerid</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">100.0</span><span style="color: #007700">);&nbsp;</span><span style="color: #FF8000">//sets&nbsp;the&nbsp;player's&nbsp;armor&nbsp;value&nbsp;to&nbsp;100&nbsp;(full&nbsp;armour)<br /></span><span style="color: #0000BB"> &nbsp;  return&nbsp;1</span><span style="color: #007700">;<br />}&nbsp;<br /></span></code></div></div></div><br />
<br />
<span style="font-family: Verdana;" class="mycode_font">Now when the player types /examplecmd, it will set the player's health and armour values to 100 along with sending them a message. Now, making commands like this will work fine but what if a player needs to type in additional information that the command requires from the player?</span><br />
<br />
<br />
<span style="font-family: Verdana;" class="mycode_font"><span style="color: #33ccff;" class="mycode_color"><span style="font-size: large;" class="mycode_size">IV: Dealing with parameters</span></span></span><br />
<br />
<br />
<span style="font-family: Verdana;" class="mycode_font">Parameters are what the player will type after the command so that the script can use them. Not all commands will require parameters but when they do, you'll need something to discern if the player's typed any parameters after the command, what those parameters are, how many there are, etc. This is what sscanf will help us do. Here's an example command where the player needs to type in a number to set their health to a specific value:</span><br />
<br />
<br />
<div class="codeblock phpcodeblock"><div class="title">PHP Code:</div><div class="body"><div dir="ltr"><code><span style="color: #0000BB">CMD</span><span style="color: #007700">:</span><span style="color: #0000BB">sethealth</span><span style="color: #007700">(</span><span style="color: #0000BB">playerid</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">params</span><span style="color: #007700">[])<br />{<br /></span><span style="color: #0000BB"> &nbsp;  new&nbsp;Float</span><span style="color: #007700">:</span><span style="color: #0000BB">hp</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">string</span><span style="color: #007700">[</span><span style="color: #0000BB">128</span><span style="color: #007700">];&nbsp;</span><span style="color: #FF8000">//we&nbsp;declare&nbsp;a&nbsp;float&nbsp;variable&nbsp;that&nbsp;will&nbsp;hold&nbsp;the&nbsp;specific&nbsp;value&nbsp;typed&nbsp;by&nbsp;the&nbsp;player&nbsp;along&nbsp;with&nbsp;a&nbsp;string&nbsp;variable&nbsp;that'll&nbsp;be&nbsp;used&nbsp;to&nbsp;display&nbsp;a&nbsp;formatted&nbsp;message<br /></span><span style="color: #0000BB"> &nbsp;  if</span><span style="color: #007700">(</span><span style="color: #0000BB">sscanf</span><span style="color: #007700">(</span><span style="color: #0000BB">params</span><span style="color: #007700">,</span><span style="color: #0000BB">”f”</span><span style="color: #007700">,</span><span style="color: #0000BB">hp</span><span style="color: #007700">))&nbsp;</span><span style="color: #FF8000">//here,&nbsp;sscanf&nbsp;is&nbsp;used&nbsp;to&nbsp;tell&nbsp;the&nbsp;script&nbsp;the&nbsp;values&nbsp;it&nbsp;should&nbsp;expect&nbsp;from&nbsp;the&nbsp;player.&nbsp;In&nbsp;this&nbsp;case,&nbsp;its&nbsp;checking&nbsp;if&nbsp;anything&nbsp;besides&nbsp;the&nbsp;command&nbsp;name&nbsp;was&nbsp;typed&nbsp;or&nbsp;if&nbsp;the&nbsp;value&nbsp;provided&nbsp;will&nbsp;work&nbsp;(i.e.&nbsp;if&nbsp;a&nbsp;letter&nbsp;was&nbsp;typed&nbsp;in&nbsp;place&nbsp;of&nbsp;a&nbsp;number)<br /></span><span style="color: #0000BB"> &nbsp;  </span><span style="color: #007700">{<br /></span><span style="color: #0000BB"> &nbsp;   &nbsp;  return&nbsp;SendClientMessage</span><span style="color: #007700">(</span><span style="color: #0000BB">playerid</span><span style="color: #007700">,&nbsp;-</span><span style="color: #0000BB">1</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">“Syntax</span><span style="color: #007700">:&nbsp;/</span><span style="color: #0000BB">sethealth&nbsp;</span><span style="color: #007700">[</span><span style="color: #0000BB">value</span><span style="color: #007700">]</span><span style="color: #0000BB">”</span><span style="color: #007700">);&nbsp;</span><span style="color: #FF8000">//this&nbsp;is&nbsp;where&nbsp;you&nbsp;tell&nbsp;the&nbsp;player&nbsp;how&nbsp;to&nbsp;use&nbsp;the&nbsp;command&nbsp;properly<br /></span><span style="color: #0000BB"> &nbsp;  </span><span style="color: #007700">}<br /><br /></span><span style="color: #0000BB"> &nbsp;  SetPlayerHealth</span><span style="color: #007700">(</span><span style="color: #0000BB">playerid</span><span style="color: #007700">,</span><span style="color: #0000BB">hp</span><span style="color: #007700">);&nbsp;</span><span style="color: #FF8000">//assuming&nbsp;that&nbsp;sscanf&nbsp;found&nbsp;nothing&nbsp;wrong&nbsp;with&nbsp;the&nbsp;value&nbsp;the&nbsp;player&nbsp;provided,&nbsp;it&nbsp;will&nbsp;store&nbsp;that&nbsp;value&nbsp;in&nbsp;our&nbsp;`hp`&nbsp;variable,&nbsp;ready&nbsp;to&nbsp;be&nbsp;used&nbsp;in&nbsp;our&nbsp;command&nbsp;here.<br /></span><span style="color: #0000BB"> &nbsp;  format</span><span style="color: #007700">(</span><span style="color: #0000BB">string</span><span style="color: #007700">,</span><span style="color: #0000BB">sizeof</span><span style="color: #007700">(string),</span><span style="color: #0000BB">”You&nbsp;have&nbsp;set&nbsp;your&nbsp;health&nbsp;value&nbsp;to&nbsp;</span><span style="color: #007700">%</span><span style="color: #0000BB">f</span><span style="color: #007700">.</span><span style="color: #0000BB">”</span><span style="color: #007700">,</span><span style="color: #0000BB">hp</span><span style="color: #007700">);&nbsp;</span><span style="color: #FF8000">//format&nbsp;is&nbsp;used&nbsp;here&nbsp;to&nbsp;have&nbsp;the&nbsp;string&nbsp;variable&nbsp;store&nbsp;a&nbsp;message&nbsp;where&nbsp;the&nbsp;message&nbsp;needs&nbsp;additional&nbsp;information&nbsp;to&nbsp;finish,&nbsp;in&nbsp;this&nbsp;case&nbsp;the&nbsp;value&nbsp;the&nbsp;player&nbsp;typed&nbsp;in&nbsp;for&nbsp;the&nbsp;command<br /></span><span style="color: #0000BB"> &nbsp;  SendClientMessage</span><span style="color: #007700">(</span><span style="color: #0000BB">playerid</span><span style="color: #007700">,&nbsp;-</span><span style="color: #0000BB">1</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">string</span><span style="color: #007700">);&nbsp;</span><span style="color: #FF8000">//instead&nbsp;of&nbsp;typing&nbsp;a&nbsp;message,&nbsp;we&nbsp;put&nbsp;our&nbsp;`string`&nbsp;variable&nbsp;in&nbsp;place&nbsp;as&nbsp;its&nbsp;already&nbsp;storing&nbsp;a&nbsp;message&nbsp;to&nbsp;be&nbsp;used<br /></span><span style="color: #0000BB"> &nbsp;  return&nbsp;1</span><span style="color: #007700">;<br />}&nbsp;<br /></span></code></div></div></div><br />
<br />
<span style="font-family: Verdana;" class="mycode_font">When the player types /sethealth, the script will see that no parameters have been typed in and will give a message to the player on how to use the command. The same will happen if the player was to type something like `/sethealth f` as its looking for a decimal number. Once the player types in a number, the script will see that and (assuming there's no other parameters to deal with) continue with the command with the information given by the player. If the player typed `/sethealth 100`, it will set their health to 100, if they typed `/sethealth 1`, it will set their health to 1 and so on.</span><br />
<br />
<br />
<span style="font-family: Verdana;" class="mycode_font"><span style="color: #33ccff;" class="mycode_color"><span style="font-size: large;" class="mycode_size">V: Further Examples</span></span></span><br />
<br />
<br />
<span style="font-family: Verdana;" class="mycode_font">For the final section, I'm going to leave a few basic commands that do various things to give an idea of how creating a command goes. If there's something I'm doing that I haven't covered earlier, it will be mentioned in the examples.</span><br />
<br />
<br />
<span style="font-size: medium;" class="mycode_size"><span style="font-family: Verdana;" class="mycode_font"><span style="font-weight: bold;" class="mycode_b">a.</span> /freezeplayer</span></span><br />
<div class="codeblock phpcodeblock"><div class="title">PHP Code:</div><div class="body"><div dir="ltr"><code><span style="color: #0000BB">CMD</span><span style="color: #007700">:</span><span style="color: #0000BB">freezeplayer</span><span style="color: #007700">(</span><span style="color: #0000BB">playerid</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">params</span><span style="color: #007700">[])<br />{<br /></span><span style="color: #0000BB"> &nbsp;  new&nbsp;targetid</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">string</span><span style="color: #007700">[</span><span style="color: #0000BB">128</span><span style="color: #007700">],&nbsp;</span><span style="color: #0000BB">name</span><span style="color: #007700">[</span><span style="color: #0000BB">MAX_PLAYER_NAME</span><span style="color: #007700">+</span><span style="color: #0000BB">1</span><span style="color: #007700">];&nbsp;</span><span style="color: #FF8000">//name&nbsp;string&nbsp;is&nbsp;to&nbsp;store&nbsp;player's&nbsp;name,&nbsp;the&nbsp;+1&nbsp;is&nbsp;to&nbsp;account&nbsp;for&nbsp;null&nbsp;character<br /></span><span style="color: #0000BB"> &nbsp;  if</span><span style="color: #007700">(</span><span style="color: #0000BB">sscanf</span><span style="color: #007700">(</span><span style="color: #0000BB">params</span><span style="color: #007700">,</span><span style="color: #0000BB">”r”</span><span style="color: #007700">,</span><span style="color: #0000BB">targetid</span><span style="color: #007700">))&nbsp;</span><span style="color: #FF8000">//”r”&nbsp;specifier&nbsp;tells&nbsp;sscanf&nbsp;to&nbsp;look&nbsp;for&nbsp;a&nbsp;playerid.&nbsp;Some&nbsp;will&nbsp;tell&nbsp;you&nbsp;to&nbsp;use&nbsp;“u”&nbsp;but&nbsp;that&nbsp;looks&nbsp;for&nbsp;both&nbsp;players&nbsp;AND&nbsp;npcs,&nbsp;either&nbsp;way&nbsp;it&nbsp;will&nbsp;work&nbsp;but&nbsp;if&nbsp;you&nbsp;don't&nbsp;want&nbsp;npcs&nbsp;to&nbsp;be&nbsp;included,&nbsp;use&nbsp;“r”&nbsp;for&nbsp;playerid&nbsp;parameters<br /></span><span style="color: #0000BB"> &nbsp;  </span><span style="color: #007700">{<br /></span><span style="color: #0000BB"> &nbsp;   &nbsp;  return&nbsp;SendClientMessage</span><span style="color: #007700">(</span><span style="color: #0000BB">playerid</span><span style="color: #007700">,&nbsp;-</span><span style="color: #0000BB">1</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">“Syntax</span><span style="color: #007700">:</span><span style="color: #0000BB"> </span><span style="color: #007700">/</span><span style="color: #0000BB">freezeplayer&nbsp;</span><span style="color: #007700">[</span><span style="color: #0000BB">playerid</span><span style="color: #007700">/</span><span style="color: #0000BB">name</span><span style="color: #007700">]</span><span style="color: #0000BB">”</span><span style="color: #007700">);<br /></span><span style="color: #0000BB"> &nbsp;  </span><span style="color: #007700">}<br /></span><span style="color: #0000BB"> &nbsp;  TogglePlayerControllable</span><span style="color: #007700">(</span><span style="color: #0000BB">targetid</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">false</span><span style="color: #007700">);&nbsp;</span><span style="color: #FF8000">//this&nbsp;function&nbsp;will&nbsp;toggle&nbsp;the&nbsp;player's&nbsp;ability&nbsp;to&nbsp;move,&nbsp;depending&nbsp;on&nbsp;whether&nbsp;its&nbsp;toggled&nbsp;true&nbsp;or&nbsp;false&nbsp;(1&nbsp;or&nbsp;0)<br /></span><span style="color: #0000BB"> &nbsp;  GetPlayerName</span><span style="color: #007700">(</span><span style="color: #0000BB">targetid</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">name</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">sizeof</span><span style="color: #007700">(</span><span style="color: #0000BB">name</span><span style="color: #007700">));&nbsp;</span><span style="color: #FF8000">//this&nbsp;is&nbsp;used&nbsp;to&nbsp;get&nbsp;the&nbsp;player's&nbsp;name&nbsp;and&nbsp;store&nbsp;it&nbsp;in&nbsp;the&nbsp;`name`&nbsp;variable<br /></span><span style="color: #0000BB"> &nbsp;  format</span><span style="color: #007700">(</span><span style="color: #0000BB">string</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">sizeof</span><span style="color: #007700">(string),&nbsp;</span><span style="color: #0000BB">”You&nbsp;have&nbsp;frozen&nbsp;</span><span style="color: #007700">%</span><span style="color: #0000BB">s</span><span style="color: #007700">.</span><span style="color: #0000BB">”</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">name</span><span style="color: #007700">);<br /></span><span style="color: #0000BB"> &nbsp;  SendClientMessage</span><span style="color: #007700">(</span><span style="color: #0000BB">playerid</span><span style="color: #007700">,&nbsp;-</span><span style="color: #0000BB">1</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">string</span><span style="color: #007700">);<br /></span><span style="color: #0000BB"> &nbsp;  return&nbsp;1</span><span style="color: #007700">;<br />}&nbsp;<br /></span></code></div></div></div><br />
<br />
<span style="font-size: medium;" class="mycode_size"><span style="font-family: Verdana;" class="mycode_font"><span style="font-weight: bold;" class="mycode_b">b.</span> /givedeagle</span></span><br />
<div class="codeblock phpcodeblock"><div class="title">PHP Code:</div><div class="body"><div dir="ltr"><code><span style="color: #0000BB">CMD</span><span style="color: #007700">:</span><span style="color: #0000BB">givedeagle</span><span style="color: #007700">(</span><span style="color: #0000BB">playerid</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">params</span><span style="color: #007700">[])<br />{<br /></span><span style="color: #0000BB"> &nbsp;  new&nbsp;targetid</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">ammo</span><span style="color: #007700">,</span><span style="color: #0000BB">string</span><span style="color: #007700">[</span><span style="color: #0000BB">128</span><span style="color: #007700">],</span><span style="color: #0000BB">name</span><span style="color: #007700">[</span><span style="color: #0000BB">MAX_PLAYER_NAME</span><span style="color: #007700">+</span><span style="color: #0000BB">1</span><span style="color: #007700">];<br /></span><span style="color: #0000BB"> &nbsp;  if</span><span style="color: #007700">(</span><span style="color: #0000BB">sscanf</span><span style="color: #007700">(</span><span style="color: #0000BB">params</span><span style="color: #007700">,</span><span style="color: #0000BB">”rd”</span><span style="color: #007700">,</span><span style="color: #0000BB">targetid</span><span style="color: #007700">,</span><span style="color: #0000BB">ammo</span><span style="color: #007700">))&nbsp;</span><span style="color: #FF8000">//the&nbsp;“d”&nbsp;specifier&nbsp;is&nbsp;meant&nbsp;for&nbsp;integers,&nbsp;you&nbsp;can&nbsp;use&nbsp;“i”&nbsp;in&nbsp;place&nbsp;of&nbsp;it&nbsp;as&nbsp;well<br /></span><span style="color: #0000BB"> &nbsp;  </span><span style="color: #007700">{<br /></span><span style="color: #0000BB"> &nbsp;   &nbsp;  return&nbsp;SendClientMessage</span><span style="color: #007700">(</span><span style="color: #0000BB">playerid</span><span style="color: #007700">,&nbsp;-</span><span style="color: #0000BB">1</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">“Syntax</span><span style="color: #007700">:</span><span style="color: #0000BB"> </span><span style="color: #007700">/</span><span style="color: #0000BB">givedeagle&nbsp;</span><span style="color: #007700">[</span><span style="color: #0000BB">playerid</span><span style="color: #007700">/</span><span style="color: #0000BB">name</span><span style="color: #007700">]&nbsp;[</span><span style="color: #0000BB">ammo</span><span style="color: #007700">]</span><span style="color: #0000BB">”</span><span style="color: #007700">);<br /></span><span style="color: #0000BB"> &nbsp;  </span><span style="color: #007700">}<br /></span><span style="color: #0000BB"> &nbsp;  GivePlayerWeapon</span><span style="color: #007700">(</span><span style="color: #0000BB">targetid</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">WEAPON_DEAGLE</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">ammo</span><span style="color: #007700">);&nbsp;</span><span style="color: #FF8000">//gives&nbsp;the&nbsp;targetid&nbsp;a&nbsp;desert&nbsp;eagle&nbsp;with&nbsp;the&nbsp;ammo&nbsp;the&nbsp;player&nbsp;specified&nbsp;(you&nbsp;can&nbsp;use&nbsp;24&nbsp;in&nbsp;place&nbsp;of&nbsp;WEAPON_DEAGLE&nbsp;and&nbsp;it&nbsp;will&nbsp;work&nbsp;the&nbsp;same).<br /></span><span style="color: #0000BB"> &nbsp;  GetPlayerName</span><span style="color: #007700">(</span><span style="color: #0000BB">targetid</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">name</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">sizeof</span><span style="color: #007700">(</span><span style="color: #0000BB">name</span><span style="color: #007700">));<br /></span><span style="color: #0000BB"> &nbsp;  format</span><span style="color: #007700">(</span><span style="color: #0000BB">string</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">sizeof</span><span style="color: #007700">(string),&nbsp;</span><span style="color: #0000BB">“You&nbsp;have&nbsp;given&nbsp;</span><span style="color: #007700">%</span><span style="color: #0000BB">s&nbsp;a&nbsp;Desert&nbsp;Eagle&nbsp;with&nbsp;</span><span style="color: #007700">%</span><span style="color: #0000BB">d&nbsp;ammo</span><span style="color: #007700">.</span><span style="color: #0000BB">”</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">name</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">ammo</span><span style="color: #007700">);<br /></span><span style="color: #0000BB"> &nbsp;  SendClientMessage</span><span style="color: #007700">(</span><span style="color: #0000BB">playerid</span><span style="color: #007700">,&nbsp;-</span><span style="color: #0000BB">1</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">string</span><span style="color: #007700">);<br /></span><span style="color: #0000BB"> &nbsp;  return&nbsp;1</span><span style="color: #007700">;<br />}&nbsp;<br /></span></code></div></div></div><br />
<br />
<span style="font-size: medium;" class="mycode_size"><span style="font-family: Verdana;" class="mycode_font"><span style="font-weight: bold;" class="mycode_b">c.</span> /setserverhour</span></span><br />
<div class="codeblock phpcodeblock"><div class="title">PHP Code:</div><div class="body"><div dir="ltr"><code><span style="color: #0000BB">CMD</span><span style="color: #007700">:</span><span style="color: #0000BB">setserverhour</span><span style="color: #007700">(</span><span style="color: #0000BB">playerid</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">params</span><span style="color: #007700">[])<br />{<br /></span><span style="color: #0000BB"> &nbsp;  new&nbsp;hour</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">string</span><span style="color: #007700">[</span><span style="color: #0000BB">128</span><span style="color: #007700">];<br /></span><span style="color: #0000BB"> &nbsp;  if</span><span style="color: #007700">(</span><span style="color: #0000BB">sscanf</span><span style="color: #007700">(</span><span style="color: #0000BB">params</span><span style="color: #007700">,</span><span style="color: #0000BB">”d”</span><span style="color: #007700">,</span><span style="color: #0000BB">hour</span><span style="color: #007700">))&nbsp;<br /></span><span style="color: #0000BB"> &nbsp;  </span><span style="color: #007700">{<br /></span><span style="color: #0000BB"> &nbsp;   &nbsp;  return&nbsp;SendClientMessage</span><span style="color: #007700">(</span><span style="color: #0000BB">playerid</span><span style="color: #007700">,&nbsp;-</span><span style="color: #0000BB">1</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">“Syntax</span><span style="color: #007700">:</span><span style="color: #0000BB"> </span><span style="color: #007700">/</span><span style="color: #0000BB">setserverhour&nbsp;</span><span style="color: #007700">[</span><span style="color: #0000BB">hour</span><span style="color: #007700">]</span><span style="color: #0000BB">”</span><span style="color: #007700">);<br /></span><span style="color: #0000BB"> &nbsp;  </span><span style="color: #007700">}<br /></span><span style="color: #0000BB"> &nbsp;  if</span><span style="color: #007700">(</span><span style="color: #0000BB">hour&nbsp;</span><span style="color: #007700">&lt;&nbsp;</span><span style="color: #0000BB">0&nbsp;</span><span style="color: #007700">||&nbsp;</span><span style="color: #0000BB">hour&nbsp;</span><span style="color: #007700">&gt;&nbsp;</span><span style="color: #0000BB">23</span><span style="color: #007700">)&nbsp;</span><span style="color: #FF8000">//checking&nbsp;to&nbsp;see&nbsp;if&nbsp;the&nbsp;hour&nbsp;inputted&nbsp;is&nbsp;either&nbsp;below&nbsp;0&nbsp;or&nbsp;above&nbsp;23<br /></span><span style="color: #0000BB"> &nbsp;  </span><span style="color: #007700">{<br /></span><span style="color: #0000BB"> &nbsp;   &nbsp;  return&nbsp;SendClientMessage</span><span style="color: #007700">(</span><span style="color: #0000BB">playerid</span><span style="color: #007700">,&nbsp;-</span><span style="color: #0000BB">1</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">“You&nbsp;can&nbsp;only&nbsp;set&nbsp;the&nbsp;server&nbsp;hour&nbsp;between&nbsp;0&nbsp;to&nbsp;23.”</span><span style="color: #007700">);<br /></span><span style="color: #0000BB"> &nbsp;  </span><span style="color: #007700">}<br /></span><span style="color: #0000BB"> &nbsp;  SetWorldTime</span><span style="color: #007700">(</span><span style="color: #0000BB">hour</span><span style="color: #007700">);&nbsp;</span><span style="color: #FF8000">//this&nbsp;is&nbsp;used&nbsp;to&nbsp;set&nbsp;the&nbsp;server's&nbsp;time&nbsp;and&nbsp;thus&nbsp;whether&nbsp;its&nbsp;day&nbsp;or&nbsp;night,&nbsp;it&nbsp;only&nbsp;accepts&nbsp;an&nbsp;hour&nbsp;parameter<br /></span><span style="color: #0000BB"> &nbsp;  format</span><span style="color: #007700">(</span><span style="color: #0000BB">string</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">sizeof</span><span style="color: #007700">(string),&nbsp;</span><span style="color: #0000BB">“You&nbsp;have&nbsp;set&nbsp;the&nbsp;server&nbsp;hour&nbsp;to&nbsp;</span><span style="color: #007700">%</span><span style="color: #0000BB">d</span><span style="color: #007700">.</span><span style="color: #0000BB">”</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">hour</span><span style="color: #007700">);<br /></span><span style="color: #0000BB"> &nbsp;  SendClientMessage</span><span style="color: #007700">(</span><span style="color: #0000BB">playerid</span><span style="color: #007700">,&nbsp;-</span><span style="color: #0000BB">1</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">string</span><span style="color: #007700">);<br /></span><span style="color: #0000BB"> &nbsp;  return&nbsp;1</span><span style="color: #007700">;<br />}&nbsp;<br /></span></code></div></div></div><br />
<br />
<span style="font-size: medium;" class="mycode_size"><span style="font-family: Verdana;" class="mycode_font"><span style="font-weight: bold;" class="mycode_b">d.</span> /setmoney</span></span><br />
<div class="codeblock phpcodeblock"><div class="title">PHP Code:</div><div class="body"><div dir="ltr"><code><span style="color: #0000BB">CMD</span><span style="color: #007700">:</span><span style="color: #0000BB">setmoney</span><span style="color: #007700">(</span><span style="color: #0000BB">playerid</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">params</span><span style="color: #007700">[])<br />{<br /></span><span style="color: #0000BB"> &nbsp;  new&nbsp;amount</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">string</span><span style="color: #007700">[</span><span style="color: #0000BB">128</span><span style="color: #007700">];<br /></span><span style="color: #0000BB"> &nbsp;  if</span><span style="color: #007700">(</span><span style="color: #0000BB">sscanf</span><span style="color: #007700">(</span><span style="color: #0000BB">params</span><span style="color: #007700">,</span><span style="color: #0000BB">”d”</span><span style="color: #007700">,</span><span style="color: #0000BB">amount</span><span style="color: #007700">))<br /></span><span style="color: #0000BB"> &nbsp;  </span><span style="color: #007700">{<br /></span><span style="color: #0000BB"> &nbsp;   &nbsp;  return&nbsp;SendClientMessage</span><span style="color: #007700">(</span><span style="color: #0000BB">playerid</span><span style="color: #007700">,&nbsp;-</span><span style="color: #0000BB">1</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">“Syntax</span><span style="color: #007700">:</span><span style="color: #0000BB"> </span><span style="color: #007700">/</span><span style="color: #0000BB">setmoney&nbsp;</span><span style="color: #007700">[</span><span style="color: #0000BB">amount</span><span style="color: #007700">]</span><span style="color: #0000BB">”</span><span style="color: #007700">);<br /></span><span style="color: #0000BB"> &nbsp;  </span><span style="color: #007700">}<br /></span><span style="color: #0000BB"> &nbsp;  ResetPlayerMoney</span><span style="color: #007700">(</span><span style="color: #0000BB">playerid</span><span style="color: #007700">);&nbsp;</span><span style="color: #FF8000">//resets&nbsp;any&nbsp;money&nbsp;the&nbsp;player&nbsp;has&nbsp;to&nbsp;0<br /></span><span style="color: #0000BB"> &nbsp;  GivePlayerMoney</span><span style="color: #007700">(</span><span style="color: #0000BB">playerid</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">amount</span><span style="color: #007700">);&nbsp;</span><span style="color: #FF8000">//gives&nbsp;the&nbsp;player&nbsp;the&nbsp;amount&nbsp;of&nbsp;money&nbsp;they&nbsp;specify<br /></span><span style="color: #0000BB"> &nbsp;  format</span><span style="color: #007700">(</span><span style="color: #0000BB">string</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">sizeof</span><span style="color: #007700">(string),&nbsp;</span><span style="color: #0000BB">“You&nbsp;have&nbsp;set&nbsp;your&nbsp;money&nbsp;to&nbsp;</span><span style="color: #007700">&#36;%</span><span style="color: #0000BB">d</span><span style="color: #007700">.</span><span style="color: #0000BB">”</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">amount</span><span style="color: #007700">);<br /></span><span style="color: #0000BB"> &nbsp;  SendClientMessage</span><span style="color: #007700">(</span><span style="color: #0000BB">playerid</span><span style="color: #007700">,&nbsp;-</span><span style="color: #0000BB">1</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">string</span><span style="color: #007700">);<br /></span><span style="color: #0000BB"> &nbsp;  return&nbsp;1</span><span style="color: #007700">;<br />}&nbsp;<br /></span></code></div></div></div><br />
<br />
<span style="font-family: Verdana;" class="mycode_font">This concludes the tutorial. I've never really written anything like this so feedback is appreciated, I hope one of you learns something from this!</span>]]></content:encoded>
		</item>
	</channel>
</rss>