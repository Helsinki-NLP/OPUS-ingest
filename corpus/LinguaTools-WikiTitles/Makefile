# -*-makefile-*-
#
# template for converting aligned parallel corpora 
# in MOSES format (sentence aligned plain text) to OPUS
#
# - assumes that there are plain text files in src/
#   (they may be compressed with gzip)
# - assumes that opus-tools are installed (moses2opus in PATH)
#
# BEFORE RUNNING:
# - set corpus-specific info in Makefile.def
# - change the include of preprocessing Makefiles if necessary
#   (Makefile.tag for PoS tagging or Makefile.annotate)
#
# TODO
# - does not work well for multilingual corpora yet
#   (converts for every language pair!)


include Makefile.def
include ../Makefile.def


FILES     = $(shell find src -name '*.??')
FILEBASE  = $(sort $(basename ${FILES}))
LANGUAGES = $(sort $(subst .,,$(suffix ${FILES})))
CONVERTED = ${patsubst %,%_done,${FILEBASE}}


DOWNLOADS = 	04j515tc7j2jgpj/wikititles-2014_arbg.tgz \
		fzrq1bg6rzx56iq/wikititles-2014_arcs.tgz \
		faka5afgeucyft7/wikititles-2014_arda.tgz \
		nc8gth1fv4zhsof/wikititles-2014_arde.tgz \
		73tosz4ire4um0n/wikititles-2014_arel.tgz \
		s08r9yw1hxcbecj/wikititles-2014_aren.tgz \
		jc6yai66mn6bh5l/wikititles-2014_ares.tgz \
		mdigquqrasof07s/wikititles-2014_arfa.tgz \
		7uecxuwkr5iwvgc/wikititles-2014_arfi.tgz \
		ib89l8dckxbq1xs/wikititles-2014_arfr.tgz \
		jaxmqqcmp75b2sy/wikititles-2014_arhu.tgz \
		drsjnpopadedd1p/wikititles-2014_arit.tgz \
		jayauqsn0ww8gr2/wikititles-2014_arja.tgz \
		a49vjagxu7bilwk/wikititles-2014_arko.tgz \
		gaxeih66haljo27/wikititles-2014_arnl.tgz \
		1k7ihxd8fq0fcda/wikititles-2014_arpl.tgz \
		aj4ofxjatqf11ho/wikititles-2014_arpt.tgz \
		81yx0jeximdh330/wikititles-2014_arro.tgz \
		qv7bij8dwgkr1yd/wikititles-2014_arru.tgz \
		aixl0t4w3nj1on8/wikititles-2014_arsv.tgz \
		bg09c7d4rqghae9/wikititles-2014_artr.tgz \
		02mpbq5rwz65x3y/wikititles-2014_arzh.tgz \
		uxfpkgzqc5ah3lm/wikititles-2014_bgcs.tgz \
		7p3aeedjatb39r8/wikititles-2014_bgda.tgz \
		582v4xlc878o88c/wikititles-2014_bgde.tgz \
		4q18h8l6gaz8ktx/wikititles-2014_bgel.tgz \
		cxovv7t0zhvvkw2/wikititles-2014_bgen.tgz \
		15pdxb256xz840o/wikititles-2014_bges.tgz \
		a953mwj173y878u/wikititles-2014_bgfa.tgz \
		pqatqz66cotz799/wikititles-2014_bgfi.tgz \
		tmcq40bgnmce3t2/wikititles-2014_bgfr.tgz \
		yvkdg9mu6ckaxc0/wikititles-2014_bghu.tgz \
		kck6ixrx2v9wtim/wikititles-2014_bgit.tgz \
		s5v37odvb4dufx6/wikititles-2014_bgja.tgz \
		ebgujhdjm5vkxpw/wikititles-2014_bgko.tgz \
		gjzywe3pmso0dkz/wikititles-2014_bgnl.tgz \
		lsrvwqvd2v7hnhw/wikititles-2014_bgpl.tgz \
		vfc3aizbjtnbtio/wikititles-2014_bgpt.tgz \
		gwvtxncgj2fubbt/wikititles-2014_bgro.tgz \
		pxdl3hkv4iyluyt/wikititles-2014_bgru.tgz \
		3spvq90nnjo56mi/wikititles-2014_bgsv.tgz \
		cc4gr923fz2p1rt/wikititles-2014_bgtr.tgz \
		yml3m6ibxiqy2yf/wikititles-2014_bgzh.tgz \
		16zdu0hrgs6e8e7/wikititles-2014_csda.tgz \
		aorw1fqdirusgjy/wikititles-2014_csde.tgz \
		5fmsqmbnxzubvry/wikititles-2014_csel.tgz \
		rq29gx3f6jvm0uh/wikititles-2014_csen.tgz \
		3hfpgi6do85m9w9/wikititles-2014_cses.tgz \
		pvqlxrtw5uka3lo/wikititles-2014_csfa.tgz \
		iny694ip5gpjw7f/wikititles-2014_csfi.tgz \
		ft21z297hchzxk4/wikititles-2014_csfr.tgz \
		gb963u2wi29o3l1/wikititles-2014_cshu.tgz \
		wqldo99ral75npg/wikititles-2014_csit.tgz \
		63lodxfy8em5j5i/wikititles-2014_csja.tgz \
		zy7vg2a3eitzkzc/wikititles-2014_csko.tgz \
		pwj6rfs7mxbzf7e/wikititles-2014_csnl.tgz \
		vztt19ld7l3tc1t/wikititles-2014_cspl.tgz \
		kn1h8o52ucfu5fz/wikititles-2014_cspt.tgz \
		feosoxiqv3jx4it/wikititles-2014_csro.tgz \
		l1p3mnctkyowh7k/wikititles-2014_csru.tgz \
		sbzxrai9g2u9rk7/wikititles-2014_cssv.tgz \
		uexjhfm7r67f4uc/wikititles-2014_cstr.tgz \
		bmnwumqfu08phhe/wikititles-2014_cszh.tgz \
		cothkbkina12fta/wikititles-2014_dade.tgz \
		vr20cg5995lce0f/wikititles-2014_dael.tgz \
		6vdl57ii4lwfl7h/wikititles-2014_daen.tgz \
		h4cfk24r7iukjwa/wikititles-2014_daes.tgz \
		dec2i92flwo0j98/wikititles-2014_dafa.tgz \
		palsd7wxsnj7ntb/wikititles-2014_dafi.tgz \
		n6lhykj6ju21u6t/wikititles-2014_dafr.tgz \
		d7cljp7x4yhnfkz/wikititles-2014_dahu.tgz \
		fpkv82d9evkg6am/wikititles-2014_dait.tgz \
		n3hd4roiob4ic0c/wikititles-2014_daja.tgz \
		lkoj2p06gw93nsi/wikititles-2014_dako.tgz \
		nby1fqfz28lnp81/wikititles-2014_danl.tgz \
		5n3al8y17k6fl1g/wikititles-2014_dapl.tgz \
		t83jb8kupejcq6u/wikititles-2014_dapt.tgz \
		httb0wod5r558dt/wikititles-2014_daro.tgz \
		pglodclo3p12r1q/wikititles-2014_daru.tgz \
		w4cga8jt3zsbli1/wikititles-2014_dasv.tgz \
		ngdluw3il43swf4/wikititles-2014_datr.tgz \
		gjzhc96anwtpdmb/wikititles-2014_dazh.tgz \
		hgmeyvavoges6hc/wikititles-2014_deel.tgz \
		h1wqni2a8uapmmt/wikititles-2014_deen.tgz \
		b5bk2yquuunm702/wikititles-2014_dees.tgz \
		ye07dzb4vemzrbw/wikititles-2014_defa.tgz \
		0gpeyfabsx3qkqo/wikititles-2014_defi.tgz \
		0pw75p9bv1850fu/wikititles-2014_defr.tgz \
		yrydz53ol6fmdnj/wikititles-2014_dehu.tgz \
		yo20zsmqiap8wx7/wikititles-2014_deit.tgz \
		ccnys6sziztd5gz/wikititles-2014_deja.tgz \
		enpulumwk4pkogg/wikititles-2014_deko.tgz \
		6jj8z6aq4qizumb/wikititles-2014_denl.tgz \
		ju6pt60z00r1q18/wikititles-2014_depl.tgz \
		uypl3ez2o57c3a0/wikititles-2014_dept.tgz \
		xk6rw8nwohcbyl8/wikititles-2014_dero.tgz \
		h6ed7vnn3qny5iu/wikititles-2014_deru.tgz \
		vvpbwtcq9pns50e/wikititles-2014_desv.tgz \
		l9ave94viu8nfqx/wikititles-2014_detr.tgz \
		hcjto7we7vacufu/wikititles-2014_dezh.tgz \
		jbovwht1zjfmbnm/wikititles-2014_elen.tgz \
		odmauxqvlzy2cqv/wikititles-2014_eles.tgz \
		cewd7x04kkxke15/wikititles-2014_elfa.tgz \
		uzm3aa25e6eg53z/wikititles-2014_elfi.tgz \
		e4qg1a161cl587n/wikititles-2014_elfr.tgz \
		p0xajma22nr9idl/wikititles-2014_elhu.tgz \
		14e4czry96r47kt/wikititles-2014_elit.tgz \
		c03d5wwn1t7vnar/wikititles-2014_elja.tgz \
		24zzf9erxrwstlo/wikititles-2014_elko.tgz \
		y54cqp4oiq44jvq/wikititles-2014_elnl.tgz \
		qec37lk6cmr6n7h/wikititles-2014_elpl.tgz \
		ew1rhmr1r8bqxw8/wikititles-2014_elpt.tgz \
		xwitiqqw5wx8cpe/wikititles-2014_elro.tgz \
		lrgzd4ndp1ivojo/wikititles-2014_elru.tgz \
		dg2l31x6k7t3n7j/wikititles-2014_elsv.tgz \
		5yslv5wrc6076ri/wikititles-2014_eltr.tgz \
		03ox5ay1l2eq1nb/wikititles-2014_elzh.tgz \
		7kb21jpaegtdprs/wikititles-2014_enes.tgz \
		km8zipw2k7bb6bz/wikititles-2014_enfa.tgz \
		vswatv073ncvmbv/wikititles-2014_enfi.tgz \
		ic8gp6kwi64jkgw/wikititles-2014_enfr.tgz \
		5n7o2rqrmjr9lxe/wikititles-2014_enhu.tgz \
		htkvdpm83803w8g/wikititles-2014_enit.tgz \
		6qpcq4jgm4mjfo5/wikititles-2014_enja.tgz \
		vz7k6t3z06vm96m/wikititles-2014_enko.tgz \
		p1cvbteuzs4hhq9/wikititles-2014_ennl.tgz \
		fgt38mk22kgjzv5/wikititles-2014_enpl.tgz \
		7hxuj0kmd51ltgs/wikititles-2014_enpt.tgz \
		rm1zju1m7ycw176/wikititles-2014_enro.tgz \
		13zhw7fnoioh00q/wikititles-2014_enru.tgz \
		h3tepdu06qcg17j/wikititles-2014_ensv.tgz \
		n1fjhk9lpfql9ns/wikititles-2014_entr.tgz \
		9d0polb8rude9ha/wikititles-2014_enzh.tgz \
		hrhcc6avil1e8ck/wikititles-2014_esfa.tgz \
		c7dxm02j955deey/wikititles-2014_esfi.tgz \
		t2j3216m8it8eel/wikititles-2014_esfr.tgz \
		6jcx1vnsuk2d8fk/wikititles-2014_eshu.tgz \
		eudnt94d1borcbz/wikititles-2014_esit.tgz \
		boem8qd3hw75mhm/wikititles-2014_esja.tgz \
		st9jp8b4s3kpwm4/wikititles-2014_esko.tgz \
		h7x8ibovv5ntf2p/wikititles-2014_esnl.tgz \
		7bgtl8w1ycquvxj/wikititles-2014_espl.tgz \
		z6b0r3ak8knjvf1/wikititles-2014_espt.tgz \
		oeblr9pal4svdtu/wikititles-2014_esro.tgz \
		4ylw6i1omeft7z5/wikititles-2014_esru.tgz \
		e0h78kv29s66k14/wikititles-2014_essv.tgz \
		eafh77vy898ip3p/wikititles-2014_estr.tgz \
		n3aoersqta9a333/wikititles-2014_eszh.tgz \
		etr6f5717dmq1pj/wikititles-2014_fafi.tgz \
		oqh9o2rugeb089e/wikititles-2014_fafr.tgz \
		xfwh15uuzp0cegk/wikititles-2014_fahu.tgz \
		5n63tf7wylm3cxa/wikititles-2014_fait.tgz \
		kx9d806liuotmfq/wikititles-2014_faja.tgz \
		a3w6u0x0enpzyj0/wikititles-2014_fako.tgz \
		jkbjfk74l8caqg5/wikititles-2014_fanl.tgz \
		wpp3e0hd8tdsoyy/wikititles-2014_fapl.tgz \
		3ywvk747hxvra5r/wikititles-2014_fapt.tgz \
		ugtsfl4qgsv4113/wikititles-2014_faro.tgz \
		usd1hp2uu218k7l/wikititles-2014_faru.tgz \
		mp3rvp4iezgo6pj/wikititles-2014_fasv.tgz \
		taihf6u5qb6b83z/wikititles-2014_fatr.tgz \
		t3podec9xy4dwix/wikititles-2014_fazh.tgz \
		x8s0qaqibz6lltn/wikititles-2014_fifr.tgz \
		elqgtz8pesw1h8h/wikititles-2014_fihu.tgz \
		brcaedpruz1tces/wikititles-2014_fiit.tgz \
		s1e4e3y6hnqk2g4/wikititles-2014_fija.tgz \
		nkyo12831b2yslp/wikititles-2014_fiko.tgz \
		0r3lubi5d44qqr1/wikititles-2014_finl.tgz \
		z2d3wy7mvioepuf/wikititles-2014_fipl.tgz \
		7mnut4bhh1hsejy/wikititles-2014_fipt.tgz \
		0u2wko45er5c90z/wikititles-2014_firo.tgz \
		u7df3hd2hpp1yns/wikititles-2014_firu.tgz \
		73mgwa15eh2rjp3/wikititles-2014_fisv.tgz \
		ozif8nv89vqer81/wikititles-2014_fitr.tgz \
		0w9btvcj6kdnteh/wikititles-2014_fizh.tgz \
		9lqe6u1hz1zevr2/wikititles-2014_frhu.tgz \
		03sbabvthbqgdzz/wikititles-2014_frit.tgz \
		rv5uz7hkveqeql8/wikititles-2014_frja.tgz \
		olcp01loge9kmo9/wikititles-2014_frko.tgz \
		2pd43xmpacn4k2r/wikititles-2014_frnl.tgz \
		ckbwgjiu8191jyl/wikititles-2014_frpl.tgz \
		8on0fd3wd38jw4j/wikititles-2014_frpt.tgz \
		1imns16wcgv7595/wikititles-2014_frro.tgz \
		t47k1qm2yeyysiu/wikititles-2014_frru.tgz \
		3xtjph0tvay2ecz/wikititles-2014_frsv.tgz \
		inkoca7pf9bcpt6/wikititles-2014_frtr.tgz \
		hxyx23pncd7j2y2/wikititles-2014_frzh.tgz \
		yn30cv2swhomlue/wikititles-2014_huit.tgz \
		yix222t5lrx47yy/wikititles-2014_huja.tgz \
		cm8z4rn8kii78ji/wikititles-2014_huko.tgz \
		5mlxkl7rue9wtfs/wikititles-2014_hunl.tgz \
		5va5qcnlpptxquk/wikititles-2014_hupl.tgz \
		2lt9ffvp0bordpt/wikititles-2014_hupt.tgz \
		mlnxm1h83dxuxn0/wikititles-2014_huro.tgz \
		rl7qh7ll73nz1qo/wikititles-2014_huru.tgz \
		att8du4i79kvnj4/wikititles-2014_husv.tgz \
		6hvq1dr7pwm33dw/wikititles-2014_hutr.tgz \
		j6h63j2xgwndy1r/wikititles-2014_huzh.tgz \
		jkyf7ewjrlr8798/wikititles-2014_itja.tgz \
		vwmra6xuezw7w8f/wikititles-2014_itko.tgz \
		zl68e5u9orkyvch/wikititles-2014_itnl.tgz \
		mtzh6t0igk4ge5n/wikititles-2014_itpl.tgz \
		5n8wob9spf5db07/wikititles-2014_itpt.tgz \
		0zg9xed1qnsbu6u/wikititles-2014_itro.tgz \
		a9n293jqwi11gpr/wikititles-2014_itru.tgz \
		4s3e0tmo8cu7cen/wikititles-2014_itsv.tgz \
		l7nt03iokcxu11b/wikititles-2014_ittr.tgz \
		ycmny5cy1p02jkx/wikititles-2014_itzh.tgz \
		03lgeo6yugf5jht/wikititles-2014_jako.tgz \
		7foo73ru8ilmlwb/wikititles-2014_janl.tgz \
		u1rlz7gsih79pg0/wikititles-2014_japl.tgz \
		s50ygbigtxxbbqt/wikititles-2014_japt.tgz \
		iyl9mlknrunzcta/wikititles-2014_jaro.tgz \
		h16okcs9x8a4l5w/wikititles-2014_jaru.tgz \
		9agu7u5jjazx8d9/wikititles-2014_jasv.tgz \
		ukg1ek63mjx0g04/wikititles-2014_jatr.tgz \
		aqchhx3krswmqzn/wikititles-2014_jazh.tgz \
		j8fzv0ckxpxixvf/wikititles-2014_konl.tgz \
		wqg4yvbxe8dhw2x/wikititles-2014_kopl.tgz \
		teeefh0ss6h00cs/wikititles-2014_kopt.tgz \
		p5rkkhe320xh3f0/wikititles-2014_koro.tgz \
		k1kl5q3nzqhqiny/wikititles-2014_koru.tgz \
		ri1tsfzdkcytjx1/wikititles-2014_kosv.tgz \
		bg3ccbck5skhob0/wikititles-2014_kotr.tgz \
		gpve56kb43lnvy6/wikititles-2014_kozh.tgz \
		z4to6kujh8rwss5/wikititles-2014_nlpl.tgz \
		lqri0zguqy2424c/wikititles-2014_nlpt.tgz \
		zty96o9d9390usv/wikititles-2014_nlro.tgz \
		ck75o5t2zu3e6nr/wikititles-2014_nlru.tgz \
		meyy1k475gc8ykn/wikititles-2014_nlsv.tgz \
		riusgvccxbsiy0l/wikititles-2014_nltr.tgz \
		31epwbom2i6e3p0/wikititles-2014_nlzh.tgz \
		612ii879zckadtf/wikititles-2014_plpt.tgz \
		7qdtp2c5qnop0a8/wikititles-2014_plro.tgz \
		yq5cn5txawdvum5/wikititles-2014_plru.tgz \
		iqmq7ej3nyd71kj/wikititles-2014_plsv.tgz \
		e73hv4ejwktqtus/wikititles-2014_pltr.tgz \
		200xb0bkk1ti0x6/wikititles-2014_plzh.tgz \
		0wbt2u9rm4l4j5y/wikititles-2014_ptro.tgz \
		ab5dfdl07j06dw3/wikititles-2014_ptru.tgz \
		hkc20tgy5ifldof/wikititles-2014_ptsv.tgz \
		ljbxam0f2l7kkgu/wikititles-2014_pttr.tgz \
		0eegtffi5xemfnl/wikititles-2014_ptzh.tgz \
		63pt63fwgh219k8/wikititles-2014_roru.tgz \
		orhildoo8ozxap7/wikititles-2014_rosv.tgz \
		jc4c1uzh6ftq9o9/wikititles-2014_rotr.tgz \
		sow4dk9p00xxslg/wikititles-2014_rozh.tgz \
		huiyn8hjpq5lizv/wikititles-2014_rusv.tgz \
		8lx5tz7x1cyil3d/wikititles-2014_rutr.tgz \
		jcbphinsu1oedtb/wikititles-2014_ruzh.tgz \
		ldlxxbhembwmoec/wikititles-2014_svtr.tgz \
		f6lhyojcnua3od6/wikititles-2014_svzh.tgz \
		a4iffiidjb8he13/wikititles-2014_trzh.tgz



## make all:
## - convert (see below)
## - annotate (tokenize/tag/chunk depending on Makefile that is included)
## - udparse (parse with UDPipe)
## - publish (various packages, cwb index, website etc)
## - wordalign

.PHONY: all
all:
	${MAKE} fetch
	${MAKE} import
#	${MAKE} extra
	${MAKE} publish

continue:
	${MAKE} import
	${MAKE} publish


.PHONY: import
import:
	${MAKE} convert
	${MAKE} annotate

.PHONY: extra
extra:
	${MAKE} udparse
	${MAKE} wordalign
	${MAKE} cwb-index


## standard procedures are specified in the following makefiles
##
##   Makefile.submit ....... submit a job to our cluster
##   Makefile.process ...... standard corpus processing tasks
##   Makfile.release ....... download packages and website
##   Makefile.cwb .......... indexing with CWB
##   Makfile.udparse ....... dependency parsing

include ../Makefile.submit
include ../Makefile.process
include ../Makefile.release
include ../Makefile.cwb
include ../Makefile.udparse


## select one of the following to set the annotation level in xml/
##
##   Makefile.tokenize ..... tokenization only
##   Makefile.tag .......... tokenization and PoS tagging (if available)
##   Makefile.annotate ..... all annotation in Uplug


include ../Makefile.tokenize-polyglot
# include ../Makefile.tokenize-fast
# include ../Makefile.tokenize-moses
# include ../Makefile.tokenize
# include ../Makefile.tag
# include ../Makefile.annotate


## change this if moses2opus is not in your PATH
MOSES2OPUS = moses2opus


fetch: ${DOWNLOADS}
	find src -name '*.tgz' -exec tar -C src -xzf {} \;
	find src -name '*.tgz' -delete

${DOWNLOADS}:
	mkdir -p src
	if [ ! -e src/$(notdir $@) ]; then \
	  wget -O src/$(notdir $@) https://www.dropbox.com/s/$@?dl=1; \
	fi



## convert
.PHONY: convert
convert: ${CONVERTED} xml/Makefile
	${MAKE} -C xml create-align-files


${CONVERTED}:
	mkdir -p raw xml log
	( b=$(patsubst src/%_done,%,$@); \
	  d=$(dir $(patsubst src/%_done,%,$@)); \
	  for s in $(sort $(subst .,,$(suffix $(wildcard $(@:_done=).*)))); do \
	    for t in $(sort $(subst .,,$(suffix $(wildcard $(@:_done=).*)))); do \
	      if [ "$$s" \< "$$t" ]; then \
	          echo "convert $$b ($$s-$$t)"; \
	          mkdir -p xml/$$s-$$t/$$d; \
	          cd raw; \
	          ${MOSES2OPUS} -z -s $$s -t $$t -b $$b \
			../src/$$b.$$s ../src/$$b.$$t |\
		  gzip -c > ../xml/$$s-$$t/$$b.xml.gz; \
	          cd .. ;\
	      fi \
	    done \
	  done )
	touch $@
