var mediaWikiLoadStart=(new Date()).getTime();function isCompatible(ua){if(ua===undefined){ua=navigator.userAgent;}return!((ua.indexOf('MSIE')!==-1&&parseFloat(ua.split('MSIE')[1])<8)||(ua.indexOf('Firefox/')!==-1&&parseFloat(ua.split('Firefox/')[1])<3)||(ua.indexOf('Opera/')!==-1&&(ua.indexOf('Version/')===-1?parseFloat(ua.split('Opera/')[1])<10:parseFloat(ua.split('Version/')[1])<12))||(ua.indexOf('Opera ')!==-1&&parseFloat(ua.split(' Opera ')[1])<10)||ua.match(/BlackBerry[^\/]*\/[1-5]\./)||ua.match(/webOS\/1\.[0-4]/)||ua.match(/PlayStation/i)||ua.match(/SymbianOS|Series60/)||ua.match(/NetFront/)||ua.match(/Opera Mini/)||ua.match(/S40OviBrowser/)||(ua.match(/Glass/)&&ua.match(/Android/)));}var startUp=function(){mw.config=new mw.Map(true);mw.loader.addSource({"local":"/load.php"});mw.loader.register([["site","1484775328",[],"site"],["noscript","1484775328",[],"noscript"],["filepage","1484775328"],["user.groups","1484775328",[],"user"],["user","1484775328",[],"user"],["user.cssprefs",
"1484775328",["mediawiki.user"],"private"],["user.options","1484775328",[],"private"],["user.tokens","1484775328",[],"private"],["mediawiki.language.data","1484775328",["mediawiki.language.init"]],["mediawiki.skinning.elements","1484775328"],["mediawiki.skinning.content","1484775328"],["mediawiki.skinning.interface","1484775328"],["mediawiki.skinning.content.parsoid","1484775328"],["mediawiki.skinning.content.externallinks","1484775328"],["jquery.accessKeyLabel","1484775337",["jquery.client","jquery.mwExtension"]],["jquery.appear","1484775328"],["jquery.arrowSteps","1484775328"],["jquery.async","1484775328"],["jquery.autoEllipsis","1484775328",["jquery.highlightText"]],["jquery.badge","1484775328",["mediawiki.language"]],["jquery.byteLength","1484775328"],["jquery.byteLimit","1484775328",["jquery.byteLength"]],["jquery.checkboxShiftClick","1484775328"],["jquery.chosen","1484775328"],["jquery.client","1484775328"],["jquery.color","1484775328",["jquery.colorUtil"]],["jquery.colorUtil",
"1484775328"],["jquery.confirmable","1484775328",["mediawiki.jqueryMsg"]],["jquery.cookie","1484775328"],["jquery.expandableField","1484775328"],["jquery.farbtastic","1484775328",["jquery.colorUtil"]],["jquery.footHovzer","1484775328"],["jquery.form","1484775328"],["jquery.fullscreen","1484775328"],["jquery.getAttrs","1484775328"],["jquery.hidpi","1484775328"],["jquery.highlightText","1484775328",["jquery.mwExtension"]],["jquery.hoverIntent","1484775328"],["jquery.json","1484775328"],["jquery.localize","1484775328"],["jquery.makeCollapsible","1484775337"],["jquery.mockjax","1484775328"],["jquery.mw-jump","1484775328"],["jquery.mwExtension","1484775328"],["jquery.placeholder","1484775328"],["jquery.qunit","1484775328"],["jquery.qunit.completenessTest","1484775328",["jquery.qunit"]],["jquery.spinner","1484775328"],["jquery.jStorage","1484775328",["json"]],["jquery.suggestions","1484775328",["jquery.highlightText"]],["jquery.tabIndex","1484775328"],["jquery.tablesorter","1486395769",[
"jquery.mwExtension","mediawiki.language.months"]],["jquery.textSelection","1484775328",["jquery.client"]],["jquery.throttle-debounce","1484775328"],["jquery.validate","1484775328"],["jquery.xmldom","1484775328"],["jquery.tipsy","1484775328"],["jquery.ui.core","1484775328",[],"jquery.ui"],["jquery.ui.accordion","1484775328",["jquery.ui.core","jquery.ui.widget"],"jquery.ui"],["jquery.ui.autocomplete","1484775328",["jquery.ui.menu"],"jquery.ui"],["jquery.ui.button","1484775328",["jquery.ui.core","jquery.ui.widget"],"jquery.ui"],["jquery.ui.datepicker","1484775328",["jquery.ui.core"],"jquery.ui"],["jquery.ui.dialog","1484775328",["jquery.ui.button","jquery.ui.draggable","jquery.ui.position","jquery.ui.resizable"],"jquery.ui"],["jquery.ui.draggable","1484775328",["jquery.ui.core","jquery.ui.mouse"],"jquery.ui"],["jquery.ui.droppable","1484775328",["jquery.ui.draggable"],"jquery.ui"],["jquery.ui.menu","1484775328",["jquery.ui.core","jquery.ui.position","jquery.ui.widget"],"jquery.ui"],[
"jquery.ui.mouse","1484775328",["jquery.ui.widget"],"jquery.ui"],["jquery.ui.position","1484775328",[],"jquery.ui"],["jquery.ui.progressbar","1484775328",["jquery.ui.core","jquery.ui.widget"],"jquery.ui"],["jquery.ui.resizable","1484775328",["jquery.ui.core","jquery.ui.mouse"],"jquery.ui"],["jquery.ui.selectable","1484775328",["jquery.ui.core","jquery.ui.mouse"],"jquery.ui"],["jquery.ui.slider","1484775328",["jquery.ui.core","jquery.ui.mouse"],"jquery.ui"],["jquery.ui.sortable","1484775328",["jquery.ui.core","jquery.ui.mouse"],"jquery.ui"],["jquery.ui.spinner","1484775328",["jquery.ui.button"],"jquery.ui"],["jquery.ui.tabs","1484775328",["jquery.ui.core","jquery.ui.widget"],"jquery.ui"],["jquery.ui.tooltip","1484775328",["jquery.ui.core","jquery.ui.position","jquery.ui.widget"],"jquery.ui"],["jquery.ui.widget","1484775328",[],"jquery.ui"],["jquery.effects.core","1484775328",[],"jquery.ui"],["jquery.effects.blind","1484775328",["jquery.effects.core"],"jquery.ui"],[
"jquery.effects.bounce","1484775328",["jquery.effects.core"],"jquery.ui"],["jquery.effects.clip","1484775328",["jquery.effects.core"],"jquery.ui"],["jquery.effects.drop","1484775328",["jquery.effects.core"],"jquery.ui"],["jquery.effects.explode","1484775328",["jquery.effects.core"],"jquery.ui"],["jquery.effects.fade","1484775328",["jquery.effects.core"],"jquery.ui"],["jquery.effects.fold","1484775328",["jquery.effects.core"],"jquery.ui"],["jquery.effects.highlight","1484775328",["jquery.effects.core"],"jquery.ui"],["jquery.effects.pulsate","1484775328",["jquery.effects.core"],"jquery.ui"],["jquery.effects.scale","1484775328",["jquery.effects.core"],"jquery.ui"],["jquery.effects.shake","1484775328",["jquery.effects.core"],"jquery.ui"],["jquery.effects.slide","1484775328",["jquery.effects.core"],"jquery.ui"],["jquery.effects.transfer","1484775328",["jquery.effects.core"],"jquery.ui"],["json","1484775328",[],null,"local",
"return!!(window.JSON\u0026\u0026JSON.stringify\u0026\u0026JSON.parse);"],["moment","1484775328"],["mediawiki.api","1484775328",["mediawiki.util"]],["mediawiki.api.category","1484775328",["mediawiki.Title","mediawiki.api"]],["mediawiki.api.edit","1484775328",["mediawiki.Title","mediawiki.api","user.tokens"]],["mediawiki.api.login","1484775328",["mediawiki.api"]],["mediawiki.api.parse","1484775328",["mediawiki.api"]],["mediawiki.api.watch","1484775328",["mediawiki.api","user.tokens"]],["mediawiki.content.json","1484775328"],["mediawiki.debug","1484775328",["jquery.footHovzer","jquery.tipsy"]],["mediawiki.debug.init","1484775328",["mediawiki.debug"]],["mediawiki.feedback","1484775328",["jquery.ui.dialog","mediawiki.api.edit","mediawiki.jqueryMsg"]],["mediawiki.hidpi","1484775328",["jquery.hidpi"],null,"local","return'srcset'in new Image();"],["mediawiki.hlist","1484775328",["jquery.client"]],["mediawiki.htmlform","1484818843",["jquery.mwExtension"]],["mediawiki.icon","1484775328"],[
"mediawiki.inspect","1484775328",["jquery.byteLength","json"]],["mediawiki.notification","1484775328",["mediawiki.page.startup"]],["mediawiki.notify","1484775328"],["mediawiki.pager.tablePager","1484775328"],["mediawiki.searchSuggest","1484775337",["jquery.placeholder","jquery.suggestions","mediawiki.api"]],["mediawiki.Title","1484775328",["jquery.byteLength","mediawiki.util"]],["mediawiki.toc","1484776165",["jquery.cookie"]],["mediawiki.Uri","1484775328",["mediawiki.util"]],["mediawiki.user","1484775328",["jquery.cookie","mediawiki.api","user.options","user.tokens"]],["mediawiki.util","1484775328",["jquery.accessKeyLabel","mediawiki.notify"]],["mediawiki.cookie","1484775328",["jquery.cookie"]],["mediawiki.action.edit","1484775328",["jquery.byteLimit","jquery.textSelection","mediawiki.action.edit.styles","mediawiki.action.edit.toolbar"]],["mediawiki.action.edit.styles","1484775328"],["mediawiki.action.edit.toolbar","1484775328"],["mediawiki.action.edit.collapsibleFooter","1484775328",[
"jquery.cookie","jquery.makeCollapsible","mediawiki.icon"]],["mediawiki.action.edit.preview","1484775328",["jquery.form","jquery.spinner","mediawiki.action.history.diff"]],["mediawiki.action.history","1484775328",[],"mediawiki.action.history"],["mediawiki.action.history.diff","1484775328",[],"mediawiki.action.history"],["mediawiki.action.view.dblClickEdit","1484775328",["mediawiki.page.startup"]],["mediawiki.action.view.metadata","1484786236"],["mediawiki.action.view.postEdit","1484775337",["mediawiki.cookie","mediawiki.jqueryMsg"]],["mediawiki.action.view.redirect","1484775328",["jquery.client"]],["mediawiki.action.view.redirectPage","1484775328"],["mediawiki.action.view.rightClickEdit","1484775328"],["mediawiki.action.edit.editWarning","1484848287",["jquery.textSelection","mediawiki.jqueryMsg"]],["mediawiki.language","1484775337",["mediawiki.cldr","mediawiki.language.data"]],["mediawiki.cldr","1484775328",["mediawiki.libs.pluralruleparser"]],["mediawiki.libs.pluralruleparser",
"1484775328"],["mediawiki.language.init","1484775328"],["mediawiki.jqueryMsg","1484775328",["mediawiki.language","mediawiki.util"]],["mediawiki.language.months","1486395769",["mediawiki.language"]],["mediawiki.language.names","1484775328",["mediawiki.language.init"]],["mediawiki.libs.jpegmeta","1484775328"],["mediawiki.page.gallery","1484775328"],["mediawiki.page.ready","1484775328",["jquery.accessKeyLabel","jquery.checkboxShiftClick","jquery.makeCollapsible","jquery.mw-jump","jquery.placeholder"]],["mediawiki.page.startup","1484775328",["mediawiki.util"]],["mediawiki.page.patrol.ajax","1484775328",["jquery.spinner","mediawiki.Title","mediawiki.api","mediawiki.page.startup","user.tokens"]],["mediawiki.page.watch.ajax","1484832321",["mediawiki.api.watch","mediawiki.page.startup"]],["mediawiki.page.image.pagination","1484775328",["jquery.spinner","mediawiki.Uri"]],["mediawiki.special","1484775328"],["mediawiki.special.block","1484775328",["mediawiki.util"]],[
"mediawiki.special.changeemail","1484775328",["mediawiki.util"]],["mediawiki.special.changeslist","1484775328"],["mediawiki.special.changeslist.legend","1484775328"],["mediawiki.special.changeslist.legend.js","1484775328",["jquery.cookie","jquery.makeCollapsible"]],["mediawiki.special.changeslist.enhanced","1484775328"],["mediawiki.special.import","1484775328"],["mediawiki.special.movePage","1484775328",["jquery.byteLimit"]],["mediawiki.special.pageLanguage","1484775328"],["mediawiki.special.pagesWithProp","1484775328"],["mediawiki.special.preferences","1484835172",["mediawiki.language"]],["mediawiki.special.recentchanges","1484775328",["mediawiki.special"]],["mediawiki.special.search","1484775347"],["mediawiki.special.undelete","1484775328"],["mediawiki.special.upload","1484832656",["jquery.spinner","mediawiki.Title","mediawiki.api","mediawiki.libs.jpegmeta"]],["mediawiki.special.userlogin.common.styles","1484775328"],["mediawiki.special.userlogin.signup.styles","1484775328"],[
"mediawiki.special.userlogin.login.styles","1484775328"],["mediawiki.special.userlogin.common.js","1484776283"],["mediawiki.special.userlogin.signup.js","1491853975",["jquery.throttle-debounce","mediawiki.api","mediawiki.jqueryMsg"]],["mediawiki.special.unwatchedPages","1484775328",["mediawiki.Title","mediawiki.api.watch"]],["mediawiki.special.javaScriptTest","1484775328",["jquery.qunit"]],["mediawiki.special.version","1484775328"],["mediawiki.legacy.config","1484775328"],["mediawiki.legacy.ajax","1484775328",["mediawiki.legacy.wikibits"]],["mediawiki.legacy.commonPrint","1484775328"],["mediawiki.legacy.protect","1484775328",["jquery.byteLimit"]],["mediawiki.legacy.shared","1484775328"],["mediawiki.legacy.oldshared","1484775328"],["mediawiki.legacy.wikibits","1484775328",["mediawiki.util"]],["mediawiki.ui","1484775328"],["mediawiki.ui.checkbox","1484775328"],["mediawiki.ui.anchor","1484775328"],["mediawiki.ui.button","1484775328"],["mediawiki.ui.input","1484775328"],["es5-shim",
"1484775328",[],null,"local","return(function(){'use strict';return!this\u0026\u0026!!Function.prototype.bind;}());"],["oojs","1484775328",["es5-shim","json"]],["oojs-ui","1484775328",["oojs"]],["ext.geshi.language.4cs","1484775328"],["ext.geshi.language.6502acme","1484775328"],["ext.geshi.language.6502kickass","1484775328"],["ext.geshi.language.6502tasm","1484775328"],["ext.geshi.language.68000devpac","1484775328"],["ext.geshi.language.abap","1484775328"],["ext.geshi.language.actionscript","1484775328"],["ext.geshi.language.actionscript3","1484775328"],["ext.geshi.language.ada","1484775328"],["ext.geshi.language.algol68","1484775328"],["ext.geshi.language.apache","1484775328"],["ext.geshi.language.applescript","1484775328"],["ext.geshi.language.apt_sources","1484775328"],["ext.geshi.language.arm","1484775328"],["ext.geshi.language.asm","1484775328"],["ext.geshi.language.asp","1484775328"],["ext.geshi.language.asymptote","1484775328"],["ext.geshi.language.autoconf","1484775328"],[
"ext.geshi.language.autohotkey","1484775328"],["ext.geshi.language.autoit","1484775328"],["ext.geshi.language.avisynth","1484775328"],["ext.geshi.language.awk","1484775328"],["ext.geshi.language.bascomavr","1484775328"],["ext.geshi.language.bash","1484775328"],["ext.geshi.language.basic4gl","1484775328"],["ext.geshi.language.bf","1484775328"],["ext.geshi.language.bibtex","1484775328"],["ext.geshi.language.blitzbasic","1484775328"],["ext.geshi.language.bnf","1484775328"],["ext.geshi.language.boo","1484775328"],["ext.geshi.language.c","1484775328"],["ext.geshi.language.c_loadrunner","1484775328"],["ext.geshi.language.c_mac","1484775328"],["ext.geshi.language.caddcl","1484775328"],["ext.geshi.language.cadlisp","1484775328"],["ext.geshi.language.cfdg","1484775328"],["ext.geshi.language.cfm","1484775328"],["ext.geshi.language.chaiscript","1484775328"],["ext.geshi.language.cil","1484775328"],["ext.geshi.language.clojure","1484775328"],["ext.geshi.language.cmake","1484775328"],[
"ext.geshi.language.cobol","1484775328"],["ext.geshi.language.coffeescript","1484775328"],["ext.geshi.language.cpp","1484775328"],["ext.geshi.language.cpp-qt","1484775328"],["ext.geshi.language.csharp","1484775328"],["ext.geshi.language.css","1484775328"],["ext.geshi.language.cuesheet","1484775328"],["ext.geshi.language.d","1484775328"],["ext.geshi.language.dcl","1484775328"],["ext.geshi.language.dcpu16","1484775328"],["ext.geshi.language.dcs","1484775328"],["ext.geshi.language.delphi","1484775328"],["ext.geshi.language.diff","1484775328"],["ext.geshi.language.div","1484775328"],["ext.geshi.language.dos","1484775328"],["ext.geshi.language.dot","1484775328"],["ext.geshi.language.e","1484775328"],["ext.geshi.language.ecmascript","1484775328"],["ext.geshi.language.eiffel","1484775328"],["ext.geshi.language.email","1484775328"],["ext.geshi.language.epc","1484775328"],["ext.geshi.language.erlang","1484775328"],["ext.geshi.language.euphoria","1484775328"],["ext.geshi.language.f1",
"1484775328"],["ext.geshi.language.falcon","1484775328"],["ext.geshi.language.fo","1484775328"],["ext.geshi.language.fortran","1484775328"],["ext.geshi.language.freebasic","1484775328"],["ext.geshi.language.freeswitch","1484775328"],["ext.geshi.language.fsharp","1484775328"],["ext.geshi.language.gambas","1484775328"],["ext.geshi.language.gdb","1484775328"],["ext.geshi.language.genero","1484775328"],["ext.geshi.language.genie","1484775328"],["ext.geshi.language.gettext","1484775328"],["ext.geshi.language.glsl","1484775328"],["ext.geshi.language.gml","1484775328"],["ext.geshi.language.gnuplot","1484775328"],["ext.geshi.language.go","1484775328"],["ext.geshi.language.groovy","1484775328"],["ext.geshi.language.gwbasic","1484775328"],["ext.geshi.language.haskell","1484775328"],["ext.geshi.language.haxe","1484775328"],["ext.geshi.language.hicest","1484775328"],["ext.geshi.language.hq9plus","1484775328"],["ext.geshi.language.html4strict","1484775328"],["ext.geshi.language.html5","1484775328"]
,["ext.geshi.language.icon","1484775328"],["ext.geshi.language.idl","1484775328"],["ext.geshi.language.ini","1484775328"],["ext.geshi.language.inno","1484775328"],["ext.geshi.language.intercal","1484775328"],["ext.geshi.language.io","1484775328"],["ext.geshi.language.j","1484775328"],["ext.geshi.language.java","1484775328"],["ext.geshi.language.java5","1484775328"],["ext.geshi.language.javascript","1484775328"],["ext.geshi.language.jquery","1484775328"],["ext.geshi.language.kixtart","1484775328"],["ext.geshi.language.klonec","1484775328"],["ext.geshi.language.klonecpp","1484775328"],["ext.geshi.language.latex","1484775328"],["ext.geshi.language.lb","1484775328"],["ext.geshi.language.ldif","1484775328"],["ext.geshi.language.lisp","1484775328"],["ext.geshi.language.llvm","1484775328"],["ext.geshi.language.locobasic","1484775328"],["ext.geshi.language.logtalk","1484775328"],["ext.geshi.language.lolcode","1484775328"],["ext.geshi.language.lotusformulas","1484775328"],[
"ext.geshi.language.lotusscript","1484775328"],["ext.geshi.language.lscript","1484775328"],["ext.geshi.language.lsl2","1484775328"],["ext.geshi.language.lua","1484775328"],["ext.geshi.language.m68k","1484775328"],["ext.geshi.language.magiksf","1484775328"],["ext.geshi.language.make","1484775328"],["ext.geshi.language.mapbasic","1484775328"],["ext.geshi.language.matlab","1484775328"],["ext.geshi.language.mirc","1484775328"],["ext.geshi.language.mmix","1484775328"],["ext.geshi.language.modula2","1484775328"],["ext.geshi.language.modula3","1484775328"],["ext.geshi.language.mpasm","1484775328"],["ext.geshi.language.mxml","1484775328"],["ext.geshi.language.mysql","1484775328"],["ext.geshi.language.nagios","1484775328"],["ext.geshi.language.netrexx","1484775328"],["ext.geshi.language.newlisp","1484775328"],["ext.geshi.language.nsis","1484775328"],["ext.geshi.language.oberon2","1484775328"],["ext.geshi.language.objc","1484775328"],["ext.geshi.language.objeck","1484775328"],[
"ext.geshi.language.ocaml","1484775328"],["ext.geshi.language.ocaml-brief","1484775328"],["ext.geshi.language.octave","1484775328"],["ext.geshi.language.oobas","1484775328"],["ext.geshi.language.oorexx","1484775328"],["ext.geshi.language.oracle11","1484775328"],["ext.geshi.language.oracle8","1484775328"],["ext.geshi.language.oxygene","1484775328"],["ext.geshi.language.oz","1484775328"],["ext.geshi.language.parasail","1484775328"],["ext.geshi.language.parigp","1484775328"],["ext.geshi.language.pascal","1484775328"],["ext.geshi.language.pcre","1484775328"],["ext.geshi.language.per","1484775328"],["ext.geshi.language.perl","1484775328"],["ext.geshi.language.perl6","1484775328"],["ext.geshi.language.pf","1484775328"],["ext.geshi.language.php","1484775328"],["ext.geshi.language.php-brief","1484775328"],["ext.geshi.language.pic16","1484775328"],["ext.geshi.language.pike","1484775328"],["ext.geshi.language.pixelbender","1484775328"],["ext.geshi.language.pli","1484775328"],[
"ext.geshi.language.plsql","1484775328"],["ext.geshi.language.postgresql","1484775328"],["ext.geshi.language.povray","1484775328"],["ext.geshi.language.powerbuilder","1484775328"],["ext.geshi.language.powershell","1484775328"],["ext.geshi.language.proftpd","1484775328"],["ext.geshi.language.progress","1484775328"],["ext.geshi.language.prolog","1484775328"],["ext.geshi.language.properties","1484775328"],["ext.geshi.language.providex","1484775328"],["ext.geshi.language.purebasic","1484775328"],["ext.geshi.language.pycon","1484775328"],["ext.geshi.language.pys60","1484775328"],["ext.geshi.language.python","1484775328"],["ext.geshi.language.q","1484775328"],["ext.geshi.language.qbasic","1484775328"],["ext.geshi.language.rails","1484775328"],["ext.geshi.language.rebol","1484775328"],["ext.geshi.language.reg","1484775328"],["ext.geshi.language.rexx","1484775328"],["ext.geshi.language.robots","1484775328"],["ext.geshi.language.rpmspec","1484775328"],["ext.geshi.language.rsplus","1484775328"],
["ext.geshi.language.ruby","1484775328"],["ext.geshi.language.sas","1484775328"],["ext.geshi.language.scala","1484775328"],["ext.geshi.language.scheme","1484775328"],["ext.geshi.language.scilab","1484775328"],["ext.geshi.language.sdlbasic","1484775328"],["ext.geshi.language.smalltalk","1484775328"],["ext.geshi.language.smarty","1484775328"],["ext.geshi.language.spark","1484775328"],["ext.geshi.language.sparql","1484775328"],["ext.geshi.language.sql","1484775328"],["ext.geshi.language.stonescript","1484775328"],["ext.geshi.language.systemverilog","1484775328"],["ext.geshi.language.tcl","1484775328"],["ext.geshi.language.teraterm","1484775328"],["ext.geshi.language.text","1484775328"],["ext.geshi.language.thinbasic","1484775328"],["ext.geshi.language.tsql","1484775328"],["ext.geshi.language.typoscript","1484775328"],["ext.geshi.language.unicon","1484775328"],["ext.geshi.language.upc","1484775328"],["ext.geshi.language.urbi","1484775328"],["ext.geshi.language.uscript","1484775328"],[
"ext.geshi.language.vala","1484775328"],["ext.geshi.language.vb","1484775328"],["ext.geshi.language.vbnet","1484775328"],["ext.geshi.language.vedit","1484775328"],["ext.geshi.language.verilog","1484775328"],["ext.geshi.language.vhdl","1484775328"],["ext.geshi.language.vim","1484775328"],["ext.geshi.language.visualfoxpro","1484775328"],["ext.geshi.language.visualprolog","1484775328"],["ext.geshi.language.whitespace","1484775328"],["ext.geshi.language.whois","1484775328"],["ext.geshi.language.winbatch","1484775328"],["ext.geshi.language.xbasic","1484775328"],["ext.geshi.language.xml","1484775328"],["ext.geshi.language.xorg_conf","1484775328"],["ext.geshi.language.xpp","1484775328"],["ext.geshi.language.yaml","1484775328"],["ext.geshi.language.z80","1484775328"],["ext.geshi.language.zxbasic","1484775328"],["uw.base","1484775328"],["uw.EventFlowLogger","1484775328",["uw.base"]],["ext.uploadWizard","1484775328",["ext.uploadWizard.apiUploadFormDataHandler","ext.uploadWizard.apiUploadHandler"
,"ext.uploadWizard.events","jquery.arrowSteps","jquery.checkboxShiftClick","jquery.placeholder","jquery.spinner","jquery.suggestions","jquery.tipsy","jquery.ui.datepicker","jquery.ui.progressbar","jquery.ui.selectable","jquery.validate","mediawiki.Uri","mediawiki.api.category","mediawiki.api.parse","mediawiki.feedback","mediawiki.libs.jpegmeta","mediawiki.user","uw.EventFlowLogger","uw.controller.Deed","uw.controller.Details","uw.controller.Thanks","uw.controller.Tutorial","uw.controller.Upload","uw.ui.Wizard"],"ext.uploadWizard"],["ext.uploadWizard.tests","1484775328"],["ext.uploadWizard.events","1484775328"],["uw.controller.base","1484775328",["uw.base"]],["uw.controller.Deed","1484775328",["uw.controller.Step","uw.ui.Step"]],["uw.controller.Details","1484775328",["uw.controller.Step","uw.ui.Step"]],["uw.controller.Step","1484775328",["oojs","uw.controller.base"]],["uw.controller.Thanks","1484775328",["uw.controller.Step","uw.ui.Thanks"]],["uw.controller.Tutorial","1484775328",[
"uw.controller.Step","uw.ui.Step"]],["uw.controller.Upload","1484775328",["uw.controller.Step","uw.ui.Step"]],["uw.ui.base","1484775328",["uw.base"]],["uw.ui.Wizard","1484775328",["oojs","uw.ui.base"]],["uw.ui.Step","1484775328",["uw.ui.base"]],["uw.ui.Thanks","1484775328",["oojs","uw.ui.Step"]],["ext.geshi.local","1484775328"],["ext.FontAwesome","1484775328"],["ext.uploadWizard.formDataTransport","1484775328"],["ext.uploadWizard.iFrameTransport","1484775328"],["ext.uploadWizard.apiUploadHandler","1484775328",["ext.uploadWizard.iFrameTransport"]],["ext.uploadWizard.apiUploadFormDataHandler","1484775328",["ext.uploadWizard.formDataTransport"]],["ext.uploadWizard.page","1484775328",["ext.uploadWizard"]],["ext.uploadWizard.uploadCampaign.display","1484775328",["mediawiki.ui.button"]],["ext.uploadWizard.uploadCampaign.list","1484775328"],["skins.cologneblue","1484775328"],["skins.modern","1484775328"],["skins.monobook.styles","1484775328"],["skins.vector.styles","1484775328"],[
"skins.vector.js","1484775328",["jquery.tabIndex","jquery.throttle-debounce"]]]);mw.config.set({"wgLoadScript":"/load.php","debug":false,"skin":"vector","stylepath":"/skins","wgUrlProtocols":"bitcoin\\:|ftp\\:\\/\\/|ftps\\:\\/\\/|geo\\:|git\\:\\/\\/|gopher\\:\\/\\/|http\\:\\/\\/|https\\:\\/\\/|irc\\:\\/\\/|ircs\\:\\/\\/|magnet\\:|mailto\\:|mms\\:\\/\\/|news\\:|nntp\\:\\/\\/|redis\\:\\/\\/|sftp\\:\\/\\/|sip\\:|sips\\:|sms\\:|ssh\\:\\/\\/|svn\\:\\/\\/|tel\\:|telnet\\:\\/\\/|urn\\:|worldwind\\:\\/\\/|xmpp\\:|\\/\\/","wgArticlePath":"/pt-br/$1","wgScriptPath":"","wgScriptExtension":".php","wgScript":"/index.php","wgSearchType":null,"wgVariantArticlePath":false,"wgActionPaths":{},"wgServer":"https://wiki.locaweb.com.br","wgServerName":"wiki.locaweb.com.br","wgUserLanguage":"pt-br","wgContentLanguage":"pt-br","wgVersion":"1.24.1","wgEnableAPI":true,"wgEnableWriteAPI":true,"wgMainPageTitle":"Página principal","wgFormattedNamespaces":{"-2":"Mídia","-1":"Especial","0":"","1":"Discussão","2":
"Usuário","3":"Usuário Discussão","4":"Wiki Locaweb","5":"Wiki Locaweb Discussão","6":"Arquivo","7":"Arquivo Discussão","8":"MediaWiki","9":"MediaWiki Discussão","10":"Predefinição","11":"Predefinição Discussão","12":"Ajuda","13":"Ajuda Discussão","14":"Categoria","15":"Categoria Discussão","460":"Campaign","461":"Campaign talk"},"wgNamespaceIds":{"mídia":-2,"especial":-1,"":0,"discussão":1,"usuário":2,"usuário_discussão":3,"wiki_locaweb":4,"wiki_locaweb_discussão":5,"arquivo":6,"arquivo_discussão":7,"mediawiki":8,"mediawiki_discussão":9,"predefinição":10,"predefinição_discussão":11,"ajuda":12,"ajuda_discussão":13,"categoria":14,"categoria_discussão":15,"campaign":460,"campaign_talk":461,"imagem":6,"imagem_discussão":7,"ficheiro":6,"ficheiro_discussão":7,"usuária":2,"usuária_discussão":3,"file":6,"file_talk":7,"image":6,"image_talk":7,"media":-2,"special":-1,"talk":1,"user":2,"user_talk":3,"project":4,"project_talk":5,"mediawiki_talk":9,"template":10,
"template_talk":11,"help":12,"help_talk":13,"category":14,"category_talk":15},"wgContentNamespaces":[0],"wgSiteName":"Wiki Locaweb","wgFileExtensions":["png","gif","jpg","jpeg","swf","zip"],"wgDBname":"wiki","wgFileCanRotate":true,"wgAvailableSkins":{"vector":"Vector","cologneblue":"CologneBlue","modern":"Modern","monobook":"MonoBook","fallback":"Fallback"},"wgExtensionAssetsPath":"/extensions","wgCookiePrefix":"wiki_faq","wgCookieDomain":"","wgCookiePath":"/","wgCookieExpiration":15552000,"wgResourceLoaderMaxQueryLength":-1,"wgCaseSensitiveNamespaces":[460,461],"wgLegalTitleChars":" %!\"$\u0026'()*,\\-./0-9:;=?@A-Z\\\\\\^_`a-z~+\\u0080-\\uFFFF","wgResourceLoaderStorageVersion":1,"wgResourceLoaderStorageEnabled":false});};if(isCompatible()){document.write("\u003Cscript src=\"/load.php?debug=false\u0026amp;lang=pt-br\u0026amp;modules=jquery%2Cmediawiki\u0026amp;only=scripts\u0026amp;skin=vector\u0026amp;version=20150304T154840Z\"\u003E\u003C/script\u003E");};
/* cache key: wiki-faq:resourceloader:filter:minify-js:7:d9f37471671c715b3ac15f53df1e23ff */