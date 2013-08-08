jQuery(document).ready(function(){
    var scripts = document.getElementsByTagName("script");
    var jsFolder = "";
    for (var i= 0; i< scripts.length; i++)
    {
        if( scripts[i].src && scripts[i].src.match(/initslider-1\.js/i))
            jsFolder = scripts[i].src.substr(0, scripts[i].src.lastIndexOf("/") + 1);
    }
    jQuery("#amazingslider-1").amazingslider({
        jsfolder:jsFolder,
        width:1024,
        height:400,
        skinsfoldername:"",
        loadimageondemand:false,
        isresponsive:true,
        autoplayvideo:false,
        pauseonmouseover:true,
        addmargin:true,
        randomplay:false,
        slideinterval:5000,
        enabletouchswipe:true,
        transitiononfirstslide:false,
        loop:0,
        autoplay:true,
        navplayvideoimage:"play-32-32-0.png",
        navpreviewheight:60,
        timerheight:2,
        shownumbering:false,
        skin:"Simplicity",
        textautohide:false,
        addgooglefonts:true,
        navshowplaypause:true,
        navshowplayvideo:false,
        navshowplaypausestandalonemarginx:8,
        navshowplaypausestandalonemarginy:8,
        navbuttonradius:0,
        navthumbnavigationarrowimageheight:32,
        navpreviewarrowheight:8,
        showshadow:false,
        navfeaturedarrowimagewidth:16,
        navpreviewwidth:120,
        googlefonts:"Inder",
        textpositionmarginright:24,
        bordercolor:"#91CD2E",
        navthumbnavigationarrowimagewidth:32,
        navthumbtitlehovercss:"text-decoration:underline;",
        arrowwidth:32,
        texteffecteasing:"easeOutCirc",
        texteffect:"fade",
        navspacing:8,
        navarrowimage:"navarrows-28-28-0.png",
        ribbonimage:"ribbon_topleft-0.png",
        navwidth:24,
        showribbon:false,
        arrowtop:50,
        timeropacity:0.6,
        navthumbnavigationarrowimage:"carouselarrows-32-32-0.png",
        navshowplaypausestandalone:false,
        navpreviewbordercolor:"#ffffff",
        ribbonposition:"topleft",
        navthumbdescriptioncss:"display:block;position:relative;padding:2px 4px;text-align:left;font:normal 12px Arial,Helvetica,sans-serif;color:#333;",
        navborder:4,
        navthumbtitleheight:20,
        textpositionmargintop:24,
        navswitchonmouseover:false,
        playvideoimage:"playvideo-64-64-0.png",
        arrowimage:"arrows-32-32-1.png",
        textstyle:"dynamic",
        playvideoimageheight:64,
        navfonthighlightcolor:"#666666",
        showbackgroundimage:false,
        navpreviewborder:4,
        navopacity:0.8,
        shadowcolor:"#aaaaaa",
        navbuttonshowbgimage:true,
        navbuttonbgimage:"navbuttonbgimage-28-28-0.png",
        textbgcss:"",
        playvideoimagewidth:64,
        bottomshadowimagewidth:110,
        showtimer:false,
        navradius:0,
        navshowpreview:true,
        navmarginy:16,
        navmarginx:16,
        navfeaturedarrowimage:"featuredarrow-16-8-0.png",
        navfeaturedarrowimageheight:8,
        navstyle:"bullets",
        textpositionmarginleft:24,
        descriptioncss:"display:block; position:relative; font:16px 'maven_probold',Inder,Arial,Tahoma,Helvetica,sans-serif; color:#ddd;text-shadow: 0 3px 5px #444;",
        navplaypauseimage:"navplaypause-28-28-0.png",
        backgroundimagetop:-10,
        arrowstyle:"mouseover",
        timercolor:"#ffffff",
        numberingformat:"%NUM/%TOTAL ",
        navfontsize:12,
        navhighlightcolor:"#333333",
        navimage:"bullet-24-24-1.png",
        navheight:24,
        navshowplaypausestandaloneautohide:false,
        navbuttoncolor:"#999999",
        navshowarrow:true,
        navshowfeaturedarrow:false,
        titlecss:"display:block; position:relative; font: 32px 'maven_problack',Inder,Arial,Tahoma,Helvetica,sans-serif; color:#eee;text-shadow: 0 3px 5px #444;",
        ribbonimagey:0,
        ribbonimagex:0,
        navshowplaypausestandaloneposition:"bottomright",
        shadowsize:5,
        arrowhideonmouseleave:1000,
        navshowplaypausestandalonewidth:28,
        navshowplaypausestandaloneheight:28,
        backgroundimagewidth:120,
        navcolor:"#999999",
        navthumbtitlewidth:120,
        navpreviewposition:"top",
        arrowheight:32,
        arrowmargin:8,
        texteffectduration:1000,
        bottomshadowimage:"bottomshadow-110-95-3.png",
        border:0,
        timerposition:"bottom",
        navfontcolor:"#333333",
        navthumbnavigationstyle:"arrow",
        borderradius:5,
        navbuttonhighlightcolor:"#333333",
        textpositionstatic:"bottom",
        navthumbstyle:"imageonly",
        textcss:"display:block; padding:8px 16px; text-align:left; ",
        navbordercolor:"#ffffff",
        navpreviewarrowimage:"previewarrow-16-8-0.png",
        showbottomshadow:false,
        navdirection:"horizontal",
        textpositionmarginstatic:0,
        backgroundimage:"",
        navposition:"bottomright",
        navpreviewarrowwidth:16,
        bottomshadowimagetop:95,
        textpositiondynamic:"bottomleft",
        navshowbuttons:false,
        navthumbtitlecss:"display:block;position:relative;padding:2px 4px;text-align:left;font:bold 14px Arial,Helvetica,sans-serif;color:#333;",
        textpositionmarginbottom:24,
        crossfade: {
            duration:1000,
            easing:"easeOutCubic",
            checked:true
        },
        transition:"crossfade"
    });
});