@extends('layouts.default')

<!-- Main content -->
<div class="container-fluid">
    <div class="row">
        <div class="pull-left">
            <h1 style="margin-left: 15px;color: #585858;">Ukraine</h1>
        </div>
        <div class="pull-right region-list">
            <div class="dropdown">
          <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown">
            Select Region
            <span class="caret"></span>
          </button>
            <ul class="dropdown-menu">
                <li><a id="cphContent_repRegions_hlRegion_0" title="Cherkasy region" data-key="21" href="/regions/cherkasy">Cherkasy</a></li>
                <li><a id="cphContent_repRegions_hlRegion_1" title="Chernigiv region" data-key="23" href="/regions/chernigiv">Chernigiv</a></li>
                <li><a id="cphContent_repRegions_hlRegion_2" title="Chernivtsi region" data-key="16" href="/regions/chernivtsi">Chernivtsi</a></li>
                <li><a id="cphContent_repRegions_hlRegion_3" title="Crimea" data-key="32" href="/regions/crimea">Crimea</a></li>
                <li><a id="cphContent_repRegions_hlRegion_4" title="Dnipropetrovsk region" data-key="29" href="/regions/dnipropetrovsk">Dnipropetrovsk</a></li>
                <li><a id="cphContent_repRegions_hlRegion_5" title="Donetsk region" data-key="28" href="/regions/donetsk">Donetsk</a></li>
                <li><a id="cphContent_repRegions_hlRegion_6" title="Ivano-Frankivsk region" data-key="15" href="/regions/ivano-frankivsk">Ivano-Frankivsk</a></li>
                <li><a id="cphContent_repRegions_hlRegion_7" title="Kharkiv region" data-key="26" href="/regions/kharkiv">Kharkiv</a></li>
                <li><a id="cphContent_repRegions_hlRegion_8" title="Kherson region" data-key="31" href="/regions/kherson">Kherson</a></li>
                <li><a id="cphContent_repRegions_hlRegion_9" title="Khmelnitsky region" data-key="7" href="/regions/khmelnitsky">Khmelnitsky</a></li>
                <li><a id="cphContent_repRegions_hlRegion_10" title="Kirovograd region" data-key="20" href="/regions/kirovograd">Kirovograd</a></li>
                <li><a id="cphContent_repRegions_hlRegion_11" title="Kyiv region" data-key="9" href="/regions/kiev">Kyiv</a></li>
                <li><a id="cphContent_repRegions_hlRegion_12" title="Lugansk region" data-key="27" href="/regions/lugansk">Lugansk</a></li>
                <li><a id="cphContent_repRegions_hlRegion_13" title="Lviv region" data-key="11" href="/regions/lviv">Lviv</a></li>
                <li><a id="cphContent_repRegions_hlRegion_14" title="Mykolaiv region" data-key="22" href="/regions/mykolaiv">Mykolaiv</a></li>
                <li><a id="cphContent_repRegions_hlRegion_15" title="Odessa region" data-key="19" href="/regions/odessa">Odessa</a></li>
                <li><a id="cphContent_repRegions_hlRegion_16" title="Poltava region" data-key="25" href="/regions/poltava">Poltava</a></li>
                <li><a id="cphContent_repRegions_hlRegion_17" title="Rivne region" data-key="12" href="/regions/rivne">Rivne</a></li>
                <li><a id="cphContent_repRegions_hlRegion_18" title="Sumy region" data-key="24" href="/regions/sumy">Sumy</a></li>
                <li><a id="cphContent_repRegions_hlRegion_19" title="Ternopil region" data-key="14" href="/regions/ternopil">Ternopil</a></li>
                <li><a id="cphContent_repRegions_hlRegion_20" title="Vinnytsia region" data-key="18" href="/regions/vinnytsia">Vinnytsia</a></li>
                <li><a id="cphContent_repRegions_hlRegion_21" title="Volyn region" data-key="10" href="/regions/volyn">Volyn</a></li>
                <li><a id="cphContent_repRegions_hlRegion_22" title="Zakarpattia region" data-key="13" href="/regions/zakarpatya">Zakarpattia</a></li>
                <li><a id="cphContent_repRegions_hlRegion_23" title="Zaporizhya region" data-key="30" href="/regions/zaporizhya">Zaporizhya</a></li>
                <li><a id="cphContent_repRegions_hlRegion_24" title="Zhytomyr region" data-key="17" href="/regions/zhytomyr">Zhytomyr</a></li>
            </ul>
            </div>
        </div>
    </div>
    <div class="row top-row">

        <div class="col-lg-12 col-md-12 col-sm-7 col-xs-12">

            <img src="img/ukraine.png" alt="Diamond"border="0" usemap="#Map" class="centered" max-width="auto" />

            <map name="Map" id="map">
                 <!--Volyn-->
                <area href="/regions/volyn" id="cphContent_areaVolyn" shape="poly" coords="74,16,95,15,108,18,107,21,104,24,103,27,105,31,105,34,104,38,109,39,111,42,115,46,116,48,114,52,116,55,115,60,113,64,111,67,109,70,106,70,100,68,97,71,95,73,91,74,89,77,90,81,84,81,78,81,75,78,71,77,73,73,70,70,65,69,61,61,64,58,61,52,59,46,54,38,54,31,52,24,62,24,69,26,72,21" title="Volyn region" data-key="10" />
                <!--Rivne-->
                <area href="/regions/rivne" id="cphContent_areaRivne" shape="poly" coords="110,16,114,17,121,17,122,20,126,20,129,22,135,23,140,26,145,24,146,27,149,32,150,34,156,31,159,34,159,36,157,40,155,43,153,45,152,48,151,53,148,55,147,58,148,61,146,64,148,70,146,72,143,76,137,77,134,81,130,84,125,87,119,90,117,87,112,87,108,89,103,91,99,90,97,95,94,94,90,91,91,85,88,82,89,76,91,73,94,72,97,71,100,67,105,69,108,70,110,66,113,63,115,59,115,53,114,52,115,47,114,46,111,41,110,38,104,36,105,31,103,26,107,21" class="" title="Rivne region" data-key="12" />
                <!--Lviv-->
                <area href="/regions/lviv" id="cphContent_areaLviv" shape="poly" coords="64,68,69,70,72,73,71,76,74,77,78,81,83,80,89,80,90,84,90,89,90,91,93,93,97,94,96,99,93,103,89,104,87,105,87,109,83,109,81,112,76,116,70,115,67,118,66,124,66,127,67,129,61,130,54,131,47,131,44,134,41,139,41,144,41,147,37,145,30,143,31,139,25,139,23,132,21,125,21,113,21,106,24,106,27,100,32,99,35,91,39,89,45,85,52,78,59,78,62,72" class="" title="Lviv region" data-key="11" />
                <!--Uzhgorod-->
                <area href="/regions/zakarpatya" id="cphContent_areaUzgorod" shape="poly" coords="24,138,31,139,30,142,37,145,41,146,45,150,48,155,50,157,55,156,56,164,61,163,64,167,65,172,67,176,67,179,66,183,61,181,52,182,47,180,40,178,34,177,27,171,23,175,18,175,18,170,14,168,9,164,3,159,1,154,3,147,8,144,8,139,14,132,15,128,22,130" class="" title="Zakarpattia region" data-key="13" />
                <!--Zhytomyr-->
                <area href="/regions/zhytomyr" id="cphContent_areaZhytomyr" shape="poly" coords="159,36,162,37,164,33,167,34,170,34,174,31,178,37,183,35,184,38,188,42,189,37,193,35,197,33,200,37,201,41,203,42,203,47,201,52,205,55,207,59,204,63,207,66,207,70,207,75,207,78,206,82,205,84,209,86,212,89,211,93,211,96,211,101,213,105,209,107,205,110,205,115,206,117,201,117,199,119,195,120,191,116,192,113,191,107,188,108,185,109,179,110,173,111,166,111,161,111,158,109,154,105,154,100,157,97,155,90,152,89,148,86,147,81,143,76,145,71,147,69,145,63,147,60,146,57,148,54,151,52,152,47,154,43,157,40" class="" title="Zhytomyr region" data-key="17" />
                <!--Ivano-Frankivsk-->
                <area href="/regions/ivano-frankivsk" id="cphContent_areaIvanoFrank" shape="poly" coords="67,128,65,124,65,121,67,118,70,115,74,115,76,119,78,125,78,129,77,132,80,134,79,136,83,140,86,143,88,146,91,145,94,148,97,148,98,151,97,154,96,157,96,163,95,165,90,164,86,169,84,170,83,172,83,173,79,176,77,182,78,184,77,187,73,191,70,185,66,181,66,175,64,172,63,166,61,162,56,163,55,156,51,156,47,154,45,148,41,144,41,139,44,133,46,132,53,131,63,129" class="" title="Ivano-Frankivsk region" data-key="15" />
                <!--Chernivtsi-->
                <area href="/regions/chernivtsi" id="cphContent_areaChernivtsi" shape="poly" coords="98,152,100,157,104,155,105,159,110,155,112,160,117,162,122,161,124,165,125,160,127,161,129,160,132,161,136,160,141,159,147,158,149,163,147,166,143,168,142,171,137,170,134,170,129,169,129,173,126,175,121,175,115,178,113,182,110,182,106,183,101,184,96,185,91,185,85,185,82,191,78,194,73,193,77,187,76,183,79,175,83,173,86,168,90,162,95,164" class="" title="Chernivtsi region" data-key="16" />
                <!--Ternopil-->
                <area href="/regions/ternopil" id="cphContent_areaTernopil" shape="poly" coords="107,88,112,87,116,86,119,92,119,98,116,103,116,107,119,112,117,115,115,120,118,126,116,132,115,139,115,148,116,154,119,160,118,161,113,160,111,156,105,158,102,155,98,151,95,147,90,145,86,143,83,140,78,135,78,128,76,118,82,109,88,109,87,105,92,101,97,101,96,94" class="" title="Ternopil region" data-key="14" />
                <!--Khmelnitsky-->
                <area href="/regions/khmelnitsky" id="cphContent_areaKhmelnitsky" shape="poly" coords="143,75,146,80,148,84,151,90,155,90,156,97,153,100,155,104,157,109,159,111,160,114,160,118,157,121,161,128,162,136,159,138,154,137,150,139,148,146,147,153,146,157,142,159,136,159,131,161,129,160,126,161,123,164,119,158,115,152,115,137,116,131,118,126,115,119,119,110,115,105,116,99,118,93,122,89,130,85,137,77" class="" title="Khmelnitsky region" data-key="7" />
                <!--Vinnytsia-->
                <area href="/regions/vinnytsia" id="cphContent_areaVinnytsia" shape="poly" coords="166,111,172,110,178,110,184,108,188,108,191,107,191,114,194,119,198,119,203,117,206,119,207,122,207,127,206,129,210,133,211,138,208,141,210,144,211,148,216,155,212,155,216,158,219,161,218,165,221,169,216,169,214,172,218,176,218,179,212,179,211,182,205,182,200,183,194,180,190,186,185,180,178,179,175,183,173,175,169,177,163,172,157,167,151,166,148,164,146,156,146,152,148,145,150,138,154,136,158,137,162,135,160,128,156,120,159,117,161,112" class="" title="Vinnytsia region" data-key="18" />
                <!--Kyiv-->
                <area href="/regions/kiev" id="cphContent_areaKyiv" shape="poly" coords="203,43,208,40,213,38,216,41,219,40,224,40,229,42,231,46,233,50,236,55,237,60,239,65,242,70,246,72,249,70,252,75,255,79,259,81,263,81,269,77,275,79,274,83,277,86,274,92,271,98,271,102,265,107,259,106,255,108,253,109,251,115,252,120,248,124,244,129,239,130,232,132,232,135,227,133,224,130,222,132,219,134,217,135,213,138,210,133,205,130,207,127,207,120,204,116,205,110,209,107,212,104,210,92,212,88,205,84,208,77,203,62,207,59,205,55,201,53,203,47" class="" title="Kyiv region" data-key="9" />
                <!--Chernigiv-->
                <area href="/regions/chernigiv" id="cphContent_areaChernigiv" shape="poly" coords="253,16,261,13,267,13,275,16,280,10,282,2,287,4,296,7,299,2,308,3,306,6,310,12,307,16,303,20,301,25,303,32,302,40,300,41,301,46,298,51,300,54,303,58,304,63,304,68,301,70,302,74,301,76,301,80,298,83,292,85,286,84,282,85,277,86,274,81,269,77,263,82,257,81,249,70,245,72,242,70,237,61,235,55,232,50,237,45,233,33,241,22,245,14" class="" title="Chernigiv region" data-key="23" />
                <!--Sumy-->
                <area href="/regions/sumy" id="cphContent_areaSumy" shape="poly" coords="309,1,311,4,315,1,319,3,326,9,325,15,331,21,335,24,332,29,328,31,331,37,331,39,332,43,333,46,337,47,343,50,351,50,355,48,357,53,361,53,361,60,364,66,364,71,368,77,370,81,369,85,365,85,360,87,352,93,348,93,340,94,341,91,337,85,335,81,333,76,329,79,324,78,320,81,306,78,302,79,301,70,304,63,302,57,298,50,300,45,300,41,302,38,302,30,301,25,303,18,307,16,309,11,308,5" class="" title="Sumy region" data-key="24" />
                <!--Cherkasy-->
                <area href="/regions/cherkasy" id="cphContent_areaCherkasy" shape="poly" coords="274,91,281,97,283,100,286,104,284,107,289,112,294,117,296,125,310,142,307,145,304,142,300,142,298,140,297,144,294,146,290,147,286,141,281,143,277,147,273,149,267,149,262,149,261,153,255,156,248,155,240,154,237,158,235,162,232,163,227,165,220,168,217,164,218,160,216,157,212,154,211,149,209,143,209,140,213,137,219,135,224,130,226,133,233,135,232,131,238,130,244,128,248,124,252,120,252,116,254,108,259,106,265,106,271,100,272,97,275,92" class="" title="Cherkasy region" data-key="21" />
                <!--Poltava-->
                <area href="/regions/poltava" id="cphContent_areaPoltava" shape="poly" coords="301,79,305,77,320,80,324,77,328,79,333,76,334,80,340,90,340,93,346,94,352,92,352,96,350,99,355,103,360,105,363,110,363,113,367,112,369,118,365,120,366,125,364,128,358,128,356,132,357,133,352,134,347,138,340,142,338,146,338,152,334,152,330,152,329,150,326,148,320,148,317,145,313,144,310,142,295,124,294,117,289,112,283,107,286,104,283,101,281,96,275,92,277,86,283,85,286,85,292,85,297,84" class="" title="Poltava region" data-key="25" />
                <!--Odesa-->
                <area href="/regions/odessa" id="cphContent_areaOdesa" shape="poly" coords="218,178,222,181,227,181,225,185,227,190,228,195,231,199,233,204,239,202,242,206,245,208,243,214,246,219,252,218,252,223,255,223,256,228,253,230,249,232,251,236,253,238,253,244,253,245,250,247,245,248,242,248,240,249,240,252,240,257,238,260,237,263,236,263,234,265,229,260,226,254,223,252,222,254,224,260,228,265,231,267,228,274,225,278,222,281,219,280,215,282,213,284,214,289,212,291,210,287,208,283,206,289,208,295,211,298,212,302,210,307,206,305,204,298,199,297,187,302,183,300,181,304,177,305,171,302,165,297,168,293,172,292,175,291,173,286,178,282,182,280,182,275,187,273,188,269,190,265,189,261,186,254,194,249,197,254,202,252,208,256,210,254,213,256,222,256,222,254,218,251,216,238,210,234,207,231,207,226,204,224,205,221,207,215,203,217,194,207,195,199,196,190,193,189,189,186,193,180,198,181,204,181,210,182,212,180" class="" title="Odessa region" data-key="19" />
                <!--Kirovograd-->
                <area href="/regions/kirovograd" id="cphContent_areaKirovograd" shape="poly" coords="290,146,294,145,297,142,299,140,303,141,305,144,310,143,311,143,318,143,321,147,327,148,327,151,319,152,319,154,325,157,323,160,316,163,319,175,312,180,306,184,304,184,301,187,296,187,295,192,293,196,286,194,281,195,281,197,278,195,270,194,272,190,268,187,269,182,264,181,262,185,259,180,254,181,249,178,246,181,242,180,227,181,222,182,219,178,218,176,214,172,216,169,220,168,226,164,231,163,234,162,236,158,240,152,247,155,254,155,261,152,261,149,267,148,274,148,278,146,281,143,286,140" class="" title="Kirovograd region" data-key="20" />
                <!--Mykolaiv-->
                <area href="/regions/mykolaiv" id="cphContent_areaMykolaiv" shape="poly" coords="226,180,242,179,245,181,249,177,253,180,259,181,262,183,264,180,268,181,268,185,271,190,270,194,277,193,280,194,286,193,292,196,295,192,295,186,301,186,304,183,306,184,305,189,307,197,303,200,305,204,308,204,308,210,309,219,301,224,306,229,302,234,298,235,292,236,287,238,280,241,276,241,274,247,264,245,265,240,259,247,253,247,252,237,249,232,256,226,255,222,252,223,252,217,246,218,243,212,245,206,239,204,232,203,228,193,225,184" class="" title="Mykolaiv region" data-key="22" />
                <!--Harkiv-->
                <area href="/regions/kharkiv" id="cphContent_areaHarkiv" shape="poly" coords="371,82,376,78,380,78,385,79,388,83,394,83,398,86,405,81,412,80,416,75,420,80,425,82,425,86,431,89,438,95,437,103,437,112,435,118,440,126,442,132,442,136,438,139,433,137,429,133,425,131,423,136,419,141,414,145,410,145,405,148,407,153,405,154,400,153,396,157,391,151,387,145,385,140,379,143,375,141,368,141,366,137,362,134,356,133,357,127,363,128,365,125,365,120,368,117,366,111,363,112,362,109,360,104,350,98,351,93,365,84,372,84" class="" title="Kharkiv region" data-key="26" />
                <!--Herson-->
                <area href="/regions/kherson" id="cphContent_areaHerson" shape="poly" coords="307,203,314,206,320,204,323,207,330,207,334,212,340,213,342,216,346,215,349,220,352,230,356,230,356,235,355,240,357,244,360,247,366,248,368,257,365,257,359,262,357,266,349,270,347,266,350,261,346,261,341,259,338,263,331,260,329,262,324,263,321,268,315,266,313,262,308,265,299,265,294,269,287,268,275,259,272,259,275,257,277,253,272,250,269,253,263,249,271,249,278,249,287,250,292,246,286,246,283,246,278,244,275,240,279,240,287,237,291,235,298,234,302,234,305,229,300,223,309,217,306,210,308,202" class="" title="Kherson region" data-key="31" />
                <!--Krimea-->
                <area href="/regions/crimea" id="cphContent_areaCrimea" shape="poly" coords="325,261,331,265,333,268,337,267,342,271,347,271,347,272,353,272,354,272,352,278,357,275,359,276,360,272,358,268,357,261,361,265,362,269,365,274,361,277,359,279,363,280,369,290,371,296,377,299,384,298,389,296,392,290,395,295,398,293,405,289,409,289,418,291,415,293,412,297,412,305,409,307,393,309,385,305,379,310,379,313,374,317,372,322,366,320,356,321,353,326,349,332,347,335,342,338,335,339,330,338,327,334,323,334,320,332,326,328,324,321,327,315,327,310,318,303,315,306,305,298,300,297,294,300,294,293,298,291,310,284,322,277,326,277,327,273,325,271,323,264" class="" title="Crimea" data-key="32" />
                <!--Dnipropetrovsk-->
                <area href="/regions/dnipropetrovsk" id="cphContent_areaDnipropetrovks" shape="poly" coords="356,132,362,133,367,140,374,142,380,143,384,140,387,146,391,150,395,157,399,153,406,154,408,155,411,155,410,158,411,165,413,171,413,176,411,177,405,176,406,182,405,185,402,189,399,186,397,189,393,188,389,182,385,177,384,179,377,176,376,178,374,180,370,178,363,177,358,179,356,182,358,186,357,190,358,196,359,201,357,204,356,205,351,204,348,204,341,205,336,208,333,210,330,206,323,206,320,203,313,206,305,203,303,200,306,195,304,188,305,185,313,180,318,174,315,163,324,158,325,156,318,151,327,151,332,152,337,150,338,145,343,139" class="" title="Dnipropetrovsk region" data-key="29" />
                <!--Lugansk-->
                <area href="/regions/lugansk" id="cphContent_areaLugansk" shape="poly" coords="437,94,441,91,443,87,445,91,454,92,458,93,464,98,469,92,471,97,474,98,478,96,482,100,486,105,491,103,496,101,493,107,498,113,496,120,493,124,489,128,489,132,494,131,498,131,499,135,494,137,490,139,489,146,492,145,495,152,495,158,497,158,499,161,496,164,494,168,495,177,487,178,485,181,481,179,474,179,472,172,469,173,467,168,464,168,459,163,455,163,456,160,451,154,448,140,441,135,439,126,435,116,436,112,437,102" class="" title="Lugansk region" data-key="27" />
                <!--Donetsk-->
                <area href="/regions/donetsk" id="cphContent_areaDonetsk" shape="poly" coords="425,131,429,133,433,137,439,139,441,136,447,139,451,153,457,160,456,163,459,163,463,169,464,168,467,168,469,172,472,172,473,178,470,179,469,184,466,188,463,191,456,192,455,195,455,204,456,206,454,211,453,216,448,215,439,217,434,221,428,226,422,226,423,220,417,213,421,206,425,201,420,200,417,197,415,198,410,195,404,184,406,182,405,176,412,176,412,171,410,165,410,156,407,153,405,146,411,146,417,143,422,135" class="" title="Donetsk region" data-key="28" />
                <!--Zaporizhya-->
                <area href="/regions/zaporizhya" id="cphContent_areaZaporizhya" shape="poly" coords="374,179,378,176,383,178,384,176,388,179,392,188,397,188,398,185,403,189,405,186,411,195,415,197,417,196,420,198,424,201,420,206,418,211,423,219,423,224,425,228,419,229,416,234,410,234,401,241,394,239,388,240,375,252,373,252,370,249,370,255,368,256,365,248,358,245,355,240,356,234,355,230,352,230,346,215,341,215,340,213,334,211,341,203,347,204,355,205,359,201,358,196,357,189,358,185,356,180,363,177" class="" title="Zaporizhya region" data-key="30" />
            </map>
        </div>
    </div>

    <div class="btn-group btn-group-justified">
      <div class="btn-group">
        <button type="button" class="btn btn-sample wiki" ng-click="Wiki=false;Geography=false;Culture=false">Wiki</button>
      </div>
      <div class="btn-group">
        <button type="button" class="btn btn-sample geography" ng-click="Geography=true;Wiki=true;Culture=false">Geography</button>
      </div>
      <div class="btn-group">
        <button type="button" class="btn btn-sample culture" ng-click="Wiki=true;Geography=false;Culture=true">Culture</button>
      </div>
    </div>

    <div class="row" ng-controller="SwitchController">
        <!-- Wiki -->
        <blockquote ng-hide="Wiki">
            <p class="text-justify">
                &nbsp&nbspUkraine is a country in Eastern Europe. It has an area of 603,628 km2 (233,062 sq mi), making it the largest country entirely within Europe. Ukraine borders Russia to the east and northeast, Belarus to the northwest, Poland, Slovakia and Hungary to the west, Romania and Moldova to the southwest, and the Black Sea and Sea of Azov to the south and southeast, respectively.</p>
            <p class="text-justify">
                &nbsp&nbspIn the Middle Ages, the area became a key center of East Slavic culture, as epitomized by the powerful state of Kievan Rus'. Following its fragmentation in the 13th century, the territory of the present day Ukraine was contested, ruled and divided by a variety of powers, including Lithuania, Poland, Ottoman Empire, Austro-Hungary, and Russia. A Cossack republic emerged and prospered during the 17th and 18th centuries, but Ukraine remained otherwise divided until its consolidation into a Soviet republic in the 20th century, becoming an independent state only in 1991.</p>
                Ukraine has long been a global breadbasket because of its extensive, fertile farmlands. In 2011, it was the world's third-largest grain exporter with that year's harvest being much larger than average. Ukraine is one of the ten most attractive agricultural land acquisition regions. The country also has a well-developed manufacturing sector, particularly in aerospace and industrial equipment.</p>
            <p class="text-justify">
                &nbsp&nbspUkraine is a unitary republic under a semi-presidential system with separate powers: legislative, executive, and judicial branches. Its capital and largest city is Kiev. Since the dissolution of the Soviet Union, Ukraine continues to maintain the second-largest military in Europe, after that of Russian Federation, when reserves and paramilitary personnel are taken into account. The country is home to 45.4 million people (including Crimea), 77.8% of whom are Ukrainians by ethnicity, and with a sizable minority of Russians (17%), as well as Romanians/Moldovans, Belarusians, Crimean Tatars, and Hungarians. Ukrainian is the official language of Ukraine; its alphabet is Cyrillic. Russian is also still widely spoken. The dominant religion in the country is Eastern Orthodoxy, which has strongly influenced Ukrainian architecture, literature and music.
            </p>
            <footer>From Wikipedia, the free encyclopedia: <cite title="Source Title">About Ukraine</cite></footer>
        </blockquote>
        <!-- Geography -->
        <blockquote ng-if="Geography">
            <p class="text-justify">
                &nbsp&nbspAt 603,628 square kilometres (233,062 sq mi) and with a coastline of 2,782 kilometres (1,729 mi), Ukraine is the world's 46th-largest country (after the Central African Republic, before Madagascar). It is the largest wholly European country and the second largest country in Europe (after the European part of Russia, before metropolitan France).[i][30] It lies between latitudes 44° and 53° N, and longitudes 22° and 41° E.</p>
            <p class="text-justify">
                &nbsp&nbspThe landscape of Ukraine consists mostly of fertile plains (or steppes) and plateaus, crossed by rivers such as the Dnieper (Dnipro), Seversky Donets, Dniester and the Southern Buh as they flow south into the Black Sea and the smaller Sea of Azov. To the southwest, the delta of the Danube forms the border with Romania. Its various regions have diverse geographic features ranging from the highlands to the lowlands. The country's only mountains are the Carpathian Mountains in the west, of which the highest is the Hora Hoverla at 2,061 metres (6,762 ft), and the Crimean Mountains on Crimea, in the extreme south along the coast.[169] However Ukraine also has a number of highland regions such as the Volyn-Podillia Upland (in the west) and the Near-Dnipro Upland (on the right bank of Dnieper); to the east there are the south-western spurs of the Central Russian Uplands over which runs the border with Russian Federation. Near the Sea of Azov can be found the Donets Ridge and the Near Azov Upland. The snow melt from the mountains feeds the rivers, and natural changes in altitude form a sudden drop in elevation and create many opportunities to form waterfalls.</p>
            <p class="text-justify">
                &nbsp&nbspSignificant natural resources in Ukraine include iron ore, coal, manganese, natural gas, oil, salt, sulphur, graphite, titanium, magnesium, kaolin, nickel, mercury, timber and an abundance of arable land. Despite this, the country faces a number of major environmental issues such as inadequate supplies of potable water; air and water pollution and deforestation, as well as radiation contamination in the north-east from the 1986 accident at the Chernobyl Nuclear Power Plant. Recycling toxic household waste is still in its infancy in Ukraine.
            </p>
            <footer>From Wikipedia, the free encyclopedia: <cite title="Source Title">Geography of Ukraine</cite></footer>
        </blockquote>
        <!-- Culture -->
        <blockquote ng-if="Culture">
            <p class="text-justify">
                &nbsp&nbspUkrainian customs are heavily influenced by Christianity, the dominant religion in the country.[285] Gender roles also tend to be more traditional, and grandparents play a greater role in bringing up children, than in the West.[325] The culture of Ukraine has also been influenced by its eastern and western neighbours, reflected in its architecture, music and art.</p>
            <p class="text-justify">
                &nbsp&nbspThe Communist era had quite a strong effect on the art and writing of Ukraine.[326] In 1932, Stalin made socialist realism state policy in the Soviet Union when he promulgated the decree "On the Reconstruction of Literary and Art Organisations". This greatly stifled creativity. During the 1980s glasnost (openness) was introduced and Soviet artists and writers again became free to express themselves as they wanted.</p>
            <p class="text-justify">
                &nbsp&nbspUkraine. These eggs were drawn on with wax to create a pattern; then, the dye was applied to give the eggs their pleasant colours, the dye did not affect the previously wax-coated parts of the egg. After the entire egg was dyed, the wax was removed leaving only the colourful pattern. This tradition is thousands of years old, and precedes the arrival of Christianity to Ukraine.[328] In the city of Kolomyia near the foothills of the Carpathian Mountains in 2000 was built the museum of Pysanka which won a nomination as the monument of modern Ukraine in 2007, part of the Seven Wonders of Ukraine action.
            </p>
            <footer>From Wikipedia, the free encyclopedia: <cite title="Source Title">Ukrainian culture</cite></footer>
        </blockquote>
    </div>
</div>
<!-- end of Main content -->
</div>
<div class="navbar navbar-default navbar-fixed-bottom">
    <div class="container">
     <p class="pull-left"><small><a href="#">Terms & Conditions</a> <br /> <a href="#">Privacy Policy</a></small></p>
     <p class="pull-right"><small><strong>© 2014-2015</strong> <br /> Created by: <em><a href="https://twitter.com/artemzinoviev" target="_blank">Artem Zinoviev</a></em></small></p>

    </div> <!-- container-->
</div> <!-- navbar navbar-default navbar-fixed-bottom" -->