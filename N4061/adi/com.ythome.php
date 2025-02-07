<html><body leftMargin="0" topMargin="0" marginwidth="0" marginheight="0"><script type="text/javascript">
(function() {
  var DEBUG = ''.toLowerCase() == 'true';
  var csiStart = (+new Date);
  var studioObjects = window['studioV2'] = window['studioV2'] || {};
  var publisherSideFilePath = '';
  var eventTags = {"img_event_tag":[],"js_event_tag":[]};
  if(publisherSideFilePath == '') {
    publisherSideFilePath = '/doubleclick/DARTIframe.html';
  } else if (publisherSideFilePath.charAt(publisherSideFilePath.length - 1) == '/') {
    publisherSideFilePath += 'DARTIframe.html';
  }
  var bookingTimeMetaData = {
  };

  var runtimeMetaData = {
  };

  var exitUrlPatternMacroValues = {
  };
  var macroParser = function (macroName, value) {
    return (value.indexOf(macroName) < 0) ? value : '';
  };
  var adServerData = {
    eventReportingUrl: 'https://ad.doubleclick.net/activity;src=2155040;met=1;v=1;pid=109645074;aid=282785537;ko=0;cid=58527792;rid=58416889;rv=4;',
    clickUrl: 'http://adclick.g.doubleclick.net/aclk?sa=L&ai=BNN7PAOy1U-zJC8mP-gO71oKYAbWh194GAAAAEAEgADgAWM2Vx4uPAWDJvs6GyKOQGYIBF2NhLXB1Yi0yNjE0NjY2MjYxNTc5NzQxsgEPd3d3LnlvdXR1YmUuY29tugEJZ2ZwX2ltYWdlyAEJ2gEeaHR0cHM6Ly93d3cueW91dHViZS5jb20vP2dsPUpQwAIC4AIA6gIYNDA2MS9jb20ueXRob21lL19kZWZhdWx0-AL20R6AAwGQA6wCmAPgA6gDAeAEAaAGHg&num=0&sig=AOD64_2k2jfVXI515rV_yeaNFLXAoJR49Q&client=ca-pub-2614666261579741&adurl=https://adclick.g.doubleclick.net/aclk?sa=L&ai=BabbGAOy1U8bDDOeMlAKl64HgDAAAAAAQASAAOABQkY27zvj_____AViwoPQbYMm-zobIo5AZggEJY2EtZ29vZ2xlsgEPd3d3LnlvdXR1YmUuY29tyAEJqAMB4AQCmgUZCMrtLBCSmqQ0GIHu64YBILCg9BsooMSDAdoFAggBoAY_4AagxIMB&num=0&sig=AOD64_0tdD6VpI4NMT35dTNOb4k50jJD9w&client=&adurl=',
    clickUrlTimesToEscape: '',
    clickEventTagUrl: eventTags['click_event_tag'],
    impressionUrl: '',
    geoData: 'ct=US&st=CA&city=13995&dma=195&zp=92802&bw=4',
    siteName: 'N5371.youtube.com',
    siteId: '734922',
    adId: '282785537',
    buyId: '8151470',
    creativeId: '58527792',
    placementId: '109645074',
    advertiserId: '2155040',
    keyValueOrdinal: '0',
    renderingVersion: '4',
    renderingId: '58416889',
    randomNumber: '3911730025',
    dynamicData: '',
    stringReportingUrl: 'https://ad.doubleclick.net/activity;src=2155040;stragg=1;v=1;pid=109645074;aid=282785537;ko=0;cid=58527792;rid=58416889;rv=4;rn=3911730025;',
    urlToGetKeywordsFor: '%LivePreviewSiteUrl',
    bookingTimeMetaData: bookingTimeMetaData,
    exitSuffix: macroParser('exit_suffix', ''), // XFA GA Beacon.
    generatedAdSlot: false,
    exitUrlPatternMacroValues: exitUrlPatternMacroValues,
    activeViewClkStr: macroParser('eav', 'BHQByAOy1U8bDDOeMlAKl64HgDAAAAAAQATgByAEJ4AQCoAY_'),
    renderingEnvironment: ('' == '1' ||
        window['mraid']) ? 'IN_APP' : 'BROWSER',
    placementDimensions: {
      'w': '970',
      'h': '250'
    },
    tag: {
      adContainerElementId: macroParser('ad_container_id', ''),
      hideObjects: '',
      top: '',
      left: '',
      zIndex: '',
      duration: '',
      wmode: '',
      preferHtml5Artwork: '' == 'true',
      adSenseKeywords: '',
      adSenseLatitude: '',
      adSenseLongitude: '',
      publisherSideFilePath: publisherSideFilePath,
      runtimeMetaData: runtimeMetaData,
      lidarEnabled: false,
      expansionMode: '',
      renderFloatInplace: ''.toLowerCase() == 'true',
      tryToWriteHtmlInline: ''.toLowerCase() == 'true'
    }
  };

  var staticResourceMediaServer = location.protocol == 'https:' ?
       'https://s0.2mdn.net' :
       'http://s0.2mdn.net';

  var creativeMediaServer = location.protocol == 'https:' ?
       'https://s0.2mdn.net' :
       'http://s0.2mdn.net';

  var backupImageUrl = '/ads/richmedia/studio/pv2/32289632/20140701121436688/masthead.jpg';
  if (!/^https?:/.test(backupImageUrl)) {
    backupImageUrl = creativeMediaServer + backupImageUrl;
  }
  var backupImage = {
    exitUrl: 'https://ad.doubleclick.net/activity;src=2155040;met=1;v=1;pid=109645074;aid=282785537;ko=0;cid=58527792;rid=58416889;rv=4;cs=b;eid1=1885916;ecn1=1;etm1=0;_dc_redir=url?http://adclick.g.doubleclick.net/aclk?sa=L&ai=BNN7PAOy1U-zJC8mP-gO71oKYAbWh194GAAAAEAEgADgAWM2Vx4uPAWDJvs6GyKOQGYIBF2NhLXB1Yi0yNjE0NjY2MjYxNTc5NzQxsgEPd3d3LnlvdXR1YmUuY29tugEJZ2ZwX2ltYWdlyAEJ2gEeaHR0cHM6Ly93d3cueW91dHViZS5jb20vP2dsPUpQwAIC4AIA6gIYNDA2MS9jb20ueXRob21lL19kZWZhdWx0-AL20R6AAwGQA6wCmAPgA6gDAeAEAaAGHg&num=0&sig=AOD64_2k2jfVXI515rV_yeaNFLXAoJR49Q&client=ca-pub-2614666261579741&adurl=https://adclick.g.doubleclick.net/aclk?sa=L&ai=BabbGAOy1U8bDDOeMlAKl64HgDAAAAAAQASAAOABQkY27zvj_____AViwoPQbYMm-zobIo5AZggEJY2EtZ29vZ2xlsgEPd3d3LnlvdXR1YmUuY29tyAEJqAMB4AQCmgUZCMrtLBCSmqQ0GIHu64YBILCg9BsooMSDAdoFAggBoAY_4AagxIMB&num=0&sig=AOD64_0tdD6VpI4NMT35dTNOb4k50jJD9w&client=&adurl=http://twitter.com/pepsi',
    target: '_blank',
    imageUrl: backupImageUrl,
    width: '970',
    height: '250',
    backupDisplayActivityUrl: [
      adServerData.eventReportingUrl,
      '&timestamp=', (+new Date), ';',
      'eid1=9;ecn1=1;etm1=0;'].join(''),
    thirdPartyBackupImpressionUrl: ''
  };

  var versionPrefix = DEBUG ? 'db_' : '';
  var templateVersion = '200_41';
  var renderingScriptPath = '/879366';
  var rendererDisplayType = '';
  rendererDisplayType += 'flash_';
  var rendererFormat = 'inpage';
  var rendererName = rendererDisplayType + rendererFormat;
  var renderingLibrary = renderingScriptPath + '/' + rendererName + '_rendering_lib_' +
      versionPrefix + templateVersion + '.js';
  // Adserver has a logic to detect media files and prepend host name.
  if (!/^https?:/.test(renderingLibrary)) {
    renderingLibrary = staticResourceMediaServer + renderingLibrary;
  }

  var adCreativeDefinitions = {};
    adCreativeDefinitions['282785537'] = '/ads/richmedia/studio/creative/32289632/32389729_1b7823cb04f058b54e9f3f2c9dc153fa_282785537_creative_override.js';
    adCreativeDefinitions['282946025'] = '/ads/richmedia/studio/creative/32289632/32389729_f3bc4bf2eb42c224f1ca1e81d6e5b9ba_282946025_creative_override.js';

  var creativeId = '58527792';
  var adId = adCreativeDefinitions[adServerData.adId] ? adServerData.adId : 0;
  // The unique creative is identified by combination of creative id and ad id.
  // When the same creative(same creative id and same ad id) is served on the page more
  // than once then they will share the creative definition yet there will be
  // multiple instances of 'adResponses'.s
  var creativeKey = [creativeId, adId].join('_');
  var creativeDef = adCreativeDefinitions[adServerData.adId] ?
      adCreativeDefinitions[adServerData.adId] :
      '/ads/richmedia/studio/creative/32289632/32389729_10b8b084aa26f1a80f2e2a74a485c498_creative_def.js';
  if(!/^https?:/.test(creativeDef) && creativeDef.substring(0, 2) != '//') {
    creativeDef = creativeMediaServer + creativeDef;
  }
  studioObjects['creativeCount'] = studioObjects['creativeCount'] || 0;
  var creativeDto = {
    id: creativeId,
    uniqueId: creativeId + '_' + studioObjects['creativeCount']++,
    templateVersion: templateVersion,
    adServerData: adServerData,
    isPreviewEnvironment: '%PreviewMode' == 'true',
    hasFlashAsset: true,
    hasHtmlAsset: false,
    requiresCss3Animations: false,
    flashVersion: '10',
    httpsMediaServer: 'https://s0.2mdn.net',
    httpMediaServer: 'http://s0.2mdn.net',
    renderingScriptPath: renderingScriptPath,
    renderingLibrary: renderingLibrary,
    rendererName: rendererName,
    creativeDefinitionUrl: creativeDef,
    creativeKey: creativeKey,
    thirdPartyImpressionUrls: eventTags['img_event_tag'],
    thirdPartyArtworkImpressionUrl: '',
    breakoutToTop: false,
    dimensions: {
      width: '970px',
      height: '250px'
    },
    backupImage: backupImage,
    csiStart: csiStart,
    csiAdRespTime: csiStart - (parseFloat('') || 0),
    csiEvents: {},
    hasModernizrFeatureChecks: false,
    html5FeatureChecks: [
    ],
    hasSwiffyHtmlAsset: false
  };

  var inGdnIframe = window['IN_ADSENSE_IFRAME'] || false;
  var inYahooSecureIframe = window.Y && Y.SandBox && Y.SandBox.vendor;
  var inWinLiveIframe = false;
  try {
    inWinLiveIframe = !!window.$WLXRmAd;
  } catch(e) {}
  var inSafeFrame = window.$sf && window.$sf.ext;
  var isMsnAjaxIframe = (typeof(inDapMgrIf) != 'undefined' && inDapMgrIf);
  var breakoutIframe = ''.toLowerCase();
  var shouldBreakout = (((false ||
                          false) &&
                         !inGdnIframe &&
                         !inYahooSecureIframe &&
                         !inSafeFrame &&
                         !inWinLiveIframe) ||
                        (true && breakoutIframe == 'true')) &&
                       self != top &&
                       !creativeDto.isPreviewEnvironment &&
                       breakoutIframe != 'false';

  if (adServerData.tag.adContainerElementId == '' &&
      (true || false ||
         adServerData.tag.renderFloatInplace)) {
    var containerId = ['creative', creativeDto.uniqueId].join('_');
    var divHtml = ['<div id="', containerId, '"></div>'].join('');
    document.write(divHtml);
    adServerData.tag.adContainerElementId = containerId;
    adServerData.generatedAdSlot = true;
  }
  var creatives = studioObjects['creatives'] = studioObjects['creatives'] || {};
  var creative = creatives[creativeKey] = creatives[creativeKey] || {};
  var adResponses = creative['adResponses'] = creative['adResponses'] || [];
  creative['shouldBreakout'] = creative['shouldBreakout'] || shouldBreakout;
  var iframeBusterLibrary = renderingScriptPath + '/iframe_buster_' +
      versionPrefix + templateVersion + '.js';
  if(!/^https?:/.test(iframeBusterLibrary)) {
    iframeBusterLibrary = staticResourceMediaServer + iframeBusterLibrary;
  }
  var loadedLibraries = studioObjects['loadedLibraries'] = studioObjects['loadedLibraries'] || {};
  var versionedLibrary = loadedLibraries[templateVersion] = loadedLibraries[templateVersion] || {};
  var typedLibrary = versionedLibrary[rendererName] = versionedLibrary[rendererName] || {};
  adResponses.push({
    creativeDto: creativeDto
  });
  for (var i = 0; i < eventTags['js_event_tag'].length; i++) {
    document.write('<scr' + 'ipt type="text/javascript" src="' + eventTags['js_event_tag'][i] + '"></scr' + 'ipt>');
  }
  if (shouldBreakout) {
    if (versionedLibrary['breakout']) {
      versionedLibrary['breakout']();
    } else if (!versionedLibrary['breakoutLoading']) {
      versionedLibrary['breakoutLoading'] = true;
      document.write('<scr' + 'ipt type="text/javascript" src="' + iframeBusterLibrary + '" async="async"></scr' + 'ipt>');
    }
  } else if (typedLibrary['bootstrap'] && creative['creativeDefinition']) {
    typedLibrary['bootstrap']();
  } else {
    if (!creative['definitionLoading']) {
      creative['definitionLoading'] = true;
      creativeDto.csiEvents['pb'] = (+new Date);
      document.write('<scr' + 'ipt type="text/javascript" src="' + creativeDto.creativeDefinitionUrl + '"' + (adServerData.tag.tryToWriteHtmlInline ? '' : ' async="async"') + '></scr' + 'ipt>');
    }
    if (!typedLibrary['loading']) {
      typedLibrary['loading'] = true;
      creativeDto.csiEvents['gb'] = (+new Date);
      document.write('<scr' + 'ipt type="text/javascript" src="' + renderingLibrary + '"' + (adServerData.tag.tryToWriteHtmlInline ? '' : ' async="async"') + '></scr' + 'ipt>');
    }
  }
  if (isMsnAjaxIframe) {
    window.setTimeout("document.close();", 1000);
  }
})();
</script>
<noscript>
  <a target="_blank" href="https://ad.doubleclick.net/activity;src=2155040;met=1;v=1;pid=109645074;aid=282785537;ko=0;cid=58527792;rid=58416889;rv=4;cs=b;eid1=1885916;ecn1=1;etm1=0;_dc_redir=url?http://adclick.g.doubleclick.net/aclk?sa=L&ai=BNN7PAOy1U-zJC8mP-gO71oKYAbWh194GAAAAEAEgADgAWM2Vx4uPAWDJvs6GyKOQGYIBF2NhLXB1Yi0yNjE0NjY2MjYxNTc5NzQxsgEPd3d3LnlvdXR1YmUuY29tugEJZ2ZwX2ltYWdlyAEJ2gEeaHR0cHM6Ly93d3cueW91dHViZS5jb20vP2dsPUpQwAIC4AIA6gIYNDA2MS9jb20ueXRob21lL19kZWZhdWx0-AL20R6AAwGQA6wCmAPgA6gDAeAEAaAGHg&num=0&sig=AOD64_2k2jfVXI515rV_yeaNFLXAoJR49Q&client=ca-pub-2614666261579741&adurl=https://adclick.g.doubleclick.net/aclk?sa=L&ai=BabbGAOy1U8bDDOeMlAKl64HgDAAAAAAQASAAOABQkY27zvj_____AViwoPQbYMm-zobIo5AZggEJY2EtZ29vZ2xlsgEPd3d3LnlvdXR1YmUuY29tyAEJqAMB4AQCmgUZCMrtLBCSmqQ0GIHu64YBILCg9BsooMSDAdoFAggBoAY_4AagxIMB&num=0&sig=AOD64_0tdD6VpI4NMT35dTNOb4k50jJD9w&client=&adurl=http://twitter.com/pepsi">
    <img border="0" alt="" src="//s0.2mdn.net/ads/richmedia/studio/pv2/32289632/20140701121436688/masthead.jpg"
        width="970" height="250" />
  </a>
  <img width="0px" height="0px" style="visibility:hidden" border="0" alt=""
       src="https://ad.doubleclick.net/activity;src=2155040;met=1;v=1;pid=109645074;aid=282785537;ko=0;cid=58527792;rid=58416889;rv=4;&timestamp=3911730025;eid1=9;ecn1=1;etm1=0;" />
  
  <img width="0px" height="0px" style="visibility:hidden" border="0" alt=""
      src="" />
</noscript>
</body></html>