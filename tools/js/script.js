/* Author: 

*/

function generateSimpleCitation() {
   var content = "<pre>"+
                 "{{Cite book\n"+
                 "| title = [["+$("#simpleCitation #title").val()+"]]\n"+
                 "| author = "+$("#simpleCitation #author").val()+"\n"+
                 "| publisher = [["+$("#simpleCitation #publisher").val()+"]]\n"+
                 "| year = "+$("#simpleCitation #year").val()+"\n"+
                 "| ISBN = "+$("#simpleCitation #isbn").val()+"\n"+
                 "| pages = {{{1}}}\n"+
                 "}}\n"+
                 "&lt;noinclude&gt;[[Category:Citation templates|{{SUBPAGENAME}}]]&lt;/noinclude&gt;"
                 "</pre>";
   $("#generatedCitationTemplate").html(content);
}

$(document).ready(function(){
   $("#complexCitation button#addRow").click(function(event){
      $(".row:last").after("<div class='row'><input type='text' size='30' /><input type='text' size='30' /><input type='text' size='1' /><input type='text' size='1' /></div>"); 
   });

   $("#complexCitation button#generate").click(function(event){
      var citation="&lt;includeonly&gt;{{Cite article\n| author = ";
      $("#complexCitation div.row").each(function(){
         if ($(this).children().first().val()!=$("div.row").last().children().first().val()) {
            citation=citation+"{{#ifexpr: {{{1}}}<";
            citation=citation+parseInt(parseInt($(this).children().first().next().next().next().val())+1);
            citation=citation+" | ";
            citation=citation+$(this).children().first().next().val();
            citation=citation+" |\n";
         }
         else {
            citation=citation+$(this).children().first().next().val();
         }
      });
      $("#complexCitation div.row").each(function(){
         if ($(this).children().first().val()!=$("#complexCitation div.row").last().children().first().val()) {
            citation=citation+"}}";
         }
      });
      citation=citation+"\n";
      citation=citation+"| year = ";
      citation=citation+$("#complexCitation #year").val();
      citation=citation+"\n| article = ";
      $("#complexCitation div.row").each(function(){
         if ($(this).children().first().val()!=$("#complexCitation div.row").last().children().first().val()) {
            citation=citation+"{{#ifexpr: {{{1}}}<";
            citation=citation+parseInt(parseInt($(this).children().first().next().next().next().val())+1);
            citation=citation+" | ";
            citation=citation+$(this).children().first().val();
            citation=citation+" |\n";
         }
         else {
            citation=citation+$(this).children().first().val();
         }
      });
      $("#complexCitation div.row").each(function(){
         if ($(this).children().first().val()!=$("#complexCitation div.row").last().children().first().val()) {
            citation=citation+"}}";
         }
      });
      citation=citation+"\n";
      citation=citation+"| title = [[";
      citation=citation+$("#complexCitation #publicationTitle").val();
      citation=citation+"]]\n";
      citation=citation+"| publisher = [[";
      citation=citation+$("#complexCitation #publisher").val();
      citation=citation+"]]\n";
      citation=citation+"| ISBN = ";
      citation=citation+$("#complexCitation #isbn").val();
      citation=citation+"\n";
      citation=citation+"| pages = {{{1}}}\n";
      citation=citation+"| display = {{#if: {{{2|}}} | {{{2}}} | }}\n";
      citation=citation+"}}&lt;/includeonly&gt;&lt;noinclude&gt;{{Esoteric}}\n\n";

      $("#complexCitation div.row").each(function(){
         citation=citation+"{{Cite book/";
         citation=citation+$("#complexCitation #publicationTitle").val();
         citation=citation+"|";
         citation=citation+$(this).children().first().next().next().val();
         citation=citation+"|";
         citation=citation+$(this).children().first().next().next().val();
         citation=citation+"-";
         citation=citation+$(this).children().first().next().next().next().val();
         citation=citation+"}}\n\n";
      });
      citation=citation+"[[Category:Citation templates|";
      citation=citation+$("#complexCitation #publicationTitle").val();
      citation=citation+"]]&lt;/noinclude&gt;";
      $("#generatedCitationTemplate").html("<pre>"+citation+"</pre>");
   });
});

















