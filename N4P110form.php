<html>
 <head>
  <title>Rating movie</title>
  <style>
    .txt-center {
        text-align: center;
    }
    .hide {
        display: none;
    }

    .clear {
        float: none;
        clear: both;
    }

    .rating {
        width: 90px;
        unicode-bidi: bidi-override;
        direction: rtl;
        text-align: center;
        position: relative;
    }

    .rating > label {
        float: right;
        display: inline;
        padding: 0;
        margin: 0;
        position: relative;
        width: 1.1em;
        cursor: pointer;
        color: #000;
    }

    .rating > label:hover,
    .rating > label:hover ~ label,
    .rating > input.radio-btn:checked ~ label {
        color: transparent;
    }

    .rating > label:hover:before,
    .rating > label:hover ~ label:before,
    .rating > input.radio-btn:checked ~ label:before,
    .rating > input.radio-btn:checked ~ label:before {
        content: "\2605";
        position: absolute;
        left: 0;
        color: #FFD700;
    }

    </style>
 </head>
 <body>
  <form action="N4P111formprocess.php" method="post">
   <table>
   <tr>
     <td>Rating</td>
     <td>
     <div class="rating">
        <input id="star5" name="star" type="radio" value="5" class="radio-btn hide" />
        <label for="star5">☆</label>
        <input id="star4" name="star" type="radio" value="4" class="radio-btn hide" />
        <label for="star4">☆</label>
        <input id="star3" name="star" type="radio" value="3" class="radio-btn hide" />
        <label for="star3">☆</label>
        <input id="star2" name="star" type="radio" value="2" class="radio-btn hide" />
        <label for="star2">☆</label>
        <input id="star1" name="star" type="radio" value="1" class="radio-btn hide" />
        <label for="star1">☆</label>
        <div class="clear"></div>
    </div>
     </td>
    </tr>   
    <tr>
     <td>Comments</td>
     <td><textarea id="comments" name="comments" rows="4" cols="50"></textarea></td>
    </tr>
    <tr>
     <td> </td>
     <td>
      <input type="checkbox" name="debug" checked="checked"/>
      Display Debug info
     </td>
    </tr><tr>
     <td colspan="2" style="text-align: center">
      <input type="submit" name="submit" value="Submit" />
     </td>
    </tr>
   </table>
  </form>
 </body>
</html>
