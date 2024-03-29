<?php
include("header.htm");
?>

<div id="tabs">
<ul>
   <li><a href="#simpleCitation">Simple</a></li>
   <li><a href="#complexCitation">Complex</a></li>
</ul>
<div id="simpleCitation">
   <label for="title">Title</label><br />
   <input type="text" id="title" size="50" /><br />
   <label for="author">Author</label><small>  (DIY wikilinks required)</small><br />
   <input type="text" id="author" size="50" /><br />
   <label for="publisher">Publisher</label><br />
   <input type="text" id="publisher" size="50" value="Paizo Publishing, LLC" /><br />
   <label for="year">Year</label><br />
   <input type="text" id="year" size="50" /><br />
   <label for="isbn">ISBN</label><br />
   <input type="text" id="isbn" size="50" /><br />
   <button onclick="generateSimpleCitation();">Generate Template</button>
</div>

<div id="complexCitation">
   <label for="publicationTitle">Title</label><br /><input type="text" id="publicationTitle" size="50" /><br /><br />
   <label>Articles</label><br />
   <table border="1">
      <tr>
         <td width="290" align="left" valign="bottom">Title</td>
         <td width="250" align="left" valign="bottom">Author(s)</td>
         <td align="center">Start<br />Page</td>
         <td align="center">End<br />Page</td>
      </tr>
   </table>
   <div class="row"><input type="text" size="30" /><input type="text" size="30" /><input type="text" size="1" /><input type="text" size="1" /></div>
 
   <button id="addRow">Add an article</button><br />
   <label for="publisher">Publisher</label><br /><input type="text" id="publisher" size="50" value="Paizo Publishing, LLC" /><br />
 
   <label for="year">Year</label><br /><input type="text" id="year" size="50" /><br />
   <label for="isbn">ISBN</label><br /><input type="text" id="isbn" size="50" /><br />
   <button id="generate">Generate Template</button><br>
</div>
</div>
<!-- clippy.swf y u no work? (https://github.com/mojombo/clippy) -->
<object classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000" width="110" height="14" class="clippy" id="clippy">
   <param name="movie" value="assets/clippy.swf" />
   <param name="allowScriptAccess" value="always" />
   <param name="quality" value="high" />
   <param name="scale" value="noscale" />
   <param name="FlashVars" value="id=generatedCitationTemplate&copied=copied!&copyto=copy to clipboard" />
   <param name="bgcolor" value="#FFFFFF" />
   <param name="wmode" value="opaque" />
   <embed src="assets/clippy.swf" width="110" height="14" name="clippy" quality="high" allowscriptaccess="always" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer" flashvars="id=generatedCitationTemplate&copied=copied!&copyto=copy to clipboard" bgcolor="#FFFFFF" wmode="opaque" />
</object>
<div id="generatedCitationTemplate"></div>
<?php
include("footer.htm");
?>
