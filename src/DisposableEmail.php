<?php
/*
 * The MIT License (MIT)
 *
 * Copyright (c) 2015 Daniel Käfer - dan.kaefer@gmail.com
 *
 * Permission is hereby granted, free of charge, to any person obtaining a copy
 * of this software and associated documentation files (the "Software"), to deal
 * in the Software without restriction, including without limitation the rights
 * to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
 * copies of the Software, and to permit persons to whom the Software is
 * furnished to do so, subject to the following conditions:
 *
 * The above copyright notice and this permission notice shall be included in
 * all copies or substantial portions of the Software.
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 * IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 * FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 * AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 * LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 * OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
 * THE SOFTWARE.
 *
 */

namespace DKaefer;

class DisposableEmail
{

	private static $disposableEmails = array
	(
		"0-mail.com",
		"0815.ru",
		"0815.su",
		"0clickemail.com",
		"0wnd.net",
		"0wnd.org",
		"10minutemail.com",
		"10minutemail.de",
		"123-m.com",
		"1chuan.com",
		"1pad.de",
		"1zhuan.com",
		"20mail.it",
		"20minutemail.com",
		"21cn.com",
		"2prong.com",
		"30minutemail.com",
		"33mail.com",
		"3d-painting.com",
		"4warding.com",
		"4warding.net",
		"4warding.org",
		"60minutemail.com",
		"675hosting.com",
		"675hosting.net",
		"675hosting.org",
		"6ip.us",
		"6paq.com",
		"6url.com",
		"75hosting.com",
		"75hosting.net",
		"75hosting.org",
		"7days-printing.com",
		"7tags.com",
		"99experts.com",
		"9ox.net",
		"a-bc.net",
		"a45.in",
		"acentri.com",
		"advantimo.com",
		"afrobacon.com",
		"ag.us.to",
		"agedmail.com",
		"ahk.jp",
		"ajaxapp.net",
		"alivance.com",
		"amail.com",
		"amilegit.com",
		"amiri.net",
		"amiriindustries.com",
		"anappthat.com",
		"ano-mail.net",
		"anonbox.net",
		"anonymail.dk",
		"anonymbox.com",
		"antichef.com",
		"antichef.net",
		"antispam.de",
		"appixie.com",
		"armyspy.com",
		"aver.com",
		"azmeil.tk",
		"baxomale.ht.cx",
		"beddly.com",
		"beefmilk.com",
		"bigprofessor.so",
		"bigstring.com",
		"binkmail.com",
		"bio-muesli.net",
		"blogmyway.org",
		"bobmail.info",
		"bodhi.lawlita.com",
		"bofthew.com",
		"bootybay.de",
		"boun.cr",
		"bouncr.com",
		"boxformail.in",
		"brefmail.com",
		"brennendesreich.de",
		"broadbandninja.com",
		"bsnow.net",
		"bu.mintemail.com",
		"buffemail.com",
		"bugmenot.com",
		"bumpymail.com",
		"bund.us",
		"bundes-li.ga",
		"burnthespam.info",
		"burstmail.info",
		"buyusedlibrarybooks.org",
		"c2.hu",
		"cachedot.net",
		"casualdx.com",
		"cbair.com",
		"cellurl.com",
		"centermail.com",
		"centermail.net",
		"chammy.info",
		"cheatmail.de",
		"chogmail.com",
		"choicemail1.com",
		"chong-mail.com",
		"chong-mail.net",
		"chong-mail.org",
		"clixser.com",
		"cmail.com",
		"cmail.net",
		"cmail.org",
		"coldemail.info",
		"consumerriot.com",
		"cool.fr.nf",
		"correo.blogos.net",
		"cosmorph.com",
		"courriel.fr.nf",
		"courrieltemporaire.com",
		"crapmail.org",
		"crazymailing.com",
		"cubiclink.com",
		"curryworld.de",
		"cust.in",
		"cuvox.de",
		"dacoolest.com",
		"daintly.com",
		"dandikmail.com",
		"dayrep.com",
		"dbunker.com",
		"dcemail.com",
		"deadaddress.com",
		"deadspam.com",
		"deagot.com",
		"dealja.com",
		"despam.it",
		"despammed.com",
		"devnullmail.com",
		"dfgh.net",
		"digitalsanctuary.com",
		"dingbone.com",
		"discard.email",
		"discardmail.com",
		"discardmail.de",
		"disposableaddress.com",
		"disposableemailaddresses.com",
		"disposableemailaddresses.emailmiser.com",
		"disposableinbox.com",
		"dispose.it",
		"disposeamail.com",
		"disposemail.com",
		"dispostable.com",
		"dm.w3internet.co.uk",
		"dm.w3internet.co.ukexample.com",
		"dodgeit.com",
		"dodgit.com",
		"dodgit.org",
		"doiea.com",
		"domozmail.com",
		"donemail.ru",
		"dontreg.com",
		"dontsendmespam.de",
		"dotmsg.com",
		"drdrb.com",
		"drdrb.net",
		"droplar.com",
		"duam.net",
		"dudmail.com",
		"dump-email.info",
		"dumpandjunk.com",
		"dumpmail.de",
		"dumpyemail.com",
		"duskmail.com",
		"e-mail.com",
		"e-mail.org",
		"e4ward.com",
		"easytrashmail.com",
		"einrot.com",
		"einrot.de",
		"email60.com",
		"emaildienst.de",
		"emailgo.de",
		"emailias.com",
		"emailigo.de",
		"emailinfive.com",
		"emaillime.com",
		"emailmiser.com",
		"emailproxsy.com",
		"emailsensei.com",
		"emailtemporar.ro",
		"emailtemporario.com.br",
		"emailthe.net",
		"emailtmp.com",
		"emailto.de",
		"emailwarden.com",
		"emailx.at.hm",
		"emailxfer.com",
		"emeil.in",
		"emeil.ir",
		"emil.com",
		"emz.net",
		"enterto.com",
		"ephemail.net",
		"etranquil.com",
		"etranquil.net",
		"etranquil.org",
		"evopo.com",
		"example.com",
		"explodemail.com",
		"eyepaste.com",
		"fakeinbox.com",
		"fakeinformation.com",
		"fakemail.fr",
		"fakemailz.com",
		"fammix.com",
		"fansworldwide.de",
		"fantasymail.de",
		"fastacura.com",
		"fastchevy.com",
		"fastchrysler.com",
		"fastkawasaki.com",
		"fastmazda.com",
		"fastmitsubishi.com",
		"fastnissan.com",
		"fastsubaru.com",
		"fastsuzuki.com",
		"fasttoyota.com",
		"fastyamaha.com",
		"fatflap.com",
		"fdfdsfds.com",
		"fightallspam.com",
		"filzmail.com",
		"fixmail.tk",
		"fizmail.com",
		"fleckens.hu",
		"flyspam.com",
		"footard.com",
		"forgetmail.com",
		"fr33mail.info",
		"frapmail.com",
		"freundin.ru",
		"friendlymail.co.uk",
		"front14.org",
		"fuckingduh.com",
		"fudgerub.com",
		"fux0ringduh.com",
		"garliclife.com",
		"gelitik.in",
		"get1mail.com",
		"get2mail.fr",
		"getairmail.com",
		"getmails.eu",
		"getonemail.com",
		"getonemail.net",
		"ghosttexter.de",
		"girlsundertheinfluence.com",
		"gishpuppy.com",
		"goemailgo.com",
		"gorillaswithdirtyarmpits.com",
		"gotmail.com",
		"gotmail.net",
		"gotmail.org",
		"gotti.otherinbox.com",
		"gowikibooks.com",
		"gowikicampus.com",
		"gowikicars.com",
		"gowikifilms.com",
		"gowikigames.com",
		"gowikimusic.com",
		"gowikinetwork.com",
		"gowikitravel.com",
		"gowikitv.com",
		"grandmamail.com",
		"grandmasmail.com",
		"great-host.in",
		"greensloth.com",
		"grr.la",
		"gsrv.co.uk",
		"guerillamail.biz",
		"guerillamail.com",
		"guerillamail.net",
		"guerillamail.org",
		"guerrillamail.biz",
		"guerrillamail.com",
		"guerrillamail.de",
		"guerrillamail.net",
		"guerrillamail.org",
		"guerrillamailblock.com",
		"gustr.com",
		"h.mintemail.com",
		"h8s.org",
		"hacccc.com",
		"haltospam.com",
		"harakirimail.com",
		"hartbot.de",
		"hatespam.org",
		"hellodream.mobi",
		"herp.in",
		"hidemail.de",
		"hidzz.com",
		"hochsitze.com",
		"hopemail.biz",
		"hotpop.com",
		"hulapla.de",
		"ieatspam.eu",
		"ieatspam.info",
		"ieh-mail.de",
		"ihateyoualot.info",
		"iheartspam.org",
		"imails.info",
		"imgof.com",
		"imstations.com",
		"inbax.tk",
		"inbox.si",
		"inboxalias.com",
		"inboxclean.com",
		"inboxclean.org",
		"inboxproxy.com",
		"incognitomail.com",
		"incognitomail.net",
		"incognitomail.org",
		"insorg-mail.info",
		"instant-mail.de",
		"ipoo.org",
		"irish2me.com",
		"iwi.net",
		"jetable.com",
		"jetable.fr.nf",
		"jetable.net",
		"jetable.org",
		"jnxjn.com",
		"jourrapide.com",
		"jsrsolutions.com",
		"junk1e.com",
		"kasmail.com",
		"kaspop.com",
		"keepmymail.com",
		"killmail.com",
		"killmail.net",
		"kimsdisk.com",
		"kingsq.ga",
		"kir.ch.tc",
		"klassmaster.com",
		"klassmaster.net",
		"klzlk.com",
		"kook.ml",
		"koszmail.pl",
		"kulturbetrieb.info",
		"kurzepost.de",
		"l33r.eu",
		"lackmail.net",
		"lags.us",
		"lazyinbox.com",
		"letthemeatspam.com",
		"lhsdv.com",
		"lifebyfood.com",
		"link2mail.net",
		"litedrop.com",
		"loadby.us",
		"login-email.ml",
		"lol.ovpn.to",
		"lookugly.com",
		"lopl.co.cc",
		"lortemail.dk",
		"lovemeleaveme.com",
		"lr78.com",
		"lroid.com",
		"m4ilweb.info",
		"maboard.com",
		"mail-filter.com",
		"mail-temporaire.fr",
		"mail.by",
		"mail.mezimages.net",
		"mail114.net",
		"mail2rss.org",
		"mail333.com",
		"mail4trash.com",
		"mailbidon.com",
		"mailblocks.com",
		"mailbucket.org",
		"mailcat.biz",
		"mailcatch.com",
		"maildrop.cc",
		"maileater.com",
		"mailexpire.com",
		"mailfa.tk",
		"mailfreeonline.com",
		"mailguard.me",
		"mailimate.com",
		"mailin8r.com",
		"mailinater.com",
		"mailinator.com",
		"mailinator.net",
		"mailinator.org",
		"mailinator.us",
		"mailinator2.com",
		"mailincubator.com",
		"mailismagic.com",
		"mailmate.com",
		"mailme.ir",
		"mailme.lv",
		"mailmetrash.com",
		"mailmoat.com",
		"mailnator.com",
		"mailnesia.com",
		"mailnull.com",
		"mailpick.biz",
		"mailproxsy.com",
		"mailquack.com",
		"mailrock.biz",
		"mailscrap.com",
		"mailshell.com",
		"mailsiphon.com",
		"mailslapping.com",
		"mailslite.com",
		"mailtemp.info",
		"mailtothis.com",
		"mailzilla.com",
		"mailzilla.org",
		"mailzilla.orgmbx.cc",
		"makemetheking.com",
		"manifestgenerator.com",
		"manybrain.com",
		"mbx.cc",
		"mega.zik.dj",
		"meinspamschutz.de",
		"meltmail.com",
		"messagebeamer.de",
		"mezimages.net",
		"mierdamail.com",
		"migumail.com",
		"mintemail.com",
		"mjukglass.nu",
		"moakt.com",
		"mobi.web.id",
		"mobileninja.co.uk",
		"moburl.com",
		"moncourrier.fr.nf",
		"monemail.fr.nf",
		"monmail.fr.nf",
		"monumentmail.com",
		"msa.minsmail.com",
		"mt2009.com",
		"mt2014.com",
		"mx0.wwwnew.eu",
		"my10minutemail.com",
		"mycleaninbox.net",
		"myemailboxy.com",
		"mymail-in.net",
		"mymailoasis.com",
		"mynetstore.de",
		"mypacks.net",
		"mypartyclip.de",
		"myphantomemail.com",
		"myspaceinc.com",
		"myspaceinc.net",
		"myspaceinc.org",
		"myspacepimpedup.com",
		"myspamless.com",
		"mytempemail.com",
		"mytrashmail.com",
		"neomailbox.com",
		"nepwk.com",
		"nervmich.net",
		"nervtmich.net",
		"netmails.com",
		"netmails.net",
		"netzidiot.de",
		"neverbox.com",
		"nice-4u.com",
		"no-spam.ws",
		"nobulk.com",
		"noclickemail.com",
		"nogmailspam.info",
		"nomail.xl.cx",
		"nomail2me.com",
		"nomorespamemails.com",
		"nonspam.eu",
		"nonspammer.de",
		"noref.in",
		"nospam.ze.tc",
		"nospam4.us",
		"nospamfor.us",
		"nospamthanks.info",
		"notmailinator.com",
		"notsharingmy.info",
		"nowhere.org",
		"nowmymail.com",
		"nurfuerspam.de",
		"nus.edu.sg",
		"nwldx.com",
		"objectmail.com",
		"obobbo.com",
		"odaymail.com",
		"one-time.email",
		"oneoffemail.com",
		"oneoffmail.com",
		"onewaymail.com",
		"online.ms",
		"oopi.org",
		"opayq.com",
		"ordinaryamerican.net",
		"otherinbox.com",
		"ourklips.com",
		"outlawspam.com",
		"ovpn.to",
		"owlpic.com",
		"pancakemail.com",
		"paplease.com",
		"pcusers.otherinbox.com",
		"pepbot.com",
		"pfui.ru",
		"pimpedupmyspace.com",
		"pjjkp.com",
		"plexolan.de",
		"poczta.onet.pl",
		"politikerclub.de",
		"poofy.org",
		"pookmail.com",
		"privacy.net",
		"privy-mail.com",
		"privymail.de",
		"proxymail.eu",
		"prtnx.com",
		"prtz.eu",
		"punkass.com",
		"putthisinyourspamdatabase.com",
		"pwrby.com",
		"quickinbox.com",
		"quickmail.nl",
		"rcpt.at",
		"reallymymail.com",
		"recode.me",
		"recursor.net",
		"recyclemail.dk",
		"regbypass.com",
		"regbypass.comsafe-mail.net",
		"rejectmail.com",
		"rhyta.com",
		"rklips.com",
		"rmqkr.net",
		"royal.net",
		"rppkn.com",
		"rtrtr.com",
		"s0ny.net",
		"safe-mail.net",
		"safersignup.de",
		"safetymail.info",
		"safetypost.de",
		"sandelf.de",
		"saynotospams.com",
		"schafmail.de",
		"selfdestructingmail.com",
		"selfdestructingmail.org",
		"sendspamhere.com",
		"sharedmailbox.org",
		"sharklasers.com",
		"shieldedmail.com",
		"shiftmail.com",
		"shitmail.me",
		"shitmail.org",
		"shitware.nl",
		"shortmail.net",
		"sibmail.com",
		"sinnlos-mail.de",
		"siteposter.net",
		"skeefmail.com",
		"slaskpost.se",
		"slopsbox.com",
		"slushmail.com",
		"smashmail.de",
		"smellfear.com",
		"smellrear.com",
		"snakemail.com",
		"sneakemail.com",
		"snkmail.com",
		"sofimail.com",
		"sofort-mail.de",
		"softpls.asia",
		"sogetthis.com",
		"sohu.com",
		"solvemail.info",
		"soodonims.com",
		"spam.la",
		"spam.su",
		"spam4.me",
		"spamavert.com",
		"spambob.com",
		"spambob.net",
		"spambob.org",
		"spambog.com",
		"spambog.de",
		"spambog.net",
		"spambog.ru",
		"spambox.info",
		"spambox.irishspringrealty.com",
		"spambox.us",
		"spamcannon.com",
		"spamcannon.net",
		"spamcero.com",
		"spamcon.org",
		"spamcorptastic.com",
		"spamcowboy.com",
		"spamcowboy.net",
		"spamcowboy.org",
		"spamday.com",
		"spamex.com",
		"spamfree.eu",
		"spamfree24.com",
		"spamfree24.de",
		"spamfree24.eu",
		"spamfree24.info",
		"spamfree24.net",
		"spamfree24.org",
		"spamgoes.in",
		"spamgourmet.com",
		"spamgourmet.net",
		"spamgourmet.org",
		"spamherelots.com",
		"spamhereplease.com",
		"spamhole.com",
		"spamify.com",
		"spaminator.de",
		"spamkill.info",
		"spaml.com",
		"spaml.de",
		"spammotel.com",
		"spamobox.com",
		"spamoff.de",
		"spamsalad.in",
		"spamslicer.com",
		"spamspot.com",
		"spamstack.net",
		"spamthis.co.uk",
		"spamthisplease.com",
		"spamtrail.com",
		"spamtroll.net",
		"speed.1s.fr",
		"spikio.com",
		"spoofmail.de",
		"squizzy.de",
		"ssoia.com",
		"startkeys.com",
		"stinkefinger.net",
		"stop-my-spam.com",
		"stuffmail.de",
		"supergreatmail.com",
		"supermailer.jp",
		"superrito.com",
		"superstachel.de",
		"suremail.info",
		"svk.jp",
		"sweetxxx.de",
		"tagyourself.com",
		"talkinator.com",
		"tapchicuoihoi.com",
		"teewars.org",
		"teleworm.com",
		"teleworm.us",
		"temp.emeraldwebmail.com",
		"temp.headstrong.de",
		"tempalias.com",
		"tempe-mail.com",
		"tempemail.biz",
		"tempemail.co.za",
		"tempemail.com",
		"tempemail.net",
		"tempinbox.co.uk",
		"tempinbox.com",
		"tempmail.it",
		"tempmail2.com",
		"tempmaildemo.com",
		"tempomail.fr",
		"temporarily.de",
		"temporarioemail.com.br",
		"temporaryemail.net",
		"temporaryemail.us",
		"temporaryforwarding.com",
		"temporaryinbox.com",
		"tempthe.net",
		"tempymail.com",
		"thanksnospam.info",
		"thankyou2010.com",
		"thecloudindex.com",
		"thisisnotmyrealemail.com",
		"throwawayemailaddress.com",
		"tilien.com",
		"tittbit.in",
		"tmailinator.com",
		"toiea.com",
		"toomail.biz",
		"tradermail.info",
		"trash-amil.com",
		"trash-mail.at",
		"trash-mail.com",
		"trash-mail.de",
		"trash2009.com",
		"trash2010.com",
		"trash2011.com",
		"trashdevil.com",
		"trashdevil.de",
		"trashemail.de",
		"trashmail.at",
		"trashmail.com",
		"trashmail.de",
		"trashmail.me",
		"trashmail.net",
		"trashmail.org",
		"trashmail.ws",
		"trashmailer.com",
		"trashymail.com",
		"trashymail.net",
		"trbvm.com",
		"trillianpro.com",
		"tryalert.com",
		"turual.com",
		"twinmail.de",
		"twoweirdtricks.com",
		"tyldd.com",
		"uggsrock.com",
		"umail.net",
		"upliftnow.com",
		"uplipht.com",
		"uroid.com",
		"username.e4ward.com",
		"venompen.com",
		"veryrealemail.com",
		"vidchart.com",
		"viditag.com",
		"viewcastmedia.com",
		"viewcastmedia.net",
		"viewcastmedia.org",
		"vomoto.com",
		"vubby.com",
		"walala.org",
		"walkmail.net",
		"webemail.me",
		"webm4il.info",
		"webuser.in",
		"wee.my",
		"weg-werf-email.de",
		"wegwerf-email-addressen.de",
		"wegwerf-emails.de",
		"wegwerfadresse.de",
		"wegwerfemail.de",
		"wegwerfmail.de",
		"wegwerfmail.info",
		"wegwerfmail.net",
		"wegwerfmail.org",
		"wetrainbayarea.com",
		"wetrainbayarea.org",
		"wh4f.org",
		"whatiaas.com",
		"whatpaas.com",
		"whatsaas.com",
		"whopy.com",
		"whtjddn.33mail.com",
		"whyspam.me",
		"wilemail.com",
		"willselfdestruct.com",
		"winemaven.info",
		"wronghead.com",
		"wuzup.net",
		"wuzupmail.net",
		"www.e4ward.com",
		"www.gishpuppy.com",
		"www.mailinator.com",
		"wwwnew.eu",
		"xagloo.com",
		"xemaps.com",
		"xents.com",
		"xmaily.com",
		"xoxy.net",
		"xyzfree.net",
		"yapped.net",
		"yeah.net",
		"yep.it",
		"yogamaven.com",
		"yopmail.com",
		"yopmail.fr",
		"yopmail.net",
		"ypmail.webarnak.fr.eu.org",
		"yuurok.com",
		"za.com",
		"zehnminutenmail.de",
		"zetmail.com",
		"zippymail.info",
		"zoaxe.com",
		"zoemail.com",
		"zoemail.net",
		"zoemail.org",
		"zomg.info",
		"zxcv.com",
		"zxcvbnm.com",
		"zzz.com"
	);

	public static function isDisposableEmail($email)
	{

		if (filter_var($email, FILTER_VALIDATE_EMAIL))
		{

			$delimiter = '@';
			$email = explode($delimiter, $email);
		    $domain = array_pop($email);

		    return in_array($domain, self::$disposableEmails);

		}
		else
		{

			throw new \InvalidArgumentException('invalid email address');

		}

	}

}