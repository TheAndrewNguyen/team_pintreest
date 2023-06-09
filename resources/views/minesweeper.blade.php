<x-app-layout>

<!doctype>
<html>
  <head>
    <title>💥</title>
    <meta http-equiv="content-type" content="text/html;charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="apple-mobile-web-app-capable" content="yes">
    <link rel="apple-touch-icon" href="icon-192.png" />

    <style type="text/css">
      body {
        font-family: AppleColorEmoji;
        font-size: 15px;
        text-align: center;
        /* padding: 20px 0; */
      }

      span, input, a, div, button {
        box-sizing: border-box;
      }

      .btn, .input {
        padding: 12px 15px;
        font-size: 0.65em;
        border-radius: 3px;
        font-family: 'Exo 2', sans-serif;
        color: #666;
        font-weight: bold;
        display: inline-block;
      }

      .btn {
        background: #f7f7f7;
        text-decoration: none;
        text-transform: uppercase;
        border: 0;
        cursor: pointer;
        margin-bottom: 10px;
        letter-spacing: 1px;
      }

      .flex {
        display: flex;
      }

      .flex-cell {
        flex: 1 1 auto;
      }

      .action-btn {
        margin-bottom: 10px;
        background-color: transparent;
        width: 100%;
        display: block;
        font-size: 1.2em;
        padding: 10px;
        border: 1px solid #eee;
        text-decoration: none;
        border-radius: 5px;
      }

      .action-btn:hover {
        background-color: #f4f4f4;
      }

      .action-btn .emoji {
        width: 20px;
        height: 20px;
      }

      input[type=radio] {
        margin: 0 5px 0 0;
      }

      input[type=number] {
        padding-right: 5px;
      }

      .input {
        border: 1px solid #e0e0e0;
      }

      .input-select {
        width: 100%;
        height: 40px;
        padding: 12px;
        font-size: 1em;
        margin-bottom: 10px;
        background: transparent;
      }

      .divider {
        align-self: center;
        flex: 0;
        padding: 0 10px;
        color: #999;
        font-size: 0.65em;
      }

      .prepend-input {
        padding: 7px 8px 6px 10px;
        margin: 5px 0;
        border-right: 1px solid #e0e0e0;
        line-height: 1;
        position: absolute;
      }

      .prepend-input + input {
        width: 100%;
        padding-left: 45px;
        margin-bottom: 10px;
      }

      code {
        display: none;
        margin-top: 10px;
        text-transform: none;
        background-color: #fff;
        padding: 2px 4px;
        max-width: 400px;
        text-align: left;
      }

      .cell .emoji {
        width: 100%;
      }

      .cell {
        /* disable hold to save image in iOS */
        -webkit-touch-callout: none;
        width: 25px;
        height: 25px;
        font-size: 20px;
        background-color: transparent;
        border: 0;
        display: inline-block;
        position: relative;
        padding: 2px 3px;
        vertical-align: middle;
        cursor: pointer;
      }

      .unmasked {
        cursor: default;
      }

      #map {
        white-space: nowrap;
      }

      .wrapper {
        padding: 10px;
        position: relative;
        -webkit-user-select: none;
        user-select: none;
        border-radius: 10px;
        margin-top: 10px;
        border: 5px solid #f4f4f4;
        display: inline-block;
        min-width: 250px;
      }

      .won .default-emoji,
      .lost .default-emoji {
        display: none;
      }

      .won #map,
      .lost #map {
        pointer-events: none;
      }

      .lost {
        box-shadow: 0 0 1px #f00;
      }

      .won {
        box-shadow: 0 0 1px #1a1;
      }

      .bar {
        margin: 10px -10px -10px;
        background-color: #f4f4f4;
      }

      .stat {
        width: 33.3%;
        font-size: 0.85em;
        padding: 8px 10px 5px;
        text-align: center;
      }

      .small-text {
        display: block;
        color: #999;
        margin-top: 5px;
        font-size: 0.7em;
        letter-spacing: 1px;
      }

      .settings {
        position: absolute;
        width: 40px;
        height: 40px;
        top: -20px;
        right: -20px;
        background-color: #f4f4f4;
        text-align: center;
        border-radius: 25px;
        padding: 2px 8px;
        border: 5px solid #fff;
        cursor: pointer;
        z-index: 1;
      }

      .settings .emoji {
        width: 15px;
        margin: 6px 0;
      }

      .settings-popup {
        margin-right: 10px;
        display: none;
        position: absolute;
      }

      .settings-popup button {
        width: 100%;
        margin: 0;
      }

      .settings-popup .flex {
        margin-bottom: 10px;
      }

      .show {
        display: block;
      }

      .settings-popup.show ~ * {
        visibility: hidden;
      }

      .stat,
      .link-to-github {
        font-family: "Exo 2", sans-serif;
      }

      .link-to-github {
        margin: 40px auto;
        display: block;
        font-size: 12px;
        color: #08c;
        text-decoration: none;
      }

      .feedback {
        font-size: 1px;
        width: 1px;
        height: 1;
        overflow: hidden;
        position: absolute;
        left: -1px;
        top: -1px;
      }
    </style>
  </head>
  <body>
    <div class="wrapper">
      <button type="button" class="settings js-settings" aria-haspopup="true" aria-expanded="false" aria-label="Settings"></button>
      <div class="js-settings-popup settings-popup">
        <div class="flex" style="visibility: hidden;">
          <label class="btn flex-cell" aria-label="Use Twitter Emoji"><input type="radio" name="emoji" id="twemoji" checked> Twemoji</label>
          <label class="btn flex-cell" aria-label="Use Native Emoji"><input type="radio" name="emoji" id="emoji"> Native emoji</label>
        </div>
        <div class="flex">
          <input id="cols" class="input flex-cell" type="number" value="10" min="1" max="500" aria-label="Columns">
          <div class="flex-cell divider">&times;</div>
          <input id="rows" class="input flex-cell" type="number" value="10" min="1" max="500" aria-label="Rows"><br>
        </div>
        <div class="prepend-input">🌰</div>
        <input id="bombs" class="input" type="number" value="10" min="1" max="2500" aria-label="Number of bombs">
        <select id="emojiset" class="input input-select" aria-label="Change emoji set" style="visibility:hidden;">
          <option value="🍃 🌰 🌳 ◻️">🍃 🌰 🌳</option>
        </select>
        <button class="js-popup-new-game btn" type="button">Save and restart game</button>
      </div>
      <button type="button" class="action-btn js-new-game" aria-label="New game">
        <span class="default-emoji"></span>
        <span id="result" class="result-emoji"></span>
        <span style="float:left;">Restart</span>
        
      </button>
      <div id="map" role="grid" aria-label="Mine field">
      </div>
      <div class="bar flex">
        <div class="stat flex-cell"><div id="bombs-left">0</div><span class="small-text">BOMBS</span></div>
        <div class="stat flex-cell"><div id="moves"></div><span class="small-text">MOVES</span></div>
        <div class="stat flex-cell"><div id="timer"></div><span class="small-text">TIME</span></div>
      </div>
    </div>
    <div aria-live="assertive" class="feedback"></div>

    <!--  https://github.com/twitter/twemoji -->

    <script type="text/javascript" src="./js/minesweeper/sw.js"></script>
    <script type="text/javascript" src="./js/minesweeper/twemoji.js"></script>

    <!-- Twemoji.js -->
    <script>
        /*! Copyright Twitter Inc. and other contributors. Licensed under MIT */
        var twemoji=function(){"use strict";var twemoji={base:(location.protocol==="https:"?"https:":"http:")+"//twemoji.maxcdn.com/",ext:".png",size:"36x36",className:"emoji",convert:{fromCodePoint:fromCodePoint,toCodePoint:toCodePoint},onerror:function onerror(){if(this.parentNode){this.parentNode.replaceChild(createText(this.alt),this)}},parse:parse,replace:replace,test:test},escaper={"&":"&amp;","<":"&lt;",">":"&gt;","'":"&#39;",'"':"&quot;"},re=/((?:\ud83c\udde8\ud83c\uddf3|\ud83c\uddfa\ud83c\uddf8|\ud83c\uddf7\ud83c\uddfa|\ud83c\uddf0\ud83c\uddf7|\ud83c\uddef\ud83c\uddf5|\ud83c\uddee\ud83c\uddf9|\ud83c\uddec\ud83c\udde7|\ud83c\uddeb\ud83c\uddf7|\ud83c\uddea\ud83c\uddf8|\ud83c\udde9\ud83c\uddea|\u0039\ufe0f?\u20e3|\u0038\ufe0f?\u20e3|\u0037\ufe0f?\u20e3|\u0036\ufe0f?\u20e3|\u0035\ufe0f?\u20e3|\u0034\ufe0f?\u20e3|\u0033\ufe0f?\u20e3|\u0032\ufe0f?\u20e3|\u0031\ufe0f?\u20e3|\u0030\ufe0f?\u20e3|\u0023\ufe0f?\u20e3|\ud83d\udeb3|\ud83d\udeb1|\ud83d\udeb0|\ud83d\udeaf|\ud83d\udeae|\ud83d\udea6|\ud83d\udea3|\ud83d\udea1|\ud83d\udea0|\ud83d\ude9f|\ud83d\ude9e|\ud83d\ude9d|\ud83d\ude9c|\ud83d\ude9b|\ud83d\ude98|\ud83d\ude96|\ud83d\ude94|\ud83d\ude90|\ud83d\ude8e|\ud83d\ude8d|\ud83d\ude8b|\ud83d\ude8a|\ud83d\ude88|\ud83d\ude86|\ud83d\ude82|\ud83d\ude81|\ud83d\ude36|\ud83d\ude34|\ud83d\ude2f|\ud83d\ude2e|\ud83d\ude2c|\ud83d\ude27|\ud83d\ude26|\ud83d\ude1f|\ud83d\ude1b|\ud83d\ude19|\ud83d\ude17|\ud83d\ude15|\ud83d\ude11|\ud83d\ude10|\ud83d\ude0e|\ud83d\ude08|\ud83d\ude07|\ud83d\ude00|\ud83d\udd67|\ud83d\udd66|\ud83d\udd65|\ud83d\udd64|\ud83d\udd63|\ud83d\udd62|\ud83d\udd61|\ud83d\udd60|\ud83d\udd5f|\ud83d\udd5e|\ud83d\udd5d|\ud83d\udd5c|\ud83d\udd2d|\ud83d\udd2c|\ud83d\udd15|\ud83d\udd09|\ud83d\udd08|\ud83d\udd07|\ud83d\udd06|\ud83d\udd05|\ud83d\udd04|\ud83d\udd02|\ud83d\udd01|\ud83d\udd00|\ud83d\udcf5|\ud83d\udcef|\ud83d\udced|\ud83d\udcec|\ud83d\udcb7|\ud83d\udcb6|\ud83d\udcad|\ud83d\udc6d|\ud83d\udc6c|\ud83d\udc65|\ud83d\udc2a|\ud83d\udc16|\ud83d\udc15|\ud83d\udc13|\ud83d\udc10|\ud83d\udc0f|\ud83d\udc0b|\ud83d\udc0a|\ud83d\udc09|\ud83d\udc08|\ud83d\udc07|\ud83d\udc06|\ud83d\udc05|\ud83d\udc04|\ud83d\udc03|\ud83d\udc02|\ud83d\udc01|\ud83d\udc00|\ud83c\udfe4|\ud83c\udfc9|\ud83c\udfc7|\ud83c\udf7c|\ud83c\udf50|\ud83c\udf4b|\ud83c\udf33|\ud83c\udf32|\ud83c\udf1e|\ud83c\udf1d|\ud83c\udf1c|\ud83c\udf1a|\ud83c\udf18|\ud83c\udccf|\ud83c\udd8e|\ud83c\udd91|\ud83c\udd92|\ud83c\udd93|\ud83c\udd94|\ud83c\udd95|\ud83c\udd96|\ud83c\udd97|\ud83c\udd98|\ud83c\udd99|\ud83c\udd9a|\ud83d\udc77|\ud83d\udec5|\ud83d\udec4|\ud83d\udec3|\ud83d\udec2|\ud83d\udec1|\ud83d\udebf|\ud83d\udeb8|\ud83d\udeb7|\ud83d\udeb5|\ud83c\ude01|\ud83c\ude32|\ud83c\ude33|\ud83c\ude34|\ud83c\ude35|\ud83c\ude36|\ud83c\ude38|\ud83c\ude39|\ud83c\ude3a|\ud83c\ude50|\ud83c\ude51|\ud83c\udf00|\ud83c\udf01|\ud83c\udf02|\ud83c\udf03|\ud83c\udf04|\ud83c\udf05|\ud83c\udf06|\ud83c\udf07|\ud83c\udf08|\ud83c\udf09|\ud83c\udf0a|\ud83c\udf0b|\ud83c\udf0c|\ud83c\udf0f|\ud83c\udf11|\ud83c\udf13|\ud83c\udf14|\ud83c\udf15|\ud83c\udf19|\ud83c\udf1b|\ud83c\udf1f|\ud83c\udf20|\ud83c\udf30|\ud83c\udf31|\ud83c\udf34|\ud83c\udf35|\ud83c\udf37|\ud83c\udf38|\ud83c\udf39|\ud83c\udf3a|\ud83c\udf3b|\ud83c\udf3c|\ud83c\udf3d|\ud83c\udf3e|\ud83c\udf3f|\ud83c\udf40|\ud83c\udf41|\ud83c\udf42|\ud83c\udf43|\ud83c\udf44|\ud83c\udf45|\ud83c\udf46|\ud83c\udf47|\ud83c\udf48|\ud83c\udf49|\ud83c\udf4a|\ud83c\udf4c|\ud83c\udf4d|\ud83c\udf4e|\ud83c\udf4f|\ud83c\udf51|\ud83c\udf52|\ud83c\udf53|\ud83c\udf54|\ud83c\udf55|\ud83c\udf56|\ud83c\udf57|\ud83c\udf58|\ud83c\udf59|\ud83c\udf5a|\ud83c\udf5b|\ud83c\udf5c|\ud83c\udf5d|\ud83c\udf5e|\ud83c\udf5f|\ud83c\udf60|\ud83c\udf61|\ud83c\udf62|\ud83c\udf63|\ud83c\udf64|\ud83c\udf65|\ud83c\udf66|\ud83c\udf67|\ud83c\udf68|\ud83c\udf69|\ud83c\udf6a|\ud83c\udf6b|\ud83c\udf6c|\ud83c\udf6d|\ud83c\udf6e|\ud83c\udf6f|\ud83c\udf70|\ud83c\udf71|\ud83c\udf72|\ud83c\udf73|\ud83c\udf74|\ud83c\udf75|\ud83c\udf76|\ud83c\udf77|\ud83c\udf78|\ud83c\udf79|\ud83c\udf7a|\ud83c\udf7b|\ud83c\udf80|\ud83c\udf81|\ud83c\udf82|\ud83c\udf83|\ud83c\udf84|\ud83c\udf85|\ud83c\udf86|\ud83c\udf87|\ud83c\udf88|\ud83c\udf89|\ud83c\udf8a|\ud83c\udf8b|\ud83c\udf8c|\ud83c\udf8d|\ud83c\udf8e|\ud83c\udf8f|\ud83c\udf90|\ud83c\udf91|\ud83c\udf92|\ud83c\udf93|\ud83c\udfa0|\ud83c\udfa1|\ud83c\udfa2|\ud83c\udfa3|\ud83c\udfa4|\ud83c\udfa5|\ud83c\udfa6|\ud83c\udfa7|\ud83c\udfa8|\ud83c\udfa9|\ud83c\udfaa|\ud83c\udfab|\ud83c\udfac|\ud83c\udfad|\ud83c\udfae|\ud83c\udfaf|\ud83c\udfb0|\ud83c\udfb1|\ud83c\udfb2|\ud83c\udfb3|\ud83c\udfb4|\ud83c\udfb5|\ud83c\udfb6|\ud83c\udfb7|\ud83c\udfb8|\ud83c\udfb9|\ud83c\udfba|\ud83c\udfbb|\ud83c\udfbc|\ud83c\udfbd|\ud83c\udfbe|\ud83c\udfbf|\ud83c\udfc0|\ud83c\udfc1|\ud83c\udfc2|\ud83c\udfc3|\ud83c\udfc4|\ud83c\udfc6|\ud83c\udfc8|\ud83c\udfca|\ud83c\udfe0|\ud83c\udfe1|\ud83c\udfe2|\ud83c\udfe3|\ud83c\udfe5|\ud83c\udfe6|\ud83c\udfe7|\ud83c\udfe8|\ud83c\udfe9|\ud83c\udfea|\ud83c\udfeb|\ud83c\udfec|\ud83c\udfed|\ud83c\udfee|\ud83c\udfef|\ud83c\udff0|\ud83d\udc0c|\ud83d\udc0d|\ud83d\udc0e|\ud83d\udc11|\ud83d\udc12|\ud83d\udc14|\ud83d\udc17|\ud83d\udc18|\ud83d\udc19|\ud83d\udc1a|\ud83d\udc1b|\ud83d\udc1c|\ud83d\udc1d|\ud83d\udc1e|\ud83d\udc1f|\ud83d\udc20|\ud83d\udc21|\ud83d\udc22|\ud83d\udc23|\ud83d\udc24|\ud83d\udc25|\ud83d\udc26|\ud83d\udc27|\ud83d\udc28|\ud83d\udc29|\ud83d\udc2b|\ud83d\udc2c|\ud83d\udc2d|\ud83d\udc2e|\ud83d\udc2f|\ud83d\udc30|\ud83d\udc31|\ud83d\udc32|\ud83d\udc33|\ud83d\udc34|\ud83d\udc35|\ud83d\udc36|\ud83d\udc37|\ud83d\udc38|\ud83d\udc39|\ud83d\udc3a|\ud83d\udc3b|\ud83d\udc3c|\ud83d\udc3d|\ud83d\udc3e|\ud83d\udc40|\ud83d\udc42|\ud83d\udc43|\ud83d\udc44|\ud83d\udc45|\ud83d\udc46|\ud83d\udc47|\ud83d\udc48|\ud83d\udc49|\ud83d\udc4a|\ud83d\udc4b|\ud83d\udc4c|\ud83d\udc4d|\ud83d\udc4e|\ud83d\udc4f|\ud83d\udc50|\ud83d\udc51|\ud83d\udc52|\ud83d\udc53|\ud83d\udc54|\ud83d\udc55|\ud83d\udc56|\ud83d\udc57|\ud83d\udc58|\ud83d\udc59|\ud83d\udc5a|\ud83d\udc5b|\ud83d\udc5c|\ud83d\udc5d|\ud83d\udc5e|\ud83d\udc5f|\ud83d\udc60|\ud83d\udc61|\ud83d\udc62|\ud83d\udc63|\ud83d\udc64|\ud83d\udc66|\ud83d\udc67|\ud83d\udc68|\ud83d\udc69|\ud83d\udc6a|\ud83d\udc6b|\ud83d\udc6e|\ud83d\udc6f|\ud83d\udc70|\ud83d\udc71|\ud83d\udc72|\ud83d\udc73|\ud83d\udc74|\ud83d\udc75|\ud83d\udc76|\ud83d\udeb4|\ud83d\udc78|\ud83d\udc79|\ud83d\udc7a|\ud83d\udc7b|\ud83d\udc7c|\ud83d\udc7d|\ud83d\udc7e|\ud83d\udc7f|\ud83d\udc80|\ud83d\udc81|\ud83d\udc82|\ud83d\udc83|\ud83d\udc84|\ud83d\udc85|\ud83d\udc86|\ud83d\udc87|\ud83d\udc88|\ud83d\udc89|\ud83d\udc8a|\ud83d\udc8b|\ud83d\udc8c|\ud83d\udc8d|\ud83d\udc8e|\ud83d\udc8f|\ud83d\udc90|\ud83d\udc91|\ud83d\udc92|\ud83d\udc93|\ud83d\udc94|\ud83d\udc95|\ud83d\udc96|\ud83d\udc97|\ud83d\udc98|\ud83d\udc99|\ud83d\udc9a|\ud83d\udc9b|\ud83d\udc9c|\ud83d\udc9d|\ud83d\udc9e|\ud83d\udc9f|\ud83d\udca0|\ud83d\udca1|\ud83d\udca2|\ud83d\udca3|\ud83d\udca4|\ud83d\udca5|\ud83d\udca6|\ud83d\udca7|\ud83d\udca8|\ud83d\udca9|\ud83d\udcaa|\ud83d\udcab|\ud83d\udcac|\ud83d\udcae|\ud83d\udcaf|\ud83d\udcb0|\ud83d\udcb1|\ud83d\udcb2|\ud83d\udcb3|\ud83d\udcb4|\ud83d\udcb5|\ud83d\udcb8|\ud83d\udcb9|\ud83d\udcba|\ud83d\udcbb|\ud83d\udcbc|\ud83d\udcbd|\ud83d\udcbe|\ud83d\udcbf|\ud83d\udcc0|\ud83d\udcc1|\ud83d\udcc2|\ud83d\udcc3|\ud83d\udcc4|\ud83d\udcc5|\ud83d\udcc6|\ud83d\udcc7|\ud83d\udcc8|\ud83d\udcc9|\ud83d\udcca|\ud83d\udccb|\ud83d\udccc|\ud83d\udccd|\ud83d\udcce|\ud83d\udccf|\ud83d\udcd0|\ud83d\udcd1|\ud83d\udcd2|\ud83d\udcd3|\ud83d\udcd4|\ud83d\udcd5|\ud83d\udcd6|\ud83d\udcd7|\ud83d\udcd8|\ud83d\udcd9|\ud83d\udcda|\ud83d\udcdb|\ud83d\udcdc|\ud83d\udcdd|\ud83d\udcde|\ud83d\udcdf|\ud83d\udce0|\ud83d\udce1|\ud83d\udce2|\ud83d\udce3|\ud83d\udce4|\ud83d\udce5|\ud83d\udce6|\ud83d\udce7|\ud83d\udce8|\ud83d\udce9|\ud83d\udcea|\ud83d\udceb|\ud83d\udcee|\ud83d\udcf0|\ud83d\udcf1|\ud83d\udcf2|\ud83d\udcf3|\ud83d\udcf4|\ud83d\udcf6|\ud83d\udcf7|\ud83d\udcf9|\ud83d\udcfa|\ud83d\udcfb|\ud83d\udcfc|\ud83d\udd03|\ud83d\udd0a|\ud83d\udd0b|\ud83d\udd0c|\ud83d\udd0d|\ud83d\udd0e|\ud83d\udd0f|\ud83d\udd10|\ud83d\udd11|\ud83d\udd12|\ud83d\udd13|\ud83d\udd14|\ud83d\udd16|\ud83d\udd17|\ud83d\udd18|\ud83d\udd19|\ud83d\udd1a|\ud83d\udd1b|\ud83d\udd1c|\ud83d\udd1d|\ud83d\udd1e|\ud83d\udd1f|\ud83d\udd20|\ud83d\udd21|\ud83d\udd22|\ud83d\udd23|\ud83d\udd24|\ud83d\udd25|\ud83d\udd26|\ud83d\udd27|\ud83d\udd28|\ud83d\udd29|\ud83d\udd2a|\ud83d\udd2b|\ud83d\udd2e|\ud83d\udd2f|\ud83d\udd30|\ud83d\udd31|\ud83d\udd32|\ud83d\udd33|\ud83d\udd34|\ud83d\udd35|\ud83d\udd36|\ud83d\udd37|\ud83d\udd38|\ud83d\udd39|\ud83d\udd3a|\ud83d\udd3b|\ud83d\udd3c|\ud83d\udd3d|\ud83d\udd50|\ud83d\udd51|\ud83d\udd52|\ud83d\udd53|\ud83d\udd54|\ud83d\udd55|\ud83d\udd56|\ud83d\udd57|\ud83d\udd58|\ud83d\udd59|\ud83d\udd5a|\ud83d\udd5b|\ud83d\uddfb|\ud83d\uddfc|\ud83d\uddfd|\ud83d\uddfe|\ud83d\uddff|\ud83d\ude01|\ud83d\ude02|\ud83d\ude03|\ud83d\ude04|\ud83d\ude05|\ud83d\ude06|\ud83d\ude09|\ud83d\ude0a|\ud83d\ude0b|\ud83d\ude0c|\ud83d\ude0d|\ud83d\ude0f|\ud83d\ude12|\ud83d\ude13|\ud83d\ude14|\ud83d\ude16|\ud83d\ude18|\ud83d\ude1a|\ud83d\ude1c|\ud83d\ude1d|\ud83d\ude1e|\ud83d\ude20|\ud83d\ude21|\ud83d\ude22|\ud83d\ude23|\ud83d\ude24|\ud83d\ude25|\ud83d\ude28|\ud83d\ude29|\ud83d\ude2a|\ud83d\ude2b|\ud83d\ude2d|\ud83d\ude30|\ud83d\ude31|\ud83d\ude32|\ud83d\ude33|\ud83d\ude35|\ud83d\ude37|\ud83d\ude38|\ud83d\ude39|\ud83d\ude3a|\ud83d\ude3b|\ud83d\ude3c|\ud83d\ude3d|\ud83d\ude3e|\ud83d\ude3f|\ud83d\ude40|\ud83d\ude45|\ud83d\ude46|\ud83d\ude47|\ud83d\ude48|\ud83d\ude49|\ud83d\ude4a|\ud83d\ude4b|\ud83d\ude4c|\ud83d\ude4d|\ud83d\ude4e|\ud83d\ude4f|\ud83d\ude80|\ud83d\ude83|\ud83d\ude84|\ud83d\ude85|\ud83d\ude87|\ud83d\ude89|\ud83d\ude8c|\ud83d\ude8f|\ud83d\ude91|\ud83d\ude92|\ud83d\ude93|\ud83d\ude95|\ud83d\ude97|\ud83d\ude99|\ud83d\ude9a|\ud83d\udea2|\ud83d\udea4|\ud83d\udea5|\ud83d\udea7|\ud83d\udea8|\ud83d\udea9|\ud83d\udeaa|\ud83d\udeab|\ud83d\udeac|\ud83d\udead|\ud83d\udeb2|\ud83d\udeb6|\ud83d\udeb9|\ud83d\udeba|\ud83d\udebb|\ud83d\udebc|\ud83d\udebd|\ud83d\udebe|\ud83d\udec0|\ud83c\udde6|\ud83c\udde7|\ud83c\udde8|\ud83c\udde9|\ud83c\uddea|\ud83c\uddeb|\ud83c\uddec|\ud83c\udded|\ud83c\uddee|\ud83c\uddef|\ud83c\uddf0|\ud83c\uddf1|\ud83c\uddf2|\ud83c\uddf3|\ud83c\uddf4|\ud83c\uddf5|\ud83c\uddf6|\ud83c\uddf7|\ud83c\uddf8|\ud83c\uddf9|\ud83c\uddfa|\ud83c\uddfb|\ud83c\uddfc|\ud83c\uddfd|\ud83c\uddfe|\ud83c\uddff|\ud83c\udf0d|\ud83c\udf0e|\ud83c\udf10|\ud83c\udf12|\ud83c\udf16|\ud83c\udf17|\ue50a|\u27b0|\u2797|\u2796|\u2795|\u2755|\u2754|\u2753|\u274e|\u274c|\u2728|\u270b|\u270a|\u2705|\u26ce|\u23f3|\u23f0|\u23ec|\u23eb|\u23ea|\u23e9|\u27bf|\u00a9|\u00ae)|(?:(?:\ud83c\udc04|\ud83c\udd70|\ud83c\udd71|\ud83c\udd7e|\ud83c\udd7f|\ud83c\ude02|\ud83c\ude1a|\ud83c\ude2f|\ud83c\ude37|\u3299|\u303d|\u3030|\u2b55|\u2b50|\u2b1c|\u2b1b|\u2b07|\u2b06|\u2b05|\u2935|\u2934|\u27a1|\u2764|\u2757|\u2747|\u2744|\u2734|\u2733|\u2716|\u2714|\u2712|\u270f|\u270c|\u2709|\u2708|\u2702|\u26fd|\u26fa|\u26f5|\u26f3|\u26f2|\u26ea|\u26d4|\u26c5|\u26c4|\u26be|\u26bd|\u26ab|\u26aa|\u26a1|\u26a0|\u2693|\u267f|\u267b|\u3297|\u2666|\u2665|\u2663|\u2660|\u2653|\u2652|\u2651|\u2650|\u264f|\u264e|\u264d|\u264c|\u264b|\u264a|\u2649|\u2648|\u263a|\u261d|\u2615|\u2614|\u2611|\u260e|\u2601|\u2600|\u25fe|\u25fd|\u25fc|\u25fb|\u25c0|\u25b6|\u25ab|\u25aa|\u24c2|\u231b|\u231a|\u21aa|\u21a9|\u2199|\u2198|\u2197|\u2196|\u2195|\u2194|\u2139|\u2122|\u2049|\u203c|\u2668)([\uFE0E\uFE0F]?)))/g,rescaper=/[&<>'"]/g,shouldntBeParsed=/IFRAME|NOFRAMES|NOSCRIPT|SCRIPT|SELECT|STYLE|TEXTAREA|[a-z]/,fromCharCode=String.fromCharCode;return twemoji;function createText(text){return document.createTextNode(text)}function escapeHTML(s){return s.replace(rescaper,replacer)}function defaultImageSrcGenerator(icon,options){return"".concat(options.base,options.size,"/",icon,options.ext)}function grabAllTextNodes(node,allText){var childNodes=node.childNodes,length=childNodes.length,subnode,nodeType;while(length--){subnode=childNodes[length];nodeType=subnode.nodeType;if(nodeType===3){allText.push(subnode)}else if(nodeType===1&&!shouldntBeParsed.test(subnode.nodeName)){grabAllTextNodes(subnode,allText)}}return allText}function grabTheRightIcon(icon,variant){return toCodePoint(variant==="️"?icon.slice(0,-1):icon.length===3&&icon.charAt(1)==="️"?icon.charAt(0)+icon.charAt(2):icon)}function parseNode(node,options){var allText=grabAllTextNodes(node,[]),length=allText.length,attrib,attrname,modified,fragment,subnode,text,match,i,index,img,alt,icon,variant,src;while(length--){modified=false;fragment=document.createDocumentFragment();subnode=allText[length];text=subnode.nodeValue;i=0;while(match=re.exec(text)){index=match.index;if(index!==i){fragment.appendChild(createText(text.slice(i,index)))}alt=match[0];icon=match[1];variant=match[2];i=index+alt.length;if(variant!=="︎"){src=options.callback(grabTheRightIcon(icon,variant),options,variant);if(src){img=new Image;img.onerror=options.onerror;img.setAttribute("draggable","false");attrib=options.attributes(icon,variant);for(attrname in attrib){if(attrib.hasOwnProperty(attrname)&&attrname.indexOf("on")!==0&&!img.hasAttribute(attrname)){img.setAttribute(attrname,attrib[attrname])}}img.className=options.className;img.alt=alt;img.src=src;modified=true;fragment.appendChild(img)}}if(!img)fragment.appendChild(createText(alt));img=null}if(modified){if(i<text.length){fragment.appendChild(createText(text.slice(i)))}subnode.parentNode.replaceChild(fragment,subnode)}}return node}function parseString(str,options){return replace(str,function(match,icon,variant){var ret=match,attrib,attrname,src;if(variant!=="︎"){src=options.callback(grabTheRightIcon(icon,variant),options,variant);if(src){ret="<img ".concat('class="',options.className,'" ','draggable="false" ','alt="',match,'"',' src="',src,'"');attrib=options.attributes(icon,variant);for(attrname in attrib){if(attrib.hasOwnProperty(attrname)&&attrname.indexOf("on")!==0&&ret.indexOf(" "+attrname+"=")===-1){ret=ret.concat(" ",attrname,'="',escapeHTML(attrib[attrname]),'"')}}ret=ret.concat(">")}}return ret})}function replacer(m){return escaper[m]}function returnNull(){return null}function toSizeSquaredAsset(value){return typeof value==="number"?value+"x"+value:value}function fromCodePoint(codepoint){var code=typeof codepoint==="string"?parseInt(codepoint,16):codepoint;if(code<65536){return fromCharCode(code)}code-=65536;return fromCharCode(55296+(code>>10),56320+(code&1023))}function parse(what,how){if(!how||typeof how==="function"){how={callback:how}}return(typeof what==="string"?parseString:parseNode)(what,{callback:how.callback||defaultImageSrcGenerator,attributes:typeof how.attributes==="function"?how.attributes:returnNull,base:typeof how.base==="string"?how.base:twemoji.base,ext:how.ext||twemoji.ext,size:how.folder||toSizeSquaredAsset(how.size||twemoji.size),className:how.className||twemoji.className,onerror:how.onerror||twemoji.onerror})}function replace(text,callback){return String(text).replace(re,callback)}function test(text){re.lastIndex=0;var result=re.test(text);re.lastIndex=0;return result}function toCodePoint(unicodeSurrogates,sep){var r=[],c=0,p=0,i=0;while(i<unicodeSurrogates.length){c=unicodeSurrogates.charCodeAt(i++);if(p){r.push((65536+(p-55296<<10)+(c-56320)).toString(16));p=0}else if(55296<=c&&c<=56319){p=c}else{r.push(c.toString(16))}}return r.join(sep||"-")}}();

    </script>

    <!-- game.js -->
    <script>
        /* global twemoji, alert, MouseEvent, game */
        const numbers = ['1️⃣', '2️⃣', '3️⃣', '4️⃣', '5️⃣', '6️⃣', '7️⃣', '8️⃣']
        const iDevise = navigator.platform.match(/^iP/)
        const feedback = document.querySelector('.feedback')

        var Game = function (cols, rows, number_of_bombs, set, usetwemoji) {
        this.number_of_cells = cols * rows
        this.map = document.getElementById('map')
        this.cols = Number(cols)
        this.rows = Number(rows)
        this.number_of_bombs = Number(number_of_bombs)
        this.rate = number_of_bombs / this.number_of_cells

        this.emojiset = set
        this.numbermoji = [this.emojiset[0]].concat(numbers)
        this.usetwemoji = usetwemoji || false

        this.init()
        }

        Game.prototype.init = function () {
        this.prepareEmoji()

        if (this.number_of_cells > 2500) { alert('too big, go away, have less than 2500 cells'); return false }
        if (this.number_of_cells <= this.number_of_bombs) { alert('more bombs than cells, can\'t do it'); return false }
        var that = this
        this.moveIt(true)
        this.map.innerHTML = ''
        var grid_data = this.bomb_array()

        function getIndex (x, y) {
            if (x > that.cols || x <= 0) return -1
            if (y > that.cols || y <= 0) return -1
            return that.cols * (y - 1 ) + x - 1
        }

        var row = document.createElement('div')
        row.setAttribute('role', 'row')
        grid_data.forEach(function (isBomb, i) {
            var cell = document.createElement('span')
            cell.setAttribute('role', 'gridcell')
            var mine = that.mine(isBomb)
            var x = Math.floor((i + 1) % that.cols) || that.cols
            var y = Math.ceil((i + 1) / that.cols)
            var neighbors_cords = [[x, y - 1], [x, y + 1], [x - 1, y - 1], [x - 1, y], [x - 1, y + 1], [x + 1, y - 1], [x + 1, y], [x + 1, y + 1]]
            if(!isBomb) {
            var neighbors = neighbors_cords.map(function (xy) { return grid_data[getIndex(xy[0], xy[1])] })
            mine.mine_count = neighbors.filter(function (neighbor_bomb) { return neighbor_bomb }).length
            }
            mine.classList.add('x' + x, 'y' + y)
            mine.neighbors = neighbors_cords.map(function (xy) { return `.x${xy[0]}.y${xy[1]}` })

            cell.appendChild(mine)
            row.appendChild(cell)
            if (x === that.cols)  {
            that.map.appendChild(row)
            row = document.createElement('div')
            row.setAttribute('role', 'row')
            }
        })

        this.resetMetadata()
        this.bindEvents()
        this.updateBombsLeft()
        }

        Game.prototype.bindEvents = function () {
        var that = this
        var cells = document.getElementsByClassName('cell')

        Array.prototype.forEach.call(cells, function (target) {
            // clicking on a cell and revealing cell
            target.addEventListener('click', function (evt) {
            if (!target.isMasked || target.isFlagged) return
            if (document.getElementsByClassName('unmasked').length === 0) {
                that.startTimer()

                if (target.isBomb) {
                that.restart(that.usetwemoji)
                var targetClasses = target.className.replace('unmasked', '')
                document.getElementsByClassName(targetClasses)[0].click()
                return
                }
            }
            if (evt.view) that.moveIt()

            target.reveal()
            that.updateFeedback(target.getAttribute('aria-label'))

            if (target.mine_count === 0 && !target.isBomb) {
                that.revealNeighbors(target)
            }
            that.game()
            })

            // double clicking on a cell and opening the cell and all 8 of its neighbors
            target.addEventListener('dblclick', function () {
            if (target.isFlagged) return
            that.moveIt()

            target.reveal()
            that.revealNeighbors(target)
            that.game()
            })

            // marking a cell as a potential bomb
            target.addEventListener('contextmenu', function (evt) {
            var emoji
            evt.preventDefault()
            if (!target.isMasked) { return }
            if (target.isFlagged) {
                target.setAttribute('aria-label','Field')
                that.updateFeedback('Unflagged as potential bomb')
                emoji = that.emojiset[3].cloneNode()
                target.isFlagged = false
            } else {
                target.setAttribute('aria-label', 'Flagged as potential bomb')
                that.updateFeedback('Flagged as potential bomb')
                emoji = that.emojiset[2].cloneNode()
                target.isFlagged = true
            }
            target.childNodes[0].remove()
            target.appendChild(emoji)
            that.updateBombsLeft()
            })

            // support to HOLD to mark bomb, works in Android by default
            if (iDevise) {
            target.addEventListener('touchstart', function (evt) {
                that.holding = setTimeout(function () {
                target.dispatchEvent(new Event('contextmenu'))
                }, 500)
            })

            target.addEventListener('touchend', function (evt) {
                clearTimeout(that.holding)
            })
            }
        })

        window.addEventListener('keydown', function (evt) {
            if (evt.key == 'r' || evt.which == 'R'.charCodeAt()) {
            that.restart(that.usetwemoji)
            }
        })
        }

        Game.prototype.game = function () {
        if (this.result) return
        var cells = document.getElementsByClassName('cell')
        var masked = Array.prototype.filter.call(cells, function (cell) {
            return cell.isMasked
        })
        var bombs = Array.prototype.filter.call(cells, function (cell) {
            return cell.isBomb && !cell.isMasked
        })

        if (bombs.length > 0) {
            Array.prototype.forEach.call(masked, function (cell) { cell.reveal() })
            this.result = 'lost'
            this.showMessage()
        } else if (masked.length === this.number_of_bombs) {
            Array.prototype.forEach.call(masked, function (cell) { cell.reveal(true) })
            this.result = 'won'
            this.showMessage()
        }
        }

        Game.prototype.restart = function (usetwemoji) {
        clearInterval(this.timer)
        this.result = false
        this.timer = false
        this.usetwemoji = usetwemoji
        this.init()
        }

        Game.prototype.resetMetadata = function () {
        document.getElementById('timer').textContent = '0.00'
        document.querySelector('.wrapper').classList.remove('won', 'lost')
        document.querySelector('.result-emoji').textContent = ''
        document.querySelector('.default-emoji').innerHTML = this.usetwemoji ? twemoji.parse('😀') : '😀'
        document.querySelector('.js-settings').innerHTML = this.usetwemoji ? twemoji.parse('🔧') : '🔧'
        }

        Game.prototype.startTimer = function () {
        if (this.timer) return
        this.startTime = new Date()
        this.timer = setInterval(function () {
            document.getElementById('timer').textContent = ((new Date() - game.startTime) / 1000).toFixed(2)
        }, 100)
        }

        Game.prototype.mine = function (bomb) {
        var that = this
        var base = document.createElement('button')
        base.type = 'button'
        base.setAttribute('aria-label', 'Field')
        base.className = 'cell'
        base.appendChild(this.emojiset[3].cloneNode())
        base.isMasked = true
        if (bomb) base.isBomb = true
        base.reveal = function (won) {
            var emoji = base.isBomb ? (won ? that.emojiset[2] : that.emojiset[1]) : that.numbermoji[base.mine_count]
            var text = base.isBomb ? (won ? "Bomb discovered" : "Boom!") : (base.mine_count === 0 ? "Empty field" : base.mine_count + " bombs nearby")
            this.childNodes[0].remove()
            this.setAttribute('aria-label', text)
            this.appendChild(emoji.cloneNode())
            this.isMasked = false
            this.classList.add('unmasked')
        }
        return base
        }

        Game.prototype.revealNeighbors = function (mine) {
        var neighbors = document.querySelectorAll(mine.neighbors)
        for(var i = 0; i < neighbors.length; i++) {
            if (neighbors[i].isMasked && !neighbors[i].isFlagged) {
            neighbors[i].reveal()

            if (neighbors[i].mine_count === 0 && !neighbors[i].isBomb) {
                this.revealNeighbors(neighbors[i])
            }
            }
        }
        }

        Game.prototype.prepareEmoji = function () {
        var that = this
        function makeEmojiElement (emoji) {
            var ele
            if(that.usetwemoji) {
            if (emoji.src) {
                ele = emoji
            } else {
                ele = document.createElement('img')
                ele.className = 'emoji'
                ele.setAttribute('aria-hidden', 'true')
                ele.src = twemoji.parse(emoji).match(/src=\"(.+)\">/)[1]
            }
            } else {
            ele = document.createTextNode(emoji.alt || emoji.data || emoji)
            }
            return ele
        }

        this.emojiset = this.emojiset.map(makeEmojiElement)
        this.numbermoji = this.numbermoji.map(makeEmojiElement)
        }

        Game.prototype.bomb_array = function () {
        var chance = Math.floor(this.rate * this.number_of_cells)
        var arr = []
        for (var i = 0; i < chance; i++) {
            arr.push(true)
        }
        for (var n = 0; n < (this.number_of_cells - chance); n++) {
            arr.push(false)
        }
        return this.shuffle(arr)
        }

        Game.prototype.shuffle = function (array) {
        var currentIndex = array.length, temporaryValue, randomIndex
        while (currentIndex !== 0) {
            randomIndex = Math.floor(Math.random() * currentIndex)
            currentIndex -= 1
            temporaryValue = array[currentIndex]
            array[currentIndex] = array[randomIndex]
            array[randomIndex] = temporaryValue
        }
        return array
        }

        Game.prototype.moveIt = function (zero) {
        zero ? this.moves = 0 : this.moves++
        document.getElementById('moves').textContent = this.moves
        }

        Game.prototype.updateBombsLeft = function () {
        var flagged = Array.prototype.filter.call(document.getElementsByClassName('cell'), function (target) { return target.isFlagged })
        document.getElementById('bombs-left').textContent = `${this.number_of_bombs - flagged.length}/${this.number_of_bombs}`
        }

        Game.prototype.updateFeedback = function (text) {
        feedback.textContent = text
        // Toggle period to force voiceover to read out the same content
        if (this.feedbackToggle) feedback.textContent += "."
        this.feedbackToggle = !this.feedbackToggle
        }

        Game.prototype.showMessage = function () {
        clearInterval(this.timer)
        var seconds = ((new Date() - this.startTime) / 1000).toFixed(2)
        var winner = this.result === 'won'
        var emoji = winner ? '😎' : '😵'
        this.updateFeedback(winner ? "Yay, you won!" : "Boom! you lost.")
        document.querySelector('.wrapper').classList.add(this.result)
        document.getElementById('timer').textContent = seconds
        document.getElementById('result').innerHTML = this.usetwemoji ? twemoji.parse(emoji) : emoji
        }

        // console documentation

        console.log('Use: `new Game(cols, rows, bombs, [emptyemoji, bombemoji, flagemoji, starteremoji], twemojiOrNot)` to start a new game with customizations.')
        console.log(' Eg: `game = new Game(10, 10, 10, ["🌱", "💥", "🚩", "◻️"], false)`')
        console.log(' Or: `game = new Game(16, 16, 30, ["🐣", "💣", "🚧", "◻️"], true)`')


    </script>

    <script>
      var emojiset = document.getElementById('emojiset').value.split(' ')
      var cols = document.getElementById('cols')
      var rows = document.getElementById('rows')
      var bombs = document.getElementById('bombs')

      game = new Game(cols.value, rows.value, bombs.value, emojiset, document.getElementById('twemoji').checked)

      document.querySelector('.js-new-game').addEventListener('click', restart)
      document.querySelector('.js-popup-new-game').addEventListener('click', restart)

      document.querySelector('.js-settings').addEventListener('click', function() {
        var list = document.querySelector('.js-settings-popup').classList
        list.contains('show') ? list.remove('show') : list.add('show')
        this.setAttribute('aria-expanded', list.contains('show'))
      })

      function restart () {
        clearInterval(game.timer)
        emojiset = document.getElementById('emojiset').value.split(' ')
        game = new Game(cols.value, rows.value, bombs.value, emojiset, document.getElementById('twemoji').checked)
        document.querySelector('.js-settings-popup').classList.remove('show')
        return false
      }
    </script>
    <script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','https://www.google-analytics.com/analytics.js','ga')

      ga('create', 'UA-21332781-19', 'auto')
      ga('send', 'pageview')
    </script>
    <link href="http://fonts.googleapis.com/css?family=Exo+2" rel="stylesheet" type="text/css">
  </body>
</html>


</x-app-layout>