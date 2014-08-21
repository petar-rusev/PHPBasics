/**
 * Created by Pesho on 8/20/14.
 */
var NextId=0;
function addLang(){

    NextId++;
    var newDiv=document.createElement("div");
    newDiv.setAttribute("id","inputLang"+NextId);
    newDiv.innerHTML="<input type=\"text\" name=\"langs[]\">"+
        "<select>" +
        "<option selected=\"true\" style=\"display:none;\">-Comprehension-</option>" +
        "<option value=\"beginner\">beginner</option>" +
        "<option value=\"advanced\">advanced</option>"+
        "<option value=\"intermediate\">intermediate</option>"+
        "</select>"+
        "<select>" +
        "<option selected=\"true\" style=\"display:none;\">-Reading-</option>" +
        "<option value=\"beginner\">beginner" +
        "<option value=\"advanced\">advanced</option>"+
        "<option value=\"intermediate\">intermediate</option>"+
        "</select>"+
        "<select>" +
        "<option selected=\"true\" style=\"display:none;\">-Writing-</option>" +
        "<option value=\"beginner\">beginner" +
        "<option value=\"advanced\">advanced</option>"+
        "<option value=\"intermediate\">intermediate</option>"+
        "</select>"
    ;
    document.getElementById('parent').appendChild(newDiv);

}
function removeLang(NextId){
    var inputLang=document.getElementById('inputLang'+NextId);
    document.getElementById('parent').removeChild(inputLang);
}
