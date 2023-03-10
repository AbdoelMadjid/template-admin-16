function runAllForms() {
    $.fn.slider && $(".slider").slider(), $.fn.select2 && $("select.select2").each(function() {
        var a = $(this),
            b = a.attr("data-select-width") || "100%";
        a.select2({
            "allowClear": !0,
            "width": b
        }), a = null
    }), $.fn.mask && $("[data-mask]").each(function() {
        var a = $(this),
            b = a.attr("data-mask") || "error...",
            c = a.attr("data-mask-placeholder") || "X";
        a.mask(b, {
            "placeholder": c
        }), a = null
    }), $.fn.autocomplete && $("[data-autocomplete]").each(function() {
        var a = $(this),
            b = a.data("autocomplete") || ["The", "Quick", "Brown", "Fox", "Jumps", "Over", "Three", "Lazy", "Dogs"];
        a.autocomplete({
            "source": b
        }), a = null
    }), $.fn.datepicker && $(".datepicker").each(function() {
        var a = $(this),
            b = a.attr("data-dateformat") || "dd.mm.yy";
        a.datepicker({
            "dateFormat": b,
            "prevText": '<i class="fa fa-chevron-left"></i>',
            "nextText": '<i class="fa fa-chevron-right"></i>'
        }), a = null
    }), $("button[data-loading-text]").on("click", function() {
        var a = $(this);
        a.button("loading"), setTimeout(function() {
            a.button("reset"), a = null
        }, 3e3)
    })
}

function runAllCharts() {
    if ($.fn.sparkline) {
        var a, b, c, d, e, f, g, h, i, j, k, l, m, n, o, p, q, r, s, t, u, v, w, x, y, z, A, B, C, D, E, F, G, H, I, J, K, L, M, N, O, P, Q, R, S, T, U, V, W, X, Y, Z, _, aa, ba, ca, da, ea, fa, ga, ha, ia, ja, ka, la, ma, na, oa, pa, qa, ra, sa;
        $(".sparkline:not(:has(>canvas))").each(function() {
            var ta = $(this),
                ua = ta.data("sparkline-type") || "bar";
            if ("bar" == ua && (a = ta.data("sparkline-bar-color") || ta.css("color") || "#0000f0", b = ta.data("sparkline-height") || "26px", c = ta.data("sparkline-barwidth") || 5, d = ta.data("sparkline-barspacing") || 2, e = ta.data("sparkline-negbar-color") || "#A90329", f = ta.data("sparkline-barstacked-color") || ["#A90329", "#0099c6", "#98AA56", "#da532c", "#4490B1", "#6E9461", "#990099", "#B4CAD3"], ta.sparkline("html", {
                    "barColor": a,
                    "type": ua,
                    "height": b,
                    "barWidth": c,
                    "barSpacing": d,
                    "stackedBarColor": f,
                    "negBarColor": e,
                    "zeroAxis": "false"
                }), ta = null), "line" == ua && (b = ta.data("sparkline-height") || "20px", aa = ta.data("sparkline-width") || "90px", g = ta.data("sparkline-line-color") || ta.css("color") || "#0000f0", h = ta.data("sparkline-line-width") || 1, i = ta.data("fill-color") || "#c0d0f0", j = ta.data("sparkline-spot-color") || "#f08000", k = ta.data("sparkline-minspot-color") || "#ed1c24", l = ta.data("sparkline-maxspot-color") || "#f08000", m = ta.data("sparkline-highlightspot-color") || "#50f050", n = ta.data("sparkline-highlightline-color") || "f02020", o = ta.data("sparkline-spotradius") || 1.5, thisChartMinYRange = ta.data("sparkline-min-y") || "undefined", thisChartMaxYRange = ta.data("sparkline-max-y") || "undefined", thisChartMinXRange = ta.data("sparkline-min-x") || "undefined", thisChartMaxXRange = ta.data("sparkline-max-x") || "undefined", thisMinNormValue = ta.data("min-val") || "undefined", thisMaxNormValue = ta.data("max-val") || "undefined", thisNormColor = ta.data("norm-color") || "#c0c0c0", thisDrawNormalOnTop = ta.data("draw-normal") || !1, ta.sparkline("html", {
                    "type": "line",
                    "width": aa,
                    "height": b,
                    "lineWidth": h,
                    "lineColor": g,
                    "fillColor": i,
                    "spotColor": j,
                    "minSpotColor": k,
                    "maxSpotColor": l,
                    "highlightSpotColor": m,
                    "highlightLineColor": n,
                    "spotRadius": o,
                    "chartRangeMin": thisChartMinYRange,
                    "chartRangeMax": thisChartMaxYRange,
                    "chartRangeMinX": thisChartMinXRange,
                    "chartRangeMaxX": thisChartMaxXRange,
                    "normalRangeMin": thisMinNormValue,
                    "normalRangeMax": thisMaxNormValue,
                    "normalRangeColor": thisNormColor,
                    "drawNormalOnTop": thisDrawNormalOnTop
                }), ta = null), "pie" == ua && (p = ta.data("sparkline-piecolor") || ["#B4CAD3", "#4490B1", "#98AA56", "#da532c", "#6E9461", "#0099c6", "#990099", "#717D8A"], q = ta.data("sparkline-piesize") || 90, r = ta.data("border-color") || "#45494C", s = ta.data("sparkline-offset") || 0, ta.sparkline("html", {
                    "type": "pie",
                    "width": q,
                    "height": q,
                    "tooltipFormat": '<span style="color: {{color}}">&#9679;</span> ({{percent.1}}%)',
                    "sliceColors": p,
                    "borderWidth": 1,
                    "offset": s,
                    "borderColor": r
                }), ta = null), "box" == ua && (t = ta.data("sparkline-width") || "auto", u = ta.data("sparkline-height") || "auto", v = ta.data("sparkline-boxraw") || !1, w = ta.data("sparkline-targetval") || "undefined", x = ta.data("sparkline-min") || "undefined", y = ta.data("sparkline-max") || "undefined", z = ta.data("sparkline-showoutlier") || !0, A = ta.data("sparkline-outlier-iqr") || 1.5, B = ta.data("sparkline-spotradius") || 1.5, C = ta.css("color") || "#000000", D = ta.data("fill-color") || "#c0d0f0", E = ta.data("sparkline-whis-color") || "#000000", F = ta.data("sparkline-outline-color") || "#303030", G = ta.data("sparkline-outlinefill-color") || "#f0f0f0", H = ta.data("sparkline-outlinemedian-color") || "#f00000", I = ta.data("sparkline-outlinetarget-color") || "#40a020", ta.sparkline("html", {
                    "type": "box",
                    "width": t,
                    "height": u,
                    "raw": v,
                    "target": w,
                    "minValue": x,
                    "maxValue": y,
                    "showOutliers": z,
                    "outlierIQR": A,
                    "spotRadius": B,
                    "boxLineColor": C,
                    "boxFillColor": D,
                    "whiskerColor": E,
                    "outlierLineColor": F,
                    "outlierFillColor": G,
                    "medianColor": H,
                    "targetColor": I
                }), ta = null), "bullet" == ua) {
                var va = ta.data("sparkline-height") || "auto";
                J = ta.data("sparkline-width") || 2, K = ta.data("sparkline-bullet-color") || "#ed1c24", L = ta.data("sparkline-performance-color") || "#3030f0", M = ta.data("sparkline-bulletrange-color") || ["#d3dafe", "#a8b6ff", "#7f94ff"], ta.sparkline("html", {
                    "type": "bullet",
                    "height": va,
                    "targetWidth": J,
                    "targetColor": K,
                    "performanceColor": L,
                    "rangeColors": M
                }), ta = null
            }
            "discrete" == ua && (N = ta.data("sparkline-height") || 26, O = ta.data("sparkline-width") || 50, P = ta.css("color"), Q = ta.data("sparkline-line-height") || 5, R = ta.data("sparkline-threshold") || "undefined", S = ta.data("sparkline-threshold-color") || "#ed1c24", ta.sparkline("html", {
                "type": "discrete",
                "width": O,
                "height": N,
                "lineColor": P,
                "lineHeight": Q,
                "thresholdValue": R,
                "thresholdColor": S
            }), ta = null), "tristate" == ua && (T = ta.data("sparkline-height") || 26, U = ta.data("sparkline-posbar-color") || "#60f060", V = ta.data("sparkline-negbar-color") || "#f04040", W = ta.data("sparkline-zerobar-color") || "#909090", X = ta.data("sparkline-barwidth") || 5, Y = ta.data("sparkline-barspacing") || 2, Z = ta.data("sparkline-zeroaxis") || !1, ta.sparkline("html", {
                "type": "tristate",
                "height": T,
                "posBarColor": _,
                "negBarColor": V,
                "zeroBarColor": W,
                "barWidth": X,
                "barSpacing": Y,
                "zeroAxis": Z
            }), ta = null), "compositebar" == ua && (b = ta.data("sparkline-height") || "20px", aa = ta.data("sparkline-width") || "100%", c = ta.data("sparkline-barwidth") || 3, h = ta.data("sparkline-line-width") || 1, g = ta.data("data-sparkline-linecolor") || "#ed1c24", _ = ta.data("data-sparkline-barcolor") || "#333333", ta.sparkline(ta.data("sparkline-bar-val"), {
                "type": "bar",
                "width": aa,
                "height": b,
                "barColor": _,
                "barWidth": c
            }), ta.sparkline(ta.data("sparkline-line-val"), {
                "width": aa,
                "height": b,
                "lineColor": g,
                "lineWidth": h,
                "composite": !0,
                "fillColor": !1
            }), ta = null), "compositeline" == ua && (b = ta.data("sparkline-height") || "20px", aa = ta.data("sparkline-width") || "90px", ba = ta.data("sparkline-bar-val"), ca = ta.data("sparkline-bar-val-spots-top") || null, da = ta.data("sparkline-bar-val-spots-bottom") || null, ea = ta.data("sparkline-line-width-top") || 1, fa = ta.data("sparkline-line-width-bottom") || 1, ga = ta.data("sparkline-color-top") || "#333333", ha = ta.data("sparkline-color-bottom") || "#ed1c24", ia = ta.data("sparkline-spotradius-top") || 1.5, ja = ta.data("sparkline-spotradius-bottom") || ia, j = ta.data("sparkline-spot-color") || "#f08000", ka = ta.data("sparkline-minspot-color-top") || "#ed1c24", la = ta.data("sparkline-maxspot-color-top") || "#f08000", ma = ta.data("sparkline-minspot-color-bottom") || ka, na = ta.data("sparkline-maxspot-color-bottom") || la, oa = ta.data("sparkline-highlightspot-color-top") || "#50f050", pa = ta.data("sparkline-highlightline-color-top") || "#f02020", qa = ta.data("sparkline-highlightspot-color-bottom") || oa, thisHighlightLineColor2 = ta.data("sparkline-highlightline-color-bottom") || pa, ra = ta.data("sparkline-fillcolor-top") || "transparent", sa = ta.data("sparkline-fillcolor-bottom") || "transparent", ta.sparkline(ba, {
                "type": "line",
                "spotRadius": ia,
                "spotColor": j,
                "minSpotColor": ka,
                "maxSpotColor": la,
                "highlightSpotColor": oa,
                "highlightLineColor": pa,
                "valueSpots": ca,
                "lineWidth": ea,
                "width": aa,
                "height": b,
                "lineColor": ga,
                "fillColor": ra
            }), ta.sparkline(ta.data("sparkline-line-val"), {
                "type": "line",
                "spotRadius": ja,
                "spotColor": j,
                "minSpotColor": ma,
                "maxSpotColor": na,
                "highlightSpotColor": qa,
                "highlightLineColor": thisHighlightLineColor2,
                "valueSpots": da,
                "lineWidth": fa,
                "width": aa,
                "height": b,
                "lineColor": ha,
                "composite": !0,
                "fillColor": sa
            }), ta = null)
        })
    }
    $.fn.easyPieChart && $(".easy-pie-chart").each(function() {
        var a = $(this),
            b = a.css("color") || a.data("pie-color"),
            c = a.data("pie-track-color") || "rgba(0,0,0,0.04)",
            d = parseInt(a.data("pie-size")) || 25;
        a.easyPieChart({
            "barColor": b,
            "trackColor": c,
            "scaleColor": !1,
            "lineCap": "butt",
            "lineWidth": parseInt(d / 8.5),
            "animate": 1500,
            "rotate": -90,
            "size": d,
            "onStep": function(a, b, c) {
                $(this.el).find(".percent").text(Math.round(c))
            }
        }), a = null
    })
}

function setup_widgets_desktop() {
    $.fn.jarvisWidgets && enableJarvisWidgets && $("#widget-grid").jarvisWidgets({
        "grid": "article",
        "widgets": ".jarviswidget",
        "localStorage": localStorageJarvisWidgets,
        "deleteSettingsKey": "#deletesettingskey-options",
        "settingsKeyLabel": "Reset settings?",
        "deletePositionKey": "#deletepositionkey-options",
        "positionKeyLabel": "Reset position?",
        "sortable": sortableJarvisWidgets,
        "buttonsHidden": !1,
        "toggleButton": !0,
        "toggleClass": "fa fa-minus | fa fa-plus",
        "toggleSpeed": 200,
        "onToggle": function() {},
        "deleteButton": !0,
        "deleteMsg": "Warning: This action cannot be undone!",
        "deleteClass": "fa fa-times",
        "deleteSpeed": 200,
        "onDelete": function() {},
        "editButton": !0,
        "editPlaceholder": ".jarviswidget-editbox",
        "editClass": "fa fa-cog | fa fa-save",
        "editSpeed": 200,
        "onEdit": function() {},
        "colorButton": !0,
        "fullscreenButton": !0,
        "fullscreenClass": "fa fa-expand | fa fa-compress",
        "fullscreenDiff": 3,
        "onFullscreen": function() {},
        "customButton": !1,
        "customClass": "folder-10 | next-10",
        "customStart": function() {
            alert("Hello you, this is a custom button...")
        },
        "customEnd": function() {
            alert("bye, till next time...")
        },
        "buttonOrder": "%refresh% %custom% %edit% %toggle% %fullscreen% %delete%",
        "opacity": 1,
        "dragHandle": "> header",
        "placeholderClass": "jarviswidget-placeholder",
        "indicator": !0,
        "indicatorTime": 600,
        "ajax": !0,
        "timestampPlaceholder": ".jarviswidget-timestamp",
        "timestampFormat": "Last update: %m%/%d%/%y% %h%:%i%:%s%",
        "refreshButton": !0,
        "refreshButtonClass": "fa fa-refresh",
        "labelError": "Sorry but there was a error:",
        "labelUpdated": "Last Update:",
        "labelRefresh": "Refresh",
        "labelDelete": "Delete widget:",
        "afterLoad": function() {},
        "rtl": !1,
        "onChange": function() {},
        "onSave": function() {},
        "ajaxnav": $.navAsAjax
    })
}

function setup_widgets_mobile() {
    enableMobileWidgets && enableJarvisWidgets && setup_widgets_desktop()
}

function loadScript(a, b) {
    if (jsArray[a]) b && (debugState && root.root.console.log("This script was already loaded %c: " + a, debugStyle_warning), b());
    else {
        jsArray[a] = !0;
        var c = document.getElementsByTagName("body")[0],
            d = document.createElement("script");
        d.type = "text/javascript", d.src = a, d.onload = b, c.appendChild(d)
    }
}

function checkURL() {
    var a = location.href.split("#").splice(1).join("#");
    if (!a) try {
        var b = window.document.URL;
        b && b.indexOf("#", 0) > 0 && b.indexOf("#", 0) < b.length + 1 && (a = b.substring(b.indexOf("#", 0) + 1))
    } catch (c) {}
    if (container = $("#content"), a) {
        $("nav li.active").removeClass("active"), $('nav li:has(a[href="' + a + '"])').addClass("active");
        var d = $('nav a[href="' + a + '"]').attr("title");
        document.title = d || document.title, debugState && root.console.log("Page title: %c " + document.title, debugStyle_green), loadURL(a + location.search, container)
    } else {
        var e = $('nav > ul > li:first-child > a[href!="#"]');
        window.location.hash = e.attr("href"), e = null
    }
}

function loadURL(a, b) {
    debugState && root.root.console.log("Loading URL: %c" + a, debugStyle), $.ajax({
        "type": "GET",
        "url": a,
        "dataType": "html",
        "cache": !0,
        "beforeSend": function() {
            if ($.navAsAjax && $(".google_maps")[0] && b[0] == $("#content")[0]) {
                var a = $(".google_maps"),
                    c = 0;
                a.each(function() {
                    c++;
                    var b = document.getElementById(this.id);
                    c == a.length + 1 || (b && b.parentNode.removeChild(b), debugState && root.console.log("Destroying maps.........%c" + this.id, debugStyle_warning))
                }), debugState && root.console.log("\u2714 Google map instances nuked!!!")
            }
            if ($.navAsAjax && $(".dataTables_wrapper")[0] && b[0] == $("#content")[0]) {
                var d = $.fn.dataTable.fnTables(!0);
                $(d).each(function() {
                    0 != $(this).find(".details-control").length ? ($(this).find("*").addBack().off().remove(), $(this).dataTable().fnDestroy()) : $(this).dataTable().fnDestroy()
                }), debugState && root.console.log("\u2714 Datatable instances nuked!!!")
            }
            if ($.navAsAjax && $.intervalArr.length > 0 && b[0] == $("#content")[0] && enableJarvisWidgets) {
                for (; $.intervalArr.length > 0;) clearInterval($.intervalArr.pop());
                debugState && root.console.log("\u2714 All JarvisWidget intervals cleared")
            }
            if ($.navAsAjax && b[0] == $("#content")[0] && enableJarvisWidgets && $("#widget-grid")[0] && ($("#widget-grid").jarvisWidgets("destroy"), debugState && root.console.log("\u2714 JarvisWidgets destroyed")), $.navAsAjax && b[0] == $("#content")[0]) {
                if ("function" == typeof pagedestroy) try {
                    pagedestroy(), debugState && root.console.log("\u2714 Pagedestroy()")
                } catch (e) {
                    pagedestroy = void 0, debugState && root.console.log("! Pagedestroy() Catch Error")
                }
                $.fn.sparkline && $("#content .sparkline")[0] && ($("#content .sparkline").sparkline("destroy"), debugState && root.console.log("\u2714 Sparkline Charts destroyed!")), $.fn.easyPieChart && $("#content .easy-pie-chart")[0] && ($("#content .easy-pie-chart").easyPieChart("destroy"), debugState && root.console.log("\u2714 EasyPieChart Charts destroyed!")), $.fn.select2 && $("#content select.select2")[0] && ($("#content select.select2").select2("destroy"), debugState && root.console.log("\u2714 Select2 destroyed!")), $.fn.mask && $("#content [data-mask]")[0] && ($("#content [data-mask]").unmask(), debugState && root.console.log("\u2714 Input Mask destroyed!")), $.fn.datepicker && $("#content .datepicker")[0] && ($("#content .datepicker").off(), $("#content .datepicker").remove(), debugState && root.console.log("\u2714 Datepicker destroyed!")), $.fn.slider && $("#content .slider")[0] && ($("#content .slider").off(), $("#content .slider").remove(), debugState && root.console.log("\u2714 Bootstrap Slider destroyed!"))
            }
            pagefunction = null, b.removeData().html(""), b.html('<h1 class="ajax-loading-animation"><i class="fa fa-cog fa-spin"></i> Loading...</h1>'), b[0] == $("#content")[0] && ($("body").find("> *").filter(":not(" + ignore_key_elms + ")").empty().remove(), drawBreadCrumb(), $("html").animate({
                "scrollTop": 0
            }, "fast"))
        },
        "success": function(a) {
            b.css({
                "opacity": "0.0"
            }).html(a).delay(50).animate({
                "opacity": "1.0"
            }, 300), a = null, b = null
        },
        "error": function(c, d, e, f) {
            b.html('<h4 class="ajax-loading-error"><i class="fa fa-warning txt-color-orangeDark"></i> Error requesting <span class="txt-color-red">' + a + "</span>: " + c.status + ' <span style="text-transform: capitalize;">' + e + "</span></h4>")
        },
        "async": !0
    })
}

function drawBreadCrumb(a) {
    var b = $("nav li.active > a"),
        c = b.length;
    bread_crumb.empty(), bread_crumb.append($("<li>Home</li>")), b.each(function() {
        bread_crumb.append($("<li></li>").html($.trim($(this).clone().children(".badge").remove().end().text()))), --c || (document.title = bread_crumb.find("li:last-child").text())
    }), void 0 != a && $.each(a, function(a, b) {
        bread_crumb.append($("<li></li>").html(b)), document.title = bread_crumb.find("li:last-child").text()
    })
}

function pageSetUp() {
    "desktop" === thisDevice ? ($("[rel=tooltip], [data-rel=tooltip]").tooltip(), $("[rel=popover], [data-rel=popover]").popover(), $("[rel=popover-hover], [data-rel=popover-hover]").popover({
        "trigger": "hover"
    }), setup_widgets_desktop(), runAllCharts(), runAllForms()) : ($("[rel=popover], [data-rel=popover]").popover(), $("[rel=popover-hover], [data-rel=popover-hover]").popover({
        "trigger": "hover"
    }), runAllCharts(), setup_widgets_mobile(), runAllForms())
}

function getParam(a) {
    a = a.replace(/[\[]/, "\\[").replace(/[\]]/, "\\]");
    var b = "[\\?&]" + a + "=([^&#]*)",
        c = new RegExp(b),
        d = c.exec(window.location.href);
    return null == d ? "" : d[1]
}
$.intervalArr = [];
var calc_navbar_height = function() {
        var a = null;
        return $("#header").length && (a = $("#header").height()), null === a && (a = $('<div id="header"></div>').height()), null === a ? 49 : a
    },
    navbar_height = calc_navbar_height,
    shortcut_dropdown = $("#shortcut"),
    bread_crumb = $("#ribbon ol.breadcrumb"),
    topmenu = !1,
    thisDevice = null,
    ismobile = /iphone|ipad|ipod|android|blackberry|mini|windows\sce|palm/i.test(navigator.userAgent.toLowerCase()),
    jsArray = {},
    initApp = function(a) {
        return a.addDeviceType = function() {
            return ismobile ? ($.root_.addClass("mobile-detected"), thisDevice = "mobile", fastClick ? ($.root_.addClass("needsclick"), FastClick.attach(document.body), !1) : void 0) : ($.root_.addClass("desktop-detected"), thisDevice = "desktop", !1)
        }, a.menuPos = function() {
            ($.root_.hasClass("menu-on-top") || "top" == localStorage.getItem("sm-setmenu")) && (topmenu = !0, $.root_.addClass("menu-on-top"))
        }, a.SmartActions = function() {
            var a = {
                "userLogout": function(a) {
                    function b() {
                        window.location = a.attr("href")
                    }
                    $.SmartMessageBox({
                        "title": "<i class='fa fa-sign-out txt-color-orangeDark'></i> Logout <span class='txt-color-orangeDark'><strong>" + $("#show-shortcut").text() + "</strong></span> ?",
                        "content": a.data("logout-msg") || "You can improve your security further after logging out by closing this opened browser",
                        "buttons": "[No][Yes]"
                    }, function(a) {
                        "Yes" == a && ($.root_.addClass("animated fadeOutUp"), setTimeout(b, 1e3))
                    })
                },
                "resetWidgets": function(a) {
                    $.SmartMessageBox({
                        "title": "<i class='fa fa-refresh' style='color:green'></i> Clear Local Storage",
                        "content": a.data("reset-msg") || "Would you like to RESET all your saved widgets and clear LocalStorage?1",
                        "buttons": "[No][Yes]"
                    }, function(a) {
                        "Yes" == a && localStorage && (localStorage.clear(), location.reload())
                    })
                },
                "launchFullscreen": function(a) {
                    $.root_.hasClass("full-screen") ? ($.root_.removeClass("full-screen"), document.exitFullscreen ? document.exitFullscreen() : document.mozCancelFullScreen ? document.mozCancelFullScreen() : document.webkitExitFullscreen && document.webkitExitFullscreen()) : ($.root_.addClass("full-screen"), a.requestFullscreen ? a.requestFullscreen() : a.mozRequestFullScreen ? a.mozRequestFullScreen() : a.webkitRequestFullscreen ? a.webkitRequestFullscreen() : a.msRequestFullscreen && a.msRequestFullscreen())
                },
                "minifyMenu": function(a) {
                    $.root_.hasClass("menu-on-top") || ($.root_.toggleClass("minified"), $.root_.removeClass("hidden-menu"), $("html").removeClass("hidden-menu-mobile-lock"), a.effect("highlight", {}, 500))
                },
                "toggleMenu": function() {
                    $.root_.hasClass("menu-on-top") ? $.root_.hasClass("menu-on-top") && $(window).width() < 979 && ($("html").toggleClass("hidden-menu-mobile-lock"), $.root_.toggleClass("hidden-menu"), $.root_.removeClass("minified")) : ($("html").toggleClass("hidden-menu-mobile-lock"), $.root_.toggleClass("hidden-menu"), $.root_.removeClass("minified"))
                },
                "toggleShortcut": function() {
                    function a() {
                        shortcut_dropdown.animate({
                            "height": "hide"
                        }, 300, "easeOutCirc"), $.root_.removeClass("shortcut-on")
                    }

                    function b() {
                        shortcut_dropdown.animate({
                            "height": "show"
                        }, 200, "easeOutCirc"), $.root_.addClass("shortcut-on")
                    }
                    shortcut_dropdown.is(":visible") ? a() : b(), shortcut_dropdown.find("a").click(function(b) {
                        b.preventDefault(), window.location = $(this).attr("href"), setTimeout(a, 300)
                    }), $(document).mouseup(function(b) {
                        shortcut_dropdown.is(b.target) || 0 !== shortcut_dropdown.has(b.target).length || a()
                    })
                }
            };
            $.root_.on("click", '[data-action="userLogout"]', function(b) {
                var c = $(this);
                a.userLogout(c), b.preventDefault(), c = null
            }), $.root_.on("click", '[data-action="resetWidgets"]', function(b) {
                var c = $(this);
                a.resetWidgets(c), b.preventDefault(), c = null
            }), $.root_.on("click", '[data-action="launchFullscreen"]', function(b) {
                a.launchFullscreen(document.documentElement), b.preventDefault()
            }), $.root_.on("click", '[data-action="minifyMenu"]', function(b) {
                var c = $(this);
                a.minifyMenu(c), b.preventDefault(), c = null
            }), $.root_.on("click", '[data-action="toggleMenu"]', function(b) {
                a.toggleMenu(), b.preventDefault()
            }), $.root_.on("click", '[data-action="toggleShortcut"]', function(b) {
                a.toggleShortcut(), b.preventDefault()
            })
        }, a.leftNav = function() {
            topmenu || $("nav ul").jarvismenu({
                "accordion": menu_accordion || !0,
                "speed": menu_speed || !0,
                "closedSign": '<em class="fa fa-plus-square-o"></em>',
                "openedSign": '<em class="fa fa-minus-square-o"></em>'
            })
        }, a.domReadyMisc = function() {
            $("[rel=tooltip]").length && $("[rel=tooltip]").tooltip(), $("#search-mobile").click(function() {
                $.root_.addClass("search-mobile")
            }), $("#cancel-search-js").click(function() {
                $.root_.removeClass("search-mobile")
            }), $("#activity").click(function(a) {
                var b = $(this);
                b.find(".badge").hasClass("bg-color-red") && (b.find(".badge").removeClassPrefix("bg-color-"), b.find(".badge").text("0")), b.next(".ajax-dropdown").is(":visible") ? (b.next(".ajax-dropdown").fadeOut(150), b.removeClass("active")) : (b.next(".ajax-dropdown").fadeIn(150), b.addClass("active"));
                var c = b.next(".ajax-dropdown").find(".btn-group > .active > input").attr("id");
                b = null, c = null, a.preventDefault()
            }), $('input[name="activity"]').change(function() {
                var a = $(this);
                url = a.attr("id"), container = $(".ajax-notifications"), loadURL(url, container), a = null
            }), $(document).mouseup(function(a) {
                $(".ajax-dropdown").is(a.target) || 0 !== $(".ajax-dropdown").has(a.target).length || ($(".ajax-dropdown").fadeOut(150), $(".ajax-dropdown").prev().removeClass("active"))
            }), $("button[data-btn-loading]").on("click", function() {
                var a = $(this);
                a.button("loading"), setTimeout(function() {
                    a.button("reset")
                }, 3e3)
            }), $this = $("#activity > .badge"), parseInt($this.text()) > 0 && ($this.addClass("bg-color-red bounceIn animated"), $this = null)
        }, a.mobileCheckActivation = function() {
            $(window).width() < 979 ? ($.root_.addClass("mobile-view-activated"), $.root_.removeClass("minified")) : $.root_.hasClass("mobile-view-activated") && $.root_.removeClass("mobile-view-activated"), debugState && console.log("mobileCheckActivation")
        }, a
    }({});
initApp.addDeviceType(), initApp.menuPos(), jQuery(document).ready(function() {
        initApp.SmartActions(), initApp.leftNav(), initApp.domReadyMisc()
    }),
    function(a, b, c) {
        function d() {
            e = b[h](function() {
                f.each(function() {
                    var b, c, d = a(this),
                        e = a.data(this, j);
                    try {
                        b = d.width()
                    } catch (f) {
                        b = d.width
                    }
                    try {
                        c = d.height()
                    } catch (f) {
                        c = d.height
                    }(b !== e.w || c !== e.h) && d.trigger(i, [e.w = b, e.h = c])
                }), d()
            }, g[k])
        }
        var e, f = a([]),
            g = a.resize = a.extend(a.resize, {}),
            h = "setTimeout",
            i = "resize",
            j = i + "-special-event",
            k = "delay",
            l = "throttleWindow";
        g[k] = throttle_delay, g[l] = !0, a.event.special[i] = {
            "setup": function() {
                if (!g[l] && this[h]) return !1;
                var b = a(this);
                f = f.add(b);
                try {
                    a.data(this, j, {
                        "w": b.width(),
                        "h": b.height()
                    })
                } catch (c) {
                    a.data(this, j, {
                        "w": b.width,
                        "h": b.height
                    })
                }
                1 === f.length && d()
            },
            "teardown": function() {
                if (!g[l] && this[h]) return !1;
                var b = a(this);
                f = f.not(b), b.removeData(j), f.length || clearTimeout(e)
            },
            "add": function(b) {
                function d(b, d, f) {
                    var g = a(this),
                        h = a.data(this, j);
                    h.w = d !== c ? d : g.width(), h.h = f !== c ? f : g.height(), e.apply(this, arguments)
                }
                if (!g[l] && this[h]) return !1;
                var e;
                return a.isFunction(b) ? (e = b, d) : (e = b.handler, void(b.handler = d))
            }
        }
    }(jQuery, this), $("#main").resize(function() {
        initApp.mobileCheckActivation()
    });
var ie = function() {
    for (var a, b = 3, c = document.createElement("div"), d = c.getElementsByTagName("i"); c.innerHTML = "<!--[if gt IE " + ++b + "]><i></i><![endif]-->", d[0];);
    return b > 4 ? b : a
}();
if ($.fn.extend({
        "jarvismenu": function(a) {
            var b = {
                    "accordion": "true",
                    "speed": 200,
                    "closedSign": "[+]",
                    "openedSign": "[-]"
                },
                c = $.extend(b, a),
                d = $(this);
            d.find("li").each(function() {
                0 !== $(this).find("ul").size() && ($(this).find("a:first").append("<b class='collapse-sign'>" + c.closedSign + "</b>"), "#" == $(this).find("a:first").attr("href") && $(this).find("a:first").click(function() {
                    return !1
                }))
            }), d.find("li.active").each(function() {
                $(this).parents("ul").slideDown(c.speed), $(this).parents("ul").parent("li").find("b:first").html(c.openedSign), $(this).parents("ul").parent("li").addClass("open")
            }), d.find("li a").click(function() {
                0 !== $(this).parent().find("ul").size() && (c.accordion && ($(this).parent().find("ul").is(":visible") || (parents = $(this).parent().parents("ul"), visible = d.find("ul:visible"), visible.each(function(a) {
                    var b = !0;
                    parents.each(function(c) {
                        return parents[c] == visible[a] ? (b = !1, !1) : void 0
                    }), b && $(this).parent().find("ul") != visible[a] && $(visible[a]).slideUp(c.speed, function() {
                        $(this).parent("li").find("b:first").html(c.closedSign), $(this).parent("li").removeClass("open")
                    })
                }))), $(this).parent().find("ul:first").is(":visible") && !$(this).parent().find("ul:first").hasClass("active") ? $(this).parent().find("ul:first").slideUp(c.speed, function() {
                    $(this).parent("li").removeClass("open"), $(this).parent("li").find("b:first").delay(c.speed).html(c.closedSign)
                }) : $(this).parent().find("ul:first").slideDown(c.speed, function() {
                    $(this).parent("li").addClass("open"), $(this).parent("li").find("b:first").delay(c.speed).html(c.openedSign)
                }))
            })
        }
    }), jQuery.fn.doesExist = function() {
        return jQuery(this).length > 0
    }, $.navAsAjax || $(".google_maps")) {
    var gMapsLoaded = !1;
    window.gMapsCallback = function() {
        gMapsLoaded = !0, $(window).trigger("gMapsLoaded")
    }, window.loadGoogleMaps = function() {
        if (gMapsLoaded) return window.gMapsCallback();
        var a = document.createElement("script");
        a.setAttribute("type", "text/javascript"), a.setAttribute("src", "http://maps.google.com/maps/api/js?sensor=false&callback=gMapsCallback"), (document.getElementsByTagName("head")[0] || document.documentElement).appendChild(a)
    }
}
$.navAsAjax && ($("nav").length && checkURL(), $(document).on("click", 'nav a[href!="#"]', function(a) {
    a.preventDefault();
    var b = $(a.currentTarget);
    b.parent().hasClass("active") || b.attr("target") || ($.root_.hasClass("mobile-view-activated") ? ($.root_.removeClass("hidden-menu"), $("html").removeClass("hidden-menu-mobile-lock"), window.setTimeout(function() {
        window.location.search ? window.location.href = window.location.href.replace(window.location.search, "").replace(window.location.hash, "") + "#" + b.attr("href") : window.location.hash = b.attr("href")
    }, 150)) : window.location.search ? window.location.href = window.location.href.replace(window.location.search, "").replace(window.location.hash, "") + "#" + b.attr("href") : window.location.hash = b.attr("href"))
}), $(document).on("click", 'nav a[target="_blank"]', function(a) {
    a.preventDefault();
    var b = $(a.currentTarget);
    window.open(b.attr("href"))
}), $(document).on("click", 'nav a[target="_top"]', function(a) {
    a.preventDefault();
    var b = $(a.currentTarget);
    window.location = b.attr("href")
}), $(document).on("click", 'nav a[href="#"]', function(a) {
    a.preventDefault()
}), $(window).on("hashchange", function() {
    checkURL()
})), $("body").on("click", function(a) {
    $('[rel="popover"], [data-rel="popover"]').each(function() {
        $(this).is(a.target) || 0 !== $(this).has(a.target).length || 0 !== $(".popover").has(a.target).length || $(this).popover("hide")
    })
}), $("body").on("hidden.bs.modal", ".modal", function() {
    $(this).removeData("bs.modal")
});