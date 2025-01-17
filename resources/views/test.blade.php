
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>jQuery Persian Datepicker - Documentation</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <link href='Persian_Date_Picker_Master/css/normalize.css' rel='stylesheet' />
    <link href='Persian_Date_Picker_Master/css/fontawesome/css/font-awesome.min.css' rel='stylesheet' />
    <link href="Persian_Date_Picker_Master/css/vertical-responsive-menu.min.css" rel="stylesheet" />
    <link href="Persian_Date_Picker_Master/css/style.css" rel="stylesheet" />
    <link href="Persian_Date_Picker_Master/css/prism.css" rel="stylesheet" />
    <link rel="stylesheet" href="Persian_Date_Picker_Master/css/persianDatepicker-default.css" />
    <link rel="stylesheet" href="Persian_Date_Picker_Master/css/persianDatepicker-dark.css" />
    <link rel="stylesheet" href="Persian_Date_Picker_Master/css/persianDatepicker-latoja.css" />
    <link rel="stylesheet" href="Persian_Date_Picker_Master/css/persianDatepicker-melon.css" />
    <link rel="stylesheet" href="Persian_Date_Picker_Master/css/persianDatepicker-lightorang.css" />
    <script src="Persian_Date_Picker_Master/js/prism.js"></script>
    <script src="Persian_Date_Picker_Master/js/vertical-responsive-menu.min.js"></script>
</head>
<body>
    <header class="header clearfix">
        <button type="button" id="toggleMenu" class="toggle_menu">
            <i class="fa fa-bars"></i>
        </button>
        <h1>jQuery Persian Datepicker</h1>
        &nbsp;
        <h1><a href="https://github.com/behzadi/persianDatepicker">View in GitHub</a></h1>
    </header>
    <nav class="vertical_nav">
        <ul id="js-menu" class="menu">

            <li class="menu--item">
                <a href="#usage" class="menu--link" title="usage">
                    <i class="menu--icon  fa fa-fw fa-calendar"></i>
                    <span class="menu--label">Usage</span>
                </a>
            </li>

            <li class="menu--item ">
                <a href="#themes" class="menu--link" title="new themes">
                    <i class="menu--icon  fa fa-fw fa-th"></i>
                    <span class="menu--label">Themes</span>
                </a>
                <!--<ul class="sub_menu">
                    <li class="sub_menu--item">
                        <a href="#" class="sub_menu--link sub_menu--link__active">Submenu</a>
                    </li>
                    <li class="sub_menu--item">
                        <a href="#" class="sub_menu--link">Submenu</a>
                    </li>
                    <li class="sub_menu--item">
                        <a href="#" class="sub_menu--link">Submenu</a>
                    </li>
                </ul>-->
            </li>
            <li class="menu--item">
                <a href="#multi-element" class="menu--link" title="">
                    <i class="menu--icon  fa fa-fw fa-th-list"></i>
                    <span class="menu--label">multi element</span>
                </a>
            </li>
            <li class="menu--item">
                <a href="#options" class="menu--link" title="All options">
                    <i class="menu--icon  fa fa-fw fa-cog"></i>
                    <span class="menu--label">Options</span>
                </a>
            </li>
            <li class="menu--item ">
                <a href="#format" class="menu--link" title="format">
                    <i class="menu--icon  fa fa-fw fa-sort-amount-desc"></i>
                    <span class="menu--label">Format</span>
                </a>

            </li>
            <li class="menu--item">
                <a href="#size" class="menu--link" title="size">
                    <i class="menu--icon  fa fa-fw fa-arrows-alt"></i>
                    <span class="menu--label">size</span>
                </a>
            </li>


            <li class="menu--item">
                <a href="#startDate" class="menu--link" title="startDate & endDate">
                    <i class="menu--icon  fa fa-fw fa-calendar"></i>
                    <span class="menu--label">Range of date</span>
                </a>
            </li>

            <li class="menu--item">
                <a href="#selectedDate" class="menu--link" title="selectedDate & selectedBefore">
                    <i class="menu--icon  fa fa-fw fa-calendar-o"></i>
                    <span class="menu--label">Select date</span>
                </a>
            </li>

            <li class="menu--item">
                <a href="#dataAttr" class="menu--link" title="data-jdate & data-gdate">
                    <i class="menu--icon  fa fa-fw fa-calendar-o"></i>
                    <span class="menu--label">Data Attributes</span>
                </a>
            </li>

            <li class="menu--item">
                <a href="#gregorianDate" class="menu--link" title="GregorianDate">
                    <i class="menu--icon  fa fa-fw fa-calendar-o"></i>
                    <span class="menu--label">Gregorian Date</span>
                </a>
            </li>

            <li class="menu--item">
                <a href="#workWithPersianDate" class="menu--link" title="workWithPersianDate">
                    <i class="menu--icon  fa fa-fw fa-calendar-o"></i>
                    <span class="menu--label">PersianDate Functions</span>
                </a>
            </li>

            <li class="menu--item">
                <a href="https://github.com/behzadi/persianDatepicker" class="menu--link" title="download">
                    <i class="menu--icon  fa fa-fw fa-download"></i>
                    <span class="menu--label">Download</span>
                </a>
            </li>
        </ul>
        <button id="collapse_menu" class="collapse_menu">
            <i class="collapse_menu--icon  fa fa-fw"></i>
            <span class="collapse_menu--label">Recolher menu</span>
        </button>
    </nav>

    <div class="wrapper">
        <section id="usage">
            <h1>jQuery Persian Datepicker</h1>
            <p>A lightweight jQuery plugin that select persian(jalali) date with selectable years and months and other options.</p>
            <h2> - Usage</h2>
            <pre class="language-javascript"><code class=" language-javascript">
    &lt;link rel="stylesheet" href="css/persianDatepicker-default.css" /&gt;
    &lt;script src="js/jquery.min.js" &gt;&lt;/script&gt;
    &lt;script src="js/persianDatepicker.min.js"&gt;&lt;/script&gt;
    &lt;script&gt;
        $("#elementId, .elementClass").persianDatepicker();
    &lt;/script&gt;
</code></pre>
        </section>
        <section id="themes">
            <h2> - New themes</h2>
            <input type="text" placeholder="default" id="pdpDefault" />&nbsp;&nbsp;&nbsp;&nbsp;
            <input type="text" placeholder="dark" id="pdpDark" />&nbsp;&nbsp;&nbsp;&nbsp;
            <input type="text" placeholder="latoja" id="pdpLatoja" />&nbsp;&nbsp;&nbsp;&nbsp;
            <input type="text" placeholder="lightorang" id="pdpLightorang" />&nbsp;&nbsp;&nbsp;&nbsp;
            <input type="text" placeholder="melon" id="pdpMelon" />
        </section>
        <section id="multi-element" style="margin-top: 200px">
            <h2> - Multi element : text, label, span, div, p, ...</h2>
            <input type="text" placeholder="a text box" class="usage" />
            <span class="usage">a span</span>
            <label class="usage">a label</label>
        </section>
        <section id="options">
            <h2> - All options</h2>
            <pre class="language-javascript"><code class=" language-javascript">
    $("jQuerySelectQuery").persianDatepicker({
        months: ["فروردین", "اردیبهشت", "خرداد", "تیر", "مرداد", "شهریور", "مهر", "آبان", "آذر", "دی", "بهمن", "اسفند"],
        dowTitle: ["شنبه", "یکشنبه", "دوشنبه", "سه شنبه", "چهارشنبه", "پنج شنبه", "جمعه"],
        shortDowTitle: ["ش", "ی", "د", "س", "چ", "پ", "ج"],
        showGregorianDate: !1,
        persianNumbers: !0,
        formatDate: "YYYY/MM/DD",
        selectedBefore: !1,
        selectedDate: null,
        startDate: null,
        endDate: null,
        prevArrow: '\u25c4',
        nextArrow: '\u25ba',
        theme: 'default',
        alwaysShow: !1,
        selectableYears: null,
        selectableMonths: [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12],
        cellWidth: 25, // by px
        cellHeight: 20, // by px
        fontSize: 13, // by px
        isRTL: !1,
        calendarPosition: {
            x: 0,
            y: 0,
        },
        onShow: function () {},
        onHide: function () {},
        onSelect: function () {},
        onRender: function () {}
    });
</code></pre>
        </section>
        <section id="size">
            <h2> - Customize the size</h2>
            <input type="text" placeholder="small" id="pdpSmall" />&nbsp;
            <input type="text" placeholder="big" id="pdpBig" />
            <pre class="language-javascript"><code class=" language-javascript">
    $("#pdpBig").persianDatepicker({
        cellWidth: 78,
        cellHeight: 60,
        fontSize: 18,
    });
    $("#pdpSmall").persianDatepicker({
        cellWidth: 14,
        cellHeight: 12,
        fontSize: 8,
    });
</code></pre>
        </section>

        <section id="format">
            <h2> - Format selected date & time</h2>
            <label>(date & time) YYYY/MM/DD 0h:0m:0s:ms</label>
            <input type="text" placeholder="YYYY/MM/DD 0h:0m:0s:ms" id="pdpF1" /><br />
            <label>(day & month with zero) YYYY-0M-0D</label>
            <input type="text" placeholder="YYYY-0M-0D" id="pdpF2" /><br />
            <label>(year & name of month & day of week & name of day) YYYY-NM-DW|ND</label>
            <input type="text" placeholder="YYYY-NM-DW|ND" id="pdpF3" />

            <pre class="language-javascript"><code class=" language-javascript">
    $("#pdpF1").persianDatepicker({
        formatDate: "YYYY/MM/DD hh:mm:ss:ms"
    });
    $("#pdpF2").persianDatepicker({
        formatDate: "YYYY-0M-0D"
    });
    $("#pdpF3").persianDatepicker({
        formatDate: "YYYY-NM-DW|ND",
        isRTL:!0  //  isRTL:!0 => because of persian words direction
    });
    YYYY  =>   year             : 1394  -  ...
    MM    =>   month            : 1     -  12
    DD    =>   day              : 1     -  30|31
    0M    =>   month with zero  : 01    -  12
    0D    =>   day  with zero   : 01    -  30|31
    hh    =>   hour             : 0     -  23
    mm    =>   minute           : 0     -  59
    ss    =>   second           : 0     -  59
    ms    =>   milisecond       : 0     -  3 digit random time of cpu like 359
    NM    =>   name of month    : اسفند-فروردین
    DW    =>   day of week      : 0     -  6
    ND    =>   name of day      : جمعه-شنبه
</code></pre>
        </section>
        <section id="startDate">
            <h2> - startDate & endDate</h2>
            <label>from 1394/11/12 to 1395/5/5</label>
            <input type="text" id="pdpStartEnd" placeholder="between tow date" />
            <label>from today to 1395/5/5</label>
            <input type="text" id="pdpStartToday" placeholder="startDate is today" />
            <label>from 1394/11/12 to today</label>
            <input type="text" id="pdpEndToday" placeholder="endDate is today" />
            <pre class="language-javascript"><code class=" language-javascript">
    $("#pdpStartEnd").persianDatepicker({
        startDate: "1394/11/12",
        endDate:"1395/5/5"
    });
    $("#pdpStartToday").persianDatepicker({
        startDate: "today",
        endDate:"1395/5/5"
    });
    $("#pdpEndToday").persianDatepicker({
        startDate: "1393/11/12",
        endDate:"today"
    });
</code></pre>
        </section>


        <section id="selectedDate">
            <h2> - selectedDate & selectedBefore</h2>
            <label>selected date is 1395/5/5</label>
            <input type="text" id="pdpSelectedDate" placeholder="selectedDate" />
            <label>select today date before</label>
            <input type="text" id="pdpSelectedBefore" />
            <label>selectedDate & selectedBefore</label>
            <input type="text" id="pdpSelectedBoth" />
            <pre class="language-javascript"><code class=" language-javascript">
    $("#pdpSelectedDate").persianDatepicker({
        selectedDate:"1395/5/5"
    });
    $("#pdpSelectedBefore").persianDatepicker({
        selectedBefore: !0
    });
    $("#pdpSelectedBoth").persianDatepicker({
        selectedBefore: !0,
        selectedDate:"1395/5/5"
    });
</code></pre>
        </section>


        <section id="dataAttr">
            <h2> - data-jdate & data-gdate attributes</h2>
            <label>so we have a data attr with jdate & gdate names..</label>
            <input type="text" id="pdp-data-jdate" placeholder="select Date" />
            <input type="text" id="pdp-data-gdate" placeholder="select Date" />

            <pre class="language-javascript"><code class="language-javascript">
    $("#pdp-data-jdate").persianDatepicker({
        onSelect: function () {
            alert($("#pdp-data-jdate").attr("data-gdate"));
        }
    });
    $("#pdp-data-gdate").persianDatepicker({
        showGregorianDate: true,
        onSelect: function () {
            alert($("#pdp-data-gdate").attr("data-jdate"));
        }
    });
</code></pre>
        </section>


        <section id="gregorianDate">
            <h2> - Gregorian Date</h2>
            <label>show jalali, select gregorian date !</label>
            <input type="text" id="pdpGregorian" placeholder="select Date" />


            <pre class="language-javascript"><code class="language-javascript">
    $("#pdpGregorian").persianDatepicker({ showGregorianDate: true });
</code></pre>
        </section>


        <section id="workWithPersianDate">
            <h2> - Work With Persian Date Functions</h2>
            <label>selected date is tomarrow(range of date is next 4 days)</label>
            <input type="text" id="pdpStartDateTomarrow" placeholder="startDate Tomarrow" />

            <pre class="language-javascript"><code class="  language-javascript">
    var p = new persianDate();
    $("#pdpStartDateTommarrow").persianDatepicker({
        startDate: p.now().addDay(1).toString("YYYY/MM/DD"),
        endDate: p.now().addDay(4).toString("YYYY/MM/DD")
    });
</code></pre>
        </section>

        <br /><br /><br /><br /><br /><br />
    </div>
    <script src="Persian_Date_Picker_Master/js/jquery-1.10.1.min.js"></script>
    <script src="Persian_Date_Picker_Master/js/persianDatepicker.js"></script>
    <script>
        $(function () {
            //usage
            $(".usage").persianDatepicker();

            //themes
            $("#pdpDefault").persianDatepicker({ alwaysShow: true, });
            $("#pdpLatoja").persianDatepicker({ theme: "latoja", alwaysShow: true, });
            $("#pdpLightorang").persianDatepicker({ theme: "lightorang", alwaysShow: true, });
            $("#pdpMelon").persianDatepicker({ theme: "melon", alwaysShow: true, });
            $("#pdpDark").persianDatepicker({ theme: "dark", alwaysShow: true, });

            //size
            $("#pdpSmall").persianDatepicker({ cellWidth: 14, cellHeight: 12, fontSize: 8 });
            $("#pdpBig").persianDatepicker({ cellWidth: 78, cellHeight: 60, fontSize: 18 });

            //formatting
            $("#pdpF1").persianDatepicker({ formatDate: "YYYY/MM/DD 0h:0m:0s:ms" });
            $("#pdpF2").persianDatepicker({ formatDate: "YYYY-0M-0D" });
            $("#pdpF3").persianDatepicker({ formatDate: "YYYY-NM-DW|ND", isRTL: !0 });

            //startDate & endDate
            $("#pdpStartEnd").persianDatepicker({ startDate: "1394/11/12", endDate: "1395/5/5" });
            $("#pdpStartToday").persianDatepicker({ startDate: "today", endDate: "1410/11/5" });
            $("#pdpEndToday").persianDatepicker({ startDate: "1397/11/12", endDate: "today" });

            //selectedBefor & selectedDate
            $("#pdpSelectedDate").persianDatepicker({ selectedDate: "1404/1/1", alwaysShow: !0 });
            $("#pdpSelectedBefore").persianDatepicker({ selectedBefore: !0 });
            $("#pdpSelectedBoth").persianDatepicker({ selectedBefore: !0, selectedDate: "1395/5/5" });

            //jdate & gdate attributes
            $("#pdp-data-jdate").persianDatepicker({
                onSelect: function () {
                    alert($("#pdp-data-jdate").attr("data-gdate"));
                }
            });
            $("#pdp-data-gdate").persianDatepicker({
                showGregorianDate: true,
                onSelect: function () {
                    alert($("#pdp-data-gdate").attr("data-jdate"));
                }
            });


            //Gregorian date
            $("#pdpGregorian").persianDatepicker({ showGregorianDate: true });

            // jDateFuctions
            // var jdf = new jDateFunctions();
            // var pd = new persianDate();
            // $("#pdpjdf-1").persianDatepicker({
            //     onSelect: function () {
            //         $("#pdpjdf-1").val(jdf.getJulianDayFromPersian(pd.parse($("#pdpjdf-1").val())));
            //         $("#pdpjdf-2").val(jdf.getLastDayOfPersianMonth(pd.parse($("#pdpjdf-1").val())));
            //         $("#pdpjdf-3").val(jdf.getPCalendarDate($("#pdpjdf-1").val()));
            //     }
            // });


            // //convert jalali date to miladi
            // $("#year, #month, #day").on("change", function () {
            //     $("#month").val() > 6 ? $("#day-31").hide() : $("#day-31").show();;
            //     showConverted();
            // });

            // $("#year").keyup(showConverted);
            //
            // function showConverted() {
            //     try{
            //         var pd = new persianDate();
            //         pd.year = parseInt($("#year").val());
            //         pd.month = parseInt($("#month").val());
            //         pd.date = parseInt($("#day").val());
            //
            //         var jdf = new jDateFunctions();
            //         $("#converted").html("Gregorian :  " + jdf.getGDate(pd)._toString("YYYY/MM/DD") + "     [" + jdf.getGDate(pd) + "]<br />Julian:  " + jdf.getJulianDayFromPersian(pd));
            //
            //     } catch (e) {
            //         $("#converted").html("Enter the year correctly!");
            //     }
            // }


            //startDate is tomarrow
            var p = new persianDate();
            $("#pdpStartDateTomarrow").persianDatepicker({ startDate: p.now().addDay(1).toString("YYYY/MM/DD"), endDate: p.now().addDay(4).toString("YYYY/MM/DD") });


        });
    </script>

</body>
</html>
