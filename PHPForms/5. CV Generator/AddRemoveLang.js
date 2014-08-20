/**
 * Created by Pesho on 8/20/14.
 */
function addInput() {
nextId++;
var inputDiv = document.createElement("div");
inputDiv.setAttribute("id", "num" + nextId);
inputDiv.innerHTML =
    "<input type='text' name=/> " +
        "<a href=\"javascript:removeElement('num" + nextId
        "</a>" + "<br/>";
document.getElementById('parent').appendChild(inputDiv);
}
